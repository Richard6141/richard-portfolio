<?php
// ============================================================
// data/pays/maurice.php · Page pays « Maurice » (vague 1D, tranche T5).
// Faits externes relevés le 06/10/2026 sur les pages de la Mauritius Revenue
// Authority, du Data Protection Office, de la Bank of Mauritius, du HRDC, de
// Statistics Mauritius, de DataReportal, de Peach Payments et de MIPS.
// Maurice ne fait pas partie de l'OHADA : la clé 'ohada' est absente.
// Devise des devis : l'euro. Aucun prix de Richard n'est chiffré.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Site, facture et paiement pour une société mauricienne : anglais et français, MCB Juice, e-facture de la MRA, registre du Data Protection Office',
    'title'   => 'Développeur web et digital pour Maurice | Richard SALANON',
    'meta'    => 'Richard SALANON suit à distance les entreprises mauriciennes : sites, applications, IA, Odoo et formations, avec MCB Juice, la MRA et un devis en euros.',
    'en_bref' => 'Richard SALANON accompagne à distance les entreprises de Maurice : hôtels et agences de voyage, sociétés de services financiers, exportateurs, centres d\'appels et pêcheries. Il construit sites, applications, automatisations, assistants WhatsApp et déploiements Odoo, les raccorde à MCB Juice, aux cartes et aux portefeuilles mobiles, et forme les équipes. Richard travaille en français comme en anglais, et l\'île a trois heures d\'avance sur Cotonou. Le devis se calcule en euros, après un premier échange.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => ['v' => 'Port-Louis', 'source' => 'https://axl.cefan.ulaval.ca/afrique/maurice.htm', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Port-Louis', 'Beau Bassin-Rose Hill', 'Vacoas-Phoenix', 'Curepipe', 'Quatre Bornes'], 'source' => 'https://statsmauritius.govmu.org/Documents/Census_and_Surveys/Census2022/HPC_Vol3_Geo_Migration_Yr22_%20120126.pdf', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'UTC+4, heure de Maurice : trois heures de plus qu\'à Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+230', 'source' => 'https://itu.int/itudoc/itu-t/ob-lists/icc/e164.pdf', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Anglais (langue des lois, des tribunaux et de l\'Assemblée nationale)', 'français', 'créole mauricien'], 'source' => 'https://axl.cefan.ulaval.ca/afrique/maurice.htm', 'date' => '2026-10-06'],
        'population' => ['v' => '1 240 316 habitants au 1er juillet 2026 (République de Maurice)', 'source' => 'https://statsmauritius.govmu.org/Pages/Statistics/ESI/Population/Pop_Vital_Jan-Jun26.aspx', 'date' => '2026-10-06'],
        'internet' => ['v' => '1,01 million d\'internautes en octobre 2025, soit 79,5 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-mauritius', 'date' => '2026-10-06'],
        'mobile' => ['v' => '2,25 millions de connexions mobiles fin 2025, soit 178 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-mauritius', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'MCB Juice : plus de 420 000 abonnés et plus de 7 millions de transactions par mois, selon Peach Payments', 'source' => 'https://www.peachpayments.com/mcb-juice', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Tourisme', 'services financiers et services aux entreprises', 'industrie manufacturière dont le textile', 'TIC et externalisation de processus', 'produits de la mer'], 'source' => 'https://www.trade.gov/country-commercial-guides/mauritius-market-overview', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Roupie mauricienne (MUR)', 'source' => 'https://www.bom.mu', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['my.t money (Mauritius Telecom)', 'blink by Emtel'], 'source' => 'https://www.peachpayments.com/pay-with/blink-by-emtel/', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['MIPS', 'Peach Payments'], 'source' => 'https://www.mips.mu', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Data Protection Act 2017, avec des règlements complémentaires publiés en 2026', 'source' => 'https://dataprotection.govmu.org/Documents/DPA_2017.pdf', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Data Protection Office (DPO), qui tient le registre des responsables de traitement et des sous-traitants', 'source' => 'https://dataprotection.govmu.org/Documents/DPA_2017.pdf', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'MRA e-Invoicing System : obligation par paliers de chiffre d\'affaires, 40 millions de roupies depuis le 1er septembre 2026', 'source' => 'https://www.mra.mu/index.php/e-invoicing', 'date' => '2026-10-06'],
        'tva' => ['v' => 'TVA de 15 % sur les services numériques de fournisseurs étrangers depuis le 1er janvier 2026 (section 14A de la loi sur la TVA)', 'source' => 'https://www.mra.mu/eservices1/vat-eservices/vat-on-digital-or-electronic-services-from-foreign-suppliers', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Electronic Transactions Act 2000, modifiée en juin 2026 pour les signatures électroniques et les documents électroniques négociables', 'source' => 'https://www.dlapiperafrica.com/en/mauritius/insights/2026/Electronic-Transactions-Act', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Remboursement par le HRDC, financé par la contribution des employeurs ; jusqu\'à 90 % des frais pour les cours centrés sur l\'IA', 'source' => 'https://www.hrdc.mu', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => '3 heures de plus à Maurice (UTC+4 contre UTC+1)'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que dit le numérique mauricien de 2026, et que change-t-il pour un projet ?',
            'paragraphes' => [
                'Le numérique mauricien repose sur un taux d\'équipement très élevé. Selon le rapport <a href="https://datareportal.com/reports/digital-2026-mauritius">Digital 2026 de DataReportal</a>, le pays comptait 1,01 million d\'internautes en octobre 2025, soit 79,5 % de la population, et 2,25 millions de connexions mobiles fin 2025, soit 178 % de la population : presque chaque habitant possède plus d\'une carte SIM. Le même rapport recense 886 000 identités de réseaux sociaux et 630 000 utilisateurs de LinkedIn, ce qui place les relations professionnelles en ligne au coeur de la prospection des entreprises.',
                'Un point mérite l\'attention : toujours selon DataReportal, le nombre d\'internautes a légèrement reculé entre octobre 2024 et octobre 2025 (moins 2 374 personnes, soit moins 0,2 %). L\'audience en ligne n\'augmente donc plus. Pour un projet, cela déplace l\'enjeu : il ne s\'agit plus de conquérir de nouveaux internautes, mais de mieux servir ceux qui sont déjà en ligne, avec un parcours d\'achat plus court, un site rapide sur téléphone et des messages envoyés au bon canal.',
                'Le tourisme donne la mesure de ce qu\'un site doit savoir faire. L\'île a reçu 1 436 250 touristes en 2025, soit 3,9 % de plus qu\'en 2024, d\'après le <a href="https://atta.travel/resource/mauritius-records-3-9-rise-in-2025-tourist-arrivals.html">communiqué du 13 janvier 2026 repris par l\'ATTA</a>. Ces visiteurs réservent, comparent et paient depuis l\'étranger, en plusieurs langues. Un hôtel, une agence ou un loueur mauricien qui veut leur vendre en direct a besoin d\'un site bilingue au minimum, d\'un moteur de réservation et d\'un paiement par carte sans friction.',
                'L\'économie ne se résume pas aux touristes. L\'économie mauricienne mêle des services financiers et aux entreprises, l\'externalisation de processus, l\'industrie, dont le textile, et des exportations de produits de la mer. Chacun a des besoins différents, mais tous partagent une contrainte mauricienne : les clients lisent l\'anglais et le français, les textes officiels sont en anglais, et les procédures fiscales et de données personnelles ont évolué en 2026.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels faits clés retenir sur Maurice avant de lancer un projet ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment encaisser un client mauricien : MCB Juice, QR code ou carte ?',
            'paragraphes' => [
                'Le portefeuille de référence est MCB Juice. <a href="https://www.peachpayments.com/mcb-juice">Peach Payments</a> annonce plus de 420 000 abonnés et plus de 7 millions de transactions par mois, avec une authentification par biométrie ou code PIN. Mauritius Telecom propose <a href="https://www.myt.mu">my.t money</a>, qui sert aux factures, aux virements et aux paiements par QR code chez les commerçants, et Emtel propose blink by Emtel, qui débite directement le compte bancaire du client sans carte. Un site qui n\'accepte que la carte laisse donc de côté une partie de ses clients locaux.',
                'La Bank of Mauritius a lancé MauCAS, une solution de paiement par QR code que le client scanne depuis n\'importe quel portefeuille numérique mauricien. Sur le <a href="https://www.bom.mu">site de la banque centrale</a>, MauCAS figure parmi les systèmes de paiement mis en avant, aux côtés des systèmes de compensation et de règlement MACSS et PLACH. Pour un commerçant, l\'avantage est concret : un seul code, quel que soit le portefeuille du client, et un montant prérempli qui évite les erreurs de saisie.',
                'Deux passerelles couvrent ces moyens de paiement. MIPS, plateforme basée à Maurice, accepte les cartes, les portefeuilles mobiles et les codes QR, et se raccorde à PrestaShop, WooCommerce, Shopify, Magento ou à une application sur mesure par API. Peach Payments regroupe MCB Juice, blink by Emtel, MauCAS QR et les cartes dans une seule intégration. Son offre pour PME est affichée à 1,50 % plus 3,50 roupies par transaction, selon sa page MCB Juice consultée le 6 octobre 2026 ; l\'offre entreprise dépend du volume.',
                'L\'intégration suit toujours la même route : choix de la passerelle selon le volume et les moyens souhaités, ouverture du compte marchand avec les pièces de la société, branchement en mode test, puis rapprochement automatique de chaque paiement avec sa commande ou sa facture. Les clients venus de l\'étranger paient par carte ; les résidents préfèrent souvent le portefeuille. Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif des agrégateurs de paiement</a> montre la méthode de comparaison d\'un agrégateur, applicable à Maurice.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique à Maurice ?',
            'paragraphes' => [
                'Les données personnelles relèvent du Data Protection Act 2017 et du Data Protection Office. L\'article 14 interdit d\'agir comme responsable de traitement ou comme sous-traitant sans être enregistré auprès du Commissaire ; l\'article 15 liste ce que le dossier doit décrire : les données traitées, les personnes concernées, la finalité, les destinataires et les pays vers lesquels des données peuvent être transférées. Le site du <a href="https://dataprotection.govmu.org/Pages/Controllers%20and%20Processors/Registration.aspx">Data Protection Office</a> regroupe les démarches de demande, de modification et de renouvellement de l\'enregistrement.',
                'Deux règles pèsent sur la conception. L\'article 25 impose de notifier au Commissaire une violation de données sans retard et, si possible, dans les 72 heures, et oblige le sous-traitant à prévenir aussitôt le responsable. L\'article 36 encadre le transfert de données hors de Maurice : preuve de garanties appropriées fournie au Commissaire, consentement explicite de la personne après information sur les risques, ou l\'un des cas de nécessité que la loi énumère (exécution d\'un contrat, intérêt public, défense d\'un droit en justice). Un prestataire installé à Cotonou qui administre une base mauricienne est un transfert : il se prévoit dans le contrat.',
                'Une nouveauté de 2026 concerne les entreprises qui doivent désigner un délégué à la protection des données. Selon le cabinet <a href="https://www.ensafrica.com/news/detail/12066/the-new-dpo-regulations-five-things-mauritian">ENS Africa</a>, les règlements de 2026 sur la désignation de ces délégués s\'appliquent à compter du 1er janvier 2027 : le délégué est choisi parmi le personnel, certifié par le Data Protection Office ou par un organisme agréé, et rend compte à la direction.',
                'La facturation est le chantier fiscal du moment. La Mauritius Revenue Authority déploie son <a href="https://www.mra.mu/index.php/e-invoicing">système de facturation électronique</a> par paliers de chiffre d\'affaires : 100 millions de roupies pour le grand contribuable depuis le 15 mai 2024, puis 100 millions le 1er août 2025, 80 millions le 30 juin 2026 et 40 millions le 1er septembre 2026 pour les moyennes et petites entreprises. Les éditeurs de logiciels de facturation doivent enregistrer, tester et auto-certifier leur système sur le portail de la MRA, qui délivre un identifiant à chaque système enregistré. Une application de facturation sur mesure se pense donc avec ce circuit.',
                'Reste la TVA. Depuis le 1er janvier 2026, la section 14A de la loi sur la TVA taxe à 15 % les services numériques ou électroniques fournis à des personnes situées à Maurice par des fournisseurs étrangers, qui doivent s\'immatriculer quel que soit leur chiffre d\'affaires, selon la <a href="https://www.mra.mu/eservices1/vat-eservices/vat-on-digital-or-electronic-services-from-foreign-suppliers">page de la MRA</a>. Le champ exact dépend de la prestation (hébergement, logiciel en ligne, abonnement) : il se confirme avec l\'administration fiscale avant la signature.',
                'Côté commerce électronique, l\'<a href="https://www.dlapiperafrica.com/en/mauritius/insights/2026/Electronic-Transactions-Act">Electronic Transactions Act</a> a été modifiée en juin 2026 : une signature électronique est valable si la méthode identifie le signataire et indique son intention de signer, sans certification obligatoire, et l\'effet juridique d\'une signature ne se juge pas seulement d\'après le lieu où elle est créée ou où se trouvent les systèmes qui la supportent. Un contrat peut donc se signer en ligne avec un outil courant. Maurice n\'étant pas membre de l\'OHADA, le SYSCOHADA n\'y est pas applicable.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel service pour quel besoin d\'une entreprise mauricienne ?',
            'legende' => 'Situations rencontrées par les entreprises de l\'île et service qui y répond ; le devis, en euros, fixe le périmètre exact.',
            'entetes' => ['Situation d\'une entreprise mauricienne', 'Service', 'Page'],
            'lignes'  => [
                ['Un hôtel ou une maison d\'hôtes veut vendre en direct, en français et en anglais, sans commission d\'intermédiaire', 'Système de réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Système de réservation en ligne</a>'],
                ['Un commerçant veut accepter MCB Juice, MauCAS QR et la carte sur sa boutique', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Une société de services doit se présenter avec sérieux auprès de clients européens et africains', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Un cabinet de gestion veut un espace sécurisé pour échanger des documents avec ses clients', 'SaaS et espace client', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Un centre de relation client veut répondre sur WhatsApp, en français et en anglais, sans embaucher', 'Agents IA et chatbots WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Un exportateur veut relier commandes, stock et facturation dans un même outil', 'Intégration d\'Odoo', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Une PME veut un circuit de facturation compatible avec la facturation électronique de la MRA', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Une équipe saisit les mêmes données dans trois outils et veut supprimer les ressaisies', 'Automatisation avec l\'IA', '<a href="/services/automatisation-ia">Automatisation avec l\'IA</a>'],
                ['Une entreprise veut brancher son site sur MIPS ou Peach Payments et sur son logiciel de gestion', 'API REST et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Un site existant est lent, mal référencé ou difficile à faire évoluer', 'Refonte et migration de site', '<a href="/services/refonte-migration-de-site">Refonte et migration de site</a>'],
                ['Un dirigeant veut une feuille de route avant d\'engager un budget', 'Consultant en digitalisation', '<a href="/services/consultant-digitalisation">Consultant en digitalisation</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Que change un projet numérique pour un hôtel, un cabinet financier, un atelier textile ou une pêcherie ?',
            'items' => [
                ['secteur' => 'Tourisme : hôtels, maisons d\'hôtes, loueurs et agences', 'probleme' => 'Les réservations passent par des plateformes qui prélèvent une commission, alors que le visiteur arrive en ayant déjà choisi son établissement sur Internet.', 'solution' => 'Un site bilingue avec calendrier de disponibilités, tarifs par saison, paiement par carte pour les étrangers et par MCB Juice ou MauCAS QR pour les résidents, et un message WhatsApp de confirmation. Le référencement local sur Google fait venir les recherches « hôtel à Grand Baie » ou « location à Flic en Flac » vers le site plutôt que vers un intermédiaire.'],
                ['secteur' => 'Services financiers et assurance', 'probleme' => 'Les sociétés de gestion échangent pièces d\'identité, statuts et justificatifs par e-mail, avec un risque de fuite et une obligation d\'enregistrement et de notification imposée par le Data Protection Act.', 'solution' => 'Un espace client chiffré avec comptes nominatifs, droits par dossier, journal des consultations et dépôt de documents, hébergé selon les garanties prévues à l\'article 36. Le registre des traitements se construit en même temps que l\'outil, pas après.'],
                ['secteur' => 'Textile et industrie exportatrice', 'probleme' => 'Les commandes des clients européens arrivent par e-mail, le stock et la production se suivent sur tableur, et la facture part tardivement, alors que la facturation électronique de la MRA s\'étend aux entreprises plus petites.', 'solution' => 'Un déploiement Odoo par paliers : ventes, achats et stock d\'abord, puis fabrication et facturation, avec un connecteur qui relie la facture au circuit de la MRA. Les montants se tiennent en roupies et en euros, la devise des clients européens.'],
                ['secteur' => 'Services TIC et externalisation de processus', 'probleme' => 'Un centre d\'appels ou de gestion de dossiers reçoit les mêmes questions en français et en anglais, aux mêmes heures, et ses conseillers y répondent à la main.', 'solution' => 'Un assistant IA sur WhatsApp et sur le site, qui répond aux questions courantes dans la langue du client, transmet à un conseiller les dossiers sensibles et enregistre l\'échange dans l\'outil de suivi. Les conseillers gardent les cas qui demandent du jugement.'],
                ['secteur' => 'Produits de la mer', 'probleme' => 'Les lots de poisson transformé sont suivis sur des feuilles papier, et les acheteurs étrangers demandent une traçabilité que le tableur ne tient pas.', 'solution' => 'Une application web de suivi des lots, de la réception au port jusqu\'à la livraison, avec dates, températures saisies sur téléphone et documents d\'export générés en français ou en anglais. Elle se relie ensuite à la facturation et au stock.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes mauriciennes, et comment financer la formation ?',
            'paragraphes' => [
                'Richard peut former les équipes mauriciennes en visioconférence, par séances courtes sur leurs propres outils et leurs propres fichiers : un groupe de six personnes d\'un hôtel n\'a pas les mêmes besoins qu\'une équipe de comptables de Port-Louis. Les supports sont en français, et les exercices peuvent utiliser des documents en anglais, puisque beaucoup de textes officiels et de contrats mauriciens le sont. Le catalogue complet figure sur la <a href="/formations/">page des formations</a>.',
                'Pour les équipes qui utilisent l\'intelligence artificielle au quotidien, la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a> couvre la rédaction, la synthèse et l\'analyse sur des documents, et <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> relie ces usages au Data Protection Act. Les dirigeants suivent plutôt <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>. Pour automatiser les tâches répétitives, <a href="/formations/n8n">n8n de zéro à l\'autonomie</a> mène aux premiers flux seul, et <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> s\'adresse aux commerçants et aux hôteliers.',
                'Pour la gestion, <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> prépare chaque poste à l\'outil déployé, <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a> fiabilise les tableaux de suivi, et <a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a> convient aux petites structures. Les commerçants en ligne peuvent y ajouter <a href="/formations/e-commerce">Vendre en ligne</a>, et les professions précises ont leur parcours : <a href="/formations/metier/hotellerie-restauration">hôtellerie et restauration</a>, <a href="/formations/metier/experts-comptables">experts-comptables</a> ou <a href="/formations/metier/commercants-e-commercants">commerçants</a>.',
                'Le financement passe par le Human Resource Development Council. Selon le <a href="https://www.hrdc.mu">site du HRDC</a>, créé par la loi de 2003 sur le développement des ressources humaines, un système de subventions de formation, alimenté par la contribution des employeurs, rembourse une partie des frais de formation, et les employeurs qui cotisent peuvent obtenir jusqu\'à 90 % de remboursement pour les cours centrés sur l\'intelligence artificielle. Le site précise que ce taux vise les cours d\'IA jusqu\'au niveau diplôme ; les conditions détaillées se trouvent sur le portail de subvention du HRDC : vérifiez avec lui l\'éligibilité du cours avant de vous inscrire.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Maurice est à UTC+4 et Cotonou à UTC+1 : l\'île a trois heures d\'avance. Richard publie des horaires de 7 h à 20 h, heure de Cotonou, ce qui correspond de 10 h à 23 h à Maurice. Les administrations mauriciennes, comme la MRA, travaillent du lundi au vendredi aux heures de bureau de Maurice : une réunion avec un fonctionnaire ou un banquier se cale en début d\'après-midi à Maurice, qui tombe en fin de matinée à Cotonou, dans les horaires de Richard. Les horaires exacts de chaque service se confirment auprès de lui.',
                'La langue de travail est le français, que parlent la plupart des Mauriciens, ou l\'anglais, que Richard pratique aussi. Les cahiers des charges, les maquettes et la documentation se rédigent dans la langue de l\'équipe qui les utilisera. Les interfaces s\'écrivent en français et en anglais ; un contenu en créole mauricien se prévoit au cadrage si la clientèle le demande, avec un relecteur local.',
                'La facturation se fait en euros. Un devis détaille le périmètre, les étapes et la durée, et se règle par virement ou carte, les moyens que les clients hors d\'Afrique utilisent. Le suivi peut passer par WhatsApp pour les questions rapides, par la visioconférence pour les points d\'étape, et par un espace partagé où chaque version livrée est consultable. Les accès (hébergement, dépôt de code, domaine) peuvent être ouverts au nom de l\'entreprise. Le premier échange, le cadrage et le devis sont gratuits.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet numérique pour une entreprise de Maurice ?',
            'intro'      => 'Le prix est établi sur devis, en euros, après le cadrage. Il dépend du périmètre et des contraintes propres à Maurice plus que du nombre de pages. Les frais des passerelles de paiement, les abonnements et les licences éventuelles se paient à leurs éditeurs, en plus de la prestation. La prestation se règle par virement, carte bancaire ou PayPal.',
            'items'      => [
                ['offre' => 'Site ou boutique en ligne', 'prix' => 'Sur devis, en euros', 'inclus' => ['Contenu rédigé en deux langues', 'Raccordement à MIPS ou à Peach Payments', 'Référencement local de base', 'Formation à la mise à jour']],
                ['offre' => 'Application ou espace client sur mesure', 'prix' => 'Sur devis, en euros', 'inclus' => ['Comptes, droits et journal des actions', 'Prise en compte du Data Protection Act', 'Documentation et code à votre nom', 'Recette sur vos données']],
                ['offre' => 'Déploiement Odoo ou facturation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Cadrage sur une opération réelle', 'Paliers avec formation par métier', 'Circuit de facturation compatible avec la MRA', 'Support et montées de version']],
                ['offre' => 'Assistant IA ou automatisation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Réponses en français et en anglais', 'Transmission aux conseillers', 'Journal des échanges', 'Réglage après les premières semaines']],
            ],
            'variations' => [
                'Le nombre de langues du contenu : français et anglais doublent la rédaction et les tests, et le créole s\'y ajoute à la demande.',
                'Les moyens de paiement : une seule passerelle, ou MCB Juice, MauCAS QR, blink et cartes ensemble.',
                'La facturation électronique de la MRA, selon le seuil de chiffre d\'affaires de l\'entreprise et son logiciel actuel.',
                'Le niveau de protection des données : enregistrement, garanties de transfert, notification de violation.',
                'Le volume et l\'état des données à reprendre depuis les tableurs ou l\'ancien logiciel.',
                'Le nombre de personnes à former, de séances et d\'outils à enseigner.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs fréquentes éviter pour un projet à Maurice ?',
            'intro' => 'Ces erreurs reviennent dans les projets d\'entreprises installées sur une île où les clients, les textes et les administrations passent d\'une langue à l\'autre. Presque toutes se corrigent au cadrage.',
            'items' => [
                ['titre' => 'Ne publier qu\'en français ou qu\'en anglais', 'texte' => 'Les textes officiels sont en anglais, la conversation courante en créole et en français, et les touristes viennent de nombreux pays. Un site monolingue perd une partie de ses lecteurs ; prévoyez au moins deux langues dès la maquette.'],
                ['titre' => 'Accepter seulement la carte bancaire', 'texte' => 'Les résidents disposent de portefeuilles comme MCB Juice, my.t money ou blink by Emtel, et du QR code MauCAS. Ne proposer que la carte écarte les clients qui préfèrent leur téléphone.'],
                ['titre' => 'Oublier l\'enregistrement auprès du Data Protection Office', 'texte' => 'La loi interdit d\'agir comme responsable de traitement ou comme sous-traitant sans être enregistré. Un site qui collecte des formulaires, des réservations ou des paiements traite des données personnelles : l\'inscription se prépare avant la mise en ligne.'],
                ['titre' => 'Découvrir trop tard l\'obligation de facturation électronique', 'texte' => 'Le seuil de la MRA est passé à 40 millions de roupies le 1er septembre 2026. Une entreprise qui s\'approche de ce chiffre doit choisir un logiciel de facturation certifié avant l\'échéance, pas après.'],
                ['titre' => 'Héberger les données sans regarder l\'article 36', 'texte' => 'Une base hébergée à l\'étranger, ou administrée depuis un autre pays, suppose des garanties ou un consentement explicite. Précisez dans le contrat où se trouvent les données et qui y accède.'],
                ['titre' => 'Négliger la TVA des services numériques étrangers', 'texte' => 'Depuis le 1er janvier 2026, certains services numériques achetés à l\'étranger sont taxés à 15 %. Vérifiez avec la MRA si l\'hébergement ou l\'abonnement que vous commandez en relève, pour éviter une facture surprise.'],
                ['titre' => 'Choisir un outil sans penser à la saison haute', 'texte' => 'Un hôtel ou un loueur reçoit l\'essentiel de ses réservations sur quelques mois. Le site doit absorber ces pics, et les messages automatiques doivent continuer à fonctionner sans personne devant l\'écran.'],
                ['titre' => 'Former tout le monde de la même façon', 'texte' => 'La réceptionniste, le comptable et le directeur n\'utilisent pas les mêmes écrans. Une formation par poste, sur les vraies données, et un référent interne font plus pour l\'adoption que n\'importe quel réglage.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre projet mauricien à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut accompagner à distance les entreprises à Maurice. Son bagage : plus de six ans dans le numérique, EPITECH en 2022, plus de 50 projets livrés. Sa production propre l\'a aussi formé au terrain : <a href="https://wapy.pro">Wapy</a>, son assistant WhatsApp à IA, et <a href="https://audyxa.com">Audyxa</a>, dont il est co-fondateur. Brancher un site sur MIPS ou Peach Payments, un assistant sur WhatsApp ou un ERP sur la comptabilité relève de son métier de développeur.',
                'Pour un projet mauricien, la méthode proposée repose sur un cadrage fondé sur vos opérations, une livraison par paliers, des accès et un code à votre nom, et un échange en français ou en anglais. Plus de 200 personnes ont déjà suivi ses formations au numérique. Ses projets livrés sont présentés sur la page <a href="/realisations/">réalisations</a>, et son parcours sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Un site, un outil ou une formation à lancer à Maurice ?',
            'texte'  => 'Indiquez votre secteur, vos langues de travail et ce qui vous bloque : paiement par MCB Juice, facture à envoyer à la MRA, données de vos clients. Une réponse part sous 24 heures, puis un devis détaillé en euros après un premier échange sans frais.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Une entreprise mauricienne peut-elle confier son projet à Richard SALANON ?', 'r' => 'Oui, à distance, du cadrage à la formation, en français ou en anglais. Hôtels, sociétés de services, exportateurs, centres d\'appels et pêcheries font partie des cas décrits sur cette page. Le premier échange, le cadrage et le devis ne coûtent rien.'],
        ['q' => 'Quelle devise utilise le devis pour une entreprise mauricienne ?', 'r' => 'Le devis est établi en euros. La roupie mauricienne reste la monnaie des ventes locales, et un site ou un outil de gestion peut afficher les prix en roupies, en euros ou dans les deux devises, selon la clientèle. Le règlement de la prestation se fait par virement, carte bancaire ou PayPal.'],
        ['q' => 'Quels moyens de paiement mauriciens un site peut-il accepter ?', 'r' => 'Les cartes bancaires, MCB Juice, my.t money, blink by Emtel et les codes QR MauCAS, selon la passerelle choisie. MIPS et Peach Payments proposent ces moyens dans une intégration unique. L\'offre PME de Peach était affichée à 1,50 % plus 3,50 roupies par transaction le 6 octobre 2026 ; vérifiez les tarifs au moment de signer.'],
        ['q' => 'Faut-il enregistrer son site auprès du Data Protection Office ?', 'r' => 'Oui, si l\'entreprise agit comme responsable de traitement ou comme sous-traitant. L\'article 14 du Data Protection Act 2017 interdit de le faire sans enregistrement auprès du Commissaire, et le Data Protection Office regroupe les démarches d\'enregistrement et de renouvellement. Un formulaire de contact ou de réservation suffit à créer un traitement de données personnelles.'],
        ['q' => 'Que faire en cas de fuite de données à Maurice ?', 'r' => 'Le responsable de traitement notifie la violation au Commissaire sans retard et, si possible, dans les 72 heures après en avoir pris connaissance (article 25). Le sous-traitant prévient le responsable aussitôt. Un journal des accès et une procédure écrite, prévus dès la conception, rendent cette notification possible dans le délai.'],
        ['q' => 'Mon entreprise doit-elle passer à la facturation électronique de la MRA ?', 'r' => 'Cela dépend de son chiffre d\'affaires. Selon la MRA, le palier le plus récent concerne depuis le 1er septembre 2026 les moyennes et petites entreprises dont le chiffre d\'affaires dépasse 40 millions de roupies, et le directeur général peut aussi notifier un contribuable individuellement. Confirmez votre situation auprès de la MRA.'],
        ['q' => 'La TVA de 15 % sur les services numériques concerne-t-elle ma commande ?', 'r' => 'Depuis le 1er janvier 2026, les services numériques ou électroniques fournis à Maurice par des fournisseurs étrangers sont taxés à 15 %, et ces fournisseurs doivent s\'immatriculer à la MRA. Le champ exact dépend du service (hébergement, logiciel en ligne, abonnement). Demandez à l\'administration fiscale si votre commande entre dans ce cadre.'],
        ['q' => 'Une signature électronique a-t-elle une valeur juridique à Maurice ?', 'r' => 'Oui. L\'Electronic Transactions Act, modifiée en juin 2026, retient une signature électronique quand la méthode identifie le signataire et indique son intention de signer, de façon fiable selon les circonstances. Une certification n\'est plus exigée dans tous les cas. Pour un acte précis, un avocat mauricien confirme la forme à utiliser.'],
        ['q' => 'La formation peut-elle être financée par le HRDC ?', 'r' => 'Le Human Resource Development Council rembourse une partie des frais de formation aux employeurs qui cotisent, et jusqu\'à 90 % pour les cours centrés sur l\'IA, selon son site. Contactez le HRDC avant l\'inscription pour savoir si la formation retenue est éligible.'],
        ['q' => 'Les échanges peuvent-ils se faire en anglais ?', 'r' => 'Oui. Richard travaille en français et en anglais, et les documents d\'un projet mauricien se rédigent dans la langue de l\'équipe qui les utilise. Les textes officiels de Maurice sont en anglais ; la page reste en français, avec le nom officiel et sa traduction quand c\'est utile.'],
        ['q' => 'Le décalage horaire gêne-t-il le travail à distance ?', 'r' => 'Peu. Maurice a trois heures d\'avance sur Cotonou. Les horaires de Richard, de 7 h à 20 h à Cotonou, couvrent de 10 h à 23 h à Maurice, ce qui laisse de longues plages communes avec les heures de bureau des administrations mauriciennes, du lundi au vendredi.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Mauritius (internautes, connexions mobiles, réseaux sociaux)', 'url' => 'https://datareportal.com/reports/digital-2026-mauritius', 'date' => '2026-10-06'],
        ['titre' => 'Statistics Mauritius, population et statistiques vitales, janvier à juin 2026', 'url' => 'https://statsmauritius.govmu.org/Pages/Statistics/ESI/Population/Pop_Vital_Jan-Jun26.aspx', 'date' => '2026-10-06'],
        ['titre' => 'Statistics Mauritius, recensement 2022, volume 3 (villes de la République)', 'url' => 'https://statsmauritius.govmu.org/Documents/Census_and_Surveys/Census2022/HPC_Vol3_Geo_Migration_Yr22_%20120126.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ATTA, arrivées de touristes à Maurice en 2025 (communiqué du 13 janvier 2026)', 'url' => 'https://atta.travel/resource/mauritius-records-3-9-rise-in-2025-tourist-arrivals.html', 'date' => '2026-10-06'],
        ['titre' => 'International Trade Administration, Mauritius Country Commercial Guide (secteurs)', 'url' => 'https://www.trade.gov/country-commercial-guides/mauritius-market-overview', 'date' => '2026-10-06'],
        ['titre' => 'Base IANA des fuseaux horaires, fichier Afrique (Indian/Mauritius, UTC+4)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
        ['titre' => 'UIT, liste des indicatifs téléphoniques (E.164)', 'url' => 'https://itu.int/itudoc/itu-t/ob-lists/icc/e164.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Bank of Mauritius, roupie, systèmes de paiement et MauCAS', 'url' => 'https://www.bom.mu', 'date' => '2026-10-06'],
        ['titre' => 'Peach Payments, MCB Juice à Maurice', 'url' => 'https://www.peachpayments.com/mcb-juice', 'date' => '2026-10-06'],
        ['titre' => 'Peach Payments, blink by Emtel', 'url' => 'https://www.peachpayments.com/pay-with/blink-by-emtel/', 'date' => '2026-10-06'],
        ['titre' => 'Peach Payments, MauCAS QR', 'url' => 'https://www.peachpayments.com/pay-with/maucas/', 'date' => '2026-10-06'],
        ['titre' => 'MIPS, Mauritius Internet Payment Solutions', 'url' => 'https://www.mips.mu', 'date' => '2026-10-06'],
        ['titre' => 'Mauritius Telecom, my.t money', 'url' => 'https://www.myt.mu', 'date' => '2026-10-06'],
        ['titre' => 'Data Protection Office, autorité de protection des données de Maurice', 'url' => 'https://dataprotection.govmu.org', 'date' => '2026-10-06'],
        ['titre' => 'Data Protection Office, Data Protection Act 2017, texte de la loi (articles 14, 15, 25 et 36)', 'url' => 'https://dataprotection.govmu.org/Documents/DPA_2017.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ENS Africa, les règlements de 2026 sur les délégués à la protection des données', 'url' => 'https://www.ensafrica.com/news/detail/12066/the-new-dpo-regulations-five-things-mauritian', 'date' => '2026-10-06'],
        ['titre' => 'Mauritius Revenue Authority, système de facturation électronique', 'url' => 'https://www.mra.mu/index.php/e-invoicing', 'date' => '2026-10-06'],
        ['titre' => 'Mauritius Revenue Authority, TVA sur les services numériques des fournisseurs étrangers', 'url' => 'https://www.mra.mu/eservices1/vat-eservices/vat-on-digital-or-electronic-services-from-foreign-suppliers', 'date' => '2026-10-06'],
        ['titre' => 'DLA Piper Africa, réforme de l\'Electronic Transactions Act (juin 2026)', 'url' => 'https://www.dlapiperafrica.com/en/mauritius/insights/2026/Electronic-Transactions-Act', 'date' => '2026-10-06'],
        ['titre' => 'Human Resource Development Council, système de subventions de formation', 'url' => 'https://www.hrdc.mu', 'date' => '2026-10-06'],
        ['titre' => 'Aménagement linguistique dans le monde, Maurice', 'url' => 'https://axl.cefan.ulaval.ca/afrique/maurice.htm', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'systeme-de-reservation-en-ligne', 'saas-espace-client', 'agents-ia-chatbot-whatsapp', 'integration-odoo', 'application-web-sur-mesure', 'automatisation-ia', 'api-rest-integrations'],
        'formations'  => ['ia-en-entreprise', 'ia-ethique-conformite', 'n8n', 'whatsapp-business', 'odoo-utilisateurs'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
        'metiers'     => ['hotellerie-restauration', 'experts-comptables', 'commercants-e-commercants'],
    ],

];
