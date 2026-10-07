<?php
// Source de la reprise de /blog/automatiser-sa-prospection-n8n-make (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-automatiser-sa-prospection-n8n-make.sql.
return [
    'slug'       => 'automatiser-sa-prospection-n8n-make',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'Automatiser sa prospection avec n8n ou Make : méthode',
    'meta'       => 'Quelles tâches de prospection automatiser, un scénario complet de bout en bout, consentement, WhatsApp, LinkedIn, coûts et indicateurs à suivre.',
    'resume'     => 'Automatisez la collecte, le tri, l\'enregistrement et les relances, et gardez à la main le premier message et les échanges avec les prospects intéressés. Un scénario simple relie un formulaire, un tableur, un message personnalisé et un rappel pour le commercial. Le consentement, le droit local et les règles de WhatsApp et de LinkedIn décident de ce qui est permis avant tout choix d\'outil.',
    'categorie'  => 'Automatisation',
    'tags'       => ['automatisation', 'n8n', 'Make', 'prospection', 'consentement', 'WhatsApp Business'],
    'contenu'    => <<<'HTML'
<p>Une équipe commerciale perd souvent plus de temps à recopier des contacts, relancer et mettre à jour un tableur qu'à parler aux prospects. Ces tâches se prêtent bien à l'automatisation, à condition de savoir lesquelles confier à une machine et dans quel cadre légal. Cet article suit le chemin dans l'ordre : quoi automatiser, comment construire le scénario, quel outil choisir, quelles règles respecter, combien cela coûte et comment mesurer.</p>

<h2>Quelles tâches de prospection automatiser, et lesquelles garder à la main ?</h2>
<p>La règle est simple : automatisez ce qui est répétitif, sans jugement et sans risque pour la relation. Gardez à la main ce qui engage votre image.</p>
<h3>À automatiser</h3>
<ul>
<li>L'enregistrement d'un nouveau contact (formulaire, message reçu, carte de visite saisie) dans le tableur ou le CRM.</li>
<li>Le contrôle des doublons et la mise en forme des numéros et des noms.</li>
<li>L'envoi d'un accusé de réception ou d'un message d'accueil à une personne qui vient de vous écrire.</li>
<li>Les relances programmées vers les contacts qui n'ont pas répondu, dans la limite que vous fixez.</li>
<li>Le rappel interne : une alerte au commercial quand un prospect répond ou ouvre un devis.</li>
<li>Le rapport hebdomadaire des contacts, des réponses et des rendez-vous.</li>
</ul>
<h3>À garder à la main</h3>
<ul>
<li>Le choix des cibles : une liste mal pensée automatisée produit seulement plus de mauvais messages.</li>
<li>Le premier message adressé à un prospect important, que vous voulez écrire vous-même.</li>
<li>Les réponses aux objections, aux négociations de prix et aux réclamations.</li>
<li>Toute décision de retirer un contact ou d'ajouter des données sensibles.</li>
</ul>
<p>L'intelligence artificielle peut rédiger un brouillon ou classer une réponse (intéressé, pas maintenant, désabonnement), mais un humain relit tant que l'enjeu est réel. Pour une première approche de l'IA dans une PME, voir <a href="/blog/ia-pour-les-pme-par-ou-commencer">l'article sur l'IA pour les PME</a>.</p>

<h2>À quoi ressemble un scénario de prospection de bout en bout ?</h2>
<p>Voici un scénario type pour une entreprise de services qui reçoit des demandes par un formulaire de son site et par WhatsApp. Il se construit avec n'importe quel outil d'automatisation, en six étapes.</p>
<ol>
<li><strong>Déclencheur.</strong> Une personne remplit le formulaire ou vous écrit. Le scénario démarre et récupère son nom, son numéro, son entreprise et ce qu'elle demande.</li>
<li><strong>Contrôle.</strong> Le scénario vérifie que le numéro ou l'adresse e-mail n'existe pas déjà et que la personne a coché la case de consentement du formulaire. Sans consentement ou si le contact existe, il s'arrête ici et note la raison.</li>
<li><strong>Enregistrement.</strong> Une ligne est ajoutée au tableur avec la date, la source, l'étape (nouveau) et la preuve de consentement. Pour monter ce suivi sans logiciel payant, voir <a href="/blog/crm-gratuit-whatsapp-business-google-sheets">le CRM gratuit avec WhatsApp Business et Google Sheets</a>.</li>
<li><strong>Réponse immédiate.</strong> La personne reçoit un message qui confirme la réception et annonce un délai de réponse. C'est l'étape qui change le plus la perception de sérieux.</li>
<li><strong>Alerte.</strong> Le commercial reçoit une notification avec la fiche du contact et prend la main pour le premier vrai échange.</li>
<li><strong>Relance.</strong> Si l'étape du contact n'a pas changé au bout de trois jours, un rappel est envoyé au commercial, puis un seul message de relance au prospect, jamais davantage sans nouvelle réponse.</li>
</ol>
<p>Le scénario ne fait que de petits gestes, mais il supprime les oublis. Le premier échange de fond reste humain, ce qui protège la qualité de la relation.</p>

<h2>Avec quel outil construire ce scénario : n8n, Make ou Zapier ?</h2>
<p>Les trois outils savent réaliser le scénario ci-dessus. La différence tient à la manière dont ils facturent, à l'endroit où vivent les données et à la compétence qu'il faut pour les maintenir. Cette comparaison est détaillée, chiffrée et datée dans <a href="/comparatifs/n8n-vs-make-vs-zapier">le comparatif n8n, Make et Zapier</a>.</p>
<p>Pour la prospection, trois questions orientent le choix :</p>
<ul>
<li>Votre scénario traite-t-il beaucoup de contacts par passage ? Dans ce cas l'unité de facturation pèse lourd, et le comparatif montre pourquoi.</li>
<li>Vos listes contiennent-elles des données personnelles que vous préférez garder sur votre propre serveur ? Cela pèse en faveur d'une installation que vous contrôlez.</li>
<li>Qui maintiendra le scénario dans un an ? Un outil très visuel se transmet plus facilement qu'un outil qui demande de l'administration.</li>
</ul>
<p>Pour apprendre à construire ce type de scénario vous-même, il existe <a href="/formations/n8n">la formation n8n</a>.</p>

<h2>Comment rester dans les règles : consentement, données personnelles, WhatsApp et LinkedIn ?</h2>
<p>Un scénario automatisé répète une erreur à grande vitesse. Les règles se vérifient donc avant de construire, pas après.</p>
<h3>Le consentement et les données personnelles</h3>
<p>Au Bénin, la loi n° 2017-20 portant code du numérique encadre la collecte et l'usage des données personnelles. En pratique, collectez seulement ce qui sert la prospection, dites à la personne pourquoi, gardez la preuve de son accord (date, source, texte accepté) et supprimez le contact qui le demande. Les règles précises changent selon le pays du prospect et le canal : faites relire votre procédure par un juriste avant de contacter à grande échelle.</p>
<p>Pour les prospects en France, selon la CNIL consultée le 7 octobre 2026, la prospection par courrier électronique vers un professionnel peut se faire sans consentement préalable si le message concerne sa fonction, à condition de l'avoir informé à la collecte et de lui offrir un moyen simple de s'opposer. Vers un particulier, le consentement préalable est la règle. La prospection de masse vers des listes achetées ou grattées sans information des personnes est le cas le plus risqué.</p>
<h3>Les transferts hors du Bénin</h3>
<p>Beaucoup d'outils d'automatisation hébergent des données à l'étranger. Selon l'article 391 de la loi n° 2017-20, un transfert de données vers un État tiers exige que l'Autorité de protection des données constate un niveau de protection équivalent et qu'elle l'autorise au préalable. Ces deux conditions sont cumulatives : vérifiez où votre outil stocke les contacts avant d'y envoyer une liste complète.</p>
<h3>WhatsApp</h3>
<p>La politique de messagerie de WhatsApp Business, consultée le 7 octobre 2026, exige que la personne ait donné son accord pour recevoir vos messages. Un message envoyé à quelqu'un qui ne vous a rien demandé expose le numéro à des signalements et à une suspension. Les messages marketing sont aussi payants : selon la page de tarification de la plateforme WhatsApp Business de Meta, la facturation se fait par message depuis le 1er juillet 2025, et depuis le 1er octobre 2026 chaque numéro reçoit 1 000 messages de service gratuits par mois, facturés au-delà.</p>
<h3>LinkedIn</h3>
<p>Selon le contrat d'utilisation de LinkedIn consulté le 7 octobre 2026, les robots et les méthodes automatisées non autorisées pour accéder au service, ajouter ou télécharger des contacts ou envoyer des messages sont interdits. Un outil qui clique et écrit à votre place à travers votre compte met ce compte en danger. Gardez LinkedIn pour la veille et les échanges que vous faites vous-même.</p>

<h2>Combien coûte une prospection automatisée ?</h2>
<p>Le coût se compose de quatre lignes, dont la première est souvent la plus petite :</p>
<ul>
<li>L'outil d'automatisation : de zéro (n8n installé sur votre propre serveur, avec le serveur à votre charge) à un abonnement mensuel qui monte avec le volume. Les grilles sont détaillées et datées dans <a href="/comparatifs/n8n-vs-make-vs-zapier">le comparatif</a>.</li>
<li>Les messages WhatsApp de type marketing, facturés par Meta à chaque envoi.</li>
<li>Le tableur ou le CRM, gratuit pour un tableur, payant pour un CRM complet.</li>
<li>Le temps de mise en place et de maintenance, qui dépasse presque toujours le prix de l'abonnement.</li>
</ul>
<p>Pour la mise en place par Richard SALANON, le prix est sur devis, car il dépend du nombre de sources, d'outils à relier et de règles à coder : voir le service <a href="/services/automatisation-ia">Automatisation et IA</a>.</p>

<h2>Comment mesurer le résultat ?</h2>
<p>Avant de lancer, notez votre point de départ pendant quatre semaines, sinon vous ne saurez pas ce que l'automatisation a changé. Suivez peu d'indicateurs, toujours les mêmes :</p>
<ul>
<li>Le délai moyen entre une demande et la première réponse.</li>
<li>Le nombre de contacts enregistrés par semaine et la part de doublons évités.</li>
<li>Le taux de réponse aux messages de relance.</li>
<li>Le nombre de rendez-vous obtenus, rapporté au nombre de contacts.</li>
<li>Le nombre de désabonnements et de plaintes, qui doit rester proche de zéro.</li>
<li>Les heures hebdomadaires que l'équipe passait sur ces tâches avant et après.</li>
</ul>
<p>Un chiffre qui monte sans rendez-vous derrière signale un problème de cible ou de message, pas d'outil. Pour voir un exemple de robot construit par Richard et ses enseignements, lire <a href="/blog/jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris">son retour d'expérience sur un robot de prospection</a>.</p>

<h2>Quelles erreurs grillent un fichier de contacts ?</h2>
<ul>
<li><strong>Envoyer sans accord.</strong> Les signalements font suspendre un numéro WhatsApp ou classer vos e-mails en courrier indésirable, et un fichier brûlé ne se récupère pas.</li>
<li><strong>Relancer sans limite.</strong> Fixez un plafond de relances par contact et respectez-le dans le scénario.</li>
<li><strong>Ignorer les désabonnements.</strong> Une personne qui dit non doit sortir de toutes les listes, y compris des scénarios déjà programmés.</li>
<li><strong>Envoyer le même texte à tous.</strong> Un message identique et impersonnel est repéré comme du volume. Utilisez au moins le nom et le motif du contact.</li>
<li><strong>Lancer d'un coup sur toute la liste.</strong> Commencez par vingt contacts, regardez les réponses, puis augmentez.</li>
<li><strong>Laisser le fichier se dégrader.</strong> Numéros sans indicatif, e-mails invalides et doublons gonflent les échecs d'envoi.</li>
<li><strong>Ne rien tracer.</strong> Sans la date et la source de chaque contact, vous ne pouvez pas prouver son accord en cas de plainte.</li>
</ul>

<h2>Questions fréquentes</h2>
<p><strong>Faut-il savoir coder pour automatiser sa prospection ?</strong></p>
<p>Non pour un scénario simple : Make et n8n s'utilisent en mode visuel. Le code devient utile pour des traitements particuliers ou des sources sans connecteur prêt à l'emploi.</p>
<p><strong>Peut-on envoyer des messages WhatsApp en masse à des prospects ?</strong></p>
<p>Seulement à ceux qui ont accepté d'en recevoir, et les messages marketing sont payants. Un envoi massif à des numéros trouvés sans accord expose votre numéro à une suspension.</p>
<p><strong>L'automatisation remplace-t-elle un commercial ?</strong></p>
<p>Non. Elle s'occupe de la saisie, du tri et des rappels ; le commercial garde les échanges de fond, la négociation et la décision.</p>
<p><strong>Mes données de prospects sont-elles en sécurité dans ces outils ?</strong></p>
<p>Cela dépend de l'outil et de l'hébergement choisis. Vérifiez où sont stockés les contacts, limitez les accès et lisez les règles sur les transferts hors du Bénin décrites plus haut.</p>
<p><strong>Peut-on automatiser LinkedIn avec un robot ?</strong></p>
<p>Le contrat d'utilisation de LinkedIn l'interdit pour accéder au service ou envoyer des messages. Le risque porte sur votre compte professionnel.</p>
<p><strong>Par quel scénario commencer ?</strong></p>
<p>Par l'enregistrement d'un contact et la réponse immédiate : il est simple, utile tout de suite et sans risque pour la relation. Ajoutez les relances ensuite.</p>
<p><strong>Combien de temps faut-il pour mettre en place un premier scénario ?</strong></p>
<p>Un scénario d'enregistrement et d'alerte se construit en quelques heures si la liste des champs et les règles sont déjà claires. Le temps est surtout consacré à définir ces règles.</p>

<h2>Sources</h2>
<ul>
<li><a href="https://www.cnil.fr/fr/la-prospection-commerciale-par-courrier-electronique-sms-mms-et-automate-dappel">CNIL, la prospection commerciale par courrier électronique</a>, consultée le 7 octobre 2026</li>
<li><a href="https://whatsappbusiness.com/fr/policy/">WhatsApp Business, politique de messagerie</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing">Meta, tarification de la plateforme WhatsApp Business</a>, consultée le 7 octobre 2026</li>
<li><a href="https://www.linkedin.com/legal/user-agreement">LinkedIn, contrat d'utilisation</a>, consulté le 7 octobre 2026</li>
</ul>
HTML,
];
