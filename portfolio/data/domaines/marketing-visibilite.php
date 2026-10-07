<?php
// ============================================================
// data/domaines/marketing-visibilite.php · Page domaine « Marketing et
// visibilité » (vague 1B). Aide à choisir entre les neuf formations du
// domaine : visibilite-google, referencement-ia-geo, marketing-digital-b2b et
// e-commerce (publiées le 2026-10-05, liées dans le texte) ; seo-contenu,
// linkedin-reseaux-sociaux, publicite-meta-google-ads, emailing-automation et
// analytics-ga4 (publiées le 2026-10-12, citées par leur nom sans lien,
// reliées par le champ « liens »). Le gabarit affiche en tête une carte par
// formation publiée : la page ne refait pas la liste. Sources officielles
// consultées le 2026-10-05 (WebFetch, curl ou navigateur).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formations marketing et visibilité : choisir entre Google, référencement IA, réseaux sociaux, publicité, e-mail, e-commerce et mesure selon votre activité',
    'title'   => 'Formations marketing digital et visibilité | Richard SALANON',
    'meta'    => 'Neuf formations marketing : fiche Google, SEO, référencement IA, LinkedIn, publicité, e-mail, e-commerce, GA4. Comparez-les et suivez votre parcours.',
    'en_bref' => 'Le domaine Marketing et visibilité réunit neuf formations : être trouvé sur Google et dans les réponses des assistants d\'IA, publier sur LinkedIn et les réseaux sociaux, acheter de la publicité, écrire à ses clients par e-mail, vendre en ligne, prospecter des entreprises et mesurer ce que tout cela rapporte. Cette page ne décrit pas chaque programme : elle aide à choisir la bonne formation selon votre activité, votre public et ce que votre équipe sait déjà faire. Chaque formation se tient en intra-entreprise, en inter-entreprises, à distance ou en formule hybride, et son prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'faits_hero' => [
        ['l' => 'Formations', 'v' => '9 : Google local, SEO, référencement IA, B2B, LinkedIn, publicité, e-mail, e-commerce, GA4'],
        ['l' => 'Publics', 'v' => 'Commerces et établissements, boutiques en ligne, entreprises B2B, équipes marketing, dirigeants'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que gagne une entreprise à former ses équipes au marketing et à la visibilité, et que ne faut-il pas en attendre ?',
            'paragraphes' => [
                'Un client qui cherche un fournisseur passe aujourd\'hui par quatre portes : une recherche sur Google ou sur une carte, une question posée à un assistant comme ChatGPT ou Gemini, un réseau social où il suit des entreprises, et sa boîte de réception. Les neuf formations de ce domaine apprennent à tenir chacune de ces portes, puis à compter ce qui passe à travers. Elles ne forment pas des spécialistes du marketing : elles donnent à la personne qui s\'en occupe déjà, souvent en plus de son poste, des gestes sûrs et une routine qu\'elle peut tenir seule.',
                'Elles se rangent en trois familles. La première sert à être trouvé : la fiche d\'établissement et les avis sur Google, le référencement naturel par le contenu, le référencement dans les réponses des assistants d\'IA. La deuxième sert à convaincre et à garder le contact : LinkedIn et les réseaux sociaux, l\'e-mail et ses séquences, la prospection d\'entreprises clientes. La troisième sert à vendre et à décider : la publicité payante sur Meta et Google, la boutique en ligne, et Google Analytics 4 pour savoir ce qui rapporte vraiment.',
                'Une formation change la façon de travailler, pas la position de l\'entreprise du jour au lendemain. Personne ne peut promettre une première place sur Google ou une citation par ChatGPT, et Google l\'écrit lui-même : aucun paiement ni aucune demande ne fait monter une fiche dans son classement local. Ce qu\'une équipe formée obtient, c\'est une présence exacte, tenue à jour, conforme aux règles des plateformes et mesurée chaque mois, ce qui est déjà rare chez les concurrents.',
                'Si vous préférez confier le travail plutôt que l\'apprendre, d\'autres pages répondent au besoin : le <a href="/services/seo-local-google-business">référencement local et la fiche Google Business</a>, le <a href="/services/referencement-naturel-seo">référencement naturel</a>, le <a href="/services/referencement-ia-geo">référencement IA (GEO)</a> ou la création d\'un <a href="/services/site-e-commerce">site e-commerce</a>. Beaucoup d\'entreprises combinent les deux : la mise en place est confiée, puis l\'équipe est formée pour faire vivre ce qui a été construit sans rappeler le prestataire pour chaque horaire de fête.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formation du domaine correspond à ce que votre équipe doit apprendre ?',
            'legende' => 'Une ligne par formation, avec le public visé, ce qu\'elle apprend et ce qu\'il faut savoir ou avoir avant de s\'inscrire. Quatre formations sont publiées ; SEO et marketing de contenu, LinkedIn et réseaux sociaux d\'entreprise, Publicité Meta Ads et Google Ads, Emailing et marketing automation, et Google Analytics 4 et pilotage le sont à partir du 12 octobre 2026.',
            'entetes' => ['Formation', 'Pour qui', 'Ce qu\'elle apprend', 'Prérequis'],
            'lignes'  => [
                ['<a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a>', 'Commerces, restaurants, hôtels, pharmacies, cabinets, artisans : tout lieu ou toute zone de service que l\'on cherche « près de chez moi »', 'Reprendre la fiche d\'établissement, la remplir sans erreur, demander des avis dans les règles de Google, y répondre, et aligner le site sur la fiche', 'Un smartphone, l\'adresse et les horaires exacts, et l\'accès au compte Google qui contrôle la fiche, ou les moyens de le retrouver'],
                ['SEO et marketing de contenu', 'Rédacteurs, chargés de communication, responsables de site, dirigeants de petites structures qui écrivent eux-mêmes', 'Choisir les mots-clés d\'après les questions des clients, écrire des pages et des articles qui répondent, relier les pages entre elles, suivre leurs positions', 'Savoir publier une page sur le site de l\'entreprise ; un accès à la Search Console aide'],
                ['<a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>', 'Équipes marketing, communication et rédaction qui veulent savoir ce que les assistants d\'IA disent de l\'entreprise', 'Bâtir un panel de questions, relever les réponses de ChatGPT, Gemini, Perplexity, Claude et Copilot, réécrire les pages pour qu\'elles soient reprises, mesurer les citations', 'Les bases du référencement naturel, ou SEO et marketing de contenu suivie avant ; un site déjà en ligne'],
                ['<a href="/formations/marketing-digital-b2b">Marketing digital B2B</a>', 'Dirigeants, commerciaux et responsables marketing d\'entreprises qui vendent à d\'autres entreprises', 'Définir les comptes à viser, écrire une offre d\'entrée et des preuves, prospecter dans le respect des lois de chaque pays, suivre chaque contact jusqu\'au rendez-vous', 'Connaître ses offres et ses meilleurs clients ; aucune compétence technique'],
                ['LinkedIn et réseaux sociaux d\'entreprise', 'Dirigeants, commerciaux, chargés de communication qui publient au nom de l\'entreprise ou en leur nom propre', 'Soigner les profils et la page, fixer une ligne éditoriale, publier avec régularité, répondre aux commentaires, lire les statistiques', 'Un compte LinkedIn actif et les droits d\'administration de la page de l\'entreprise'],
                ['Publicité Meta Ads et Google Ads', 'Responsables marketing, commerçants en ligne, dirigeants qui financent ou envisagent des campagnes payantes', 'Construire une campagne, fixer et surveiller un budget, cibler sans gaspiller, suivre les conversions, couper ce qui ne rapporte pas', 'Une page d\'arrivée ou une boutique en état de vendre ; une mesure des conversions en place, ou Google Analytics 4 suivie avant'],
                ['Emailing et marketing automation', 'Boutiques en ligne, organismes de formation, entreprises de services qui écrivent régulièrement à leurs clients', 'Constituer une liste avec un consentement prouvable, écrire une lettre d\'information, monter des séquences automatiques, protéger la délivrabilité', 'Un nom de domaine à l\'entreprise et l\'accès à sa configuration, ou à la personne qui la gère'],
                ['<a href="/formations/e-commerce">Vendre en ligne : e-commerce</a>', 'Commerçants, gérants de boutique en ligne, équipes de préparation et de service client', 'Tenir le catalogue, encaisser par mobile money ou par carte, livrer, traiter retours et réclamations, suivre les indicateurs de la semaine', 'Une boutique en ligne ouverte ou sur le point de l\'être, et l\'accès à son administration'],
                ['Google Analytics 4 et pilotage', 'Dirigeants, responsables marketing, gestionnaires de site qui veulent savoir d\'où viennent les ventes et les demandes', 'Définir ce qui compte comme une conversion, régler les événements, lire les rapports, construire un tableau mensuel qui sert à décider', 'Un accès administrateur à la propriété Google Analytics ou au site, et la liste des objectifs commerciaux de l\'année'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment départager deux formations qui semblent répondre au même besoin ?',
            'intro' => 'Plusieurs formations du domaine se touchent. Dans chaque cas, une question simple sur votre situation suffit en général à trancher.',
            'items' => [
                ['titre' => 'Visibilité Google ou SEO et marketing de contenu ?', 'texte' => 'Demandez-vous où le client vous cherche. S\'il tape « pharmacie ouverte », « plombier Akpakpa » ou « restaurant près de moi », la réponse se joue sur la carte et dans la fiche d\'établissement : commencez par la visibilité Google. S\'il cherche une information avant d\'acheter, comme « quel logiciel de paie pour une PME », c\'est le contenu du site qui le fait venir, et la formation au SEO par le contenu répond mieux.'],
                ['titre' => 'SEO et marketing de contenu ou référencement IA ?', 'texte' => 'Le premier précède le second. Google écrit, sur sa page consacrée aux fonctionnalités d\'IA de la recherche, qu\'aucune optimisation spéciale n\'est requise pour figurer dans ses aperçus IA : une page doit d\'abord être indexée et utile. Une équipe qui n\'a jamais travaillé le référencement naturel gagnera à suivre le SEO par le contenu avant le référencement IA, qui porte sur le relevé des citations et la manière d\'écrire des passages qu\'un assistant reprend.'],
                ['titre' => 'Marketing digital B2B ou LinkedIn et réseaux sociaux ?', 'texte' => 'LinkedIn est un canal ; le marketing B2B est une méthode qui en utilise plusieurs. Si vous savez déjà à quels comptes vendre et qu\'il vous manque une présence régulière, la formation LinkedIn suffit. Si vous publiez sans savoir à qui vous parlez, ni ce que vous proposez en premier rendez-vous, commencez par le marketing B2B : la ligne éditoriale viendra de ce travail de ciblage.'],
                ['titre' => 'Publicité payante ou référencement ?', 'texte' => 'La publicité achète de la visibilité tant que l\'on paie ; le référencement la construit plus lentement, mais elle reste quand on arrête de dépenser. Pour un lancement, une promotion datée ou un test d\'offre, la publicité est logique. Pour une activité stable, le référencement d\'abord. Dans les deux cas, il faut savoir mesurer une conversion avant de dépenser le premier franc.'],
                ['titre' => 'Emailing ou WhatsApp ?', 'texte' => 'Le bon canal est celui que vos clients lisent et sur lequel ils ont accepté de vous lire. Une boutique de quartier à Cotonou ou à Abidjan échange surtout sur WhatsApp : la formation <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>, dans le domaine Automatisation, lui sera plus utile. Une entreprise qui vend en Europe, ou à des services achats, garde l\'e-mail comme canal principal et suivra Emailing et marketing automation.'],
                ['titre' => 'E-commerce ou formation à l\'outil de la boutique ?', 'texte' => 'La formation Vendre en ligne porte sur le métier : catalogue, encaissement, livraison, retours, service client. Elle fonctionne quel que soit l\'outil, WooCommerce, Shopify, Odoo ou une plateforme sur mesure. Si votre difficulté est l\'outil lui-même, installer une extension ou modifier un thème, c\'est une formation technique du domaine <a href="/formations/domaine/developpement">Développement</a> qu\'il faut viser.'],
                ['titre' => 'Google Analytics 4 avant ou après les autres ?', 'texte' => 'Avant, dès que l\'entreprise s\'apprête à payer de la publicité ou à juger un site. Sans mesure fiable, on ne sait ni quelle campagne couper, ni quelle page améliorer. Pour une boutique de quartier qui vit de sa fiche Google, en revanche, les statistiques de la fiche suffisent longtemps, et GA4 peut attendre.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel parcours suivre selon le profil de votre entreprise ?',
            'legende' => 'Cinq profils fréquents, et l\'ordre dans lequel enchaîner les formations. Chaque étape suppose que la précédente tourne déjà dans la semaine ordinaire de l\'équipe.',
            'entetes' => ['Profil', 'Première étape', 'Deuxième étape', 'En complément', 'Quand passer à la suite'],
            'lignes'  => [
                ['Commerce de quartier ou établissement local', '<a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a>', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>, pour répondre aux clients que la fiche amène', 'LinkedIn et réseaux sociaux d\'entreprise, si la clientèle vous suit sur Facebook ou Instagram', 'La fiche est complète, les avis arrivent chaque mois et reçoivent une réponse, les appels venus de Google sont comptés'],
                ['Boutique en ligne', '<a href="/formations/e-commerce">Vendre en ligne : e-commerce</a>', 'Google Analytics 4 et pilotage, pour savoir quelles visites deviennent des commandes', 'Publicité Meta Ads et Google Ads, puis Emailing et marketing automation pour les clients qui ont déjà acheté', 'Les commandes, les paiements et les retours sont rapprochés chaque semaine sans retard'],
                ['Entreprise qui vend à des entreprises', '<a href="/formations/marketing-digital-b2b">Marketing digital B2B</a>', 'LinkedIn et réseaux sociaux d\'entreprise, pour les dirigeants et les commerciaux', 'Emailing et marketing automation, puis SEO et marketing de contenu pour les pages d\'offre', 'Une liste de comptes sourcée existe, et chaque semaine des rendez-vous sont tenus et notés'],
                ['Équipe marketing ou communication', 'SEO et marketing de contenu', '<a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>', 'Google Analytics 4 et pilotage, et Publicité Meta Ads et Google Ads si un budget existe', 'Un calendrier éditorial tient depuis deux ou trois mois et les pages clés sont indexées'],
                ['Dirigeant qui veut mesurer', 'Google Analytics 4 et pilotage', 'Le tableau mensuel construit en formation, lu en comité de direction', 'La formation qui correspond au canal le plus coûteux du tableau : publicité, contenu ou prospection', 'Le tableau répond à la question « d\'où viennent nos clients ? » avec des chiffres, et non des impressions'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pourquoi cet ordre pour chaque profil, et quand faut-il s\'en écarter ?',
            'intro' => 'Un même principe guide les cinq parcours : rendre l\'entreprise exacte et joignable là où on la cherche déjà, puis attirer davantage, puis mesurer pour choisir où mettre le prochain franc ou le prochain euro.',
            'items' => [
                ['titre' => 'Le commerce local : la carte avant tout le reste', 'texte' => 'Pour un restaurant, un garage ou un cabinet médical, la fiche Google est souvent la page la plus vue de l\'entreprise, bien avant le site. Une adresse fausse, des horaires périmés ou un numéro qui ne répond plus font perdre des clients chaque jour sans que personne ne le voie. On corrige donc la fiche et on organise les avis en premier. WhatsApp vient ensuite, parce que les clients qui trouvent la fiche appellent ou écrivent, et il faut leur répondre vite et bien.'],
                ['titre' => 'La boutique en ligne : faire tourner avant d\'attirer', 'texte' => 'Acheter des visites vers une boutique dont les fiches sont incomplètes, dont le paiement échoue ou dont les retours ne sont pas organisés revient à payer pour décevoir. La formation e-commerce pose d\'abord la routine de la boutique. GA4 vient ensuite pour savoir quelles sources de visites produisent des commandes. La publicité et l\'e-mail arrivent en dernier, sur une boutique capable d\'absorber le surplus de commandes.'],
                ['titre' => 'L\'entreprise B2B : savoir à qui parler avant de publier', 'texte' => 'Une entreprise qui vend à des professionnels a rarement besoin de milliers d\'abonnés. Il lui faut une liste de quelques dizaines de comptes, une offre de premier rendez-vous et des preuves. Le marketing B2B construit ce socle ; LinkedIn et l\'e-mail deviennent alors des moyens de toucher ces comptes, et non une fin. Si les commerciaux publient déjà avec régularité, l\'ordre peut s\'inverser : LinkedIn d\'abord, puis la méthode.'],
                ['titre' => 'L\'équipe marketing : le contenu, puis les assistants', 'texte' => 'Les pages qu\'un assistant d\'IA cite sont d\'abord des pages que les moteurs de recherche trouvent et comprennent. Une équipe qui produit déjà du contenu régulier peut donc passer vite au référencement IA, qui ajoute le relevé des réponses et l\'écriture de passages repris sans déformation. Une équipe qui part de zéro installe d\'abord le calendrier éditorial et la mesure. Si elle gère un budget publicitaire, GA4 passe avant la publicité.'],
                ['titre' => 'Le dirigeant : la mesure d\'abord, les outils ensuite', 'texte' => 'Le dirigeant n\'a pas besoin de savoir régler une campagne. Il doit pouvoir lire chaque mois d\'où viennent les demandes et les ventes, ce que coûte chaque canal et ce qu\'il rapporte. La formation à GA4 lui donne ce tableau. Il choisit ensuite, chiffres en main, la formation à financer pour son équipe. S\'il veut d\'abord une vision d\'ensemble de la digitalisation, le domaine <a href="/formations/domaine/transformation-digitale">Transformation digitale</a> est le bon point de départ.'],
                ['titre' => 'Quand l\'ordre change', 'texte' => 'Une entreprise qui dépense déjà en publicité sans mesure fiable commence par GA4, quel que soit son profil : chaque semaine sans suivi coûte de l\'argent. Une entreprise dont la fiche Google a été suspendue ou piratée commence par la visibilité Google, même si elle vend surtout en ligne. Et un établissement qui reçoit des avis injustes en nombre traite ce sujet avant toute campagne.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Carte Google, contenu, assistants d\'IA ou publicité : quelle source de clients travailler en premier ?',
            'options'  => ['Fiche Google et avis', 'Contenu du site (SEO)', 'Réponses des assistants d\'IA', 'Publicité Meta et Google'],
            'criteres' => [
                ['critere' => 'Pour quel besoin', 'valeurs' => ['Être choisi par un client proche qui cherche maintenant', 'Être trouvé par un client qui se renseigne avant d\'acheter', 'Être cité quand un client demande conseil à ChatGPT, Gemini ou Perplexity', 'Toucher vite un public précis, pour un lancement ou une offre datée']],
                ['critere' => 'Délai avant les premiers effets', 'valeurs' => ['Quelques jours pour une fiche corrigée, quelques mois pour les avis', 'Plusieurs mois en général', 'Variable et difficile à prévoir', 'Dès la mise en ligne de la campagne']],
                ['critere' => 'Dépense récurrente', 'valeurs' => ['Aucune pour la fiche, du temps chaque semaine', 'Du temps d\'écriture, parfois un rédacteur', 'Du temps de relevé et de réécriture', 'Le budget publicitaire, versé à Meta ou à Google']],
                ['critere' => 'Ce qui reste si l\'on s\'arrête', 'valeurs' => ['La fiche et les avis restent, mais vieillissent', 'Les pages continuent d\'attirer des visites', 'Les pages restent citables tant qu\'elles sont exactes', 'Presque rien : la visibilité s\'arrête avec le paiement']],
                ['critere' => 'Formation du domaine', 'valeurs' => ['<a href="/formations/visibilite-google">Visibilité Google</a>', 'SEO et marketing de contenu', '<a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>', 'Publicité Meta Ads et Google Ads']],
            ],
            'verdict'  => 'Pour un établissement que l\'on vient voir, la fiche Google passe en premier. Pour une entreprise dont les clients comparent longtemps, le contenu du site, puis les assistants d\'IA. La publicité complète ces sources mais ne les remplace pas, et ne se lance qu\'une fois la mesure des conversions en place.',
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quels accès, quels comptes et quel matériel réunir avant la première séance ?',
            'items' => [
                'L\'accès propriétaire ou administrateur de chaque compte concerné, ouvert au nom de l\'entreprise : fiche Google, Search Console, propriété Google Analytics, page LinkedIn, compte publicitaire Meta ou Google, outil d\'e-mail, administration de la boutique.',
                'La liste des personnes qui détiennent aujourd\'hui ces accès, prestataire et anciens salariés compris : la reprendre est souvent le premier exercice.',
                'Un ordinateur par participant pour le contenu, la publicité, l\'e-mail et GA4 ; le smartphone de l\'établissement pour la fiche Google et les avis.',
                'Dix à trente questions que les clients posent réellement, recueillies auprès de l\'accueil, des vendeurs ou des commerciaux, dans leurs propres mots.',
                'Les chiffres disponibles, même approximatifs : nombre de demandes ou de commandes par mois, panier moyen, budget publicitaire dépensé, sources des clients connues.',
                'Pour l\'e-mail et la prospection, l\'origine de chaque liste de contacts et la preuve de l\'accord donné, ou la décision de ne pas utiliser une liste dont on ignore la provenance.',
                'Des photos récentes de l\'établissement, des produits ou de l\'équipe, et les textes de présentation déjà publiés, pour les comparer pendant la séance.',
                'Une connexion de secours, par exemple un partage de connexion depuis un téléphone, et une demi-journée bloquée la semaine suivante pour appliquer ce qui a été appris.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quel format pour quelle formation du domaine ?',
            'legende' => 'Chaque formation existe dans les quatre formats. Le choix se fait au premier échange, selon le nombre de personnes, leur éloignement et le travail à faire sur les comptes réels de l\'entreprise.',
            'entetes' => ['Format', 'Atout pour ce domaine', 'Formations qui s\'y prêtent le mieux', 'Point d\'attention'],
            'lignes'  => [
                ['Intra-entreprise', 'Les exercices se font sur vos comptes, vos pages et vos chiffres, sans rien montrer à d\'autres entreprises', 'Marketing digital B2B, Google Analytics 4, publicité payante, e-commerce : tout ce qui touche à vos clients et à vos résultats', 'Les accès doivent être prêts avant la séance, sinon la matinée se passe à les retrouver'],
                ['Inter-entreprises', 'Partager le coût, et voir comment d\'autres métiers répondent aux avis ou rédigent une page', 'Visibilité Google pour des commerçants d\'une même zone, LinkedIn et réseaux sociaux pour des dirigeants de petites structures', 'Chacun travaille sur sa propre fiche ou son propre profil ; les données sensibles restent hors de l\'écran partagé'],
                ['À distance', 'Réunir une équipe dispersée entre plusieurs villes ou plusieurs pays, en séances courtes', 'Référencement IA, SEO et contenu, Google Analytics 4, emailing : tout se passe dans un navigateur, sur écran partagé', 'Une connexion stable est nécessaire, et la caméra aide à voir qui décroche'],
                ['Hybride', 'Lancer en salle, puis revoir les résultats réels quelques semaines plus tard', 'Publicité Meta Ads et Google Ads, dont les premières données arrivent après la mise en ligne, et emailing, qui se juge sur plusieurs envois', 'L\'intervalle entre les séances doit être tenu, sinon le bilan porte sur trop peu de données'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on suivre plusieurs formations du domaine à la suite, et à quel rythme ?',
            'paragraphes' => [
                'Oui, mais le marketing a une particularité : ses résultats se lisent sur des semaines, parfois sur des mois. Une fiche Google corrigée lundi ne change pas les appels mardi. Une page réécrite pour le référencement attend d\'être explorée de nouveau. Une campagne publicitaire n\'a rien de significatif à montrer avant d\'avoir dépensé une partie de son budget. Enchaîner deux formations la même semaine prive donc l\'équipe de la matière la plus utile pour la seconde : ses propres chiffres.',
                'Un intervalle d\'un mois entre deux formations d\'un parcours convient dans la plupart des cas. Pour une boutique, cela peut donner la formation e-commerce en janvier, GA4 en février sur les premières commandes mesurées, puis la publicité en mars avec un budget fixé d\'après ce que la boutique sait déjà vendre. Pour une entreprise B2B, le marketing B2B un mois, puis LinkedIn le mois suivant pour les commerciaux qui ont déjà leur liste de comptes.',
                'Quand plusieurs formations sont prévues, le devis les présente comme un seul programme, avec les dates, les exercices qui se répondent d\'une session à l\'autre et ce que l\'équipe doit avoir fait entre deux séances. Une même personne n\'a pas à tout suivre : la personne qui tient la fiche Google n\'est pas forcément celle qui gère la publicité, et le dirigeant peut ne rejoindre que la formation à la mesure.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles règles des plateformes et des lois chaque formation du domaine fait-elle appliquer ?',
            'legende' => 'Textes et pages officielles consultés le 5 octobre 2026. Ces règles reviennent dans plusieurs formations ; chacune les applique à son canal.',
            'entetes' => ['Règle', 'Ce qu\'elle dit', 'Source', 'Où on l\'applique'],
            'lignes'  => [
                ['Avis sur Google', 'Interdits : les avis payés directement ou en nature, les avantages offerts contre un avis, la sollicitation sélective des seuls clients satisfaits, les objectifs d\'avis fixés au personnel', 'Règlement de Google Maps sur les contenus ajoutés par les utilisateurs', 'Visibilité Google, e-commerce'],
                ['Classement local', 'Pertinence, distance et proéminence, avis et liens compris ; aucun moyen d\'obtenir une meilleure place sur demande ou contre rémunération', 'Aide Google Business Profile', 'Visibilité Google'],
                ['Fonctions d\'IA de la recherche Google', 'Aucune exigence supplémentaire ni optimisation spéciale : la page doit être indexée et pouvoir s\'afficher avec un extrait ; le trafic figure dans la Search Console, avec le type de recherche Web (page mise à jour le 31 décembre 2025)', 'Google Search Central', 'Référencement IA, SEO et contenu'],
                ['Prospection par e-mail en France', 'Consentement préalable pour un particulier ; pour un professionnel, message en rapport avec son activité, information préalable et droit de s\'opposer sans frais (page mise à jour le 10 juin 2026)', 'CNIL', 'Marketing B2B, emailing'],
                ['Prospection automatisée au Bénin', 'Article 332 : interdite sans consentement préalable par e-mail, SMS ou système automatisé, le silence ne valant pas accord ; article 333 : permise vers un client pour des produits analogues, et vers une entreprise si l\'adresse est impersonnelle', 'Loi n° 2017-20 portant code du numérique', 'Marketing B2B, emailing, e-commerce'],
                ['Envois en nombre vers Gmail', 'À partir de 5 000 messages par jour vers des comptes Gmail : SPF, DKIM et DMARC, désabonnement en un clic pour le marketing, taux de spam sous 0,3 %, en vigueur depuis le 1er février 2024', 'Aide Google Workspace, consignes aux expéditeurs', 'Emailing et marketing automation'],
                ['Traceurs publicitaires en Europe', 'Consentement préalable avant de déposer un traceur publicitaire ; certains outils de mesure d\'audience en sont exemptés sous conditions', 'CNIL, cookies et traceurs', 'Publicité, Google Analytics 4'],
                ['Budget Google Ads', 'Un jour donné, la dépense peut atteindre deux fois le budget quotidien moyen ; sur le mois, elle ne dépasse pas 30,4 fois ce budget', 'Aide Google Ads', 'Publicité Meta Ads et Google Ads'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un parcours du domaine selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Clinique dentaire à Cotonou', 'probleme' => 'Deux fiches Google coexistent, l\'une avec l\'ancien numéro, et des patients arrivent à une adresse que la clinique a quittée.', 'solution' => 'Visibilité Google pour la secrétaire et le dentiste associé : suppression du doublon, fiche complétée, demande d\'avis après le rendez-vous sans contrepartie, réponses rédigées avec la retenue qu\'impose le secret médical.'],
                ['secteur' => 'Boutique de pagnes et de prêt-à-porter à Lomé', 'probleme' => 'Les ventes en ligne progressent, mais personne ne sait si les clients viennent d\'Instagram, de Google ou du bouche-à-oreille, et la boutique hésite à payer de la publicité.', 'solution' => 'Vendre en ligne pour la gérante et son vendeur, puis Google Analytics 4 un mois plus tard pour mesurer les commandes par source, avant de décider d\'un budget sur Meta.'],
                ['secteur' => 'Bureau d\'études à Abidjan', 'probleme' => 'Les associés publient sur LinkedIn quand ils ont le temps, sans liste de cibles, et les appels d\'offres restent la seule source de nouveaux clients.', 'solution' => 'Marketing digital B2B pour les associés et la chargée de développement, puis LinkedIn et réseaux sociaux pour donner un rythme de publication à chacun, aligné sur les comptes visés.'],
                ['secteur' => 'Éditeur de logiciel à Lyon', 'probleme' => 'Les prospects disent avoir découvert des concurrents en interrogeant un assistant d\'IA ; l\'éditeur ne sait pas ce que ces outils disent de lui.', 'solution' => 'Référencement IA (GEO) pour l\'équipe marketing, sur la base des pages déjà travaillées en SEO : panel de questions, relevé mensuel, réécriture des pages d\'offre.'],
                ['secteur' => 'Organisme de formation à Dakar', 'probleme' => 'La lettre d\'information part d\'une messagerie ordinaire vers un fichier mêlant anciens stagiaires et adresses récupérées lors de salons ; une partie arrive en courrier indésirable.', 'solution' => 'Emailing et marketing automation : tri du fichier selon l\'origine et l\'accord de chaque contact, outil d\'envoi sur le domaine de l\'organisme, séquence d\'accueil des nouveaux inscrits.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres publics aident à choisir sa formation dans ce domaine ?',
            'items' => [
                ['valeur' => '32,2 %', 'libelle' => 'Part de la population du Bénin qui utilise Internet (données d\'octobre 2025) : la clientèle locale se cherche d\'abord sur téléphone', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '660 000', 'libelle' => 'Membres inscrits sur LinkedIn au Bénin selon le même rapport : des comptes, pas des utilisateurs actifs chaque jour', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '67 %', 'libelle' => 'Acheteurs B2B qui préfèrent un parcours d\'achat sans commercial, selon une enquête auprès de 646 acheteurs menée d\'août à septembre 2025 et publiée le 9 mars 2026', 'source' => 'Gartner, communiqué du 9 mars 2026', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2026-03-09-gartner-sales-survey-finds-67-percent-of-b2b-buyers-prefer-a-rep-free-experience'],
                ['valeur' => '196,4 Md€', 'libelle' => 'Dépenses en ligne en France en 2025, pour 3,2 milliards de transactions et un panier moyen de 62 € (bilan publié le 11 février 2026)', 'source' => 'Fevad, bilan du e-commerce en France', 'url' => 'https://www.fevad.com/bilan-du-e-commerce-en-france-les-francais-ont-depense-pres-de-200-milliards-deuros-sur-internet-en-2025/'],
                ['valeur' => '5 000', 'libelle' => 'Messages par jour vers Gmail à partir desquels un expéditeur doit configurer SPF, DKIM et DMARC et proposer le désabonnement en un clic', 'source' => 'Aide Google Workspace, consignes aux expéditeurs', 'url' => 'https://support.google.com/a/answer/81126?hl=fr'],
                ['valeur' => '1er juillet 2023', 'libelle' => 'Date à laquelle les propriétés Universal Analytics standards ont cessé de traiter les données ; Google Analytics 4 les remplace', 'source' => 'Aide Google Analytics', 'url' => 'https://support.google.com/analytics/answer/11583528?hl=fr'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation en marketing et visibilité, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucune formation du domaine n\'a de tarif affiché : chacune fait l\'objet d\'un devis, établi après un premier échange qui, comme le cadrage et le devis, est gratuit. Les budgets publicitaires et les abonnements aux outils ne passent jamais par ce devis : ils sont réglés par l\'entreprise à Meta, à Google ou à l\'éditeur.',
            'items'      => [
                ['offre' => 'Une formation du domaine', 'prix' => 'Sur devis', 'inclus' => ['Programme ajusté à votre activité', 'Exercices sur vos comptes et vos pages', 'Supports remis à chaque participant', 'Évaluation et attestation']],
                ['offre' => 'Parcours de plusieurs formations', 'prix' => 'Sur devis', 'inclus' => ['Ordre et dates fixés dans un seul programme', 'Travail à faire entre deux sessions', 'Bilan chiffré présenté au commanditaire']],
                ['offre' => 'Suivi après la session', 'prix' => 'Sur devis', 'inclus' => ['Relecture des premières actions menées', 'Lecture des chiffres des premières semaines', 'Réponses aux questions d\'application']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, et l\'écart de niveau entre eux.',
                'Le nombre de formations enchaînées et leur durée cumulée.',
                'La préparation : reprise des accès, collecte des questions des clients, extraction des premiers chiffres.',
                'Le format, et un déplacement éventuel hors de Cotonou ou hors du Bénin.',
                'La présence d\'un suivi dans les semaines qui suivent.',
                'Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l\'échéancier du devis.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il financer une formation de ce domaine ?',
            'paragraphes' => [
                'Peut-être, selon le pays et le dossier, et la réponse appartient au fonds, jamais au formateur. En Côte d\'Ivoire, la page du FDFP sur le plan de formation, lue le 5 octobre 2026, réserve ce dispositif aux entreprises qui paient régulièrement leurs deux taxes ; une action « intra », animée par un intervenant extérieur pour les seuls salariés de l\'entreprise, y figure, et le versement suit le contrôle du fonds et l\'approbation de sa Commission permanente. Au Bénin, le décret n° 2022-286 du 11 mai 2022 approuve les statuts du FODEFCA.',
                'Au Sénégal, le 3FPT a un guichet pour le personnel des entreprises et les membres des organisations professionnelles, avec une demande en ligne. En France, France Compétences indique que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, ceux des OPCO compris. Richard SALANON n\'a ni cette certification ni l\'agrément d\'un fonds africain. Le bon réflexe : présenter le programme et le devis au fonds, obtenir sa réponse écrite, et prévoir la dépense comme si aucune aide n\'arrivait.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font perdre le bénéfice d\'une formation en marketing ?',
            'intro' => 'Elles ne viennent presque jamais d\'un manque de technique. Elles tiennent à l\'organisation, aux accès et à la patience.',
            'items' => [
                ['titre' => 'Former quelqu\'un qui n\'a pas les accès', 'texte' => 'La personne formée revient au bureau et découvre que la fiche Google, la page LinkedIn ou le compte publicitaire appartiennent à un ancien prestataire. Récupérer les droits de propriétaire avant la formation évite des semaines d\'attente.'],
                ['titre' => 'Payer de la publicité avant de mesurer', 'texte' => 'Sans conversion définie, une campagne se juge sur les clics et les mentions « j\'aime ». On découvre trois mois plus tard qu\'elle n\'a rien vendu. La mesure se règle avant la première dépense.'],
                ['titre' => 'Confondre audience et clients', 'texte' => 'Mille abonnés de plus ne valent pas dix demandes de devis. Chaque formation du domaine fixe un indicateur qui se rapproche de la vente : appels, itinéraires demandés, formulaires, rendez-vous, commandes.'],
                ['titre' => 'Produire en masse avec l\'IA', 'texte' => 'Publier vingt articles générés en une semaine ne fait pas une stratégie de contenu : des pages sans apport propre n\'aident ni le client ni le référencement. La relecture humaine, les exemples propres à l\'entreprise et la vérification des faits restent obligatoires.'],
                ['titre' => 'Arrêter au bout d\'un mois', 'texte' => 'Le référencement, les avis et les citations par les assistants d\'IA se construisent sur plusieurs mois. Une équipe qui juge son travail après quatre semaines abandonne souvent juste avant les premiers effets. Le rituel hebdomadaire appris en formation sert à tenir.'],
                ['titre' => 'Laisser chaque canal à une personne différente sans coordination', 'texte' => 'La fiche Google annonce des horaires, le site d\'autres, la page Facebook un troisième numéro. Une personne doit tenir la fiche d\'identité de l\'entreprise, et tous les canaux la reprennent.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne faut-il jamais acheter des avis, des abonnés ou un fichier d\'adresses ?',
            'texte' => 'Parce que chacun de ces raccourcis viole une règle écrite, et que la sanction tombe sur l\'entreprise, pas sur le vendeur. Le règlement de Google Maps interdit les avis payés, directement ou en nature, et la sollicitation sélective des clients satisfaits ; l\'établissement s\'expose au retrait de ces avis. Au Bénin, l\'article 332 du code du numérique interdit d\'écrire par e-mail ou par SMS à une personne qui n\'a pas consenti au préalable, et c\'est à l\'expéditeur de prouver l\'accord. En France, la CNIL exige le consentement préalable des particuliers. Un fichier acheté ne porte aucune preuve d\'accord : il expose l\'entreprise et abîme la délivrabilité de toute sa messagerie.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Téléphone, connexion, langues et données personnelles : que change le contexte local pour ces formations ?',
            'paragraphes' => [
                'En Afrique francophone, le client découvre presque toujours l\'entreprise sur un téléphone, souvent avec un forfait de données limité. L\'UIT estime, dans ses chiffres publiés le 15 octobre 2025, que 36 % de la population africaine utilise Internet, contre 74 % à l\'échelle mondiale. Toutes les formations du domaine en tirent les conséquences : pages légères, photos compressées, numéro cliquable, fiche Google complète parce qu\'elle s\'affiche sans ouvrir le site, et WhatsApp prévu comme suite naturelle d\'une recherche.',
                'Les usages diffèrent aussi d\'un marché à l\'autre. Au Bénin, DataReportal compte 2,5 millions d\'utilisateurs de Facebook et 660 000 membres inscrits sur LinkedIn dans ses données d\'octobre 2025 : un commerce de proximité y vise ses clients sur Facebook et WhatsApp, un cabinet de conseil sur LinkedIn. En France ou en Belgique, l\'e-mail et la recherche Google gardent un poids central dans les achats entre entreprises. Les exercices portent sur les canaux réellement utilisés par la clientèle de chaque participant.',
                'Les données personnelles changent selon le pays du destinataire, pas celui de l\'expéditeur. Une entreprise béninoise qui écrit à des prospects français applique le RGPD tel que la CNIL l\'interprète ; la même entreprise qui écrit à Cotonou applique la loi n° 2017-20 portant code du numérique. Pour la mesure et la publicité en Europe, la CNIL impose le consentement préalable avant tout traceur publicitaire. Les formations à l\'e-mail, à la prospection, à la publicité et à GA4 traitent ces règles sur les cas des participants, sans les transformer en cours de droit.',
                'Reste la langue. Les séances se tiennent en français, ou en anglais sur demande ; les interfaces de Google, Meta et LinkedIn existent en français, mais une partie de la documentation et des outils reste en anglais. Pour les équipes qui servent une clientèle dans plusieurs langues, les formations au contenu et au référencement IA prévoient le relevé des réponses dans chaque langue utile.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi choisir Richard SALANON pour former votre équipe au marketing et à la visibilité ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Le référencement naturel et le référencement IA font partie de ses compétences déclarées, à côté de la création de sites et de boutiques en ligne : il forme donc sur des sujets qu\'il pratique pour ses propres projets et ceux de ses clients. Diplômé d\'' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', il compte ' . $ans . ' ans d\'expérience dans le numérique. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Selon ses chiffres, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes ont suivi ses formations.',
                'Sa manière de former dans ce domaine tient en quelques règles : travailler sur les comptes, les pages et les chiffres de l\'entreprise plutôt que sur des exemples d\'école, appliquer les règles écrites des plateformes et des lois, refuser les raccourcis qui exposent le client, et dire franchement quand une formation n\'est pas la bonne réponse. Il a travaillé dans quinze pays, en Afrique francophone, en Europe et au Canada. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et l\'ensemble des domaines figure sur la page des <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir pour choisir sa formation en marketing et visibilité ?',
            'texte' => 'Partez de l\'endroit où vos clients vous cherchent déjà, récupérez la propriété de vos comptes avant de vous former, rendez l\'entreprise exacte partout avant de chercher plus de visibilité, mesurez avant de payer de la publicité, n\'écrivez qu\'aux personnes qui l\'ont accepté, et laissez un mois de pratique entre deux formations pour juger sur des chiffres.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Par quelle formation votre équipe devrait-elle commencer ?',
            'texte'  => 'Décrivez votre activité, la personne qui s\'occupe aujourd\'hui de la visibilité et le canal qui vous amène le plus de clients : une réponse arrive sous 24 heures avec une recommandation de formation ou de parcours, puis un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Choisir ma formation'],
        ],
    ],
    'faq' => [
        ['q' => 'Je n\'ai qu\'un commerce de quartier : quelle formation suivre en premier ?', 'r' => 'Visibilité Google : fiche, avis, SEO local. C\'est la fiche d\'établissement qui fait venir la plupart des clients d\'un commerce de proximité, et elle ne coûte rien chez Google. WhatsApp Business pour vendre peut suivre, pour répondre aux clients que la fiche vous amène.'],
        ['q' => 'Faut-il un site internet pour suivre ces formations ?', 'r' => 'Pas pour toutes. Visibilité Google, LinkedIn et réseaux sociaux, et Marketing digital B2B se suivent sans site. SEO et marketing de contenu, Référencement IA, Publicité Meta Ads et Google Ads, et Google Analytics 4 supposent un site en ligne. Vendre en ligne suppose une boutique ouverte ou sur le point de l\'être.'],
        ['q' => 'Quelle différence entre le SEO et le référencement IA ?', 'r' => 'Le SEO vise les résultats des moteurs de recherche ; le référencement IA vise les réponses des assistants comme ChatGPT, Gemini, Perplexity, Claude ou Copilot. Google indique qu\'aucune optimisation spéciale n\'est exigée pour ses aperçus IA : les bases du SEO viennent donc d\'abord, et la formation au référencement IA ajoute le relevé des citations et l\'écriture de passages repris.'],
        ['q' => 'La formation à la publicité comprend-elle le budget des campagnes ?', 'r' => 'Non. Le budget publicitaire est payé directement par l\'entreprise à Meta ou à Google, depuis son propre compte. Le devis de formation couvre l\'enseignement, la préparation et les supports, jamais les dépenses des campagnes.'],
        ['q' => 'Peut-on garantir une première place sur Google ou une citation par ChatGPT ?', 'r' => 'Non, et personne ne le peut honnêtement. Google écrit qu\'aucune demande ni aucun paiement ne permet d\'obtenir une meilleure place dans son classement local. Les formations apprennent à rendre l\'entreprise exacte, utile et mesurable, ce qui améliore ses chances sans rien promettre.'],
        ['q' => 'Combien coûtent les formations du domaine ?', 'r' => 'Chacune fait l\'objet d\'un devis après un premier échange gratuit. Le montant dépend du nombre de participants, du nombre de formations enchaînées, de la préparation des accès et des chiffres, du format et d\'un éventuel suivi. Le règlement accepte Mobile Money, carte bancaire, PayPal, virement et espèces.'],
        ['q' => 'Les formations se font-elles à distance pour une équipe en Europe ou au Canada ?', 'r' => 'Oui. Le contenu, le référencement IA, Google Analytics 4 et l\'emailing se pratiquent très bien sur écran partagé, en séances courtes adaptées au fuseau horaire de l\'équipe. Les règles appliquées sont alors celles du pays de vos clients, RGPD compris pour l\'Europe.'],
        ['q' => 'Quand les cinq autres formations du domaine seront-elles publiées ?', 'r' => 'SEO et marketing de contenu, LinkedIn et réseaux sociaux d\'entreprise, Publicité Meta Ads et Google Ads, Emailing et marketing automation, et Google Analytics 4 et pilotage sont publiées à partir du 12 octobre 2026. Vous pouvez déjà décrire votre besoin pour préparer le programme.'],
        ['q' => 'Un fonds de formation peut-il payer la session ?', 'r' => 'Cela dépend du fonds et de votre dossier : FDFP en Côte d\'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal. En France, les OPCO exigent un prestataire certifié Qualiopi, ce que Richard SALANON n\'est pas. Demandez une réponse écrite au fonds avant de signer et budgétez sans compter sur une aide.'],
        ['q' => 'Que reste-t-il à l\'équipe après la formation ?', 'r' => 'Les comptes repris en main, les actions réalisées en séance sur les vraies pages ou la vraie fiche, les supports, et une routine hebdomadaire ou mensuelle écrite. Un suivi peut être ajouté au devis pour relire les premiers résultats.'],
    ],

    'sources' => [
        ['titre' => 'Aide Google Business Profile, conseils pour améliorer votre classement local sur Google', 'url' => 'https://support.google.com/business/answer/7091?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Règlement relatif aux contenus ajoutés par les utilisateurs dans Google Maps, contenus interdits et soumis à des restrictions', 'url' => 'https://support.google.com/contributionpolicy/answer/7400114?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Google Search Central, fonctionnalités d\'IA et votre site Web (mise à jour du 31 décembre 2025)', 'url' => 'https://developers.google.com/search/docs/appearance/ai-features?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Search Console, à propos de la Search Console (service gratuit)', 'url' => 'https://support.google.com/webmasters/answer/9128668?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Analytics, fin d\'Universal Analytics et passage à Google Analytics 4', 'url' => 'https://support.google.com/analytics/answer/11583528?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Google Marketing Platform, présentation de Google Analytics (outils sans frais)', 'url' => 'https://marketingplatform.google.com/intl/fr/about/analytics/', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, budget quotidien moyen (dépense quotidienne et plafond mensuel)', 'url' => 'https://support.google.com/google-ads/answer/2375423?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Workspace, consignes aux expéditeurs d\'e-mails vers Gmail', 'url' => 'https://support.google.com/a/answer/81126?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, la prospection commerciale par courrier électronique (mise à jour du 10 juin 2026)', 'url' => 'https://www.cnil.fr/fr/la-prospection-commerciale-par-courrier-electronique', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, cookies et traceurs : que dit la loi ?', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 332 et 333)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Gartner, 67 % des acheteurs B2B préfèrent un parcours sans commercial (communiqué du 9 mars 2026)', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2026-03-09-gartner-sales-survey-finds-67-percent-of-b2b-buyers-prefer-a-rep-free-experience', 'date' => '2026-10-05'],
        ['titre' => 'Fevad, bilan du e-commerce en France en 2025 (11 février 2026)', 'url' => 'https://www.fevad.com/bilan-du-e-commerce-en-france-les-francais-ont-depense-pres-de-200-milliards-deuros-sur-internet-en-2025/', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Bénin (données d\'octobre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => 'UIT, Facts and Figures 2025 : utilisation d\'Internet (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations' => ['visibilite-google', 'seo-contenu', 'referencement-ia-geo', 'marketing-digital-b2b', 'linkedin-reseaux-sociaux', 'publicite-meta-google-ads', 'emailing-automation', 'e-commerce', 'analytics-ga4'],
        'services'   => ['referencement-naturel-seo', 'seo-local-google-business', 'referencement-ia-geo', 'site-e-commerce'],
    ],
];
