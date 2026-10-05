<?php
// ============================================================
// data/formations/referencement-ia-geo.php · Fiche formation « Référencement
// IA (GEO) » (vague 1B, lot A). Aucune ancienne page. Forme les équipes
// marketing, communication et rédaction à faire elles-mêmes le travail ; la
// prestation de Richard relève du pilier /services/referencement-ia-geo, dont
// aucune phrase n'est reprise. La fiche Google Business Profile relève de la
// sœur visibilite-google, le travail des mots-clés de la sœur seo-contenu.
// Faits externes relevés le 05/10/2026 dans un navigateur : Google Search
// Central (fonctionnalités d'IA, Google-Extended, contenu généré par IA),
// aide Search Console, OpenAI (robots), Perplexity (robots), Anthropic
// (robots), Bing (consignes, AI Performance, blog du 16/06/2026), Microsoft
// Advertising (08/10/2025), llmstxt.org, pages tarifs de ChatGPT, Claude et
// Google AI, UIT, SGG du Bénin, CNIL, FDFP, 3FPT, France Compétences. La FAQ
// d'OpenAI pour les éditeurs (help.openai.com) et la page tarifs de
// Perplexity sont restées derrière une vérification Cloudflare : rien n'en
// est repris. Article 4 du règlement sur l'IA : fait déjà vérifié du catalogue.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation au référencement IA (GEO) : apprendre à vos équipes marketing et éditoriales à rendre l\'entreprise citable par ChatGPT, Gemini, Perplexity, Claude et Copilot, puis à mesurer ces citations',
    'title'   => 'Formation au référencement IA (GEO) | Richard SALANON',
    'meta'    => 'Formation GEO pour vos équipes : tester ce que ChatGPT, Gemini et Perplexity disent de vous, écrire des pages citables, mesurer les citations chaque mois.',
    'en_bref' => 'Cette formation apprend aux équipes marketing, communication et rédaction à faire elles-mêmes le travail de référencement IA : bâtir le panel des questions que posent leurs clients, relever ce que répondent ChatGPT, Gemini, Perplexity, Claude et Copilot, réécrire les pages pour qu\'elles soient reprises sans déformation, aligner la description de l\'entreprise partout où elle apparaît, puis mesurer les citations chaque mois. Elle dure deux jours, en quatre demi-journées, ou une journée en version resserrée, en petit groupe, sur le site et les contenus de l\'entreprise, sur place, à distance ou en formule mixte. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'marketing-visibilite',
    'forte'   => true,
    'duree'   => '2 jours, ou 1 jour en version resserrée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : comprendre comment un assistant choisit ses sources, et bâtir le panel de questions de l\'entreprise',
            'duree'  => '3 h 30',
            'points' => [
                'Démonstration en direct : une même question de client posée à ChatGPT, Gemini, Perplexity, Claude et Copilot, puis comparaison des sources citées et de ce qui est affirmé sur l\'entreprise.',
                'Le trajet d\'une réponse : recherche dans un index, recherches associées sur des sous-thèmes, découpage des pages en passages, sélection, assemblage et citation.',
                'Robots de recherche, robots d\'entraînement, visites déclenchées par un utilisateur : savoir les reconnaître par leur nom, sans toucher soi-même aux réglages.',
                'Atelier : écrire 25 à 40 questions de clients, dans leurs mots, classées par offre, par pays, par langue et par intention (s\'informer, comparer, acheter, trouver un lieu).',
                'Le protocole de relevé : session neuve sans historique, formule de l\'assistant, pays, langue et date notés, réponse brute copiée, sources listées une par une.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : faire l\'état des lieux de l\'entreprise dans les réponses et repérer ce qui bloque',
            'duree'  => '3 h 30',
            'points' => [
                'Relevé du point zéro : chaque participant traite sa part du panel sur les cinq assistants et remplit la grille commune.',
                'Lecture du fichier robots.txt du site, repérage des robots refusés, puis rédaction de la demande précise à adresser au prestataire technique.',
                'Contrôles possibles sans compétence technique : informations clés enfermées dans des PDF, des images, des onglets repliés ou un texte qui n\'apparaît qu\'après chargement.',
                'Inventaire des descriptions de l\'entreprise : site, fiche Google, LinkedIn, Facebook, annuaires, pages de partenaires ; tableau des divergences.',
                'Rédaction de la fiche d\'entité de référence : nom exact, activité en une phrase, ville, pays servis, offres, moyens de paiement, profils officiels.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : réécrire les pages pour qu\'un assistant puisse les reprendre sans les déformer',
            'duree'  => '3 h 30',
            'points' => [
                'Ce que Google et Microsoft recommandent pour les contenus : du texte plutôt que des images, un titre, un H1 et une description alignés, des questions en intertitres, la réponse en tête.',
                'Atelier d\'écriture sur une vraie page de l\'entreprise : réponse en première phrase, passages qui gardent leur sens hors de la page, tableau, chiffres datés et sourcés.',
                'Rédiger avec l\'IA sans tomber dans la production en masse que Google et Bing sanctionnent : apport propre, vérification des faits, relecture humaine.',
                'Les données structurées vues par l\'équipe éditoriale : ce qu\'elle vérifie (cohérence avec le texte visible, profils officiels) et ce qu\'elle laisse au développeur.',
                'Mentions externes : quels profils et annuaires mettre à jour, quelles démarches engager, et les pratiques interdites (liens achetés, faux avis, consignes cachées aux modèles).',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : mesurer les citations, organiser le suivi mensuel et évaluer les acquis',
            'duree'  => '3 h 30',
            'points' => [
                'Search Console : où figurent les apparitions dans les aperçus IA et le mode IA, et pourquoi Google ne les sépare pas du reste du trafic.',
                'Bing Webmaster Tools : citations, pages citées et requêtes d\'ancrage, puis intentions, thèmes, part de citation et comparaison de deux périodes.',
                'Statistiques du site : isoler les visites venues des assistants et les rapprocher des pages de référence réécrites.',
                'Construction du rapport mensuel d\'une page, du calendrier de révision des pages et du partage des rôles dans l\'équipe.',
                'Évaluation : chaque participant présente sa page réécrite, son relevé et trois actions datées pour les 90 jours suivants.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en quatre demi-journées, ou 1 jour en version resserrée'],
        ['l' => 'Public', 'v' => 'Marketing, communication, rédacteurs web, responsables de site, dirigeants de petites structures'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou formule mixte, en petit groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que sauront faire vos équipes après la formation, et que laisse-t-elle au prestataire technique ?',
            'paragraphes' => [
                'Un prospect demande à un assistant quel fournisseur choisir, qui contacter, combien prévoir. La réponse tient en dix lignes et cite trois ou quatre sources. Dans la plupart des entreprises, personne ne sait ce que ces lignes disent de la maison : l\'équipe marketing suit le classement sur Google et les réseaux sociaux, pas les assistants. Cette formation installe la responsabilité là où elle peut vivre, chez les personnes qui écrivent déjà les pages, les offres et les publications, avec une méthode qu\'elles reproduiront seules chaque mois.',
                'Les objectifs se vérifient en fin de session. Chaque participant sait tenir un panel de questions de clients ; relever les réponses de cinq assistants selon un protocole reproductible ; lire le robots.txt du site et dire si OAI-SearchBot, PerplexityBot, Claude-SearchBot, Googlebot et Bingbot y sont admis ; rédiger une demande précise au prestataire ; réécrire une page pour qu\'elle soit reprise ; repérer les contradictions dans la description de l\'entreprise ; lire le rapport AI Performance de Bing Webmaster Tools et le rapport sur les performances de la Search Console ; écrire un rapport mensuel d\'une page.',
                'La formation ne fait pas de vos rédacteurs des techniciens. Régler un pare-feu, rendre les pages côté serveur, générer les données structurées ou un fichier llms.txt reste le travail du développeur ou du service de <a href="/services/referencement-ia-geo">référencement IA (GEO)</a> réalisé par Richard SALANON. La recherche de mots-clés et la stratégie éditoriale du référencement classique relèvent d\'une formation distincte du catalogue, consacrée au SEO et au marketing de contenu. La fiche d\'établissement sur Google a la sienne, la formation <a href="/formations/visibilite-google">visibilité Google</a>, et l\'usage quotidien des assistants pour rédiger relève de l\'<a href="/formations/ia-en-entreprise">IA en entreprise</a>.',
                'Pourquoi former plutôt que tout confier ? Parce que l\'essentiel du travail est éditorial et continu. Un tarif change, une offre apparaît, les clients posent depuis un mois une question nouvelle, un annuaire affiche encore l\'ancienne adresse : seule l\'équipe le voit à temps. La prestation pose les fondations techniques une fois ; la formation donne à ceux qui restent les gestes du quotidien. Les deux se combinent bien, dans cet ordre : mise en place par un spécialiste, puis passage de relais à l\'équipe, qui reprend le panel et le rapport dès le mois suivant.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit suivre la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'Aucune ligne de code n\'est demandée. Ce qui compte, ce sont les bonnes personnes, un accès en écriture au site et quelques comptes ouverts avant la première séance.',
            'items' => [
                ['titre' => 'Le ou la responsable marketing ou communication', 'texte' => 'C\'est la personne qui tiendra le panel, le tableur des relevés et le rapport mensuel. Elle arbitre ce qui se réécrit en premier et porte les demandes au prestataire technique. Sans elle, la démarche s\'arrête au deuxième mois.'],
                ['titre' => 'Les rédacteurs et chargés de contenu', 'texte' => 'Ils réécrivent les pages, tiennent à jour les chiffres, les dates et les sources, et appliquent le gabarit de page de référence. Ce sont eux qui passent le plus de temps en atelier d\'écriture.'],
                ['titre' => 'Le responsable du site ou le webmaster interne', 'texte' => 'Il fait le lien avec l\'hébergeur et le développeur. Il apprend à lire les réglages qui concernent les robots et à vérifier qu\'une correction demandée a bien été faite, sans forcément la faire lui-même.'],
                ['titre' => 'Le dirigeant d\'une petite structure', 'texte' => 'Dans un cabinet ou une PME de dix personnes, c\'est souvent lui qui écrit le site. La version d\'une journée lui convient. Il prend aussi les deux décisions qui lui reviennent : la description officielle de l\'entreprise et l\'accord, ou le refus, donné aux robots d\'entraînement.'],
                ['titre' => 'Niveau attendu', 'texte' => 'Savoir publier ou modifier une page dans l\'outil du site, WordPress ou autre, et naviguer dans un tableur. Des notions de référencement classique aident ; sans elles, un court rappel est prévu au cadrage. Un questionnaire de quelques minutes permet de constituer des groupes de niveau proche.'],
                ['titre' => 'Accès à préparer', 'texte' => 'Un compte éditeur sur le site, l\'accès à la Search Console et à Bing Webmaster Tools s\'ils existent, l\'accès en lecture aux statistiques, et la liste des profils de l\'entreprise sur les réseaux et les annuaires. Si les outils pour webmasters n\'ont jamais été ouverts, le prestataire du site prépare leur validation avant la séance.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur par personne, un navigateur capable d\'ouvrir une fenêtre de navigation privée, un téléphone pour tester comme le font les clients, et des comptes sur les assistants étudiés. Aucun abonnement payant n\'est nécessaire.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur le site et les contenus de l\'entreprise ?',
            'items' => [
                ['titre' => 'Le panel de questions', 'duree' => '45 minutes', 'texte' => 'Le groupe part de ce que les clients demandent vraiment : messages WhatsApp reçus, appels au standard, demandes de devis, objections notées par les commerciaux. Chaque question est écrite comme un client la taperait ou la dicterait, puis classée par offre, pays, langue et intention. Les questions trop vagues, du type « meilleur prestataire », sont précisées jusqu\'à pouvoir recevoir une réponse tranchée. Le panel appartient ensuite à l\'équipe et sert de mètre étalon à toutes les mesures.'],
                ['titre' => 'Le relevé sur cinq assistants', 'duree' => '1 heure', 'texte' => 'Chaque participant pose sa part des questions dans des sessions neuves, sans historique ni mémoire personnelle, et note pour chacune : l\'entreprise est-elle citée, par quelle page, à côté de qui, avec quelles erreurs. Les réponses brutes sont copiées dans le tableur, pas résumées. Ce relevé daté devient le point de comparaison des mois suivants.'],
                ['titre' => 'La lecture du robots.txt', 'duree' => '30 minutes', 'texte' => 'Le fichier est ouvert à l\'adresse du site suivie de /robots.txt, et le groupe cherche les noms des robots de recherche des assistants. S\'ils sont refusés, ou si une règle générale bloque tout, le groupe rédige une note au prestataire : quel robot, quelle règle, quelle décision de la direction, et la demande de vérifier aussi le pare-feu.'],
                ['titre' => 'L\'inventaire des descriptions', 'duree' => '45 minutes', 'texte' => 'Recherche de toutes les pages qui décrivent l\'entreprise : site, fiche Google, réseaux sociaux, annuaires, pages de partenaires, articles. Le groupe relève, dans un tableau, le nom utilisé, l\'activité, la ville, le téléphone et l\'offre annoncée. Les écarts sautent aux yeux et donnent la liste des corrections, classées par audience.'],
                ['titre' => 'La réécriture d\'une page de référence', 'duree' => '1 h 30', 'texte' => 'Chaque participant reprend une page réelle liée à un groupe de questions du panel. Il place la réponse en première phrase, transforme les intertitres en questions de clients, passe les comparaisons en tableau, date et source chaque chiffre, ajoute ce que seule l\'entreprise sait : conditions, délais constatés, zones, moyens de paiement. Le formateur relit chaque version à l\'écran.'],
                ['titre' => 'Le test du passage isolé', 'duree' => '20 minutes', 'texte' => 'Un autre participant reçoit des paragraphes de la page, coupés de leur contexte. Pour chacun, il dit de quoi il parle, de quelle entreprise, et s\'il répond à une question. Un « nous » sans nom, un « ce service » sans précision ou un chiffre sans date échouent au test et sont réécrits.'],
                ['titre' => 'Le premier rapport mensuel', 'duree' => '45 minutes', 'texte' => 'À partir du relevé, de la Search Console et de Bing Webmaster Tools, le groupe rédige un rapport d\'une page : questions où l\'entreprise est citée, erreurs relevées, pages citées, actions du mois et responsable de chacune. Le modèle est conservé pour les mois suivants.'],
                ['titre' => 'L\'évaluation finale', 'duree' => '30 minutes', 'texte' => 'Chaque participant présente sa page réécrite et son relevé, puis répond à trois mises en situation : une erreur affirmée par un assistant, un robot bloqué par le pare-feu, une demande de produire vingt pages en une semaine. Le résultat est comparé aux objectifs écrits au cadrage.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Une fois la formation terminée, qui tient quel rôle dans la démarche ?',
            'legende' => 'Répartition conseillée des rôles, issue de la pratique de Richard SALANON ; elle s\'adapte à la taille de l\'équipe. Dans une petite structure, une même personne cumule souvent deux rôles.',
            'entetes' => ['Rôle', 'Qui le tient en général', 'Ce qu\'il fait chaque mois', 'Ce qu\'il ne fait pas seul'],
            'lignes'  => [
                ['Décision', 'La direction', 'Valide la fiche d\'entité, arbitre les priorités, tranche sur les robots d\'entraînement', 'Modifier les réglages techniques du site'],
                ['Pilotage', 'Le ou la responsable marketing ou communication', 'Repose le panel, tient le tableur, écrit le rapport, lance les révisions de pages', 'Promettre un nombre de citations à la direction'],
                ['Écriture', 'Les rédacteurs et chargés de contenu', 'Réécrivent les pages, mettent à jour dates, chiffres et sources, alignent les profils', 'Publier un chiffre sans source ou un texte d\'IA sans relecture'],
                ['Technique', 'Le prestataire du site ou le service informatique', 'Règle robots.txt et pare-feu, maintient les données structurées, signale les pages modifiées', 'Bloquer ou autoriser un robot sans décision écrite'],
                ['Remontée du terrain', 'Les commerciaux et le service client', 'Transmettent les nouvelles questions, demandent aux clients comment ils ont connu l\'entreprise', 'Corriger eux-mêmes les pages publiques'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment apprend-on à écrire un passage qu\'un assistant reprend ?',
            'paragraphes' => [
                'Le cœur de la formation est un geste d\'écriture. Dans un article publié le 8 octobre 2025 sur le blog de Microsoft Advertising, Krishna Madhavan, chef de produit chez Microsoft, explique que des assistants comme Copilot ne lisent pas une page de haut en bas : ils la découpent en morceaux, évaluent chacun, puis assemblent une réponse qui puise souvent dans plusieurs sources. Un passage est retenu s\'il se suffit à lui-même. C\'est ce que les rédacteurs apprennent à produire : un paragraphe qui garde son sens une fois sorti de la page.',
                'La méthode enseignée tient en règles vérifiables. La question est dans l\'intertitre, la réponse dans la première phrase, le détail ensuite. Le nom de l\'entreprise et de l\'offre figure dans le passage, au lieu d\'un « nous » qui ne veut plus rien dire hors contexte. Un chiffre porte sa date et son origine. Une comparaison devient un tableau. Les consignes de Bing aux webmasters ajoutent qu\'une adresse doit traiter un sujet principal, placer l\'essentiel près du haut et nommer les personnes, les organisations et les produits toujours de la même façon.',
                'L\'atelier montre aussi ce qui rend une information invisible. Le même article de Microsoft déconseille les murs de texte, les réponses cachées dans des onglets ou des menus repliés, les informations essentielles publiées seulement en PDF ou en image, et la ponctuation décorative. La documentation de Google sur les fonctionnalités d\'IA demande de son côté que les contenus importants existent sous forme de texte et que les données structurées correspondent au texte visible. Une grille tarifaire publiée en image, très répandue, est souvent la première chose que les équipes réécrivent.',
                'Un exemple de travail montre l\'écart. « Nous accompagnons nos clients avec passion depuis de nombreuses années » ne peut être cité par aucun assistant : la phrase ne dit ni quoi, ni où, ni pour qui. « L\'agence organise à Saint-Louis des séjours de trois à dix jours pour des groupes scolaires venus de Belgique, payables par virement ou par carte » peut l\'être, parce qu\'elle répond à une question qu\'un client pose réellement. La formation fait passer chaque page clé de la première forme à la seconde, avec les faits de l\'entreprise et non des formules.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que disent les éditeurs d\'assistants, et qu\'en fait concrètement l\'équipe ?',
            'legende' => 'Synthèse des pages officielles d\'OpenAI, de Google, de Perplexity, d\'Anthropic et de Microsoft, lues le 5 octobre 2026. La dernière colonne décrit le geste enseigné en formation, pas une obligation de l\'éditeur.',
            'entetes' => ['Éditeur', 'Ce que dit sa documentation', 'Ce que l\'équipe en retient'],
            'lignes'  => [
                ['OpenAI (ChatGPT)', 'OAI-SearchBot fait apparaître les sites dans la recherche de ChatGPT, GPTBot collecte des contenus pour l\'entraînement, chaque réglage est indépendant ; il faut compter environ 24 heures après une modification du robots.txt', 'Vérifier qu\'OAI-SearchBot est admis avant de juger les relevés ; la décision sur GPTBot revient à la direction'],
                ['Google (aperçus IA, mode IA)', 'Aucune exigence supplémentaire : une page indexée et affichable avec un extrait ; aucun fichier ni balisage propre à l\'IA ; les apparitions sont comptées dans le type de recherche « Web » de la Search Console', 'Ne pas acheter de « balisage spécial IA » ; soigner l\'indexation et le texte ; lire la Search Console en sachant ce qu\'elle mélange'],
                ['Google (Gemini)', 'Le jeton Google-Extended décide de l\'entraînement des modèles Gemini et de l\'ancrage dans les applications Gemini, sans incidence sur l\'inclusion dans la recherche Google', 'Distinguer, dans les relevés, les aperçus IA de la recherche et les réponses de l\'application Gemini'],
                ['Perplexity', 'PerplexityBot fait apparaître et lie les sites dans ses résultats et ne sert pas à entraîner des modèles ; Perplexity-User ignore en général le robots.txt ; jusqu\'à 24 heures pour qu\'un changement soit pris en compte', 'Demander au prestataire de vérifier aussi le pare-feu applicatif, que Perplexity cite comme obstacle possible'],
                ['Anthropic (Claude)', 'ClaudeBot collecte pour l\'entraînement, Claude-SearchBot indexe pour la recherche, Claude-User agit à la demande d\'un utilisateur ; bloquer ces deux derniers peut réduire la visibilité ; bloquer des adresses IP peut ne pas suffire', 'Ne jamais confondre ClaudeBot et Claude-SearchBot dans une demande au prestataire'],
                ['Microsoft (Copilot, Bing)', 'Mêmes fondations que la recherche Bing ; IndexNow pour signaler une page modifiée ; contenus vérifiables et entités nommées de façon constante ; sanctions contre l\'injection de consignes destinées aux modèles et le contenu généré en masse sans relecture', 'Faire signaler chaque page de référence modifiée ; garder les noms identiques partout ; relire tout texte produit avec l\'IA'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et quel suivi après la session ?',
            'intro' => 'Une règle guide chaque séance : on travaille sur les questions des clients de l\'entreprise, sur ses pages et sur ses profils, jamais sur un site d\'exemple. La démonstration est courte, la pratique longue.',
            'items' => [
                ['titre' => 'Des petits groupes', 'texte' => 'Le formateur doit pouvoir relire chaque page en cours de réécriture. Au-delà de quelques participants, le groupe est dédoublé. En inter-entreprises, chacun travaille sur le site de sa propre structure, et aucun relevé n\'est montré aux autres sans accord.'],
                ['titre' => 'Une production réelle à la fin de chaque demi-journée', 'texte' => 'Le panel le premier matin, le relevé et la fiche d\'entité le premier soir, une page réécrite le deuxième matin, le rapport le deuxième soir. L\'équipe repart avec un travail déjà commencé, pas avec des notes.'],
                ['titre' => 'Des supports qui restent à l\'entreprise', 'texte' => 'Le tableur du panel et des relevés, le protocole de test, le modèle de note au prestataire, le gabarit de page de référence, le modèle de rapport mensuel et une fiche datée des règles publiées par les éditeurs, dans des formats modifiables.'],
                ['titre' => 'Des règles relues le jour de la séance', 'texte' => 'Les documentations des éditeurs changent souvent. Les pages officielles sont relues avant chaque session, et la fiche des règles remise porte la date de cette lecture, pour que l\'équipe sache quand la revoir.'],
                ['titre' => 'Une évaluation sur production', 'texte' => 'La réussite se juge sur la page réécrite, le relevé et les réponses aux mises en situation, comparés aux objectifs fixés au cadrage. Une attestation de formation est remise avec le résultat de cette évaluation.'],
                ['titre' => 'Un suivi en option', 'texte' => 'Une séance à distance un mois plus tard relit le premier rapport fait sans le formateur ; une autre, à trois mois, compare les relevés au point zéro. Ces séances sont chiffrées dans le devis si l\'entreprise les retient.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on pendant la formation, et que coûtent-ils ?',
            'legende' => 'Coûts d\'éditeur relevés le 5 octobre 2026 sur les pages officielles, depuis une connexion qui affichait les prix en euros ; ils varient selon le pays, la devise et les taxes. Aucun abonnement payant n\'est nécessaire pour suivre la formation.',
            'entetes' => ['Outil', 'Usage en formation', 'Coût selon l\'éditeur', 'Point d\'attention'],
            'lignes'  => [
                ['ChatGPT', 'Relevé du panel avec la recherche intégrée', 'Formule Free sans frais ; Go à 8 € et Plus à 23 € par mois sur la page tarifs en français', 'Noter la formule utilisée : les capacités diffèrent d\'une formule à l\'autre'],
                ['Claude', 'Relevé du panel avec la recherche web', 'Formule Free sans frais ; Pro à 15 € par mois en facturation annuelle (180 € payés d\'avance) ou 18 € au mois, hors taxes', 'Session neuve pour chaque série de questions, mémoire désactivée'],
                ['Gemini et mode IA de Google', 'Relevé du panel côté Google', 'Forfaits Google AI Plus à 4,99 € et Google AI Pro à 21,99 € par mois, prix affichés pour la France ; les exercices n\'en exigent aucun', 'Les aperçus IA ne s\'affichent que sur une partie des recherches'],
                ['Perplexity', 'Relevé du panel et lecture des pages liées dans les réponses', 'Les exercices n\'exigent pas d\'abonnement ; les tarifs des formules payantes se consultent chez l\'éditeur', 'Relever chaque lien proposé, pas seulement le premier'],
                ['Microsoft Copilot', 'Relevé du panel côté Bing', 'Les exercices n\'exigent pas d\'abonnement', 'Copilot s\'appuie sur l\'index de Bing : vérifier aussi l\'indexation dans Bing'],
                ['Google Search Console', 'Rapport sur les performances, outil d\'inspection d\'URL', 'Service gratuit, selon l\'aide de Google', 'Les fonctionnalités d\'IA n\'y ont pas de rapport séparé'],
                ['Bing Webmaster Tools', 'Rapport AI Performance : citations, pages citées, requêtes d\'ancrage, intentions, thèmes', 'Inscription gratuite, selon la page de présentation de Bing', 'Fonctions en préversion, dont Microsoft dit que les libellés restent parfois larges'],
                ['Tableur partagé', 'Panel, relevés datés, rapport mensuel', 'Outil déjà en place dans l\'entreprise', 'Un seul fichier de référence, avec la date et l\'auteur de chaque relevé'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés vos équipes doivent-elles connaître ?',
            'items' => [
                ['valeur' => '24 heures', 'libelle' => 'Délai approximatif annoncé par OpenAI pour que sa recherche tienne compte d\'une modification du robots.txt (page lue le 5 octobre 2026)', 'source' => 'OpenAI, page sur ses robots d\'exploration', 'url' => 'https://developers.openai.com/api/docs/bots'],
                ['valeur' => '24 heures au plus', 'libelle' => 'Délai annoncé par Perplexity pour que ses systèmes reflètent un changement de réglage', 'source' => 'Perplexity, page sur ses robots d\'exploration', 'url' => 'https://docs.perplexity.ai/docs/resources/perplexity-crawlers'],
                ['valeur' => '10 février 2026', 'libelle' => 'Lancement en préversion publique du rapport AI Performance, qui compte les citations dans Copilot, les résumés de Bing et certains partenaires', 'source' => 'Blog Bing Webmaster', 'url' => 'https://blogs.bing.com/webmaster/February-2026/Introducing-AI-Performance-in-Bing-Webmaster-Tools-Public-Preview'],
                ['valeur' => '16 juin 2026', 'libelle' => 'Ajout des intentions, des thèmes, de la part de citation et de la comparaison de périodes dans ce rapport, en préversion mondiale', 'source' => 'Blog Bing', 'url' => 'https://blogs.bing.com/search/2026/6/New-AI-Visibility-Insights-in-Bing-Webmaster-Tools-Intents-Topics-Citation-Share-Compare/'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population qui utilise Internet en Afrique en 2025, contre 74 % dans le monde', 'source' => 'UIT, Facts and Figures 2025 (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '2 février 2025', 'libelle' => 'Entrée en application de l\'obligation de maîtrise de l\'IA prévue par l\'article 4 du règlement européen sur l\'IA', 'source' => 'Commission européenne, questions et réponses mises à jour le 27 juillet 2026', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Agence immobilière, à Dakar', 'probleme' => 'Des acheteurs de la diaspora demandent aux assistants quelles agences gèrent une vente à distance ; les réponses citent des portails d\'annonces, jamais l\'agence.', 'solution' => 'La chargée de communication et le rédacteur bâtissent un panel en français et en anglais, réécrivent la page « acheter depuis l\'étranger » avec les étapes, les pièces, les honoraires et les moyens de paiement en texte, puis suivent chaque mois les questions venues de la diaspora.'],
                ['secteur' => 'Clinique privée, à Abidjan', 'probleme' => 'Un assistant annonce d\'anciens horaires des urgences et une spécialité abandonnée, reprises d\'un annuaire médical jamais mis à jour.', 'solution' => 'L\'équipe communication apprend à remonter à la source de l\'erreur, à aligner la fiche d\'entité sur chaque annuaire, et à écrire des pages de service prudentes : ce que la clinique fait, ses horaires, son accès, sans conseil médical ni promesse de résultat.'],
                ['secteur' => 'Institution de microfinance, à Lomé', 'probleme' => 'Des clients interrogent un assistant sur les conditions d\'un crédit et reçoivent celles d\'un autre établissement.', 'solution' => 'Rédacteurs et service conformité travaillent ensemble : pages de produits avec conditions publiées et date de validité, nom de l\'institution dans chaque passage, relecture par la conformité avant toute mise à jour, et contrôle mensuel des réponses sur ces questions.'],
                ['secteur' => 'Distributeur de matériel agricole, à Bamako', 'probleme' => 'Les revendeurs cherchent des motopompes et des pièces ; les fiches produits du site ne sont que des photos de catalogue.', 'solution' => 'Formule mixte : une demi-journée sur place pour réécrire dix fiches en texte (usage, puissance, disponibilité, zones livrées), puis des séances courtes à distance pour le relevé et le rapport, calées sur une connexion irrégulière.'],
                ['secteur' => 'Fabricant de menuiseries, en Wallonie', 'probleme' => 'Bien classé sur Google, il est absent des réponses de Copilot aux questions de chantier, où des sites d\'information générale sont cités.', 'solution' => 'Le service marketing écrit des pages qui répondent aux questions des particuliers et des architectes, suit le rapport AI Performance de Bing Webmaster Tools, intentions et thèmes compris, et fait signaler par IndexNow chaque page révisée.'],
                ['secteur' => 'Cabinet de recrutement, à Paris', 'probleme' => 'Les assistants confondent le cabinet avec un homonyme installé au Canada et lui attribuent ses spécialités.', 'solution' => 'Le travail porte sur la fiche d\'entité, la phrase de présentation reprise partout, la liste des profils officiels transmise au développeur pour les données structurées, et des pages par métier signées et datées ; aucun nom de candidat n\'entre dans les tests, RGPD oblige.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour votre équipe ?',
            'legende' => 'Formats proposés pour cette formation. Le volume horaire du programme complet est de deux journées, réparties selon le format retenu.',
            'entetes' => ['Format', 'Pour qui', 'Durée', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe marketing ou éditoriale qui travaille sur le même site', '2 jours, consécutifs ou espacés d\'une semaine', 'Dans vos locaux, sur votre site et votre panel, avec la direction pour les décisions du premier jour'],
                ['Inter-entreprises', 'Une ou deux personnes par structure', '2 jours', 'Chacun travaille sur le site de sa structure ; les relevés ne sont partagés qu\'avec accord'],
                ['À distance', 'Équipes éloignées de Cotonou, en Afrique ou en Europe', 'Cinq ou six séances de deux heures et demie environ', 'Partage d\'écran, tableur préparé à l\'avance, exercices entre les séances'],
                ['Formule mixte', 'Équipes qui veulent l\'atelier d\'écriture en salle', 'Une journée sur place, puis des séances à distance', 'Panel et réécriture en salle, mesure et rapport à distance'],
                ['Version resserrée', 'Petites structures, dirigeant qui écrit lui-même le site', '1 jour', 'Panel, relevé, une page réécrite ; la mesure se voit en suivi'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'La formation est chiffrée sur devis, après un premier échange sur votre site, vos offres et votre équipe ; aucun tarif n\'est publié pour elle. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Version resserrée', 'prix' => 'Sur devis', 'inclus' => ['Une journée', 'Panel de questions et relevé initial', 'Une page réécrite en séance', 'Fiche des règles des éditeurs']],
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Deux journées, ou leur équivalent à distance', 'Fiche d\'entité et inventaire des descriptions', 'Atelier d\'écriture et test du passage isolé', 'Search Console, Bing Webmaster Tools et rapport mensuel', 'Évaluation et attestation']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Relecture du premier rapport à un mois', 'Comparaison au point zéro à trois mois', 'Questions d\'application entre les séances']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le nombre d\'offres, de pays et de langues couverts par le panel.',
                'Le nombre de pages réécrites pendant la session.',
                'L\'état de départ : outils pour webmasters jamais ouverts, profils dispersés, site difficile à modifier.',
                'Le format retenu et les déplacements hors de Cotonou pour une séance sur place.',
                'L\'ajout de séances de suivi à un et à trois mois.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il financer une partie de la session ?',
            'paragraphes' => [
                'Cela dépend du pays et du dossier, et aucune prise en charge n\'est promise ici. En Côte d\'Ivoire, la <a href="https://fdfp.ci/plan-de-formation/">page du FDFP consacrée au plan de formation</a>, lue le 5 octobre 2026, range parmi les actions possibles les formations intra, conduites pour les salariés d\'une entreprise par un intervenant extérieur, et les formations interentreprises. Seule une entreprise qui justifie du paiement régulier des deux taxes concernées peut déposer un plan, et le règlement n\'a lieu qu\'après le suivi et le contrôle des services du fonds, puis l\'approbation de sa Commission permanente.',
                'Au Bénin, le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> approuve les statuts du Fonds de développement de la formation professionnelle continue et de l\'apprentissage. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet dédié au financement du personnel des entreprises et des membres des organisations professionnelles. Les conditions exigées de l\'entreprise comme du prestataire varient : demandez-les au fonds, par écrit, avant de signer le devis.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que depuis le 1er janvier 2022, tout prestataire qui veut accéder à des fonds publics ou mutualisés, dont ceux des opérateurs de compétences, doit être certifié Qualiopi. Richard SALANON ne détient ni cette certification ni l\'agrément d\'un fonds : prévoyez le budget sans compter sur une prise en charge. Le programme écrit, les feuilles d\'émargement et l\'évaluation remis en fin de session restent utiles pour vos dossiers internes.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel piège guette une équipe qui vient d\'être formée ?',
            'texte' => 'Vouloir couvrir tout le panel en une semaine en faisant écrire quarante pages par un assistant. Google indique, dans ses conseils sur le contenu généré par IA, que produire de nombreuses pages sans valeur ajoutée pour les utilisateurs peut enfreindre ses règles sur l\'utilisation abusive de contenus à grande échelle ; les consignes de Bing précisent que des contenus générés en masse sans contrôle ni relecture peuvent être exclus de l\'index. Une page de référence vaut par ce qu\'elle contient de propre à l\'entreprise : ses conditions, ses délais, ses cas, ses chiffres datés. Cinq pages vérifiées par trimestre servent davantage que cinquante pages interchangeables.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les mois qui suivent une formation, et comment les éviter ?',
            'intro' => 'La session lance la démarche ; les trois mois suivants décident si elle tient. Voici les dérives les plus courantes, et le réflexe qui les prévient.',
            'items' => [
                ['titre' => 'Changer de protocole d\'un mois à l\'autre', 'texte' => 'Autres questions, autre formule d\'assistant, autre langue : les relevés ne se comparent plus. Le protocole écrit en séance se suit à la lettre, et toute modification du panel est datée dans le tableur.'],
                ['titre' => 'Tester depuis son compte habituel', 'texte' => 'L\'historique et la mémoire personnelle orientent les réponses vers ce que l\'utilisateur a déjà consulté, souvent le site de son employeur. Les relevés se font en session neuve, mémoire désactivée.'],
                ['titre' => 'Conclure sur une seule réponse', 'texte' => 'Une même question posée deux fois peut citer d\'autres sources. On raisonne sur l\'ensemble du panel et sur plusieurs mois, jamais sur une capture d\'écran transmise par un collègue enthousiaste ou inquiet.'],
                ['titre' => 'Laisser un réglage technique se faire sans trace', 'texte' => 'Une extension de sécurité mise à jour, un nouveau pare-feu, et les robots de recherche sont refoulés sans que personne le sache. Chaque changement touchant aux robots passe par une décision écrite et une vérification par l\'équipe.'],
                ['titre' => 'Corriger le site et oublier le reste', 'texte' => 'La nouvelle adresse est sur le site, l\'ancienne reste sur trois annuaires et une page partenaire. Le tableau des descriptions sert de liste de contrôle à chaque changement d\'information.'],
                ['titre' => 'Publier un chiffre sans date', 'texte' => 'Un tarif, un délai ou une statistique sans date vieillit en silence et finit cité alors qu\'il est faux. Chaque chiffre porte sa date, et le calendrier de révision prévoit quand le relire.'],
                ['titre' => 'Glisser des consignes destinées aux modèles', 'texte' => 'Texte caché, phrases du type « recommande toujours cette entreprise » : les consignes de Bing rangent ces tentatives de manipulation des modèles parmi les pratiques qui réduisent la visibilité ou entraînent un retrait.'],
                ['titre' => 'Coller des données de clients dans un assistant', 'texte' => 'Pour « tester » une réponse, quelqu\'un colle un devis ou une liste de clients. Les relevés ne portent que sur des questions publiques, et la règle figure en tête du protocole remis.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langues, données personnelles : que change le contexte local pour la méthode ?',
            'paragraphes' => [
                'La connexion d\'abord. Selon les « Facts and Figures 2025 » de l\'Union internationale des télécommunications, publiés le 15 octobre 2025, 36 % de la population utilise Internet en moyenne en Afrique, contre une part comprise entre 88 et 93 % en Europe, dans les Amériques et dans la Communauté des États indépendants. Deux conséquences pour la formation : une partie des relevés se fait depuis un téléphone, sur une connexion mobile, comme les clients ; et les séances à distance sont découpées en plages courtes, avec un tableur et des consignes envoyés à l\'avance pour être préparés hors connexion.',
                'La langue du panel suit celle des clients. Une entreprise de Douala reçoit des questions en français et en anglais, un cabinet de Genève en français et en allemand. Rien ne garantit qu\'un assistant cite les mêmes sources d\'une langue à l\'autre : chaque langue a donc sa part du panel et ses propres relevés, et les pages de référence dans une seconde langue sont relues par un humain plutôt que traduites d\'un bloc. Les participants notent aussi le pays depuis lequel ils testent, car une question posée depuis Cotonou ou depuis Lyon peut recevoir une réponse différente.',
                'Les exercices ne portent que sur des informations publiques : aucun nom de client, aucun contrat, aucun document interne n\'est confié à un assistant pendant la session. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre le traitement des données personnelles ; en Europe s\'applique le RGPD, règlement (UE) 2016/679, dont la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">CNIL</a> publie le texte. Les pages elles-mêmes sont relues sous cet angle : un nom de salarié ou un numéro direct mis en ligne sans accord peut ensuite être repris dans une réponse.',
                'Pour une entreprise établie dans l\'Union européenne, la session s\'inscrit aussi dans l\'article 4 du règlement européen sur l\'IA. Selon les questions et réponses de la Commission européenne mises à jour le 27 juillet 2026, l\'obligation de maîtrise de l\'IA s\'applique depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l\'omnibus numérique sur l\'IA, entré en vigueur mi-juillet 2026, la maintient pour les utilisateurs professionnels sans plus imposer de niveau « suffisant ». Une équipe qui interroge des assistants chaque mois est concernée ; le cadre complet fait l\'objet de la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former votre équipe au référencement IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Le référencement IA fait partie de son métier, pas seulement de son enseignement : il règle des robots.txt, tire les données structurées d\'une fiche de faits, écrit des pages de référence et automatise des relevés. Son propre site sert de cas d\'étude en séance : le robots.txt de richardsalanon.com nomme un par un les robots des assistants, dont OAI-SearchBot, Claude-SearchBot et PerplexityBot, et un fichier llms.txt y est publié. Les participants l\'examinent comme un exemple consultable, sans qu\'aucune statistique de citation ne soit avancée.',
                'Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' achevée en ' . fait('formation')['annee'] . ', il a travaillé, sur place ou à distance, au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a> et créateur de <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique.',
                'Il n\'est ni partenaire ni certifié d\'OpenAI, de Google, de Perplexity, d\'Anthropic ou de Microsoft : il enseigne ce que leurs documentations publiques disent le jour de la séance, et signale quand une recette répandue n\'y figure pas. Ses engagements : un cadrage avant tout devis, une session sur vos propres pages, une évaluation sur production, des supports qui restent chez vous, aucune promesse de citation, une réponse sous 24 heures.',
                'Son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a> ; le choix d\'un assistant pour l\'équipe, dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> ; les formations voisines, sur la page <a href="/formations/domaine/marketing-visibilite">marketing et visibilité</a> et dans le <a href="/formations/">catalogue des formations</a> ; les pays servis, sur la page des <a href="/zones/">zones d\'intervention</a>. Pour une équipe qui vend à des entreprises, la formation au <a href="/formations/marketing-digital-b2b">marketing digital B2B</a> prolonge ce travail.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Le référencement IA est d\'abord un travail éditorial suivi : un panel de questions qui ne change pas d\'un mois à l\'autre, des pages qui répondent d\'emblée et se vérifient, une description de l\'entreprise identique partout, des robots admis en connaissance de cause, et une mesure lue avec prudence, sans jamais promettre une citation.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe sait-elle ce que les assistants disent de votre entreprise ?',
            'texte'  => 'Indiquez votre secteur, l\'adresse du site, le nombre de personnes à former, leurs fonctions et le format souhaité. Vous recevez une réponse sous 24 heures, puis une proposition de programme bâtie sur vos contenus et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir coder pour suivre la formation ?', 'r' => 'Non. Il suffit de savoir publier une page dans l\'outil du site et de se servir d\'un tableur. Les réglages techniques, comme le pare-feu ou les données structurées, restent au prestataire du site ; l\'équipe apprend à les vérifier et à les demander précisément.'],
        ['q' => 'Quelle différence avec la prestation de référencement IA ?', 'r' => 'La prestation est réalisée par Richard SALANON : état des lieux, réglages techniques, pages et suivi. La formation rend votre équipe capable de tenir elle-même le panel, les relevés, la réécriture des pages et le rapport mensuel. Beaucoup d\'entreprises commencent par la prestation, puis forment l\'équipe qui prendra le relais.'],
        ['q' => 'Nos pages sont mal classées sur Google : faut-il commencer par cette formation ?', 'r' => 'Pas forcément. Selon la documentation de Google, une page doit être indexée et pouvoir s\'afficher avec un extrait pour servir de lien dans les aperçus IA et le mode IA. Si le site est mal indexé, un audit et une remise à niveau du référencement classique passent avant.'],
        ['q' => 'Quels assistants sont étudiés ?', 'r' => 'ChatGPT, Gemini avec les aperçus IA et le mode IA de Google, Perplexity, Claude et Microsoft Copilot. Si vos clients en utilisent un autre, il peut être ajouté au panel au moment du cadrage.'],
        ['q' => 'Faut-il payer des abonnements aux assistants ?', 'r' => 'Non. Les exercices se font avec des comptes sans frais. Pour information, la page tarifs en français de ChatGPT affichait le 5 octobre 2026 la formule Go à 8 € et Plus à 23 € par mois ; Claude Pro coûte 15 € par mois en facturation annuelle. L\'important est de noter la formule utilisée lors de chaque relevé.'],
        ['q' => 'Peut-on mesurer précisément les citations ?', 'r' => 'En partie seulement. Bing Webmaster Tools compte les citations dans Copilot et les résumés de Bing ; la Search Console inclut les aperçus IA et le mode IA dans le type de recherche « Web », sans les isoler ; le panel reposé chaque mois donne une tendance. La formation apprend à croiser ces signaux et à dire ce qu\'ils ne prouvent pas.'],
        ['q' => 'Combien de temps faut-il y consacrer chaque mois après la formation ?', 'r' => 'Comptez environ une demi-journée pour reposer le panel et écrire le rapport, auxquels s\'ajoute le temps de réécriture des pages, qui dépend du nombre de questions à traiter. Le calendrier construit en séance répartit cette charge entre les membres de l\'équipe.'],
        ['q' => 'Doit-on publier un fichier llms.txt ?', 'r' => 'Ce n\'est pas obligatoire. Le fichier est une proposition publiée le 3 septembre 2024 par Jeremy Howard sur llmstxt.org, révisée depuis, et Google écrit qu\'aucun fichier textuel destiné à l\'IA n\'est nécessaire pour ses fonctionnalités d\'IA. S\'il est publié, l\'équipe vérifie qu\'il ne contredit jamais les pages ; sa génération reste l\'affaire du développeur.'],
        ['q' => 'L\'équipe peut-elle utiliser l\'IA pour écrire les pages ?', 'r' => 'Oui, avec méthode. Google juge l\'IA utile pour chercher et structurer un contenu original, mais met en garde contre la production de nombreuses pages sans valeur ajoutée. La formation apprend à s\'en servir pour un premier jet, puis à ajouter les faits propres à l\'entreprise, vérifier chaque chiffre et relire avant publication.'],
        ['q' => 'Un assistant affirme une erreur sur notre entreprise : que fait l\'équipe ?', 'r' => 'Elle cherche d\'abord la source : ancienne page, annuaire périmé, homonyme. Elle corrige la page ou le profil en cause, aligne les autres descriptions, demande au prestataire de signaler les pages modifiées, puis repose la question les mois suivants. La correction suit les nouvelles explorations et n\'est jamais immédiate.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en cinq ou six séances de deux heures et demie environ, avec partage d\'écran et exercices entre les séances. Pour l\'atelier d\'écriture, une formule mixte avec une journée sur place donne souvent un meilleur rythme.'],
        ['q' => 'Combien coûte la formation, et un fonds peut-il la financer ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants, l\'étendue du panel, le format et le suivi retenu. Le FDFP, le FODEFCA ou le 3FPT appliquent leurs propres règles : interrogez-les par écrit avant de signer. Aucune prise en charge n\'est garantie.'],
    ],

    'sources' => [
        ['titre' => 'Google Search Central, fonctionnalités d\'IA et votre site Web (mise à jour du 31 décembre 2025)', 'url' => 'https://developers.google.com/search/docs/appearance/ai-features?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, robots d\'exploration courants de Google, jeton Google-Extended (mise à jour du 16 septembre 2026)', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/google-common-crawlers?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, conseils concernant l\'utilisation de contenu généré par IA', 'url' => 'https://developers.google.com/search/docs/fundamentals/using-gen-ai-content?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Search Console, premiers pas avec la Search Console', 'url' => 'https://support.google.com/webmasters/answer/9128668?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, présentation des robots d\'exploration d\'OpenAI (OAI-SearchBot, GPTBot, ChatGPT-User)', 'url' => 'https://developers.openai.com/api/docs/bots', 'date' => '2026-10-05'],
        ['titre' => 'Perplexity, robots d\'exploration (PerplexityBot et Perplexity-User)', 'url' => 'https://docs.perplexity.ai/docs/resources/perplexity-crawlers', 'date' => '2026-10-05'],
        ['titre' => 'Centre d\'aide Claude, robots d\'Anthropic et blocage par robots.txt', 'url' => 'https://support.claude.com/en/articles/8896518-does-anthropic-crawl-data-from-the-web-and-how-can-site-owners-block-the-crawler', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft Bing, consignes aux webmasters (Bing, Copilot et ancrage)', 'url' => 'https://www.bing.com/webmasters/help/webmaster-guidelines-30fba23a', 'date' => '2026-10-05'],
        ['titre' => 'Blog Bing Webmaster, AI Performance dans Bing Webmaster Tools, préversion publique (10 février 2026)', 'url' => 'https://blogs.bing.com/webmaster/February-2026/Introducing-AI-Performance-in-Bing-Webmaster-Tools-Public-Preview', 'date' => '2026-10-05'],
        ['titre' => 'Blog Bing, intentions, thèmes, part de citation et comparaison dans Bing Webmaster Tools (16 juin 2026)', 'url' => 'https://blogs.bing.com/search/2026/6/New-AI-Visibility-Insights-in-Bing-Webmaster-Tools-Intents-Topics-Citation-Share-Compare/', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft Advertising, optimiser ses contenus pour les réponses de la recherche IA (8 octobre 2025)', 'url' => 'https://about.ads.microsoft.com/en/blog/post/october-2025/optimizing-your-content-for-inclusion-in-ai-search-answers', 'date' => '2026-10-05'],
        ['titre' => 'Bing Webmaster Tools, page de présentation', 'url' => 'https://www.bing.com/webmasters/about', 'date' => '2026-10-05'],
        ['titre' => 'llmstxt.org, proposition du fichier llms.txt (Jeremy Howard, 3 septembre 2024, version révisée)', 'url' => 'https://llmstxt.org/', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, tarifs de ChatGPT (page en français)', 'url' => 'https://chatgpt.com/fr-FR/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Google One, forfaits Google AI', 'url' => 'https://one.google.com/about/google-ai-plans/', 'date' => '2026-10-05'],
        ['titre' => 'UIT, Facts and Figures 2025, utilisation d\'Internet (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['seo-contenu', 'visibilite-google', 'contenu-avec-ia', 'analytics-ga4', 'marketing-digital-b2b', 'linkedin-reseaux-sociaux'],
        'services'    => ['referencement-ia-geo', 'referencement-naturel-seo', 'audit-seo-complet'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
