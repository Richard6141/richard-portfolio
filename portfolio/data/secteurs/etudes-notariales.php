<?php
// ============================================================
// data/secteurs/etudes-notariales.php · Page secteur « Études de notaires et
// de commissaires de justice » (vague 1F). Aucun projet du portfolio rattaché
// à ce secteur, pas de page locale. Faits externes relevés le 07/10/2026
// (rapports annuels du notariat, Tracfin, CNCJ, OHADA, ANDF, ARTCI, CNIL).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Un portail client, des pièces maîtrisées et des assistants encadrés autour du logiciel agréé : ce que Richard apporte aux études de notaires, aux commissaires de justice et aux greffes',
    'title'   => 'Portail et IA pour notaires et huissiers | Richard SALANON',
    'meta'    => 'Portail client, rendez-vous, pièces, automatisation et IA encadrée pour études notariales, commissaires de justice et greffes. Premier échange gratuit.',
    'en_bref' => 'Richard construit autour des logiciels agréés des offices publics et ministériels : portail client sécurisé, prise de rendez-vous, collecte de pièces, relances, tableaux de suivi et assistants d’IA encadrés. Il s’adresse aux études de notaires, aux études de commissaires de justice et d’huissiers et aux greffes, au Bénin, dans le reste de l’espace OHADA et en Europe. Le travail se fait à distance, avec des déplacements possibles à Cotonou. Chaque projet se chiffre sur devis ; seuls le site vitrine, la landing page et le référencement ont un tarif de départ affiché.',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Droit et justice',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Études de notaires, de commissaires de justice et d’huissiers, greffes'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation des études notariales, des commissaires de justice et des greffes ?',
            'paragraphes' => [
                'En France, le notariat est le secteur le plus avancé de cette famille de professions. Selon les <a href="https://www.actu-juridique.fr/breves/professions/publication-des-rapports-annuels-2022-du-notariat/">rapports annuels 2022 du notariat</a>, relayés par Actu-Juridique, 17 315 notaires exerçaient dans 6 772 offices et ont établi 5,52 millions d’actes authentiques, dont près de 11 % à distance. Selon <a href="https://www.notaires.fr/fr/profession-notaire/role-du-notaire-et-ses-principaux-domaines-dintervention/lacte-authentique-du-notaire">Notaires de France</a>, l’acte est aujourd’hui majoritairement établi sur support électronique ; les actes électroniques sont conservés par le Conseil supérieur du notariat dans le minutier central électronique, auquel seul le notaire signataire a accès, tandis que les minutes sont gardées 75 ans avant leur remise aux archives.',
                'Pour les commissaires de justice, la bascule vient de la procédure. Selon le <a href="https://www.justice.gouv.fr/actualites/espace-presse/creation-profession-commissaire-justice">ministère de la Justice</a>, les huissiers de justice et les commissaires-priseurs judiciaires forment une seule profession depuis le 1er juillet 2022, et les anciens titres disparaissent le 1er juillet 2026, comme le rappelle le site de la <a href="https://www.commissaire-justice.fr/">Chambre nationale</a>. Celle-ci exploite SECURACT, une plateforme de signification par voie électronique : dans son <a href="https://commissaire-justice.fr/wp-content/uploads/2021/10/CP_CNCJ-signification-electronique_300320.pdf">communiqué du 30 mars 2020</a>, elle compte 730 000 actes délivrés par cette voie en 2019, surtout à destination de l’État et des banques, et annonce leur dématérialisation obligatoire à partir du 1er janvier 2021.',
                'En Afrique francophone, le mouvement part souvent de l’État. Au Bénin, l’Agence nationale du domaine et du foncier a lancé en avril 2020 la plateforme e-notaire, réservée aux notaires pour les opérations foncières, accessible à l’adresse enotaire.andf.bj : selon le <a href="https://www.gouv.bj/article/578/dematerialisation-foncier-agence-nationale-domaine-foncier-lance-plate-forme-notaire/">portail officiel du gouvernement béninois</a>, un titre foncier peut changer de propriétaire en 72 heures, sans que le notaire se déplace. En Côte d’Ivoire, plus d’une trentaine de notaires ont suivi les 4 et 5 mai 2026, à Abidjan, un programme sur l’intégration de l’IA dans la pratique notariale, selon <a href="https://fr.allafrica.com/stories/202605080533.html">AllAfrica</a>.',
                'Dans les greffes de l’espace OHADA, la modernisation passe par le registre du commerce et du crédit mobilier. L’OHADA a prescrit en 2010 l’informatisation du registre, afin de faciliter la publicité et la diffusion de ses informations sous forme électronique, et le logiciel du fichier régional a été réceptionné par le Gabon, selon la <a href="https://www.ohada.com/actualite/4474/rccm-le-gabon-se-lance-dans-la-numerisation.html">présentation de l’OHADA</a>. Le rythme diffère d’un État à l’autre : l’étude qui s’équipe aujourd’hui doit compter avec un guichet public qui change autour d’elle.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d’une étude ou d’un greffe gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Un office public ou ministériel ne digitalise pas tout : l’acte lui-même reste dans le logiciel agréé et sous la signature de l’officier. Les gains se trouvent dans tout ce qui l’entoure.',
            'items' => [
                ['titre' => 'La collecte des pièces d’un dossier', 'texte' => 'Pièces d’identité, actes d’état civil, plans, titres, relevés : les clients les apportent en retard, incomplets, photographiés de travers. Un espace de dépôt avec liste de pièces attendues par type de dossier évite les relances téléphoniques et le classement manuel.'],
                ['titre' => 'La prise de rendez-vous de signature', 'texte' => 'Quand la secrétaire passe une heure par jour à caler des signatures entre plusieurs parties, un agenda partagé avec créneaux par officier et rappels aux comparants fait gagner du temps et réduit les absences.'],
                ['titre' => 'Le suivi des formalités après la signature', 'texte' => 'Publication foncière, enregistrement, demande de titre, purge de délais : chaque dossier traîne des étapes dont personne ne voit l’état. Un tableau d’échéances par dossier et par collaborateur remplace le carnet.'],
                ['titre' => 'Les significations et les tournées', 'texte' => 'Dans une étude de commissaire de justice, la tournée du clerc se prépare la veille : adresses, actes à remettre, retours à saisir. Un tableau de bord des actes en cours et des délais de recours réduit les oublis.'],
                ['titre' => 'Le recouvrement de créances', 'texte' => 'Mises en demeure, relances amiables, suivi des paiements partiels, restitution au créancier : c’est un flux répétitif, bien adapté à l’automatisation, tant que chaque étape juridique reste décidée par l’officier.'],
                ['titre' => 'La délivrance d’extraits et de copies', 'texte' => 'Au greffe comme à l’étude, des demandes d’extraits et de copies arrivent par courrier, par téléphone et au guichet. Un formulaire unique avec paiement et suivi de la demande uniformise le traitement.'],
                ['titre' => 'Les signes que le moment est venu', 'texte' => 'Le client demande où en est son dossier plus d’une fois par semaine, une pièce manquante bloque une signature, le classeur des échéances est tenu par une seule personne, ou l’étude envisage une seconde adresse. Deux de ces signes suffisent pour lancer un cadrage.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Une étude qui n’a pas encore choisi son logiciel métier doit commencer par là ; une autorité de tutelle qui impose une plateforme unique laisse peu de marge. Dans ces cas, on attend ou on se limite à un portail simple.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services de Richard pour une étude, un office d’huissier ou un greffe ?',
            'legende' => 'Besoins typiques des offices publics et ministériels et service du site qui y répond ; chaque ligne se chiffre sur devis.',
            'entetes' => ['Besoin typique', 'Ce que Richard construit', 'Service'],
            'lignes'  => [
                ['Les clients veulent suivre leur dossier sans téléphoner', 'Espace client avec jalons du dossier, pièces demandées, documents à télécharger, messages', '<a href="/services/saas-espace-client">Espace client et SaaS</a>'],
                ['Un outil à la mesure d’un processus que le logiciel agréé ne couvre pas', 'Application de suivi des échéances, de la tournée ou du recouvrement, reliée par export ou API', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Rendez-vous de signature, de constat ou de conseil', 'Agenda en ligne par officier, rappels, pièces à apporter envoyées automatiquement', '<a href="/services/systeme-de-reservation-en-ligne">Système de réservation en ligne</a>'],
                ['Relances de pièces, convocations, accusés de réception', 'Scénarios n8n ou Make : courriels et messages déclenchés par l’étape du dossier', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Brouillons, résumés de pièces, recherche dans le minutier interne', 'Assistants encadrés, hébergement choisi, journal des usages, relecture obligatoire', '<a href="/services/integration-ia-entreprise">Intégration de l’IA en entreprise</a>'],
                ['Une étude sans présence en ligne crédible', 'Site vitrine de l’office : missions, équipe, honoraires réglementés, prise de contact', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Échanges entre le logiciel de l’étude et un autre outil', 'Connecteurs via les interfaces que l’éditeur met à disposition', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Panne, mise à jour, évolution d’un portail déjà livré', 'Sauvegardes, correctifs, surveillance, évolutions mineures', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Logiciels métier et intégrations : faut-il garder l’existant, le relier ou le remplacer ?',
            'legende' => 'Principe de travail proposé par Richard ; la compatibilité de chaque logiciel agréé se vérifie auprès de son éditeur avant tout engagement.',
            'entetes' => ['Situation', 'Réflexe proposé', 'Pourquoi'],
            'lignes'  => [
                ['Logiciel de rédaction d’actes agréé par la profession', 'Garder, ne jamais remplacer', 'Il porte la conformité de l’acte, la signature qualifiée et le lien avec les systèmes de la profession ; un développement parallèle serait un risque.'],
                ['Comptabilité des fonds de clients et comptabilité de l’office', 'Garder le logiciel agréé ; relier seulement ce que l’éditeur expose', 'Ces comptabilités obéissent à des règles propres, contrôlées par la profession ; toute exportation se valide avec la chambre ou l’éditeur.'],
                ['Plateformes publiques (ANDF au Bénin, plateformes des chambres en France, registres)', 'Garder, préparer les données en amont', 'Ce sont les guichets de l’État ou de la profession ; le portail de l’étude prépare les pièces pour y entrer sans ressaisie.'],
                ['Agenda, relances et tableaux de suivi tenus sur papier ou tableur', 'Remplacer par un outil sur mesure', 'Aucune contrainte réglementaire sur cet outil ; le gain est immédiat.'],
                ['Gestion des honoraires, devis et facturation non réglementés', 'Remplacer ou relier à Odoo ou Dolibarr si le périmètre le permet', 'Ces ERP gèrent bien la facturation ; la frontière avec la comptabilité réglementée de l’office se trace avant de commencer.'],
                ['Site web ancien, sans formulaire sécurisé', 'Refaire et relier au portail', 'Un site vitrine propre sert de porte d’entrée vers l’espace client.'],
                ['Registre ou fichier de greffe', 'Relier, ne pas dupliquer', 'Le registre appartient à la juridiction ; l’outil de Richard se limite à l’accueil, à la demande d’extrait et au suivi.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l’IA dans une étude ou un greffe, et que ne doit-elle jamais faire ?',
            'intro' => 'Le notaire, le commissaire de justice et le greffier tiennent leur autorité de la loi : l’IA les assiste, elle ne signe, n’authentifie et ne décide à leur place.',
            'items' => [
                ['titre' => 'Préparer un brouillon de courrier ou de projet d’acte', 'texte' => 'L’IA peut proposer un premier texte à partir d’un modèle de l’office et des données du dossier. L’officier relit, corrige et reste l’auteur de l’acte.'],
                ['titre' => 'Résumer et classer les pièces reçues', 'texte' => 'Un assistant peut nommer une pièce, repérer qu’un justificatif manque, classer par dossier. Une erreur de classement doit être détectable : la pièce d’origine reste toujours accessible.'],
                ['titre' => 'Chercher dans la documentation interne', 'texte' => 'Notes de l’office, circulaires de la chambre, modèles : un moteur de recherche à partir de ces documents, avec renvoi à la source, fait gagner du temps. La réponse sans source n’est jamais retenue.'],
                ['titre' => 'Répondre aux questions courantes des clients', 'texte' => 'Horaires, pièces à apporter, déroulé d’une vente : un assistant limité à ces sujets, avec renvoi à l’étude pour tout le reste, désengorge le standard. Il ne donne jamais de conseil juridique.'],
                ['titre' => 'Ce que l’IA ne fait jamais', 'texte' => 'Authentifier un acte, constater un fait, signifier, trancher entre deux interprétations, déclarer un soupçon, ou décider du sort d’un dossier. Ces gestes engagent l’officier, qui en répond.'],
                ['titre' => 'Le secret professionnel', 'texte' => 'Les pièces d’un client ne partent pas dans un outil public sans accord et sans garanties : le choix d’un hébergement, d’un contrat de sous-traitance et d’une anonymisation des données se fait avant le premier essai.'],
                ['titre' => 'La traçabilité', 'texte' => 'Chaque usage de l’IA laisse une trace : qui a demandé quoi, sur quel dossier, avec quelle réponse, et qui a validé. En cas de contestation, l’office peut montrer que la décision est humaine.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond d’une erreur d’un assistant installé sur le site de l’étude ?',
            'texte' => 'L’étude, jamais l’outil. Dans l’affaire <a href="/histoires/air-canada-chatbot">Air Canada</a>, le tribunal a refusé qu’une entreprise se décharge sur son chatbot de ce qu’il avait dit à un client. Pour un office, l’exigence est plus forte encore : un assistant qui répond à un client doit être borné par des règles écrites, afficher qu’il n’est pas un conseil, et renvoyer vers l’étude dès qu’une question touche au fond.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Données personnelles, lutte contre le blanchiment, facturation et paiements : quelles règles encadrent le projet ?',
            'paragraphes' => [
                'La lutte contre le blanchiment structure le métier de notaire. Selon le <a href="https://www.actu-juridique.fr/breves/professions/rapport-tracfin-2022-les-declarations-par-les-notaires-sont-en-hausse/">rapport Tracfin 2022</a>, les notaires français ont transmis 2 670 déclarations de soupçon, contre 1 837 en 2021, soit une hausse de 45 %. Le <a href="https://www.actu-juridique.fr/breves/professions/tracfin-rapport-dactivite-2024/">rapport d’activité 2024</a> note que la majorité de ces déclarations concernent l’immobilier résidentiel. Un portail qui collecte les pièces d’identité et les justificatifs d’origine des fonds doit donc les conserver, les dater et les retrouver : il aide l’office à documenter sa vigilance, il ne la remplace pas.',
                'Les données personnelles viennent ensuite. Un notaire béninois qui confie un dossier de succession à un hébergeur étranger relève de l’article 391 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> : le transfert hors du pays suppose que l’Autorité constate un niveau de protection équivalent, ou l’une des exceptions de l’article 392, comme le consentement exprès de la personne concernée. À Abidjan, une étude doit déclarer son portail à l’ARTCI ou obtenir son autorisation, selon la loi n° 2013-450 du 19 juin 2013 rappelée par <a href="https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable">CIO Mag</a>. À Dakar, le fichier d’un huissier tombe sous la loi n° 2008-12 du 25 janvier 2008 et sous la Commission de protection des données personnelles, présentée par <a href="https://www.osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html">Osiris</a>.',
                'En Europe, le RGPD s’applique. L’article 28, présenté par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL</a>, impose à l’office responsable du traitement un contrat avec son sous-traitant, qui fixe l’objet, la durée et les instructions. Un prestataire installé hors de l’Union exige en plus des garanties de transfert, selon les articles 45 et 46 du <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5">chapitre V</a>. Pour une étude française, le contrat avec Richard est donc rédigé avant tout accès à des pièces de clients, et les essais se font sur des dossiers fictifs.',
                'Pour la procédure d’exécution, l’Acte uniforme de l’OHADA sur les procédures simplifiées de recouvrement et les voies d’exécution a été remplacé par un nouvel acte adopté le 17 octobre 2023 par le Conseil des ministres de l’OHADA, qui a abrogé celui du 10 avril 1998 et s’applique dans les dix-sept États, d’après <a href="https://www.ohada.com/actualite/7340/ceremonie-de-presentation-du-code-ohada-du-recouvrement-et-des-voies-dexecution-le-1er-juin-2024-a-ouagadougou-burkina-faso.html">l’OHADA</a> et <a href="https://www.ohada.com/actualite/6968/ohada-les-etats-parties-adoptent-la-revision-de-lacte-uniforme-portant-organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution.html">l’OHADA</a>. Les modèles de mise en demeure et de relance d’un outil de recouvrement doivent donc suivre le texte en vigueur. Pour les honoraires, les droits et les fonds de clients, les règles de l’ordre ou de la chambre de chaque pays s’appliquent : elles se vérifient auprès d’elle avant de lancer le projet. Côté paiement, un lien de règlement par mobile money ou par carte peut s’ajouter pour les provisions de frais, sous réserve de l’accord de l’autorité de tutelle.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemblerait le projet d’une étude, d’un office d’huissier ou d’un greffe ?',
            'items' => [
                ['secteur' => 'Étude de notaire à Cotonou, Bénin', 'probleme' => 'Les clients apportent leurs titres fonciers et leurs pièces en plusieurs passages, et le clerc ressaisit les données pour la plateforme e-notaire de l’ANDF.', 'solution' => 'Un espace de dépôt avec liste de pièces par type de vente, des champs structurés, un tableau d’étapes du dossier et un export prêt pour la saisie sur la plateforme publique. L’acte et la plateforme restent inchangés.'],
                ['secteur' => 'Étude de notaire à Abidjan, Côte d’Ivoire', 'probleme' => 'Les rendez-vous de signature se décalent faute de pièces, et les parties ne savent pas ce qu’il reste à fournir.', 'solution' => 'Prise de rendez-vous en ligne avec pièces attendues, rappels par message, et un assistant limité aux questions pratiques. Les données sont déclarées à l’ARTCI par l’étude, avec l’aide de Richard pour décrire les flux.'],
                ['secteur' => 'Étude d’huissier à Dakar, Sénégal', 'probleme' => 'Le recouvrement de créances se suit dans un tableur, et les délais de recours sont notés au crayon sur la copie.', 'solution' => 'Application de suivi des mandats : relances amiables automatiques, calendrier des délais, état des paiements partiels, état de restitution au créancier. Chaque acte reste rédigé et signé par l’huissier.'],
                ['secteur' => 'Office de commissaire de justice, France', 'probleme' => 'Les demandes de constat arrivent par téléphone, avec des informations incomplètes sur le lieu et l’objet.', 'solution' => 'Formulaire de demande de constat avec photos, lieu et délai, devis envoyé après validation de l’étude, rappel du rendez-vous, puis accès sécurisé au procès-verbal. Les données sont traitées dans le cadre d’un contrat de sous-traitance conforme à l’article 28 du RGPD.'],
                ['secteur' => 'Étude de notaire en France', 'probleme' => 'Les clients attendent une signature à distance et demandent l’état de leur dossier chaque semaine.', 'solution' => 'Portail de suivi relié au logiciel de l’office par les exports disponibles : jalons, documents à relire, convocation à la signature, et envoi des documents après acte. La signature électronique qualifiée reste celle du système agréé.'],
                ['secteur' => 'Greffe d’un tribunal de commerce de l’espace OHADA', 'probleme' => 'Les demandes d’extraits du registre arrivent au guichet, et l’usager ignore l’état de sa demande.', 'solution' => 'Formulaire de demande, paiement par mobile money ou carte, numéro de suivi et notification lorsque le document est prêt. Le registre reste tenu par le greffe ; l’outil ne le copie pas.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet pour un office, du diagnostic au suivi des dossiers ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous présentez l’office, son logiciel agréé et ce qui retarde les dossiers. L’échange, gratuit, tranche une question simple : portail, automatisation ou rien du tout.'],
                ['titre' => 'Diagnostic du circuit d’un dossier', 'duree' => 'Selon le projet', 'texte' => 'Richard suit un dossier réel de la première prise de contact à l’archivage, avec la secrétaire, le clerc et l’officier : qui reçoit quoi, quand, avec quels outils, et où le dossier attend.'],
                ['titre' => 'Cartographie des données et des règles', 'duree' => 'Selon le projet', 'texte' => 'On liste les données manipulées, leur sensibilité, leur lieu de stockage, les obligations de la chambre ou de l’ordre, les interfaces offertes par le logiciel agréé. Les points à confirmer auprès de l’éditeur ou de l’autorité sont notés.'],
                ['titre' => 'Maquette et validation', 'duree' => 'Selon le projet', 'texte' => 'Une maquette du portail ou du tableau de suivi est montrée à l’équipe avant tout développement. On y corrige les libellés, l’ordre des étapes et les droits d’accès.'],
                ['titre' => 'Développement et essais sur dossiers fictifs', 'duree' => 'Selon le projet', 'texte' => 'Le projet est construit par paliers. Les essais se font sur des dossiers inventés ; aucune pièce réelle n’est confiée tant que le contrat de sous-traitance n’est pas signé.'],
                ['titre' => 'Formation et mise en service', 'duree' => 'Selon le projet', 'texte' => 'Les secrétaires, clercs et officiers apprennent à se servir de l’outil sur des cas de l’office. La mise en service commence par un type de dossier, puis s’étend.'],
                ['titre' => 'Suivi et évolutions', 'duree' => 'Après la mise en service', 'texte' => 'Contrôles réguliers des journaux, ajustement des messages, adaptation aux évolutions des plateformes publiques, sauvegardes vérifiées. Les évolutions importantes font l’objet d’un nouveau devis.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet pour une étude notariale, un office de commissaire de justice ou un greffe ?',
            'intro'      => 'Seuls trois tarifs de départ sont publiés sur ce site, et ils concernent des pages web : la landing page à partir de 150 000 FCFA (environ 229 €), le site vitrine à partir de 300 000 FCFA (environ 457 €) et le référencement naturel à partir de 75 000 FCFA (environ 114 €). Un portail client, un outil de suivi des échéances ou un assistant encadré ne figurent pas dans cette liste : leur prix dépend du logiciel agréé de l’office et se fixe sur devis. Honoraires de la prestation payables par Mobile Money (MTN, Moov), carte, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Site vitrine de l’office', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Présentation des missions et de l’équipe', 'Formulaire de contact', 'Pages adaptées aux recherches locales']],
                ['offre' => 'Portail client et prise de rendez-vous', 'prix' => 'Sur devis', 'inclus' => ['Espace sécurisé par dossier', 'Liste de pièces attendues', 'Agenda en ligne et rappels']],
                ['offre' => 'Automatisation du suivi et des relances', 'prix' => 'Sur devis', 'inclus' => ['Scénarios par étape du dossier', 'Tableau d’échéances', 'Journal des envois']],
                ['offre' => 'Assistant encadré', 'prix' => 'Sur devis', 'inclus' => ['Périmètre écrit des réponses', 'Hébergement et contrat de sous-traitance', 'Journal des usages et relecture humaine']],
            ],
            'variations' => [
                'Le nombre d’officiers, de collaborateurs et de sites de l’office.',
                'Le logiciel agréé utilisé et les interfaces que son éditeur met à disposition.',
                'Le nombre de types de dossiers couverts : ventes, successions, constats, recouvrement, extraits.',
                'Le niveau de sécurité demandé : authentification renforcée, journal détaillé, hébergement choisi.',
                'Les paiements en ligne éventuels, selon l’accord de la chambre ou de l’ordre.',
                'La reprise de pièces numérisées et leur indexation.',
                'La langue des interfaces et le nombre de pays couverts.',
                'La formation des équipes et la maintenance.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent le plus souvent les études qui se digitalisent ?',
            'intro' => 'Les erreurs viennent rarement de la technique : elles tiennent à l’ordre dans lequel on engage les choses.',
            'items' => [
                ['titre' => 'Vouloir remplacer le logiciel agréé', 'texte' => 'Un outil parallèle pour rédiger ou conserver des actes fait courir un risque de non-conformité. On s’appuie sur lui, on ne le contourne pas.'],
                ['titre' => 'Confier des pièces réelles à un outil d’essai', 'texte' => 'Une pièce d’identité ou un titre foncier envoyé dans un assistant public sort du secret de l’étude. Les essais se font avec des dossiers inventés.'],
                ['titre' => 'Oublier la durée de conservation', 'texte' => 'Une minute, un procès-verbal ou une pièce de dossier se conservent selon des règles propres à chaque pays. Le portail ne doit ni les effacer trop tôt ni les garder sans limite : la règle se confirme auprès de la chambre.'],
                ['titre' => 'Laisser un assistant répondre sur le fond', 'texte' => 'Un assistant qui explique un régime matrimonial ou un délai de recours donne un conseil juridique. Il doit renvoyer l’usager à l’étude.'],
                ['titre' => 'Négliger les droits d’accès', 'texte' => 'Une secrétaire n’a pas à lire un dossier de succession qui ne la concerne pas. Les droits se définissent par rôle, et chaque consultation laisse une trace.'],
                ['titre' => 'Ne pas préparer les clients', 'texte' => 'Une partie âgée ou sans connexion fiable doit pouvoir signer à l’étude. Le portail est un confort, pas une condition.'],
                ['titre' => 'Se lancer sans l’accord de la tutelle', 'texte' => 'Paiement en ligne, signature à distance, hébergement hors du pays : chacune de ces décisions peut être encadrée par l’ordre, la chambre ou le ministère. Elle se confirme avant de développer.'],
                ['titre' => 'Dépendre d’une seule personne', 'texte' => 'Le tableur qu’une seule secrétaire comprend n’est pas mieux qu’un cahier. Le nouvel outil se documente et se partage.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les notaires, les greffiers et les commissaires de justice aux nouveaux outils ?',
            'paragraphes' => [
                'La formation vient après le projet, pas avant. Richard a déjà formé des notaires et des greffiers, et il peut former des commissaires de justice et des huissiers. Les trois parcours sont décrits sur les pages métier : <a href="/formations/metier/notaires">formation pour notaires</a>, <a href="/formations/metier/greffiers">formation pour greffiers</a> et <a href="/formations/metier/commissaires-justice-huissiers">formation pour commissaires de justice et huissiers</a>.',
                'Quatre fiches complètent ces parcours pour les équipes de l’office : <a href="/formations/ia-droit-ohada">IA et droit OHADA</a> pour la recherche et la rédaction, <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> pour le secret et la protection des données, <a href="/formations/gouvernance-ia">gouvernance de l’IA</a> pour fixer une charte d’usage à l’étude, et <a href="/formations/ia-processus-metier">IA dans les processus métier</a> pour décider quelles étapes confier à un outil. La <a href="/formations/cybersecurite-employes">cybersécurité pour les employés</a> convient à toute l’équipe.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier ce projet à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il ne remplace pas les logiciels agréés de la profession : il construit autour d’eux. Son métier est de relier un portail, un agenda, une automatisation ou un assistant à ce que l’étude utilise déjà, en laissant l’acte, la signature et la décision à l’officier. Auteur de <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et co-fondateur d’<a href="https://audyxa.com">Audyxa</a>, il connaît la difficulté de cadrer un assistant pour qu’il reste dans son rôle.',
                'Sa méthode proposée : suivre un dossier réel de bout en bout, tester sur des dossiers inventés, faire signer un contrat de sous-traitance avant toute pièce réelle et remettre les accès au nom de l’office. Ses autres travaux figurent sur la page <a href="/realisations/">réalisations</a> et son parcours sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer pour votre étude, votre office ou votre greffe ?',
            'texte'  => 'Indiquez le type d’office, le logiciel agréé qu’il utilise et le dossier qui traîne le plus : Richard répond sous 24 heures. Le devis suit un premier échange gratuit.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Un portail client peut-il remplacer le logiciel de rédaction d’actes de mon étude ?', 'r' => 'Non, et ce n’est pas l’objectif. Le logiciel agréé porte la conformité de l’acte, la signature qualifiée et le lien avec les systèmes de la profession. Le portail s’en distingue : il reçoit les pièces, informe le client, prend les rendez-vous et prépare les données, puis laisse l’acte au logiciel de l’office.'],
        ['q' => 'Peut-on faire signer un acte notarié à distance ?', 'r' => 'En France, le décret du 3 avril 2020 l’avait permis pour tous les actes pendant la crise sanitaire, puis a cessé de s’appliquer le 10 août 2020 ; le décret du 20 novembre 2020 n’a pérennisé que la procuration authentique à distance, selon Notaires de France. La signature se fait par le système agréé de la profession, pas par un portail tiers. Dans un autre pays, la règle se vérifie auprès de la chambre des notaires.'],
        ['q' => 'Comment un portail aide-t-il l’étude à respecter la lutte contre le blanchiment ?', 'r' => 'Il collecte les pièces d’identité et les justificatifs d’origine des fonds, les date et les conserve de manière retrouvable. La vigilance et la déclaration de soupçon restent des décisions de l’officier, jamais d’un outil. Les notaires français ont transmis 2 670 déclarations en 2022, selon le rapport Tracfin.'],
        ['q' => 'Où héberger les pièces d’un dossier de succession ou de vente ?', 'r' => 'Le choix dépend de la loi applicable et de l’avis de la chambre. Au Bénin, un transfert hors du pays suppose le constat d’un niveau de protection équivalent ou le consentement exprès, selon les articles 391 et 392 de la loi n° 2017-20. En Europe, un contrat de sous-traitance conforme à l’article 28 du RGPD est exigé. Le choix est fait avant le premier essai.'],
        ['q' => 'Un huissier ou commissaire de justice peut-il automatiser ses relances de recouvrement ?', 'r' => 'Oui pour la phase amiable : mises en demeure standard, rappels, suivi des paiements partiels. Chaque acte de procédure reste rédigé, signé et signifié par l’officier. Les modèles suivent l’Acte uniforme de l’OHADA adopté le 17 octobre 2023, ou le droit français selon le pays.'],
        ['q' => 'Un greffe peut-il proposer la demande d’extraits en ligne ?', 'r' => 'Oui, si la juridiction ou le ministère l’autorise. L’outil de Richard se limite à l’accueil : formulaire, paiement, suivi de la demande. Le registre reste tenu par le greffe. Dans l’espace OHADA, l’informatisation du registre du commerce est prescrite depuis 2010, d’après la présentation de l’OHADA ; le rythme varie selon les États.'],
        ['q' => 'Les honoraires et provisions peuvent-ils être payés par mobile money ?', 'r' => 'Techniquement oui, avec un agrégateur de paiement. Juridiquement, la question dépend des règles de la profession sur les fonds de clients et les provisions : elle se confirme auprès de la chambre ou de l’ordre avant le développement. Le comparatif des agrégateurs publié sur ce site aide ensuite à choisir.'],
        ['q' => 'Que peut dire un assistant d’IA aux clients de l’étude ?', 'r' => 'Seulement ce que l’étude a écrit : horaires, pièces à apporter, étapes d’une vente, état du dossier. Il ne donne aucun conseil juridique et renvoie vers l’étude pour toute question de fond. L’étude répond de ses propos, comme l’a rappelé le tribunal dans l’affaire Air Canada.'],
        ['q' => 'Faut-il déclarer le portail auprès de l’autorité de protection des données ?', 'r' => 'Cela dépend du pays. En Côte d’Ivoire, les traitements sont soumis à déclaration ou autorisation préalable de l’ARTCI. Au Bénin et au Sénégal, l’autorité nationale applique ses propres règles. En Europe, c’est le registre des traitements de l’office qui est tenu. Richard décrit les flux ; la démarche relève de l’étude.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Le travail se fait à distance dans les pays d’Afrique francophone, en Europe et au Canada, avec des déplacements possibles à Cotonou. Les clients hors d’Afrique règlent par carte bancaire, PayPal ou virement.'],
    ],

    'sources' => [
        ['titre' => 'Actu-Juridique, publication des rapports annuels 2022 du notariat', 'url' => 'https://www.actu-juridique.fr/breves/professions/publication-des-rapports-annuels-2022-du-notariat/', 'date' => '2026-10-07'],
        ['titre' => 'Actu-Juridique, rapport Tracfin 2022 : les déclarations par les notaires sont en hausse', 'url' => 'https://www.actu-juridique.fr/breves/professions/rapport-tracfin-2022-les-declarations-par-les-notaires-sont-en-hausse/', 'date' => '2026-10-07'],
        ['titre' => 'Actu-Juridique, Tracfin : rapport d’activité des professions déclarantes pour 2024', 'url' => 'https://www.actu-juridique.fr/breves/professions/tracfin-rapport-dactivite-2024/', 'date' => '2026-10-07'],
        ['titre' => 'Notaires de France, l’acte authentique du notaire', 'url' => 'https://www.notaires.fr/fr/profession-notaire/role-du-notaire-et-ses-principaux-domaines-dintervention/lacte-authentique-du-notaire', 'date' => '2026-10-07'],
        ['titre' => 'Chambre nationale des commissaires de justice, présentation de la profession', 'url' => 'https://www.commissaire-justice.fr/', 'date' => '2026-10-07'],
        ['titre' => 'Chambre nationale des commissaires de justice, communiqué sur la signification électronique', 'url' => 'https://commissaire-justice.fr/wp-content/uploads/2021/10/CP_CNCJ-signification-electronique_300320.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, l’ANDF lance la plateforme e-notaire', 'url' => 'https://www.gouv.bj/article/578/dematerialisation-foncier-agence-nationale-domaine-foncier-lance-plate-forme-notaire/', 'date' => '2026-10-07'],
        ['titre' => 'Ministère de la Justice, création de la profession de commissaire de justice', 'url' => 'https://www.justice.gouv.fr/actualites/espace-presse/creation-profession-commissaire-justice', 'date' => '2026-10-07'],
        ['titre' => 'OHADA, présentation du Code du recouvrement et des voies d’exécution (Acte uniforme du 17 octobre 2023)', 'url' => 'https://www.ohada.com/actualite/7340/ceremonie-de-presentation-du-code-ohada-du-recouvrement-et-des-voies-dexecution-le-1er-juin-2024-a-ouagadougou-burkina-faso.html', 'date' => '2026-10-07'],
        ['titre' => 'OHADA, le RCCM se lance dans la numérisation', 'url' => 'https://www.ohada.com/actualite/4474/rccm-le-gabon-se-lance-dans-la-numerisation.html', 'date' => '2026-10-07'],
        ['titre' => 'OHADA, révision de l’Acte uniforme sur les procédures simplifiées de recouvrement et les voies d’exécution', 'url' => 'https://www.ohada.com/actualite/6968/ohada-les-etats-parties-adoptent-la-revision-de-lacte-uniforme-portant-organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution.html', 'date' => '2026-10-07'],
        ['titre' => 'AllAfrica, les notaires ivoiriens entrent dans l’ère de l’intelligence artificielle', 'url' => 'https://fr.allafrica.com/stories/202605080533.html', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, ARTCI : traitement des données personnelles soumis à autorisation préalable', 'url' => 'https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, loi n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel (Sénégal)', 'url' => 'https://www.osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre IV (article 28, sous-traitant)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre V (articles 45 et 46, transferts hors de l’Union)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['application-web-sur-mesure', 'saas-espace-client', 'automatisation-ia', 'integration-ia-entreprise', 'site-vitrine-professionnel', 'systeme-de-reservation-en-ligne', 'api-rest-integrations', 'maintenance-support'],
        'metiers'     => ['notaires', 'commissaires-justice-huissiers', 'greffiers'],
        'formations'  => ['ia-droit-ohada', 'ia-ethique-conformite', 'gouvernance-ia', 'ia-processus-metier', 'cybersecurite-employes'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
        'histoires'   => ['air-canada-chatbot'],
    ],
];
