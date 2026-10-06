<?php
// ============================================================
// data/pays/gabon.php · Page pays « Gabon » (vague 1D).
// Richard a déjà travaillé avec des entreprises au Gabon ; aucun projet du
// portfolio n'y est situé (renvoi neutre vers /realisations/).
// Faits relevés le 2026-10-06 : Journal officiel du 15 juillet 2023 (loi
// n° 025/2023), APDPVP, DGI (TVA), loi de finances 2026 (loi n° 041/2025),
// DataReportal (Digital 2026), ARCEP via Gabonmediatime, SingPay, pawaPay,
// BEAC, Banque mondiale, Deloitte (SYSCOHADA).
// Clés de fiche absentes faute de texte confirmé : ecommerce, financement.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Digitalisation d’entreprise au Gabon : sites, applications, ERP et IA, payés en FCFA par Airtel Money et Moov Money, avec la facture électronique de la DGI',
    'title'   => 'Services numériques au Gabon, en FCFA | Richard SALANON',
    'meta'    => 'Sites, boutiques, Odoo, Dolibarr, WhatsApp et IA pour les entreprises du Gabon : Airtel Money, Moov Money, facture électronique DGI, devis en FCFA.',
    'en_bref' => 'Richard SALANON accompagne à distance les entreprises du Gabon : site et boutique en ligne payés par Airtel Money et Moov Money, application sur mesure, Odoo ou Dolibarr réglé pour le SYSCOHADA, la TVA à 18 % et la facture électronique normalisée de la DGI, automatisation, WhatsApp et IA. Il travaille en français depuis Cotonou, sans décalage horaire avec Libreville. Les devis sont établis en FCFA, après un cadrage gratuit, et la réponse arrive sous 24 heures.',
    'publie'  => '2026-10-29',
    'maj'     => '2026-10-29',

    'fiche' => [
        'capitale'  => ['v' => 'Libreville', 'source' => 'https://fr.wikipedia.org/wiki/Gabon', 'date' => '2026-10-06'],
        'villes'    => ['v' => ['Libreville (capitale)', 'Port-Gentil (centre économique)', 'Franceville'], 'source' => 'https://fr.wikipedia.org/wiki/Gabon', 'date' => '2026-10-06'],
        'fuseau'    => ['v' => 'UTC+1, le même que Cotonou : aucun décalage horaire', 'source' => 'https://fr.wikipedia.org/wiki/Gabon', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+241', 'source' => 'https://en.wikipedia.org/wiki/Telephone_numbers_in_Gabon', 'date' => '2026-10-06'],
        'langues'   => ['v' => ['Français (langue officielle)'], 'source' => 'https://fr.wikipedia.org/wiki/Gabon', 'date' => '2026-10-06'],
        'population' => ['v' => '2,61 millions d’habitants en octobre 2025, dont 91,6 % vivent en ville', 'source' => 'https://datareportal.com/reports/digital-2026-gabon', 'date' => '2026-10-06'],
        'internet'  => ['v' => '1,87 million d’internautes en octobre 2025, soit 71,9 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-gabon', 'date' => '2026-10-06'],
        'mobile'    => ['v' => '3,27 millions de connexions mobiles en octobre 2025, soit 126 % de la population, dont 88,9 % en haut débit', 'source' => 'https://datareportal.com/reports/digital-2026-gabon', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => '1,64 million de comptes actifs et 50,86 milliards de FCFA de chiffre d’affaires en 2024 pour Airtel Money et Moov Money', 'source' => 'https://gabonmediatime.com/gabon-le-mobile-money-franchit-le-cap-des-50-milliards-de-fcfa-de-chiffre-daffaires-en-2024/', 'date' => '2026-10-06'],
        'secteurs'  => ['v' => ['Pétrole', 'Manganèse', 'Bois', 'Services et construction'], 'source' => 'https://www.worldbank.org/en/country/gabon/overview', 'date' => '2026-10-06'],
        'devise'    => ['v' => 'Franc CFA (XAF), émis par la BEAC pour les six États de la CEMAC', 'source' => 'https://www.beac.int', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Airtel Money', 'Moov Money'], 'source' => 'https://gabonmediatime.com/gabon-le-mobile-money-franchit-le-cap-des-50-milliards-de-fcfa-de-chiffre-daffaires-en-2024/', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['SingPay', 'E-Billing', 'PVit'], 'source' => 'https://packagist.org/packages/maestrodimateo/simple-mobile-money', 'date' => '2026-10-06'],
        'donnees'   => ['v' => 'Loi n° 025/2023 du 12 juillet 2023, qui modifie la loi n° 001/2011 ; Journal officiel du 15 juillet 2023', 'source' => 'https://www.afapdp.org/wp-content/uploads/2023/12/Gabon-Loi-025-2023-du-12-juillet-2023-portant-modification-de-la-loi-001-2011-du-25-septembre-relative-a-la-protection-des-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-06'],
        'autorite'  => ['v' => 'APDPVP (Autorité pour la protection des données à caractère personnel et de la vie privée), qui a remplacé la CNPDCP', 'source' => 'https://gabonmediatime.com/gabon-cnpdcp-transformee-autorite-pour-protection-des-donnees-caractere-personnel-vie-privee/', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture électronique normalisée via la plateforme DIGITAX de la DGI, issue de la loi n° 041/2025 (loi de finances 2026) ; seules les factures conformes ouvrent droit à déduction depuis le 1er juillet 2026', 'source' => 'https://lookuptax.com/tax-changes/gabon/einvoicing-finance-law-2026', 'date' => '2026-10-06'],
        'tva'       => ['v' => '18 % au taux normal ; assujettissement dès 60 millions de FCFA de chiffre d’affaires annuel', 'source' => 'https://www.dgi.ga/index.php/professionnels/tva', 'date' => '2026-10-06'],
        'ohada'     => ['v' => 'Membre de l’OHADA, qui compte 17 États parties dont le Gabon', 'source' => 'https://www.ohada.org/les-etats-membres-de-lohada/', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun (UTC+1 des deux côtés)'],
        ['l' => 'Devis', 'v' => 'En FCFA'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique au Gabon, et qu’est-ce que cela change pour un projet ?',
            'paragraphes' => [
                'Selon <a href="https://datareportal.com/reports/digital-2026-gabon">DataReportal (Digital 2026)</a>, le Gabon comptait 2,61 millions d’habitants en octobre 2025, dont 91,6 % vivaient en ville. Le rapport dénombre 1,87 million d’internautes, soit 71,9 % de la population, et 3,27 millions de connexions mobiles, soit 126 % : il y a plus de cartes SIM actives que d’habitants, et 88,9 % de ces connexions sont en haut débit. Le débit médian en accès fixe est de 41,49 Mbit/s. Pour un projet, cela décrit un public presque entièrement urbain, déjà connecté, qui lit, commande et paie sur son téléphone.',
                'Ce public tient dans quelques villes. Libreville et Port-Gentil concentrent l’essentiel des clients, des sièges d’entreprise et des décisions d’achat ; Franceville et les villes de l’intérieur suivent de loin. Un site gabonais n’a donc pas besoin de prévoir vingt zones de livraison : il a besoin de deux ou trois, bien décrites, avec des tarifs et des délais lisibles. Le marché est étroit, ce qui change le calcul : on ne vise pas des volumes de trafic, on vise des demandes qualifiées, une réponse rapide et un suivi irréprochable de chaque client.',
                'Côté réseau, le marché mobile repose sur deux opérateurs. D’après l’<a href="https://gabonmediatime.com/gabon-31-millions-dabonnes-aux-services-mobiles-a-fin-mars-2025/">observatoire de l’ARCEP, repris par Gabonmediatime</a>, le pays comptait environ 3,18 millions d’abonnements mobiles fin mars 2025, répartis entre Moov Africa Gabon Télécom (51,12 %) et Airtel Gabon (48,88 %). Un partage aussi équilibré a une conséquence directe : un service qui n’accepte qu’un seul des deux opérateurs écarte la moitié du marché, et un message WhatsApp ou une page web doivent fonctionner chez les deux.',
                'Le cadre des télécoms va aussi bouger. Gabonmediatime rapporte, dans un <a href="https://gabonmediatime.com/gabon-les-licences-dexploitation-des-operateurs-de-telephonie-expirees-en-2027/">article du 29 mai 2026</a>, que les licences de Moov Africa Gabon Télécom et d’Airtel Gabon arrivent à échéance en juin 2027 et doivent être renouvelées pour dix ans auprès de l’ARCEP. Pour une entreprise, la leçon est pratique : on ne bâtit pas un service sur l’hypothèse qu’un tarif de données ou un forfait restera identique, et on garde les paiements et les notifications indépendants d’un seul opérateur.',
                'Un dernier point concerne l’hébergement. Un <a href="https://gabonmediatime.com/gabon-lancement-du-premier-data-center-le-30-juin/">article de Gabonmediatime</a> annonce l’ouverture, le 30 juin 2026, d’un premier centre de données conforme au niveau Tier III, exploité par ST Digital, destiné aux administrations, aux entreprises et aux citoyens, pour stocker localement des données jusque-là conservées à l’étranger. Pour un projet qui manipule des données de clients gabonais, la question « où sont-elles hébergées ? » a désormais une réponse locale possible, à comparer avec un hébergeur étranger au moment du cadrage.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les faits à connaître avant de lancer un projet numérique au Gabon ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer sur un site ou une application gabonaise ?',
            'paragraphes' => [
                'Deux services de mobile money se partagent le marché : Airtel Money et Moov Money. Selon les <a href="https://gabonmediatime.com/gabon-le-mobile-money-franchit-le-cap-des-50-milliards-de-fcfa-de-chiffre-daffaires-en-2024/">chiffres publiés par Gabonmediatime</a>, leur chiffre d’affaires cumulé a atteint 50,86 milliards de FCFA en 2024, contre 43,71 milliards en 2023, soit 16,4 % de plus, et le nombre de comptes actifs a atteint 1,64 million, en hausse de 21,6 %. L’<a href="https://osiris.sn/mobile-money-moov-et-airtel-enregistrent-1-4-million-de-comptes-actifs-en-2023.html">article d’Osiris de mai 2024</a> donnait 1,4 million de comptes actifs en 2023 : le service progresse vite, et un site marchand qui l’ignore perd des clients.',
                'Pour accepter ces paiements sans négocier deux contrats techniques, on passe par un agrégateur. <a href="https://singpay.ga">SingPay</a> annonce l’intégration d’Airtel Money, de Moov Money, d’EcobankPay et de PayPal, une API REST et un espace de test (sandbox). Selon sa page, les frais sont de 0 % pour les jeunes entreprises sous 25 millions de FCFA de transactions, de 2,5 % par transaction au-delà, et de 1,5 % pour les projets publics. Ces conditions sont celles de la page à la date de consultation, le 6 octobre 2026 ; elles se reconfirment avant tout engagement.',
                'Deux autres agrégateurs gabonais, E-Billing et PVit, sont réunis avec SingPay dans un <a href="https://packagist.org/packages/maestrodimateo/simple-mobile-money">paquet Laravel libre</a> qui ouvre une interface commune. Sa documentation décrit deux parcours de paiement, la redirection vers un portail hébergé et la demande de validation envoyée sur le téléphone (USSD), et précise qu’aucun des trois fournisseurs ne signe ses rappels automatiques. Ce détail commande l’architecture : avant de livrer ou d’activer un abonnement, le serveur interroge l’agrégateur pour confirmer l’état du paiement, au lieu de croire le message reçu.',
                'Un autre acteur, pawaPay, a annoncé son arrivée au Gabon dans un <a href="https://pawapay.io/blog/pawapay-live-in-gabon">billet du 12 août 2024</a>, avec Airtel, des encaissements et des décaissements, 1 % de frais sur les dépôts et 0 % sur les décaissements. Moov Africa était prévu pour une étape ultérieure : la couverture actuelle se vérifie sur le site du fournisseur avant de s’engager. Entre les quatre agrégateurs, le choix se fait sur la couverture des deux opérateurs, la fiabilité des retours automatiques, les frais, les délais de reversement et le support en cas de litige.',
                'La zone monétaire compte aussi. Le Gabon appartient à la CEMAC, dont la banque centrale est la <a href="https://www.beac.int">BEAC</a>, qui gère le franc CFA d’Afrique centrale (XAF) pour six États. Les paiements transfrontaliers de la zone s’appuient sur le GIMAC, dont la plateforme Gimacpay, selon <a href="https://osiris.sn/mobile-money-les-partenariats-entre-moov-airtel-et-institutions-financieres.html">Osiris</a>, relie les abonnés d’Airtel et de Moov à des transferts internationaux. La carte bancaire complète le dispositif pour la diaspora et les clients qui paient depuis l’étranger, et le virement convient aux factures professionnelles de montant élevé.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Gabon en 2026 ?',
            'paragraphes' => [
                'La première obligation touche aux données personnelles. La loi n° 025/2023 du 12 juillet 2023, publiée au <a href="https://www.afapdp.org/wp-content/uploads/2023/12/Gabon-Loi-025-2023-du-12-juillet-2023-portant-modification-de-la-loi-001-2011-du-25-septembre-relative-a-la-protection-des-donnees-a-caractere-personnel.pdf">Journal officiel du 15 juillet 2023</a>, modifie la loi n° 001/2011 du 25 septembre 2011. Elle confie le contrôle à l’Autorité pour la protection des données à caractère personnel et de la vie privée, l’APDPVP, qui a remplacé la CNPDCP : le <a href="https://gabonmediatime.com/gabon-cnpdcp-transformee-autorite-pour-protection-des-donnees-caractere-personnel-vie-privee/">Conseil des ministres du 1er février 2023</a> avait approuvé cette transformation. L’APDPVP a pour missions d’informer, de surveiller et de contrôler ou sanctionner, comme l’indique son <a href="https://www.apdpvp.ga">site officiel</a>.',
                'Les formalités changent selon le traitement. L’article 78 de la loi soumet les traitements automatisés de données à une déclaration auprès de l’APDPVP, qui délivre un récépissé ; l’article 80 prévoit des normes simplifiées pour les traitements courants peu risqués ; l’article 81 exige une autorisation préalable pour des catégories plus sensibles. Un site vitrine avec un formulaire de contact, une boutique qui conserve des adresses de livraison ou un ERP qui garde le fichier des salariés relèvent donc d’une déclaration, à déposer avant la mise en service et non après la première plainte.',
                'Le texte précise aussi plusieurs règles de conception. Selon l’article 104, l’inscription d’informations dans le terminal de l’internaute, ce que font les cookies, suppose une information claire sur la finalité et un accord préalable, qui peut résulter des paramètres de connexion. Selon les articles 119 et 123, un registre des traitements est tenu, sauf dans les organisations de moins de dix employés dont le traitement est occasionnel, non sensible et sans risque. L’article 125 impose un délégué à la protection des données dans certains cas. L’article 142 oblige à informer l’APDPVP, sans délai, de toute violation de données.',
                'L’hébergement est le point que les projets oublient le plus. Selon l’article 171, un responsable de traitement ne peut transférer des données personnelles vers un autre État que sur autorisation de l’APDPVP, qui publie la liste des États offrant un niveau de protection suffisant. Une boutique gabonaise dont la base est installée sur un serveur étranger, ou dont les sauvegardes partent chez un prestataire étranger, entre dans ce cadre. Les sanctions vont, selon la loi, de la suspension du récépissé à une amende de un million à cent millions de FCFA.',
                'Au même numéro du Journal officiel figure la loi n° 027/2023 du 12 juillet 2023 sur la cybersécurité et la lutte contre la cybercriminalité. Elle punit, par exemple, l’accès frauduleux à un système informatique de dix ans d’emprisonnement et d’une amende pouvant atteindre 100 millions de FCFA. Pour un projet, cela justifie des accès nominatifs, des mots de passe robustes, des sauvegardes testées et un journal des connexions : ce sont des protections que la loi sanctionne quand elles manquent, et que le cahier des charges écrit noir sur blanc.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La facture électronique est-elle obligatoire au Gabon, et que faut-il prévoir pour la TVA ?',
            'paragraphes' => [
                'Le Gabon a engagé le passage à la facture électronique normalisée. La loi n° 041/2025, loi de finances pour 2026, publiée au Journal officiel n° 96-quater du 30 décembre 2025, a introduit l’article P 832 ter du Code général des impôts, selon la <a href="https://lookuptax.com/tax-changes/gabon/einvoicing-finance-law-2026">synthèse de LookupTax</a>. Il vise toute personne soumise à l’impôt sur les sociétés, à l’impôt sur les bénéfices professionnels, à l’impôt synthétique libératoire ou à la TVA, et passe par la plateforme DIGITAX de la Direction générale des impôts, la DGI.',
                'Le calendrier est précis, selon LookupTax. Depuis le 1er janvier 2026, la facture électronique normalisée est la base légale des opérations ; jusqu’au 30 juin 2026, des documents douaniers ont été admis à titre de tolérance pour la déduction de la TVA et des charges. Depuis le 1er juillet 2026, seules les factures conformes ouvrent droit à ces déductions. <a href="https://blog.avocats.deloitte.fr/gabon-les-principales-mesures-de-la-loi-de-finances-pour-2026/">Deloitte</a> précise que le vendeur doit émettre une facture normalisée et que l’acheteur doit la réclamer : la facture électronique devient une affaire de deux parties.',
                'Les sanctions sont lourdes. Selon Deloitte, l’absence de facture normalisée est punie d’une amende égale à 100 % de la valeur de l’opération, avec un minimum de 200 000 FCFA, et une facture erronée ou incomplète de 50 000 FCFA ; en cas de récidive, l’amende peut atteindre 10 millions de FCFA par facture, avec fermeture possible de l’établissement. Une loi de finances rectificative a ensuite été adoptée en 2026 : d’après <a href="https://gabonmediatime.com/gabon-facture-electronique-la-revolution-fiscale-qui-attend-toutes-les-entreprises/">Gabonmediatime</a>, elle impose des factures émises par des systèmes approuvés par la DGI et prévoit un crédit d’impôt étalé sur trois ans pour l’achat d’un système conforme.',
                'Les règles de mise en œuvre détaillées (formats, API, homologation des logiciels) relèvent de la DGI, et la page de la DGI consacrée à DIGITAX est le lieu où les confirmer. Pour un projet, la conséquence est simple : un logiciel de facturation fermé et impossible à brancher à DIGITAX devient un risque financier, car il prive le client de la déduction de ses charges. Un ERP ouvert comme Odoo ou Dolibarr, ou une application sur mesure dotée d’une API, s’adapte ; le cadrage vérifie le moyen de raccordement avant la première facture.',
                'La TVA obéit à la <a href="https://www.dgi.ga/index.php/professionnels/tva">page de la DGI</a> : taux normal de 18 %, taux réduit de 10 % pour une liste de produits, 0 % pour les exportations, assujettissement à partir de 60 millions de FCFA de chiffre d’affaires annuel, déclaration mensuelle avant le 20 du mois suivant. La même page rappelle qu’une entreprise qui mentionne la TVA sur une facture en devient redevable par le seul fait de l’avoir facturée. Un logiciel doit donc empêcher une entreprise non assujettie d’afficher de la TVA par erreur.',
                'Le commerce numérique international entre aussi dans le champ. D’après <a href="https://gabonmediatime.com/lfr-2026-les-30-mesures-qui-vont-changer-la-vie-des-entreprises-gabonaises/">Gabonmediatime (9 juillet 2026)</a>, la loi de finances rectificative oblige les fournisseurs étrangers de services numériques (plateformes de streaming, services en nuage, réseaux sociaux) à s’enregistrer auprès de l’administration fiscale pour déclarer et reverser la TVA. Les abonnements logiciels d’une entreprise gabonaise peuvent donc voir leur facturation évoluer, à confirmer avec son expert-comptable. Un prestataire installé hors du pays se contente de facturer selon les règles qui lui sont applicables.',
                'Le droit commercial et comptable suit l’OHADA, dont le Gabon figure parmi les <a href="https://www.ohada.org/les-etats-membres-de-lohada/">17 États parties</a>. Selon <a href="https://blog.avocats.deloitte.fr/acte-uniforme-relatif-droit-comptable-a-linformation-financiere/">Deloitte</a>, l’Acte uniforme sur le droit comptable et l’information financière a été adopté le 26 janvier 2017 et publié le 15 février 2017 ; le SYSCOHADA révisé s’applique aux comptes individuels depuis le 1er janvier 2018 et aux comptes consolidés depuis le 1er janvier 2019. Un ERP installé au Gabon porte donc un plan comptable SYSCOHADA, des états financiers conformes et une clôture au 31 décembre, validés par le comptable avant la première écriture.',
                'Enfin, les échanges avec l’administration se dématérialisent. Selon <a href="https://gabonmediatime.com/gabon-vers-la-fin-du-papier-a-la-dgi/">Gabonmediatime</a>, la loi de finances rectificative de 2026 donne aux déclarations, paiements, notifications, mises en demeure et correspondances administratives électroniques une reconnaissance juridique pleine et entière. Une entreprise doit donc entretenir une adresse électronique active et surveillée, car ces échanges ont désormais une reconnaissance juridique pleine et entière.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services numériques pour les entreprises gabonaises, selon leur besoin ?',
            'legende' => 'Besoins fréquents dans les entreprises gabonaises et service correspondant ; le détail et le prix figurent dans chaque page de service, ou dans le devis après cadrage.',
            'entetes' => ['Besoin typique au Gabon', 'Service', 'Page'],
            'lignes'  => [
                ['Vendre en ligne à Libreville et à Port-Gentil et encaisser par Airtel Money et Moov Money', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Émettre des factures conformes à DIGITAX sans ressaisie', 'Raccordement d’un outil de facturation par API', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Stock, ventes et comptabilité SYSCOHADA dans un seul outil', 'Déploiement d’Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un ERP léger et sans licence pour une petite structure', 'Déploiement de Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Répondre aux clients qui écrivent sur WhatsApp à toute heure', 'Intégration de l’API WhatsApp Business', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Un assistant qui qualifie les demandes et prend les rendez-vous', 'Agent IA et chatbot WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots</a>'],
                ['Suivre des chantiers, des interventions ou des commandes qui vivent sur tableur', 'Application web', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Supprimer la double saisie entre factures, relevés de paiement et fichiers', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Cadrer la transformation numérique avant de dépenser', 'Conseil en digitalisation', '<a href="/services/digitalisation-d-entreprise">Digitalisation d’entreprise</a>'],
                ['Former les équipes à l’outil choisi', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs du Gabon ?',
            'items' => [
                ['secteur' => 'Pétrole et services parapétroliers', 'probleme' => 'Un sous-traitant installé à Port-Gentil jongle entre bons de commande de donneurs d’ordre, factures en FCFA et en devises, et relances de paiement qui se perdent dans les courriels.', 'solution' => 'Un ERP qui suit devis, commandes et échéances, des factures raccordées à DIGITAX avec la TVA à 18 %, des relances automatiques et un tableau de bord des créances par client.'],
                ['secteur' => 'Manganèse et mines', 'probleme' => 'Les prestataires de sites éloignés remplissent des relevés de livraison, de maintenance et de sécurité sur papier, que le siège ressaisit à Libreville avec plusieurs jours de retard.', 'solution' => 'Une application de saisie utilisable sur téléphone, qui garde les données en local quand le réseau manque, puis les synchronise, avec des états de facturation générés pour chaque client.'],
                ['secteur' => 'Bois et transformation', 'probleme' => 'Une entreprise de la zone industrielle de Nkok suit ses lots de grumes, de sciages et de produits finis dans des carnets, avec des écarts de rendement que personne ne peut expliquer.', 'solution' => 'Une base de lots avec étapes de transformation, rendements par ligne, stocks par site et documents d’expédition produits automatiquement, avec un accès réservé selon les rôles.'],
                ['secteur' => 'Construction et travaux publics', 'probleme' => 'Les grands investissements publics en routes et en bâtiments, relevés par la Banque mondiale, multiplient les sous-traitants, les situations de travaux et les factures à émettre à temps.', 'solution' => 'Un suivi de chantier avec devis, avancements, photos horodatées et factures normalisées, relié à Odoo ou à Dolibarr pour la comptabilité SYSCOHADA.'],
                ['secteur' => 'Services et commerce à Libreville', 'probleme' => 'Une boutique prend ses commandes sur WhatsApp, note les paiements Airtel Money et Moov Money dans un cahier et ne sait plus quels colis sont partis ni payés.', 'solution' => 'Une boutique en ligne avec les deux opérateurs par un agrégateur, un statut de commande envoyé par message, un stock tenu dans l’ERP et une règle écrite pour le paiement à la livraison.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes gabonaises, et qui peut financer la formation ?',
            'paragraphes' => [
                'La formation se déroule à distance, en visioconférence, aux heures de bureau de Libreville : Richard travaille en UTC+1, comme le Gabon, donc sans décalage avec vos équipes. Les séances se donnent en français, avec des exercices sur vos propres documents plutôt que sur des exemples génériques, et le support reste accessible sur un espace partagé. Un référent désigné dans l’équipe reçoit les questions des collègues et les remonte à la séance suivante, ce qui évite de tout reprendre chaque fois.',
                'Plusieurs fiches du catalogue répondent aux besoins décrits plus haut. Pour comprendre ce que l’IA change au quotidien, voir <a href="/formations/ia-en-entreprise">l’IA en entreprise</a> ; pour encadrer son usage au regard de la loi de 2023, <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>. Les équipes qui vendent par messagerie suivront <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>, les comptables <a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>, et les équipes qui veulent supprimer la double saisie <a href="/formations/n8n">n8n de zéro à l’autonomie</a>. Le catalogue complet est sur la page des <a href="/formations/">formations</a>.',
                'Pour le financement, les règles de prise en charge sont à confirmer avant de s’engager. L’<a href="https://www.lunion-archives.org/web.11/dmdocuments/N12344-09-02-2017-024.pdf">article de L’Union de 2017</a> rappelle que la loi de finances 2017 a créé une Contribution à la formation professionnelle, au taux de 0,5 % de la masse salariale à l’époque, pour les organismes et structures qui mettent en œuvre des programmes de formation. Le taux en vigueur et les conditions de prise en charge d’une formation d’entreprise se confirment auprès de la DGI et de l’Office national de l’emploi avant de compter sur un financement.',
                'Du côté de l’offre publique, l’Agence nationale de la formation et de l’enseignement professionnels, l’ANFEP, forme dans trois centres à Nkok, Mvengué et Tchengué, et a signé en août 2026 une convention avec l’Agence nationale des bourses du Gabon, selon <a href="https://www.gabonreview.com/bourses-apres-la-france-lanbg-ouvre-la-voie-aux-formations-professionnelles-au-gabon/">Gabonreview</a>. Ce programme vise les boursiers, non les salariés d’entreprise : il ne remplace pas un plan de formation. En pratique, une entreprise gabonaise interroge d’abord sa direction financière puis l’Office national de l’emploi, et demande un devis détaillé (objectifs, durée, participants, livrables) qui servira de pièce justificative si un financeur le réclame. La formation est facturée en FCFA.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'items' => [
                ['titre' => 'Premier message et réponse', 'texte' => 'Vous décrivez votre activité, vos outils actuels et votre besoin par le formulaire de contact ou par WhatsApp. Richard répond avec ses premières questions, en français.', 'duree' => 'sous 24 heures'],
                ['titre' => 'Cadrage', 'texte' => 'Un appel en visioconférence, aux horaires de Libreville puisque le Gabon et le Bénin partagent le même fuseau, permet de lister les flux à couvrir, les moyens de paiement, le nombre d’utilisateurs, l’hébergement et les obligations de facturation du pays.', 'duree' => 'selon le projet'],
                ['titre' => 'Devis en FCFA', 'texte' => 'Le devis est établi en FCFA, avec les livrables, le calendrier et les étapes de paiement. Un équivalent en euros se donne sur demande, sur la base de 655,957 FCFA pour 1 €, parité fixe du franc CFA.', 'duree' => 'après le cadrage'],
                ['titre' => 'Réalisation par paliers', 'texte' => 'Chaque palier est montré sur une adresse de test, que vous ouvrez depuis votre téléphone et avec la connexion de l’un des deux opérateurs. Tester sur mobile fait partie de la recette.', 'duree' => 'une à trois semaines pour un site vitrine, un à trois mois pour une application sur mesure'],
                ['titre' => 'Livraison et formation', 'texte' => 'Les accès, la documentation et une séance de prise en main sont remis à la fin de chaque palier, en visioconférence.', 'duree' => 'en fin de palier'],
                ['titre' => 'Suivi', 'texte' => 'Un canal écrit reste ouvert pour les corrections et les évolutions ; la maintenance se discute au devis.', 'duree' => 'après la livraison'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se règlent les échanges, la langue et le paiement du prestataire ?',
            'paragraphes' => [
                'Les échanges passent par WhatsApp pour les questions courtes, par courriel pour les documents et par visioconférence pour les décisions. L’absence de décalage entre Cotonou et Libreville supprime le principal frein des projets menés à distance : une question posée à neuf heures reçoit sa réponse dans la matinée. Richard n’est pas sur place : l’intervention est entièrement à distance, et un besoin matériel, comme un câblage ou l’installation d’un serveur, passe par un partenaire local choisi avec vous.',
                'Pour le règlement du prestataire, les modes de paiement indiqués sur la fiche de Richard sont le mobile money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Depuis le Gabon, le virement et PayPal sont les plus simples ; un transfert de mobile money entre opérateurs de deux pays dépend des accords entre eux, et se vérifie au devis. Le devis reste exprimé en FCFA : la valeur ne varie pas entre le Gabon et le Bénin, ce qui évite toute conversion surprise.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet numérique au Gabon ?',
            'intro' => 'Les tarifs de départ ci-dessous sont ceux de Richard SALANON, exprimés en FCFA, avec l’équivalent en euros au taux fixe de 655,957 FCFA pour 1 €. Tout le reste se chiffre sur devis, en FCFA, après le cadrage.',
            'items' => [
                ['offre' => 'Landing page', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Tarif de départ, ajusté au cadrage', 'Devis en FCFA']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Tarif de départ, ajusté au cadrage', 'Devis en FCFA']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Tarif de départ, ajusté au cadrage', 'Devis en FCFA']],
                ['offre' => 'Boutique, ERP, application, IA', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Prix fixé après le cadrage', 'Paiement par étapes']],
            ],
            'variations' => [
                'Le nombre d’opérateurs et d’agrégateurs à brancher : Airtel Money, Moov Money et, selon le cas, une carte, chacun avec ses tests et ses frais.',
                'Le raccordement à la facture électronique normalisée : une facturation reliée à DIGITAX demande plus de tests qu’un simple modèle de facture.',
                'L’hébergement : un hébergement local ou étranger change les démarches auprès de l’APDPVP et le coût mensuel.',
                'Le paramétrage comptable : plan SYSCOHADA, TVA à 18 %, journaux de caisse et de mobile money à valider avec votre comptable.',
                'L’état de vos données à reprendre : fichiers clients, stocks et historiques sur tableur ou sur papier.',
                'L’usage hors ligne : une application pour des sites éloignés, qui fonctionne sans réseau, coûte plus qu’une application toujours connectée.',
                'La formation et le suivi après la livraison.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter pour un projet numérique au Gabon ?',
            'intro' => 'Ces erreurs reviennent dans les projets menés dans le pays ; chacune se corrige au cadrage.',
            'items' => [
                ['titre' => 'Ne brancher qu’un seul opérateur', 'texte' => 'Airtel Gabon et Moov Africa Gabon Télécom se partagent les abonnements presque à égalité. Ne proposer qu’un seul des deux services de mobile money écarte une partie de vos clients.'],
                ['titre' => 'Livrer sur la foi d’un message de retour', 'texte' => 'Aucun des trois agrégateurs gabonais cités ne signe ses rappels automatiques. Avant d’expédier ou d’activer un accès, le serveur confirme le paiement auprès de l’agrégateur.'],
                ['titre' => 'Traiter la déclaration auprès de l’APDPVP comme une formalité lointaine', 'texte' => 'La loi de 2023 demande une déclaration avant le traitement, et les amendes vont de un à cent millions de FCFA. Un formulaire sans consentement, une base sans registre ou un hébergement choisi sans vérification exposent l’entreprise.'],
                ['titre' => 'Choisir un logiciel de facturation fermé', 'texte' => 'Depuis le 1er juillet 2026, seule une facture conforme ouvre droit à la déduction. Un outil qui ne peut pas se raccorder à DIGITAX coûte plus cher que son prix d’achat.'],
                ['titre' => 'Facturer de la TVA sans y être assujetti', 'texte' => 'La DGI indique qu’une entreprise qui mentionne la TVA sur une facture en devient redevable. Le logiciel doit être paramétré selon le statut réel de l’entreprise, validé par le comptable.'],
                ['titre' => 'Négliger la messagerie électronique de l’entreprise', 'texte' => 'Une notification électronique de la DGI bénéficie d’une pleine reconnaissance juridique. Une adresse inutilisée ou saturée fait courir des délais de réponse sans que personne le sache.'],
                ['titre' => 'Concevoir pour un site toujours connecté', 'texte' => 'Les sites miniers, forestiers et pétroliers ont un réseau capricieux. On teste sur un téléphone d’entrée de gamme, avec une connexion limitée, et on prévoit une saisie qui survit aux coupures.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel point de vigilance sur les chiffres et les textes de cette page ?',
            'texte' => 'La facture électronique normalisée, la loi de finances rectificative de 2026 et les règles des agrégateurs de paiement évoluent vite. Ces informations sont datées du 6 octobre 2026. Les formats techniques de DIGITAX, les détails d’application de la loi de finances rectificative et le taux actuel de la contribution à la formation professionnelle sont à confirmer auprès de la DGI et de l’Office national de l’emploi. Elles ne remplacent ni un avocat ni un expert-comptable : demandez-leur de valider les points qui engagent votre entreprise.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet numérique gabonais à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard a déjà travaillé avec des entreprises au Gabon. Il compte plus de six ans d’expérience, s’est formé à EPITECH en 2022 et a aussi travaillé avec des entreprises du Bénin, de Côte d’Ivoire, du Togo, du Sénégal, du Tchad et de RD Congo. Il est le créateur de Wapy, un assistant WhatsApp à intelligence artificielle pour les entreprises d’Afrique francophone, et le co-fondateur d’Audyxa.',
                'Les projets réalisés pour d’autres clients d’Afrique et d’Europe, avec leur description, sont présentés sur la page des <a href="/realisations/">réalisations</a>. Pour l’histoire du parcours, voir <a href="/richard-salanon">la page de Richard SALANON</a> et la page <a href="/a-propos/">à propos</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet numérique au Gabon ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels, vos moyens de paiement et votre situation de facturation : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard SALANON intervient-il sur place au Gabon ?', 'r' => 'Non, l’intervention se fait à distance, en visioconférence, par écrit et par WhatsApp. Il n’y a aucun décalage horaire avec Cotonou, puisque le Gabon et le Bénin sont tous deux en UTC+1. Un besoin de présence physique, comme un câblage, passe par un partenaire local choisi avec vous.'],
        ['q' => 'Richard SALANON a-t-il déjà travaillé avec des entreprises gabonaises ?', 'r' => 'Oui, Richard a déjà travaillé avec des entreprises au Gabon. Les projets de son portfolio, avec leur description, sont visibles sur la page des réalisations.'],
        ['q' => 'Quels moyens de paiement un site gabonais doit-il accepter ?', 'r' => 'Airtel Money et Moov Money en priorité, par un agrégateur comme SingPay, E-Billing ou PVit. La carte bancaire complète l’offre pour la diaspora, et le virement convient aux clients professionnels. Les frais, par exemple ceux de SingPay, se revérifient au cadrage.'],
        ['q' => 'Comment une entreprise gabonaise se met-elle en règle avec la loi sur les données personnelles ?', 'r' => 'La loi n° 025/2023 du 12 juillet 2023 impose une déclaration des traitements automatisés auprès de l’APDPVP, qui délivre un récépissé, et une autorisation pour les catégories sensibles. Elle prévoit aussi un registre, une information claire sur les cookies et la notification des violations de données.'],
        ['q' => 'Qu’est devenue la CNPDCP au Gabon ?', 'r' => 'La Commission nationale pour la protection des données à caractère personnel a été transformée en APDPVP, l’Autorité pour la protection des données à caractère personnel et de la vie privée, après un Conseil des ministres du 1er février 2023 ; la loi n° 025/2023 lui confie le contrôle des traitements.'],
        ['q' => 'Peut-on héberger les données de clients gabonais à l’étranger ?', 'r' => 'Un transfert de données personnelles vers un autre État exige, selon l’article 171 de la loi de 2023, l’autorisation de l’APDPVP, qui publie la liste des États offrant une protection suffisante. Un premier centre de données local a ouvert le 30 juin 2026, et le choix de l’hébergement se décide au cadrage.'],
        ['q' => 'La facture électronique est-elle obligatoire au Gabon ?', 'r' => 'Oui pour les entreprises soumises à l’impôt sur les sociétés, à l’impôt sur les bénéfices professionnels, à l’impôt synthétique libératoire ou à la TVA : depuis le 1er juillet 2026, seules les factures électroniques normalisées ouvrent droit à la déduction de la TVA et des charges. Le dispositif passe par la plateforme DIGITAX de la DGI.'],
        ['q' => 'Quel est le taux de TVA et à partir de quand est-on assujetti ?', 'r' => 'Selon la page de la DGI, le taux normal est de 18 %, avec un taux réduit de 10 % pour une liste de produits et 0 % pour les exportations. L’assujettissement commence à 60 millions de FCFA de chiffre d’affaires annuel, avec une déclaration avant le 20 du mois suivant.'],
        ['q' => 'Un ERP installé au Gabon doit-il suivre le SYSCOHADA ?', 'r' => 'Oui : le Gabon applique le droit comptable de l’OHADA, et le SYSCOHADA révisé est en vigueur pour les comptes individuels depuis le 1er janvier 2018. Odoo et Dolibarr se paramètrent avec ce plan comptable, que le comptable valide avant la première écriture.'],
        ['q' => 'Qui régule les télécoms et le mobile au Gabon ?', 'r' => 'L’ARCEP, le régulateur des communications électroniques et des postes. Moov Africa Gabon Télécom et Airtel Gabon sont les deux opérateurs mobiles, et leurs licences arrivent à échéance en juin 2027 pour un renouvellement de dix ans.'],
        ['q' => 'Combien coûte un site pour une entreprise gabonaise ?', 'r' => 'Les tarifs de départ sont de 150 000 FCFA pour une landing page, 300 000 FCFA pour un site vitrine et 75 000 FCFA pour le référencement naturel, ajustés au cadrage. Les boutiques, ERP et applications se chiffrent sur devis, toujours en FCFA.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Gabon', 'url' => 'https://datareportal.com/reports/digital-2026-gabon', 'date' => '2026-10-06'],
        ['titre' => 'Journal officiel du 15 juillet 2023 : loi n° 025/2023 sur les données personnelles (AFAPDP)', 'url' => 'https://www.afapdp.org/wp-content/uploads/2023/12/Gabon-Loi-025-2023-du-12-juillet-2023-portant-modification-de-la-loi-001-2011-du-25-septembre-relative-a-la-protection-des-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-06'],
        ['titre' => 'APDPVP, site officiel', 'url' => 'https://www.apdpvp.ga', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : la CNPDCP transformée en APDPVP', 'url' => 'https://gabonmediatime.com/gabon-cnpdcp-transformee-autorite-pour-protection-des-donnees-caractere-personnel-vie-privee/', 'date' => '2026-10-06'],
        ['titre' => 'DGI du Gabon : la TVA', 'url' => 'https://www.dgi.ga/index.php/professionnels/tva', 'date' => '2026-10-06'],
        ['titre' => 'LookupTax : facture électronique, loi de finances 2026 du Gabon', 'url' => 'https://lookuptax.com/tax-changes/gabon/einvoicing-finance-law-2026', 'date' => '2026-10-06'],
        ['titre' => 'Deloitte : Gabon, les principales mesures de la loi de finances pour 2026', 'url' => 'https://blog.avocats.deloitte.fr/gabon-les-principales-mesures-de-la-loi-de-finances-pour-2026/', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : la facture électronique et la loi de finances rectificative 2026', 'url' => 'https://gabonmediatime.com/gabon-facture-electronique-la-revolution-fiscale-qui-attend-toutes-les-entreprises/', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : les 30 mesures de la loi de finances rectificative 2026', 'url' => 'https://gabonmediatime.com/lfr-2026-les-30-mesures-qui-vont-changer-la-vie-des-entreprises-gabonaises/', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : vers la fin du papier à la DGI', 'url' => 'https://gabonmediatime.com/gabon-vers-la-fin-du-papier-a-la-dgi/', 'date' => '2026-10-06'],
        ['titre' => 'Deloitte : acte uniforme relatif au droit comptable et à l’information financière', 'url' => 'https://blog.avocats.deloitte.fr/acte-uniforme-relatif-droit-comptable-a-linformation-financiere/', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : 3,1 millions d’abonnés mobiles fin mars 2025 (ARCEP)', 'url' => 'https://gabonmediatime.com/gabon-31-millions-dabonnes-aux-services-mobiles-a-fin-mars-2025/', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : les licences des opérateurs expirent en 2027', 'url' => 'https://gabonmediatime.com/gabon-les-licences-dexploitation-des-operateurs-de-telephonie-expirees-en-2027/', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : lancement du premier centre de données', 'url' => 'https://gabonmediatime.com/gabon-lancement-du-premier-data-center-le-30-juin/', 'date' => '2026-10-06'],
        ['titre' => 'Gabonmediatime : le mobile money franchit 50 milliards de FCFA en 2024', 'url' => 'https://gabonmediatime.com/gabon-le-mobile-money-franchit-le-cap-des-50-milliards-de-fcfa-de-chiffre-daffaires-en-2024/', 'date' => '2026-10-06'],
        ['titre' => 'Osiris : Moov et Airtel, 1,4 million de comptes actifs en 2023', 'url' => 'https://osiris.sn/mobile-money-moov-et-airtel-enregistrent-1-4-million-de-comptes-actifs-en-2023.html', 'date' => '2026-10-06'],
        ['titre' => 'Osiris : partenariats de Moov et d’Airtel avec les institutions financières', 'url' => 'https://osiris.sn/mobile-money-les-partenariats-entre-moov-airtel-et-institutions-financieres.html', 'date' => '2026-10-06'],
        ['titre' => 'SingPay, passerelle de paiement gabonaise', 'url' => 'https://singpay.ga', 'date' => '2026-10-06'],
        ['titre' => 'Paquet Laravel pour E-Billing, SingPay et PVit', 'url' => 'https://packagist.org/packages/maestrodimateo/simple-mobile-money', 'date' => '2026-10-06'],
        ['titre' => 'pawaPay : lancement au Gabon', 'url' => 'https://pawapay.io/blog/pawapay-live-in-gabon', 'date' => '2026-10-06'],
        ['titre' => 'BEAC, Banque des États de l’Afrique centrale', 'url' => 'https://www.beac.int', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale : Gabon, vue d’ensemble', 'url' => 'https://www.worldbank.org/en/country/gabon/overview', 'date' => '2026-10-06'],
        ['titre' => 'L’Union : la Contribution à la formation professionnelle dans la loi de finances 2017', 'url' => 'https://www.lunion-archives.org/web.11/dmdocuments/N12344-09-02-2017-024.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Gabonreview : convention entre l’ANBG et l’ANFEP', 'url' => 'https://www.gabonreview.com/bourses-apres-la-france-lanbg-ouvre-la-voie-aux-formations-professionnelles-au-gabon/', 'date' => '2026-10-06'],
        ['titre' => 'OHADA : les États membres', 'url' => 'https://www.ohada.org/les-etats-membres-de-lohada/', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia : indicatif téléphonique du Gabon', 'url' => 'https://en.wikipedia.org/wiki/Telephone_numbers_in_Gabon', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia : Gabon', 'url' => 'https://fr.wikipedia.org/wiki/Gabon', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'integration-whatsapp', 'agents-ia-chatbot-whatsapp', 'integration-odoo', 'integration-dolibarr', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'digitalisation-d-entreprise', 'formation-en-entreprise'],
        'formations'  => ['ia-en-entreprise', 'ia-ethique-conformite', 'whatsapp-business', 'odoo-comptabilite-syscohada', 'n8n', 'excel-google-sheets'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
        'metiers'     => ['commercants-e-commercants', 'experts-comptables', 'fiscalistes'],
    ],

];
