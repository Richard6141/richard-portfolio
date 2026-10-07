<?php
// ============================================================
// data/secteurs/hotellerie-restauration.php · Page secteur « Hôtellerie et
// restauration » (vague 1E). Hôtels, résidences, maisons d'hôtes, restaurants,
// maquis, bars et traiteurs. Projet rattaché : Afro Joy'ce (sous-traitance).
// Faits externes relevés le 07/10/2026 : Eurostat, ONU Tourisme, INStaD (via
// allAfrica), portail du gouvernement du Bénin, ministère des Finances de
// Côte d'Ivoire, impots.gouv.fr, aide Airbnb, portail du règlement sur les
// marchés numériques, dépôt OCA/pms, documentation Odoo 20.0, wiki Dolibarr,
// justice.fr, CNIL. Statut du public « Hôtellerie et restauration » : F.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Hôtels, maisons d\'hôtes, restaurants et traiteurs : des réservations directes, des commandes suivies et des achats alignés sur les ventes, avec Richard SALANON',
    'title'   => 'Digitalisation hôtel et restaurant, IA | Richard SALANON',
    'meta'    => 'Site, réservation en ligne, fiche Google, commandes WhatsApp, caisse Odoo ou Dolibarr et IA pour hôtels, maisons d\'hôtes et restaurants. Sur devis.',
    'en_bref' => 'Richard SALANON équipe les hôtels, résidences, maisons d\'hôtes, restaurants, maquis, bars et traiteurs : site vitrine et réservation en ligne, fiche Google et avis, commandes et rappels sur WhatsApp, caisse et stock avec Odoo ou Dolibarr, assistants d\'IA encadrés. Le travail se fait à distance, et sur place au Bénin, après un diagnostic du circuit réel d\'une réservation ou d\'une commande. Un site vitrine se livre en 1 à 3 semaines et démarre à 300 000 FCFA ; tout le reste se chiffre sur devis.',
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'univers' => 'Commerce et communication',
    'locales' => ['digitaliser-hotellerie-ouidah'],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Hôtels, résidences, maisons d\'hôtes, restaurants, maquis, bars et traiteurs'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation des hôtels et des restaurants en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Le voyageur a pris de l\'avance sur l\'établissement. En Europe, Eurostat estime à 3,08 milliards les nuitées passées dans les hébergements touristiques de l\'Union en 2025, soit 2 % de plus qu\'en 2024, dont 63 % dans des hôtels et hébergements similaires et 49 % par des clients venus de l\'étranger (<a href="https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20260116-1">Eurostat, janvier 2026</a>). Près d\'une nuitée sur deux est donc passée par un voyageur venu d\'un autre pays, qui a presque toujours choisi son établissement de loin, sur un écran, avant d\'arriver.',
                'L\'Afrique suit la même pente. Selon le <a href="https://www.untourism.int/un-tourism-world-tourism-barometer-data">baromètre d\'ONU Tourisme</a>, l\'Afrique et l\'Europe ont progressé de 4 % et de 3 % au premier semestre 2026, alors que le tourisme mondial n\'avance que de 0,4 %. Au Bénin, les Vodun Days de Ouidah sont passés de 97 000 visiteurs à leur première édition, en 2024, à plus de 435 000 en 2025, selon des chiffres de l\'INStaD rapportés par la presse, dans un <a href="https://fr.allafrica.com/stories/202512180482.html">article d\'allAfrica de décembre 2025</a> ; certains commerçants y ont vu leur chiffre d\'affaires multiplié par cinq pendant l\'événement.',
                'Cette demande se heurte à des établissements dont la gestion reste très souvent manuelle : réservations notées sur un cahier ou dans le téléphone du gérant, commandes WhatsApp en notes vocales, achats au marché sans liste, stock de boissons compté une fois par mois. La digitalisation consiste ici à relier ces fragments : un planning unique, des commandes numérotées, une fiche technique par plat, une caisse qui fait baisser le stock, et une fiche Google à jour.',
                'Elle ne demande pas de tout acheter d\'un coup. Beaucoup d\'établissements modestes gagnent déjà beaucoup avec un agenda partagé, l\'application WhatsApp Business bien réglée et un tableur propre ; les logiciels hôteliers et la caisse connectée viennent quand le volume le justifie. Richard SALANON commence donc par regarder comment une réservation ou une commande circule aujourd\'hui, puis propose le plus petit équipement qui supprime les erreurs constatées.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés montrent que la demande a changé ?',
            'items' => [
                ['valeur' => '3,08 milliards', 'libelle' => 'Nuitées dans les hébergements touristiques de l\'Union européenne en 2025, dont 63 % en hôtels et hébergements similaires', 'source' => 'Eurostat, janvier 2026', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20260116-1'],
                ['valeur' => '49 %', 'libelle' => 'Part des nuitées européennes de 2025 passées par des visiteurs venus de l\'étranger, qui choisissent presque toujours à distance', 'source' => 'Eurostat, janvier 2026', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20260116-1'],
                ['valeur' => '+ 4 %', 'libelle' => 'Progression du tourisme international en Afrique au premier semestre 2026, contre 0,4 % pour le monde', 'source' => 'ONU Tourisme, baromètre du tourisme mondial', 'url' => 'https://www.untourism.int/un-tourism-world-tourism-barometer-data'],
                ['valeur' => '435 000', 'libelle' => 'Visiteurs des Vodun Days de Ouidah en 2025, contre 97 000 à la première édition en 2024', 'source' => 'Chiffres de l\'INStaD rapportés par allAfrica, décembre 2025','url' => 'https://fr.allafrica.com/stories/202512180482.html'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d\'un hôtel ou d\'un restaurant gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Chaque établissement a ses priorités, mais les mêmes frottements reviennent. Quand deux ou trois des situations suivantes se produisent chaque semaine, un cadrage se justifie.',
            'items' => [
                ['titre' => 'La même chambre ou la même table promise deux fois', 'texte' => 'Les demandes arrivent par la réception, WhatsApp, une plateforme et un habitué qui appelle le patron. Sans calendrier unique, chaque canal croit la chambre libre. Le signe est simple : un client dont l\'arrivée a été oubliée, ou un dédommagement versé à un voyageur déplacé.'],
                ['titre' => 'Des demandes de réservation qui restent sans réponse la nuit', 'texte' => 'Le voyageur qui prépare son séjour écrit à 23 heures depuis un autre fuseau horaire ; le lendemain matin, il a déjà réservé ailleurs. Une confirmation automatique et une réponse en deux langues rattrapent ces demandes sans mobiliser quelqu\'un.'],
                ['titre' => 'Une dépendance aux plateformes qui pèse sur la marge', 'texte' => 'Quand la majorité des nuitées passent par un même intermédiaire, sa commission devient un poste majeur. Le signe : l\'établissement ne connaît ni le nom ni le numéro de ses clients des douze derniers mois, et ne peut donc pas les recontacter.'],
                ['titre' => 'Des commandes WhatsApp perdues dans les notes vocales', 'texte' => 'Pour un restaurant, un maquis ou un traiteur, le message du client est la commande. Sans numéro de bon, sans heure promise ni statut, un message ignoré pendant le coup de feu est une vente perdue et un client mécontent.'],
                ['titre' => 'Des achats qui ne suivent pas les réservations', 'texte' => 'Le chef part au marché avec une idée du nombre de couverts, pas avec la liste des réservations, des événements et des plats vendus la semaine précédente. Résultat : des denrées jetées un jour, une rupture de poisson le lendemain.'],
                ['titre' => 'Une caisse qui ne parle ni au stock ni à la comptabilité', 'texte' => 'Les boissons sortent sans être comptées, les offerts et la casse ne figurent nulle part, et le patron découvre l\'écart à l\'inventaire. Une caisse reliée à un stock rend chaque sortie visible le jour même.'],
                ['titre' => 'Un avis négatif resté sans réponse', 'texte' => 'La fiche Google est la première vitrine du restaurant et de l\'hôtel. Des avis anciens sans réponse, des horaires faux un jour férié ou des photos de l\'ancienne salle trahissent un établissement qui ne suit plus son image.'],
                ['titre' => 'Des équipes en relais qui se transmettent l\'information à l\'oral', 'texte' => 'L\'équipe du soir ignore ce que celle du matin a promis. Un cahier de consignes numérique, lu à chaque relève, évite que chaque saisonnier réinvente les règles.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services Richard SALANON propose-t-il pour un hôtel, un restaurant ou un traiteur ?',
            'legende' => 'Besoins les plus fréquents du secteur et service correspondant ; le périmètre exact de chaque service figure dans son devis.',
            'entetes' => ['Besoin typique de l\'établissement', 'Réponse', 'Service'],
            'lignes'  => [
                ['Être trouvé par des voyageurs qui préparent leur séjour depuis l\'étranger', 'Site bilingue, pages de chambres et de carte, galerie, itinéraire, données structurées', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Recevoir des réservations fermes, sans aller-retour de messages', 'Calendrier unique, confirmation, rappel, acompte en ligne, règle d\'annulation affichée', '<a href="/services/systeme-de-reservation-en-ligne">Système de réservation en ligne</a>'],
                ['Apparaître sur Google Maps avec des informations justes', 'Fiche d\'établissement, horaires des jours fériés, photos, réponses aux avis, pages par quartier ou par ville', '<a href="/services/seo-local-google-business">SEO local et Google Business</a>'],
                ['Se faire trouver pour « maison d\'hôtes » ou « restaurant » dans sa ville', 'Pages et contenus pensés pour les requêtes des voyageurs, suivi des positions', '<a href="/services/referencement-naturel-seo">Référencement naturel</a>'],
                ['Répondre aux messages la nuit et pendant le service', 'Assistant WhatsApp qui renseigne, enregistre une demande simple et passe la main à un humain', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Envoyer confirmations, rappels et reçus depuis le numéro de l\'établissement', 'Modèles de messages, déclencheurs, suivi des statuts de commande', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Tenir caisse, stock de denrées et boissons, achats et facturation', 'Odoo avec point de vente en mode restaurant, ou Dolibarr et son point de vente TakePOS', '<a href="/services/integration-odoo">Intégration Odoo</a> et <a href="/services/integration-dolibarr">intégration Dolibarr</a>'],
                ['Relier réservations, caisse, paiement et messagerie sans ressaisie', 'Scénarios qui transfèrent une réservation ou une vente d\'un outil à l\'autre', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Commander en ligne et se faire livrer, comme un restaurant de livraison', 'Prise de commande web, paiement mobile, suivi, outil de back-office sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Apprendre à l\'équipe à se servir des outils sans dépendre du prestataire', 'Sessions courtes par poste : réception, salle, cuisine, direction', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels logiciels hôteliers et de caisse existent, quand garder l\'existant et quand le remplacer ?',
            'legende' => 'Repères tirés de la documentation d\'Odoo 20.0, du wiki de Dolibarr et du dépôt de l\'Odoo Community Association, consultés le 7 octobre 2026.',
            'entetes' => ['Outil', 'Ce que dit sa documentation pour le secteur', 'Garder et relier', 'Remplacer'],
            'lignes'  => [
                ['Point de vente Odoo, mode restaurant', 'Plans de salle par étage, état des tables en temps réel, commandes envoyées en cuisine, notes fractionnées, taxes différentes sur place et à emporter, réservations depuis l\'écran de caisse (<a href="https://www.odoo.com/documentation/20.0/applications/sales/point_of_sale/restaurant.html">documentation Odoo 20.0</a>)', 'Si la caisse actuelle est récente et que seul le stock manque : on récupère les ventes par un export ou une API', 'Si la caisse est un vieux logiciel sans mise à jour ni sauvegarde, ou si ventes, stock et comptabilité vivent dans trois tableurs'],
                ['Dolibarr et son point de vente TakePOS', 'Module livré avec Dolibarr : ventes en parallèle, écran tactile, plusieurs terminaux, plusieurs modes de paiement, usage prévu pour les commerces, les bars et les restaurants, commande par le client via un QR code (<a href="https://wiki.dolibarr.org/index.php/Module_Point_of_sale_(TakePOS)">wiki Dolibarr</a>)', 'Quand l\'établissement tient déjà ses factures et ses achats dans Dolibarr', 'Quand il faut une comptabilité plus profonde ou plusieurs sociétés : voir le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a>'],
                ['Gestion hôtelière (PMS) sur Odoo', 'Le dépôt de l\'OCA décrit un « Property Management System on Odoo » : réservation, comptabilité, vente en ligne, achats, stock, contrats ; branche 19.0, licence AGPL-3.0 (<a href="https://github.com/OCA/pms">dépôt OCA/pms</a>)', 'Rarement : c\'est une brique communautaire, à valider module par module avant de s\'y engager', 'Pour une résidence ou un hôtel qui veut une gestion complète sur la même base que sa comptabilité, avec un développeur qui maintient les modules'],
                ['Logiciel hôtelier et gestionnaire de canaux du marché', 'Chaque éditeur publie ses propres fonctions et tarifs', 'Presque toujours : le calendrier des chambres reste là, on branche autour la fiche Google, WhatsApp et le site', 'Si le calendrier n\'est pas synchronisé avec les plateformes et que des doublons surviennent chaque mois'],
                ['Cahier, tableur et agenda partagé', 'Aucune documentation : c\'est l\'état de départ de la plupart des petits établissements', 'Pour un établissement de quelques chambres ou une petite salle, un tableur propre peut suffire', 'Dès qu\'il y a plusieurs personnes qui modifient le même fichier, ou plusieurs points de vente'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien une réservation passée par une plateforme rapporte-t-elle vraiment à l\'établissement ?',
            'paragraphes' => [
                'Une plateforme de réservation amène des voyageurs qu\'un établissement isolé n\'atteindrait pas, et elle se paie. Sur sa page d\'aide consacrée aux frais de service, <a href="https://www.airbnb.fr/help/article/1857">Airbnb</a> indique faire passer tous les hôtes de logements aux « frais uniques », déduits du versement : 15,5 % pour la plupart des hôtes, entre 14 et 16 % selon les cas. Les anciens « frais partagés » mettaient environ 3 % à la charge de l\'hôte et entre 14,1 et 16,5 % à celle du voyageur. Le changement ne s\'applique qu\'aux nouvelles réservations.',
                'Côté européen, la Commission a désigné Booking contrôleur d\'accès, au titre du règlement sur les marchés numériques, pour son service d\'intermédiation Booking.com, par une décision du 13 mai 2024, selon le <a href="https://digital-markets-act.ec.europa.eu/gatekeepers_en">portail officiel de ce règlement</a>. La conséquence pratique pour un hôtel est une plus grande liberté de fixer ses prix selon les canaux et de promouvoir ses offres ailleurs ; ses conditions exactes se lisent dans son contrat et dans l\'extranet de la plateforme.',
                'Le calcul utile tient en un tableau que Richard SALANON construit avec l\'établissement : pour une même chambre ou une même table, ce qui reste après commission, frais de paiement et coût du personnel selon le canal (appel direct, WhatsApp, site, fiche Google, plateforme). C\'est ce tableau, et non l\'habitude, qui fixe les tarifs affichés et la part de réservations directes à viser.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que peut faire l\'IA dans un hôtel ou un restaurant, et que ne doit-elle jamais faire ?',
            'paragraphes' => [
                'L\'IA rend service là où le travail consiste à écrire, traduire et lire des chiffres. Elle rédige une réponse en anglais à une demande de chambre à partir des conditions que la direction a fixées, résume les demandes particulières d\'un groupe, propose une description de plat ou de chambre à partir de faits fournis, prépare le brouillon d\'une réponse à un avis, et repère dans les ventes de la semaine les plats qui ne partent plus. Un assistant branché sur WhatsApp peut aussi donner l\'horaire, l\'adresse ou la carte, et enregistrer une demande simple avant de la passer à un humain.',
                'Elle ne remplace ni le chef, ni la réceptionniste, ni le gérant. La réponse qui engage l\'établissement (un prix, une annulation gratuite, un allergène, une exception) reste écrite par la direction ; l\'IA ne fait que la répéter. Les points suivants servent de garde-fous dans chaque projet.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels garde-fous poser autour de l\'IA dans un établissement qui reçoit du public ?',
            'intro' => 'L\'établissement répond de ce qu\'il affiche et promet, que le texte vienne d\'un salarié ou d\'un logiciel. Ces règles sont écrites avec la direction avant la mise en service.',
            'items' => [
                ['titre' => 'Aucune promesse hors des conditions écrites', 'texte' => 'Un robot qui accorde une annulation gratuite, un surclassement ou un menu de groupe à un prix inventé engage la maison. C\'est ce qu\'a établi le tribunal saisi de l\'affaire racontée dans <a href="/histoires/air-canada-chatbot">Air Canada et son chatbot</a> : l\'entreprise répond de ce que dit son assistant. Les réponses automatiques se limitent donc aux conditions de la direction, et toute autre demande passe à un humain.'],
                ['titre' => 'Aucun allergène deviné', 'texte' => 'La composition d\'un plat sort de la fiche technique validée par le chef, jamais d\'un texte généré. Une carte rédigée par un assistant qui écrit « sans gluten » ou oublie l\'arachide d\'une sauce est un risque pour le client et pour l\'établissement.'],
                ['titre' => 'Pas de numéro de carte ni de pièce d\'identité dans un message', 'texte' => 'Un numéro de carte envoyé par message, une photo de passeport transférée entre téléphones, puis collée dans un assistant en ligne : chaque étape multiplie les copies du même document. La garantie se prend par un lien de paiement ou au comptoir. L\'affaire <a href="/histoires/british-airways-piratage">British Airways</a> montre ce que coûte une page de paiement mal surveillée : 20 millions de livres d\'amende.'],
                ['titre' => 'Aucun fichier de clients dans un assistant public', 'texte' => 'Les noms, numéros, dates de séjour et allergies d\'un fichier de réservations ne se collent pas dans un assistant en ligne sans les avoir anonymisés. Un outil sous contrat, avec des règles de conservation, remplace l\'usage personnel d\'un compte gratuit.'],
                ['titre' => 'Pas d\'avis fabriqués ni triés', 'texte' => 'Demander des avis à tous les clients, de la même façon, est légitime. En écrire de faux, ou n\'inviter que les clients contents, fausse la note et expose l\'établissement aux sanctions des plateformes et du droit de la consommation.'],
                ['titre' => 'Une équipe formée et des règles écrites', 'texte' => 'Une réception qui répond aux voyageurs avec un assistant doit savoir ce qu\'elle peut y coller, ce qu\'elle doit relire et qui valide. Une charte d\'une page, affichée à la réception, suffit souvent.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faire quand un client signale une allergie par message ?',
            'texte' => 'Aucune réponse automatique ne doit confirmer qu\'un plat est « sans » un allergène. Le message est transféré au chef ou au responsable de salle, qui vérifie la fiche technique et répond lui-même. Cette consigne vaut pour l\'assistant WhatsApp comme pour la réceptionniste : une erreur sur ce point ne se rattrape pas.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Paiements, facture normalisée, données personnelles : quelles règles s\'appliquent à un hôtel ou à un restaurant ?',
            'paragraphes' => [
                'Les moyens de paiement d\'abord. Richard SALANON encaisse ses prestations par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, et connaît les mêmes circuits côté établissement : acompte par mobile money pour un hébergement, paiement à la livraison ou en ligne pour une commande. Le choix de l\'agrégateur qui relie le site à ces moyens est traité dans le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> ; il se règle selon le pays de l\'établissement et de ses clients.',
                'La facture ensuite, qui varie d\'un pays à l\'autre. Au Bénin, le portail du gouvernement explique que les entreprises assujetties à la TVA émettent des factures normalisées avec une machine électronique certifiée (MECeF) ou un logiciel validé par la DGI, selon son <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">article du 27 février 2020</a>, qui annonce des amendes en cas de vente sans facture normalisée. Leur montant et le champ des assujettis ont évolué depuis (la facture normalisée s\'applique aussi, depuis le 1er juillet 2021, aux contribuables de la taxe professionnelle synthétique, d\'après <a href="https://edicomgroup.com/fr/blog/facture-electronique-benin-systeme-facture-normalisee">Edicom</a>) : ils se confirment auprès de la direction générale des impôts. Un hôtel ou un restaurant doit donc vérifier que sa caisse ou son logiciel passe par ce circuit, avant d\'investir dans un nouvel outil.',
                'En Côte d\'Ivoire, la Direction générale des impôts a lancé officiellement sa facture normalisée électronique (FNE) le 21 juillet 2025, d\'après le <a href="https://finances.gouv.ci/actualites/65-contenu-dynamique/actualite/1137-la-digitalisation-au-service-de-l-amelioration-des-recettes-fiscales-la-dgi-lance-son-systeme-de-facture-normalisee-electronique">ministère des Finances ivoirien</a>. Le calendrier d\'application selon la taille de l\'établissement est à confirmer auprès de la DGI avant de choisir ou de brancher une caisse. En France, <a href="https://www.impots.gouv.fr/portail/actualite/logiciels-de-caisse-certifies-ladministration-fiscale-precise-le-dispositif">impots.gouv.fr</a> rappelle que, depuis le 1er janvier 2018, les assujettis à la TVA qui enregistrent les règlements de leurs clients particuliers avec un logiciel ou un système de caisse doivent utiliser un outil inaltérable, sécurisé, conservant et archivant les données, avec un certificat ou une attestation de l\'éditeur ; à défaut, l\'amende est de 7 500 euros.',
                'Les données personnelles enfin. Un fichier d\'hôtel ou de traiteur contient des identités, des numéros, des dates de séjour, parfois des allergies. Au Bénin, la loi n° 2017-20 portant code du numérique, dans le <a href="https://sgg.gouv.bj/doc/loi-2017-20/download">texte publié par le Secrétariat général du Gouvernement</a>, exige que les traitements de données personnelles des organismes publics ou privés fassent l\'objet d\'une déclaration préalable auprès de l\'autorité de protection, ou soient inscrits dans un registre tenu par une personne désignée par le responsable du traitement (article 405) ; le transfert vers un État tiers n\'est possible que si l\'autorité constate un niveau de protection équivalent (article 391). Au Sénégal, la loi n° 2008-12 du 25 janvier 2008 confie le contrôle à la <a href="https://www.cdp.sn/content/loi-n%C2%B0-2008-12-du-25-janvier-2008">Commission de protection des données personnelles</a> ; selon le <a href="https://www.wipo.int/wipolex/en/legislation/details/6229">résumé de WIPO Lex</a>, la déclaration est la règle générale (article 18) et l\'autorisation est réservée aux traitements sensibles, comme les données biométriques ou génétiques (article 20). En Côte d\'Ivoire, la loi n° 2013-450 du 19 juin 2013 désigne l\'<a href="https://www.artci.ci/">ARTCI</a> comme autorité de protection, et l\'ARTCI a rappelé en 2015 que tout traitement doit faire l\'objet d\'une <a href="https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable">déclaration ou d\'une autorisation préalable</a>. En Europe, le RGPD exige des données « adéquates, pertinentes et limitées à ce qui est nécessaire au regard des finalités », comme le rappelle la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2">CNIL</a>.',
                'Une règle propre au secteur, enfin : l\'information sur les allergènes. Selon <a href="https://www.justice.fr/fiche/allergenes-doivent-mentionnes-produit-alimentaire">justice.fr</a>, mise à jour le 23 octobre 2025, les restaurants français doivent fournir une information écrite sur les quatorze allergènes du règlement (UE) n° 1169/2011, directement et librement accessible aux clients (articles R412-12 à R412-16 du code de la consommation). Dans les pays africains où Richard SALANON intervient, l\'établissement vérifie auprès de son ministère de tutelle les règles d\'hygiène, de classement et d\'autorisation d\'exploiter avant d\'afficher une étoile ou une promesse sanitaire.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la digitalisation d\'un établissement à Ouidah, Abidjan, Dakar, Lyon ou Bruxelles ?',
            'items' => [
                ['secteur' => 'Maison d\'hôtes de dix chambres, Ouidah (Bénin)', 'probleme' => 'Situation type : une clientèle étrangère qui réserve des mois à l\'avance, une saison marquée par les Vodun Days, aucune présence propre en dehors des plateformes.', 'solution' => 'Site bilingue avec photos, calendrier et acompte, fiche Google reliée, rappel avant l\'arrivée avec l\'itinéraire. Les semaines précédant l\'événement servent à vérifier les tarifs et les disponibilités sur tous les canaux.', 'lien' => ['url' => '/digitaliser-hotellerie-ouidah', 'texte' => 'La déclinaison locale : l\'hôtellerie à Ouidah']],
                ['secteur' => 'Restaurant de cuisine livrée, Abidjan (Côte d\'Ivoire)', 'probleme' => 'Situation type : les commandes arrivent par messages, sont notées à la main, puis confiées à un livreur par téléphone ; le client demande où en est sa commande.', 'solution' => 'Prise de commande en ligne, paiement mobile, suivi par WhatsApp, livraison confiée à un service de courses. C\'est la trajectoire du projet décrit plus bas dans la page.'],
                ['secteur' => 'Résidence hôtelière, Dakar (Sénégal)', 'probleme' => 'Situation type : appartements loués à la semaine et au mois à des missionnaires et à des familles, facturés de façon irrégulière, avec un planning de ménage tenu au téléphone.', 'solution' => 'Calendrier unique par appartement, contrat et facture générés depuis Odoo, planning de ménage partagé avec l\'équipe, relevé mensuel des encaissements. La déclaration des fichiers à la CDP, prévue par la loi n° 2008-12, est vérifiée au cadrage.'],
                ['secteur' => 'Brasserie de quartier, Lyon (France)', 'probleme' => 'Situation type : une caisse ancienne dont l\'éditeur ne fournit pas d\'attestation, des allergènes sur un cahier jauni, un tableur de stock à jour une fois par mois.', 'solution' => 'Vérification de l\'attestation de la caisse, remplacement par un point de vente conforme si elle manque, fiches techniques qui alimentent l\'affichage des allergènes, inventaire hebdomadaire des boissons.'],
                ['secteur' => 'Traiteur événementiel, Bruxelles (Belgique)', 'probleme' => 'Situation type : devis par courriel, acomptes par virement, bons de commande qui évoluent jusqu\'à la veille de l\'événement et achats refaits à chaque version.', 'solution' => 'Devis et bons de commande dans un même outil, acompte relié au virement, liste d\'achats recalculée à chaque modification, rappel automatique au client la semaine de l\'événement.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez l\'établissement, la saison, les canaux par lesquels arrivent les clients et ce qui vous fait perdre du temps ou de l\'argent. Richard SALANON dit franchement si un tableur et WhatsApp suffisent, ou si un équipement plus lourd se justifie.'],
                ['titre' => 'Diagnostic du circuit réel', 'duree' => 'Selon le projet', 'texte' => 'Méthode proposée : suivre une réservation et une commande de bout en bout, de la première demande à l\'avis laissé après le départ. On note à quels endroits l\'information se perd, qui la modifie, quel outil la garde.'],
                ['titre' => 'Plan par étapes', 'duree' => 'Selon le projet', 'texte' => 'Le plan classe les chantiers : ce qu\'on fait en semaines (fiche Google, site vitrine, messages types) et ce qui demande des mois (caisse, stock, application de commande). La haute saison de l\'établissement fixe les dates à éviter.'],
                ['titre' => 'Mise en place', 'duree' => '1 à 3 semaines pour un site vitrine ; 1 à 3 mois pour une application sur mesure', 'texte' => 'Chaque outil est d\'abord essayé sur un jeu de réservations ou de commandes réelles, puis ouvert à toute l\'équipe. Méthode proposée : les accès, les comptes et le code sont créés au nom de l\'établissement.'],
                ['titre' => 'Formation des équipes', 'duree' => 'Selon le projet', 'texte' => 'Une session courte par poste : réception, salle, cuisine, direction. Chacun s\'exerce sur ses propres cas, avec un guide d\'une page.'],
                ['titre' => 'Suivi après le lancement', 'duree' => 'Selon le projet', 'texte' => 'Un point après les premières semaines sur les doublons évités, les commandes perdues, les écarts de stock et les avis reçus, puis une décision écrite sur la suite. Pour un établissement saisonnier, une vérification complète avant la haute saison est proposée.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la digitalisation d\'un hôtel ou d\'un restaurant, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Les tarifs de départ publiés sur ce site sont ceux d\'une landing page, d\'un site vitrine et du référencement naturel, au taux de 655,957 FCFA pour 1 euro. Une réservation en ligne, une caisse, une automatisation ou une application de commande se chiffrent sur devis, après le diagnostic. Les abonnements des éditeurs (plateformes, logiciel hôtelier, Odoo Enterprise, messagerie WhatsApp) se paient à part, à chacun d\'eux.',
            'items'      => [
                ['offre' => 'Landing page', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Une page pour un événement, une offre de saison ou un menu de groupe', 'Bouton d\'appel, de WhatsApp ou de réservation']],
                ['offre' => 'Site vitrine', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Présentation des chambres ou de la carte, galerie, horaires, plan d\'accès', 'Livraison en 1 à 3 semaines']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Pages et contenus visant les recherches des voyageurs et des clients de la ville', 'Suivi des positions']],
                ['offre' => 'Réservation en ligne, commande, caisse, automatisations, IA', 'prix' => 'Sur devis', 'inclus' => ['Calendrier, acompte, rappels, commandes WhatsApp', 'Odoo ou Dolibarr, connecteurs, application sur mesure']],
            ],
            'variations' => [
                'Le nombre de chambres, de tables, de points de vente et de sites.',
                'Le nombre de langues du site et des messages, souvent deux pour une clientèle étrangère.',
                'Un calendrier à synchroniser avec une ou plusieurs plateformes.',
                'L\'encaissement : acompte en ligne, mobile money, carte, ou simple lien de paiement.',
                'La caisse et le stock : reprise de l\'existant ou remplacement, nombre de terminaux.',
                'La facture normalisée ou la certification de la caisse exigées par le pays.',
                'Les saisons : une livraison avant la haute saison coûte plus de planification qu\'une livraison en basse saison.',
                'Les photos et la rédaction : fournies par l\'établissement ou à produire.',
                'Le nombre de personnes à former et leur disponibilité en période de service.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent le plus souvent dans un projet d\'hôtel ou de restaurant ?',
            'intro' => 'Elles tiennent rarement à la technique ; presque toutes se décident avant le lancement.',
            'items' => [
                ['titre' => 'Mettre en ligne un site sans calendrier fiable derrière', 'texte' => 'Un bouton de réservation qui affiche une chambre libre alors qu\'elle est prise crée plus de conflits qu\'il n\'en évite. Le calendrier d\'abord, le site ensuite.'],
                ['titre' => 'Acheter une caisse sans demander l\'attestation ni le circuit de facture', 'texte' => 'Selon le pays, la caisse doit être certifiée ou passer par un circuit de facture normalisée. Le vérifier après l\'achat revient à la changer.'],
                ['titre' => 'Se lancer deux semaines avant la haute saison', 'texte' => 'Une fiche Google et un site mettent du temps à être trouvés, et une équipe saisonnière n\'apprend pas un outil en plein service. La basse saison sert à installer et à former.'],
                ['titre' => 'Traduire le site sans traduire les messages', 'texte' => 'Le voyageur lit un site en anglais, puis reçoit une confirmation en français. La confirmation, le rappel et l\'itinéraire se traduisent comme les pages.'],
                ['titre' => 'Confier un assistant WhatsApp à un numéro personnel', 'texte' => 'Quand le gérant change de téléphone ou quitte la maison, l\'historique des clients part avec lui. Le numéro et les comptes sont ouverts au nom de l\'établissement.'],
                ['titre' => 'Ignorer les photos et les horaires de la fiche Google', 'texte' => 'Un restaurant affiché fermé le jour d\'une fête, ou un hôtel dont la salle est illustrée par une photo ancienne, perd des clients que le meilleur site ne rattrapera pas.'],
                ['titre' => 'Compter le stock sans compter les offerts et la casse', 'texte' => 'Un inventaire qui n\'a pas de colonne pour les offerts, les repas du personnel et la casse affiche un écart que personne ne sait expliquer.'],
                ['titre' => 'Laisser tout le monde administrateur', 'texte' => 'Chaque saisonnier garde un accès à la caisse, à la fiche et au WhatsApp de la maison. Des droits par poste et une liste des comptes à fermer au départ de chacun limitent les dégâts.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d\'un hôtel ou d\'un restaurant à ces outils ?',
            'paragraphes' => [
                'Richard a déjà formé des professionnels de l\'hôtellerie et de la restauration, et il en a formé plus de 200, tous publics confondus, depuis ses débuts. La formation suit le même circuit que le projet : réception, salle, cuisine et direction ne manient pas les mêmes écrans, et chacun s\'exerce sur ses propres cas.',
                'Le parcours complet pour ce public, avec son programme, ses durées et ses formats, est décrit sur la page <a href="/formations/metier/hotellerie-restauration">formation pour l\'hôtellerie et la restauration</a>. Quand un sujet demande plus de temps, il renvoie à une fiche du catalogue : <a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a> pour la fiche d\'établissement, <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> et <a href="/formations/chatbot-whatsapp">Chatbot WhatsApp et API WhatsApp Business</a> pour les commandes et les rappels, <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> pour la caisse et le stock, <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a> pour les fiches techniques et les inventaires, et <a href="/formations/e-commerce">Vendre en ligne</a> pour une carte commandable en ligne.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation de votre établissement à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de 6 ans d\'expérience, une formation à EPITECH (2022) et plus de 50 projets livrés, il relie ce qui, dans un hôtel ou un restaurant, se fait d\'ordinaire dans des outils séparés : le site, la messagerie, le paiement, la caisse et le stock. Il développe aussi <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et co-fonde <a href="https://audyxa.com">Audyxa</a>.',
                'Un projet de ce secteur porte son nom dans le portfolio : Afro Joy\'ce, à Abidjan, réalisé en sous-traitance pour Digital Développement. Les commandes prises à la main sur WhatsApp sont passées en ligne, avec paiement Wave, livraison Yango et suivi par WhatsApp : plus de 200 commandes par jour aujourd\'hui. Le détail se trouve sur la page <a href="/realisations/">réalisations</a>.',
                'Pour un établissement de la région de Ouidah, la page <a href="/digitaliser-hotellerie-ouidah">digitaliser un hôtel ou une maison d\'hôtes à Ouidah</a> décline ce travail au contexte local : clientèle étrangère, saison des Vodun Days, réservation directe. Pour un établissement situé ailleurs, le travail se fait à distance, ou sur place s\'il se trouve au Bénin, selon le devis.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer pour votre hôtel ou votre restaurant ?',
            'texte'  => 'Décrivez l\'établissement, la saison, les canaux par lesquels arrivent vos clients et vos outils actuels : vous recevez une réponse sous 24 heures et, après un premier échange, un plan par étapes avec un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon établissement'],
        ],
    ],

    'faq' => [
        ['q' => 'Un petit hôtel ou une maison d\'hôtes a-t-il besoin d\'un logiciel hôtelier ?', 'r' => 'Pas forcément. Pour quelques chambres, un calendrier partagé, des messages types et une fiche Google à jour règlent la plupart des doublons. Le logiciel se justifie quand plusieurs personnes modifient le planning, ou quand les plateformes ne se synchronisent plus. Le diagnostic permet de trancher avant tout achat.'],
        ['q' => 'Faut-il quitter Booking.com ou Airbnb pour avoir des réservations directes ?', 'r' => 'Non. Les plateformes amènent des voyageurs, et leurs frais se comparent canal par canal : Airbnb indique par exemple des frais uniques de 15,5 % pour la plupart des hôtes. Le site et la fiche Google servent à récupérer les voyageurs qui cherchent le nom de l\'établissement pour réserver en direct, sans supprimer la plateforme.'],
        ['q' => 'Odoo ou Dolibarr pour un restaurant ?', 'r' => 'Les deux proposent un point de vente utilisable en restauration. Le point de vente d\'Odoo gère étages, tables, envoi en cuisine, notes fractionnées et taxes différentes sur place et à emporter ; TakePOS, dans Dolibarr, gère plusieurs terminaux, plusieurs modes de paiement et la commande par QR code. Le choix dépend surtout de la comptabilité et du nombre de sociétés, comme le détaille le comparatif Odoo ou Dolibarr.'],
        ['q' => 'Une caisse enregistreuse certifiée est-elle obligatoire ?', 'r' => 'Cela dépend du pays. En France, les assujettis à la TVA qui enregistrent les règlements de leurs clients particuliers avec un logiciel de caisse doivent utiliser un outil conforme, attesté, sous peine de 7 500 euros d\'amende. Au Bénin, les entreprises assujetties à la TVA émettent des factures normalisées via MECeF ou un logiciel validé. Au Sénégal ou ailleurs, il faut interroger l\'administration fiscale.'],
        ['q' => 'Peut-on prendre les commandes d\'un restaurant par WhatsApp ?', 'r' => 'Oui, et beaucoup d\'établissements le font déjà. Le projet Afro Joy\'ce, à Abidjan, est passé de commandes prises à la main sur WhatsApp à une prise de commande en ligne avec paiement Wave et suivi par WhatsApp. L\'important est d\'attribuer à chaque commande un numéro, une heure promise et un statut.'],
        ['q' => 'Un chatbot peut-il répondre aux clients à ma place ?', 'r' => 'Pour les questions simples (horaires, carte, adresse, disponibilité communiquée par un humain), oui. Il ne doit rien promettre qui sorte des conditions écrites par la direction ni confirmer un allergène : en cas de doute, la demande passe à un humain, comme l\'enseigne l\'affaire du chatbot d\'Air Canada.'],
        ['q' => 'Comment réduire les doublons de réservation ?', 'r' => 'En tenant un seul calendrier qui fait foi, saisi à chaque demande, et en fermant la chambre sur tous les canaux dès qu\'elle part. Quand les canaux sont nombreux, un gestionnaire de canaux ou une automatisation synchronise les calendriers ; elle se teste avant la haute saison.'],
        ['q' => 'Que faire des données de mes clients ?', 'r' => 'Ne garder que ce qui sert à la réservation ou à la commande, limiter les accès, fixer une durée de conservation et ne pas coller le fichier dans un assistant public. Le RGPD en Europe, la loi n° 2017-20 au Bénin, la loi n° 2008-12 au Sénégal et la loi n° 2013-450 en Côte d\'Ivoire posent ce cadre, avec des déclarations ou des autorisations selon le pays.'],
        ['q' => 'Combien de temps dure un projet pour un établissement ?', 'r' => 'Un site vitrine se livre en 1 à 3 semaines et une application sur mesure en 1 à 3 mois. Les autres chantiers (caisse, stock, automatisations, formation) dépendent du projet et se calent hors de la haute saison de l\'établissement.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui, à distance pour les établissements d\'Afrique francophone, d\'Europe et du Canada, et sur place au Bénin. Les règlements s\'effectuent par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.'],
    ],

    'sources' => [
        ['titre' => 'Eurostat, nuitées dans les hébergements touristiques de l\'Union européenne en 2025', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20260116-1', 'date' => '2026-10-07'],
        ['titre' => 'ONU Tourisme, baromètre du tourisme mondial (premier semestre 2026)', 'url' => 'https://www.untourism.int/un-tourism-world-tourism-barometer-data', 'date' => '2026-10-07'],
        ['titre' => 'allAfrica, Vodun Days : culture, tourisme et développement économique (chiffres de l\'INStaD rapportés par la presse, décembre 2025)', 'url' => 'https://fr.allafrica.com/stories/202512180482.html', 'date' => '2026-10-07'],
        ['titre' => 'Portail du gouvernement du Bénin, tout savoir sur les factures normalisées (27 février 2020)', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'Ministère des Finances de Côte d\'Ivoire, lancement de la facture normalisée électronique par la DGI', 'url' => 'https://finances.gouv.ci/actualites/65-contenu-dynamique/actualite/1137-la-digitalisation-au-service-de-l-amelioration-des-recettes-fiscales-la-dgi-lance-son-systeme-de-facture-normalisee-electronique', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, logiciels de caisse certifiés', 'url' => 'https://www.impots.gouv.fr/portail/actualite/logiciels-de-caisse-certifies-ladministration-fiscale-precise-le-dispositif', 'date' => '2026-10-07'],
        ['titre' => 'Airbnb, aide : frais de service des hôtes', 'url' => 'https://www.airbnb.fr/help/article/1857', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, portail du règlement sur les marchés numériques : contrôleurs d\'accès (Booking.com)', 'url' => 'https://digital-markets-act.ec.europa.eu/gatekeepers_en', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, point de vente : restaurant', 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/point_of_sale/restaurant.html', 'date' => '2026-10-07'],
        ['titre' => 'Odoo Community Association, dépôt OCA/pms (Property Management System on Odoo)', 'url' => 'https://github.com/OCA/pms', 'date' => '2026-10-07'],
        ['titre' => 'Wiki Dolibarr, module Point of sale (TakePOS)', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Point_of_sale_(TakePOS)', 'date' => '2026-10-07'],
        ['titre' => 'justice.fr, allergènes à mentionner (règlement (UE) n° 1169/2011, articles R412-12 à R412-16 du code de la consommation)', 'url' => 'https://www.justice.fr/fiche/allergenes-doivent-mentionnes-produit-alimentaire', 'date' => '2026-10-07'],
        ['titre' => 'Edicom, facture normalisée au Bénin (e-MECeF, extension du 1er juillet 2021)', 'url' => 'https://edicomgroup.com/fr/blog/facture-electronique-benin-systeme-facture-normalisee', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 405)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/download', 'date' => '2026-10-07'],
        ['titre' => 'Commission de protection des données personnelles du Sénégal, loi n° 2008-12 du 25 janvier 2008', 'url' => 'https://www.cdp.sn/content/loi-n%C2%B0-2008-12-du-25-janvier-2008', 'date' => '2026-10-07'],
        ['titre' => 'WIPO Lex, Sénégal, loi n° 2008-12 sur la protection des données à caractère personnel (déclaration et autorisation)', 'url' => 'https://www.wipo.int/wipolex/en/legislation/details/6229', 'date' => '2026-10-07'],
        ['titre' => 'ARTCI, autorité de régulation et de protection des données de Côte d\'Ivoire', 'url' => 'https://www.artci.ci/', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, ARTCI : tout traitement de données personnelles soumis à déclaration ou autorisation préalable (communication de 2015)', 'url' => 'https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre II (article 5, principes de traitement)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['systeme-de-reservation-en-ligne', 'site-vitrine-professionnel', 'seo-local-google-business', 'agents-ia-chatbot-whatsapp', 'integration-odoo', 'integration-whatsapp', 'automatisation-ia', 'integration-dolibarr'],
        'metiers'     => ['hotellerie-restauration'],
        'formations'  => ['visibilite-google', 'whatsapp-business', 'chatbot-whatsapp', 'odoo-utilisateurs', 'excel-google-sheets', 'e-commerce'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
        'histoires'   => ['air-canada-chatbot', 'british-airways-piratage'],
    ],

];
