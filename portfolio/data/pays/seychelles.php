<?php
// ============================================================
// data/pays/seychelles.php · Page pays « Seychelles » (vague 1D).
// Faits externes relevés et vérifiés le 06/10/2026 (DataReportal, texte du Data Protection Act,
// Seychelles Revenue Commission, Banque des règlements internationaux, etc.).
// Devise des devis : euro. Pays hors OHADA : clé 'ohada' absente de la fiche.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Guesthouses de Praslin, conserveries de Mahé, prestataires financiers de Victoria : des sites et des outils de gestion conçus par Richard SALANON, sans quitter Cotonou',
    'title'   => 'Expert en digitalisation aux Seychelles | Richard SALANON',
    'meta'    => 'Consultant en digitalisation aux Seychelles : création de site internet, réservation, boutique en ligne, SEO, formations d’équipe ou individuelles.',
    'en_bref' => 'Richard SALANON réalise pour les sociétés de l’archipel des sites, des systèmes de réservation, des boutiques en ligne, des déploiements Odoo, des automatisations et des assistants d’IA, entièrement à distance depuis Cotonou. Les échanges se font en français ou en anglais, avec trois heures de décalage horaire. Chaque projet est cadré gratuitement puis chiffré sur devis, en euros.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale'    => ['v' => 'Victoria', 'source' => 'https://en.wikipedia.org/wiki/Seychelles', 'date' => '2026-10-06'],
        'fuseau'      => ['v' => 'UTC+4 (heure des Seychelles), soit trois heures de plus que Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        'indicatif'   => ['v' => '+248', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-11-2011-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues'     => ['v' => ['créole seychellois', 'anglais', 'français'], 'source' => 'https://cjad.nottingham.ac.uk/documents/implementations/pdf/Seychelles-_Constitution_consolidated_01.2014EN.pdf', 'date' => '2026-10-06'],
        'population'  => ['v' => 'Environ 133 000 habitants en octobre 2025', 'source' => 'https://datareportal.com/reports/digital-2026-seychelles', 'date' => '2026-10-06'],
        'internet'    => ['v' => '87,4 % de la population fin 2025, soit 117 000 internautes', 'source' => 'https://datareportal.com/reports/digital-2026-seychelles', 'date' => '2026-10-06'],
        'mobile'      => ['v' => '223 000 connexions mobiles actives fin 2025, soit 167 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-seychelles', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Service lancé par Airtel Seychelles en 2015, sous licence de la Banque centrale ; cadre des monnaies électroniques adopté en 2022', 'source' => 'https://bis.org/review/r240531k.htm', 'date' => '2026-10-06'],
        'secteurs'    => ['v' => ['tourisme', 'pêche au thon et économie bleue', 'services financiers'], 'source' => 'https://atta.travel/resource/seychelles-charts-multi-sector-growth-path-as-it-marks-50-years-of-independence.html', 'date' => '2026-10-06'],
        'devise'      => ['v' => 'Roupie seychelloise (SCR)', 'source' => 'https://www.cbs.sc/', 'date' => '2026-10-06'],
        'operateurs'  => ['v' => ['Airtel Money (Airtel Seychelles)'], 'source' => 'https://www.airtel.sc/', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['Fusepay, prestataire de services de paiement agréé, présenté en novembre 2025'], 'source' => 'https://allafrica.com/stories/202511270434.html', 'date' => '2026-10-06'],
        'donnees'     => ['v' => 'Data Protection Act 2023 (loi n° 24 de 2023), en vigueur depuis le 22 décembre 2023', 'source' => 'https://www.infocom.sc/wp-content/uploads/2024/01/Act-24-2023-Data-Protection-Act-2023.pdf', 'date' => '2026-10-06'],
        'autorite'    => ['v' => 'Information Commission (Commission de l’information des Seychelles)', 'source' => 'https://www.infocom.sc/wp-content/uploads/2024/01/Act-24-2023-Data-Protection-Act-2023.pdf', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture électronique annoncée pour les assujettis à la TVA : achat à l’étape finale en juillet 2026, cible de fin 2026', 'source' => 'https://edicomgroup.com/blog/mandatory-einvoicing-seychelles-src', 'date' => '2026-10-06'],
        'tva'         => ['v' => 'Inscription obligatoire dès 2 000 000 SCR de ventes imposables par an ; inscription volontaire dès 100 000 SCR depuis le 1er janvier 2025', 'source' => 'https://src.gov.sc/src-provides-guidance-on-amendments-made-to-the-fourth-schedule-of-vat-act-2010/', 'date' => '2026-10-06'],
        'ecommerce'   => ['v' => 'Electronic Transactions Act 2001 : cadre des échanges électroniques et du dépôt de documents auprès des autorités', 'source' => 'https://ictpolicyafrica.org/fr/entity/zach29heui', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => '3 heures de plus aux Seychelles (UTC+4 contre UTC+1)'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Le numérique seychellois est-il assez mûr pour vos clients, et qu’en tirer pour un projet ?',
            'paragraphes' => [
                'Selon le rapport Digital 2026 de DataReportal, l’archipel comptait environ 133 000 habitants en octobre 2025, et 117 000 internautes fin 2025, soit 87,4 % de la population. La même source dénombre 223 000 connexions mobiles actives, l’équivalent de 167 % des habitants, et 72 200 utilisateurs de réseaux sociaux, soit 54,1 %. Un chiffre supérieur à 100 % ne veut pas dire que chaque habitant a plusieurs téléphones : il compte des abonnements, et certains appartiennent à des visiteurs ou à des entreprises.',
                'Pour un projet, la conséquence est double. Le marché intérieur est petit : un site ou un outil de gestion qui ne vise que les habitants a un public limité. Mais la connectivité est avancée, si bien que les clients locaux achètent, réservent et paient sans difficulté technique, et que les entreprises ont l’habitude d’outils en ligne. Le vrai public d’un site seychellois est souvent à l’étranger : le visiteur qui prépare un séjour, l’acheteur d’un produit de la mer, le client d’un prestataire financier.',
                'Les trois langues nationales fixées par l’article 4 de la Constitution, le créole, l’anglais et le français, donnent aux Seychelles un avantage rare. Une entreprise peut parler à ses clients européens en français, à ses clients britanniques en anglais et à ses voisins en créole, sans passer par un traducteur. Richard SALANON construit les sites avec cette réalité en tête : la langue de départ est choisie avec vous, et les versions suivantes se greffent sans refonte.',
                'Le pays se prépare aussi à des changements qui touchent directement les développeurs. La Banque centrale et la société indienne NIPL ont conclu, lors de la visite d’État du Premier ministre indien achevée le 29 juin 2026, un accord pour déployer l’interface de paiement instantané UPI d’ici fin 2026, d’après l’agence Ecofin. Et l’administration fiscale prépare une facture électronique obligatoire pour les assujettis à la TVA. Un site marchand ou un logiciel de facturation conçu aujourd’hui doit pouvoir accueillir ces deux évolutions sans être réécrit.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Que faut-il savoir des Seychelles avant de lancer un projet numérique ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Carte, mobile money ou virement : que brancher pour encaisser aux Seychelles ?',
            'paragraphes' => [
                'L’intégration d’un paiement ne se résume pas à poser un bouton : elle dépend du pays où le compte marchand est ouvert, de la devise encaissée et de l’agrément du prestataire. Aux Seychelles, la monnaie est la roupie seychelloise, et la Banque centrale supervise l’activité des prestataires de paiement. Ces points se vérifient avec l’entreprise avant d’écrire une ligne de code, car un prestataire excellent ailleurs peut ne pas ouvrir de compte à une société seychelloise.',
                'Les cartes bancaires restent le moyen le plus courant pour l’achat en ligne. Selon la fiche pays de Bank of Scotland Trade, les paiements en ligne se font surtout par carte de crédit ou de débit, par virement ou à la livraison. Trois banques proposent des services en ligne et des applications mobiles : MCB Seychelles, Absa et Nouvobanq, d’après le panorama des moyens de paiement publié par TransFi. Pour une boutique, la carte est donc le premier canal à ouvrir.',
                'Le mobile money existe, mais il est plus récent. Airtel Seychelles a lancé son service de transfert d’argent mobile en 2015, avec une licence de la Banque centrale, et le règlement sur les monnaies électroniques de 2022 a ouvert la voie à d’autres acteurs, dont Nebula Fintech en 2024, selon un discours de la gouverneure Caroline Abel à la Banque des règlements internationaux. Chaque offre se vérifie marchand par marchand avant d’être intégrée.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle méthode de paiement pour quel type de projet aux Seychelles ?',
            'legende' => 'Panorama des canaux de paiement documentés au 06/10/2026 ; les conditions de chaque prestataire sont confirmées au cadrage.',
            'entetes' => ['Canal', 'Ce que l’on sait', 'Pour quel projet', 'Ce qu’il faut vérifier'],
            'lignes'  => [
                ['Carte bancaire', 'Moyen d’achat en ligne le plus courant, d’après Bank of Scotland Trade et TransFi', 'Boutique, réservation, acompte de séjour', 'Pays du compte marchand, devise encaissée, authentification du porteur'],
                ['Virement bancaire local', 'MCB Seychelles, Absa et Nouvobanq offrent banque en ligne, applications mobiles et virements, d’après TransFi', 'Facturation entre sociétés, paiements récurrents', 'Rapprochement automatique des virements avec les factures'],
                ['Airtel Money', 'Service lancé en 2015 par Airtel Seychelles, sous licence de la Banque centrale', 'Paiements de particuliers, abonnements', 'Disponibilité d’une interface pour marchands, plafonds et frais'],
                ['Prestataires de paiement agréés', 'Fusepay, présenté en novembre 2025 avec une licence de prestataire de paiement et l’aval de la Banque centrale ; son API s’adresse aux facturiers comme les services publics et les télécoms', 'Facturation de services, paiements différés', 'Agrément en vigueur, conditions du contrat, délais de reversement'],
                ['UPI indien', 'Accord conclu fin juin 2026 pour un déploiement d’ici fin 2026', 'Boutiques visant les visiteurs et résidents équipés', 'Date effective de mise en service et applications compatibles'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe l’intégration d’un paiement, et que dire des frais et des délais ?',
            'paragraphes' => [
                'L’intégration suit toujours le même fil. On choisit d’abord le ou les prestataires avec vous, en confrontant leurs conditions à votre activité. On branche ensuite leur interface dans votre site ou votre logiciel de gestion, d’abord en mode d’essai. Chaque paiement est relié à la commande ou à la facture correspondante pour que la comptabilité ne ressaisisse rien. Enfin, on teste les cas défavorables : paiement refusé, double clic, retour tardif de la confirmation.',
                'Les frais et les délais de reversement dépendent du contrat que vous signez avec chaque prestataire : ils ne sont pas publiés de façon homogène, et Richard ne les annonce pas à votre place. Il les inscrit dans le cahier de cadrage une fois que vous avez les offres écrites en main, pour que le coût réel d’un encaissement entre dans votre prix de vente. Un site de réservation pour guesthouse ne raisonne pas comme une boutique de produits de la mer.',
                'Quand un encaissement doit rester possible hors connexion, par exemple sur un bateau ou dans une île sans réseau stable, on prévoit un enregistrement local puis une synchronisation. Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif de passerelles de paiement</a> traite des opérateurs d’Afrique de l’Ouest, qui ne sont pas ceux de l’océan Indien, mais la méthode d’évaluation y est la même.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change la loi de 2023 sur les données pour un site ou un logiciel seychellois ?',
            'paragraphes' => [
                'Les données personnelles relèvent du Data Protection Act 2023, la loi n° 24 de 2023, entrée en vigueur le 22 décembre 2023, d’après le cabinet Appleby. Son article 55 abroge l’ancien Data Protection Act, enregistré au chapitre 57 du recueil des lois. L’autorité compétente est l’Information Commission, désignée par l’article 5 pour appliquer le texte. Un délai de transition de dix-huit mois, prévu à l’article 56, laissait aux responsables de traitement jusqu’à la mi-2025 pour se conformer : il est donc écoulé.',
                'Le texte ne prévoit pas d’inscription préalable auprès de la Commission avant de traiter des données, mais l’article 37 exige de tenir un registre des traitements. L’article 45 prévoit un délégué à la protection des données quand l’activité principale consiste à suivre les personnes à grande échelle ou à traiter massivement des données sensibles. En cas de violation de données, l’article 43 demande de prévenir la Commission au plus tard 72 heures après en avoir eu connaissance, et d’expliquer tout retard.',
                'Les amendes administratives prévues par l’article 51 peuvent aller jusqu’à 200 000 SCR pour une infraction aux principes de traitement, aux droits des personnes ou aux règles sur les transferts à l’étranger. Pour un site qui recueille des réservations ou des coordonnées de clients, cela se traduit par des formulaires clairs sur la finalité, un registre à jour, des droits d’accès faciles à exercer, et des systèmes remis en service en 72 heures au plus, ce que l’article 42 demande en cas d’interruption.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où héberger les données, et que prévoit la loi pour les transferts à l’étranger ?',
            'paragraphes' => [
                'L’article 47 du Data Protection Act interdit de transférer des données personnelles hors des Seychelles tant que le destinataire n’assure pas un niveau de protection comparable. Pour en juger, la Commission regarde la nature des données, la finalité, la durée du traitement, la loi du pays de destination, les règles de confidentialité transfrontalières et les accords internationaux signés. Héberger un site seychellois sur un serveur situé en Europe n’est donc pas interdit, mais la question doit être traitée par écrit.',
                'Le texte va plus loin pour certaines données des citoyens seychellois, celles des catégories particulières, comme les données sensibles : leur traitement est soumis à des conditions, dont la présence d’un responsable désigné et redevable aux Seychelles. Richard SALANON ne rédige pas d’avis juridique ; il conçoit l’architecture de sorte que l’emplacement des données soit un choix documenté, et il vous renvoie vers un juriste local pour valider les cas sensibles. Les clients européens des mêmes sites relèvent en parallèle du RGPD, qui s’applique à leurs données où qu’elles soient stockées.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment la TVA, la facturation et le commerce en ligne s’appliquent-ils aux Seychelles ?',
            'paragraphes' => [
                'La taxe sur la valeur ajoutée est perçue par la Seychelles Revenue Commission, au taux normal de 15 % selon son guide de la TVA. D’après son guide sur la quatrième annexe de la loi de 2010, l’inscription est obligatoire à partir de 2 000 000 SCR de ventes imposables, et un commerçant dont le chiffre d’affaires annuel est inférieur à ce seuil peut demander une inscription volontaire dès 100 000 SCR, avec l’accord de la Commission, depuis le 1er janvier 2025. Un logiciel de facturation doit donc distinguer les assujettis des autres et appliquer le bon traitement ligne par ligne.',
                'La facture électronique obligatoire n’était pas encore en vigueur au 6 octobre 2026. Selon le quotidien Seychelles Nation, l’administration fiscale est entrée en juillet 2026 dans l’étape finale de l’achat d’un système destiné aux assujettis, après un appel à manifestations lancé en mars. Edicom précise qu’au 6 octobre 2026 les textes d’application, avec les dates, les catégories d’opérations et les sanctions, n’étaient pas publiés, et que la fin 2026 reste un objectif annoncé. Les formats exacts sont à confirmer auprès de la Commission au moment du cadrage.',
                'Pour une prestation fournie depuis l’étranger, comme celles de Richard SALANON depuis Cotonou, le traitement de la TVA n’est pas détaillé ici : chaque entreprise le vérifie auprès de son comptable ou de la Commission avant de signer.',
                'L’Electronic Transactions Act 2001 donne un cadre aux échanges électroniques et au dépôt de documents auprès des autorités publiques. Bank of Scotland Trade indique qu’aucune loi spécifique au commerce électronique n’existe et que les règles de protection des consommateurs s’appliquent aux ventes en ligne. Concrètement, une boutique affiche clairement les produits, les prix, les conditions de livraison et de retour, et conserve la preuve de chaque commande. Ces mentions se prévoient dès la conception.',
                'Les Seychelles ne figurent pas parmi les dix-sept États membres de l’OHADA que liste le site officiel de l’organisation. Le plan comptable SYSCOHADA n’y est donc pas une obligation légale, et l’outil de gestion est paramétré sur le référentiel que votre expert-comptable utilise. Côté télécoms, l’autorité est la Seychelles Communications Regulatory Authority, créée par l’article 5 de la loi sur les communications de 2023 (loi n° 3 de 2023), et des règlements de licences ont été pris début 2026 (S.I. 1 de 2026).',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises des Seychelles ?',
            'legende' => 'Besoins fréquents des entreprises de l’archipel et service correspondant ; l’étendue exacte de chaque prestation est fixée au devis.',
            'entetes' => ['Besoin typique aux Seychelles', 'Service', 'Page'],
            'lignes'  => [
                ['Un hébergement, une table ou une excursion à réserver depuis l’étranger, avec acompte', 'Système de réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Voir le service</a>'],
                ['Vendre des produits de la mer, des épices ou de l’artisanat aux visiteurs et à l’export', 'Boutique en ligne', '<a href="/services/site-e-commerce">Voir le service</a>'],
                ['Présenter une guesthouse, un cabinet ou un atelier en français et en anglais', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Voir le service</a>'],
                ['Apparaître dans Google Maps quand un visiteur cherche un restaurant ou une activité sur Mahé', 'SEO local et fiche Google', '<a href="/services/seo-local-google-business">Voir le service</a>'],
                ['Suivre stocks, achats et ventes d’une conserverie, d’une épicerie ou d’un distributeur', 'Intégration d’Odoo', '<a href="/services/integration-odoo">Voir le service</a>'],
                ['Relier réservations, factures et messages sans ressaisie', 'Automatisation avec n8n ou Make', '<a href="/services/automatisation-ia">Voir le service</a>'],
                ['Répondre aux questions des voyageurs dans leur langue, à toute heure', 'Assistant WhatsApp à IA', '<a href="/services/agents-ia-chatbot-whatsapp">Voir le service</a>'],
                ['Offrir un espace client à des mandants ou à des sociétés gérées', 'Logiciel en ligne et espace client', '<a href="/services/saas-espace-client">Voir le service</a>'],
                ['Brancher un logiciel de gestion à une banque, un transporteur ou un prestataire', 'API et intégrations', '<a href="/services/api-rest-integrations">Voir le service</a>'],
                ['Se préparer à la facture électronique et aux nouveaux paiements', 'Audit et étude de projet', '<a href="/services/audit-etude-de-projet">Voir le service</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels projets numériques dans les secteurs porteurs des Seychelles ?',
            'items' => [
                [
                    'secteur'  => 'Tourisme',
                    'probleme' => 'Une guesthouse de Praslin dépend de plateformes de réservation pour presque toutes ses nuitées',
                    'solution' => 'L’archipel comptait 354 034 arrivées à la 47e semaine de 2025, avec l’Allemagne, la France et la Russie en tête, d’après Voyages Afriq. Un site de réservation directe en allemand, en français et en anglais, avec acompte par carte et calendrier synchronisé, réduit la dépendance aux commissions. Les statistiques du Bureau national montrent toutefois 7,2 % de visiteurs en moins sur les 39 premières semaines de 2026 : la demande varie, et le canal direct amortit ces écarts.',
                    'lien'     => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Voir le système de réservation'],
                ],
                [
                    'secteur'  => 'Pêche au thon et économie bleue',
                    'probleme' => 'Un exportateur de produits de la mer suit lots, stocks froids et expéditions dans des tableurs',
                    'solution' => 'L’archipel traite environ 80 % des captures de thon de la région, d’après l’ATTA. Un déploiement d’Odoo avec gestion des lots, des dates de péremption et des documents d’export rend chaque expédition traçable, de la réception au client. Les écarts d’inventaire apparaissent le jour même, et la facture part vers l’acheteur étranger sans ressaisie.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Voir l’intégration Odoo'],
                ],
                [
                    'secteur'  => 'Services financiers',
                    'probleme' => 'Un prestataire de services aux sociétés échange documents et pièces d’identité par courriel avec ses mandants',
                    'solution' => 'Un espace client sécurisé centralise les demandes, les pièces et les échéances, avec droits d’accès par dossier et journal des actions. Les obligations de la loi de 2023, du registre des traitements au délai de 72 heures en cas de violation, se traitent dans la conception. Les mandants suivent l’avancement sans écrire à chaque fois.',
                    'lien'     => ['url' => '/services/saas-espace-client', 'texte' => 'Voir les espaces client'],
                ],
                [
                    'secteur'  => 'Commerce et artisanat',
                    'probleme' => 'Une boutique de Victoria vend en magasin mais reçoit des demandes de visiteurs qui sont repartis dans leur pays',
                    'solution' => 'Une boutique en ligne en roupies et en euros, avec paiement par carte et expédition internationale, prolonge la vente après le séjour. Le stock est partagé entre le magasin et le site pour éviter de vendre deux fois la même pièce. Une fiche Google bien tenue amène les visiteurs en boutique pendant leur séjour.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Voir la boutique en ligne'],
                ],
                [
                    'secteur'  => 'Restauration et excursions',
                    'probleme' => 'Les questions des voyageurs arrivent par messagerie à toute heure, dans plusieurs langues',
                    'solution' => 'Un assistant WhatsApp à intelligence artificielle répond sur les horaires, les tarifs publiés et les disponibilités, puis passe la main à une personne quand la demande sort de son cadre. Les réponses reposent sur vos documents, avec des phrases validées par vous avant la mise en service.',
                    'lien'     => ['url' => '/services/agents-ia-chatbot-whatsapp', 'texte' => 'Voir les assistants WhatsApp'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes des Seychelles, et comment financer la formation ?',
            'paragraphes' => [
                'Richard SALANON anime ses séances par visioconférence, dans la langue que l’équipe préfère, avec les outils et les documents réels de la société. Pour un hôtel ou une conserverie des îles, cela évite de mobiliser un formateur sur place : un rythme de deux demi-journées par semaine peut convenir, avec des exercices à refaire entre les séances. Le calendrier tient compte de la saison, car une équipe d’hôtellerie ne se libère pas en haute saison comme en basse saison.',
                'Les thèmes demandés se rattachent aux métiers du pays : l’<a href="/formations/ia-en-entreprise">IA au quotidien</a> pour rédiger et répondre aux clients, <a href="/formations/whatsapp-business">WhatsApp Business</a> pour vendre et répondre, <a href="/formations/n8n">n8n</a> pour automatiser des tâches répétitives, <a href="/formations/developpement-web">le développement web</a> pour une équipe technique qui veut gagner en autonomie, et <a href="/formations/ia-ethique-conformite">l’IA, l’éthique et la conformité des données</a>, utile pour appliquer la loi de 2023 dans les usages d’IA. Les <a href="/formations/">fiches du catalogue</a> détaillent contenus et durées.',
                'Pour le financement, la solution la plus simple est le budget de formation de l’entreprise. Depuis juillet 2022, les fonctions de planification et de développement des ressources humaines ont été confiées au département de l’Emploi, d’après Seychelles Nation. Les aides éventuelles à la formation continue et leurs conditions se confirment auprès de lui avant de budgéter. Richard fournit le programme, la durée et le devis détaillé qu’un dossier de demande exige.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Les Seychelles sont en UTC+4 et Cotonou en UTC+1 : l’écart est de trois heures, toute l’année. Richard SALANON est joignable chaque jour de 7 h à 20 h, heure de Cotonou, soit de 10 h à 23 h aux Seychelles. La matinée de Mahé tombe ainsi dans la fin de matinée de Cotonou, et la plupart des réunions se tiennent sans difficulté entre 10 h et 17 h heure locale. Une demande envoyée le soir reçoit une réponse sous 24 heures.',
                'Les échanges se font en français ou en anglais, au choix de chaque interlocuteur, par visioconférence, courriel ou messagerie. Le projet peut prévoir une note de décisions après chaque rendez-vous et un tableau partagé indiquant ce qui est en cours, terminé ou en attente de votre réponse. Il peut aussi prévoir une adresse d’essai que toute l’équipe peut ouvrir, de sorte que les validations se fassent sur l’écran, pas sur des captures. Ces outils se conviennent au cadrage.',
                'Les devis sont établis en euros. Les règlements s’effectuent par carte bancaire, par PayPal ou par virement, trois modes compatibles avec un client installé aux Seychelles. Tout se déroule à distance : la conception, les tests, la livraison et la formation.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet numérique pour une entreprise des Seychelles ?',
            'paragraphes' => [
                'Chaque projet seychellois est chiffré sur devis, en euros, une fois le cadrage terminé ; le premier échange, ce cadrage et le devis lui-même sont gratuits. Un site vitrine se prépare en une à trois semaines et une application sur mesure en un à trois mois, d’après la fiche de Richard ; le tarif découle du périmètre, pas d’une grille unique. La conversion en roupies seychelloises dépend du taux du jour de votre règlement.',
                'Plusieurs éléments font varier le prix aux Seychelles. Le nombre de langues d’abord : un site en français, en anglais et en allemand pour une clientèle européenne demande plus de contenus et de relectures qu’un site monolingue. Le mode de paiement ensuite : brancher une carte est plus rapide que relier un prestataire local à votre comptabilité. Viennent enfin la reprise de données existantes, le nombre d’utilisateurs d’un outil de gestion, et le niveau de sécurité exigé par la loi de 2023.',
                'La préparation à la facture électronique ajoute un poste précis : un logiciel de facturation doit conserver séparément le net, le traitement fiscal, la TVA et le brut de chaque ligne, afin de pouvoir transmettre ces données quand la Commission publiera ses formats. Mieux vaut le prévoir au départ que payer une réécriture en 2027. L’hébergement, les licences logicielles et la <a href="/services/maintenance-support">maintenance</a> se chiffrent séparément, pour que le coût total soit lisible avant de signer.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter quand on lance un projet numérique aux Seychelles ?',
            'intro' => 'Les erreurs qui coûtent le plus cher viennent de choix faits trop vite sur des sujets propres à l’archipel.',
            'items' => [
                ['titre' => 'Choisir une seule langue', 'texte' => 'Un site uniquement en anglais perd les visiteurs venus de France, deuxième marché de l’archipel en 2025 avec 38 899 arrivées à la 47e semaine ; un site uniquement en français perd les Allemands, premier marché avec 49 310 arrivées. Décidez avec vos clients réels, pas avec vos préférences.'],
                ['titre' => 'Signer avec un prestataire de paiement sans vérifier le compte marchand', 'texte' => 'Un fournisseur qui domine ailleurs peut refuser l’ouverture d’un compte à une société seychelloise, ou n’encaisser que dans une autre devise. Demandez une confirmation écrite avant de bâtir le tunnel de commande.'],
                ['titre' => 'Ignorer le registre des traitements', 'texte' => 'La loi de 2023 demande de tenir ce registre sans inscription préalable. Une entreprise qui collecte des réservations doit pouvoir dire quelles données elle garde, pourquoi, pour combien de temps et où.'],
                ['titre' => 'Laisser les données partir à l’étranger sans trace écrite', 'texte' => 'L’article 47 exige un niveau de protection comparable chez le destinataire. Le choix d’un hébergeur, d’un outil d’emailing ou d’un assistant d’IA se documente le jour où on le fait.'],
                ['titre' => 'Coder les taxes en dur', 'texte' => 'Un taux de TVA écrit dans vingt endroits du logiciel devient un chantier si les règles changent. Les paramètres fiscaux se centralisent, et chaque ligne de facture conserve son traitement.'],
                ['titre' => 'Oublier les îles et les connexions inégales', 'texte' => 'Un site lourd est pénible depuis un bateau ou une île secondaire. Des images allégées, des pages courtes et un mode hors connexion pour l’encaissement évitent les abandons.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel point de vigilance avant de signer ?',
            'texte' => 'Demandez à votre prestataire, quel qu’il soit, où seront stockées les données de vos clients et qui pourra les restaurer en 72 heures au plus. Cette seule question révèle la solidité de l’hébergement, des sauvegardes et du contrat, et elle correspond à une exigence de la loi de 2023.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet à Richard SALANON aux Seychelles ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut accompagner à distance les entreprises aux Seychelles : il parle français et anglais, deux des trois langues nationales de l’archipel. Son parcours compte plus de six ans de métier et une formation à EPITECH en 2022. Il est aussi l’auteur de Wapy, son propre assistant WhatsApp à IA, et co-fondateur d’<a href="https://audyxa.com">Audyxa</a>.',
                'Les réalisations suivantes, issues de son portfolio, montrent le type de projet qu’il mène à Cotonou, à Paris et à Abidjan : boutique en deux devises, site bilingue, paiement mobile. Ces enjeux de langues et de devises sont ceux d’une entreprise de l’archipel. Le détail de chaque projet figure sur la page des <a href="/realisations/">réalisations</a>.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels projets de son portfolio ressemblent aux besoins des entreprises des Seychelles ?',
            'intro' => 'Quatre réalisations, avec leur description telle qu’elle figure dans son portfolio.',
            'items' => [
                ['titre' => 'Laura Cosmetics, boutique en deux devises', 'texte' => 'Une boutique qui affiche deux devises et livre dans deux zones, avec un back-office pour piloter stocks, coupons et chiffres de vente. Projet réalisé en sous-traitance pour Digital Développement.'],
                ['titre' => 'OBA TV, web TV sur mesure', 'texte' => 'Une chaîne diffusée sur internet : programmes en direct et en replay, grille éditoriale, rédaction qui publie seule, et formule premium réglée par mobile money.'],
                ['titre' => 'GC Pro Consulting, site bilingue', 'texte' => 'Un site bilingue de plus de cent pages : catalogue de formations, inscriptions et demandes de devis en ligne, pages locales pour chaque ville desservie.'],
                ['titre' => 'IK Fashion House, boutique et sur-mesure', 'texte' => 'D’un atelier artisanal à une boutique en ligne avec commande sur mesure à distance, plus une page de lancement pour la collection IK Tissu. Projet réalisé en sous-traitance pour Digital Développement.'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Un projet numérique aux Seychelles ?',
            'texte'  => 'Décrivez votre activité et votre besoin : Richard SALANON répond sous 24 heures, cadre le projet gratuitement et chiffre un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard SALANON peut-il accompagner une entreprise des Seychelles sans se déplacer ?', 'r' => 'Oui. Toutes les étapes se font à distance depuis Cotonou : cadrage en visioconférence, développement, tests, livraison et formation. Les échanges se font en français ou en anglais, et un devis en euros est remis après un cadrage gratuit.'],
        ['q' => 'Quel est le décalage horaire entre les Seychelles et Cotonou ?', 'r' => 'Les Seychelles sont en UTC+4 et Cotonou en UTC+1, soit trois heures de plus aux Seychelles. Les horaires de Richard, de 7 h à 20 h à Cotonou, correspondent à 10 h à 23 h aux Seychelles.'],
        ['q' => 'Quelle loi protège les données personnelles aux Seychelles, et qui la contrôle ?', 'r' => 'Le Data Protection Act 2023, loi n° 24 de 2023, en vigueur depuis le 22 décembre 2023, abroge l’ancienne loi. Il est contrôlé par l’Information Commission, qui peut enquêter et imposer des amendes administratives allant jusqu’à 200 000 SCR.'],
        ['q' => 'Faut-il déclarer ses traitements de données à l’Information Commission ?', 'r' => 'Le texte ne prévoit pas d’inscription préalable, mais son article 37 oblige à tenir un registre des traitements. Un délégué à la protection des données est requis quand l’activité principale suit des personnes à grande échelle ou traite massivement des données sensibles.'],
        ['q' => 'La facture électronique est-elle obligatoire aux Seychelles ?', 'r' => 'Pas au 6 octobre 2026. La Seychelles Revenue Commission a annoncé un système obligatoire pour les assujettis à la TVA, avec un achat à l’étape finale en juillet 2026 et une cible de fin 2026, mais les textes d’application n’étaient pas encore publiés. Il faut préparer le logiciel sans attendre, et confirmer les dates auprès de la Commission.'],
        ['q' => 'Quel est le taux de TVA et à partir de quand faut-il s’inscrire ?', 'r' => 'Le taux est de 15 %. L’inscription est obligatoire à partir de 2 000 000 SCR de ventes imposables par an, et volontaire dès 100 000 SCR, avec l’accord de la Commission, depuis le 1er janvier 2025, selon la Seychelles Revenue Commission.'],
        ['q' => 'Quels moyens de paiement peut-on intégrer sur un site seychellois ?', 'r' => 'La carte bancaire est le premier canal des achats en ligne. S’y ajoutent le virement, Airtel Money lancé en 2015, des prestataires agréés comme Fusepay, et l’UPI indien annoncé pour fin 2026. Chaque prestataire est vérifié au cadrage.'],
        ['q' => 'Les Seychelles appartiennent-elles à l’OHADA, et le SYSCOHADA s’y applique-t-il ?', 'r' => 'Non, le pays ne figure pas parmi les dix-sept États membres de l’OHADA. Odoo ou Dolibarr sont donc paramétrés sur le référentiel comptable que votre expert-comptable utilise, et non sur le SYSCOHADA.'],
        ['q' => 'Peut-on héberger un site seychellois en Europe ?', 'r' => 'Oui, à condition de documenter le transfert. L’article 47 du Data Protection Act exige un niveau de protection comparable chez le destinataire, et les données sensibles de citoyens seychellois obéissent à des conditions supplémentaires.'],
        ['q' => 'Combien de temps faut-il pour livrer un site ou une application ?', 'r' => 'Un site vitrine demande une à trois semaines et une application sur mesure un à trois mois, selon la fiche de Richard. Le délai exact est fixé au devis, en fonction du nombre de langues, de pages et de paiements.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Seychelles', 'url' => 'https://datareportal.com/reports/digital-2026-seychelles', 'date' => '2026-10-06'],
        ['titre' => 'Seychelles, Data Protection Act 2023 (loi n° 24 de 2023), texte officiel', 'url' => 'https://www.infocom.sc/wp-content/uploads/2024/01/Act-24-2023-Data-Protection-Act-2023.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Appleby, loi sur la protection des données en vigueur aux Seychelles', 'url' => 'https://applebyglobal.com/publications/data-protection-law-now-in-force-in-seychelles', 'date' => '2026-10-06'],
        ['titre' => 'Seychelles Revenue Commission, guide sur la quatrième annexe de la loi sur la TVA de 2010', 'url' => 'https://src.gov.sc/src-provides-guidance-on-amendments-made-to-the-fourth-schedule-of-vat-act-2010/', 'date' => '2026-10-06'],
        ['titre' => 'Seychelles Revenue Commission, guide de la TVA', 'url' => 'https://www.src.gov.sc/wp-content/uploads/2022/12/VAT-Guideline.pdf', 'date' => '2026-10-06'],
        ['titre' => 'UIT, indicatifs téléphoniques attribués (E.164)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-11-2011-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Seychelles Nation, la SRC à l’étape finale de l’achat d’un système de facture électronique', 'url' => 'https://nation.sc/articles/31652/src-moves-to-final-stage-of-einvoicing-procurement', 'date' => '2026-10-06'],
        ['titre' => 'Edicom, facture électronique aux Seychelles', 'url' => 'https://edicomgroup.com/blog/mandatory-einvoicing-seychelles-src', 'date' => '2026-10-06'],
        ['titre' => 'Seychelles, Communications (Licensing) Regulations 2026 (S.I. 1 de 2026)', 'url' => 'https://www.nationalassembly.sc/sites/default/files/2026-01/S.I.%20No%201%202026%20-%20Communications%20%28Licensing%29%20Regulations%202026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Banque des règlements internationaux, discours de Caroline Abel sur Nebula Fintech', 'url' => 'https://bis.org/review/r240531k.htm', 'date' => '2026-10-06'],
        ['titre' => 'Ecofin, Seychelles : déploiement de l’UPI indien d’ici fin 2026', 'url' => 'https://www.ecofinagency.com/news-digital/3006-56941-seychelles-to-roll-out-indias-upi-instant-payment-system-by-end-2026', 'date' => '2026-10-06'],
        ['titre' => 'AllAfrica, lancement de Fusepay aux Seychelles', 'url' => 'https://allafrica.com/stories/202511270434.html', 'date' => '2026-10-06'],
        ['titre' => 'Airtel Seychelles, offre Airtel Money', 'url' => 'https://www.airtel.sc/', 'date' => '2026-10-06'],
        ['titre' => 'Banque centrale des Seychelles, accueil', 'url' => 'https://www.cbs.sc/', 'date' => '2026-10-06'],
        ['titre' => 'Constitution des Seychelles, article 4 sur les langues nationales', 'url' => 'https://cjad.nottingham.ac.uk/documents/implementations/pdf/Seychelles-_Constitution_consolidated_01.2014EN.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Seychelles, présentation générale (capitale)', 'url' => 'https://en.wikipedia.org/wiki/Seychelles', 'date' => '2026-10-06'],
        ['titre' => 'Base IANA des fuseaux horaires, liens de zones (Indian/Mahe rattaché à Asia/Dubai, UTC+4)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        ['titre' => 'Bureau national de la statistique des Seychelles, arrivées de visiteurs', 'url' => 'https://www.nbs.gov.sc/', 'date' => '2026-10-06'],
        ['titre' => 'ATTA, les Seychelles marquent cinquante ans d’indépendance', 'url' => 'https://atta.travel/resource/seychelles-charts-multi-sector-growth-path-as-it-marks-50-years-of-independence.html', 'date' => '2026-10-06'],
        ['titre' => 'Voyages Afriq, arrivées de touristes aux Seychelles en 2025', 'url' => 'https://voyagesafriq.com/2025/11/30/seychelles-tourism-soars-surpassing-2024-arrival-target/', 'date' => '2026-10-06'],
        ['titre' => 'ICT Policy Africa, Electronic Transactions Act 2001', 'url' => 'https://ictpolicyafrica.org/fr/entity/zach29heui', 'date' => '2026-10-06'],
        ['titre' => 'Bank of Scotland Trade, commerce en ligne aux Seychelles', 'url' => 'https://www.bankofscotlandtrade.co.uk/en/market-potential/seychelles/ecommerce', 'date' => '2026-10-06'],
        ['titre' => 'TransFi, moyens de paiement locaux aux Seychelles', 'url' => 'https://www.transfi.com/id/blog/top-local-payment-methods-and-solutions-in-seychelles', 'date' => '2026-10-06'],
        ['titre' => 'OHADA, liste des États membres', 'url' => 'https://www.ohada.com/', 'date' => '2026-10-06'],
        ['titre' => 'Seychelles Nation, transfert des fonctions de développement des ressources humaines au département de l’Emploi', 'url' => 'https://nation.sc/articles/15081/country-to-get-new-human-resource-plan', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'     => ['systeme-de-reservation-en-ligne', 'site-e-commerce', 'integration-odoo', 'automatisation-ia', 'seo-local-google-business', 'agents-ia-chatbot-whatsapp', 'saas-espace-client', 'formation-en-entreprise'],
        'formations'   => ['ia-en-entreprise', 'whatsapp-business', 'n8n', 'developpement-web', 'ia-ethique-conformite'],
        'comparatifs'  => ['n8n-vs-make-vs-zapier', 'odoo-vs-dolibarr'],
        'metiers'      => ['hotellerie-restauration', 'commercants-e-commercants', 'chefs-entreprise-dirigeants'],
    ],
];
