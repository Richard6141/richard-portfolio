<?php
// ============================================================
// data/comparatifs/n8n-vs-make-vs-zapier.php · Comparatif n8n, Make et Zapier
// (vague 0C). Remplace l'article /blog/n8n-vs-zapier-vs-make-2026.
// Prix, unités de facturation et conditions relevés sur les pages officielles
// le 03/10/2026 ; à revérifier à chaque mise à jour (les grilles bougent souvent).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'n8n, Make ou Zapier : quel outil d\'automatisation choisir pour votre entreprise ?',
    'title'   => 'n8n, Make ou Zapier : coût réel et choix | Richard SALANON',
    'meta'    => 'n8n, Make ou Zapier : exécutions, crédits ou tâches, coût réel à 5 000 et 50 000 passages par mois, données, licence n8n, WhatsApp et mobile money.',
    'en_bref' => 'Les trois outils relient vos applications sans développement lourd, mais ils ne facturent pas la même chose : n8n compte des exécutions complètes, Make des crédits par module, Zapier des tâches par action réussie. Pour un même workflow de cinq étapes, l\'écart de prix grandit avec le volume, et n8n peut aussi s\'installer sur votre propre serveur sous une licence qui limite certains usages commerciaux. Zapier reste le plus simple à prendre en main, Make offre le meilleur compromis visuel, n8n donne le plus de contrôle à ceux qui peuvent l\'administrer.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Dirigeants et responsables de PME, Afrique francophone et Europe'],
        ['l' => 'Outils comparés', 'v' => 'n8n (cloud et auto-hébergé), Make, Zapier'],
        ['l' => 'Critères pondérés', 'v' => '7 critères, poids publiés et ajustables'],
        ['l' => 'Volumes simulés', 'v' => '5 000 et 50 000 passages par mois'],
        ['l' => 'Sources consultées', 'v' => 'Pages tarifs et documentations officielles, le 3 octobre 2026'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le choix entre n8n, Make et Zapier se joue-t-il d\'abord sur l\'unité de facturation ?',
            'paragraphes' => [
                'Sur le papier, n8n, Make et Zapier promettent la même chose : quand un événement se produit dans une application (une commande, un formulaire, un message WhatsApp, un paiement), une suite d\'actions se déclenche toute seule dans les autres. Les trois outils se pilotent depuis une interface visuelle, se connectent à des milliers de services et intègrent désormais des fonctions d\'intelligence artificielle. À la démonstration, ils se ressemblent beaucoup.',
                'La différence apparaît sur la facture. n8n compte des <strong>exécutions</strong> : un passage complet d\'un workflow, quel que soit son nombre d\'étapes. Make compte des <strong>crédits</strong>, qui ont remplacé les anciennes « opérations » : chaque module consomme au moins un crédit, et autant de fois qu\'il traite d\'éléments. Zapier compte des <strong>tâches</strong> : chaque action réussie en consomme une ou plusieurs. Un même processus peut donc coûter une unité chez le premier, cinq chez le deuxième et quatre chez le troisième.',
                'Pour une PME de Cotonou, d\'Abidjan, de Dakar, de Lomé ou de Douala, d\'autres questions pèsent autant que le prix : où sont stockées les données des clients, comment brancher WhatsApp et le mobile money, comment payer un abonnement facturé en euros ou en dollars par carte, et qui saura maintenir les automatisations quand la personne qui les a construites quittera l\'entreprise. Une PME de Lyon ou de Bruxelles se posera plutôt la question du RGPD et de l\'hébergement européen.',
                'Ce comparatif ne désigne pas de gagnant. Il expose ce que chaque éditeur publie le 3 octobre 2026 sur ses pages tarifs et ses documentations, simule le coût d\'un même workflow à deux volumes, publie une grille de critères pondérés que vous pouvez ajuster, puis montre quels profils d\'entreprise tirent le meilleur parti de chaque outil.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que facture exactement chaque outil : une exécution, un crédit ou une tâche ?',
            'legende' => 'Unités de facturation telles que définies par les éditeurs, relevées le 3 octobre 2026 sur les pages tarifs et les centres d\'aide de n8n, Make et Zapier.',
            'entetes' => ['Outil', 'Unité facturée', 'Ce qui consomme', 'Ce qui ne consomme pas'],
            'lignes'  => [
                ['n8n', 'Exécution de workflow', 'Chaque passage complet du workflow en production, du déclencheur à la dernière étape, compte pour une seule exécution, quel que soit le nombre d\'étapes ou le volume de données traité.', 'Le nombre d\'étapes, la quantité de données, le nombre d\'utilisateurs et de workflows actifs. En auto-hébergement sans licence payante, rien n\'est compté.'],
                ['Make', 'Crédit (anciennement opération)', 'Chaque exécution de module consomme en général un crédit, et une fois par élément traité. Un déclencheur qui vérifie s\'il y a du nouveau consomme un crédit à chaque vérification. Les fonctions d\'IA de Make et l\'exécution de code consomment selon les jetons ou la durée.', 'Les modules qui ne s\'exécutent pas parce qu\'un filtre a arrêté le scénario en amont.'],
                ['Zapier', 'Tâche', 'Chaque action réussie consomme au moins une tâche ; une étape d\'IA en consomme 1, 3 ou 5 selon le niveau de modèle, un appel d\'outil MCP en consomme 2.', 'Le déclencheur et la vérification de nouvelles données, les actions qui échouent, ainsi que les outils intégrés (Formatter, Filter, Paths, Delay, Looping, Tables, Forms, Storage).'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi une même automatisation ne coûte-t-elle pas la même chose partout ?',
            'paragraphes' => [
                'Prenons un exemple courant. Une boutique reçoit une commande payée par mobile money. Le prestataire de paiement prévient l\'outil par un webhook ; l\'outil vérifie la transaction auprès de l\'API du prestataire, ajoute une ligne dans Google Sheets, envoie un message WhatsApp de confirmation au client et prévient l\'équipe de préparation. Cinq étapes au total : un déclencheur et quatre actions.',
                'Selon la <a href="https://n8n.io/pricing/">page tarifs de n8n</a> consultée le 3 octobre 2026, ce passage compte pour une exécution, car n8n facture le workflow entier et non chaque étape. Selon le <a href="https://help.make.com/operations">centre d\'aide de Make</a>, chaque module qui s\'exécute produit une opération, convertie en un crédit pour les applications sans IA : le même passage consomme cinq crédits. Selon la <a href="https://zapier.com/pricing">page tarifs de Zapier</a>, le déclencheur ne compte pas, mais chaque action réussie consomme une tâche : quatre tâches.',
                'L\'écart se creuse quand un module traite plusieurs éléments. Si votre déclencheur Make récupère dix nouvelles lignes d\'un tableau, chaque module suivant s\'exécute dix fois ; le centre d\'aide de Make donne l\'exemple d\'un scénario à quatre modules qui consomme 31 opérations pour dix réponses à un formulaire. Chez Zapier, une boucle sur dix éléments déclenche dix fois les actions qu\'elle contient. Chez n8n, l\'ensemble reste une seule exécution.',
                'Inversement, Make et Zapier ne facturent pas les filtres qui arrêtent un passage inutile, et Zapier ne facture ni le déclencheur ni ses outils de mise en forme. Un workflow très simple, à une seule action, coûte donc une tâche chez Zapier comme une exécution chez n8n. L\'avantage de n8n tient aux workflows longs, aux boucles et aux gros volumes ; il disparaît presque sur les automatisations à une ou deux étapes.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûtent les offres payantes d\'entrée de gamme au 3 octobre 2026 ?',
            'intro' => 'Prix publics hors taxes relevés le 3 octobre 2026 sur les pages tarifs officielles. n8n affiche ses prix en euros ; Make et Zapier en dollars américains par défaut. Le premier montant correspond au paiement annuel ramené au mois, le second au paiement mois par mois.',
            'items' => [
                ['offre' => 'n8n Starter (cloud)', 'prix' => '20 € par mois en annuel, 24 € sans engagement', 'inclus' => ['2 500 exécutions par mois, étapes illimitées', '5 exécutions simultanées', 'Utilisateurs et workflows illimités', 'Agents, MCP et nœuds d\'IA, 1 600 crédits d\'assistant par mois', 'Hébergement par n8n, données à Francfort']],
                ['offre' => 'n8n Pro (cloud)', 'prix' => '50 € par mois en annuel, 60 € sans engagement', 'inclus' => ['10 000 exécutions par mois (palier de 50 000 à 145 € par mois)', 'Jusqu\'à 50 exécutions simultanées selon le palier', '3 projets partagés, rôles d\'administrateur', 'Historique des workflows et 7 jours de statistiques', 'Jusqu\'à 9 600 crédits d\'assistant par mois']],
                ['offre' => 'Make Core', 'prix' => '9 $ par mois en annuel, 10,59 $ sans engagement', 'inclus' => ['10 000 crédits par mois (paliers jusqu\'à 300 000)', 'Scénarios actifs illimités', 'Planification jusqu\'à la minute', 'Exécution de 40 minutes au plus par scénario', 'Accès à l\'API de Make']],
                ['offre' => 'Make Pro', 'prix' => '16 $ par mois en annuel, 18,82 $ sans engagement', 'inclus' => ['10 000 crédits par mois (paliers jusqu\'à 8 millions)', 'Exécution prioritaire des scénarios', 'Variables personnalisées', 'Recherche plein texte dans l\'historique', 'Crédits annuels utilisables librement sur l\'année']],
                ['offre' => 'Zapier Professional', 'prix' => '19,99 $ par mois en annuel, 29,99 $ sans engagement', 'inclus' => ['750 tâches par mois (paliers jusqu\'à 2 millions)', 'Zaps à plusieurs étapes et webhooks', 'Applications Premium illimitées', 'Vérification des nouvelles données toutes les 2 minutes', '1 utilisateur']],
                ['offre' => 'Zapier Team', 'prix' => '69 $ par mois en annuel, 103,50 $ sans engagement', 'inclus' => ['2 000 tâches par mois', '25 utilisateurs, connexions et dossiers partagés', 'Authentification unique SAML', 'Vérification toutes les minutes', 'Support prioritaire']],
            ],
            'variations' => [
                'Le volume choisi sur le curseur de chaque page tarifs : plus le palier est haut, plus le prix unitaire baisse.',
                'Le mode de paiement : Zapier annonce jusqu\'à 33 % d\'économie en annuel, Make au moins 15 %, n8n 17 %.',
                'Les dépassements : crédits supplémentaires majorés de 25 % chez Make, tâches au-delà du forfait facturées plus cher chez Zapier, paliers supérieurs chez n8n.',
                'Les fonctions d\'IA, qui consomment davantage de crédits ou de tâches, sauf si vous branchez votre propre clé de fournisseur.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que proposent les offres gratuites, et jusqu\'où peut-on aller sans payer ?',
            'intro' => 'Les trois éditeurs permettent de démarrer sans payer, mais avec des logiques très différentes, relevées sur leurs pages tarifs et leurs documentations le 3 octobre 2026.',
            'items' => [
                ['titre' => 'n8n : gratuit si vous l\'hébergez', 'texte' => 'L\'édition Community, auto-hébergée, est gratuite et sans plafond d\'exécutions, avec « presque toutes les fonctions » selon la documentation de n8n. Il faut un serveur, des sauvegardes et quelqu\'un pour l\'administrer. Une version gratuite enregistrée par courriel ajoute les dossiers et le débogage dans l\'éditeur. Côté cloud, n8n propose un essai de 14 jours sans carte bancaire, limité à 1 000 exécutions.'],
                ['titre' => 'Make : 1 000 crédits par mois', 'texte' => 'Le plan Free de Make inclut jusqu\'à 1 000 crédits par mois, deux scénarios actifs, un intervalle minimal de 15 minutes entre deux exécutions planifiées et 5 minutes d\'exécution au plus. C\'est suffisant pour tester un ou deux scénarios réels, pas pour faire tourner un service client.'],
                ['titre' => 'Zapier : 100 tâches par mois', 'texte' => 'Le plan Free de Zapier offre 100 tâches par mois et des Zaps à deux étapes seulement : un déclencheur et une action. Les webhooks et les applications Premium, dont WhatsApp Business, demandent un plan payant. Un nouveau compte bénéficie de 14 jours d\'essai du plan Professional sans carte bancaire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Combien coûte vraiment un même workflow à 5 000 puis 50 000 passages par mois ?',
            'legende' => 'Workflow de référence : webhook de paiement, vérification de la transaction, ligne Google Sheets, message WhatsApp au client, alerte à l\'équipe (1 déclencheur, 4 actions, 1 élément par passage). Palier le plus bas qui couvre le volume, prix hors taxes relevés le 3 octobre 2026 ; frais de messages WhatsApp facturés par Meta non compris.',
            'entetes' => ['Offre', 'Consommation par passage', '5 000 passages par mois', '50 000 passages par mois'],
            'lignes'  => [
                ['n8n Cloud Pro', '1 exécution', '5 000 exécutions : palier de 10 000, soit 50 € par mois en annuel (600 € par an) ou 60 € sans engagement', '50 000 exécutions : palier de 50 000, soit 1 450 € par an (environ 120,83 € par mois) ou 145 € sans engagement'],
                ['n8n Community auto-hébergé', 'Aucune unité comptée', '0 € de licence ; coût du serveur, des sauvegardes et du temps d\'administration', '0 € de licence ; serveur plus robuste, base PostgreSQL conseillée, surveillance à prévoir'],
                ['Make Core', '5 crédits', '25 000 crédits : palier de 40 000, soit 29 $ par mois en annuel ou 34,12 $ sans engagement', '250 000 crédits : palier de 300 000, soit 182,16 $ par mois en annuel ou 214,31 $ sans engagement'],
                ['Make Pro', '5 crédits', '25 000 crédits : palier de 40 000, soit 53 $ par mois en annuel ou 62,35 $ sans engagement', '250 000 crédits : palier de 300 000, soit 268,54 $ par mois en annuel ou 315,93 $ sans engagement'],
                ['Zapier Professional', '4 tâches', '20 000 tâches : palier de 20 000, soit 189 $ par mois en annuel ou 283,50 $ sans engagement', '200 000 tâches : palier de 200 000, soit 769 $ par mois en annuel ou 1 149 $ sans engagement'],
                ['Zapier Team', '4 tâches', '20 000 tâches : 249 $ par mois en annuel ou 373,50 $ sans engagement', '200 000 tâches : 999 $ par mois en annuel ou 1 499 $ sans engagement'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment lire ces chiffres quand on paie en francs CFA ?',
            'paragraphes' => [
                'Aucun des trois éditeurs ne facture en francs CFA. Pour les offres de n8n, libellées en euros, la conversion est simple : la parité entre l\'euro et le franc CFA est fixe, à 655,957 FCFA pour un euro selon la <a href="https://www.bceao.int/fr/content/histoire-du-franc-cfa">BCEAO</a>. Le plan Pro à 50 € par mois revient donc à environ 32 798 FCFA par mois, et le palier de 50 000 exécutions à 1 450 € par an représente environ 951 138 FCFA par an. Le franc CFA d\'Afrique centrale (XAF) a la même parité.',
                'Pour Make et Zapier, affichés en dollars, le montant en FCFA dépend du cours du jour et des frais de change de votre banque. Zapier propose aussi un affichage et une facturation dans d\'autres devises, dont l\'euro, ce qui supprime une partie du risque de change pour une entreprise de la zone franc. Dans tous les cas, comptez les frais bancaires sur les paiements internationaux par carte : ils s\'ajoutent au prix publié.',
                'Le tableau montre surtout des ordres de grandeur. À 5 000 passages par mois, les trois outils restent abordables et l\'écart se compte en dizaines de dollars ou d\'euros. À 50 000 passages, il se compte en centaines : environ 121 € par mois chez n8n Cloud en annuel, 182 $ chez Make Core, 769 $ chez Zapier Professional. C\'est à ce stade que la question de l\'outil devient une question budgétaire, et que l\'auto-hébergement de n8n mérite d\'être étudié.',
                'Ces simulations supposent un élément par passage. Si chaque passage traite plusieurs lignes, plusieurs articles ou plusieurs destinataires, la consommation de Make et de Zapier se multiplie, pas celle de n8n. À l\'inverse, si vos workflows n\'ont qu\'une ou deux actions, l\'écart se réduit fortement. Refaites toujours le calcul avec vos propres workflows avant de signer.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que change l\'ajout d\'une étape d\'intelligence artificielle sur la facture ?',
            'legende' => 'Même workflow à 50 000 passages par mois, auquel on ajoute une étape d\'IA qui classe le message du client. Barèmes publiés par les éditeurs le 3 octobre 2026 ; le coût des jetons facturé par le fournisseur du modèle (OpenAI, Anthropic, Google) n\'est pas compris quand vous utilisez votre propre clé.',
            'entetes' => ['Outil et mode d\'IA', 'Consommation ajoutée par passage', 'Effet à 50 000 passages'],
            'lignes'  => [
                ['n8n avec votre clé de fournisseur', 'Aucune : l\'étape d\'IA fait partie de la même exécution', 'Toujours 50 000 exécutions ; vous payez les jetons directement au fournisseur du modèle'],
                ['Make avec connexion personnelle (plans payants)', '1 crédit par opération', '300 000 crédits au lieu de 250 000 : le palier de 300 000 suffit encore (182,16 $ par mois en annuel sur Core) ; jetons payés au fournisseur'],
                ['Make avec le fournisseur d\'IA de Make', 'Crédits calculés selon les jetons et le modèle choisi', 'Variable : le centre d\'aide de Make publie un barème par modèle (par exemple 3 616 jetons d\'entrée ou 452 jetons de sortie par crédit pour GPT-5 mini)'],
                ['Zapier, IA avec votre propre modèle', '1 tâche', '250 000 tâches : palier de 300 000, soit 1 069 $ par mois en annuel'],
                ['Zapier, modèles avancés', '3 tâches', '350 000 tâches : palier de 400 000, soit 1 269 $ par mois en annuel'],
                ['Zapier, modèles premium', '5 tâches', '450 000 tâches : palier de 500 000, soit 1 499 $ par mois en annuel'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Comment n8n, Make et Zapier se comparent-ils, critère par critère ?',
            'options'  => ['n8n', 'Make', 'Zapier'],
            'criteres' => [
                ['critere' => 'Unité facturée', 'valeurs' => ['Exécution complète du workflow', 'Crédit par module et par élément traité', 'Tâche par action réussie']],
                ['critere' => 'Offre gratuite', 'valeurs' => ['Community auto-hébergée, sans plafond ; essai cloud de 14 jours', '1 000 crédits par mois, 2 scénarios actifs', '100 tâches par mois, Zaps à deux étapes']],
                ['critere' => 'Premier prix payant', 'valeurs' => ['20 € par mois en annuel pour 2 500 exécutions', '9 $ par mois en annuel pour 10 000 crédits', '19,99 $ par mois en annuel pour 750 tâches']],
                ['critere' => 'Hébergement des données', 'valeurs' => ['Cloud à Francfort (Union européenne), ou votre propre serveur', 'AWS en Europe ou en Amérique du Nord', 'AWS aux États-Unis, sans option Union européenne']],
                ['critere' => 'Auto-hébergement', 'valeurs' => ['Oui, Docker ou npm, gratuit en Community', 'Non ; agent local pour réseau interne réservé à l\'offre Enterprise', 'Non']],
                ['critere' => 'Licence', 'valeurs' => ['Sustainable Use License, dite « fair-code », pas open source au sens de l\'OSI', 'Service propriétaire', 'Service propriétaire']],
                ['critere' => 'Nombre d\'applications annoncé', 'valeurs' => ['Toutes les intégrations sur toutes les offres, plus requêtes HTTP libres', 'Plus de 3 000 applications', 'Plus de 9 000 applications']],
                ['critere' => 'WhatsApp Business (API Cloud de Meta)', 'valeurs' => ['Nœud natif et déclencheur, envoi avec attente de réponse', 'Application native, mode coexistence avec l\'application mobile', 'Application Premium : messages reçus, modèles, statuts']],
                ['critere' => 'FedaPay, KkiaPay, CinetPay', 'valeurs' => ['Pas de nœud dédié : webhook et requête HTTP', 'Pas d\'application dédiée : webhook et module HTTP', 'Pas d\'application dédiée : Webhooks by Zapier (plan payant)']],
                ['critere' => 'Code personnalisé', 'valeurs' => ['JavaScript et Python dans les workflows', 'JavaScript et Python, 2 crédits par seconde d\'exécution', 'JavaScript et Python, 1 tâche par étape']],
                ['critere' => 'Agents d\'IA', 'valeurs' => ['Nœud AI Agent, MCP, validation humaine des actions', 'Make AI Agent, en bêta ouverte depuis février 2026', 'AI by Zapier, Zapier Agents (offre séparée), MCP']],
                ['critere' => 'Utilisateurs inclus', 'valeurs' => ['Illimités sur toutes les offres', 'Illimités sur toutes les offres', '1 en Professional, 25 en Team, illimités en Enterprise']],
                ['critere' => 'Paiement par virement', 'valeurs' => ['Business annuel et Enterprise', 'Enterprise', 'Team annuel et Enterprise']],
                ['critere' => 'Prise en main sans technicien', 'valeurs' => ['La plus exigeante', 'Intermédiaire', 'La plus simple']],
            ],
            'verdict'  => 'Aucun outil ne domine sur tous les critères : Zapier gagne sur la simplicité et le catalogue, Make sur le rapport entre puissance visuelle et prix, n8n sur le contrôle des données et le coût à fort volume.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels critères pondérer pour décider, et avec quels poids ?',
            'legende' => 'Grille proposée pour une PME d\'Afrique francophone de 5 à 100 personnes. Les poids totalisent 100 ; modifiez-les selon votre situation avant de noter chaque outil de 1 à 5 sur vos propres workflows.',
            'entetes' => ['Critère', 'Poids', 'Ce que l\'on mesure', 'Outil qui part avec un avantage'],
            'lignes'  => [
                ['Coût total à votre volume', '25', 'Abonnement au palier réel, dépassements, frais bancaires, temps d\'administration', 'n8n à fort volume ou en auto-hébergement ; Zapier sur les Zaps à une action'],
                ['Connecteurs utiles', '15', 'WhatsApp, Google Sheets, ERP (Odoo), prestataires de paiement, webhooks', 'Zapier par l\'étendue du catalogue ; égalité sur WhatsApp et Sheets'],
                ['Prise en main par l\'équipe', '15', 'Temps pour qu\'une personne non développeuse modifie seule un workflow', 'Zapier, puis Make'],
                ['Contrôle et localisation des données', '15', 'Pays d\'hébergement, possibilité d\'héberger soi-même, durée de conservation', 'n8n, seul à pouvoir tourner sur votre serveur'],
                ['IA et agents', '10', 'Choix des modèles, coût des étapes d\'IA, garde-fous avant une action', 'n8n et Make avec votre propre clé ; Zapier en simplicité'],
                ['Maintenance et compétences', '10', 'Qui surveille, met à jour, corrige quand un workflow casse', 'Make et Zapier, entièrement gérés par l\'éditeur'],
                ['Paiement et facturation', '10', 'Devise, carte ou virement, facture conforme pour la comptabilité', 'n8n en euros, Zapier multidevise ; virement réservé aux offres hautes partout'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment ajuster cette grille à votre situation ?',
            'paragraphes' => [
                'Les poids ci-dessus reflètent ce que je rencontre le plus souvent chez les PME d\'Afrique francophone : un budget surveillé de près, une équipe qui n\'a pas de développeur à temps plein, et des processus construits autour de WhatsApp et de tableurs partagés. Ils ne valent pas pour tout le monde.',
                'Une microfinance, une clinique ou un cabinet d\'avocats qui manipule des données sensibles doit monter le critère « contrôle des données » à 30 ou 35, quitte à baisser la prise en main. Une agence de marketing qui teste dix automatisations par mois privilégiera la prise en main et le catalogue de connecteurs. Une entreprise européenne soumise au RGPD donnera plus de poids à l\'hébergement dans l\'Union européenne, ce qui avantage n8n Cloud et Make, dont les données peuvent rester en Europe.',
                'Notez ensuite chaque outil de 1 à 5 sur chaque critère, à partir de vos workflows réels et non d\'une démonstration, multipliez par le poids et additionnez. Si deux outils finissent à moins de dix points l\'un de l\'autre sur 500, le critère décisif sera souvent la compétence disponible autour de vous : un outil que personne ne sait réparer coûte toujours plus cher que prévu.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que permet vraiment l\'auto-hébergement de n8n ?',
            'paragraphes' => [
                'n8n est le seul des trois outils que vous pouvez installer sur votre propre machine : un serveur loué chez un hébergeur, une machine virtuelle dans votre salle serveur ou une instance chez un fournisseur de cloud. La <a href="https://docs.n8n.io/choose-how-to-use-n8n">documentation de n8n</a> le recommande quand vous avez besoin d\'un contrôle complet sur le déploiement et que vous disposez des ressources techniques pour l\'administrer.',
                'Sans clé de licence, l\'instance tourne en édition Community. Elle ne compte pas les exécutions et ne les facture pas : 5 000 ou 500 000 passages par mois coûtent le même prix de licence, c\'est-à-dire rien. Ce qui coûte, c\'est l\'infrastructure et le temps humain. Selon la <a href="https://docs.n8n.io/deploy/host-n8n/configure-n8n/choose-n8ns-database">documentation sur les bases de données</a>, n8n utilise SQLite par défaut et prend aussi en charge PostgreSQL, plus adapté dès que les volumes montent.',
                'L\'édition Community n\'inclut pas tout. La <a href="https://docs.n8n.io/deploy/host-n8n/community-edition-features">page de comparaison des éditions</a> liste ce qui manque : variables personnalisées, environnements, gestion de versions avec Git, partage de workflows et d\'identifiants entre utilisateurs, projets, authentification unique SAML ou LDAP, secrets externes et diffusion des journaux. Concrètement, seuls le propriétaire de l\'instance et le créateur d\'un workflow y ont accès : pour une équipe de plusieurs personnes qui doivent travailler ensemble, c\'est une vraie limite.',
                'Pour lever ces limites tout en restant chez vous, n8n vend une licence Business, réservée à l\'auto-hébergement : 667 € par mois en annuel ou 800 € sans engagement pour 40 000 exécutions, selon la page tarifs. Les entreprises de moins de 20 salariés peuvent demander le programme Start-up, qui annonce 50 % de réduction sur Business. La clé de licence contacte chaque jour le serveur de licences de n8n et lui transmet notamment le nombre d\'exécutions de production.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que change la Sustainable Use License de n8n pour votre entreprise ?',
            'intro' => 'Le code de n8n est publié sous la Sustainable Use License, une licence « fair-code » créée par n8n en 2022. Selon la <a href="https://docs.n8n.io/n8n-community-license/community-license">page de licence</a> et la <a href="https://docs.n8n.io/n8n-community-license/community-license/license-faq">FAQ de licence</a> consultées le 3 octobre 2026, elle autorise beaucoup d\'usages, avec trois limites.',
            'items' => [
                ['titre' => 'Usage interne : autorisé', 'texte' => 'Vous pouvez utiliser, modifier et faire tourner n8n gratuitement pour les besoins internes de votre entreprise, pour des projets personnels, l\'apprentissage ou la recherche. Des personnes extérieures peuvent recevoir ce que produisent vos workflows : un message WhatsApp, une facture, une réponse de chatbot.'],
                ['titre' => 'Prestations de service : autorisées', 'texte' => 'Un consultant ou une agence peut facturer la création, l\'installation, la maintenance de workflows, la formation et le conseil. Il peut aussi faire tourner des workflows pour plusieurs clients sur sa propre instance, tant que ces clients n\'ont accès ni à l\'interface ni à la logique des workflows.'],
                ['titre' => 'n8n comme moteur caché : autorisé sous conditions', 'texte' => 'Vous pouvez utiliser n8n en arrière-plan de votre propre produit, y compris quand vos utilisateurs déclenchent des automatisations que vous avez construites ou y connectent leurs comptes. Le test, selon n8n, porte sur la question de savoir qui contrôle la logique du workflow.'],
                ['titre' => 'Revendre l\'automatisation elle-même : interdit', 'texte' => 'Héberger n8n comme un service où vos clients construisent leurs propres workflows, même derrière votre propre interface, par l\'API, par MCP ou par un agent d\'IA, demande un accord commercial. Il est aussi interdit de forker n8n pour lancer votre propre outil d\'automatisation ou de le revendre en marque blanche.'],
                ['titre' => 'Fonctions Enterprise : clé obligatoire', 'texte' => 'Le code des fonctions avancées relève d\'une licence distincte, la n8n Enterprise License. Les activer sans clé payante n\'est pas permis. En cas de doute sur un montage, n8n invite à écrire à son adresse dédiée aux licences avant le lancement.'],
                ['titre' => 'Open source ou pas ?', 'texte' => 'n8n ne se présente pas comme open source, parce que l\'Open Source Initiative n\'admet pas de limitation d\'usage. Le code reste lisible et modifiable sur GitHub. Pour une PME qui automatise ses propres processus, la différence pratique est faible ; pour un éditeur de logiciel, elle est décisive.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Où partent les données de vos clients avec chaque outil ?',
            'intro' => 'Une automatisation transporte des noms, des numéros de téléphone, des montants et parfois des pièces d\'identité. Savoir où ces données transitent et combien de temps elles restent stockées fait partie du choix.',
            'items' => [
                ['titre' => 'n8n Cloud : Union européenne', 'texte' => 'Selon la FAQ de la page tarifs de n8n, les données des offres hébergées sont stockées dans l\'Union européenne, sur des serveurs situés à Francfort, en Allemagne. Le nombre d\'exécutions conservées et leur durée dépendent de l\'offre : 2 500 exécutions et 7 jours au plus sur Starter, 25 000 et 30 jours sur Pro.'],
                ['titre' => 'n8n auto-hébergé : là où vous le décidez', 'texte' => 'En auto-hébergement, les données restent sur le serveur que vous choisissez, y compris dans votre pays si un hébergeur local ou votre propre salle serveur vous convient. La contrepartie est entière : la sécurité, le chiffrement, les sauvegardes et les mises à jour relèvent de vous. La télémétrie envoyée à n8n peut être désactivée.'],
                ['titre' => 'Make : Europe ou Amérique du Nord', 'texte' => 'La page tarifs de Make indique un hébergement sur AWS en Europe ou en Amérique du Nord pour toutes les offres. L\'agent local, qui permet à Make d\'atteindre une base de données ou une application de votre réseau interne sans ouvrir votre pare-feu, est réservé aux clients Enterprise selon le centre d\'aide de Make.'],
                ['titre' => 'Zapier : États-Unis uniquement', 'texte' => 'Selon la <a href="https://zapier.com/legal/data-privacy">page de confidentialité de Zapier</a>, les données sont hébergées sur des serveurs AWS aux États-Unis, et Zapier ne propose pas de stockage limité à l\'Union européenne. L\'historique des Zaps est conservé entre 29 et 69 jours ; seules les offres Company et Enterprise peuvent régler une durée de 7 à 30 jours.'],
                ['titre' => 'Ce que cela implique en pratique', 'texte' => 'Le Bénin, la Côte d\'Ivoire, le Sénégal et le Togo, entre autres, ont adopté une loi sur les données personnelles et créé une autorité de contrôle, comme l\'Union européenne avec le RGPD. Avant d\'automatiser des données de santé, de crédit ou d\'identité, vérifiez les obligations de déclaration et de transfert hors du pays qui s\'appliquent à votre activité.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels connecteurs comptent vraiment pour une PME d\'Afrique francophone ?',
            'intro' => 'Le nombre total d\'applications compte moins que la présence des quatre ou cinq services qui font tourner votre activité. Vérification faite le 3 octobre 2026 dans les répertoires et documentations des trois éditeurs.',
            'items' => [
                ['titre' => 'WhatsApp Business', 'texte' => 'Les trois outils se connectent à l\'API Cloud de WhatsApp Business de Meta, pas à l\'application WhatsApp ordinaire. n8n propose un nœud d\'envoi (message, modèle, média) et un déclencheur, avec une opération qui envoie un message puis attend la réponse ou la validation d\'une personne. Make documente un mode « coexistence » qui permet de garder l\'application mobile sur le même numéro. Chez Zapier, l\'application WhatsApp Business est classée Premium, donc réservée aux plans payants.'],
                ['titre' => 'Google Sheets', 'texte' => 'Dans beaucoup de PME, le tableur partagé sert de base clients, de suivi de stock ou de journal de caisse. Les trois outils lisent et écrivent dans Google Sheets et savent réagir à une nouvelle ligne. Attention chez Make : surveiller un tableau toutes les minutes consomme un crédit par vérification, même quand rien n\'a changé.'],
                ['titre' => 'Mobile money : FedaPay, KkiaPay, CinetPay', 'texte' => 'Je n\'ai trouvé de connecteur dédié à FedaPay, KkiaPay ou CinetPay dans aucun des trois répertoires. La méthode qui marche partout : le prestataire envoie une notification par webhook, puis une requête HTTP vers son API vérifie la transaction avant toute action. Flutterwave et Paystack disposent en revanche d\'applications natives chez Make et Zapier, pas chez n8n.'],
                ['titre' => 'ERP : Odoo et Dolibarr', 'texte' => 'Odoo dispose d\'un connecteur natif chez n8n, chez Make et chez Zapier. Dolibarr n\'en a dans aucun des trois : on passe par son API REST avec un module HTTP, ce qui suppose un peu de configuration. Le comparatif <a href="/comparatifs/odoo-vs-dolibarr">Odoo ou Dolibarr</a> détaille ce choix en amont.'],
                ['titre' => 'Webhooks et requêtes HTTP', 'texte' => 'C\'est le connecteur universel pour tout service local qui expose une API. n8n et Make l\'offrent sur toutes leurs offres. Chez Zapier, Webhooks by Zapier fait partie des fonctions du plan Professional et n\'est pas disponible en gratuit.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Les messages WhatsApp ont leur propre facture',
            'texte' => 'n8n, Make et Zapier facturent l\'automatisation, pas les messages. Les conversations ouvertes par modèle de message via l\'API Cloud de WhatsApp sont tarifées séparément par Meta, selon le pays du destinataire et la catégorie du message. Ajoutez ce poste à votre budget avant de lancer des relances ou des confirmations en masse.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Que valent les fonctions d\'IA et les agents de chaque outil ?',
            'intro' => 'Les trois éditeurs ont fait de l\'intelligence artificielle un argument central. Les approches diffèrent surtout par le mode de facturation et le degré de contrôle laissé à l\'humain.',
            'items' => [
                ['titre' => 'n8n : agents et garde-fous', 'texte' => 'n8n propose un nœud AI Agent qui peut appeler des outils (une base de données, une API, un autre workflow), un déclencheur serveur MCP et un client MCP, ainsi qu\'une validation humaine avant qu\'un agent n\'exécute une action sensible. En auto-hébergement, vous branchez votre propre clé chez le fournisseur du modèle. Les offres cloud incluent des crédits pour l\'assistant de construction, distincts de l\'usage des modèles dans vos workflows.'],
                ['titre' => 'Make : agents en bêta, facturation aux jetons', 'texte' => 'L\'application Make AI Agent (New), publiée le 2 février 2026, est en bêta ouverte : ses fonctions et son prix peuvent encore changer, précise le centre d\'aide. Avec le fournisseur d\'IA de Make, les crédits suivent les jetons consommés ; avec votre propre connexion, disponible sur tous les plans payants, Make facture l\'opération et le fournisseur facture les jetons.'],
                ['titre' => 'Zapier : niveaux de modèles et agents séparés', 'texte' => 'AI by Zapier facture 1, 3 ou 5 tâches par étape selon que le modèle est standard, avancé ou premium, et autant par appel d\'outil. Zapier Agents dispose de sa propre grille : 400 activités par mois en gratuit, 1 500 en Pro pour 33,33 $ par mois facturés 400 $ par an. Un appel d\'outil Zapier MCP consomme 2 tâches.'],
                ['titre' => 'Un conseil commun aux trois', 'texte' => 'Le centre d\'aide de Make le formule bien : confiez à un agent les tâches que vous confieriez à un stagiaire, et évitez les données sensibles, les décisions financières lourdes ou les obligations légales strictes. Dans une PME, un agent qui trie les messages WhatsApp entrants fait gagner du temps ; un agent qui valide seul un remboursement par mobile money crée un risque.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels cas d\'usage par secteur, et quel outil y est le plus naturel ?',
            'items' => [
                ['secteur' => 'Commerce et vente en ligne', 'probleme' => 'Les commandes arrivent par WhatsApp, le paiement par mobile money, et le suivi se fait à la main dans un tableur.', 'solution' => 'Webhook du prestataire de paiement, vérification par API, ligne Google Sheets, confirmation WhatsApp au client. Make convient à un volume moyen ; n8n devient plus économique quand les commandes se comptent par milliers chaque mois.'],
                ['secteur' => 'Microfinance et services financiers', 'probleme' => 'Les données de crédit et d\'identité ne doivent pas transiter par des serveurs que l\'on ne maîtrise pas.', 'solution' => 'n8n auto-hébergé sur un serveur choisi par l\'institution, avec PostgreSQL, sauvegardes chiffrées et accès restreints. Les relances d\'échéance partent par WhatsApp ou SMS sans que les dossiers ne quittent l\'infrastructure.'],
                ['secteur' => 'Cabinet comptable', 'probleme' => 'Les pièces des clients arrivent par courriel et messagerie, et les relances de fin de mois prennent des journées.', 'solution' => 'Collecte des pièces dans un dossier partagé, classement par client, relances automatiques avant les échéances déclaratives. Make ou Zapier suffisent ; la saisie comptable selon le SYSCOHADA reste dans le logiciel de comptabilité ou l\'ERP.'],
                ['secteur' => 'École et centre de formation', 'probleme' => 'Inscriptions par formulaire, paiement des frais par mobile money, attestations envoyées une à une.', 'solution' => 'Formulaire, webhook de paiement, inscription dans la base des apprenants, génération et envoi de l\'attestation. Make offre le meilleur compromis ; Zapier convient si l\'équipe utilise déjà ses formulaires et ses tables.'],
                ['secteur' => 'Logistique et livraison', 'probleme' => 'Les clients appellent sans cesse pour connaître l\'état de leur colis.', 'solution' => 'Chaque changement de statut dans l\'outil de suivi déclenche un message WhatsApp au destinataire. À fort volume, chaque statut étant un passage, n8n garde une facture stable.'],
                ['secteur' => 'ONG et projets multi-pays', 'probleme' => 'Les rapports d\'activité de plusieurs pays arrivent dans des formats différents.', 'solution' => 'Formulaires harmonisés, consolidation dans un tableur ou une base, tableau de bord mis à jour automatiquement. Le partage entre plusieurs équipes demande Make Teams, Zapier Team ou une licence n8n Business.'],
                ['secteur' => 'Agence de marketing', 'probleme' => 'Les prospects des publicités Facebook et des formulaires se perdent entre la boîte de réception et le CRM.', 'solution' => 'Transfert immédiat de chaque prospect vers le CRM, alerte au commercial, premier message automatique. Zapier est le plus rapide à mettre en place ; Make devient plus économique quand les campagnes montent en volume.'],
                ['secteur' => 'Clinique et cabinet médical', 'probleme' => 'Les rendez-vous manqués coûtent cher et les rappels se font par téléphone.', 'solution' => 'Rappel WhatsApp la veille avec confirmation ou annulation en un clic. Les données de santé plaident pour n8n auto-hébergé, ou pour un circuit qui ne transporte que le prénom, la date et l\'heure.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment estimer votre volume avant de choisir une offre ?',
            'items' => [
                ['titre' => 'Lister les processus à automatiser', 'texte' => 'Partez des tâches répétitives qui coûtent du temps chaque semaine : confirmation de commande, relance de facture, saisie de prospects, rappel de rendez-vous. Pour chacune, notez l\'événement qui la déclenche et les applications concernées.'],
                ['titre' => 'Compter les déclenchements par mois', 'texte' => 'Pour un webhook, le nombre de passages égale le nombre d\'événements : commandes, paiements, formulaires. Pour une planification, comptez les passages : la page tarifs de n8n rappelle qu\'un workflow lancé toutes les 5 minutes tourne environ 8 600 à 8 900 fois par mois. Pour un chatbot, multipliez les conversations par le nombre moyen de messages.'],
                ['titre' => 'Compter les étapes et les éléments par passage', 'texte' => 'Chez Make, comptez chaque module, multiplié par le nombre d\'éléments qu\'il traite, plus le déclencheur. Chez Zapier, comptez les actions réussies, sans le déclencheur ni les outils intégrés. Chez n8n, un passage reste une exécution.'],
                ['titre' => 'Ajouter le coût de l\'IA et des vérifications à vide', 'texte' => 'Une étape d\'IA peut multiplier la consommation par trois ou cinq chez Zapier. Un déclencheur Make qui vérifie un tableau chaque minute consomme environ 43 200 crédits par mois de 30 jours, même sans aucune nouvelle ligne : préférez un webhook ou un intervalle plus long.'],
                ['titre' => 'Tester sur l\'offre gratuite ou l\'essai', 'texte' => 'Construisez deux ou trois workflows réels sur l\'essai de 14 jours de n8n Cloud ou de Zapier, ou sur le plan Free de Make, puis lisez la consommation affichée dans l\'outil. C\'est la seule mesure fiable.'],
                ['titre' => 'Choisir le palier et le mode de paiement', 'texte' => 'Prenez le palier qui couvre votre volume mesuré avec une marge pour les pics saisonniers, mensuel tant que l\'usage n\'est pas stabilisé, puis annuel une fois le volume connu. Chez Make, les plans Pro et Teams en annuel donnent un stock de crédits utilisable librement sur l\'année.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelle courbe d\'apprentissage prévoir pour votre équipe ?',
            'items' => [
                ['titre' => 'Zapier : la prise en main la plus rapide','texte' => 'Un Zap se lit comme une phrase : quand ceci arrive, fais cela. La FAQ de Zapier affirme qu\'il n\'est pas nécessaire de savoir coder, et c\'est vrai pour l\'essentiel des usages. La difficulté arrive avec les chemins conditionnels, les boucles et la gestion d\'erreurs, plus rarement utilisés.'],
                ['titre' => 'Make : une notion clé à maîtriser','texte' => 'Le canevas visuel montre tout le scénario d\'un coup d\'œil, avec ses routeurs et ses filtres. La notion de « bundle », chaque élément traité séparément, demande un temps d\'adaptation : c\'est elle qui explique la consommation de crédits et l\'usage des agrégateurs et des itérateurs.'],
                ['titre' => 'n8n : un profil technique dans l\'équipe ou à côté', 'texte' => 'L\'éditeur est visuel, mais n8n manipule des données au format JSON, des expressions et, souvent, quelques lignes de JavaScript ou de Python. L\'auto-hébergement ajoute Docker, la base de données, les certificats SSL et les mises à jour. La documentation de n8n le dit sans détour : sans expertise technique, mieux vaut commencer par le cloud.'],
                ['titre' => 'Former plutôt que dépendre', 'texte' => 'Dans les trois cas, le risque principal est la dépendance à une seule personne. Une équipe formée sait lire l\'historique d\'exécution, relancer un passage en échec et modifier un message sans casser le reste. La <a href="/formation-automatisation">formation à l\'automatisation</a> que j\'anime vise précisément cette autonomie.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent le plus souvent ?',
            'items' => [
                ['titre' => 'Comparer les prix d\'entrée sans convertir les unités', 'texte' => '10 000 crédits Make, 10 000 exécutions n8n et 750 tâches Zapier ne mesurent pas la même chose. Ramenez toujours chaque offre au coût d\'un passage de vos propres workflows.'],
                ['titre' => 'Laisser tourner des vérifications à vide', 'texte' => 'Un scénario Make planifié chaque minute sur un tableau vide consomme des crédits en continu. Les webhooks, qui ne réveillent l\'outil qu\'en cas d\'événement, sont presque toujours préférables.'],
                ['titre' => 'Auto-héberger n8n sans plan de maintenance', 'texte' => 'Un serveur sans sauvegarde, sans certificat SSL ni mise à jour finit par tomber au mauvais moment. La documentation de n8n consacre des guides entiers aux sauvegardes, aux mises à jour et à la sécurité : ils font partie du coût réel.'],
                ['titre' => 'Ignorer la licence de n8n', 'texte' => 'Ouvrir votre instance à vos clients pour qu\'ils construisent leurs propres workflows sort du cadre de la Sustainable Use License. Si votre projet ressemble à un produit d\'automatisation, posez la question à n8n avant de lancer.'],
                ['titre' => 'Ne pas prévoir d\'alerte en cas d\'échec', 'texte' => 'Un workflow qui casse en silence fait plus de dégâts qu\'un travail manuel. n8n permet un workflow d\'erreur dédié, Make des gestionnaires d\'erreurs par module, Zapier des réglages d\'erreur et la relance automatique selon l\'offre. Configurez-les dès le premier jour.'],
                ['titre' => 'Payer avec la carte personnelle d\'un salarié', 'texte' => 'Quand la carte expire ou que la personne part, les automatisations s\'arrêtent : chez Make, un paiement échoué met les scénarios en pause. Utilisez un moyen de paiement de l\'entreprise et une adresse de facturation partagée.'],
                ['titre' => 'Confier une décision financière à un agent', 'texte' => 'Remboursements, validations de crédit ou changements de prix doivent passer par une validation humaine. n8n propose une approbation avant l\'appel d\'un outil par un agent ; ailleurs, insérez une étape de validation explicite.'],
                ['titre' => 'Laisser des clés d\'API dans des workflows partagés', 'texte' => 'Les jetons WhatsApp, les clés de paiement et les accès à l\'ERP doivent être stockés dans le gestionnaire d\'identifiants de l\'outil, jamais en clair dans un champ de texte ou un tableur.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quand faut-il changer d\'outil, et comment migrer sans casse ?',
            'items' => [
                ['titre' => 'Reconnaître les signaux', 'texte' => 'La facture Zapier double à chaque nouveau processus ; vos clients ou votre régulateur demandent que les données restent en Europe ou chez vous ; l\'équipe a besoin de code ou de boucles que l\'outil gère mal ; ou, à l\'inverse, personne ne sait plus maintenir l\'instance n8n et un outil géré serait plus sûr.'],
                ['titre' => 'Inventorier l\'existant', 'texte' => 'Listez chaque workflow, son déclencheur, ses applications, ses identifiants et sa consommation mensuelle. Les workflows ne se convertissent pas automatiquement d\'un outil à l\'autre : chacun sera reconstruit.'],
                ['titre' => 'Commencer par le plus coûteux', 'texte' => 'Migrez d\'abord les workflows qui pèsent le plus sur la facture ou qui posent un problème de données. Les petits Zaps à une action peuvent rester où ils sont tant qu\'ils ne coûtent presque rien.'],
                ['titre' => 'Faire tourner en parallèle', 'texte' => 'Reconstruisez le workflow dans le nouvel outil, testez-le avec des données réelles, puis faites tourner les deux versions en parallèle quelques jours en comparant les résultats, sans envoyer deux fois les messages aux clients.'],
                ['titre' => 'Basculer les webhooks', 'texte' => 'Changez l\'adresse de webhook chez le prestataire de paiement, le formulaire ou WhatsApp, vérifiez les premiers passages, puis désactivez l\'ancien workflow. Gardez l\'ancien compte un cycle de facturation pour consulter l\'historique.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel outil choisir selon le profil de votre entreprise ?',
            'legende' => 'Orientation de départ, à confirmer par la grille pondérée et un test sur vos workflows réels.',
            'entetes' => ['Profil', 'Point de départ conseillé', 'Pourquoi', 'Ce qui ferait changer d\'avis'],
            'lignes'  => [
                ['Indépendant ou TPE sans technicien, quelques automatisations simples', 'Zapier Free ou Make Free, puis le premier palier payant', 'Prise en main immédiate, rien à administrer', 'Des workflows qui s\'allongent et une facture qui monte avec eux'],
                ['PME de 5 à 50 personnes, WhatsApp et Google Sheets au cœur de l\'activité, volume moyen', 'Make Core ou Pro', 'Coût par crédit bas, canevas visuel, connecteurs WhatsApp et Sheets natifs', 'Plus de 50 000 passages par mois ou des données à garder chez soi'],
                ['PME avec un développeur ou un prestataire, gros volumes ou workflows longs', 'n8n Cloud Pro, ou n8n Community auto-hébergé', 'Une exécution par passage, code libre, coût stable à fort volume', 'Personne pour maintenir le serveur : rester sur le cloud'],
                ['Institution qui traite des données sensibles (finance, santé, juridique)', 'n8n auto-hébergé, avec licence Business si plusieurs équipes collaborent', 'Données sur l\'infrastructure choisie, contrôle des accès', 'Absence d\'équipe technique : revoir le périmètre des données automatisées'],
                ['Groupe multi-pays avec authentification unique et gouvernance', 'n8n Business ou Enterprise, Make Teams ou Enterprise, Zapier Team ou Enterprise', 'Partage, rôles, SSO, facturation par virement sur les offres annuelles hautes', 'Les exigences d\'hébergement de chaque filiale'],
                ['Équipe déjà outillée en applications américaines (HubSpot, Slack, Salesforce)', 'Zapier Professional ou Team', 'Catalogue le plus large, connecteurs maintenus par les éditeurs', 'Le volume de tâches et l\'hébergement aux États-Unis'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment j\'accompagne ce choix, et sur quels outils ?',
            'paragraphes' => [
                'Je suis ' . mb_strtolower(fait('intitule')) . ' à ' . fait('ville') . ', avec plus de ' . fait('experience_ans') . ' ans d\'expérience. J\'installe et je configure des automatisations avec n8n et Make, je les relie à WhatsApp, aux tableurs et aux ERP comme Odoo et Dolibarr, et je forme les équipes qui devront les faire vivre. J\'ai travaillé, sur place ou à distance, au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon et en RD Congo, ainsi qu\'en France, en Belgique, en Suisse et au Canada.',
                'L\'automatisation autour de WhatsApp est aussi mon terrain de produit : j\'ai créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et je suis co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Ces projets m\'obligent à regarder de près ce que coûte réellement chaque message, chaque appel d\'API et chaque exécution.',
                'Concrètement, un accompagnement commence par un inventaire de vos processus et une mesure de votre volume, puis une recommandation chiffrée sur la grille ci-dessus. La recommandation suit la grille, pas une préférence d\'outil : si Zapier suffit à vos besoins, je vous le dirai. Le détail de l\'offre figure sur la page <a href="/services/automatisation-ia">automatisation et intelligence artificielle</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Ce qu\'il faut retenir avant de signer',
            'texte' => 'Choisissez d\'abord l\'unité de facturation qui correspond à vos workflows, puis l\'hébergement que vos données exigent, et seulement ensuite le confort de l\'interface. Zapier pour aller vite avec peu d\'étapes, Make pour un bon équilibre entre puissance visuelle et prix, n8n pour les gros volumes et le contrôle, à condition d\'avoir quelqu\'un pour l\'administrer.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous un diagnostic de vos automatisations avant de choisir ?',
            'texte'  => 'Envoyez-moi la liste de vos processus répétitifs et une estimation de vos volumes : je vous réponds avec une recommandation chiffrée entre n8n, Make et Zapier, et un plan de mise en place.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],

    'faq' => [
        [
            'q' => 'n8n est-il vraiment gratuit ?',
            'r' => 'Oui pour l\'édition Community auto-hébergée : la licence ne coûte rien et les exécutions ne sont pas comptées. Vous payez en revanche le serveur, les sauvegardes et le temps d\'administration, et certaines fonctions d\'équipe (partage de workflows, projets, authentification unique, gestion de versions avec Git) demandent une licence Business ou Enterprise. La version hébergée par n8n est payante après l\'essai, à partir de 20 € par mois en paiement annuel pour 2 500 exécutions, selon la page tarifs consultée le 3 octobre 2026.',
        ],
        [
            'q' => 'Puis-je utiliser n8n auto-hébergé pour automatiser les processus de mes clients ?',
            'r' => 'Oui, dans le cadre prévu par la Sustainable Use License. Vous pouvez construire et faire tourner des workflows pour vos clients sur votre instance, facturer la création, la maintenance et la formation, ou installer n8n sur le serveur d\'un client et l\'administrer pour lui, à condition de ne pas l\'héberger vous-même pour son compte. En revanche, laisser vos clients construire ou modifier leurs propres workflows, même via votre interface, l\'API ou un agent d\'IA, demande un accord commercial avec n8n.',
        ],
        [
            'q' => 'Make ou Zapier pour démarrer sans personne de technique dans l\'équipe ?',
            'r' => 'Zapier est le plus simple pour des automatisations courtes : un déclencheur, une ou deux actions, sans notion de données à manipuler. Make demande un peu plus d\'apprentissage mais revient nettement moins cher dès que les scénarios s\'allongent ou que les volumes montent : 10 000 crédits coûtent 9 $ par mois en annuel chez Make, quand 750 tâches coûtent 19,99 $ chez Zapier. Testez les deux offres gratuites sur le même processus avant de trancher.',
        ],
        [
            'q' => 'Que se passe-t-il si je dépasse mon quota en cours de mois ?',
            'r' => 'Chez n8n, sur les offres Business et Enterprise, les workflows continuent de tourner et des frais de dépassement peuvent s\'appliquer : 4 000 € par tranche supplémentaire de 300 000 exécutions pour Business ; la page tarifs ne publie pas de tarif de dépassement pour Starter et Pro, où l\'on passe au palier supérieur. Chez Make, les scénarios s\'arrêtent faute de crédits, sauf si vous achetez des crédits supplémentaires, majorés de 25 %, ou activez l\'achat automatique par tranches de 10 000. Chez Zapier, si la facturation à la tâche est activée, les Zaps continuent à un tarif unitaire plus élevé jusqu\'à un plafond, sinon ils se mettent en pause jusqu\'à la période suivante.',
        ],
        [
            'q' => 'Peut-on payer ces outils depuis le Bénin, la Côte d\'Ivoire ou le Sénégal ?',
            'r' => 'Oui, mais pas en francs CFA ni par mobile money. Les trois éditeurs prennent la carte bancaire internationale ; Make accepte aussi le prélèvement ACH et Google Pay sur ses offres Core, Pro et Teams. Le virement sur facture est réservé à n8n Business annuel et Enterprise, à Zapier Team annuel et Enterprise, et à l\'offre Enterprise de Make. n8n facture en euros, ce qui donne un coût stable en FCFA grâce à la parité fixe ; Zapier propose plusieurs devises, dont l\'euro.',
        ],
        [
            'q' => 'Les trois outils peuvent-ils envoyer et recevoir des messages WhatsApp ?',
            'r' => 'Oui, à travers l\'API Cloud de WhatsApp Business de Meta. Il vous faut un compte Meta Business, un numéro WhatsApp Business validé et des modèles de messages approuvés pour écrire en premier à un client. n8n et Make proposent l\'envoi, la réception et la gestion des médias ; chez Zapier, l\'application WhatsApp Business est Premium, donc réservée aux offres payantes. Les messages eux-mêmes sont facturés à part par Meta.',
        ],
        [
            'q' => 'Comment brancher FedaPay, KkiaPay ou CinetPay sur ces outils ?',
            'r' => 'Par webhook et par requête HTTP, car aucun des trois outils ne propose de connecteur dédié à ces prestataires au 3 octobre 2026. Vous déclarez l\'adresse de webhook de votre workflow dans le tableau de bord du prestataire, puis le workflow vérifie la transaction auprès de son API avant de livrer, d\'inscrire ou de confirmer. Le choix du prestataire lui-même est traité dans le comparatif <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">FedaPay, KkiaPay ou CinetPay</a>.',
        ],
        [
            'q' => 'Quel serveur faut-il pour auto-héberger n8n ?',
            'r' => 'La documentation de n8n propose une installation en une ligne pour tester, Docker Compose pour la production et des guides pour AWS, Azure, Google Cloud, DigitalOcean ou Hetzner. Par défaut, n8n stocke ses données dans SQLite ; PostgreSQL est pris en charge et préférable quand les volumes augmentent. Prévoyez un nom de domaine avec certificat SSL pour recevoir les webhooks, des sauvegardes automatiques testées et une procédure de mise à jour.',
        ],
        [
            'q' => 'Peut-on utiliser ChatGPT, Claude ou Gemini dans ces automatisations ?',
            'r' => 'Oui, dans les trois outils. n8n se connecte aux principaux fournisseurs de modèles avec votre clé. Make propose son propre fournisseur d\'IA, facturé en crédits selon les jetons, ou votre connexion personnelle sur les plans payants. Zapier facture ses étapes d\'IA de 1 à 5 tâches selon le niveau de modèle, ou 1 tâche avec votre propre modèle. Le choix du modèle est détaillé dans le comparatif <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">ChatGPT, Claude ou Gemini</a>.',
        ],
        [
            'q' => 'Peut-on récupérer ses workflows en changeant d\'outil ?',
            'r' => 'Pas automatiquement. Chaque outil a son propre format, et un scénario Make, un Zap ou un workflow n8n doit être reconstruit dans l\'outil d\'arrivée. La migration se prépare : inventaire des workflows et des identifiants, reconstruction en commençant par les plus coûteux, période de fonctionnement en parallèle, puis bascule des adresses de webhook chez vos prestataires.',
        ],
    ],

    'sources' => [
        ['titre' => 'n8n, Plans and Pricing (offres, exécutions, FAQ)', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-03'],
        ['titre' => 'n8n Docs, Choose how to use n8n', 'url' => 'https://docs.n8n.io/choose-how-to-use-n8n', 'date' => '2026-10-03'],
        ['titre' => 'n8n Docs, Compare editions (Community, Business, Enterprise)', 'url' => 'https://docs.n8n.io/deploy/host-n8n/community-edition-features', 'date' => '2026-10-03'],
        ['titre' => 'n8n Docs, Community license (Sustainable Use License)', 'url' => 'https://docs.n8n.io/n8n-community-license/community-license', 'date' => '2026-10-03'],
        ['titre' => 'n8n Docs, License FAQ', 'url' => 'https://docs.n8n.io/n8n-community-license/community-license/license-faq', 'date' => '2026-10-03'],
        ['titre' => 'n8n Docs, Choose n8n\'s database', 'url' => 'https://docs.n8n.io/deploy/host-n8n/configure-n8n/choose-n8ns-database', 'date' => '2026-10-03'],
        ['titre' => 'n8n Docs, WhatsApp Business Cloud node', 'url' => 'https://docs.n8n.io/integrations/builtin/app-nodes/n8n-nodes-base.whatsapp', 'date' => '2026-10-03'],
        ['titre' => 'Make, Pricing (offres, paliers de crédits, hébergement)', 'url' => 'https://www.make.com/en/pricing', 'date' => '2026-10-03'],
        ['titre' => 'Make Help Center, Credits', 'url' => 'https://help.make.com/credits', 'date' => '2026-10-03'],
        ['titre' => 'Make Help Center, Operations', 'url' => 'https://help.make.com/operations', 'date' => '2026-10-03'],
        ['titre' => 'Make Help Center, Extra credits', 'url' => 'https://help.make.com/extra-credits', 'date' => '2026-10-03'],
        ['titre' => 'Make Help Center, Monthly and annual subscriptions', 'url' => 'https://help.make.com/monthly-and-annual-subscriptions', 'date' => '2026-10-03'],
        ['titre' => 'Make Help Center, Introduction to Make AI Agent (New)', 'url' => 'https://help.make.com/introduction-to-make-ai-agent-new', 'date' => '2026-10-03'],
        ['titre' => 'Make Help Center, On-premise agent', 'url' => 'https://help.make.com/on-premise-agent', 'date' => '2026-10-03'],
        ['titre' => 'Make Apps Documentation, WhatsApp Business Cloud', 'url' => 'https://apps.make.com/whatsapp-business-cloud', 'date' => '2026-10-03'],
        ['titre' => 'Zapier, Plans and Pricing (offres, paliers de tâches, FAQ)', 'url' => 'https://zapier.com/pricing', 'date' => '2026-10-03'],
        ['titre' => 'Zapier, Task usage rates', 'url' => 'https://zapier.com/pricing/rates', 'date' => '2026-10-03'],
        ['titre' => 'Zapier, Data Privacy Overview', 'url' => 'https://zapier.com/legal/data-privacy', 'date' => '2026-10-03'],
        ['titre' => 'Zapier, WhatsApp Business integrations', 'url' => 'https://zapier.com/apps/whatsapp-business/integrations', 'date' => '2026-10-03'],
        ['titre' => 'Make Apps Documentation, Flutterwave', 'url' => 'https://apps.make.com/flutterwave', 'date' => '2026-10-03'],
        ['titre' => 'Zapier, Flutterwave integrations', 'url' => 'https://zapier.com/apps/flutterwave/integrations', 'date' => '2026-10-03'],
        ['titre' => 'BCEAO, Histoire du franc CFA (parité avec l\'euro)', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
