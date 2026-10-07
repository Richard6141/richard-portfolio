<?php
// ============================================================
// data/secteurs/medias.php · Page secteur « Médias et communication »
// (vague 1E, univers Commerce et communication). Projet rattaché : OBA TV
// (client direct, Cotonou). Pas de page locale. Publics : journalistes et
// médias (F), marketing et communication (F).
// Faits externes relevés le 07/10/2026 : Reuters Institute Digital News Report
// 2026, DataReportal Digital 2026 Bénin, RSF (fiche Bénin 2026), HAAC
// (actualité du 1er octobre 2026), loi béninoise n° 2015-07 (PDF du SGG :
// articles 35, 37 à 39, 123, 124, 126), loi n° 2017-20 (PDF du SGG : articles
// 332, 391, 392, 397, 398), DGI et gouvernement du Bénin (facture normalisée),
// loi sénégalaise n° 2017-27 (article 94) et n° 2008-12, loi ivoirienne
// n° 2013-450, RGPD (articles 6, 7, 85), CNIL (mesure d'audience), règlement
// européen sur la liberté des médias, règlement sur l'IA (article 50),
// Cloudflare Stream (tarifs), Odoo (application Abonnements), Meta (tarifs).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Médias et communication : des chaînes, des rédactions et des agences qui diffusent sur tous les écrans, vendent leurs contenus et publient avec l\'IA sans perdre la main',
    'title'   => 'Digitalisation et IA pour les médias | Richard SALANON',
    'meta'    => 'Web TV, radios, rédactions et agences : application, abonnement par mobile money, IA encadrée et référencement, sur devis, réponse sous 24 heures.',
    'en_bref' => 'Richard SALANON conçoit pour les web TV, radios en ligne, journaux, rédactions et agences de communication des applications web et mobiles sur mesure, des espaces abonnés payés par mobile money, du référencement naturel et des outils d\'IA encadrés par la déontologie. Il intervient à distance, et sur place au Bénin. Le prix se fixe sur devis après un premier échange gratuit ; seuls les tarifs de départ d\'un site vitrine, d\'une landing page et du référencement sont publiés.',
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'univers' => 'Commerce et communication',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Web TV, radios en ligne, journaux, rédactions, agences et services de communication'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation des médias en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Le public africain francophone est en ligne sur mobile, mais il reste minoritaire dans la population. Selon <a href="https://datareportal.com/reports/digital-2026-benin">DataReportal (Digital 2026, Bénin)</a>, 4,80 millions de personnes utilisaient internet au Bénin en octobre 2025, soit 32,2 % des habitants, pour 16,4 millions de connexions mobiles actives et 2,50 millions d\'identités de réseaux sociaux à la même date. Un média béninois qui diffuse en ligne parle donc à un public de téléphones, souvent avec des forfaits de données comptés, et non à un public d\'ordinateurs de bureau.',
                'Le paysage éditorial est dense, mais fragile. Dans la fiche Bénin de <a href="https://rsf.org/fr/pays-b%C3%A9nin">Reporters sans frontières</a>, le pays est classé 113e sur 180 en 2026 avec 47,39 points ; RSF y compte environ 70 radios, 15 télévisions et 100 journaux, relève l\'absence de grandes entreprises de presse viables et décrit un marché publicitaire étroit. La digitalisation ne se limite donc pas à publier plus : elle vise aussi à trouver des revenus qui ne dépendent pas seulement des annonceurs.',
                'Le cadre juridique suit le mouvement. Le 1er octobre 2026, selon une <a href="https://haac.bj/actualite/201">actualité de la HAAC</a>, le régulateur a signé des conventions avec 89 exploitants de médias en ligne : 50 titres de presse, 13 radios web et 26 télévisions sur internet. Une web TV béninoise s\'inscrit donc dans un cadre de régulation, avec une convention à obtenir de la HAAC, et non dans celui d\'une simple chaîne de vidéos déposées sur une plateforme.',
                'En Europe, la demande a changé de forme. Le <a href="https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary">Digital News Report 2026 du Reuters Institute</a> mesure une confiance dans l\'information de 37 % sur l\'ensemble des marchés, la plus basse depuis 2015 ; 54 % des personnes interrogées s\'informent par les réseaux sociaux et les plateformes vidéo, et 77 % regardent de la vidéo d\'actualité en ligne chaque semaine. Dans vingt pays, 17 % en moyenne paient pour s\'informer en ligne, de 40 % en Norvège à 10 % au Royaume-Uni et 16 % aux États-Unis.',
                'Le même rapport note que 10 % des personnes interrogées s\'informent chaque semaine par un assistant d\'IA, 16 % chez les moins de 35 ans, alors que 20 % seulement font confiance à ces réponses. Au Maroc, selon la <a href="https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/morocco">page du pays</a>, 36 % partagent des informations par les réseaux, la messagerie ou le courriel, sept points de plus en un an, et la confiance est de 28 %. L\'enquête se fait en ligne : elle décrit les internautes, pas l\'ensemble de la population.',
                'Pour un média ou une agence, trois chantiers en découlent : diffuser sur le téléphone du public, faire payer ce qui a de la valeur par un moyen que le public utilise, et prouver la fiabilité de ce qu\'on publie. Les services de Richard SALANON s\'organisent autour de ces trois chantiers.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d\'un média ou d\'une agence gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Un média ou une agence fabrique, diffuse et facture des contenus. Chacun de ces trois gestes se fait encore, dans bien des structures, par messagerie, tableur et disque dur. Voici les processus qui rapportent le plus quand ils passent dans un outil, et le signe qui annonce que le moment est venu.',
            'items' => [
                ['titre' => 'La chaîne de fabrication de l\'information', 'texte' => 'Sujet, brouillon, relecture, validation, publication, rectificatif : quand les textes circulent en pièces jointes, personne ne sait quelle version est en ligne. Signe : une erreur corrigée sur le site mais restée dans la version diffusée sur WhatsApp.'],
                ['titre' => 'La grille des programmes et la diffusion', 'texte' => 'Direct, rediffusions, replays, émissions à heure fixe : la grille doit se lire sur le site comme à l\'antenne. Signe : le public demande sur les réseaux sociaux à quelle heure passe l\'émission, parce que personne ne tient la grille à jour.'],
                ['titre' => 'L\'abonnement et l\'accès premium', 'texte' => 'Un contenu payant suppose des comptes, des échéances, des relances et des factures. Signe : les paiements arrivent par mobile money, et un employé vérifie à la main chaque capture d\'écran avant d\'ouvrir l\'accès.'],
                ['titre' => 'La régie publicitaire et la facturation des annonceurs', 'texte' => 'Devis, ordres d\'insertion, passages réellement diffusés, factures : sans suivi, on facture moins que ce qui a été diffusé. Signe : l\'annonceur conteste une facture et personne ne retrouve la preuve des diffusions.'],
                ['titre' => 'Les archives et les droits', 'texte' => 'Photos, vidéos, sons, extraits : qui les a produits, avec quelle autorisation, jusqu\'à quand ? Signe : une image est réutilisée dans un article sans que quiconque sache d\'où elle vient.'],
                ['titre' => 'La mesure de l\'audience', 'texte' => 'Savoir quels contenus sont vus, jusqu\'où, et par qui, pour décider de la grille ou de la ligne éditoriale. Signe : la rédaction pilote au chiffre de la page Facebook, qui ne dit rien de ce qui se passe sur son propre site.'],
                ['titre' => 'Le flux des clients et des validations, côté agence', 'texte' => 'Brief, maquettes, retours, validations, calendrier éditorial, rapport mensuel. Signe : une validation donnée de vive voix, contestée trois semaines plus tard, faute d\'écrit daté.'],
                ['titre' => 'Le droit de réponse et les demandes de rectification', 'texte' => 'Au Bénin, la loi n° 2015-07 enferme la demande de réponse dans un délai de huit jours : le suivi doit être daté et visible. Signe : une demande reçue par courriel dont on découvre l\'existence après le délai.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Une radio qui n\'a qu\'un émetteur et un auditoire local sans smartphone n\'a pas besoin d\'une application. Une agence de deux personnes n\'a pas besoin d\'un outil de validation sur mesure : un tableau partagé bien tenu suffit. Le cadrage sert aussi à le dire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour un média, une rédaction ou une agence de communication ?',
            'legende' => 'Chaque ligne associe un besoin courant du secteur au service qui y répond ; le chiffrage de chacun se fait sur devis, après un échange gratuit.',
            'entetes' => ['Besoin typique du secteur', 'Service', 'Lien'],
            'lignes'  => [
                ['Une chaîne en ligne avec direct, replays, grille des programmes et rédaction autonome', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Un public qui consulte sur téléphone et attend une application dans les magasins', 'Application mobile Android et iOS', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
                ['Des abonnés avec compte, accès premium, échéances, factures et historique de paiement', 'Espace client et abonnements', '<a href="/services/saas-espace-client">Espace client et SaaS</a>'],
                ['Des articles et des vidéos qui ne sortent pas dans Google', 'Référencement naturel', '<a href="/services/referencement-naturel-seo">Référencement naturel (SEO)</a>'],
                ['Une rédaction qui veut transcrire, résumer, titrer ou trier des dépêches avec un humain qui valide', 'Intégration de l\'IA en entreprise', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Une publication qui doit partir d\'un seul endroit vers le site, les réseaux et la messagerie', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Une chaîne WhatsApp ou une ligne de messagerie pour envoyer les titres et répondre aux abonnés', 'Intégration WhatsApp', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Un site de presse ancien, lent, mal référencé, dont il faut garder les archives', 'Refonte et migration de site', '<a href="/services/refonte-migration-de-site">Refonte et migration de site</a>'],
                ['Une page de lancement pour une saison, une émission ou un abonnement', 'Landing page', '<a href="/services/landing-page-haute-conversion">Landing page à forte conversion</a>'],
                ['Une plateforme en service, avec un direct qui ne doit pas tomber un soir d\'événement', 'Maintenance et support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels logiciels et quelles intégrations existent pour un média, et quand faut-il garder l\'existant ?',
            'legende' => 'Tour d\'horizon par fonction ; l\'application Abonnements d\'Odoo et les tarifs de Cloudflare Stream ont été relevés dans leur documentation le 07/10/2026, les autres lignes décrivent des usages courants.',
            'entetes' => ['Fonction', 'Ce qui existe', 'Garder et relier quand', 'Remplacer quand'],
            'lignes'  => [
                ['Publier des articles', 'Systèmes de gestion de contenu du marché, comme WordPress, ou outil maison', 'Les journalistes maîtrisent l\'outil, les archives y sont et le référencement est correct ; on ajoute un connecteur vers la messagerie et les réseaux', 'Le site est lent, non mis à jour, ou impose des extensions que plus personne ne maintient'],
                ['Diffuser vidéo et direct', 'Plateformes vidéo publiques, ou service de diffusion vidéo en marque blanche', 'Le public regarde déjà sur la plateforme et la publicité y suffit ; le site intègre le lecteur', 'On veut un accès payant, un lecteur à ses couleurs et la maîtrise des données d\'audience'],
                ['Héberger et distribuer la vidéo', 'Services de diffusion vidéo à la minute, par exemple Cloudflare Stream, facturé selon sa page publique 5 dollars par mois par tranche de 1 000 minutes stockées et 1 dollar par tranche de 1 000 minutes délivrées', 'Le volume est modeste et la facture suit l\'audience sans surprise', 'L\'audience est massive et un devis entreprise ou une autre architecture coûte moins cher'],
                ['Gérer les abonnements', 'Application Abonnements d\'Odoo (plans récurrents, renouvellements, factures automatiques), module Adhérents et cotisations de Dolibarr pour une structure associative, ou espace abonné sur mesure', 'L\'entreprise tient déjà sa facturation et sa comptabilité dans Odoo ou Dolibarr ; on y relie le paiement et l\'accès', 'La règle d\'accès est propre au média (offre par émission, accès à un direct) et l\'ERP ne la porte pas : espace abonné sur mesure relié à l\'ERP par une API'],
                ['Encaisser par mobile money', 'Agrégateurs de paiement et interfaces des opérateurs (MTN MoMo, Moov Money)', 'Un agrégateur est déjà en place avec un bon taux de réussite ; on automatise le rapprochement', 'Le rapprochement entre paiement et abonnement se fait à la main, ou les échecs de paiement ne sont pas relancés'],
                ['Facturer les annonceurs', 'Logiciel de facturation ou ERP, éventuellement avec facture normalisée', 'Le logiciel est certifié pour le pays et la comptable l\'utilise ; on exporte les diffusions réelles vers lui', 'Il ne sait pas rattacher une facture à des passages diffusés'],
                ['Mesurer l\'audience', 'Outils d\'analyse du marché, mesure interne par le serveur', 'Les rapports servent réellement à décider', 'La mesure exige un bandeau de consentement mal vécu et le média n\'exploite que quelques chiffres'],
                ['Tenir le calendrier éditorial', 'Tableurs, outils collaboratifs, ou module intégré à un outil de publication', 'L\'équipe est petite et s\'y retrouve', 'Plusieurs clients doivent valider et on a besoin d\'une trace datée de chaque validation'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans un média ou une agence, et que ne doit-elle jamais faire ?',
            'intro' => 'Le secteur est peut-être celui où l\'IA est la plus tentante et la plus risquée : elle écrit vite, mais ce qu\'elle écrit engage la signature et la crédibilité du média. La ligne de partage ci-dessous suit la <a href="https://rsf.org/fr/la-charte-de-paris-sur-l-ia-et-le-journalisme">Charte de Paris</a> de RSF et la logique du <a href="/formations/ia-ethique-conformite">cours sur l\'éthique et la conformité</a> : l\'humain décide, la machine prépare.',
            'items' => [
                ['titre' => 'Transcrire, résumer et traduire des documents', 'texte' => 'Un entretien enregistré devient un texte en quelques minutes, une conférence de presse un résumé. Le journaliste relit contre l\'enregistrement avant de citer entre guillemets : une citation fabriquée par un outil reste une faute professionnelle.'],
                ['titre' => 'Trier et classer des flux', 'texte' => 'Dépêches, courriels de lecteurs, commentaires, communiqués : l\'IA classe, signale les doublons et les urgences. La décision de publier ne se délègue pas, surtout pour ce qui touche à des personnes.'],
                ['titre' => 'Proposer des titres, des résumés et des légendes', 'texte' => 'Elle propose plusieurs formulations ; la rédaction choisit et corrige. Une légende doit décrire ce que l\'image montre vraiment, et non ce que l\'outil croit y voir.'],
                ['titre' => 'Aider la recherche documentaire', 'texte' => 'Elle fait gagner du temps pour retrouver une archive, un chiffre ou une décision de justice, à condition que chaque affirmation soit vérifiée à la source primaire avant publication.'],
                ['titre' => 'Répondre au public', 'texte' => 'Un assistant de messagerie peut répondre aux questions sur la grille, les offres ou les paiements, sur la base de documents fournis. Il ne doit jamais inventer une règle : la <a href="/histoires/air-canada-chatbot">décision contre Air Canada</a> a rappelé qu\'une entreprise répond de ce que dit son robot.'],
                ['titre' => 'Ce qu\'elle ne doit jamais faire : manipuler les sources', 'texte' => 'Au Bénin, l\'article 35 de la loi n° 2015-07 astreint le journaliste au secret professionnel : il ne peut divulguer les sources et les origines des informations reçues confidentiellement, ni y être contraint. Un document confidentiel, un nom, un enregistrement ne se confient pas à un outil dont on ne maîtrise pas la conservation.'],
                ['titre' => 'Ce qu\'elle ne doit jamais faire : signer à la place de l\'humain', 'texte' => 'Un texte, une image ou une voix générés se signalent comme tels. L\'article 50 du règlement européen sur l\'IA prévoit que les contenus synthétiques soient marqués et que les textes d\'intérêt public publiés par IA soient signalés, sauf relecture éditoriale humaine.'],
                ['titre' => 'Ce qu\'elle ne doit jamais faire : trancher une question de personne', 'texte' => 'Accuser, identifier, qualifier un suspect, publier une photo de mineur : ces décisions relèvent du droit de la presse et de la déontologie, et la responsabilité reste celle du directeur de publication.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faire d\'un outil d\'IA qui conserve ce qu\'on lui confie ?',
            'texte' => 'Avant tout usage en rédaction, on vérifie où le fichier est stocké, combien de temps, et si le fournisseur s\'en sert pour améliorer son service. Une enquête en cours, un nom de source ou un document interne ne se déposent que dans un outil dont les conditions sont connues, ou dans un modèle exécuté sur un serveur que le média contrôle. À défaut, on anonymise d\'abord. Cette règle se met par écrit dans la charte de la rédaction avant le premier essai, pas après la première fuite.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de paiement, de facturation et de données personnelles encadrent un média ?',
            'paragraphes' => [
                'Le paiement d\'abord. Un abonnement premium se règle surtout par mobile money, MTN MoMo ou Moov Money, aux côtés de la carte bancaire, de PayPal et du virement que Richard accepte pour ses propres prestations. Le travail technique consiste à rattacher chaque paiement à un abonné, à ouvrir l\'accès au bon moment et à relancer les échecs. Pour départager les agrégateurs béninois, le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> sert de point de départ.',
                'La facture ensuite. Selon <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">le portail du gouvernement béninois</a>, la réforme de la facture normalisée concerne les entreprises assujetties à la TVA, qui émettent par le système e-MECeF ou un logiciel validé par l\'administration. Une entreprise concernée qui vend sans facture normalisée s\'expose à une amende égale à dix fois le montant, d\'au moins 1 000 000 FCFA par opération. Un média assujetti doit donc relier ses abonnements et ses annonceurs à un circuit conforme ; un média non assujetti le confirme avec son comptable.',
                'Les données personnelles enfin. La loi béninoise n° 2017-20 portant code du numérique, dans le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">texte publié par le SGG</a>, admet à son article 397 le traitement de données aux fins de journalisme lorsqu\'il est mis en œuvre à titre professionnel dans le respect de la déontologie, et son article 398 réserve les lois de la presse sur le droit de réponse et l\'atteinte à la vie privée. Cette exception protège la rédaction, pas le fichier des abonnés : pour celui-ci, les règles ordinaires s\'appliquent.',
                'L\'article 332 interdit la prospection directe par système automatisé, courriel ou SMS à l\'égard d\'un utilisateur qui n\'a pas exprimé préalablement son consentement ; l\'absence de réponse n\'est pas un consentement. Une lettre d\'information commerciale ou une alerte envoyée aux abonnés suppose donc un accord explicite et un moyen simple de se désinscrire. Et si la vidéo ou la base d\'abonnés sont hébergées hors du Bénin, l\'article 391 ne permet le transfert vers un État tiers que lorsque l\'Autorité constate un niveau de protection équivalent et l\'a autorisé au préalable.',
                'Le droit de la presse complète ce socle. Dans la <a href="https://sgg.gouv.bj/doc/loi-2015-07/">loi n° 2015-07 portant code de l\'information et de la communication</a>, l\'article 35 astreint le journaliste au secret professionnel, les articles 123 et 124 ouvrent un droit de réponse à toute personne mise en cause, dont la demande se présente dans les huit jours suivant la diffusion, et l\'article 126 l\'étend aux organes publics comme privés. Les articles 37 à 39 prévoient une aide de l\'État à la presse privée, dont la presse en ligne et les chaînes de télévision, et un fonds d\'appui au développement des médias.',
                'Ailleurs en Afrique francophone, les règles ont leur propre numérotation. Au Sénégal, l\'article 94 du <a href="https://www.vie-publique.sn/documents/7519/loi-2017-27-portant-code-de-la-presse">code de la presse (loi n° 2017-27)</a> soumet toute activité de diffusion de services audiovisuels, quelle que soit la technologie, à une autorisation du ministre chargé de la communication, après avis favorable de l\'organe de régulation. Les données y relèvent de la <a href="https://www.wipo.int/wipolex/edocs/lexdocs/laws/fr/sn/sn009fr.pdf">loi n° 2008-12</a> : la plupart des traitements font l\'objet d\'une déclaration préalable à la Commission des données personnelles (articles 17 et 18), les traitements sensibles, comme les données biométriques, d\'une autorisation (articles 20 et 21).',
                'En Côte d\'Ivoire, la loi n° 2013-450 du 19 juin 2013 soumet les traitements à déclaration ou autorisation préalable auprès de l\'ARTCI, selon <a href="https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable">CIO Mag</a>. Une plateforme pensée pour trois pays doit donc prévoir, dès la conception, trois jeux de formalités et un hébergement qui ne contredit aucun d\'eux.',
                'En Europe, le RGPD pose la base légale (article 6) et les conditions du consentement (article 7), que la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2">CNIL</a> décrit : consentement prouvé, clair, et aussi facile à retirer qu\'à donner. Son article 85, présenté par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre9">CNIL</a>, laisse chaque État prévoir des dérogations pour le journalisme et l\'expression artistique ou littéraire. Pour la mesure d\'audience, la CNIL expose dans quelles conditions elle est <a href="https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies-solutions-pour-les-outils-de-mesure-daudience">exemptée de consentement</a> : finalité exclusive, bénéfice du seul éditeur, données statistiques anonymes.',
                'Reste le cadre propre aux médias. Selon la <a href="https://commission.europa.eu/strategy-and-policy/priorities-2019-2024/new-push-european-democracy/protecting-democracy/european-media-freedom-act_fr">Commission européenne</a>, le règlement sur la liberté des médias protège les sources journalistiques, y compris contre les logiciels espions, et s\'applique pour l\'essentiel depuis le 8 août 2025. L\'<a href="https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50">article 50 du règlement sur l\'IA</a>, applicable depuis le 2 août 2026, impose d\'informer l\'utilisateur qu\'il parle à une IA et de signaler les contenus synthétiques ; le marquage technique des contenus issus de systèmes déjà sur le marché n\'est exigé qu\'à partir du 2 décembre 2026. Quel que soit le pays, ces règles sont à confirmer avec le régulateur et le conseil juridique du média avant le lancement.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique selon le type de média et le pays ?',
            'items' => [
                ['secteur' => 'Web TV conventionnée, Bénin', 'probleme' => 'La chaîne diffuse en direct sur une plateforme publique, la grille se met à jour à la main et les abonnés qui paient par mobile money attendent qu\'un employé ouvre leur accès.', 'solution' => 'Une application web avec direct, replays et grille des programmes, une rédaction qui publie seule, et un abonnement premium dont le paiement par MTN MoMo ou Moov Money ouvre l\'accès automatiquement. Le projet est cadré avec les obligations de la convention HAAC et, si l\'entreprise est assujettie à la TVA, avec la facture normalisée.'],
                ['secteur' => 'Radio en ligne et podcasts, Sénégal', 'probleme' => 'Une radio connue en modulation de fréquence veut garder ses auditeurs partis sur le téléphone, mais ses émissions ne sont ni archivées ni retrouvables.', 'solution' => 'Un catalogue d\'émissions et de podcasts avec recherche, une application légère pour les zones à faible débit, une transcription par IA relue par l\'équipe pour que le texte soit référencé par Google. L\'activité de diffusion en ligne est vérifiée avec le régulateur au titre de l\'article 94 du code de la presse.'],
                ['secteur' => 'Journal en ligne, Côte d\'Ivoire', 'probleme' => 'Le site tire ses revenus de bannières qui rapportent peu ; les lecteurs fidèles accepteraient de payer, mais aucun paiement simple n\'existe.', 'solution' => 'Un accès premium sur certains dossiers, payé par mobile money et rapproché automatiquement de chaque compte, un espace abonné avec facture, et un fichier déclaré à l\'ARTCI avec consentement explicite pour l\'envoi des alertes. Les articles gratuits restent référencés pour attirer de nouveaux lecteurs.'],
                ['secteur' => 'Agence de communication, France', 'probleme' => 'Les validations des clients arrivent par courriel et messagerie, les versions se perdent, et le rapport mensuel prend une journée à produire.', 'solution' => 'Un espace client où chaque livrable est déposé, commenté et validé avec une date, un calendrier éditorial partagé et un rapport généré depuis les données. L\'IA aide aux premières versions de textes, avec mention des contenus générés quand le règlement l\'exige et relecture humaine avant envoi.'],
                ['secteur' => 'Rédaction régionale, Belgique', 'probleme' => 'Des années d\'archives en PDF et sur disques, des entretiens enregistrés jamais transcrits, et des journalistes qui craignent qu\'un outil expose leurs sources.', 'solution' => 'Une base d\'archives consultable, une chaîne de transcription et de résumé exécutée sur un serveur que la rédaction contrôle, et une charte écrite qui interdit d\'envoyer à un service externe un document confidentiel. La protection des sources est traitée comme une exigence technique, en cohérence avec le règlement européen sur la liberté des médias.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet numérique pour un média, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez le média, son public, ses revenus et ce qui coince : direct qui tombe, accès payants ouverts à la main, archives introuvables. Un premier échange gratuit dit franchement si le besoin justifie un développement ou si un outil existant suffit.'],
                ['titre' => 'Diagnostic de la chaîne de production et de diffusion', 'duree' => 'Selon le projet', 'texte' => 'On suit un contenu de bout en bout : du sujet à la publication, du clic à l\'abonnement, de la diffusion à la facture de l\'annonceur. Le diagnostic liste les écarts, les obligations (régulateur, facture, données) et les priorités.'],
                ['titre' => 'Choix du périmètre et de la première version', 'duree' => 'Selon le projet', 'texte' => 'La première version couvre le geste qui rapporte ou qui protège le plus : en général la diffusion et l\'abonnement. La proposition de méthode de Richard est d\'ouvrir un palier à la fois, sans tout refaire d\'un coup.'],
                ['titre' => 'Maquettes et validation avec la rédaction', 'duree' => 'Selon le projet', 'texte' => 'Les écrans sont montrés aux journalistes, au régisseur et à la direction avant le code. La rédaction décide de l\'ordre de ses écrans ; la direction valide les règles d\'accès et de paiement.'],
                ['titre' => 'Développement et branchement des paiements', 'duree' => 'À titre d\'ordre de grandeur, 1 à 3 mois pour une application sur mesure', 'texte' => 'Le délai de 1 à 3 mois est celui d\'une application sur mesure selon la fiche de Richard ; un site vitrine de média se prépare en 1 à 3 semaines. Le paiement par mobile money est branché sur un bac à sable, puis testé avec de vraies petites sommes.'],
                ['titre' => 'Recette avec la rédaction et le public test', 'duree' => 'Selon le projet', 'texte' => 'Chaque rôle déroule ses scénarios : journaliste, monteur, régisseur, abonné. Un groupe de lecteurs ou de spectateurs essaie sur téléphone avec une connexion moyenne, pas dans le bureau.'],
                ['titre' => 'Mise en ligne et soirée de lancement accompagnée', 'duree' => 'Selon le projet', 'texte' => 'La bascule se cale un jour calme, jamais la veille d\'un événement. Une procédure de retour en arrière est écrite, et la première diffusion en direct se fait avec quelqu\'un disponible pour réagir.'],
                ['titre' => 'Formation des équipes', 'duree' => 'Selon le projet', 'texte' => 'Les journalistes, la régie et la direction sont formés par métier, sur leurs données, avec un guide court et un référent. La formation peut s\'appuyer sur les pages métier décrites plus bas.'],
                ['titre' => 'Suivi, support et évolutions', 'duree' => 'Mensuel ou à la demande', 'texte' => 'Un média vit de ses pics : élections, matchs, événements. La <a href="/services/maintenance-support">maintenance</a> prévoit la surveillance, les sauvegardes, les mises à jour et un contact joignable ces jours-là.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet numérique pour un média, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Les seuls tarifs de départ publiés par Richard concernent une landing page (à partir de 150 000 FCFA, soit environ 229 € au taux de 655,957 FCFA pour 1 €), un site vitrine (à partir de 300 000 FCFA, soit environ 457 €) et le référencement naturel (à partir de 75 000 FCFA, soit environ 114 €). Une chaîne en ligne, une application ou un espace abonné se chiffre sur devis, après un premier échange gratuit. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Landing page de lancement', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Une page pour une émission, une saison ou un abonnement', 'Formulaire ou lien de paiement', 'Mesure des inscriptions']],
                ['offre' => 'Site vitrine d\'une agence ou d\'une radio', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Pages de présentation, équipe et contact', 'Version téléphone', 'Bases du référencement']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Audit des pages et des mots-clés', 'Corrections prioritaires', 'Suivi de la visibilité']],
                ['offre' => 'Web TV, application ou espace abonné', 'prix' => 'Sur devis', 'inclus' => ['Direct, replays et grille des programmes', 'Abonnement et paiement par mobile money', 'Espace de rédaction autonome']],
                ['offre' => 'IA encadrée pour la rédaction', 'prix' => 'Sur devis', 'inclus' => ['Transcription, résumé, tri de flux', 'Charte d\'usage écrite avec la rédaction', 'Contrôle humain avant toute publication']],
                ['offre' => 'Support et évolution', 'prix' => 'Sur devis', 'inclus' => ['Surveillance, sauvegardes et mises à jour', 'Correctifs', 'Évolutions selon les besoins du média']],
            ],
            'variations' => [
                'Le nombre d\'écrans et de rôles : un site de présentation ou une plateforme avec direct, replays, abonnement et rédaction autonome.',
                'Le volume de vidéo à héberger et à diffuser : le service de diffusion facture à la minute, par exemple 5 dollars par mois pour 1 000 minutes stockées et 1 dollar pour 1 000 minutes délivrées chez Cloudflare Stream selon sa page publique relevée le 07/10/2026.',
                'Le nombre de pays visés, avec leurs formalités de données, leurs moyens de paiement et leur facture.',
                'Les paiements : un agrégateur, plusieurs opérateurs, des relances automatiques, le rapprochement avec la comptabilité.',
                'La reprise des archives : articles, photos et vidéos à migrer, avec leur référencement.',
                'L\'IA : transcription et résumé sur des serveurs partagés, ou sur un serveur contrôlé par la rédaction.',
                'La disponibilité attendue les soirs d\'événement et le niveau de support.',
                'L\'application mobile : web adaptable au téléphone, ou application Android et iOS publiée dans les magasins.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés garder en tête avant de lancer un projet médias ?',
            'items' => [
                ['valeur' => '37 %', 'libelle' => 'Confiance dans l\'information sur l\'ensemble des marchés étudiés, la plus basse depuis 2015', 'source' => 'Reuters Institute, Digital News Report 2026', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary'],
                ['valeur' => '17 %', 'libelle' => 'Part moyenne des internautes de vingt pays qui paient pour s\'informer en ligne (40 % en Norvège, 10 % au Royaume-Uni)', 'source' => 'Reuters Institute, Digital News Report 2026', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary'],
                ['valeur' => '32,2 %', 'libelle' => 'Part de la population béninoise qui utilisait internet en octobre 2025, soit 4,80 millions de personnes', 'source' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '113e sur 180', 'libelle' => 'Rang du Bénin au classement 2026 de la liberté de la presse, avec 47,39 points', 'source' => 'Reporters sans frontières, fiche Bénin', 'url' => 'https://rsf.org/fr/pays-b%C3%A9nin'],
                ['valeur' => '89', 'libelle' => 'Médias en ligne conventionnés par la HAAC le 1er octobre 2026 : 50 titres de presse, 13 radios web et 26 télévisions sur internet', 'source' => 'HAAC, actualité du 1er octobre 2026', 'url' => 'https://haac.bj/actualite/201'],
                ['valeur' => '8 jours', 'libelle' => 'Délai, après la diffusion, pour demander l\'exercice du droit de réponse au Bénin', 'source' => 'Loi n° 2015-07, article 124', 'url' => 'https://sgg.gouv.bj/doc/loi-2015-07/'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent dans les projets numériques des médias ?',
            'intro' => 'Un média vit de sa crédibilité et de ses pics d\'audience. Les erreurs qui coûtent le plus relèvent presque toutes de la confiance ou de la charge.',
            'items' => [
                ['titre' => 'Lancer une plateforme sans tester le pic', 'texte' => 'Un direct testé avec dix spectateurs ne dit rien de ce qu\'il fera avec dix mille. Le test de charge et un plan de repli se préparent avant l\'événement, pas pendant.'],
                ['titre' => 'Confier un abonnement à une saisie manuelle', 'texte' => 'Vérifier chaque paiement à l\'œil retarde l\'accès, épuise l\'équipe et ouvre la porte aux erreurs. Le rapprochement automatique est la fonction la plus rentable d\'un abonnement.'],
                ['titre' => 'Publier un texte généré sans relecture ni mention', 'texte' => 'Une erreur écrite par une machine reste une erreur du média. Elle abîme une confiance que le Reuters Institute mesure déjà au plus bas depuis 2015, et l\'article 50 du règlement européen impose des mentions pour les contenus générés.'],
                ['titre' => 'Envoyer des alertes sans consentement', 'texte' => 'La loi béninoise n° 2017-20 interdit la prospection directe sans accord préalable de l\'utilisateur. Une alerte commerciale envoyée à tous les contacts d\'un téléphone est une faute juridique, et un motif de désabonnement massif.'],
                ['titre' => 'Mélanger le fichier des abonnés et les sources', 'texte' => 'La protection des sources ne s\'applique pas à la liste des abonnés, et inversement. Les deux fichiers n\'ont ni les mêmes accès, ni les mêmes règles, ni le même hébergement.'],
                ['titre' => 'Ignorer l\'hébergement des données', 'texte' => 'Une plateforme vidéo ou un outil d\'IA hébergé à l\'étranger fait sortir les données du pays ; l\'article 391 de la loi béninoise soumet ce transfert à l\'autorisation préalable de l\'Autorité. La question se pose au choix du prestataire, pas à la mise en demeure.'],
                ['titre' => 'Oublier le téléphone et la faible connexion', 'texte' => 'Un lecteur vidéo lourd, des pages à plusieurs mégaoctets et un paiement qui exige trois écrans font fuir un public dont le forfait est compté. On teste sur un téléphone d\'entrée de gamme.'],
                ['titre' => 'Laisser les accès au prestataire seul', 'texte' => 'Nom de domaine, compte de diffusion, dépôt de code, comptes de paiement : tout s\'ouvre au nom du média. Une rédaction qui ne détient pas ses accès dépend d\'une seule personne pour publier.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d\'un média ou d\'une agence ?',
            'paragraphes' => [
                'Un outil adopté vaut plus qu\'un outil livré. Richard a déjà formé des journalistes et des professionnels des médias, ainsi que des équipes marketing et communication. Les deux parcours sont décrits sur les pages <a href="/formations/metier/journalistes-medias">formation pour journalistes et médias</a> et <a href="/formations/metier/marketing-communication">formation pour marketing et communication</a>, qui détaillent leurs thèmes, leurs formats et leurs modalités.',
                'Selon le besoin, les fiches thématiques complètent le parcours : <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> pour la rédaction et la direction, <a href="/formations/ia-en-entreprise">IA en entreprise</a> pour l\'usage quotidien, <a href="/formations/ia-processus-metier">IA dans les processus métier</a> pour choisir les étapes à confier à la machine, <a href="/formations/visibilite-google">visibilité Google</a> et <a href="/formations/marketing-digital-b2b">marketing digital B2B</a> pour les agences, <a href="/formations/cybersecurite-employes">cybersécurité pour les employés</a> pour les réflexes de protection.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier le numérique de votre média ou de votre agence à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a travaillé avec OBA TV, client direct à Cotonou : une web TV sur mesure, soit une chaîne en ligne avec direct, replays, grille des programmes, rédaction autonome et abonnement premium payé par mobile money. Le projet repose sur PHP 8.3, Cloudflare, MTN MoMo et Moov Money. D\'autres projets, de tailles et de secteurs variés, figurent sur la page <a href="/realisations/">réalisations</a>.',
                'Richard compte 6 ans d\'expérience, une formation à EPITECH (2022) et plus de 50 projets livrés ; ses missions l\'ont mené dans quinze pays, de l\'Afrique de l\'Ouest et centrale à la France, à la Belgique, à la Suisse et au Canada. Son produit <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à IA, et sa co-fondation d\'<a href="https://audyxa.com">Audyxa</a> lui donnent la pratique de la messagerie et du paiement qu\'un média d\'abonnement réclame : un seul interlocuteur pour la plateforme, le paiement, la messagerie et l\'IA.',
                'La méthode que Richard propose : un premier échange gratuit, un palier en production avant d\'ouvrir le suivant, les accès au domaine, au compte de diffusion et au dépôt de code ouverts au nom du média, des paiements testés avant le lancement, et une réponse sous 24 heures à chaque demande. Le parcours complet de Richard est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer le numérique de votre média ou de votre agence ?',
            'texte'  => 'Décrivez votre média ou votre agence, votre public, vos revenus actuels et ce qui vous bloque (direct, abonnement, archives, IA) : vous recevez une réponse sous 24 heures et, après un premier échange gratuit, une proposition par paliers avec un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet médias'],
        ],
    ],

    'faq' => [
        ['q' => 'Comment créer une web TV avec direct, replays et abonnement ?', 'r' => 'Une web TV demande trois briques : un lecteur et un service de diffusion pour le direct et les replays, une grille des programmes mise à jour par la rédaction, et un espace abonné relié au paiement par mobile money. Richard réalise l\'ensemble en application web sur mesure ; le délai d\'une application sur mesure est de 1 à 3 mois, et le prix se fixe sur devis après un premier échange gratuit.'],
        ['q' => 'Une web TV doit-elle être déclarée au Bénin ?', 'r' => 'Au Bénin, la HAAC a signé le 1er octobre 2026 des conventions avec 89 exploitants de médias en ligne, dont 26 télévisions sur internet, selon son actualité du jour. Une web TV béninoise vérifie donc sa situation auprès de la HAAC avant le lancement. Ce point est à confirmer auprès du régulateur, car les conditions précises relèvent de son cahier des charges.'],
        ['q' => 'Comment faire payer un abonnement par mobile money ?', 'r' => 'On relie un agrégateur ou l\'interface d\'un opérateur (MTN MoMo, Moov Money) à l\'espace abonné : chaque paiement confirmé ouvre l\'accès, un échec déclenche une relance, et la facture part automatiquement. Le comparatif FedaPay, Kkiapay et CinetPay du site aide à choisir l\'agrégateur ; la mise en service se teste avec de petites sommes réelles avant le lancement.'],
        ['q' => 'Un média doit-il émettre des factures normalisées au Bénin ?', 'r' => 'Selon le portail du gouvernement béninois, la réforme concerne les entreprises assujetties à la TVA, avec une amende égale à dix fois le montant, d\'au moins 1 000 000 FCFA, pour une vente sans facture normalisée. Un média assujetti relie donc ses abonnements et ses annonceurs à un circuit conforme ; un média non assujetti le confirme avec son comptable.'],
        ['q' => 'Un journaliste peut-il utiliser ChatGPT, Claude ou Gemini pour ses articles ?', 'r' => 'Oui pour transcrire, résumer, proposer des titres ou chercher dans ses archives, à condition de relire contre la source avant de publier et de ne rien confier de confidentiel. Le secret professionnel du journaliste, posé au Bénin par l\'article 35 de la loi n° 2015-07, interdit de livrer à un outil externe une source ou un document confidentiel. Le comparatif ChatGPT, Claude et Gemini compare les outils.'],
        ['q' => 'Faut-il indiquer qu\'un texte ou une image a été généré par IA ?', 'r' => 'Dans l\'Union européenne, l\'article 50 du règlement sur l\'IA prévoit le marquage des contenus synthétiques et le signalement des textes d\'intérêt public publiés par IA, sauf relecture éditoriale humaine. La Charte de Paris de RSF demande aussi de distinguer les contenus authentiques des contenus synthétiques. Dans tous les cas, la mention se décide avec la direction de la rédaction.'],
        ['q' => 'Comment protéger les sources d\'une rédaction dans un outil numérique ?', 'r' => 'Les documents sensibles restent sur un serveur que la rédaction contrôle, avec des accès par personne et une journalisation. On n\'envoie aucun fichier confidentiel à un service d\'IA dont on ne connaît pas la conservation. Le règlement européen sur la liberté des médias protège les sources, y compris contre les logiciels espions, et l\'article 35 de la loi béninoise n° 2015-07 garantit le secret.'],
        ['q' => 'Peut-on envoyer les titres du jour aux abonnés par WhatsApp ?', 'r' => 'Oui, avec le consentement préalable de chaque abonné : l\'article 332 de la loi béninoise n° 2017-20 interdit la prospection directe sans accord, et l\'absence de réponse n\'en est pas un. Les messages passent par la plateforme WhatsApp Business de Meta, dont les messages modèles sont facturés à la livraison, message par message, depuis le 1er juillet 2025, les messages sans modèle restant gratuits dans une fenêtre de conversation ouverte.'],
        ['q' => 'Combien coûte l\'hébergement de la vidéo d\'une chaîne en ligne ?', 'r' => 'Cela dépend du volume diffusé. Selon la page publique de Cloudflare Stream relevée le 07/10/2026, le stockage coûte 5 dollars par mois pour 1 000 minutes et la diffusion 1 dollar pour 1 000 minutes délivrées. Une émission de 30 minutes regardée en entier par 1 000 personnes représente 30 000 minutes, soit environ 30 dollars. Le devis intègre cette estimation.'],
        ['q' => 'Que faire des archives d\'un vieux site de presse ?', 'r' => 'On les conserve : articles, photos et vidéos migrent vers la nouvelle plateforme avec leurs adresses redirigées pour garder le référencement. La refonte traite d\'abord l\'inventaire, puis la reprise par lots, puis le contrôle des redirections. Les droits des images et des textes se vérifient avant de republier.'],
        ['q' => 'Une agence de communication peut-elle automatiser ses validations clients ?', 'r' => 'Oui, avec un espace client où chaque livrable est déposé, commenté et validé avec une date. Cela remplace les validations par messagerie et laisse une trace en cas de désaccord. L\'agence garde la relation, l\'outil garde l\'historique et produit le rapport mensuel.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Richard travaille à distance avec des médias et des agences d\'Afrique francophone, d\'Europe et du Canada, et intervient sur place au Bénin. Les clients hors d\'Afrique règlent par carte bancaire, PayPal ou virement ; le cadrage et la formation se font en visioconférence.'],
    ],

    'sources' => [
        ['titre' => 'Reuters Institute, Digital News Report 2026, résumé (16 juin 2026)', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/dnr-executive-summary', 'date' => '2026-10-07'],
        ['titre' => 'Reuters Institute, Digital News Report 2026 : Maroc', 'url' => 'https://reutersinstitute.politics.ox.ac.uk/digital-news-report/2026/morocco', 'date' => '2026-10-07'],
        ['titre' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-07'],
        ['titre' => 'Reporters sans frontières, fiche Bénin (classement 2026)', 'url' => 'https://rsf.org/fr/pays-b%C3%A9nin', 'date' => '2026-10-07'],
        ['titre' => 'Reporters sans frontières, la Charte de Paris sur l\'IA et le journalisme', 'url' => 'https://rsf.org/fr/la-charte-de-paris-sur-l-ia-et-le-journalisme', 'date' => '2026-10-07'],
        ['titre' => 'HAAC, conventions avec 89 exploitants de médias en ligne (1er octobre 2026)', 'url' => 'https://haac.bj/actualite/201', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2015-07 portant code de l\'information et de la communication (articles 35, 37 à 39, 123, 124, 126)', 'url' => 'https://sgg.gouv.bj/doc/loi-2015-07/', 'date' => '2026-10-07'],
        ['titre' => 'SGG, texte intégral du code du numérique béninois, lu pour les articles 332, 391, 397 et 398', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Portail du gouvernement béninois, article sur la facture normalisée : assujettis, e-MECeF et amendes', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'Sénégal, loi n° 2017-27 portant code de la presse (article 94)', 'url' => 'https://www.vie-publique.sn/documents/7519/loi-2017-27-portant-code-de-la-presse', 'date' => '2026-10-07'],
        ['titre' => 'Sénégal, loi n° 2008-12 sur la protection des données à caractère personnel (texte via WIPO Lex), articles 17 à 21', 'url' => 'https://www.wipo.int/wipolex/edocs/lexdocs/laws/fr/sn/sn009fr.pdf', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, ARTCI : le traitement des données personnelles soumis à autorisation préalable (loi n° 2013-450)', 'url' => 'https://cio-mag.com/cote-divoire-artci-le-traitement-des-donnees-personnelles-desormais-soumis-a-une-autorisation-prealable', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre II (articles 6 et 7)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre IX (article 85, liberté d\'expression et d\'information)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre9', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, outils de mesure d\'audience exemptés de consentement', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies-solutions-pour-les-outils-de-mesure-daudience', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, le règlement européen sur la liberté des médias', 'url' => 'https://commission.europa.eu/strategy-and-policy/priorities-2019-2024/new-push-european-democracy/protecting-democracy/european-media-freedom-act_fr', 'date' => '2026-10-07'],
        ['titre' => 'AI Act Service Desk, article 50 du règlement sur l\'IA', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-07'],
        ['titre' => 'Mondaq, transparence de l\'article 50 du règlement sur l\'IA : application depuis le 2 août 2026 (5 août 2026)', 'url' => 'https://www.mondaq.com/uk/compliance/1826042/not-delayed-not-deferred-eu-ai-act-transparency-obligations-are-now-in-force', 'date' => '2026-10-07'],
        ['titre' => 'Cloudflare, tarifs de Cloudflare Stream', 'url' => 'https://developers.cloudflare.com/stream/pricing/', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, application Abonnements', 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/subscriptions.html', 'date' => '2026-10-07'],
        ['titre' => 'Wiki Dolibarr, table des cotisations du module Adhérents', 'url' => 'https://wiki.dolibarr.org/index.php/Table_llx_subscription', 'date' => '2026-10-07'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['application-web-sur-mesure', 'application-mobile-android-ios', 'saas-espace-client', 'referencement-naturel-seo', 'integration-ia-entreprise', 'maintenance-support', 'integration-whatsapp', 'refonte-migration-de-site', 'landing-page-haute-conversion'],
        'metiers'     => ['journalistes-medias', 'marketing-communication'],
        'formations'  => ['ia-ethique-conformite', 'ia-en-entreprise', 'ia-processus-metier', 'visibilite-google', 'marketing-digital-b2b', 'cybersecurite-employes'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'chatgpt-vs-claude-vs-gemini'],
        'histoires'   => ['air-canada-chatbot'],
    ],
];
