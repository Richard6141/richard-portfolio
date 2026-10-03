<?php
// ============================================================
// data/hubs/comparatifs.php · Hub /comparatifs/ (vague 0C).
// Liste les comparatifs publiés (champ « liste ») et expose la méthode,
// la grille de décision et les pièges du choix d'outil.
// Faits des éditeurs et cadres publics vérifiés le 03/10/2026 (voir « sources »).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Comparatifs d\'outils numériques pour les entreprises : choisir un ERP, une automatisation, un paiement ou une IA',
    'liste'   => 'comparatif',
    'title'   => 'Comparatifs d\'outils numériques pour PME | Richard SALANON',
    'meta'    => 'ERP, automatisation, paiement mobile money, IA : la méthode des comparatifs, une grille pondérée réutilisable et les pièges du choix d\'outil pour PME.',
    'en_bref' => 'Ces comparatifs aident les dirigeants de PME d\'Afrique francophone et d\'Europe à choisir un outil numérique sans se fier à un classement générique. Chacun publie ses critères, le poids de chacun et des sources officielles datées. Cette page présente la méthode, une grille de décision à réutiliser, les pièges les plus coûteux et les quatre comparatifs disponibles. Aucun ne remplace le cadrage de votre besoin, un essai et un devis.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Dirigeants de PME, Afrique francophone et Europe'],
        ['l' => 'Comparatifs', 'v' => 'ERP, automatisation, paiement, IA'],
        ['l' => 'Approches comparées', 'v' => 'Abonnement, libre auto-hébergé, sur mesure'],
        ['l' => 'Sources consultées', 'v' => '19 pages officielles, le 3 octobre 2026'],
    ],
    'sections' => [
        [
            'type'  => 'prose',
            'titre' => 'Pourquoi publier des comparatifs plutôt qu\'un classement des « meilleurs outils » ?',
            'paragraphes' => [
                'Un dirigeant de PME à Cotonou, à Abidjan ou à Lyon ne cherche pas le meilleur logiciel du marché. Il cherche l\'outil qui tiendra dans son budget, que son équipe saura utiliser, qui encaissera les paiements de ses clients et qui ne l\'enfermera pas chez un éditeur. Les classements génériques répondent mal à ces questions : ils notent des fonctions, rarement des situations. Les comparatifs réunis ici partent d\'un besoin d\'entreprise précis, publient leurs critères et le poids de chacun, citent les pages officielles des éditeurs avec la date de consultation, et disent clairement ce qu\'ils ne savent pas.',
                'Ils sont rédigés par Richard SALANON, consultant en digitalisation et développeur logiciel basé à Cotonou. Depuis plus de six ans, il installe, intègre et forme à ces outils pour des entreprises du Bénin, de Côte d\'Ivoire, du Togo, du Sénégal, du Burkina Faso, du Mali, du Niger, du Tchad, du Gabon et de RD Congo, ainsi qu\'en France, en Belgique, en Suisse et au Canada. Ce regard de praticien sert à poser les bonnes questions et à signaler ce que les pages commerciales taisent ; il ne remplace jamais les faits, qui viennent des sources citées.',
                'Deux précisions, par souci de transparence. Richard a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Aucun de ces deux projets n\'entre dans les comparaisons, et aucun comparatif ne place les services de Richard en tête d\'un classement : quand une aide est proposée, elle l\'est à la fin de la page, séparément, sous la forme d\'une invitation à un diagnostic que vous restez libre de ne pas demander.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels comparatifs trouver ici, et à quelle décision répond chacun ?',
            'intro' => 'Le premier lot compte quatre comparatifs. Chacun traite une décision que les PME posent souvent dès qu\'elles se digitalisent : gérer, automatiser, encaisser, produire avec l\'IA. Les faits cités ci-dessous ont été vérifiés le 3 octobre 2026 sur les pages officielles liées ; le détail, les prix et la pondération se trouvent dans chaque comparatif.',
            'items' => [
                [
                    'titre' => 'Odoo ou Dolibarr : quel ERP pour gérer ventes, stocks et comptabilité ?',
                    'texte' => 'Deux progiciels de gestion intégrée, deux philosophies. Selon <a href="https://www.odoo.com/documentation/19.0/legal/licenses.html">la documentation des licences d\'Odoo</a>, l\'édition Community est distribuée sous licence LGPL version 3 et l\'édition Enterprise sous une licence propriétaire liée à un abonnement. <a href="https://www.dolibarr.org/">Le site officiel de Dolibarr</a> le présente comme un ERP et CRM open source, installable sur vos machines ou utilisable en ligne. Le comparatif pèse la couverture fonctionnelle, l\'adaptation au SYSCOHADA, le coût réel par utilisateur et la facilité de reprise. <a href="/comparatifs/odoo-vs-dolibarr">Lire le comparatif Odoo ou Dolibarr</a>.',
                ],
                [
                    'titre' => 'n8n, Make ou Zapier : quel outil pour automatiser les tâches répétitives ?',
                    'texte' => 'Relances, synchronisation entre logiciels, notifications : trois façons de supprimer les ressaisies. <a href="https://www.make.com/en/pricing">La page tarifs de Make</a> décrit un service en ligne facturé en crédits, avec une formule gratuite ; <a href="https://zapier.com/pricing">celle de Zapier</a> un service en ligne facturé en tâches, lui aussi avec une formule gratuite. n8n peut en plus s\'installer sur votre serveur : sa <a href="https://docs.n8n.io/n8n-community-license/community-license/license-faq">FAQ de licence</a> autorise gratuitement l\'usage interne, mais pas l\'hébergement de n8n comme service où vos clients construiraient leurs propres flux. <a href="/comparatifs/n8n-vs-make-vs-zapier">Lire le comparatif n8n, Make ou Zapier</a>.',
                ],
                [
                    'titre' => 'FedaPay, Kkiapay ou CinetPay : quel agrégateur pour encaisser par mobile money ?',
                    'texte' => 'Un site ou une application qui vend en Afrique de l\'Ouest doit accepter le mobile money autant que la carte. <a href="https://www.fedapay.com/">FedaPay</a> annonce le mobile money, la carte et des portefeuilles électroniques au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal et au Niger ; <a href="https://kkiapay.me/">Kkiapay</a> se présente comme un agrégateur de mobile money, de carte bancaire et de Wave disponible dans ces cinq pays et au Burkina Faso. Le site de CinetPay refusait notre connexion le 3 octobre 2026 : nous ne reprenons ici aucune donnée le concernant. <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">Lire le comparatif des trois agrégateurs</a>.',
                ],
                [
                    'titre' => 'ChatGPT, Claude ou Gemini : quel assistant d\'IA pour une équipe de PME ?',
                    'texte' => 'Trois assistants d\'intelligence artificielle générative, édités respectivement par OpenAI, Anthropic et Google, que les équipes utilisent pour rédiger, résumer, traduire ou analyser des documents. Le comparatif ne cherche pas le plus brillant en démonstration ; il regarde la qualité du français, le traitement des données saisies par vos salariés, les offres destinées aux équipes, le coût par utilisateur et ce qu\'une PME peut raisonnablement confier à chacun. <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">Lire le comparatif ChatGPT, Claude ou Gemini</a>.',
                ],
                [
                    'titre' => 'Et pour un site web ou un hébergement ?',
                    'texte' => 'Le choix d\'une solution de site (outil en ligne clé en main, système de gestion de contenu libre ou développement sur mesure) et celui d\'un hébergement ne font pas encore l\'objet d\'un comparatif dédié. La grille de décision et la comparaison des trois grandes approches présentées plus bas s\'y appliquent telles quelles : mêmes questions sur le coût total, la maîtrise des données, la réversibilité, les compétences disponibles et le comportement avec une connexion instable.',
                ],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment chaque comparatif est-il construit ?',
            'items' => [
                [
                    'titre' => 'Partir d\'une situation d\'entreprise, pas d\'une fiche produit',
                    'texte' => 'Chaque comparatif décrit d\'abord l\'entreprise pour laquelle il raisonne : nombre d\'utilisateurs, pays, moyens de paiement des clients, compétences disponibles en interne. Un outil excellent pour une filiale européenne de deux cents salariés peut être un mauvais choix pour une PME de quinze personnes à Lomé, et l\'inverse se vérifie aussi souvent.',
                ],
                [
                    'titre' => 'Publier les critères avant les résultats',
                    'texte' => 'La liste des critères figure en tête de comparaison, chacun avec une définition courte. Le lecteur sait ce qui est mesuré avant de lire quelle option l\'emporte, ce qui l\'empêche de prendre une conclusion pour une évidence et lui permet de contester un critère qui ne le concerne pas.',
                ],
                [
                    'titre' => 'Pondérer de façon transparente',
                    'texte' => 'Chaque critère reçoit un poids explicite, et le comparatif explique pourquoi ce poids. Si votre situation diffère, refaites le calcul avec vos propres poids : la grille proposée sur cette page est conçue pour cela. Un comparatif qui ne publie pas sa pondération vous demande de lui faire confiance ; celui qui la publie vous donne les moyens de vérifier.',
                ],
                [
                    'titre' => 'Vérifier chaque fait sur la source officielle, à date',
                    'texte' => 'Prix, limites d\'un forfait, licence, pays couverts : chaque donnée vient de la page officielle de l\'éditeur, de sa documentation ou du texte réglementaire, consultés à une date indiquée. Une valeur que l\'éditeur ne publie pas est signalée comme telle, jamais estimée ni reprise d\'un site tiers.',
                ],
                [
                    'titre' => 'Séparer les faits des observations de terrain',
                    'texte' => 'Le regard du praticien signale ce que les pages commerciales ne disent pas : temps d\'apprentissage, difficultés d\'intégration, disponibilité de l\'aide en français, comportement de l\'outil avec une connexion instable. Ces remarques sont présentées comme des observations, distinctes des faits sourcés, pour que vous sachiez toujours ce qui est prouvé et ce qui relève de l\'expérience.',
                ],
                [
                    'titre' => 'Dater, puis mettre à jour',
                    'texte' => 'Les éditeurs modifient régulièrement leurs prix, leurs formules et leurs conditions. Chaque comparatif affiche sa date de mise à jour et lie les pages officielles consultées. Si plusieurs mois se sont écoulés, revérifiez les montants sur ces pages avant de signer : c\'est le premier réflexe que recommande cette méthode.',
                ],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle grille de décision utiliser pour comparer deux outils ?',
            'legende' => 'Grille de décision réutilisable : poids par défaut sur 100 points, à ajuster à votre situation',
            'entetes' => ['Critère', 'Question à poser', 'Poids par défaut', 'Comment le vérifier'],
            'lignes'  => [
                ['Adéquation au besoin', 'L\'outil couvre-t-il vos processus prioritaires sans développement lourd ?', '25', 'Essai sur trois scénarios réels de votre activité, avec vos propres données'],
                ['Coût total sur trois ans', 'Combien coûtent licences, intégration, reprise des données, formation, hébergement et sortie ?', '20', 'Page tarifs officielle datée et devis détaillé ligne par ligne'],
                ['Maîtrise des données et réversibilité', 'Pouvez-vous exporter toutes vos données dans un format ouvert, à tout moment ?', '15', 'Documentation d\'export, clauses de fin de contrat, test d\'export réel'],
                ['Compétences disponibles', 'Trouve-t-on près de chez vous des personnes capables d\'installer, de maintenir et de former ?', '10', 'Intégrateurs, communauté, formateurs dans votre pays'],
                ['Contexte local', 'L\'outil gère-t-il le mobile money, le franc CFA, le SYSCOHADA, le français ?', '10', 'Documentation officielle et essai d\'un flux complet, de la vente à l\'écriture comptable'],
                ['Sécurité', 'Double authentification, sauvegardes, journal des accès, chiffrement des échanges ?', '10', 'Questionnaire au fournisseur inspiré du guide de l\'ANSSI et des principes du NCSC'],
                ['Connexion faible et mobile', 'L\'outil reste-t-il utilisable avec une connexion instable ou depuis un téléphone ?', '5', 'Test sur le réseau réel de vos équipes, au bureau et sur le terrain'],
                ['Pérennité', 'Qui maintient l\'outil, avec quel modèle économique, à quel rythme de versions ?', '5', 'Historique des versions, licence, conditions générales'],
            ],
        ],
        [
            'type'  => 'prose',
            'titre' => 'Comment utiliser cette grille sans se tromper de calcul ?',
            'paragraphes' => [
                'Notez chaque option de 0 à 5 sur chaque critère, multipliez la note par le poids, divisez par 5, puis additionnez : vous obtenez un score sur 100. Un outil noté 4 sur l\'adéquation au besoin rapporte ainsi 20 points sur 25. Le score n\'est pas une vérité ; il sert à rendre la discussion explicite. Quand deux options sont à moins de quelques points l\'une de l\'autre, ce sont les critères éliminatoires et l\'essai qui doivent trancher, pas la décimale.',
                'Fixez d\'abord vos critères éliminatoires, avant toute notation. Un ERP qui ne sait pas produire des états conformes au SYSCOHADA est exclu pour une société de l\'espace OHADA, quel que soit son score ailleurs. Un outil d\'automatisation qui oblige à faire transiter des données de santé hors du cadre autorisé est exclu pour une clinique. Un agrégateur de paiement absent du pays de vos clients est exclu pour votre boutique en ligne. Écrivez ces exclusions noir sur blanc : elles évitent de se laisser séduire par une belle démonstration.',
                'Ajustez ensuite les poids à votre situation, et justifiez chaque écart en une phrase. Une PME sans informaticien augmentera le poids des compétences disponibles et de la simplicité ; une entreprise qui manipule des données sensibles augmentera celui de la maîtrise des données ; une équipe commerciale toujours sur la route augmentera celui du mobile. Gardez le total à 100. Si un poids dépasse 35 points, c\'est en général le signe qu\'il s\'agit en réalité d\'un critère éliminatoire, à sortir de la grille.',
                'Faites remplir la grille par deux ou trois personnes séparément : le dirigeant, la personne qui utilisera l\'outil chaque jour et celle qui s\'occupe de la comptabilité ou de l\'informatique. Les écarts de notation révèlent souvent un besoin mal exprimé. Conservez la grille remplie avec la date et les sources : dans deux ans, quand il faudra renouveler le contrat ou changer d\'outil, vous saurez sur quelles hypothèses la décision avait été prise.',
            ],
        ],
        [
            'type'    => 'comparaison',
            'titre'   => 'Abonnement en ligne, logiciel libre auto-hébergé ou développement sur mesure : quelle approche choisir ?',
            'options' => ['Logiciel en ligne par abonnement', 'Logiciel libre auto-hébergé', 'Développement sur mesure'],
            'criteres' => [
                ['critere' => 'Mise en service', 'valeurs' => ['La plus rapide : un compte et un paramétrage suffisent pour démarrer', 'Intermédiaire : serveur, installation, paramétrage et reprise des données', 'La plus longue : conception, développement, tests et recette']],
                ['critere' => 'Dépense de départ', 'valeurs' => ['Faible, étalée en mensualités ou en annuités', 'Pas de licence pour l\'édition libre, mais installation et serveur à payer', 'La plus élevée : tout le travail de conception est à financer']],
                ['critere' => 'Coût dans la durée', 'valeurs' => ['Croît avec le nombre d\'utilisateurs, le volume ou les options', 'Hébergement, maintenance et montées de version à budgéter', 'Maintenance corrective et évolutive à budgéter chaque année']],
                ['critere' => 'Emplacement et maîtrise des données', 'valeurs' => ['Chez l\'éditeur, selon son contrat et ses centres de données', 'Chez vous ou chez l\'hébergeur que vous choisissez', 'Chez vous, si le contrat vous remet le code, les données et la documentation']],
                ['critere' => 'Dépendance', 'valeurs' => ['À l\'éditeur : prix, conditions, fonctions retirées, formats d\'export', 'Aux compétences disponibles et à la vitalité de la communauté', 'Au prestataire, sauf si code source et documentation vous sont remis']],
                ['critere' => 'Adaptation à votre métier', 'valeurs' => ['Limitée au paramétrage prévu par l\'éditeur', 'Large, par modules existants ou développements complémentaires', 'Totale, dans la limite du budget et du temps']],
                ['critere' => 'Mises à jour et sécurité', 'valeurs' => ['Assurées par l\'éditeur, sans action de votre part', 'À votre charge ou à celle de votre prestataire', 'À votre charge ou à celle de votre prestataire']],
                ['critere' => 'Connexion faible', 'valeurs' => ['Chaque usage dépend d\'internet', 'Utilisable sur le réseau local si le serveur est dans vos locaux', 'Peut être conçu pour fonctionner hors connexion puis synchroniser']],
                ['critere' => 'Mobile money et SYSCOHADA', 'valeurs' => ['Selon les connecteurs et plans comptables proposés par l\'éditeur', 'Modules existants à vérifier, ou à développer', 'À inscrire dans le cahier des charges dès le départ']],
                ['critere' => 'Compétences nécessaires', 'valeurs' => ['Utilisateurs formés et un référent interne', 'Administrateur système, intégrateur et référent interne', 'Équipe de développement, chef de projet et référent interne']],
            ],
            'verdict' => 'Aucune approche ne gagne partout : l\'abonnement en ligne convient pour démarrer vite avec peu de moyens, le libre auto-hébergé pour garder la main sur ses données et ses coûts de licence, le sur mesure quand un processus fait votre différence et qu\'aucun logiciel ne le couvre.',
        ],
        [
            'type'  => 'prose',
            'titre' => 'Comment lire cette comparaison selon la taille et le métier de l\'entreprise ?',
            'paragraphes' => [
                'Pour une très petite entreprise sans personne dédiée à l\'informatique, l\'abonnement en ligne est souvent le point de départ raisonnable : pas de serveur à surveiller, des mises à jour automatiques, une dépense prévisible. La question décisive n\'est alors pas la liste des fonctions, mais la sortie : pouvez-vous récupérer vos clients, vos factures et vos écritures dans un format lisible par un autre logiciel ? Si la réponse est floue, la facilité d\'aujourd\'hui prépare une dépendance coûteuse demain.',
                'Pour une PME qui grandit, le logiciel libre auto-hébergé devient intéressant dès que le nombre d\'utilisateurs fait grimper la facture d\'abonnement, ou dès que les données doivent rester dans un pays précis. Le mot « libre » désigne des droits, pas une absence de coût. La <a href="https://opensource.org/osd">définition de l\'Open Source Initiative</a>, consultée le 3 octobre 2026, pose dix critères, dont la libre redistribution et l\'accès au code source ; elle ne promet rien sur le prix de l\'installation, de l\'hébergement ou de la maintenance, qui restent à payer.',
                'Le libre n\'est pas réservé aux amateurs. L\'État français recommande depuis 2013 à ses administrations une sélection de logiciels libres, le <a href="https://code.gouv.fr/sill/">socle interministériel de logiciels libres</a>, consulté le 3 octobre 2026. Ce qui compte pour une PME, c\'est moins l\'étiquette que trois questions concrètes : qui installera l\'outil, qui le mettra à jour quand une faille sera corrigée, et qui formera les nouveaux salariés dans deux ans. Si ces trois noms existent, le libre auto-hébergé est une option solide ; sinon, un hébergement géré par un prestataire réduit le risque.',
                'Pour juger la sécurité d\'un service en ligne, inutile d\'inventer son propre questionnaire. Le NCSC, l\'agence britannique de cybersécurité, publie <a href="https://www.ncsc.gov.uk/collection/cloud/the-cloud-security-principles">quatorze principes de sécurité du nuage</a>, consultés le 3 octobre 2026 : protection des données en transit, séparation entre clients, sécurité de la chaîne d\'approvisionnement, gestion des identités, informations d\'audit mises à disposition du client, entre autres. Posez-les à l\'éditeur, demandez les preuves de ses réponses, et comparez la clarté des réponses autant que leur contenu.',
                'Le développement sur mesure se justifie quand un processus est au cœur de votre avantage concurrentiel : un circuit de collecte particulier, une tarification complexe, une application mobile pour des agents de terrain. Même dans ce cas, il se combine presque toujours avec des briques existantes : un ERP pour la comptabilité, un agrégateur pour les paiements, un outil d\'automatisation pour relier le tout. Demandez dans le contrat la remise du code source, de la documentation et des accès, faute de quoi la dépendance change simplement de nom.',
                'Les approches se combinent d\'ailleurs très bien. Une entreprise peut utiliser un ERP libre hébergé chez un prestataire, un assistant d\'IA par abonnement pour ses rédactions et un petit développement sur mesure pour relier son application de terrain à sa comptabilité. Le bon découpage consiste à acheter ce qui est standard, à installer en libre ce qui doit rester sous votre contrôle et à développer seulement ce qui vous distingue. Le <a href="https://www.gov.uk/guidance/the-technology-code-of-practice">code de pratique technologique du gouvernement britannique</a> recommande la même logique aux administrations : partir des besoins des utilisateurs, privilégier les standards ouverts et définir une stratégie d\'achat.',
            ],
        ],
        [
            'type'  => 'prose',
            'titre' => 'Que coûte vraiment un outil, au-delà du prix affiché sur la page tarifs ?',
            'paragraphes' => [
                'Le prix affiché n\'est qu\'une ligne du budget. Pour un ERP ou un outil d\'automatisation, le coût total sur trois ans comprend aussi le paramétrage, la reprise des données existantes, les connecteurs vers vos autres logiciels, la formation des équipes, l\'hébergement s\'il n\'est pas inclus, le support, les montées de version et, un jour, la sortie. Ensemble, ces postes peuvent dépasser l\'abonnement lui-même. Un comparatif honnête les signale ; un devis sérieux les chiffre un par un.',
                'Le mode de facturation compte autant que le montant. Un abonnement par utilisateur pénalise l\'entreprise qui veut ouvrir l\'outil à toute son équipe ; une facturation au volume, en crédits chez Make ou en tâches chez Zapier selon leurs pages tarifs consultées le 3 octobre 2026, pénalise celle dont l\'activité augmente. Avant de signer, simulez trois scénarios : l\'activité actuelle, le double, et un pic saisonnier. Un outil bon marché au départ peut devenir le plus cher au moment précis où l\'entreprise réussit.',
                'En Afrique francophone, deux coûts s\'ajoutent souvent sans être annoncés. D\'abord le change : un abonnement facturé en dollars varie en francs CFA au gré du taux de change, et la banque prélève parfois des frais sur chaque paiement international par carte. Ensuite le moyen de paiement lui-même : certains éditeurs n\'acceptent que la carte bancaire internationale, que tous les dirigeants n\'ont pas, ce qui oblige à passer par un intermédiaire. Vérifiez ces deux points avant l\'essai, pas après.',
                'Les administrations publiques ont formalisé cette vigilance. La <a href="https://www.gov.uk/guidance/define-your-purchasing-strategy">stratégie d\'achat recommandée par le gouvernement britannique</a>, consultée le 3 octobre 2026, demande de comprendre autant que possible le coût complet d\'un produit, de le tester avec ses outils actuels avant l\'achat, et prévoit dans les contrats une clause de sortie au plus tard à deux ans, avec des frais de sortie minimaux. Une PME n\'est pas tenue par ces règles, mais elle gagne à les emprunter : elles protègent exactement contre les mêmes risques.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels pièges reviennent le plus souvent dans le choix d\'un outil ?',
            'intro' => 'Ces erreurs ne viennent presque jamais d\'un mauvais logiciel. Elles viennent d\'une question qu\'on n\'a pas posée avant de signer.',
            'items' => [
                ['titre' => 'Le coût caché', 'texte' => 'On compare des abonnements mensuels, puis on découvre les frais d\'installation, les modules payants indispensables, les utilisateurs supplémentaires et le connecteur vendu à part. Exigez un coût total sur trois ans, ligne par ligne, et comparez les options sur ce total.'],
                ['titre' => 'La dépendance à un éditeur', 'texte' => 'Plus un outil est personnalisé, plus il est difficile d\'en sortir. Le gouvernement britannique avertit dans sa stratégie d\'achat que les personnalisations empêchent ensuite de mettre à jour ou de retirer le produit. Préférez le paramétrage au développement spécifique, et les formats ouverts aux formats propriétaires.'],
                ['titre' => 'Les données hors de portée', 'texte' => 'Où sont stockées vos données, qui peut y accéder, comment les récupérer en fin de contrat ? Si le contrat ne le dit pas, c\'est l\'éditeur qui en décide. Faites un export complet pendant l\'essai et vérifiez qu\'un autre logiciel peut le relire.'],
                ['titre' => 'Les compétences locales absentes', 'texte' => 'Un excellent outil sans personne pour l\'installer, le maintenir ou former vos équipes dans votre pays devient vite un outil abandonné. Avant de choisir, identifiez au moins un intégrateur ou un formateur joignable, et une communauté active en français.'],
                ['titre' => 'La connectivité surestimée', 'texte' => 'Une démonstration sur la fibre d\'un bureau ne dit rien de l\'usage depuis un entrepôt, un chantier ou une agence en province. Testez l\'outil sur le réseau réel de vos équipes, y compris sur téléphone, et demandez ce qui se passe quand la connexion coupe en pleine saisie.'],
                ['titre' => 'Le mobile money oublié', 'texte' => 'Beaucoup d\'outils conçus en Europe ou en Amérique du Nord gèrent la carte bancaire et le virement, pas le mobile money. Si vos clients paient par téléphone, vérifiez le connecteur, les pays et les opérateurs pris en charge, et la remontée automatique des encaissements en comptabilité.'],
                ['titre' => 'La licence mal lue', 'texte' => '« Code source disponible » ne veut pas toujours dire « libre ». La licence de n8n, par exemple, autorise l\'usage interne gratuitement mais interdit de revendre n8n comme service où vos clients créeraient leurs propres flux. Lisez la licence au regard de votre projet, surtout si vous comptez construire une offre commerciale dessus.'],
                ['titre' => 'L\'outil surdimensionné', 'texte' => 'Acheter l\'ERP d\'une multinationale pour une PME de dix personnes, c\'est payer des fonctions que personne n\'utilisera et former l\'équipe à des écrans inutiles. Commencez par les deux ou trois processus qui font perdre le plus de temps, puis étendez.'],
                ['titre' => 'La comptabilité non conforme', 'texte' => 'Un logiciel de gestion venu d\'ailleurs peut produire de belles factures et des états financiers inutilisables pour votre expert-comptable. Dans l\'espace OHADA, vérifiez dès l\'essai le plan de comptes SYSCOHADA, la TVA locale et le format des états de synthèse attendus.'],
                ['titre' => 'L\'adoption négligée', 'texte' => 'Le meilleur outil échoue si l\'équipe continue à travailler sur papier ou sur un tableur parallèle. Prévoyez la formation, un référent interne et une date à partir de laquelle l\'ancien circuit n\'est plus accepté. Le guide de l\'ANSSI rappelle d\'ailleurs que l\'accompagnement au changement est un axe à ne pas sous-évaluer.'],
            ],
        ],
        [
            'type'  => 'prose',
            'titre' => 'En quoi le contexte de l\'Afrique francophone change-t-il les critères de choix ?',
            'paragraphes' => [
                'Le paiement d\'abord. Dans l\'UEMOA, le mobile money est un moyen d\'encaissement courant pour les entreprises, et l\'interopérabilité progresse. Selon un <a href="https://www.bceao.int/fr/communique-presse/connexion-la-plateforme-interoperable-du-systeme-de-paiement-instantane-pi-spi-de">communiqué de la BCEAO du 2 avril 2026</a>, consulté le 3 octobre 2026, quatre-vingts participants étaient alors connectés à la plateforme interopérable du système de paiement instantané, dont cinquante-neuf banques et neuf établissements de monnaie électronique, et la Banque centrale fixait au 30 juin 2026 la date limite de connexion des établissements restants. Un outil choisi aujourd\'hui doit donc pouvoir suivre cette évolution, pas seulement les opérateurs d\'hier.',
                'La comptabilité ensuite. Selon <a href="https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/">la page de l\'OHADA consacrée à l\'Acte uniforme relatif au droit comptable et à l\'information financière</a>, adopté le 26 janvier 2017, ce texte s\'applique depuis le 1er janvier 2018 aux comptes personnels des entités et annexe le système comptable OHADA révisé, le SYSCOHADA, avec son plan de comptes. Un ERP ou un logiciel de facturation utilisé dans l\'un des États membres doit produire des écritures et des états conformes à ce référentiel, ou s\'y adapter sans bricolage.',
                'Les données personnelles aussi. Au Bénin, le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">code du numérique (loi n° 2017-20 du 20 avril 2018)</a>, publié par le Secrétariat général du Gouvernement et consulté le 3 octobre 2026, prévoit en son article 391 qu\'un transfert de données personnelles vers un État tiers ne peut avoir lieu que si l\'Autorité constate que cet État assure un niveau de protection équivalent. Héberger son fichier clients chez un éditeur étranger n\'est donc pas une simple question technique : c\'est une question juridique à poser avant de signer, avec un conseil si nécessaire.',
                'La connectivité enfin. Le guide de l\'ANSSI pour les TPE et PME, dans sa version de novembre 2024, rappelle qu\'avec un service en ligne, si vous perdez la liaison internet, vous ne pouvez plus travailler avec vos outils métier. Là où les coupures sont fréquentes, un critère « fonctionne en connexion dégradée » pèse plus lourd qu\'en Europe : saisie hors ligne, application mobile légère, serveur local synchronisé. À cela s\'ajoutent la langue de l\'interface et de l\'assistance, le franc CFA (XOF dans l\'UEMOA, XAF dans la CEMAC) parmi les devises gérées, et la présence d\'intégrateurs dans votre pays.',
            ],
        ],
        [
            'type'  => 'prose',
            'titre' => 'Que change le cadre européen pour une PME de France ou de Belgique ?',
            'paragraphes' => [
                'Dès qu\'un outil traite des données personnelles pour votre compte, l\'éditeur devient votre sous-traitant au sens du RGPD. La fiche de la CNIL <a href="https://www.cnil.fr/fr/securite-gerer-la-sous-traitance">« Sécurité : gérer la sous-traitance »</a>, mise à jour le 14 mars 2024 et consultée le 3 octobre 2026, demande de ne faire appel qu\'à des sous-traitants présentant des garanties suffisantes, de signer un contrat conforme à l\'article 28 du RGPD, de prévoir la restitution ou la destruction des données en fin de contrat, et de se méfier des services en nuage qui ne garantissent pas la localisation effective des données.',
                'Le règlement européen sur les données, dit Data Act, renforce la position du client d\'un service en nuage. La Commission européenne indique sur <a href="https://digital-strategy.ec.europa.eu/en/policies/data-act">sa page consacrée au texte</a> qu\'il s\'applique depuis le 12 septembre 2025. Selon le <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32023R2854">règlement (UE) 2023/2854 publié sur EUR-Lex</a>, consulté le 3 octobre 2026, le contrat doit prévoir un préavis de changement de fournisseur de deux mois au plus, une période transitoire de trente jours calendaires au plus et au moins trente jours pour récupérer les données ; à compter du 12 janvier 2027, aucun frais de changement de fournisseur ne peut plus être facturé.',
                'Pour une PME européenne, ces règles déplacent la question de la dépendance : sortir d\'un service en nuage devient un droit encadré, mais encore faut-il que les données exportées soient exploitables par l\'outil suivant. Le critère « réversibilité » de la grille reste donc entier. Une entreprise suisse n\'est pas dans l\'Union européenne et vérifiera avec un conseil quelles règles s\'appliquent à elle ; une entreprise qui travaille à la fois en Europe et en Afrique de l\'Ouest doit, elle, satisfaire les deux cadres pour les mêmes données.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qu\'un comparatif ne remplace pas ?',
            'texte' => 'Un comparatif ne connaît pas votre entreprise. Il ne remplace pas <strong>le cadrage de votre besoin</strong> : la liste de vos processus, de vos volumes et de vos contraintes, écrite avant de regarder les outils. Il ne remplace pas <strong>l\'essai</strong> : deux à quatre semaines sur vos propres cas, avec les personnes qui utiliseront l\'outil chaque jour. Il ne remplace pas <strong>le devis</strong> : un document daté, ligne par ligne, qui engage le prestataire ou l\'éditeur sur le périmètre, le prix et les conditions de sortie. Les prix cités dans les comparatifs sont ceux des pages officielles à la date indiquée ; seul un devis vous les garantit.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel comparatif lire selon le besoin de votre entreprise ?',
            'legende' => 'Correspondance entre besoins fréquents des PME, familles d\'outils et comparatifs disponibles',
            'entetes' => ['Votre besoin', 'Famille d\'outil', 'Comparatif à lire', 'Question à trancher d\'abord'],
            'lignes'  => [
                ['Facturer, suivre les stocks, tenir la comptabilité', 'ERP ou progiciel de gestion intégrée', '<a href="/comparatifs/odoo-vs-dolibarr">Odoo ou Dolibarr</a>', 'Quels modules sont indispensables la première année, et lesquels peuvent attendre ?'],
                ['Supprimer les ressaisies entre logiciels', 'Outil d\'automatisation', '<a href="/comparatifs/n8n-vs-make-vs-zapier">n8n, Make ou Zapier</a>', 'Combien d\'exécutions par mois, et où les données doivent-elles rester ?'],
                ['Encaisser en ligne en Afrique de l\'Ouest', 'Agrégateur de paiement', '<a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">FedaPay, Kkiapay ou CinetPay</a>', 'Quels pays, quels opérateurs et quelles cartes vos clients utilisent-ils ?'],
                ['Rédiger, résumer, analyser des documents', 'Assistant d\'IA générative', '<a href="/comparatifs/chatgpt-vs-claude-vs-gemini">ChatGPT, Claude ou Gemini</a>', 'Quelles données l\'équipe aura-t-elle le droit d\'y saisir ?'],
                ['Être trouvé et vendre en ligne', 'Site web', 'Pas encore de comparatif dédié', 'Vitrine, catalogue ou boutique : quel rôle exact pour le site ?'],
                ['Héberger un site, un ERP ou une automatisation', 'Hébergement', 'Pas encore de comparatif dédié', 'Qui administre le serveur, et où sont gardées les sauvegardes ?'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble ce choix dans quelques secteurs ?',
            'items' => [
                ['secteur' => 'Commerce et distribution, situation type', 'probleme' => 'Ventes payées en espèces, par mobile money et par carte ; stock tenu sur un cahier.', 'solution' => 'Commencer par un ERP qui gère caisse, stock et facturation, relié à un agrégateur de paiement. Le test décisif : un encaissement mobile money doit apparaître en comptabilité sans ressaisie, avec le bon compte SYSCOHADA.'],
                ['secteur' => 'Cabinet de services, situation type', 'probleme' => 'Comptes rendus, courriers et relances clients rédigés à la main, documents dispersés.', 'solution' => 'Un assistant d\'IA pour préparer les brouillons, choisi d\'abord sur ses conditions de confidentialité, et une automatisation des relances. Une règle écrite précise ce qui peut être saisi dans l\'assistant et ce qui ne doit jamais l\'être.'],
                ['secteur' => 'École ou centre de formation, situation type', 'probleme' => 'Inscriptions, frais payés en plusieurs tranches, reçus et attestations à produire.', 'solution' => 'Un logiciel de gestion avec module adapté, le paiement par mobile money pour les familles et l\'envoi automatique des reçus. Tester le parcours complet sur un téléphone d\'entrée de gamme, avec une connexion mobile ordinaire.'],
                ['secteur' => 'PME européenne active en Afrique de l\'Ouest, situation type', 'probleme' => 'Deux devises, deux référentiels comptables, des clients qui paient par carte en Europe et par mobile money en Afrique.', 'solution' => 'Vérifier dès l\'essai la gestion multidevise et multisociété, le plan comptable de chaque entité et le circuit d\'encaissement en franc CFA, puis l\'export des données pour chacune des deux réglementations.'],
                ['secteur' => 'Hôtellerie et restauration, situation type', 'probleme' => 'Réservations dispersées entre WhatsApp, téléphone et plateformes en ligne ; doubles réservations.', 'solution' => 'Une automatisation qui centralise les demandes dans un seul calendrier et confirme par message. Vérifier le comportement quand la connexion coupe, et le coût au volume en haute saison.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment changer d\'outil sans perdre ses données ni arrêter l\'activité ?',
            'items' => [
                ['titre' => 'Inventorier les données et les flux', 'texte' => 'Listez ce que contient l\'outil actuel : clients, fournisseurs, articles, factures, écritures, pièces jointes, historiques. Notez aussi les flux : quels logiciels lui envoient des données, lesquels en reçoivent. C\'est la carte de la migration ; le guide de l\'ANSSI en fait d\'ailleurs sa première question, connaître son parc et ses actifs métier.'],
                ['titre' => 'Exporter et faire une reprise à blanc', 'texte' => 'Exportez tout, importez dans le nouvel outil sur une copie de test, puis comparez : nombre de clients, soldes, chiffre d\'affaires d\'un mois connu. Les écarts apparaissent ici, pas le jour de la bascule. Pour un service en nuage soumis au Data Act, rappelez que le contrat doit vous laisser au moins trente jours pour récupérer vos données.'],
                ['titre' => 'Former avant de basculer', 'texte' => 'Formez les utilisateurs sur la copie de test, avec leurs propres cas. Désignez un référent par service, capable de répondre aux questions simples et de remonter les vrais problèmes.'],
                ['titre' => 'Faire tourner les deux outils en parallèle', 'texte' => 'Pendant une période courte et datée, saisissez dans les deux systèmes ou contrôlez les résultats du nouveau contre l\'ancien. Choisissez un début de mois ou d\'exercice pour simplifier les contrôles comptables.'],
                ['titre' => 'Couper l\'ancien outil et archiver', 'texte' => 'Une fois les contrôles validés, fermez l\'accès en écriture à l\'ancien outil, conservez une archive lisible des données pour la durée légale, puis résiliez. Vérifiez par écrit que l\'ancien éditeur a restitué ou détruit les données, comme le recommande la CNIL.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles questions poser avant de signer avec un éditeur ou un prestataire ?',
            'items' => [
                'Quel est le coût total sur trois ans, ligne par ligne, y compris installation, formation, hébergement, support et sortie ?',
                'Comment évolue la facture si le nombre d\'utilisateurs ou le volume double ?',
                'Dans quelle devise êtes-vous facturé, et par quel moyen de paiement pouvez-vous régler ?',
                'Où sont hébergées les données, dans quel pays, et qui peut y accéder ?',
                'Pouvez-vous exporter toutes vos données dans un format ouvert, à tout moment, sans frais ?',
                'Quel préavis et quelles conditions s\'appliquent en cas de résiliation ?',
                'Le contrat prévoit-il la restitution puis la destruction des données en fin de contrat ?',
                'La double authentification, les sauvegardes et un journal des accès sont-ils disponibles et activés ?',
                'L\'outil gère-t-il le mobile money, le franc CFA et le plan de comptes SYSCOHADA si vous êtes dans l\'espace OHADA ?',
                'L\'interface, la documentation et l\'assistance existent-elles en français ?',
                'L\'outil reste-t-il utilisable avec une connexion lente ou depuis un téléphone ?',
                'Qui, dans votre pays, peut installer, maintenir et former à cet outil ?',
                'Quelle licence s\'applique, et autorise-t-elle l\'usage que vous prévoyez, y compris commercial ?',
                'Le code source, la documentation et les accès vous sont-ils remis en cas de développement sur mesure ?',
                'Un essai sur vos propres données est-il possible avant l\'engagement ?',
                'Qui, chez vous, sera le référent de l\'outil après la mise en service ?',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'ouvrir un comparatif ?',
            'texte' => 'Choisir un outil, c\'est d\'abord décrire son besoin, puis fixer ses critères éliminatoires, puis pondérer le reste, et seulement ensuite comparer. Les comparatifs de ce site font la partie documentaire du travail : faits vérifiés, sources datées, critères publiés. La décision reste la vôtre, après un essai sur vos données et un devis qui engage. Gardez toujours une porte de sortie : un export complet, un contrat clair et des compétences disponibles près de chez vous valent plus qu\'une fonction de plus.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Besoin d\'un regard extérieur avant de choisir votre outil ?',
            'texte'  => 'Richard SALANON peut cadrer votre besoin, remplir la grille avec vous, organiser l\'essai et relire les devis, que l\'outil retenu soit celui qu\'il installe ou non. Voir aussi l\'accompagnement en <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a>, en <a href="/services/automatisation-ia">automatisation et intelligence artificielle</a>, ou les formations <a href="/formation-odoo">Odoo</a>, <a href="/formation-dolibarr">Dolibarr</a> et <a href="/formation-automatisation">automatisation</a>.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],
    'faq' => [
        [
            'q' => 'Comment les critères d\'un comparatif sont-ils choisis ?',
            'r' => 'Ils partent d\'une situation d\'entreprise décrite en tête du comparatif : taille, pays, moyens de paiement, compétences disponibles. On retient ensuite les questions qui changent réellement la décision pour cette situation, par exemple le coût total sur trois ans, la maîtrise des données, la gestion du mobile money ou la conformité au SYSCOHADA, et on écarte les fonctions que tous les outils comparés possèdent déjà. Chaque critère est défini et pondéré avant la présentation des résultats.',
        ],
        [
            'q' => 'Puis-je modifier la pondération proposée ?',
            'r' => 'Oui, c\'est même recommandé. Les poids publiés correspondent à la situation décrite dans chaque comparatif. Reprenez la grille de cette page, ajustez les poids à votre cas en gardant un total de 100 points, notez chaque option de 0 à 5 et refaites le calcul. Si vos poids donnent un autre gagnant, c\'est votre résultat qui compte pour votre entreprise.',
        ],
        [
            'q' => 'À quelle fréquence les comparatifs sont-ils mis à jour ?',
            'r' => 'Chaque comparatif affiche sa date de mise à jour et la date de consultation de chaque source. Les prix et les formules des éditeurs changent régulièrement : si la date remonte à plusieurs mois, ouvrez les pages officielles liées dans la liste des sources avant de décider, et considérez que seul un devis daté vous garantit un montant.',
        ],
        [
            'q' => 'Un logiciel libre est-il forcément gratuit ?',
            'r' => 'Non. Le logiciel libre ou open source garantit des droits : utiliser, étudier, modifier et redistribuer le code, selon les dix critères de la définition de l\'Open Source Initiative. Il ne dit rien du coût de l\'installation, de l\'hébergement, de la maintenance et de la formation, qui restent à payer. Certains éditeurs proposent par ailleurs une édition libre et une édition commerciale, comme Odoo avec ses éditions Community et Enterprise, et d\'autres publient leur code sous une licence qui n\'est pas open source, comme n8n.',
        ],
        [
            'q' => 'En Afrique de l\'Ouest, vaut-il mieux un logiciel en ligne ou installé sur son propre serveur ?',
            'r' => 'Cela dépend de trois choses : la qualité de votre connexion, la présence de compétences pour administrer un serveur, et les règles applicables à vos données. Un logiciel en ligne évite l\'administration mais s\'arrête quand internet coupe ; un serveur local reste accessible sur le réseau du bureau mais exige sauvegardes, mises à jour et quelqu\'un pour s\'en occuper. Une solution hybride, serveur hébergé chez un prestataire et application mobile tolérante aux coupures, est souvent un bon compromis.',
        ],
        [
            'q' => 'Comment éviter d\'être prisonnier d\'un éditeur ?',
            'r' => 'Faites un export complet pendant l\'essai et vérifiez qu\'un autre logiciel peut le relire. Préférez le paramétrage aux développements spécifiques, les formats ouverts aux formats propriétaires, et inscrivez dans le contrat la restitution des données, le préavis de résiliation et l\'absence de frais de sortie. En Europe, le règlement sur les données encadre désormais le changement de fournisseur de services en nuage, mais il ne garantit pas que vos données seront directement exploitables par l\'outil suivant.',
        ],
        [
            'q' => 'Les outils comparés gèrent-ils le mobile money et le SYSCOHADA ?',
            'r' => 'Pas tous, et pas de la même façon. Les agrégateurs de paiement sont conçus pour le mobile money, avec des pays et des opérateurs qui diffèrent de l\'un à l\'autre. Pour les ERP, la conformité au SYSCOHADA dépend du plan comptable et des états fournis ou ajoutés par module. Chaque comparatif précise ce que la documentation officielle affirme et ce qu\'elle ne dit pas ; vérifiez ensuite le point lors de l\'essai, sur un flux complet, de la vente à l\'écriture comptable.',
        ],
        [
            'q' => 'Mes données peuvent-elles être hébergées hors de mon pays ?',
            'r' => 'Parfois, sous conditions. Au Bénin, l\'article 391 du code du numérique n\'autorise un transfert de données personnelles vers un État tiers que si l\'Autorité constate un niveau de protection équivalent. Dans l\'Union européenne, le RGPD encadre aussi les transferts, et la CNIL recommande de vérifier la localisation effective des données chez tout prestataire en nuage. Demandez à l\'éditeur où sont ses serveurs, et faites valider votre situation par un conseil si vous traitez des données sensibles.',
        ],
        [
            'q' => 'Pourquoi Wapy et Audyxa n\'apparaissent-ils pas dans les comparatifs ?',
            'r' => 'Parce que Richard a créé Wapy et qu\'il est co-fondateur d\'Audyxa. Les faire figurer dans un classement qu\'il rédige créerait un conflit d\'intérêts évident. Les comparatifs portent sur des outils tiers ; quand une aide de Richard est proposée, elle apparaît séparément, en fin de page, sans influencer la notation.',
        ],
        [
            'q' => 'Un comparatif suffit-il pour décider ?',
            'r' => 'Non. Il fait le travail documentaire : rassembler les faits vérifiés, poser les critères, signaler les pièges. Il reste trois étapes que lui seul ne peut pas faire : écrire votre besoin, essayer l\'outil sur vos propres données pendant quelques semaines, et obtenir un devis daté qui engage l\'éditeur ou le prestataire sur le périmètre, le prix et les conditions de sortie.',
        ],
        [
            'q' => 'Combien de temps prévoir pour choisir un outil ?',
            'r' => 'Le temps dépend de l\'enjeu. Pour un assistant d\'IA ou un outil d\'automatisation simple, quelques jours d\'essai sur des cas réels suffisent souvent. Pour un ERP qui touchera la comptabilité, les stocks et les ventes, prévoyez le cadrage du besoin, la présélection de deux ou trois options, un essai de plusieurs semaines et la comparaison des devis : précipiter cette étape coûte presque toujours plus cher que le temps gagné.',
        ],
        [
            'q' => 'Richard peut-il m\'aider à choisir sans m\'imposer un outil ?',
            'r' => 'Oui. Le diagnostic consiste à cadrer votre besoin, à remplir la grille avec vous, à organiser l\'essai et à relire les devis. Richard installe et forme notamment à Odoo, Dolibarr, n8n et Make, mais la recommandation suit vos critères pondérés, pas ses préférences. Vous pouvez en savoir plus sur son parcours sur la page <a href="/a-propos/">à propos</a>, ou le joindre depuis la page <a href="/contact">contact</a>.',
        ],
    ],
    'sources' => [
        ['titre' => 'CNIL, « Sécurité : gérer la sous-traitance » (mise à jour du 14 mars 2024)', 'url' => 'https://www.cnil.fr/fr/securite-gerer-la-sous-traitance', 'date' => '2026-10-03'],
        ['titre' => 'GOV.UK, The Technology Code of Practice (13 points)', 'url' => 'https://www.gov.uk/guidance/the-technology-code-of-practice', 'date' => '2026-10-03'],
        ['titre' => 'GOV.UK, Define your purchasing strategy', 'url' => 'https://www.gov.uk/guidance/define-your-purchasing-strategy', 'date' => '2026-10-03'],
        ['titre' => 'NCSC, The cloud security principles', 'url' => 'https://www.ncsc.gov.uk/collection/cloud/the-cloud-security-principles', 'date' => '2026-10-03'],
        ['titre' => 'ANSSI, La cybersécurité pour les TPE/PME en treize questions (version 2.5, novembre 2024)', 'url' => 'https://messervices.cyber.gouv.fr/guides/la-cybersecurite-pour-les-tpepme-en-treize-questions', 'date' => '2026-10-03'],
        ['titre' => 'Open Source Initiative, The Open Source Definition', 'url' => 'https://opensource.org/osd', 'date' => '2026-10-03'],
        ['titre' => 'code.gouv.fr, Socle interministériel de logiciels libres (SILL)', 'url' => 'https://code.gouv.fr/sill/', 'date' => '2026-10-03'],
        ['titre' => 'EUR-Lex, Règlement (UE) 2023/2854 sur les données, articles 25 et 29', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32023R2854', 'date' => '2026-10-03'],
        ['titre' => 'Commission européenne, Data Act', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/data-act', 'date' => '2026-10-03'],
        ['titre' => 'BCEAO, communiqué du 2 avril 2026 sur la connexion à la PI-SPI', 'url' => 'https://www.bceao.int/fr/communique-presse/connexion-la-plateforme-interoperable-du-systeme-de-paiement-instantane-pi-spi-de', 'date' => '2026-10-03'],
        ['titre' => 'OHADA, Acte uniforme relatif au droit comptable et à l\'information financière (AUDCIF)', 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/', 'date' => '2026-10-03'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
        ['titre' => 'Odoo, documentation, licences', 'url' => 'https://www.odoo.com/documentation/19.0/legal/licenses.html', 'date' => '2026-10-03'],
        ['titre' => 'Dolibarr, site officiel', 'url' => 'https://www.dolibarr.org/', 'date' => '2026-10-03'],
        ['titre' => 'n8n, License FAQ (Sustainable Use License)', 'url' => 'https://docs.n8n.io/n8n-community-license/community-license/license-faq', 'date' => '2026-10-03'],
        ['titre' => 'Make, page tarifs', 'url' => 'https://www.make.com/en/pricing', 'date' => '2026-10-03'],
        ['titre' => 'Zapier, page tarifs', 'url' => 'https://zapier.com/pricing', 'date' => '2026-10-03'],
        ['titre' => 'FedaPay, site officiel', 'url' => 'https://www.fedapay.com/', 'date' => '2026-10-03'],
        ['titre' => 'Kkiapay, site officiel', 'url' => 'https://kkiapay.me/', 'date' => '2026-10-03'],
    ],
    'liens' => [],
];
