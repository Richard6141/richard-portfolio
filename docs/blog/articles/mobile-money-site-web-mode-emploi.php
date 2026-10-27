<?php
// Source du nouvel article /blog/mobile-money-site-web-mode-emploi. Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-mobile-money-site-web-mode-emploi.sql.
return [
    'slug'       => 'mobile-money-site-web-mode-emploi',
    'instantane' => '2026-10-27 12:00:00',
    'titre'      => 'Accepter le mobile money sur un site web : mode d\'emploi',
    'meta'       => 'Passerelle, compte, intégration, tests, rapprochement : les étapes pour accepter le paiement mobile money sur un site web en Afrique de l\'Ouest.',
    'resume'     => 'Pour accepter le mobile money sur un site web, on passe par une passerelle de paiement : choisir la passerelle, ouvrir et faire valider le compte, intégrer le paiement et la confirmation automatique, tester en mode test, puis rapprocher chaque semaine les paiements reçus et les commandes. La confirmation côté serveur et le test des paiements échoués évitent la plupart des erreurs.',
    'categorie'  => 'Digitalisation',
    'tags'       => ['paiement mobile money site web', 'intégrer mobile money', 'passerelle de paiement Bénin', 'paiement en ligne Afrique de l\'Ouest', 'e-commerce'],
    'contenu'    => <<<'HTML'
<h2>Comment accepter le mobile money sur un site web, en résumé ?</h2>
<p>Votre site ne parle pas directement aux opérateurs : il passe par une passerelle de paiement, qui se charge d'envoyer la demande au téléphone du client et de vous prévenir du résultat. Le parcours tient en cinq étapes :</p>
<ol>
<li>choisir la passerelle ;</li>
<li>ouvrir le compte et le faire valider ;</li>
<li>intégrer le paiement à votre site ;</li>
<li>tester, y compris les échecs ;</li>
<li>rapprocher les paiements reçus et les commandes, régulièrement.</li>
</ol>
<p>Ce guide détaille chaque étape, les documents qu'on vous demandera, et les erreurs qui reviennent. Il ne donne aucun frais : les grilles changent et la page officielle de chaque passerelle fait foi le jour où vous décidez.</p>
<h2>Comment choisir sa passerelle de paiement ?</h2>
<p>Choisissez-la sur quatre critères, dans cet ordre :</p>
<ul>
<li><strong>Les pays et les opérateurs que vos clients utilisent.</strong> Les opérateurs diffèrent d'un pays à l'autre, et tous ne sont pas activés chez chaque passerelle. Si vous vendez dans plusieurs pays, la couverture compte plus que le reste.</li>
<li><strong>La façon d'intégrer.</strong> Page de paiement hébergée par la passerelle (la plus simple), fenêtre qui s'ouvre sur votre site, ou appel direct de son API. Si votre site tourne sous WooCommerce ou un autre outil courant, regardez si un module existe.</li>
<li><strong>Les conditions du compte.</strong> Quels documents, quel délai de validation, à quel rythme l'argent arrive sur votre compte.</li>
<li><strong>La grille de frais.</strong> À lire sur la page officielle, pour votre montant de commande type.</li>
</ul>
<p>Pour comparer les trois passerelles les plus citées au Bénin, voir <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">le comparatif FedaPay, KkiaPay et CinetPay</a>. Cet article ne le répète pas : il vous dit quoi faire une fois la passerelle choisie.</p>
<h3>Passerelle ou agrégateur : y a-t-il une différence pour vous ?</h3>
<p>En pratique, vous avez affaire à un seul interlocuteur, qui branche plusieurs moyens de paiement derrière une même intégration. C'est l'intérêt : vous ne signez pas un contrat par opérateur. Vérifiez seulement quels moyens sont réellement activés sur <em>votre</em> compte, car la liste affichée sur le site de la passerelle n'est pas toujours celle de votre contrat.</p>
<h2>Quels documents faut-il pour ouvrir un compte marchand ?</h2>
<p>Chaque passerelle fixe sa propre liste, qui dépend de votre pays et de votre statut. Selon la documentation de KkiaPay consultée le 27 octobre 2026, une entreprise enregistrée au Bénin fournit :</p>
<ul>
<li>le numéro et une copie de son registre du commerce et du crédit mobilier ;</li>
<li>le numéro et une copie de son identifiant fiscal unique ;</li>
<li>la pièce d'identité (carte d'identité ou passeport) du gérant.</li>
</ul>
<p>La même page prévoit d'autres listes pour une ONG ou une association (procès-verbal de l'assemblée constitutive, récépissé de déclaration, pièce d'identité du président) et pour un consultant individuel (identifiant fiscal unique, date de naissance, justificatif de domicile). Elle précise que les pièces doivent être des scans clairs des originaux, et demande aussi l'adresse physique de l'entreprise et le lien du site, si vous en avez un.</p>
<p>FedaPay publie de son côté, dans sa documentation consultée le 27 octobre 2026, les causes de rejet d'un compte : adresse trop vague, description des activités différente de celle du registre du commerce, signature illisible ou différente de la pièce d'identité, capital incohérent. Ouvrez d'abord le compte en mode test, lisez ce que la passerelle demande pour passer en production, et préparez les pièces avant de démarrer l'intégration : la validation du compte peut prendre plus de temps que le code.</p>
<h3>Faut-il un site terminé avant de déposer la demande ?</h3>
<p>Le formulaire de KkiaPay demande l'adresse du site s'il existe, donc mieux vaut qu'il soit présentable : ce que vous vendez, le nom de l'entreprise, un moyen de vous joindre, des conditions de vente et une politique de remboursement. Terminez ces pages avant de déposer la demande.</p>
<h2>Comment intégrer le paiement à votre site ?</h2>
<p>Le principe est le même d'une passerelle à l'autre :</p>
<ol>
<li>le client valide son panier, votre site crée la commande avec le statut « en attente » ;</li>
<li>votre site demande à la passerelle une transaction pour ce montant et ce numéro de commande ;</li>
<li>le client est dirigé vers la page de paiement, saisit son numéro et valide sur son téléphone ;</li>
<li>la passerelle envoie à votre serveur une notification (appelée webhook ou rappel) avec le résultat ;</li>
<li>votre serveur contrôle cette notification, puis passe la commande à « payée » et déclenche la suite : courriel, facture, livraison.</li>
</ol>
<p>Le point décisif est l'étape 5. Ne marquez jamais une commande payée parce que le client est revenu sur une page « merci » : cette page peut être ouverte à la main, par erreur ou par fraude. Seule la confirmation envoyée à votre serveur, vérifiée auprès de la passerelle, fait foi. La documentation de FedaPay (<a href="https://docs.fedapay.com/fr/integration-api/webhooks">webhooks et événements</a>) et celle de KkiaPay (<a href="https://docs.kkiapay.me/v1/tableau-de-bord/webhook">webhook</a>) décrivent chacune leurs notifications, consultées le 27 octobre 2026. KkiaPay demande par exemple de répondre par un code HTTP 2xx pour accuser réception, et d'utiliser un secret pour vérifier la provenance de l'appel.</p>
<h3>Faut-il le faire soi-même ou le confier à un développeur ?</h3>
<ul>
<li><strong>Boutique sur un outil courant avec module de paiement :</strong> vous pouvez installer et configurer le module vous-même, en suivant la documentation de la passerelle.</li>
<li><strong>Site sur mesure, abonnements, espace client, paiements fractionnés :</strong> l'intégration passe par l'API et demande un développeur.</li>
</ul>
<p>Richard SALANON réalise ces intégrations dans le cadre d'un <a href="/services/site-e-commerce">site e-commerce</a>, d'un <a href="/services/saas-espace-client">espace client</a> ou d'une <a href="/services/api-rest-integrations">intégration par API</a> ; le prix est fixé sur devis, après avoir cadré votre besoin.</p>
<h2>Comment tester sans risque avant de passer en production ?</h2>
<p>En utilisant le mode test de la passerelle. Les documentations de FedaPay et de KkiaPay, lues le 27 octobre 2026, décrivent chacune un environnement d'essai (« sandbox ») où l'on essaie les paiements sans engager d'argent réel. Déroulez un jeu de scénarios écrit à l'avance et cochez chaque ligne :</p>
<ul>
<li>un paiement réussi : la commande passe bien à « payée » une seule fois ;</li>
<li>un paiement refusé ou annulé par le client : la commande reste en attente ou échoue, le panier est conservé ;</li>
<li>un client qui ne valide jamais sur son téléphone : la commande expire proprement après un délai que vous avez fixé ;</li>
<li>une notification reçue deux fois : la commande n'est pas traitée en double ;</li>
<li>un montant incohérent entre la commande et la notification : la commande est bloquée et vous recevez une alerte ;</li>
<li>un essai sur téléphone mobile, avec une connexion lente.</li>
</ul>
<p>Une fois le compte validé, faites un tout premier paiement réel d'un petit montant avec votre propre téléphone, puis retrouvez-le dans le tableau de bord de la passerelle et dans votre base de commandes.</p>
<h2>Que faire d'un paiement en attente, échoué ou à rembourser ?</h2>
<p>Prévoyez ces cas avant le lancement, car ils arrivent dès la première semaine.</p>
<ul>
<li><strong>Paiement en attente :</strong> le client a validé trop tard ou son réseau a coupé. Interrogez la passerelle sur l'état de la transaction avant de relancer ou d'annuler, pour ne pas faire payer deux fois.</li>
<li><strong>Paiement échoué :</strong> affichez un message clair (solde insuffisant, délai dépassé) et laissez réessayer sans refaire le panier.</li>
<li><strong>Client débité, commande non passée à « payée » :</strong> c'est le cas le plus pénible. La notification s'est perdue ou a été refusée par votre serveur. Gardez l'identifiant de transaction de chaque tentative pour retrouver le paiement dans le tableau de bord de la passerelle.</li>
<li><strong>Remboursement :</strong> les possibilités et les délais dépendent de la passerelle et de l'opérateur ; lisez ses conditions avant d'écrire votre politique de remboursement, et écrivez-la sur le site.</li>
</ul>
<h2>Comment rapprocher les paiements et les commandes ?</h2>
<p>Une fois par semaine au moins, comparez trois listes : les commandes marquées payées sur votre site, les transactions réussies du tableau de bord de la passerelle, et les versements reçus sur votre compte. Elles doivent correspondre ligne à ligne, aux frais près.</p>
<ul>
<li>Utilisez le numéro de commande comme référence de la transaction : sans lui, le rapprochement se fait à la main sur des montants.</li>
<li>Exportez le relevé de la passerelle et comparez-le à l'export de vos commandes, dans un tableur ou dans votre logiciel de gestion.</li>
<li>Notez les écarts : une commande payée sans transaction, ou l'inverse, révèle un défaut d'intégration ou une fraude.</li>
<li>Passez en comptabilité le montant brut de la vente et les frais de la passerelle séparément ; votre comptable vous dira comment les enregistrer.</li>
</ul>
<h2>Quelles erreurs reviennent le plus souvent ?</h2>
<ol>
<li><strong>Se fier à la page de retour</strong> pour valider une commande, au lieu de la notification serveur.</li>
<li><strong>Ne pas tester les échecs</strong> et découvrir en production ce que voit un client dont le paiement est refusé.</li>
<li><strong>Laisser les clés de production dans le code visible</strong> ou les mélanger avec les clés de test. Gardez-les dans la configuration du serveur, jamais dans une page ouverte au public.</li>
<li><strong>Déposer la demande de compte avec un site inachevé</strong>, puis perdre des semaines en allers-retours.</li>
<li><strong>Traiter deux fois la même notification</strong> : une commande livrée en double coûte cher.</li>
<li><strong>Oublier le rapprochement</strong> et ne voir les écarts qu'à la clôture.</li>
<li><strong>Annoncer sur le site des moyens de paiement non activés</strong> sur votre compte.</li>
<li><strong>Afficher un prix sans préciser qui supporte les frais</strong> : décidez si vous les absorbez ou les répercutez, et dites-le avant le paiement.</li>
</ol>
<h2>À quoi ressemble ce parcours pour une petite boutique de Cotonou ?</h2>
<p>Exemple fictif, à titre d'illustration. Une couturière de Cotonou veut vendre en ligne ses pagnes à 15 000 francs CFA la pièce. Elle prépare d'abord son site : photos, conditions de vente, politique de retour, contact. Elle ouvre un compte test chez la passerelle choisie, fait intégrer le paiement par page hébergée, puis déroule ses scénarios : succès, refus, abandon, double notification.</p>
<p>Elle dépose ensuite sa demande de passage en production avec les pièces du dossier. Au lancement, elle fait un premier achat réel avec son propre téléphone. Chaque vendredi, elle compare ses commandes payées avec le relevé de la passerelle. En trois semaines, elle repère une commande dont le client a été débité sans que la commande passe à « payée » : l'identifiant de transaction lui permet de la retrouver et de la traiter.</p>
<h2>Quelle option selon votre situation ?</h2>
<ul>
<li><strong>Vous vendez quelques produits, sans développeur :</strong> un lien ou une page de paiement fournis par la passerelle, sans intégration, suffit pour démarrer.</li>
<li><strong>Vous avez une boutique sur un outil courant :</strong> un module de paiement officiel, configuré et testé.</li>
<li><strong>Vous avez un site sur mesure, un espace client ou des abonnements :</strong> une intégration par API, avec notification serveur et rapprochement automatisé.</li>
<li><strong>Vous vendez dans plusieurs pays :</strong> commencez par la couverture des opérateurs, vérifiez-la dans le comparatif, puis sur la page officielle.</li>
</ul>
<h2>Questions fréquentes</h2>
<p><strong>Faut-il une entreprise enregistrée pour accepter le mobile money en ligne ?</strong></p>
<p>Cela dépend de la passerelle. KkiaPay prévoit, selon sa documentation consultée le 27 octobre 2026, des listes de pièces distinctes pour une entreprise, une ONG et un consultant individuel. Consultez la page d'activation de la passerelle choisie.</p>
<p><strong>Combien de temps prend la validation du compte ?</strong></p>
<p>Le délai varie selon la passerelle et la qualité de votre dossier. Déposez les pièces complètes et un site terminé, et ne fixez pas de date de lancement avant la réponse écrite.</p>
<p><strong>Quels frais faut-il prévoir ?</strong></p>
<p>Chaque passerelle publie sa propre grille, qui évolue. Relevez-la sur la page officielle le jour de votre décision, pour votre montant de commande type, et demandez si des frais s'ajoutent côté opérateur.</p>
<p><strong>Peut-on accepter MTN et Moov avec une seule intégration ?</strong></p>
<p>C'est l'usage des passerelles, mais vérifiez dans votre contrat que chaque moyen est bien activé sur votre compte.</p>
<p><strong>Le client doit-il avoir un compte sur mon site ?</strong></p>
<p>Non, pas pour payer. Un achat sans compte réduit les abandons, mais un compte client facilite le suivi des commandes et des remboursements.</p>
<p><strong>Un site WordPress ou WooCommerce peut-il accepter le mobile money ?</strong></p>
<p>Oui, quand la passerelle fournit un module pour cet outil. Les documentations de FedaPay et de KkiaPay, consultées le 27 octobre 2026, présentent chacune un module WooCommerce. Il faut le configurer et le tester comme une intégration sur mesure.</p>
<p><strong>Que faire si le client a payé mais que la commande n'apparaît pas ?</strong></p>
<p>Retrouvez la transaction dans le tableau de bord de la passerelle avec le numéro de commande ou l'identifiant, vérifiez son état, puis passez la commande à « payée » à la main si le paiement est confirmé, et cherchez pourquoi la notification n'est pas arrivée.</p>
<p><strong>Comment être accompagné pour votre site ?</strong></p>
<p>Richard SALANON, consultant en digitalisation basé à Cotonou, intègre le paiement mobile money dans des sites et des applications pour des entreprises d'Afrique francophone. Présentez votre projet via la page <a href="/contact">contact</a> ; la réponse arrive sous 24 heures et le prix est fixé sur devis.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://docs.fedapay.com/">Documentation de FedaPay</a> (compte test, modules, webhooks, causes de rejet), consultée le 27 octobre 2026</li>
<li><a href="https://docs.kkiapay.me/v1/">Documentation de KkiaPay</a> (activation du compte, sandbox, webhook, module WooCommerce), consultée le 27 octobre 2026</li>
</ul>
HTML,
];
