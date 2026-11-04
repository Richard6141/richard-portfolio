<?php
// ============================================================
// data/pays/france.php · Page pays « France » (vague 1D, tranche 3).
// Faits externes relevés le 06/10/2026 sur les pages citées dans 'fiche' et 'sources'.
// Clés de fiche absentes faute de source primaire confirmée : capitale, indicatif, internet par
// opérateur, secteurs, commerce électronique ; hors périmètre : operateurs (mobile money), ohada.
// Devise des devis : euro, aucun montant chiffré.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Richard SALANON, un prestataire basé à Cotonou pour externaliser développement, automatisation et IA depuis la France, en euros et dans le cadre du RGPD',
    'title'   => 'Externaliser son développement en France | Richard SALANON',
    'meta'    => 'Sites, applications, automatisation, IA, Odoo et Dolibarr pour les entreprises françaises : prestataire à Cotonou, RGPD, TVA autoliquidée, devis en euros.',
    'en_bref' => 'Richard SALANON travaille à distance depuis Cotonou pour les entreprises françaises : sites et boutiques, applications web, automatisations, assistants WhatsApp et intégrations d\'IA, déploiement d\'Odoo et de Dolibarr, formation des équipes. Les échanges se font en français, avec zéro ou une heure d\'écart avec Paris selon la saison, dans le cadre d\'un contrat écrit et du RGPD. Les devis sont établis en euros, sur mesure. Il a déjà travaillé avec des entreprises en France.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'fuseau'     => ['v' => 'Heure d\'été du dernier dimanche de mars au dernier dimanche d\'octobre : zéro ou une heure d\'avance sur Cotonou selon la saison', 'source' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32000L0084', 'date' => '2026-10-06'],
        'langues'    => ['v' => 'Français, langue de la République (article 2 de la Constitution) ; les langues régionales appartiennent au patrimoine de la France', 'source' => 'https://www.conseil-constitutionnel.fr/le-bloc-de-constitutionnalite/texte-integral-de-la-constitution-du-4-octobre-1958-en-vigueur', 'date' => '2026-10-06'],
        'villes'     => ['v' => ['Paris : 2 103 778 habitants en 2023', 'Marseille : 886 040 en 2023', 'Lyon : 519 127 en 2023'], 'source' => 'https://www.insee.fr/fr/statistiques/1405599?geo=COM-75056', 'date' => '2026-10-06'],
        'population' => ['v' => '69,08 millions d\'habitants au 1er janvier 2026', 'source' => 'https://www.insee.fr/fr/accueil', 'date' => '2026-10-06'],
        'internet'   => ['v' => '75 % des abonnés à internet disposent de la fibre ou du câble, selon le baromètre du numérique publié le 9 février 2026', 'source' => 'https://www.arcep.fr/cartes-et-donnees/nos-publications-chiffrees/barometre-du-numerique.html', 'date' => '2026-10-06'],
        'mobile'     => ['v' => '91 % de la population équipée d\'un smartphone, dont 61 % de modèles compatibles 5G, selon le baromètre de février 2026', 'source' => 'https://www.arcep.fr/cartes-et-donnees/nos-publications-chiffrees/barometre-du-numerique.html', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['Stripe : cartes bancaires et prélèvement SEPA'], 'source' => 'https://docs.stripe.com/payments/payment-methods/payment-method-support', 'date' => '2026-10-06'],
        'donnees'    => ['v' => 'Règlement général sur la protection des données (UE) 2016/679, applicable depuis le 25 mai 2018', 'source' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-06'],
        'autorite'   => ['v' => 'Commission nationale de l\'informatique et des libertés (CNIL), qui peut prononcer des amendes administratives', 'source' => 'https://www.cnil.fr/fr/les-sanctions-prononcees-par-la-cnil', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Réception des factures électroniques par toutes les entreprises le 1er septembre 2026 ; émission le 1er septembre 2026 pour les grandes entreprises et ETI, le 1er septembre 2027 pour les PME, les très petites entreprises et les microentreprises', 'source' => 'https://www.impots.gouv.fr/japprofondis-mes-connaissances-sur-la-reforme', 'date' => '2026-10-06'],
        'tva'        => ['v' => 'Mention « Auto-liquidation » sur la facture lorsque le client est redevable de la TVA ; facture d\'un prestataire hors Union européenne via son représentant fiscal ou avec ses coordonnées', 'source' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F23208', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Contribution à la formation professionnelle de 0,55 % (moins de 11 salariés) ou 1 % de la masse salariale brute ; opérateurs de compétences (OPCO) ; CPF avec participation de 150 euros du titulaire', 'source' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F22570', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun en hiver, une heure d\'avance à Paris en été'],
        ['l' => 'Devis', 'v' => 'En euros, sur mesure'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Le marché français est-il prêt pour un projet numérique confié à un prestataire de Cotonou ?',
            'paragraphes' => [
                'L\'Insee annonce 69,08 millions d\'habitants au 1er janvier 2026. Les trois plus grandes communes pèsent chacune sur le marché des services : selon les chiffres du recensement de 2023, publiés le 27 août 2026, Paris compte 2 103 778 habitants, Marseille 886 040 et Lyon 519 127. Un site ou une application destiné au public français s\'adresse donc à un pays très équipé, où l\'attente de qualité est élevée et où un défaut de jeunesse se voit immédiatement.',
                'Le baromètre du numérique que l\'Arcep a publié le 9 février 2026 donne la mesure de l\'équipement : 91 % de la population possède un smartphone, 61 % de ces propriétaires ont un modèle compatible 5G, et 75 % des abonnés à internet disposent de la fibre ou du câble. Pour un projet, cela signifie qu\'un écran se conçoit pour le téléphone comme pour l\'ordinateur, et que les clients français supportent mal la lenteur : l\'optimisation des images, du cache et du premier affichage fait partie du cahier des charges.',
                'La messagerie instantanée occupe une place centrale. Selon le même baromètre, 86 % de la population l\'utilise, WhatsApp arrive en tête avec 87 % des utilisateurs de messageries, et 82 % d\'entre eux emploient au moins deux plateformes. Un assistant qui répond sur WhatsApp ou une relance par message trouve donc un public réel, à condition de respecter le consentement et la désinscription que la réglementation européenne impose.',
                'L\'intelligence artificielle générative entre aussi dans les usages : toujours selon l\'Arcep, un tiers de ses utilisateurs s\'en sert chaque jour, et ChatGPT reste l\'outil principal de 63 % d\'entre eux. Les équipes des entreprises françaises ont déjà des habitudes : le travail d\'un prestataire consiste à les encadrer, à protéger les données et à relier ces outils aux logiciels de l\'entreprise.',
                'Ce que change la distance est bien plus modeste que ce qu\'on imagine : un prestataire à Cotonou travaille avec les mêmes outils de suivi qu\'une agence à Lyon, dans la même langue et presque aux mêmes heures. Ce qui change vraiment, ce sont trois sujets de cadrage détaillés plus bas : le contrat et la facturation d\'un prestataire hors Union européenne, la TVA autoliquidée, et les données personnelles qui sortent du territoire européen.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les faits à connaître avant de confier un projet depuis la France ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Carte, SEPA, Wero : quels paiements prévoir pour une boutique française ?',
            'paragraphes' => [
                'Le paiement par carte est le premier moyen à prévoir pour vendre en ligne, et il s\'accompagne de l\'authentification forte du client : en vigueur depuis le 14 septembre 2019 dans le cadre de la réglementation européenne DSP2, elle impose pour les cartes l\'emploi de 3D Secure. Un module de paiement mal intégré subit des refus de la banque du client. Le travail consiste à utiliser les interfaces prêtes pour cette règle (page de paiement hébergée ou formulaire intégré) et à tester les cas d\'échec d\'authentification.',
                'Stripe est un agrégateur courant pour monter une boutique ou un service payant sans contrat bancaire spécifique. Sa documentation liste, pour les entreprises européennes, les cartes bancaires, le prélèvement SEPA et des portefeuilles comme Link. Wero, un moyen de paiement à usage unique où le client confirme dans l\'application de sa banque, y figure en version bêta privée pour la France, la Belgique et l\'Allemagne. Le choix des moyens à ouvrir dépend de votre clientèle : particuliers, professionnels, abonnements.',
                'Wero mérite l\'attention. Son site annonce un paiement depuis le compte bancaire en dix secondes ou moins, tous les jours à toute heure, en Belgique, en France, en Allemagne et au Luxembourg, avec les Pays-Bas prévus en 2026. Les paiements en ligne sont disponibles, les paiements en magasin et les abonnements sont annoncés comme à venir : on les prévoit au cahier des charges plutôt que de les promettre à vos clients avant leur ouverture.',
                'Pour le prélèvement SEPA, la logique diffère : il suppose un mandat signé par le client et un délai de confirmation avant de considérer la somme acquise, ce qui convient aux abonnements et aux factures récurrentes. Pour les montants élevés entre entreprises, le virement bancaire reste souvent la norme, avec rapprochement automatique d\'une référence de facture.',
                'Quand c\'est vous qui payez Richard, les moyens de règlement se conviennent au devis : virement, carte bancaire ou PayPal, avec un échéancier fixé au devis. La facture est émise en euros, sans TVA française, avec la mention d\'autoliquidation détaillée plus bas.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment se passe l\'intégration d\'un paiement en ligne en France, étape par étape ?',
            'legende' => 'Étapes habituelles d\'une intégration Stripe pour une entreprise établie en France ; l\'ouverture du compte dépend de la vérification menée par Stripe auprès de votre société.',
            'entetes' => ['Étape', 'Ce qui se passe', 'Ce que vous apportez'],
            'lignes'  => [
                ['Ouverture du compte', 'Création du compte marchand et vérification de la société par le prestataire de paiement', 'Extrait Kbis, pièce d\'identité du dirigeant, compte bancaire de la société'],
                ['Choix des moyens', 'Cartes, prélèvement SEPA, Wero ou virement selon la clientèle', 'Votre clientèle type, le panier moyen, la fréquence des achats'],
                ['Mode test', 'Parcours complet avec des cartes de test, y compris refus et authentification 3D Secure', 'Rien : Richard travaille sur l\'espace d\'essai'],
                ['Notifications de paiement', 'Le site reçoit un message signé du prestataire et marque la commande comme payée, une seule fois', 'Un domaine sécurisé que le prestataire de paiement peut appeler'],
                ['Cas limites', 'Panier abandonné, paiement en double, remboursement, contestation, facture à émettre', 'Votre règle commerciale pour chaque cas'],
                ['Mise en ligne', 'Bascule des clés d\'essai vers les clés de production, essai avec un petit montant réel', 'Validation finale de la direction'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit le RGPD quand un prestataire de Cotonou travaille sur vos données ?',
            'paragraphes' => [
                'Le règlement général sur la protection des données s\'applique depuis le 25 mai 2018 à toute entreprise qui traite des données de personnes situées dans l\'Union. Le site de la CNIL en rappelle les principes : licéité et transparence, limitation des finalités, minimisation, exactitude, limitation de la conservation, intégrité et confidentialité. Un fichier clients, un formulaire de contact avec stockage ou un outil de relance sont des traitements.',
                'Quand vous confiez un projet à un prestataire, vous restez le responsable de traitement, et lui devient sous-traitant dès qu\'il accède à des données personnelles pour votre compte. L\'article 28 du règlement impose alors un contrat qui fixe l\'objet, la durée, les instructions documentées, la confidentialité du personnel, les mesures de sécurité et l\'autorisation écrite préalable avant tout recours à un autre sous-traitant. La CNIL publie des exemples de clauses pour rédiger ce contrat.',
                'Les sanctions donnent le ton : le règlement prévoit jusqu\'à 20 millions d\'euros ou 4 % du chiffre d\'affaires annuel mondial pour les manquements les plus graves, et la CNIL a prononcé le 8 janvier 2026 des amendes de 27 millions et de 15 millions d\'euros contre deux opérateurs de télécommunications. Le sujet ne se traite pas à la légère, même pour une petite structure.',
                'En pratique, un projet bien cadré peut limiter les données exposées : des bases de test avec des données fictives, des accès nominatifs retirés en fin de mission, des sauvegardes chiffrées, et un hébergement dans l\'Union européenne quand les données de vos clients y sont collectées. Les données réelles ne sont nécessaires que lorsque la mission l\'exige, et le contrat peut le préciser.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on transférer des données hors de l\'Union européenne vers un prestataire au Bénin ?',
            'paragraphes' => [
                'Le règlement encadre toute communication de données vers un pays hors de l\'Espace économique européen. La CNIL distingue plusieurs voies : une décision d\'adéquation de la Commission, qui reconnaît un niveau de protection substantiellement équivalent ; à défaut, des garanties appropriées, dont les clauses contractuelles types adoptées par la Commission et les règles d\'entreprise contraignantes. Dans ces cas, une analyse d\'impact du transfert est à mener, pour laquelle la CNIL a publié un guide.',
                'La page de la Commission européenne sur les décisions d\'adéquation énumère aujourd\'hui Andorre, l\'Argentine, le Brésil, le Canada (organisations commerciales), les îles Féroé, Guernesey, Israël, l\'île de Man, le Japon, Jersey, la Nouvelle-Zélande, la Corée du Sud, la Suisse, le Royaume-Uni, les États-Unis (organisations adhérentes du cadre de protection des données) et l\'Uruguay, ainsi que l\'Organisation européenne des brevets. Faute de décision d\'adéquation pour le Bénin, un projet qui fait circuler des données personnelles de vos clients vers Cotonou passe par les clauses contractuelles types et une analyse d\'impact.',
                'La parade la plus simple est de ne pas transférer. Richard peut développer sur des jeux de données fictifs ou anonymisés, avec les données réelles qui restent sur un serveur situé dans l\'Union, à travers des accès distants nominatifs, journalisés et limités dans le temps. Il peut aussi travailler dans votre environnement, sans copie locale. Quand l\'accès à des données réelles est nécessaire, le contrat reprend les clauses types et l\'analyse d\'impact est faite avant le début de la mission.',
                'Votre conseil ou votre délégué à la protection des données valide ce montage : Richard prépare les éléments techniques, c\'est-à-dire le schéma des flux, la liste des accès, l\'hébergement, la durée de conservation et les mesures de sécurité.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la facturation électronique en France, et que change-t-elle pour vos outils ?',
            'paragraphes' => [
                'Selon le calendrier publié par l\'administration fiscale, toutes les entreprises doivent pouvoir recevoir leurs factures au format électronique depuis le 1er septembre 2026. Les grandes entreprises et les entreprises de taille intermédiaire émettent leurs factures sous ce format à la même date, et les petites et moyennes entreprises ainsi que les très petites entreprises le feront le 1er septembre 2027, avec le même calendrier pour la transmission des données de transaction, appelée e-reporting.',
                'Le circuit passe par une plateforme agréée, que l\'administration définit comme un opérateur de dématérialisation immatriculé par l\'État, après contrôle de sa conformité, de sa sécurité et de son interopérabilité avec le Portail public de facturation. La liste des plateformes, mise à jour le 22 septembre 2026, est publiée sur impots.gouv.fr dans plusieurs formats. Un logiciel de gestion ou de facturation n\'a pas à remplacer ces plateformes : il se connecte à celle que vous choisissez.',
                'Pour un projet confié à Richard, la conséquence est concrète. Un module de facturation développé sur mesure, une instance Odoo ou Dolibarr déployée en 2026 ou un site e-commerce doivent produire des factures dont les mentions sont complètes, une numérotation continue, des données structurées exploitables, et prévoir la connexion à votre plateforme agréée. Ce point se règle au cadrage : modifier un logiciel livré sans cette perspective coûte davantage que de la prévoir.',
                'Les factures d\'un prestataire établi hors de France, comme Richard, ne suivent pas le même chemin que celles d\'un fournisseur français : les opérations internationales entrent dans le champ de l\'e-reporting, c\'est-à-dire de la transmission de données à l\'administration. Le traitement exact de vos achats de services au Bénin se confirme avec votre expert-comptable et avec la plateforme agréée retenue, avant la première facture.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment la TVA se traite-t-elle sur une prestation de service venant d\'un prestataire hors Union européenne ?',
            'paragraphes' => [
                'Richard, auto-entrepreneur établi à Cotonou, ne facture pas de TVA française. Pour une prestation de services entre professionnels, la règle générale du droit européen de la TVA place l\'opération là où le client est établi : c\'est donc à l\'entreprise française, lorsqu\'elle est assujettie, de déclarer elle-même la taxe, avec en principe la possibilité de la déduire sur la même déclaration si elle y a droit. C\'est le mécanisme de l\'autoliquidation.',
                'Le site service-public.gouv.fr dans son guide de la facturation rappelle que la mention « Autoliquidation » figure parmi les mentions particulières exigées lorsque le client est redevable de la TVA, et que, pour un prestataire établi hors de l\'Union, la facture doit être délivrée par son représentant fiscal, l\'entreprise pouvant aussi l\'émettre elle-même en indiquant le nom, l\'adresse et le numéro d\'identification de ce représentant.',
                'La question de savoir si la facture de Richard relève de la première ou de la seconde situation se règle avec votre expert-comptable avant la signature : ce dernier valide la rédaction des mentions, l\'écriture comptable et la ligne de déclaration. Prévoyez aussi de fournir votre numéro de TVA : il atteste de votre statut d\'assujetti, qui justifie une facture établie hors taxe.',
                'Côté trésorerie, l\'autoliquidation ne coûte rien à une entreprise qui déduit l\'intégralité de la TVA : la taxe due et la taxe déductible s\'annulent. Elle compte pour les organismes qui ne déduisent pas, comme certaines associations ou professions exonérées, dont le coût réel du projet inclut alors la TVA. Le devis le rappelle et le comptable chiffre l\'écart.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que doit contenir le contrat pour externaliser un développement depuis la France ?',
            'paragraphes' => [
                'Le guide de service-public.gouv.fr sur l\'externalisation précise que la relation avec un prestataire se formalise par un contrat écrit. Il y fait figurer la description détaillée des services et le prix, les conditions de paiement et les pénalités, le suivi de la performance et la procédure de recette, les clauses de confidentialité et de propriété intellectuelle, ainsi que le règlement des litiges.',
                'Pour un prestataire à Cotonou, deux points demandent une attention particulière. D\'abord le droit applicable et le tribunal compétent : un contrat soumis au droit français et un tribunal de votre ressort rassurent la plupart des directions juridiques. Ensuite la cession des droits : le texte précise ce qui vous appartient à la livraison (code source, maquettes, documentation) et à quel moment, souvent au paiement du solde.',
                'Sur les délais de paiement, service-public.gouv.fr indique que le délai par défaut est de trente jours et que les parties peuvent convenir de quarante-cinq jours fin de mois ou de soixante jours à compter de la facture ; les pénalités de retard sont au minimum de trois fois le taux d\'intérêt légal, avec une indemnité forfaitaire de recouvrement de 40 euros. Le devis de Richard précise l\'échéancier de paiement, en cohérence avec ces règles.',
                'Le guide cite une obligation de vigilance sociale, avec demande d\'attestation de l\'Urssaf tous les six mois pour les contrats d\'au moins 5 000 euros hors taxe. Pour un prestataire établi à l\'étranger, demandez à votre conseil quels documents équivalents sont exigés avant la signature : la réponse dépend de votre situation.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que prévoit le règlement européen sur l\'IA pour une entreprise qui déploie un assistant ou une automatisation ?',
            'paragraphes' => [
                'La Commission européenne indique sur sa page consacrée au cadre réglementaire que le règlement sur l\'intelligence artificielle est entré en vigueur le 1er août 2024 et applicable le 2 août 2026, avec des exceptions. Les pratiques interdites s\'appliquent depuis le 2 février 2025, les règles de gouvernance et celles des modèles à usage général depuis le 2 août 2025.',
                'Le calendrier des systèmes à haut risque a été décalé par l\'omnibus numérique sur l\'IA, entré en vigueur le 27 juillet 2026 : la même page fixe au 2 décembre 2027 les règles pour les systèmes à haut risque des domaines sensibles (biométrie, infrastructures critiques, éducation, emploi, migration, asile, contrôle aux frontières) et au 2 août 2028 celles des systèmes intégrés à des produits réglementés. Avant de lancer un projet d\'envergure, vérifiez ces dates sur la page de la Commission.',
                'Pour la plupart des projets de Richard, un assistant de relation client, un tri de courriels, un résumé de documents, l\'obligation qui compte est celle de l\'article 4 : fournisseurs et utilisateurs professionnels prennent des mesures pour soutenir la maîtrise de l\'IA de leurs équipes. Les questions-réponses de la Commission précisent que cette obligation est applicable depuis le 2 février 2025, que le contrôle par les autorités nationales de surveillance du marché commence le 3 août 2026 et que le texte modifié n\'exige plus un niveau « suffisant » de maîtrise. Aucun format de formation ni certificat n\'est imposé : des dossiers internes suffisent à documenter la démarche.',
                'Une formation des équipes répond à cette obligation, de même que l\'inventaire des usages, la charte interne et le choix de modèles qui n\'entraînent pas leur apprentissage sur vos données. Richard intègre ces éléments aux projets d\'IA : il documente les flux, journalise les réponses utiles à la preuve et laisse un humain décider quand une réponse engage l\'entreprise.',
            ],
        ],
        [
            'type'        => 'vigilance',
            'titre'       => 'Un hébergement en Europe suffit-il à éviter les transferts de données ?',
            'texte'        => 'Non. Un serveur situé dans l\'Union règle la localisation du stockage, pas les accès : si Richard consulte ou modifie des données personnelles depuis Cotonou, cet accès à distance est un transfert au sens du règlement. Le montage sûr combine hébergement européen, accès nominatifs limités dans le temps, jeux de données fictifs pour le développement, clauses contractuelles types et analyse d\'impact quand des données réelles sont nécessaires.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises françaises, selon le besoin du moment ?',
            'legende' => 'Besoins types d\'entreprises françaises qui externalisent une partie de leur développement ; le détail de chaque service figure sur sa page.',
            'entetes' => ['Besoin typique en France', 'Service', 'Page'],
            'lignes'  => [
                ['Un renfort de développement pour une agence, une ESN ou une équipe produit, en marque blanche ou en direct', 'Externalisation du développement', '<a href="/services/externalisation-developpement">Externalisation du développement</a>'],
                ['Une application métier pour remplacer des tableurs partagés, avec droits d\'accès et traçabilité', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Un espace client ou un logiciel en ligne vendu par abonnement', 'SaaS et espace client', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Une boutique en ligne avec paiement par carte, authentification forte et facturation conforme', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Un site vitrine ou une refonte qui garde les positions dans Google', 'Refonte et migration de site', '<a href="/services/refonte-migration-de-site">Refonte et migration de site</a>'],
                ['Des saisies, relances et rapprochements qui se font encore à la main', 'Automatisation et IA', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Un assistant IA qui répond sur WhatsApp ou sur le site, avec consentement et traçabilité', 'Agents IA et chatbot WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['L\'IA branchée sur un logiciel existant : documents, courriels, base clients', 'Intégration de l\'IA', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Un ERP paramétré pour une PME, avec facturation prête pour la plateforme agréée', 'Intégration Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un logiciel de gestion plus léger pour une petite structure', 'Intégration Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Des interfaces entre vos logiciels : comptabilité, CRM, paiement, facturation', 'API et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Un état des lieux avant d\'engager un budget de développement', 'Audit et étude de projet', '<a href="/services/audit-etude-de-projet">Audit et étude de projet</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Que donne l\'externalisation dans les métiers français qui y recourent ?',
            'items' => [
                [
                    'secteur'  => 'Expertise comptable et conseil aux entreprises',
                    'probleme' => 'Un site bâti sur un WordPress devenu ingérable, des demandes de clients qui arrivent par courriel et se perdent, des simulateurs fiscaux à refaire.',
                    'solution' => 'Impulse Finance, cabinet d\'expertise comptable installé à Argenteuil, a quitté son WordPress sans perdre son référencement : suivi des demandes, simulateurs fiscaux et redirections 301, livrés en trois jours, réalisé en sous-traitance pour Digital Développement.',
                    'lien'     => ['url' => '/realisations/', 'texte' => 'Voir les réalisations'],
                ],
                [
                    'secteur'  => 'Cosmétiques et commerce en ligne entre Paris et Abidjan',
                    'probleme' => 'Une marque qui vend dans deux zones doit gérer deux devises, deux modes de livraison, des stocks et des coupons sans doubler le travail de son équipe.',
                    'solution' => 'Laura Cosmetics, à Paris et Abidjan, vend ses produits dans deux devises et vers deux zones de livraison ; l\'équipe gère stocks, coupons et indicateurs de vente depuis un back-office, réalisé en sous-traitance pour Digital Développement.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Site e-commerce'],
                ],
                [
                    'secteur'  => 'Agences web et sociétés de services numériques',
                    'probleme' => 'Une charge qui varie d\'un mois à l\'autre, des recrutements longs et un développeur indisponible quand un client signe.',
                    'solution' => 'Un renfort externe sur un périmètre précis : un module, une application, une intégration. Le prestataire travaille dans votre dépôt de code, avec vos outils de suivi et vos règles de revue, et la livraison passe par votre recette.',
                    'lien'     => ['url' => '/externaliser-developpement-web-paris', 'texte' => 'Externaliser le développement web à Paris'],
                ],
                [
                    'secteur'  => 'Négoce, distribution et PME industrielles',
                    'probleme' => 'Des devis, des stocks et des factures répartis entre un tableur, un logiciel ancien et une messagerie, avec une obligation de facture électronique qui approche.',
                    'solution' => 'Un ERP Odoo ou Dolibarr paramétré pour les achats, les ventes, le stock et la facturation, relié à votre plateforme agréée, avec reprise des données et formation des équipes.',
                    'lien'     => ['url' => '/services/integration-odoo', 'texte' => 'Intégration Odoo'],
                ],
                [
                    'secteur'  => 'Cabinets, agences immobilières et services de proximité à Lyon ou Marseille',
                    'probleme' => 'Les demandes de rendez-vous arrivent par téléphone, par courriel et par WhatsApp, et la même personne répond à tout.',
                    'solution' => 'Un système de réservation en ligne avec calendrier unique, confirmation par message et assistant qui répond aux questions fréquentes, avec consentement et désinscription prévus.',
                    'lien'     => ['url' => '/services/systeme-de-reservation-en-ligne', 'texte' => 'Système de réservation en ligne'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles formations pour les équipes françaises, et avec quels financements ?',
            'paragraphes' => [
                'Les formations en ligne pour les équipes françaises peuvent s\'organiser ainsi : séances en visioconférence sur vos outils réels, exercices sur vos propres fichiers, supports en français. Les groupes peuvent se découper par métier plutôt que par niveau général, et les plages horaires suivent vos heures de bureau, à Paris, Lyon ou Marseille, avec zéro ou une heure d\'écart avec Cotonou.',
                'Un sujet s\'impose pour les entreprises qui déploient de l\'IA : l\'obligation de maîtrise de l\'IA de l\'article 4 du règlement européen, applicable depuis le 2 février 2025 et contrôlée par les autorités nationales depuis le 3 août 2026. Une formation structurée, avec un support, des exercices et une charte d\'usage, documente la démarche de l\'entreprise.',
                'Pour le financement, service-public.gouv.fr rappelle que la contribution à la formation professionnelle représente 0,55 % de la masse salariale brute pour les sociétés de moins de 11 salariés et 1 % au-delà. L\'opérateur de compétences (OPCO) de votre branche, que l\'on trouve avec l\'outil officiel « Trouver son Opco », indique les dispositifs ouverts et leurs conditions de prise en charge.',
                'Le compte personnel de formation suit une règle particulière : service-public.gouv.fr indique que le titulaire doit participer au financement à hauteur de 150 euros, somme que son OPCO ou son employeur peut prendre en charge. Les formations accessibles se consultent sur Mon Compte Formation. Avant de réserver une formation que vous comptez faire financer, demandez à votre OPCO ce qu\'il accepte ; Richard fournit le programme, la durée et le devis pour constituer ce dossier.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles formations choisir pour une équipe française ?',
            'intro' => 'Ces fiches répondent aux demandes les plus fréquentes des entreprises qui externalisent ou internalisent un projet numérique ; chacune se règle selon votre métier.',
            'items' => [
                ['titre' => 'IA en entreprise', 'texte' => 'Pour les équipes qui rédigent, résument et analysent avec des assistants, sans exposer de données sensibles, et qui relèvent de l\'obligation de maîtrise de l\'IA. <a href="/formations/ia-en-entreprise">Voir la formation</a>.'],
                ['titre' => 'IA, éthique et conformité des données', 'texte' => 'Pour les équipes juridiques, ressources humaines et direction : données personnelles, secret, biais, règlement européen sur l\'IA. <a href="/formations/ia-ethique-conformite">Voir la formation</a>.'],
                ['titre' => 'Gouverner l\'IA dans l\'entreprise', 'texte' => 'Pour les dirigeants : charte d\'usage, inventaire des outils, rôles et contrôle. <a href="/formations/gouvernance-ia">Voir la formation</a>.'],
                ['titre' => 'Automatisation avec n8n', 'texte' => 'Pour relier messagerie, tableur, facturation et paiement sans écrire de code, avec un hébergement choisi par vous. <a href="/formations/n8n">Voir la formation</a>.'],
                ['titre' => 'Odoo pour vos équipes', 'texte' => 'Pour les utilisateurs d\'un ERP : ventes, achats, stock, facturation, avec une facturation prête pour la plateforme agréée. <a href="/formations/odoo-utilisateurs">Voir la formation</a>.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment travailler avec Richard depuis la France ?',
            'intro' => 'La collaboration avec une entreprise française repose sur la régularité des échanges et la clarté du contrat plus que sur la présence physique.',
            'items' => [
                ['titre' => 'Fuseau horaire', 'texte' => 'Cotonou reste à la même heure toute l\'année. La France passe à l\'heure d\'été le dernier dimanche de mars et revient à l\'heure d\'hiver le dernier dimanche d\'octobre, soit le 25 octobre 2026 : Paris a alors une heure d\'avance sur Cotonou de la fin mars à la fin octobre, et aucun écart le reste de l\'année. Les journées de bureau se recoupent dans les deux cas.'],
                ['titre' => 'Langue', 'texte' => 'Le français pour les échanges avec vos équipes, les contrats et les supports de formation, l\'anglais si un de vos partenaires l\'exige.'],
                ['titre' => 'Devise des devis', 'texte' => 'L\'euro, sur devis détaillé : aucun risque de change côté client. Les modes de règlement et l\'échéancier se fixent au devis.'],
                ['titre' => 'Contrat et facturation', 'texte' => 'Un contrat écrit qui précise le périmètre, la recette, la cession des droits, la confidentialité, le droit applicable, et une facture établie hors TVA française avec la mention adaptée à l\'autoliquidation, validée par votre comptable.'],
                ['titre' => 'Outils de suivi', 'texte' => 'Le projet peut prévoir un espace de suivi partagé (le vôtre de préférence), un rythme de visioconférence convenu au devis, un groupe de messagerie pour les questions rapides et une démonstration à chaque étape livrée.'],
                ['titre' => 'Premier échange', 'texte' => 'Vous exposez votre activité et votre blocage ; Richard répond sous 24 heures avec une première lecture du besoin, puis propose si besoin une visioconférence de cadrage.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel budget prévoir pour confier un projet depuis la France ?',
            'paragraphes' => [
                'Le prix dépend d\'abord de ce que le projet doit faire : le nombre d\'écrans et de rôles d\'utilisateurs, les intégrations à raccorder (paiement, comptabilité, plateforme de facturation, messagerie), le volume de données à reprendre, le niveau de test attendu et la formation des équipes. Un site vitrine, une boutique avec Stripe et un ERP multi-sociétés n\'ont aucun point commun.',
                'Pour la France, trois éléments s\'ajoutent. D\'abord la conformité : contrat de sous-traitance des données, clauses types et analyse d\'impact quand des données réelles circulent vers Cotonou, charte d\'usage de l\'IA. Ensuite la facturation électronique, avec ses mentions et sa connexion à une plateforme agréée. Enfin l\'exigence de recette formelle, fréquente chez les clients qui externalisent, qui prévoit des jeux d\'essai et une documentation.',
                'Les devis sont établis en euros, sur mesure, à partir d\'un cadrage du besoin. Le prix se fixe au forfait quand le périmètre est stable, ou par lots successifs quand il évolue : deux projets qui portent le même nom se chiffrent rarement pareil.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Comment un projet se chiffre-t-il, selon sa nature ?',
            'items' => [
                ['offre' => 'Site vitrine ou page de campagne', 'prix' => 'Sur devis, en euros', 'inclus' => ['Pages lisibles sur téléphone', 'Formulaire conforme au RGPD', 'Référencement de base', 'Mise en ligne']],
                ['offre' => 'Boutique en ligne', 'prix' => 'Sur devis, en euros', 'inclus' => ['Catalogue et panier', 'Paiement par carte avec authentification forte', 'Factures conformes', 'Formation des équipes']],
                ['offre' => 'Application, ERP ou automatisation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Cadrage et recette', 'Intégrations', 'Documentation', 'Formation des équipes']],
                ['offre' => 'Renfort de développement', 'prix' => 'Sur devis, en euros', 'inclus' => ['Périmètre et livrables écrits', 'Travail dans votre dépôt de code', 'Suivi régulier']],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on souvent quand on externalise depuis la France ?',
            'intro' => 'Chacune de ces erreurs se corrige facilement au cadrage ; découverte plus tard, elle coûte du temps et de l\'argent.',
            'items' => [
                ['titre' => 'Signer sans contrat de sous-traitance des données', 'texte' => 'Dès que le prestataire accède à des données personnelles pour votre compte, l\'article 28 du règlement exige un contrat avec des mentions précises. Un simple devis ne suffit pas.'],
                ['titre' => 'Oublier le transfert hors Union européenne', 'texte' => 'Un accès à distance depuis Cotonou à des données réelles est un transfert. Sans décision d\'adéquation, il faut des garanties : clauses types et analyse d\'impact.'],
                ['titre' => 'Découvrir l\'autoliquidation au moment de la déclaration', 'texte' => 'Le comptable doit connaître la facture d\'un prestataire hors Union avant le premier paiement, pour prévoir la mention, l\'écriture et la ligne de déclaration.'],
                ['titre' => 'Attendre le 1er septembre 2027 pour la facturation électronique', 'texte' => 'La réception est obligatoire pour toutes les entreprises depuis le 1er septembre 2026 ; les PME doivent émettre à compter du 1er septembre 2027. Un logiciel choisi aujourd\'hui doit déjà s\'y préparer.'],
                ['titre' => 'Ne pas fixer le droit applicable ni la cession des droits', 'texte' => 'Sans clause claire, la propriété du code et la juridiction compétente se discutent après un désaccord. Mieux vaut les écrire au départ, avec le moment du transfert des droits.'],
                ['titre' => 'Déployer de l\'IA sans former les équipes', 'texte' => 'L\'obligation de maîtrise de l\'IA est contrôlée par les autorités nationales depuis le 3 août 2026. Un assistant sans charte, sans formation et sans journal des réponses est difficile à justifier lors d\'un contrôle.'],
                ['titre' => 'Ouvrir les moyens de paiement sans tester l\'authentification forte', 'texte' => 'Une intégration de carte qui ne gère pas 3D Secure subit des refus de la banque du client. Le test des cas d\'échec fait partie de la recette.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet à Richard SALANON quand on est en France ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard a déjà travaillé en France, comme dans treize autres pays dont la Belgique, la Suisse et le Canada. Parmi les projets de son portfolio situés en France : Impulse Finance, un cabinet d\'expertise comptable d\'Argenteuil dont le site WordPress a été refondu en trois jours sans perte de référencement, avec suivi des demandes et simulateurs fiscaux ; et Laura Cosmetics, une boutique à Paris et Abidjan avec un back-office complet. Ces deux projets ont été réalisés en sous-traitance pour Digital Développement ; le détail figure sur la page des <a href="/realisations/">réalisations</a>.',
                'Richard a étudié à EPITECH, a conçu Wapy, un assistant WhatsApp à intelligence artificielle, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Son parcours est détaillé sur <a href="/richard-salanon">la page de Richard SALANON</a> et sur la page <a href="/a-propos/">À propos</a>. Les pages locales détaillent les services les plus demandés : <a href="/externaliser-developpement-web-paris">externaliser le développement web à Paris</a>, <a href="/externaliser-developpement-web-lyon">à Lyon</a> et <a href="/externaliser-developpement-web-marseille">à Marseille</a>, ainsi que la formation IA à <a href="/formation-ia-entreprise-paris">Paris</a>, <a href="/formation-ia-entreprise-lyon">Lyon</a> et <a href="/formation-ia-entreprise-marseille">Marseille</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel projet voulez-vous externaliser depuis la France ?',
            'texte'  => 'Décrivez votre activité et votre besoin. La réponse arrive sous 24 heures, avec une première lecture du projet et un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Peut-on confier du développement à un prestataire basé au Bénin quand on est une entreprise française ?', 'r' => 'Oui. Richard travaille à distance depuis Cotonou pour des entreprises françaises, dans le cadre d\'un contrat écrit en français, avec des devis et des factures en euros. Le cadrage porte sur le droit applicable, la cession des droits, les données personnelles et la TVA autoliquidée.'],
        ['q' => 'La TVA s\'applique-t-elle à la facture d\'un prestataire hors Union européenne ?', 'r' => 'Richard ne facture pas de TVA française. Pour une prestation de services entre professionnels, c\'est en principe le client assujetti qui déclare la taxe : c\'est l\'autoliquidation. Service-public.gouv.fr cite la mention « Autoliquidation » parmi les mentions exigées dans ce cas. Votre expert-comptable valide la facture avant la signature.'],
        ['q' => 'Le RGPD interdit-il de confier des données personnelles à un prestataire à Cotonou ?', 'r' => 'Non, mais il l\'encadre. Un contrat de sous-traitance de l\'article 28 est nécessaire ; sans décision d\'adéquation pour le Bénin, le transfert passe par des clauses contractuelles types et une analyse d\'impact. Le plus simple est de développer sur des données fictives et de garder les données réelles sur un serveur européen.'],
        ['q' => 'Le Bénin figure-t-il parmi les pays reconnus adéquats par la Commission européenne ?', 'r' => 'La liste de la Commission cite Andorre, l\'Argentine, le Brésil, le Canada, les îles Féroé, Guernesey, Israël, l\'île de Man, le Japon, Jersey, la Nouvelle-Zélande, la Corée du Sud, la Suisse, le Royaume-Uni, les États-Unis, l\'Uruguay et l\'Organisation européenne des brevets. Les transferts vers le Bénin recourent donc à des garanties contractuelles.'],
        ['q' => 'Quand la facturation électronique devient-elle obligatoire en France ?', 'r' => 'Toutes les entreprises doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026. Les grandes entreprises et les entreprises de taille intermédiaire émettent à la même date ; les PME et les très petites entreprises à partir du 1er septembre 2027, avec le même calendrier pour l\'e-reporting.'],
        ['q' => 'Qu\'est-ce qu\'une plateforme agréée pour la facturation électronique ?', 'r' => 'Selon l\'administration fiscale, c\'est un opérateur de dématérialisation immatriculé par l\'État, après vérification de sa conformité, de sa sécurité et de son interopérabilité avec le Portail public de facturation. La liste est publiée sur impots.gouv.fr. Un logiciel de gestion se connecte à la plateforme que vous choisissez.'],
        ['q' => 'Le règlement européen sur l\'IA concerne-t-il un assistant WhatsApp ou une automatisation ?', 'r' => 'L\'obligation de maîtrise de l\'IA de l\'article 4 s\'applique aux fournisseurs et aux utilisateurs professionnels depuis le 2 février 2025, avec un contrôle national depuis le 3 août 2026. Les règles des systèmes à haut risque sont fixées au 2 décembre 2027 et au 2 août 2028 selon la page de la Commission.'],
        ['q' => 'Quels moyens de paiement intégrer sur un site destiné aux clients français ?', 'r' => 'Les cartes bancaires avec authentification forte 3D Secure, le prélèvement SEPA pour les abonnements, Wero et le virement selon la clientèle. Stripe liste les cartes et le prélèvement SEPA dans sa documentation. Le choix dépend du panier moyen et de la fréquence des achats.'],
        ['q' => 'Une formation animée par Richard peut-elle être financée par un OPCO ou le CPF ?', 'r' => 'Cela dépend de votre OPCO et du dispositif. Pour le CPF, service-public.gouv.fr indique que le titulaire participe à hauteur de 150 euros, qu\'un OPCO ou un employeur peut prendre en charge, et que les formations se consultent sur Mon Compte Formation. Demandez à votre OPCO ce qu\'il accepte avant de réserver ; Richard fournit le programme, la durée et le devis nécessaires au dossier.'],
        ['q' => 'Y a-t-il un décalage horaire entre Paris et Cotonou ?', 'r' => 'Cotonou reste à la même heure toute l\'année. Paris a une heure d\'avance de la fin mars à la fin octobre, soit jusqu\'au 25 octobre 2026, et aucun écart le reste de l\'année. Les journées de bureau se recoupent dans les deux cas.'],
        ['q' => 'En quelle monnaie sont établis les devis pour la France ?', 'r' => 'En euros, sur mesure, après un cadrage du besoin : chaque projet se chiffre à partir de son périmètre.'],
        ['q' => 'Richard SALANON se déplace-t-il en France ?', 'r' => 'Non. Richard intervient auprès des entreprises françaises à distance : visioconférence pour le cadrage et la formation, messagerie pour le suivi.'],
    ],

    'sources' => [
        ['titre' => 'Direction générale des Finances publiques, passer à la facturation électronique (page modifiée le 1er septembre 2026)', 'url' => 'https://www.impots.gouv.fr/professionnel/je-passe-la-facturation-electronique', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale des Finances publiques, calendrier de la réforme de la facturation électronique (page mise à jour le 6 janvier 2026)', 'url' => 'https://www.impots.gouv.fr/japprofondis-mes-connaissances-sur-la-reforme', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale des Finances publiques, liste des plateformes agréées (modifiée le 22 septembre 2026)', 'url' => 'https://www.impots.gouv.fr/je-consulte-la-liste-des-plateformes-agreees', 'date' => '2026-10-06'],
        ['titre' => 'Service-public.gouv.fr, tout savoir sur la facturation (autoliquidation, prestataire hors Union européenne, vérifiée le 7 août 2026)', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F23208', 'date' => '2026-10-06'],
        ['titre' => 'Service-public.gouv.fr, délais de paiement entre professionnels et pénalités de retard', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F23211', 'date' => '2026-10-06'],
        ['titre' => 'Service-public.gouv.fr, externaliser certaines activités', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F36266', 'date' => '2026-10-06'],
        ['titre' => 'Service-public.gouv.fr, obligations RGPD des entreprises', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F24270', 'date' => '2026-10-06'],
        ['titre' => 'Service-public.gouv.fr, contribution à la formation professionnelle', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F22570', 'date' => '2026-10-06'],
        ['titre' => 'Service-public.gouv.fr, trouver son opérateur de compétences (Opco)', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/R63043', 'date' => '2026-10-06'],
        ['titre' => 'Service-public.gouv.fr, compte personnel de formation (participation de 150 euros)', 'url' => 'https://www.service-public.gouv.fr/particuliers/vosdroits/F10705', 'date' => '2026-10-06'],
        ['titre' => 'CNIL, le règlement européen sur la protection des données', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-06'],
        ['titre' => 'CNIL, transférer des données hors de l\'Union européenne', 'url' => 'https://www.cnil.fr/fr/transferer-des-donnees-hors-de-lue', 'date' => '2026-10-06'],
        ['titre' => 'CNIL, sous-traitance : exemple de clauses', 'url' => 'https://www.cnil.fr/fr/sous-traitance-exemple-de-clauses', 'date' => '2026-10-06'],
        ['titre' => 'CNIL, les sanctions prononcées', 'url' => 'https://www.cnil.fr/fr/les-sanctions-prononcees-par-la-cnil', 'date' => '2026-10-06'],
        ['titre' => 'Commission européenne, décisions d\'adéquation en matière de protection des données', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/adequacy-decisions_en', 'date' => '2026-10-06'],
        ['titre' => 'Commission européenne, cadre réglementaire de l\'intelligence artificielle (mis à jour le 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-06'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA, article 4', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-06'],
        ['titre' => 'Stripe, prise en charge des moyens de paiement', 'url' => 'https://docs.stripe.com/payments/payment-methods/payment-method-support', 'date' => '2026-10-06'],
        ['titre' => 'Stripe, préparation à l\'authentification forte du client', 'url' => 'https://docs.stripe.com/strong-customer-authentication', 'date' => '2026-10-06'],
        ['titre' => 'Stripe, paiements Wero (version bêta privée)', 'url' => 'https://docs.stripe.com/payments/wero', 'date' => '2026-10-06'],
        ['titre' => 'Wero, présentation du service et pays couverts', 'url' => 'https://wero-wallet.eu/', 'date' => '2026-10-06'],
        ['titre' => 'Arcep, baromètre du numérique (publié le 9 février 2026)', 'url' => 'https://www.arcep.fr/cartes-et-donnees/nos-publications-chiffrees/barometre-du-numerique.html', 'date' => '2026-10-06'],
        ['titre' => 'Insee, population de la France au 1er janvier 2026', 'url' => 'https://www.insee.fr/fr/accueil', 'date' => '2026-10-06'],
        ['titre' => 'Insee, population de Paris, Lyon et Marseille en 2023 (publiée le 27 août 2026)', 'url' => 'https://www.insee.fr/fr/statistiques/1405599?geo=COM-75056', 'date' => '2026-10-06'],
        ['titre' => 'Conseil constitutionnel, Constitution du 4 octobre 1958 (articles 2 et 75-1)', 'url' => 'https://www.conseil-constitutionnel.fr/le-bloc-de-constitutionnalite/texte-integral-de-la-constitution-du-4-octobre-1958-en-vigueur', 'date' => '2026-10-06'],
        ['titre' => 'Base de données des fuseaux horaires de l\'IANA, Africa/Porto-Novo (fuseau du Bénin, UTC+1, sans heure d\'été)', 'url' => 'https://github.com/eggert/tz/blob/main/africa', 'date' => '2026-10-06'],
        ['titre' => 'EUR-Lex, directive 2000/84/CE sur les dispositions relatives à l\'heure d\'été', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32000L0084', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['externalisation-developpement', 'application-web-sur-mesure', 'site-e-commerce', 'automatisation-ia', 'agents-ia-chatbot-whatsapp', 'integration-ia-entreprise', 'integration-odoo', 'integration-dolibarr', 'api-rest-integrations', 'formation-en-entreprise', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['ia-en-entreprise', 'ia-ethique-conformite', 'gouvernance-ia', 'n8n', 'odoo-utilisateurs'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['experts-comptables', 'chefs-entreprise-dirigeants', 'commercants-e-commercants'],
    ],
];
