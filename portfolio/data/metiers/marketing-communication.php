<?php
// ============================================================
// data/metiers/marketing-communication.php · Page « formations par
// métier » : services marketing et communication (vague 1C, univers
// Commerce et communication, non prioritaire, statut F : Richard a déjà
// formé ce public).
// Angle propre : le service marketing et communication dans son ensemble
// (stratégie de contenu, réseaux sociaux, campagnes, relations presse,
// communication interne, image de marque, mesure, droits d'auteur et
// droit à l'image, mention des contenus générés). La page oriente vers
// contenu-avec-ia, linkedin-reseaux-sociaux, seo-contenu et analytics-ga4
// sans reprendre leur texte.
// Faits relevés le 05/10/2026 : règlement européen sur l'IA (articles 50
// et 113, AI Act Service Desk), code de bonnes pratiques sur la
// transparence des contenus générés (Commission, mise à jour du 31 juillet
// 2026), directive (UE) 2024/825 (EUR-Lex), CPI L111-1 et L131-3
// (Légifrance), loi béninoise n° 2005-30 (WIPO Lex), loi béninoise
// n° 2015-07 (articles 123, 124, 136, 157, 159, 162, 167, 322, 323),
// loi n° 2017-20 (articles 245, 330 à 332, 390, 576), CNIL (prospection
// par courrier électronique, 10 juin 2026), AMEC (principes de Barcelone
// 3.0), Baromètre France Num 2026, OAPI (États membres), FDFP, France
// Compétences ; faits vérifiés du catalogue (article 4, n8n).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'       => 'Formation numérique et IA pour les équipes marketing et communication : produire plus vite sans perdre la voix de la marque, publier avec les bons droits et les bonnes mentions, et prouver à la direction ce que la communication rapporte',
    'title'       => 'Formation IA marketing et communication | Richard SALANON',
    'meta'        => 'Formation des services marketing et communication : contenus, réseaux, campagnes, presse, interne, droits, mentions IA, mesure, sur vos outils. Sur devis.',
    'en_bref'     => 'Cette page présente le parcours de formation conçu pour les directions de la communication, les services marketing, les chargés de communication et les petites équipes qui font tout à la fois. Il apprend à confier à l\'IA et à l\'automatisation la part répétitive du travail (déclinaisons, revues de presse, comptes rendus, rapports) tout en gardant la main sur ce qui engage l\'organisation : la parole publique, les droits sur les images et les textes, les mentions obligatoires et la mesure. Le parcours type dure deux jours en quatre demi-journées, suivis d\'une séance de bilan, en intra, en inter, à distance ou en hybride, et son prix est fixé sur devis.',
    'publie'      => '2026-10-22',
    'maj'         => '2026-10-05',
    'univers'     => 'Commerce et communication',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : du plan de communication aux règles d\'usage de l\'IA du service',
            'duree'  => '3 h 30',
            'points' => [
                'Relire ensemble le plan de communication de l\'année : cibles, messages, temps forts, budget, et ce que la direction attend en retour.',
                'Transformer la plateforme de marque et la charte graphique en consignes qu\'un assistant peut appliquer : ton, mots interdits, mentions légales, formats.',
                'Cartographier le circuit de validation : qui rédige, qui relit, qui signe, et pour quels contenus la direction ou le juriste interviennent.',
                'Faire l\'inventaire des comptes et des accès : pages, régies publicitaires, outil d\'emailing, photothèque, site, et qui en est réellement propriétaire.',
                'Rédiger la première version de la charte d\'usage de l\'IA du service : outils autorisés, données interdites, relecture, mentions.',
                'Exercice de contrôle : un brief de campagne réel réécrit en consigne, testé sur deux assistants et comparé à la charte.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : stratégie de contenu, réseaux sociaux et campagnes, du calendrier à la publication',
            'duree'  => '3 h 30',
            'points' => [
                'Bâtir un calendrier éditorial sur trois mois à partir des temps forts de l\'organisation, avec un responsable par contenu.',
                'Décliner un message pivot pour le site, les réseaux, la lettre d\'information et WhatsApp sans recopier le même texte partout.',
                'Préparer une campagne : objectif chiffré, cible, budget, règlement d\'un jeu ou d\'une offre, mentions « publicité » et conditions d\'accès.',
                'Organiser la modération : réponses types validées, cas à remonter, délais, et ce qu\'aucune réponse automatique ne dit jamais.',
                'Automatiser ce qui peut l\'être : planification, rappels de validation, archivage des publications, alertes de commentaires.',
                'Exercice de contrôle : une campagne de lancement montée de bout en bout, avec son tableau de validation signé.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : relations presse, communication interne et prise de parole sensible',
            'duree'  => '3 h 30',
            'points' => [
                'Rédiger un communiqué et un dossier de presse avec un assistant, puis vérifier chaque chiffre, chaque nom et chaque citation.',
                'Tenir un fichier de journalistes propre : source des contacts, information des personnes, désinscription, mise à jour.',
                'Monter une revue de presse et une veille automatisées, et apprendre à lire ce qu\'elles laissent passer.',
                'Préparer les messages d\'attente d\'une situation de crise et le circuit de validation accéléré, sans jamais laisser parler un robot.',
                'Faire de la communication interne autre chose qu\'une diffusion : lettre interne, synthèse de réunion, foire aux questions, canal du personnel.',
                'Exercice de contrôle : un article inexact sur l\'organisation, la réponse à préparer et le délai à tenir pour exercer le droit de réponse.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : droits, mentions et mesure des résultats',
            'duree'  => '3 h 30',
            'points' => [
                'Vérifier à qui appartiennent le logo, les photos, les vidéos et les textes commandés à une agence, à un photographe ou à un salarié.',
                'Monter le registre des autorisations de la photothèque : personne, date, usages, durée, retrait, mineurs.',
                'Fixer la politique de mention des contenus générés ou retouchés : cas obligatoires, cas choisis, formulation et emplacement.',
                'Contrôler les allégations : environnementales, chiffrées, comparatives, et la preuve à garder pour chacune.',
                'Construire le tableau de bord du service : un objectif, ses indicateurs de production, de résultat et d\'effet, et leur source.',
                'Exercice de contrôle : le rapport mensuel de la communication présenté à un « directeur général » qui pose les questions qui fâchent.',
            ],
        ],
        [
            'titre'  => 'Séance de bilan, quatre à six semaines plus tard : la charte à l\'épreuve du réel',
            'duree'  => '2 h, à distance',
            'points' => [
                'Relecture des contenus publiés depuis la session : mentions, droits, validations, erreurs évitées ou commises.',
                'Mise à jour de la charte d\'usage de l\'IA et du registre des autorisations à partir des cas rencontrés.',
                'Lecture du premier rapport mensuel produit par l\'équipe et correction des indicateurs mal choisis.',
                'Décision écrite sur la suite : formation complémentaire, outil à adopter, automatisation à construire, ou rien de plus.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Directeurs et chargés de communication, équipes marketing, community managers, attachés de presse, responsables de la communication interne'],
        ['l' => 'Durée', 'v' => 'Deux jours en quatre demi-journées, puis une séance de bilan de deux heures'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que changent l\'IA, la digitalisation et l\'automatisation pour un service marketing et communication ?',
            'paragraphes' => [
                'Un service de communication fait quatre métiers à la fois. Il produit (textes, visuels, vidéos, discours, rapports), il diffuse (site, réseaux, presse, messageries, affichage, événements), il écoute (commentaires, journalistes, salariés, rumeurs) et il rend des comptes à la direction sur ce que tout cela rapporte. Pendant longtemps, la production a absorbé l\'essentiel du temps : une affiche, trois déclinaisons, un communiqué relu cinq fois. Les assistants d\'IA ont fait chuter le coût du premier jet, si bien que le goulet d\'étranglement s\'est déplacé vers la validation, les droits et la mesure.',
                'C\'est là que se jouent désormais les erreurs coûteuses. Un visuel généré qui ressemble trop à une personne réelle, une photo d\'enfant publiée sans l\'accord des parents, un communiqué qui cite un chiffre inventé, une campagne « neutre en carbone » impossible à prouver, une agence qui garde les accès de la page de l\'entreprise : aucune de ces erreurs ne vient d\'un manque de créativité. Elles viennent d\'un circuit de décision que l\'outil a rendu plus rapide sans le rendre plus sûr.',
                'La digitalisation du service consiste donc moins à empiler des outils qu\'à écrire ses règles : un calendrier qui fait foi, une charte que les assistants appliquent, un registre des autorisations, un circuit de validation connu de tous et un tableau de bord qui part des objectifs. L\'automatisation vient ensuite prendre les tâches sans valeur ajoutée, comme la revue de presse quotidienne, l\'archivage des publications ou les relances de validation. L\'IA, enfin, accélère l\'écriture, la déclinaison, la synthèse et l\'analyse, à condition que quelqu\'un signe ce qui sort.',
                'En Europe, former l\'équipe n\'est d\'ailleurs plus un confort. Selon les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission sur l\'article 4 du règlement sur l\'IA</a>, mises à jour le 27 juillet 2026, les organisations qui utilisent ces outils doivent veiller depuis le 2 février 2025 à la maîtrise de l\'IA par leur personnel, avec contrôle et sanctions possibles depuis le 3 août 2026. L\'omnibus numérique, entré en vigueur à la mi-juillet 2026, maintient cette obligation, sans plus imposer de niveau « suffisant ». Un service qui produit chaque jour avec l\'IA est le premier concerné.',
                'Richard SALANON n\'est ni directeur de la communication ni publicitaire, et la formation ne vous apprend pas votre métier : le positionnement, le choix des messages, la relation avec les journalistes et la créativité restent les vôtres. Il forme à l\'usage des outils qui soutiennent ce métier, sur vos contenus, vos comptes et vos indicateurs, et vous oriente vers les fiches détaillées du catalogue quand un sujet mérite plus de temps.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qu\'est-ce qui change, mission par mission, dans un service marketing et communication ?',
            'legende' => 'Situation la plus fréquente avant la formation, et partage des rôles après. La dernière colonne liste ce qui ne se délègue ni à un logiciel ni à un assistant.',
            'entetes' => ['Mission', 'Ce qui prend du temps aujourd\'hui', 'Ce que l\'outil ou l\'IA peut prendre', 'Ce qui reste à l\'équipe'],
            'lignes'  => [
                ['Stratégie de contenu', 'Des idées notées partout, un calendrier tenu de mémoire', 'Proposer des angles à partir des temps forts et des questions reçues, tenir le calendrier partagé', 'Choisir les messages, arbitrer entre les services, dire non'],
                ['Réseaux sociaux', 'Réécrire chaque publication pour chaque réseau, répondre tard le soir', 'Préparer des déclinaisons, planifier, signaler les commentaires à traiter', 'Le ton juste, la réponse à un client mécontent, la décision de supprimer ou non'],
                ['Campagnes', 'Des briefs flous, des allers-retours sans fin avec l\'agence', 'Structurer le brief, produire des variantes à tester, compiler les résultats', 'Le budget, la cible, la validation des allégations et des mentions'],
                ['Relations presse', 'Un fichier de journalistes vieilli, une revue de presse découpée à la main', 'Premier jet du communiqué, revue de presse et veille automatisées, mise à jour du fichier', 'La relation avec chaque journaliste, les chiffres vérifiés, la prise de parole'],
                ['Communication interne', 'Des notes que personne ne lit, des groupes WhatsApp ingérables', 'Synthèses de réunion, lettre interne, foire aux questions tenue à jour, traduction', 'Ce qui se dit au personnel, et quand ; l\'écoute des équipes'],
                ['Image de marque', 'Une charte que chacun interprète, des logos de toutes les couleurs', 'Gabarits verrouillés, contrôle de conformité des visuels, banque d\'éléments partagée', 'Ce que la marque promet, et ce qu\'elle refuse de dire'],
                ['Événements', 'Inscriptions, relances et photos dispersées', 'Formulaires, rappels automatiques, tri et légendes des photos', 'Les autorisations à l\'image, l\'accueil, le discours'],
                ['Mesure', 'Des captures d\'écran collées dans une présentation', 'Collecte automatique des chiffres, tableau mensuel, premier commentaire des écarts', 'Le choix des indicateurs, l\'interprétation, la recommandation à la direction'],
                ['Crise et réputation', 'On découvre l\'incendie quand la direction appelle', 'Alertes sur les mentions de la marque, archivage horodaté des publications', 'Toute parole publique, sans exception'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que ne doivent jamais faire l\'IA et l\'automatisation dans un service de communication, et quels textes le disent ?',
            'intro' => 'L\'organisation répond de tout ce qu\'elle publie, que le texte ou l\'image vienne d\'un salarié, d\'une agence ou d\'un assistant. Voici les limites travaillées pendant le parcours, avec les textes qui les fondent.',
            'items' => [
                ['titre' => 'Faire dire à quelqu\'un ce qu\'il n\'a pas dit', 'texte' => 'Un dirigeant qui « parle » dans une vidéo générée, une voix clonée pour une publicité, un client fictif au visage réaliste : au Bénin, l\'article 576 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> punit de cinq ans d\'emprisonnement et de 25 millions de francs CFA d\'amende la publication sur internet d\'un montage réalisé avec les paroles ou l\'image d\'une personne sans son consentement, s\'il n\'est pas évident ou expressément signalé. En Europe, l\'article 50 du règlement sur l\'IA impose de signaler les hypertrucages.'],
                ['titre' => 'Publier un texte d\'intérêt public que personne n\'a relu', 'texte' => 'Depuis le 2 août 2026, l\'article 50, paragraphe 4, du règlement européen sur l\'IA oblige à indiquer qu\'un texte a été généré par l\'IA quand il est publié pour informer le public sur des questions d\'intérêt public, sauf s\'il a fait l\'objet d\'une relecture humaine ou d\'un contrôle éditorial et qu\'une personne en porte la responsabilité. Un communiqué relu et signé échappe à la mention ; un fil d\'actualité alimenté sans relecture, non.'],
                ['titre' => 'Utiliser l\'image ou le nom d\'une personne sans son accord', 'texte' => 'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2015-07/">loi n° 2015-07 portant code de l\'information et de la communication</a> interdit à la publicité de représenter une personne ou de s\'y référer sans autorisation préalable (article 159), de faire un usage non autorisé de son nom (article 162), et soumet la diffusion de l\'image d\'un mineur à l\'autorisation de la personne qui exerce l\'autorité parentale (articles 159 et 167). Une IA qui « retrouve » une photo sur internet ne fournit aucune de ces autorisations.'],
                ['titre' => 'Écrire à ceux qui n\'ont rien demandé', 'texte' => 'L\'article 332 de la loi n° 2017-20 interdit la prospection directe par courrier électronique, SMS ou système automatisé auprès d\'une personne qui n\'y a pas consenti au préalable, et l\'article 245 la punit de six à douze mois d\'emprisonnement et de 500 000 à 2 millions de francs CFA d\'amende. Une séquence automatique branchée sur un fichier acheté reproduit cette infraction à chaque envoi.'],
                ['titre' => 'Déguiser une publicité en information', 'texte' => 'La loi n° 2015-07 impose de distinguer les messages publicitaires des articles à caractère rédactionnel (article 157), et l\'article 330 de la loi n° 2017-20 exige qu\'une publicité en ligne soit identifiable dès sa réception, au besoin par la mention « Publicité ». Un publireportage rédigé par l\'IA dans le style d\'un article de presse reste une publicité, et se signale comme telle.'],
                ['titre' => 'Promettre ce que l\'organisation ne peut pas prouver', 'texte' => 'L\'article 322 de la loi n° 2015-07 interdit la publicité qui prête au produit ou au service des qualités inexactes, et l\'article 323 en rend l\'annonceur responsable à titre principal, au même titre que le diffuseur. Dans l\'Union européenne, la directive (UE) 2024/825, dont les États membres appliquent les règles depuis le 27 septembre 2026, interdit les allégations environnementales génériques non démontrées et les promesses de neutralité fondées sur la compensation.'],
                ['titre' => 'Répondre seule quand la situation devient sensible', 'texte' => 'Un robot de messagerie ou une réponse automatique qui commente un accident, une plainte ou une rumeur engage l\'organisation sur des faits qu\'elle ne maîtrise pas encore. L\'histoire racontée dans notre page <a href="/histoires/air-canada-chatbot">Air Canada et son chatbot</a> montre qu\'une entreprise répond de ce que dit son assistant. En situation sensible, toute réponse automatique se coupe et un humain reprend la parole.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels textes un service marketing et communication doit-il connaître, au Bénin, en zone OAPI et en Europe ?',
            'legende' => 'Textes relus le 5 octobre 2026 sur les pages officielles citées dans les sources. La formation apprend à reconnaître la situation et à poser la bonne question ; l\'avis juridique reste celui de votre conseil.',
            'entetes' => ['Texte', 'Ce qu\'il prévoit', 'Situation typique dans le service', 'Geste enseigné'],
            'lignes'  => [
                ['Bénin, loi n° 2015-07, articles 123, 124 et 136', 'Droit de réponse ouvert aux personnes morales ; demande dans les huit jours suivant la diffusion ; publication dans les deux jours ouvrables pour un quotidien', 'Un article inexact met en cause l\'entreprise', 'Archiver l\'article, préparer la réponse, faire signer le représentant légal, tenir le délai'],
                ['Bénin, loi n° 2015-07, articles 157, 159, 162 et 167', 'Publicité distincte de l\'information ; aucune personne, aucun nom ni aucun mineur sans autorisation préalable', 'Publireportage, témoignage de client, photo d\'élèves ou d\'enfants', 'Mention « Publicité », autorisation écrite rangée avec le fichier'],
                ['Bénin, loi n° 2015-07, articles 322 et 323', 'Publicité mensongère interdite ; annonceur responsable à titre principal, diffuseur puni des mêmes peines', 'Affiche promettant un résultat ou une qualité non vérifiée', 'Garder la preuve de chaque allégation avant publication'],
                ['Bénin, loi n° 2017-20, articles 330 et 331', 'Publicité en ligne identifiable dès réception ; offres, concours et jeux identifiables, conditions claires et accessibles', 'Jeu-concours sur Facebook, code promotionnel par WhatsApp', 'Règlement publié, conditions en un clic, mention visible'],
                ['Bénin, loi n° 2017-20, articles 332 et 245', 'Prospection électronique interdite sans consentement préalable ; jusqu\'à 2 millions de francs CFA d\'amende et un an d\'emprisonnement', 'Lettre d\'information envoyée à un fichier récupéré', 'Preuve du consentement pour chaque contact, désinscription simple'],
                ['Bénin, loi n° 2017-20, article 390', 'Le responsable doit pouvoir démontrer le consentement ; retrait possible à tout moment, aussi simple que l\'accord', 'Photothèque, fichier de presse, liste d\'abonnés', 'Registre des autorisations daté, procédure de retrait'],
                ['Bénin, loi n° 2005-30, articles 5 et 26', 'Droits patrimoniaux du salarié auteur présumés transférés dans la limite des activités habituelles de l\'employeur ; cessions conclues par écrit', 'Logo dessiné par un graphiste indépendant, photos d\'un prestataire', 'Clause de cession écrite dans chaque commande'],
                ['France, Code de la propriété intellectuelle, articles L111-1 et L131-3', 'Le contrat de commande ne prive pas l\'auteur de ses droits ; chaque droit cédé est mentionné, avec son étendue, sa destination, son lieu et sa durée', 'Campagne réalisée par une agence française', 'Relire la clause de cession avant de signer le devis'],
                ['Union européenne, règlement sur l\'IA, article 50', 'Mention des hypertrucages et des textes générés d\'intérêt public non relus, au plus tard lors de la première exposition', 'Vidéo de campagne avec un porte-parole généré', 'Politique de mention écrite, icône ou texte placé dès la première image'],
                ['Union européenne, directive (UE) 2024/825', 'Interdiction des allégations environnementales génériques non démontrées, des labels sans certification et de la neutralité par compensation', 'Slogan « neutre pour le climat », label maison', 'Retirer ou prouver ; préférer une allégation précise et vérifiable'],
                ['France, CNIL, prospection des professionnels', 'Envoi possible sur la base de l\'intérêt légitime si le message concerne la profession du destinataire, qui doit être informé et pouvoir s\'opposer', 'Communiqué envoyé aux adresses nominatives des journalistes', 'Information des contacts, lien de désinscription dans chaque envoi'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'À qui appartiennent le logo, les photos et les textes que le service fait réaliser ?',
            'paragraphes' => [
                'La question surgit toujours au mauvais moment : le jour où l\'on veut décliner le logo sur un nouveau support, réutiliser les photos d\'un événement dans une campagne payante ou changer d\'agence. La réponse tient rarement dans la facture. En France, l\'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278868">article L111-1 du Code de la propriété intellectuelle</a> pose que l\'auteur jouit de son œuvre du seul fait de sa création, et que la conclusion d\'un contrat de commande n\'y déroge pas. Payer un graphiste ne rend donc pas propriétaire de son dessin.',
                'L\'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958">article L131-3</a> du même code exige que chaque droit cédé fasse l\'objet d\'une mention distincte, et que son domaine d\'exploitation soit délimité quant à son étendue, à sa destination, au lieu et à la durée. Une clause du type « tous droits cédés » reste fragile ; une clause qui énumère la reproduction et la représentation, les supports, les pays et la durée tient.',
                'Au Bénin, la <a href="https://www.wipo.int/wipolex/fr/legislation/details/7585">loi n° 2005-30 du 5 avril 2006 relative au droit d\'auteur et aux droits voisins</a> prévoit, à son article 5, que les droits patrimoniaux d\'une œuvre créée par un salarié dans le cadre de son contrat sont présumés transférés à l\'employeur, dans la mesure justifiée par ses activités habituelles, sauf stipulation contraire. Cette présomption ne joue pas pour un prestataire indépendant, et l\'article 26 veut que les cessions soient conclues par écrit.',
                'Pendant la formation, chaque participant reprend un bon de commande réel de son service (logo, shooting, vidéo, rédaction) et vérifie quatre points : les droits cédés sont-ils nommés, pour quels supports, pour quels pays, pour combien de temps ? Les fichiers sources sont-ils livrés ? Les photos de banques d\'images et les musiques ont-elles une licence qui couvre la publicité ? Et que disent les conditions de l\'outil d\'IA employé par l\'agence sur les contenus qu\'il produit ? La fiche <a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a> détaille ce dernier point outil par outil.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que doit contenir le registre des autorisations d\'une photothèque ?',
            'items' => [
                'L\'identité de la personne photographiée ou filmée, et la référence du fichier ou de la série concernée.',
                'La date et le lieu de la prise de vue, et le nom de la personne qui a recueilli l\'autorisation.',
                'Les usages autorisés, nommés un par un : site, réseaux sociaux, presse, affichage, publicité payante, documents internes.',
                'La durée de l\'autorisation et les pays de diffusion, au lieu d\'un « sans limite » qui ne protège personne.',
                'Pour un mineur, l\'autorisation signée par la personne qui exerce l\'autorité parentale, et son avis sur le visuel final quand il s\'agit de publicité.',
                'La façon de retirer son accord, aussi simple que celle de le donner, et la date du retrait s\'il intervient.',
                'Les retouches ou les modifications par l\'IA faites sur l\'image, et la mention prévue si elles changent ce que l\'image montre.',
                'Le titulaire des droits d\'auteur de la photo elle-même (salarié, photographe indépendant, banque d\'images) et la licence correspondante.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quand faut-il signaler qu\'un contenu de communication a été généré ou retouché par l\'IA ?',
            'paragraphes' => [
                'La bonne réponse n\'est pas « toujours » ni « jamais », mais une politique écrite par le service, appliquée par tous et revue chaque année. Trois sources la nourrissent. La loi, d\'abord : en Europe, l\'<a href="https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50">article 50 du règlement sur l\'IA</a>, applicable depuis le 2 août 2026, impose de signaler les hypertrucages et les textes d\'intérêt public non relus, de façon claire et au plus tard lors de la première exposition ; au Bénin, l\'article 576 de la loi n° 2017-20 sanctionne le montage non signalé qui reprend l\'image ou les paroles d\'une personne.',
                'Les règles des plateformes, ensuite, qui demandent d\'activer leurs propres étiquettes pour les contenus réalistes : la fiche Créer du contenu avec l\'IA les passe en revue réseau par réseau. Le cadre volontaire, enfin : la Commission européenne a publié le 10 juin 2026 la version finale d\'un <a href="https://digital-strategy.ec.europa.eu/en/policies/code-practice-ai-generated-content">code de bonnes pratiques sur la transparence des contenus générés par l\'IA</a>, signé par environ 190 entreprises et organisations à la fin de juillet 2026, et propose un jeu d\'icônes européennes pour étiqueter ces contenus.',
                'Dans la pratique, le service tranche quatre cas. Un texte relu et signé par un responsable ne porte pas de mention obligatoire, mais l\'organisation peut choisir de l\'indiquer. Un visuel d\'illustration manifestement non réaliste se signale simplement. Une image ou une vidéo réaliste qui montre une personne, un lieu ou un événement porte toujours la mention, placée sur l\'image et non en bas de page. Une voix ou un visage d\'une personne réelle exigent son accord écrit avant toute production, mention comprise. La politique tient sur une page, et chaque cas douteux remonte à la personne désignée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Relations presse : que changent l\'IA et l\'automatisation pour le communiqué, le fichier et la revue de presse ?',
            'paragraphes' => [
                'Le communiqué est l\'exercice où l\'assistant d\'IA fait gagner le plus de temps et où il trompe le plus facilement. Il structure vite une annonce, propose un titre, resserre une citation. Il invente aussi, avec aplomb, une date, un chiffre d\'affaires ou le titre exact d\'un ministre. La règle enseignée est simple : l\'assistant écrit à partir d\'une fiche de faits rédigée par le service (qui, quoi, quand, chiffres sourcés, citations validées), et chaque élément du texte final se retrouve dans cette fiche. Ce qui n\'y figure pas disparaît.',
                'Le fichier de journalistes est une base de données personnelles. En France, la <a href="https://www.cnil.fr/fr/la-prospection-commerciale-par-courrier-electronique">page de la CNIL sur la prospection par courrier électronique</a>, mise à jour le 10 juin 2026, admet l\'envoi à des professionnels sur la base de l\'intérêt légitime quand le message concerne leur profession, à condition qu\'ils aient été informés et puissent s\'y opposer. Au Bénin, l\'article 390 de la loi n° 2017-20 exige de pouvoir démontrer le consentement quand il fonde le traitement. On note donc d\'où vient chaque contact, et chaque envoi porte un moyen simple de ne plus rien recevoir.',
                'La revue de presse et la veille s\'automatisent bien : alertes sur le nom de l\'organisation et de ses dirigeants, flux des principaux médias, regroupement quotidien des articles dans un tableau partagé, premier résumé produit par un assistant. L\'outil laisse pourtant passer l\'essentiel de ce qui compte localement : la radio, la presse papier non numérisée, les groupes WhatsApp où une rumeur naît. Le parcours apprend à compléter l\'automate par un relevé humain, et à archiver chaque article avec sa date et son adresse, faute de quoi aucune réponse n\'est possible.',
                'Quand un article inexact met l\'organisation en cause, le temps compte. Au Bénin, la loi n° 2015-07 ouvre le droit de réponse aux personnes morales, qui l\'exercent par leur représentant légal (articles 123 et 125). La demande se présente dans les huit jours suivant la diffusion, par lettre ou par la voie la plus rapide avec accusé de réception ; sans suite dans les quatre jours, le juge des référés peut être saisi (article 124). Pour un quotidien, la réponse paraît dans les deux jours ouvrables (article 136). L\'IA aide à rédiger une réponse factuelle ; la décision de l\'exercer appartient à la direction.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Communication interne : que change l\'IA pour les notes, la lettre au personnel et les groupes de messagerie ?',
            'paragraphes' => [
                'La communication interne souffre moins d\'un manque de contenus que d\'un excès de messages mal ciblés. Les assistants aident à produire la synthèse d\'une réunion de direction en une page, une lettre interne lisible sur téléphone, une foire aux questions qui suit les vraies questions des équipes, la traduction d\'une note pour un site à l\'étranger. Ils aident aussi à faire l\'inverse de la diffusion : classer les questions reçues par thème, repérer ce qui revient, proposer à la direction les trois sujets qu\'il faudrait expliquer en face à face.',
                'Le risque change de nature. Une note interne contient souvent ce qui ne doit pas sortir : résultats non publiés, projet de réorganisation, nom d\'un salarié en difficulté. La coller dans un assistant grand public revient à la confier à un tiers. Le parcours fixe donc la frontière avec la charte d\'usage de l\'IA : ce qui peut aller dans un outil couvert par un contrat d\'entreprise, ce qui se décrit sans être copié, ce qui reste hors de toute IA.',
                'Reste la messagerie. Dans beaucoup d\'organisations d\'Afrique francophone, le vrai canal interne est un groupe WhatsApp créé par un chef d\'équipe, où se mêlent consignes, photos de famille et numéros personnels. La formation n\'interdit rien ; elle aide à séparer le canal officiel (annonces, administrateurs désignés, règles d\'usage écrites) des groupes de travail, à décider de ce qui ne s\'y publie jamais et à prévoir comment retirer quelqu\'un qui quitte l\'organisation.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon l\'organisation, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Direction de la communication d\'un assureur, à Dakar', 'probleme' => 'Une équipe de cinq personnes gère presse, réseaux, communication interne et relations avec deux agences ; chacun utilise un assistant différent, sans règles, et les sinistres font régulièrement réagir en ligne.', 'solution' => 'Charte d\'usage de l\'IA commune, fiche de faits obligatoire avant tout communiqué, réponses types validées avec le service juridique pour les sinistres, circuit de crise écrit et alertes sur le nom de la compagnie.'],
                ['secteur' => 'Service marketing d\'un distributeur d\'électroménager, à Cotonou', 'probleme' => 'Des jeux-concours lancés sur Facebook sans règlement, des promotions envoyées par WhatsApp à des numéros de toutes provenances, et des affiches qui promettent des économies d\'énergie jamais mesurées.', 'solution' => 'Règlement type des jeux et conditions accessibles en un clic, liste de diffusion reconstruite à partir de clients ayant donné leur accord, preuve rangée pour chaque allégation chiffrée, mention « Publicité » sur les publireportages.'],
                ['secteur' => 'Cellule communication d\'une université privée, à Lomé', 'probleme' => 'Des milliers de photos d\'étudiants, dont des mineurs en première année, aucune autorisation retrouvable, et une campagne de rentrée à produire en trois semaines.', 'solution' => 'Tri de la photothèque, registre des autorisations, nouvelles prises de vue avec accords écrits, visuels d\'illustration générés pour les sujets sans personne identifiable, et calendrier de campagne partagé avec les filières.'],
                ['secteur' => 'Agence de communication, à Abidjan', 'probleme' => 'L\'agence produit avec l\'IA pour ses clients, qui demandent qui détient les droits sur les visuels et si une mention est due ; les contrats datent d\'avant ces outils.', 'solution' => 'Clause de cession réécrite (droits nommés, supports, pays, durée), annexe listant les outils d\'IA utilisés et leurs conditions, politique de mention proposée au client, et archivage des consignes et des versions de chaque création.'],
                ['secteur' => 'Groupe de BTP, à Libreville', 'probleme' => 'La communication interne passe par une dizaine de groupes de messagerie de chantier, et le rapport de développement durable multiplie les formules générales sur l\'engagement environnemental.', 'solution' => 'Canal officiel séparé des groupes de travail, lettre interne mensuelle lisible sur téléphone, et relecture du rapport pour remplacer chaque formule générale par un fait mesuré, daté et sourcé.'],
                ['secteur' => 'Mutuelle régionale, près de Nantes', 'probleme' => 'Le service doit appliquer la directive sur les allégations environnementales, répondre aux questions de la direction sur l\'article 50 du règlement sur l\'IA et justifier son budget avec autre chose que des « vues ».', 'solution' => 'Inventaire des allégations publiées et retrait des formules non démontrables, politique de mention des contenus générés, tableau de bord bâti sur les objectifs du plan de communication et présenté chaque mois au comité de direction.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment prouver à la direction ce que la communication rapporte ?',
            'paragraphes' => [
                'Le rapport mensuel de beaucoup de services ressemble à une collection de captures d\'écran : abonnés gagnés, publications vues, articles parus, parfois une « valeur publicitaire équivalente » qui convertit chaque article en prix d\'un encart. La direction le lit, hoche la tête, et coupe le budget au premier trimestre difficile. Le problème ne vient pas des chiffres, mais de l\'absence de lien entre ces chiffres et les objectifs de l\'organisation.',
                'Les professionnels de la mesure ont formalisé ce lien. Les <a href="https://amecorg.com/barcelona-principles-3-0-translations/">principes de Barcelone 3.0</a>, publiés par l\'AMEC en juillet 2020, posent que fixer des objectifs est un préalable absolu à la planification et à la mesure, que l\'évaluation distingue les productions, les résultats et l\'effet possible, qu\'elle combine le qualitatif et le quantitatif, qu\'elle couvre tous les canaux, en ligne et hors ligne, et, en toutes lettres, que les équivalences publicitaires ne sont pas la valeur de la communication.',
                'L\'IA et l\'automatisation changent surtout la collecte : les chiffres des réseaux, du site, de l\'outil d\'emailing et de la revue de presse peuvent arriver seuls dans un tableau, et un assistant peut proposer un premier commentaire des écarts. Elles ne choisissent pas les indicateurs et n\'expliquent pas une baisse. Le parcours apprend à partir de l\'objectif, à remonter vers les indicateurs, puis seulement à choisir les sources. Le réglage de Google Analytics 4 relève de la fiche <a href="/formations/analytics-ga4">Google Analytics 4 et pilotage</a> ; ici, on construit le tableau du service entier.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels indicateurs suivre selon l\'objectif de communication ?',
            'legende' => 'Trois niveaux pour chaque objectif : ce que le service a produit, ce que le public a fait, ce que l\'organisation y a gagné. Un rapport qui ne montre que la première colonne ne dit rien de l\'utilité de la communication.',
            'entetes' => ['Objectif', 'Production (ce que l\'on a fait)', 'Résultat (ce que le public a fait)', 'Effet (ce que l\'organisation y gagne)', 'Source à rapprocher'],
            'lignes'  => [
                ['Faire connaître une offre', 'Publications, campagne, articles obtenus', 'Personnes atteintes dans la cible, recherches du nom de l\'offre', 'Demandes reçues qui citent l\'offre', 'Statistiques des réseaux, Search Console, fiche de contact'],
                ['Générer des demandes', 'Pages, formulaires, messages envoyés', 'Clics, formulaires remplis, conversations ouvertes', 'Demandes qualifiées, devis signés, coût par demande', 'Outil de mesure du site, CRM, commercial'],
                ['Attirer des candidats', 'Offres publiées, témoignages de salariés', 'Candidatures reçues, par canal', 'Postes pourvus, délai de recrutement', 'Service des ressources humaines'],
                ['Gagner la presse', 'Communiqués, rencontres, dossiers envoyés', 'Articles et reprises, messages clés présents', 'Questions de partenaires ou de clients après parution', 'Revue de presse annotée, retours commerciaux'],
                ['Informer le personnel', 'Lettres, notes, réunions', 'Taux d\'ouverture, questions reçues', 'Erreurs évitées, consignes appliquées, climat perçu', 'Outil de diffusion, enquête courte, managers'],
                ['Protéger la réputation', 'Veille, réponses publiées', 'Ton des mentions, délai de réponse', 'Crise évitée ou contenue, plaintes en baisse', 'Outil de veille, service client'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils un service marketing et communication utilise-t-il, et que travaille-t-on sur chacun ?',
            'legende' => 'La formation se fait sur les outils déjà en place dans le service. Les abonnements restent payés par l\'organisation à leurs éditeurs et ne sont jamais compris dans le devis.',
            'entetes' => ['Famille d\'outils', 'Exemples courants', 'Ce que l\'on y travaille', 'Point de vigilance'],
            'lignes'  => [
                ['Assistants d\'IA', 'ChatGPT, Claude, Gemini, Copilot', 'Consignes tirées de la charte, fiche de faits, déclinaisons, synthèses', 'Offre souscrite, données confiées, relecture ; voir le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>'],
                ['Création graphique et vidéo', 'Canva, Adobe Express, CapCut', 'Gabarits verrouillés aux couleurs de la marque, formats par réseau', 'Licences des éléments et conditions des fonctions d\'IA'],
                ['Publication et planification', 'Meta Business Suite, planification native de LinkedIn, outils tiers', 'Calendrier, files de validation, archivage', 'Accès nominatifs, aucun compte au nom d\'un prestataire'],
                ['Emailing et listes', 'Brevo, Mailchimp, modules d\'Odoo ou de Dolibarr', 'Lettre externe et interne, segments, désinscription', 'Preuve du consentement de chaque contact'],
                ['Veille et revue de presse', 'Alertes Google, flux RSS, automatisations n8n ou Make', 'Revue quotidienne automatique, archivage daté des articles', 'Ce que l\'automate ne voit pas : radio, papier, messageries'],
                ['Mesure et tableau de bord', 'Google Analytics 4, Search Console, Looker Studio, tableur', 'Tableau mensuel par objectif, collecte automatique', 'Des indicateurs choisis avant les outils'],
                ['Organisation du travail', 'Notion, Trello, Teams, tableur partagé', 'Calendrier éditorial, briefs, registre des autorisations', 'Un seul endroit qui fait foi'],
                ['Messagerie', 'WhatsApp Business, chaînes WhatsApp', 'Annonces, réponses types, canal du personnel', 'Au-delà de 1 000 messages de service par mois et par numéro, la plateforme de Meta est payante depuis le 1er octobre 2026'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type pour un service marketing et communication, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment le parcours se prépare-t-il et se déroule-t-il dans votre service ?',
            'items' => [
                ['titre' => 'Le premier échange', 'duree' => '30 minutes', 'texte' => 'La taille du service, ses missions réelles (presse, réseaux, interne, événements, publicité), les agences avec lesquelles il travaille, les outils en place et ce qui bloque aujourd\'hui. Cet échange, le cadrage et le devis sont gratuits.'],
                ['titre' => 'La collecte des documents', 'duree' => 'Avant la session', 'texte' => 'Plan de communication, plateforme de marque, charte graphique, deux ou trois briefs récents, un communiqué, un rapport mensuel, un contrat d\'agence. Ils servent de matière aux exercices et restent confidentiels.'],
                ['titre' => 'L\'inventaire des accès', 'duree' => '1 heure', 'texte' => 'Qui administre la page, la régie publicitaire, l\'outil d\'emailing, le site ? Cet inventaire révèle souvent un compte détenu par un ancien salarié ou une agence ; on le règle avant ou pendant la première demi-journée.'],
                ['titre' => 'Le choix des demi-journées', 'duree' => 'Selon le devis', 'texte' => 'Un service centré sur la presse renforce la deuxième journée, une équipe marketing la campagne et la mesure, une communication interne la synthèse et les canaux du personnel. Les demi-journées sans objet sont retirées.'],
                ['titre' => 'Les séances sur vos contenus', 'duree' => 'Pendant chaque demi-journée', 'texte' => 'Chaque exercice part d\'un contenu réel du service et produit un document utilisable : charte d\'usage de l\'IA, calendrier, registre des autorisations, politique de mention, tableau de bord.'],
                ['titre' => 'La séance de bilan', 'duree' => '2 heures, à distance', 'texte' => 'Quatre à six semaines plus tard, on relit ce qui a été publié, on met à jour la charte et le registre, et l\'on décide par écrit de la suite.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quel format pour une équipe de communication ?',
            'legende' => 'Le format se fixe au premier échange, selon la taille de l\'équipe, la confidentialité des contenus travaillés et le calendrier des temps forts.',
            'entetes' => ['Format', 'Situation typique', 'Rythme habituel', 'Points d\'organisation'],
            'lignes'  => [
                ['Intra, dans vos locaux', 'Une direction de la communication, un service marketing, une agence et son équipe', 'Quatre demi-journées, de préférence hors des semaines de lancement', 'Travail sur les vrais comptes et documents ; les agences partenaires peuvent être invitées à la demi-journée sur les droits'],
                ['Inter, entre organisations', 'Chargés de communication seuls dans leur structure, associations professionnelles, réseaux d\'ONG ou d\'écoles', 'Deux journées en salle', 'Exercices sur des contenus anonymisés ; aucun document d\'une organisation n\'est montré aux autres sans accord'],
                ['À distance', 'Équipes réparties entre plusieurs pays, services installés hors de Cotonou, en Europe ou au Canada', 'Quatre séances de deux à trois heures', 'Partage d\'écran, exercices préparés la veille, documents relus entre deux séances'],
                ['Hybride', 'Service qui lance une nouvelle charte, change d\'agence ou prépare un temps fort', 'Une journée sur place, puis séances courtes à distance', 'Charte et circuit de validation sur place, mesure et bilan en visioconférence'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation pour un service de communication, et comment la régler ?',
            'intro'      => 'Aucun tarif n\'est publié : chaque parcours est chiffré sur devis après un premier échange gratuit. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux outils restent payés par l\'organisation à leurs éditeurs.',
            'items'      => [
                ['offre' => 'Parcours du service', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos contenus et vos comptes', 'Charte d\'usage de l\'IA, registre des autorisations, politique de mention, tableau de bord', 'Séance de bilan à distance']],
                ['offre' => 'Journée de direction', 'prix' => 'Sur devis', 'inclus' => ['Une journée pour le directeur de la communication et ses adjoints', 'Règles, circuit de validation, mesure présentée au comité de direction', 'Sans la production détaillée']],
                ['offre' => 'Session inter-organisations', 'prix' => 'Sur devis', 'inclus' => ['Deux journées pour des chargés de communication de plusieurs structures', 'Documents types adaptables par chacun', 'Coût réparti entre les participants']],
                ['offre' => 'Module à la carte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée ciblée : relations presse, droits et mentions, communication interne ou mesure', 'Pour un service déjà organisé sur le reste']],
            ],
            'variations' => [
                'Le nombre de participants et la présence ou non des agences partenaires.',
                'Le nombre de demi-journées retenues dans le programme type.',
                'Le lieu : vos locaux, une salle louée, une autre ville, un autre pays, ou la distance.',
                'La préparation : volume de documents à relire, photothèque à trier, contrats à examiner.',
                'Les livrables demandés en plus des documents du parcours, comme un modèle de rapport adapté à votre comité de direction.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il financer la session d\'un service de communication ?',
            'paragraphes' => [
                'Un service de communication est composé de salariés, ce qui ouvre en principe la porte des fonds alimentés par les taxes de formation de l\'employeur. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> consacrée au plan de formation, consultée le 5 octobre 2026, réserve ce dispositif aux entreprises qui justifient du paiement régulier des deux taxes, et ne règle qu\'après le suivi et le contrôle de ses services et l\'approbation de sa commission permanente. Le dossier se prépare donc avant la session, pas après.',
                'Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> ; au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> propose plusieurs guichets. Dans les deux cas, la règle est la même : interroger le fonds par écrit, programme et devis joints, avant de s\'engager.',
                'En France, les OPCO financent la formation des salariés, mais <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que depuis le 1er janvier 2022, tout prestataire qui veut accéder à des fonds publics ou mutualisés doit être certifié Qualiopi. Richard SALANON n\'affiche ni cette certification ni agrément d\'un fonds africain : prévoyez la session sur le budget propre du service. Le programme, les feuilles de présence et les productions des exercices sont remis dans tous les cas.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi les comptes de la marque ne doivent-ils jamais appartenir à l\'agence ou à un salarié ?',
            'texte' => 'Parce que le jour où la relation s\'arrête, la marque perd sa voix. Une page administrée par la seule agence, une régie publicitaire ouverte sur la carte bancaire d\'un prestataire, un outil d\'emailing au nom d\'une chargée de communication qui démissionne : chaque cas se termine par des semaines de démarches, parfois par la perte de l\'historique, des abonnés ou des fichiers sources du logo. La première décision prise pendant la formation est souvent la plus rentable : chaque compte appartient à l\'organisation, ouvert avec une adresse du service, avec au moins deux administrateurs internes, et l\'agence y reçoit un accès qu\'on peut lui retirer. Les fichiers sources des créations sont livrés et rangés chez vous.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on chez les services qui adoptent l\'IA, et comment les éviter ?',
            'intro' => 'Ces erreurs n\'ont rien de technique : elles viennent de l\'ordre dans lequel on adopte les outils. Chacune a sa parade, travaillée pendant le parcours.',
            'items' => [
                ['titre' => 'Un assistant par personne, aucune règle commune', 'texte' => 'Chacun a son outil, ses consignes, son ton. Les contenus finissent par ne plus se ressembler. Une charte d\'usage commune, des consignes partagées tirées de la plateforme de marque, et une bibliothèque de modèles tenue par une personne.'],
                ['titre' => 'Produire plus, valider pareil', 'texte' => 'Le volume double, le circuit de validation reste celui d\'avant, et le directeur relit tout le dimanche. On classe les contenus par niveau de risque : certains se publient sur relecture croisée, d\'autres exigent la direction ou le juriste.'],
                ['titre' => 'Le communiqué sans fiche de faits', 'texte' => 'Un chiffre plausible inventé par l\'assistant part à cinquante rédactions. Aucun communiqué ne se rédige sans fiche de faits sourcée, et chaque élément du texte s\'y retrouve.'],
                ['titre' => 'La photothèque sans mémoire', 'texte' => 'Des années d\'images, aucune autorisation retrouvable, et des visages d\'anciens salariés dans la publicité du mois. On trie, on documente, et ce qui n\'a pas d\'autorisation sort des usages publicitaires.'],
                ['titre' => 'Le vert sans preuve', 'texte' => '« Écoresponsable », « neutre en carbone », « respectueux de la planète » : dans l\'Union européenne, ces formules générales sont désormais interdites quand l\'entreprise ne peut pas démontrer une performance environnementale excellente et reconnue. On les remplace par un fait précis, mesuré et daté.'],
                ['titre' => 'Mesurer ce qui est facile', 'texte' => 'Abonnés, mentions « j\'aime » et équivalences publicitaires remplissent le rapport sans répondre à la direction. On part de l\'objectif, on choisit trois indicateurs par niveau, et l\'on rapproche les chiffres en ligne des demandes réellement reçues.'],
                ['titre' => 'Automatiser la publication, oublier la conversation', 'texte' => 'Les publications partent à l\'heure, mais personne ne lit les réponses. Toute planification s\'accompagne d\'un créneau de modération et d\'une règle de remontée des cas sensibles.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés un service de communication doit-il connaître en 2026 ?',
            'items' => [
                ['valeur' => '2 août 2026', 'libelle' => 'Date d\'application des obligations de transparence de l\'article 50 du règlement européen sur l\'IA, dont la mention des hypertrucages et des textes d\'intérêt public non relus', 'source' => 'AI Act Service Desk, articles 50 et 113', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-113'],
                ['valeur' => 'Environ 190', 'libelle' => 'Entreprises et organisations signataires, à la fin de juillet 2026, du code de bonnes pratiques sur la transparence des contenus générés par l\'IA, publié dans sa version finale le 10 juin 2026', 'source' => 'Commission européenne, page du code de bonnes pratiques, mise à jour du 31 juillet 2026', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/code-practice-ai-generated-content'],
                ['valeur' => '27 septembre 2026', 'libelle' => 'Date à partir de laquelle les États membres appliquent les interdictions de la directive (UE) 2024/825 sur les allégations environnementales génériques et la neutralité par compensation', 'source' => 'Directive (UE) 2024/825 du 28 février 2024, article 4', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32024L0825'],
                ['valeur' => '8 jours', 'libelle' => 'Délai, à compter de la diffusion, pour demander l\'exercice du droit de réponse au Bénin ; le juge des référés peut être saisi après quatre jours sans suite', 'source' => 'Loi n° 2015-07 portant code de l\'information et de la communication, article 124', 'url' => 'https://sgg.gouv.bj/doc/loi-2015-07/'],
                ['valeur' => '34 %', 'libelle' => 'Part des TPE et PME françaises citant la génération de contenus (texte, voix ou image) parmi leurs usages de l\'IA en 2026, premier usage cité, en hausse de 12 points ; seules 5 % déclarent une dépense de formation liée à l\'IA', 'source' => 'Baromètre France Num 2026, DGE, publié en septembre 2026', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '66 %', 'libelle' => 'Part des TPE et PME françaises qui disposent d\'au moins un compte de réseau social gratuit en 2026, contre 64 % qui ont un site internet', 'source' => 'Baromètre France Num 2026, DGE', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '17', 'libelle' => 'États membres de l\'Organisation africaine de la propriété intellectuelle, dont le Bénin, le Sénégal, la Côte d\'Ivoire, le Togo et le Cameroun : le périmètre à vérifier avant de décliner une marque dans la sous-région', 'source' => 'OAPI, page des États membres', 'url' => 'https://www.oapi.int/index.php/fr/oapi/etats-membres'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langues, marque déposée : que change le pays où l\'on communique ?',
            'paragraphes' => [
                'En Afrique francophone, la communication se lit d\'abord sur téléphone, souvent avec un forfait de données compté. Un visuel lourd, une vidéo de trois minutes ou un PDF de quarante pages ne seront pas ouverts. La formation fait travailler des formats légers, une lettre interne lisible sans télécharger de pièce jointe, et des messages qui tiennent dans l\'aperçu d\'une notification. Elle prévoit aussi le cas de la coupure : publication programmée qui échoue, validation bloquée, et la personne qui prend le relais.',
                'Les langues comptent autant que le réseau. Les publics mélangent le français, les langues nationales et l\'anglais selon les pays, et les assistants d\'IA traduisent bien le français standard mais beaucoup moins bien le fon, le wolof, le dioula ou le lingala. Toute version dans une langue nationale passe par un locuteur, et la formation apprend à préparer pour lui un texte simple plutôt qu\'à publier une traduction automatique.',
                'Enfin, l\'image de marque repose sur un nom et un logo que l\'organisation doit pouvoir défendre. Dans les 17 États membres de l\'OAPI, la protection d\'une marque passe par cette organisation commune ; en Europe, par les offices nationaux ou l\'office de l\'Union. Le service de communication n\'a pas à déposer lui-même, mais il doit savoir si la marque qu\'il décline est protégée, dans quels pays, et pour quels produits, avant de lancer une campagne ou de céder un visuel à un partenaire.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours pour un service de communication ?',
            'legende' => 'Chaque formation a sa fiche, avec son programme détaillé. Le parcours de cette page installe les règles du service ; les fiches approfondissent un outil ou un canal.',
            'entetes' => ['Formation', 'Ce qu\'elle approfondit pour le service', 'Qui l\'envoyer suivre', 'Durée indiquée sur la fiche'],
            'lignes'  => [
                ['<a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a>', 'Textes, visuels et vidéos courtes outil par outil, droits attachés à chaque générateur', 'Chargés de contenu, graphistes, community managers', 'Deux jours en quatre demi-journées, ou un jour resserré'],
                ['<a href="/formations/linkedin-reseaux-sociaux">LinkedIn et réseaux sociaux d\'entreprise</a>', 'Profils des dirigeants, page de l\'entreprise, ligne éditoriale par réseau', 'Community managers, dirigeants, porte-parole', 'Deux jours en quatre demi-journées, ou un jour resserré'],
                ['<a href="/formations/seo-contenu">SEO et marketing de contenu</a>', 'Choisir ses sujets d\'après les recherches des clients, écrire des pages que Google comprend', 'Rédacteurs web, responsable du site', 'Deux jours en quatre demi-journées espacées'],
                ['<a href="/formations/analytics-ga4">Google Analytics 4 et pilotage</a>', 'Événements clés, consentement, rapports et attribution sur le site', 'Responsable marketing, gestionnaire du site', 'Deux jours, plus deux heures de suivi'],
                ['<a href="/formations/publicite-meta-google-ads">Publicité Meta Ads et Google Ads</a>', 'Campagnes payantes, budgets, suivi des conversions', 'Chargé des campagnes, responsable marketing', 'Deux jours, puis un bilan à distance'],
                ['<a href="/formations/emailing-automation">Emailing et marketing automation</a>', 'Listes avec consentement, séquences, délivrabilité', 'Chargé de la relation client et de la lettre d\'information', 'Deux jours en quatre demi-journées'],
                ['<a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>', 'Être cité par les moteurs de réponse comme ChatGPT, Gemini ou Perplexity', 'Équipes éditoriales et marketing', 'Deux jours, ou un jour resserré'],
                ['<a href="/formations/marketing-digital-b2b">Marketing digital B2B</a>', 'Acquisition de clients professionnels, contenus et prospection', 'Équipes marketing d\'entreprises qui vendent à des entreprises', 'Deux jours, ou un jour resserré'],
                ['<a href="/formations/power-bi-looker-studio">Tableaux de bord Power BI et Looker Studio</a>', 'Construire le tableau de bord du service à partir de plusieurs sources', 'Personne chargée du rapport mensuel', 'Trois jours, plus deux heures de suivi'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Ce que chaque salarié peut confier à un assistant, données personnelles et secret', 'Toute l\'équipe, et les agences partenaires', 'Un jour de socle, ou deux jours'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', 'Charte, inventaire des usages et responsabilités à l\'échelle de l\'organisation', 'Directeur de la communication avec la direction générale', 'Deux jours en quatre demi-journées'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former votre équipe de communication avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà formé des responsables et des chargés de marketing et de communication, sur leurs propres outils : les comptes de la marque, les assistants d\'IA déjà souscrits, l\'outil d\'emailing, le tableur du rapport mensuel. Il n\'est ni communicant, ni juriste, ni agence de publicité, et ne vous dira pas quoi dire de votre marque. Son métier de développeur le place du côté des outils que votre service emploie : il sait comment une automatisation de veille se construit, ce qu\'un assistant fait d\'une consigne mal posée et où se perdent les données d\'un formulaire.',
                'Il compte ' . $ans . ' ans d\'expérience dans le numérique, une formation à ' . fait('formation')['nom'] . ' achevée en ' . fait('formation')['annee'] . ', plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées selon ses propres décomptes et des missions dans ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique francophone, d\'Europe et du Canada. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Aucun éditeur ne l\'a certifié, et la formation ne vend aucun outil : elle part de ceux que le service possède déjà.',
                'Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, l\'organisation des sessions sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>. Les autres formations du domaine sont rangées dans <a href="/formations/domaine/marketing-visibilite">marketing et visibilité</a>, et le catalogue complet sur la page des <a href="/formations/">formations</a>. Si le besoin est de faire plutôt que d\'apprendre, par exemple relier la veille, l\'emailing et le site par des flux automatiques, il relève de l\'<a href="/services/automatisation-ia">automatisation avec l\'IA</a> ; un contenu à faire remonter dans Google relève du <a href="/services/referencement-naturel-seo">référencement naturel</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre service ?',
            'texte' => 'L\'IA a rendu le premier jet presque gratuit ; ce qui coûte désormais, c\'est ce que l\'on publie sans l\'avoir vérifié. Écrivez d\'abord les règles du service (charte d\'usage, circuit de validation, registre des autorisations, politique de mention, comptes au nom de l\'organisation), puis laissez l\'outil accélérer la production, et mesurez à partir des objectifs, jamais à partir de ce que l\'outil sait compter.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe de communication à l\'IA sans perdre la main sur ce qu\'elle publie ?',
            'texte'  => 'Indiquez la taille du service, ses missions, les outils en place, les agences avec lesquelles il travaille et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté à votre organisation et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon service'],
        ],
    ],

    'faq' => [
        ['q' => 'Notre service compte une seule personne : la formation est-elle adaptée ?', 'r' => 'Oui, et c\'est souvent là qu\'elle sert le plus : la personne seule porte la presse, les réseaux, l\'interne et les événements. Le parcours se resserre sur les règles et les automatisations qui lui rendent du temps, en inter avec d\'autres chargés de communication ou en séances courtes à distance.'],
        ['q' => 'Quelle différence avec la formation Créer du contenu avec l\'IA ?', 'r' => 'Cette fiche apprend à produire textes, visuels et vidéos outil par outil. Le parcours de cette page organise le service entier : stratégie de contenu, campagnes, relations presse, communication interne, droits, mentions et mesure. Les deux se complètent, et la fiche contenu convient aux personnes qui produisent au quotidien.'],
        ['q' => 'Faut-il signaler qu\'un communiqué a été rédigé avec l\'IA ?', 'r' => 'En Europe, l\'article 50 du règlement sur l\'IA n\'impose pas de mention pour un texte relu et placé sous la responsabilité éditoriale d\'une personne. L\'organisation peut choisir de l\'indiquer. Un texte d\'intérêt public publié sans relecture doit, lui, être signalé. Le parcours aide à écrire cette politique pour votre service.'],
        ['q' => 'Le logo payé à un graphiste appartient-il à l\'organisation ?', 'r' => 'Pas automatiquement. En France, le contrat de commande ne prive pas l\'auteur de ses droits, et la cession doit nommer chaque droit, son étendue, sa destination, le lieu et la durée. Au Bénin, la présomption de transfert ne vaut que pour un salarié, et les cessions se concluent par écrit. On relit donc le contrat avant la prochaine déclinaison.'],
        ['q' => 'Peut-on publier les photos d\'un événement où figurent des enfants ?', 'r' => 'Seulement avec l\'autorisation préalable de la personne qui exerce l\'autorité parentale, comme le prévoit la loi béninoise n° 2015-07 ; en publicité, elle peut donner son avis sur le visuel final. Sans autorisation, on choisit des images où personne n\'est reconnaissable, ou l\'on renonce à la photo.'],
        ['q' => 'Peut-on envoyer nos communiqués à tous les journalistes trouvés en ligne ?', 'r' => 'Un fichier de presse reste une base de données personnelles. En France, la CNIL admet l\'envoi à des professionnels quand le message concerne leur métier, s\'ils ont été informés et peuvent s\'opposer. On note la source de chaque contact, on informe, et chaque envoi permet de ne plus rien recevoir.'],
        ['q' => 'Un article inexact nous met en cause : que faire ?', 'r' => 'Archiver l\'article avec sa date, puis décider avec la direction. Au Bénin, une personne morale peut exercer son droit de réponse par son représentant légal, en le demandant dans les huit jours suivant la diffusion. L\'IA aide à rédiger une réponse factuelle et mesurée ; la signature reste humaine.'],
        ['q' => 'Notre agence garde les accès de nos pages : comment les récupérer ?', 'r' => 'En demandant que l\'organisation devienne administratrice principale de chaque compte, avec deux personnes internes, et que l\'agence conserve un accès qu\'on peut lui retirer. L\'inventaire des accès se fait avant la première demi-journée, et les demandes de récupération se préparent pendant la session.'],
        ['q' => 'Comment présenter nos résultats à la direction sans se limiter aux abonnés ?', 'r' => 'En partant des objectifs du plan de communication et en suivant, pour chacun, ce que le service a produit, ce que le public a fait et ce que l\'organisation y a gagné. Les principes de Barcelone 3.0 de l\'AMEC rappellent que les équivalences publicitaires ne sont pas la valeur de la communication.'],
        ['q' => 'Faut-il acheter de nouveaux outils avant la formation ?', 'r' => 'Non. La formation se fait sur les outils déjà en place, gratuits ou souscrits. Elle aide ensuite à décider si un abonnement supplémentaire se justifie, au vu de l\'offre de l\'éditeur, des données confiées et du temps réellement gagné.'],
        ['q' => 'Nos agences partenaires peuvent-elles participer ?', 'r' => 'Oui, et c\'est conseillé pour la demi-journée sur les droits et les mentions : c\'est souvent l\'agence qui produit avec l\'IA, qui détient les fichiers sources et qui rédige les clauses de cession. Leur présence se décide avec vous au premier échange.'],
        ['q' => 'La formation peut-elle être financée ?', 'r' => 'Selon le pays et le fonds : FDFP en Côte d\'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, sous leurs conditions. En France, les OPCO exigent un organisme certifié Qualiopi, ce que Richard SALANON n\'affiche pas. Interrogez le fonds par écrit avant de signer et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'AI Act Service Desk, article 50 du règlement sur l\'IA (obligations de transparence)', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 113 du règlement sur l\'IA (entrée en vigueur et application)', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-113', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, code de bonnes pratiques sur la transparence des contenus générés par l\'IA (mise à jour du 31 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/code-practice-ai-generated-content', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, directive (UE) 2024/825 du 28 février 2024 sur la protection des consommateurs dans la transition verte', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32024L0825', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, article L111-1 du Code de la propriété intellectuelle', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278868', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, article L131-3 du Code de la propriété intellectuelle (forme de la cession des droits)', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958', 'date' => '2026-10-05'],
        ['titre' => 'OMPI, WIPO Lex : loi béninoise n° 2005-30 du 5 avril 2006 relative au droit d\'auteur et aux droits voisins (articles 5 et 26)', 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/7585', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2015-07 du 20 mars 2015 portant code de l\'information et de la communication (articles 123 à 125, 136, 157, 159, 162, 167, 322 et 323)', 'url' => 'https://sgg.gouv.bj/doc/loi-2015-07/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 245, 330 à 332, 390 et 576)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, la prospection commerciale par courrier électronique (mise à jour du 10 juin 2026)', 'url' => 'https://www.cnil.fr/fr/la-prospection-commerciale-par-courrier-electronique', 'date' => '2026-10-05'],
        ['titre' => 'AMEC, principes de Barcelone 3.0 (juillet 2020)', 'url' => 'https://amecorg.com/barcelona-principles-3-0-translations/', 'date' => '2026-10-05'],
        ['titre' => 'France Num (DGE), Baromètre France Num 2026 : le numérique et l\'intelligence artificielle dans les TPE et PME', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => 'OAPI, États membres', 'url' => 'https://www.oapi.int/index.php/fr/oapi/etats-membres', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['contenu-avec-ia', 'linkedin-reseaux-sociaux', 'seo-contenu', 'analytics-ga4', 'publicite-meta-google-ads', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'referencement-naturel-seo', 'automatisation-ia'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
