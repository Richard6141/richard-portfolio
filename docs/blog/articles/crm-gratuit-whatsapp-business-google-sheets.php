<?php
// Source de la reprise de /blog/crm-gratuit-whatsapp-business-google-sheets (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-crm-gratuit-whatsapp-business-google-sheets.sql.
return [
    'slug'       => 'crm-gratuit-whatsapp-business-google-sheets',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'CRM gratuit avec WhatsApp Business et Google Sheets',
    'meta'       => 'Montez un suivi client gratuit avec WhatsApp Business et Google Sheets : colonnes, étiquettes, saisie sans erreur, règles sur les données, limites.',
    'resume'     => 'Un suivi client gratuit tient en deux outils : l\'application WhatsApp Business, qui classe les conversations avec des étiquettes et des réponses rapides, et un Google Sheets où chaque ligne est un contact. L\'application reste gratuite, mais elle ne se connecte pas seule au tableur : sans API, la saisie est manuelle. Ce montage convient à un petit portefeuille de clients ; au-delà, un vrai CRM s\'impose.',
    'categorie'  => 'Automatisation',
    'tags'       => ['CRM gratuit', 'WhatsApp Business', 'Google Sheets', 'suivi client', 'no-code'],
    'contenu'    => <<<'HTML'
<h2>Que peut faire ce montage gratuit, et quelles sont ses limites ?</h2>
<p>Un CRM (gestion de la relation client) répond à trois questions : qui est ce contact, où en est la discussion, quand faut-il le relancer. Avec WhatsApp Business et Google Sheets, vous y répondez sans payer de licence.</p>
<ul>
<li><strong>WhatsApp Business</strong> garde la conversation et la classe : étiquettes pour l'étape, réponses rapides pour les messages qui reviennent, catalogue pour présenter vos produits.</li>
<li><strong>Google Sheets</strong> garde la mémoire : une ligne par contact, avec le statut, la date de la dernière relance et la prochaine action.</li>
</ul>
<p>Ce que le montage ne fait pas :</p>
<ul>
<li>Il ne relie pas les deux outils tout seul. L'application WhatsApp Business n'envoie aucun contact vers un tableur ; un transfert automatique passe par l'API de la plateforme WhatsApp Business, qui est un autre produit (voir plus bas).</li>
<li>Il ne prévient pas quand une relance est due, sauf si vous ajoutez une mise en forme conditionnelle dans le tableur.</li>
<li>Il suppose une discipline : un tableau qu'on ne met pas à jour devient faux en quelques semaines.</li>
</ul>
<p>Selon la page de tarification de la plateforme WhatsApp Business de Meta, consultée le 7 octobre 2026, la facturation de l'API se fait par message ; l'application WhatsApp Business, elle, reste gratuite.</p>

<h2>Comment préparer le tableau Google Sheets ?</h2>
<p>Commencez petit : une seule feuille, une ligne par contact, des colonnes que vous remplirez vraiment.</p>
<ol>
<li><strong>Nom</strong> : prénom et nom, ou nom de l'entreprise.</li>
<li><strong>Téléphone</strong> : toujours au format international, sans espace (indicatif du pays, puis le numéro). Ce numéro sert d'identifiant unique et évite les doublons.</li>
<li><strong>Source</strong> : d'où vient le contact (recommandation, réseau social, site, passage en boutique).</li>
<li><strong>Statut</strong> : nouveau, en discussion, devis envoyé, client, perdu. Gardez cinq valeurs au plus.</li>
<li><strong>Date du dernier échange</strong> et <strong>Prochaine relance</strong> : ce sont les deux colonnes qui évitent de perdre des ventes.</li>
<li><strong>Notes</strong> : ce qu'il a demandé, le budget évoqué, l'objection.</li>
</ol>
<h3>Trois réglages qui évitent la plupart des problèmes</h3>
<ul>
<li>Un menu déroulant sur la colonne Statut (validation des données), pour que « Devis envoyé » ne s'écrive jamais de trois façons.</li>
<li>Une mise en forme conditionnelle qui colore en rouge toute ligne dont la date de relance est dépassée.</li>
<li>Une colonne cliquable construite avec la formule <code>=HYPERLINK("https://wa.me/"&amp;B2;"Écrire")</code> (si le numéro est en colonne B) : un clic ouvre la conversation WhatsApp avec ce numéro.</li>
</ul>
<p>Pour aller plus loin avec les formules et les filtres, la <a href="/formations/excel-google-sheets">formation Excel et Google Sheets</a> couvre ces bases.</p>

<h2>Comment utiliser les étiquettes et les réponses rapides de WhatsApp Business ?</h2>
<p>Les étiquettes jouent le rôle des statuts du tableau, côté téléphone. Créez-en une par statut, avec les mêmes noms que dans la feuille : « Nouveau », « En discussion », « Devis envoyé », « Client », « Perdu ». En filtrant par étiquette, vous retrouvez les conversations à traiter sans ouvrir le tableur.</p>
<p>Les réponses rapides évitent de retaper les messages répétitifs. Trois suffisent pour commencer :</p>
<ul>
<li>l'accueil, avec votre nom d'entreprise et vos horaires ;</li>
<li>l'envoi du tarif ou du catalogue ;</li>
<li>la relance polie après un devis resté sans réponse.</li>
</ul>
<p>Une réponse rapide donne la trame, vous ajoutez le prénom et le contexte. Pour apprendre l'application en détail (profil, catalogue, messages d'absence, listes de diffusion), voir la <a href="/formations/whatsapp-business">formation WhatsApp Business</a>.</p>

<h2>Comment relier les deux sans erreur de saisie ?</h2>
<p>Il y a deux niveaux, selon votre volume.</p>
<h3>Niveau 1 : saisie manuelle encadrée</h3>
<p>C'est celui de l'application gratuite. Prenez une routine fixe : en fin de journée, dix minutes pour reporter dans la feuille les nouveaux contacts et les changements d'étiquette. Pour limiter les fautes :</p>
<ul>
<li>copiez le numéro depuis la fiche du contact plutôt que de le retaper ;</li>
<li>utilisez le menu déroulant du statut ;</li>
<li>une fois par semaine, sélectionnez la colonne Téléphone puis utilisez « Données », « Nettoyage des données », « Supprimer les doublons ».</li>
</ul>
<h3>Niveau 2 : saisie automatique</h3>
<p>Pour que les nouveaux contacts arrivent seuls dans la feuille, un outil d'automatisation (Make ou n8n) doit recevoir un événement de WhatsApp. Cela exige l'API de la plateforme WhatsApp Business, donc un numéro rattaché à celle-ci, et non l'application gratuite. Selon la page de tarification de Meta consultée le 7 octobre 2026, la facturation se fait par message depuis le 1er juillet 2025, et chaque numéro reçoit 1 000 messages de service gratuits par mois depuis le 1er octobre 2026, non reportables et facturés au-delà.</p>
<p>Une alternative gratuite et solide : un Google Form (nom, téléphone, besoin) placé sur votre site, dans vos publicités ou derrière un QR code. Les réponses arrivent dans la feuille sans frais, et vous poursuivez ensuite la conversation sur WhatsApp.</p>
<p>Pour choisir l'outil d'automatisation, lisez le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a>. Pour la logique d'un scénario de bout en bout, voir l'article sur <a href="/blog/automatiser-sa-prospection-n8n-make">l'automatisation de la prospection avec n8n et Make</a>. Et pour une chaîne automatisée réelle, Richard raconte la sienne dans <a href="/blog/jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris">son retour d'expérience sur un robot de prospection</a>.</p>

<h2>Comment respecter les règles sur les données ?</h2>
<p>Vos contacts sont des données personnelles : nom, numéro, historique d'achat, parfois des notes sensibles. Quelques règles simples protègent vos clients et vous.</p>
<ul>
<li><strong>Collectez le nécessaire.</strong> Nom, numéro, besoin. Pas de notes sur la santé, les opinions ou la situation familiale.</li>
<li><strong>Prévenez la personne.</strong> Une phrase dans votre premier message ou sur le formulaire suffit : pourquoi vous gardez ses coordonnées et comment les faire effacer.</li>
<li><strong>Limitez l'accès.</strong> Partagez la feuille avec les seules personnes qui en ont besoin, en lecture seule quand l'écriture est inutile, et retirez les accès d'un collaborateur qui part.</li>
<li><strong>Supprimez ce qui ne sert plus.</strong> Fixez une durée de conservation (par exemple pour les contacts « Perdu ») et tenez-vous-y.</li>
<li><strong>N'écrivez pas à n'importe qui.</strong> Contacter en masse des personnes qui ne vous ont jamais sollicité est un risque légal, et WhatsApp peut bloquer un numéro signalé.</li>
</ul>
<p>Au Bénin, la loi n° 2017-20 portant code du numérique encadre ces traitements. Un Google Sheets est hébergé à l'étranger : or l'article 391 de cette loi exige, pour un transfert de données vers un État tiers, que l'Autorité de protection des données constate un niveau de protection équivalent et l'autorise au préalable. Si vous stockez des données de clients au Bénin dans un outil étranger, faites vérifier ce point par un juriste pour votre situation précise.</p>

<h2>Quand passer à un vrai CRM ou à un ERP ?</h2>
<p>Le montage atteint ses limites quand l'un de ces signes apparaît :</p>
<ul>
<li>plusieurs personnes écrivent aux clients et se marchent dessus dans le tableau ;</li>
<li>vous passez plus de temps à tenir la feuille qu'à vendre ;</li>
<li>vous avez besoin de devis, de factures ou d'un suivi de stock reliés à chaque contact ;</li>
<li>vous voulez des relances automatiques et des statistiques de vente sans les construire à la main ;</li>
<li>le tableur ralentit. Selon la page d'aide Google Drive consultée le 7 octobre 2026, un Google Sheets est limité à 20 millions de cellules (ou 100 Mo) : une PME en est loin, mais des historiques très détaillés peuvent s'en approcher.</li>
</ul>
<p>Deux voies existent alors : un CRM du marché, ou un ERP libre qui rassemble contacts, devis, facturation et stock, comme Odoo ou Dolibarr. Le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a> aide à trancher, et la <a href="/formations/whatsapp-odoo-dolibarr-crm">formation WhatsApp, Odoo, Dolibarr et CRM</a> montre comment brancher WhatsApp sur ce type d'outil.</p>
<p>Pour un suivi client automatisé sur mesure, voir le service <a href="/services/automatisation-ia">Automatisation et IA</a> ou <a href="/contact">écrire à Richard SALANON</a> : la mise en place est sur devis. Et si vous envisagez aussi des réponses automatiques en conversation, lisez ensuite l'article sur le <a href="/blog/chatbot-whatsapp-entreprise-support-client">chatbot WhatsApp pour le service client</a>.</p>

<h2>Questions fréquentes</h2>
<p><strong>C'est vraiment gratuit ?</strong></p>
<p>L'application WhatsApp Business et Google Sheets le sont. Un coût apparaît si vous passez par l'API WhatsApp (messages facturés au-delà de 1 000 messages de service gratuits par mois, selon Meta) ou si vous confiez la mise en place à quelqu'un.</p>
<p><strong>Faut-il un numéro dédié ?</strong></p>
<p>C'est préférable : un numéro réservé à l'entreprise sépare vos échanges professionnels de votre vie privée et peut être transmis à un collaborateur.</p>
<p><strong>Puis-je partager le tableau avec mon équipe ?</strong></p>
<p>Oui, c'est l'intérêt de Google Sheets : donnez des droits de lecture ou de modification par personne, et décidez qui met à jour quelles colonnes.</p>
<p><strong>Comment éviter d'oublier une relance ?</strong></p>
<p>Renseignez toujours la colonne Prochaine relance, colorez en rouge les dates dépassées et triez la feuille par date chaque matin.</p>
<p><strong>Que faire de mes anciens contacts ?</strong></p>
<p>Collez-les d'un coup dans la feuille depuis un fichier CSV ou un autre tableau, nettoyez les numéros, puis attribuez un statut à chacun. Ne gardez que ceux avec lesquels vous avez réellement échangé.</p>
<p><strong>Mes données restent-elles privées ?</strong></p>
<p>Elles vivent dans votre compte Google et dans votre application WhatsApp Business : la sécurité dépend donc de vos mots de passe et de vos partages. Activez la validation en deux étapes sur les deux comptes.</p>
<p><strong>Et si j'ai beaucoup de contacts ?</strong></p>
<p>Passez à un CRM dédié ou à un ERP dès que plusieurs personnes gèrent les clients ou que le tableau devient pénible à tenir ; voir la section précédente.</p>

<h2>Sources</h2>
<ul>
<li><a href="https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing">Tarification de la plateforme WhatsApp Business, Meta</a>, consultée le 7 octobre 2026</li>
<li><a href="https://support.google.com/drive/answer/37603">Fichiers que vous pouvez stocker dans Google Drive, aide Google</a>, consultée le 7 octobre 2026</li>
<li><a href="https://whatsappbusiness.com/fr/products/business-app/">Application WhatsApp Business</a>, consultée le 7 octobre 2026</li>
</ul>
HTML,
];
