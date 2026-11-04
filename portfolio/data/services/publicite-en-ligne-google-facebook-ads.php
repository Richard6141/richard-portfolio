<?php
// ============================================================
// data/services/publicite-en-ligne-google-facebook-ads.php · Pilier service
// « Publicité en ligne : Google Ads et Facebook Ads (Meta Ads) ».
// Honoraires sur devis ; aucun budget publicitaire ni résultat chiffré. Les budgets
// média sont payés par le client à Google et à Meta. Chiffre externe : DataReportal
// (audiences publicitaires Meta au Bénin). Pages d'aide Google, Meta, CNIL, SGG consultées le 2026-11-04.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Publicité en ligne avec Google Ads et Facebook Ads : des campagnes reliées à votre site pour recevoir des demandes mesurables',
    'title'   => 'Publicité en ligne Google Ads et Meta Ads | Richard SALANON',
    'meta'    => 'Publicité en ligne à Cotonou : campagnes Google Ads, Facebook Ads et Instagram, ciblage, pixel, suivi des conversions et WhatsApp. Réponse sous 24 h.',
    'en_bref' => 'Richard SALANON conçoit, lance et suit vos campagnes publicitaires sur Google Ads (recherche, affichage, vidéo) et sur Meta Ads (Facebook et Instagram), reliées à votre site ou à une landing page, avec pixel, suivi des conversions et, si votre clientèle écrit sur WhatsApp, des publicités qui ouvrent la conversation. Pour les PME, commerces, écoles, cabinets et associations du Bénin, d’Afrique francophone et d’Europe. Les honoraires et le calendrier sont fixés sur devis ; le budget média se règle directement à Google et à Meta.',
    'publie'  => '2026-11-07',
    'maj'     => '2026-11-07',
    'famille' => 'Visibilité et conseil',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => 'Annoncé sur le devis, selon le nombre de campagnes et l’état du site'],
        ['l' => 'Pour qui', 'v' => 'PME, commerces, écoles, cabinets et associations, au Bénin, en Afrique francophone et en Europe'],
        ['l' => 'Livrables', 'v' => 'Comptes configurés, campagnes Google Ads et Meta Ads, pixel et suivi des conversions, annonces, rapports'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvre la publicité en ligne, et que ne recouvre-t-elle pas ?',
            'paragraphes' => [
                'La publicité en ligne consiste à payer une plateforme pour montrer votre message à des personnes choisies, au moment où elles cherchent un produit ou parcourent leur fil. Deux plateformes couvrent l’essentiel des besoins d’une PME : Google Ads, qui affiche vos annonces quand quelqu’un tape une recherche ou consulte un site partenaire, et Meta Ads, qui diffuse vos annonces sur Facebook et Instagram auprès de profils que vous définissez.',
                'Le service de Richard SALANON couvre la chaîne complète : cadrage de l’objectif, ouverture et configuration des comptes publicitaires, choix des types de campagnes, ciblage, rédaction des annonces, installation du pixel et du suivi des conversions, lancement, puis lecture régulière des résultats et ajustements. La campagne n’est jamais isolée : elle envoie le visiteur vers une page qui doit le convaincre, et c’est pourquoi le service se combine avec la création de site web ou de landing page.',
                'Ce que le service ne fait pas mérite d’être dit. Il ne promet ni un nombre de clients, ni un coût par clic, ni un retour sur investissement chiffré, parce que ces valeurs dépendent de votre offre, de votre marché, de la concurrence du moment et de la qualité de votre page d’arrivée. Il ne remplace pas non plus le référencement naturel : la publicité s’arrête quand le budget s’arrête, alors que le <a href="/services/referencement-naturel-seo">référencement naturel</a> construit une visibilité durable. Les deux se complètent.',
                'Enfin, Richard SALANON n’avance jamais votre budget publicitaire. Le budget média est la somme que Google et Meta prélèvent pour diffuser vos annonces ; vous le réglez directement à la plateforme, depuis votre propre compte. Ses honoraires, eux, rémunèrent le travail de conception, de paramétrage et de suivi, et sont fixés sur devis.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes sait-on qu’une entreprise est prête à faire de la publicité en ligne ?',
            'intro' => 'La publicité amplifie ce qui existe déjà. Elle donne de bons résultats quand quelques conditions sont réunies, et elle gaspille un budget quand elles manquent.',
            'items' => [
                ['titre' => 'Votre offre est claire et se décrit en une phrase', 'texte' => 'Une annonce dispose de quelques mots. Si vous ne pouvez pas dire en une phrase ce que vous vendez, à qui et pourquoi vous choisir, l’annonce restera floue. Le cadrage sert d’abord à cet exercice.'],
                ['titre' => 'Vous avez une page d’arrivée qui convertit', 'texte' => 'Payer pour envoyer des visiteurs vers une page lente, illisible sur téléphone ou sans bouton de contact revient à remplir un seau percé. Une <a href="/services/landing-page-haute-conversion">landing page</a> ou un <a href="/services/site-vitrine-professionnel">site vitrine</a> soigné précède souvent la première campagne.'],
                ['titre' => 'Vous savez quelle action vous voulez obtenir', 'texte' => 'Un appel, un message WhatsApp, une demande de devis, une commande, une inscription à une formation. Une seule action principale par campagne rend le suivi lisible et l’optimisation possible.'],
                ['titre' => 'Vous pouvez répondre vite aux demandes', 'texte' => 'Une demande qui attend trois jours est une demande perdue. La publicité apporte des personnes pressées ; quelqu’un doit être disponible pour leur répondre, surtout sur WhatsApp.'],
                ['titre' => 'Vous acceptez de tester avant de conclure', 'texte' => 'Les premières semaines servent à apprendre : quelle annonce retient l’attention, quel public réagit, quelle heure convient. Une décision prise sur trois jours de données est une décision prise au hasard.'],
                ['titre' => 'Vous avez un budget média distinct des honoraires', 'texte' => 'Le budget que vous confiez à Google et à Meta est une dépense à part, que vous fixez vous-même et pouvez réduire ou arrêter. Savoir ce que vous êtes prêt à y consacrer, sans le chiffrer ici, évite les mauvaises surprises.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une mission de publicité en ligne, du cadrage au suivi ?',
            'items' => [
                ['titre' => 'Cadrage de l’objectif', 'texte' => 'Un échange pour comprendre l’activité, la clientèle visée, l’offre à mettre en avant, les zones géographiques et l’action à obtenir. On vérifie aussi si la publicité est le bon levier à ce stade, ou s’il faut d’abord améliorer le site.', 'duree' => 'Un premier échange'],
                ['titre' => 'Audit de la page d’arrivée et du suivi existant', 'texte' => 'Examen de la vitesse, de la lisibilité sur téléphone, de la clarté de l’offre, du formulaire ou du bouton WhatsApp, et de ce qui est déjà mesuré. Les corrections nécessaires sont listées avant de dépenser un franc en diffusion.', 'duree' => 'Avant toute dépense média'],
                ['titre' => 'Ouverture des comptes et paramétrage du suivi', 'texte' => 'Ouverture ou reprise des comptes Google Ads et Meta Business, installation du pixel Meta et de la balise de conversion Google, définition des actions à compter, vérification que chaque événement remonte correctement. Le calendrier complet figure sur le devis.', 'duree' => 'Avant le lancement'],
                ['titre' => 'Conception des campagnes et des annonces', 'texte' => 'Choix des types de campagnes, des mots-clés ou des audiences, des zones et des horaires, rédaction des textes en français, préparation des visuels ou reprise des vôtres. Vous validez les annonces avant toute diffusion.', 'duree' => 'Avant la mise en ligne'],
                ['titre' => 'Lancement et surveillance rapprochée', 'texte' => 'Mise en ligne, puis contrôle fréquent des premiers jours : les annonces sont-elles approuvées, les clics arrivent-ils sur la bonne page, les conversions sont-elles comptées, le budget se dépense-t-il comme prévu.', 'duree' => 'Premières semaines'],
                ['titre' => 'Optimisation et rapports', 'texte' => 'Retrait de ce qui ne fonctionne pas, renforcement de ce qui fonctionne, tests d’annonces, ajustement du ciblage. Les dépenses, les actions obtenues et les décisions proposées sont résumées en français ; la fréquence des points se convient sur le devis.', 'duree' => 'Selon la fréquence convenue'],
                ['titre' => 'Transmission ou poursuite', 'texte' => 'À la fin de la mission, vous décidez : poursuivre avec Richard SALANON, reprendre la main avec votre équipe ou confier la suite à une autre agence. Dans tous les cas, exigez que les comptes publicitaires soient à votre nom, pour garder leur historique.', 'duree' => 'Au choix'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que recevez-vous concrètement à la fin de la mise en place ?',
            'items' => [
                'Des comptes publicitaires Google Ads et Meta configurés pour votre activité ; la bonne pratique, à demander à tout prestataire, est qu’ils soient ouverts à votre nom.',
                'Un objectif écrit par campagne : l’action attendue, la zone, la cible et la page d’arrivée.',
                'Des campagnes configurées et lancées après votre validation : recherche, affichage, vidéo ou Performance Max côté Google ; diffusion Facebook et Instagram côté Meta, selon l’objectif retenu.',
                'Des annonces rédigées en français, avec plusieurs variantes pour comparer, et leurs visuels.',
                'Le pixel Meta et le suivi des conversions Google installés, testés et documentés, pour savoir quelle annonce apporte quelle demande.',
                'Le cas échéant, des publicités qui ouvrent directement une conversation WhatsApp, avec un message d’accueil préparé.',
                'La liste des corrections à apporter à la page d’arrivée, ou la page elle-même si elle fait partie de la commande.',
                'Un compte rendu en langage simple : dépenses, clics, actions obtenues, enseignements et décisions proposées, selon la fréquence convenue sur le devis.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Google Ads ou Facebook Ads : sur quelle plateforme commencer ?',
            'legende' => 'Repères généraux ; le bon choix dépend de votre clientèle et de votre offre, et se vérifie par un test. Les types de campagnes disponibles sont ceux que Google liste dans son centre d’aide, consulté le 4 novembre 2026.',
            'entetes' => ['Critère', 'Google Ads', 'Meta Ads (Facebook, Instagram)'],
            'lignes'  => [
                ['Moment où vous touchez la personne', 'Elle cherche déjà quelque chose : son intention est exprimée par sa requête', 'Elle parcourt son fil : vous attirez son attention avant qu’elle ne cherche'],
                ['Bonne utilisation', 'Capter une demande existante : plombier, avocat, école, boutique, service urgent', 'Faire connaître une offre, créer le désir, relancer des visiteurs, toucher un public précis par ses centres d’intérêt'],
                ['Formats', 'Annonces textuelles sur la recherche, affichage, vidéo, Performance Max, Shopping, entre autres types listés par Google', 'Images, vidéos, carrousels, publications éphémères (stories), messages qui ouvrent une conversation'],
                ['Ciblage', 'Mots-clés, localisation, langue, horaires, audiences', 'Localisation, âge, centres d’intérêt, audiences issues de vos visiteurs ou de vos contacts'],
                ['Suivi', 'Balise de conversion Google, appels, import de données hors ligne', 'Pixel Meta, événements personnalisés, conversations ouvertes'],
                ['Point de vigilance', 'Un mot-clé trop large attire des clics inutiles ; il faut exclure les recherches hors sujet', 'Une annonce qui ne retient pas l’œil en une seconde est ignorée ; les visuels comptent beaucoup'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment fonctionne le ciblage, et pourquoi est-il plus utile que le budget ?',
            'paragraphes' => [
                'Le ciblage décide qui voit votre annonce. Sur Google, il repose d’abord sur les mots-clés : vous indiquez les recherches pour lesquelles votre annonce peut apparaître, et vous excluez celles qui n’ont rien à voir avec votre activité. On ajoute la zone géographique, la langue et les horaires. Une entreprise de Cotonou qui ne livre que dans l’agglomération a tout intérêt à ne pas payer des clics venus d’ailleurs.',
                'Sur Meta, le ciblage repose sur la localisation, sur des critères comme l’âge et les centres d’intérêt, et sur des audiences construites à partir de votre propre activité : visiteurs de votre site repérés par le pixel, personnes qui ont interagi avec votre page, listes de contacts que vous détenez légitimement. Ces audiences, souvent plus pertinentes qu’un ciblage par centres d’intérêt, demandent que le pixel soit installé dès le départ pour se constituer.',
                'Un ciblage étroit n’est pas toujours meilleur. Trop restreint, il prive la plateforme de données pour apprendre ; trop large, il disperse le budget. Le travail consiste à commencer avec une hypothèse raisonnable, à observer, puis à resserrer ou élargir selon ce que les chiffres de votre compte montrent. Dans un petit marché comme celui du Bénin, où les audiences sont limitées, l’enjeu est surtout d’éviter de montrer dix fois la même annonce aux mêmes personnes.',
                'Le message compte autant que la cible. Une même audience réagit très différemment à une annonce qui parle de son problème et à une annonce qui vante l’entreprise. Les variantes d’annonces servent précisément à découvrir ce qui parle à votre clientèle, plutôt que de supposer.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'À quoi servent le pixel et le suivi des conversions ?',
            'paragraphes' => [
                'Sans suivi, une campagne est une boîte noire : l’argent sort, des clics arrivent, et personne ne sait si quelqu’un a vraiment appelé, écrit ou acheté. Le suivi des conversions comble ce vide. Selon le centre d’aide de Google Ads, il mesure les actions de valeur que les personnes accomplissent après avoir interagi avec une annonce : achats, inscriptions, appels, installations d’application, ventes hors ligne importées. Ces données montrent quels mots-clés, annonces et campagnes amènent des résultats.',
                'Le pixel Meta joue le rôle équivalent côté Facebook et Instagram. C’est un fragment de code installé sur votre site qui signale à Meta les actions des visiteurs, ce qui permet de mesurer les résultats des annonces et de constituer des audiences pour les relances. Les pages d’aide Meta détaillent sa configuration ; Richard SALANON en vérifie le bon fonctionnement avant toute diffusion.',
                'Le suivi ne se limite pas à un code installé. Il faut décider quelles actions comptent, les nommer clairement, tester chacune, et accepter que certaines conversions se produisent hors du site : un appel passé par téléphone, un message WhatsApp, une visite en boutique. Ces actions peuvent être comptées, avec des réglages adaptés ou en demandant au client comment il a connu l’entreprise, ce qui reste une méthode simple et fiable.',
                'Un point juridique s’ajoute : en Europe, les traceurs publicitaires exigent en général le consentement du visiteur. La CNIL rappelle que l’exemption de consentement ne vaut que pour des traceurs dont la finalité est strictement limitée à la mesure d’audience, pour le compte exclusif de l’éditeur du site, et exclut les traceurs qui permettent un suivi global de la navigation ou dont les données sont croisées ou partagées. Un bandeau de consentement correctement configuré fait donc partie du dispositif quand vous visez des visiteurs européens.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu’est-ce qu’une publicité WhatsApp, et quand est-elle pertinente ?',
            'paragraphes' => [
                'Une publicité WhatsApp, dite « clic vers WhatsApp », est une annonce Meta dont le bouton ouvre directement une conversation avec votre numéro professionnel au lieu d’envoyer vers une page web. Meta explique dans ses pages d’aide comment la créer dans le Gestionnaire de publicités. Elle convient aux métiers où la vente se conclut par un échange : devis, disponibilités, précisions sur un produit, prise de rendez-vous.',
                'Chez beaucoup de clients d’Afrique francophone, WhatsApp est le canal que les acheteurs préfèrent à un formulaire. Une annonce qui démarre une conversation réduit l’effort demandé à la personne : un clic, un message prérempli, et la discussion commence. Le prix de cette simplicité est la réactivité : si personne ne répond dans l’heure, l’intérêt retombe. Il faut donc prévoir qui répond, à quelles heures, avec quels messages types.',
                'Cette publicité se combine bien avec une <a href="/services/integration-whatsapp">intégration de WhatsApp Business</a> : catalogue, réponses rapides, étiquettes pour classer les demandes. Quand le volume grandit, un <a href="/services/agents-ia-chatbot-whatsapp">agent IA sur WhatsApp</a> peut trier les premières questions et passer la main à un humain pour la suite. Le sujet est approfondi dans la <a href="/formation-whatsapp-business">formation WhatsApp Business</a>.',
                'Elle n’est pas universelle. Pour un service qui demande de comparer, lire, réfléchir, une page claire convient mieux qu’une conversation. Le test consiste à comparer, sur quelques semaines, les demandes obtenues par chaque porte d’entrée et leur qualité, pas seulement leur nombre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi associer création de site web et publicité en ligne ?',
            'paragraphes' => [
                'Une annonce n’est que la moitié du parcours. L’autre moitié se joue sur la page où arrive le visiteur : vitesse d’affichage sur un téléphone, titre qui reprend la promesse de l’annonce, preuve de sérieux, bouton d’action visible. Quand les deux parties sont conçues par la même personne, elles se répondent : le texte de l’annonce et le titre de la page parlent le même langage, et le suivi est installé dès la construction de la page.',
                'C’est l’avantage de confier à un seul interlocuteur la création du site et la publicité. Richard SALANON construit des <a href="/services/landing-page-haute-conversion">landing pages</a>, des <a href="/services/site-vitrine-professionnel">sites vitrines</a> et des <a href="/services/site-e-commerce">boutiques en ligne</a>. Il peut donc corriger la page quand les chiffres montrent qu’elle freine les conversions, au lieu de renvoyer la responsabilité à un autre prestataire.',
                'Les deux services restent séparables. Si votre site existe déjà et fonctionne, la mission peut se limiter aux campagnes. Si votre page est faible, la meilleure dépense est souvent de la refaire avant de diffuser. Pour mémoire, la fiche tarifaire du site indique une landing page à partir de 150 000 FCFA et un site vitrine à partir de 300 000 FCFA ; ces montants concernent la création des pages et non la publicité, dont les honoraires se fixent sur devis.',
                'À plus long terme, l’idéal est d’alterner : la publicité pour obtenir des demandes rapidement et tester les messages, le référencement naturel pour réduire peu à peu la dépendance au budget média. Les enseignements des mots-clés qui convertissent en publicité nourrissent le choix des pages à travailler en référencement.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la publicité en ligne selon votre secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Commerce et boutique en ligne, Cotonou ou Lyon', 'probleme' => 'La boutique est visible dans un petit cercle et les produits ne sont pas trouvés par les personnes qui les cherchent.', 'solution' => 'Campagnes Google sur les recherches de produits et diffusion Instagram et Facebook de visuels soignés, avec pixel pour relancer les visiteurs qui ont consulté une fiche sans commander, et un bouton qui ouvre WhatsApp pour la commande.'],
                ['secteur' => 'École ou centre de formation, Abidjan ou Bruxelles', 'probleme' => 'Les inscriptions se concentrent sur quelques semaines et la notoriété de l’établissement ne dépasse pas son quartier.', 'solution' => 'Annonces ciblées sur les recherches de formation et sur les parents ou étudiants de la zone, page d’inscription dédiée, suivi du nombre de demandes de renseignements pour décider d’arrêter ou de renforcer la diffusion.'],
                ['secteur' => 'Cabinet de services (avocat, comptable, architecte), Dakar ou Paris', 'probleme' => 'Les clients arrivent par recommandation et le cabinet veut des demandes régulières sans multiplier les rendez-vous peu qualifiés.', 'solution' => 'Campagne recherche sur des requêtes précises, exclusion des recherches sans rapport, formulaire court qui pose quelques questions de qualification, mesure des demandes réellement transformées en rendez-vous.'],
                ['secteur' => 'Restauration, hôtellerie et événementiel, Lomé ou Montréal', 'probleme' => 'La demande varie selon les saisons et les jours, et les réservations passent par le téléphone et les messages.', 'solution' => 'Annonces géolocalisées sur les périodes utiles, publicités qui ouvrent une conversation WhatsApp pour les réservations, horaires de diffusion calés sur les heures où quelqu’un peut répondre.'],
                ['secteur' => 'Santé et bien-être, Douala ou Lille', 'probleme' => 'La clinique ou le cabinet veut faire connaître un service sans exposer d’informations de santé ni promettre ce qui ne peut l’être.', 'solution' => 'Annonces sobres qui présentent le service et les modalités de rendez-vous, sans ciblage sur des données sensibles, pages claires et mentions adaptées, validation du texte par le responsable avant diffusion.'],
                ['secteur' => 'ONG et association, Ouagadougou ou Genève', 'probleme' => 'L’association a besoin de faire connaître un appel à dons, une campagne ou une inscription à une activité avec peu de moyens.', 'solution' => 'Petites campagnes Meta sur une zone et un public précis, page d’action simple, mesure des inscriptions, arrêt dès que l’objectif est atteint, budget média fixé par l’association elle-même.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la publicité en ligne, et qu’est-ce qui fait varier les honoraires ?',
            'intro'      => 'Deux coûts distincts existent. Le budget média est la somme que vous réglez à Google et à Meta pour diffuser vos annonces : vous le fixez vous-même et vous le payez directement à la plateforme, depuis votre compte. Les honoraires de Richard SALANON rémunèrent la conception, le paramétrage et le suivi, et sont fixés sur devis, après un échange de cadrage. Aucun honoraire de publicité n’est affiché ici, parce qu’un chiffre donné sans connaître votre marché serait faux dans la plupart des cas ; seuls figurent les tarifs de départ de la création de page. Côté règlement, vous avez le choix entre Mobile Money (MTN, Moov), carte bancaire, PayPal, virement et espèces, avec les échéances inscrites sur le devis avant signature.',
            'items'      => [
                ['offre' => 'Cadrage et audit de la page d’arrivée', 'prix' => 'Sur devis', 'inclus' => ['Échange sur l’objectif, l’offre et la clientèle', 'Liste des corrections avant diffusion']],
                ['offre' => 'Mise en place Google Ads', 'prix' => 'Sur devis', 'inclus' => ['Compte, campagnes, mots-clés, annonces', 'Suivi des conversions installé et testé']],
                ['offre' => 'Mise en place Meta Ads (Facebook et Instagram)', 'prix' => 'Sur devis', 'inclus' => ['Compte et pixel configurés, audiences, annonces et visuels', 'Option : publicités qui ouvrent WhatsApp']],
                ['offre' => 'Suivi et optimisation', 'prix' => 'Sur devis', 'inclus' => ['Lecture régulière des résultats, ajustements, tests d’annonces', 'Compte rendu en français, décisions proposées']],
                ['offre' => 'Landing page ou site associé', 'prix' => 'À partir de 150 000 FCFA (landing page) ; 300 000 FCFA (site vitrine)', 'inclus' => ['Tarifs de départ de la fiche tarifaire du site, pour la création de la page et non pour la publicité', 'Création ou refonte de la page d’arrivée ; montant final sur devis']],
            ],
            'variations' => [
                'Le nombre de plateformes et de campagnes à mettre en place : Google seul, Meta seul ou les deux.',
                'L’état de la page d’arrivée : une page prête ne coûte pas le travail d’une page à refaire.',
                'La quantité de visuels et de textes à produire, et la nécessité de vidéos.',
                'Le nombre de zones, de langues et de produits ou services à promouvoir.',
                'La fréquence des rapports et des ajustements demandée après le lancement.',
                'La mise en place éventuelle de WhatsApp Business ou d’un agent de réponse en complément.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font perdre le budget d’une campagne publicitaire ?',
            'intro' => 'Ces erreurs reviennent d’une entreprise à l’autre. Les connaître avant de commencer permet de ne pas en payer le prix.',
            'items' => [
                ['titre' => 'Lancer sans suivi des conversions', 'texte' => 'Sans mesure, impossible de savoir ce qui marche. On éteint la bonne annonce ou on garde la mauvaise. Le suivi s’installe et se teste avant la première dépense.'],
                ['titre' => 'Envoyer le trafic vers la page d’accueil', 'texte' => 'Une annonce sur un produit précis doit mener à la page de ce produit ou à une page dédiée. Un visiteur perdu dans un site généraliste repart.'],
                ['titre' => 'Cibler trop large ou trop étroit', 'texte' => 'Un ciblage trop large paie des clics sans intérêt ; trop étroit, il bloque l’apprentissage. Les ajustements se font sur des données réelles de votre compte.'],
                ['titre' => 'Oublier les mots-clés à exclure', 'texte' => 'Une recherche qui contient votre mot-clé peut viser tout autre chose : un emploi, un mode d’emploi, un concurrent. Les exclusions se complètent au fil des semaines.'],
                ['titre' => 'Juger trop vite', 'texte' => 'Éteindre une campagne au bout de deux jours, ou la laisser tourner des mois sans regard. Une période d’apprentissage et des points réguliers évitent les deux excès.'],
                ['titre' => 'Ne pas répondre rapidement aux demandes', 'texte' => 'La meilleure publicité échoue si les messages WhatsApp restent sans réponse. Désignez qui répond et quand, avant le lancement.'],
                ['titre' => 'Confier ses comptes au prestataire', 'texte' => 'Un compte publicitaire ouvert au nom de l’agence reste chez elle quand vous partez, avec son historique. Exigez de tout prestataire que les comptes soient à votre nom.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quels signaux doivent vous alerter chez un prestataire de publicité en ligne ?',
            'texte' => 'Méfiez-vous de celui qui promet un nombre de clients, un coût par clic ou un retour sur investissement avant d’avoir vu votre offre et votre marché, de celui qui ouvre les comptes à son propre nom, de celui qui mélange ses honoraires et votre budget média sans les distinguer sur la facture, de celui qui ne vous donne aucun accès aux chiffres et de celui qui n’installe aucun suivi des conversions. Un rapport qui n’affiche que des clics et des impressions, sans la moindre action obtenue, ne dit pas si l’argent a servi.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de plateforme et de données personnelles faut-il respecter ?',
            'paragraphes' => [
                'Chaque plateforme impose ses règles de publicité : contenus interdits ou restreints, exigences sur les pages d’arrivée, limites pour certains secteurs comme la santé ou la finance. Une annonce peut être refusée ou un compte suspendu en cas de manquement. Ces règles évoluent ; elles sont lues dans les centres d’aide officiels de Google et de Meta au moment de la mission, jamais recopiées d’un article ancien.',
                'Côté données, le pixel et la balise de conversion collectent des informations sur les visiteurs. Au Bénin, la loi n° 2017-20 du 20 avril 2018 portant code du numérique encadre la protection des données à caractère personnel, et l’Autorité de protection des données à caractère personnel (APDP) publie les rubriques consacrées aux déclarations et autorisations. En Europe, le RGPD s’applique et la CNIL précise que seuls les traceurs dont la finalité est strictement limitée à la mesure d’audience, pour le compte exclusif de l’éditeur du site, échappent au consentement.',
                'En pratique, cela se traduit par un texte de confidentialité à jour sur votre site, un bandeau de consentement quand vous diffusez en Europe, et le choix de ne jamais envoyer à une plateforme de données sensibles. Les listes de contacts utilisées pour constituer une audience doivent avoir été recueillies légitimement. Ces points sont vérifiés avec vous avant le lancement ; ils ne remplacent pas l’avis d’un juriste pour un cas particulier.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quelles audiences publicitaires existent au Bénin ?',
            'items' => [
                ['valeur' => '2,50 millions', 'libelle' => 'Audience publicitaire de Facebook au Bénin fin 2025, soit 16,8 % de la population, selon les outils publicitaires de Meta repris par DataReportal ; cette valeur est une portée publicitaire et non un nombre d’utilisateurs actifs', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '237 000', 'libelle' => 'Audience publicitaire d’Instagram au Bénin fin 2025, soit 1,6 % de la population, toujours selon les outils de Meta repris par DataReportal', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '4,80 millions', 'libelle' => 'Internautes au Bénin en octobre 2025, soit 32,2 % de la population, d’après DataReportal', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte local pour une campagne au Bénin ou en Afrique francophone ?',
            'paragraphes' => [
                'La première conséquence des chiffres ci-dessus est de choisir le bon canal. Au Bénin, l’audience publicitaire de Facebook est environ dix fois celle d’Instagram selon DataReportal. Pour toucher le grand public local, Facebook garde donc un poids que le débat sur les réseaux à la mode fait parfois oublier ; Instagram convient mieux à une clientèle plus jeune, urbaine ou orientée image. Ces ordres de grandeur se vérifient dans votre propre gestionnaire de publicités.',
                'Le paiement de la publicité est un autre sujet. Google et Meta facturent le budget média en devise, généralement par carte bancaire internationale ou autre moyen que la plateforme accepte dans votre pays, et ces moyens varient. Avant de lancer, on vérifie que le compte peut être alimenté, avec les frais bancaires et de change à prévoir. Les honoraires, eux, peuvent se régler en Mobile Money, ce qui facilite la relation pour un client béninois.',
                'La connectivité pèse sur la conception : beaucoup de visiteurs arrivent depuis un téléphone avec un forfait de données limité. Une page légère, un visuel compressé et un bouton WhatsApp bien placé valent mieux qu’une animation lourde. La langue compte aussi : annonces et pages en français clair, avec les noms de quartiers et de villes que vos clients emploient réellement.',
                'Pour les clients qui visent aussi l’Europe, la logique change : consentement aux traceurs, pages juridiques complètes, devises et fuseaux horaires. Une même entreprise peut mener deux campagnes distinctes, l’une pour Cotonou, l’autre pour Paris ou Bruxelles, avec ses propres annonces, sa propre page et son propre suivi.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier vos campagnes à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                'Il compte plus de six ans d’expérience, a travaillé dans quinze pays dont le Bénin, la Côte d’Ivoire, le Sénégal, la France, la Belgique, la Suisse et le Canada, et formé plus de 200 personnes. Il a suivi une formation à EPITECH (2022), a créé Wapy, assistant WhatsApp à intelligence artificielle, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Cette double compétence, développement web et messagerie WhatsApp, lui permet de relier l’annonce, la page d’arrivée, le suivi et la conversation avec le client.',
                'Sa façon de travailler : il écoute votre activité avant de proposer une campagne, il explique ses choix en français simple, et il vous dit quand la publicité n’est pas le bon levier à ce stade. Les détails de la mission (comptes, suivi, comptes rendus) sont précisés sur le devis. Pour en savoir plus sur son parcours, voir la page <a href="/a-propos/">à propos</a> ou la présentation de <a href="/richard-salanon">Richard SALANON</a>. Pour apprendre à lire vos résultats de visibilité sur Google, voir la <a href="/formation-seo-visibilite-google">formation SEO et visibilité sur Google</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer une campagne publicitaire ?',
            'texte' => 'Une campagne publicitaire se prépare avant de se payer : une offre claire, une page d’arrivée soignée, une seule action à obtenir, un suivi installé et testé, quelqu’un pour répondre vite. Exigez des comptes à votre nom ; le budget média est le vôtre et se règle directement à Google et à Meta. Commencez petit, mesurez, puis décidez sur des relevés réels et non sur des impressions.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous savoir si la publicité en ligne convient à votre activité ?',
            'texte'  => 'Décrivez votre offre, votre zone et la page où vous souhaitez envoyer vos visiteurs : vous recevez une réponse sous 24 heures, puis un échange de cadrage pour savoir quelle plateforme et quelle première campagne ont du sens.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un échange de cadrage'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien coûte une publicité Facebook ?', 'r' => 'Le coût de diffusion est un budget média que vous réglez directement à Meta, depuis votre compte publicitaire, et que vous décidez vous-même avec le prestataire selon votre objectif et la durée de la campagne. Aucun chiffre n’est donné ici, faute de source officielle applicable à votre cas. Les honoraires de Richard SALANON pour la création et le suivi sont fixés sur devis.'],
        ['q' => 'Facebook Ads ou Google Ads : que choisir ?', 'r' => 'Google Ads convient quand les gens cherchent déjà ce que vous vendez ; Facebook Ads et Instagram conviennent pour faire connaître une offre ou relancer des visiteurs. Le bon choix dépend de votre clientèle, de votre offre et de votre page d’arrivée. On commence souvent par une seule plateforme, on mesure les demandes obtenues, puis on décide d’ajouter l’autre. Aucun résultat n’est garanti d’avance.'],
        ['q' => 'Comment faire de la publicité Facebook au Bénin ?', 'r' => 'Il faut une page ou un profil professionnel, un compte publicitaire Meta, une offre claire, une page d’arrivée ou un numéro WhatsApp qui répond vite, puis le pixel Meta pour mesurer les actions. On choisit ensuite la zone (par exemple Cotonou), le public et le message, on lance une petite campagne de test et on ajuste selon les demandes reçues. Richard SALANON peut mener ces étapes avec vous.'],
        ['q' => 'Comment faire de la publicité pour son site web ?', 'r' => 'Définissez d’abord l’action attendue sur le site (demande de devis, appel, message WhatsApp, commande), vérifiez que la page est rapide sur téléphone et claire, installez le suivi des conversions, puis choisissez Google Ads pour capter les recherches existantes, Meta Ads pour faire connaître l’offre, ou les deux. Si le site est faible, il vaut mieux le corriger avant de diffuser. Les campagnes et la création de page peuvent être confiées au même interlocuteur.'],
        ['q' => 'Qu’est-ce que la publicité en ligne, concrètement ?', 'r' => 'C’est le fait de payer une plateforme, surtout Google et Meta, pour afficher vos annonces auprès de personnes choisies : celles qui cherchent un produit sur Google, ou celles qui correspondent à un profil sur Facebook et Instagram. Vous payez la diffusion, selon un mode propre à chaque plateforme, et vous mesurez les actions obtenues.'],
        ['q' => 'Quelle différence entre Google Ads et Facebook Ads ?', 'r' => 'Google Ads vous place devant des personnes qui cherchent déjà quelque chose, à travers leurs recherches ou des sites partenaires. Facebook Ads, aujourd’hui Meta Ads, vous montre à des personnes qui parcourent leur fil, selon leur zone, leurs centres d’intérêt ou leur lien avec votre activité. Beaucoup d’entreprises combinent les deux : Google pour capter la demande, Meta pour la créer et relancer.'],
        ['q' => 'Faut-il un site web pour faire de la publicité en ligne ?', 'r' => 'Il faut au minimum une page d’arrivée. Une annonce sans page claire gaspille le budget. Une simple landing page bien faite peut suffire pour une première campagne ; Richard SALANON peut la créer ou corriger celle que vous avez, ce qui explique le lien entre création de site web et publicité.'],
        ['q' => 'Combien coûte la publicité en ligne ?', 'r' => 'Il y a deux coûts. Le budget média, payé directement à Google et à Meta, que vous fixez vous-même. Les honoraires de Richard SALANON, fixés sur devis selon le nombre de plateformes, de campagnes et l’état de votre page. Aucun montant n’est annoncé avant d’avoir compris votre situation.'],
        ['q' => 'Qui paie le budget publicitaire, et qui possède les comptes ?', 'r' => 'Vous. Le budget média est réglé directement à la plateforme et Richard SALANON n’avance aucune somme. Pour les comptes, la bonne pratique, à exiger de tout prestataire, est qu’ils soient ouverts à votre nom : vous conservez alors leur historique si la collaboration s’arrête. Les modalités exactes se précisent sur le devis.'],
        ['q' => 'Promettez-vous un nombre de clients ou un retour sur investissement ?', 'r' => 'Non. Ces valeurs dépendent de votre offre, de votre marché, de la concurrence et de votre page d’arrivée. Le travail consiste à fixer un objectif, installer le suivi, tester, mesurer et décider sur des relevés réels. Méfiez-vous de tout prestataire qui annonce un résultat avant d’avoir vu votre activité.'],
        ['q' => 'Qu’est-ce que le pixel Meta et le suivi des conversions ?', 'r' => 'Le pixel Meta est un code installé sur votre site qui signale à Meta les actions des visiteurs. Le suivi des conversions de Google Ads mesure, d’après son centre d’aide, les actions de valeur comme les achats, inscriptions, appels ou installations qui suivent une interaction avec une annonce. Les deux permettent de savoir quelle annonce apporte quelle demande.'],
        ['q' => 'Peut-on faire des publicités qui ouvrent WhatsApp ?', 'r' => 'Oui. Meta propose des publicités « clic vers WhatsApp » qui ouvrent une conversation avec votre numéro professionnel. Elles conviennent aux ventes qui se concluent par un échange. Il faut prévoir qui répond, à quelles heures et avec quels messages types, car la réactivité décide du résultat.'],
        ['q' => 'Combien de temps faut-il pour voir des résultats ?', 'r' => 'La mise en place dépend du nombre de campagnes et de l’état du site, et est annoncée sur le devis. Après le lancement, les premières semaines servent à apprendre : quelles annonces, quels mots-clés, quelles audiences. Une décision prise sur quelques jours de données est fragile, c’est pourquoi des points réguliers sont prévus.'],
        ['q' => 'Faut-il un bandeau de cookies pour mes publicités ?', 'r' => 'Si vous visez des visiteurs européens, en général oui : la CNIL indique que seuls les traceurs limités à la mesure d’audience, pour le compte exclusif de l’éditeur du site, échappent au consentement, et exclut ceux qui permettent un suivi global de la navigation. Au Bénin, la loi n° 2017-20 encadre la protection des données. Pour un cas précis, demandez l’avis d’un juriste.'],
        ['q' => 'Publicité en ligne ou référencement naturel : lequel choisir ?', 'r' => 'La publicité apporte des visites rapidement mais s’arrête avec le budget. Le <a href="/services/referencement-naturel-seo">référencement naturel</a> demande du temps mais construit une visibilité durable. Beaucoup d’entreprises commencent par la publicité pour tester les messages, puis investissent dans le référencement pour réduire leur dépendance.'],
        ['q' => 'Travaillez-vous avec des entreprises hors du Bénin ?', 'r' => 'Oui. Richard SALANON est basé à Cotonou et travaille avec des entreprises d’Afrique francophone, d’Europe et du Canada, à distance ou sur place selon le devis. Les campagnes peuvent viser une ou plusieurs zones, avec des annonces et des pages adaptées à chacune.'],
        ['q' => 'Pouvez-vous aussi créer mon site ou ma landing page ?', 'r' => 'Oui. Il construit des <a href="/services/landing-page-haute-conversion">landing pages</a>, des <a href="/services/site-vitrine-professionnel">sites vitrines</a> et des <a href="/services/site-e-commerce">boutiques en ligne</a>. Les deux prestations restent séparables : vous pouvez commander uniquement les campagnes si votre site fonctionne déjà.'],
        ['q' => 'Quels moyens de paiement acceptez-vous pour les honoraires ?', 'r' => 'Les honoraires se règlent comme vous le préférez : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Le devis, signé avant le début, fixe les échéances. À ne pas confondre avec le budget média, que vous payez à Google et à Meta selon les moyens que ces plateformes acceptent dans votre pays.'],
        ['q' => 'Que se passe-t-il si la publicité n’est pas le bon levier ?', 'r' => 'Le cadrage le dira. Si la page d’arrivée est faible, si personne ne peut répondre aux demandes ou si l’offre n’est pas claire, il vaut mieux corriger ces points d’abord. Vous évitez ainsi de dépenser un budget média sans en tirer parti.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, rapport Digital 2026 consacré au Bénin (audiences publicitaires Meta, internautes)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-11-04'],
        ['titre' => 'Aide Google Ads, à propos du suivi des conversions', 'url' => 'https://support.google.com/google-ads/answer/1722022?hl=fr', 'date' => '2026-11-04'],
        ['titre' => 'Aide Google Ads, types de campagnes', 'url' => 'https://support.google.com/google-ads/answer/6167118?hl=fr', 'date' => '2026-11-04'],
        ['titre' => 'Aide Meta Business, en savoir plus sur le pixel Meta', 'url' => 'https://www.facebook.com/business/help/742478679120153', 'date' => '2026-11-04'],
        ['titre' => 'Aide Meta Business, créer des publicités clic vers WhatsApp dans le Gestionnaire de publicités', 'url' => 'https://www.facebook.com/business/help/447934475640650', 'date' => '2026-11-04'],
        ['titre' => 'CNIL, cookies et traceurs : mesure d’audience et exemption de consentement', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies-solutions-pour-les-outils-de-mesure-daudience', 'date' => '2026-11-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-11-04'],
        ['titre' => 'APDP Bénin, Autorité de protection des données à caractère personnel', 'url' => 'https://service.apdp.bj/', 'date' => '2026-11-04'],
    ],

    'liens' => [
        'services'    => ['landing-page-haute-conversion', 'site-vitrine-professionnel', 'site-e-commerce', 'referencement-naturel-seo', 'integration-whatsapp', 'agents-ia-chatbot-whatsapp'],
        'comparatifs' => [],
    ],
];
