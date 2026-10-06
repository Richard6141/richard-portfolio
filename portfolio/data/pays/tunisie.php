<?php
// ============================================================
// data/pays/tunisie.php · Page pays « Tunisie » (vague 1D, tranche T4).
// Richard n’a pas travaillé en Tunisie : la page dit qu’il peut accompagner
// à distance ; devis en euros, aucun montant chiffré, pas de clé 'ohada'
// (la Tunisie n’est pas membre de l’OHADA). Faits externes relevés le
// 06/10/2026 (INS, INT, BCT, textes de loi, TTN, sites des agrégateurs).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Cotonou et Tunis vivent à la même heure : Richard SALANON livre sites, paiements Konnect ou Flouci, Odoo et IA aux entreprises tunisiennes, devis en euros',
    'title'   => 'Développeur web à distance pour la Tunisie | Richard SALANON',
    'meta'    => 'Richard SALANON, consultant et développeur basé à Cotonou, accompagne à distance les entreprises en Tunisie : site, e-commerce, Odoo, IA, devis en euros.',
    'en_bref' => 'Richard SALANON peut accompagner à distance les entreprises en Tunisie : sites et boutiques en ligne branchés sur les paiements locaux, ERP Odoo, automatisations, assistants IA et formation des équipes. Il travaille depuis Cotonou, à la même heure que Tunis toute l’année, en français ou en anglais. Chaque projet est chiffré sur devis, en euros, après un échange gratuit. La réponse arrive sous 24 heures.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'fuseau' => [
            'v'      => 'UTC+1 toute l’année : la Tunisie n’a plus changé d’heure depuis 2008, comme le Bénin',
            'source' => 'https://github.com/eggert/tz/blob/main/africa',
            'date'   => '2026-10-06',
        ],
        'langues' => [
            'v'      => 'Arabe, langue officielle selon l’article 6 de la Constitution de 2022',
            'source' => 'https://axl.cefan.ulaval.ca/afrique/tunisie-const2022.htm',
            'date'   => '2026-10-06',
        ],
        'population' => [
            'v'      => '11 972 169 habitants au recensement de 2024 ; 40,4 % des ménages connectés à Internet',
            'source' => 'https://www.ins.tn/sites/default/files-ftp3/files/2025-09/Communiqu%C3%A9%20de%20presse.pdf',
            'date'   => '2026-10-06',
        ],
        'villes' => [
            'v'      => ['Tunis (gouvernorat de 1 075 306 habitants en 2024)', 'Sfax (1 047 468)', 'Sousse (762 281)'],
            'source' => 'https://www.ins.tn/sites/default/files-ftp3/files/2025-05/Bilan%20D%C3%A9mographique_0.pdf',
            'date'   => '2026-10-06',
        ],
        'internet' => [
            'v'      => '89,2 abonnements de données mobiles pour 100 habitants et 52,7 % des ménages abonnés à un accès fixe au premier trimestre 2026',
            'source' => 'https://www.intt.tn/upload/files/TB%20Trimestriel-TR1-2026.pdf',
            'date'   => '2026-10-06',
        ],
        'mobile' => [
            'v'      => '123,1 abonnements de téléphonie mobile pour 100 habitants au premier trimestre 2026',
            'source' => 'https://www.intt.tn/upload/files/TB%20Trimestriel-TR1-2026.pdf',
            'date'   => '2026-10-06',
        ],
        'mobile_money' => [
            'v'      => '8,4 millions de transactions de paiement mobile en 2025 (+81 %), pour 1,769 milliard de dinars',
            'source' => 'https://www.ecofinagency.com/news-digital/0905-55414-tunisia-introduces-tunpay-label-to-regulate-and-unify-mobile-payment-sector',
            'date'   => '2026-10-06',
        ],
        'secteurs' => [
            'v'      => ['Industries mécaniques et électriques', 'Agroalimentaire, dont l’huile d’olive', 'Textile, habillement et cuir', 'Mines, phosphates et dérivés'],
            'source' => 'https://www.ins.tn/sites/default/files-ftp3/files/publication/pdf/Note_Comext_11_mois_2025.pdf',
            'date'   => '2026-10-06',
        ],
        'devise' => [
            'v'      => 'Dinar tunisien (TND), monnaie dont la Banque centrale de Tunisie régit les opérations de change',
            'source' => 'https://www.bct.gov.tn/bct/siteprod/documents/Reg_des_Chges_ao13.pdf',
            'date'   => '2026-10-06',
        ],
        'operateurs' => [
            'v'      => ['Tunisie Telecom', 'Orange Tunisie', 'Ooredoo Tunisie'],
            'source' => 'https://www.intt.tn/upload/files/TB%20Trimestriel-TR1-2026.pdf',
            'date'   => '2026-10-06',
        ],
        'agregateurs' => [
            'v'      => ['Konnect (facilitateur de paiement certifié par la BCT)'],
            'source' => 'https://konnect.network/',
            'date'   => '2026-10-06',
        ],
        'donnees' => [
            'v'      => 'Loi organique n° 2004-63 du 27 juillet 2004, portant sur la protection des données à caractère personnel',
            'source' => 'https://www.ins.tn/sites/default/files/2020-04/Loi%2063-2004%20Fr.pdf',
            'date'   => '2026-10-06',
        ],
        'autorite' => [
            'v'      => 'Instance nationale de protection des données à caractère personnel (INPDP), qui reçoit les déclarations et délivre les autorisations',
            'source' => 'https://www.ins.tn/sites/default/files/2020-04/Loi%2063-2004%20Fr.pdf',
            'date'   => '2026-10-06',
        ],
        'facturation' => [
            'v'      => 'Facture électronique sur la plateforme El Fatoora de Tunisie TradeNet, étendue aux prestations de services par l’article 53 de la loi de finances 2026',
            'source' => 'https://businessnews.com.tn/?p=1418454',
            'date'   => '2026-10-06',
        ],
        'tva' => [
            'v'      => 'Taux normal de 19 % depuis la loi de finances 2018, pour les biens et services non soumis à un autre taux',
            'source' => 'https://www.jurisitetunisie.com/tunisie/codes/tva/tva1035.htm',
            'date'   => '2026-10-06',
        ],
        'ecommerce' => [
            'v'      => 'Loi n° 2000-83 du 9 août 2000 : informations préalables obligatoires, rétractation de 10 jours ouvrables',
            'source' => 'https://www.cmf.tn/sites/default/files/pdfs/reglementation/textes-reference/loi_2000-83_090800_fr.pdf',
            'date'   => '2026-10-06',
        ],
        'financement' => [
            'v'      => 'Taxe de formation professionnelle : 1 % de la masse salariale brute (industries manufacturières) ou 2 % (autres secteurs)',
            'source' => 'https://www.finances.gov.tn/fr/apercu-general-sur-la-fiscalite',
            'date'   => '2026-10-06',
        ],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun : UTC+1 toute l’année des deux côtés'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Quels chiffres du numérique tunisien comptent pour lancer un site ou une application ?',
            'paragraphes' => [
                'Selon l’Institut national de la statistique (INS), le recensement de 2024 a compté 11 972 169 habitants au 6 novembre 2024, avec une croissance annuelle estimée à 0,87 %. Le même communiqué indique que 40,4 % des ménages sont connectés à Internet et que 59,5 % possèdent un téléviseur connecté. Pour un site ou une application destinés au public tunisien, ces chiffres rappellent que près de six ménages sur dix n’étaient pas connectés chez eux à cette date : le téléphone reste souvent la porte d’entrée.',
                'L’Instance nationale des télécommunications (INT) publie un tableau de bord trimestriel. Celui du premier trimestre 2026 donne 123,1 abonnements de téléphonie mobile pour 100 habitants, 89,2 abonnements de données mobiles pour 100 habitants et 52,7 % des ménages abonnés à un accès fixe. Ces chiffres comptent des abonnements, y compris des cartes SIM de données, alors que le recensement interroge des ménages : les deux séries ne se superposent pas, et ni l’une ni l’autre ne dit ce que voit un visiteur donné sur son écran.',
                'L’accès fixe progresse aussi par la voie radio. Selon les indicateurs de l’INT relayés par WMC en juin 2026, l’Internet fixe sans fil en 5G comptait 298 717 abonnés en avril 2026, contre 9 425 à son lancement en février 2025. Les trois opérateurs principaux sont Tunisie Telecom, Orange Tunisie et Ooredoo Tunisie. Un site doit donc se charger vite sur un forfait mobile, et un écran de paiement doit se lire sans effort sur un petit téléphone.',
                'Reste la demande venue de l’extérieur. Sur les onze premiers mois de 2025, les exportations tunisiennes ont atteint 57 916,6 millions de dinars, dont 70,5 % vers l’Union européenne et 23,4 % vers la France, d’après la note de commerce extérieur de l’INS. Une entreprise qui vend à des acheteurs européens a besoin d’un site clair en français, parfois en anglais, qui rassure un client lointain et accepte son règlement. C’est le terrain où un prestataire à distance, qui sert des entreprises d’Europe depuis Cotonou, apporte le plus.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères faut-il connaître avant de lancer un projet en Tunisie ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer dans un projet tunisien ?',
            'paragraphes' => [
                'Le paiement mobile change d’échelle. La Banque centrale de Tunisie (BCT) a chiffré à 8,4 millions les transactions par téléphone en 2025, en hausse de 81 %, pour 1,769 milliard de dinars. En mai 2026, elle a annoncé TUNPAY, un label national conçu avec la Société Monétique Tunisie (SMT) : les banques, les établissements de paiement et La Poste Tunisienne qui proposent des portefeuilles doivent l’afficher dans leurs applications, et les commerçants sur leurs points d’acceptation. Pour un projet, cela veut dire qu’il faut afficher le bon logo, au bon endroit, sans inventer son propre habillage.',
                'La Poste Tunisienne remet gratuitement à chaque citoyen, dans ses bureaux, un portefeuille « wallet e-Dinar », valable dix ans, qui sert à transférer de l’argent et à payer chez les commerçants affiliés par son application D17, selon son communiqué de juillet 2025. Une boutique en ligne qui vise le grand public tunisien doit donc penser à la carte e-dinar, pas seulement aux cartes bancaires Visa et Mastercard émises par les banques.',
                'Les passerelles proposent l’essentiel de ces moyens derrière une seule intégration. Flouci Gateway accepte le portefeuille Flouci, les cartes et l’e-dinar, avec une intégration pour site et application et une référence d’API publiée. Konnect se présente comme un facilitateur de paiement certifié par la BCT, avec des liens de paiement, des plugins WooCommerce et PrestaShop, une API et un environnement de test. Paymee fait passer les cartes tunisiennes et internationales, ainsi que les cartes e-dinar, par la plateforme de la SMT.',
                'Les frais ne se devinent pas : ils se lisent sur le tarif de chaque passerelle, le jour de la signature. Konnect affichait le 6 octobre 2026 une commission de 1,3 % sur les cartes tunisiennes et les cartes e-dinar, 2,9 % sur les cartes émises à l’étranger et 2 TND par virement reçu, avec la précision que ces tarifs sont indicatifs. Cet écart entre cartes locales et étrangères pèse sur le prix final d’un produit vendu à un acheteur de la diaspora, et il se décide avant de fixer les prix affichés.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel moyen de paiement pour quel besoin de vente ?',
            'legende' => 'Moyens relevés sur les sites de la BCT, de La Poste Tunisienne, de Flouci, de Konnect et de Paymee ; la liste des moyens retenus se fixe au cadrage.',
            'entetes' => ['Besoin de vente', 'Moyen à prévoir', 'Ce que l’intégration demande'],
            'lignes'  => [
                ['Clients particuliers en Tunisie', 'Cartes bancaires tunisiennes et carte e-dinar de La Poste', 'Une passerelle agréée, un compte marchand, des clés de test puis de production, l’écran de paiement sécurisé du prestataire'],
                ['Clients munis d’un portefeuille mobile', 'Portefeuille Flouci, wallet e-Dinar, label TUNPAY', 'Un bouton dédié, le retour de paiement vérifié côté serveur, le logo TUNPAY aux emplacements prévus'],
                ['Clients de la diaspora ou étrangers', 'Cartes Visa et Mastercard émises hors de Tunisie', 'Un prestataire qui les accepte, avec une commission plus élevée à intégrer dans le prix'],
                ['Facturation à des entreprises', 'Virement bancaire ou lien de paiement', 'Un rapprochement entre le virement reçu et la facture, avec la mention des 2 TND de frais de Konnect si ce canal est retenu'],
                ['Boutique WooCommerce ou PrestaShop', 'Plugin de la passerelle', 'Installation, paramétrage, test d’une commande et d’un remboursement'],
                ['Application ou site sur mesure', 'API de la passerelle', 'Création du paiement, retour serveur à serveur, reprise en cas d’échec ou de doublon'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet en Tunisie ?',
            'paragraphes' => [
                'Les données personnelles relèvent de la loi organique n° 2004-63 du 27 juillet 2004. Son article 7 soumet tout traitement à une déclaration préalable à l’Instance nationale de protection des données personnelles (INPDP) : l’absence d’opposition dans le mois qui suit vaut acceptation. L’article 15 exige en plus une autorisation de l’Instance, à donner dans trente jours, pour les données sensibles de l’article 14 (origine, convictions, opinions, santé), la santé étant traitée dans un chapitre à part. Le défaut de réponse vaut refus. Un formulaire d’inscription, un fichier clients ou un espace client doivent donc passer par ces formalités avant la mise en ligne.',
                'Le sort de la loi mérite une veille. Une proposition de loi organique sur la protection des données personnelles était examinée par la commission des droits et libertés de l’Assemblée des représentants du peuple : elle a poursuivi son examen le 20 mai 2026, selon Business News. Tant qu’un nouveau texte n’est pas publié au Journal officiel, la loi de 2004 s’applique, mais le cahier des charges doit prévoir une revue juridique avant chaque mise en production.',
                'Le transfert vers l’étranger est encadré. L’article 51 n’autorise le transfert que vers un pays qui assure un niveau de protection adéquat, et l’article 52 impose, dans tous les cas, l’autorisation de l’INPDP, qui statue dans un mois. L’article 90 punit d’un an d’emprisonnement et de 5 000 dinars d’amende le transfert à l’étranger sans autorisation, comme le traitement sans déclaration. Héberger une base de clients tunisiens dans un centre de données européen, ou donner à un prestataire basé à Cotonou un accès à cette base, peut constituer un tel transfert : le contrat doit en parler dès la première version.',
                'La facturation change vite. L’article 53 de la loi de finances 2026 a étendu la facture électronique aux prestations de services à compter du 1er janvier 2026. Le 23 janvier 2026, une note commune du ministère des Finances a précisé que l’obligation ne s’applique effectivement qu’aux prestataires déjà adhérents au réseau et ayant rempli les conditions techniques, les autres pouvant émettre des factures papier à titre transitoire. Le 15 septembre 2026, Tunisie TradeNet a ouvert un portail web pour les petits volumes, qui signe et transmet les factures à El Fatoora sans interface ni ERP. Le calendrier réel dépend de l’adhésion de chaque prestataire : à confirmer auprès de l’administration fiscale.',
                'La TVA a un taux normal de 19 % depuis la loi de finances 2018, selon le Code de la TVA. Pour un prestataire étranger, le Code de l’impôt sur le revenu et de l’impôt sur les sociétés prévoit, à son article 52, une retenue à la source de 15 % sur certaines sommes versées à des personnes non domiciliées ni établies en Tunisie, selon la nature des revenus. Qui supporte cette retenue, et comment la TVA sur un service rendu depuis l’étranger se déclare, se règle par écrit dans le devis et avec l’expert-comptable du client.',
                'Le paiement d’un prestataire non résident passe par une banque. La circulaire BCT n° 2016-09 aux intermédiaires agréés, dans le recueil de la réglementation des changes mis à jour en avril 2022, prévoit que les transferts au titre de prestations de services se font sur présentation de pièces : contrat et facture, mentionnant les parties, la nature détaillée des prestations, la rémunération, l’unité d’œuvre et le coût unitaire. Elle demande aussi, pour plusieurs catégories dont l’assistance technique et la maintenance de logiciels, que les prestations soient non forfaitaires et mesurables par des unités quantifiables inscrites au contrat. Un devis en jours de travail, détaillé, facilite donc le virement : la banque du client confirme les règles en vigueur.',
                'Le commerce électronique relève de la loi n° 2000-83 du 9 août 2000. Son article 25 oblige le vendeur à fournir avant la conclusion du contrat, de façon claire, son identité, son adresse et son téléphone, les caractéristiques et le prix du produit, les frais de livraison et les taxes, les modalités de paiement, la possibilité de rétractation et son délai, le retour et le remboursement. Le consommateur peut se rétracter dans un délai de dix jours ouvrables, avec des exceptions comme les logiciels descellés. Ces mentions deviennent des champs obligatoires de la boutique, et non du texte juridique en bas de page.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que risque une entreprise qui ouvre un site collectant des données sans l’avoir déclaré ?',
            'texte' => 'L’article 90 de la loi n° 2004-63 punit d’un an d’emprisonnement et de 5 000 dinars d’amende quiconque effectue intentionnellement un traitement sans la déclaration de l’article 7 ou sans l’autorisation prévue par la loi, ou transfère des données à l’étranger sans l’autorisation de l’Instance. Un formulaire de contact, une newsletter ou un espace client sont des traitements : la déclaration se prépare avant le lancement, avec le responsable du traitement désigné par l’entreprise.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services de Richard répondent aux besoins des entreprises tunisiennes ?',
            'legende' => 'Chaque ligne relie un besoin observé en Tunisie, d’après les chiffres et les textes de loi tunisiens, à un service de Richard SALANON ; toutes les prestations se chiffrent sur devis, en euros.',
            'entetes' => ['Besoin typique en Tunisie', 'Service'],
            'lignes'  => [
                ['Vendre à des acheteurs européens avec un site clair en français ou en anglais', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Encaisser en ligne par Flouci, Konnect ou Paymee et par carte e-dinar', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Proposer un espace réservé à des clients ou à des agences', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Suivre ventes, stocks et comptabilité dans un seul outil, Odoo disposant d’un paquet pour la Tunisie', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Relier un logiciel de gestion à El Fatoora ou à une passerelle de paiement', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Supprimer la ressaisie des commandes, des factures et des relances', '<a href="/services/automatisation-ia">Automatisation avec n8n et Make</a>'],
                ['Répondre aux clients sur WhatsApp, en tenant compte des tarifs de Meta', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Être trouvé sur Google par des acheteurs étrangers', '<a href="/services/referencement-naturel-seo">Référencement naturel (SEO)</a>'],
                ['Confier un assistant ou un traitement de documents à l’intelligence artificielle', '<a href="/services/integration-ia-entreprise">Intégration de l’IA en entreprise</a>'],
                ['Garder un site ou une application à jour après la livraison', '<a href="/services/maintenance-support">Maintenance et support</a>'],
                ['Renforcer une agence ou une équipe technique sans embaucher', '<a href="/services/externalisation-developpement">Externalisation du développement</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs de Tunisie ?',
            'items' => [
                ['secteur' => 'Industries mécaniques et électriques', 'probleme' => 'Les exportations du secteur ont progressé de 7,8 % sur les onze premiers mois de 2025, d’après l’INS ; les commandes, les achats de composants et les stocks d’un sous-traitant se suivent pourtant encore dans des tableurs et des messages.', 'solution' => 'Un déploiement par paliers d’Odoo : ventes et achats d’abord, puis inventaire par entrepôt, avec le paquet de localisation pour la Tunisie que liste la documentation d’Odoo. La paie reste à traiter à part : la documentation ne livre pas de localisation de paie pour ce pays.'],
                ['secteur' => 'Agroalimentaire et huile d’olive', 'probleme' => 'Les ventes d’huile d’olive à l’export sont passées de 4 456,2 à 3 470,7 millions de dinars entre les onze premiers mois de 2024 et de 2025, selon l’INS ; un producteur qui dépend d’un seul circuit cherche d’autres acheteurs.', 'solution' => 'Une boutique en ligne qui accepte les cartes étrangères, avec des prix affichés en euros et une page par produit pensée pour être trouvée sur Google. Le principe est celui d’une boutique livrée en sous-traitance, qui gérait deux devises : le même s’applique ici.'],
                ['secteur' => 'Textile, habillement et cuir', 'probleme' => 'Le secteur vend surtout à l’Union européenne, qui reçoit 70,5 % des exportations tunisiennes ; chaque donneur d’ordre réclame un suivi de commande et des documents dans sa langue.', 'solution' => 'Un espace client sur mesure où chaque acheteur suit ses commandes, relié par des automatisations n8n ou Make à la facturation et aux e-mails de confirmation, avec des textes en français ou en anglais.'],
                ['secteur' => 'Mines, phosphates et dérivés', 'probleme' => 'Les exportations de ce secteur ont augmenté de 12 % sur la même période ; les fournisseurs et sous-traitants du secteur doivent tracer interventions, documents et factures pour des clients exigeants.', 'solution' => 'Une application web interne qui centralise les interventions, les pièces jointes et les validations, avec des droits par rôle et un historique des actions, reliée à la facturation électronique quand l’entreprise y est assujettie.'],
                ['secteur' => 'Tourisme et hôtellerie', 'probleme' => 'Le ministère du Tourisme a annoncé 10,03 millions de visiteurs étrangers au 20 novembre 2025, dont 1,07 million venus de France ; un hôtel ou une maison d’hôtes perd des réservations s’il répond tard ou reste mal classé.', 'solution' => 'Un moteur de réservation en ligne, une fiche Google soignée, des avis sollicités dans le respect des règles de Google, et des réponses WhatsApp qui préparent le séjour, en français et en anglais.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes tunisiennes, et comment financer la formation ?',
            'paragraphes' => [
                'Richard forme à distance, en visioconférence, sur les données et les outils de l’entreprise. Il a formé plus de 200 personnes au numérique et à l’IA. Les fiches les plus demandées pour une équipe tunisienne sont <a href="/formations/ia-en-entreprise">l’IA en entreprise</a>, <a href="/formations/n8n">n8n, de zéro à l’autonomie</a>, <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>, <a href="/formations/e-commerce">vendre en ligne</a> et <a href="/formations/cybersecurite-employes">la cybersécurité pour les employés</a>. Le catalogue complet figure sur la page <a href="/formations/">formations</a>.',
                'Le financement passe par la taxe de formation professionnelle. D’après l’aperçu de la fiscalité du ministère des Finances, elle est de 1 % de la masse salariale brute pour les industries manufacturières et de 2 % pour les autres secteurs. Le décret n° 2009-292 du 2 février 2009 organise l’avance sur cette taxe et les droits de tirage, la procédure faisant intervenir le Centre national de formation continue et de promotion professionnelle (CNFCPP), qui approuve les actions de formation réalisées par l’entreprise.',
                'Un point reste à confirmer : l’éligibilité d’une formation donnée à distance par un prestataire établi à l’étranger à ces mécanismes. Avant de signer, l’entreprise demande donc au CNFCPP si la dépense peut figurer dans son plan de formation, et Richard adapte le devis et le programme aux pièces que l’organisme exige.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Le fuseau ne pose aucun problème. Le Bénin est à UTC+1 toute l’année, et la Tunisie aussi : elle a renoncé à l’heure d’été après 2008, d’après la base des fuseaux horaires de l’IANA. À 10 h à Tunis, il est donc 10 h à Cotonou. Richard publie des horaires de 7 h à 20 h tous les jours de la semaine, ce qui couvre l’ensemble d’une journée de bureau tunisienne, y compris les rendez-vous tôt le matin ou en fin d’après-midi.',
                'La langue de travail est le français, ou l’anglais si l’équipe le préfère. L’arabe est la langue officielle de la Tunisie selon l’article 6 de la Constitution de 2022 : si le site doit être en arabe, le client fournit ou fait traduire les textes, et l’affichage de droite à gauche se discute dès le cadrage, car il change la conception des pages. Les échanges se font par visioconférence, WhatsApp et e-mail, avec un compte rendu écrit après chaque point d’étape.',
                'Tout se fait à distance, du cadrage à la formation. Les devis sont établis en euros, ce qui évite de les rattacher au cours du dinar le jour de la commande. Pour une entreprise tunisienne, le règlement se fait par virement, d’une banque intermédiaire agréée, sur la base d’un contrat et d’une facture détaillés, comme l’exige la réglementation des changes ; les clients qui le préfèrent peuvent aussi payer par carte bancaire ou par PayPal.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quelles sont les étapes d’un projet mené à distance pour une entreprise tunisienne ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez l’activité, les clients visés et les outils déjà en place. Le premier échange, le cadrage et le devis sont gratuits.'],
                ['titre' => 'Cadrage des contraintes tunisiennes', 'duree' => 'Quelques jours', 'texte' => 'On liste les moyens de paiement à intégrer, les formalités auprès de l’INPDP, l’état d’adhésion à El Fatoora, l’hébergement des données et la langue des contenus.'],
                ['titre' => 'Devis détaillé en euros', 'duree' => 'Après le cadrage', 'texte' => 'Le devis décrit les prestations en unités mesurables, comme la circulaire de la BCT le demande pour plusieurs catégories de services, et précise qui supporte les retenues fiscales.'],
                ['titre' => 'Réalisation par paliers', 'duree' => '1 à 3 semaines pour un site vitrine, 1 à 3 mois pour une application sur mesure', 'texte' => 'Chaque palier se teste en ligne par vos équipes, avec une passerelle de paiement en mode test avant toute transaction réelle.'],
                ['titre' => 'Livraison et formation', 'duree' => 'À la fin de chaque palier', 'texte' => 'Remise des accès à votre nom, documentation, séances de formation en visioconférence pour les équipes concernées.'],
                ['titre' => 'Suivi', 'duree' => 'Après la livraison', 'texte' => 'Corrections, montées de version, surveillance des paiements et ajustements après les premières semaines, dans le cadre d’une maintenance si elle est retenue.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet pour une entreprise en Tunisie, et qu’est-ce qui fait varier le devis ?',
            'intro'      => 'Chaque projet est chiffré sur devis, en euros, après un échange et un cadrage gratuits. Le prix dépend du périmètre fonctionnel et des contraintes locales listées ci-dessous.',
            'items'      => [
                ['offre' => 'Site vitrine ou boutique en ligne', 'prix' => 'Sur devis, en euros', 'inclus' => ['Conception et développement du site', 'Passerelle de paiement locale ou internationale', 'Mentions imposées par la loi n° 2000-83', 'Formation à la mise à jour']],
                ['offre' => 'Application web ou espace client', 'prix' => 'Sur devis, en euros', 'inclus' => ['Cadrage fonctionnel', 'Développement par paliers', 'Droits d’accès par rôle', 'Documentation et accès à votre nom']],
                ['offre' => 'ERP Odoo ou automatisations', 'prix' => 'Sur devis, en euros', 'inclus' => ['Cadrage sur une opération réelle', 'Paramétrage avec le paquet de localisation tunisien', 'Reprise des données', 'Formation par métier']],
                ['offre' => 'Formation des équipes à distance', 'prix' => 'Sur devis, en euros', 'inclus' => ['Programme adapté à vos données', 'Séances en visioconférence', 'Supports remis', 'Pièces utiles à une demande de financement']],
            ],
            'variations' => [
                'Le nombre de moyens de paiement à intégrer : carte tunisienne, e-dinar, portefeuille mobile, carte étrangère.',
                'Le choix de la passerelle, dont la commission pèse sur la marge de l’entreprise mais ne figure pas dans le devis de Richard.',
                'Le raccordement à El Fatoora ou à un autre outil de facturation, selon le logiciel utilisé et l’état d’adhésion.',
                'Les formalités et le contrat de traitement des données : déclaration, autorisation, transfert à l’étranger.',
                'La langue des contenus, et le besoin éventuel d’un affichage en arabe.',
                'Le volume de données à reprendre et le nombre d’utilisateurs à former.',
                'La retenue à la source et le circuit de paiement à l’étranger, qui se réglementent au contrat.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent dans un projet numérique tunisien ?',
            'intro' => 'Chacun de ces points s’appuie sur un texte ou un chiffre tunisien et se règle au cadrage.',
            'items' => [
                ['titre' => 'Choisir la passerelle sur un seul tarif', 'texte' => 'Une commission de 1,3 % sur les cartes tunisiennes ne dit rien de celle des cartes étrangères, affichée à 2,9 % chez Konnect. Comparer les trois passerelles sur le mix de clients réel.'],
                ['titre' => 'Oublier la carte e-dinar et le label TUNPAY', 'texte' => 'Les portefeuilles de La Poste et le label annoncé par la BCT en mai 2026 font partie du paysage : un écran de paiement qui les ignore perd des clients.'],
                ['titre' => 'Lancer un formulaire sans déclaration à l’INPDP', 'texte' => 'L’article 7 de la loi de 2004 impose une déclaration préalable, et l’article 90 punit le traitement sans déclaration d’un an d’emprisonnement et de 5 000 dinars d’amende.'],
                ['titre' => 'Héberger à l’étranger sans autorisation de transfert', 'texte' => 'L’article 52 exige l’autorisation de l’Instance pour tout transfert, y compris vers un centre de données européen : la demander avant la mise en ligne, et non après un contrôle.'],
                ['titre' => 'Signer un forfait global opaque', 'texte' => 'Pour payer un prestataire étranger, la banque réclame un contrat et une facture détaillés, et la circulaire de la BCT exige des unités mesurables pour plusieurs catégories de services.'],
                ['titre' => 'Supposer que la facture papier suffit toujours', 'texte' => 'L’article 53 de la loi de finances 2026 étend la facture électronique aux services, et la note commune du 23 janvier 2026 la module selon l’adhésion de l’entreprise. Vérifier sa situation avec l’expert-comptable.'],
                ['titre' => 'Lire les abonnements comme des utilisateurs', 'texte' => 'Les 123,1 abonnements mobiles pour 100 habitants de l’INT comptent des cartes SIM, pas des personnes. Mesurer l’audience réelle avec les statistiques du site.'],
                ['titre' => 'Omettre les mentions de la loi sur le commerce électronique', 'texte' => 'L’article 25 de la loi n° 2000-83 liste les informations à fournir avant le contrat, dont la rétractation de dix jours ouvrables : elles se prévoient comme des champs de la boutique.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet tunisien à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut accompagner à distance les entreprises en Tunisie. Son parcours : plus de 6 ans dans le numérique, EPITECH en 2022, plus de 50 projets livrés et plus de 100 clients. Il édite <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp doté d’IA, et co-fonde <a href="https://audyxa.com">Audyxa</a>. La page <a href="/realisations/">réalisations</a> présente des projets dont les méthodes se transposent à votre contexte.',
                'Parmi eux, réalisé en sous-traitance pour Digital Développement, la boutique de Laura Cosmetics, entre Paris et Abidjan : deux devises, deux zones de livraison, stocks, coupons et indicateurs de vente dans un back-office. Toujours en sous-traitance pour Digital Développement, il a remplacé un WordPress devenu ingérable chez Impulse Finance, cabinet d’expertise comptable d’Argenteuil, sans perdre le référencement, avec des simulateurs fiscaux, en trois jours. Pour OBA TV, client direct, il a relié un abonnement premium à MTN MoMo et Moov Money.',
                'Sa méthode : un cadrage sur vos contraintes, des paliers testés avant d’ouvrir le suivant, des accès et du code à votre nom, une documentation remise à chaque étape, et une réponse sous 24 heures. Son parcours complet figure sur la page <a href="/richard-salanon">Richard SALANON</a>, et ses autres zones d’intervention sont listées sur la page <a href="/zones/">zones</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet numérique en Tunisie ?',
            'texte'  => 'Décrivez votre activité, vos clients, les moyens de paiement et les contraintes légales qui comptent pour vous : une réponse arrive sous 24 heures, puis, au terme d’un premier échange gratuit, un devis détaillé en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard peut-il accompagner une entreprise en Tunisie sans s’y déplacer ?', 'r' => 'Oui. Richard peut accompagner à distance les entreprises en Tunisie, depuis Cotonou, avec les méthodes et les outils qu’il met en œuvre pour ses clients d’Afrique francophone, d’Europe et du Canada. Il n’y a aucun décalage horaire, et les projets proches de vos besoins, comme une boutique en deux devises ou un paiement par mobile, figurent sur la page des réalisations.'],
        ['q' => 'Combien coûte un projet pour une entreprise tunisienne ?', 'r' => 'Le prix est fixé sur devis, en euros, après un premier échange et un cadrage gratuits. Il dépend du périmètre, du nombre de moyens de paiement à intégrer, du raccordement à la facturation électronique, des formalités sur les données personnelles et de la langue des contenus. Chaque devis détaille les prestations une à une.'],
        ['q' => 'Faut-il déclarer son site à l’INPDP avant de le lancer ?', 'r' => 'Oui, dès qu’il traite des données personnelles : l’article 7 de la loi organique n° 2004-63 soumet tout traitement à une déclaration préalable, et l’absence d’opposition dans le mois vaut acceptation. Les données sensibles de l’article 14 demandent une autorisation, à donner dans trente jours. Traiter des données sans ces formalités est puni par l’article 90 d’un an d’emprisonnement et de 5 000 dinars d’amende.'],
        ['q' => 'Peut-on héberger les données d’une entreprise tunisienne en Europe ?', 'r' => 'C’est possible, mais le transfert vers l’étranger exige l’autorisation de l’INPDP, selon l’article 52 de la loi de 2004, qui statue dans un délai d’un mois. L’article 51 ne le permet que vers un pays offrant un niveau de protection adéquat. Le choix de l’hébergement se décide donc au cadrage, avec le contrat de traitement, et avant toute mise en ligne.'],
        ['q' => 'La loi sur la protection des données va-t-elle être remplacée ?', 'r' => 'Une proposition de loi organique était examinée par la commission des droits et libertés de l’Assemblée des représentants du peuple, qui a poursuivi ses travaux le 20 mai 2026. Tant qu’un nouveau texte n’est pas publié au Journal officiel, la loi de 2004 s’applique. Une revue juridique avant chaque mise en production évite de se fonder sur un texte dépassé.'],
        ['q' => 'Quelle passerelle de paiement choisir en Tunisie ?', 'r' => 'Trois noms reviennent : Flouci, qui accepte portefeuille, carte et e-dinar, Konnect, facilitateur certifié par la BCT avec des plugins WooCommerce et PrestaShop, et Paymee, qui passe par la plateforme de la SMT. Le choix dépend de la part de clients étrangers, des cartes e-dinar et du logiciel de la boutique ; les tarifs se lisent chez chacun le jour de la signature.'],
        ['q' => 'La facture électronique est-elle obligatoire pour une société de services ?', 'r' => 'L’article 53 de la loi de finances 2026 l’a étendue aux prestations de services dès le 1er janvier 2026. Selon la note commune du 23 janvier 2026, elle s’applique effectivement aux prestataires adhérents au réseau qui remplissent les conditions techniques, les autres pouvant facturer sur papier à titre transitoire. TTN a ouvert un portail simplifié le 15 septembre 2026 : la situation de chaque entreprise se confirme avec son expert-comptable.'],
        ['q' => 'Comment une entreprise tunisienne règle-t-elle un prestataire basé au Bénin ?', 'r' => 'Par virement, via une banque intermédiaire agréée, sur présentation d’un contrat et d’une facture détaillés, selon la circulaire BCT n° 2016-09 du recueil de la réglementation des changes. Le Code de l’impôt sur le revenu prévoit une retenue à la source de 15 % sur certaines sommes versées à un non-résident non établi, selon la nature des revenus. Le devis précise qui la supporte ; la banque confirme les règles du moment.'],
        ['q' => 'Quel est le décalage horaire entre Cotonou et Tunis ?', 'r' => 'Il n’y en a aucun. Le Bénin est à UTC+1 toute l’année et la Tunisie aussi, car elle n’a plus d’heure d’été depuis 2008. Richard publie des horaires de 7 h à 20 h tous les jours, ce qui couvre une journée de travail tunisienne complète et facilite les rendez-vous en visioconférence.'],
        ['q' => 'Odoo convient-il à une entreprise en Tunisie ?', 'r' => 'La documentation d’Odoo 20.0 liste la Tunisie parmi les localisations fiscales, ce qui donne une base comptable. En revanche, elle ne livre pas de localisation de paie pour ce pays, et ne cite aucune passerelle tunisienne parmi ses prestataires de paiement : la paie et l’encaissement passent par un outil ou un connecteur à part.'],
        ['q' => 'La formation peut-elle être financée par la taxe de formation professionnelle ?', 'r' => 'La taxe de formation professionnelle alimente des mécanismes de financement, dont l’avance et les droits de tirage organisés par le décret n° 2009-292. L’éligibilité d’une formation à distance donnée par un prestataire établi à l’étranger est à confirmer : demandez-le au CNFCPP avant de signer, et Richard adaptera le devis et le programme aux pièces demandées.'],
        ['q' => 'Richard travaille-t-il en arabe ?', 'r' => 'Richard travaille en français et en anglais. Si votre site doit exister en arabe, langue officielle selon l’article 6 de la Constitution de 2022, vous fournissez ou faites traduire les textes, et la mise en page de droite à gauche se discute dès le cadrage.'],
    ],

    'sources' => [
        ['titre' => 'INS, communiqué sur les analyses thématiques du recensement 2024 (population, ménages connectés)', 'url' => 'https://www.ins.tn/sites/default/files-ftp3/files/2025-09/Communiqu%C3%A9%20de%20presse.pdf', 'date' => '2026-10-06'],
        ['titre' => 'INS, bilan démographique du recensement 2024 (population par gouvernorat)', 'url' => 'https://www.ins.tn/sites/default/files-ftp3/files/2025-05/Bilan%20D%C3%A9mographique_0.pdf', 'date' => '2026-10-06'],
        ['titre' => 'INS, note de commerce extérieur des onze premiers mois de 2025', 'url' => 'https://www.ins.tn/sites/default/files-ftp3/files/publication/pdf/Note_Comext_11_mois_2025.pdf', 'date' => '2026-10-06'],
        ['titre' => 'INT, tableau de bord trimestriel du premier trimestre 2026', 'url' => 'https://www.intt.tn/upload/files/TB%20Trimestriel-TR1-2026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'WMC, la 5G en Tunisie : les indicateurs de l’INT (juin 2026)', 'url' => 'https://www.webmanagercenter.com/2026/06/22/568846/5g-en-tunisie-les-indicateurs-de-lint-revelent-une-forte-croissance-du-chiffre-daffaires-des-operateurs/', 'date' => '2026-10-06'],
        ['titre' => 'Ecofin, la BCT lance le label TUNPAY (chiffres du paiement mobile en 2025)', 'url' => 'https://www.ecofinagency.com/news-digital/0905-55414-tunisia-introduces-tunpay-label-to-regulate-and-unify-mobile-payment-sector', 'date' => '2026-10-06'],
        ['titre' => 'L’Économiste maghrébin, TUNPAY, label conçu par la BCT avec la SMT', 'url' => 'https://www.leconomistemaghrebin.com/2026/05/08/tunpay-la-tunisie-unifie-ses-paiements-mobiles-pour-booster-ladoption-numerique/', 'date' => '2026-10-06'],
        ['titre' => 'La Poste Tunisienne, wallet e-Dinar et application D17 (Tekiano, juillet 2025)', 'url' => 'https://www.tekiano.com/2025/07/16/la-poste-tunisienne-met-a-la-disposition-un-portefeuille-electronique-wallet-e-dinar-pour-chaque-citoyen/', 'date' => '2026-10-06'],
        ['titre' => 'Flouci, solution d’encaissement pour les entreprises', 'url' => 'https://fr.flouci.com/enterprise', 'date' => '2026-10-06'],
        ['titre' => 'Konnect, solution de paiement en ligne', 'url' => 'https://konnect.network/', 'date' => '2026-10-06'],
        ['titre' => 'Konnect, tarifs', 'url' => 'https://konnect.network/pricing', 'date' => '2026-10-06'],
        ['titre' => 'Paymee, passerelle de paiement', 'url' => 'https://www.paymee.tn/', 'date' => '2026-10-06'],
        ['titre' => 'Loi organique n° 2004-63 du 27 juillet 2004 (données personnelles, articles 7, 14, 15, 51, 52 et 90)', 'url' => 'https://www.ins.tn/sites/default/files/2020-04/Loi%2063-2004%20Fr.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Business News, l’ARP poursuit l’examen de la proposition de loi sur les données personnelles (20 mai 2026)', 'url' => 'https://businessnews.com.tn/2026/05/20/associations-donnees-personnelles-nationalite-larp-ouvre-plusieurs-fronts/1402562/', 'date' => '2026-10-06'],
        ['titre' => 'Business News, note commune du ministère des Finances sur la facturation électronique (23 janvier 2026)', 'url' => 'https://businessnews.com.tn/2026/01/23/facturation-electronique-une-note-commune-du-ministere-des-finances-donne-des-precisions/1384817/', 'date' => '2026-10-06'],
        ['titre' => 'Business News, TTN ouvre le portail El Fatoora (15 septembre 2026)', 'url' => 'https://businessnews.com.tn/?p=1418454', 'date' => '2026-10-06'],
        ['titre' => 'Code de la TVA, article 7 (taux)', 'url' => 'https://www.jurisitetunisie.com/tunisie/codes/tva/tva1035.htm', 'date' => '2026-10-06'],
        ['titre' => 'Code de l’IRPP et de l’IS, article 52 (retenues à la source)', 'url' => 'https://www.jurisitetunisie.com/tunisie/codes/cirppis/cirppis1190.htm', 'date' => '2026-10-06'],
        ['titre' => 'Ministère des Finances, aperçu général de la fiscalité (retenue libératoire, taxe de formation professionnelle)', 'url' => 'https://www.finances.gov.tn/fr/apercu-general-sur-la-fiscalite', 'date' => '2026-10-06'],
        ['titre' => 'BCT, recueil de la réglementation des changes (circulaire n° 2016-09)', 'url' => 'https://www.bct.gov.tn/bct/siteprod/documents/Reg_des_Chges_ao13.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2000-83 du 9 août 2000 relative aux échanges et au commerce électroniques', 'url' => 'https://www.cmf.tn/sites/default/files/pdfs/reglementation/textes-reference/loi_2000-83_090800_fr.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Web Manager Center, TFP : l’avance, les droits de tirage et l’approbation par le CNFCPP', 'url' => 'https://www.webmanagercenter.com/2009/03/27/72728/tfp-changement-de-la-procedure-de-financement-des-actions-de-formation/', 'date' => '2026-10-06'],
        ['titre' => 'Juridoc, décret n° 2009-292 sur l’avance sur la taxe de formation professionnelle et les droits de tirage', 'url' => 'https://juridoc.tn/fr/document/decree-n--2009-292-dated-2-february-2009-fixing-the-scope-of-application-of-the-advance-on-the-tax-of-vocational-training-its-rate-the-conditions-and-the-procedures-of-its-benefit-as-well-as-the-scope-of-application-the-procedures-and-the-conditions-of-be/16628', 'date' => '2026-10-06'],
        ['titre' => 'Constitution de la Tunisie de 2022, dispositions linguistiques (article 6)', 'url' => 'https://axl.cefan.ulaval.ca/afrique/tunisie-const2022.htm', 'date' => '2026-10-06'],
        ['titre' => 'Base de données des fuseaux horaires de l’IANA, fichier Afrique (Tunis, Lagos)', 'url' => 'https://github.com/eggert/tz/blob/main/africa', 'date' => '2026-10-06'],
        ['titre' => 'Business News, le tourisme tunisien passe les dix millions de visiteurs (novembre 2025)', 'url' => 'https://businessnews.com.tn/2025/11/26/tourisme-les-dix-millions-de-visiteurs-atteints-en-novembre/1374959/', 'date' => '2026-10-06'],
        ['titre' => 'Documentation Odoo 20.0, localisations fiscales (Tunisie)', 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/fiscal_localizations.html', 'date' => '2026-10-06'],
        ['titre' => 'Documentation Odoo 20.0, localisations de paie', 'url' => 'https://www.odoo.com/documentation/20.0/applications/hr/payroll/payroll_localizations.html', 'date' => '2026-10-06'],
        ['titre' => 'Documentation Odoo 20.0, prestataires de paiement en ligne', 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/payment_providers.html', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['externalisation-developpement', 'site-e-commerce', 'application-web-sur-mesure', 'integration-odoo', 'automatisation-ia', 'integration-whatsapp', 'referencement-naturel-seo', 'integration-ia-entreprise', 'maintenance-support'],
        'formations'  => ['ia-en-entreprise', 'n8n', 'odoo-utilisateurs', 'e-commerce', 'cybersecurite-employes'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['experts-comptables', 'commercants-e-commercants', 'hotellerie-restauration'],
    ],
];
