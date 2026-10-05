<?php
// ============================================================
// data/metiers/journalistes-medias.php · Page « formations par métier » :
// journalistes et médias (vague 1C, univers Commerce et communication,
// non prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : la rédaction (enquête et recherche, vérification des faits
// et des images, détection des contenus générés, production et diffusion,
// protection des sources, déontologie de l'information, droit d'auteur).
// La page oriente vers contenu-avec-ia, ia-ethique-conformite,
// prompt-engineering et cybersecurite-employes sans reprendre leur texte,
// et ne reprend rien de marketing-communication ni de
// commercants-e-commercants.
// Faits relevés le 05/10/2026 : Déclaration de Munich (texte publié par le
// SNJ), Charte de Paris sur l'IA et le journalisme (RSF, novembre 2023),
// lignes directrices de la BBC sur l'IA, loi béninoise n° 2015-07 (articles
// 11, 12, 23, 24, 27, 29, 30, 33 à 35, 37 à 39, lue dans le PDF du SGG),
// Code de déontologie et d'éthique dans les médias au Bénin (ODEM, décision
// du 21 février 2025, PDF publié par la HAAC), actualités de la HAAC des
// 1er et 5 octobre 2026, RSF (fiche Bénin), règlement européen sur l'IA
// (articles 50 et 53, version consolidée au 27 juillet 2026), règlement
// européen sur la liberté des médias (page de la Commission), Reuters
// Institute Digital News Report 2026 (16 juin 2026), InVID, C2PA, CDJM ;
// faits vérifiés du catalogue (article 4 du règlement sur l'IA, Meta).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'       => 'Formation numérique et IA pour journalistes et médias : enquêter plus vite, vérifier chaque fait, chaque image et chaque son, produire pour tous les supports, sans jamais exposer une source ni céder la signature à la machine',
    'title'       => 'Formation IA pour journalistes et médias | Richard SALANON',
    'meta'        => 'Formation des journalistes et des rédactions : enquête, vérification des faits et des images, IA, protection des sources, déontologie, droits. Sur devis.',
    'en_bref'     => 'Cette page présente le parcours de formation conçu pour les rédactions de presse écrite, de radio, de télévision et de médias en ligne, et pour les journalistes indépendants. Il apprend à se servir de l\'IA pour dépouiller des documents, transcrire, traduire et décliner un sujet, à vérifier les faits, les photos, les vidéos et les audios qui circulent, à repérer un contenu généré, et à protéger ses sources et ses droits dans des outils qui passent par le nuage. Le parcours type dure deux jours en quatre demi-journées, suivis d\'une séance de suivi, en rédaction, entre plusieurs médias, à distance ou en hybride, et son prix est fixé sur devis.',
    'publie'      => '2026-10-22',
    'maj'         => '2026-10-05',
    'univers'     => 'Commerce et communication',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : enquêter et documenter avec l\'IA, sans exposer une seule source',
            'duree'  => '3 h 30',
            'points' => [
                'Faire le relevé des usages réels dans la rédaction : qui se sert de quel assistant, avec quel compte, pour quels sujets, et ce que personne n\'ose dire.',
                'Transcrire un entretien : outil installé sur l\'ordinateur ou service en ligne, et la règle qui sépare les enregistrements ordinaires de ceux d\'une source confidentielle.',
                'Dépouiller un document long (rapport d\'audit, loi de finances, décision de justice) en exigeant de l\'assistant un renvoi à la page pour chaque affirmation.',
                'Remonter à la source primaire d\'une réponse de moteur conversationnel, et reconnaître une référence inventée.',
                'Préparer un tableau de données publiques (budget communal, résultats d\'examens, marchés attribués) et refaire à la main les calculs qui fondent l\'angle.',
                'Exercice de contrôle : un document public réel transformé en fiche de faits, chaque ligne rattachée à sa page, relue par un autre participant.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : vérifier les faits, les photos, les vidéos et les audios',
            'duree'  => '3 h 30',
            'points' => [
                'Poser les cinq questions de toute vérification : qui a produit ce contenu, quand, où, comment il nous est parvenu, et qui a intérêt à ce qu\'il circule.',
                'Recherche d\'image inversée sur plusieurs moteurs, découpage d\'une vidéo en images clés, lecture des métadonnées quand elles existent.',
                'Situer une scène sur une carte avec ses repères visibles, et la dater avec les ombres, la météo, les enseignes ou les plaques.',
                'Traiter la note vocale anonyme qui circule sur WhatsApp : rappeler la personne citée, chercher l\'enregistrement d\'origine, comparer.',
                'Repérer une image ou une voix générée : indices visuels et sonores, Content Credentials, filigranes, et pourquoi un détecteur seul ne tranche jamais.',
                'Exercice de contrôle : cinq contenus devenus viraux les années passées, vérifiés en temps limité, avec une fiche de vérification par contenu.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : produire et diffuser sur tous les supports, sous responsabilité éditoriale',
            'duree'  => '3 h 30',
            'points' => [
                'Décliner un même sujet pour le papier ou le site, le journal parlé, la vidéo courte et la chaîne WhatsApp, sans qu\'un fait change en chemin.',
                'Demander des propositions de titres et de chapôs, puis choisir contre le sensationnalisme et pour l\'exactitude.',
                'Traduire ou adapter une information en langue nationale avec un locuteur qui relit, plutôt qu\'une traduction automatique publiée telle quelle.',
                'Sous-titrer une vidéo, transcrire un journal radio pour le site, et rendre les contenus accessibles aux personnes sourdes ou malentendantes.',
                'Décider quand une illustration générée est admissible, comment la signaler, et pourquoi elle ne représente jamais un fait réel.',
                'Exercice de contrôle : un sujet de la semaine décliné en quatre formats, puis passé à la grille de relecture du secrétariat de rédaction.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : sources, droit d\'auteur, rectification et charte IA de la rédaction',
            'duree'  => '3 h 30',
            'points' => [
                'Protéger les comptes et les téléphones qui contiennent des contacts sensibles : double authentification, messagerie chiffrée, sauvegarde, appareil perdu.',
                'Reprendre une photo trouvée sur un réseau social, citer le média dont on relaie l\'information, et refuser le copier-coller réécrit par une IA.',
                'Savoir ce que les robots d\'IA font des articles de la rédaction, et comment un éditeur exprime son refus de les voir aspirés.',
                'Corriger en ligne une erreur publiée : rectificatif visible, daté, et trace de la version d\'origine.',
                'Rédiger la charte IA de la rédaction : usages permis, usages proscrits, information du public, registre des outils, personne responsable.',
                'Exercice de contrôle : la charte d\'une page adoptée en séance, puis appliquée à un cas réel de rectification.',
            ],
        ],
        [
            'titre'  => 'Séance de suivi, quatre semaines plus tard : la charte face à l\'actualité',
            'duree'  => '2 h, à distance',
            'points' => [
                'Relecture de quelques contenus publiés depuis la session : vérifications faites, mentions posées, rectificatifs.',
                'Retour sur les contenus douteux rencontrés et sur la façon dont la rédaction les a traités.',
                'Mise à jour de la charte IA et du registre des outils à partir des cas réels.',
                'Choix écrit de la suite : formation complémentaire, outil à adopter, procédure à écrire, ou rien de plus pour l\'instant.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Reporters, rédacteurs en chef, secrétaires de rédaction, vérificateurs, animateurs de radio, vidéastes, responsables de médias en ligne'],
        ['l' => 'Durée', 'v' => 'Deux jours en quatre demi-journées, puis une séance de suivi de deux heures'],
        ['l' => 'Formats', 'v' => 'En rédaction, entre plusieurs médias, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que changent l\'IA, la digitalisation et l\'automatisation pour une rédaction ?',
            'paragraphes' => [
                'Le travail d\'une rédaction se résume à une chaîne : trouver l\'information, la vérifier, la mettre en forme, la diffuser, puis en répondre. Pendant des décennies, le goulet d\'étranglement se situait au début, dans l\'accès aux documents et aux personnes. Aujourd\'hui, les documents arrivent en masse (rapports, captures, notes vocales, vidéos filmées au téléphone), et le goulet s\'est déplacé vers la vérification. Une rédaction de cinq personnes reçoit chaque jour plus de contenus à contrôler qu\'elle ne peut en lire.',
                'Les assistants d\'IA soulagent une partie de la chaîne. Ils transcrivent un entretien d\'une heure en quelques minutes, résument un rapport de deux cents pages, proposent une traduction, déclinent un article en script radio ou en texte de vidéo courte. Mais ils produisent aussi, avec la même aisance, des citations jamais prononcées, des références introuvables et des images de scènes qui n\'ont pas eu lieu. La même technologie accélère le travail du journaliste et celui de ceux qui fabriquent de fausses informations.',
                'La digitalisation d\'une rédaction ne consiste donc pas à « mettre de l\'IA partout ». Elle consiste à écrire ce qui est permis, ce qui ne l\'est pas, et qui signe : une charte d\'usage, une fiche de vérification, un registre des outils, un circuit de relecture qui tient même un jour de bouclage. L\'automatisation prend ensuite les tâches mécaniques, comme les alertes de veille, l\'archivage des publications ou la mise en ligne programmée. L\'IA accélère la recherche et la mise en forme, jamais le jugement.',
                'Les publics, eux, restent méfiants. Le <a href="https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary">Digital News Report 2026</a> du Reuters Institute, publié le 16 juin 2026 sur 48 marchés, relève que l\'usage hebdomadaire des assistants conversationnels pour s\'informer est passé de 7 % à 10 % en un an, mais que la confiance accordée à leurs réponses n\'atteint que 20 %, contre 37 % pour l\'information en général. Une rédaction qui laisse l\'IA écrire à sa place renonce précisément à ce qui la distingue.',
                'Richard SALANON n\'est pas journaliste et ne prétend pas enseigner le métier à ceux qui l\'exercent : le choix des sujets, l\'enquête de terrain, la relation avec les sources et l\'écriture restent les vôtres. Il forme à l\'usage des outils qui soutiennent ce métier, sur vos documents, vos comptes et vos sujets, et vous oriente vers les fiches du catalogue quand un point mérite plus de temps.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qu\'est-ce qui change, de l\'enquête à la diffusion, dans le quotidien d\'une rédaction ?',
            'legende' => 'Pratique la plus courante avant la formation, apport possible des outils, et part qui reste au journaliste. La dernière colonne ne se délègue ni à un logiciel ni à un assistant.',
            'entetes' => ['Étape du travail', 'Ce qui coince aujourd\'hui', 'Ce que l\'outil ou l\'IA peut faire', 'Ce que le journaliste garde'],
            'lignes'  => [
                ['Veille', 'Des dizaines de groupes, de pages et de fils suivis à l\'œil, une alerte manquée', 'Alertes par mots-clés, regroupement des publications dans un tableau, tri par thème', 'Décider de ce qui mérite une enquête'],
                ['Recherche documentaire', 'Un rapport de deux cents pages reçu la veille d\'une conférence de presse', 'Résumé avec renvois aux pages, repérage des passages qui contredisent les annonces', 'Lire les pages citées, choisir l\'angle'],
                ['Entretien', 'Des heures de réécoute pour retrouver une phrase', 'Transcription automatique, horodatage, recherche dans le texte', 'Vérifier chaque citation sur l\'enregistrement, protéger la source'],
                ['Données publiques', 'Des tableaux mal formés, des calculs refaits trois fois', 'Nettoyage, tri, premiers totaux, graphiques de travail', 'Refaire à la main le chiffre qui fait le titre'],
                ['Vérification', 'Une photo virale reprise avant d\'avoir été contrôlée', 'Recherche d\'image inversée, images clés d\'une vidéo, métadonnées, géolocalisation', 'Conclure, ou renoncer à publier'],
                ['Écriture', 'Le même sujet réécrit pour chaque support, dans l\'urgence', 'Premier jet de déclinaison radio, web, vidéo courte ou chaîne de messagerie', 'L\'exactitude, le ton, la signature'],
                ['Titre et accroche', 'La tentation du titre qui fait cliquer', 'Plusieurs propositions de titres et de chapôs', 'Le choix d\'un titre fidèle au contenu'],
                ['Traduction', 'Une information qui n\'existe qu\'en français dans un pays multilingue', 'Premier jet de traduction ou de sous-titrage', 'La relecture par un locuteur de la langue'],
                ['Commentaires du public', 'Des fils envahis d\'insultes et de rumeurs le soir', 'Filtrage des injures, signalement des messages à examiner', 'La décision de publier, masquer ou répondre'],
                ['Archives', 'Des années d\'articles introuvables, des photos sans légende', 'Recherche dans les archives, indexation, légendes proposées', 'Les droits sur chaque photo, la vérification des légendes'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que ne doivent jamais faire l\'IA et l\'automatisation dans une rédaction, et quels textes le disent ?',
            'intro' => 'Ces limites ne sont pas des précautions de formateur : elles figurent dans les textes qui fondent la profession, dans la loi béninoise et dans les engagements pris par les médias eux-mêmes. Elles sont relues une à une pendant le parcours.',
            'items' => [
                ['titre' => 'Exposer une source', 'texte' => 'La <a href="https://www.snj.fr/declaration-des-devoirs-et-des-droits-des-journalistes/98">Déclaration des devoirs et des droits des journalistes</a> adoptée à Munich en 1971 fait du secret professionnel le septième devoir du journaliste. Au Bénin, l\'article 35 du code de l\'information et de la communication pose qu\'il ne peut divulguer les sources des informations reçues confidentiellement, ni y être contraint. Envoyer l\'enregistrement d\'une source confidentielle à un service de transcription inconnu revient à la confier à un tiers qu\'on ne contrôle pas.'],
                ['titre' => 'Publier ce qui n\'a pas été vérifié', 'texte' => 'L\'article 30 de la <a href="https://sgg.gouv.bj/doc/loi-2015-07/">loi béninoise n° 2015-07</a> veut que le journaliste ne publie que les informations dont l\'origine, la véracité et l\'exactitude sont établies, et que le moindre doute l\'oblige à s\'abstenir ou à émettre des réserves. Une réponse d\'assistant n\'est pas une source : c\'est une piste, qui se vérifie comme un tuyau anonyme.'],
                ['titre' => 'Fabriquer ou retoucher ce qui se présente comme réel', 'texte' => 'Le même article 30 interdit d\'altérer ou de dénaturer une information ou une image. Le septième principe de la <a href="https://rsf.org/fr/la-charte-de-paris-sur-l-ia-et-le-journalisme">Charte de Paris sur l\'IA et le journalisme</a> demande aux médias de s\'abstenir de tout contenu généré qui imite des captures du monde réel ou incarne de façon réaliste des personnes réelles. Les lignes directrices de la BBC limitent les retouches d\'une image d\'information à un recadrage et à de légers réglages de luminosité et de contraste.'],
                ['titre' => 'Cacher au public la part de l\'IA', 'texte' => 'L\'article 13 du code de déontologie et d\'éthique dans les médias au Bénin, actualisé le 21 février 2025, oblige le journaliste à signaler explicitement toute production reconstituée, scénarisée ou fondée sur l\'intelligence artificielle. La Charte de Paris demande en outre à chaque média de tenir un registre public des systèmes d\'IA qu\'il utilise. Le lecteur, l\'auditeur ou le téléspectateur doit savoir ce qu\'il reçoit.'],
                ['titre' => 'Décider à la place de la rédaction', 'texte' => 'Le dixième devoir de la Déclaration de Munich réserve les directives rédactionnelles aux responsables de la rédaction, et la Charte de Paris rappelle que le média reste responsable de chaque contenu publié, IA ou pas. Un outil ne choisit ni les sujets, ni les personnes interrogées, ni ce qui sera tu. La BBC déconseille même de faire préparer par une IA les questions d\'une interview, de peur d\'uniformiser le regard.'],
                ['titre' => 'Plagier, même par machine interposée', 'texte' => 'La Déclaration de Munich interdit le plagiat ; le code de déontologie béninois impose de citer le média dont on relaie l\'information (article 6) et de sourcer toute publication en ligne (article 23). Faire « reformuler » l\'article d\'un confrère par un assistant reste du plagiat, et l\'article 34 de la loi n° 2015-07 subordonne la reproduction d\'une œuvre à l\'autorisation de son auteur.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels textes encadrent une rédaction qui travaille avec l\'IA, au Bénin, en Afrique francophone et en Europe ?',
            'legende' => 'Textes lus le 5 octobre 2026 à la source, dans les documents cités en bas de page. La formation apprend à reconnaître la situation et la règle qui s\'applique ; l\'avis juridique reste celui du conseil du média.',
            'entetes' => ['Texte', 'Ce qu\'il dit d\'utile ici', 'Situation typique en rédaction', 'Geste enseigné'],
            'lignes'  => [
                ['Déclaration de Munich (1971), devoirs 3, 6, 7 et 8', 'Ne publier que des informations d\'origine connue, rectifier, garder le secret des sources, s\'interdire le plagiat', 'Une capture d\'écran sans auteur reçue en message privé', 'Remonter à l\'auteur ou publier avec réserves, ou ne pas publier'],
                ['Charte de Paris sur l\'IA et le journalisme (RSF et 16 partenaires, novembre 2023)', 'Primauté humaine, responsabilité du média, transparence, registre public des outils, traçabilité des contenus, distinction entre authentique et synthétique', 'La direction veut un présentateur virtuel pour le journal du soir', 'Décision écrite de la rédaction, mention au public, inscription au registre'],
                ['Bénin, loi n° 2015-07, articles 30 et 33', 'Information vérifiée, aucune image dénaturée ; rectification spontanée de ce qui se révèle faux ou inexact, droit de réponse', 'Un chiffre erroné publié hier soir sur le site', 'Rectificatif visible et daté, dès que l\'erreur est établie'],
                ['Bénin, loi n° 2015-07, articles 34 et 35', 'Respect du droit d\'auteur ; secret professionnel, sources protégées, aucune contrainte à les révéler', 'Un document confidentiel transmis par un agent public', 'Retirer les métadonnées, ne rien confier à un service en ligne inconnu'],
                ['Code de déontologie et d\'éthique dans les médias au Bénin (21 février 2025)', '33 articles et 12 directives ; mention de l\'IA (article 13), vitesse jamais au détriment de l\'exactitude en ligne (article 21), vérification et recoupement (article 22), sources et propriété intellectuelle en ligne (article 23)', 'Une rumeur à publier « avant les autres » sur la page du média', 'Recouper au moins deux sources crédibles, sinon attendre'],
                ['Bénin, loi n° 2015-07, articles 11 et 12', 'La HAAC veille à la déontologie et peut sanctionner la presse écrite, audiovisuelle et en ligne', 'Un média en ligne qui ignore son cahier des charges', 'Connaître le régulateur et ses obligations avant de publier'],
                ['Union européenne, règlement sur l\'IA, article 50', 'Mention des hypertrucages ; un texte d\'intérêt public généré se signale, sauf relecture humaine et responsabilité éditoriale assumée', 'Une rédaction belge qui publie des brèves rédigées par un outil', 'Relecture nominative avant publication, ou mention'],
                ['Union européenne, règlement sur l\'IA, article 53', 'Les fournisseurs de modèles d\'IA à usage général respectent les réserves de droits exprimées par les titulaires', 'Un éditeur qui refuse que ses archives entraînent des modèles', 'Exprimer la réserve dans un format lisible par machine'],
                ['Union européenne, règlement sur la liberté des médias', 'Protection renforcée des sources, y compris contre les logiciels espions ; applicable pour l\'essentiel depuis le 8 août 2025', 'Un journaliste dont le téléphone est saisi ou visé', 'Cloisonner les contacts sensibles, connaître ses recours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment vérifier une photo, une vidéo ou une note vocale qui circule, avant d\'en parler à l\'antenne ?',
            'paragraphes' => [
                'La vérification commence par une question que l\'on oublie sous la pression : d\'où vient ce contenu, et par quel chemin est-il arrivé jusqu\'à la rédaction ? Un transfert WhatsApp efface l\'auteur, la date et le lieu. La première tâche consiste donc à retrouver la plus ancienne version publiée, avec son compte d\'origine, plutôt qu\'à analyser la copie dégradée reçue en dixième main.',
                'Pour une image, la recherche inversée sur plusieurs moteurs révèle souvent qu\'elle date de plusieurs années ou vient d\'un autre pays. Pour une vidéo, on la découpe en images clés que l\'on cherche à leur tour. Le <a href="https://www.invid-project.eu/tools-and-services/invid-verification-plugin/">module de vérification InVID</a>, extension gratuite pour navigateur conçue par un projet européen pour les journalistes, regroupe ces gestes : images clés, recherche inversée, lecture des métadonnées, filtres d\'analyse des images fixes. Il fait gagner du temps ; il ne conclut pas à la place de la personne qui vérifie.',
                'Vient ensuite le travail de terrain à distance : situer la scène grâce à ses repères (bâtiments, relief, panneaux, couleur des taxis), puis la dater avec la lumière, les ombres, la météo du jour ou une affiche visible. Pour une note vocale attribuée à une personnalité, la démarche la plus sûre reste souvent la plus simple : appeler la personne, son entourage ou l\'institution concernée, et demander l\'enregistrement d\'origine.',
                'La conclusion s\'écrit, même quand elle est négative. Le code de déontologie béninois demande, dans son article 22, de vérifier avant toute publication en ligne et de croiser les informations de plusieurs sources crédibles ; sa directive n° 12 encourage le recours aux sites de vérification. Une fiche de vérification rangée avec le sujet permet de répondre, des mois plus tard, à quiconque demande comment la rédaction a établi un fait.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que doit contenir la fiche de vérification d\'un contenu reçu par la rédaction ?',
            'items' => [
                'Le contenu tel qu\'il a été reçu, la date et l\'heure de réception, et la personne ou le groupe qui l\'a transmis.',
                'La plus ancienne version retrouvée en ligne, avec l\'adresse du compte qui l\'a publiée et la date de publication.',
                'Le résultat des recherches d\'image inversée, et les moteurs utilisés.',
                'Les éléments de lieu et de date relevés dans l\'image ou le son, et la façon dont ils ont été confirmés.',
                'Les personnes contactées pour confirmer ou démentir, avec l\'heure de l\'appel et leur réponse.',
                'Les indices d\'une création ou d\'une retouche par l\'IA, et les outils de provenance consultés.',
                'La conclusion : authentique, sorti de son contexte, retouché, généré, ou impossible à établir.',
                'La décision éditoriale qui en découle, et le nom de la personne qui l\'a prise.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on détecter de façon fiable une image, une vidéo ou une voix générées par l\'IA ?',
            'paragraphes' => [
                'Pas avec un seul outil, et c\'est la première chose que la formation désapprend. Les détecteurs en ligne donnent un pourcentage qui rassure, mais ils se trompent dans les deux sens : ils accusent des photos authentiques compressées par les messageries, et laissent passer des images générées par un modèle récent. Un résultat de détecteur est un indice parmi d\'autres, jamais une preuve publiable.',
                'Les signaux de provenance aident davantage quand ils existent. La <a href="https://c2pa.org/">coalition C2PA</a> publie un standard technique ouvert, appelé Content Credentials, qui attache à un fichier l\'historique de sa création et de ses modifications. Certains générateurs d\'images l\'apposent, comme certains appareils photo et logiciels de retouche. Mais ces informations disparaissent dès qu\'une image est capturée à l\'écran ou recompressée par une messagerie : leur absence ne prouve rien.',
                'Le parcours fait donc travailler un faisceau d\'indices : incohérences visuelles (mains, textes illisibles, reflets, ombres impossibles), voix trop régulière ou respiration absente, contexte invraisemblable, absence de tout autre témoin d\'un événement censé être public. Il fait surtout travailler la vérification classique, qui reste la plus solide : retrouver l\'origine, contacter les personnes, chercher d\'autres images de la même scène. En Europe, l\'article 50 du règlement sur l\'IA oblige ceux qui diffusent un hypertrucage à le signaler ; ceux qui veulent tromper, eux, ne le signaleront pas.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils une rédaction utilise-t-elle pour enquêter, vérifier et produire, et quelle est leur limite ?',
            'legende' => 'La formation se fait sur les outils déjà disponibles dans la rédaction et sur des outils gratuits. Les abonnements éventuels restent payés par le média à leurs éditeurs et ne sont jamais compris dans le devis.',
            'entetes' => ['Famille d\'outils', 'Exemples', 'Usage en rédaction', 'Limite à connaître'],
            'lignes'  => [
                ['Assistants conversationnels', 'ChatGPT, Claude, Gemini, Copilot', 'Résumer un document, proposer un plan, décliner un sujet, préparer une traduction', 'Inventent des références ; les offres grand public peuvent réutiliser les données saisies, voir le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>'],
                ['Transcription', 'Logiciels installés sur l\'ordinateur, services en ligne, fonctions des suites bureautiques', 'Retrouver une citation, préparer un verbatim, sous-titrer', 'Le fichier audio part chez un tiers si le service est en ligne ; accents et langues nationales mal reconnus'],
                ['Recherche d\'image inversée', 'Google Lens, Bing, Yandex, TinEye', 'Retrouver la première publication d\'une photo', 'Chaque moteur a ses angles morts : on en interroge plusieurs'],
                ['Analyse de vidéo', 'Module de vérification InVID', 'Images clés, métadonnées, filtres d\'analyse', 'Les plateformes retirent souvent les métadonnées d\'origine'],
                ['Cartographie', 'Google Earth, cartes satellites, imagerie de rue quand elle existe', 'Situer une scène, mesurer une distance, dater par la lumière', 'Imagerie parfois ancienne dans les villes secondaires'],
                ['Provenance', 'Content Credentials (C2PA), filigranes des générateurs', 'Lire l\'historique d\'un fichier quand il est présent', 'Disparaît à la capture d\'écran ou à la recompression'],
                ['Tableur et données', 'Excel, Google Sheets', 'Nettoyer, trier, calculer, vérifier un chiffre officiel', 'Un calcul fait par l\'IA se refait toujours à la main'],
                ['Messagerie chiffrée', 'Signal, WhatsApp avec vérification en deux étapes', 'Échanger avec une source, recevoir un document', 'La sauvegarde dans le nuage et le téléphone non verrouillé annulent le chiffrement'],
                ['Diffusion', 'Site du média, chaînes WhatsApp, réseaux sociaux, plateformes de podcast', 'Publier, programmer, archiver', 'Au-delà de 1 000 messages de service par mois et par numéro, la plateforme de Meta facture les envois depuis le 1er octobre 2026'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment protéger ses sources quand tout passe par le téléphone et le nuage ?',
            'paragraphes' => [
                'Le secret des sources se jouait autrefois dans un carnet et une cabine téléphonique. Il se joue aujourd\'hui dans un téléphone qui synchronise ses contacts, ses photos et ses messages vers des serveurs, dans des outils de transcription en ligne et dans des assistants qui conservent l\'historique des conversations. Chaque copie supplémentaire est une porte de plus. Le parcours commence par un inventaire : où se trouvent, concrètement, le nom, le numéro et les enregistrements d\'une source sensible ?',
                'Viennent ensuite des gestes simples mais tenus : double authentification sur la messagerie et les comptes de la rédaction, téléphone verrouillé par un code solide, messagerie chiffrée pour les échanges sensibles, sauvegarde chiffrée ou désactivée pour les conversations concernées, métadonnées retirées des documents avant publication. Rien de tout cela n\'exige un budget ; tout exige une discipline. Les réflexes de sécurité de base relèvent de la fiche <a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a> ; ici, on les applique au cas particulier de la source.',
                'Le droit protège, mais il ne remplace pas ces gestes. Au Bénin, l\'article 35 de la loi n° 2015-07 garantit que le journaliste ne peut être contraint de révéler ses sources, et l\'article 29 du code de déontologie de 2025 ajoute qu\'il ne doit faire l\'objet d\'aucune pression ni poursuite à ce titre. Dans l\'Union européenne, le <a href="https://commission.europa.eu/strategy-and-policy/priorities-2019-2024/new-push-european-democracy/protecting-democracy/european-media-freedom-act_fr">règlement européen sur la liberté des médias</a>, applicable pour l\'essentiel depuis le 8 août 2025, renforce la protection des sources, y compris contre les logiciels de surveillance intrusifs.',
                'Reste l\'IA. Coller dans un assistant grand public le compte rendu d\'un entretien confidentiel, avec le nom de la personne et sa fonction, c\'est confier la source à une entreprise étrangère dont on ne connaît ni la durée de conservation ni les usages. La règle enseignée tient en une phrase : tout ce qui permettrait d\'identifier une source reste hors de tout outil en ligne, et l\'on travaille sur une version anonymisée quand on a besoin d\'aide.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Droit d\'auteur : que peut reprendre la rédaction, et que peuvent prendre les robots d\'IA à la rédaction ?',
            'paragraphes' => [
                'La question se pose dans les deux sens. Dans le premier, la rédaction reprend : une photo trouvée sur un réseau social, la vidéo d\'un témoin, l\'enquête d\'un confrère. L\'article 34 de la loi béninoise n° 2015-07 subordonne la reproduction et la diffusion d\'une œuvre à l\'autorisation de son auteur lorsque la loi l\'exige, et le code de déontologie impose de citer le média dont on relaie l\'information. Une photo publique n\'est pas une photo libre : on demande l\'accord de l\'auteur, on le crédite, et l\'on garde la trace de sa réponse.',
                'Dans le second sens, ce sont les robots d\'IA qui prennent. Les articles, les photos et les archives d\'un média servent à entraîner des modèles et à alimenter des réponses qui dispensent parfois le lecteur de cliquer. Le Digital News Report 2026 relève que 42 % des personnes qui s\'informent par un assistant conversationnel disent cliquer toujours ou souvent vers la source d\'origine : les autres s\'arrêtent à la réponse. Le dixième principe de la Charte de Paris demande que l\'accès des systèmes d\'IA aux contenus journalistiques passe par des accords formels, avec crédit des sources et juste compensation.',
                'En Europe, l\'article 53 du règlement sur l\'IA oblige les fournisseurs de modèles d\'IA à usage général à mettre en place une politique de respect du droit d\'auteur, et notamment à respecter la réserve de droits qu\'un titulaire exprime au titre de l\'article 4, paragraphe 3, de la directive (UE) 2019/790. Un éditeur peut donc exprimer, dans un format lisible par les machines, son refus de voir ses contenus aspirés. La formation montre où se trouve cette déclaration sur le site du média, et pourquoi elle se décide en direction, pas au service technique seul.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon le média, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Radio communautaire, à Parakou', 'probleme' => 'Les auditeurs envoient chaque jour des notes vocales et des vidéos par WhatsApp, l\'animateur les commente à l\'antenne en direct, et le journal se prépare en trois langues avec deux personnes.', 'solution' => 'Règle écrite : aucun contenu reçu n\'est cité à l\'antenne sans fiche de vérification ; transcription des journaux pour le site avec relecture par un locuteur de chaque langue ; numéro de la radio protégé par la vérification en deux étapes.'],
                ['secteur' => 'Média en ligne, à Cotonou', 'probleme' => 'La rédaction publie vite sur son site et sa page, reprend des captures d\'écran sans auteur, et corrige ses erreurs en supprimant l\'article sans rien dire.', 'solution' => 'Fiche de vérification obligatoire avant toute reprise, rectificatif visible et daté au lieu de la suppression, crédit systématique du média relayé, et charte IA d\'une page publiée sur le site.'],
                ['secteur' => 'Quotidien, à Abidjan', 'probleme' => 'Les journalistes reçoivent des rapports publics volumineux la veille des conférences de presse, et quinze ans d\'archives dorment dans des dossiers que personne ne sait interroger.', 'solution' => 'Méthode de dépouillement avec renvoi à la page, tableau des données budgétaires recalculées à la main, et moteur de recherche interne dans les archives, sans envoyer les fichiers à un service grand public.'],
                ['secteur' => 'Cellule de vérification, à Dakar', 'probleme' => 'En période électorale, de faux audios attribués à des responsables politiques circulent plus vite que les démentis, et la cellule doit choisir ce qu\'elle vérifie.', 'solution' => 'Grille de priorité fondée sur la diffusion et le risque, protocole de vérification des voix (rappel, enregistrement d\'origine, comparaison), et articles de vérification qui expliquent la méthode au public.'],
                ['secteur' => 'Web TV, à Lomé', 'probleme' => 'L\'équipe illustre ses sujets avec des images trouvées en ligne et s\'apprête à utiliser un présentateur généré pour les flashs de la nuit.', 'solution' => 'Inventaire des droits sur chaque image, demandes d\'autorisation aux auteurs, décision écrite de la rédaction sur le présentateur généré, mention permanente à l\'écran et inscription au registre des outils.'],
                ['secteur' => 'Rédaction régionale, à Liège', 'probleme' => 'La direction veut publier des brèves sportives et météo rédigées automatiquement, et les journalistes craignent pour la crédibilité du titre.', 'solution' => 'Analyse de l\'article 50 du règlement européen sur l\'IA, relecture nominative de chaque brève ou mention explicite, charte négociée avec la société des journalistes, et maîtrise de l\'IA de toute l\'équipe au titre de l\'article 4.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés et datés une rédaction doit-elle connaître en 2026 ?',
            'items' => [
                ['valeur' => '10 %', 'libelle' => 'Part des personnes interrogées qui s\'informent chaque semaine par un assistant conversationnel (7 % un an plus tôt), sur 48 marchés ; 16 % chez les moins de 35 ans', 'source' => 'Reuters Institute, Digital News Report 2026, 16 juin 2026', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary'],
                ['valeur' => '20 % contre 37 %', 'libelle' => 'Confiance accordée aux réponses des assistants conversationnels, comparée à la confiance dans l\'information en général, elle-même au plus bas depuis 2015', 'source' => 'Reuters Institute, Digital News Report 2026', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary'],
                ['valeur' => '62 %', 'libelle' => 'Part moyenne des personnes inquiètes de distinguer le vrai du faux en ligne, en hausse de 4 points sur un an', 'source' => 'Reuters Institute, Digital News Report 2026', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary'],
                ['valeur' => '33 articles et 12 directives', 'libelle' => 'Contenu du code de déontologie et d\'éthique dans les médias au Bénin actualisé le 21 février 2025, qui traite pour la première fois de l\'IA et de la presse en ligne', 'source' => 'ODEM, décision DAS n° 2025-001/AS, publiée par la HAAC', 'url' => 'https://haac.bj/storage/uploads/code_deontologie.pdf'],
                ['valeur' => '89', 'libelle' => 'Médias en ligne (50 titres de presse écrite, 13 radios et 26 télévisions sur internet) avec lesquels la HAAC a signé des conventions le 1er octobre 2026', 'source' => 'HAAC, actualité du 1er octobre 2026', 'url' => 'https://haac.bj/actualite/201'],
                ['valeur' => '8 août 2025', 'libelle' => 'Date d\'application de la plupart des dispositions du règlement européen sur la liberté des médias, dont la protection des sources contre les logiciels espions', 'source' => 'Commission européenne, page du règlement européen sur la liberté des médias', 'url' => 'https://commission.europa.eu/strategy-and-policy/priorities-2019-2024/new-push-european-democracy/protecting-democracy/european-media-freedom-act_fr'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type pour une rédaction, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment le parcours se prépare-t-il avec la rédaction, puis se déroule-t-il ?',
            'items' => [
                ['titre' => 'Un appel avec la direction de la rédaction', 'duree' => '30 minutes', 'texte' => 'Le support (papier, radio, télévision, site, réseaux), la taille de l\'équipe, les langues de diffusion, les outils en place et les incidents récents : rumeur reprise, photo contestée, source inquiète. Cet appel, le cadrage et le devis ne sont pas facturés.'],
                ['titre' => 'La revue des pratiques', 'duree' => '1 heure', 'texte' => 'Un entretien avec le rédacteur en chef et un ou deux journalistes permet de voir comment circulent les contenus reçus, qui publie sur les réseaux et où sont stockés les enregistrements. Aucune source n\'est demandée ni montrée.'],
                ['titre' => 'Le choix des cas d\'exercice', 'duree' => 'Avant la session', 'texte' => 'Les exercices partent de contenus publics : anciens contenus viraux du pays, documents officiels, sujets déjà publiés. Aucun dossier en cours d\'enquête n\'est utilisé, sauf demande expresse de la rédaction et en séance fermée.'],
                ['titre' => 'Un calendrier qui respecte le bouclage', 'duree' => 'Selon le support', 'texte' => 'Une radio se forme hors des tranches d\'information, un quotidien en dehors des heures de bouclage, un média en ligne par équipes successives pour que le site reste alimenté.'],
                ['titre' => 'Les séances sur vos supports', 'duree' => 'Pendant chaque demi-journée', 'texte' => 'Chaque exercice produit un document que la rédaction garde : fiche de vérification, grille de relecture, protocole de transcription, charte IA, procédure de rectification.'],
                ['titre' => 'La séance de suivi', 'duree' => '2 heures, à distance', 'texte' => 'Quatre semaines plus tard, on relit quelques contenus publiés, on reprend les cas difficiles, et l\'on ajuste la charte avant de décider de la suite.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'En rédaction, entre médias, à distance ou en hybride : quel format choisir ?',
            'legende' => 'Le format se fixe lors du premier appel, selon le support, l\'horaire de l\'actualité et la confidentialité des exercices.',
            'entetes' => ['Format', 'Pour qui', 'Rythme habituel', 'Ce qu\'il faut prévoir'],
            'lignes'  => [
                ['Intra, dans la rédaction', 'Une rédaction de presse, de radio, de télévision ou de média en ligne', 'Quatre demi-journées hors des heures de bouclage', 'Une salle avec connexion, les comptes et outils réels de la rédaction, des journalistes formés par roulement'],
                ['Inter, entre plusieurs médias', 'Association de journalistes, réseau de radios communautaires, union de médias en ligne', 'Deux journées en salle', 'Exercices sur des contenus publics ; aucun sujet en cours d\'un média n\'est montré aux autres'],
                ['À distance', 'Correspondants dispersés, pigistes, rédactions hors de Cotonou ou en Europe', 'Quatre séances de deux à trois heures', 'Partage d\'écran, contenus d\'exercice envoyés la veille, connexion stable pour les vidéos'],
                ['Hybride', 'Rédaction qui lance une cellule de vérification ou une offre en ligne', 'Une journée sur place, puis des séances courtes à distance', 'Vérification et charte sur place, production et suivi en visioconférence'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation pour une rédaction, et comment la régler ?',
            'intro'      => 'Le prix se fixe sur devis, après le premier appel, et aucun tarif n\'est affiché. Les modes de règlement acceptés sont Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Les abonnements aux outils restent à la charge du média, payés directement à leurs éditeurs.',
            'items'      => [
                ['offre' => 'Parcours rédaction', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos supports et vos outils', 'Fiche de vérification, grille de relecture, charte IA, procédure de rectification', 'Séance de suivi à distance']],
                ['offre' => 'Atelier vérification', 'prix' => 'Sur devis', 'inclus' => ['Une journée centrée sur les photos, vidéos, audios et contenus générés', 'Pour une cellule de vérification ou une équipe web']],
                ['offre' => 'Session entre médias', 'prix' => 'Sur devis', 'inclus' => ['Deux journées pour des journalistes de plusieurs rédactions', 'Exercices sur des contenus publics', 'Coût partagé entre les médias ou porté par leur association']],
                ['offre' => 'Demi-journée de direction', 'prix' => 'Sur devis', 'inclus' => ['Pour le directeur de publication et le rédacteur en chef', 'Charte IA, registre des outils, responsabilités, droits sur les archives']],
            ],
            'variations' => [
                'Le nombre de journalistes et la nécessité de les former par roulement pour ne pas vider l\'antenne ou le site.',
                'Le nombre de demi-journées retenues et le poids donné à la vérification ou à la production.',
                'Le lieu : la rédaction, une salle louée, une ville de l\'intérieur, un autre pays, ou la distance.',
                'Les langues de diffusion du média, qui multiplient les exercices de traduction et de relecture.',
                'La préparation : anciens contenus viraux du pays à rassembler, documents publics à choisir, outils à installer.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Une rédaction peut-elle faire financer la formation de ses journalistes ?',
            'paragraphes' => [
                'Parfois, et toujours sous conditions qui se vérifient avant de signer. Au Bénin, la loi n° 2015-07 prévoit une aide de l\'État à la presse privée, ouverte aux quotidiens, aux périodiques, aux radios, aux télévisions, à la presse en ligne et aux projets d\'intérêt commun à la corporation (articles 37 et 38). Un fonds d\'appui au développement des médias est géré par un comité présidé par un représentant de la HAAC, qui fixe par décision ses modalités d\'accès (article 39). Une session commune à plusieurs médias peut mériter la question ; seul le comité y répond.',
                'Le salarié d\'un média reste aussi un salarié comme un autre : les fonds alimentés par les taxes de formation de l\'employeur peuvent s\'appliquer. Au Bénin, le FODEFCA agit selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> ; en Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> réserve son plan de formation aux entreprises à jour de leurs taxes et ne paie qu\'après contrôle ; au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre plusieurs guichets. Le dossier, programme et devis joints, part avant la session.',
                'En France, les OPCO ne financent que des prestataires certifiés Qualiopi, obligation rappelée par <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> depuis le 1er janvier 2022. Richard SALANON n\'affiche pas cette certification, ni l\'agrément d\'un fonds africain : aucune prise en charge n\'est promise, et le budget se prévoit sur les ressources propres du média ou de l\'association. Programme, feuilles de présence et productions des exercices sont remis dans tous les cas, pour appuyer une demande que le média ferait lui-même.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne jamais confier l\'enregistrement d\'une source confidentielle à un service de transcription en ligne ?',
            'texte' => 'Parce que le fichier quitte la rédaction pour les serveurs d\'une entreprise que le journaliste ne connaît pas, avec la voix, les noms prononcés, parfois le lieu et l\'heure. Selon l\'offre souscrite, l\'enregistrement peut être conservé, relu pour améliorer le service ou exposé lors d\'une fuite. Le journaliste ne peut plus garantir ce que l\'article 35 de la loi béninoise n° 2015-07 et le septième devoir de la Déclaration de Munich lui demandent de garantir. La parade est simple : un outil de transcription installé sur l\'ordinateur, sans envoi en ligne, pour les entretiens sensibles, ou une transcription faite à la main. Les outils en ligne restent permis pour les conférences de presse et les déclarations publiques.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les rédactions qui adoptent l\'IA, et comment les éviter ?',
            'intro' => 'Ces erreurs reviennent d\'une rédaction à l\'autre, quel que soit le pays. Aucune n\'est technique : chacune tient à une règle qui n\'a pas été écrite.',
            'items' => [
                ['titre' => 'Citer l\'assistant comme on cite un confrère', 'texte' => '« Selon ChatGPT » n\'a aucune valeur de source. On remonte au document, à la personne ou à la base de données d\'où l\'information est censée venir, et l\'on cite celle-là, ou rien.'],
                ['titre' => 'Faire confiance à la transcription', 'texte' => 'La machine transforme un nom propre, inverse une négation ou invente un mot quand l\'accent ou le bruit la gênent. Toute citation publiée se réécoute sur l\'enregistrement.'],
                ['titre' => 'Laisser la vitesse décider', 'texte' => 'Le média concurrent a publié, il faut suivre. L\'article 21 du code de déontologie béninois interdit précisément de sacrifier l\'exactitude à la vitesse en ligne. Une fiche de vérification remplie prend dix minutes ; un démenti public coûte des mois de crédibilité.'],
                ['titre' => 'Supprimer au lieu de rectifier', 'texte' => 'Effacer un article erroné laisse circuler les captures d\'écran sans correction. Le rectificatif reste en ligne, visible, daté, avec ce qui a changé, comme le demandent l\'article 33 de la loi n° 2015-07 et l\'article 21 du code de déontologie.'],
                ['titre' => 'Illustrer un fait réel par une image générée', 'texte' => 'Une « illustration » réaliste d\'une inondation ou d\'une manifestation devient une fausse photo dès qu\'elle est partagée sans sa légende. On réserve l\'image générée aux sujets d\'illustration manifestement non réalistes, avec mention, et jamais pour un événement.'],
                ['titre' => 'Une charte que personne n\'a lue', 'texte' => 'La charte IA rédigée par la direction et rangée dans un dossier ne change rien. Elle tient sur une page, se discute avec les journalistes, s\'affiche dans la rédaction et se relit à chaque incident.'],
                ['titre' => 'Des comptes au nom d\'un journaliste', 'texte' => 'La page du média, la chaîne WhatsApp ou le compte de l\'outil de transcription ouverts avec l\'adresse personnelle d\'un reporter qui part : la rédaction perd l\'accès, l\'historique et parfois des enregistrements sensibles. Chaque compte appartient au média, avec deux administrateurs.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Radio, langues, réseau, régulation : que change le pays où l\'on informe ?',
            'paragraphes' => [
                'En Afrique de l\'Ouest, la radio reste un média central, et l\'information circule massivement par les messageries. La fiche que <a href="https://rsf.org/fr/pays-b%C3%A9nin">Reporters sans frontières consacre au Bénin</a> compte au moins 70 radios dans le pays. Les contenus à vérifier arrivent donc souvent sous forme de notes vocales, de vidéos compressées et de captures, dans plusieurs langues. Les outils de transcription et de traduction reconnaissent mal le fon, le yoruba, le wolof ou le dioula : la formation prévoit toujours un locuteur dans la boucle, et n\'enseigne jamais à publier une traduction automatique telle quelle.',
                'Le cadre juridique pèse aussi sur la façon de travailler en ligne : le code du numérique encadre la diffusion d\'informations par voie électronique, et chaque publication engage son auteur. Pour un journaliste, la meilleure protection reste la méthode : une fiche de vérification, des sources nommées quand c\'est possible, des réserves explicites quand ce ne l\'est pas, et un rectificatif rapide en cas d\'erreur.',
                'Le régulateur s\'intéresse de près au numérique. La <a href="https://haac.bj/">HAAC</a> propose désormais en ligne l\'enregistrement des médias en ligne, la carte de presse et le dépôt légal ; elle a signé le 1er octobre 2026 des conventions avec 89 médias en ligne, et a ouvert le 5 octobre 2026 un séminaire de trois jours sur le droit des contenus publiés dans les médias en ligne et sur les réseaux sociaux. Connaître ses obligations fait partie du métier, au même titre que la vérification.',
                'En Europe, le paysage est différent mais les questions se ressemblent. En France, le <a href="https://cdjm.org/">Conseil de déontologie journalistique et de médiation</a>, instance tripartite que tout citoyen peut saisir, rend des avis publics sur des actes journalistiques. Dans l\'Union, l\'obligation de maîtrise de l\'IA prévue par l\'article 4 du règlement sur l\'IA s\'applique depuis le 2 février 2025, avec contrôle et sanctions possibles depuis le 3 août 2026 : une rédaction qui utilise ces outils doit former ses équipes à leurs limites.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours pour une rédaction ?',
            'legende' => 'Chaque formation a sa fiche, avec son programme complet. Le parcours de cette page installe les règles de la rédaction ; les fiches approfondissent un outil ou une compétence.',
            'entetes' => ['Formation', 'Ce qu\'elle apporte à la rédaction', 'Qui l\'envoyer suivre', 'Durée indiquée sur la fiche'],
            'lignes'  => [
                ['<a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a>', 'Visuels, vidéos courtes, voix et musiques générés, droits attachés à chaque outil', 'Équipe web, vidéastes, responsables des réseaux sociaux du média', 'Deux jours en quatre demi-journées, ou un jour resserré'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Données personnelles, secret, biais et droit d\'auteur pour chaque salarié qui utilise un assistant', 'Toute la rédaction, et l\'administration du média', 'Un jour de socle, ou deux jours'],
                ['<a href="/formations/prompt-engineering">Prompt engineering professionnel</a>', 'Consignes fiables pour résumer, extraire et décliner, et évaluation des réponses', 'Secrétaires de rédaction, journalistes de données', 'Deux jours, ou six séances de deux heures à distance'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Hameçonnage, mots de passe, double authentification, appareils perdus', 'Tous ceux qui détiennent des contacts ou des comptes du média', 'Une journée, puis un suivi de deux heures'],
                ['<a href="/formations/rag-chatbot-documents">RAG : chatbot sur vos documents internes</a>', 'Interroger les archives de la rédaction avec citations, sans les envoyer à un service grand public', 'Documentalistes, rédacteurs en chef, équipe technique', 'Trois jours en six demi-journées, dont une journée technique facultative'],
                ['<a href="/formations/referencement-ia-geo">Référencement IA (GEO)</a>', 'Être cité, avec un lien, par les moteurs de réponse qui résument l\'actualité', 'Responsable du site et de l\'audience', 'Deux jours, ou un jour resserré'],
                ['<a href="/formations/data-literacy">Décider avec les données</a>', 'Lire, questionner et vérifier les chiffres avant d\'en faire un titre', 'Journalistes économiques et politiques', 'Deux jours en quatre demi-journées, puis deux heures de suivi'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former votre rédaction avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà formé des journalistes et des professionnels des médias, sur leurs propres outils : les téléphones de la rédaction, les assistants déjà utilisés, les comptes du média, les logiciels de transcription et de montage disponibles. Il n\'est pas journaliste, ne juge pas une ligne éditoriale et ne dira jamais quoi publier. Son métier de développeur le place du côté des outils : il sait ce que devient un fichier envoyé à un service en ligne, comment un assistant fabrique une référence plausible et pourquoi une métadonnée disparaît à la capture d\'écran.',
                'Il compte ' . $ans . ' ans d\'expérience dans le numérique, une formation à ' . fait('formation')['nom'] . ' achevée en ' . fait('formation')['annee'] . ', plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées selon ses propres décomptes et des missions dans ' . count((array) fait('pays_travailles')) . ' pays. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Aucun éditeur ne l\'a certifié, et la formation ne vend aucun logiciel.',
                'Son parcours se lit sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et l\'organisation de ses sessions sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>. Les autres formations sur l\'IA sont rangées dans le domaine <a href="/formations/domaine/intelligence-artificielle">intelligence artificielle</a>, et le catalogue complet sur la page des <a href="/formations/">formations</a>. Si le média veut un outil plutôt qu\'une formation, par exemple une recherche dans ses archives, cela relève de l\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre rédaction ?',
            'texte' => 'L\'IA n\'a changé ni la Déclaration de Munich ni l\'article 30 du code de l\'information : on ne publie que ce dont l\'origine est connue et vérifiée. Elle a changé le volume de ce qu\'il faut vérifier et le nombre de portes par lesquelles une source peut fuir. Écrivez d\'abord la charte, la fiche de vérification et la règle sur les enregistrements sensibles ; laissez ensuite l\'outil transcrire, résumer et décliner, et gardez toujours la signature.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre rédaction à l\'IA et à la vérification, sans rien céder sur la déontologie ?',
            'texte'  => 'Indiquez le support, la taille de la rédaction, les langues de diffusion, les outils en place et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté à votre média et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour ma rédaction'],
        ],
    ],

    'faq' => [
        ['q' => 'La formation apprend-elle le métier de journaliste ?', 'r' => 'Non. Elle s\'adresse à des journalistes et à des équipes de médias qui connaissent leur métier, et porte sur l\'usage des outils numériques et de l\'IA dans ce métier : recherche, vérification, production, diffusion, sécurité des sources. Le choix des sujets, l\'enquête et l\'écriture restent ceux de la rédaction.'],
        ['q' => 'Peut-on utiliser ChatGPT ou un autre assistant pour écrire un article ?', 'r' => 'Pour un premier jet de déclinaison, une proposition de plan ou une reformulation, oui, à condition que chaque fait soit vérifié et que le texte final soit relu et signé par un journaliste. L\'assistant ne remplace ni le reportage ni la vérification, et sa réponse ne se cite jamais comme une source.'],
        ['q' => 'Faut-il signaler au public l\'usage de l\'IA ?', 'r' => 'Au Bénin, l\'article 13 du code de déontologie de 2025 demande de signaler explicitement toute production fondée sur l\'IA. En Europe, l\'article 50 du règlement sur l\'IA impose de signaler les hypertrucages. Le parcours aide la rédaction à écrire une règle claire : quoi signaler, où, et avec quels mots.'],
        ['q' => 'Un détecteur d\'images générées suffit-il pour conclure ?', 'r' => 'Non. Les détecteurs se trompent dans les deux sens, surtout sur des images recompressées par les messageries. Leur résultat s\'ajoute à la recherche de l\'origine, aux indices visuels, aux signaux de provenance et aux appels aux personnes concernées. La conclusion se prend sur l\'ensemble, et s\'écrit dans la fiche de vérification.'],
        ['q' => 'Comment vérifier une note vocale attribuée à une personnalité ?', 'r' => 'En cherchant d\'abord l\'enregistrement d\'origine et son premier diffuseur, puis en contactant la personne, son entourage ou son institution. On compare avec des enregistrements authentiques, on note les incohérences, et l\'on renonce à diffuser tant que l\'origine n\'est pas établie, comme le veut l\'article 30 de la loi n° 2015-07.'],
        ['q' => 'Peut-on transcrire ses entretiens avec un outil en ligne ?', 'r' => 'Pour une conférence de presse ou une déclaration publique, oui. Pour une source confidentielle, non : l\'enregistrement partirait chez un tiers. On utilise alors un logiciel de transcription installé sur l\'ordinateur, sans envoi en ligne, ou l\'on transcrit à la main.'],
        ['q' => 'Notre radio diffuse en langues nationales : la formation en tient-elle compte ?', 'r' => 'Oui. Les outils de transcription et de traduction reconnaissent encore mal plusieurs langues nationales. Le parcours apprend à préparer un texte simple pour un locuteur qui traduit et relit, à sous-titrer avec relecture, et à ne jamais diffuser une traduction automatique telle quelle.'],
        ['q' => 'Que faire quand on a publié une information fausse ?', 'r' => 'La rectifier vite et visiblement, sans supprimer l\'article : l\'article 33 de la loi n° 2015-07 impose une rectification spontanée, et l\'article 21 du code de déontologie la veut instantanée et transparente en ligne. Le rectificatif indique ce qui a changé et quand.'],
        ['q' => 'Les robots d\'IA peuvent-ils utiliser nos articles librement ?', 'r' => 'En Europe, les fournisseurs de modèles d\'IA à usage général doivent respecter la réserve de droits exprimée par un titulaire dans un format lisible par machine (article 53 du règlement sur l\'IA). La formation montre où cette réserve s\'exprime sur le site du média, et pourquoi la décision revient à la direction.'],
        ['q' => 'Faut-il acheter des logiciels avant la formation ?', 'r' => 'Non. Elle se fait sur les outils déjà présents dans la rédaction et sur des outils gratuits de vérification. Elle aide ensuite à décider si un abonnement se justifie, au vu des données confiées, des langues couvertes et du temps réellement gagné.'],
        ['q' => 'Les pigistes et les correspondants peuvent-ils suivre la formation ?', 'r' => 'Oui, à distance en particulier, en quatre séances de deux à trois heures. Une association de journalistes ou un réseau de radios peut aussi organiser une session commune, avec des exercices sur des contenus publics.'],
        ['q' => 'La formation peut-elle être prise en charge ?', 'r' => 'Cela dépend du pays et du fonds : fonds d\'appui au développement des médias et FODEFCA au Bénin, FDFP en Côte d\'Ivoire, 3FPT au Sénégal, sous leurs propres conditions. En France, les OPCO exigent la certification Qualiopi, que Richard SALANON n\'affiche pas. Aucune prise en charge n\'est promise.'],
    ],

    'sources' => [
        ['titre' => 'Syndicat national des journalistes, Déclaration des devoirs et des droits des journalistes (Munich, 1971)', 'url' => 'https://www.snj.fr/declaration-des-devoirs-et-des-droits-des-journalistes/98', 'date' => '2026-10-05'],
        ['titre' => 'Reporters sans frontières, la Charte de Paris sur l\'IA et le journalisme (novembre 2023)', 'url' => 'https://rsf.org/fr/la-charte-de-paris-sur-l-ia-et-le-journalisme', 'date' => '2026-10-05'],
        ['titre' => 'BBC Editorial Guidelines, Guidance: The use of Artificial Intelligence', 'url' => 'https://www.bbc.co.uk/editorialguidelines/guidance/use-of-artificial-intelligence', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2015-07 du 20 mars 2015 portant code de l\'information et de la communication (articles 11, 12, 23, 24, 27, 29, 30, 33 à 35, 37 à 39)', 'url' => 'https://sgg.gouv.bj/doc/loi-2015-07/', 'date' => '2026-10-05'],
        ['titre' => 'ODEM, Code de déontologie et d\'éthique dans les médias au Bénin, actualisé le 21 février 2025 (publié par la HAAC)', 'url' => 'https://haac.bj/storage/uploads/code_deontologie.pdf', 'date' => '2026-10-05'],
        ['titre' => 'HAAC, site officiel (services en ligne aux médias)', 'url' => 'https://haac.bj/', 'date' => '2026-10-05'],
        ['titre' => 'HAAC, régulation des médias en ligne : conventions avec 89 exploitants de sites internet (1er octobre 2026)', 'url' => 'https://haac.bj/actualite/201', 'date' => '2026-10-05'],
        ['titre' => 'HAAC, séminaire sur le droit des contenus publiés dans les médias en ligne et sur les réseaux sociaux (5 octobre 2026)', 'url' => 'https://haac.bj/actualite/203', 'date' => '2026-10-05'],
        ['titre' => 'Reporters sans frontières, fiche pays Bénin', 'url' => 'https://rsf.org/fr/pays-b%C3%A9nin', 'date' => '2026-10-05'],
        ['titre' => 'Reuters Institute, Digital News Report 2026, résumé (16 juin 2026)', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 50 du règlement sur l\'IA, version consolidée au 27 juillet 2026', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 53 du règlement sur l\'IA (politique de respect du droit d\'auteur), version consolidée au 27 juillet 2026', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-53', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, le règlement européen sur la liberté des médias', 'url' => 'https://commission.europa.eu/strategy-and-policy/priorities-2019-2024/new-push-european-democracy/protecting-democracy/european-media-freedom-act_fr', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'InVID, module de vérification pour navigateur', 'url' => 'https://www.invid-project.eu/tools-and-services/invid-verification-plugin/', 'date' => '2026-10-05'],
        ['titre' => 'C2PA, standard Content Credentials sur la provenance des contenus', 'url' => 'https://c2pa.org/', 'date' => '2026-10-05'],
        ['titre' => 'Conseil de déontologie journalistique et de médiation (CDJM)', 'url' => 'https://cdjm.org/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['contenu-avec-ia', 'ia-ethique-conformite', 'prompt-engineering', 'cybersecurite-employes', 'rag-chatbot-documents'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
