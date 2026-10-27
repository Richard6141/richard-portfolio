<?php
// Source de l'article /blog/quel-erp-pme-ohada-odoo-dolibarr (nouvel article, 27/10/2026). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-quel-erp-pme-ohada-odoo-dolibarr.sql.
return [
    'slug'       => 'quel-erp-pme-ohada-odoo-dolibarr',
    'instantane' => '2026-10-27 18:00:00',
    'titre'      => 'Quel ERP pour une PME en zone OHADA : Odoo, Dolibarr ?',
    'meta'       => 'Comment choisir un ERP pour une PME en zone OHADA : comptabilité SYSCOHADA, stock, coûts, hébergement, support local et adoption par les équipes.',
    'resume'     => 'Aucun ERP n\'est le bon pour toutes les PME de la zone OHADA. Le choix se joue sur six critères : la comptabilité SYSCOHADA testée sur vos propres écritures, la gestion du stock, le coût total sur plusieurs années, l\'hébergement, le support disponible près de vous et la capacité de vos équipes à s\'en servir. Odoo et Dolibarr sont deux candidats sérieux, mais vous devez les mettre à l\'épreuve avant de décider.',
    'categorie'  => 'Digitalisation',
    'tags'       => ['ERP PME Afrique', 'logiciel de gestion OHADA', 'Odoo ou Dolibarr', 'SYSCOHADA', 'choisir un ERP'],
    'contenu'    => <<<'HTML'
<h2>Faut-il vraiment un ERP pour une PME en zone OHADA ?</h2>
<p>Pas toujours. Un ERP rassemble dans un seul logiciel les ventes, les achats, le stock, la facturation et la comptabilité. Il devient utile quand les mêmes informations sont ressaisies à plusieurs endroits : un devis dans Word, un stock dans Excel, des écritures chez le comptable.</p>
<p>Si votre activité tient dans un tableur propre et que personne ne perd de temps à recopier, un ERP ajoute surtout du travail. En revanche, dès que deux personnes modifient le même fichier, que le stock affiché ne correspond plus au stock réel ou que la clôture de l'exercice dure des semaines, la question mérite d'être posée.</p>
<h2>Quels critères comptent vraiment pour choisir un ERP ?</h2>
<p>Six critères suffisent à trier les candidats. Notez-les avant de regarder la moindre démonstration, sinon c'est la démonstration qui choisira à votre place.</p>
<ol>
<li><strong>La comptabilité SYSCOHADA.</strong> Plan comptable, états financiers de fin d'exercice, taxes de votre pays.</li>
<li><strong>Le stock.</strong> Entrepôts, mouvements, inventaire, valorisation.</li>
<li><strong>Le coût total.</strong> Licence éventuelle, mise en service, formation, hébergement, maintenance.</li>
<li><strong>L'hébergement.</strong> Chez vous, chez un hébergeur ou chez l'éditeur, avec une connexion qui doit rester utilisable.</li>
<li><strong>Le support local.</strong> Qui répond quand la clôture est dans trois jours, et dans quelle langue.</li>
<li><strong>L'adoption.</strong> Un ERP que l'équipe contourne ne sert à rien.</li>
</ol>
<h2>Comment vérifier la comptabilité SYSCOHADA avant de choisir ?</h2>
<p>Ne vous fiez pas à la mention « compatible OHADA » sur une brochure. Demandez un essai sur vos propres données et faites tester par la personne qui tient vos comptes.</p>
<ol>
<li>Prenez un mois réel d'écritures (achats, ventes, banque, caisse), anonymisé si besoin.</li>
<li>Faites-les saisir dans l'outil avec le plan comptable de votre pays.</li>
<li>Demandez la balance, le grand livre et, si l'outil les produit, les états de fin d'exercice.</li>
<li>Comparez avec ce que votre comptable obtient aujourd'hui.</li>
<li>Vérifiez la gestion de la TVA ou de la taxe applicable chez vous, ainsi que la facture normalisée si votre pays l'exige.</li>
</ol>
<p>Les règles varient d'un pays de la zone à l'autre. Un module peut convenir au Bénin et demander des ajustements ailleurs : c'est précisément ce que l'essai révèle.</p>
<h2>Que regarder côté stock et achats ?</h2>
<p>Ne demandez pas « y a-t-il un module stock ? ». Posez des questions de terrain :</p>
<ul>
<li>Peut-on gérer plusieurs dépôts, par exemple un magasin et un camion de livraison ?</li>
<li>Que se passe-t-il quand une vente est saisie sans stock suffisant ?</li>
<li>L'inventaire physique se fait-il sur un téléphone, ou seulement devant un écran de bureau ?</li>
<li>Le coût d'achat se met-il à jour avec les frais de transport et de douane ?</li>
</ul>
<p>Un négoce avec des centaines de références n'a pas les mêmes besoins qu'un atelier de service. Écrivez trois scénarios de votre quotidien et faites-les rejouer en direct.</p>
<h2>Comment estimer le coût réel d'un ERP sur plusieurs années ?</h2>
<p>Le prix de la licence n'est qu'une ligne. Comptez sur trois ans :</p>
<ul>
<li>la licence ou l'abonnement, s'il y en a ;</li>
<li>la mise en service : paramétrage, reprise des données, adaptation à vos documents ;</li>
<li>la formation des utilisateurs ;</li>
<li>l'hébergement et les sauvegardes ;</li>
<li>la maintenance et les mises à jour ;</li>
<li>le temps interne que vos équipes consacrent au projet.</li>
</ul>
<p>Odoo existe en édition Community et en édition Enterprise, cette dernière étant une édition sous licence construite sur le même noyau, selon la page des éditions d'Odoo consultée le 27 octobre 2026. Dolibarr se présente comme un logiciel open source pour l'entreprise, selon la page d'accueil de son wiki consultée à la même date. Les tarifs, les formules et les conditions des éditeurs évoluent : la page officielle de chacun fait foi le jour où vous décidez, et aucun chiffre repris d'un article ne la remplace.</p>
<p>Les prestations de Richard SALANON pour ces outils sont <strong>sur devis</strong>, après un échange de cadrage.</p>
<h2>Où héberger son ERP quand la connexion est instable ?</h2>
<p>Trois options existent, chacune avec son défaut :</p>
<ul>
<li><strong>Chez l'éditeur ou un hébergeur en ligne.</strong> Peu d'administration, mais le logiciel s'arrête quand la connexion tombe.</li>
<li><strong>Sur un serveur loué par vous.</strong> Plus de contrôle, plus de responsabilité : sauvegardes, sécurité et mises à jour sont à votre charge ou à celle de votre prestataire.</li>
<li><strong>Dans vos locaux.</strong> Le réseau interne reste utilisable sans internet, mais il faut du matériel, de l'électricité stable et un plan de sauvegarde hors site.</li>
</ul>
<p>Posez aussi la question des données personnelles : où sont-elles stockées, et la loi de votre pays encadre-t-elle leur transfert à l'étranger ? Demandez la réponse par écrit.</p>
<h2>Faut-il passer par un partenaire officiel ou un prestataire local ?</h2>
<p>Cela dépend de ce que vous attendez. Un partenaire officiel d'un éditeur peut apporter un cadre reconnu par cet éditeur. Un prestataire local apporte la proximité, la langue et la connaissance de vos obligations locales. Les deux ne s'excluent pas.</p>
<p>Richard SALANON n'est partenaire officiel ni d'Odoo ni de Dolibarr. Il déploie ces deux outils, il forme les équipes et il travaille sur la comptabilité OHADA dans les ERP : voir les pages <a href="/services/integration-odoo">intégration Odoo</a> et <a href="/services/integration-dolibarr">intégration Dolibarr</a>. Quel que soit le prestataire, demandez des références vérifiables, un contact que vous pouvez appeler, et qui possède l'accès administrateur à la fin.</p>
<h2>Comment s'assurer que les équipes adoptent l'ERP ?</h2>
<p>L'adoption échoue rarement pour une raison technique. Elle échoue quand l'outil ajoute des écrans sans retirer de travail. Quelques pratiques aident :</p>
<ul>
<li>Associez dès le départ la personne qui saisit le plus (caissier, magasinier, comptable).</li>
<li>Démarrez par un seul flux, par exemple devis puis facture, avant d'ouvrir le stock et la comptabilité.</li>
<li>Formez sur vos propres documents, pas sur des données de démonstration. Les formations <a href="/formations/odoo-comptabilite-syscohada">Odoo et comptabilité SYSCOHADA</a> et <a href="/formations/dolibarr-utilisateurs">Dolibarr pour utilisateurs</a> existent pour cela.</li>
<li>Prévoyez une période où l'ancien et le nouvel outil tournent en parallèle, puis fixez une date de coupure.</li>
</ul>
<h2>Odoo ou Dolibarr : comment trancher sans qu'on le fasse à votre place ?</h2>
<p>Le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a> détaille les deux outils critère par critère. Voici comment utiliser vos réponses :</p>
<ul>
<li><strong>Si votre besoin se limite à devis, factures, stock et comptabilité de base</strong> et que l'équipe est petite : testez d'abord le plus léger des deux, puis voyez s'il manque quelque chose.</li>
<li><strong>Si vous prévoyez beaucoup de modules reliés</strong> (ventes, achats, production, ressources humaines) : testez l'outil le plus étendu, en acceptant un paramétrage plus long.</li>
<li><strong>Si votre comptable refuse de travailler dans l'outil</strong> : le critère SYSCOHADA décide, quoi que disent les autres.</li>
<li><strong>Si vous n'avez aucun prestataire à proximité</strong> : choisissez l'outil pour lequel vous trouvez quelqu'un de joignable.</li>
<li><strong>Si vous hésitez encore</strong> : un ERP autre qu'Odoo ou Dolibarr peut convenir, à condition de passer les mêmes six critères.</li>
</ul>
<h2>Un exemple : comment trois PME fictives pourraient raisonner ?</h2>
<p>Ces trois dossiers sont inventés pour illustrer la méthode ; ils ne décrivent aucun client réel.</p>
<ul>
<li><strong>Une quincaillerie de huit personnes</strong> avec 2 000 références et deux dépôts. Le stock et l'inventaire sur téléphone pèsent le plus. Elle teste les deux outils sur un inventaire réel.</li>
<li><strong>Un bureau d'études de cinq personnes</strong> qui facture au temps passé. Le stock n'a aucune importance, la facturation et la comptabilité décident.</li>
<li><strong>Un grossiste alimentaire de trente personnes</strong> avec livraisons quotidiennes. La coupure d'internet est son principal risque : l'hébergement pèse plus que la liste de fonctions.</li>
</ul>
<h2>Quelles erreurs reviennent le plus souvent ?</h2>
<ul>
<li>Choisir sur une démonstration plutôt que sur un essai avec ses propres écritures.</li>
<li>Comparer les licences et oublier la mise en service et la formation.</li>
<li>Tout activer le premier jour au lieu de commencer par un flux.</li>
<li>Laisser le prestataire seul détenteur des accès administrateur.</li>
<li>Ne pas prévoir de sauvegarde testée, c'est-à-dire restaurée au moins une fois.</li>
<li>Oublier d'impliquer le comptable avant l'achat.</li>
</ul>
<h2>Questions fréquentes</h2>
<p><strong>Un ERP libre est-il forcément gratuit ?</strong></p>
<p>Non. Le logiciel peut être libre, mais la mise en service, l'hébergement, la formation et la maintenance restent à payer. Les offres payantes des éditeurs évoluent : consultez leur page officielle.</p>
<p><strong>Peut-on changer d'ERP plus tard ?</strong></p>
<p>Oui, mais la migration des données coûte du temps. Gardez vos données exportables en format ouvert et ne personnalisez pas ce qu'un réglage suffit à faire.</p>
<p><strong>Faut-il un ERP pour une très petite entreprise ?</strong></p>
<p>Souvent non. Un logiciel de facturation simple et un tableur bien tenu suffisent jusqu'à ce que les ressaisies deviennent un vrai coût.</p>
<p><strong>Le même module SYSCOHADA vaut-il pour tous les pays de l'OHADA ?</strong></p>
<p>Pas forcément. La fiscalité et les obligations de facturation diffèrent d'un pays à l'autre. Testez avec les règles du vôtre.</p>
<p><strong>Combien de temps dure une mise en service ?</strong></p>
<p>Cela dépend du nombre de flux et de la qualité de vos données de départ. Demandez un calendrier par étapes plutôt qu'une date unique.</p>
<p><strong>Mon comptable doit-il utiliser l'ERP ?</strong></p>
<p>Idéalement oui, ou au moins valider la structure comptable avant le démarrage. Sans son accord, vous ressaisirez les écritures ailleurs.</p>
<p>Pour cadrer votre projet, vous pouvez <a href="/contact">écrire à Richard SALANON</a> ; la première étape est un échange sur vos besoins. Pour la démarche générale, lisez aussi <a href="/blog/comment-digitaliser-son-entreprise-le-guide-etape-par-etape">comment digitaliser son entreprise étape par étape</a>.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://www.odoo.com/page/editions">Odoo, page des éditions Community et Enterprise</a>, consultée le 27 octobre 2026</li>
<li><a href="https://wiki.dolibarr.org/index.php/Main_Page">Wiki Dolibarr, page d'accueil</a>, consultée le 27 octobre 2026</li>
</ul>
HTML,
];
