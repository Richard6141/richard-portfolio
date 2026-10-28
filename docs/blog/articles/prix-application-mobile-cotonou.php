<?php
// Source de l'article /blog/prix-application-mobile-cotonou (nouvel article, 27/10/2026). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-prix-application-mobile-cotonou.sql.
return [
    'slug'       => 'prix-application-mobile-cotonou',
    'instantane' => '2026-10-27 18:00:00',
    'titre'      => 'Prix d\'une application mobile à Cotonou en 2026 : critères',
    'meta'       => 'Combien coûte une application mobile au Bénin ? Web app, native ou hybride, fonctions, comptes des magasins, hébergement, maintenance : les critères.',
    'resume'     => 'Il n\'existe pas de prix moyen fiable pour une application mobile à Cotonou : le devis suit le type d\'application (site installable, hybride ou native), les fonctions, le nombre d\'écrans, les comptes des magasins, l\'hébergement et la maintenance. Les seuls frais publics et fixes sont ceux des magasins, qui évoluent : la page officielle fait foi. Pour comparer deux devis, demandez ce que chaque ligne contient.',
    'categorie'  => 'Développement',
    'tags'       => ['prix application mobile Cotonou', 'créer une application mobile Bénin', 'coût développement application', 'application hybride ou native', 'compte développeur'],
    'contenu'    => <<<'HTML'
<h2>Combien coûte une application mobile au Bénin ?</h2>
<p>La réponse honnête tient en une phrase : cela dépend de ce que l'application doit faire. Sous l'expression « application mobile », on trouve un site installable sur l'écran d'accueil, une application de catalogue, une application avec comptes, paiements et notifications, ou un service complet avec espace d'administration. Faire la moyenne de ces projets ne dit rien du devis que vous recevrez.</p>
<p>Cet article ne donne donc aucune fourchette. Il explique ce qui fait monter ou baisser un devis, pour que vous le lisiez avec les bonnes questions. Les applications de Richard SALANON sont <strong>sur devis</strong>, établi après un échange de cadrage ; le délai habituel d'une application sur mesure est de 1 à 3 mois. Pour le détail de l'offre, voir la page <a href="/services/application-mobile-android-ios">application mobile Android et iOS</a>.</p>
<h2>Web app, application hybride ou native : que choisir ?</h2>
<p>C'est la première décision, et elle pèse sur tout le reste :</p>
<ul>
<li><strong>Le site installable (web app).</strong> Un site qui s'ouvre dans le navigateur et peut être placé sur l'écran d'accueil. Un seul code, aucune publication dans un magasin. Les fonctions liées au téléphone sont plus limitées.</li>
<li><strong>L'application hybride.</strong> Un seul code pour Android et iOS, avec un outil comme Flutter. Elle est publiée dans les magasins et accède à l'appareil photo, aux notifications ou à la position. C'est souvent un bon rapport entre coût et résultat pour une PME. Richard SALANON propose aussi une <a href="/formations/flutter">formation Flutter</a>.</li>
<li><strong>L'application native.</strong> Un code distinct pour Android et pour iOS. Elle ouvre l'accès à toutes les fonctions du système et aux performances les plus directes, mais le travail est en grande partie doublé.</li>
</ul>
<p>Pour décider entre application et site, lisez le comparatif <a href="/comparatifs/application-mobile-vs-site-web">application mobile ou site web</a>.</p>
<h2>Quelles fonctionnalités font monter le budget ?</h2>
<p>Le prix suit le nombre d'écrans et la complexité de chacun. Par ordre croissant d'effort, on rencontre en général :</p>
<ol>
<li>des écrans d'information et un catalogue que vous mettez à jour ;</li>
<li>des comptes utilisateurs avec connexion et récupération de mot de passe ;</li>
<li>des notifications, qui demandent un service d'envoi et une logique de ciblage ;</li>
<li>un paiement en ligne, avec une passerelle à intégrer et des cas d'échec à gérer (voir le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a>) ;</li>
<li>une géolocalisation, une carte, un suivi en temps réel ;</li>
<li>un espace d'administration pour gérer contenus, utilisateurs et commandes ;</li>
<li>des liens avec vos outils existants : facturation, stock, WhatsApp, via une <a href="/services/api-rest-integrations">API</a>.</li>
</ol>
<p>L'espace d'administration est le poste que l'on oublie le plus : l'application que vos clients voient n'est qu'une partie du travail, l'autre est l'outil avec lequel vous la faites vivre.</p>
<h2>Quels frais fixes demandent Google Play et l'App Store ?</h2>
<p>Pour publier, il faut un compte développeur, ouvert au nom de votre entreprise de préférence, pour que vous restiez propriétaire de l'application. Les montants ci-dessous ont été relevés à leur source officielle le 27 octobre 2026 :</p>
<ul>
<li><strong>Google Play.</strong> D'après la page d'aide Play Console de Google, consultée le 27 octobre 2026, il y a 25 USD de frais d'inscription, payés une seule fois.</li>
<li><strong>Apple.</strong> D'après la page d'inscription d'Apple, consultée le 27 octobre 2026, l'abonnement annuel au programme développeur est de 99 USD (299 USD pour le programme entreprise), en monnaie locale quand elle est disponible. Les prix peuvent varier selon les régions.</li>
</ul>
<p>Ces formules évoluent : la page officielle fait foi le jour où vous décidez. Ces frais sont payés à l'éditeur du magasin, pas au développeur, et ne figurent pas dans son devis.</p>
<h2>Faut-il prévoir un hébergement et des services en plus ?</h2>
<p>Oui, dès que l'application échange des données. Une application qui affiche seulement des écrans fixes n'a pas besoin de serveur ; celle qui a des comptes, des commandes ou des notifications en a un, avec ses propres coûts :</p>
<ul>
<li>un serveur ou un hébergement pour l'interface de programmation et la base de données ;</li>
<li>un nom de domaine et un certificat de sécurité ;</li>
<li>un service d'envoi de notifications, d'e-mails ou de SMS, si vous en utilisez ;</li>
<li>le stockage des images et des fichiers.</li>
</ul>
<p>Cet article ne cite aucun tarif d'hébergeur ou de service d'envoi : ils changent, varient selon l'usage et se lisent sur la page de chaque fournisseur le jour de la décision. Demandez au prestataire de lister chaque service, de dire à quel nom il est ouvert et qui reçoit la facture.</p>
<h2>Comment une application tient-elle avec une connexion faible ?</h2>
<p>C'est une question de conception, pas de budget seul, et elle change le travail à faire. Une application pensée pour une connexion instable garde en mémoire du téléphone les données déjà chargées, réduit le poids des images, et enregistre ce que l'utilisateur fait hors ligne pour l'envoyer plus tard. Chaque fonction qui marche sans réseau demande des cas de synchronisation à prévoir et à tester.</p>
<p>Précisez dans votre cahier des charges ce qui doit fonctionner sans connexion : consulter un catalogue, saisir une commande, afficher un reçu. Plus la liste est courte, plus le devis l'est aussi.</p>
<h2>Que coûte la maintenance après la livraison ?</h2>
<p>Une application n'est jamais terminée. Les systèmes Android et iOS évoluent, les magasins changent leurs règles de publication, les bibliothèques utilisées reçoivent des correctifs de sécurité. Sans mise à jour, une application peut cesser de bien fonctionner sur les téléphones récents.</p>
<p>La maintenance couvre en général les corrections de bogues, les mises à jour de compatibilité, la surveillance du serveur et les sauvegardes. Les évolutions (nouvelles fonctions) se chiffrent à part. Voir l'offre de <a href="/services/maintenance-support">maintenance et support</a>, également sur devis. Demandez toujours si la première période de correction après livraison est incluse.</p>
<h2>Comment estimer son budget en cinq étapes ?</h2>
<ol>
<li><strong>Écrire le but en une phrase.</strong> Qui utilise l'application, pour faire quoi, et qu'est-ce qui change pour vous si elle existe ?</li>
<li><strong>Lister les écrans.</strong> Une feuille de papier suffit : un écran par case, avec les boutons.</li>
<li><strong>Séparer l'indispensable du souhaitable.</strong> La première version ne contient que ce sans quoi l'application ne sert à rien.</li>
<li><strong>Choisir le type.</strong> Site installable, hybride ou native, avec la raison du choix.</li>
<li><strong>Demander le même cahier à deux prestataires</strong> et comparer ligne à ligne ce que chaque devis contient.</li>
</ol>
<p>Si le périmètre reste flou, une <a href="/services/audit-etude-de-projet">étude de projet</a> avant le développement évite de payer des corrections en cours de route.</p>
<h2>Quelles erreurs font gonfler un devis d'application ?</h2>
<ul>
<li><strong>Vouloir tout dans la première version.</strong> Chaque fonction ajoutée repousse la livraison et multiplie les tests.</li>
<li><strong>Ouvrir le compte développeur au nom du prestataire.</strong> Vous perdez la maîtrise de l'application ; ouvrez-le au nom de l'entreprise.</li>
<li><strong>Oublier l'administration.</strong> Sans outil pour modifier vos contenus, chaque changement repasse par le développeur.</li>
<li><strong>Changer le périmètre en cours de projet.</strong> Une fonction ajoutée en milieu de route coûte plus qu'une fonction prévue au départ.</li>
<li><strong>Comparer des devis sans comparer leur contenu.</strong> Deux prix peuvent désigner deux produits différents.</li>
</ul>
<h2>Quel type choisir selon la situation (trois exemples fictifs) ?</h2>
<p>Ces dossiers sont inventés pour illustrer la méthode, ils ne décrivent aucun client réel.</p>
<ul>
<li><strong>Une boutique de quartier</strong> qui veut montrer son catalogue et recevoir des commandes par WhatsApp : un site installable ou un <a href="/services/site-vitrine-professionnel">site vitrine</a> suffit, sans magasin ni compte développeur.</li>
<li><strong>Un réseau de livreurs</strong> qui veut suivre les courses sur une carte, avec notifications : une application hybride avec serveur et espace d'administration, le suivi en temps réel étant le poste le plus lourd.</li>
<li><strong>Un service dont les clients l'utilisent chaque jour sur leur téléphone</strong>, avec l'appareil photo et les notifications : une application hybride, publiée sur les deux magasins.</li>
</ul>
<p>Règle de décision : si vous n'avez besoin ni des notifications, ni de l'appareil, ni du hors-ligne, commencez par le web.</p>
<h2>Quand une application mobile ne se justifie-t-elle pas ?</h2>
<p>Quand votre besoin se règle par un site rapide. Un utilisateur qui ne vous connaît pas ne télécharge pas une application pour consulter vos horaires. Si l'objectif est d'être trouvé sur Google, c'est un site et un bon <a href="/services/referencement-naturel-seo">référencement</a> qu'il faut ; l'application vient ensuite, pour des clients déjà acquis et des usages répétés.</p>
<h2>Questions fréquentes</h2>
<p><strong>Peut-on créer une application mobile sans compte développeur ?</strong></p>
<p>Oui, si elle reste un site installable : aucun magasin n'intervient. Pour apparaître dans Google Play ou l'App Store, le compte est obligatoire.</p>
<p><strong>Une application hybride est-elle moins bonne qu'une application native ?</strong></p>
<p>Pas pour la plupart des usages d'entreprise : formulaires, catalogues, commandes, notifications. La native garde l'avantage pour les jeux, le traitement vidéo ou les fonctions très proches du système.</p>
<p><strong>Faut-il publier sur Android et sur iOS en même temps ?</strong></p>
<p>Pas forcément. Demandez à vos clients ce qu'ils utilisent, et commencez par le système le plus répandu chez eux. Avec une application hybride, ajouter le second ensuite coûte moins cher.</p>
<p><strong>Qui possède le code de l'application ?</strong></p>
<p>Cela doit figurer dans le contrat. Demandez que le code source, les accès au serveur et le compte développeur vous soient remis, au nom de votre entreprise.</p>
<p><strong>Combien de temps faut-il pour une première version ?</strong></p>
<p>Pour une application sur mesure chez Richard SALANON, de 1 à 3 mois, selon le nombre d'écrans et de fonctions. Le délai commence quand le cahier des charges est validé.</p>
<p><strong>Mon application sera-t-elle acceptée par les magasins du premier coup ?</strong></p>
<p>Aucune garantie : chaque magasin examine l'application et peut la refuser. Prévoyez du temps pour une éventuelle correction avant la mise en ligne.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://support.google.com/googleplay/android-developer/answer/6112435">Aide Google Play Console, créer un compte développeur</a>, consultée le 27 octobre 2026</li>
<li><a href="https://developer.apple.com/help/account/membership/program-enrollment/">Apple Developer, inscription au programme</a>, consultée le 27 octobre 2026</li>
</ul>
HTML,
];
