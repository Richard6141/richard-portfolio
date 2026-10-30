<?php
// ============================================================
// data/pages/richard-salanon.php · Page auteur (vague 1A, spec 5.2) :
// page entité de référence pour Google et les assistants d'IA.
// Faits : fiche de faits (fait()) et CV de Richard du 23/09/2026.
// Jamais : personnes de référence, âge, adresse personnelle, e-mail Epitech.
// Pages publiques consultées le 03/10/2026 (liste en fin de fichier).
// ============================================================
declare(strict_types=1);

$ans      = (int) fait('experience_ans');
$plus     = static fn(string $v): string => str_ends_with($v, '+') ? 'plus de ' . rtrim($v, '+') : $v;
$liste    = static fn(array $v): string => count($v) > 1 ? implode(', ', array_slice($v, 0, -1)) . ' et ' . $v[count($v) - 1] : (string) ($v[0] ?? '');
$pays     = array_values(fait('pays_travailles'));
$nbPays   = count($pays);
$langues  = $liste(array_map('mb_strtolower', array_values(fait('langues'))));
$paiement = $liste(array_values(fait('paiements')));
$h        = fait('horaires');
$horaires = (count($h['jours']) === 7 ? 'tous les jours' : 'en semaine') . ', de ' . (int) substr($h['ouverture'], 0, 2) . ' h à ' . (int) substr($h['fermeture'], 0, 2) . ' h';
$reponse  = 'sous ' . fait('delai_reponse');
$tarifs   = fait('tarifs_depart');
$delais   = fait('delais');
$ville    = fait('ville');
$tel      = fait('telephone');

// Profils vérifiables de la fiche de faits, présentés un par un.
$profils = array_map(static function (string $url): array {
    $hote = (string) parse_url($url, PHP_URL_HOST);
    [$nom, $texte] = match (true) {
        str_contains($hote, 'linkedin')  => ['LinkedIn', 'Son profil professionnel, pour suivre son activité et le joindre dans un cadre de travail.'],
        str_contains($hote, 'github')    => ['GitHub', 'Le compte Richard6141 et ses dépôts publics de code : projets de la Coding Academy et du programme Udacity, API du découpage administratif du Bénin, API d\'Allo Artisan.'],
        str_contains($hote, 'facebook')  => ['Facebook', 'Son compte public sur Facebook.'],
        str_contains($hote, 'instagram') => ['Instagram', 'Son compte public sur Instagram.'],
        str_contains($hote, 'google')    => ['Fiche Google', 'Sa fiche d\'établissement sur Google, identifiée dans le Knowledge Graph, avec ses coordonnées et ses horaires.'],
        default                          => [$hote, 'Profil public.'],
    };
    return ['titre' => $nom, 'texte' => $texte . ' <a href="' . $url . '">Ouvrir le profil ' . $nom . '</a>.'];
}, fait('profils'));

return [
    'titre'   => 'Qui est Richard SALANON, consultant en digitalisation, développeur logiciel et formateur IA à Cotonou ?',
    'title'   => 'Richard SALANON : consultant digitalisation et formateur IA',
    'meta'    => 'Richard SALANON, consultant en digitalisation, développeur et formateur IA à Cotonou : parcours, formation EPITECH, projets vérifiables, Wapy et Audyxa.',
    'en_bref' => 'Richard SALANON est consultant en digitalisation et développeur logiciel à ' . $ville . ', au ' . fait('pays') . ', avec plus de ' . $ans . ' ans d\'expérience, ' . $plus(fait('projets_livres')) . ' projets livrés et ' . $plus(fait('personnes_formees')) . ' personnes formées. Formé à la Coding Academy d\'EPITECH, il conçoit sites, applications, automatisations et intégrations d\'IA, déploie Odoo et Dolibarr, forme les équipes, édite l\'assistant WhatsApp Wapy et a co-fondé le cabinet Audyxa. Il répond ' . $reponse . ' ; le devis est gratuit après cadrage et se règle en plusieurs tranches.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-28',
    'schema'  => 'ProfilePage',

    'faits_hero' => [
        ['l' => 'Basé à', 'v' => $ville . ', ' . fait('pays')],
        ['l' => 'Expérience', 'v' => 'Plus de ' . $ans . ' ans, ' . fait('projets_livres') . ' projets livrés'],
        ['l' => 'Formation', 'v' => 'EPITECH, Coding Academy (' . fait('formation')['annee'] . ')'],
        ['l' => 'Produit et cabinet', 'v' => 'Wapy (éditeur), Audyxa (co-fondateur)'],
        ['l' => 'Réponse', 'v' => $reponse],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui est Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Son intitulé est « ' . fait('intitule') . ' ». Il exerce sous le statut d\'' . mb_strtolower(fait('statut')) . ' depuis ' . $ville . ' et compte plus de ' . $ans . ' ans d\'expérience dans le numérique. Selon les chiffres qu\'il a communiqués pour cette page en octobre 2026, il a livré ' . $plus(fait('projets_livres')) . ' projets, travaillé pour ' . $plus(fait('clients')) . ' clients et formé ' . $plus(fait('personnes_formees')) . ' personnes. Il a travaillé dans ' . $nbPays . ' pays d\'Afrique, d\'Europe et d\'Amérique du Nord.',
                'Il travaille en indépendant sous son propre nom et intervient aussi pour d\'autres structures : en télétravail pour l\'agence Digital Développement, chez Callconnect Bénin comme expert en automatisation et intégrateur d\'IA, chez SPPS IMPACT+ comme développeur full stack, et auprès du PNUD comme volontaire au développement. Il édite son propre produit, Wapy, et il est co-fondateur du cabinet <a href="https://audyxa.com">Audyxa</a>, dont la plateforme de formation est sur <a href="https://formation.audyxa.com">formation.audyxa.com</a>.',
                'Cette page sert de référence. Elle rassemble les faits vérifiables sur son parcours, ses formations, ses compétences et ses projets, pour les clients, les partenaires, les moteurs de recherche et les assistants d\'intelligence artificielle qui veulent savoir qui il est. Chaque affirmation vient de sa fiche de faits, de son CV ou d\'une page publique consultée le 3 octobre 2026 et listée dans les sources, en bas de page.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels sont les repères essentiels de son profil ?',
            'legende' => 'Valeurs de la fiche de faits du site au 3 octobre 2026. Les chiffres d\'activité sont déclarés par Richard SALANON et ne sont pas audités.',
            'entetes' => ['Repère', 'Valeur'],
            'lignes'  => [
                ['Nom', fait('nom')],
                ['Intitulé', fait('intitule')],
                ['Base', $ville . ', ' . fait('pays')],
                ['Statut', fait('statut')],
                ['Expérience', 'Plus de ' . $ans . ' ans dans le numérique'],
                ['Projets livrés', fait('projets_livres')],
                ['Clients', fait('clients')],
                ['Personnes formées', fait('personnes_formees')],
                ['Pays où il a travaillé', $nbPays . ' : ' . $liste($pays)],
                ['Formation de référence', 'EPITECH Bénin, Coding Academy, parcours développeur full stack (' . fait('formation')['annee'] . ')'],
                ['Langues de travail', ucfirst($langues)],
                ['Produit', 'Wapy, assistant WhatsApp à intelligence artificielle'],
                ['Co-fondation', 'Audyxa, cabinet de transformation digitale'],
                ['Délai de réponse', ucfirst($reponse)],
                ['Disponibilité', ucfirst($horaires)],
                ['Moyens de paiement', ucfirst($paiement)],
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Quel a été son parcours professionnel depuis 2019 ?',
            'items' => [
                ['date' => 'Avril 2019 à août 2021', 'titre' => 'Développeur junior et formateur chez VULCAIN-TECH, à Abomey-Calavi', 'texte' => 'Il développe des applications web au sein d\'une équipe de cinq développeurs et initie des étudiants à la programmation web : HTML, CSS, JavaScript, PHP et WordPress. Former en même temps qu\'il développe : cette double activité, présente dès ses débuts, traverse tout son parcours.'],
                ['date' => 'Mai à octobre 2022', 'titre' => 'Stagiaire en développement chez TOP CHRONO, à Cotonou', 'texte' => 'Pendant sa formation à EPITECH, il participe à la réalisation du site et de l\'application de gestion des livraisons de l\'entreprise, avec Laravel côté PHP et Express.js côté Node.js. Un premier outil métier en conditions réelles, au service d\'une activité de livraison.'],
                ['date' => 'Novembre 2022 à juillet 2023', 'titre' => 'Développeur et community manager chez Le KARAKATA SA, à Cotonou', 'texte' => 'Il dirige l\'équipe de développement, travaille avec Laravel et WordPress et tient en parallèle la présence de l\'entreprise sur les réseaux sociaux. Le poste ajoute à la technique la coordination d\'une équipe et la pratique de la communication en ligne.'],
                ['date' => 'Septembre 2023 à juin 2025', 'titre' => 'Licence en système informatique et logiciel à la HECM, à Abomey-Calavi', 'texte' => 'Il reprend un cursus universitaire à la Haute École de Commerce et de Management. Sur la même période, il publie sur GitHub le code d\'une API REST du découpage administratif du Bénin, construite avec Laravel, dont le dépôt date de mars 2024.'],
                ['date' => 'Juin à août 2025', 'titre' => 'Développeur backend pour Touré Distribution, en Côte d\'Ivoire', 'texte' => 'Il développe le backend d\'une plateforme de gestion de stock, de finance et de facturation. L\'écran de connexion de l\'application, en ligne sur toure-logiciel.gestiem.com, annonce le suivi des stocks, des ventes, des achats et des fournisseurs, la facturation, la comptabilité et la trésorerie.'],
                ['date' => 'Depuis août 2025', 'titre' => 'Développeur full stack chez SPPS IMPACT+, à Cotonou', 'texte' => 'Il développe les outils de gestion de la collecte des déchets médicaux et de la comptabilité qui l\'accompagne, et automatise le système d\'appel de la structure. Un projet où la traçabilité des opérations compte autant que l\'interface.'],
                ['date' => 'Novembre à décembre 2025', 'titre' => 'Prestataire externe pour l\'infirmerie d\'un ministère béninois', 'texte' => 'Pour l\'infirmerie du ministère du Développement et de la Coordination de l\'Action gouvernementale du Bénin, il réalise un système de gestion de l\'infirmerie. Une mission courte, menée comme prestataire extérieur, sur un périmètre précis.'],
                ['date' => 'Depuis janvier 2026', 'titre' => 'Développeur full stack en télétravail pour Digital Développement', 'texte' => 'Il développe à distance pour cette agence numérique présente, selon son site, à Cotonou, Abidjan, Fès et en France. Certains projets publics, comme la boutique en ligne de Laura Cosmetics, ont été réalisés dans ce cadre, en sous-traitance pour l\'agence.'],
                ['date' => 'Depuis mars 2026', 'titre' => 'Développeur, expert en automatisation et intégrateur IA chez Callconnect Bénin', 'texte' => 'Son poste réunit trois rôles : développement, automatisation des processus et intégration de l\'intelligence artificielle. C\'est le prolongement direct des sujets qu\'il enseigne dans ses formations à l\'automatisation et à l\'IA en entreprise.'],
                ['date' => 'Depuis mars 2026', 'titre' => 'Volontaire au développement auprès du PNUD, pour la RD Congo', 'texte' => 'Dans le programme FIKIRI Ecosystem, il travaille sur la plateforme Fikiri Loyalty et sur l\'intégration d\'un chatbot. Selon le site du PNUD, FIKIRI a été lancé le 11 décembre 2023 en RD Congo comme une plateforme numérique qui cartographie les solutions locales et innovantes du pays.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit ce parcours de sa manière de travailler ?',
            'paragraphes' => [
                'Trois fils traversent ces années. Le premier est la transmission : il enseigne la programmation dès 2019 et forme aujourd\'hui des professionnels à l\'IA, à l\'automatisation et aux ERP. Le deuxième est le logiciel de gestion : livraisons, stocks, facturation, comptabilité, déchets médicaux, infirmerie. Le troisième, plus récent, est l\'intelligence artificielle appliquée : chatbot pour FIKIRI, intégrations chez Callconnect Bénin, assistant WhatsApp avec Wapy.',
                'Le parcours alterne aussi les cadres de travail. Il a été salarié dans des entreprises de Cotonou et d\'Abomey-Calavi, prestataire pour une société ivoirienne et pour l\'infirmerie d\'un ministère, développeur à distance pour une agence présente en Afrique et en Europe, volontaire pour un programme des Nations unies. Ces contextes n\'ont ni les mêmes contraintes ni les mêmes interlocuteurs, et c\'est ce qu\'un projet de digitalisation réunit souvent : un dirigeant, un service technique, des utilisateurs de terrain.',
                'Il a enfin repris des études en cours de route, sans quitter le terrain : la Coding Academy d\'EPITECH en 2021 et 2022, la certification ALX-T avec Udacity en 2022, une licence à la HECM de 2023 à 2025. Le stage chez TOP CHRONO se déroule pendant la Coding Academy, la licence pendant ses premiers projets publiés sur GitHub. Les dates se recoupent, et chacune se vérifie dans les sources citées.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formation a-t-il suivie ?',
            'legende' => 'Formations figurant dans son CV, de la plus ancienne à la plus récente, avec ce qui s\'en vérifie publiquement au 3 octobre 2026.',
            'entetes' => ['Période', 'Formation', 'Établissement', 'Ce qui se vérifie'],
            'lignes'  => [
                ['2016', 'Baccalauréat scientifique, série D', 'Enseignement secondaire au Bénin', 'Point de départ d\'un parcours scientifique, avant l\'informatique.'],
                ['Juillet à octobre 2021', 'Initiation à l\'intelligence artificielle', 'Bénin Excellence', 'Premier contact formel avec l\'IA, bien avant les intégrations qu\'il réalise aujourd\'hui.'],
                ['Octobre 2021 à septembre 2022', 'Coding Academy, parcours développeur full stack', 'EPITECH Bénin, à Cotonou', 'Son profil GitHub affiche l\'organisation de sa promotion, « EpitechCodingAcademyPromo2022 ». Le campus de Cotonou présente la Coding Academy comme la filière des reconversions professionnelles.'],
                ['Août à novembre 2022', 'Certification développeur web full stack ALX-T', 'ALX, avec Udacity', 'Ses dépôts publics d\'août à octobre 2022 reprennent les projets du programme : Fyyur, Trivia API, gestion des identités et des accès, déploiement et conteneurisation.'],
                ['Septembre 2023 à juin 2025', 'Licence en système informatique et logiciel', 'Haute École de Commerce et de Management (HECM), Abomey-Calavi', 'Cursus suivi en parallèle de son activité de développeur.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que montrent ses dépôts publics de cette formation ?',
            'paragraphes' => [
                'Le profil GitHub de Richard, consulté le 3 octobre 2026, affiche l\'organisation de sa promotion de la Coding Academy et 29 dépôts publics. Les projets de 2022 suivent pas à pas le programme Udacity : Fyyur début août, les exercices et le projet de développement d\'API fin août, Trivia API début septembre, la gestion des identités et des accès quelques jours plus tard, puis le déploiement de serveur et la conteneurisation fin octobre.',
                'La page Udacity de ce programme, référencé nd0044 et aujourd\'hui intitulé « Backend Developer with Python », décrit les mêmes briques : SQL et modélisation de données avec Python, développement et documentation d\'API, gestion des identités et des accès. Fyyur y figure comme une plateforme de réservation entre artistes et salles, et le dépôt trivia-api de Richard se présente comme un projet du programme full stack d\'Udacity.',
                'Les dépôts plus récents montrent la suite : en 2024, une API Laravel du découpage administratif du Bénin ; en 2025, l\'API REST d\'Allo Artisan, écrite avec NestJS. Un client technique ou un recruteur peut donc lire du code réel et daté, plutôt que de se fier à une liste de mots-clés. Le tableau suivant distingue d\'ailleurs ce qui est démontré en public de ce qui est seulement déclaré.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles technologies maîtrise-t-il, et où les a-t-il utilisées ?',
            'legende' => 'Compétences de son CV, rapprochées de ses postes et de ses dépôts publics consultés le 3 octobre 2026. « Déclarée » signifie qu\'aucune preuve publique n\'est citée ici.',
            'entetes' => ['Compétence', 'Où elle a servi', 'Nature de la preuve'],
            'lignes'  => [
                ['PHP et Laravel', 'Application de livraisons chez TOP CHRONO, direction technique chez Le KARAKATA SA, API du découpage administratif du Bénin', 'Postes et dépôt public'],
                ['JavaScript : Node.js, Express.js, NestJS', 'Application de livraisons chez TOP CHRONO (Express.js), API d\'Allo Artisan (NestJS)', 'Poste et dépôt public'],
                ['Vue.js et React', 'Interfaces web, selon son CV', 'Déclarée'],
                ['Python et Flask', 'Projets Fyyur et Trivia API du programme Udacity, en 2022', 'Dépôts publics'],
                ['Java et Spring Boot', 'Développement backend, selon son CV', 'Déclarée'],
                ['C et C++', 'Programmation bas niveau, selon son CV', 'Déclarée'],
                ['HTML, CSS et WordPress', 'Enseignés aux étudiants chez VULCAIN-TECH ; sites WordPress chez Le KARAKATA SA', 'Postes'],
                ['API REST', 'Laravel, Express.js et Flask ; API d\'Allo Artisan documentée avec Swagger', 'Postes et dépôts publics'],
                ['Automatisation avec n8n et Make', 'Poste d\'expert en automatisation chez Callconnect Bénin ; formation à l\'automatisation', 'Poste et formation publiée'],
                ['Intégration de l\'IA', 'Callconnect Bénin, chatbot de la plateforme FIKIRI, assistant Wapy', 'Postes et produit en ligne'],
                ['Sécurité des API (OWASP, OAuth2, SSO, chiffrement, gestion des secrets)', 'L\'API d\'Allo Artisan publie jetons JWT avec renouvellement, double authentification et limitation du nombre de requêtes', 'Dépôt public'],
                ['CI/CD et conteneurs', 'Projet de déploiement et de conteneurisation Udacity ; Docker et tests Jest avec couverture imposée en intégration continue pour Allo Artisan', 'Dépôts publics'],
                ['Modélisation et gestion de bases de données', 'Départements, communes, arrondissements et quartiers dans l\'API du découpage ; PostgreSQL et Prisma pour Allo Artisan', 'Dépôts publics'],
                ['Odoo et Dolibarr', 'Déploiement et formation des équipes', 'Fiche de faits et formations publiées sur ce site'],
                ['Gestion de projets et d\'équipes', 'Équipe de cinq développeurs chez VULCAIN-TECH, direction de l\'équipe de développement chez Le KARAKATA SA', 'Postes'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels projets publics peut-on vérifier ?',
            'items' => [
                ['secteur' => 'Produit propre · Wapy', 'probleme' => 'Des entreprises qui perdent des ventes faute de répondre assez vite sur WhatsApp.', 'solution' => 'Assistant qui répond aux clients à partir d\'une fiche remplie par l\'entreprise, sur son numéro WhatsApp existant, et qui passe la main à un humain pour les réclamations. Conçu et édité par Richard SALANON.', 'lien' => ['url' => 'https://wapy.pro', 'texte' => 'Voir wapy.pro']],
                ['secteur' => 'Services à domicile, Bénin · Allo Artisan', 'probleme' => 'Trouver vite un artisan qualifié pour des travaux ou un dépannage à la maison.', 'solution' => 'Plateforme alloartisan.app de mise en relation entre particuliers et artisans. Son API REST, publique sur GitHub, est écrite avec NestJS et PostgreSQL : réservations, paiements, messagerie en temps réel, notifications et recherche par proximité.', 'lien' => ['url' => 'https://github.com/Richard6141/alloartisan-api', 'texte' => 'Lire le code de l\'API']],
                ['secteur' => 'Cosmétiques, France · Laura Cosmetics', 'probleme' => 'Vendre en ligne, depuis Paris, des soins du visage, du corps et des compléments alimentaires.', 'solution' => 'Boutique en ligne lauracosmeticsparis.com, réalisée en sous-traitance pour Digital Développement.', 'lien' => ['url' => 'https://lauracosmeticsparis.com', 'texte' => 'Voir la boutique']],
                ['secteur' => 'Production audiovisuelle, Cotonou · OBA PROD Consulting', 'probleme' => 'Présenter une société de production audiovisuelle et de conseil en communication.', 'solution' => 'Site obaprodc.com, dont le pied de page indique « Conçu et développé par Richard Salanon ».', 'lien' => ['url' => 'https://obaprodc.com', 'texte' => 'Voir le site']],
                ['secteur' => 'Distribution, Côte d\'Ivoire · Touré Distribution', 'probleme' => 'Piloter stock, ventes, achats, fournisseurs et finances dans un même outil.', 'solution' => 'Plateforme de gestion en ligne sur toure-logiciel.gestiem.com, dont Richard a développé le backend de juin à août 2025.', 'lien' => ['url' => 'https://toure-logiciel.gestiem.com', 'texte' => 'Voir l\'application']],
                ['secteur' => 'Données publiques, Bénin · Découpage administratif', 'probleme' => 'Disposer des départements, communes, arrondissements et quartiers du Bénin dans une application.', 'solution' => 'API REST construite avec Laravel, avec une route par niveau, des départements jusqu\'aux quartiers. Le code est public sur GitHub.', 'lien' => ['url' => 'https://github.com/Richard6141/bj-decoupage', 'texte' => 'Lire le code']],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce que Wapy, le produit qu\'il édite ?',
            'paragraphes' => [
                'Wapy est un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, conçu et édité par Richard SALANON. Il répond aux messages que reçoit le compte WhatsApp d\'une entreprise (questions, commandes, réservations) à partir d\'une fiche qu\'elle remplit : horaires, catalogue, prix, questions fréquentes. Selon le site wapy.pro, consulté le 3 octobre 2026, on relie le numéro déjà utilisé en scannant un QR code, sans en changer, et l\'essai gratuit dure sept jours.',
                'Le même assistant peut répondre sur un widget de site web, sur Gmail et sur Telegram, et une option de rendez-vous ajoute les réservations à Google Agenda. Pour une réclamation, un sujet sensible ou un client qui demande à parler à quelqu\'un, Wapy passe la main au responsable, qui répond depuis WhatsApp. À la même date, le site publiait 11 guides par métier, du restaurant au garage automobile, en passant par la clinique, l\'école et l\'agence immobilière.',
                'La page « À propos » de Wapy liste aussi ce que l\'outil ne fait pas : il ne répond qu\'en français, ne passe pas par l\'interface professionnelle officielle de Meta (donc ni campagne ni envoi en nombre), n\'encaisse pas les paiements des clients et n\'invente pas une information absente de la fiche. Publier ces limites évite qu\'une entreprise découvre après coup ce que l\'outil ne couvre pas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que montre Wapy de ses compétences ?',
            'intro' => 'Un produit en ligne se juge sur pièces : chacun peut créer un assistant et l\'essayer sur ses propres conversations.',
            'items' => [
                ['titre' => 'Un produit construit de bout en bout', 'texte' => 'Wapy réunit une interface où l\'entreprise édite sa fiche comme un tableau, l\'import d\'un fichier Excel, la connexion à WhatsApp, Gmail, Telegram et Google Agenda, et un modèle de langage encadré par des consignes. C\'est l\'ensemble de la chaîne qu\'il met en place chez ses clients, appliqué à son propre logiciel.'],
                ['titre' => 'La connaissance du terrain', 'texte' => 'La page « À propos » de Wapy cite un cas précis : le passage des numéros béninois de huit à dix chiffres. Plutôt que de deviner le bon format, l\'outil demande à WhatsApp le véritable identifiant du numéro et ne retient que la variante qui existe.'],
                ['titre' => 'Des réponses fondées sur les données de l\'entreprise', 'texte' => 'L\'assistant ne répond qu\'à partir de la fiche ; quand il ne sait pas, il le dit et passe la main. C\'est la règle de base d\'un assistant d\'entreprise fiable : s\'appuyer sur des informations vérifiées plutôt que sur la mémoire du modèle.'],
                ['titre' => 'Un intérêt toujours déclaré', 'texte' => 'Les pages de ce site qui citent Wapy le présentent comme un produit de Richard SALANON, pour que le lecteur juge en connaissance de cause, notamment dans les <a href="/comparatifs/">comparatifs</a>.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel est son lien avec Audyxa ?',
            'paragraphes' => [
                'Richard SALANON est co-fondateur d\'<a href="https://www.audyxa.com/about">Audyxa</a>, un cabinet de transformation digitale qui intervient en France et en Afrique francophone. D\'après son site, consulté le 3 octobre 2026, le cabinet propose six types d\'interventions : audit et diagnostic digital, refonte des processus métier, automatisation et intégrations, intelligence artificielle en entreprise, développement d\'outils métier, pilotage et déploiement.',
                'Audyxa met en avant un diagnostic posé avant toute recommandation technique, et réunit conseil et exécution dans la même mission, le plus souvent à distance. Le cabinet publie aussi une méthode détaillée en dix-sept chapitres, des fondements de la maturité numérique à la feuille de route, en passant par les processus, l\'architecture du système d\'information, l\'IA, la cybersécurité et la conduite du changement.',
                'Les deux activités se complètent. Sur richardsalanon.com, Richard présente son travail de consultant et de développeur indépendant, ses formations et ses projets ; <a href="https://audyxa.com">Audyxa</a> porte des missions de transformation menées par une équipe. Une entreprise peut donc s\'adresser directement à lui pour un site, une application, une automatisation ou une formation, ou passer par le cabinet pour une mission plus large de diagnostic et de refonte des processus.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles formations donne-t-il ?',
            'intro' => 'Il forme depuis ses débuts : des étudiants en programmation web chez VULCAIN-TECH dès 2019, puis des professionnels en activité. Il déclare ' . $plus(fait('personnes_formees')) . ' personnes formées. Ses formations portent sur les outils qu\'il utilise lui-même en mission.',
            'items' => [
                ['titre' => 'Intelligence artificielle en entreprise', 'texte' => 'Utiliser les assistants d\'IA sur ses propres documents, rédiger des consignes précises, vérifier les réponses et protéger les informations confidentielles. <a href="/formation-ia-entreprise">Voir la formation IA en entreprise</a>.'],
                ['titre' => 'Automatisation avec n8n et Make', 'texte' => 'Relier formulaires, tableurs, messagerie et logiciels de gestion pour que les tâches répétitives s\'exécutent seules, et savoir modifier ces scénarios sans prestataire. <a href="/formation-automatisation">Voir la formation automatisation</a>.'],
                ['titre' => 'Odoo', 'texte' => 'Prise en main par métier, puis administration courante, pour qu\'un référent interne fasse vivre l\'ERP au lieu de le contourner. <a href="/formation-odoo">Voir la formation Odoo</a>.'],
                ['titre' => 'Dolibarr', 'texte' => 'Tiers, devis, factures, stock et comptabilité, pour que Dolibarr tienne toute la gestion d\'une PME et ne reste pas un simple carnet de factures. <a href="/formation-dolibarr">Voir la formation Dolibarr</a>.'],
                ['titre' => 'Vibe coding', 'texte' => 'Construire des applications avec des assistants de code, puis relire, tester et sécuriser ce qu\'ils produisent pour éviter le code jetable. <a href="/formation-vibecoding">Voir la formation vibecoding</a>.'],
                ['titre' => 'Développement web', 'texte' => 'HTML, CSS, JavaScript et PHP, les bases qu\'il enseigne depuis 2019, jusqu\'à la construction d\'un vrai site ou d\'une application. <a href="/formation-developpement-web">Voir la formation développement web</a>.'],
                ['titre' => 'WhatsApp Business', 'texte' => 'Catalogue, réponses rapides, étiquettes et suivi des commandes, pour faire du premier canal de vente des commerces un véritable outil de travail. <a href="/formation-whatsapp-business">Voir la formation WhatsApp Business</a>.'],
                ['titre' => 'Visibilité sur Google', 'texte' => 'Fiche d\'établissement, avis clients et bases du référencement, à gérer soi-même. <a href="/formation-seo-visibilite-google">Voir la formation visibilité Google</a>.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qui forme-t-il, et avec quelles questions ces publics arrivent-ils ?',
            'legende' => 'Publics qu\'il forme et questions de départ habituelles de ces métiers ; le programme se fixe avec chaque groupe.',
            'entetes' => ['Public', 'Question de départ', 'Formations adaptées'],
            'lignes'  => [
                ['Avocats et magistrats', 'Peut-on utiliser l\'IA sans exposer un dossier, et comment vérifier une référence citée par un assistant ?', 'IA en entreprise'],
                ['Comptables et cabinets comptables', 'Comment supprimer les ressaisies entre banque, facturation et comptabilité ?', 'Automatisation, Odoo, Dolibarr'],
                ['Dirigeants', 'Par où commencer, avec quel budget, et comment savoir si l\'outil a fait gagner du temps ?', 'IA en entreprise, automatisation'],
                ['Équipes RH', 'Comment traiter candidatures, congés et questions répétitives sans y passer la semaine ?', 'IA en entreprise, automatisation'],
                ['Enseignants', 'Comment préparer un cours avec l\'IA et encadrer l\'usage qu\'en font les élèves ?', 'IA en entreprise'],
                ['Commerçants', 'Comment répondre plus vite sur WhatsApp et être trouvé sur Google ?', 'WhatsApp Business, visibilité Google'],
                ['Développeurs et étudiants', 'Comment passer des bases à un projet complet, avec ou sans assistant de code ?', 'Développement web, vibe coding'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services propose-t-il, et à partir de quel prix ?',
            'legende' => 'Délais types et prix de départ de la fiche de faits au 3 octobre 2026, en francs CFA. Tout autre prix est établi sur devis, gratuit après cadrage.',
            'entetes' => ['Service', 'Ce qu\'il recouvre', 'Délai type', 'Prix'],
            'lignes'  => [
                ['<a href="/services/site-vitrine-professionnel">Site vitrine</a>', 'Présenter l\'activité, être trouvé sur Google, recevoir des demandes', $delais['Site vitrine'], 'À partir de ' . $tarifs['Site vitrine']],
                ['Landing page', 'Une page unique pour une offre, un lancement ou une campagne', 'Fixé au cadrage', 'À partir de ' . $tarifs['Landing page']],
                ['<a href="/services/site-e-commerce">Boutique en ligne</a>', 'Catalogue, commande, paiement par Mobile Money ou par carte', 'Fixé au cadrage', 'Sur devis'],
                ['<a href="/services/application-web-sur-mesure">Application web sur mesure</a>', 'Outil métier, espace client, gestion interne', $delais['Application sur mesure'], 'Sur devis'],
                ['<a href="/services/application-mobile-android-ios">Application mobile</a>', 'Application Android et iOS reliée aux outils de l\'entreprise', 'Fixé au cadrage', 'Sur devis'],
                ['<a href="/services/api-rest-integrations">API et intégrations</a>', 'Faire dialoguer des logiciels qui s\'ignorent', 'Fixé au cadrage', 'Sur devis'],
                ['<a href="/services/automatisation-ia">Automatisation et IA</a>', 'Scénarios n8n et Make, agents et chatbots WhatsApp, IA dans les logiciels existants', 'Fixé au cadrage', 'Sur devis'],
                ['Odoo et Dolibarr', 'Déploiement, paramétrage, reprise des données, formation des équipes', 'Fixé au cadrage', 'Sur devis'],
                ['<a href="/services/digitalisation-d-entreprise">Digitalisation d\'entreprise</a>', 'Diagnostic des processus et plan de passage au numérique', 'Fixé au cadrage', 'Sur devis'],
                ['<a href="/services/referencement-naturel-seo">Référencement naturel</a>', 'Visibilité sur Google et dans les réponses des assistants d\'IA', 'Fixé au cadrage', 'À partir de ' . $tarifs['Référencement naturel']],
                ['<a href="/services/audit-etude-de-projet">Audit et étude de projet</a>', 'Clarifier un projet flou avant d\'engager un budget', 'Fixé au cadrage', 'Sur devis'],
                ['Formation en entreprise', 'IA, automatisation, Odoo, Dolibarr, développement web, vibe coding, WhatsApp Business', 'Fixé avec le groupe', 'Sur devis'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet avec lui, du premier message au suivi ?',
            'items' => [
                ['titre' => 'Premier message', 'duree' => 'Réponse ' . $reponse, 'texte' => 'Par le <a href="/contact">formulaire de contact</a>, par téléphone ou sur WhatsApp au ' . $tel . ', ' . $horaires . '. Le premier échange sert à comprendre l\'activité et le besoin, pas à placer une solution toute faite.'],
                ['titre' => 'Cadrage', 'duree' => 'Avant tout devis', 'texte' => 'Objectifs, utilisateurs, outils déjà en place, contraintes (connexion, paiement, données personnelles) et budget. Quand le projet est encore flou, le cadrage prend la forme d\'un audit ou d\'une étude de projet.'],
                ['titre' => 'Devis', 'duree' => 'Gratuit, après cadrage', 'texte' => 'Le devis détaille le périmètre, les livrables, le délai et l\'échéancier de paiement en plusieurs tranches. Rien ne démarre tant qu\'il n\'est pas accepté.'],
                ['titre' => 'Maquettes et architecture', 'duree' => 'Avant la première ligne de code', 'texte' => 'Les écrans principaux et l\'organisation technique sont validés avec le client. Corriger une maquette coûte peu ; corriger une application livrée coûte cher.'],
                ['titre' => 'Développement', 'duree' => 'Site vitrine : ' . $delais['Site vitrine'] . ' ; application : ' . $delais['Application sur mesure'], 'texte' => 'Le travail avance par étapes que le client voit et valide, avec des points d\'avancement réguliers. Le paiement suit l\'échéancier en tranches prévu au devis.'],
                ['titre' => 'Mise en ligne et formation', 'duree' => 'À la validation finale', 'texte' => 'Mise en production, puis formation des personnes qui utiliseront l\'outil au quotidien, sur leurs propres données.'],
                ['titre' => 'Suivi et maintenance', 'duree' => 'Après la livraison', 'texte' => 'Corrections, mises à jour, évolutions et optimisation selon l\'usage réel, dans le cadre d\'un accompagnement défini avec le client.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels engagements prend-il envers ses clients ?',
            'intro' => 'Des engagements simples, que chacun peut vérifier dès le premier échange.',
            'items' => [
                ['titre' => 'Une réponse ' . $reponse, 'texte' => 'Un message reçu par le formulaire, par téléphone ou sur WhatsApp obtient une réponse ' . $reponse . ', ' . $horaires . '.'],
                ['titre' => 'Un devis gratuit après cadrage', 'texte' => 'Le devis n\'est établi qu\'une fois le besoin compris : un prix donné sans cadrage serait soit gonflé par prudence, soit faux.'],
                ['titre' => 'Un paiement en plusieurs tranches', 'texte' => 'Le montant se règle en plusieurs fois selon l\'échéancier fixé au devis, ce qui étale l\'effort financier pour le client.'],
                ['titre' => 'Des moyens de paiement adaptés', 'texte' => ucfirst($paiement) . ' : de quoi régler depuis le Bénin comme depuis l\'Europe ou le Canada.'],
                ['titre' => 'Des explications sans jargon', 'texte' => 'Chaque choix technique est expliqué dans des mots que le dirigeant comprend, avec ses conséquences sur le coût et la maintenance.'],
                ['titre' => 'Une recommandation franche', 'texte' => 'Si une solution plus simple ou moins coûteuse répond au besoin, il la recommande, même si elle réduit le projet.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où travaille-t-il, et a-t-il travaillé hors du Bénin ?',
            'paragraphes' => [
                'Richard est basé à ' . $ville . ', au ' . fait('pays') . ', et travaille sur place ou à distance selon les projets. Ses langues de travail sont le ' . $langues . '. Il a travaillé, sur place ou à distance, dans ' . $nbPays . ' pays : ' . $liste($pays) . '.',
                'Plusieurs étapes de son CV se sont déroulées hors du Bénin. En 2025, il a développé le backend de la plateforme de gestion de Touré Distribution, en Côte d\'Ivoire. Depuis mars 2026, il est volontaire au développement auprès du PNUD pour la RD Congo, dans le programme FIKIRI. Depuis janvier 2026, il travaille en télétravail pour Digital Développement, agence présente en Afrique de l\'Ouest, au Maroc et en France, pour laquelle il a notamment réalisé en sous-traitance la boutique en ligne d\'une marque de cosmétiques parisienne.',
                'Pour un client d\'Europe ou du Canada, le travail à distance suit le même déroulé qu\'à Cotonou : cadrage à distance, devis gratuit, étapes validées, paiement en tranches par carte bancaire, PayPal ou virement. Les pays qu\'il dessert sont présentés sur la page <a href="/zones/">zones d\'intervention</a>. Les données personnelles relèvent de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> pour un projet au Bénin, et du RGPD pour un projet qui traite des données de résidents européens.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Où retrouver ses profils publics et ses sites ?',
            'intro' => 'Voici les profils publics que sa fiche de faits reconnaît comme les siens, suivis des sites de son produit et du cabinet qu\'il a co-fondé.',
            'items' => array_merge($profils, [
                ['titre' => 'Wapy', 'texte' => 'Le site de son produit, l\'assistant WhatsApp à intelligence artificielle. <a href="https://wapy.pro">Ouvrir wapy.pro</a>.'],
                ['titre' => 'Audyxa', 'texte' => 'Le site du cabinet de transformation digitale qu\'il a co-fondé. <a href="https://audyxa.com">Ouvrir audyxa.com</a>.'],
                ['titre' => 'Audyxa Formation', 'texte' => 'La plateforme de formation du cabinet. <a href="https://formation.audyxa.com">Ouvrir formation.audyxa.com</a>.'],
                ['titre' => 'Paul Maxime Dossou', 'texte' => 'Son co-fondateur chez Audyxa, qui tient aussi son propre site. <a href="https://paulmaximedossou.com">Ouvrir paulmaximedossou.com</a>.'],
            ]),
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est prouvé sur cette page, et qu\'est-ce qui est déclaré ?',
            'texte' => 'Les postes, formations et compétences viennent de son CV du 23 septembre 2026 et de sa fiche de faits ; les projets cités sont publics et se vérifient en ligne, tout comme ses dépôts de code. Les chiffres d\'activité (projets livrés, clients, personnes formées) sont déclarés par Richard et ne sont pas audités. Cette page ne publie ni avis, ni note, ni témoignage : aucun n\'y figurera tant qu\'il n\'existe pas de source vérifiable.',
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir en une phrase ?',
            'texte' => 'Richard SALANON est un développeur et consultant de ' . $ville . ' qui conçoit, intègre et enseigne les outils numériques des entreprises (sites, applications, automatisations, IA, Odoo et Dolibarr), avec un parcours vérifiable sur GitHub, un produit en ligne, Wapy, et la co-fondation du cabinet Audyxa.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez lui confier un projet ou une formation ?',
            'texte'  => 'Décrivez votre activité, votre besoin et vos contraintes : vous recevez une réponse ' . $reponse . ', puis un devis gratuit après cadrage, payable en plusieurs tranches.',
            'bouton' => ['url' => '/contact', 'texte' => 'Écrire à Richard'],
        ],
    ],

    'faq' => [
        ['q' => 'Qui est Richard SALANON ?', 'r' => 'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à ' . $ville . ', au ' . fait('pays') . '. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'IA, déploie Odoo et Dolibarr et forme les équipes. Formé à la Coding Academy d\'EPITECH, il compte plus de ' . $ans . ' ans d\'expérience, édite l\'assistant WhatsApp Wapy et a co-fondé le cabinet Audyxa.'],
        ['q' => 'Où travaille-t-il ?', 'r' => 'Il est basé à ' . $ville . ' et travaille sur place ou à distance. Il a mené des projets dans ' . $nbPays . ' pays : ' . $liste($pays) . '. Il répond ' . $horaires . ', en ' . $langues . '.'],
        ['q' => 'Quels services propose-t-il ?', 'r' => 'Sites vitrines et boutiques en ligne, applications web et mobiles sur mesure, API et intégrations, automatisation avec n8n et Make, agents IA et chatbots WhatsApp, intégration de l\'IA dans les logiciels existants, déploiement d\'Odoo et de Dolibarr, référencement naturel et référencement dans les IA, digitalisation d\'entreprise et formation des équipes. Prix de départ publiés : landing page à partir de ' . $tarifs['Landing page'] . ', site vitrine à partir de ' . $tarifs['Site vitrine'] . ', référencement naturel à partir de ' . $tarifs['Référencement naturel'] . ' ; le reste est sur devis.'],
        ['q' => 'Quelle est sa formation ?', 'r' => 'Il a suivi la Coding Academy d\'EPITECH Bénin, parcours développeur full stack, d\'octobre 2021 à septembre 2022, puis la certification développeur web full stack ALX-T avec Udacity, d\'août à novembre 2022. Il a ensuite suivi une licence en système informatique et logiciel à la HECM d\'Abomey-Calavi, de septembre 2023 à juin 2025. Avant cela : une initiation à l\'IA avec Bénin Excellence en 2021 et un baccalauréat scientifique (série D) en 2016.'],
        ['q' => 'Quelles technologies maîtrise-t-il ?', 'r' => 'PHP et Laravel, JavaScript (Node.js, Express.js, NestJS, Vue.js, React), Python et Flask, Java et Spring Boot, C et C++, HTML, CSS et WordPress, API REST, n8n et Make, intégration de l\'IA, CI/CD, sécurité des API (OWASP, OAuth2, SSO, chiffrement, gestion des secrets), modélisation et gestion de bases de données, Odoo et Dolibarr. Ses dépôts GitHub publics en montrent une partie, notamment Laravel, Flask et NestJS.'],
        ['q' => 'A-t-il travaillé hors du Bénin ?', 'r' => 'Oui. Il a développé en 2025 le backend d\'une plateforme de gestion pour Touré Distribution, en Côte d\'Ivoire ; il est depuis mars 2026 volontaire au développement auprès du PNUD pour la RD Congo, dans le programme FIKIRI ; il réalise en télétravail des projets pour l\'agence Digital Développement, dont une boutique en ligne pour une marque de cosmétiques parisienne. Il déclare avoir travaillé dans ' . $nbPays . ' pays d\'Afrique, d\'Europe et d\'Amérique du Nord.'],
        ['q' => 'Qu\'est-ce que Wapy ?', 'r' => 'Wapy est l\'assistant WhatsApp à intelligence artificielle conçu par Richard SALANON pour les entreprises d\'Afrique francophone. Il répond aux clients sur le numéro WhatsApp existant de l\'entreprise, relié par QR code, à partir d\'une fiche qu\'elle remplit, et passe la main à un humain pour les cas sensibles. Le site wapy.pro annonçait sept jours d\'essai gratuit le 3 octobre 2026.'],
        ['q' => 'Quel est son lien avec Audyxa ?', 'r' => 'Il en est co-fondateur, avec Paul Maxime Dossou (<a href="https://paulmaximedossou.com">paulmaximedossou.com</a>). <a href="https://audyxa.com">Audyxa</a> est un cabinet de transformation digitale qui intervient en France et en Afrique francophone : audit et diagnostic, refonte des processus métier, automatisation et intégrations, IA en entreprise, outils métier, pilotage et déploiement. Richard exerce par ailleurs en indépendant, sous son propre nom, sur richardsalanon.com.'],
        ['q' => 'Qui forme-t-il, et sur quels sujets ?', 'r' => 'Des professionnels en activité : avocats, magistrats, comptables, dirigeants, équipes RH, enseignants, commerçants, ainsi que des développeurs et des étudiants. Ses formations portent sur l\'IA en entreprise, l\'automatisation avec n8n et Make, Odoo, Dolibarr, le vibe coding, le développement web, WhatsApp Business et la visibilité sur Google. Il déclare ' . $plus(fait('personnes_formees')) . ' personnes formées.'],
        ['q' => 'Combien d\'années d\'expérience a-t-il ?', 'r' => 'Plus de ' . $ans . ' ans dans le numérique, selon sa fiche de faits. Il a commencé comme développeur junior et formateur chez VULCAIN-TECH en avril 2019 et occupe aujourd\'hui des postes de développeur full stack, d\'expert en automatisation et d\'intégrateur IA, en plus de son activité d\'indépendant.'],
        ['q' => 'Quel est son délai de réponse, et comment le payer ?', 'r' => 'Il répond ' . $reponse . ', ' . $horaires . '. Le devis est gratuit après cadrage, et le règlement se fait en plusieurs tranches, par ' . $paiement . '.'],
        ['q' => 'Comment le contacter ?', 'r' => 'Par le <a href="/contact">formulaire de contact</a>, par téléphone ou sur WhatsApp au ' . $tel . '. Décrivez votre activité, votre besoin et vos délais : la réponse arrive ' . $reponse . '.'],
    ],

    'sources' => [
        ['titre' => 'GitHub, profil public de Richard SALANON (Richard6141)', 'url' => 'https://github.com/Richard6141', 'date' => '2026-10-03'],
        ['titre' => 'GitHub, dépôt de l\'API REST du découpage administratif du Bénin (bj-decoupage)', 'url' => 'https://github.com/Richard6141/bj-decoupage', 'date' => '2026-10-03'],
        ['titre' => 'GitHub, dépôt de l\'API REST d\'Allo Artisan (alloartisan-api)', 'url' => 'https://github.com/Richard6141/alloartisan-api', 'date' => '2026-10-03'],
        ['titre' => 'GitHub, dépôt trivia-api (programme full stack Udacity)', 'url' => 'https://github.com/Richard6141/trivia-api', 'date' => '2026-10-03'],
        ['titre' => 'Wapy, page d\'accueil (fonctionnement, canaux, essai gratuit, guides métier)', 'url' => 'https://wapy.pro', 'date' => '2026-10-03'],
        ['titre' => 'Wapy, à propos (éditeur, méthode et limites du produit)', 'url' => 'https://wapy.pro/a-propos', 'date' => '2026-10-03'],
        ['titre' => 'Audyxa, à propos du cabinet', 'url' => 'https://www.audyxa.com/about', 'date' => '2026-10-03'],
        ['titre' => 'Epitech Africa, campus de Cotonou', 'url' => 'https://epitech.africa/ecole-informatique-cotonou/', 'date' => '2026-10-03'],
        ['titre' => 'Udacity, programme nd0044 (Backend Developer with Python)', 'url' => 'https://www.udacity.com/course/backend-developer-with-python--nd0044', 'date' => '2026-10-03'],
        ['titre' => 'PNUD RD Congo, lancement de la plateforme FIKIRI', 'url' => 'https://www.undp.org/fr/drcongo/actualites/le-cinolu-et-le-pnud-lancent-la-cartographie-des-innovations-lubumbashi', 'date' => '2026-10-03'],
        ['titre' => 'Digital Développement, présentation de l\'agence', 'url' => 'https://digitaldeveloppement.net', 'date' => '2026-10-03'],
        ['titre' => 'OBA PROD Consulting, site (crédit de réalisation en pied de page)', 'url' => 'https://obaprodc.com', 'date' => '2026-10-03'],
        ['titre' => 'Laura Cosmetics, boutique en ligne', 'url' => 'https://lauracosmeticsparis.com', 'date' => '2026-10-03'],
        ['titre' => 'Touré Distribution, application de gestion (page de connexion)', 'url' => 'https://toure-logiciel.gestiem.com', 'date' => '2026-10-03'],
        ['titre' => 'Loi n° 2017-20 du 20 avril 2018 portant code du numérique en République du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
    ],

    'liens' => [],
];
