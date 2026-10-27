<?php
// Source du nouvel article /blog/par-ou-commencer-avec-ia-debutant. Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-par-ou-commencer-avec-ia-debutant.sql.
return [
    'slug'       => 'par-ou-commencer-avec-ia-debutant',
    'instantane' => '2026-10-27 09:00:00',
    'titre'      => 'IA pour débutant : par où commencer, étape par étape',
    'meta'       => 'Vous n\'avez jamais utilisé d\'assistant IA ? Cinq étapes, des exemples concrets, les erreurs à éviter et un atelier d\'une demi-journée pour démarrer.',
    'resume'     => 'Pour débuter avec l\'intelligence artificielle, ouvrez un assistant gratuit et donnez-lui une vraie tâche de votre semaine : une réponse à écrire, un texte long à résumer, des notes à mettre en ordre. Écrivez une demande complète, relisez tout ce qui revient, et ne collez aucune donnée sensible. Quelques essais de ce type valent mieux qu\'un cours théorique.',
    'categorie'  => 'IA',
    'tags'       => ['formation intelligence artificielle débutant', 'apprendre l\'IA', 'intelligence artificielle exemple', 'assistant IA', 'IA pour les non-techniciens'],
    'contenu'    => <<<'HTML'
<h2>Qu'est-ce que l'intelligence artificielle, pour quelqu'un qui n'y connaît rien ?</h2>
<p>Dans l'usage de tous les jours, c'est un assistant à qui l'on écrit en français, comme à un collègue, et qui répond par un texte : un brouillon de courrier, un résumé, une liste, un tableau. Vous n'avez rien à programmer ni à installer de logiciel compliqué.</p>
<p>Il faut retenir deux choses pour ne pas être déçu. Un assistant fabrique une réponse vraisemblable à partir de ce qu'il a appris ; il ne « sait » pas au sens d'un expert, et il peut se tromper en gardant un ton sûr de lui. Et il ne connaît ni votre entreprise ni vos clients tant que vous ne lui donnez pas le contexte. Tout l'apprentissage consiste à bien décrire la demande, puis à contrôler la réponse.</p>
<h2>Que peut faire l'IA concrètement, avec quels exemples ?</h2>
<p>Voici des tâches de bureau qu'un débutant réussit dès la première semaine :</p>
<ul>
<li><strong>Répondre à un client mécontent.</strong> Vous collez son message (sans son nom ni son numéro) et vous demandez une réponse polie de cinq lignes qui propose un rappel.</li>
<li><strong>Résumer un document de dix pages</strong> en cinq points, avec les décisions à prendre.</li>
<li><strong>Transformer des notes de réunion</strong> en compte rendu : qui fait quoi, pour quand.</li>
<li><strong>Mettre en tableau</strong> des informations éparpillées dans des messages.</li>
<li><strong>Préparer un texte</strong> : annonce de poste, message de relance, publication pour les réseaux sociaux, que vous corrigez ensuite.</li>
<li><strong>Expliquer un sujet inconnu</strong> avec des mots simples, avant de lire un dossier technique.</li>
</ul>
<p>Dans l'Union européenne, selon Eurostat (publication du 11 décembre 2025), 20,0 % des entreprises de 10 salariés ou plus utilisaient l'IA en 2025, contre 13,5 % en 2024, et l'analyse de textes écrits était l'usage le plus courant, à 11,8 %. C'est le geste de la plupart des exemples ci-dessus : lire, résumer, reformuler.</p>
<h2>Par où commencer concrètement, en cinq étapes ?</h2>
<ol>
<li><strong>Choisissez une tâche réelle et sans risque.</strong> Un texte que vous écrivez souvent, qui ne contient ni secret ni donnée de client. Évitez de commencer par un dossier délicat.</li>
<li><strong>Ouvrez un assistant gratuit.</strong> ChatGPT, Claude, Gemini ou Copilot conviennent pour débuter ; n'en prenez qu'un. Pour les différences, voir la <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparaison de ChatGPT, Claude et Gemini</a>.</li>
<li><strong>Écrivez une demande complète</strong> (voir la section suivante).</li>
<li><strong>Relisez et corrigez.</strong> Vérifiez chaque nom, chiffre et date. Dites à l'assistant ce qui ne va pas : « plus court », « plus formel », « garde seulement les trois premiers points ».</li>
<li><strong>Chronométrez.</strong> Notez le temps que la tâche prenait avant, puis avec l'assistant. Si vous ne gagnez rien après quelques essais, changez de tâche.</li>
</ol>
<p>Comptez une semaine à raison d'une tâche par jour. Au bout de cinq essais, vous savez déjà ce qui vous sert et ce qui ne vous sert pas.</p>
<h2>Comment écrire une bonne demande à un assistant ?</h2>
<p>Une demande utile répond à cinq questions : qui est l'assistant, quelle est la tâche, quel est le contexte, quel format attendez-vous, quelles limites. Comparez deux demandes.</p>
<ul>
<li><strong>Faible :</strong> « Écris un message pour un client. »</li>
<li><strong>Complète :</strong> « Tu es assistante commerciale dans une entreprise de climatisation à Cotonou. Rédige une réponse à un client dont l'installation a pris trois jours de retard. Ton poli, cinq lignes au plus, une excuse, une proposition de visite de contrôle jeudi. Ne promets aucune remise. »</li>
</ul>
<p>Autres habitudes qui changent beaucoup les résultats : donner un exemple du style voulu, demander à l'assistant de poser ses questions avant de répondre quand il manque des informations, et corriger par petites touches au lieu de recommencer. La formation <a href="/formations/prompt-engineering">prompt engineering</a> approfondit cette pratique.</p>
<h2>Quelles données ne faut-il jamais confier à un assistant IA ?</h2>
<p>Tout ce dont la divulgation vous nuirait ou nuirait à quelqu'un d'autre. Avant d'envoyer un texte, retirez ou remplacez :</p>
<ul>
<li>les noms, téléphones, adresses et numéros de pièces d'identité de clients, d'élèves, de patients ou de salariés ;</li>
<li>les mots de passe, codes et accès bancaires ;</li>
<li>les contrats, devis et chiffres confidentiels de l'entreprise ;</li>
<li>les dossiers médicaux ou juridiques.</li>
</ul>
<p>Si le texte est important, remplacez « Mme Kouassi, 0197… » par « Cliente A ». Vérifiez aussi, dans les paramètres de l'outil, si vos conversations servent à améliorer ses modèles. Côté loi, la CNIL rappelle que la collecte et l'utilisation de données via un système d'IA doivent respecter le RGPD et les droits des personnes ; au Bénin, la loi n° 2017-20 portant <a href="https://sgg.gouv.bj/doc/loi-2017-20/">code du numérique</a> encadre les données personnelles, à faire préciser auprès de votre conseil. Dans le doute, n'envoyez pas.</p>
<h2>Quelles erreurs de débutant éviter ?</h2>
<ul>
<li><strong>Copier la réponse sans la lire.</strong> L'assistant peut inventer un chiffre, une loi ou une source avec aplomb. Vous restez responsable de ce qui part sous votre nom. Un transporteur aérien a ainsi été tenu pour responsable de ce que disait son chatbot : voir <a href="/histoires/air-canada-chatbot">l'histoire du chatbot d'Air Canada</a>.</li>
<li><strong>Poser une question vague</strong> et conclure que l'outil est mauvais.</li>
<li><strong>Tout essayer à la fois.</strong> Trois outils, dix usages, aucune habitude.</li>
<li><strong>Demander un fait d'actualité ou un chiffre précis</strong> sans demander la source ni la vérifier.</li>
<li><strong>Utiliser son compte personnel pour le travail de l'entreprise</strong> sans avoir fixé de règle avec la direction.</li>
<li><strong>S'arrêter au premier mauvais résultat.</strong> Reformuler deux ou trois fois fait partie de la méthode.</li>
</ul>
<h2>Faut-il une formation, et laquelle choisir quand on débute ?</h2>
<p>Pas pour essayer : les premiers essais se font seul, gratuitement. Une formation sert quand vous voulez que toute une équipe adopte les mêmes bons gestes, ou quand vous n'avez personne pour vous corriger. Cherchez-en une qui vous fait travailler sur vos propres documents, pas une démonstration de l'outil.</p>
<p>Pour une équipe ou un dirigeant qui n'a jamais utilisé d'assistant, la fiche <a href="/formations/ia-en-entreprise">formation IA en entreprise</a> propose un atelier découverte d'une demi-journée, pour 12 personnes au plus, sans prérequis technique. Il permet de prendre en main un assistant sur deux tâches réelles, de poser les règles de base sur les données et de recevoir une recommandation pour la suite ; certaines entreprises s'en tiennent là, et c'est une conclusion honorable. Le prix est fixé sur devis. Un dirigeant qui veut d'abord décider peut regarder <a href="/formations/ia-generative-dirigeants">l'IA générative pour dirigeants</a>.</p>
<h2>Questions fréquentes</h2>
<p><strong>Faut-il savoir programmer pour utiliser l'IA ?</strong></p>
<p>Non. Un assistant se pilote par écrit, en français. Savoir expliquer clairement ce qu'on veut compte plus que savoir coder.</p>
<p><strong>L'IA est-elle gratuite ?</strong></p>
<p>Plusieurs assistants, dont <a href="https://claude.com/pricing">Claude</a> et <a href="https://gemini.google/subscriptions/">Gemini</a>, proposent une version gratuite, avec des limites d'usage qui changent souvent. Relevez-les sur la page officielle de l'éditeur le jour où vous choisissez, et testez avant de payer quoi que ce soit.</p>
<p><strong>Quel assistant choisir pour débuter ?</strong></p>
<p>Celui que vous aurez le plus de facilité à ouvrir chaque jour, accessible depuis votre téléphone ou votre navigateur. Testez la même demande sur deux outils et gardez celui dont les réponses vous conviennent le mieux.</p>
<p><strong>Peut-on se fier à ce que dit l'IA ?</strong></p>
<p>Pour un premier jet, souvent. Pour un fait, un chiffre, une référence juridique ou médicale, jamais sans vérification dans une source officielle.</p>
<p><strong>L'IA va-t-elle prendre mon emploi ?</strong></p>
<p>Elle prend d'abord des tâches : ressaisie, brouillons, tri. Le jugement, la relation avec les gens et la responsabilité de ce qui est envoyé restent à vous. Savoir s'en servir devient une compétence en plus.</p>
<p><strong>Combien de temps faut-il pour apprendre ?</strong></p>
<p>Les premiers résultats utiles arrivent en quelques essais. L'aisance vient avec la pratique régulière, sur des tâches qui reviennent chaque semaine.</p>
<p><strong>Peut-on apprendre l'IA avec un téléphone seulement ?</strong></p>
<p>Oui, les assistants existent en application mobile et dans le navigateur. Le clavier d'un ordinateur reste plus confortable pour relire et corriger de longs textes.</p>
<p><strong>Comment être aidé pour démarrer dans mon entreprise ?</strong></p>
<p>Richard SALANON, consultant en digitalisation basé à Cotonou, forme des équipes à l'IA. Décrivez votre équipe et vos tâches via la page <a href="/contact">contact</a> ; la réponse arrive sous 24 heures.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2">Eurostat, utilisation de l'IA par les entreprises de l'Union européenne en 2025</a>, consulté le 27 octobre 2026</li>
<li><a href="https://claude.com/pricing">Claude, page des offres</a>, consultée le 27 octobre 2026</li>
<li><a href="https://gemini.google/subscriptions/">Google Gemini, abonnements</a>, consultée le 27 octobre 2026</li>
<li><a href="https://sgg.gouv.bj/doc/loi-2017-20/">Loi n° 2017-20 portant code du numérique en République du Bénin</a>, consultée le 27 octobre 2026</li>
<li><a href="https://www.cnil.fr/fr/technologies/intelligence-artificielle-ia">CNIL, intelligence artificielle</a>, consultée le 27 octobre 2026</li>
</ul>
HTML,
];
