<?php
// Source de la reprise de /blog/pourquoi-votre-site-est-lent (vague 1F). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-pourquoi-votre-site-est-lent.sql.
return [
    'slug'       => 'pourquoi-votre-site-est-lent',
    'instantane' => '2026-10-07 15:00:51',
    'titre'      => 'Pourquoi votre site est lent et comment l\'accélérer',
    'meta'       => 'Mesurez la vitesse de votre site avec PageSpeed Insights, repérez les causes (images, hébergement, scripts, polices) et corrigez-les dans le bon ordre.',
    'resume'     => 'Un site est jugé rapide quand, pour 75 % des visites, le plus gros élément s\'affiche en 2,5 secondes ou moins (LCP), la réponse aux clics prend 200 millisecondes ou moins (INP) et la page ne bouge pas (CLS de 0,1 ou moins). Mesurez d\'abord avec PageSpeed Insights, puis corrigez dans l\'ordre : images, serveur et cache, scripts tiers, polices. Si la base du site est le problème, une refonte devient plus rentable que les retouches.',
    'categorie'  => 'Développement web',
    'tags'       => ['SEO technique', 'optimisation', 'Core Web Vitals', 'performance', 'vitesse site web', 'site lent'],
    'contenu'    => <<<'HTML'
<h2>Comment mesurer la vitesse de son site ?</h2>
<p>Commencez par <a href="https://pagespeed.web.dev/">PageSpeed Insights</a>, l'outil gratuit de Google. Il affiche deux familles de résultats, qu'il ne faut pas confondre.</p>
<ul>
<li><strong>Les données de terrain</strong> viennent de visiteurs réels (rapport d'expérience utilisateur de Chrome) et couvrent, selon la documentation de PageSpeed Insights consultée le 7 octobre 2026, les 28 derniers jours. Un site trop peu visité n'en a pas.</li>
<li><strong>Les données de laboratoire</strong> viennent d'un test simulé avec Lighthouse, sur un appareil de milieu de gamme pour le mobile. Elles servent à repérer et à déboguer les problèmes, mais ne reflètent pas toujours la réalité de vos visiteurs.</li>
</ul>
<p>Testez toujours la version mobile en premier : c'est elle qui est la plus exigeante.</p>
<p>Testez aussi comme un visiteur à faible débit : dans les outils de développement de Chrome, onglet Réseau, choisissez une limitation « 3G lente » et rechargez la page. Si elle reste inutilisable, vos visiteurs sur réseau mobile médiocre la quittent avant de la voir.</p>
<h2>Quels sont les seuils des Core Web Vitals ?</h2>
<p>Selon web.dev (page « Web Vitals », dernière mise à jour le 31 octobre 2024, consultée le 7 octobre 2026), trois indicateurs mesurent l'expérience, chacun évalué au 75e centile des visites, c'est-à-dire que trois visites sur quatre doivent atteindre le seuil.</p>
<ul>
<li><strong>LCP (Largest Contentful Paint)</strong> : le moment où le plus gros élément visible s'affiche. Bon : 2,5 secondes ou moins. À améliorer : de 2,5 à 4 secondes. Mauvais : plus de 4 secondes.</li>
<li><strong>INP (Interaction to Next Paint)</strong> : le délai entre un clic ou une frappe et la réaction visible de la page. Bon : 200 millisecondes ou moins. À améliorer : de 200 à 500 millisecondes. Mauvais : plus de 500 millisecondes.</li>
<li><strong>CLS (Cumulative Layout Shift)</strong> : l'instabilité visuelle, quand un bouton se déplace au moment où vous allez cliquer. Bon : 0,1 ou moins. À améliorer : de 0,1 à 0,25. Mauvais : plus de 0,25.</li>
</ul>
<p>Le score sur 100 de Lighthouse est un résumé pratique, mais ce sont ces trois seuils qui comptent pour le référencement.</p>
<h2>Quelles sont les causes les plus fréquentes d'un site lent ?</h2>
<p>Dans l'ordre où il est le plus rentable de les vérifier :</p>
<ol>
<li><strong>Des images trop lourdes ou mal chargées</strong> : photos non compressées, format inadapté, dimensions bien supérieures à l'affichage.</li>
<li><strong>Un serveur lent à répondre</strong> : hébergement saturé, pas de cache, pages générées à chaque visite.</li>
<li><strong>Des extensions et des scripts tiers en excès</strong> : modules WordPress empilés, widgets de chat, pixels publicitaires, outils de statistiques multiples.</li>
<li><strong>Des polices web mal chargées</strong> : trop de graisses et de familles, texte invisible pendant le chargement.</li>
<li><strong>Du code qui bloque l'affichage</strong> : feuilles de style et JavaScript volumineux chargés avant le contenu.</li>
</ol>
<p>Le rapport PageSpeed Insights indique, sous « Opportunités » et « Diagnostics », laquelle de ces causes pèse le plus sur votre page. Commencez par celle qui gagne le plus de temps. Si votre trafic baisse pour une autre raison, voir <a href="/blog/google-ai-overviews-impact-trafic">l'impact des AI Overviews de Google sur le trafic</a>.</p>
<h2>Comment corriger chaque cause ?</h2>
<h3>Les images</h3>
<ul>
<li>Compressez et passez en WebP ou AVIF, avec des dimensions proches de l'affichage réel.</li>
<li>Chargez en différé (<code>loading="lazy"</code>) les images situées sous la première fenêtre visible.</li>
<li>Ne différez jamais l'image principale du haut de page : web.dev (page « Optimize LCP », mise à jour le 31 mars 2025, consultée le 7 octobre 2026) déconseille de mettre <code>loading="lazy"</code> sur l'élément du LCP et recommande <code>fetchpriority="high"</code> sur l'image qui le porte.</li>
<li>Indiquez largeur et hauteur de chaque image : la page réserve la place et le CLS reste bas.</li>
</ul>
<h3>Le serveur et le cache</h3>
<ul>
<li>Activez le cache du navigateur et un cache de pages pour ne pas régénérer chaque visite.</li>
<li>Vérifiez la durée de réponse du serveur : la même page web.dev répartit un budget de LCP d'environ 40 % pour la réponse du serveur, 40 % pour le téléchargement de la ressource, et moins de 10 % chacun pour le délai de découverte et le délai d'affichage. Un serveur lent consomme donc une grosse part du budget avant même que l'image ne commence à arriver.</li>
</ul>
<h3>Les extensions et scripts tiers</h3>
<ul>
<li>Listez tout ce qui se charge, puis supprimez ce qui ne sert pas à vos objectifs.</li>
<li>Chargez les scripts restants en différé (<code>defer</code>) et retirez les doublons d'outils de mesure.</li>
<li>Sur WordPress, remplacez un module lourd par quelques lignes de code quand c'est possible.</li>
</ul>
<h3>Les polices</h3>
<ul>
<li>Limitez-vous à une famille et deux graisses.</li>
<li>Hébergez les polices sur votre domaine et utilisez <code>font-display: swap</code> pour que le texte reste lisible pendant le chargement.</li>
</ul>
<h3>Le code bloquant</h3>
<ul>
<li>Minifiez le CSS et le JavaScript.</li>
<li>Chargez en priorité le style de la partie visible, le reste ensuite.</li>
<li>Découpez les longues tâches JavaScript : elles dégradent l'INP.</li>
</ul>
<h2>Que change un hébergement ou un CDN ?</h2>
<p>Un hébergement plus rapide agit sur la première part du LCP, le temps de réponse du serveur. Il ne rattrape pas des images de plusieurs mégaoctets ni vingt scripts tiers : si ces causes existent, un meilleur serveur donne un gain limité.</p>
<p>Un CDN (réseau de diffusion de contenu) copie vos fichiers sur des serveurs répartis dans plusieurs régions. Il rapproche l'image du visiteur et sert aussi à optimiser les images à la volée, ce que web.dev cite parmi ses recommandations pour le LCP. Il est surtout utile quand vos visiteurs sont loin du serveur d'origine, par exemple une audience au Bénin avec un hébergement en Europe ou en Amérique du Nord.</p>
<p>Ordre raisonnable : alléger la page d'abord, ajouter le cache ensuite, puis le CDN, et changer d'hébergeur en dernier si le temps de réponse reste mauvais.</p>
<h2>Quel effet la vitesse a-t-elle sur le référencement et les ventes ?</h2>
<p>Pour le référencement, la documentation Google Search Central sur l'expérience de page (consultée le 7 octobre 2026) indique que Google cherche toujours à montrer le contenu le plus pertinent, même si l'expérience de page est médiocre ; mais, quand beaucoup de contenus utiles existent sur une requête, une bonne expérience de page peut peser sur le classement. Sa page sur les Core Web Vitals précise que ces mesures, avec les autres aspects de l'expérience de page, correspondent à ce que ses systèmes de classement principaux cherchent à récompenser, et recommande de viser de bons scores. Un site rapide ne remplace donc pas un contenu pertinent. Pour les autres blocages techniques, voir les <a href="/blog/7-erreurs-qui-tuent-votre-referencement">erreurs de référencement les plus coûteuses</a>.</p>
<p>Pour les ventes, l'étude « Milliseconds Make Millions », réalisée par Deloitte pour Google et publiée le 24 mars 2020, a analysé pendant quatre semaines les données mobiles de marques européennes et américaines du commerce, du voyage, du luxe et de la génération de contacts. Un gain de 0,1 seconde sur mobile s'est accompagné de 8,4 % de conversions en plus et de 9,2 % de panier moyen en plus dans le commerce, et de 10,1 % de conversions en plus dans le voyage. Le périmètre est limité et ancien, et l'étude établit une corrélation avec la progression dans l'entonnoir de vente, non une causalité prouvée : ne transposez pas ces pourcentages tels quels à votre boutique.</p>
<h2>Quand faut-il refaire le site plutôt que l'optimiser ?</h2>
<p>Les retouches suffisent quand le problème vient des images, du cache ou de quelques scripts. Une refonte devient plus rentable dans ces cas :</p>
<ul>
<li>Le LCP reste au-dessus de 4 secondes après avoir allégé les images et activé le cache.</li>
<li>Le site repose sur un thème ou un constructeur qui charge des centaines de kilooctets de code inutilisé, impossible à retirer.</li>
<li>Chaque correction casse autre chose, faute de code maintenable.</li>
<li>La structure ne permet plus d'ajouter une fonction sans ralentir tout le reste.</li>
</ul>
<p>Si vous hésitez, une <a href="/services/refonte-migration-de-site">refonte ou migration de site</a> repart d'une base propre en conservant vos adresses et votre référencement. Une fois le site rapide, la <a href="/services/maintenance-support">maintenance et le support</a> évitent qu'il redevienne lent, extension après extension.</p>
<h2>Questions fréquentes</h2>
<p><strong>Quelle vitesse viser pour un site ?</strong></p>
<p>Un LCP de 2,5 secondes ou moins, un INP de 200 millisecondes ou moins et un CLS de 0,1 ou moins, pour au moins 75 % des visites, en priorité sur mobile (web.dev, consulté le 7 octobre 2026).</p>
<p><strong>Mon score Lighthouse est bon mais PageSpeed signale « échec » : pourquoi ?</strong></p>
<p>Le score vient du test simulé, alors que l'évaluation des Core Web Vitals vient des visiteurs réels sur 28 jours. Un test simulé sur une bonne connexion peut être bon pendant que de vrais visiteurs, sur mobile, vivent autre chose.</p>
<p><strong>Changer d'hébergeur suffit-il ?</strong></p>
<p>Cela réduit le temps de réponse du serveur, soit environ 40 % du budget de LCP selon web.dev. Si les images et les scripts restent lourds, le site restera lent.</p>
<p><strong>Faut-il tester sur ordinateur ou sur mobile ?</strong></p>
<p>Sur les deux, mais commencez par le mobile : l'ordinateur masque souvent des problèmes qui apparaissent sur un téléphone de milieu de gamme.</p>
<p><strong>Le chargement différé des images est-il toujours bon ?</strong></p>
<p>Non. Il convient aux images situées sous la première fenêtre visible, mais il retarde l'image principale du haut de page et dégrade le LCP.</p>
<p><strong>Combien de temps faut-il pour voir l'effet d'une correction ?</strong></p>
<p>Le test de laboratoire réagit tout de suite. Les données de terrain de PageSpeed Insights se calculent sur 28 jours : l'amélioration apparaît progressivement.</p>
<p><strong>Dois-je supprimer Google Analytics ou mes pixels publicitaires ?</strong></p>
<p>Pas forcément. Gardez ceux dont vous vous servez, retirez les doublons, chargez-les en différé et vérifiez dans PageSpeed Insights combien de temps chacun ajoute.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://web.dev/articles/vitals">web.dev, Web Vitals</a>, consultée le 7 octobre 2026</li>
<li><a href="https://web.dev/articles/optimize-lcp">web.dev, Optimize Largest Contentful Paint</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.google.com/speed/docs/insights/v5/about">Documentation de PageSpeed Insights, About</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.google.com/search/docs/appearance/core-web-vitals">Google Search Central, Core Web Vitals et Google Search</a>, consultée le 7 octobre 2026</li>
<li><a href="https://developers.google.com/search/docs/appearance/page-experience">Google Search Central, Expérience de page</a>, consultée le 7 octobre 2026</li>
<li><a href="https://www.deloitte.com/ie/en/services/consulting/research/milliseconds-make-millions.html">Deloitte, Milliseconds Make Millions</a>, consultée le 7 octobre 2026</li>
</ul>
HTML,
];
