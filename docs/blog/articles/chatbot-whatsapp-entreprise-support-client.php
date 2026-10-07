<?php
// Source de la reprise de /blog/chatbot-whatsapp-entreprise-support-client (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-chatbot-whatsapp-entreprise-support-client.sql.
return [
    'slug'       => 'chatbot-whatsapp-entreprise-support-client',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'Chatbot WhatsApp pour entreprise : support client et humain',
    'meta'       => 'Ce qu\'un assistant WhatsApp peut faire pour votre service client, ce que coûtent les messages chez Meta, le relais humain, les données et la mise en place.',
    'resume'     => 'Un assistant WhatsApp répond aux questions répétitives, qualifie les demandes et passe la main à un conseiller dès que le cas devient sensible. Il passe par l\'API WhatsApp Business, pas par l\'application gratuite. Depuis le 1er octobre 2026, Meta offre 1 000 messages de service gratuits par mois et par numéro ; les modèles envoyés hors de la fenêtre de 24 heures restent payants.',
    'categorie'  => 'IA',
    'tags'       => ['chatbot WhatsApp', 'support client', 'API WhatsApp Business', 'assistant IA', 'service client'],
    'contenu'    => <<<'HTML'
<h2>Que peut faire un assistant WhatsApp, et que doit-il laisser à un humain ?</h2>
<p>Un assistant WhatsApp prend en charge ce qui se répète : horaires, tarifs, disponibilités, état d'une commande, prise de rendez-vous. Il pose aussi les premières questions utiles à un conseiller (nom, besoin, urgence) pour que la conversation commence déjà qualifiée.</p>
<p>Ce qu'il laisse à un humain :</p>
<ul>
<li>les réclamations et les clients en colère ;</li>
<li>les remboursements, les exceptions et tout ce qui engage l'entreprise ;</li>
<li>les sujets de santé, d'argent ou de litige ;</li>
<li>toute demande que le bot a déjà mal comprise deux fois.</li>
</ul>
<p>La règle est simple : le bot traite le simple et le récurrent, le client doit pouvoir joindre une vraie personne à tout moment.</p>
<h3>Pourquoi ne pas lui laisser tout promettre ?</h3>
<p>Un assistant qui invente une règle commerciale engage l'entreprise. En novembre 2022, le chatbot d'Air Canada a promis à un passager un tarif de deuil que la politique de la compagnie excluait. Le 14 février 2024, le Civil Resolution Tribunal de Colombie-Britannique a condamné Air Canada à payer 812,02 dollars canadiens : le chatbot n'était pas une entité distincte. L'affaire est racontée dans <a href="/histoires/air-canada-chatbot">l'histoire du chatbot d'Air Canada</a>. Limitez donc les réponses du bot à vos documents (tarifs, conditions, horaires) et faites-lui répondre « je transmets à un conseiller » quand l'information manque.</p>
<h2>WhatsApp Business ou API WhatsApp Business : quelle différence ?</h2>
<p>Les deux sont proposés par Meta, mais ils ne servent pas le même besoin.</p>
<ul>
<li><strong>L'application WhatsApp Business</strong> est gratuite et pensée pour une petite équipe : profil d'entreprise, catalogue, étiquettes, réponses rapides, message d'accueil et message d'absence. Ces messages automatiques ne sont pas un assistant qui comprend et répond.</li>
<li><strong>L'API WhatsApp Business</strong> (API Cloud de Meta) relie votre numéro à un logiciel : un assistant, un outil de gestion des conversations, votre CRM. C'est la voie prévue pour brancher un vrai chatbot et plusieurs conseillers sur un même numéro.</li>
</ul>
<p>Pour démarrer, <a href="/formations/whatsapp-business">la formation WhatsApp Business</a> montre ce que l'application permet déjà. Quand les messages dépassent ce qu'une équipe lit à la main, on passe à l'API, par exemple avec <a href="/services/integration-whatsapp">l'intégration de WhatsApp à vos outils</a>.</p>
<h2>Combien coûtent les messages selon les tarifs de Meta ?</h2>
<p>Selon la page « Tarifs sur la plateforme WhatsApp Business » de Meta, mise à jour le 30 septembre 2026 et consultée le 7 octobre 2026, Meta facture chaque message distribué, selon sa catégorie (marketing, utilitaire, authentification, service) et le pays du destinataire. Elle ne facture pas les messages envoyés par le client.</p>
<h3>Quels messages sont gratuits ?</h3>
<ul>
<li><strong>La fenêtre de service client.</strong> Quand un client vous écrit, une fenêtre de 24 heures s'ouvre, renouvelée à chaque nouveau message de sa part. Les réponses libres (hors modèle) y sont des messages de service.</li>
<li><strong>Le quota mensuel.</strong> Depuis le 1er octobre 2026, chaque numéro professionnel dispose de 1 000 messages de service gratuits par mois, non reportables. Meta facture à partir du 1 001e. Sans moyen de paiement enregistré, Meta n'envoie plus de messages de service une fois le quota épuisé.</li>
<li><strong>La fenêtre de point d'entrée gratuit.</strong> Si le client vous écrit depuis une publicité « clic vers WhatsApp » et que vous répondez, Meta ne facture pas les messages marketing, utilitaires, d'authentification ni de service pendant 7 jours au plus.</li>
</ul>
<h3>Quels messages sont payants ?</h3>
<p>Dès que la fenêtre de 24 heures est fermée, vous ne pouvez plus écrire que par un modèle de message approuvé, facturé selon sa catégorie. Au-delà des 1 000 messages de service, chaque réponse est facturée. Les clients du Bénin et de plusieurs pays voisins relèvent du tarif régional « Reste de l'Afrique » : consultez la grille en vigueur sur la page de Meta avant de chiffrer un budget, car Meta ne modifie ses tarifs que le premier jour de janvier, d'avril, de juillet ou d'octobre.</p>
<h3>Et le coût de l'intelligence artificielle ?</h3>
<p>Les frais de Meta paient l'acheminement du message, pas la réflexion du bot. L'IA se facture à part, chez le fournisseur du modèle. Meta propose aussi son propre agent : selon la même page, il coûte 2 dollars par million de tokens, et ses messages restent facturés même dans une fenêtre gratuite.</p>
<h2>Comment organiser le relais vers un conseiller ?</h2>
<p>Le relais est ce qui distingue un assistant utile d'un robot frustrant. Quatre points à régler avant la mise en ligne :</p>
<ol>
<li><strong>Les déclencheurs.</strong> Mot « conseiller » ou « humain » écrit par le client, deux incompréhensions de suite, sujet sensible détecté, client déjà connu comme prioritaire.</li>
<li><strong>Le contexte transmis.</strong> Le conseiller reçoit l'historique et un résumé en deux lignes, pour que le client n'ait pas à tout répéter.</li>
<li><strong>Les horaires.</strong> Hors des heures de l'équipe, le bot le dit, prend le message et annonce un délai de réponse tenable.</li>
<li><strong>La reprise.</strong> Quand le conseiller a fini, il rend la main au bot ou clôt la conversation, sans que les deux répondent en même temps.</li>
</ol>
<p>Dites aussi au client qu'il parle à un assistant automatique : c'est honnête, et il accepte mieux ses limites.</p>
<h2>Quelles données peut-il traiter, et sous quelles règles ?</h2>
<p>Une conversation WhatsApp contient des données personnelles : numéro, nom, adresse, parfois une commande ou un état de santé. Trois règles de base :</p>
<ul>
<li>ne collecter que ce qui sert la demande, et ne jamais demander un mot de passe, un code de carte ou une pièce d'identité par message ;</li>
<li>prévenir le client de l'usage de ses données et du traitement par un assistant, et ne pas écrire à quelqu'un qui n'a pas accepté d'être contacté ;</li>
<li>savoir où partent les données : un assistant IA envoie le texte des échanges au fournisseur du modèle.</li>
</ul>
<p>Au Bénin, l'article 391 de la loi n° 2017-20 portant code du numérique exige, pour un transfert de données vers un État tiers, que l'Autorité de protection des données constate un niveau de protection équivalent et l'autorise au préalable. Pour une entreprise béninoise dont le fournisseur d'IA est à l'étranger, cette question se règle avant le lancement, pas après. Pour vos clients européens, le RGPD s'applique en plus.</p>
<h2>Comment le mettre en place, étape par étape ?</h2>
<ol>
<li><strong>Lister les questions.</strong> Relevez, sur un mois de conversations, les 20 questions qui reviennent le plus. Ce sont les premières réponses du bot.</li>
<li><strong>Choisir le périmètre.</strong> Trois ou quatre tâches au départ (renseigner, qualifier, prendre un rendez-vous), pas dix.</li>
<li><strong>Ouvrir l'accès à l'API.</strong> Compte Meta Business, numéro dédié, moyen de paiement enregistré chez Meta, modèles de messages approuvés.</li>
<li><strong>Écrire les réponses et le relais.</strong> Réponses courtes, ton de l'entreprise, règles de transfert à un humain.</li>
<li><strong>Brancher les outils.</strong> Agenda, base clients ou ERP, pour que le bot lise un état de commande ou crée une fiche. Un suivi gratuit pour démarrer est décrit dans <a href="/blog/crm-gratuit-whatsapp-business-google-sheets">le CRM gratuit avec WhatsApp Business et Google Sheets</a>.</li>
<li><strong>Tester avec l'équipe.</strong> Deux semaines de conversations réelles avec un petit groupe de clients, en relisant chaque échange.</li>
<li><strong>Ouvrir à tous, puis corriger chaque semaine.</strong> Chaque conversation mal tournée devient une réponse ajoutée ou une règle de relais.</li>
</ol>
<p>Je conçois et installe ce type d'assistant : voir <a href="/services/agents-ia-chatbot-whatsapp">les agents IA et chatbots WhatsApp</a> et, pour l'étape de cadrage, <a href="/blog/ia-pour-les-pme-par-ou-commencer">l'IA pour les PME : par où commencer</a>. J'ai aussi créé Wapy, mon propre assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, présenté sur <a href="/realisations/">mes réalisations</a>. Pour chiffrer votre cas, <a href="/contact">contactez-moi</a>.</p>
<h2>Comment mesurer la qualité de l'assistant ?</h2>
<p>Quelques indicateurs suffisent, relevés chaque semaine :</p>
<ul>
<li><strong>Le taux de résolution sans humain</strong> : part des conversations réglées par le bot sans transfert. Un taux très haut peut cacher des clients qui abandonnent : vérifiez-le avec le suivant.</li>
<li><strong>Le taux de transfert</strong> et ses motifs : ils indiquent les réponses à ajouter.</li>
<li><strong>Le délai de première réponse</strong>, du bot comme du conseiller.</li>
<li><strong>La satisfaction</strong> : une question simple en fin d'échange (« Cette réponse vous a-t-elle aidé ? »).</li>
<li><strong>Les erreurs</strong> : relire un échantillon de conversations chaque semaine, pour repérer les réponses fausses avant qu'un client ne s'en plaigne.</li>
</ul>
<p>Fixez des seuils avant le lancement (par exemple, aucune réponse fausse sur les prix) et comparez au même mois avant l'assistant.</p>
<h2>Questions fréquentes</h2>
<p><strong>Faut-il l'API WhatsApp Business ?</strong></p>
<p>Pour un assistant qui comprend et répond, oui. L'application gratuite propose des messages d'accueil et d'absence et des réponses rapides, mais pas d'assistant qui comprend la question.</p>
<p><strong>Le client saura-t-il qu'il parle à un bot ?</strong></p>
<p>Il doit le savoir. Dites-le dans le premier message et indiquez comment joindre un conseiller.</p>
<p><strong>Est-ce adapté à une petite entreprise ?</strong></p>
<p>Oui, si vous recevez souvent les mêmes questions. Avec peu de messages par jour, l'application WhatsApp Business et ses réponses rapides suffisent souvent.</p>
<p><strong>Peut-on garder son numéro actuel ?</strong></p>
<p>Cela dépend de la configuration : selon la documentation de Meta et l'outil retenu, un numéro peut ne plus fonctionner dans l'application classique une fois relié à l'API. Faites confirmer ce point par votre prestataire avant de migrer. Beaucoup d'entreprises préfèrent un numéro dédié au service client, pour garder l'usage habituel de l'ancien.</p>
<p><strong>Que se passe-t-il si le quota de 1 000 messages de service est dépassé ?</strong></p>
<p>Meta facture à partir du 1 001e message du mois. Sans moyen de paiement enregistré, les messages de service cessent d'être envoyés, d'où l'intérêt d'en renseigner un avant le lancement.</p>
<p><strong>Le bot peut-il écrire le premier à un client ?</strong></p>
<p>Seulement avec un modèle de message approuvé, payant selon sa catégorie, et à une personne qui a accepté d'être contactée. Hors de la fenêtre de 24 heures, aucune réponse libre n'est possible.</p>
<p><strong>Le bot comprend-il les messages vocaux et les langues locales ?</strong></p>
<p>Cela dépend du modèle d'IA retenu. Testez-le sur de vrais messages de vos clients, dans leur langue, avant de promettre quoi que ce soit.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing">Meta, Tarifs sur la plateforme WhatsApp Business</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing/non-template-messages/">Meta, Messages non issus d'un modèle (fenêtre de service client)</a>, consultée le 7 octobre 2026</li>
<li><a href="https://sgg.gouv.bj/doc/loi-2017-20/">Loi n° 2017-20 portant code du numérique en République du Bénin</a>, consultée le 7 octobre 2026</li>
<li><a href="https://apdp.bj">Autorité de protection des données personnelles du Bénin</a>, consultée le 7 octobre 2026</li>
</ul>
HTML,
];
