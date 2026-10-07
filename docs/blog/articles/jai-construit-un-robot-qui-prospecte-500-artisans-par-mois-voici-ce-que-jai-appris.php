<?php
// Source de la reprise de /blog/jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris.sql.
return [
    'slug'       => 'jai-construit-un-robot-qui-prospecte-500-artisans-par-mois-voici-ce-que-jai-appris',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'Robot de prospection B2B : retour d\'expérience complet',
    'meta'       => 'J\'ai construit un robot qui remplit les formulaires de contact de 500 artisans : fonctionnement, obstacles, résultats, règles à respecter et limites.',
    'resume'     => 'J\'ai construit un robot qui visite les sites de prospects B2B, remplit leur formulaire de contact avec un message personnalisé et rend un rapport. Il imite le comportement humain, détecte les CAPTCHAs et s\'appuie sur une IA pour repérer les champs. Sur une campagne type de 500 prospects, j\'ai constaté 60 à 70 % d\'envois réussis ou incertains. Reste à respecter le cadre légal de la collecte et du contact.',
    'categorie'  => 'Automatisation & Scraping Web',
    'tags'       => ['automatisation prospection B2B', 'scraping web', 'formulaires de contact', 'robot commercial', 'OpenAI GPT', 'n8n'],
    'contenu'    => <<<'HTML'
<h2>Pourquoi construire un robot de prospection ?</h2>
<p>Un fabricant français de caméras d'inspection de canalisations m'a posé une question simple : comment contacter des milliers de foreurs et de plombiers sans embaucher un commercial ?</p>
<p>La réponse évidente tient dans les formulaires de contact. Chaque artisan, chaque entreprise de forage, de plomberie ou de travaux publics a un site web, et presque toujours un formulaire pour écrire, expliquer, proposer. Le problème, c'est le nombre : les remplir un par un est un travail répétitif et décourageant.</p>
<p>Voici le temps que représente un prospect contacté à la main :</p>
<ul>
<li>trouver son site web : 2 minutes ;</li>
<li>naviguer jusqu'à la page contact : 1 minute ;</li>
<li>lire le formulaire, adapter le message et tout remplir : 3 à 5 minutes ;</li>
<li>vérifier que l'envoi a bien eu lieu : 1 minute.</li>
</ul>
<p>Cela fait presque 8 minutes par prospect, soit environ 7 heures pour 50 contacts, sans compter les sites qui ne chargent pas, les formulaires cassés et les CAPTCHAs. L'automatisation ne vise pas à supprimer le contact humain : le message reste personnalisé et rédigé avec soin. Elle supprime la partie mécanique.</p>
<h2>Comment fonctionne ce robot, étape par étape ?</h2>
<p>Le système tourne sur un serveur VPS et il est orchestré par n8n. Voici le parcours d'un prospect.</p>
<ol>
<li>Chaque matin, une liste de prospects est envoyée automatiquement au robot.</li>
<li>Le robot ouvre le site, lit la page d'accueil, repère le lien Contact dans le menu, le survole et clique dessus.</li>
<li>Il détecte les obstacles éventuels : CAPTCHA, formulaire intégré par un fournisseur tiers, formulaire en plusieurs étapes.</li>
<li>Il envoie le code HTML du formulaire à GPT-4o-mini, qui renvoie les sélecteurs CSS du nom, de l'e-mail, du téléphone, de l'entreprise et du message.</li>
<li>Il remplit les champs lettre par lettre avec le message personnalisé et soumet le formulaire.</li>
<li>Il retourne un rapport par prospect.</li>
</ol>
<p>Le rapport classe chaque site dans l'un de ces quatre états :</p>
<ul>
<li><strong>Succès</strong> : formulaire soumis et confirmation reçue.</li>
<li><strong>Incertain</strong> : formulaire soumis, mais sans confirmation visible (cas des formulaires AJAX).</li>
<li><strong>CAPTCHA</strong> : site protégé, ignoré et marqué comme tel.</li>
<li><strong>Échec</strong> : formulaire introuvable ou non fonctionnel.</li>
</ul>
<h2>Quelles difficultés techniques sont apparues ?</h2>
<p>Le projet a démarré par des essais catastrophiques. Un script basique ouvre un navigateur, trouve un champ e-mail, tape une adresse et clique sur Envoyer : il fonctionne sur 30 % des sites au mieux. Les sites modernes détectent un navigateur automatisé en quelques millisecondes en analysant la vitesse de frappe, les mouvements de souris et le défilement de la page.</p>
<h3>Imiter le comportement d'un visiteur réel</h3>
<ul>
<li><strong>Le défilement</strong> : le robot avance, recule un peu et marque des pauses de durée aléatoire, avec des mouvements de souris naturels.</li>
<li><strong>La frappe</strong> : lettre par lettre, avec des délais variables. Il commet même de vraies fautes de frappe sur 2 % des caractères, corrigées aussitôt avec Retour arrière.</li>
<li><strong>La navigation</strong> : il passe par la page d'accueil et le menu au lieu d'aller droit à l'adresse de la page contact.</li>
</ul>
<h3>Les CAPTCHAs, les iframes et les formulaires en plusieurs étapes</h3>
<p>Même avec un comportement soigné, des obstacles restent. J'ai intégré une détection automatique du type de CAPTCHA (reCAPTCHA v2 et v3, hCaptcha, Cloudflare Turnstile, une dizaine de variantes) ; quand elle ne peut pas le résoudre, le site est ignoré. Pour les formulaires intégrés par HubSpot, Typeform, Jotform ou Wix, j'ai développé une couche qui reconnaît chaque fournisseur et adapte la façon de remplir. Pour les formulaires en plusieurs étapes, le robot attend que chaque étape se charge avant d'avancer.</p>
<h3>La diversité des formulaires</h3>
<p>Il n'existe pas deux formulaires identiques : un champ s'appelle « nom », un autre « votre-nom », un troisième « full_name ». Plutôt que d'écrire une règle par cas, le robot demande à GPT-4o-mini de lire le HTML et de désigner les bons champs, y compris sur des plugins WordPress peu courants. Cette couche fait passer le taux de réussite d'acceptable à vraiment utile.</p>
<h2>Qu'est-ce qui a marché et qu'est-ce qui n'a pas marché ?</h2>
<p>Sur ce robot, j'ai constaté, sur une campagne type de 500 prospects, 60 à 70 % de soumissions réussies ou incertaines. Cela représente 300 à 350 messages de prospection envoyés sans qu'une personne ait ouvert un navigateur.</p>
<ul>
<li><strong>Ce qui a marché</strong> : l'imitation du comportement humain, la détection des fournisseurs de formulaires, la lecture des champs par l'IA, le rapport à quatre états qui évite de deviner ce qui s'est passé.</li>
<li><strong>Ce qui n'a pas marché</strong> : le script basique du début (30 % des sites au mieux), les sites derrière un CAPTCHA que le robot ne résout pas, les formulaires introuvables ou cassés.</li>
<li><strong>Ce qui reste flou</strong> : l'état « incertain ». Sans confirmation visible, on ne sait pas si le message est arrivé.</li>
</ul>
<h2>Quelles règles respecter pour collecter et contacter ?</h2>
<p>Un robot qui envoie des messages en grand nombre ne dispense pas du cadre légal. Ce qui suit est un repère général, pas un avis juridique.</p>
<ul>
<li><strong>Au Bénin</strong> : la loi n° 2017-20 portant code du numérique encadre le traitement des données personnelles, sous le contrôle de l'Autorité de protection des données personnelles. Selon son article 391, un transfert de données vers un État tiers exige que l'Autorité constate un niveau de protection équivalent et qu'elle l'autorise au préalable. Cela compte dès que votre fichier de prospects est hébergé ou traité hors du Bénin.</li>
<li><strong>En France</strong> : selon la CNIL (page sur la prospection commerciale par courrier électronique, SMS-MMS et automate d'appel, consultée le 7 octobre 2026), la prospection de professionnels par voie électronique peut reposer sur l'intérêt légitime quand le sujet du message est en rapport avec leur profession, avec un droit d'opposition simple et gratuit. Pour les particuliers, le consentement préalable est exigé.</li>
<li><strong>Les données publiques ne sont pas libres de tout usage</strong> : l'adresse d'un dirigeant affichée sur un site reste une donnée personnelle. Collectez seulement ce qui sert au message.</li>
</ul>
<p>Quatre habitudes réduisent le risque. Cibler des entreprises dont l'activité correspond réellement à votre offre. Dire clairement qui vous êtes et pourquoi vous écrivez. Offrir un moyen simple de refuser, puis tenir une liste de refus que le robot consulte avant chaque envoi. Enfin, traiter un CAPTCHA comme un signal : le propriétaire du site ne souhaite pas de soumissions automatiques, et ignorer ces sites est la réponse la plus saine.</p>
<h2>Que ferait-on autrement en repartant de zéro ?</h2>
<p>Voici des conseils généraux, tirés des difficultés décrites plus haut.</p>
<ul>
<li>Définir la liste de refus et le message d'information avant d'écrire la première ligne de code.</li>
<li>Prévoir dès le départ un moyen de lever l'incertitude : une adresse de réponse dédiée ou un suivi des réponses reçues.</li>
<li>Relier les réponses à un suivi commercial plutôt qu'à une boîte e-mail partagée. Un <a href="/blog/crm-gratuit-whatsapp-business-google-sheets">CRM gratuit avec WhatsApp Business et Google Sheets</a> suffit pour démarrer.</li>
<li>Commencer par un petit lot de prospects, lire les rapports, corriger, puis seulement augmenter le volume.</li>
</ul>
<h2>Comment transposer l'idée à une autre activité ?</h2>
<p>L'approche convient à tout secteur B2B dont les prospects sont identifiables et possèdent un site avec formulaire : bureaux d'études, agences, prestataires du bâtiment, cabinets de conseil. Quatre questions permettent de juger si elle s'applique à votre cas.</p>
<ol>
<li>Vos prospects sont-ils des entreprises, avec un lien clair entre votre offre et leur métier ?</li>
<li>Peut-on les lister à partir de sources publiques sans collecter plus de données que nécessaire ?</li>
<li>Un message court et personnalisé suffit-il pour un premier contact ?</li>
<li>Avez-vous quelqu'un pour répondre vite aux retours, par exemple avec un <a href="/blog/chatbot-whatsapp-entreprise-support-client">assistant WhatsApp</a> qui passe la main à une personne ?</li>
</ol>
<p>Si les réponses sont positives, regardez d'abord les étapes d'un scénario complet dans <a href="/blog/automatiser-sa-prospection-n8n-make">automatiser sa prospection avec n8n ou Make</a>. Pour un cadrage sur mesure, la page <a href="/services/automatisation-ia">automatisation et IA</a> décrit ce que je propose, et vous pouvez <a href="/contact">me contacter</a> pour en discuter sans engagement.</p>
<h2>Questions fréquentes</h2>
<p><strong>Un robot de prospection remplace-t-il un commercial ?</strong></p>
<p>Non. Il remplace la saisie répétitive : trouver le formulaire, le remplir, vérifier l'envoi. Le message, la relation et la suite de la conversation restent humains.</p>
<p><strong>Pourquoi un script simple échoue-t-il sur la plupart des sites ?</strong></p>
<p>Les sites analysent le comportement du visiteur : vitesse de frappe, souris, défilement. Un script qui tape et clique instantanément est repéré. Dans mon cas, le script de départ ne fonctionnait que sur 30 % des sites au mieux.</p>
<p><strong>Que signifie le statut « incertain » ?</strong></p>
<p>Le formulaire a été soumis, mais aucune confirmation n'est apparue à l'écran, ce qui arrive avec les formulaires AJAX. Le message est probablement parti, sans preuve.</p>
<p><strong>Quels outils ce robot utilise-t-il ?</strong></p>
<p>Un navigateur automatisé piloté par script, GPT-4o-mini pour lire les formulaires, n8n pour orchestrer les envois quotidiens et un serveur VPS pour l'exécution.</p>
<p><strong>Peut-on contacter des entreprises sans leur accord préalable ?</strong></p>
<p>En France, selon la CNIL, la prospection de professionnels est possible sans consentement préalable si le sujet concerne leur métier et si elles peuvent s'opposer facilement. Au Bénin, vérifiez les règles du code du numérique auprès de l'Autorité de protection des données personnelles.</p>
<p><strong>Que faire face à un site protégé par un CAPTCHA ?</strong></p>
<p>Le plus simple est de l'ignorer et de contacter l'entreprise autrement : e-mail professionnel, téléphone ou réseau professionnel. Le CAPTCHA exprime la volonté du site de limiter les envois automatiques.</p>
<p><strong>Mon fichier de prospects peut-il être traité hors du Bénin ?</strong></p>
<p>Pas librement. L'article 391 de la loi n° 2017-20 exige que l'Autorité constate un niveau de protection équivalent et qu'elle autorise le transfert au préalable.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://www.cnil.fr/fr/la-prospection-commerciale-par-courrier-electronique-sms-mms-et-automate-dappel">CNIL, La prospection commerciale par courrier électronique, SMS-MMS et automate d'appel</a>, consultée le 7 octobre 2026</li>
<li><a href="https://service.apdp.bj/">Autorité de protection des données personnelles du Bénin</a>, consultée le 7 octobre 2026</li>
</ul>
HTML,
];
