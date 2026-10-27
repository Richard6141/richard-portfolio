<?php
// Source de l'article /blog/automatiser-relances-factures-n8n-whatsapp (nouvel article, 27/10/2026). Après la migration, la base fait foi :
// ce fichier ne sert qu'à générer migrations/AAAA-MM-JJ-blog-automatiser-relances-factures-n8n-whatsapp.sql.
return [
    'slug'       => 'automatiser-relances-factures-n8n-whatsapp',
    'instantane' => '2026-10-27 18:00:00',
    'titre'      => 'Automatiser relances et factures avec n8n et WhatsApp',
    'meta'       => 'Méthode pas à pas pour automatiser les relances de paiement et le suivi des factures avec n8n et WhatsApp : consentement, contrôle humain, erreurs.',
    'resume'     => 'On automate bien le repérage des factures échues, le choix du rappel et son envoi par WhatsApp, et on garde pour une personne les litiges, les remises et les clients sensibles. Le flux se construit en sept étapes : données propres, règles de relance, modèles de messages approuvés, consentement, envoi, traitement des réponses, journal. Les prix de Meta changent : la page officielle fait foi le jour de la décision.',
    'categorie'  => 'Automatisation',
    'tags'       => ['automatiser relances clients', 'automatiser les factures', 'relance impayés WhatsApp', 'n8n', 'WhatsApp Business API'],
    'contenu'    => <<<'HTML'
<h2>Quelles relances peut-on automatiser sans froisser un client ?</h2>
<p>Les rappels de routine : une facture arrive à échéance, une échéance est dépassée de quelques jours, un paiement attendu n'est pas enregistré. Ces messages sont courtois, courts et identiques d'un client à l'autre, donc faciles à confier à un enchaînement d'étapes.</p>
<p>À garder pour une personne : un client en litige, une remise négociée, un échéancier convenu à l'oral, un grand compte avec un contact attitré, et toute mise en demeure. Un message automatique envoyé au mauvais moment à un bon client coûte plus cher que la relance oubliée.</p>
<p>Une règle simple pour trier : si la réponse du client peut changer la suite, c'est un humain qui écrit.</p>
<h2>Quelles sont les étapes pour monter ce flux avec n8n et WhatsApp ?</h2>
<ol>
<li><strong>Nettoyer la source.</strong> Les factures vivent dans Odoo, Dolibarr ou un tableur. Chaque ligne doit porter : client, numéro de téléphone avec l'indicatif du pays, numéro de facture, montant, échéance, statut. Sans cela, rien ne tient.</li>
<li><strong>Écrire le calendrier des relances.</strong> Un rappel avant l'échéance, un le jour même, un après quelques jours de retard, un plus ferme ensuite. Le texte change avec l'ancienneté de la dette.</li>
<li><strong>Rédiger les modèles de message</strong> et les soumettre à Meta pour approbation (voir la question sur l'API plus bas).</li>
<li><strong>Filtrer sur le consentement.</strong> Seuls les clients qui ont accepté d'être contactés sur WhatsApp entrent dans le flux.</li>
<li><strong>Construire le workflow n8n.</strong> Un déclencheur planifié, une lecture des factures échues, un filtre, un envoi, puis l'écriture du résultat dans la fiche. Le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a> aide à choisir l'outil.</li>
<li><strong>Prévoir les réponses.</strong> Un client qui répond doit sortir du flux et arriver chez une personne.</li>
<li><strong>Tenir un journal.</strong> Chaque envoi laisse une trace : date, modèle, facture, résultat.</li>
</ol>
<p>Le service d'<a href="/services/automatisation-ia">automatisation avec n8n et Make</a> de Richard SALANON décrit ce type de workflow ; son prix est fixé sur devis après un inventaire de vos tâches.</p>
<h2>Quel enchaînement de rappels choisir ?</h2>
<p>Il n'y a pas de calendrier universel : il dépend de vos délais de paiement et de vos clients. Un point de départ raisonnable, à ajuster :</p>
<ul>
<li><strong>Avant l'échéance (quelques jours) :</strong> un simple rappel utile, avec la référence et le montant. Beaucoup de retards viennent d'un oubli, pas d'un refus.</li>
<li><strong>Le jour de l'échéance :</strong> le même message, avec le moyen de payer.</li>
<li><strong>Après un court retard :</strong> un ton neutre qui demande de vérifier si le paiement est parti.</li>
<li><strong>Après un retard plus long :</strong> un message plus ferme, et surtout une alerte à la personne qui suit le dossier avant tout envoi suivant.</li>
</ul>
<p>Limitez le nombre de messages : au-delà de trois ou quatre rappels, passez à l'appel ou au courrier. Arrêtez la séquence dès que le paiement est enregistré, et vérifiez ce point avant chaque envoi, pas seulement au démarrage.</p>
<h2>Comment relier la facturation à n8n ?</h2>
<p>Trois situations reviennent. Avec un ERP comme <a href="/services/integration-odoo">Odoo</a> ou <a href="/services/integration-dolibarr">Dolibarr</a>, n8n lit les factures échues par l'interface de programmation du logiciel ; vérifiez dans la documentation de votre version et de votre formule que cet accès est disponible. Avec un tableur, n8n lit les lignes d'une feuille, ce qui marche pour un petit volume mais expose aux erreurs de saisie. Avec un logiciel de facturation en ligne, on passe par son accès API ou ses notifications.</p>
<p>Dans tous les cas, n8n ne doit lire que ce dont il a besoin, et écrire dans la fiche seulement l'information de relance (date, modèle envoyé), jamais le montant ni l'état comptable.</p>
<h2>Pourquoi passer par l'API WhatsApp Business plutôt que par l'application ?</h2>
<p>L'application WhatsApp Business convient à une conversation à la main. Pour envoyer des messages depuis un logiciel, il faut la plateforme de Meta (l'API) : elle accepte les envois programmés et les relie à un outil comme n8n. Un envoi à l'initiative de l'entreprise y passe par un modèle de message approuvé, un texte fixe avec des champs variables (nom, numéro de facture, montant). Selon la <a href="https://whatsappbusiness.com/fr/policy/">politique de messagerie WhatsApp Business</a> consultée le 27 octobre 2026, vous ne pouvez démarrer une conversation qu'avec un modèle approuvé, mais vous répondez librement pendant 24 heures après le dernier message du client, et Meta peut refuser ou rendre indisponible un modèle à tout moment.</p>
<p>Gardez le texte du modèle strictement utilitaire. Meta distingue des catégories de messages (marketing, utilitaire, authentification, service) aux règles et aux tarifs propres : une phrase promotionnelle ajoutée à une relance expose le modèle à un refus ou à une autre catégorie. Le détail est dans la page <a href="/services/integration-whatsapp">intégration WhatsApp</a>.</p>
<p>Les prix des messages ont déjà changé plusieurs fois : ne retenez aucun chiffre lu dans un article, y compris celui-ci. La page de tarification de Meta fait foi le jour où vous décidez.</p>
<h2>Comment joindre un lien de paiement Mobile Money ?</h2>
<p>Le lien se place dans le modèle comme un champ variable (ou un bouton si le modèle le prévoit), généré pour chaque facture par la passerelle de paiement. Deux précautions : le montant du lien doit venir de la même source que celui du message, et le lien doit expirer ou être désactivé quand la facture est payée par un autre moyen. Pour choisir une passerelle et lire ses frais, voyez le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a> ; les frais se lisent sur la grille de la passerelle.</p>
<h2>Quelles règles de consentement et de données faut-il respecter ?</h2>
<p>Une relance de facture est un message lié à un contrat, mais elle emploie quand même des données personnelles : un nom, un numéro, un montant. Trois règles de bon sens :</p>
<ul>
<li><strong>Recueillir l'accord d'être contacté sur WhatsApp</strong> au moment de la commande ou du devis, et le garder en preuve avec la date. La politique de Meta ne permet de contacter que les personnes qui ont donné leur numéro et accepté de recevoir vos messages.</li>
<li><strong>Offrir une sortie</strong> : un client qui écrit « stop » est retiré du flux immédiatement.</li>
<li><strong>Limiter ce qui circule</strong> : Meta interdit de demander ou de partager des numéros complets de carte bancaire, de compte ou de pièce d'identité ; évitez aussi tout détail inutile, et purgez les journaux après une durée fixée.</li>
</ul>
<p>Au Bénin, selon la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a>, l'article 332 interdit la prospection directe par système automatisé auprès d'une personne qui n'y a pas consenti, la preuve du consentement incombant à l'expéditeur. Une relance de facture a un autre objet, mais ne glissez jamais d'offre commerciale dans le même message, et faites valider votre cas par un juriste. Pour la prospection elle-même, lisez l'article sur <a href="/blog/automatiser-sa-prospection-n8n-make">l'automatisation de la prospection</a>. Dans les autres pays, la loi locale sur les données personnelles s'applique : faites-la vérifier avant de lancer.</p>
<h2>Que faire quand le client répond ?</h2>
<p>Le workflow doit reconnaître qu'un message est arrivé et arrêter la séquence pour ce client. La politique de Meta exige d'ailleurs une voie d'escalade claire vers une personne dès qu'un envoi est automatisé. Ensuite, trois cas :</p>
<ul>
<li><strong>« Je viens de payer » :</strong> la personne en charge vérifie le relevé, puis marque la facture. Le flux ne conclut pas seul.</li>
<li><strong>Une contestation ou une demande de délai :</strong> transmission à un humain avec la facture et l'historique des messages.</li>
<li><strong>Un mot d'arrêt :</strong> retrait immédiat, confirmé au client.</li>
</ul>
<p>Un assistant à IA peut classer ces réponses, mais c'est une personne qui décide de la suite. Sur ce sujet, lisez aussi l'article sur le <a href="/blog/chatbot-whatsapp-entreprise-support-client">chatbot WhatsApp pour le service client</a>.</p>
<h2>Où mettre le contrôle humain ?</h2>
<p>À quatre endroits : à la validation des modèles avant leur premier usage, à la lecture d'une liste d'envois avant le tout premier lancement, à chaque réponse de client, et à chaque relance dépassant un seuil de retard ou de montant que vous fixez. Faites aussi tourner le flux en mode test, avec votre propre numéro, avant d'écrire à un seul client.</p>
<p>Prévoyez une alerte quand un envoi échoue : un numéro invalide ou un modèle suspendu ne doit pas passer inaperçu.</p>
<h2>Que changent la facture normalisée et le SYSCOHADA ?</h2>
<p>L'automatisation relance, elle ne fabrique pas la facture. Au Bénin, selon la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement sur les factures normalisées</a>, publiée le 27 février 2020 et relue le 27 octobre 2026, les entreprises assujetties à la TVA émettent leurs factures avec une machine électronique certifiée ou un logiciel validé par la Direction générale des impôts. Le défaut d'émission est puni d'une amende égale à dix fois le montant de la facture, avec un minimum d'un million de francs CFA. Le flux n8n relit donc des factures émises par ce système et n'en crée pas à côté. Côté facture, ce qui s'automatise, c'est l'envoi au client de la facture déjà émise et la mise à jour du suivi des relances.</p>
<p>Pour la comptabilité, les écritures restent dans votre logiciel comptable selon le SYSCOHADA. Le flux peut y lire le statut d'une facture, il ne passe pas d'écriture. Si vous voulez comprendre la comptabilité dans Odoo, voyez la <a href="/formations/odoo-comptabilite-syscohada">formation Odoo et SYSCOHADA</a>.</p>
<h2>Quelles erreurs reviennent le plus souvent ?</h2>
<ul>
<li><strong>Relancer une facture déjà payée.</strong> Le paiement arrive par un autre canal et le statut n'est pas à jour. Vérifiez le statut juste avant l'envoi.</li>
<li><strong>Des numéros mal formatés.</strong> Sans indicatif de pays, l'envoi peut échouer sans que personne le remarque.</li>
<li><strong>Un modèle trop promotionnel</strong>, qui change de catégorie ou se fait refuser.</li>
<li><strong>Un ton unique pour tous.</strong> Le même message sec à un client fidèle et à un mauvais payeur abîme la relation.</li>
<li><strong>Aucune sortie.</strong> Le client ne peut pas dire stop, et signale votre numéro.</li>
<li><strong>Pas d'alerte sur les échecs.</strong> Le flux s'arrête un lundi et personne ne le voit avant le mois suivant.</li>
<li><strong>Laisser l'IA fixer un montant.</strong> Le montant vient de la facture, jamais d'un modèle de langage.</li>
</ul>
<h2>Comment décider ce qu'on automatise ?</h2>
<ul>
<li><strong>Peu de factures par mois, clients bien connus :</strong> un rappel à la main avec un modèle copié reste plus simple.</li>
<li><strong>Dizaines de factures, échéances régulières :</strong> automatisez les deux premiers rappels, gardez le reste à la main.</li>
<li><strong>Centaines de factures, ERP en place :</strong> flux complet avec alertes, mais validation humaine au-delà d'un seuil.</li>
<li><strong>Données de contact incomplètes :</strong> commencez par les nettoyer, avant tout outil.</li>
</ul>
<p>Pour apprendre à construire ce genre de flux vous-même, voyez les formations <a href="/formations/n8n">n8n</a> et <a href="/formations/whatsapp-business">WhatsApp Business</a>. Pour cadrer un projet avant de le chiffrer, un <a href="/services/audit-etude-de-projet">audit et une étude de projet</a> posent les bases.</p>
<h2>Questions fréquentes</h2>
<p><strong>Peut-on relancer un client par WhatsApp sans son accord ?</strong></p>
<p>Non : la politique de Meta ne permet de contacter que les personnes qui ont accepté de recevoir vos messages. Recueillez l'accord d'être contacté sur WhatsApp à la commande ou au devis, conservez-le avec sa date, et retirez le client du flux dès qu'il le demande.</p>
<p><strong>Faut-il obligatoirement l'API WhatsApp Business ?</strong></p>
<p>Pour des envois automatiques depuis un logiciel, oui : l'application WhatsApp Business n'est pas conçue pour cela. Pour quelques rappels faits à la main, l'application suffit.</p>
<p><strong>Combien coûte l'envoi d'une relance WhatsApp ?</strong></p>
<p>Les formules et les prix de Meta évoluent. Aucun chiffre n'est donné ici : consultez la page de tarification officielle de Meta le jour de votre décision.</p>
<p><strong>Combien coûte la mise en place de ce flux ?</strong></p>
<p>Ce service est sur devis. Le prix dépend du nombre de sources de données, du nombre de modèles de messages, des cas particuliers à traiter et de la formation de votre équipe.</p>
<p><strong>n8n ou Make pour ce flux ?</strong></p>
<p>Les deux savent le faire. Le choix dépend de vos volumes, de votre budget d'exécutions et de l'hébergement souhaité ; le comparatif du site détaille ces critères.</p>
<p><strong>L'automatisation remplace-t-elle la personne qui suit les impayés ?</strong></p>
<p>Non. Elle prend les rappels de routine et laisse à la personne les litiges, les accords de paiement et les clients sensibles, qui sont ce qui récupère vraiment l'argent.</p>
<h2>Sources</h2>
<ul>
<li><a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">Gouvernement du Bénin, tout savoir sur les factures normalisées</a>, consultée le 27 octobre 2026</li>
<li><a href="https://sgg.gouv.bj/doc/loi-2017-20/">Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (article 332)</a>, consultée le 27 octobre 2026</li>
<li><a href="https://whatsappbusiness.com/fr/policy/">WhatsApp Business, politique de messagerie</a>, consultée le 27 octobre 2026</li>
</ul>
HTML,
];
