<?php
// ============================================================
// data/hubs/secteurs.php · Hub /secteurs/ (vague 1E).
// Le gabarit registre-hub.php liste lui-même les pages secteurs publiées
// (champ « liste »), rangées par univers : le texte ne cite aucune page secteur.
// Faits de Richard lus dans faits.php ; cadres publics consultés le 07/10/2026
// (voir « sources »).
// ============================================================
declare(strict_types=1);

$tarifs = fait('tarifs_depart');
$euros  = static fn(string $fcfa): string => number_format((int) round(((int) preg_replace('/\D/', '', $fcfa)) / 655.957), 0, ',', ' ') . ' €';
$depart = static fn(string $nom): string => $tarifs[$nom] . ' (environ ' . $euros($tarifs[$nom]) . ')';

return [
    'titre'   => 'La digitalisation par secteur : ce que Richard SALANON apporte aux entreprises et aux organisations selon leur métier',
    'liste'   => 'secteur',
    'title'   => 'Digitalisation par secteur d\'activité | Richard SALANON',
    'meta'    => 'Droit, finance, santé, commerce, secteur public, BTP : ce qui change d\'un secteur à l\'autre pour digitaliser et équiper en IA, et comment démarrer.',
    'en_bref' => 'Cette page s\'adresse aux dirigeants et responsables d\'entreprises et d\'organisations d\'Afrique francophone et d\'Europe qui veulent digitaliser leur activité sans copier le voisin. Richard SALANON y explique ce qui change d\'un univers professionnel à l\'autre (secret, données de santé, traçabilité, paiement, tutelle), les règles communes et la méthode d\'un projet. Les tarifs de départ sont publiés, tout le reste se chiffre sur devis après un premier échange gratuit.',
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Entreprises et organisations, Afrique francophone et Europe'],
        ['l' => 'Univers couverts', 'v' => 'Sept univers professionnels'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Réponse', 'v' => 'sous ' . fait('delai_reponse')],
    ],
    'sections' => [
        [
            'type'  => 'prose',
            'titre' => 'Pourquoi digitaliser une entreprise différemment selon son secteur ?',
            'paragraphes' => [
                'Un site, un logiciel de gestion ou un assistant d\'intelligence artificielle ne se posent pas de la même façon dans un cabinet d\'avocats, dans un grossiste de Cotonou, dans une école de Lomé ou dans un bureau d\'études de Lyon. Les outils sont souvent les mêmes. Ce qui change, c\'est la règle qui s\'impose à eux : un secret professionnel que la loi protège, des données de santé qu\'il ne faut jamais confier à n\'importe quel service, un stock à tracer lot par lot, un paiement qui doit arriver en mobile money avant que la marchandise parte, un ministère de tutelle dont il faut respecter les circulaires.',
                'C\'est pourquoi cette section du site est organisée par secteur et non par technologie. Quand un dirigeant dit « je veux digitaliser mon activité », il pense à des gestes précis : encaisser, planifier, facturer, conserver des dossiers, répondre aux clients, rendre compte à un financeur. Une page par secteur permet de partir de ces gestes, avec le vocabulaire du métier, les logiciels que l\'on y rencontre vraiment et les erreurs qu\'on y commet le plus souvent.',
                'Cette page d\'accueil sert de boussole. Elle explique comment choisir par où commencer, ce qui pèse le plus dans chacun des sept univers professionnels, ce que tous les secteurs ont en commun en Afrique francophone et en Europe, comment se déroule un projet et ce qu\'il coûte. Les pages de chaque secteur, listées sur cette page, développent ensuite les processus, les logiciels, les règles et les cas d\'usage propres à chacun.',
            ],
        ],
        [
            'type'  => 'prose',
            'titre' => 'Que signifie « digitaliser » selon Richard SALANON ?',
            'paragraphes' => [
                'Pour Richard, digitaliser ne veut pas dire acheter un logiciel. Cela veut dire retirer d\'une activité les tâches qu\'une machine fait mieux et plus sûrement qu\'une personne (ressaisir, recopier, relancer, vérifier un calcul, chercher un document), afin que les personnes se consacrent à ce que seules elles savent faire : conseiller, soigner, enseigner, négocier, décider. Un projet réussi se reconnaît à une chose simple : le travail du lundi matin est différent, et l\'équipe ne souhaite pas revenir à l\'ancienne méthode.',
                'Le travail couvre trois familles de besoins. La première concerne la <strong>visibilité et la relation client</strong> : site vitrine, boutique, prise de rendez-vous ou de réservation, fiche Google, messagerie WhatsApp. La deuxième concerne la <strong>gestion interne</strong> : ERP comme Odoo ou Dolibarr, applications web ou mobiles sur mesure, espaces clients, intégrations entre logiciels. La troisième concerne <strong>l\'automatisation et l\'IA</strong> : flux qui suppriment les ressaisies, assistants qui rédigent des brouillons, agents qui répondent aux questions courantes, toujours avec une validation humaine là où une erreur coûterait cher.',
                'Ces trois familles se retrouvent dans tous les secteurs, mais dans un ordre et avec des garde-fous différents. Une pharmacie commencera rarement par un chatbot ; un cabinet de conseil commencera rarement par un module de stock. L\'enjeu d\'un bon diagnostic est de trouver, dans votre secteur et dans votre structure, le premier chantier qui rapporte vite et ne met rien en danger.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment choisir par où commencer selon son secteur ?',
            'intro' => 'Cinq questions suffisent pour situer votre point de départ. Répondez-y par écrit, avec les personnes qui font réellement le travail, avant de regarder le moindre logiciel.',
            'items' => [
                ['titre' => 'Qu\'est-ce qui vous fait perdre le plus de temps chaque semaine ?', 'texte' => 'Notez les tâches répétitives et le temps qu\'elles prennent : saisir des commandes, établir des devis, relancer des impayés, retrouver un dossier, recopier des données d\'un tableur vers un autre. Le premier chantier est presque toujours le plus répétitif, pas le plus spectaculaire.'],
                ['titre' => 'Quelle règle de votre métier ne se négocie pas ?', 'texte' => 'Secret professionnel, confidentialité des dossiers médicaux, traçabilité des lots, conservation légale des pièces comptables, respect d\'un cahier des charges de bailleur : cette règle fixe ce que l\'on peut héberger, où, et ce que l\'IA a le droit de toucher. Elle se pose avant le choix de l\'outil, jamais après.'],
                ['titre' => 'Par quel canal vos clients ou usagers vous joignent-ils vraiment ?', 'texte' => 'Dans beaucoup de pays d\'Afrique francophone, c\'est WhatsApp et l\'appel téléphonique ; en Europe, le courriel et un espace en ligne. Digitaliser, c\'est d\'abord s\'installer là où se trouve déjà votre public, puis structurer ce canal.'],
                ['titre' => 'Comment l\'argent entre-t-il chez vous ?', 'texte' => 'Espèces, mobile money, carte, virement, financement d\'un bailleur, remboursement d\'un tiers payant : la chaîne d\'encaissement détermine les intégrations à prévoir. Un commerce, une école et une ONG n\'ont pas le même circuit, donc pas la même priorité.'],
                ['titre' => 'Qui utilisera l\'outil chaque jour, et avec quel équipement ?', 'texte' => 'Un téléphone d\'entrée de gamme sur un chantier, un ordinateur partagé à l\'accueil d\'une école, un poste fixe au comptoir : l\'équipement et la connexion disponibles décident du type d\'application, en ligne ou capable de fonctionner hors connexion.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel point de départ selon la situation de votre organisation ?',
            'legende' => 'Premiers chantiers fréquents, à confirmer par un diagnostic ; les services cités sont détaillés sur leurs pages',
            'entetes' => ['Situation de départ', 'Premier chantier raisonnable', 'Service concerné'],
            'lignes'  => [
                ['Tout se fait sur papier, tableur et messages dispersés, sans outil commun', 'Cartographier les processus et choisir un outil central avant d\'en acheter un', '<a href="/services/audit-etude-de-projet">Audit et étude de projet</a>'],
                ['Les ventes, les stocks et la comptabilité ne communiquent pas entre eux', 'Un ERP paramétré pour votre métier, avec reprise des données', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Des logiciels existent mais l\'équipe ressaisit les mêmes données de l\'un à l\'autre', 'Relier les outils par des automatisations ou des interfaces', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Votre processus ne ressemble à aucun logiciel du marché', 'Une application web ou mobile conçue pour votre procédure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Vos clients ou usagers demandent toujours les mêmes informations et documents', 'Un espace client sécurisé ou un assistant sur WhatsApp, avec validation humaine', '<a href="/services/saas-espace-client">Espace client et SaaS</a>'],
                ['Votre équipe utilise déjà des assistants d\'IA, sans règle commune', 'Un cadre d\'usage écrit, puis une intégration maîtrisée dans vos outils', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Vous hésitez entre plusieurs voies et voulez un regard extérieur', 'Un accompagnement de cadrage qui hiérarchise les chantiers', '<a href="/services/consultant-digitalisation">Consultant en digitalisation</a>'],
            ],
        ],
        [
            'type'  => 'prose',
            'titre' => 'Quels sont les sept univers professionnels, et pourquoi les regrouper ?',
            'paragraphes' => [
                'Les secteurs d\'activité sont nombreux, mais leurs contraintes se regroupent en familles. Un notaire et un avocat ne font pas le même métier, pourtant tous deux gardent un secret et conservent des actes ; une clinique et une pharmacie ne vendent pas la même chose, pourtant toutes deux traitent des données de santé et des produits réglementés. Le site regroupe donc les secteurs en sept univers : <strong>Droit et justice</strong>, <strong>Chiffre et finance</strong>, <strong>Direction et gestion</strong>, <strong>Commerce et communication</strong>, <strong>Santé et social</strong>, <strong>Secteur public et éducation</strong> et <strong>Technique et terrain</strong>.',
                'Ce regroupement a un intérêt pratique. Si votre secteur précis n\'apparaît pas dans la liste, l\'univers dont il est le plus proche vous donne déjà les bonnes questions à poser et les bons réflexes. Il a aussi un intérêt de méthode : les garde-fous d\'un univers se transposent d\'un secteur à l\'autre, alors que les outils, eux, varient. La section suivante détaille, univers par univers, ce qui pèse le plus.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qu\'est-ce qui change d\'un univers à l\'autre ?',
            'intro' => 'Pour chaque univers, voici ce qui pèse le plus dans un projet de digitalisation et ce qui doit être décidé en premier. Ces lignes sont des pistes de métier, pas des règles : la règle exacte de votre pays ou de votre ordre est à vérifier auprès de l\'ordre, de l\'autorité ou de la tutelle concernés avant de lancer le projet.',
            'items' => [
                ['titre' => 'Droit et justice : le secret professionnel avant tout', 'texte' => 'Avocats, notaires, commissaires de justice, greffiers, juristes d\'entreprise : le dossier est confidentiel par nature et l\'acte a une valeur de preuve. Il faut décider où sont hébergés les documents, qui y accède, comment on conserve et on date une pièce, et ce qu\'un assistant d\'IA peut lire. Un résumé automatique d\'une pièce de procédure ne sort jamais sans relecture du professionnel, et aucune pièce confidentielle ne doit transiter par un service dont les conditions de réutilisation des données sont floues.'],
                ['titre' => 'Chiffre et finance : l\'exactitude et la conformité', 'texte' => 'Experts-comptables, auditeurs, banques, microfinance, assurances : les erreurs coûtent de l\'argent et des agréments. Les priorités sont la piste d\'audit, les droits d\'accès par profil, le respect du plan comptable (SYSCOHADA dans l\'espace OHADA), la règle des autorités de supervision et les interfaces fiables avec le mobile money et les banques. L\'IA y sert à préparer, rapprocher, détecter des écarts ; elle ne valide pas une écriture ni n\'octroie un crédit.'],
                ['titre' => 'Direction et gestion : l\'organisation avant l\'outil', 'texte' => 'Cabinets de conseil et de formation, import-export, transit, services aux entreprises : l\'activité repose sur des dossiers, des délais, des documents et une relation de confiance. Le chantier type est un outil de suivi des dossiers, des devis et des factures, relié à la messagerie, avec un espace client. Le risque principal est de plaquer un logiciel sur une organisation qui n\'a pas décidé qui fait quoi.'],
                ['titre' => 'Commerce et communication : le paiement et la vitesse de réponse', 'texte' => 'Commerce de gros et de détail, boutiques en ligne, hôtellerie, restauration, médias : le client compare vite et paie par son téléphone. Ce qui pèse le plus est l\'encaissement en mobile money et en carte, la synchronisation du stock ou des disponibilités, la réponse rapide sur WhatsApp et la visibilité sur Google. Un retard de réponse ou une double réservation se paient en ventes perdues le jour même.'],
                ['titre' => 'Santé et social : les données sensibles et la continuité', 'texte' => 'Cliniques, cabinets médicaux, pharmacies, ONG et projets de développement : les données de santé et celles des bénéficiaires sont sensibles, et un outil en panne a des conséquences humaines. Il faut un hébergement et des accès maîtrisés, une traçabilité des produits et des dossiers, des applications utilisables hors connexion sur le terrain et, pour les projets financés, des rapports conformes aux exigences des bailleurs. L\'IA n\'y pose pas de diagnostic et ne décide pas d\'une prise en charge.'],
                ['titre' => 'Secteur public et éducation : la tutelle et l\'usage à grande échelle', 'texte' => 'Administrations, collectivités, écoles, universités : des centaines ou des milliers d\'usagers, un ministère ou une autorité de tutelle, des marchés publics, des agents de niveaux numériques très différents. Les priorités sont la simplicité des parcours, l\'accessibilité sur téléphone, la conformité aux règles de la tutelle, la protection des données des élèves, étudiants et administrés, et la formation des agents. Une décision administrative reste toujours prise et signée par une personne.'],
                ['titre' => 'Technique et terrain : la traçabilité et le fonctionnement sans réseau', 'texte' => 'Agro-industrie, négoce agricole, BTP, bureaux d\'études, immobilier, industrie : l\'activité se passe sur un chantier, dans un champ, dans un atelier ou chez un propriétaire. Ce qui pèse le plus est la collecte de données depuis le terrain, souvent sans réseau stable, la traçabilité des lots, des matériaux ou des interventions, le suivi des coûts et des délais et le lien avec la comptabilité. Les applications mobiles qui fonctionnent hors connexion puis se synchronisent y sont fréquentes.'],
            ],
        ],
        [
            'type'    => 'comparaison',
            'titre'   => 'Comment les priorités se répartissent-elles selon l\'univers ?',
            'options' => ['Droit, justice, finance', 'Santé, social, secteur public', 'Commerce, direction, terrain'],
            'criteres' => [
                ['critere' => 'Contrainte qui domine', 'valeurs' => ['Secret professionnel, valeur de preuve, conformité comptable et prudentielle', 'Données sensibles, tutelle, continuité du service', 'Rapidité, encaissement, traçabilité des opérations']],
                ['critere' => 'Premier chantier fréquent', 'valeurs' => ['Gestion des dossiers et des pièces, espace client sécurisé', 'Dossiers ou fiches usagers, prise de rendez-vous, rapports', 'ERP, boutique, réservation, application de terrain']],
                ['critere' => 'Usage de l\'IA', 'valeurs' => ['Brouillons, tri, rapprochements, toujours relus par le professionnel', 'Information générale et tâches administratives, jamais décision sur une personne', 'Réponses courantes, saisie assistée, analyse de ventes ou de coûts']],
                ['critere' => 'Hébergement des données', 'valeurs' => ['À décider en premier, avec l\'ordre ou l\'autorité concernée', 'À valider avec la tutelle ou l\'autorité de santé ou de protection des données', 'Selon la sensibilité ; souvent plus souple, mais données clients à protéger']],
                ['critere' => 'Équipement attendu', 'valeurs' => ['Postes fixes, scanners, signatures', 'Postes partagés, téléphones, parfois tablettes sur le terrain', 'Téléphones, caisses, parfois hors connexion']],
            ],
            'verdict' => 'Ces trois colonnes sont des repères, pas des cases : un grossiste en produits pharmaceutiques cumule contraintes de santé et logique commerciale. Le diagnostic tranche cas par cas ce qui domine dans votre structure.',
        ],
        [
            'type'  => 'prose',
            'titre' => 'Que partagent tous les secteurs en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Quel que soit le métier, quatre sujets reviennent dans presque tous les projets : le paiement, les données personnelles, la facture normalisée ou électronique et l\'encadrement de l\'IA. Les règles diffèrent d\'un pays à l\'autre, ce qui impose de les vérifier à chaque projet ; mais les questions à poser sont les mêmes à Cotonou, à Dakar, à Bruxelles ou à Lyon. Les paragraphes suivants donnent des repères sourcés, consultés le 7 octobre 2026.',
                '<strong>Le paiement.</strong> Dans l\'Union économique et monétaire ouest-africaine, l\'interopérabilité des paiements instantanés progresse. Selon un <a href="https://www.bceao.int/fr/communique-presse/connexion-la-plateforme-interoperable-du-systeme-de-paiement-instantane-pi-spi-de">communiqué de la BCEAO du 2 avril 2026</a>, quatre-vingts participants étaient alors connectés à la plateforme PI-SPI, dont cinquante-neuf banques, neuf établissements de monnaie électronique et onze institutions de microfinance, et la Banque centrale demandait aux établissements restants d\'assurer un service effectif à leur clientèle au plus tard le 30 juin 2026. Pour une entreprise, la conséquence est concrète : un outil choisi aujourd\'hui doit encaisser par mobile money et par carte, et suivre l\'évolution de ces rails de paiement. Le comparatif <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">FedaPay, Kkiapay ou CinetPay</a> détaille les agrégateurs.',
                '<strong>Les données personnelles.</strong> Au Bénin, le code du numérique, <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018</a> publiée par le Secrétariat général du Gouvernement, encadre le traitement des données personnelles dans son livre cinquième (articles 379 à 490 selon l\'<a href="https://www.osiris.sn/la-loi-portant-code-du-numerique-au-benin-constitue-une-avancee-decisive.html">analyse publiée par Osiris</a>). Dans l\'Union européenne, c\'est le RGPD : la fiche de la CNIL <a href="https://www.cnil.fr/fr/securite-gerer-la-sous-traitance">« Sécurité : gérer la sous-traitance »</a> rappelle que l\'éditeur ou l\'hébergeur qui traite des données pour votre compte est un sous-traitant, avec lequel un contrat conforme à l\'article 28 du règlement doit être signé. Dans les deux cadres, trois questions reviennent : où sont les données, qui y accède, comment les récupère-t-on en fin de contrat.',
                '<strong>La facture normalisée ou électronique.</strong> Au Bénin, selon un <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">article du portail du gouvernement daté du 27 février 2020</a>, les entreprises assujetties à la TVA doivent émettre des factures normalisées avec des machines de facturation électronique certifiées, et des sanctions financières sont prévues en cas de manquement. Cet article date de 2020 : le champ des entreprises concernées et les modalités actuelles sont à vérifier auprès de la direction générale des impôts. En France, la page <a href="https://www.impots.gouv.fr/professionnel/je-passe-la-facturation-electronique">« Je passe à la facturation électronique »</a> de l\'administration fiscale présente la réforme de la facturation électronique entre entreprises et la dit effective depuis le 1er septembre 2026 pour la transmission de données à l\'administration ; les obligations d\'émission et de réception selon la taille de l\'entreprise se vérifient sur ce site avant de lancer le projet. Un logiciel de gestion doit donc produire la bonne facture pour le bon pays.',
                '<strong>Le référentiel comptable.</strong> Dans l\'espace OHADA, l\'<a href="https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/">Acte uniforme relatif au droit comptable et à l\'information financière</a>, adopté le 26 janvier 2017, est entré en vigueur le 1er janvier 2018 pour les comptes personnels des entités. Un ERP utilisé dans un État membre doit donc permettre de tenir une comptabilité conforme à ce référentiel, ce qui est un critère de choix important pour un logiciel conçu ailleurs.',
                '<strong>L\'IA encadrée.</strong> Selon la <a href="https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai">page de la Commission européenne sur le cadre réglementaire de l\'IA</a>, le règlement sur l\'IA est applicable depuis le 2 août 2026, avec des exceptions : les pratiques interdites s\'appliquent depuis le 2 février 2025, et les règles pour certains usages à haut risque, notamment dans l\'éducation et l\'emploi, s\'appliquent à partir du 2 décembre 2027. Une entreprise qui vend en Europe, ou dont les clients y sont, doit donc dès maintenant savoir quels outils d\'IA ses équipes utilisent et avec quelles données.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle règle vérifier avant de lancer un projet, selon l\'univers ?',
            'legende' => 'Points de contrôle usuels ; l\'autorité compétente et le texte exact dépendent du pays et du métier, à confirmer auprès d\'elle',
            'entetes' => ['Univers', 'Piste à vérifier auprès de l\'autorité compétente', 'Question à poser avant le projet'],
            'lignes'  => [
                ['Droit et justice', 'Règles de l\'ordre ou de la chambre professionnelle sur le secret et la conservation des actes', 'Où les pièces peuvent-elles être hébergées, et un outil d\'IA peut-il les lire ?'],
                ['Chiffre et finance', 'Référentiel comptable (SYSCOHADA), ordre des experts-comptables, autorité de supervision bancaire ou d\'assurance', 'La piste d\'audit et les droits d\'accès répondent-ils aux exigences du superviseur ?'],
                ['Direction et gestion', 'Droit des contrats, protection des données clients, règles douanières pour le transit', 'Quelles données de clients et de tiers l\'outil va-t-il conserver, et pour combien de temps ?'],
                ['Commerce et communication', 'Facture normalisée, protection des consommateurs, règles des plateformes de paiement', 'Le paiement et la facture sortent-ils conformes, sans ressaisie ?'],
                ['Santé et social', 'Autorité de santé, ordre professionnel, règles des bailleurs et des tutelles', 'Quelles données de santé ou de bénéficiaires peuvent-elles quitter la structure, et vers où ?'],
                ['Secteur public et éducation', 'Ministère de tutelle, règles de la commande publique, protection des données des élèves et des administrés', 'Qui valide le projet, et selon quelle procédure d\'achat ou de convention ?'],
                ['Technique et terrain', 'Normes de chantier ou de qualité, règles de traçabilité, droit du travail pour le suivi des équipes', 'Quelles preuves doit-on pouvoir produire après coup, et l\'outil les garde-t-il ?'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans un secteur, et que ne doit-elle jamais faire ?',
            'intro' => 'Dans tous les secteurs, la même ligne de partage s\'applique : l\'IA prépare, une personne décide. Ce qui varie, c\'est le niveau de prudence selon la sensibilité des données.',
            'items' => [
                ['titre' => 'Ce qu\'elle fait bien', 'texte' => 'Rédiger un brouillon de courrier ou de compte rendu, résumer un long document, classer des demandes, répondre aux questions fréquentes à partir d\'une base de connaissances validée, préparer un rapprochement, signaler une anomalie dans un tableau. Ces tâches font gagner du temps sans engager l\'entreprise, si le résultat est relu.'],
                ['titre' => 'Ce qu\'elle ne doit pas faire seule', 'texte' => 'Rendre un avis juridique, poser un diagnostic, accorder ou refuser un crédit, valider une écriture comptable, sanctionner un agent, noter un élève de façon définitive. Ces décisions engagent une responsabilité professionnelle ou touchent aux droits d\'une personne : elles restent humaines.'],
                ['titre' => 'Les données qu\'on ne lui confie pas à la légère', 'texte' => 'Dossiers médicaux, pièces couvertes par le secret professionnel, données bancaires, informations sur des mineurs. Avant tout usage, il faut connaître les conditions de réutilisation des données par le service choisi, et écrire noir sur blanc ce que l\'équipe a le droit de saisir.'],
                ['titre' => 'La trace et la relecture', 'texte' => 'Chaque production d\'un assistant doit pouvoir être retrouvée, relue et corrigée. Un assistant branché sur vos documents cite ses sources et dit quand il ne sait pas. Le service <a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a> met en place ces garde-fous.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet de digitalisation, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'texte' => 'Un premier échange gratuit, par WhatsApp, téléphone ou visioconférence, pour comprendre votre activité, votre contrainte principale et ce que vous attendez. Il aboutit à une première orientation et à la liste des informations utiles pour la suite. Richard répond sous 24 heures.', 'duree' => 'Réponse sous 24 heures'],
                ['titre' => 'Diagnostic et cadrage', 'texte' => 'Richard décrit avec vous vos processus, vos outils actuels, vos règles de métier et vos équipements. Le résultat est un périmètre écrit : ce qui est digitalisé en premier, ce qui attend, ce qui est exclu, avec les risques identifiés. C\'est l\'étape qui évite les mauvaises surprises ; elle se fait avec les personnes qui utiliseront l\'outil.', 'duree' => 'Selon le projet'],
                ['titre' => 'Devis et choix de la solution', 'texte' => 'Un devis détaillé ligne par ligne, avec une recommandation argumentée : garder l\'existant et le relier, paramétrer un logiciel du marché ou développer sur mesure. Les choix sont expliqués, et les alternatives raisonnables sont citées.', 'duree' => 'Selon le projet'],
                ['titre' => 'Réalisation par étapes', 'texte' => 'Le projet avance par livraisons courtes, que vous testez avec vos propres données. Pour les délais de référence de Richard, un site vitrine demande habituellement ' . fait('delais')['Site vitrine'] . ' et une application sur mesure ' . fait('delais')['Application sur mesure'] . ' ; un ERP ou une intégration se planifient selon le périmètre.', 'duree' => 'Selon le projet'],
                ['titre' => 'Formation et mise en service', 'texte' => 'Les utilisateurs sont formés sur leurs propres cas, un référent interne est désigné, et une date de bascule est fixée à partir de laquelle l\'ancien circuit n\'est plus utilisé. Pour les besoins de formation, voir la fiche <a href="/formations/ia-en-entreprise">IA en entreprise</a>.', 'duree' => 'Selon le projet'],
                ['titre' => 'Suivi et évolution', 'texte' => 'Après la mise en service, un suivi corrige les premiers défauts, mesure l\'usage réel et prépare les chantiers suivants. Un contrat de <a href="/services/maintenance-support">maintenance et support</a> peut être convenu si vous le souhaitez.', 'duree' => 'Selon le contrat'],
            ],
        ],
        [
            'type'  => 'prose',
            'titre' => 'Combien coûte un projet de digitalisation selon le secteur ?',
            'paragraphes' => [
                'Le prix dépend du périmètre, pas du secteur en lui-même. Ce qui le fait varier : le nombre d\'utilisateurs, le nombre de processus à couvrir, la reprise de données existantes, les intégrations avec d\'autres logiciels, les exigences de sécurité et d\'hébergement propres au métier, la formation à prévoir et le niveau de support après la mise en service. Un secteur très réglementé n\'est pas forcément plus cher, mais il demande plus de cadrage avant de chiffrer.',
                'Les tarifs de départ publiés par Richard sont les suivants : une landing page à partir de ' . $depart('Landing page') . ', un site vitrine à partir de ' . $depart('Site vitrine') . ' et un référencement naturel à partir de ' . $depart('Référencement naturel') . ', les montants en euros étant calculés à 655,957 FCFA pour 1 €. Ce sont des points de départ, pas des forfaits tout compris.',
                'Tout le reste (ERP, application sur mesure, automatisations, intégration de l\'IA, formation) se fait sur devis, après un premier échange gratuit. Le devis est détaillé, daté, et précise ce qui est inclus. Les modes de paiement acceptés sont : ' . implode(', ', fait('paiements')) . '.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelles erreurs retrouve-t-on dans presque tous les secteurs ?',
            'texte' => 'Choisir l\'outil avant d\'avoir décrit le processus ; oublier la <strong>règle de métier non négociable</strong> (secret, traçabilité, tutelle) jusqu\'au jour de la mise en service ; ne pas prévoir la <strong>reprise des données</strong> existantes ; ignorer le <strong>mobile money</strong> alors que les clients paient ainsi ; former l\'équipe une seule fois, la veille de la bascule ; laisser l\'IA décider là où une personne doit signer ; et ne pas écrire dans le contrat qui possède le code, les données et les accès. Chacune de ces erreurs se corrige facilement au cadrage, et coûte cher après.',
        ],
        [
            'type'  => 'prose',
            'titre' => 'Pourquoi confier la digitalisation de son secteur à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard compte plus de ' . fait('experience_ans') . ' ans d\'expérience, plus de ' . rtrim((string) fait('projets_livres'), '+') . ' projets livrés et plus de ' . rtrim((string) fait('clients'), '+') . ' clients, et il a formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes. Il s\'est formé à <a href="' . fait('formation')['url'] . '">EPITECH</a> et a travaillé dans quinze pays, d\'Afrique francophone, d\'Europe et du Canada. Cette expérience de terrain lui permet de reconnaître vite ce qui se transpose d\'un secteur à l\'autre et ce qui ne se transpose pas.',
                'Il intervient à distance pour les pays où il n\'a pas de présence physique, et sur place au Bénin. Les réalisations de Richard sont présentées sur la page <a href="/realisations/">réalisations</a> ; elles permettent de juger la manière de travailler avant de le contacter.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel est le premier chantier de votre activité ?',
            'texte'  => 'Décrivez votre secteur, votre contrainte principale et ce qui vous fait perdre le plus de temps. Richard vous répond sous 24 heures avec une première orientation, après un premier échange gratuit, puis un devis si vous souhaitez aller plus loin.',
            'bouton' => ['url' => '/contact', 'texte' => 'Démarrer par un échange'],
        ],
    ],
    'faq' => [
        [
            'q' => 'Mon métier ne figure pas dans la liste des secteurs : Richard peut-il quand même m\'accompagner ?',
            'r' => 'Oui. Les pages de secteur décrivent des cas fréquents, elles ne délimitent pas ce que Richard accepte de faire. Si votre métier est proche de l\'un des sept univers, les questions de cette page s\'appliquent telles quelles : règle non négociable, canal des clients, circuit d\'encaissement, équipement des utilisateurs. Décrivez votre activité dans un message ; Richard répond sous 24 heures et dit franchement si le projet relève de ses compétences.',
        ],
        [
            'q' => 'Quel est le premier service à envisager quand on ne sait pas par où commencer ?',
            'r' => 'Un cadrage. Il consiste à décrire vos processus, vos outils, vos règles de métier et vos contraintes de connexion, puis à hiérarchiser les chantiers. Selon le résultat, le premier chantier peut être un site, un ERP, une automatisation ou un espace client. Les services d\'<a href="/services/audit-etude-de-projet">audit et d\'étude de projet</a> et de <a href="/services/consultant-digitalisation">consultant en digitalisation</a> sont faits pour cette étape.',
        ],
        [
            'q' => 'Les outils sont-ils les mêmes d\'un secteur à l\'autre ?',
            'r' => 'En grande partie. Odoo, Dolibarr, des applications web ou mobiles, des automatisations et des assistants d\'IA servent dans tous les métiers. Ce qui change est le paramétrage, les modules, les droits d\'accès, l\'hébergement des données et les garde-fous de l\'IA. C\'est pourquoi l\'analyse de la règle de métier précède toujours le choix de l\'outil. Le comparatif <a href="/comparatifs/odoo-vs-dolibarr">Odoo ou Dolibarr</a> aide à choisir un ERP.',
        ],
        [
            'q' => 'Peut-on utiliser l\'IA avec des données confidentielles, par exemple des dossiers de clients ?',
            'r' => 'Seulement après avoir vérifié les conditions de réutilisation des données du service choisi, le lieu de traitement et les règles de votre profession, puis écrit ce que l\'équipe peut saisir. Une pièce couverte par le secret professionnel ou un dossier médical ne se colle pas dans un assistant grand public. Selon le cas, on prévoit un service avec engagement contractuel de confidentialité, un hébergement maîtrisé, ou on réserve l\'IA aux tâches qui n\'exigent pas ces données.',
        ],
        [
            'q' => 'Faut-il se conformer à la loi béninoise ou au RGPD si l\'on travaille dans plusieurs pays ?',
            'r' => 'Les deux peuvent s\'appliquer aux mêmes données. Le code du numérique du Bénin (loi n° 2017-20) encadre les traitements réalisés au Bénin ; le RGPD, selon son article 3, s\'applique aux organisations établies dans l\'Union européenne, ainsi qu\'à celles établies hors de l\'Union qui offrent des biens ou des services à des personnes situées dans l\'Union ou qui suivent leur comportement. Un projet qui touche plusieurs pays commence donc par une cartographie des données et des lieux de traitement, puis par la validation du point sensible avec un conseil juridique.',
        ],
        [
            'q' => 'Mes clients paient par mobile money : mon outil doit-il l\'intégrer ?',
            'r' => 'Si vos clients paient ainsi, oui, et avec remontée automatique dans la comptabilité. Selon la BCEAO, les paiements instantanés interopérables progressent dans l\'UEMOA ; un outil qui ne gère que la carte vous oblige à ressaisir ou à refuser des ventes. Les agrégateurs de paiement couvrent des pays et des opérateurs différents : vérifiez la couverture avant de choisir.',
        ],
        [
            'q' => 'Qu\'est-ce que la facture normalisée, et mon logiciel doit-il la gérer ?',
            'r' => 'Au Bénin, c\'est une facture émise avec une machine de facturation électronique certifiée, qui y ajoute des éléments de sécurité de l\'administration fiscale, pour les entreprises assujetties à la TVA. En France, l\'administration fiscale présente une réforme de la facturation électronique entre entreprises, dont le calendrier selon la taille de l\'entreprise est à vérifier sur impots.gouv.fr. Votre logiciel de gestion doit produire le bon document pour chaque pays : c\'est un point à vérifier dès l\'essai.',
        ],
        [
            'q' => 'Faut-il remplacer mes logiciels actuels ou les relier ?',
            'r' => 'Relier est souvent plus rapide et moins risqué quand l\'outil actuel fait bien son travail et que vos équipes le connaissent. Remplacer se justifie quand il ne sait plus évoluer, que ses données ne sont pas récupérables ou qu\'il coûte plus qu\'il ne rapporte. Le diagnostic compare les deux voies avec leurs coûts réels. Les <a href="/services/api-rest-integrations">intégrations d\'API</a> servent précisément à relier des outils qui existent déjà.',
        ],
        [
            'q' => 'Combien de temps dure un projet de digitalisation ?',
            'r' => 'Cela dépend du périmètre. Pour référence, un site vitrine demande habituellement ' . fait('delais')['Site vitrine'] . ' et une application sur mesure ' . fait('delais')['Application sur mesure'] . '. Un ERP, une automatisation ou une intégration d\'IA se planifient après le cadrage, selon le nombre d\'utilisateurs, de processus et de données à reprendre.',
        ],
        [
            'q' => 'Comment sont fixés les prix ?',
            'r' => 'Les tarifs de départ sont publiés : une landing page à partir de ' . $depart('Landing page') . ', un site vitrine à partir de ' . $depart('Site vitrine') . ', un référencement naturel à partir de ' . $depart('Référencement naturel') . '. Tout le reste est chiffré sur devis détaillé, après un premier échange gratuit, en fonction du périmètre, des intégrations, de la reprise de données, de la formation et du suivi.',
        ],
        [
            'q' => 'Richard intervient-il sur place, ou seulement à distance ?',
            'r' => 'Il intervient à distance pour l\'ensemble des pays servis et sur place au Bénin. Les échanges de cadrage, les démonstrations, le suivi et une grande partie de la formation se font très bien en visioconférence ; une présence physique est utile pour installer du matériel, former une équipe nombreuse ou observer un processus de terrain.',
        ],
        [
            'q' => 'Comment contacter Richard pour parler de mon secteur ?',
            'r' => 'Depuis la page <a href="/contact">contact</a>, par WhatsApp ou par courriel. Décrivez votre activité, la règle principale de votre métier et ce que vous souhaitez améliorer. Richard répond sous 24 heures.',
        ],
    ],
    'sources' => [
        ['titre' => 'BCEAO, communiqué du 2 avril 2026 sur la connexion à la plateforme PI-SPI', 'url' => 'https://www.bceao.int/fr/communique-presse/connexion-la-plateforme-interoperable-du-systeme-de-paiement-instantane-pi-spi-de', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, « Sécurité : gérer la sous-traitance »', 'url' => 'https://www.cnil.fr/fr/securite-gerer-la-sous-traitance', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, La loi portant code du numérique au Bénin (livre V, articles 379 à 490)', 'url' => 'https://www.osiris.sn/la-loi-portant-code-du-numerique-au-benin-constitue-une-avancee-decisive.html', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, Le règlement européen sur la protection des données', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, Tout savoir sur les factures normalisées au Bénin (27 février 2020)', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, Je passe à la facturation électronique', 'url' => 'https://www.impots.gouv.fr/professionnel/je-passe-la-facturation-electronique', 'date' => '2026-10-07'],
        ['titre' => 'OHADA, Acte uniforme relatif au droit comptable et à l\'information financière (AUDCIF)', 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, cadre réglementaire de l\'intelligence artificielle', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-07'],
    ],
    'liens' => [
        'services'    => ['consultant-digitalisation', 'audit-etude-de-projet', 'integration-odoo', 'application-web-sur-mesure', 'automatisation-ia', 'integration-ia-entreprise', 'saas-espace-client'],
        'formations'  => ['ia-en-entreprise', 'ia-ethique-conformite', 'digitaliser-son-entreprise', 'odoo-utilisateurs'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
