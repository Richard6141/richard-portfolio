<?php
// Source de la reprise de /blog/seo-2026-apparaitre-dans-les-reponses-ia (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-seo-2026-apparaitre-dans-les-reponses-ia.sql.
return [
    'slug'       => 'seo-2026-apparaitre-dans-les-reponses-ia',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'Apparaître dans les réponses des IA : guide GEO 2026',
    'meta'       => 'Comment être cité par ChatGPT, Gemini, Perplexity et les AI Overviews : ce que dit Google, 5 actions concrètes, llms.txt, robots des IA et mesure.',
    'resume'     => 'Pour être cité par une IA, il faut d\'abord être trouvable et lisible : Google l\'écrit lui-même, il n\'existe aucune optimisation spéciale pour apparaître dans ses réponses IA. Le GEO prolonge le SEO avec une exigence de plus : des pages qui répondent nettement à une question, une entreprise identifiable et cohérente partout sur le web, un site que les robots peuvent lire. Voici les 5 actions qui comptent, la structure d\'une page citable et la façon de vérifier le résultat.',
    'categorie'  => 'SEO',
    'tags'       => ['SEO 2026', 'référencement IA', 'GEO', 'ChatGPT', 'Google AI Overviews'],
    'contenu'    => <<<'HTML'
<h2>Comment les moteurs d'IA choisissent-ils leurs sources ?</h2>
<p>Il n'existe pas un seul mécanisme, et chaque éditeur garde ses critères de classement pour lui. Ce que les éditeurs documentent, ce sont leurs robots : certains servent à entraîner les modèles, d'autres à faire apparaître des sites dans les réponses de recherche. Ce sont ces derniers qui vous concernent, car ils conditionnent les liens cités.</p>
<p>Pour Google, la règle est publiée. Selon la page « Fonctionnalités d'IA et votre site » de Google Search Central, consultée le 7 octobre 2026, une page doit être indexée et éligible à l'affichage avec un extrait dans Google Search pour pouvoir apparaître comme lien dans les AI Overviews ou le mode IA. Google ajoute qu'aucune autre exigence ni optimisation spéciale n'est nécessaire.</p>
<p>Pour ChatGPT, la page des robots d'OpenAI, consultée le 7 octobre 2026, indique que le robot OAI-SearchBot sert à faire apparaître des sites dans les résultats de la recherche de ChatGPT. OpenAI précise que l'on peut interdire ce robot dans robots.txt pour ne pas y apparaître : une page qu'il ne peut pas lire ne peut donc pas y être citée.</p>
<p>Pour Perplexity, la page de ses robots, consultée le 7 octobre 2026, décrit PerplexityBot comme conçu pour faire apparaître et lier des sites dans les résultats de Perplexity, sans servir à entraîner des modèles. Perplexity recommande de l'autoriser dans robots.txt pour y figurer.</p>

<h2>Qu'est-ce que le GEO et en quoi diffère-t-il du SEO ?</h2>
<p>Le GEO (Generative Engine Optimization) désigne les pratiques qui augmentent vos chances d'être cité dans la réponse rédigée par une IA. Le SEO vise une position dans une liste de liens. Le GEO vise une mention, une reprise de vos informations ou un lien dans une réponse déjà rédigée.</p>
<ul>
<li><strong>Ce qui est commun :</strong> indexation, vitesse, pages utiles, réputation (les <a href="/blog/7-erreurs-qui-tuent-votre-referencement">7 erreurs qui tuent votre référencement</a> en listent les pièges). Sans cela, aucune des deux ne fonctionne.</li>
<li><strong>Ce que le GEO renforce :</strong> la réponse directe en tête de page, des faits précis et vérifiables, l'identité claire de l'entreprise et de l'auteur, la cohérence des informations d'un site à l'autre.</li>
<li><strong>Ce qui change dans la mesure :</strong> on regarde les citations et le trafic venant des assistants, pas seulement les positions.</li>
</ul>
<p>Le SEO classique n'est donc pas mort : Google indique que ses fonctions d'IA reposent sur l'éligibilité à Google Search et n'exigent aucune optimisation spéciale. Le GEO s'ajoute à ce socle, il ne le remplace pas.</p>

<h2>Quelles actions concrètes pour être cité par une IA ?</h2>
<p>Voici les cinq actions qui comptent, de la plus rentable à la plus longue.</p>
<h3>1. Répondre clairement aux vraies questions</h3>
<p>Listez les questions que posent vos clients : prix, délais, comparaisons, démarches, pannes. Donnez à chacune sa section, avec la réponse dès la première phrase, puis le détail. Un passage qui se suffit à lui-même est plus facile à reprendre, par une IA comme par un lecteur pressé. Une page qui tourne autour du sujet pendant trois paragraphes l'est moins.</p>
<h3>2. Être présent et cohérent sur tout le web</h3>
<p>Une entreprise dont les informations concordent partout est plus facile à identifier pour un moteur comme pour un client. Alignez le nom, la description, l'adresse, le téléphone et les services entre votre site, votre fiche Google, vos profils professionnels et les annuaires où vous figurez. Une incohérence (ancien nom, ancienne ville) affaiblit la confiance. Pour une entreprise locale, la fiche Google est le premier chantier : voyez le <a href="/services/seo-local-google-business">référencement local et la fiche Google Business</a>.</p>
<h3>3. Montrer son expertise et sa fiabilité (E-E-A-T)</h3>
<p>E-E-A-T désigne l'expérience, l'expertise, l'autorité et la fiabilité. Concrètement : un auteur nommé avec une page de présentation, des réalisations réelles, des sources citées avec leur date, des mentions légales complètes. Évitez les chiffres sans source : c'est ce qu'une IA ou un lecteur peut vérifier qui rend une page citable. Vous pouvez parcourir <a href="/realisations/">les réalisations</a> pour voir comment des projets sont présentés.</p>
<h3>4. Soigner les données structurées</h3>
<p>Les balises schema.org (organisation, article, FAQ, produit, avis) aident les machines à identifier qui vous êtes et ce que la page contient. Nuance importante : Google écrit qu'aucun balisage spécial n'est nécessaire pour apparaître dans ses réponses IA. Le balisage n'est donc pas une condition d'entrée, c'est un moyen d'éviter les ambiguïtés, notamment sur l'identité de l'entreprise. Il doit refléter ce qui est écrit sur la page, jamais le contredire.</p>
<h3>5. Publier du contenu original et le tenir à jour</h3>
<p>Une information de première main (votre méthode, vos prix de départ, vos délais, vos retours d'expérience) vaut plus qu'un texte que dix concurrents ont déjà écrit. Affichez la date de publication et de mise à jour, et revoyez vos pages chiffrées au moins une fois par an. Un site figé depuis des années donne un signal d'abandon aux lecteurs comme aux moteurs.</p>
<p>Ces cinq actions reposent sur une base technique : site rapide, adapté au mobile, indexable, structuré en titres clairs. C'est le travail du <a href="/services/referencement-naturel-seo">référencement naturel</a>, et le <a href="/services/referencement-ia-geo">référencement IA (GEO)</a> y ajoute les points propres aux moteurs de réponse.</p>

<h2>Comment structurer une page pour être reprise ?</h2>
<ol>
<li>Un titre qui reprend la question ou le sujet exact, tel qu'un client le formulerait.</li>
<li>Un résumé de deux à quatre phrases en haut de page, qui donne la réponse complète.</li>
<li>Des intertitres sous forme de questions, un sujet par section.</li>
<li>Des paragraphes courts, et des listes dès qu'il y a des étapes ou une comparaison.</li>
<li>Des faits datés, avec la source nommée dans la phrase et un lien vers elle.</li>
<li>Une FAQ qui complète le corps de l'article, sans le répéter.</li>
<li>L'auteur et la date de mise à jour visibles.</li>
</ol>
<p>Le contenu important doit être du texte dans la page, pas dans une image ni chargé seulement après un clic. Si un robot ne le voit pas dans le code de la page, il ne peut pas le citer.</p>

<h2>Quel rôle pour llms.txt et les robots des IA ?</h2>
<h3>Les robots et le fichier robots.txt</h3>
<p>Selon la page des robots d'OpenAI consultée le 7 octobre 2026, il y a trois agents distincts. OAI-SearchBot alimente la recherche de ChatGPT. GPTBot sert à explorer du contenu pouvant servir à entraîner les modèles. ChatGPT-User agit à la demande d'un utilisateur, et les règles de robots.txt peuvent alors ne pas s'appliquer. OpenAI précise que l'on peut interdire GPTBot tout en autorisant OAI-SearchBot : on peut donc refuser l'entraînement et rester citable.</p>
<p>Côté Google, le jeton Google-Extended est distinct de Googlebot. Selon la documentation Google sur ses robots communs, consultée le 7 octobre 2026, il permet de gérer l'utilisation du contenu pour l'entraînement des modèles Gemini et pour le grounding dans les applications Gemini, et il n'affecte ni l'inclusion dans Google Search ni le classement. Le bloquer ne retire donc pas votre site des AI Overviews, qui dépendent de la recherche Google. Côté Perplexity, PerplexityBot est le robot de recherche à autoriser ; Perplexity-User agit à la demande d'un utilisateur et ignore en général robots.txt.</p>
<p>L'erreur à éviter : un robots.txt qui bloque tous les robots inconnus, ou une protection anti-robots du serveur, qui exclut aussi les robots de recherche des IA. Vérifiez votre fichier et les réglages de votre hébergeur.</p>
<h3>Le fichier llms.txt</h3>
<p>llms.txt est un fichier Markdown placé à la racine du site, qui présente le site et ses pages clés à l'attention des IA. Selon llmstxt.org, consulté le 7 octobre 2026, c'est une proposition de Jeremy Howard publiée le 3 septembre 2024, dont les auteurs affirment que des milliers de sites en publient un. Ce n'est pas un standard imposé : l'adoption par les moteurs de réponse n'est pas garantie, et Google écrit qu'il n'est pas nécessaire de créer de fichiers texte pour l'IA afin d'apparaître dans ses fonctions. Si vous en publiez un, traitez-le comme un complément peu coûteux, qui ne remplace ni le contenu ni l'indexation.</p>

<h2>Comment mesurer qu'on est cité ?</h2>
<ul>
<li><strong>Google Search Console :</strong> selon Google, consulté le 7 octobre 2026, les sites qui apparaissent dans les fonctions d'IA sont inclus dans le trafic de recherche global du rapport Performances, type de recherche « Web ». Il n'y a pas de rapport séparé : suivez les pages et requêtes de type question.</li>
<li><strong>Test manuel :</strong> posez à ChatGPT, Gemini et Perplexity dix à vingt questions de vos clients, une fois par mois, dans une session sans historique. Notez si vous êtes cité, avec quel texte, et quels concurrents le sont.</li>
<li><strong>Statistiques du site :</strong> repérez dans votre outil d'analyse les visites dont la source est un assistant d'IA (par exemple chatgpt.com ou perplexity.ai).</li>
<li><strong>Journaux du serveur :</strong> ils montrent si OAI-SearchBot et les autres robots passent bien sur vos pages.</li>
</ul>
<p>Les réponses d'une IA varient d'une session à l'autre : une seule mesure ne prouve rien, c'est la tendance sur plusieurs mois qui compte. Pour l'effet des AI Overviews sur vos clics, lisez <a href="/blog/google-ai-overviews-impact-trafic">l'impact des AI Overviews sur le trafic</a>.</p>

<h2>Quelles erreurs éviter ?</h2>
<ul>
<li>Croire qu'un balisage ou un fichier spécial suffit, sans contenu utile.</li>
<li>Bloquer les robots de recherche des IA par négligence.</li>
<li>Écrire des généralités qu'on trouve partout, sans fait précis ni source.</li>
<li>Laisser des informations contradictoires d'un site ou d'un annuaire à l'autre.</li>
<li>Publier des chiffres sans source ni date.</li>
<li>Promettre ou acheter une « place » dans les réponses d'une IA : personne ne peut la garantir.</li>
<li>Abandonner le SEO classique pour ne faire que du GEO.</li>
</ul>
<p>Si vous voulez savoir où votre site en est, l'<a href="/services/audit-seo-complet">audit SEO complet</a> passe en revue l'indexation, la structure, les données structurées et le contenu. Vous pouvez aussi me <a href="/contact">contacter</a> pour en parler. Pour vous former ou former votre équipe, voyez la <a href="/formations/referencement-ia-geo">formation au référencement IA</a>.</p>

<h2>Questions fréquentes</h2>
<p><strong>Peut-on payer pour apparaître dans ChatGPT ou Gemini ?</strong></p>
<p>Pas pour figurer dans les réponses elles-mêmes : une citation repose sur la qualité, la lisibilité et la crédibilité de vos pages. Méfiez-vous de toute offre qui garantit une place.</p>
<p><strong>Faut-il un outil spécial ?</strong></p>
<p>Non. Une bonne structure de contenu, un site indexable et la Search Console suffisent pour démarrer. Les outils de suivi de citations viennent après.</p>
<p><strong>Faut-il bloquer GPTBot ?</strong></p>
<p>C'est un choix de principe : GPTBot sert à l'entraînement, pas à la recherche de ChatGPT. Vous pouvez l'interdire et autoriser OAI-SearchBot pour rester citable.</p>
<p><strong>Le SEO local compte-t-il pour les IA ?</strong></p>
<p>Il est prudent de s'en occuper : si un client demande un prestataire près de chez lui, les informations de votre fiche Google et de votre site sont celles qu'un moteur peut retrouver. Gardez-les complètes et identiques partout.</p>
<p><strong>Combien de temps pour voir des résultats ?</strong></p>
<p>Il faut d'abord que les pages soient indexées, puis éventuellement reprises, ce qui prend du temps et varie d'un site à l'autre. Personne ne peut promettre un délai précis : jugez sur la tendance de plusieurs mois.</p>
<p><strong>Le GEO est-il utile à une petite entreprise du Bénin ?</strong></p>
<p>Le plus utile est de commencer par ce qui sert aussi au SEO classique : une page claire sur vos services, vos zones d'intervention et vos prix de départ, plus une fiche Google à jour. Cela coûte peu, et vous mesurerez ensuite si des visites viennent des assistants.</p>
<p><strong>Les AI Overviews font-ils baisser mon trafic ?</strong></p>
<p>Cela dépend des requêtes. Le sujet a son propre article, cité plus haut, avec la méthode pour le mesurer.</p>

<h2>Sources</h2>
<ul>
<li><a href="https://developers.google.com/search/docs/appearance/ai-features">Google Search Central : fonctionnalités d'IA et votre site web</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.openai.com/api/docs/bots">OpenAI : robots d'exploration d'OpenAI</a>, consultée le 7 octobre 2026</li>
<li><a href="https://docs.perplexity.ai/guides/bots">Perplexity : robots PerplexityBot et Perplexity-User</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.google.com/crawling/docs/crawlers-fetchers/google-common-crawlers">Google : robots d'exploration communs (Google-Extended)</a>, consultée le 7 octobre 2026</li>
<li><a href="https://llmstxt.org/">llmstxt.org : proposition de fichier llms.txt</a>, consultée le 7 octobre 2026</li>
</ul>
HTML,
];
