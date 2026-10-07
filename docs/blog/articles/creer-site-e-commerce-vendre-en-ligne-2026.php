<?php
// Source de la reprise de /blog/creer-site-e-commerce-vendre-en-ligne-2026 (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-creer-site-e-commerce-vendre-en-ligne-2026.sql.
return [
    'slug'       => 'creer-site-e-commerce-vendre-en-ligne-2026',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'Créer un site e-commerce : vendre en ligne en 2026',
    'meta'       => 'Boutique en ligne en 2026 : site ou réseaux sociaux, étapes jusqu\'à la première vente, paiement, livraison, obligations légales au Bénin et en France.',
    'resume'     => 'Pour vendre en ligne, testez d\'abord votre offre sur WhatsApp ou les réseaux sociaux, puis ouvrez une boutique dès que les commandes se répètent. Le parcours tient en sept étapes : offre, plateforme, fiches produits, paiement, livraison, cadre légal, premiers clients. Au Bénin, le code du numérique impose des mentions, un prix clair et un droit de rétractation de 15 jours ouvrables.',
    'categorie'  => 'E-commerce',
    'tags'       => ['site e-commerce', 'vendre en ligne', 'boutique en ligne', 'paiement en ligne', 'WooCommerce', 'Shopify'],
    'contenu'    => <<<'HTML'
<h2>Faut-il un site e-commerce, une plateforme ou les réseaux sociaux ?</h2>
<p>Les trois se combinent. Les réseaux sociaux et WhatsApp servent à tester une offre sans investir : vous publiez vos produits, vous prenez les commandes en message, vous encaissez par mobile money. Ce mode devient pénible quand les commandes se multiplient : suivi des stocks à la main, erreurs de paiement, aucune visibilité sur Google.</p>
<ul>
<li><strong>Réseaux sociaux et WhatsApp</strong> : pour valider que des clients achètent votre produit, avec quelques références.</li>
<li><strong>Plateforme clé en main (Shopify, WooCommerce)</strong> : pour un catalogue qui grandit, des paiements intégrés et un site que vous gérez vous-même.</li>
<li><strong>Boutique sur mesure</strong> : pour un besoin que les plateformes ne couvrent pas, comme des règles de prix particulières, un lien avec votre logiciel de gestion ou un gros volume.</li>
</ul>
<p>Un repère simple : passez à une vraie boutique quand vous répondez chaque jour aux mêmes questions de commande et de livraison.</p>

<h2>Quelles étapes suivre de l'idée à la première vente ?</h2>
<ol>
<li><strong>Définir l'offre</strong> : un produit précis, pour un client précis, avec un prix de vente qui couvre le coût d'achat, la livraison et les frais de paiement.</li>
<li><strong>Choisir la plateforme</strong> : voir la section suivante.</li>
<li><strong>Soigner les fiches produits</strong> : photos nettes sous plusieurs angles, description qui répond aux questions de l'acheteur (taille, matière, usage, délai), prix affiché toutes taxes comprises.</li>
<li><strong>Brancher le paiement</strong> et le tester avec une vraie transaction de faible montant.</li>
<li><strong>Organiser la livraison</strong> et les retours.</li>
<li><strong>Publier le cadre légal</strong> : mentions, conditions de vente, politique de données.</li>
<li><strong>Attirer les premiers clients</strong> avant même l'ouverture, avec une liste de contacts et des publications régulières.</li>
</ol>
<p>Commencez avec peu de produits bien présentés plutôt qu'un catalogue bâclé : chaque fiche incomplète est une raison de ne pas acheter.</p>

<h2>Comment choisir entre Shopify, WooCommerce et le sur mesure ?</h2>
<ul>
<li><a href="https://www.shopify.com/fr/tarifs">Shopify</a> : abonnement mensuel, hébergement et sécurité inclus, démarrage rapide. Selon la page tarifs de Shopify France consultée le 7 octobre 2026, le forfait Basic coûte 36 € par mois (27 € par mois en paiement annuel). Ce prix s'ajoute aux frais de paiement et aux éventuelles applications payantes.</li>
<li><a href="https://woocommerce.com/">WooCommerce</a> : extension gratuite de WordPress, très flexible, mais vous payez l'hébergement et vous gérez les mises à jour et la sécurité.</li>
<li><strong>Sur mesure</strong> : performant et adapté à votre métier, avec un investissement de départ plus élevé. Chez Richard SALANON, un site e-commerce se chiffre sur devis, selon le nombre de produits, les moyens de paiement et les connexions avec vos outils.</li>
</ul>
<p>Pour les prix d'un site en général, voir <a href="/blog/combien-coute-un-site-web-au-benin">combien coûte un site web au Bénin</a>. Pour trancher entre une plateforme comme WooCommerce et un développement sur mesure, voir <a href="/comparatifs/wordpress-vs-sur-mesure">le comparatif WordPress ou sur mesure</a>.</p>

<h2>Comment encaisser : carte, mobile money, paiement à la livraison ?</h2>
<p>Un client béninois paie surtout par mobile money, un client de la diaspora plutôt par carte. Une boutique qui n'accepte qu'un moyen perd les autres. Le lien entre votre site et les opérateurs passe par une passerelle de paiement, qui prélève une commission sur chaque vente. Le rôle du mobile money dans la région est détaillé dans l'article sur <a href="/blog/digitalisation-dentreprise-en-afrique-francophone-enjeux-et-bonnes-pratiques">la digitalisation des entreprises en Afrique francophone</a>.</p>
<ul>
<li><strong>Mobile money</strong> : MTN, Moov ou Celtiis au Bénin, via une passerelle comme FedaPay, KkiaPay ou CinetPay.</li>
<li><strong>Carte bancaire</strong> : Visa et Mastercard via la même passerelle, ou via la plateforme (Shopify Payments selon les pays).</li>
<li><strong>Paiement à la livraison</strong> : rassure l'acheteur, mais oblige à gérer les refus et le transport retour. Réservez-le à votre zone de livraison directe.</li>
</ul>
<p>Selon le comparatif de ce site, relevé le 3 octobre 2026 sur les pages officielles, FedaPay publie 1,8 % de commission à la charge du marchand pour le mobile money au Bénin, sans abonnement, tandis que KkiaPay facture 9 900 FCFA HT par mois son offre Intégration. Ces frais changent : relisez la page tarifs le jour du choix. Le détail est dans <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">le comparatif FedaPay, KkiaPay et CinetPay</a>.</p>

<h2>Comment organiser la livraison et les retours ?</h2>
<p>Annoncez avant la commande vos zones, vos délais et vos frais. Une surprise au moment de payer est l'une des causes principales d'abandon de panier.</p>
<ul>
<li><strong>Zones</strong> : livraison à domicile dans votre ville, point de retrait, expédition vers les autres villes ou l'étranger, chacune avec son tarif.</li>
<li><strong>Partenaires</strong> : un livreur à moto pour le local, un transporteur pour l'interurbain. Testez-les avec de vraies commandes avant l'ouverture.</li>
<li><strong>Suivi</strong> : envoyez au client un message à l'expédition et à la livraison, par WhatsApp ou e-mail.</li>
<li><strong>Retours</strong> : écrivez qui paie le renvoi, dans quel état le produit doit revenir et sous quel délai vous remboursez.</li>
</ul>
<p>Le code du numérique béninois fixe aussi une règle de rupture de stock, détaillée dans la section suivante.</p>

<h2>Quelles obligations légales s'appliquent à une boutique en ligne ?</h2>
<h3>Au Bénin</h3>
<p>Le livre IV de la loi n° 2017-20 portant code du numérique (adoptée le 13 juin 2017, promulguée le 20 avril 2018) régit le commerce électronique. Il s'applique aussi à une offre destinée à des utilisateurs établis au Bénin, ce qui se déduit notamment de la langue, de la monnaie ou du nom de domaine.</p>
<ul>
<li><strong>Article 328</strong> : accès facile, direct et permanent, si possible depuis la page d'accueil, à votre identité (nom ou raison sociale), votre adresse complète, votre e-mail et votre téléphone, votre numéro RCCM et votre numéro d'identification fiscale si vous y êtes soumis. Tout prix affiché doit être clair et indiquer si taxes et livraison sont inclus.</li>
<li><strong>Article 340</strong> : avant la commande, informer clairement du prix toutes taxes comprises, des frais de livraison, de la durée de validité de l'offre, des modalités de paiement et de la monnaie de facturation.</li>
<li><strong>Article 344</strong> : accuser réception de la commande sans retard injustifié, avec la facture ou un justificatif détaillé.</li>
<li><strong>Article 345</strong> : si un produit est indisponible, prévenir l'acheteur au moins 24 heures avant la date de livraison prévue et rembourser l'intégralité des sommes perçues.</li>
<li><strong>Article 346</strong> : conserver tout contrat conclu en ligne pendant dix ans à compter de la livraison.</li>
<li><strong>Article 348</strong> : le consommateur dispose de 15 jours ouvrables pour se rétracter, sans justification. Ce délai passe à 90 jours si le professionnel n'a pas donné les informations préalables.</li>
</ul>
<p>La collecte de données clients relève aussi du code du numérique (livre V). Publiez une politique de confidentialité et ne demandez que les données utiles à la commande.</p>
<h3>En France, si vous vendez à des clients français</h3>
<p>Selon la page de Service-Public Entreprendre mise à jour le 31 juillet 2023 et consultée le 7 octobre 2026, le site doit afficher l'identité du vendeur, son numéro d'immatriculation, ses coordonnées, son numéro de TVA, les coordonnées de l'hébergeur, des conditions générales de vente (caractéristiques, prix en euros, livraison, paiement, rétractation, garanties légales, médiation) et une information sur les données personnelles avec consentement actif pour les cookies. Les amendes vont de 1 500 € (information sur les données absente) à 75 000 € (identification du vendeur), et jusqu'à 300 000 € pour un traitement de données non autorisé.</p>
<p>Ces textes évoluent : faites relire vos conditions de vente par un juriste avant l'ouverture.</p>

<h2>Combien prévoir pour lancer une boutique en ligne ?</h2>
<p>Le budget se compose de postes que vous pouvez chiffrer un par un :</p>
<ul>
<li><strong>La boutique</strong> : abonnement de plateforme, ou création du site (voir <a href="/blog/combien-coute-un-site-web-au-benin">le prix d'un site au Bénin</a>), plus le nom de domaine et l'hébergement.</li>
<li><strong>Le paiement</strong> : commission par vente et, selon la passerelle, un abonnement mensuel (voir plus haut).</li>
<li><strong>Le stock</strong> et l'emballage, souvent le poste le plus lourd.</li>
<li><strong>La livraison</strong>, à répercuter ou à absorber dans le prix.</li>
<li><strong>La visibilité</strong> : photos, publicité, référencement.</li>
<li><strong>La maintenance</strong> : mises à jour, sauvegardes, sécurité, avec un contrat de <a href="/services/maintenance-support">maintenance et support</a> si vous ne voulez pas la gérer.</li>
</ul>
<p>Prévoyez de quoi tenir plusieurs mois de publicité et de stock : une boutique ne vend presque jamais dès la première semaine.</p>

<h2>Comment attirer ses premiers clients ?</h2>
<ol>
<li><strong>Votre cercle proche et vos contacts WhatsApp</strong> : annoncez l'ouverture, proposez une offre de lancement limitée dans le temps.</li>
<li><strong>Les réseaux sociaux</strong> : montrez le produit en usage, répondez aux commentaires, redirigez vers la boutique.</li>
<li><strong>Le référencement naturel</strong> : un titre et une description uniques par fiche, des catégories claires, une boutique rapide. C'est un travail de fond, voir le service de <a href="/services/referencement-naturel-seo">référencement naturel</a>.</li>
<li><strong>Les avis clients</strong> : demandez un avis après chaque livraison réussie.</li>
<li><strong>La relance</strong> : message aux paniers abandonnés et aux anciens acheteurs, par e-mail ou WhatsApp.</li>
</ol>
<p>Si vous lancez une offre précise par une publicité, envoyez les visiteurs sur une page dédiée, comme l'explique <a href="/blog/landing-page-haute-conversion-7-elements">l'article sur les 7 éléments d'une landing page</a>.</p>

<h2>Comment se faire accompagner ?</h2>
<p>Richard SALANON conçoit des boutiques en ligne, branche les paiements et les rend visibles sur Google : voir le service <a href="/services/site-e-commerce">site e-commerce</a>. Pour apprendre à gérer vous-même votre boutique, la <a href="/formations/e-commerce">formation e-commerce</a> couvre le catalogue, les commandes et la promotion. Pour décrire votre projet, passez par la <a href="/contact">page de contact</a>.</p>

<h2>Questions fréquentes</h2>
<p><strong>Shopify ou WooCommerce ?</strong></p>
<p>Shopify convient si vous voulez démarrer vite sans gérer la technique, WooCommerce si vous voulez la liberté de WordPress et acceptez de gérer hébergement et sécurité. Le bon choix dépend de votre temps, de votre budget et de votre catalogue.</p>
<p><strong>Combien de produits pour démarrer ?</strong></p>
<p>Il n'y a pas de minimum légal. Mieux vaut quelques produits complets (bonnes photos, description claire, stock réel) qu'un grand catalogue incomplet.</p>
<p><strong>Comment éviter les abandons de panier ?</strong></p>
<p>Affichez les frais de livraison dès la fiche produit, proposez plusieurs moyens de paiement, gardez un site rapide sur mobile et relancez les paniers abandonnés par message.</p>
<p><strong>Faut-il une entreprise enregistrée pour vendre en ligne ?</strong></p>
<p>Le code du numérique demande le numéro RCCM de toute personne soumise à cette inscription. Selon votre activité et votre passerelle de paiement, un compte de travailleur indépendant peut suffire pour débuter, avec des plafonds. Renseignez-vous auprès du guichet des entreprises de votre pays avant de vendre régulièrement.</p>
<p><strong>Puis-je vendre à l'étranger depuis le Bénin ?</strong></p>
<p>Oui, avec une passerelle qui accepte les cartes émises hors de la zone UEMOA et un transporteur international. Vous devez alors respecter aussi les règles du pays de vos clients, comme les mentions françaises décrites plus haut.</p>
<p><strong>Faut-il un site si je vends déjà sur WhatsApp ?</strong></p>
<p>Pas forcément. Si vos commandes sont rares et gérables en message, WhatsApp suffit. Un site devient utile pour automatiser le paiement et le suivi, et pour être trouvé sur Google.</p>
<p><strong>Quel délai pour créer une boutique ?</strong></p>
<p>Il varie selon la plateforme, le nombre de produits et la préparation du contenu. Les photos et les descriptions sont souvent ce qui retarde le plus l'ouverture : préparez-les en parallèle.</p>
<p><strong>Que faire si un client demande un remboursement ?</strong></p>
<p>Au Bénin, le consommateur peut se rétracter sous 15 jours ouvrables sans justifier. Prévenez-le de la marche à suivre dans vos conditions de vente et remboursez par le même moyen de paiement.</p>

<h2>Sources</h2>
<ul>
<li><a href="https://sgg.gouv.bj/doc/loi-2017-20/download">Loi n° 2017-20 portant code du numérique en République du Bénin, livre IV (Secrétariat général du gouvernement)</a>, consultée le 7 octobre 2026</li>
<li><a href="https://entreprendre.service-public.gouv.fr/vosdroits/F31228">Mentions obligatoires sur le site internet d'un entrepreneur individuel (Service-Public Entreprendre)</a>, consultée le 7 octobre 2026</li>
<li><a href="https://www.shopify.com/fr/tarifs">Tarifs Shopify France</a>, consultée le 7 octobre 2026</li>
<li><a href="https://woocommerce.com/">WooCommerce</a>, consultée le 7 octobre 2026</li>
<li><a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">Comparatif FedaPay, KkiaPay et CinetPay (pages officielles relevées le 3 octobre 2026)</a>, consulté le 7 octobre 2026</li>
</ul>
HTML,
];
