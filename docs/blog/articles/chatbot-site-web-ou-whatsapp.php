<?php
// Source du nouvel article /blog/chatbot-site-web-ou-whatsapp. Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-chatbot-site-web-ou-whatsapp.sql.
return [
    'slug'       => 'chatbot-site-web-ou-whatsapp',
    'instantane' => '2026-10-27 12:00:00',
    'titre'      => 'Chatbot site web ou WhatsApp : lequel choisir en PME ?',
    'meta'       => 'Chatbot sur votre site ou sur WhatsApp ? Public, cas d\'usage, coût et maintenance, données, relais vers un humain et mesure : comment choisir pour une PME.',
    'resume'     => 'Choisissez le canal où vos clients vous écrivent déjà. Un chatbot de site web convient aux visiteurs qui cherchent une information ou une réservation ; un chatbot WhatsApp convient aux clients qui ont l\'habitude de vous écrire sur leur téléphone. Les deux demandent un relais vers une personne, des règles sur les données et un suivi régulier. Les postes de coût sont les mêmes ; seul le devis dit combien.',
    'categorie'  => 'IA',
    'tags'       => ['chatbot site web', 'chatbot WhatsApp entreprise', 'chatbot PME', 'coût d\'un chatbot', 'agent IA'],
    'contenu'    => <<<'HTML'
<h2>Chatbot sur un site web ou sur WhatsApp : lequel choisir ?</h2>
<p>Celui qui se trouve là où vos clients vous contactent déjà. Regardez vos trente derniers contacts : combien sont arrivés par le formulaire ou le site, combien par un message WhatsApp, combien par téléphone ? Le canal qui domine donne la réponse, bien avant les considérations techniques.</p>
<p>Un chatbot n'apporte rien s'il attend dans un coin où personne ne vient. Un chatbot WhatsApp sans clients habitués à vous écrire reste muet ; un chatbot de site sans visiteurs ne sert à personne non plus. Beaucoup d'entreprises finissent par avoir les deux, mais on démarre par un seul.</p>
<p>Le chatbot est ici un assistant qui répond par écrit à partir de vos propres informations (horaires, tarifs, conditions, catalogue). Pour la version WhatsApp en détail, voir <a href="/blog/chatbot-whatsapp-entreprise-support-client">l'assistant WhatsApp pour le service client</a>.</p>
<h2>Quel public et quels cas d'usage pour chaque canal ?</h2>
<h3>Sur le site web</h3>
<p>Le visiteur est souvent anonyme, de passage, parfois sur un ordinateur. Il cherche une réponse rapide avant de décider s'il reste. Les cas d'usage qui s'y prêtent :</p>
<ul>
<li>répondre aux questions de présentation (que faites-vous, où, pour qui) ;</li>
<li>orienter vers la bonne page, le bon formulaire ou la bonne fiche produit ;</li>
<li>qualifier une demande de devis en posant trois ou quatre questions avant de la transmettre ;</li>
<li>donner les horaires, les conditions de livraison ou de retour.</li>
</ul>
<h3>Sur WhatsApp</h3>
<p>Le client est identifié par son numéro, déjà dans votre répertoire ou en train d'y entrer, et il écrit depuis son téléphone, à toute heure. Les cas d'usage :</p>
<ul>
<li>suivi de commande, rendez-vous, rappel d'une échéance ;</li>
<li>questions répétitives des clients existants ;</li>
<li>envoi d'un catalogue, d'une adresse, d'un lien de paiement ;</li>
<li>relance après un devis.</li>
</ul>
<p>Retenez la nuance : le site attire des inconnus, WhatsApp prolonge une relation qui existe déjà. Si vos clients vous écrivent déjà sur WhatsApp, ce canal s'impose ; mesurez-le chez vous au lieu de le supposer.</p>
<h2>Comment décider en pratique, ligne par ligne ?</h2>
<p>Répondez à chaque ligne, puis comptez de quel côté penchent vos réponses.</p>
<ul>
<li><strong>Vos contacts arrivent surtout par le site :</strong> chatbot de site.</li>
<li><strong>Vos contacts arrivent surtout par WhatsApp :</strong> chatbot WhatsApp.</li>
<li><strong>Vous vendez à des inconnus qui comparent plusieurs offres :</strong> chatbot de site, pour les retenir.</li>
<li><strong>Vous suivez des clients dans la durée (commandes, rendez-vous, abonnements) :</strong> WhatsApp.</li>
<li><strong>Vous avez peu de trafic sur le site :</strong> WhatsApp, ou rien de plus qu'un bon formulaire.</li>
<li><strong>Vos clients n'ont pas WhatsApp ou n'osent pas y écrire à une entreprise :</strong> site.</li>
<li><strong>Vous n'avez personne pour répondre quand le chatbot passe la main :</strong> aucun des deux, pas encore.</li>
</ul>
<p>Cette dernière ligne compte plus que les autres. Un chatbot qui ne sait pas répondre et ne trouve personne derrière lui irrite plus qu'une page de contact sobre.</p>
<h2>Que coûte un chatbot, et qu'est-ce qui fait varier le prix ?</h2>
<p>Le prix dépend de postes que l'on peut nommer, pas d'un tarif unique. Voici ce qui compose la facture d'un chatbot, quel que soit le canal :</p>
<ol>
<li><strong>La conception :</strong> écrire les parcours, rassembler les informations, définir ce que le chatbot refuse de faire.</li>
<li><strong>Les connexions :</strong> catalogue, agenda, outil de gestion ou CRM, paiement. Plus il y en a, plus le travail grandit.</li>
<li><strong>La plateforme d'IA ou le moteur de réponses :</strong> facturé par l'éditeur, souvent à l'usage.</li>
<li><strong>Le canal :</strong> pour WhatsApp, l'accès passe par l'API WhatsApp Business de Meta et par un prestataire de passerelle, avec des frais de messages ; pour un site, aucun frais de messagerie, mais un hébergement et un widget à intégrer.</li>
<li><strong>Les langues et la qualité attendue :</strong> français seul ou plusieurs langues, réponses libres ou parcours guidés.</li>
<li><strong>La maintenance :</strong> mise à jour des informations, correction des erreurs vues dans les conversations, changements chez l'éditeur ou chez Meta.</li>
</ol>
<p>Aucune somme n'est publiée ici pour un chatbot : elle dépend de ces postes et se fixe sur devis, après un échange sur vos cas d'usage. Selon la page de tarification de Meta consultée le 27 octobre 2026, les messages sont facturés à l'unité, uniquement quand l'entreprise en envoie un, avec un tarif qui dépend de la catégorie du message et du pays du destinataire, et qui peut changer chaque trimestre. Ouvrez cette page le jour de votre décision (voir Sources). Il en va de même des formules des éditeurs d'IA : leurs prix changent, on les lit chez eux.</p>
<p>Un chatbot de site s'appuie sur un site existant. Si vous n'en avez pas, le tarif de départ d'un site vitrine chez Richard SALANON est de 300 000 FCFA (environ 457 euros) : le chatbot s'y ajoute, il ne le remplace pas.</p>
<h2>Qui entretient le chatbot, et combien de temps cela prend-il ?</h2>
<p>Quelqu'un chez vous, quelques minutes par semaine au début. Un chatbot se dégrade en silence : un tarif change, un produit disparaît, une adresse déménage, et le chatbot continue d'annoncer l'ancienne information avec la même assurance.</p>
<p>Prévoyez une routine simple :</p>
<ul>
<li>relire chaque semaine les conversations où le chatbot n'a pas su répondre ;</li>
<li>corriger ou ajouter la réponse correspondante ;</li>
<li>mettre à jour les informations dès qu'elles changent dans l'entreprise, le jour même ;</li>
<li>tester une fois par mois cinq questions types pour vérifier que les réponses restent justes.</li>
</ul>
<p>Cette maintenance peut être confiée à un prestataire (voir <a href="/services/maintenance-support">maintenance et support</a>), mais l'information vient toujours de vous : le prestataire ne sait pas que vous avez changé vos horaires.</p>
<h2>Quelles données un chatbot collecte-t-il, et comment obtenir le consentement ?</h2>
<p>Dès qu'un visiteur ou un client écrit son nom, son numéro ou son problème, vous traitez des données personnelles. Quelques règles pratiques :</p>
<ul>
<li><strong>Dire d'emblée qu'il s'agit d'un assistant automatique</strong>, pas d'une personne, et à quoi servent les données demandées.</li>
<li><strong>Ne demander que ce qui sert :</strong> un chatbot de réservation n'a pas besoin d'une pièce d'identité.</li>
<li><strong>Ne jamais demander de données sensibles</strong> (mot de passe, code de carte, données de santé) dans une conversation.</li>
<li><strong>Prévoir la suppression :</strong> savoir effacer l'historique d'un client qui le demande.</li>
<li><strong>Sur WhatsApp</strong>, n'écrire en premier qu'aux personnes qui ont accepté de recevoir vos messages, selon la politique de WhatsApp Business, qui exige leur accord préalable (voir Sources).</li>
</ul>
<p>Côté droit, au Bénin, la loi n° 2017-20 portant code du numérique encadre les données personnelles, et son article 391 exige, pour envoyer des données vers un État tiers, que l'Autorité de protection des données constate un niveau de protection équivalent et l'autorise au préalable. Cela concerne les chatbots dont les serveurs ou le moteur d'IA sont à l'étranger : demandez où les conversations sont traitées. Pour vos clients européens, le RGPD s'applique ; faites valider votre texte d'information par votre conseil juridique. Voir aussi la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.</p>
<h2>Comment passer la main à un humain sans perdre le client ?</h2>
<p>En décidant à l'avance quand, vers qui et avec quelle information. Le chatbot doit passer la main dans quatre situations :</p>
<ol>
<li>le client le demande, quelle que soit la formulation (« je veux parler à quelqu'un ») ;</li>
<li>le chatbot ne trouve pas de réponse après deux tentatives ;</li>
<li>le sujet est sensible : réclamation, litige, remboursement, urgence ;</li>
<li>l'échange prend un ton de colère.</li>
</ol>
<p>Au moment du relais, le chatbot transmet un résumé : qui est le client, ce qu'il demande, ce qui a été répondu. Le conseiller ne repose pas les questions déjà posées. Indiquez aussi un délai honnête (« un conseiller vous répond avant midi ») et, hors des heures d'ouverture, dites quand la réponse viendra.</p>
<p>Un chatbot qui répond de travers engage votre entreprise. L'histoire du <a href="/histoires/air-canada-chatbot">chatbot d'Air Canada</a> montre ce qui arrive quand une réponse automatique n'est pas contrôlée.</p>
<h2>Comment mesurer si le chatbot sert à quelque chose ?</h2>
<p>Avec quatre mesures simples, relevées avant le lancement puis chaque mois :</p>
<ul>
<li><strong>Le taux de questions résolues sans personne :</strong> sur un échantillon de conversations relues à la main.</li>
<li><strong>Le taux de passage à un humain</strong> et ses motifs : s'il monte, une réponse manque.</li>
<li><strong>Le délai de première réponse</strong> comparé à celui d'avant.</li>
<li><strong>Le résultat commercial :</strong> demandes de devis, rendez-vous ou commandes arrivés par le chatbot.</li>
</ul>
<p>Ajoutez un petit « cette réponse vous a-t-elle aidé ? » à la fin des échanges. Sans point de départ chiffré, vous ne saurez pas dire si le chatbot a réduit votre charge ou seulement déplacé le travail.</p>
<h2>Deux boutiques, deux choix : un exemple concret ?</h2>
<p>Ces deux dossiers sont fictifs, inventés pour illustrer la méthode.</p>
<ul>
<li><strong>Une boutique de vêtements fictive</strong> reçoit une vingtaine de messages WhatsApp par jour (tailles, disponibilités, adresse) et quelques courriels. Choix : WhatsApp, avec un relais vers la gérante pour les retours.</li>
<li><strong>Un cabinet fictif de conseil en gestion</strong> reçoit ses premiers contacts par son site, après des recherches Google. Choix : un chatbot de site qui pose trois questions et transmet la demande, plus un bouton de contact WhatsApp pour la suite.</li>
</ul>
<p>Dans les deux cas, la première version couvre dix questions seulement, et s'agrandit avec les conversations réelles.</p>
<h2>Quelles erreurs fréquentes éviter ?</h2>
<ul>
<li>Lancer le chatbot sans savoir qui répond quand il passe la main.</li>
<li>Vouloir répondre à toutes les questions dès le départ, au lieu de commencer par les dix plus fréquentes.</li>
<li>Laisser le chatbot inventer : lui demander de répondre uniquement à partir de vos informations, et de dire « je ne sais pas » sinon.</li>
<li>Oublier de dire qu'il s'agit d'un robot.</li>
<li>Ne jamais relire les conversations.</li>
<li>Choisir le canal par effet de mode et non d'après les contacts réels.</li>
</ul>
<h2>Quand faut-il se faire accompagner ?</h2>
<p>Quand le chatbot doit se connecter à vos outils, ou tenir une conversation libre sans dire d'erreur. Richard SALANON conçoit des <a href="/services/agents-ia-chatbot-whatsapp">agents IA et chatbots WhatsApp</a> sur devis, et l'intégration à un outil de gestion se traite avec <a href="/services/integration-whatsapp">l'intégration WhatsApp</a>. Pour que votre équipe gère elle-même le canal, la formation <a href="/formations/whatsapp-business">WhatsApp Business</a> couvre l'application avant l'API, et <a href="/formations/ia-en-entreprise">l'IA en entreprise</a> les usages plus larges. Il a aussi conçu Wapy, un assistant WhatsApp à IA pour les entreprises d'Afrique francophone.</p>
<h2>Questions fréquentes</h2>
<p><strong>Combien coûte un chatbot pour une PME ?</strong></p>
<p>Cela dépend de la conception, des connexions à vos outils, du moteur d'IA, du canal et de la maintenance. Une somme sans connaître ces postes serait trompeuse : le prix se fixe sur devis. Les frais de messages WhatsApp se lisent sur la page de Meta.</p>
<p><strong>Un chatbot de site web remplace-t-il un formulaire de contact ?</strong></p>
<p>Non, il le complète. Gardez toujours une façon simple de laisser un message, pour le visiteur qui ne veut pas parler à un robot.</p>
<p><strong>Faut-il l'API WhatsApp Business pour un chatbot WhatsApp ?</strong></p>
<p>Pour un chatbot qui tient la conversation avec une IA ou se branche sur vos outils, oui : il passe par l'API (la plateforme WhatsApp Business de Meta). L'application WhatsApp Business convient pour des réponses rapides et un catalogue, à petite échelle.</p>
<p><strong>Un chatbot peut-il se tromper ?</strong></p>
<p>Oui. Limitez-le à vos informations, relisez ses conversations et prévoyez le relais vers un humain pour tout sujet sensible.</p>
<p><strong>Peut-on avoir les deux canaux avec un seul chatbot ?</strong></p>
<p>C'est possible quand les réponses viennent d'une même base d'informations. Commencez par un canal, validez-le, puis ajoutez l'autre.</p>
<p><strong>En combien de temps un premier chatbot est-il prêt ?</strong></p>
<p>Le délai dépend du nombre de parcours et de connexions, et se précise dans le devis. Une première version sur dix questions se lance plus vite qu'un assistant branché sur tous vos outils.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing">Tarification de la plateforme WhatsApp Business, Meta</a>, consultée le 27 octobre 2026 : page officielle à rouvrir le jour de votre décision, car les tarifs évoluent.</li>
<li><a href="https://whatsappbusiness.com/fr/policy/">Politique de WhatsApp Business</a>, consultée le 27 octobre 2026 : consentement préalable du destinataire et voies d'escalade vers un humain.</li>
<li>Loi n° 2017-20 portant code du numérique en République du Bénin, article 391 (transfert de données vers un État tiers).</li>
</ul>
HTML,
];
