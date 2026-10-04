<?php
// ============================================================
// data/services/site-vitrine-professionnel.php · Pilier service « Site
// vitrine professionnel » (vague 1A). Reprend la fiche en base (tarif de
// départ, délais, livrables) et la fiche de faits ; chiffres externes
// relevés sur les pages officielles le 03/10/2026.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Création de site vitrine professionnel : être trouvé, inspirer confiance, recevoir des demandes',
    'title'   => 'Création de site vitrine professionnel | Richard SALANON',
    'meta'    => 'Votre site vitrine professionnel est livré en 1 à 3 semaines : pages, textes, SEO de base, domaine, hébergement, formulaire et WhatsApp, dès 300 000 FCFA.',
    'en_bref' => 'Un site vitrine professionnel présente votre activité en quatre à six pages le plus souvent : design sur mesure lisible sur téléphone, textes rédigés ou réécrits, bases du référencement, nom de domaine, hébergement, formulaire de contact et bouton WhatsApp, avec une formation pour le mettre à jour vous-même. Il s\'adresse aux PME, artisans, cabinets, écoles, ONG et indépendants d\'Afrique francophone, d\'Europe et du Canada. Comptez 1 à 3 semaines selon le nombre de pages et la disponibilité de vos contenus, à partir de 300 000 FCFA, le montant exact étant fixé sur devis.',
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'Sites et boutiques',
    'matrice' => true,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => '1 à 3 semaines selon le nombre de pages et les contenus'],
        ['l' => 'Pour qui', 'v' => 'PME, artisans, cabinets, écoles, ONG et indépendants'],
        ['l' => 'Livrables', 'v' => 'Site responsive, textes, SEO de base, domaine, hébergement, formulaire, WhatsApp, formation'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvre la création d\'un site vitrine, et que ne recouvre-t-elle pas ?',
            'paragraphes' => [
                'Un site vitrine est l\'adresse officielle de votre entreprise sur Internet. Il dit qui vous êtes, ce que vous faites, pour qui, où, à quel prix ou selon quelles conditions, et comment vous joindre. C\'est souvent la première chose que consulte un prospect qui a reçu votre numéro par un ami, vu votre camion sur un chantier ou tapé votre métier dans Google. Son rôle n\'est pas de vendre en ligne : il doit rassurer, répondre aux questions courantes et transformer une visite en appel, en message WhatsApp ou en demande de devis.',
                'La prestation couvre tout ce qu\'il faut pour qu\'un site de ce type existe et serve : la structure des pages, un design sur mesure qui s\'affiche correctement sur téléphone, tablette et ordinateur, la rédaction ou la réécriture des textes à partir de vos informations, les bases techniques du référencement, le nom de domaine, l\'hébergement, un formulaire de contact, des liens directs vers WhatsApp et le téléphone, un espace d\'administration simple et une séance de prise en main. Le plus souvent, quatre à six pages suffisent : accueil, services, à propos, contact, et parfois réalisations ou actualités.',
                'Ce que la prestation ne couvre pas mérite d\'être dit avant le devis. Vendre des produits avec panier, paiement et gestion de stock relève d\'un <a href="/services/site-e-commerce">site e-commerce</a>. Une page unique conçue pour une campagne publicitaire relève d\'une <a href="/services/landing-page-haute-conversion">landing page</a>. Des clients qui se connectent pour suivre un dossier demandent un <a href="/services/saas-espace-client">espace client</a>, et des rendez-vous pris en ligne un <a href="/services/systeme-de-reservation-en-ligne">système de réservation</a>. Le référencement poussé sur des requêtes concurrentielles, enfin, est un travail continu qui fait l\'objet d\'une prestation de <a href="/services/referencement-naturel-seo">référencement naturel</a>.',
                'Cette frontière protège votre budget. Un site vitrine bien cadré se livre en une à trois semaines ; le même projet, augmenté en cours de route d\'un catalogue de cent produits et d\'un module de rendez-vous, change de nature, de délai et de prix. Mieux vaut le savoir au départ, quitte à prévoir une deuxième phase : un site vitrine bien construit peut accueillir plus tard une boutique, une réservation ou une version anglaise sans tout refaire.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse un site vitrine, et à quels signes voit-on que le besoin est mûr ?',
            'intro' => 'Le site vitrine sert toute structure qui vend un savoir-faire, un service ou une confiance plutôt qu\'un panier d\'achat. Voici les situations qui, en pratique, déclenchent la demande.',
            'items' => [
                ['titre' => 'On vous demande « vous avez un site ? »', 'texte' => 'Un client potentiel, un banquier, un bailleur ou un partenaire européen veut vérifier votre sérieux avant de s\'engager. Sans site, vous renvoyez vers une page Facebook ou un profil WhatsApp, ce qui suffit pour un voisin mais rarement pour un marché public, une multinationale ou un client de la diaspora.'],
                ['titre' => 'Vous répétez les mêmes réponses chaque jour', 'texte' => 'Horaires, zone d\'intervention, tarifs indicatifs, délais, pièces à fournir : si vous tapez les mêmes messages dix fois par semaine, une page claire fait ce travail à votre place et vous ne recevez plus que des demandes déjà qualifiées.'],
                ['titre' => 'Vos documents circulent en pièces jointes', 'texte' => 'Plaquette en PDF, photos de chantiers, catalogue de formations envoyés un par un sur WhatsApp : ces fichiers se perdent, vieillissent et ne sont trouvés par personne sur Google. Une page de réalisations ou de services les remplace par un lien unique, toujours à jour.'],
                ['titre' => 'Vos concurrents apparaissent sur Google, pas vous', 'texte' => 'Tapez votre métier suivi de votre ville. Si les trois premiers résultats sont des confrères, chaque recherche de ce type est un client qui ne vous connaîtra jamais. Le site vitrine, appuyé par une fiche d\'établissement Google, est le socle de cette visibilité.'],
                ['titre' => 'Vous visez une clientèle plus large', 'texte' => 'Une école qui recrute dans tout le pays, un cabinet qui conseille des investisseurs étrangers, un artisan installé en Belgique qui veut des clients au-delà de son quartier : dès que la clientèle ne vous connaît plus personnellement, le site devient votre premier argument.'],
                ['titre' => 'Votre ancien site vous dessert', 'texte' => 'Un site lent, cassé sur téléphone, qui affiche encore l\'ancien numéro ou des promotions de 2021 fait plus de tort qu\'une absence de site. Dans ce cas, la bonne prestation est parfois une <a href="/services/refonte-migration-de-site">refonte avec migration</a>, qui préserve l\'adresse et le référencement acquis.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule la création, du premier échange à l\'après-livraison ?',
            'items' => [
                ['titre' => 'Premier échange et devis', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez votre activité, vos clients, ce que le site doit provoquer (appels, messages, demandes de devis) et les sites que vous aimez ou détestez. Vous recevez ensuite un devis détaillé : nombre de pages, textes à rédiger ou à reprendre, technologie, nom de domaine, hébergement, délai et modalités de paiement. Rien ne commence sans votre accord écrit.'],
                ['titre' => 'Cadrage et arborescence', 'duree' => '1 à 2 jours', 'texte' => 'On fixe la liste des pages, le contenu de chacune, les mots que vos clients tapent réellement dans Google et l\'action attendue sur chaque page. C\'est aussi le moment de choisir le nom de domaine et de vérifier qu\'il est libre, à votre nom.'],
                ['titre' => 'Collecte et rédaction des contenus', 'duree' => 'En parallèle, selon vos réponses', 'texte' => 'Logo, photos, liste des services, zones desservies, informations légales : vous fournissez la matière brute, les textes sont rédigés ou réécrits pour être clairs, lisibles sur téléphone et utiles au référencement. C\'est l\'étape qui fait le plus souvent glisser un planning, d\'où l\'intérêt de la lancer dès le premier jour.'],
                ['titre' => 'Maquette et validation', 'duree' => '2 à 4 jours', 'texte' => 'Vous voyez la page d\'accueil et une page intérieure avant tout développement, sur téléphone comme sur ordinateur. Les corrections portent alors sur l\'essentiel : hiérarchie, couleurs, ton, place des boutons d\'appel et de WhatsApp.'],
                ['titre' => 'Développement et intégration', 'duree' => '3 à 7 jours', 'texte' => 'Les pages sont construites, les contenus intégrés, le formulaire relié à votre boîte de réception, les liens WhatsApp et téléphone testés depuis un vrai téléphone. Les images sont compressées pour rester légères sur une connexion mobile moyenne.'],
                ['titre' => 'Référencement de base et tests', 'duree' => '1 à 2 jours', 'texte' => 'Titre et description de chaque page, adresses lisibles, textes alternatifs des images, plan du site, vitesse mesurée, affichage vérifié sur plusieurs tailles d\'écran, formulaire testé de bout en bout. Une erreur repérée à ce stade se corrige sans qu\'aucun client ne l\'ait vue.'],
                ['titre' => 'Mise en ligne et formation', 'duree' => '1 jour', 'texte' => 'Le site passe sur son nom de domaine, en HTTPS, puis est déclaré à Google. Une séance de prise en main vous apprend à modifier un texte, changer une photo ou ajouter une actualité depuis l\'espace d\'administration, pour rester autonome après la livraison.'],
                ['titre' => 'Après la livraison', 'duree' => 'Les semaines suivantes', 'texte' => 'Les premières demandes arrivent, les premiers retours de clients aussi : on corrige ce qui gêne. Ensuite, la mise à jour technique, les sauvegardes et les évolutions relèvent d\'un contrat de <a href="/services/maintenance-support">maintenance et support</a>, sur devis, ou de votre propre équipe si elle a été formée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que recevez-vous concrètement à la livraison ?',
            'legende' => 'Livrables de la prestation de départ, tels que décrits sur la fiche du service ; le devis précise le nombre de pages, la durée couverte pour le nom de domaine et l\'hébergement, et les options retenues.',
            'entetes' => ['Livrable', 'Ce que c\'est', 'Pourquoi c\'est important'],
            'lignes'  => [
                ['Les pages du site', 'Quatre à six pages le plus souvent : accueil, services, à propos, contact, parfois réalisations ou actualités', 'Chaque page répond à une question précise d\'un visiteur ; aucune page vide ou inutile à entretenir'],
                ['Un design sur mesure et responsive', 'Une mise en page à vos couleurs, pensée d\'abord pour l\'écran du téléphone puis adaptée à la tablette et à l\'ordinateur', 'La majorité des visites viennent d\'un mobile, et Google indexe la version mobile des pages'],
                ['Les textes', 'Rédaction ou réécriture à partir de vos informations, avec un vocabulaire que vos clients emploient réellement', 'Un texte clair rassure et se référence ; un texte copié chez un concurrent n\'apporte rien et peut nuire'],
                ['Les bases du référencement', 'Titres et descriptions uniques, adresses lisibles, textes alternatifs, plan du site, déclaration à Google', 'Sans ces bases, même un beau site reste invisible sur les recherches de votre métier'],
                ['Le nom de domaine et l\'hébergement', 'Votre adresse (par exemple en .com, .bj ou .fr) et l\'espace serveur où le site est publié, avec le chiffrement HTTPS', 'Une adresse à votre nom vous appartient ; un site non chiffré est signalé comme non sécurisé par les navigateurs'],
                ['Le formulaire de contact', 'Un formulaire court, limité aux champs utiles, relié à votre adresse électronique','Il capte les demandes en dehors des heures où vous décrochez'],
                ['Les liens WhatsApp et téléphone', 'Un lien direct qui ouvre une conversation WhatsApp avec vous, et un numéro cliquable sur mobile', 'En Afrique francophone, beaucoup de clients préfèrent écrire sur WhatsApp plutôt que remplir un formulaire'],
                ['L\'espace d\'administration et la formation', 'Un accès pour modifier textes, photos et actualités, et une séance de prise en main', 'Vous restez autonome pour les petites mises à jour, sans dépendre d\'un prestataire'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'WordPress, Laravel ou site statique : quelle technologie pour votre site vitrine ?',
            'options'  => ['WordPress', 'Laravel (PHP) sur mesure', 'Site statique avec Vue ou React'],
            'criteres' => [
                ['critere' => 'Modifier les contenus soi-même', 'valeurs' => ['Très simple : éditeur visuel connu de beaucoup d\'utilisateurs', 'Simple : espace d\'administration construit pour vos seuls contenus', 'Limité sans outil d\'édition ajouté ; souvent confié au prestataire']],
                ['critere' => 'Vitesse sur réseau mobile', 'valeurs' => ['Bonne si le thème est léger et les extensions peu nombreuses', 'Très bonne : seul le code utile est chargé', 'Excellente : pages déjà prêtes, servies sans calcul']],
                ['critere' => 'Mises à jour de sécurité', 'valeurs' => ['Fréquentes : cœur, thème et extensions à suivre', 'Ponctuelles : framework et dépendances', 'Rares : peu de code exécuté sur le serveur']],
                ['critere' => 'Hébergement nécessaire', 'valeurs' => ['Hébergement PHP avec base MySQL ou MariaDB', 'Hébergement PHP avec base de données', 'Simple hébergement de fichiers']],
                ['critere' => 'Ajouter plus tard boutique, réservation ou espace client', 'valeurs' => ['Par extensions, au risque d\'alourdir le site', 'Naturel : le même code accueille les nouvelles fonctions', 'Demande d\'ajouter un serveur ou un service tiers']],
                ['critere' => 'Dépendance à des tiers', 'valeurs' => ['Forte : éditeurs d\'extensions et de thèmes', 'Faible : pas d\x27extensions tierces, code propre au projet', 'Faible pour le site, plus forte pour les formulaires']],
            ],
            'verdict'  => 'WordPress convient quand vous publierez souvent vous-même, Laravel quand le site doit évoluer vers des fonctions métier, le site statique quand la vitesse prime et que les contenus changent peu.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment le choix technique est-il tranché pour votre projet ?',
            'paragraphes' => [
                'Le choix ne se fait pas sur une préférence de développeur, mais sur trois questions. Qui modifiera le site, et à quelle fréquence ? Que devra-t-il faire dans deux ans ? Quelle connexion ont vos visiteurs ? Une école qui publie chaque semaine ses résultats et ses inscriptions a besoin d\'un éditeur confortable. Un cabinet qui changera trois lignes par an a surtout besoin d\'un site rapide et sobre. Une entreprise qui prévoit un espace client l\'année prochaine gagne à partir d\'une base Laravel qui l\'accueillera sans tout refaire.',
                'WordPress reste le système de gestion de contenu le plus répandu : selon <a href="https://w3techs.com/technologies/details/cm-wordpress">W3Techs</a>, au 3 octobre 2026, il équipe 40,2 % de tous les sites web et 58,6 % des sites dont le système de gestion est identifié. Cette popularité a deux faces : beaucoup de gens savent s\'en servir, et beaucoup de robots cherchent ses failles. Un site WordPress se livre donc avec peu d\'extensions, toutes justifiées, et un plan de mise à jour.',
                'Laravel, cadre de développement en PHP, et les bibliothèques Vue ou React pour les parties interactives sont les outils de développement sur mesure de Richard SALANON, à côté de Node.js pour les traitements côté serveur. Ils produisent un site plus léger, sans extensions superflues, dont vous demanderez le code source à la livraison. Pour relier le formulaire à un tableau de suivi, à votre messagerie ou à WhatsApp, un outil d\'automatisation comme n8n ou Make évite un développement spécifique ; le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a> aide à choisir.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvrent exactement les bases du référencement livrées avec le site ?',
            'paragraphes' => [
                'Les bases du référencement ne sont pas une promesse de première position : ce sont les conditions sans lesquelles Google ne peut ni comprendre ni présenter correctement vos pages. Le <a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide">guide de démarrage en référencement de Google</a>, mis à jour le 10 décembre 2025, insiste sur un point avant tous les autres : rendre le site intéressant et utile. Il recommande ensuite un titre unique, clair et concis pour chaque page, des adresses lisibles composées de mots pertinents et un texte alternatif court qui explique le rapport entre chaque image et le contenu.',
                'Concrètement, chaque page reçoit un titre et une description rédigés pour la recherche qui lui correspond, par exemple « expert-comptable à Cotonou » ou « menuiserie sur mesure à Namur », une adresse courte, un seul titre principal et des intertitres qui structurent le texte. Le site est déclaré dans la Search Console de Google avec son plan du site, afin que ses pages soient découvertes rapidement et que les erreurs d\'exploration soient visibles. Les liens entre pages guident le visiteur comme le robot vers la page de contact.',
                'Le chiffrement HTTPS fait aussi partie du socle. Les navigateurs signalent comme non sécurisé un site qui transmet un formulaire sans chiffrement, ce qui suffit à faire fuir un prospect. Il ne coûte plus rien en soi : <a href="https://letsencrypt.org/">Let\'s Encrypt</a>, organisme à but non lucratif, indique sur sa page d\'accueil, consultée le 3 octobre 2026, fournir des certificats gratuits à plus de 700 millions de sites. La plupart des hébergements l\'installent et le renouvellent automatiquement ; encore faut-il vérifier que toutes les adresses du site redirigent vers la version sécurisée.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que préparer de votre côté pour tenir le délai d\'une à trois semaines ?',
            'items' => [
                'Le logo en bonne qualité (fichier vectoriel ou image d\'au moins 1 000 pixels de large) et, s\'ils existent, vos couleurs et polices.',
                'La liste de vos services ou produits, avec pour chacun deux ou trois phrases sur ce que le client obtient.',
                'Vos zones d\'intervention, horaires, adresse, numéro de téléphone et numéro WhatsApp, au format international.',
                'Des photos réelles : locaux, équipe, chantiers, réalisations, produits ; elles valent mieux que des images de banque.',
                'Les questions que vos clients posent le plus souvent, avec vos réponses habituelles.',
                'Les informations légales : raison sociale ou nom, statut, numéro d\'identification fiscale ou d\'immatriculation, adresse du siège.',
                'Deux ou trois sites que vous aimez et un que vous n\'aimez pas, en expliquant pourquoi.',
                'Le nom de domaine souhaité, ou deux variantes, et les accès d\'un domaine déjà réservé s\'il existe.',
                'Une personne disponible pour valider la maquette et relire les textes sous quelques jours.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un site vitrine utile selon votre secteur ?',
            'items' => [
                ['secteur' => 'Cabinet comptable, juridique ou de conseil, Afrique de l\'Ouest', 'probleme' => 'Les prospects jugent le sérieux du cabinet avant d\'appeler, et les investisseurs étrangers cherchent un interlocuteur vérifiable.', 'solution' => 'Une page par domaine d\'expertise (fiscalité, création d\'entreprise, conformité), une page équipe avec les qualifications réelles, un formulaire qui demande la nature du dossier, et une version anglaise si la clientèle étrangère le justifie.'],
                ['secteur' => 'Artisan, BTP et dépannage, de Cotonou à Liège', 'probleme' => 'Les demandes arrivent de bouche-à-oreille, mais les nouveaux clients tapent « plombier » ou « électricien » suivi de leur ville.', 'solution' => 'Des pages de services rédigées avec les mots des clients, une galerie de chantiers réels, la zone d\'intervention écrite en toutes lettres, un bouton WhatsApp pour envoyer la photo de la panne, et une fiche Google reliée au site.'],
                ['secteur' => 'École privée, centre de formation', 'probleme' => 'Les parents comparent plusieurs établissements, posent les mêmes questions sur les frais, le calendrier et les résultats.', 'solution' => 'Pages par cycle ou par formation, calendrier des inscriptions, liste des pièces à fournir, actualités publiées par l\'équipe elle-même depuis l\'espace d\'administration, formulaire de préinscription simple.'],
                ['secteur' => 'Restaurant, hôtel, maquis ou traiteur', 'probleme' => 'La clientèle cherche le menu, l\'emplacement et les horaires sur son téléphone, souvent au dernier moment.', 'solution' => 'Une page d\'accueil très légère avec menu lisible sans téléchargement de PDF, carte d\'accès, horaires, bouton d\'appel et de réservation par WhatsApp ; un vrai système de réservation viendra plus tard si le volume le justifie.'],
                ['secteur' => 'ONG, association, projet financé', 'probleme' => 'Les bailleurs et partenaires attendent une présentation claire de la mission, des projets et de la gouvernance.', 'solution' => 'Pages mission, projets, équipe et partenaires, rapports d\'activité téléchargeables, actualités régulières, et une politique de confidentialité soignée si le site collecte des inscriptions de bénévoles.'],
                ['secteur' => 'Consultant ou indépendant en France, en Suisse ou au Canada', 'probleme' => 'Le profil LinkedIn ne suffit plus pour présenter une offre précise et être trouvé par des clients qui ne vous connaissent pas.', 'solution' => 'Un site court de quatre pages, une offre par page, des mentions légales conformes au pays, un formulaire respectueux du RGPD et un nom de domaine à votre nom dans l\'extension la plus parlante pour votre marché.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un site vitrine professionnel, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Tarifs de départ publiés par Richard SALANON ; le montant exact dépend du projet et figure toujours sur un devis détaillé, remis avant tout démarrage.',
            'items'      => [
                ['offre' => 'Site vitrine professionnel', 'prix' => 'À partir de 300 000 FCFA', 'inclus' => ['Design sur mesure et responsive', 'Rédaction ou réécriture des textes', 'Bases du référencement', 'Nom de domaine et hébergement', 'Formulaire de contact, liens WhatsApp et téléphone', 'Formation à la prise en main', 'Délai : 1 à 3 semaines']],
                ['offre' => 'Landing page, si une seule page suffit', 'prix' => 'À partir de 150 000 FCFA', 'inclus' => ['Une page unique pour une offre ou une campagne', 'Un seul objectif de conversion', 'Voir la page <a href="/services/landing-page-haute-conversion">landing page haute conversion</a>']],
                ['offre' => 'Référencement naturel, après la mise en ligne', 'prix' => 'À partir de 75 000 FCFA', 'inclus' => ['Travail sur des requêtes concurrentielles', 'Contenus et optimisations au-delà des bases', 'Voir la page <a href="/services/referencement-naturel-seo">référencement naturel</a>']],
                ['offre' => 'Maintenance et évolutions', 'prix' => 'Sur devis', 'inclus' => ['Mises à jour techniques et sauvegardes', 'Corrections et dépannage', 'Ajout de pages ou de fonctions']],
            ],
            'variations' => [
                'Le nombre de pages et de gabarits différents : six pages construites sur deux modèles coûtent moins que six pages toutes distinctes.',
                'La rédaction : reprendre des textes existants demande moins de temps que rédiger à partir de notes ou d\'un entretien.',
                'Les langues : une version anglaise double une partie du travail de rédaction, de mise en page et de référencement.',
                'Les fonctions ajoutées : galerie importante, téléchargements, carte interactive, blog avec catégories, automatisation du formulaire.',
                'La technologie retenue et le niveau de personnalisation de l\'espace d\'administration.',
                'L\'extension du nom de domaine et la formule d\'hébergement, selon le trafic attendu et le pays des visiteurs.',
                'L\'urgence : un délai plus court que le délai habituel suppose de réorganiser le planning.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se règle la prestation, en Afrique comme en Europe ?',
            'paragraphes' => [
                'Les modes de paiement acceptés sont le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. Un client de Cotonou ou de Lomé peut ainsi régler depuis son téléphone, un client de Paris, de Bruxelles ou de Montréal par virement, carte ou PayPal. Les modalités de paiement sont écrites sur le devis : vous savez avant de signer ce que vous payez et à quel moment.',
                'Les tarifs de départ ci-dessus sont exprimés en francs CFA. Hors de la zone franc, le montant est établi sur devis, dans la devise convenue. Dans tous les cas, le devis distingue ce qui se paie une fois (conception, rédaction, développement) de ce qui se renouvelle chaque année (nom de domaine, hébergement) et de ce qui reste optionnel (maintenance, référencement continu). Cette distinction évite la mauvaise surprise la plus fréquente : un site qui s\'éteint au bout d\'un an parce que personne n\'avait prévu le renouvellement.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Une page Facebook ou une fiche Google ne suffisent-elles pas ?',
            'paragraphes' => [
                'C\'est la question la plus fréquente, et elle est légitime. Une page Facebook touche une audience déjà active sur le réseau, une fiche d\'établissement Google fait apparaître votre adresse et vos horaires sur la carte. Les deux sont utiles et gratuites. Mais ni l\'une ni l\'autre ne vous appartient : la plateforme décide de l\'affichage, de la mise en page, de la portée de vos publications, et peut suspendre un compte. Le site est le seul espace dont vous fixez le contenu, l\'ordre et l\'adresse.',
                'Les trois se complètent plutôt qu\'ils ne s\'opposent. Les <a href="https://support.google.com/business/answer/3038177?hl=fr">règles de Google pour les fiches d\'établissement</a>, consultées le 3 octobre 2026, réservent la fiche aux entreprises qui reçoivent des clients à une adresse réelle ou qui se déplacent chez eux dans une zone desservie ; une boîte postale ne suffit pas. Le site, lui, n\'a pas de condition : il sert aussi le consultant à distance ou l\'éditeur de logiciel. Le schéma qui fonctionne le mieux relie la fiche Google et la page Facebook au site, qui centralise les informations complètes ; la page <a href="/services/seo-local-google-business">SEO local et Google Business</a> détaille cette articulation.',
                'Un argument pèse souvent dans la décision : la crédibilité d\'une adresse électronique et d\'un lien à votre nom. Un devis envoyé depuis une adresse liée à votre domaine, avec un lien vers une page de présentation propre, ne produit pas le même effet qu\'un message signé d\'une adresse gratuite renvoyant vers un profil de réseau social. Pour un appel d\'offres, un partenaire étranger ou un client de la diaspora, cette différence se voit immédiatement.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel nom de domaine choisir : .com, .bj, .fr ou autre ?',
            'legende' => 'Règles relevées le 3 octobre 2026 sur le site du registre du .bj (nic.bj) et sur la foire aux questions de l\'Afnic, office d\'enregistrement du .fr. Les prix des autres extensions dépendent du bureau d\'enregistrement choisi.',
            'entetes' => ['Extension', 'Qui peut l\'enregistrer', 'À privilégier quand', 'Point d\'attention'],
            'lignes'  => [
                ['.com', 'Tout le monde, sans condition de pays', 'La clientèle est internationale ou répartie dans plusieurs pays', 'Les noms courts sont souvent déjà pris : prévoir des variantes'],
                ['.bj et .com.bj', 'Registre géré par Jeny SAS ; le .com.bj est destiné aux entreprises à caractère commercial selon la charte de nommage', 'La clientèle est d\'abord béninoise et l\'ancrage local est un argument', 'Prix standard affiché par le registre : 10 000 F TTC par an ; certains noms « premium » sont examinés au préalable'],
                ['.fr', 'Personnes et organisations résidant ou établies dans l\'Union européenne, en Suisse, au Liechtenstein, en Norvège ou en Islande, selon l\'Afnic', 'La clientèle visée est en France', 'Une entreprise établie uniquement en Afrique n\'est pas éligible ; l\'Afnic ne vend pas directement, il faut passer par un bureau d\'enregistrement accrédité'],
                ['Autres extensions nationales (.ci, .sn, .be, .ch, .ca)', 'Selon les règles propres à chaque registre', 'Le marché principal est dans ce pays', 'Vérifier les conditions de résidence avant de promettre une adresse au client'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le nom de domaine doit-il être enregistré à votre nom ?',
            'paragraphes' => [
                'Le nom de domaine est attribué au premier qui le demande, à condition de respecter les règles de l\'extension, comme le rappelle la <a href="https://www.afnic.fr/noms-de-domaine/tout-savoir/">page de l\'Afnic consacrée aux noms de domaine</a>. Celui qui figure comme titulaire en est juridiquement le détenteur. Si le prestataire l\'enregistre à son propre nom, par commodité, votre adresse, votre référencement et vos adresses électroniques dépendent de sa bonne volonté le jour où vous voudrez changer d\'hébergeur ou de prestataire.',
                'La règle est donc simple : le titulaire est votre entreprise, ou vous-même pour un indépendant ; le prestataire peut être contact technique. Vous recevez les identifiants du compte chez le bureau d\'enregistrement et la date d\'échéance. Le jour où un nom expire faute de renouvellement, le site et les adresses électroniques s\'arrêtent, et le nom peut être racheté par un tiers. Notez cette date dans votre agenda, même si un contrat de maintenance prévoit le renouvellement.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels guident la conception d\'un site vitrine ?',
            'items' => [
                ['valeur' => '60,3 %', 'libelle' => 'Part des pages vues depuis un mobile au Bénin en septembre 2026 (53,05 % en France)', 'source' => 'StatCounter Global Stats', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/benin'],
                ['valeur' => '4,80 millions', 'libelle' => 'Internautes au Bénin en octobre 2025, soit 32,2 % de la population', 'source' => 'DataReportal, rapport Digital 2026 sur le Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '2,5 s', 'libelle' => 'Délai maximal recommandé pour afficher le plus grand élément de la page (LCP), mesuré au 75e percentile', 'source' => 'web.dev (Google), Core Web Vitals', 'url' => 'https://web.dev/articles/vitals'],
                ['valeur' => '10 000 F TTC', 'libelle' => 'Prix standard annuel d\'un nom de domaine en .bj affiché par le registre', 'source' => 'Registre du .bj (Jeny SAS)', 'url' => 'https://nic.bj/'],
                ['valeur' => '24 × 24 px', 'libelle' => 'Taille minimale d\'une cible tactile (bouton, lien) au niveau AA', 'source' => 'W3C, WCAG 2.2, critère 2.5.8', 'url' => 'https://www.w3.org/WAI/WCAG22/Understanding/target-size-minimum.html'],
                ['valeur' => '10 chiffres', 'libelle' => 'Longueur des numéros béninois depuis le 30 novembre 2024, avec le préfixe 01', 'source' => 'ARCEP Bénin', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Mobile, connexion, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Le téléphone est l\'écran principal. Selon <a href="https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/benin">StatCounter</a>, en septembre 2026, 60,3 % des pages vues au Bénin l\'ont été depuis un mobile, contre 53,05 % en France sur la même période. Et Google l\'acte dans sa <a href="https://developers.google.com/search/docs/crawling-indexing/mobile/mobile-sites-mobile-first-indexing">documentation sur l\'indexation mobile</a>, mise à jour le 10 décembre 2025 : il utilise la version mobile du contenu, explorée avec son robot pour smartphone, pour indexer et classer les pages. Un site conçu sur grand écran puis « adapté » au téléphone part donc avec un handicap.',
                'La connexion reste inégale. Le rapport <a href="https://datareportal.com/reports/digital-2026-benin">Digital 2026 de DataReportal pour le Bénin</a>, publié le 8 novembre 2025, compte 4,80 millions d\'internautes en octobre 2025, soit 32,2 % de la population : beaucoup naviguent avec un forfait limité et un réseau qui varie d\'un quartier à l\'autre. Les seuils de <a href="https://web.dev/articles/vitals">Core Web Vitals publiés sur web.dev</a>, page mise à jour le 31 octobre 2024, servent de garde-fou : affichage du contenu principal en 2,5 secondes au plus, réaction aux interactions en 200 millisecondes au plus, décalage visuel de 0,1 au plus, au 75e percentile des visites. D\'où des images compressées, peu de scripts et des polices limitées.',
                'Un formulaire de contact collecte des données personnelles : nom, téléphone, adresse électronique, parfois le détail d\'un besoin. Au Bénin, leur traitement relève de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>, sous le contrôle de l\'Autorité de protection des données personnelles. Si le site s\'adresse à des personnes situées dans l\'Union européenne, le RGPD s\'applique aussi, même à une entreprise établie hors d\'Europe : la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">CNIL</a> rappelle qu\'il est entré en application le 25 mai 2018 et qu\'il vise les responsables non établis dans l\'Union qui proposent des biens ou des services à ces personnes.',
                'En pratique, le site vitrine demande trois précautions : ne collecter que les champs utiles, expliquer dans une politique de confidentialité qui reçoit les messages et combien de temps ils sont gardés, et ne déposer de traceurs publicitaires ou de mesure d\'audience non exemptés qu\'avec le consentement du visiteur. Les <a href="https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi">règles de la CNIL sur les cookies</a> exigent que refuser soit aussi simple qu\'accepter. Pour un site vitrine, le plus sûr est souvent de se passer des traceurs inutiles.',
                'En France, les mentions légales ne sont pas une formalité : la page de <a href="https://entreprendre.service-public.gouv.fr/vosdroits/F31228">Service Public consacrée au site d\'un entrepreneur individuel</a>, vérifiée le 31 juillet 2023, liste l\'identité, l\'adresse, le numéro d\'immatriculation, les coordonnées et l\'hébergeur, et indique une peine pouvant aller jusqu\'à un an d\'emprisonnement et 75 000 euros d\'amende en cas de manquement. Un site vitrine sérieux comporte donc une page de mentions légales et une politique de confidentialité propres au pays de l\'entreprise, remplies avec des informations exactes, jamais copiées d\'un autre site.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment régler correctement le bouton WhatsApp, la langue et l\'accessibilité ?',
            'paragraphes' => [
                'Le lien WhatsApp est le bouton le plus cliqué de nombreux sites en Afrique francophone, et le plus souvent mal réglé. La <a href="https://faq.whatsapp.com/5913398998672934">documentation de WhatsApp sur la discussion directe</a> demande un numéro complet au format international, sans « + », sans espaces, sans tirets ni parenthèses, avec un message prérempli facultatif. Au Bénin, l\'<a href="https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/">ARCEP</a> a fait passer les numéros à dix chiffres le 30 novembre 2024, en ajoutant le préfixe 01 : le lien s\'écrit donc avec 229, puis 01, puis les huit chiffres historiques.',
                'Ce zéro-là ne se supprime pas. La consigne de WhatsApp d\'omettre les zéros vise le préfixe d\'appel international, comme 00, pas le 01 béninois, qui fait désormais partie du numéro : l\'ARCEP indique que, depuis l\'étranger, on compose +229, puis 01, puis le numéro. Un lien resté à huit chiffres, ou amputé de son 0, ouvre une conversation avec un inconnu ou une erreur. Le test est simple et doit être fait à chaque livraison : cliquer sur le bouton depuis un téléphone qui n\'a pas le numéro en contact.',
                'La langue se décide selon la clientèle. Le français suffit pour un artisan de Porto-Novo ou de Lyon ; une version anglaise devient utile pour un cabinet qui conseille des investisseurs du Nigeria ou du Ghana, une école qui accueille des étudiants anglophones ou un hôtel. Une version traduite automatiquement et jamais relue fait plus de tort qu\'une seule langue soignée. Chaque langue a ses propres pages, adresses et titres, pour que Google les présente au bon public.',
                'L\'accessibilité profite à tous les visiteurs, pas seulement aux personnes handicapées. Les <a href="https://www.w3.org/TR/WCAG22/">règles WCAG 2.2 du W3C</a>, dans leur version du 12 décembre 2024, fixent un contraste d\'au moins 4,5 pour 1 pour le texte courant et, au niveau AA, des cibles tactiles d\'au moins 24 pixels CSS de côté. Sur un téléphone utilisé en plein soleil ou avec un pouce pressé, ces deux règles font la différence entre un bouton qu\'on touche et un bouton qu\'on rate.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer un site vitrine, et comment les éviter ?',
            'intro' => 'La plupart des sites qui ne rapportent aucun contact ne souffrent pas d\'un mauvais design, mais d\'une de ces erreurs, toutes évitables au moment du cadrage.',
            'items' => [
                ['titre' => 'Parler de soi au lieu de répondre au client', 'texte' => 'Une page d\'accueil qui commence par l\'historique de l\'entreprise perd le visiteur venu chercher un service, un prix ou une zone d\'intervention. Le haut de page doit dire ce que vous faites, pour qui et où, puis proposer d\'appeler ou d\'écrire.'],
                ['titre' => 'Des textes recopiés ou génériques', 'texte' => 'Copier le texte d\'un concurrent ou publier des phrases creuses produites en série ne rassure personne et n\'aide pas le référencement. Un assistant d\'IA peut aider à structurer un premier jet, à condition de le nourrir de vos faits et de tout relire ; le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> aide à choisir l\'outil.'],
                ['titre' => 'Des images trop lourdes', 'texte' => 'Une photo de cinq mégaoctets en page d\'accueil peut ruiner l\'affichage sur un forfait mobile. Chaque image est redimensionnée, compressée dans un format moderne et chargée seulement quand elle devient visible.'],
                ['titre' => 'Un formulaire qui n\'arrive nulle part', 'texte' => 'Messages bloqués dans les courriers indésirables, adresse que personne ne consulte, formulaire jamais testé après une mise à jour : le site semble fonctionner, mais les demandes se perdent. Testez-le chaque mois, ou faites dupliquer les messages vers WhatsApp ou un tableau de suivi.'],
                ['titre' => 'Des photos de banque d\'images partout', 'texte' => 'Les visages souriants que l\'on retrouve sur des milliers de sites inspirent moins confiance qu\'une photo honnête de votre atelier, de votre équipe ou d\'un chantier terminé, même prise avec un bon téléphone.'],
                ['titre' => 'Aucune mise à jour pendant des années', 'texte' => 'Un site WordPress dont les extensions ne sont jamais mises à jour devient une cible ; un site qui annonce encore les tarifs de l\'an dernier crée des malentendus. Prévoyez un rendez-vous trimestriel, en interne ou avec un prestataire de maintenance.'],
                ['titre' => 'Oublier les obligations légales', 'texte' => 'Mentions légales absentes, politique de confidentialité copiée d\'un autre site, bandeau de cookies qui ne permet pas de refuser : ces oublis exposent l\'entreprise, surtout lorsqu\'elle vise des clients en Europe.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel piège coûte le plus cher après la livraison ?',
            'texte' => 'Le piège le plus coûteux est de ne posséder ni le nom de domaine, ni les accès d\'administration, ni les fichiers du site. Exigez à la livraison : un nom de domaine enregistré au nom de votre entreprise, les identifiants du bureau d\'enregistrement, de l\'hébergement et de l\'espace d\'administration, une sauvegarde complète et, pour un site développé sur mesure, le code source. Sans ces éléments, changer de prestataire revient à tout refaire.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre site vitrine à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Il compte plus de 6 ans d\'expérience dans le numérique et a travaillé pour des clients au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Formé à EPITECH, il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Cette double pratique, développement et produit, se retrouve dans les sites qu\'il livre : légers, mesurables, pensés pour provoquer un contact.',
                'Sa façon de travailler tient en quelques engagements vérifiables. Une réponse sous 24 heures à chaque demande. Un devis clair et détaillé avant tout démarrage, sans surprise en cours de route. Une structure et des maquettes validées avec vous avant le développement. Un site rapide, lisible sur mobile et pensé pour la conversion, pas seulement pour l\'apparence. Une formation pour que vous restiez autonome après la livraison. Le travail se fait sur place ou à distance selon le pays du client, ce qui permet de servir aussi bien une PME de Cotonou qu\'un indépendant installé en Suisse. Pour en savoir plus sur son parcours, consultez la page <a href="/richard-salanon">Richard SALANON</a>.',
                'Si vous voulez apprendre à faire évoluer le site vous-même, ou à créer les suivants en interne, la <a href="/formation-developpement-web">formation au développement web</a> et la <a href="/formation-seo-visibilite-google">formation SEO et visibilité sur Google</a> prolongent la prestation. Pour exploiter au mieux les messages reçus par le bouton WhatsApp, la <a href="/formation-whatsapp-business">formation WhatsApp Business</a> et la page <a href="/services/integration-whatsapp">intégration WhatsApp</a> décrivent les étapes suivantes.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer votre site vitrine ?',
            'texte' => 'Un bon site vitrine se juge au nombre de demandes qu\'il apporte, pas au nombre d\'animations qu\'il affiche : quelques pages claires, écrites pour vos clients, rapides sur téléphone, reliées à WhatsApp et à Google, sur un nom de domaine qui vous appartient.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Prêt à lancer votre site vitrine professionnel ?',
            'texte'  => 'Décrivez votre activité, vos clients et les pages que vous imaginez : vous recevez sous 24 heures une première réponse, puis un devis détaillé avec le nombre de pages, le délai et le prix.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien coûte un site vitrine professionnel ?', 'r' => 'Le tarif de départ est de 300 000 FCFA pour un site vitrine comprenant design sur mesure, textes, bases du référencement, nom de domaine, hébergement, formulaire, liens WhatsApp et formation. Le montant exact dépend du nombre de pages, de la rédaction, des langues et des fonctions ajoutées ; il figure sur un devis détaillé. Hors zone franc CFA, le prix est fixé sur devis.'],
        ['q' => 'Combien de temps faut-il pour créer un site vitrine ?', 'r' => 'Comptez 1 à 3 semaines selon le nombre de pages et la rapidité avec laquelle les contenus (logo, photos, informations, validations) sont fournis. La rédaction des textes et la validation de la maquette sont les deux étapes qui font le plus souvent varier le délai.'],
        ['q' => 'Combien de pages faut-il pour un site vitrine ?', 'r' => 'Le plus souvent quatre à six : accueil, services, à propos, contact, et parfois réalisations ou actualités. Une entreprise qui propose plusieurs services très différents gagne à leur donner une page chacun, parce que chaque page peut alors se positionner sur Google pour la recherche qui lui correspond.'],
        ['q' => 'Pourrai-je modifier mon site moi-même ?', 'r' => 'Oui. Le site est livré avec un espace d\'administration et une séance de prise en main, pour que vous changiez textes, photos et actualités sans dépendre d\'un prestataire. Les évolutions plus lourdes (nouvelle fonction, refonte d\'une page) relèvent de la maintenance, sur devis.'],
        ['q' => 'Mon site sera-t-il visible sur Google ?', 'r' => 'Les bases techniques du référencement sont posées dès la création : titres et descriptions uniques, adresses lisibles, textes alternatifs, plan du site, vitesse et déclaration à Google. Pour viser les premières positions sur des recherches concurrentielles, une prestation de référencement naturel, à partir de 75 000 FCFA, prend le relais.'],
        ['q' => 'À qui doit appartenir le nom de domaine ?', 'r' => 'À vous. Quel que soit le prestataire, exigez que le nom de domaine soit enregistré au nom de votre entreprise, ou au vôtre pour un indépendant, et demandez les accès du bureau d\'enregistrement, de l\'hébergement et de l\'espace d\'administration. C\'est la condition pour pouvoir changer de prestataire un jour sans perdre votre adresse ni votre référencement.'],
        ['q' => 'Que se passe-t-il après la première année ?', 'r' => 'Le nom de domaine et l\'hébergement se renouvellent chaque année. Le devis précise la durée couverte par la prestation et le coût du renouvellement, pour qu\'aucun site ne s\'éteigne faute de paiement. La maintenance technique (mises à jour, sauvegardes, corrections) est proposée à part, sur devis.'],
        ['q' => 'Faut-il fournir les textes du site ?', 'r' => 'Non, mais il faut fournir la matière : vos services, vos zones, vos horaires, vos réponses aux questions fréquentes, vos photos. Les textes sont ensuite rédigés ou réécrits pour être clairs, adaptés au téléphone et utiles au référencement. Vous les relisez et les validez avant la mise en ligne.'],
        ['q' => 'Le site vitrine peut-il recevoir des messages WhatsApp ?', 'r' => 'Oui. Un bouton ouvre une conversation WhatsApp avec votre numéro, éventuellement avec un message prérempli, en plus du formulaire et du numéro cliquable. Pour un numéro béninois, le lien doit comporter les dix chiffres en vigueur depuis le 30 novembre 2024, précédés de 229 ; il est testé depuis un vrai téléphone avant la livraison.'],
        ['q' => 'WordPress ou site développé sur mesure : que choisir ?', 'r' => 'WordPress convient si vous publierez souvent vous-même et acceptez un suivi régulier des mises à jour. Un développement sur mesure avec Laravel donne un site plus léger, sans extensions tierces, qui accueille plus facilement une boutique, une réservation ou un espace client plus tard. Le choix se fait au cadrage, selon vos usages.'],
        ['q' => 'Travaillez-vous avec des entreprises en Europe et au Canada ?', 'r' => 'Oui. Richard SALANON a travaillé pour des clients en France, en Belgique, en Suisse et au Canada, ainsi que dans dix pays d\'Afrique, du Bénin à la RD Congo. Les mentions légales et la politique de confidentialité sont alors adaptées au pays de l\'entreprise, et le paiement peut se faire par virement, carte bancaire ou PayPal.'],
        ['q' => 'Quels moyens de paiement sont acceptés ?', 'r' => 'Le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. Les modalités de paiement sont indiquées sur le devis, avant signature.'],
    ],

    'sources' => [
        ['titre' => 'StatCounter Global Stats, parts de marché mobile, ordinateur et tablette au Bénin', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/benin', 'date' => '2026-10-03'],
        ['titre' => 'StatCounter Global Stats, parts de marché mobile, ordinateur et tablette en France', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/france', 'date' => '2026-10-03'],
        ['titre' => 'DataReportal, rapport Digital 2026 consacré au Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-03'],
        ['titre' => 'Google Search Central, bonnes pratiques de l\'indexation mobile', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/mobile/mobile-sites-mobile-first-indexing', 'date' => '2026-10-03'],
        ['titre' => 'Google Search Central, guide de démarrage en référencement', 'url' => 'https://developers.google.com/search/docs/fundamentals/seo-starter-guide', 'date' => '2026-10-03'],
        ['titre' => 'web.dev, les signaux Web essentiels (Core Web Vitals)', 'url' => 'https://web.dev/articles/vitals', 'date' => '2026-10-03'],
        ['titre' => 'Aide Google Business Profile, règles de représentation des établissements', 'url' => 'https://support.google.com/business/answer/3038177?hl=fr', 'date' => '2026-10-03'],
        ['titre' => 'W3Techs, part de marché de WordPress', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress', 'date' => '2026-10-03'],
        ['titre' => 'Registre du .bj (Jeny SAS), charte de nommage et tarif', 'url' => 'https://nic.bj/', 'date' => '2026-10-03'],
        ['titre' => 'Afnic, tout savoir sur les noms de domaine', 'url' => 'https://www.afnic.fr/noms-de-domaine/tout-savoir/', 'date' => '2026-10-03'],
        ['titre' => 'Afnic, foire aux questions générale (éligibilité au .fr, bureaux d\'enregistrement)', 'url' => 'https://www.afnic.fr/fr/ressources/faq/faq-generale/', 'date' => '2026-10-03'],
        ['titre' => 'ARCEP Bénin, passage des numéros de téléphone à 10 chiffres le 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-03'],
        ['titre' => 'WhatsApp, aide sur la discussion directe (liens wa.me)', 'url' => 'https://faq.whatsapp.com/5913398998672934', 'date' => '2026-10-03'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, le règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, cookies et autres traceurs : que dit la loi ?', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi', 'date' => '2026-10-03'],
        ['titre' => 'Service Public Entreprendre, mentions obligatoires sur le site internet d\'un entrepreneur individuel', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F31228', 'date' => '2026-10-03'],
        ['titre' => 'W3C, Web Content Accessibility Guidelines (WCAG) 2.2', 'url' => 'https://www.w3.org/TR/WCAG22/', 'date' => '2026-10-03'],
        ['titre' => 'W3C, comprendre le critère 2.5.8 sur la taille minimale des cibles', 'url' => 'https://www.w3.org/WAI/WCAG22/Understanding/target-size-minimum.html', 'date' => '2026-10-03'],
        ['titre' => 'Let\'s Encrypt, certificats TLS gratuits', 'url' => 'https://letsencrypt.org/', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'landing-page-haute-conversion', 'refonte-migration-de-site', 'referencement-naturel-seo', 'seo-local-google-business', 'maintenance-support'],
        'comparatifs' => ['n8n-vs-make-vs-zapier', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
