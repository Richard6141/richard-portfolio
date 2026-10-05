<?php
// ============================================================
// data/formations/linkedin-reseaux-sociaux.php · Fiche formation « LinkedIn
// et réseaux sociaux d'entreprise » (vague 1B, lot B, domaine
// marketing-visibilite). Aucune ancienne page. Angle propre : profils des
// dirigeants et des salariés, page entreprise et ses rôles, ligne éditoriale,
// calendrier, formats (texte, document en carrousel, vidéo), régularité,
// interactions et mesure ; LinkedIn d'abord, puis Facebook, Instagram et
// TikTok selon la cible ; droit à l'image et mention des contenus sponsorisés.
// Les sœurs gardent leur sujet : prospection et ciblage des comptes
// (marketing-digital-b2b), production de contenus avec l'IA (contenu-avec-ia),
// campagnes payantes (publicite-meta-google-ads), e-mails (emailing-automation).
// Faits externes relevés le 05/10/2026 : aide LinkedIn (création de page,
// profil et page, rôles d'administration, demande d'accès, planification,
// documents, vidéos des pages, notification des salariés, statistiques,
// limite de caractères), politiques de la communauté professionnelle de
// LinkedIn, Premium Company Page, politique de contenu de marque de Meta (lue
// dans le navigateur), politique de contenu de marque de TikTok (04/08/2026),
// aide TikTok (divulgation, Commercial Music Library), Légifrance (loi
// n° 2023-451, articles 1 et 5-2), CNIL (droit à l'image), loi béninoise
// n° 2017-20 (articles 1, 440, 574 et 576, PDF du SGG), DataReportal (Bénin,
// Côte d'Ivoire, Sénégal, France), Metricool, FDFP, FODEFCA, 3FPT, France
// Compétences. Aucune certification ni aucun partenariat attribué à Richard.
// Fiche du lot B : date de publication reportée ensuite.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation LinkedIn et réseaux sociaux d\'entreprise : apprendre à vos dirigeants et à vos équipes à soigner leurs profils et la page de l\'entreprise, à tenir une ligne éditoriale et un rythme, à répondre aux échanges et à mesurer ce que rapportent les publications',
    'title'   => 'Formation LinkedIn et réseaux sociaux | Richard SALANON',
    'meta'    => 'Formation LinkedIn et réseaux sociaux : profils des dirigeants, page entreprise, ligne éditoriale, calendrier, droit à l\'image et mesure. Prix sur devis.',
    'en_bref' => 'Cette formation apprend aux dirigeants, aux commerciaux et aux chargés de communication à faire vivre la présence de l\'entreprise sur LinkedIn, puis sur Facebook, Instagram ou TikTok quand la clientèle s\'y trouve : profils soignés, page bien administrée, ligne éditoriale écrite, calendrier tenable, réponses aux commentaires et lecture des statistiques. Elle se déroule sur deux jours en quatre demi-journées, ou en une journée resserrée pour un dirigeant, sur les comptes réels de l\'entreprise et en petit groupe. Elle se tient en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'marketing-visibilite',
    'forte'   => false,
    'duree'   => '2 jours en 4 demi-journées, ou 1 jour resserré',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : faire l\'état des lieux des comptes, puis réécrire les profils du dirigeant et des porte-parole',
            'duree'  => '3 h 30',
            'points' => [
                'Inventaire de la présence existante : page LinkedIn, page Facebook, compte Instagram, compte TikTok, profils des dirigeants et des salariés qui parlent de l\'entreprise, avec la date de la dernière publication de chacun.',
                'Qui détient quoi : liste des administrateurs de chaque compte, adresse e-mail de rattachement, personnes parties de l\'entreprise ou prestataires qui ont encore la main.',
                'Ce qu\'un visiteur comprend en dix secondes : photo, bannière, titre du profil, section Infos, contenu mis en avant, poste actuel relié à la page de l\'entreprise.',
                'Réécriture du titre et de la section Infos du dirigeant, puis de deux ou trois porte-parole, sur leurs ordinateurs et avec leur accord sur chaque phrase.',
                'Règle posée dès le départ : un profil LinkedIn représente une personne réelle ; l\'entreprise s\'exprime par sa page, jamais par un faux profil à son nom.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : reprendre la page de l\'entreprise, répartir les rôles et choisir les autres réseaux selon la cible',
            'duree'  => '3 h 30',
            'points' => [
                'Création ou reprise de la page LinkedIn : identité, description, secteur, taille, site, coordonnées, bouton d\'action, et demande d\'accès quand la page existe déjà sans administrateur connu.',
                'Les rôles d\'administration de la page, du super administrateur à l\'analyste, et la règle des deux super administrateurs salariés pour ne jamais perdre la main.',
                'Rattacher les salariés à la page par leur expérience, et utiliser la notification des salariés pour les publications qui comptent.',
                'Facebook, Instagram ou TikTok : à quel public chaque réseau sert, quel type de compte ouvrir, et quand il vaut mieux ne pas y aller.',
                'Exercice de clôture : la carte de présence de l\'entreprise, réseau par réseau, avec son responsable, son public et son objectif.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : écrire la ligne éditoriale, choisir les formats et bâtir un calendrier de trois mois',
            'duree'  => '3 h 30',
            'points' => [
                'Objectifs de la présence sociale : être reconnu par les clients, recruter, rassurer les partenaires, faire connaître une offre ; un objectif principal par réseau.',
                'Trois ou quatre thèmes réguliers tirés du métier de l\'entreprise, et la répartition des prises de parole entre la page, le dirigeant et les experts internes.',
                'Les formats et leurs limites lues dans l\'aide des plateformes : texte, photo, document présenté en carrousel, vidéo courte ou longue.',
                'Droit à l\'image des salariés, des clients et des passants, et mention obligatoire quand un contenu est payé ou offert par un partenaire.',
                'Construction du calendrier sur trois mois, avec un rythme que l\'équipe peut tenir, et planification des premières publications dans l\'outil natif.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : répondre, animer la conversation, lire les statistiques et évaluer les acquis',
            'duree'  => '3 h 30',
            'points' => [
                'Répondre aux commentaires et aux messages : délai cible, ton, questions sur les prix, critiques publiques, et passage d\'un échange public à un échange privé.',
                'Commenter chez les autres sans s\'imposer : clients, partenaires, organisations professionnelles, médias locaux du secteur.',
                'Ce que les plateformes interdisent : groupes d\'engagement, achat d\'abonnés, robots qui commentent ou republient à votre place.',
                'Les statistiques de la page et des profils : impressions, interactions, abonnés, visiteurs, comparaison avec des pages concurrentes ; ce qui sert à décider et ce qui flatte.',
                'Évaluation : chaque participant présente son profil réécrit, trois publications prêtes et sa part du calendrier, puis le groupe fixe le rendez-vous du premier bilan mensuel.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en quatre demi-journées, ou 1 jour resserré pour un dirigeant'],
        ['l' => 'Public', 'v' => 'Dirigeants, commerciaux et chargés de communication qui publient au nom de l\'entreprise ou en leur nom propre'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, huit participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que sauront faire vos dirigeants et vos équipes à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Dans beaucoup d\'entreprises, la présence sur les réseaux tient à une seule personne motivée, qui publie quand elle a le temps, depuis un compte dont personne d\'autre ne connaît le mot de passe. La page LinkedIn affiche encore l\'ancien logo, le dirigeant n\'a pas touché son profil depuis son embauche, et la page Facebook a été ouverte par un stagiaire parti depuis deux ans. Cette formation remet de l\'ordre, puis installe une routine : des profils qui disent clairement qui parle, une page administrée par l\'entreprise, une ligne éditoriale écrite et un rythme que l\'équipe tient sans s\'épuiser.',
                'Les objectifs se vérifient en fin de session. Chaque participant sait : relire un profil avec les yeux d\'un client et le corriger ; administrer la page LinkedIn et attribuer les bons rôles ; dire sur quel réseau la clientèle de l\'entreprise se trouve vraiment ; écrire une publication texte, préparer un document en carrousel et une vidéo courte dans les limites de chaque plateforme ; planifier ses publications ; répondre à un commentaire critique ; savoir quand une photo exige un accord écrit et quand une publication doit porter une mention de partenariat ; lire les statistiques du mois et en tirer une décision.',
                'La formation ne traite pas la prospection. Choisir les entreprises à viser, écrire un premier message à un acheteur ou suivre un contact jusqu\'au rendez-vous relève de la formation <a href="/formations/marketing-digital-b2b">Marketing digital B2B</a>. Les campagnes payantes, publications sponsorisées comprises, ont leur fiche, Publicité Meta Ads et Google Ads, et les lettres d\'information la leur, Emailing et marketing automation. La production de textes, d\'images et de vidéos avec des outils d\'IA est l\'objet de Créer du contenu avec l\'IA. Ces fiches sont reliées en bas de page ; ici, elles n\'apparaissent que là où elles touchent la vie d\'un compte.',
                'Elle ne promet pas non plus d\'abonnés. Le nombre de personnes qui suivent une page dépend du secteur, de la notoriété de l\'entreprise, de la qualité de ce qu\'elle a à dire et du temps qu\'elle y consacre. Ce que la formation garantit, c\'est une méthode écrite, des comptes repris en main et des premières publications prêtes à partir. Pour une entreprise dont les clients la cherchent surtout sur une carte, la fiche Google passe avant les réseaux : c\'est l\'objet de la formation <a href="/formations/visibilite-google">Visibilité Google</a>.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit suivre la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'La formation s\'adresse aux personnes qui prennent la parole pour l\'entreprise, ou qui en prendront la charge. Elle ne demande ni site internet ni compétence technique : elle se suit avec un compte LinkedIn actif et les droits d\'administration de la page, ou les moyens de les obtenir.',
            'items' => [
                ['titre' => 'Le dirigeant', 'texte' => 'Son profil est souvent plus consulté que la page de l\'entreprise, par des clients, des banques, des candidats et des partenaires. Il apprend à le rendre lisible, à choisir ce qu\'il veut dire en son nom et ce qu\'il laisse à la page, et à y consacrer un temps limité mais régulier. La journée resserrée lui est destinée quand il suit la formation seul.'],
                ['titre' => 'Les commerciaux et les experts', 'texte' => 'Ils connaissent les questions des clients et les sujets du métier. La formation leur apprend à partager ce savoir sur leur profil sans transformer chaque publication en annonce, et à relayer la page sans copier-coller le même texte que leurs collègues.'],
                ['titre' => 'Le chargé ou la chargée de communication', 'texte' => 'Il ou elle tient le calendrier, administre les pages, répond aux commentaires et prépare les chiffres du mois. La formation lui donne une ligne éditoriale validée par la direction, ce qui évite de renégocier chaque publication.'],
                ['titre' => 'Le niveau attendu', 'texte' => 'Savoir se connecter à LinkedIn, publier un texte et une photo, et se servir d\'un tableur simple. Un questionnaire envoyé au cadrage situe chaque participant et permet de composer des groupes de niveau proche.'],
                ['titre' => 'Les accès à réunir', 'texte' => 'Le compte LinkedIn personnel de chaque participant, avec son mot de passe et sa double authentification à portée de main ; le rôle de super administrateur ou d\'administrateur de contenu sur la page ; les accès aux comptes Facebook, Instagram ou TikTok de l\'entreprise s\'ils existent. Si personne ne sait qui administre la page, on le signale au cadrage : la reprise devient alors le premier exercice.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur portable par personne pour la page, les statistiques et le calendrier, et un téléphone récent pour les photos et les vidéos. Une prise de vue de profil peut être organisée sur place si l\'entreprise le souhaite, avec un fond neutre et une lumière de jour.'],
                ['titre' => 'Ce qu\'il faut apporter', 'texte' => 'La présentation de l\'entreprise, le logo en bonne définition, les dix questions que les clients posent le plus souvent, les événements prévus dans les trois prochains mois et quelques publications passées, réussies ou non. Le détail est envoyé au cadrage.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur les comptes réels de l\'entreprise ?',
            'items' => [
                ['titre' => 'L\'audit en dix secondes', 'duree' => '30 minutes', 'texte' => 'Chaque participant ouvre le profil d\'un collègue, puis la page de l\'entreprise, et note ce qu\'il a compris en dix secondes : qui est cette personne, que fait l\'entreprise, pour qui, où. Le groupe compare les notes. L\'écart entre ce que l\'entreprise croit montrer et ce qu\'un inconnu retient est souvent le meilleur argument pour la suite.'],
                ['titre' => 'Le registre des accès', 'duree' => '30 minutes', 'texte' => 'Le groupe dresse la liste de tous les comptes de l\'entreprise, avec leurs administrateurs, l\'adresse de rattachement et la date du dernier contrôle. Les accès des anciens salariés et des prestataires terminés sont retirés en séance, quand la personne qui a le droit de le faire est présente.'],
                ['titre' => 'La réécriture du profil', 'duree' => '1 heure', 'texte' => 'Titre, section Infos, expérience actuelle reliée à la page, contenu mis en avant : chacun réécrit son profil à partir de ce que ses clients ou ses candidats ont besoin de savoir. Le formateur relit à l\'écran. Rien n\'est modifié sans l\'accord de la personne, qui reste maîtresse de son profil.'],
                ['titre' => 'La remise en état de la page', 'duree' => '45 minutes', 'texte' => 'Description, secteur, coordonnées, bouton d\'action, image de couverture : la page est corrigée en direct par l\'administrateur, avec le texte de référence de l\'entreprise. On vérifie ensuite qu\'elle s\'affiche correctement sur un téléphone.'],
                ['titre' => 'La carte des réseaux', 'duree' => '30 minutes', 'texte' => 'Pour chaque réseau, le groupe répond à quatre questions : nos clients y sont-ils, qu\'y cherchent-ils, qui s\'en occupe chez nous, combien de temps par semaine. Un réseau sans réponse claire à l\'une des quatre est mis en sommeil plutôt que tenu à moitié.'],
                ['titre' => 'La ligne éditoriale d\'une page', 'duree' => '1 heure', 'texte' => 'Le groupe rédige le document de référence : objectif par réseau, publics, thèmes réguliers, qui parle de quoi, sujets interdits, règles sur les photos de personnes et sur les partenariats. Il tient sur deux pages et il est validé par la direction avant la fin de la journée.'],
                ['titre' => 'Le calendrier de trois mois', 'duree' => '45 minutes', 'texte' => 'Dans un tableur partagé, l\'équipe place les temps forts connus (salon, lancement, recrutement, fête locale, clôture d\'exercice), puis remplit les semaines avec ses thèmes réguliers. Chaque case porte un responsable, un format et une date de relecture.'],
                ['titre' => 'Les trois publications prêtes', 'duree' => '1 heure', 'texte' => 'Chaque participant écrit un texte, prépare un document en carrousel ou une courte vidéo, et rédige une réponse à un commentaire critique inventé par le formateur. Les publications sont planifiées dans l\'outil natif, sous réserve de la validation prévue par la ligne éditoriale.'],
                ['titre' => 'Le premier tableau du mois', 'duree' => '30 minutes', 'texte' => 'L\'administrateur exporte les statistiques des derniers mois. Le groupe retient cinq indicateurs au plus, puis écrit la question à laquelle chacun répond. Ce tableau servira de point de départ au bilan mensuel.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Profil du dirigeant, profils des salariés ou page de l\'entreprise : qui doit publier quoi ?',
            'legende' => 'Répartition travaillée pendant la formation. LinkedIn rappelle dans son aide qu\'un profil représente une personne et une page une organisation, et qu\'une page se crée gratuitement (aide consultée le 5 octobre 2026).',
            'entetes' => ['Compte', 'Ce qu\'il représente', 'Ce qu\'on y publie', 'Ce qu\'on évite'],
            'lignes'  => [
                ['Profil du dirigeant', 'Une personne, son parcours et ses convictions sur le métier', 'Décisions et apprentissages, lecture d\'une évolution du secteur, coulisses d\'un projet, remerciements nominatifs avec accord', 'Les annonces commerciales en série, les débats sans rapport avec l\'entreprise, les chiffres internes non publiés'],
                ['Profils des experts et des commerciaux', 'Des personnes que les clients connaissent et à qui ils posent des questions', 'Réponses aux questions fréquentes, retour d\'un chantier ou d\'une formation, conseils pratiques tirés du terrain', 'Le copier-coller du texte de la page, les promesses de prix ou de délai que seule la direction peut faire'],
                ['Page LinkedIn de l\'entreprise', 'L\'organisation, ses offres, ses recrutements et sa vie collective', 'Nouvelles offres, offres d\'emploi, événements, réalisations publiées avec l\'accord du client, documents utiles', 'Les publications qui ne parlent que de l\'entreprise sans rien apporter au lecteur'],
                ['Page vitrine LinkedIn', 'Une marque, une activité ou un public distinct de l\'entreprise principale', 'Le contenu propre à cette activité, quand il a assez de matière pour vivre seul', 'L\'ouverture d\'une page vitrine que personne n\'aura le temps d\'alimenter'],
                ['Page Facebook ou compte Instagram de l\'entreprise', 'L\'entreprise auprès d\'un public de particuliers et de proximité', 'Produits, horaires, nouveautés, coulisses, photos de l\'équipe avec accord', 'Les contenus réservés aux décideurs, mieux reçus sur LinkedIn'],
                ['Compte TikTok de l\'entreprise', 'L\'entreprise auprès d\'un public jeune, en vidéo verticale', 'Démonstrations courtes, métiers expliqués, questions des clients en vidéo', 'Les reprises de musiques populaires non autorisées pour un usage commercial'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'LinkedIn, Facebook, Instagram ou TikTok : quel réseau choisir selon votre cible ?',
            'legende' => 'Chiffres d\'audience publicitaire publiés par DataReportal en novembre 2025, avec des données d\'octobre 2025 ; ce sont des comptes joignables ou inscrits, pas des utilisateurs actifs chaque jour. Règles lues le 5 octobre 2026 dans l\'aide de chaque plateforme.',
            'entetes' => ['Réseau', 'Quand il s\'impose', 'Repère d\'audience', 'Règle à connaître'],
            'lignes'  => [
                ['LinkedIn', 'Clients professionnels, recrutement de cadres, partenaires, bailleurs, investisseurs', '660 000 membres inscrits au Bénin, 1,80 million en Côte d\'Ivoire, 1,50 million au Sénégal, 38,0 millions en France', 'Les profils représentent de vraies personnes ; les gains personnels liés à une recommandation se signalent clairement'],
                ['Facebook', 'Clientèle de particuliers, commerce de proximité, associations, écoles, événements locaux', '2,50 millions d\'utilisateurs joignables au Bénin, 8,40 millions en Côte d\'Ivoire', 'Un contenu de marque se publie avec l\'outil de contenu de marque de Meta, en identifiant le partenaire'],
                ['Instagram', 'Produits qui se montrent : mode, beauté, restauration, hôtellerie, décoration', '1,45 million d\'utilisateurs joignables au Sénégal, 28,2 millions en France', 'Même politique de contenu de marque que Facebook, avec le libellé de partenariat'],
                ['TikTok', 'Public jeune, métiers qui se démontrent en vidéo, marques grand public', '23,4 millions d\'utilisateurs de 18 ans et plus joignables en France', 'Divulgation obligatoire du contenu commercial ; musique choisie dans la bibliothèque commerciale pour un compte professionnel'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Texte, document en carrousel ou vidéo : quelles limites chaque format impose-t-il sur LinkedIn ?',
            'legende' => 'Limites relevées le 5 octobre 2026 dans l\'aide de LinkedIn. Elles évoluent : la formation les relit avant chaque session, sur la plateforme réellement utilisée.',
            'entetes' => ['Format', 'Limite indiquée par LinkedIn', 'Usage conseillé', 'Erreur fréquente'],
            'lignes'  => [
                ['Texte seul', 'Jusqu\'à 3 000 caractères par publication', 'Un retour d\'expérience, une question de client et sa réponse, une prise de position argumentée', 'Une introduction trop longue : les premières lignes doivent dire pourquoi lire la suite'],
                ['Photo', 'Formats d\'image courants acceptés', 'Une scène réelle de l\'entreprise, une équipe au travail avec l\'accord de chacun', 'Une image de banque d\'images que des dizaines d\'autres entreprises utilisent aussi'],
                ['Document présenté en carrousel', '100 Mo et 300 pages au plus, en PDF, PPT, PPTX, DOC ou DOCX ; un seul document par publication ; toutes les pages au même format ; aucune modification après publication', 'Une méthode en étapes, une liste de contrôle, un résumé de guide, page par page', 'Envoyer un fichier à calques non aplatis, ou une vidéo intégrée qui s\'affichera en image fixe'],
                ['Vidéo publiée par une page', '5 Go et 10 minutes au plus, 3 secondes au moins ; formats AVI, QuickTime et MOV non acceptés', 'Une démonstration, une visite de chantier, un expert qui répond à une question en une minute', 'Une vidéo sans sous-titres, alors que beaucoup la regarderont sans le son'],
                ['Publication planifiée', 'Entre 10 minutes et 3 mois à l\'avance ; pas pour les événements, les offres d\'emploi ni les services', 'Préparer les publications de la semaine en une séance', 'Planifier puis oublier de répondre aux commentaires le jour de la publication'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment écrire une ligne éditoriale et tenir un rythme sans s\'épuiser ?',
            'paragraphes' => [
                'La ligne éditoriale n\'est pas un manifeste. C\'est un document court qui répond à des questions pratiques : pour qui publie-t-on, sur quel réseau, dans quel but, sur quels thèmes, qui a le droit de parler de quoi, et qui valide. Sans ce document, chaque publication devient une discussion entre la communication et la direction, et le rythme s\'effondre au bout de quelques semaines. Avec lui, la personne qui tient le calendrier sait ce qu\'elle peut publier seule et ce qui demande une relecture.',
                'Les thèmes viennent du métier, pas d\'une liste de tendances. Un cabinet d\'expertise comptable tient sans peine quatre thèmes : les échéances fiscales du mois, une question de client expliquée, la vie du cabinet, un recrutement. Une école privée en a d\'autres : la pédagogie, la vie des élèves avec l\'accord des parents, les inscriptions, les résultats publiés. Trois ou quatre thèmes suffisent. Ils donnent au lecteur une raison de revenir et à l\'équipe une réponse toute prête à la question « que publie-t-on cette semaine ? ».',
                'Le rythme se fixe d\'après le temps réellement disponible, puis se tient. Une page qui publie une fois par semaine pendant un an inspire plus confiance qu\'une page qui publie chaque jour pendant un mois, puis se tait. La formation fait calculer ce temps : écrire, trouver ou prendre la photo, faire relire, publier, répondre aux commentaires. Pour une petite équipe, une publication de page par semaine et une publication par mois et par porte-parole forment souvent un point de départ réaliste.',
                'La planification native rend ce rythme possible. LinkedIn permet de programmer une publication entre dix minutes et trois mois à l\'avance, sauf pour les événements, les offres d\'emploi et les services. Une séance d\'une heure par semaine, toujours le même jour, suffit à préparer la semaine suivante. Elle ne remplace pas la présence : le jour où la publication sort, quelqu\'un doit lire les commentaires et y répondre, ce qui fait souvent plus pour la visibilité que la publication elle-même.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et quel suivi après la session ?',
            'intro' => 'Le formateur montre peu et fait beaucoup produire. Chaque séquence part d\'un compte réel de l\'entreprise, ouvert à l\'écran par la personne qui en a la charge.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Un profil se réécrit avec son titulaire, phrase par phrase. Au-delà de huit personnes, ce temps disparaît. Une équipe plus nombreuse est répartie en deux groupes, par exemple les dirigeants d\'un côté, la communication et les commerciaux de l\'autre.'],
                ['titre' => 'Vos comptes, jamais un exemple fictif', 'texte' => 'La page corrigée, les profils réécrits et les publications planifiées sont ceux de l\'entreprise. En inter-entreprises, chacun travaille sur ses propres comptes, et aucune statistique n\'est projetée sans l\'accord de son titulaire.'],
                ['titre' => 'L\'aide officielle comme référence', 'texte' => 'Chaque règle citée vient de l\'aide de LinkedIn, de Meta ou de TikTok, relue avant la session et datée dans le support. Les participants apprennent à retrouver eux-mêmes ces pages, parce que les fonctions et les limites changent plusieurs fois par an.'],
                ['titre' => 'Des documents qui restent à l\'entreprise', 'texte' => 'La ligne éditoriale validée, le calendrier de trois mois, le registre des accès, les modèles de réponse aux commentaires, le modèle d\'autorisation de photo, le tableau mensuel et une fiche des règles par plateforme, dans des formats modifiables, avec une attestation nominative.'],
                ['titre' => 'Une évaluation sur production', 'texte' => 'La réussite se juge sur ce que chaque participant a produit : profil réécrit, publications prêtes, part du calendrier, réponse à un commentaire critique. Elle ne se juge pas au nombre de mentions « j\'aime » reçues pendant la semaine.'],
                ['titre' => 'Un bilan à un mois, en option', 'texte' => 'Une séance à distance, quatre semaines après la formation, relit le calendrier tenu ou non, les premières statistiques et les réponses aux commentaires. Une seconde, à trois mois, ajuste les thèmes et le rythme. Ces séances figurent au devis si l\'entreprise les retient.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on, et que coûtent-ils chez l\'éditeur ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes locales éventuelles. Ces abonnements, s\'ils sont retenus, sont payés à l\'éditeur au nom de l\'entreprise ; aucun n\'est nécessaire pour suivre la formation.',
            'entetes' => ['Outil', 'Usage en formation', 'Coût selon l\'éditeur', 'À savoir'],
            'lignes'  => [
                ['Page LinkedIn', 'Présence de l\'entreprise, publications, statistiques, notification des salariés', 'Création gratuite selon l\'aide de LinkedIn', 'Le créateur devient super administrateur : il doit être salarié de l\'entreprise, pas prestataire'],
                ['Planification native de LinkedIn', 'Programmer les publications de la page et des profils', 'Incluse dans LinkedIn', 'Fenêtre de 10 minutes à 3 mois ; pas d\'événements, d\'offres d\'emploi ni de services'],
                ['LinkedIn Premium Company Page', 'Montrée en démonstration, jamais exigée', '99,99 dollars ou 99,99 € par mois, ou 839,88 dollars ou 839,89 € par an', 'Bouton d\'action personnalisé, liste des visiteurs, comparaison avec jusqu\'à 9 autres pages ; utile seulement si la page vit déjà'],
                ['Metricool', 'Calendrier commun à plusieurs réseaux et rapports mensuels', 'Formule Free à 0 €, 20 contenus planifiés par mois, sans LinkedIn ; Starter, qui ajoute LinkedIn, à partir de 16 € par mois en paiement annuel ou 20 € en mensuel', 'Un outil tiers ne dispense pas de lire les statistiques natives de chaque plateforme'],
                ['Bibliothèque commerciale de TikTok', 'Choisir une musique pour une vidéo d\'entreprise', 'Gratuite pour les entreprises, environ un million de titres selon TikTok', 'Un compte professionnel ne voit que ces titres quand il ajoute un son'],
                ['Tableur partagé (Excel ou Google Sheets)', 'Calendrier éditorial, registre des accès, tableau mensuel', 'Outil déjà en place dans la plupart des entreprises', 'Un seul fichier de référence, partagé avec la direction'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Photos de personnes et contenus sponsorisés : que disent les textes et les plateformes ?',
            'legende' => 'Textes officiels et règles des plateformes lus le 5 octobre 2026. Ce tableau résume pour l\'usage quotidien d\'une équipe ; il ne remplace pas l\'avis d\'un juriste sur une situation particulière.',
            'entetes' => ['Source', 'Ce qu\'elle prévoit', 'Situation typique', 'Geste de l\'équipe'],
            'lignes'  => [
                ['Bénin, loi n° 2017-20 portant code du numérique, article 1', 'Une donnée à caractère personnel inclut le son et l\'image d\'une personne identifiable', 'Photo d\'un client reconnaissable dans la boutique', 'Accord écrit avant publication, conservé avec la photo'],
                ['Bénin, même loi, article 440', 'Toute personne peut s\'opposer à tout moment, pour des motifs légitimes, au traitement de ses données', 'Un ancien salarié demande le retrait d\'une photo d\'équipe', 'Retrait rapide et note dans le registre des autorisations'],
                ['Bénin, même loi, articles 574 et 576', 'Cinq ans d\'emprisonnement et 25 millions de francs CFA d\'amende pour l\'image prise dans un lieu privé sans consentement, ou pour un montage publié sans accord ni mention', 'Vidéo tournée dans les bureaux d\'un client, ou photo retouchée d\'un salarié', 'Jamais de tournage dans un lieu privé sans accord ; aucun montage d\'une personne sans son accord'],
                ['France, CNIL', 'Droit exclusif et absolu de chacun sur son image ; accord des parents pour la photo d\'un mineur ; réclamation possible à la CNIL après un mois sans réponse', 'Photos d\'une remise de prix dans une école', 'Autorisations parentales recueillies avant l\'événement'],
                ['France, loi n° 2023-451, articles 1 et 5-2', 'L\'intention commerciale d\'une personne payée pour promouvoir doit être signalée clairement, par « publicité », « collaboration commerciale » ou une mention équivalente, sauf si elle ressort déjà du contexte', 'Un créateur de contenu rémunéré ou payé en produits présente l\'offre de l\'entreprise', 'Mention prévue dans l\'accord écrit et vérifiée avant publication'],
                ['LinkedIn, politiques de la communauté professionnelle', 'Une recommandation faite en échange d\'un avantage personnel exige une mention claire et visible de cet avantage', 'Un partenaire publie sur l\'entreprise contre une prestation offerte', 'Mention de l\'avantage dans le texte de la publication'],
                ['Meta, politique de contenu de marque', 'Contenu de marque publié uniquement avec l\'outil prévu, en identifiant le partenaire avec son autorisation, et en respectant les lois locales', 'Une boutique offre ses produits à une créatrice qui publie sur Instagram', 'Libellé de partenariat activé par la créatrice, page de l\'entreprise identifiée'],
                ['TikTok, politique de contenu de marque (mise à jour le 4 août 2026)', 'Bouton de divulgation du contenu commercial obligatoire pour toute vidéo qui promeut une marque, un produit ou un service', 'Vidéo de démonstration d\'un produit sur le compte de l\'entreprise ou d\'un partenaire', 'Activer le bouton à la publication ; sans lui, la vidéo peut ne pas être proposée dans le fil Pour toi'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment faire parler les salariés de l\'entreprise sans les exposer ni tromper le lecteur ?',
            'paragraphes' => [
                'Les salariés sont souvent la meilleure voix de l\'entreprise, parce qu\'on les croit davantage qu\'une page. Mais leur profil leur appartient. La formation pose trois règles. La participation est volontaire : personne n\'est noté sur le nombre de ses publications. Chacun écrit avec ses mots : la page peut proposer des sujets, pas un texte unique que tout le monde recopie. Et le lien avec l\'entreprise reste visible, par le poste affiché dans l\'expérience du profil et, si besoin, dans le texte lui-même.',
                'Ce dernier point n\'est pas qu\'une politesse. Les politiques de la communauté professionnelle de LinkedIn demandent une mention claire dès qu\'une recommandation est faite en échange d\'un avantage personnel, qu\'il s\'agisse d\'argent, d\'un produit offert ou d\'une autre valeur. Une entreprise qui récompense ses salariés pour leurs publications, par une prime ou un concours, doit donc le leur faire dire. Et un salarié ne se présente jamais comme un client satisfait de son propre employeur.',
                'LinkedIn fournit un outil utile : la notification des salariés. Depuis une publication de la page, un administrateur peut prévenir les salariés rattachés à la page, c\'est-à-dire les membres qui l\'ont indiquée dans leur expérience. L\'aide de LinkedIn précise qu\'un administrateur ne peut le faire qu\'une fois par jour, qu\'une publication ciblée ne peut pas faire l\'objet d\'une notification et que chaque salarié peut se désabonner. La formation apprend à réserver cet outil aux publications qui comptent vraiment : un recrutement, un lancement, une distinction.',
                'Reste l\'image des collègues. Une photo d\'équipe publiée sur la page ou sur un profil montre des personnes qui n\'ont pas toutes choisi d\'être visibles. Au Bénin, le code du numérique range l\'image d\'une personne identifiable parmi ses données personnelles ; en France, la CNIL rappelle que chacun peut s\'opposer à la reproduction de son image sans autorisation préalable. La formation remet un modèle d\'autorisation simple, par personne et par usage, et une règle : qui refuse n\'a pas à se justifier.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi les groupes d\'engagement et les abonnés achetés coûtent-ils plus qu\'ils ne rapportent ?',
            'texte' => 'Parce qu\'ils sont interdits et qu\'ils faussent les seuls chiffres qui servent à décider. Les politiques de la communauté professionnelle de LinkedIn demandent de ne pas augmenter artificiellement l\'engagement de ses contenus et de ne pas s\'entendre à l\'avance avec d\'autres pour aimer ou republier leurs publications : c\'est exactement le principe des groupes d\'engagement. Elles interdisent aussi les faux profils et les faux comptes d\'entreprise. Une page gonflée d\'abonnés achetés ou de réactions de complaisance donne des statistiques qui ne disent plus rien de la clientèle réelle, et l\'équipe ne sait plus quel thème fonctionne. La règle enseignée : mieux vaut cent abonnés qui sont des clients, des candidats ou des partenaires que dix mille comptes sans visage.',
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre métier et votre pays ?',
            'items' => [
                ['secteur' => 'Cabinet d\'expertise comptable, à Cotonou', 'probleme' => 'La page LinkedIn a été créée par un ancien collaborateur, seul super administrateur, et les deux associés ont des profils sans photo ni description.', 'solution' => 'Demande d\'accès depuis le profil d\'un associé, poste actuel renseigné, avec l\'appui de l\'ancien collaborateur joint par téléphone ; profils réécrits ; ligne éditoriale sur quatre thèmes, dont les échéances fiscales du mois ; une publication de page par semaine et une par associé chaque mois.'],
                ['secteur' => 'Groupe scolaire privé, à Abidjan', 'probleme' => 'Les parents suivent l\'école sur Facebook, les lycéens sur TikTok, et des photos d\'élèves sont publiées sans autorisation écrite.', 'solution' => 'Autorisations parentales recueillies à l\'inscription, avec un choix par usage ; Facebook pour les parents (vie de l\'école, calendrier, inscriptions), TikTok pour les métiers et les filières en vidéo courte, sans visage d\'élève non autorisé ; la page LinkedIn est réservée au recrutement des enseignants.'],
                ['secteur' => 'Hôtel de bord de mer, à Saly', 'probleme' => 'Le compte Instagram publie au gré des envies, et une influenceuse invitée gratuitement a présenté l\'hôtel sans aucune mention.', 'solution' => 'Calendrier de trois mois calé sur la saison, photos réelles des chambres et du personnel volontaire, accord écrit avec les créateurs invités prévoyant le libellé de partenariat de Meta, et réponses aux commentaires en français et en anglais dans la journée.'],
                ['secteur' => 'Entreprise de travaux publics, à Lomé', 'probleme' => 'Les chantiers sont spectaculaires mais rien n\'en est montré ; le directeur ne voit pas l\'intérêt de LinkedIn.', 'solution' => 'Journée resserrée pour le directeur, puis deux jours pour l\'ingénieur méthodes et l\'assistante de direction : vidéo de chantier de moins d\'une minute avec l\'accord du maître d\'ouvrage, document en carrousel sur les étapes d\'un ouvrage, publications de recrutement, et règle stricte sur les plans et les informations du client.'],
                ['secteur' => 'PME industrielle, en Auvergne-Rhône-Alpes', 'probleme' => 'La direction veut que les salariés relaient la page, et a diffusé un texte unique à recopier ; plusieurs salariés refusent.', 'solution' => 'Participation volontaire, sujets proposés plutôt que textes imposés, notification des salariés réservée aux publications importantes, et mention claire quand un concours interne récompense les publications, comme le demandent les règles de LinkedIn.'],
                ['secteur' => 'Cabinet de conseil, à Genève', 'probleme' => 'Les consultants publient beaucoup, chacun dans son style, et la page du cabinet reste muette ; les statistiques ne sont lues par personne.', 'solution' => 'Ligne éditoriale commune, page dédiée aux publications du cabinet et à ses documents, profils des associés recentrés sur leurs domaines, tableau mensuel de cinq indicateurs lu en réunion d\'associés.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent LinkedIn et les autres réseaux dans vos pays ?',
            'items' => [
                ['valeur' => '660 000', 'libelle' => 'Membres inscrits sur LinkedIn au Bénin fin 2025, à rapprocher des 2,50 millions d\'utilisateurs de Facebook joignables par la publicité ; données d\'octobre 2025, publiées le 8 novembre 2025', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '1,80 million', 'libelle' => 'Membres inscrits sur LinkedIn en Côte d\'Ivoire fin 2025, pour 895 000 utilisateurs d\'Instagram joignables par la publicité', 'source' => 'DataReportal, Digital 2026 Côte d\'Ivoire', 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire'],
                ['valeur' => '1,45 million', 'libelle' => 'Utilisateurs d\'Instagram joignables au Sénégal fin 2025, et 1,50 million de membres inscrits sur LinkedIn', 'source' => 'DataReportal, Digital 2026 Sénégal', 'url' => 'https://datareportal.com/reports/digital-2026-senegal'],
                ['valeur' => '38,0 millions', 'libelle' => 'Membres inscrits sur LinkedIn en France fin 2025 ; TikTok y touchait 23,4 millions de personnes de 18 ans et plus (rapport publié le 5 novembre 2025)', 'source' => 'DataReportal, Digital 2026 France', 'url' => 'https://datareportal.com/reports/digital-2026-france'],
                ['valeur' => '3 000', 'libelle' => 'Nombre maximal de caractères d\'une publication LinkedIn, selon l\'aide de la plateforme consultée le 5 octobre 2026', 'source' => 'Aide LinkedIn, publier sur LinkedIn', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a528176'],
                ['valeur' => '1 fois par jour', 'libelle' => 'Fréquence maximale à laquelle un administrateur peut notifier les salariés rattachés à la page d\'une publication', 'source' => 'Aide LinkedIn, notifications aux salariés', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a549372'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format, quelle durée et quelle organisation choisir ?',
            'legende' => 'Le programme complet représente deux journées. Les formats se combinent : la journée resserrée pour le dirigeant, puis les deux jours pour l\'équipe qui tiendra les comptes.',
            'entetes' => ['Format', 'Durée et rythme', 'Ce que l\'on y fait', 'Pour qui'],
            'lignes'  => [
                ['Intra-entreprise', 'Deux jours, consécutifs ou espacés d\'une semaine', 'Le programme entier sur les comptes de l\'entreprise, avec la direction présente pour valider la ligne éditoriale', 'Une équipe de communication, des commerciaux et le dirigeant, huit personnes au plus par groupe'],
                ['Journée resserrée', 'Une journée', 'Profil réécrit, reprise de la page, ligne éditoriale en une page, premières publications planifiées', 'Un dirigeant seul, ou le gérant d\'une petite structure qui publie lui-même'],
                ['Inter-entreprises', 'Deux jours', 'Le même programme, chacun sur ses propres comptes ; les statistiques restent confidentielles', 'Dirigeants et chargés de communication de petites structures, une ou deux personnes par entreprise'],
                ['À distance', 'Cinq séances de deux heures et demie environ, sur deux à trois semaines', 'Partage d\'écran, publications préparées entre deux séances et relues au début de la suivante', 'Équipes réparties entre plusieurs villes ou plusieurs pays'],
                ['Hybride', 'Une journée en salle, puis trois séances à distance', 'Profils, page et ligne éditoriale en salle ; calendrier, réponses et statistiques suivis à distance sur les premières semaines réelles', 'Équipes qui veulent juger la méthode sur leurs propres chiffres'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun tarif n\'est affiché pour cette formation : elle fait l\'objet d\'un devis, préparé après un premier échange sur l\'équipe, les comptes et les réseaux concernés. Cet échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements éventuels, comme Premium Company Page ou un outil de planification, restent payés à l\'éditeur par l\'entreprise.',
            'items'      => [
                ['offre' => 'Journée resserrée', 'prix' => 'Sur devis', 'inclus' => ['Profil du dirigeant réécrit', 'Page reprise et rôles attribués', 'Ligne éditoriale en une page', 'Premières publications planifiées']],
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées ou leur équivalent à distance', 'Profils, page et carte des réseaux', 'Ligne éditoriale et calendrier de trois mois', 'Modèles d\'autorisation et de réponse', 'Tableau mensuel, évaluation et attestation']],
                ['offre' => 'Bilans après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance à un mois sur le calendrier et les statistiques', 'Séance à trois mois sur les thèmes et le rythme', 'Relecture de publications entre les séances']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, huit personnes au plus par groupe.',
                'Le nombre de réseaux travaillés en plus de LinkedIn : Facebook, Instagram, TikTok.',
                'L\'état des comptes : une page sans administrateur connu ou des doublons à fermer demandent une préparation.',
                'Le nombre de langues de publication, par exemple français et anglais.',
                'Le format retenu et les déplacements hors de Cotonou ou hors du Bénin.',
                'L\'ajout des bilans à un mois et à trois mois.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la session ?',
            'paragraphes' => [
                'Ce n\'est pas exclu, mais rien ne peut être promis ici, car la décision revient au fonds. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> consacrée au plan de formation, lue le 5 octobre 2026, n\'ouvre ce dispositif qu\'aux entreprises à jour de leurs deux taxes ; elle mentionne l\'action intra, conduite par un intervenant extérieur pour le seul personnel de l\'entreprise, et place le paiement après le contrôle du fonds et l\'accord de sa Commission permanente.',
                'Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> présente un guichet destiné au personnel des entreprises et aux membres des organisations professionnelles. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> indique que seul un prestataire certifié Qualiopi accède, depuis le 1er janvier 2022, aux fonds publics ou mutualisés, ceux des OPCO compris. Richard SALANON n\'a ni cette certification ni l\'agrément d\'un fonds africain : prévoyez le budget sans aide, et posez la question par écrit au fonds, programme en main, avant de signer.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les mois qui suivent la formation, et comment les éviter ?',
            'intro' => 'La session remet les comptes en ordre et installe la méthode. Ce sont les trois mois suivants qui décident si la présence devient une habitude. Voici les dérives les plus fréquentes, et le réflexe qui les prévient.',
            'items' => [
                ['titre' => 'Laisser la page à une seule personne', 'texte' => 'La personne formée part, tombe malade ou change de poste, et la page se tait. Le registre des accès prévoit deux super administrateurs salariés, et le calendrier nomme un remplaçant pour chaque mois.'],
                ['titre' => 'Publier beaucoup la première semaine, puis plus rien', 'texte' => 'L\'enthousiasme de la sortie de formation produit dix publications en cinq jours, puis le silence. Le rythme fixé en séance est un maximum autant qu\'un minimum : mieux vaut s\'y tenir que le dépasser.'],
                ['titre' => 'Planifier sans répondre', 'texte' => 'Les publications partent seules, mais personne ne lit les commentaires. Un client qui pose une question publique et n\'obtient pas de réponse le raconte. Le jour de chaque publication, une personne nommée passe voir les réactions dans l\'après-midi.'],
                ['titre' => 'Copier le même texte sur tous les réseaux', 'texte' => 'Une publication pensée pour des décideurs sur LinkedIn tombe à plat sur TikTok, et l\'inverse. Le sujet peut être commun ; le texte, le format et la longueur changent avec le réseau et son public.'],
                ['titre' => 'Oublier l\'autorisation d\'une photo', 'texte' => 'Une photo de chantier ou de fête d\'entreprise part avec un visage qui n\'avait rien accepté. Le modèle d\'autorisation est rempli avant la prise de vue, et le calendrier porte une case « autorisations vérifiées ».'],
                ['titre' => 'Juger sur les mentions « j\'aime »', 'texte' => 'Une publication drôle fait beaucoup de réactions et aucune demande. Le tableau mensuel regarde aussi les visites de la page, les clics vers le site ou le formulaire, les candidatures et les messages reçus.'],
                ['titre' => 'Ne plus jamais relire la ligne éditoriale', 'texte' => 'Au bout de six mois, l\'entreprise a changé d\'offre ou de cible, mais la page parle toujours de l\'ancienne. La ligne éditoriale se relit chaque trimestre, au moment du bilan.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langues, données personnelles : que change le contexte local pour une présence sur les réseaux ?',
            'paragraphes' => [
                'Les audiences ne se ressemblent pas d\'un pays à l\'autre. D\'après les rapports Digital 2026 de DataReportal, Facebook touche 2,50 millions de personnes au Bénin et 8,40 millions en Côte d\'Ivoire, quand LinkedIn y compte 660 000 et 1,80 million de membres inscrits. À Cotonou, une boutique de quartier trouvera ses clients sur Facebook et WhatsApp, un cabinet de conseil sur LinkedIn. En France, le rapport consacré au pays relève 38,0 millions de membres inscrits sur LinkedIn et 23,4 millions d\'adultes joignables sur TikTok. La carte des réseaux se dresse donc pays par pays, à partir de la clientèle réelle de chaque participant.',
                'La connexion pèse sur les formats. Sur un réseau mobile coûteux, un document de vingt pages ou une vidéo de dix minutes se télécharge mal ; une vidéo courte, sous-titrée et légère passe mieux, comme un texte bien construit. La formation fait préparer les vidéos sur la connexion du bureau, compresser les fichiers avant envoi et vérifier chaque publication sur un téléphone ordinaire. Après une publication réussie, beaucoup de clients d\'Afrique francophone poursuivent sur WhatsApp : la page doit indiquer le bon numéro, et la formation <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> prend le relais.',
                'La langue suit la clientèle. Une entreprise de Douala ou de Genève publie souvent en français et en anglais, un hôtel de Saly aussi. Chaque langue a ses propres textes, relus par quelqu\'un qui la parle couramment, et pas une traduction automatique collée sous l\'original. Les langues nationales, fon, wolof ou dioula, trouvent leur place dans la vidéo, avec des sous-titres en français pour ceux qui ne les comprennent pas.',
                'Les données personnelles enfin. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> compte l\'image parmi les données personnelles et punit, à ses articles 574 et 576, la diffusion de l\'image d\'une personne prise dans un lieu privé sans son consentement et le montage publié sans accord ni mention. En Europe, le RGPD s\'applique aux mêmes images. Les règles d\'usage de l\'IA et des données sont l\'objet de la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> ; ici, elles se traduisent en gestes : autorisation écrite, retrait sur demande, aucune donnée de client dans une publication.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à LinkedIn et aux réseaux sociaux avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il tient lui-même ses profils sur LinkedIn, Facebook et Instagram, et accompagne des entreprises dont les clients sont des particuliers comme des professionnels : il connaît donc à la fois la page d\'un cabinet qui recrute et le compte d\'une boutique qui vend en Story. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique. Il a créé <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique.',
                'Il a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, en Afrique francophone, en Europe et au Canada, ce qui explique la place donnée aux usages et aux règles de chaque marché. Il n\'est ni partenaire ni certifié de LinkedIn, de Meta ou de TikTok : il lit leurs pages d\'aide comme vous le ferez après la formation, et peut dire sans détour quand un abonnement payant n\'apporte rien. Il ne promet ni abonnés, ni portée, ni chiffre d\'affaires.',
                'Ses engagements : un cadrage avant tout devis, une session sur vos comptes réels, des documents qui restent à l\'entreprise, une évaluation sur production et une réponse sous 24 heures. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, les formations voisines sur la page <a href="/formations/domaine/marketing-visibilite">marketing et visibilité</a> et dans le <a href="/formations/">catalogue des formations</a>, et les pays servis sur la page des <a href="/zones/">zones d\'intervention</a>. Pour que les publications renvoient vers un site bien référencé, le service de <a href="/services/referencement-naturel-seo">référencement naturel</a> complète ce travail.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Reprenez la propriété de vos pages, soignez les profils de ceux qui parlent pour l\'entreprise, choisissez les réseaux où vos clients se trouvent vraiment, écrivez une ligne éditoriale courte, publiez à un rythme que vous tiendrez un an, répondez à chaque commentaire, demandez l\'accord des personnes photographiées, signalez tout partenariat payé ou offert, et jugez chaque mois sur des chiffres qui se rapprochent de vos clients.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vos pages et vos profils parlent-ils aujourd\'hui de l\'entreprise que vous êtes ?',
            'texte'  => 'Indiquez les réseaux sur lesquels l\'entreprise est présente, qui les administre, le nombre de personnes à former, leurs fonctions et le format souhaité. Vous recevez une réponse sous 24 heures, puis une proposition de programme bâtie sur vos comptes et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation LinkedIn'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il un site internet pour suivre la formation ?', 'r' => 'Non. Elle se suit avec un compte LinkedIn actif et les droits d\'administration de la page de l\'entreprise, ou les moyens de les obtenir. Un site aide à prolonger les publications, mais aucun exercice ne l\'exige.'],
        ['q' => 'Quelle différence avec la formation Marketing digital B2B ?', 'r' => 'Le marketing B2B apprend à choisir les comptes à viser, à formuler une offre d\'entrée et à prospecter jusqu\'au rendez-vous. Celle-ci apprend à faire vivre les profils et les pages : ligne éditoriale, calendrier, formats, réponses et statistiques. Une entreprise qui vend à des professionnels suit souvent la première, puis celle-ci pour ses porte-parole.'],
        ['q' => 'Notre page LinkedIn a été créée par un ancien salarié ou une agence : que faire ?', 'r' => 'Renseignez votre poste actuel dans la section Expérience de votre profil, puis demandez l\'accès administrateur depuis la page. Ce sont les super administrateurs existants qui approuvent la demande, et l\'aide de LinkedIn précise que son assistance ne communique pas leurs coordonnées. Il faut donc retrouver la personne ou l\'agence, ce que la formation prépare dès le cadrage.'],
        ['q' => 'Le dirigeant doit-il publier lui-même ?', 'r' => 'Il doit au moins avoir un profil exact et lisible, souvent plus consulté que la page. Publier lui-même une fois par mois, sur ses décisions et sa lecture du métier, suffit dans la plupart des cas. Il peut faire préparer un premier jet, à condition de relire et de signer ce qui part sous son nom.'],
        ['q' => 'Faut-il être présent sur Facebook, Instagram et TikTok en plus de LinkedIn ?', 'r' => 'Seulement si vos clients s\'y trouvent et si quelqu\'un a le temps de s\'en occuper. Un réseau tenu à moitié fait plus de tort qu\'une absence. La formation fait dresser la carte des réseaux et met en sommeil ceux qui n\'ont ni public clair ni responsable.'],
        ['q' => 'Combien de fois faut-il publier ?', 'r' => 'Aussi souvent que l\'équipe peut le tenir pendant un an. Pour une petite structure, une publication de page par semaine et une par porte-parole chaque mois sont un bon point de départ. La régularité compte davantage que le volume.'],
        ['q' => 'Les carrousels fonctionnent-ils encore sur LinkedIn ?', 'r' => 'Sur LinkedIn, le carrousel est un document PDF, PPT, PPTX, DOC ou DOCX affiché page par page, dans la limite de 100 Mo et de 300 pages selon l\'aide de la plateforme. Il convient bien aux méthodes en étapes et aux listes de contrôle. Il ne se modifie plus après publication : il se relit donc avant.'],
        ['q' => 'Peut-on publier des photos de nos salariés et de nos clients ?', 'r' => 'Oui, avec leur accord écrit, recueilli avant la prise de vue et conservé. Au Bénin, l\'image d\'une personne identifiable est une donnée personnelle au sens de la loi n° 2017-20 ; en France, la CNIL rappelle que chacun peut s\'opposer à la reproduction de son image et que la photo d\'un mineur demande l\'accord des parents.'],
        ['q' => 'Quand faut-il indiquer qu\'une publication est sponsorisée ?', 'r' => 'Dès qu\'une personne est payée ou reçoit un avantage pour parler de l\'entreprise. En France, la loi n° 2023-451 impose alors une mention claire comme « publicité » ou « collaboration commerciale ». Meta exige son outil de contenu de marque, TikTok son bouton de divulgation, et LinkedIn une mention visible de l\'avantage reçu.'],
        ['q' => 'Faut-il payer Premium Company Page ou un outil de planification ?', 'r' => 'Non pour la formation. La page LinkedIn est gratuite et la planification native suffit pour commencer. Premium Company Page coûtait, le 5 octobre 2026, 99,99 dollars ou 99,99 € par mois ; un outil comme Metricool propose une formule gratuite sans LinkedIn. Ces choix se font après quelques mois de pratique.'],
        ['q' => 'La formation couvre-t-elle les publicités sur LinkedIn ou Facebook ?', 'r' => 'Non. Les publications sponsorisées et les campagnes payantes relèvent de la formation Publicité Meta Ads et Google Ads. Celle-ci porte sur la présence organique : ce que l\'entreprise publie sans payer la plateforme pour être vue.'],
        ['q' => 'Peut-on suivre la formation entièrement à distance ?', 'r' => 'Oui, en cinq séances de deux heures et demie environ, avec partage d\'écran et publications préparées entre les séances. La prise de vue de profil se fait alors sur place, avec les conseils donnés en séance.'],
        ['q' => 'Combien coûte la formation, et un fonds peut-il la financer ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants, les réseaux travaillés, l\'état des comptes, le format et les bilans retenus. Le FDFP, le FODEFCA, le 3FPT ou un OPCO appliquent leurs propres conditions, et Richard SALANON n\'a ni certification Qualiopi ni agrément : aucune prise en charge n\'est garantie.'],
    ],

    'sources' => [
        ['titre' => 'Aide LinkedIn, créer une Page LinkedIn', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a541782/creer-une-page-linkedin?lang=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, différences entre un profil LinkedIn et une page LinkedIn (création gratuite d\'une page)', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a6241825?lang=fr-FR', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, rôles des administrateurs d\'une page', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a541981', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, demander l\'accès administrateur à une page LinkedIn', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a567088/demander-l-acces-administrateur-a-une-page-linkedin?lang=fr-FR', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, planifier des publications', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a1347212', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, importer et partager des documents', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a518909', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, spécifications des vidéos pour les pages', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a1311816', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, notifications aux salariés depuis une page', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a549372', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, statistiques des pages LinkedIn', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a547077', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, publier et partager sur LinkedIn (limite de 3 000 caractères)', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a528176', 'date' => '2026-10-05'],
        ['titre' => 'LinkedIn, politiques de la communauté professionnelle', 'url' => 'https://www.linkedin.com/legal/professional-community-policies', 'date' => '2026-10-05'],
        ['titre' => 'LinkedIn, Premium Company Page (tarifs)', 'url' => 'https://premium.linkedin.com/small-business/company-page', 'date' => '2026-10-05'],
        ['titre' => 'Meta, politiques de contenu de marque (lues dans un navigateur)', 'url' => 'https://www.facebook.com/business/help/221149188908254', 'date' => '2026-10-05'],
        ['titre' => 'TikTok, Branded Content Policy (mise à jour du 4 août 2026)', 'url' => 'https://www.tiktok.com/legal/page/global/bc-policy/en', 'date' => '2026-10-05'],
        ['titre' => 'TikTok, aide sur le réglage de divulgation du contenu commercial', 'url' => 'https://ads.tiktok.com/help/article/about-the-content-disclosure-setting-for-creators', 'date' => '2026-10-05'],
        ['titre' => 'TikTok, aide sur la Commercial Music Library', 'url' => 'https://ads.tiktok.com/help/article/commercial-music-library?lang=en', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, loi n° 2023-451 du 9 juin 2023 visant à encadrer l\'influence commerciale (article 1)', 'url' => 'https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000047663185', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, article 5-2 de la loi n° 2023-451 (version du 8 novembre 2024)', 'url' => 'https://www.legifrance.gouv.fr/loda/article_lc/LEGIARTI000050457275', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, le droit à l\'image s\'applique-t-il sur internet ?', 'url' => 'https://www.cnil.fr/fr/cnil-direct/question/le-droit-limage-sapplique-t-il-sur-internet', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 1, 440, 574 et 576)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Bénin (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Côte d\'Ivoire (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Sénégal (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-senegal', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 France (5 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-france', 'date' => '2026-10-05'],
        ['titre' => 'Metricool, tarifs (page en français)', 'url' => 'https://metricool.com/fr/nos-tarifs/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations' => ['marketing-digital-b2b', 'contenu-avec-ia', 'publicite-meta-google-ads', 'emailing-automation', 'visibilite-google', 'analytics-ga4'],
        'services'   => ['referencement-naturel-seo', 'formation-en-entreprise'],
    ],
];
