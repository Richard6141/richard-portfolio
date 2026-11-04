<?php
// ============================================================
// data/services/creation-site-wordpress.php · Pilier service « Création de
// site WordPress ». Site vitrine, boutique WooCommerce, blog, alternative Wix,
// thèmes, extensions, sécurité, sauvegardes, performance, SEO, maintenance et
// formation à l’autonomie. Tarifs : seuls ceux de la fiche de faits, le reste
// sur devis. Chiffres externes relevés le 04/11/2026 (W3Techs, wordpress.org,
// documentation WordPress, Google, web.dev, SGG Bénin, CNIL).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Création de site WordPress : un site que vous gérez vous-même, vitrine, boutique WooCommerce ou blog',
    'title'   => 'Création de site WordPress au Bénin | Richard SALANON',
    'meta'    => 'Création de site WordPress : vitrine, boutique WooCommerce ou blog, avec sécurité, sauvegardes, SEO et formation pour le gérer seul. Devis sous 24 h.',
    'en_bref' => 'Richard SALANON crée des sites WordPress : site vitrine, boutique WooCommerce ou blog, avec choix du thème et des extensions, réglages de sécurité, sauvegardes, performance et bases du référencement. Il forme aussi les équipes ou les particuliers qui veulent gérer leur site seuls, et peut conseiller Wix quand c’est plus adapté. Le service vise les PME, artisans, écoles, ONG et indépendants d’Afrique francophone et d’Europe. Un site vitrine se livre en 1 à 3 semaines, à partir de 300 000 FCFA ; une boutique WooCommerce ou un projet WordPress plus large se chiffre sur devis.',
    'publie'  => '2026-11-08',
    'maj'     => '2026-11-08',
    'famille' => 'Sites et boutiques',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => '1 à 3 semaines pour un site vitrine ; boutique et projets étendus annoncés sur le devis'],
        ['l' => 'Pour qui', 'v' => 'PME, artisans, cabinets, écoles, ONG, indépendants et commerçants, en Afrique francophone et en Europe'],
        ['l' => 'Livrables', 'v' => 'Site WordPress, thème et extensions choisis, sécurité, sauvegardes, SEO de base ; formation sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvre la création d’un site WordPress, et que ne recouvre-t-elle pas ?',
            'paragraphes' => [
                'Pour une création de site web au Bénin comme ailleurs en Afrique francophone, WordPress est l’un des choix les plus courants. WordPress est un système de gestion de contenu : un logiciel installé sur un hébergement qui vous permet de créer des pages, d’écrire des articles, de changer une photo ou un prix sans toucher au code. Créer un site WordPress, c’est choisir la bonne version du logiciel, un thème, un nombre limité d’extensions, puis construire les pages, les relier à vos outils et vous apprendre à vous en servir. Le résultat peut être un site vitrine, une boutique WooCommerce, un blog ou un mélange des trois.',
                'La prestation couvre l’installation et la configuration sur votre hébergement, le thème et la mise en page adaptée au téléphone, les pages et les menus, le formulaire de contact, les liens WhatsApp, les réglages de sécurité et de sauvegarde, la vitesse, les bases du référencement et une formation à l’administration. Si vous choisissez une boutique, elle ajoute le catalogue, le panier, le paiement et la livraison avec WooCommerce.',
                'Elle ne couvre pas tout. La rédaction de centaines de pages, la prise de photos, la publicité payante et l’avis juridique sur vos conditions de vente restent des travaux à part, nommés dans le devis lorsqu’ils sont demandés. Un projet qui n’est pas un site, comme un logiciel métier ou un espace client complexe, relève plutôt d’une <a href="/services/application-web-sur-mesure">application web sur mesure</a>.',
                'Ce service est voisin de deux autres pages. Le <a href="/services/site-vitrine-professionnel">site vitrine professionnel</a> décrit la prestation quelle que soit la technologie, et le <a href="/services/site-e-commerce">site e-commerce</a> détaille les passerelles de paiement et la livraison. Cette page-ci répond à une autre question : pourquoi et comment bâtir le tout sur WordPress, et comment en rester maître.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s’adresse un site WordPress, et à quels signes voit-on que le besoin est mûr ?',
            'intro' => 'WordPress convient surtout à ceux qui veulent publier et corriger eux-mêmes, sans appeler un développeur à chaque virgule. Voici les situations qui déclenchent la demande.',
            'items' => [
                ['titre' => 'Vous voulez modifier votre site vous-même', 'texte' => 'Un prix qui change, une actualité, un horaire de vacances : si ces mises à jour reviennent chaque semaine, un éditeur visuel connu de beaucoup de monde vous fait gagner du temps et de l’argent.'],
                ['titre' => 'Vous publiez régulièrement', 'texte' => 'Une école qui annonce ses inscriptions, un cabinet qui commente l’actualité, une association qui rend compte de ses actions : le blog est l’outil naturel de WordPress, avec catégories, auteurs et dates.'],
                ['titre' => 'Vous voulez vendre quelques dizaines ou centaines de produits', 'texte' => 'WooCommerce est l’extension de boutique de WordPress. Elle suffit à beaucoup de commerçants qui veulent un catalogue, un panier et des paiements sans abonnement mensuel à une plateforme.'],
                ['titre' => 'Votre site actuel dépend de la bonne volonté d’une seule personne', 'texte' => 'Le neveu qui l’a construit ne répond plus, l’ancien prestataire détient le domaine. WordPress est un logiciel répandu : un autre professionnel peut le reprendre, à condition que vous déteniez les accès.'],
                ['titre' => 'Vous hésitez entre WordPress et Wix', 'texte' => 'Les deux répondent à un vrai besoin. La section dédiée plus bas compare l’autonomie, la propriété du site, la maintenance et le coût récurrent pour vous aider à choisir sans parti pris.'],
                ['titre' => 'Votre équipe veut apprendre à gérer le site', 'texte' => 'Une personne de l’équipe, ou vous-même, souhaite devenir autonome. Une formation peut être ajoutée au devis ; elle se déroule alors sur votre propre site, pas sur un exemple abstrait.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule la création d’un site WordPress, du cadrage à l’après-livraison ?',
            'items' => [
                ['titre' => 'Premier échange et devis', 'texte' => 'Vous décrivez votre activité, vos clients et ce que le site doit provoquer : appels, messages, demandes de devis, commandes. Vous recevez un devis gratuit, qui précise le périmètre, la technologie et le délai. Rien ne commence sans votre accord.', 'duree' => 'Réponse sous 24 heures'],
                ['titre' => 'Cadrage et choix technique', 'texte' => 'On décide si WordPress est le bon outil, ou si Wix ou un développement sur mesure conviennent mieux. On fixe les pages, les fonctions, le thème envisagé et la liste des extensions indispensables. Chaque extension doit avoir une raison écrite.', 'duree' => 'Environ 1 jour d’effort'],
                ['titre' => 'Installation sécurisée', 'texte' => 'Installation sur l’hébergement retenu au devis (conseil : à votre nom), certificat HTTPS, comptes d’administration nominatifs, suppression des éléments de démonstration, réglage des sauvegardes. Ce socle est posé avant tout contenu.', 'duree' => 'Moins d’une journée d’effort'],
                ['titre' => 'Maquette, thème et contenus', 'texte' => 'Le thème est paramétré à vos couleurs, les pages sont maquettées pour le téléphone d’abord. En parallèle, vous fournissez logo, photos et informations ; les textes sont rédigés ou réécrits à partir de votre matière.', 'duree' => 'Quelques jours, en parallèle des contenus'],
                ['titre' => 'Construction et intégration', 'texte' => 'Les pages sont montées, le formulaire relié à votre boîte de réception, les liens WhatsApp et téléphone testés depuis un vrai téléphone. Pour une boutique, le catalogue, les paiements et la livraison s’ajoutent ici.', 'duree' => 'Dans le délai du devis ; boutique : délai sur devis'],
                ['titre' => 'Performance, référencement et tests', 'texte' => 'Images compressées, extensions inutiles retirées, titres et descriptions rédigés, plan du site, Search Console. Le formulaire est testé de bout en bout et l’affichage vérifié sur plusieurs écrans.', 'duree' => 'Environ 1 jour d’effort'],
                ['titre' => 'Mise en ligne et formation éventuelle', 'texte' => 'Le site passe sur son domaine. Si une formation est prévue au devis, une séance de prise en main vous apprend à modifier une page, publier un article, ajouter une photo et lancer une mise à jour en sécurité.', 'duree' => 'Environ 1 jour d’effort'],
                ['titre' => 'Après la livraison', 'texte' => 'Les premières semaines révèlent souvent des détails à corriger ; ce qui est couvert se précise sur le devis. Ensuite, mises à jour, sauvegardes et évolutions se font par votre équipe formée ou dans le cadre d’un contrat de <a href="/services/maintenance-support">maintenance et support</a>, sur devis.', 'duree' => 'Les semaines suivantes'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que recevez-vous concrètement à la livraison d’un site WordPress ?',
            'legende' => 'Livrables d’un site WordPress standard. Le devis précise ce qui est inclus, en option ou hors périmètre.',
            'entetes' => ['Livrable', 'Contenu', 'Ce que vous en faites ensuite'],
            'lignes'  => [
                ['Le site WordPress', 'Pages, menus, thème paramétré, affichage adapté au téléphone, formulaire de contact, liens WhatsApp et téléphone', 'Vous présentez votre activité et recevez des demandes à toute heure'],
                ['Thème et extensions choisis', 'Un thème léger et une courte liste d’extensions, chacune justifiée par écrit', 'Vous savez ce que chaque élément fait et pourquoi il est là'],
                ['Boutique WooCommerce, si elle est commandée', 'Catalogue, variantes, panier, paiement, livraison, stock, notifications', 'Vous vendez et suivez vos commandes depuis le même espace'],
                ['Blog et catégories', 'Articles, catégories, auteurs, modèle de page d’article lisible sur mobile', 'Vous publiez vous-même, sans développeur'],
                ['Sécurité de base', 'Comptes nominatifs, mots de passe forts, mises à jour à jour, limitation des tentatives de connexion', 'Vous réduisez les risques les plus courants'],
                ['Sauvegardes', 'Copie de la base de données et des fichiers, planifiée, stockée hors du serveur du site', 'Vous pouvez restaurer le site après une erreur ou une panne'],
                ['Bases du référencement', 'Titres et descriptions, adresses lisibles, textes alternatifs, plan du site, déclaration à la Search Console', 'Google comprend et présente correctement vos pages'],
                ['Accès et propriété', 'Le devis précise qui est titulaire du domaine et de l’hébergement ; le conseil est de les détenir vous-même, avec les identifiants d’administration', 'Vous gardez la liberté de changer de prestataire'],
                ['Formation (sur devis)', 'Séance sur votre propre site : modifier, publier, mettre à jour, sauvegarder', 'Vous gérez le quotidien sans dépendre de personne'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'WordPress ou Wix : lequel choisir pour votre site ?',
            'options'  => ['WordPress (installé sur votre hébergement)', 'Wix (service hébergé)'],
            'criteres' => [
                ['critere' => 'Propriété et hébergement', 'valeurs' => ['Vous choisissez l’hébergement et détenez les fichiers et la base de données', 'Le site vit sur la plateforme de l’éditeur, selon ses conditions']],
                ['critere' => 'Mise en route', 'valeurs' => ['Installation, thème et extensions à régler ; demande un prestataire ou un peu de formation', 'Éditeur tout-en-un, rapide à prendre en main pour un petit site']],
                ['critere' => 'Maintenance', 'valeurs' => ['Mises à jour du cœur, du thème et des extensions à suivre, avec sauvegardes', 'Assurée par la plateforme, avec moins de réglages à votre charge']],
                ['critere' => 'Évolution (boutique, blog, réservation)', 'valeurs' => ['Très large par extensions et développement, au risque d’alourdir le site', 'Limitée aux fonctions et applications proposées par l’éditeur']],
                ['critere' => 'Paiements mobile money d’Afrique de l’Ouest', 'valeurs' => ['Extensions de passerelles disponibles avec WooCommerce, à vérifier à chaque projet', 'À vérifier auprès de la passerelle et de l’éditeur avant de s’engager']],
                ['critere' => 'Coût récurrent', 'valeurs' => ['Hébergement, nom de domaine et éventuelles extensions payantes', 'Abonnement à l’éditeur, selon le plan choisi, dont le tarif est à relire sur son site']],
                ['critere' => 'Changer de prestataire plus tard', 'valeurs' => ['Facile si vous détenez les accès : un autre professionnel peut reprendre le site', 'Plus contraint : le site reste lié à la plateforme']],
            ],
            'verdict'  => 'Wix peut suffire pour un petit site qui change peu et dont personne ne veut gérer la technique. WordPress se justifie quand vous voulez la propriété du site, un blog sérieux, une boutique ou une évolution libre. Si Wix correspond mieux à votre besoin, le cadrage permet d’en discuter.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'WordPress est-il vraiment le choix le plus répandu ?',
            'paragraphes' => [
                'Selon <a href="https://w3techs.com/technologies/details/cm-wordpress">W3Techs</a>, page consultée le 4 novembre 2026, WordPress est utilisé par 39,5 % de tous les sites web, et par 58,2 % de ceux dont le système de gestion de contenu est identifié. Cette diffusion a deux conséquences concrètes : beaucoup de professionnels savent le reprendre, et beaucoup de robots cherchent ses failles. Un site WordPress ne se livre donc jamais sans plan de mise à jour.',
                'Sur le répertoire officiel, la page de <a href="https://wordpress.org/plugins/woocommerce/">WooCommerce</a>, consultée le 4 novembre 2026, indique la version 11.2.1, plus de 7 millions d’installations actives et WordPress 7.0 au minimum. La <a href="https://wordpress.org/download/releases/">page des versions</a> de WordPress affichait le même jour la 7.1.4 du 28 octobre 2026, en précisant que seule la dernière version de la série 7.1 est maintenue. Ces numéros changent vite : on les relit le jour du projet, pas sur une page ancienne.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles technologies et quels choix techniques sous le capot ?',
            'legende' => 'Repères de choix. WordPress est l’un des outils web que pratique Richard SALANON, à côté de Laravel, PHP, Vue, React et Node.js.',
            'entetes' => ['Élément', 'Choix habituel', 'Raison'],
            'lignes'  => [
                ['Logiciel', 'WordPress dans sa version maintenue', 'Les versions anciennes ne reçoivent plus de correctifs de sécurité'],
                ['Thème', 'Un thème léger, avec peu de fonctions inutiles', 'Un thème « tout-en-un » alourdit les pages et complique la maintenance'],
                ['Boutique', 'WooCommerce, avec la passerelle adaptée à vos clients', 'Large écosystème, extensions de paiement publiées pour WordPress'],
                ['Extensions', 'Une liste courte : sécurité, sauvegarde, formulaires, cache, référencement', 'Chaque extension est une dépendance à suivre et une faille potentielle'],
                ['Développement spécifique', 'PHP pour une fonction manquante ; Laravel si le besoin dépasse un site', 'Mieux vaut un peu de code propre que cinq extensions bricolées'],
                ['Automatisation', 'n8n ou Make pour relier formulaire, tableur, messagerie ou WhatsApp', 'Évite un développement lourd pour des enchaînements simples'],
                ['Interfaces interactives', 'Vue ou React quand un composant l’exige', 'À réserver aux besoins réels, pas à l’effet de style'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment choisir un thème et des extensions sans alourdir le site ?',
            'paragraphes' => [
                'Un thème se choisit sur quatre critères : légèreté, mise à jour régulière, lisibilité sur téléphone et clarté de l’éditeur de pages. Un thème qui promet cinquante démonstrations installe souvent des dizaines de scripts dont vous n’avez pas besoin. Il se teste sur un téléphone d’entrée de gamme, pas seulement sur un ordinateur rapide.',
                'Une extension se choisit sur sa date de dernière mise à jour, la compatibilité annoncée avec la version actuelle de WordPress, la réputation de son éditeur et son utilité réelle. Avant d’installer, on se demande si la fonction existe déjà dans le thème, si un peu de code suffirait, et qui la mettra à jour dans deux ans. Les extensions inutilisées sont supprimées, pas seulement désactivées.',
                'Les extensions « gratuites » d’origine inconnue, téléchargées hors du répertoire officiel, sont à éviter. Une version piratée d’un thème payant embarque trop souvent un code malveillant. Si une extension payante est nécessaire, la licence est à votre nom, avec une date de renouvellement dans votre agenda.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment sécuriser un site WordPress au quotidien ?',
            'intro' => 'La sécurité n’est pas un produit qu’on installe une fois. C’est une série d’habitudes simples, mises en place à la livraison puis tenues dans la durée.',
            'items' => [
                ['titre' => 'Tenir le logiciel à jour', 'texte' => 'Le cœur de WordPress, le thème et les extensions reçoivent des correctifs. Un site qui n’est jamais mis à jour accumule des failles connues. Les mises à jour se font sur une copie quand le site est important, puis sur le site réel, avec une sauvegarde juste avant.'],
                ['titre' => 'Un compte par personne, des droits limités', 'texte' => 'Chacun a son identifiant et le rôle strictement nécessaire : un rédacteur n’a pas besoin d’installer des extensions. Le compte « admin » par défaut est supprimé, les comptes des anciens collaborateurs aussi.'],
                ['titre' => 'Des mots de passe longs et uniques', 'texte' => 'Un gestionnaire de mots de passe évite la réutilisation d’un même mot sur plusieurs services. Quand l’option existe, la double authentification protège l’administration même si un mot de passe fuit.'],
                ['titre' => 'Limiter les tentatives de connexion', 'texte' => 'Des robots essaient des milliers de mots de passe sur l’adresse de connexion. Une extension de sécurité limite les essais et signale les comportements anormaux.'],
                ['titre' => 'Réduire la surface d’attaque', 'texte' => 'Moins d’extensions, moins de thèmes inutilisés, pas de fichiers de test oubliés sur le serveur. Ce que l’on n’installe pas ne peut pas être piraté.'],
                ['titre' => 'Chiffrer et surveiller', 'texte' => 'HTTPS partout, alertes de l’hébergeur, relevé périodique des utilisateurs et des extensions. Une surveillance légère suffit à repérer une anomalie avant que vos clients ne la voient.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi et comment sauvegarder un site WordPress ?',
            'paragraphes' => [
                'Une sauvegarde est la seule assurance contre une erreur de manipulation, une mise à jour qui casse une page, un piratage ou la panne d’un hébergeur. Selon la <a href="https://developer.wordpress.org/advanced-administration/security/backup/">documentation officielle de WordPress</a>, consultée le 4 novembre 2026, il faut sauvegarder à la fois la base de données et les fichiers pour pouvoir restaurer un site complet, et toujours avant une mise à jour.',
                'La même documentation suggère une fréquence adaptée à l’activité : hebdomadaire pour un petit site qui change peu, quotidienne pour un site très actif comme une boutique, et la conservation de plusieurs copies récentes dans des endroits différents. Pour une boutique qui reçoit des commandes chaque jour, la sauvegarde de la base de données est la plus précieuse, car elle contient les commandes et les clients.',
                'Une sauvegarde qui n’a jamais été restaurée n’est qu’une hypothèse. Le conseil est donc de tester une restauration sur une copie du site et de noter la procédure par écrit. Les copies sont stockées hors du serveur du site : une sauvegarde rangée sur le serveur qui tombe en panne tombe avec lui.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment garder un site WordPress rapide sur un téléphone ?',
            'paragraphes' => [
                'La vitesse dépend surtout des images, du thème, du nombre de scripts et de l’hébergement. La page <a href="https://web.dev/articles/vitals">Core Web Vitals de web.dev</a>, dont la dernière mise à jour date du 31 octobre 2024, fixe trois seuils mesurés sur 75 % des chargements : affichage du plus grand élément en 2,5 secondes au plus, réponse aux interactions en 200 millisecondes au plus, décalage visuel de 0,1 au plus.',
                'Pour s’en approcher, chaque image est redimensionnée et compressée, chargée seulement quand elle devient visible. Le thème reste sobre, les extensions lourdes sont évitées, un cache est configuré et les polices sont limitées. Les mesures se font sur un téléphone et une connexion moyenne, pas sur un ordinateur de bureau relié à la fibre.',
                'La performance se dégrade avec le temps : chaque extension ajoutée, chaque image envoyée en pleine résolution, chaque script publicitaire pèse. D’où l’intérêt d’une revue trimestrielle courte, à faire par vous après la formation ou par un prestataire de maintenance.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que couvrent les bases du référencement d’un site WordPress ?',
            'paragraphes' => [
                'WordPress n’apporte aucune première position, mais il permet de poser proprement les bases. Le <a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide">guide de démarrage SEO de Google</a>, consulté le 4 novembre 2026, recommande un titre unique, clair et concis pour chaque page, ainsi qu’un texte alternatif court et descriptif pour les images.',
                'Concrètement, chaque page reçoit un titre et une description rédigés pour la recherche qui lui correspond, une adresse lisible, un seul titre principal et des intertitres qui structurent le texte. Le plan du site est généré, déclaré dans la Search Console, et les pages inutiles sont écartées de l’index. Les liens entre pages guident le visiteur vers la page de contact.',
                'Pour viser des recherches concurrentielles, il faut un travail suivi, décrit sur la page <a href="/services/referencement-naturel-seo">référencement naturel</a>. La <a href="/formation-seo-visibilite-google">formation SEO et visibilité sur Google</a> apprend à une personne de l’équipe à rédiger et à optimiser elle-même ses pages. Si votre clientèle est locale, la page <a href="/services/seo-local-google-business">SEO local et Google Business</a> complète le dispositif.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quand ajouter WooCommerce à un site WordPress ?',
            'paragraphes' => [
                'WooCommerce transforme un site WordPress en boutique : catalogue, variantes, panier, paiement, livraison, stock et commandes. Il convient quand vous voulez la propriété de votre boutique, une évolution libre et des passerelles de paiement locales. Il demande en contrepartie un suivi régulier des mises à jour et des sauvegardes plus fréquentes.',
                'Le choix des moyens de paiement précède celui des extensions : mobile money, carte, paiement à la livraison selon vos clients. Cette partie, avec les frais et les pays couverts, est détaillée sur la page <a href="/services/site-e-commerce">site e-commerce</a> et dans le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a>. Si vous n’avez que quelques produits, un simple catalogue avec bouton de commande WhatsApp peut suffire au départ.',
                'Une boutique engage aussi des obligations légales et une organisation : qui prépare les commandes, qui livre, qui répond aux clients. WooCommerce fournit les outils, pas le service. Le devis détaille ce qui est inclus et ce qui reste à votre charge.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un site WordPress selon le secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Cabinet comptable ou juridique, Cotonou ou Lyon', 'probleme' => 'Les prospects vérifient le sérieux du cabinet avant d’appeler et les articles de conseil sont publiés sur les réseaux, sans archive.', 'solution' => 'Site vitrine WordPress avec une page par domaine d’expertise, un blog de conseils, un formulaire qui demande la nature du dossier et une page équipe avec les qualifications réelles.'],
                ['secteur' => 'École ou centre de formation, Abidjan ou Bruxelles', 'probleme' => 'Les parents posent les mêmes questions sur les frais, le calendrier et les inscriptions, et l’équipe veut publier sans développeur.', 'solution' => 'Pages par cycle, actualités publiées par l’équipe, formulaire de préinscription et formation de deux personnes à l’administration.'],
                ['secteur' => 'Commerce de mode ou cosmétiques, Dakar ou Paris', 'probleme' => 'Les ventes passent par Instagram et WhatsApp, avec des tailles à confirmer et des paiements vérifiés à la main.', 'solution' => 'Boutique WooCommerce avec variantes, stock et paiement adapté à la clientèle, plus un bouton de commande WhatsApp pour les hésitants.'],
                ['secteur' => 'Artisan ou BTP, Lomé ou Liège', 'probleme' => 'Les clients cherchent le métier suivi de la ville et ne trouvent que des confrères.', 'solution' => 'Site vitrine rapide, pages de services rédigées avec les mots des clients, galerie de chantiers réels et fiche Google reliée au site.'],
                ['secteur' => 'ONG ou association, Ouagadougou ou Genève', 'probleme' => 'Les bailleurs attendent des rapports et des actualités, et l’équipe change souvent.', 'solution' => 'Blog de projets, rapports téléchargeables, comptes limités par rôle et guide d’administration écrit pour les nouveaux arrivants.'],
                ['secteur' => 'Consultant ou formateur indépendant, Montréal ou Genève', 'probleme' => 'Le profil LinkedIn ne présente pas une offre précise et ne se laisse pas trouver par des inconnus.', 'solution' => 'Site de quelques pages, une offre par page, blog pour montrer l’expertise, page de réservation d’un appel et mentions légales du pays.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la création d’un site WordPress, et qu’est-ce qui fait varier le prix ?',
            'intro'      => 'Le tarif de départ publié pour un site vitrine est de 300 000 FCFA, et celui d’une landing page de 150 000 FCFA. Le montant exact dépend du projet et figure sur un devis détaillé, gratuit, remis avant tout démarrage. Une boutique WooCommerce, un blog étendu ou une reprise de site se chiffrent sur devis. Pour payer, un client de Cotonou peut utiliser son téléphone (MTN ou Moov), un client installé en Europe ou au Canada la carte, PayPal ou le virement ; les espèces restent possibles. Le calendrier de règlement est fixé avant signature.',
            'items'      => [
                ['offre' => 'Site vitrine WordPress', 'prix' => 'À partir de 300 000 FCFA', 'inclus' => ['Tarif de départ d’un site vitrine, contenu précisé sur devis', 'Délai : 1 à 3 semaines']],
                ['offre' => 'Landing page', 'prix' => 'À partir de 150 000 FCFA', 'inclus' => ['Une page unique, un objectif de conversion', 'Voir la page <a href="/services/landing-page-haute-conversion">landing page haute conversion</a>']],
                ['offre' => 'Boutique WooCommerce', 'prix' => 'Sur devis', 'inclus' => ['Catalogue, variantes, panier, paiement, livraison', 'Passerelle choisie selon vos clients', 'Contenu et délai précisés sur devis']],
                ['offre' => 'Blog, refonte ou reprise d’un site existant', 'prix' => 'Sur devis', 'inclus' => ['Audit du site actuel, nettoyage, migration', 'Conservation des adresses déjà référencées', 'Voir la page <a href="/services/refonte-migration-de-site">refonte et migration de site</a>']],
                ['offre' => 'Formation à la gestion de son site', 'prix' => 'Sur devis', 'inclus' => ['Séance individuelle ou d’équipe, sur votre propre site', 'Format et durée précisés sur le devis']],
                ['offre' => 'Maintenance et support', 'prix' => 'Sur devis', 'inclus' => ['Mises à jour, sauvegardes, corrections', 'Voir la page <a href="/services/maintenance-support">maintenance et support</a>']],
            ],
            'variations' => [
                'Le nombre de pages et de modèles de page différents.',
                'La rédaction : reprendre des textes existants demande moins de temps que rédiger à partir de notes.',
                'Les langues du site, chacune demandant ses propres textes, adresses et titres.',
                'Les fonctions ajoutées : boutique, réservation, espace membre, galerie, multi-utilisateurs.',
                'Les extensions payantes, dont la licence est à votre nom et à renouveler.',
                'L’hébergement et le nom de domaine, payés directement à leurs fournisseurs et renouvelables chaque année.',
                'L’urgence : un délai plus court que l’habituel suppose de réorganiser le planning.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Agence web à Cotonou ou consultant indépendant : que choisir ?',
            'paragraphes' => [
                'Qui cherche une création de site web à Cotonou tape souvent « agence web » ou « agence digitale », par habitude. Le mot recouvre pourtant deux façons de travailler. Une agence réunit plusieurs profils (design, développement, rédaction, publicité) et peut mener plusieurs chantiers en parallèle. Un consultant indépendant vous met en relation directe avec la personne qui construit le site et signe le devis.',
                'Richard SALANON est consultant indépendant, installé à Cotonou, et co-fondateur d’<a href="https://audyxa.com">Audyxa</a>, cabinet de formation et de transformation digitale. Il ne prétend pas être une grande agence. Pour un site vitrine, une boutique WooCommerce ou un blog, ce format suffit généralement, et l’interlocuteur est le même du devis à la livraison.',
                'Pour un très gros chantier (plusieurs sites, campagne publicitaire, équipe créative dédiée), une agence plus structurée peut être mieux adaptée. Dans tous les cas, posez les mêmes questions : qui est titulaire du domaine et de l’hébergement, quels accès vous recevez, qui assure la maintenance, et ce qui est écrit sur le devis. Le cadrage permet de dire honnêtement si votre projet relève de ce format.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on apprendre à gérer son site WordPress soi-même ?',
            'paragraphes' => [
                'Oui, et c’est l’un des intérêts de WordPress. La formation se déroule sur votre site réel, avec vos pages et vos produits, ce qui évite la perte d’information entre un exemple théorique et la pratique. Elle s’adresse à un particulier, à un indépendant ou à plusieurs membres d’une équipe, sur place ou à distance.',
                'Le contenu type tient en quelques gestes : modifier une page, publier un article, ajouter une image compressée, gérer le menu, répondre aux messages du formulaire, lancer une mise à jour en sécurité, faire et restaurer une sauvegarde. Pour une boutique, s’y ajoutent l’ajout d’un produit, le suivi d’une commande, un remboursement et une mise à jour de stock.',
                'Un conseil utile : tenez un petit guide écrit avec les identifiants, les dates de renouvellement et les gestes à éviter. Pour aller plus loin, la <a href="/formation-developpement-web">formation au développement web</a> et la page <a href="/services/formation-en-entreprise">formation en entreprise</a> décrivent les parcours pour les équipes. Richard SALANON est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>, cabinet de formation et de transformation digitale.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer un site WordPress, et comment les éviter ?',
            'intro' => 'Ces erreurs reviennent d’un projet à l’autre. Elles se règlent presque toutes au cadrage.',
            'items' => [
                ['titre' => 'Empiler les extensions', 'texte' => 'Chaque extension ajoutée pour un détail ralentit le site et ouvre une faille potentielle. On choisit peu, on documente, on supprime ce qui ne sert plus.'],
                ['titre' => 'Choisir un thème pour sa démonstration', 'texte' => 'Une démonstration spectaculaire cache souvent un thème lourd. Le thème se juge sur son poids, sa mise à jour et la lisibilité sur un téléphone ordinaire.'],
                ['titre' => 'Ne jamais mettre à jour', 'texte' => 'Un site abandonné depuis des années devient une cible. Un rendez-vous trimestriel, avec sauvegarde avant, évite la plupart des mauvaises surprises.'],
                ['titre' => 'Oublier de tester la restauration', 'texte' => 'Une sauvegarde jamais restaurée peut être vide ou incomplète. Testez-la une fois et gardez la procédure par écrit.'],
                ['titre' => 'Laisser le domaine ou l’hébergement au prestataire', 'texte' => 'Le titulaire du nom de domaine en est le détenteur. Il vaut mieux que ce soit votre entreprise ou vous-même, avec les identifiants en votre possession ; faites-le préciser sur le devis.'],
                ['titre' => 'Installer des thèmes ou extensions piratés', 'texte' => 'Une copie gratuite d’un produit payant est une porte d’entrée classique pour un code malveillant. Les extensions s’installent depuis une source officielle ou celle de l’éditeur.'],
                ['titre' => 'Négliger les images', 'texte' => 'Une photo envoyée en pleine résolution ralentit une page sur un forfait mobile. Chaque image est redimensionnée et compressée avant envoi.'],
                ['titre' => 'Choisir WordPress par habitude', 'texte' => 'Pour un site de trois pages qui ne change jamais, un service hébergé comme Wix ou un site statique peut être plus simple. Le choix de l’outil suit le besoin.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel piège coûte le plus cher après la livraison ?',
            'texte' => 'Ne posséder ni les accès, ni le domaine, ni une sauvegarde récente. Demandez, avant de signer, qui sera titulaire du nom de domaine et de l’hébergement, et que les identifiants de l’administration, une sauvegarde récente et la liste des extensions avec leurs licences vous soient remis. Sans ces éléments, changer de prestataire ou récupérer un site piraté devient long et coûteux.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte local : mobile, données personnelles, facturation, langue ?',
            'paragraphes' => [
                'Le site se visite surtout sur un téléphone, parfois avec un forfait limité : d’où des images compressées, un thème sobre et des tests sur un appareil d’entrée de gamme. Le lien WhatsApp et le numéro cliquable comptent autant que le formulaire, car beaucoup de clients préfèrent écrire.',
                'Un formulaire de contact collecte des données personnelles. Au Bénin, leur protection relève de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>, publiée par le Secrétariat général du gouvernement. En Europe, le RGPD s’applique aussi à une entreprise établie hors de l’Union qui offre des biens ou des services à des personnes qui s’y trouvent : la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">CNIL</a>, qui publie le texte, relève dans ses considérants 23 et 24 que la simple accessibilité d’un site ne suffit pas, mais que la langue, la monnaie ou la mention de clients dans l’Union peuvent révéler cette intention.',
                'En pratique : ne collecter que les champs utiles, expliquer qui reçoit les messages et combien de temps ils sont gardés, et ne déposer de traceurs que s’ils sont nécessaires ou consentis. Les mentions légales et la politique de confidentialité sont remplies avec des informations exactes du pays de l’entreprise. Ces éléments ne remplacent pas l’avis d’un juriste, notamment pour une boutique.',
                'La facturation d’une boutique, les moyens de paiement et la livraison varient d’un pays à l’autre ; ils sont réglés au cadrage. Pour la langue, le français suffit souvent, et une version anglaise relue se justifie quand la clientèle l’exige. Une traduction automatique jamais relue fait plus de tort qu’une seule langue soignée.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres relevés aujourd’hui sur WordPress faut-il retenir ?',
            'items' => [
                ['valeur' => '39,5 %', 'libelle' => 'Part de tous les sites web qui utilisent WordPress, selon W3Techs le 4 novembre 2026', 'source' => 'W3Techs', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress'],
                ['valeur' => '58,2 %', 'libelle' => 'Part des sites dont le système de gestion de contenu est identifié qui utilisent WordPress, selon W3Techs le 4 novembre 2026', 'source' => 'W3Techs', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress'],
                ['valeur' => '7.1.4', 'libelle' => 'Dernière version de WordPress affichée sur la page des versions officielles le 4 novembre 2026, publiée le 28 octobre 2026', 'source' => 'WordPress.org, versions', 'url' => 'https://wordpress.org/download/releases/'],
                ['valeur' => '7 millions et plus', 'libelle' => 'Installations actives de WooCommerce, version 11.2.1, relevées sur le répertoire officiel le 4 novembre 2026', 'source' => 'WordPress.org, WooCommerce', 'url' => 'https://wordpress.org/plugins/woocommerce/'],
                ['valeur' => '2,5 s', 'libelle' => 'Seuil recommandé pour l’affichage du plus grand élément de la page, mesuré au 75e percentile', 'source' => 'web.dev, Core Web Vitals', 'url' => 'https://web.dev/articles/vitals'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre site WordPress à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                'Il compte plus de six ans d’expérience et a travaillé dans quinze pays, dont le Bénin, la Côte d’Ivoire, le Sénégal, la France, la Belgique, la Suisse et le Canada. Formé à EPITECH (2022), il a créé <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Il exerce comme consultant indépendant, pas comme une grande agence : vous parlez à la personne qui construit votre site et signe les livrables.',
                'Sa façon de travailler tient en quelques engagements. Une réponse sous 24 heures. Un devis gratuit, clair, avant tout démarrage. Un choix de technologie expliqué au cadrage, avec la possibilité d’en discuter les alternatives. Une formation possible, sur devis, pour que vous restiez autonome. Pour son parcours, voir la page <a href="/a-propos/">à propos</a> et la présentation de <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer votre site WordPress ?',
            'texte' => 'WordPress est un bon choix quand vous voulez posséder votre site, publier vous-même et le faire évoluer. Il demande en échange des mises à jour, des sauvegardes testées et peu d’extensions. Choisissez l’outil après avoir défini le besoin, faites préciser au devis qui détient les accès et formez au moins une personne de votre équipe.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous un site WordPress que vous pouvez gérer vous-même ?',
            'texte'  => 'Décrivez votre activité, vos clients et ce que le site doit produire : vous recevez une réponse sous 24 heures, puis un devis gratuit avec le périmètre, le délai et le prix.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien coûte la création d’un site WordPress ?', 'r' => 'Le tarif de départ publié pour un site vitrine est de 300 000 FCFA, et celui d’une landing page de 150 000 FCFA. Le montant exact dépend du nombre de pages, de la rédaction, des langues et des fonctions, et figure sur un devis gratuit. Une boutique WooCommerce, un blog étendu ou une reprise de site se chiffrent sur devis.'],
        ['q' => 'Combien de temps faut-il pour créer un site WordPress ?', 'r' => 'Un site vitrine se livre en 1 à 3 semaines, selon le nombre de pages et la rapidité avec laquelle vous fournissez logo, photos et informations. Pour une boutique WooCommerce ou un projet plus étendu, le délai est annoncé sur le devis après le cadrage.'],
        ['q' => 'WordPress ou Wix : que choisir ?', 'r' => 'Wix peut suffire pour un petit site qui change peu et dont personne ne veut gérer la technique. WordPress se justifie quand vous voulez détenir les fichiers, publier un vrai blog, ouvrir une boutique ou faire évoluer librement le site. Si Wix correspond mieux à votre besoin, le cadrage permet d’en discuter.'],
        ['q' => 'Pourrai-je gérer mon site WordPress moi-même ?', 'r' => 'Oui. Une formation, chiffrée sur devis, se déroule sur votre propre site : modifier une page, publier un article, ajouter des images, lancer une mise à jour. Elle peut viser vous-même ou une personne de votre équipe.'],
        ['q' => 'Créez-vous aussi des boutiques WooCommerce ?', 'r' => 'Oui, WooCommerce est l’extension de boutique de WordPress. Elle ajoute catalogue, variantes, panier, paiement, livraison et stock. Les passerelles de paiement, leurs frais et les obligations légales sont détaillés sur la page <a href="/services/site-e-commerce">site e-commerce</a>. Le prix est établi sur devis.'],
        ['q' => 'WordPress est-il sécurisé ?', 'r' => 'Le logiciel reçoit des correctifs, mais la sécurité dépend de vos habitudes : mises à jour régulières, peu d’extensions, comptes nominatifs, mots de passe forts, sauvegardes testées. WordPress étant très répandu, les robots le visent davantage : un site abandonné est une cible.'],
        ['q' => 'À qui appartiennent le site, le domaine et l’hébergement ?', 'r' => 'Le devis précise qui est titulaire du nom de domaine et de l’hébergement. Le conseil, avec n’importe quel prestataire, est de les détenir vous-même et de garder les identifiants d’administration, ce qui permet de changer de prestataire sans perdre votre adresse.'],
        ['q' => 'Que se passe-t-il après la mise en ligne ?', 'r' => 'Les premières semaines révèlent souvent des détails à ajuster ; ce que couvre la livraison se précise sur le devis. Ensuite, les mises à jour, sauvegardes et évolutions se font par votre équipe formée ou dans le cadre d’un contrat de <a href="/services/maintenance-support">maintenance et support</a>, sur devis. Le domaine et l’hébergement se renouvellent chaque année.'],
        ['q' => 'Mon site sera-t-il visible sur Google ?', 'r' => 'Les bases du référencement sont posées à la création : titres et descriptions uniques, adresses lisibles, textes alternatifs, plan du site, Search Console. Aucune position ne peut être promise à une date donnée. Pour viser des recherches concurrentielles, une prestation de <a href="/services/referencement-naturel-seo">référencement naturel</a> prend le relais.'],
        ['q' => 'Pouvez-vous reprendre ou refaire un site WordPress existant ?', 'r' => 'Oui, après un audit : état des mises à jour, extensions, vitesse, sécurité. Selon le cas, on nettoie, on migre ou on refait en conservant les adresses déjà référencées. La page <a href="/services/refonte-migration-de-site">refonte et migration de site</a> décrit la démarche.'],
        ['q' => 'Faites-vous de la création de site web au Bénin ?', 'r' => 'Oui. Richard SALANON est basé à Cotonou et crée des sites WordPress pour des entreprises du Bénin, du reste de l’Afrique francophone et d’Europe. Le devis est gratuit et le prix de départ d’un site vitrine est de 300 000 FCFA, le montant exact étant fixé sur devis.'],
        ['q' => 'Proposez-vous la création de site web à Cotonou, sur place ?', 'r' => 'Les échanges peuvent avoir lieu à Cotonou ou à distance, selon votre besoin et ce qui figure sur le devis. Le travail technique se fait à distance sans difficulté ; le déplacement éventuel se précise au cadrage.'],
        ['q' => 'Y a-t-il une agence digitale à Cotonou qui crée des sites WordPress ?', 'r' => 'Il existe des agences et des indépendants à Cotonou. Richard SALANON travaille en indépendant et co-fonde Audyxa, cabinet de formation et de transformation digitale. Comparez les devis sur les mêmes points : périmètre, délai, titulaire du domaine, maintenance et formation.'],
        ['q' => 'Agence web à Cotonou ou consultant indépendant : quelle différence ?', 'r' => 'Une agence réunit plusieurs profils et convient aux gros chantiers. Un consultant indépendant vous donne un interlocuteur unique, du devis à la livraison. Pour un site vitrine, une boutique ou un blog, ce second format suffit souvent ; le cadrage dit honnêtement si votre projet dépasse ce cadre.'],
        ['q' => 'Êtes-vous une agence web ?', 'r' => 'Non, Richard SALANON est consultant indépendant basé à Cotonou et co-fondateur d’Audyxa. Vous traitez directement avec la personne qui construit le site. Si votre projet exige une équipe plus large, le cadrage le dit et propose des options.'],
        ['q' => 'Travaillez-vous avec des clients en Europe et au Canada ?', 'r' => 'Oui. Les missions se mènent à distance ou sur place selon le pays. Les mentions légales et la politique de confidentialité sont adaptées au pays de l’entreprise, et le règlement peut se faire par virement, carte bancaire ou PayPal.'],
        ['q' => 'Quels moyens de paiement acceptez-vous ?', 'r' => 'Cinq moyens existent : Mobile Money avec MTN ou Moov, carte bancaire, PayPal, virement et espèces. Le calendrier de règlement est précisé sur le devis, avant que vous le signiez.'],
    ],

    'sources' => [
        ['titre' => 'W3Techs, part de marché de WordPress parmi les systèmes de gestion de contenu', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress', 'date' => '2026-11-04'],
        ['titre' => 'WordPress.org, page des versions de WordPress', 'url' => 'https://wordpress.org/download/releases/', 'date' => '2026-11-04'],
        ['titre' => 'WordPress.org, extension WooCommerce (version, installations, prérequis)', 'url' => 'https://wordpress.org/plugins/woocommerce/', 'date' => '2026-11-04'],
        ['titre' => 'WordPress, documentation officielle sur les sauvegardes', 'url' => 'https://developer.wordpress.org/advanced-administration/security/backup/', 'date' => '2026-11-04'],
        ['titre' => 'Google Search Central, guide de démarrage en référencement', 'url' => 'https://developers.google.com/search/docs/fundamentals/seo-starter-guide', 'date' => '2026-11-04'],
        ['titre' => 'web.dev, les signaux Web essentiels (Core Web Vitals)', 'url' => 'https://web.dev/articles/vitals', 'date' => '2026-11-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-11-04'],
        ['titre' => 'CNIL, le règlement général sur la protection des données (RGPD), considérants 23 et 24', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-11-04'],
    ],

    'liens' => [
        'services'    => ['site-vitrine-professionnel', 'site-e-commerce', 'maintenance-support', 'referencement-naturel-seo', 'refonte-migration-de-site', 'formation-en-entreprise'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
