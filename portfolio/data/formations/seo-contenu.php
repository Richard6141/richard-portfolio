<?php
// ============================================================
// data/formations/seo-contenu.php · Fiche formation « SEO et marketing de
// contenu » (vague 1B, lot B, domaine marketing-visibilite). Aucune ancienne
// page. Angle propre : le référencement naturel par le contenu, fait par
// l'équipe elle-même : recherche de mots-clés et d'intentions, plan d'une
// page, rédaction, balises title et meta, maillage interne, mise à jour et
// mesure dans la Search Console, selon les règles de Google Search Central.
// Ne traite pas : la fiche Google et les avis (visibilite-google), les
// citations par les assistants d'IA (referencement-ia-geo), la production de
// textes, visuels et vidéos avec l'IA (contenu-avec-ia), la mesure GA4
// (analytics-ga4), ni la prestation ou l'audit technique (piliers
// referencement-naturel-seo et audit-seo-complet, dont aucune phrase n'est
// reprise). Faits externes relevés le 05/10/2026 à la source (curl) : Google
// Search Central (contenu utile et génératif mis à jour le 01/10/2026, règles
// contre le spam du 28/08/2026, title, extraits, liens, guide de démarrage,
// mises à jour principales, tableau de bord des classements), aide Search
// Console, blog Search Central (regroupements de requêtes, filtre de marque,
// vues hebdomadaires), aide Google Ads (Keyword Planner), aide Google Trends,
// aide de la saisie semi-automatique, Screaming Frog, Semrush, Ahrefs, Yoast,
// StatCounter (septembre 2026), SGG du Bénin, CNIL, FDFP, 3FPT, France
// Compétences. Fiche du lot B : date de publication reportée ensuite.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation SEO et marketing de contenu : apprendre à votre équipe à choisir ses sujets d\'après les recherches des clients, à écrire des pages que Google comprend et à suivre leurs résultats dans la Search Console',
    'title'   => 'Formation SEO et marketing de contenu | Richard SALANON',
    'meta'    => 'Formation SEO par le contenu : mots-clés et intentions, plan de page, rédaction, balises title et meta, maillage interne, suivi dans la Search Console.',
    'en_bref' => 'Cette formation apprend aux rédacteurs, chargés de communication, responsables de site et dirigeants qui écrivent eux-mêmes à faire venir des clients depuis Google grâce au contenu du site : trouver les questions que les clients tapent vraiment, choisir l\'intention à servir, bâtir le plan d\'une page, la rédiger, soigner sa balise title et sa meta description, la relier aux autres pages, la tenir à jour et mesurer ses effets dans la Search Console. Elle dure deux jours, en quatre demi-journées de préférence espacées pour publier entre deux séances, sur le site de l\'entreprise, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'marketing-visibilite',
    'forte'   => false,
    'duree'   => '2 jours, en 4 demi-journées espacées',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : partir de ce que le site reçoit déjà de Google, et des règles que Google publie sur le contenu',
            'duree'  => '3 h 30',
            'points' => [
                'Le trajet d\'une page, de sa découverte par un lien à son affichage dans les résultats, expliqué sans jargon et vérifié sur une page réelle du site avec l\'outil d\'inspection d\'URL.',
                'Ouverture du rapport sur les performances de la Search Console : clics, impressions, taux de clics, position moyenne, et ce que chacun de ces chiffres ne dit pas.',
                'Les requêtes qui affichent déjà le site sans lui apporter de clics : la première liste de travail de l\'équipe, souvent plus rentable qu\'un article neuf.',
                'Inventaire du contenu existant dans un tableur : une ligne par adresse, sujet, requête visée, date de dernière révision, clics des trois derniers mois.',
                'Lecture commentée des questions d\'autoévaluation de Google sur le contenu utile, mises à jour le 1er octobre 2026, et des pratiques que ses règles contre le spam sanctionnent.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : trouver les mots des clients, classer les intentions et décider quoi écrire en premier',
            'duree'  => '3 h 30',
            'points' => [
                'Recueil des questions réelles : messages WhatsApp, appels au standard, demandes de devis, objections notées par les commerciaux, avec les mots exacts des clients.',
                'Élargissement par la saisie semi-automatique de Google, les recherches associées, Google Trends et, si l\'entreprise a un compte Google Ads, le Keyword Planner.',
                'Les quatre intentions de recherche (s\'informer, comparer, acheter, trouver un lieu ou une marque) et la lecture de la page de résultats pour savoir quel format Google sert déjà.',
                'Regroupement des requêtes qui appellent la même réponse : une page par intention, pas une page par variante de mot-clé.',
                'Grille de priorité des sujets : valeur pour l\'activité, demande observée, pages concurrentes, effort d\'écriture, page existante à reprendre ou page à créer.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : bâtir le plan d\'une page, la rédiger et écrire sa balise title et sa meta description',
            'duree'  => '3 h 30',
            'points' => [
                'Le brief de page : requête principale, intention, lecteur, questions à traiter, preuves propres à l\'entreprise, liens à poser, action attendue du lecteur.',
                'Le plan : un titre principal clair, des intertitres qui suivent les questions du lecteur, la réponse avant les détails, les comparaisons en tableau.',
                'Atelier de rédaction sur une vraie page : vocabulaire du client, faits datés et sourcés, exemples locaux, auteur nommé, date visible et exacte.',
                'Atelier title et meta description : unicité, longueur adaptée à l\'écran du téléphone, nom de l\'entreprise en fin de title, aucune accumulation de mots-clés.',
                'Textes alternatifs des images, nom des fichiers, et relecture humaine obligatoire de tout texte ou métadonnée proposé par un outil d\'IA, comme Google le demande.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : relier les pages, organiser la mise à jour, mesurer dans la Search Console et évaluer les acquis',
            'duree'  => '3 h 30',
            'points' => [
                'Maillage interne : textes de lien descriptifs, liens posés dans les phrases, pages anciennes qui renvoient vers les nouvelles, aucune page importante laissée sans lien.',
                'Calendrier de révision : quelles pages relire chaque trimestre, quand fusionner deux pages, quand une suppression se justifie, et ce qui se demande au développeur (redirection).',
                'Mesure : comparaison de deux périodes, filtres par page et par requête, expressions régulières, filtre des requêtes de marque, vues hebdomadaires et mensuelles.',
                'Lecture des dates des mises à jour de Google sur le tableau de bord officiel, pour ne pas attribuer à une page réécrite un mouvement qui vient d\'ailleurs.',
                'Évaluation : chaque participant présente la page qu\'il a rédigée, son title, sa meta description, ses liens internes et la mesure qu\'il fera dans quatre semaines.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours, en 4 demi-journées espacées d\'une à deux semaines si possible'],
        ['l' => 'Public', 'v' => 'Rédacteurs, chargés de communication, responsables de site, dirigeants qui écrivent eux-mêmes'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, en petit groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saura faire votre équipe à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'La plupart des sites d\'entreprise publient des textes qui ne sont cherchés par personne : une page « nos valeurs », des actualités internes, des articles écrits sur un sujet choisi en réunion. Pendant ce temps, des clients tapent chaque jour des questions précises sur Google, comme « combien coûte un forage à Abomey-Calavi » ou « délai de dédouanement d\'une voiture au port de Cotonou », et trouvent la réponse chez un concurrent. Cette formation apprend à l\'équipe à renverser l\'ordre : partir de ces questions, écrire la page qui y répond le mieux, puis vérifier dans la Search Console qu\'elle a été vue et choisie.',
                'Les objectifs se vérifient sur le site à la fin des deux jours. Chaque participant sait tirer de la Search Console les requêtes et les pages qui méritent un travail ; constituer une liste de requêtes avec les mots des clients ; dire à quelle intention répond une requête en lisant la page de résultats ; rédiger le brief et le plan d\'une page ; écrire un texte qui répond avant de développer ; composer une balise title et une meta description propres à chaque page ; poser des liens internes au texte explicite ; décider s\'il faut réviser, fusionner ou laisser une page ; comparer deux périodes pour juger l\'effet d\'une modification.',
                'Plusieurs sujets voisins sont exclus. La fiche d\'établissement et les avis relèvent de la formation <a href="/formations/visibilite-google">visibilité Google</a> ; ce que disent ChatGPT, Gemini ou Perplexity de l\'entreprise, du <a href="/formations/referencement-ia-geo">référencement IA (GEO)</a>. La production de visuels et de vidéos avec l\'IA, la mesure des conversions dans Google Analytics 4 et la publication sur LinkedIn ont chacune leur formation, citées en bas de page. Les réglages techniques (vitesse, indexation, rendu JavaScript, redirections) restent au développeur : l\'équipe apprend seulement à les repérer et à les demander.',
                'La formation ne remplace pas non plus la prestation. Une entreprise qui préfère confier tout le travail, de l\'état des lieux technique aux liens venus d\'autres sites, s\'adresse au service de <a href="/services/referencement-naturel-seo">référencement naturel</a> ; celle qui veut d\'abord savoir ce qui freine son site commande un <a href="/services/audit-seo-complet">audit SEO complet</a>. La formation sert ce qui doit vivre dans l\'entreprise semaine après semaine : choisir le prochain sujet, écrire la page, la relier, la relire au bout de six mois, et lire les chiffres sans se raconter d\'histoire.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit suivre la formation, avec quels prérequis, quel niveau et quel matériel ?',
            'intro' => 'Aucune compétence technique n\'est demandée. Il faut savoir publier sur le site, et venir avec des accès ouverts et des questions de clients en main.',
            'items' => [
                ['titre' => 'Les rédacteurs et chargés de contenu', 'texte' => 'Ils écrivent déjà les pages, les articles et les fiches produits, souvent sans savoir lesquels sont lus. Ils repartent avec une méthode pour choisir leurs sujets et un gabarit de brief qu\'ils réutiliseront pour chaque nouvelle page. Ce sont eux qui passent le plus de temps en atelier d\'écriture.'],
                ['titre' => 'Les chargés de communication', 'texte' => 'Ils tiennent le calendrier éditorial et arbitrent entre les demandes internes. La formation leur donne un critère pour trancher : la demande observée chez les clients et la valeur pour l\'activité, plutôt que l\'envie du service qui crie le plus fort.'],
                ['titre' => 'Le responsable du site', 'texte' => 'Webmaster interne, assistant qui gère WordPress, ou chef de projet : il apprend à lire la Search Console, à repérer les pages sans lien, à préparer une demande de redirection claire pour le développeur, et à vérifier qu\'elle a été faite.'],
                ['titre' => 'Le dirigeant d\'une petite structure', 'texte' => 'Dans un cabinet, une agence ou un commerce de dix personnes, c\'est souvent lui qui écrit. Il suit au moins la première et la dernière demi-journée : il y décide des offres à mettre en avant et de la personne qui tiendra le calendrier après la formation.'],
                ['titre' => 'Prérequis', 'texte' => 'Savoir créer ou modifier une page dans l\'outil du site (WordPress, Wix, Shopify, Odoo ou autre) et se servir d\'un tableur. Un accès à la Search Console aide beaucoup ; s\'il n\'existe pas, la propriété est créée et validée avec le prestataire du site avant la première séance.'],
                ['titre' => 'Niveau', 'texte' => 'La formation part de zéro en référencement. Un questionnaire de quelques minutes, au moment du cadrage, situe chacun et permet de former des groupes homogènes. Une personne qui a déjà publié des articles optimisés gagne surtout sur la mesure, la priorisation et la mise à jour.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur par personne, un téléphone pour regarder les résultats comme un client, les accès éditeur au site, l\'accès à la Search Console, et une vingtaine de questions de clients notées mot pour mot par l\'accueil ou les commerciaux. Aucun abonnement payant n\'est nécessaire.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur le site et les données de l\'entreprise ?',
            'items' => [
                ['titre' => 'La carte des requêtes déjà là', 'duree' => '45 minutes', 'texte' => 'Dans la Search Console, chaque participant trie les requêtes des trois derniers mois par impressions, puis repère celles où le site apparaît souvent sans être choisi. Il note la page affichée pour chacune. Cette liste révèle presque toujours des pages oubliées qui ont déjà un public, et elle donne le premier lot de réécritures, plus rapide à faire payer qu\'une page neuve.'],
                ['titre' => 'L\'inventaire des pages', 'duree' => '40 minutes', 'texte' => 'Le groupe dresse le tableau du contenu publié : adresse, sujet, requête visée, date de dernière révision, clics. Les doublons de sujet, les pages sans requête identifiable et les articles périmés sautent aux yeux. Chaque ligne reçoit une décision provisoire : garder, réviser, fusionner, ou poser la question de son utilité.'],
                ['titre' => 'La récolte des mots des clients', 'duree' => '45 minutes', 'texte' => 'Les questions apportées par l\'accueil et les commerciaux sont recopiées telles quelles, fautes et expressions locales comprises. Le groupe les complète avec la saisie semi-automatique de Google, testée depuis le pays des clients, et les recherches associées en bas de page. Il découvre souvent que les clients ne disent pas « solution de gestion » mais « logiciel pour gérer ma boutique ».'],
                ['titre' => 'La lecture de la page de résultats', 'duree' => '30 minutes', 'texte' => 'Pour dix requêtes du panel, chacun note ce que Google affiche : articles de conseil, pages de produits, carte, vidéos, forums. Le format dominant indique l\'intention que Google a comprise. Une requête qui ne montre que des pages de vente n\'appelle pas un article de blog, et l\'inverse.'],
                ['titre' => 'Le brief et le plan d\'une page', 'duree' => '45 minutes', 'texte' => 'Chaque participant choisit une requête prioritaire et remplit le gabarit de brief : lecteur, intention, questions à traiter, preuves, liens, action attendue. Il en tire le plan, intertitres compris. Le formateur relit chaque plan avant la rédaction, car la plupart des pages ratées l\'étaient dès le plan.'],
                ['titre' => 'La rédaction de la page', 'duree' => '1 h 30', 'texte' => 'La page est écrite en séance, sur le site ou dans un document partagé. La réponse arrive dans les premières lignes, les détails suivent, les chiffres portent leur date et leur source, l\'auteur est nommé. Les participants qui reprennent une page existante gardent son adresse et améliorent ce qui manque.'],
                ['titre' => 'L\'atelier title et meta description', 'duree' => '40 minutes', 'texte' => 'Chacun écrit trois versions de la balise title et de la meta description de sa page, puis le groupe vote pour la plus claire, lue sur un écran de téléphone. Les titres trop longs, vagues ou bourrés de mots-clés sont réécrits. Le même exercice est refait sur cinq pages existantes repérées le premier matin.'],
                ['titre' => 'Le plan de liens internes', 'duree' => '30 minutes', 'texte' => 'Le groupe repère, dans l\'inventaire, trois à cinq pages qui devraient renvoyer vers la nouvelle page, et écrit pour chacune la phrase et le texte de lien. Il vérifie aussi que la nouvelle page renvoie vers l\'offre ou le contact. Les liens sont posés en séance quand les droits d\'édition le permettent.'],
                ['titre' => 'L\'évaluation et le rendez-vous de mesure', 'duree' => '30 minutes', 'texte' => 'Chaque participant présente sa page, son title, sa meta description et ses liens, puis note dans le tableur la date de publication et la comparaison qu\'il fera quatre semaines plus tard dans la Search Console. Le résultat est rapproché des objectifs écrits au cadrage.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment reconnaître l\'intention d\'une requête, et quelle page faut-il écrire pour chacune ?',
            'legende' => 'Grille utilisée en séance pour classer les requêtes du panel. Les exemples sont inventés pour l\'exercice ; la dernière colonne décrit le geste enseigné, à vérifier chaque fois en regardant la page de résultats réelle.',
            'entetes' => ['Intention', 'Exemples de requêtes', 'Ce que Google affiche souvent', 'Page à écrire', 'Action attendue du lecteur'],
            'lignes'  => [
                ['S\'informer', '« comment conserver l\'ananas pour l\'export », « différence entre SARL et SAS au Sénégal »', 'Articles de conseil, encadrés de questions, vidéos', 'Guide qui répond dès le premier paragraphe, avec étapes et tableau', 'S\'abonner, télécharger une fiche, lire la page d\'offre liée'],
                ['Comparer', '« Odoo ou Dolibarr pour une PME », « meilleur panneau solaire pour boutique »', 'Comparatifs, pages d\'éditeurs, forums', 'Comparatif honnête avec critères, limites et cas où l\'on ne recommande pas son offre', 'Demander un conseil ou un devis'],
                ['Acheter ou commander', '« prix installation climatiseur Cotonou », « traiteur mariage Lomé devis »', 'Pages de services ou de produits, annonces payantes, carte', 'Page d\'offre : ce qui est inclus, délais, zones, prix ou critères de prix, preuves', 'Appeler, écrire sur WhatsApp, remplir le formulaire'],
                ['Trouver une marque ou un lieu', '« nom de l\'entreprise horaires », « nom de l\'entreprise Akpakpa »', 'La fiche Google, le site officiel, les réseaux de la marque', 'Pages de contact et de présentation exactes ; la fiche relève de la formation visibilité Google', 'Venir, appeler, retrouver un document'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment l\'équipe décide-t-elle du prochain sujet à écrire ?',
            'legende' => 'Grille de priorité remplie en séance pour chaque groupe de requêtes, notée de 1 à 3 sur chaque critère. Elle est issue de la pratique de Richard SALANON ; les pondérations s\'ajustent à l\'activité au moment du cadrage.',
            'entetes' => ['Critère', 'Question posée', 'Où trouver la réponse', 'Piège à éviter'],
            'lignes'  => [
                ['Valeur pour l\'activité', 'Un lecteur venu par cette requête peut-il devenir client d\'une offre rentable ?', 'Le dirigeant et les commerciaux, les marges par offre', 'Écrire sur ce qui attire du monde mais ne vend rien'],
                ['Demande observée', 'Des clients posent-ils vraiment cette question ?', 'Questions recueillies, Search Console, saisie semi-automatique, Google Trends', 'Se fier à un volume de recherche affiché pour un autre pays'],
                ['Position de départ', 'Le site apparaît-il déjà sur cette requête, et à quelle position moyenne ?', 'Rapport sur les performances de la Search Console', 'Négliger une page en deuxième page de résultats, souvent la plus facile à faire progresser'],
                ['Concurrence visible', 'Les pages affichées sont-elles meilleures que ce que l\'équipe peut écrire ?', 'Lecture de la page de résultats depuis le pays des clients', 'Viser une requête dominée par de grands médias sans rien de plus à apporter'],
                ['Effort', 'Faut-il une page neuve, une réécriture ou un simple ajout de section ?', 'Inventaire des pages', 'Créer une deuxième page sur un sujet déjà traité au lieu de réviser la première'],
                ['Preuves disponibles', 'L\'entreprise a-t-elle des faits, des photos, des cas, des chiffres que les autres n\'ont pas ?', 'Équipe terrain, service client, archives de projets', 'Publier une page qui résume ce que disent déjà dix concurrents'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que disent les règles officielles de Google sur le contenu, et qu\'en fait concrètement l\'équipe ?',
            'legende' => 'Synthèse des pages de Google Search Central lues le 5 octobre 2026 dans leur version anglaise, la plus à jour (les traductions françaises portent parfois une date antérieure). La dernière colonne décrit le geste enseigné, pas une exigence de Google.',
            'entetes' => ['Page officielle', 'Ce qu\'elle dit', 'Geste de l\'équipe'],
            'lignes'  => [
                ['Créer du contenu utile, fiable et axé sur les personnes (mise à jour du 1er octobre 2026)', 'Les systèmes de classement privilégient un contenu fait pour aider les gens ; Google propose des questions d\'autoévaluation, demande « qui, comment et pourquoi », et décrit la qualité du contenu principal par l\'effort, l\'originalité, le savoir-faire et l\'exactitude', 'Relire chaque page avec la liste des questions avant publication ; nommer l\'auteur ; dire d\'où viennent les faits'],
                ['Même page, signaux d\'alerte', 'Écrire pour un nombre de mots précis, produire beaucoup de pages sur des sujets variés en espérant que certaines marchent, changer la date d\'une page sans modification réelle', 'Aucune longueur imposée ; une date de mise à jour seulement après une révision de fond'],
                ['Règles contre le spam (mise à jour du 28 août 2026)', 'Sanctionnent notamment le bourrage de mots-clés, y compris les listes de villes et de régions visées, les pages satellites ciblant des villes, l\'abus de contenu à grande échelle quel que soit son mode de production, le texte caché et le contenu copié', 'Une page par vraie offre ou vraie zone servie, avec un contenu propre ; jamais de liste de quartiers en pied de page'],
                ['Conseils sur le contenu généré par IA (mise à jour du 1er octobre 2026)', 'L\'IA aide à chercher et à structurer, mais générer de nombreuses pages sans valeur ajoutée peut relever de l\'abus de contenu à grande échelle ; vérification manuelle de l\'exactitude, y compris des title, meta description, données structurées et textes alternatifs', 'Relecture humaine et vérification des faits de chaque texte et de chaque métadonnée proposés par un outil'],
                ['Liens de titre dans les résultats', 'Une balise title par page, descriptive et concise, sans répétition ni texte passe-partout ; nom du site en début ou en fin, séparé par un tiret, deux-points ou une barre verticale ; Google peut choisir un autre texte', 'Un title unique par page, écrit pour être lu sur téléphone'],
                ['Extraits et meta description', 'L\'extrait vient surtout du contenu de la page ; la meta description est reprise quand elle décrit mieux la page ; une description unique par page, sans liste de mots-clés', 'Une description qui résume la page et donne les informations utiles, page par page'],
                ['Liens et texte d\'ancrage', 'Un lien explorable est un élément a avec un attribut href ; le texte du lien doit être descriptif et compréhensible hors contexte ; toute page importante doit recevoir un lien d\'au moins une autre page du site', 'Bannir « cliquez ici » ; relier chaque nouvelle page depuis des pages existantes'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment apprend-on à écrire une balise title et une meta description qui donnent envie de cliquer ?',
            'paragraphes' => [
                'Dans les résultats de Google, le lecteur ne voit de la page que deux choses : un titre cliquable et quelques lignes de texte. Google construit le premier à partir de plusieurs sources, la balise title en tête, et le second à partir du contenu ou de la meta description. L\'atelier part d\'un constat fait en Search Console le premier matin : des pages affichées des centaines de fois et presque jamais choisies. Leur title dit souvent « Accueil », « Nos services » ou répète le nom de l\'entreprise sur chaque page. L\'aide de Google cite précisément ces titres vagues et ces textes répétés comme ce qu\'il faut éviter.',
                'La règle de travail tient en quatre points. Le title nomme ce que la page apporte, avec les mots du client, puis le nom de l\'entreprise en fin, séparé par une barre verticale. Il reste court, parce que Google le tronque à la largeur de l\'écran, et qu\'au Bénin la majorité des pages sont vues sur téléphone, selon les chiffres cités plus bas. Il ne répète jamais un mot-clé sous plusieurs formes. Enfin, il ressemble au titre principal visible de la page : Google regarde aussi ce titre, et peut remplacer une balise qui ne correspond pas au contenu.',
                'Pour la meta description, l\'équipe apprend à écrire un résumé qui informe et donne une raison de cliquer : ce que la page contient, pour qui, avec un détail concret comme une zone servie, un délai ou un format. Google rappelle qu\'il n\'utilise ce texte que lorsqu\'il décrit la page mieux que le contenu lui-même, et qu\'une description doit être propre à chaque page. Exemple travaillé en séance : « Nos services de qualité au meilleur prix » devient « Installation de climatiseurs à Cotonou et Abomey-Calavi : visite technique, devis sous 48 heures, garantie écrite, paiement par Mobile Money ».',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment relier les pages entre elles pour que Google et les lecteurs suivent le bon chemin ?',
            'paragraphes' => [
                'Un site grandit par ajouts successifs, et chaque nouvel article finit souvent isolé : accessible depuis la liste du blog pendant trois semaines, puis enfoui. Le maillage interne enseigné dans la formation corrige cela par une habitude simple. À chaque publication, le rédacteur cherche dans l\'inventaire les pages qui traitent d\'un sujet voisin et y ajoute une phrase qui renvoie vers la nouvelle page. À l\'inverse, la nouvelle page renvoie vers l\'offre qu\'elle prépare et vers une ou deux pages qui complètent la réponse.',
                'Le texte du lien compte autant que le lien. Google demande un texte descriptif, raisonnablement court, compréhensible sans lire le reste de la phrase, et déconseille les ancres du type « en savoir plus » ou « cliquez ici ». L\'exercice consiste à relire uniquement les textes de lien d\'une page : si l\'on ne devine pas où mène chacun, il faut les réécrire. Google met aussi en garde contre l\'excès inverse, l\'ancre forcée qui empile des mots-clés, et contre les liens collés les uns aux autres qui perdent leur contexte.',
                'La formation organise ces liens autour des offres. Pour une entreprise de forage, la page de l\'offre reçoit des liens depuis les guides sur le coût d\'un forage, les autorisations à demander et l\'entretien d\'une pompe ; chaque guide renvoie aussi vers les deux autres quand le lecteur en a besoin. Ce n\'est pas une architecture technique : c\'est le chemin qu\'un client suivrait de lui-même. Les menus, le fil d\'Ariane et la structure des adresses restent l\'affaire du développeur, que l\'équipe sait désormais briefer.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quand faut-il réviser, fusionner ou supprimer une page existante ?',
            'intro' => 'Un site de cinquante pages en compte souvent dix qui travaillent, vingt qui dorment et quelques-unes qui se font concurrence. La demi-journée consacrée à la mise à jour apprend à trier sans casser ce qui marche.',
            'items' => [
                ['titre' => 'Ne pas toucher à ce qui progresse', 'texte' => 'La page de Google sur ses mises à jour principales recommande d\'éviter de modifier un contenu qui fonctionne déjà bien, et de ne pas réagir à une petite baisse, par exemple de la deuxième à la quatrième position. L\'équipe commence donc par les pages faibles, pas par les meilleures.'],
                ['titre' => 'Réviser une page qui a vieilli', 'texte' => 'Un prix, une loi, un délai ou une capture d\'écran périmés suffisent à faire fuir le lecteur. La révision met à jour les faits, ajoute ce que les clients demandent depuis, et seulement alors change la date affichée. Google range parmi les signaux d\'alerte le fait de changer la date d\'une page sans modification de fond.'],
                ['titre' => 'Fusionner deux pages qui se répondent', 'texte' => 'Deux articles sur « créer une SARL » et « étapes de création d\'une SARL » se disputent la même requête. On garde l\'adresse la plus forte dans la Search Console, on y réunit le meilleur des deux, et on demande au développeur une redirection de l\'autre adresse.'],
                ['titre' => 'Compléter plutôt que multiplier', 'texte' => 'Une nouvelle question liée à une page existante appelle souvent une section de plus, pas une page de plus. Le rédacteur vérifie l\'inventaire avant toute création.'],
                ['titre' => 'Supprimer en dernier recours', 'texte' => 'Google présente la suppression comme une solution de dernier recours, réservée au contenu qui ne peut pas être sauvé. Une actualité interne de 2019 sans lecteur peut partir ; une page qui reçoit des liens ou des visites se révise ou se redirige.'],
                ['titre' => 'Tenir un calendrier de relecture', 'texte' => 'Chaque page du tableur reçoit une date de prochaine relecture, plus rapprochée pour les pages qui portent des prix ou des règles. Une demi-journée par mois suffit le plus souvent pour une petite équipe.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles questions l\'équipe pose-t-elle chaque mois à la Search Console, et où trouve-t-elle la réponse ?',
            'legende' => 'Fonctions décrites par l\'aide de la Search Console et le blog Google Search Central, lus le 5 octobre 2026. Certaines ne s\'affichent que pour les sites qui ont assez de requêtes.',
            'entetes' => ['Question de l\'équipe', 'Où regarder', 'Ce qu\'il faut savoir', 'Décision possible'],
            'lignes'  => [
                ['Quelles pages sont vues mais peu choisies ?', 'Rapport sur les performances, onglet Pages, tri par taux de clics croissant', 'L\'aide de Google suggère de revoir le titre et la description, ou d\'aligner le contenu sur les requêtes qui affichent la page', 'Réécrire title et meta description, puis comparer dans quatre semaines'],
                ['Sur quelles requêtes une page apparaît-elle ?', 'Clic sur la page, puis onglet Requêtes', 'Le tableau affiche 1 000 lignes au plus et omet les requêtes anonymisées, rares', 'Ajouter une section qui répond à une question absente de la page'],
                ['La réécriture a-t-elle eu un effet ?', 'Filtre de page, puis comparaison de deux périodes de même durée', 'Google conseille d\'attendre quelques semaines et de vérifier que le changement coïncide avec la modification, d\'autres causes pouvant jouer', 'Garder, poursuivre ou revenir en arrière'],
                ['Les nouveaux clients nous trouvent-ils sans connaître notre nom ?', 'Filtre des requêtes de marque et hors marque', 'Disponible pour tous les sites éligibles depuis le 11 mars 2026, pas pour les sous-propriétés ni les sites à faible volume ; classement par un système assisté par IA, parfois imparfait', 'Suivre la part hors marque comme indicateur du travail de contenu'],
                ['La tendance monte-t-elle vraiment ?', 'Sélecteur de granularité hebdomadaire ou mensuelle', 'Ajouté le 10 décembre 2025 pour lisser les écarts entre jours ouvrés et week-ends', 'Présenter au comité une courbe mensuelle, pas des variations quotidiennes'],
                ['Quelles familles de questions intéressent nos lecteurs ?', 'Carte des regroupements de requêtes dans les statistiques Insights', 'Annoncée le 27 octobre 2025, calculée par IA, réservée aux propriétés qui ont un grand volume de requêtes', 'Choisir le prochain sujet dans un groupe en hausse'],
                ['Un groupe de pages progresse-t-il ?', 'Filtre de page en expression régulière, par exemple sur /blog/', 'Syntaxe RE2, insensible à la casse par défaut', 'Comparer les guides et les pages d\'offre séparément'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment lire une hausse ou une baisse sans se tromper de cause ?',
            'paragraphes' => [
                'Une courbe qui baisse le lendemain d\'une réécriture inquiète toujours. La formation apprend trois réflexes avant de conclure. D\'abord, vérifier les dates des mises à jour de Google sur son tableau de bord officiel : en 2026, il en affiche deux principales, lancées le 27 mars et le 21 mai, et quatre consacrées au spam, la dernière commencée le 24 septembre. Google recommande d\'attendre au moins une semaine complète après la fin d\'une mise à jour principale avant d\'analyser, puis de comparer avec une semaine antérieure à son lancement.',
                'Ensuite, comparer des périodes comparables. Une agence de voyage de Dakar n\'a pas le même trafic en août et en novembre ; une école d\'Abidjan voit ses recherches grimper avant la rentrée. Google Trends aide à repérer ces saisons, avec une précaution apprise en séance : ses courbes sont des indices de 0 à 100, relatifs au pic de la période, et les termes trop peu cherchés y apparaissent à zéro, ce qui arrive vite sur les marchés de petite taille.',
                'Enfin, regarder les impressions et les clics avant la position. L\'aide de la Search Console conseille de suivre surtout leur tendance plutôt que la position seule, qui est une moyenne de la meilleure place obtenue. L\'équipe garde donc dans son tableur, pour chaque page modifiée, la date de la modification, les chiffres des quatre semaines avant et des quatre semaines après, et une phrase d\'explication. Au bout de six mois, ce journal vaut plus que n\'importe quelle intuition.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et que se passe-t-il entre les séances ?',
            'intro' => 'Le principe est celui d\'un atelier de rédaction : peu de démonstration, beaucoup d\'écriture sur les pages de l\'entreprise, et une publication réelle entre deux demi-journées.',
            'items' => [
                ['titre' => 'Des groupes réduits', 'texte' => 'Chaque plan et chaque page sont relus avec leur auteur, à l\'écran. Au-delà de quelques participants, ce temps disparaît ; le groupe est alors dédoublé. En inter-entreprises, chacun travaille sur le site de sa structure, et la Search Console d\'une entreprise n\'est jamais projetée devant les autres.'],
                ['titre' => 'Des séances espacées', 'texte' => 'Quand le calendrier le permet, une à deux semaines séparent les demi-journées. Le participant publie entre-temps la page commencée, et la séance suivante part de ce qui s\'est réellement passé : page indexée ou non, premières impressions, difficultés de mise en ligne.'],
                ['titre' => 'Le site du client, pas un site d\'exemple', 'texte' => 'Requêtes, pages, concurrents et questions de clients sont ceux de l\'entreprise. Les pages écrites pendant la formation sont publiables après validation interne, et elles le sont souvent avant la dernière séance.'],
                ['titre' => 'Des documents qui restent', 'texte' => 'Le tableur d\'inventaire et de priorités, le gabarit de brief, la grille d\'intentions, la liste de contrôle avant publication, le journal des modifications et une fiche datée des règles de Google Search Central, dans des formats modifiables par l\'équipe.'],
                ['titre' => 'Une évaluation sur production', 'texte' => 'La réussite se juge sur la page rédigée, ses métadonnées, ses liens et la mesure prévue, comparés aux objectifs fixés au cadrage. Une attestation nominative est remise avec ce résultat ; ce n\'est ni un diplôme ni une certification.'],
                ['titre' => 'Un suivi au choix', 'texte' => 'Une séance à distance quatre à six semaines après la fin lit avec l\'équipe les premières comparaisons de la Search Console et relit deux pages publiées seule. Elle figure au devis si l\'entreprise la retient.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on pendant la formation, et que coûtent-ils ?',
            'legende' => 'Prix relevés le 5 octobre 2026 sur les pages des éditeurs, dans la devise affichée depuis la connexion utilisée ; ils varient selon le pays et les taxes. Aucun outil payant n\'est nécessaire pour suivre la formation : les outils de Google suffisent aux exercices.',
            'entetes' => ['Outil', 'Usage en formation', 'Coût selon l\'éditeur', 'Point d\'attention'],
            'lignes'  => [
                ['Google Search Console', 'Requêtes, pages, comparaisons, inspection d\'URL', 'Service gratuit, selon l\'aide de Google', 'La propriété doit être validée avant la séance, au nom de l\'entreprise'],
                ['Saisie semi-automatique et recherches associées de Google', 'Récolte des formulations réelles', 'Sans frais', 'Les suggestions tiennent compte de la langue et du lieu : tester depuis le pays des clients'],
                ['Google Trends', 'Saisons, comparaison de deux formulations', 'Sans frais', 'Indices relatifs de 0 à 100 ; zéro pour les termes trop peu cherchés'],
                ['Keyword Planner de Google Ads', 'Idées de mots-clés et recherches mensuelles moyennes', 'Sans frais d\'outil, mais l\'aide de Google Ads exige de terminer la configuration du compte avec les informations de facturation', 'Moyenne sur douze mois par défaut, toutes langues confondues ; montré si l\'entreprise a déjà un compte'],
                ['Screaming Frog SEO Spider', 'Liste des pages, titles en double, pages sans lien', 'Gratuit jusqu\'à 500 adresses explorées ; licence à 279 dollars par an au-delà', 'Utilisé en démonstration ; l\'analyse technique complète relève de l\'audit'],
                ['Ahrefs Webmaster Tools', 'Pages du site et liens, sur un site validé', 'Gratuit pour les sites validés ; formule Starter à 29 dollars par mois', 'Données propres à Ahrefs, différentes de celles de Google'],
                ['Semrush', 'Comparaison avec des concurrents, en démonstration', 'Formule SEO à 112,52 € par mois en paiement annuel, au lieu de 134 € au mois', 'Abonnement utile à une équipe qui publie beaucoup, rarement au départ'],
                ['Yoast SEO pour WordPress', 'Saisie du title et de la meta description', 'Extension gratuite ; Premium à 118,80 € par an hors taxes', 'Les indicateurs de couleur de l\'extension ne sont pas des règles de Google'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon le métier, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Cabinet d\'expertise comptable, à Cotonou', 'probleme' => 'Le site publie des actualités du cabinet ; les chefs d\'entreprise posent pourtant chaque mois les mêmes questions sur les échéances fiscales, la création d\'entreprise et la paie.', 'solution' => 'La collaboratrice chargée de la communication bâtit le panel à partir des appels reçus, écrit une page par question récurrente avec la date de mise à jour bien visible, et relie chacune à l\'offre d\'accompagnement correspondante. Les pages qui portent des règles fiscales entrent dans le calendrier de relecture trimestrielle.'],
                ['secteur' => 'Distributeur de kits solaires, à Ouagadougou', 'probleme' => 'Les fiches produits reprennent le texte du fabricant, identique sur dix sites, et les clients demandent au téléphone combien d\'heures un kit fait tourner un réfrigérateur.', 'solution' => 'L\'équipe commerciale apprend à écrire des guides de dimensionnement avec ses propres mesures, des tableaux par usage et des photos d\'installations réelles, puis à relier chaque guide aux kits concernés. La formation se fait en formule hybride, adaptée à une connexion irrégulière.'],
                ['secteur' => 'École privée d\'enseignement supérieur, à Abidjan', 'probleme' => 'Les futurs étudiants et leurs parents cherchent les frais, les débouchés et les dates d\'inscription ; le site ne montre qu\'une plaquette en PDF.', 'solution' => 'Le service communication transforme la plaquette en pages par filière, avec les informations en texte, une page de questions des parents, des title propres à chaque filière, et un calendrier de mise à jour calé sur la rentrée, repérée dans Google Trends.'],
                ['secteur' => 'Agence de voyages, à Dakar', 'probleme' => 'Les articles de destinations, écrits il y a trois ans, affichent d\'anciens prix et des formalités de visa périmées, et plusieurs traitent du même circuit.', 'solution' => 'Inventaire et tri : fusion des articles redondants avec redirection demandée au développeur, révision des pages qui ont encore des impressions, suppression des actualités sans lecteurs, et journal des modifications pour lire l\'effet dans la Search Console après la haute saison.'],
                ['secteur' => 'Fabricant de matériel de boulangerie, près de Lyon', 'probleme' => 'Le site est bien placé sur le nom de la marque, mais presque absent des requêtes d\'artisans qui comparent des fours ou cherchent à réduire leur consommation d\'énergie.', 'solution' => 'Le filtre des requêtes hors marque devient l\'indicateur suivi en comité. Le service marketing écrit des comparatifs honnêtes par usage, des guides d\'entretien signés par le technicien, et relie chaque guide aux fiches des fours concernés.'],
                ['secteur' => 'Bureau d\'architectes, à Liège', 'probleme' => 'Le site montre de belles photos de réalisations, sans texte, et les clients demandent toujours les mêmes choses sur les permis, les délais et les budgets d\'une extension.', 'solution' => 'Chaque projet reçoit une page rédigée (contraintes, durée, choix techniques, accord du client pour la publication), et trois guides répondent aux questions de budget et d\'urbanisme, reliés aux projets qui les illustrent.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format, quelle durée et quelle organisation choisir pour votre équipe ?',
            'legende' => 'Le volume du programme complet est de deux journées, soit quatre demi-journées. Leur répartition dépend du format ; l\'espacement entre les séances est conseillé dans tous les cas.',
            'entetes' => ['Format', 'Pour qui', 'Rythme', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe qui écrit pour le même site', 'Quatre demi-journées sur deux à quatre semaines', 'Dans vos locaux, sur votre Search Console et vos pages ; la direction présente à la première et à la dernière séance'],
                ['Inter-entreprises', 'Une ou deux personnes par structure', 'Deux journées, ou quatre demi-journées espacées', 'Chacun travaille sur son propre site ; aucune donnée de Search Console n\'est montrée au groupe'],
                ['À distance', 'Équipes réparties entre plusieurs villes ou plusieurs pays', 'Six séances de deux heures et quart environ, sur trois semaines', 'Partage d\'écran, page à écrire entre deux séances, relecture au début de la séance suivante'],
                ['Hybride', 'Équipes qui veulent l\'atelier d\'écriture en salle', 'Une journée sur place, puis deux ou trois séances à distance', 'Panel, priorités et rédaction en salle ; maillage, mise à jour et mesure à distance'],
                ['Petite structure', 'Dirigeant ou rédacteur seul', 'Trois demi-journées', 'Panel, une page rédigée, titles des pages principales ; la mesure se voit en suivi'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun tarif n\'est publié pour cette formation. Le devis suit un premier échange sur votre site, vos offres et les personnes à former ; cet échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements éventuels à des outils restent à la charge de l\'entreprise, chez l\'éditeur.',
            'items'      => [
                ['offre' => 'Petite structure', 'prix' => 'Sur devis', 'inclus' => ['Trois demi-journées', 'Panel de requêtes et grille de priorité', 'Une page rédigée et publiée', 'Title et meta description des pages principales']],
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées espacées', 'Inventaire du contenu et calendrier de relecture', 'Atelier de rédaction et plan de liens internes', 'Lecture de la Search Console et journal des modifications', 'Évaluation et attestation']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance de lecture des chiffres à quatre ou six semaines', 'Relecture de deux pages publiées seule', 'Questions d\'application pendant la période convenue']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'La taille du site à inventorier et le nombre de pages réécrites en séance.',
                'L\'état de départ : Search Console à créer, outil de publication difficile, contenus à trier en grand nombre.',
                'Le nombre de langues et de pays couverts par les requêtes.',
                'Le format, et les déplacements hors de Cotonou ou hors du Bénin pour une séance sur place.',
                'La présence et la durée du suivi.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge une partie de la session ?',
            'paragraphes' => [
                'C\'est possible dans certains pays, jamais automatique, et aucune prise en charge n\'est annoncée ici. La page du <a href="https://fdfp.ci/plan-de-formation/">FDFP ivoirien consacrée au plan de formation</a>, consultée le 5 octobre 2026, distingue quatre types d\'actions, dont la formation intra, animée pour les salariés d\'une entreprise par un intervenant extérieur. Elle n\'ouvre le dépôt d\'un plan qu\'aux entreprises qui justifient du paiement régulier de deux taxes, et le paiement intervient après le contrôle des services du fonds et l\'approbation de sa Commission permanente.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> affiche plusieurs guichets, dont un pour le personnel des entreprises et un autre pour les demandes individuelles, utile à un rédacteur indépendant. Au Bénin, les statuts du FODEFCA sont approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> indique que, depuis le 1er janvier 2022, l\'accès aux fonds publics ou mutualisés passe par la certification Qualiopi du prestataire. Richard SALANON ne la détient pas et n\'a l\'agrément d\'aucun fonds : construisez le budget sans aide, et posez la question au fonds, par écrit, programme et devis joints.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel geste, fait avec les meilleures intentions, peut effacer des mois de travail ?',
            'texte' => 'Renommer ou déplacer une page qui reçoit déjà des visites. Pendant la formation, l\'envie de tout réécrire est forte : changer l\'adresse pour y mettre un mot-clé, déplacer les articles dans une nouvelle rubrique, refondre le blog d\'un coup. Sans redirection de l\'ancienne adresse vers la nouvelle, les liens reçus, l\'historique et les positions repartent de zéro, et les visiteurs tombent sur une erreur. Google indique d\'ailleurs que des mots-clés dans l\'adresse n\'ont presque aucun effet sur le classement. La règle enseignée : on améliore le contenu à adresse constante, et tout changement d\'adresse passe par une demande écrite de redirection au développeur, vérifiée après la mise en ligne.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les mois qui suivent une formation, et comment les éviter ?',
            'intro' => 'La formation installe une méthode ; les six mois suivants décident si elle tient. Voici les dérives les plus fréquentes, et le réflexe qui les prévient.',
            'items' => [
                ['titre' => 'Écrire pour un nombre de mots', 'texte' => 'Quelqu\'un a lu qu\'il fallait 2 000 mots par article et rallonge chaque texte. Google écrit qu\'il n\'existe pas de longueur idéale. La bonne longueur est celle qui répond complètement à la question, et souvent moins.'],
                ['titre' => 'Une page par variante de mot-clé', 'texte' => '« Plombier Cotonou », « plomberie Cotonou », « dépannage plomberie Cotonou » : trois pages presque identiques se concurrencent et lassent le lecteur. La grille d\'intentions regroupe ces formulations sur une seule page solide.'],
                ['titre' => 'Copier la page du premier résultat', 'texte' => 'Reprendre le plan du concurrent le mieux placé donne une page de plus parmi d\'autres. Google demande ce que le contenu apporte au-delà de l\'évident : chiffres de l\'entreprise, cas réels, photos, avis d\'un technicien.'],
                ['titre' => 'Publier un premier jet généré sans le relire', 'texte' => 'Un outil d\'IA propose un article et sa meta description en une minute, avec des chiffres plausibles mais faux. Google demande une vérification manuelle de l\'exactitude, métadonnées comprises. Rien ne part sans relecture par la personne qui connaît le sujet.'],
                ['titre' => 'Juger au bout de huit jours', 'texte' => 'Une page neuve doit être découverte, explorée, puis testée sur des requêtes. Le journal des modifications fixe la date de comparaison à quatre semaines au moins, et plus tard si une mise à jour de Google est en cours.'],
                ['titre' => 'Laisser l\'auteur dans l\'ombre', 'texte' => 'Un article sans signature ni date inspire moins confiance. Google encourage des informations d\'auteur exactes là où le lecteur les attend, et qualifie de tromperie les profils inventés. On signe avec le vrai nom de la personne qui a écrit ou relu.'],
                ['titre' => 'Abandonner la Search Console', 'texte' => 'Le rapport est ouvert avec enthousiasme pendant un mois, puis oublié. Un rendez-vous mensuel d\'une heure, inscrit à l\'agenda de l\'équipe avec le modèle de compte rendu remis en formation, suffit à garder le fil.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Téléphone, langue, moteurs utilisés, données personnelles : que change le contexte local pour le contenu ?',
            'paragraphes' => [
                'Selon StatCounter, qui mesure les pages vues sur les sites équipés de son outil, Google apportait en septembre 2026 95,11 % des visites venues d\'un moteur de recherche au Bénin et 95,66 % sur le continent africain, contre 88,16 % en France, où Bing atteignait 5,47 %. Le même service attribuait au téléphone 60,3 % des pages vues au Bénin, contre 53,05 % en France. Deux conséquences pour l\'écriture : le travail se concentre sur Google sans oublier Bing pour une clientèle européenne, et chaque page se relit d\'abord sur un petit écran, avec des paragraphes courts, des tableaux lisibles et un numéro cliquable.',
                'La langue des requêtes est celle des clients, pas celle des brochures. Google donne l\'exemple de lecteurs qui cherchent le même produit avec des mots différents selon leur niveau de connaissance. En Afrique francophone, l\'écart est plus large encore : « zém » et « moto-taxi », « groupe » et « groupe électrogène », un quartier écrit de trois façons. L\'atelier apprend à retenir la formulation la plus fréquente pour le titre et à placer naturellement les autres dans le texte, sans liste artificielle. Pour une clientèle anglophone ou multilingue, chaque langue a son panel et ses pages, relues par un locuteur.',
                'La connexion pèse aussi sur la formation elle-même. Les séances à distance sont découpées en plages courtes, le tableur et le gabarit de brief sont envoyés à l\'avance, et la rédaction peut se faire hors ligne dans un document, puis être publiée depuis la connexion du bureau. Les outils utilisés en séance fonctionnent dans un navigateur ordinaire, sans installation lourde, ce qui évite de bloquer une demi-journée sur un poste mal configuré.',
                'Le contenu touche enfin aux données personnelles. Un cas client publié avec le nom de l\'entreprise cliente, une photo d\'équipe, un témoignage signé ou une page d\'auteur supposent l\'accord des personnes concernées, recueilli avant la publication et conservé. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre ces traitements ; en Europe, c\'est le RGPD, dont la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">CNIL</a> présente le texte. Les exercices utilisent les requêtes et les pages publiques de l\'entreprise, jamais ses fichiers de clients.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés la personne formée doit-elle connaître ?',
            'items' => [
                ['valeur' => '1er octobre 2026', 'libelle' => 'Dernière mise à jour de la page de Google sur le contenu utile, fiable et axé sur les personnes, et de ses conseils sur le contenu généré par IA, dans leur version anglaise', 'source' => 'Google Search Central', 'url' => 'https://developers.google.com/search/docs/fundamentals/creating-helpful-content?hl=en'],
                ['valeur' => '28 août 2026', 'libelle' => 'Dernière mise à jour des règles de Google contre le spam, qui couvrent le bourrage de mots-clés et l\'abus de contenu à grande échelle', 'source' => 'Google Search Central, règles contre le spam', 'url' => 'https://developers.google.com/search/docs/essentials/spam-policies?hl=en'],
                ['valeur' => '1 semaine', 'libelle' => 'Délai minimal, après la fin d\'une mise à jour principale, que Google conseille d\'attendre avant d\'analyser son site dans la Search Console', 'source' => 'Google Search Central, mises à jour principales', 'url' => 'https://developers.google.com/search/docs/appearance/core-updates?hl=en'],
                ['valeur' => '1 000 lignes', 'libelle' => 'Nombre maximal de lignes affichées dans le tableau du rapport sur les performances ; les requêtes rares en sont omises', 'source' => 'Aide Search Console, écarts dans les données', 'url' => 'https://support.google.com/webmasters/answer/17010575?hl=en'],
                ['valeur' => '95,11 %', 'libelle' => 'Part de Google dans les visites venues d\'un moteur de recherche au Bénin en septembre 2026, contre 4,16 % pour Bing', 'source' => 'StatCounter Global Stats', 'url' => 'https://gs.statcounter.com/search-engine-market-share/all/benin'],
                ['valeur' => '60,3 %', 'libelle' => 'Part des pages vues depuis un téléphone au Bénin en septembre 2026, contre 38,65 % depuis un ordinateur', 'source' => 'StatCounter Global Stats', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/benin'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre le SEO par le contenu avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Le référencement naturel figure parmi ses compétences de métier : il écrit et structure les pages des sites qu\'il livre, rédige leurs balises, organise leurs liens internes et lit leur Search Console. Il enseigne donc des gestes qu\'il refait chaque semaine, sur ses projets comme sur son propre site. Diplômé d\'' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', il travaille depuis ' . $ans . ' ans dans le numérique ; il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a> et créateur de <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone. Selon ses chiffres, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes ont suivi ses formations.',
                'Il a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin, de la Côte d\'Ivoire et du Sénégal au Tchad et au Gabon, et jusqu\'en France, en Belgique, en Suisse et au Canada : il sait qu\'une requête ne s\'écrit pas de la même façon à Cotonou et à Lyon. Il n\'est ni partenaire ni certifié de Google ; il enseigne les règles telles que Google Search Central les publie le jour de la séance, et le dit quand une recette répandue n\'y figure pas.',
                'Ses engagements sont vérifiables : un cadrage avant le devis, des exercices sur votre site, une page publiable à la fin, une évaluation sur production, des documents qui restent à l\'équipe, aucune promesse de position, une réponse sous 24 heures. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur celle des <a href="/zones/">zones d\'intervention</a>. Les formations voisines figurent sur la page <a href="/formations/domaine/marketing-visibilite">marketing et visibilité</a> et dans le <a href="/formations/">catalogue des formations</a> ; pour une entreprise qui vend à des professionnels, le <a href="/formations/marketing-digital-b2b">marketing digital B2B</a> prolonge ce travail.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Partez des questions que vos clients posent vraiment, écrivez une page solide par intention plutôt qu\'une page par mot-clé, donnez à chaque page un title et une description qui lui sont propres, reliez-la aux pages voisines, révisez avant de créer, ne touchez pas à ce qui progresse, et jugez chaque modification dans la Search Console au bout de quatre semaines au moins.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe sait-elle quelle page écrire le mois prochain, et pourquoi ?',
            'texte'  => 'Indiquez l\'adresse du site, l\'outil de publication, le nombre de personnes à former, leurs fonctions et le format souhaité. Vous recevez une réponse sous 24 heures, un premier regard sur vos pages, puis une proposition de programme et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation SEO'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir coder pour suivre la formation ?', 'r' => 'Non. Il suffit de savoir publier ou modifier une page dans l\'outil du site et de se servir d\'un tableur. Les réglages techniques, comme les redirections ou la vitesse, restent au développeur ; l\'équipe apprend à les repérer et à les demander précisément.'],
        ['q' => 'Faut-il un site déjà en ligne ?', 'r' => 'Oui. Les exercices portent sur les pages, les requêtes et la Search Console du site de l\'entreprise. Un site très récent convient, mais les premières données de la Search Console seront minces : le travail porte alors davantage sur le panel de requêtes et l\'écriture.'],
        ['q' => 'Quelle différence avec la formation au référencement IA ?', 'r' => 'Celle-ci apprend à être trouvé dans les résultats de Google par le contenu du site : requêtes, pages, balises, liens, mesure. La formation au référencement IA porte sur les réponses des assistants comme ChatGPT ou Gemini. Les deux se complètent ; une équipe qui n\'a jamais travaillé son référencement commence en général par celle-ci.'],
        ['q' => 'Nos articles sont-ils pénalisés s\'ils sont écrits avec l\'IA ?', 'r' => 'Pas en soi. Google juge l\'IA utile pour chercher et structurer un contenu, mais considère que générer de nombreuses pages sans valeur ajoutée peut relever de l\'abus de contenu à grande échelle. Il demande une vérification manuelle de l\'exactitude, title et meta description compris. La formation apprend à relire et à enrichir, pas à produire en masse.'],
        ['q' => 'Combien d\'articles faut-il publier par mois ?', 'r' => 'Il n\'existe pas de bon chiffre. Google range parmi les signaux d\'alerte le fait d\'ajouter beaucoup de contenu dans l\'espoir de paraître « frais ». Une petite équipe obtient souvent davantage en révisant deux pages existantes et en publiant une page neuve bien choisie qu\'en publiant huit articles rapides.'],
        ['q' => 'Faut-il acheter Semrush ou Ahrefs ?', 'r' => 'Pas pour commencer. La Search Console, la saisie semi-automatique et Google Trends suffisent aux exercices et à la routine mensuelle d\'une petite équipe. Un abonnement payant se justifie quand l\'équipe publie beaucoup et veut suivre ses concurrents de près ; la décision se prend après la formation.'],
        ['q' => 'En combien de temps verrons-nous des résultats ?', 'r' => 'Google écrit que certains changements prennent effet en quelques heures et d\'autres en plusieurs mois, et conseille d\'attendre quelques semaines avant de juger. Une page réécrite qui avait déjà des impressions réagit souvent plus vite qu\'une page neuve. Personne ne peut honnêtement promettre une position ni un délai.'],
        ['q' => 'Qui doit suivre la formation dans l\'entreprise ?', 'r' => 'Les personnes qui écrivent ou publient : rédacteurs, chargés de communication, responsable du site. Le dirigeant d\'une petite structure suit au moins la première et la dernière demi-journée, pour choisir les offres à mettre en avant et désigner la personne qui tiendra le calendrier.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en six séances de deux heures et quart environ sur trois semaines, avec une page à écrire entre deux séances et une relecture au début de la suivante. Une formule hybride, avec l\'atelier d\'écriture en salle, convient aux équipes qui préfèrent travailler ensemble.'],
        ['q' => 'Que se passe-t-il si notre Search Console n\'est pas configurée ?', 'r' => 'Elle est créée et validée avant la première séance, avec le prestataire du site si nécessaire, au nom de l\'entreprise. Les données s\'accumulent ensuite : la séance de suivi, quelques semaines plus tard, permet de les lire avec un historique suffisant.'],
        ['q' => 'Combien coûte la formation, et un fonds peut-il la financer ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants, la taille du site, le format et le suivi retenu. Le FDFP, le FODEFCA, le 3FPT ou un OPCO appliquent leurs propres règles, et Richard SALANON n\'a ni certification Qualiopi ni agrément d\'un fonds : aucune prise en charge n\'est garantie.'],
    ],

    'sources' => [
        ['titre' => 'Google Search Central, créer du contenu utile, fiable et axé sur les personnes (mise à jour du 1er octobre 2026)', 'url' => 'https://developers.google.com/search/docs/fundamentals/creating-helpful-content?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, conseils sur l\'utilisation de contenu généré par IA (mise à jour du 1er octobre 2026)', 'url' => 'https://developers.google.com/search/docs/fundamentals/using-gen-ai-content?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, règles contre le spam pour la recherche Google (mise à jour du 28 août 2026)', 'url' => 'https://developers.google.com/search/docs/essentials/spam-policies?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, guide de démarrage en référencement (SEO)', 'url' => 'https://developers.google.com/search/docs/fundamentals/seo-starter-guide?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, influencer les liens de titre dans les résultats de recherche', 'url' => 'https://developers.google.com/search/docs/appearance/title-link?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, contrôler les extraits dans les résultats de recherche (meta description)', 'url' => 'https://developers.google.com/search/docs/appearance/snippet?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, bonnes pratiques concernant les liens et le texte d\'ancrage', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/links-crawlable?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, ce que les propriétaires de sites doivent savoir sur les mises à jour principales', 'url' => 'https://developers.google.com/search/docs/appearance/core-updates?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Status Dashboard, historique des mises à jour du classement', 'url' => 'https://status.search.google.com/products/rGHU1u87FJnkP6W2GwMi/history', 'date' => '2026-10-05'],
        ['titre' => 'Aide Search Console, à propos de la Search Console (service gratuit)', 'url' => 'https://support.google.com/webmasters/answer/9128668?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Aide Search Console, rapport sur les performances : tâches courantes et cas d\'usage', 'url' => 'https://support.google.com/webmasters/answer/17010961?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Aide Search Console, rapport sur les performances : filtres avancés et comparaison', 'url' => 'https://support.google.com/webmasters/answer/17011165?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Aide Search Console, rapport sur les performances : écarts dans les données', 'url' => 'https://support.google.com/webmasters/answer/17010575?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Blog Google Search Central, filtre des requêtes de marque dans la Search Console (20 novembre 2025, mis à jour le 11 mars 2026)', 'url' => 'https://developers.google.com/search/blog/2025/11/search-console-branded-filter', 'date' => '2026-10-05'],
        ['titre' => 'Blog Google Search Central, regroupements de requêtes dans Search Console Insights (27 octobre 2025)', 'url' => 'https://developers.google.com/search/blog/2025/10/search-console-query-groups', 'date' => '2026-10-05'],
        ['titre' => 'Blog Google Search Central, vues hebdomadaires et mensuelles dans la Search Console (10 décembre 2025)', 'url' => 'https://developers.google.com/search/blog/2025/12/weekly-monthly-views-search-console', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, utiliser le Keyword Planner', 'url' => 'https://support.google.com/google-ads/answer/7337243?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, prévisions et données historiques du Keyword Planner', 'url' => 'https://support.google.com/google-ads/answer/3022575?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Trends, questions fréquentes sur les données', 'url' => 'https://support.google.com/trends/answer/4365533?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Aide de la recherche Google, fonctionnement des prédictions de la saisie semi-automatique', 'url' => 'https://support.google.com/websearch/answer/7368877?hl=en', 'date' => '2026-10-05'],
        ['titre' => 'Screaming Frog, tarifs du SEO Spider', 'url' => 'https://www.screamingfrog.co.uk/seo-spider/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Ahrefs, Ahrefs Webmaster Tools', 'url' => 'https://ahrefs.com/webmaster-tools', 'date' => '2026-10-05'],
        ['titre' => 'Semrush, tarifs', 'url' => 'https://www.semrush.com/prices/', 'date' => '2026-10-05'],
        ['titre' => 'Yoast, extension Yoast SEO pour WordPress et Yoast SEO Premium', 'url' => 'https://yoast.com/wordpress/plugins/seo/', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, parts des moteurs de recherche au Bénin (septembre 2026)', 'url' => 'https://gs.statcounter.com/search-engine-market-share/all/benin', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, parts des moteurs de recherche en Afrique (septembre 2026)', 'url' => 'https://gs.statcounter.com/search-engine-market-share/all/africa', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, parts des moteurs de recherche en France (septembre 2026)', 'url' => 'https://gs.statcounter.com/search-engine-market-share/all/france', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, ordinateur, mobile et tablette au Bénin (septembre 2026)', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/benin', 'date' => '2026-10-05'],
        ['titre' => 'StatCounter Global Stats, ordinateur, mobile et tablette en France (septembre 2026)', 'url' => 'https://gs.statcounter.com/platform-market-share/desktop-mobile-tablet/france', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, le règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['referencement-ia-geo', 'visibilite-google', 'analytics-ga4', 'contenu-avec-ia', 'marketing-digital-b2b', 'linkedin-reseaux-sociaux'],
        'services'    => ['referencement-naturel-seo', 'audit-seo-complet'],
        'comparatifs' => [],
    ],
];
