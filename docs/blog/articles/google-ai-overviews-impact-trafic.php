<?php
// Source de la reprise de /blog/google-ai-overviews-impact-trafic (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-google-ai-overviews-impact-trafic.sql.
return [
    'slug'       => 'google-ai-overviews-impact-trafic',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'AI Overviews de Google : mesurer et limiter l\'impact',
    'meta'       => 'Les AI Overviews de Google réduisent les clics, surtout sur les requêtes informatives. Études datées, mesure dans Search Console et plan d\'adaptation.',
    'resume'     => 'Les AI Overviews sont les résumés générés par l\'IA que Google affiche au-dessus des résultats. Les études publiées montrent moins de clics quand un résumé apparaît, surtout sur les requêtes informatives. Vous mesurez l\'effet sur votre site dans Search Console en comparant les pages touchées, puis vous adaptez vos contenus.',
    'categorie'  => 'SEO',
    'tags'       => ['Google AI Overviews', 'SGE', 'référencement IA', 'trafic web', 'Search Console', 'SEO 2026'],
    'contenu'    => <<<'HTML'
<h2>Que sont les AI Overviews et où s'affichent-ils ?</h2>
<p>Les AI Overviews (« Aperçus IA » en français) sont des résumés rédigés par l'IA de Google, placés au-dessus des liens classiques, avec quelques liens vers les sources utilisées. Ils ne s'affichent pas sur toutes les recherches : selon Pew Research Center, environ 18 % des recherches Google analysées en mars 2025 aux États-Unis (échantillon de 900 adultes) ont produit un résumé IA.</p>
<p>Selon la page d'aide de Google consultée le 7 octobre 2026, la fonctionnalité est proposée dans de nombreux pays et langues, dont le français ; la liste des pays y mentionne notamment le Bénin, la Côte d'Ivoire, la France et le Sénégal. Google précise qu'on ne peut pas la désactiver : un internaute peut seulement choisir le filtre « Web », qui n'affiche que les liens texte.</p>

<h2>Que disent les études publiées sur la baisse des clics ?</h2>
<p>Deux études publiées mesurent l'effet, avec des méthodes différentes. Aucune ne représente à elle seule votre site.</p>
<ul>
<li><strong>Pew Research Center, publiée le 22 juillet 2025</strong> : navigation de 900 adultes américains en mars 2025, soit 68 879 recherches Google dont 12 593 avec résumé IA. Un internaute clique sur un résultat classique dans 8 % des visites avec résumé, contre 15 % sans. Il clique sur un lien du résumé dans 1 % des visites, et termine sa session dans 26 % des visites avec résumé, contre 16 % sans. Limite : échantillon américain, uniquement Google, un seul mois.</li>
<li><strong>Ahrefs, publiée le 4 février 2026</strong> : 300 000 mots-clés (150 000 avec AI Overview, 150 000 sans), données Search Console agrégées sur ordinateur. Pour la première position, le taux de clic passe de 0,073 en décembre 2023 à 0,016 en décembre 2025 sur les requêtes avec résumé, soit environ 58 % de moins que le taux de 0,037 que l'étude estime sans résumé. Limite : ordinateur uniquement, requêtes informatives, jeux de mots-clés différents d'une période à l'autre et taux « sans résumé » estimé par modélisation.</li>
</ul>
<p>Retenez la tendance, pas le chiffre : quand un résumé apparaît, les clics baissent nettement. Votre propre perte dépend de vos requêtes.</p>

<h2>Quelles requêtes sont les plus touchées ?</h2>
<p>L'étude d'Ahrefs porte sur des requêtes d'intention informative, celles où une réponse courte suffit : définition, « comment faire », « qu'est-ce que ». Ce sont les pages qui ne vivent que de ce trafic qui perdent le plus.</p>
<ul>
<li><strong>Exposées</strong> : glossaires, définitions, tutoriels courts, réponses à une question factuelle.</li>
<li><strong>Moins exposées</strong> : les recherches où l'internaute veut agir (demander un devis, contacter, comparer des offres, trouver un prestataire proche). Une réponse rédigée ne remplace pas une prise de contact.</li>
</ul>
<p>Les études citées ne chiffrent pas séparément les requêtes d'achat : c'est un raisonnement, pas une mesure. Vérifiez-le sur vos propres données.</p>

<h2>Comment mesurer l'effet sur son site dans Search Console ?</h2>
<p>Google n'isole pas les AI Overviews : selon sa documentation consultée le 7 octobre 2026, leur trafic est inclus dans le rapport Performances, type de recherche « Web ». Il faut donc raisonner par comparaison.</p>
<ol>
<li>Ouvrez le rapport Performances et comparez deux périodes de même durée, par exemple les trois derniers mois contre la même période de l'année précédente, pour neutraliser la saisonnalité.</li>
<li>Passez à l'onglet Pages, triez par variation de clics, et repérez les pages qui perdent des clics alors que leurs impressions se maintiennent ou augmentent. Cet écart est le signe typique d'un résumé qui répond à la place du lien.</li>
<li>Vérifiez la position moyenne : si elle ne bouge pas mais que les clics baissent, le résumé est probablement en cause ; si elle chute, c'est un problème de classement.</li>
<li>Sur les requêtes concernées, tapez-les vous-même dans Google pour constater si un résumé s'affiche et si votre page y est citée.</li>
<li>Croisez avec Google Analytics : les actions qui comptent (contacts, devis, appels) baissent-elles autant que les clics ?</li>
</ol>
<p>Suivez cela chaque mois. Une baisse de clics sur des pages informatives sans effet sur les contacts est un moindre mal ; l'inverse demande une action.</p>

<h2>Comment adapter ses pages ?</h2>
<p>Google indique, sur sa page consacrée aux fonctions d'IA consultée le 7 octobre 2026, qu'il n'existe aucune exigence technique supplémentaire ni balisage spécial : une page indexée et éligible aux extraits suffit, et les bases du SEO s'appliquent. Concrètement :</p>
<ul>
<li><strong>Répondre d'abord, développer ensuite</strong> : une réponse directe en début de section, puis le détail que le résumé ne peut pas contenir (étapes, cas, chiffres sourcés).</li>
<li><strong>Apporter ce que l'IA ne synthétise pas</strong> : une expérience vécue, un tarif, un exemple local, un outil.</li>
<li><strong>Soigner les pages d'action</strong> : service, comparatif, contact, avec un appel à l'action clair, car ce sont elles qui convertissent quand le clic arrive.</li>
<li><strong>Montrer qui écrit</strong> : auteur identifié, sources citées, dates de mise à jour.</li>
<li><strong>Contrôler l'extrait si nécessaire</strong> : selon Google, les directives <code>nosnippet</code>, <code>data-nosnippet</code> et <code>max-snippet</code> limitent ce qui s'affiche, y compris dans les AI Overviews, au prix d'une visibilité moindre ; <code>noindex</code> retire la page des résultats.</li>
</ul>
<p>Pour être cité dans les réponses de l'IA, la méthode est détaillée dans <a href="/blog/seo-2026-apparaitre-dans-les-reponses-ia">apparaître dans les réponses des moteurs d'IA</a>.</p>

<h2>Faut-il changer de stratégie de contenu ?</h2>
<p>Pas de rupture, un rééquilibrage. Cessez de mesurer un article au seul nombre de visites et regardez ce qu'il rapporte : contacts, demandes de devis, inscriptions.</p>
<ul>
<li>Gardez les contenus informatifs qui amènent des lecteurs qualifiés vers un service ; réécrivez ceux qui n'apportent qu'une définition.</li>
<li>Investissez dans les pages à intention d'achat et dans les contenus de comparaison, plus difficiles à résumer.</li>
<li>Ne comptez pas sur Google seul : un site en ligne, un fichier clients, un profil d'entreprise tenu à jour réduisent la dépendance.</li>
</ul>
<p>Pour savoir quelles pages sont touchées sur votre site, mon <a href="/services/audit-seo-complet">audit SEO complet</a> le mesure ; mon <a href="/services/referencement-naturel-seo">service de référencement naturel</a> démarre à 75 000 FCFA (environ 114 €). Vous pouvez aussi <a href="/contact">me contacter</a>.</p>

<h2>Questions fréquentes</h2>
<p><strong>Les AI Overviews font-ils baisser tout le trafic ?</strong></p>
<p>Non. L'effet mesuré varie selon la requête : il est plus fort quand une réponse courte suffit. Certaines pages restent stables ou gagnent en visibilité quand elles sont citées.</p>
<p><strong>Peut-on empêcher Google d'utiliser son contenu dans les AI Overviews ?</strong></p>
<p>Partiellement. Les directives <code>nosnippet</code>, <code>data-nosnippet</code>, <code>max-snippet</code> et <code>noindex</code> contrôlent, selon Google, ce qui s'affiche dans les fonctions d'IA, mais elles valent aussi pour les extraits classiques, et <code>noindex</code> retire la page de la recherche : votre visibilité baisse.</p>
<p><strong>Faut-il un balisage spécial pour apparaître dans le résumé ?</strong></p>
<p>Non, selon la documentation de Google : aucune donnée structurée spécifique n'est requise. Un balisage exact reste utile pour le référencement en général.</p>
<p><strong>Le SEO sert-il encore ?</strong></p>
<p>Oui. Une page doit être indexée et éligible aux extraits pour être citée, ce qui relève du SEO classique.</p>
<p><strong>Peut-on voir ses clics venant des AI Overviews ?</strong></p>
<p>Pas séparément. Ils sont inclus dans le rapport Performances de Search Console, type « Web ». Il faut comparer des périodes et des pages.</p>
<p><strong>Les clics qui restent valent-ils plus ?</strong></p>
<p>Google écrit, dans sa documentation consultée le 7 octobre 2026, que les clics issus de pages de résultats avec AI Overviews sont « de meilleure qualité », c'est-à-dire que les internautes passent plus de temps sur le site. C'est une déclaration de Google, sans chiffre : vérifiez-la avec vos conversions dans Google Analytics.</p>
<p><strong>Mon site est au Bénin : suis-je concerné ?</strong></p>
<p>Oui, le Bénin figure dans la liste des pays de la page d'aide de Google. Les études citées portent sur les États-Unis et sur un échantillon de mots-clés d'un outil : mesurez vos propres données.</p>

<h2>Sources</h2>
<ul>
<li><a href="https://www.pewresearch.org/short-reads/2025/07/22/google-users-are-less-likely-to-click-on-links-when-an-ai-summary-appears-in-the-results/">Pew Research Center, Google users are less likely to click on links when an AI summary appears (22 juillet 2025)</a>, consultée le 7 octobre 2026</li>
<li><a href="https://ahrefs.com/blog/ai-overviews-reduce-clicks-update/">Ahrefs, AI Overviews reduce clicks (4 février 2026)</a>, consultée le 7 octobre 2026</li>
<li><a href="https://support.google.com/websearch/answer/14901683?hl=fr">Aide de la Recherche Google, Aperçus IA : disponibilité</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.google.com/search/docs/appearance/ai-features">Google Search Central, AI features and your website</a>, consultée le 7 octobre 2026</li>
</ul>
HTML,
];
