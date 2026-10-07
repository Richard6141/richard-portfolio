<?php
// ============================================================
// data/secteurs/e-commerce.php · Page secteur « E-commerce » (vague 1E).
// Cœur : la vente en ligne (boutique, paiement en ligne, livraison, acquisition,
// retours, marketplaces, vente sur WhatsApp et réseaux sociaux). Le commerce
// physique, de gros et de détail relève de la page « commerce et distribution ».
// Projets rattachés : KossKoss Select (client direct, aucune mention de
// sous-traitance), Laura Cosmetics et IK Fashion House (sous-traitance pour
// Digital Développement).
// Faits externes relevés le 07/10/2026 : Code du numérique du Bénin (texte de
// la loi n° 2017-20), gouv.bj, GSMA (rapport 2026), Jumia (résultats du
// 2e trimestre 2026), Eurostat, Fevad, Meta (page lue dans un navigateur),
// FedaPay, WordPress.org, Odoo, WIPO (loi sénégalaise 2008-08 et 2008-12),
// ARTCI, loi camerounaise 2024/017, CNIL, Your Europe, justice.fr, iubenda
// et lexgo (fonction de rétractation, droit forfaitaire de 3 euros), Baymard.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Vendre en ligne sans perdre la commande en route : boutique, paiement mobile, livraison, WhatsApp et IA, mis en place par Richard SALANON',
    'title'   => 'E-commerce : boutique, paiement, WhatsApp | Richard SALANON',
    'meta'    => 'Boutique en ligne, mobile money, livraison, WhatsApp, SEO et IA pour e-commerçants d\'Afrique francophone et d\'Europe. Sur devis, réponse sous 24 h.',
    'en_bref' => 'Richard SALANON aide les marques, créateurs et commerçants d\'Afrique francophone et d\'Europe à vendre en ligne : boutique avec paiement par mobile money et par carte, stock et livraison suivis, commandes WhatsApp rattachées à la boutique, référencement, pages de lancement et assistant IA encadré. Le travail va du diagnostic au suivi, à distance ou sur place au Bénin. Le prix de départ d\'une landing page est de 150 000 FCFA (environ 229 euros), celui d\'un site vitrine de 300 000 FCFA (environ 457 euros) ; une boutique complète se chiffre sur devis.',
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'univers' => 'Commerce et communication',
    'locales' => ['digitaliser-ecommerce-dakar'],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Marques, créateurs et commerçants qui vendent sur un site, sur WhatsApp ou sur les réseaux sociaux'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la vente en ligne en Afrique francophone et en Europe en 2026 ?',
            'paragraphes' => [
                'En Afrique de l\'Ouest, le premier verrou de la vente en ligne est le paiement. Selon le <a href="https://www.gsma.com/sotir/wp-content/plugins/plugin_gsma_sotir/reports/The-State-of-the-Industry-Report-2026_French.pdf">rapport 2026 de la GSMA</a>, les services de mobile money de la région ont traité 498 milliards de dollars d\'opérations en 2025, soit 34 % de plus que l\'année précédente. Dans le monde, les paiements marchands, ceux qu\'un client règle à un vendeur, ont été le cas d\'usage à la plus forte croissance, à 155 milliards de dollars. Les paiements marchands en ligne restent moins fréquents que ceux faits en magasin, précise l\'étude, mais leur montant a augmenté d\'un tiers entre septembre 2024 et juin 2025.',
                'Les places de marché servent de repère. Dans ses <a href="https://www.newswire.com/news/jumia-reports-second-quarter-2026-results-and-announces-capital-raise">résultats du deuxième trimestre 2026</a>, publiés le 12 août 2026, Jumia annonce 6,3 millions de commandes de biens physiques, en hausse de 28 % à périmètre comparable, et 2,6 millions de clients actifs sur le trimestre, soit 23 % de plus. Le communiqué signale aussi un ralentissement de la demande en Côte d\'Ivoire, lié à la baisse des prix du cacao payés aux producteurs, et précise que le groupe a quitté l\'Algérie début 2026. La demande existe donc, mais une place de marché impose sa vitrine et ses règles : une boutique à soi reste le seul endroit où l\'on garde le fichier clients.',
                'En Europe, le marché est installé. D\'après <a href="https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-commerce_statistics_for_individuals">Eurostat</a>, 78 % des internautes de 16 à 74 ans de l\'Union européenne ont acheté en ligne en 2025. La <a href="https://www.fevad.com/bilan-du-e-commerce-en-france-les-francais-ont-depense-pres-de-200-milliards-deuros-sur-internet-en-2025/">Fevad</a> compte 196,4 milliards d\'euros de ventes en ligne en France en 2025, en hausse de 7 %, pour 3,2 milliards de transactions et un panier moyen de 62 euros ; son <a href="https://www.fevad.com/">site</a> annonce 6,6 % de croissance au premier semestre 2026. Le client européen commande souvent, pour de petits montants, et attend des retours simples.',
                'Pour une marque basée à Cotonou, Dakar, Abidjan ou Douala qui vise aussi la diaspora, cela dessine deux boutiques à tenir ensemble. Côté Afrique : mobile money, échanges par WhatsApp, livraison par coursier. Côté Europe : carte bancaire, délais annoncés, retours et règles de consommation. Tout l\'enjeu d\'un projet e-commerce est de les faire vivre dans un seul catalogue et un seul stock, plutôt que dans deux outils qui se contredisent.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d\'un e-commerçant gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Une boutique en ligne n\'est que la vitrine d\'une chaîne qui va du catalogue au remboursement. Les signes ci-dessous reviennent dans les demandes ; deux ou trois d\'entre eux suffisent pour lancer un cadrage.',
            'items' => [
                ['titre' => 'Les commandes arrivent par messages privés', 'texte' => 'Le client écrit « je prends la robe bleue » sur WhatsApp ou Instagram, vous notez à la main, puis vous demandez l\'adresse, puis le paiement. Chaque commande coûte plusieurs échanges, et certaines se perdent entre deux conversations.'],
                ['titre' => 'Le catalogue vit dans des photos et des statuts', 'texte' => 'Prix, tailles, teintes et disponibilités sont dispersés dans des publications que personne ne met à jour. Le client demande « il vous en reste ? » alors que la réponse devrait se lire à l\'écran.'],
                ['titre' => 'Le paiement se vérifie à l\'œil', 'texte' => 'Vous attendez la capture d\'écran du transfert, puis vous comparez avec votre téléphone. Le jour où deux clients paient le même montant, ou où une capture est fausse, la commande part sans que l\'argent soit arrivé.'],
                ['titre' => 'Le stock de l\'atelier, du dépôt et du site ne concorde pas', 'texte' => 'Une pièce unique est vendue deux fois, ou une rupture est découverte au moment d\'emballer. Un stock partagé décompte chaque vente, quel que soit le canal.'],
                ['titre' => 'La livraison se règle au coup par coup', 'texte' => 'Le coursier est appelé à chaque commande, le prix de la course se négocie, le client ne sait pas où est son colis. Des zones et des tarifs enregistrés évitent ces échanges.'],
                ['titre' => 'Les retours et les remboursements n\'ont pas de règle écrite', 'texte' => 'Chaque réclamation se traite différemment selon l\'humeur du jour. La loi fixe pourtant des délais, et un remboursement en mobile money doit pouvoir se faire proprement.'],
                ['titre' => 'Les visiteurs ne commandent pas', 'texte' => 'Le trafic existe, mais les paniers sont abandonnés. Dans l\'étude de Baymard auprès d\'acheteurs en ligne américains, une fois écartés ceux qui ne faisaient que regarder, 40 % des paniers abandonnés l\'ont été à cause de frais supplémentaires trop élevés (livraison, taxes, commissions) et 20 % à cause d\'une livraison trop lente.'],
                ['titre' => 'Vous ne savez pas ce qui marche', 'texte' => 'Quel produit rapporte, quelle publicité amène des commandes, quel client revient : sans suivi, chaque décision d\'achat de stock ou de budget se prend au jugé.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour un e-commerçant, besoin par besoin ?',
            'legende' => 'Chaque ligne associe un besoin courant de la vente en ligne au service de Richard qui le traite ; le périmètre exact est fixé au devis.',
            'entetes' => ['Besoin typique du vendeur en ligne', 'Ce que Richard met en place', 'Service'],
            'lignes'  => [
                ['Ouvrir une boutique avec paiement par mobile money et par carte', 'Catalogue, panier, commande, paiement, factures, espace d\'administration', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Lancer une collection, une promotion ou un produit unique', 'Une page de vente courte, un formulaire ou un bouton WhatsApp, un suivi des conversions', '<a href="/services/landing-page-haute-conversion">Landing page à haute conversion</a>'],
                ['Être trouvé quand on cherche le produit', 'Fiches produits lisibles par Google, données structurées, vitesse, maillage des catégories', '<a href="/services/referencement-naturel-seo">Référencement naturel (SEO)</a>'],
                ['Répondre aux clients sur WhatsApp à toute heure', 'Un assistant qui lit votre catalogue et vos conditions, et passe la main à un humain', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Envoyer confirmations de commande et suivis sur WhatsApp', 'Compte WhatsApp Business de Meta, modèles de messages, déclenchement depuis la boutique', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Relier la boutique au stock, à la caisse ou à la comptabilité', 'Un stock partagé entre site, magasin et atelier, avec Odoo si l\'activité le justifie', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Automatiser les tâches répétitives de la commande', 'Alertes de nouvelle commande, rapprochement des paiements, relances, tableaux de bord', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Brancher un transporteur, un agrégateur de paiement ou un outil existant', 'Connexions par API entre la boutique et vos autres services', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Garder la boutique à jour, rapide et sûre', 'Correctifs, sauvegardes, surveillance, montées de version, support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
                ['Vendre depuis un téléphone, avec une application', 'Application Android et iOS pour la prise de commande ou la fidélité', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
            ],
        ],
        [
            'type'    => 'comparaison',
            'titre'   => 'WooCommerce, Odoo ou boutique sur mesure : quelle base pour votre boutique, et quand relier l\'existant plutôt que le remplacer ?',
            'options' => ['WooCommerce sur WordPress', 'Odoo, application eCommerce', 'Boutique sur mesure (Laravel ou Next.js)'],
            'criteres' => [
                ['critere' => 'Quand c\'est le bon choix', 'valeurs' => ['Catalogue classique, équipe qui veut administrer elle-même, budget mesuré', 'Une entreprise qui gère déjà stock, caisse et facturation dans Odoo et veut un seul stock pour tous les canaux', 'Parcours spécifique (commande sur mesure, diagnostic, deux devises, deux zones de livraison), forte volumétrie ou identité très travaillée']],
                ['critere' => 'Paiement mobile money', 'valeurs' => ['Extension FedaPay Gateway for WooCommerce : Bénin, Togo, Côte d\'Ivoire, Sénégal, Mali, Niger et Burkina Faso, version 0.3.9 du 4 janvier 2025, à tester à chaque mise à jour de WordPress', 'La documentation d\'Odoo 20.0 liste notamment Flutterwave, DPO Pay et Stripe, mais ni FedaPay, ni KkiaPay, ni CinetPay : module tiers ou automatisation à prévoir', 'Connexion directe à l\'API de l\'agrégateur retenu, avec rapprochement automatique de chaque paiement et de sa commande']],
                ['critere' => 'Stock partagé avec la caisse', 'valeurs' => ['Par extension ou par synchronisation à écrire', 'Natif, un seul stock pour la boutique et le point de vente', 'Par API vers l\'outil de gestion existant, ou back-office intégré']],
                ['critere' => 'Entretien dans la durée', 'valeurs' => ['Mises à jour régulières de WordPress, du thème et des extensions', 'Montées de version d\'Odoo à planifier', 'Code à vous, évolutions à la demande, maintenance contractuelle']],
                ['critere' => 'Principale limite', 'valeurs' => ['Les extensions vieillissent : celle de FedaPay indique ne pas avoir été testée avec les trois dernières versions majeures de WordPress', 'Moins de liberté sur le design et sur les agrégateurs africains sans module tiers', 'Coût de départ plus élevé qu\'un modèle prêt à l\'emploi']],
            ],
            'verdict' => 'Gardez l\'existant et reliez-le quand il fonctionne : une caisse, un Odoo ou un tableur de stock fiable se branchent à la boutique par API ou par une automatisation, ce qui évite de tout reprendre. Remplacez quand le plug-in de paiement n\'est plus maintenu, quand le site rame, ou quand le stock ne peut plus être partagé. Les solutions hébergées de type Shopify conviennent à un catalogue simple, à condition de vérifier pays par pays que les moyens de paiement locaux sont pris en charge. Le choix de l\'agrégateur se fait avec le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a>, celui de l\'outil d\'automatisation avec le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a>.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans une boutique en ligne, et que ne doit-elle jamais faire ?',
            'intro' => 'L\'IA est utile quand elle prépare et répond à partir de vos données ; elle devient dangereuse quand elle s\'engage à votre place. Voici la frontière retenue pour un projet e-commerce.',
            'items' => [
                ['titre' => 'Elle peut répondre aux questions fréquentes à partir du catalogue', 'texte' => 'Tailles, disponibilité, délais de livraison, modes de paiement, suivi d\'une commande : l\'assistant lit les données de la boutique et répond sur WhatsApp, y compris la nuit. Quand la réponse n\'est pas dans la source, il le dit et passe la main.'],
                ['titre' => 'Elle peut rédiger des brouillons de fiches produits et de messages', 'texte' => 'Description, déclinaisons, texte de relance : la personne qui connaît le produit relit et corrige avant publication. Une fiche inventée par l\'IA, avec une composition ou une propriété fausse, engage la boutique.'],
                ['titre' => 'Elle peut trier et résumer', 'texte' => 'Classer les messages entrants (commande, suivi, réclamation, retour), résumer des avis, repérer les produits souvent demandés et absents du catalogue : un gain de temps qui laisse la décision à l\'équipe.'],
                ['titre' => 'Elle ne promet jamais un prix, un délai ou un remboursement non inscrits', 'texte' => 'Remises, exceptions, geste commercial : ces sujets se règlent par des formulations validées ou par une personne. Le texte de la loi béninoise rend le vendeur responsable de ce qu\'il annonce avant la commande.'],
                ['titre' => 'Elle ne tranche pas un litige ni un remboursement', 'texte' => 'Le droit de rétractation, la conformité du bien et les délais de remboursement relèvent d\'une décision humaine, dans les règles du pays du client.'],
                ['titre' => 'Elle ne touche jamais aux données de paiement', 'texte' => 'Aucun numéro de carte, aucun code de mobile money ne transite par l\'assistant : le paiement se fait sur la page de l\'agrégateur, qui en porte la responsabilité.'],
                ['titre' => 'Elle ne relance pas sans consentement', 'texte' => 'Un rappel de panier abandonné par WhatsApp ou par SMS est de la prospection : il suppose l\'accord préalable du client, preuve à l\'appui, selon l\'article 332 du Code du numérique béninois. L\'article 333 ne dispense de ce consentement que pour des produits analogues proposés à un client dont les coordonnées ont été recueillies lors d\'une vente, avec un refus gratuit et simple à chaque message : un visiteur qui n\'a pas acheté n\'entre pas dans ce cas.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Et si l\'assistant de la boutique se trompe sur une promesse ?',
            'texte' => 'L\'entreprise répond de ce que dit son assistant, comme de ce qu\'affiche son site : c\'est la leçon de l\'<a href="/histoires/air-canada-chatbot">histoire du chatbot d\'Air Canada</a>. Avant le lancement, décidez par écrit ce que l\'assistant peut annoncer, tenez une source unique pour les prix et les conditions de retour, gardez le journal des conversations, offrez un bouton pour parler à une personne, et fixez à froid ce que vous ferez quand une réponse est fausse. Le coût de ces échanges se calcule aussi : voir plus bas la tarification de Meta.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que doit respecter un vendeur en ligne au Bénin, en Côte d\'Ivoire, au Sénégal, au Cameroun et en Europe ?',
            'paragraphes' => [
                'Au Bénin, le texte de référence est le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">Code du numérique, loi n° 2017-20</a>. Son article 338 impose, sous peine de nullité, d\'afficher avant la commande les étapes du contrat, les conditions et frais de livraison, la date de livraison, le traitement des réclamations, l\'existence du droit de rétractation et les modalités de retour, d\'échange et de remboursement ; l\'article 340 fait de même pour le prix. L\'acheteur doit pouvoir vérifier et corriger sa commande avant de confirmer (article 343), et le vendeur accuse réception avec la facture ou le justificatif de paiement (article 344).',
                'Le même texte règle l\'après-vente. Le consommateur dispose de quinze jours ouvrables pour se rétracter, portés à quatre-vingt-dix si les informations obligatoires ont manqué (article 348). Le remboursement intervient au plus tard trente jours ouvrables après réception du bien retourné (article 351), par les mêmes moyens de paiement que la commande sauf accord du client (article 353) : une boutique payée en mobile money doit savoir rembourser en mobile money. Les frais de livraison sont remboursés si la rétractation découle d\'un retard ou d\'un manquement du vendeur (article 352).',
                'Deux exceptions concernent directement les créateurs. L\'article 355 exclut le droit de rétractation pour les biens confectionnés sur mesure ou personnalisés, pour les denrées qui se périment vite et pour les biens scellés d\'hygiène descellés par le client. Une boutique de couture sur mesure ou de soins doit donc l\'écrire dans ses conditions. Sans accord contraire, la commande s\'exécute en trente jours ouvrables au plus (article 356), et un défaut de conformité apparu dans les vingt-quatre mois est présumé exister à la livraison (article 359).',
                'Pour la facturation, la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement sur les factures normalisées</a>, datée du 27 février 2020, indique que, pour l\'instant, la réforme ne concerne que les entreprises assujetties à la TVA, qui doivent utiliser une machine certifiée ou un logiciel validé par la direction générale des impôts ; la première infraction coûte dix fois le montant de la facture, au moins 1 000 000 FCFA (environ 1 524 euros) par opération. Pour les données, l\'article 405 exige, avant la mise en œuvre d\'un traitement, une déclaration préalable à l\'Autorité de protection des données personnelles ou une inscription dans un registre tenu par la personne désignée à cet effet, et l\'article 391 soumet les transferts vers un État tiers au constat, par l\'Autorité, d\'une protection équivalente et à son autorisation préalable, ce qui compte si les clients sont stockés chez un hébergeur étranger.',
                'En Côte d\'Ivoire, la <a href="https://decfinex.tresor.gouv.ci/decfinex/textes/s-d_lutte-crim-finance/lois-reglements/2013-546-Transactions-electroniques.pdf">loi n° 2013-546 du 30 juillet 2013 sur les transactions électroniques</a> oblige le vendeur à rendre accessibles son identité, son adresse, son téléphone et son numéro d\'identification fiscale s\'il est assujetti à la TVA (article 5), à indiquer des prix clairs précisant si les taxes et la livraison sont incluses (article 6), et le rend responsable de plein droit de la bonne exécution du contrat (article 7). Elle s\'applique dès qu\'une des parties est établie dans le pays (article 8) et punit la prospection sans consentement préalable (article 14) d\'un à cinq ans de prison et de 1 000 000 à 10 000 000 FCFA d\'amende, ou de l\'une de ces deux peines, soit environ 1 524 à 15 245 euros. L\'<a href="https://www.artci.ci/">ARTCI</a> y est aussi l\'autorité de protection des données.',
                'Au Sénégal, la <a href="https://www.wipo.int/wipolex/en/legislation/details/10283">loi n° 2008-08 du 25 janvier 2008 sur les transactions électroniques</a> exige du vendeur ses coordonnées, des prix clairs précisant taxes et frais de livraison, un récapitulatif que le client peut corriger, un accusé de réception et le consentement préalable pour la prospection par courrier électronique ; les documents électroniques se conservent dix ans. La <a href="https://www.wipo.int/wipolex/en/legislation/details/6229">loi n° 2008-12</a> sur les données personnelles crée la Commission des données personnelles, devant laquelle la plupart des traitements sont déclarés.',
                'Au Cameroun, la loi n° 2024/017 du 23 décembre 2024 sur les données personnelles est entrée en vigueur le 23 juin 2026 après dix-huit mois de transition, selon <a href="https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026">Droit, médias et finance</a> : consentement explicite, sans case précochée, et transfert hors du pays soumis à la preuve d\'une protection équivalente et à l\'autorisation préalable de l\'autorité. Une boutique qui encaisse à Douala doit donc savoir où ses données clients sont hébergées.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Paiement, rétractation, cookies et douane : quelles règles pour le client européen et quels coûts pour le vendeur ?',
            'legende' => 'Relevés du 7 octobre 2026 sur le Code du numérique béninois, Your Europe, justice.fr, la CNIL, iubenda, lexgo, la page de tarifs de FedaPay, le rapport 2026 de la GSMA et la page de tarification de Meta. Les tarifs des prestataires changent : confirmez-les avant de signer. Cette synthèse ne remplace pas l\'avis d\'un juriste.',
            'entetes' => ['Sujet', 'Règle ou tarif relevé', 'Ce qu\'il faut en faire dans la boutique'],
            'lignes'  => [
                ['Rétractation, Europe', '14 jours pour annuler un achat à distance, sans motif (Your Europe) ; exceptions pour les produits personnalisés ou périssables', 'Écrire le délai, l\'adresse de retour et la prise en charge des frais dans les conditions'],
                ['Bouton de rétractation en ligne', 'Directive (UE) 2023/2673 (EUR-Lex) : les États membres appliquent depuis le 19 juin 2026 une fonction de rétractation permanente, visible et facile d\'accès pour les contrats conclus sur une interface en ligne, avec accusé de réception sur support durable (iubenda)', 'Prévoir la fonction dans la boutique visible par les clients européens'],
                ['Commande et livraison, France', 'Bouton « Commande avec obligation de paiement » ; à défaut de date annoncée, livraison sous 30 jours (justice.fr)', 'Afficher une date ou un délai pour chaque produit'],
                ['Cookies et traceurs', 'Consentement préalable pour la publicité et la plupart des mesures d\'audience ; panier et authentification exemptés (CNIL)', 'Un bandeau avec refus aussi simple que l\'acceptation, avant toute balise publicitaire'],
                ['Colis vers l\'Union européenne', 'Droit de douane forfaitaire de 3 euros par article, pour les envois postaux de 150 euros au plus, du 1er juillet 2026 au 1er juillet 2028 (lexgo)', 'Annoncer au client européen si les droits sont inclus ou à sa charge'],
                ['Agrégateur béninois', 'FedaPay : 1,80 % sur MTN, Moov et Celtiis, 3,60 % sur Visa et Mastercard, retrait par mobile money sans frais ; bancaire 3 500 FCFA (environ 5 euros)', 'Intégrer la commission dans le prix ou la marge ; vérifier la grille avant l\'ouverture'],
                ['Taxes sur le mobile money', 'Cameroun : taxe de 0,2 % sur les opérations depuis janvier 2025 ; Sénégal : de nouvelles taxes sur le mobile money sont apparues en août 2025 selon la GSMA, dont les taux et l\'assiette varient selon les sources', 'Faire confirmer par le comptable ou auprès de l\'administration fiscale ce qui pèse sur le client et sur le vendeur'],
                ['WhatsApp Business de Meta', 'Facturation par message depuis le 1er juillet 2025 ; 1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026 ; rappel de panier classé en marketing', 'Compter le volume de messages et ouvrir un moyen de paiement chez Meta'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment compter le coût de WhatsApp et protéger les données des clients ?',
            'paragraphes' => [
                'Sur la <a href="https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing">page de tarification de Meta</a>, lue dans un navigateur le 7 octobre 2026, chaque numéro professionnel reçoit depuis le 1er octobre 2026 un quota de 1 000 messages de service gratuits par mois, non reportables ; Meta facture à partir du 1 001e. Sans moyen de paiement enregistré, les messages de service cessent une fois le quota épuisé. La page montre aussi qu\'un rappel d\'abandon de panier est un message marketing, facturé, et qu\'une conversation ouverte depuis une publicité qui mène à WhatsApp bénéficie d\'une fenêtre sans frais pour les réponses de service et les confirmations de commande.',
                'En pratique, on estime le volume mensuel avant de bâtir l\'assistant : combien de commandes, combien de messages de suivi par commande, combien de relances. Une boutique qui envoie trois messages par commande atteint le quota à 333 commandes mensuelles. Au-delà, le coût entre dans la marge, au même titre que la commission de l\'agrégateur. Pour la sécurité des données, la boutique ne conserve ni numéro de carte ni code secret de mobile money : le paiement se fait chez l\'agrégateur, et la boutique ne reçoit qu\'une confirmation.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet e-commerce selon le pays et le produit ?',
            'items' => [
                ['secteur' => 'Cosmétiques, Cameroun', 'probleme' => 'Les clientes ne savent pas quel soin choisir, écrivent en privé pour demander conseil, et les commandes se règlent par transfert manuel.', 'solution' => 'Un parcours de conseil en quelques questions qui aboutit à une routine de produits ajoutable au panier, paiement par Orange Money et MTN MoMo, et message de confirmation. La taxe de 0,2 % sur les opérations de mobile money, en vigueur depuis janvier 2025, est expliquée au comptable avant l\'ouverture.'],
                ['secteur' => 'Mode sur mesure, Bénin', 'probleme' => 'Les clientes de la diaspora commandent par messages vocaux, sans mensurations écrites, et les retours après coupe sont impossibles à gérer.', 'solution' => 'Un formulaire de mensurations et de choix de tissus à remplir en ligne, un acompte par agrégateur de paiement, et des conditions qui indiquent que le sur mesure n\'ouvre pas de droit de rétractation (article 355 du Code du numérique). Les articles prêts à porter, eux, suivent le délai légal.'],
                ['secteur' => 'Cosmétiques entre Paris et Abidjan', 'probleme' => 'Deux clientèles, deux monnaies, deux zones de livraison, et un stock que l\'équipe tient sur deux fichiers.', 'solution' => 'Une boutique avec prix en euros et en francs CFA, frais de port par zone, stock unique, coupons, indicateurs de vente dans un back-office. Pour la clientèle française, le bouton de rétractation en ligne est prévu dès le départ.'],
                ['secteur' => 'Instagram et WhatsApp, Dakar', 'probleme' => 'Les commandes arrivent par messages privés, les paiements Wave et Orange Money se vérifient à la main, et la même robe est vendue à deux clientes.', 'solution' => 'Une boutique légère reliée au stock, des liens de paiement avec confirmation automatique, et une réponse WhatsApp qui lit le catalogue. Wave a lancé sa carte virtuelle Visa au Sénégal le 23 janvier 2026, ce qui élargit les achats sur les sites étrangers mais ne remplace pas le paiement local.'],
                ['secteur' => 'Produits du terroir pour la diaspora, Belgique ou Suisse', 'probleme' => 'Les acheteurs européens attendent un délai ferme, un retour simple et des droits de douane annoncés.', 'solution' => 'Prix toutes taxes comprises par pays, annonce des 3 euros de droit forfaitaire par article pour les envois postaux arrivant dans l\'Union, bandeau de cookies conforme, conditions de rétractation de 14 jours et fonction de rétractation en ligne. Les produits périssables sont signalés comme exclus du droit de rétractation.'],
                ['secteur' => 'Vente en gros en ligne, Côte d\'Ivoire', 'probleme' => 'Les revendeurs commandent par téléphone et exigent des factures détaillées, avec un crédit client à suivre.', 'solution' => 'Un espace revendeur avec prix par palier, commandes répétées en un clic, factures portant les mentions d\'identification du vendeur prévues à l\'article 5 de la loi 2013-546, et paiement par mobile money. La facture normalisée est vérifiée avec le comptable selon le statut de TVA de l\'entreprise.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet e-commerce, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous racontez vos produits, vos pays de vente et le chemin d\'une commande, du premier message au colis. L\'échange permet de dire franchement si une page de vente, une boutique complète ou un simple stock partagé suffit.'],
                ['titre' => 'Diagnostic du parcours de commande', 'duree' => 'Selon le projet', 'texte' => 'On suit une commande réelle, de la photo du produit au colis livré : demande, devis éventuel, paiement, emballage, livraison, retour. Le diagnostic fixe les canaux à garder, les outils à relier et les règles à écrire (conditions de retour, zones de livraison, délais).'],
                ['titre' => 'Choix de la base technique et de l\'agrégateur de paiement', 'duree' => 'Selon le projet', 'texte' => 'WooCommerce, Odoo ou boutique sur mesure, FedaPay, KkiaPay ou CinetPay : le choix suit votre catalogue, votre stock et les pays visés. Chaque décision est notée avec sa raison.'],
                ['titre' => 'Construction par paliers', 'duree' => 'Selon le projet', 'texte' => 'Catalogue et panier d\'abord, puis paiement, frais de livraison par zone, e-mails et messages de confirmation, administration. Un palier se valide avant d\'ouvrir le suivant.'],
                ['titre' => 'Recette avec de vraies commandes', 'duree' => 'Selon le projet', 'texte' => 'Commandes d\'essai en mobile money et par carte, remboursement d\'essai, produit épuisé, retour : on vérifie que chaque cas se termine dans le bon état, côté boutique et côté stock.'],
                ['titre' => 'Mise en ligne et formation', 'duree' => 'Selon le projet', 'texte' => 'Ouverture, redirections si une ancienne boutique existe, suivi des conversions, puis formation de l\'équipe à ajouter un produit, traiter une commande et un retour.'],
                ['titre' => 'Suivi et améliorations', 'duree' => 'Après la mise en ligne', 'texte' => 'Lecture des chiffres (paniers abandonnés, produits qui se vendent, canaux qui rapportent), corrections, et <a href="/services/maintenance-support">maintenance</a> des mises à jour, des sauvegardes et de la sécurité.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet e-commerce, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Richard publie trois tarifs de départ : landing page, site vitrine et référencement naturel. Une boutique avec paiement, stock et livraison reste sur devis, fixé après le diagnostic. À titre d\'ordre de grandeur, au taux de 655,957 FCFA pour 1 euro : la landing page débute à 150 000 FCFA (environ 229 euros), le site vitrine à 300 000 FCFA (environ 457 euros), le référencement naturel à 75 000 FCFA (environ 114 euros). Les commissions de l\'agrégateur et les frais de Meta ne font pas partie de la prestation : ils se paient au prestataire concerné. Règlement par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Landing page pour un lancement', 'prix' => 'À partir de 150 000 FCFA (environ 229 euros)', 'inclus' => ['Structure et textes orientés conversion pour un produit ou une collection', 'Design pensé d\'abord pour le téléphone', 'Formulaire ou bouton WhatsApp', 'Suivi des conversions avec Google Analytics 4 et le pixel Meta']],
                ['offre' => 'Site vitrine pour présenter la marque', 'prix' => 'À partir de 300 000 FCFA (environ 457 euros)', 'inclus' => ['Design sur mesure et responsive, rédaction ou réécriture des textes', 'Bases du référencement', 'Nom de domaine et hébergement', 'Formulaire de contact et liens WhatsApp et téléphone', 'Formation à la prise en main']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 euros)', 'inclus' => ['Premier niveau d\'intervention sur un site existant', 'Périmètre précis (pages, corrections, durée) écrit dans le devis', 'Accès et historique conservés à votre nom']],
                ['offre' => 'Boutique complète avec paiement en ligne', 'prix' => 'Sur devis', 'inclus' => ['Catalogue, panier, commande, paiement par mobile money et par carte', 'Frais de livraison par zone, factures, administration', 'Recette, mise en ligne, formation et suivi']],
                ['offre' => 'Stock partagé, assistant WhatsApp et automatisations', 'prix' => 'Sur devis', 'inclus' => ['Liaison de la boutique au stock, à la caisse ou à Odoo', 'Assistant qui lit le catalogue, avec passage à un humain', 'Relances et rapprochement des paiements']],
            ],
            'variations' => [
                'Le nombre de produits, de déclinaisons (taille, teinte) et de langues du catalogue.',
                'Le nombre de moyens de paiement : un seul agrégateur ou plusieurs, mobile money et carte.',
                'Les devises et les zones de livraison : une ville, un pays, plusieurs pays, ou l\'Europe.',
                'Le stock : un seul fichier, ou un stock partagé avec un magasin, un atelier ou Odoo.',
                'Les parcours spécifiques : commande sur mesure, diagnostic, acompte, vente en gros avec prix par palier.',
                'La reprise d\'une ancienne boutique : produits, clients, commandes et adresses à conserver.',
                'Les connexions : transporteur, WhatsApp, comptabilité, outil d\'automatisation.',
                'Le nombre de personnes à former et le support choisi après la mise en ligne.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer une boutique en ligne en Afrique francophone ?',
            'intro' => 'Ces erreurs reviennent d\'une boutique à l\'autre, qu\'elle soit à Cotonou, à Dakar ou à Lyon ; presque toutes se corrigent au cadrage.',
            'items' => [
                ['titre' => 'Copier les conditions d\'une boutique d\'un autre pays', 'texte' => 'Le délai de rétractation est de 14 jours dans l\'Union européenne et de quinze jours ouvrables au Bénin, et le remboursement béninois peut courir jusqu\'à trente jours ouvrables. Des conditions recopiées d\'un site étranger peuvent contredire la loi du pays du client.'],
                ['titre' => 'Valider un paiement sur une capture d\'écran', 'texte' => 'Une capture se falsifie en deux minutes. Seul un retour de l\'agrégateur, rapproché de la commande, prouve que l\'argent est arrivé ; le colis ne part qu\'après cette confirmation.'],
                ['titre' => 'Cacher les frais de livraison jusqu\'à la dernière étape', 'texte' => 'Dans l\'étude américaine de Baymard, les frais supplémentaires trop élevés sont la première raison d\'abandon de panier (40 %, hors acheteurs qui ne faisaient que regarder). Affichez la livraison par zone dès la fiche produit, comme l\'exigent les lois ivoirienne et sénégalaise sur le prix toutes taxes et livraison comprises ou non.'],
                ['titre' => 'Tenir deux stocks', 'texte' => 'Une pièce vendue sur Instagram et sur le site, une rupture découverte à l\'emballage : le client attend, puis demande un remboursement. Un seul stock, décompté à chaque vente, évite la plupart de ces cas.'],
                ['titre' => 'Choisir une extension de paiement sans vérifier qu\'elle est suivie', 'texte' => 'L\'extension FedaPay pour WooCommerce indique, sur WordPress.org, ne pas avoir été testée avec les trois dernières versions majeures de WordPress. Testez une commande et un remboursement à chaque mise à jour, et tenez un plan B.'],
                ['titre' => 'Ouvrir WhatsApp sans compter les messages ni demander le consentement', 'texte' => 'Au-delà de 1 000 messages de service par mois et par numéro, Meta facture ; un rappel de panier est un message marketing. La prospection sans accord préalable est interdite par les lois béninoise, ivoirienne et sénégalaise.'],
                ['titre' => 'Promettre un délai que la logistique ne tient pas', 'texte' => 'Sans accord contraire, le Code du numérique béninois fixe trente jours ouvrables pour exécuter la commande, et le client peut obtenir la résolution du contrat en cas de retard. Annoncez un délai réaliste, produit par produit.'],
                ['titre' => 'Dépendre d\'une seule place de marché', 'texte' => 'La vitrine, les commissions et les règles appartiennent à la plateforme, qui a aussi le fichier clients. Jumia a quitté l\'Algérie début 2026 : un vendeur qui n\'avait que ce canal l\'a perdu. Une boutique à soi garde l\'adresse e-mail et le numéro WhatsApp des acheteurs.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former l\'équipe d\'une boutique en ligne pour qu\'elle soit autonome ?',
            'paragraphes' => [
                'Une boutique ne vaut que par les personnes qui la font tourner : ajouter un produit sans casser les déclinaisons, traiter une commande, déclencher un remboursement, répondre sur WhatsApp avec les bons mots. Richard a déjà formé des commerçants et e-commerçants, ainsi que des professionnels du marketing et de la communication. Les parcours détaillés se trouvent sur la page <a href="/formations/metier/commercants-e-commercants">formation des commerçants et e-commerçants</a> et sur celle des <a href="/formations/metier/marketing-communication">professionnels du marketing et de la communication</a>.',
                'Quatre fiches complètent le dispositif : <a href="/formations/e-commerce">Vendre en ligne</a> pour le catalogue, le paiement, la livraison et le service client ; <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> pour le catalogue, les étiquettes et les réponses rapides ; <a href="/formations/visibilite-google">Visibilité Google</a> pour la fiche d\'établissement et les avis ; <a href="/formations/marketing-digital-b2b">Marketing digital B2B</a> pour vendre à des professionnels. Une formation sur vos propres produits et vos propres commandes vaut mieux qu\'une démonstration générale.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre projet e-commerce à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de 6 ans d\'expérience, une formation à EPITECH (2022) et plus de 50 projets livrés, Richard a travaillé pour des organisations au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Cameroun, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il a aussi créé Wapy, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Côté vente en ligne, Richard a travaillé avec KossKoss Select, concept-store cosmétique du Cameroun et client direct : une boutique en ligne ouverte avec un diagnostic beauté en cinq étapes, quatorze routines de soin, et un paiement par Orange Money ou MTN MoMo. Il a aussi livré Laura Cosmetics, une boutique en deux devises et deux zones de livraison avec un back-office complet pour les stocks, les coupons et les indicateurs de vente, et IK Fashion House, passée d\'un atelier artisanal à une boutique en ligne avec commande sur mesure à distance ; ces deux projets ont été réalisés en sous-traitance pour Digital Développement. L\'ensemble se retrouve sur la page <a href="/realisations/">réalisations</a>.',
                'Pour la clientèle sénégalaise, la page <a href="/digitaliser-ecommerce-dakar">digitaliser l\'e-commerce à Dakar</a> décline cette approche à l\'échelle de la ville. La méthode proposée tient en quelques principes : un diagnostic sur vos commandes réelles, un palier validé avant le suivant, des conditions de vente écrites pour le pays de vos clients, et une réponse sous 24 heures. Le parcours complet de Richard est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez vendre en ligne, ou fiabiliser ce que vous vendez déjà ?',
            'texte'  => 'Décrivez vos produits, vos pays de livraison, vos moyens de paiement et la façon dont les commandes arrivent aujourd\'hui : vous recevez une réponse sous 24 heures, puis un plan par paliers et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet de boutique'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien coûte une boutique en ligne ?', 'r' => 'Une boutique avec paiement, stock et livraison se chiffre sur devis, après le diagnostic. Les tarifs de départ publiés concernent la landing page (150 000 FCFA, environ 229 euros), le site vitrine (300 000 FCFA, environ 457 euros) et le référencement naturel (75 000 FCFA, environ 114 euros). Le nombre de produits, de moyens de paiement, de zones de livraison et de connexions fait varier le devis.'],
        ['q' => 'Peut-on payer par mobile money sur une boutique en ligne ?', 'r' => 'Oui, avec un agrégateur de paiement relié à la boutique. FedaPay, par exemple, affiche sur sa page de tarifs 1,80 % de commission sur MTN, Moov et Celtiis au Bénin, et 3,60 % sur les cartes Visa et Mastercard. La boutique reçoit une confirmation, jamais le code secret du client, et rapproche chaque paiement de sa commande. Comparez les agrégateurs avant de choisir.'],
        ['q' => 'Faut-il choisir WooCommerce, Odoo ou une boutique sur mesure ?', 'r' => 'WooCommerce convient à un catalogue classique administré par l\'équipe ; Odoo, à une entreprise qui gère déjà son stock et sa caisse dans l\'ERP ; le sur mesure, à un parcours particulier comme la commande sur mesure ou deux devises. Le choix se fait au diagnostic, selon le catalogue, le stock et les agrégateurs des pays visés.'],
        ['q' => 'Quel droit de retour et de remboursement s\'applique à une boutique béninoise ?', 'r' => 'Selon le Code du numérique (loi n° 2017-20), le consommateur dispose de quinze jours ouvrables pour se rétracter, portés à quatre-vingt-dix si les informations obligatoires manquaient. Le remboursement intervient au plus tard trente jours ouvrables après réception du bien retourné, par le même moyen de paiement. Les biens sur mesure, les denrées périssables et les biens scellés d\'hygiène descellés sont exclus du droit de rétractation.'],
        ['q' => 'Dois-je émettre une facture normalisée pour mes ventes en ligne au Bénin ?', 'r' => 'La page du gouvernement béninois sur les factures normalisées (27 février 2020) indique que, pour l\'instant, la réforme ne concerne que les entreprises assujetties à la TVA, avec une machine certifiée ou un logiciel validé par l\'administration fiscale. Une petite boutique non assujettie n\'était pas concernée à cette date, mais la facture ou le justificatif de paiement reste exigé à la commande par l\'article 344 du Code du numérique. Confirmez votre statut avec votre comptable.'],
        ['q' => 'Puis-je vendre à des clients européens depuis l\'Afrique ?', 'r' => 'Oui, à condition de respecter les règles du client : 14 jours de rétractation, fonction de rétractation en ligne appliquée par les États membres depuis le 19 juin 2026, consentement avant les cookies publicitaires, prix toutes taxes comprises. Depuis le 1er juillet 2026, selon lexgo, les envois postaux de 150 euros au plus arrivant dans l\'Union supportent un droit forfaitaire de 3 euros par article : annoncez qui le paie.'],
        ['q' => 'Combien coûte WhatsApp pour répondre à mes clients ?', 'r' => 'Meta facture par message depuis le 1er juillet 2025. Depuis le 1er octobre 2026, chaque numéro professionnel a 1 000 messages de service gratuits par mois ; la facturation commence au 1 001e. Un rappel de panier abandonné est un message marketing, facturé. Estimez votre volume mensuel avant de bâtir l\'assistant, et ouvrez un moyen de paiement chez Meta.'],
        ['q' => 'Faut-il vendre sur Jumia ou ouvrir ma propre boutique ?', 'r' => 'Les deux se complètent. Jumia annonce 2,6 millions de clients actifs au deuxième trimestre 2026, donc une audience que votre boutique n\'a pas encore ; mais la plateforme garde la vitrine, les règles et le fichier clients. Une boutique à soi garde l\'adresse e-mail et le numéro WhatsApp des acheteurs, et ne dépend pas d\'un retrait de marché.'],
        ['q' => 'Un assistant IA peut-il prendre les commandes sur WhatsApp ?', 'r' => 'Il peut répondre aux questions sur le catalogue, aider à choisir une taille ou une teinte et enregistrer une demande, mais le paiement se fait chez l\'agrégateur et les litiges, remboursements et exceptions restent humains. L\'entreprise répond de ce que dit son assistant : source unique pour les prix, journal des conversations et bouton pour parler à une personne sont indispensables.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Richard a travaillé dans onze pays d\'Afrique francophone ainsi qu\'en France, en Belgique, en Suisse et au Canada. Le diagnostic et la formation se font à distance, ou sur place au Bénin ; le paramétrage se fait à distance. Les clients hors d\'Afrique règlent par carte bancaire, PayPal ou virement.'],
        ['q' => 'Puis-je former mon équipe à gérer la boutique ?', 'r' => 'Oui. Richard a déjà formé des commerçants et e-commerçants et des professionnels du marketing et de la communication : ajout de produits, traitement des commandes et des retours, messages WhatsApp, visibilité sur Google. La formation se fait sur vos propres produits, sur devis.'],
    ],

    'sources' => [
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 332, 333, 338, 340, 343 à 356, 359, 391, 405)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, « Tout savoir sur les factures normalisées au Bénin », 27 février 2020', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'Côte d\'Ivoire, loi n° 2013-546 du 30 juillet 2013 relative aux transactions électroniques (articles 5 à 8, 13 et 14)', 'url' => 'https://decfinex.tresor.gouv.ci/decfinex/textes/s-d_lutte-crim-finance/lois-reglements/2013-546-Transactions-electroniques.pdf', 'date' => '2026-10-07'],
        ['titre' => 'ARTCI, autorité de régulation des télécommunications et autorité de protection des données de Côte d\'Ivoire', 'url' => 'https://www.artci.ci/', 'date' => '2026-10-07'],
        ['titre' => 'WIPO Lex, Sénégal, loi n° 2008-08 du 25 janvier 2008 sur les transactions électroniques', 'url' => 'https://www.wipo.int/wipolex/en/legislation/details/10283', 'date' => '2026-10-07'],
        ['titre' => 'WIPO Lex, Sénégal, loi n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel', 'url' => 'https://www.wipo.int/wipolex/en/legislation/details/6229', 'date' => '2026-10-07'],
        ['titre' => 'Droit, médias et finance, « Cameroun : la loi sur la protection des données à caractère personnel entre en vigueur ce 23 juin 2026 »', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-07'],
        ['titre' => 'GSMA, Le point sur le secteur : les services de mobile money dans le monde 2026', 'url' => 'https://www.gsma.com/sotir/wp-content/plugins/plugin_gsma_sotir/reports/The-State-of-the-Industry-Report-2026_French.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Jumia, résultats du deuxième trimestre 2026, 12 août 2026', 'url' => 'https://www.newswire.com/news/jumia-reports-second-quarter-2026-results-and-announces-capital-raise', 'date' => '2026-10-07'],
        ['titre' => 'Eurostat, statistiques du commerce électronique pour les particuliers (données 2025)', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-commerce_statistics_for_individuals', 'date' => '2026-10-07'],
        ['titre' => 'Fevad, bilan du e-commerce en France en 2025', 'url' => 'https://www.fevad.com/bilan-du-e-commerce-en-france-les-francais-ont-depense-pres-de-200-milliards-deuros-sur-internet-en-2025/', 'date' => '2026-10-07'],
        ['titre' => 'Fevad, page d\'accueil (croissance du e-commerce au premier semestre 2026)', 'url' => 'https://www.fevad.com/', 'date' => '2026-10-07'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (page lue dans un navigateur le 7 octobre 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing', 'date' => '2026-10-07'],
        ['titre' => 'FedaPay, tarifs (commissions par opérateur, retraits)', 'url' => 'https://www.fedapay.com/pricing', 'date' => '2026-10-07'],
        ['titre' => 'WordPress.org, extension FedaPay Gateway for WooCommerce', 'url' => 'https://wordpress.org/plugins/woo-gateway-fedapay/', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, prestataires de paiement en ligne', 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/payment_providers.html', 'date' => '2026-10-07'],
        ['titre' => 'Baymard Institute, statistiques d\'abandon de panier', 'url' => 'https://baymard.com/lists/cart-abandonment-rate', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, directive (UE) 2023/2673 (fonction de rétractation, application des mesures nationales à partir du 19 juin 2026)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32023L2673', 'date' => '2026-10-07'],
        ['titre' => 'Your Europe, droit de rétractation pour les achats à distance', 'url' => 'https://europa.eu/youreurope/citizens/consumers/shopping/returns/index_fr.htm', 'date' => '2026-10-07'],
        ['titre' => 'Justice.fr, faire du commerce en ligne : règles à respecter', 'url' => 'https://www.justice.fr/fiche/faire-commerce-ligne-e-commerce-regles-respecter', 'date' => '2026-10-07'],
        ['titre' => 'iubenda, la nouvelle fonction de rétractation en ligne (directive (UE) 2023/2673)', 'url' => 'https://www.iubenda.com/fr/blog/la-nouvelle-fonction-de-retractation-en-ligne-ce-que-signifie-la-directive-ue-2023-2673-pour-votre-entreprise/', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, cookies et traceurs : que dit la loi ?', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi', 'date' => '2026-10-07'],
        ['titre' => 'Lexgo, fin de l\'exemption douanière de 150 euros : droit forfaitaire de 3 euros sur les petits colis', 'url' => 'https://www.lexgo.be/fr/actualites-et-articles/14980-la-fin-de-l-exemption-douaniere-de-150-l-union-europeenne-instaure-un-droit-forfaitaire-de-3-sur-les-petits-colis', 'date' => '2026-10-07'],
        ['titre' => 'AllAfrica, « Wave lance sa carte virtuelle » au Sénégal, 26 janvier 2026', 'url' => 'https://fr.allafrica.com/stories/202601260227.html', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'landing-page-haute-conversion', 'referencement-naturel-seo', 'agents-ia-chatbot-whatsapp', 'integration-whatsapp', 'maintenance-support', 'integration-odoo', 'automatisation-ia'],
        'metiers'     => ['commercants-e-commercants', 'marketing-communication'],
        'formations'  => ['e-commerce', 'whatsapp-business', 'visibilite-google', 'marketing-digital-b2b', 'publicite-meta-google-ads', 'emailing-automation'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'n8n-vs-make-vs-zapier'],
        'histoires'   => ['air-canada-chatbot'],
    ],
];
