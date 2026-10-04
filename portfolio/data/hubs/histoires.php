<?php
// ============================================================
// data/hubs/histoires.php · Hub /histoires/ (vague 1A).
// Le gabarit registre-hub.php affiche au-dessus des sections une carte par
// histoire publiée (champ « liste ») ; les sections présentent la méthode
// d'écriture, le tableau des sept histoires externes, les familles de leçons,
// la lecture par une PME, la checklist transversale et la place des futures
// histoires de projets réels. Faits de Richard lus dans faits.php.
// Sources consultées le 04/10/2026 (voir « sources »).
// ============================================================
declare(strict_types=1);

$plus = static fn(string $cle): string => 'plus de ' . rtrim((string) fait($cle), '+');

return [
    'titre'   => 'Histoires d\'entreprises face au numérique : apprendre des échecs des autres avant d\'investir',
    'liste'   => 'histoire',
    'title'   => 'Histoires de transformation numérique | Richard SALANON',
    'meta'    => 'Sept histoires vraies, de Knight Capital à Air Canada : faits sourcés et datés, six familles de leçons et une checklist pour les PME d\'Afrique et d\'Europe.',
    'en_bref' => 'Ces histoires racontent, à partir de sources publiques datées, comment sept entreprises qui ne sont pas des clients de Richard SALANON (Knight Capital, Thomas Cook, TSB, Hertz, Maersk, British Airways et Air Canada) ont vécu une mise en production ratée, une migration bloquée, une attaque, un piratage, un litige ou un virage pris trop tard. Chacune isole un mécanisme, puis le traduit en décisions concrètes pour une PME de Cotonou, d\'Abidjan, de Dakar, de Lomé, de Douala ou de Lyon. Cette page les résume dans un tableau, dégage six familles de leçons qui les traversent et propose une liste de contrôle commune.',
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'faits_hero' => [
        ['l' => 'Histoires publiées', 'v' => '7 entreprises, aucune cliente de Richard'],
        ['l' => 'Période couverte', 'v' => 'De 2003 à 2024'],
        ['l' => 'Issues', 'v' => '6 échecs, 1 bilan contrasté'],
        ['l' => 'Sources privilégiées', 'v' => 'Décisions, régulateurs, rapports officiels'],
    ],
    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'À quoi servent des histoires d\'entreprises qui ne sont pas des clients ?',
            'paragraphes' => [
                'Une PME n\'a pas les moyens de se tromper deux fois sur le même projet numérique. Un site refait pour rien, une migration qui bloque la facturation pendant un mois, un fichier clients perdu faute de sauvegarde : pour une entreprise de vingt personnes, chacune de ces erreurs peut coûter une année de marge. Or les mêmes erreurs ont déjà été commises, à très grande échelle, par des groupes qui disposaient d\'équipes informatiques entières, de cabinets de conseil et de budgets considérables. Leurs échecs ont été documentés par des tribunaux, des régulateurs et des enquêtes publiques. Il serait dommage de ne pas s\'en servir.',
                'Ces histoires existent pour cela : apprendre des échecs et des virages des autres avant d\'investir son propre argent. Elles ne cherchent pas à impressionner par les montants, qui n\'ont rien de commun avec ceux d\'une PME. Elles cherchent le mécanisme : la décision qui a été prise, le contrôle qui manquait, le signal qui a été ignoré, et la parade qui aurait coûté peu au bon moment. Ce mécanisme, lui, se retrouve à toutes les tailles. Un courtier new-yorkais et un commerçant de Cotonou peuvent oublier de vérifier une mise à jour de la même façon.',
                'Elles servent aussi à décider dans quel ordre agir. Un dirigeant qui lit l\'histoire de TSB comprend pourquoi une bascule de logiciel se prépare par étapes ; celui qui lit l\'histoire de Maersk comprend pourquoi une sauvegarde qui n\'a jamais été restaurée ne compte pas. Chaque histoire se termine par une liste de contrôle et par les questions à poser avant de signer un devis, de lancer un chatbot ou de changer d\'outil de gestion. L\'objectif est modeste et concret : qu\'après la lecture, une décision de votre entreprise soit prise différemment.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment chaque histoire est-elle écrite et vérifiée ?',
            'intro' => 'Raconter l\'échec d\'une entreprise réelle impose des règles strictes. Les mêmes s\'appliquent aux sept histoires publiées et à toutes celles qui suivront ; elles permettent au lecteur de distinguer à chaque ligne ce qui est prouvé, ce qui est allégué et ce qui relève de l\'analyse.',
            'items' => [
                ['titre' => 'Des faits sourcés et datés, phrase par phrase', 'texte' => 'Chaque chiffre est donné avec sa date et le nom de sa source dans la phrase même : « selon l\'ordonnance de la SEC du 16 octobre 2013 », « selon le National Audit Office en mars 2020 ». La liste complète des sources, avec leurs liens et la date de consultation, figure en bas de chaque page. Une date ou un montant introuvable dans une source fiable n\'est pas publié, même s\'il circule ailleurs.'],
                ['titre' => 'Les sources primaires d\'abord', 'texte' => 'Décisions de justice, avis de sanction des régulateurs, rapports d\'enquête parlementaire ou administrative, documents déposés par les entreprises elles-mêmes : ces pièces passent avant la presse. Les grands titres de presse servent à confirmer, à dater ou à rapporter une déclaration publique, jamais à remplacer un document officiel quand il existe.'],
                ['titre' => 'Un encadré de vigilance quand un point est contesté', 'texte' => 'Une plainte n\'est pas un jugement, un témoignage anonyme n\'est pas un rapport officiel, et une attribution d\'attaque peut être démentie. Quand un fait repose sur les allégations d\'une seule partie, varie selon les sources ou reste débattu, un encadré le signale explicitement : ce qui est établi d\'un côté, ce qui reste discuté de l\'autre.'],
                ['titre' => 'La mention « n\'est pas un client »', 'texte' => 'En tête de chaque histoire externe, le gabarit affiche « Cette entreprise n\'est pas un client : histoire publique, faits sourcés ». Richard SALANON n\'a travaillé pour aucune des sept entreprises racontées ; il ne prétend ni connaître leurs coulisses, ni avoir mieux fait à leur place. Les histoires de ses propres projets suivent une autre règle, décrite plus bas.'],
                ['titre' => 'Jamais de moquerie', 'texte' => 'Derrière chaque incident, il y a des équipes qui ont travaillé sous pression, souvent avec des moyens que peu de PME auront jamais. Le ton reste factuel : ni sensationnalisme, ni jugement sur les personnes. Les erreurs racontées sont des erreurs d\'organisation que n\'importe quelle entreprise peut commettre, et c\'est précisément ce qui les rend utiles.'],
                ['titre' => 'Aucune citation inventée, aucune intention prêtée', 'texte' => 'Une citation n\'est reproduite que si elle figure dans une source citée, et elle reste courte. Les motivations des dirigeants ne sont pas devinées : quand une source rapporte une décision sans l\'expliquer, l\'histoire le dit, plutôt que de combler le vide par une hypothèse présentée comme un fait.'],
                ['titre' => 'Une traduction pour PME, sans chiffre inventé', 'texte' => 'La seconde moitié de chaque histoire transpose la leçon à une PME d\'Afrique francophone ou d\'Europe : signaux d\'alerte, décisions à prendre, comparaison entre agir à temps et agir trop tard. Cette partie relève de l\'analyse et le dit ; elle ne contient aucun coût, aucun pourcentage ni aucun délai qui ne viendrait pas d\'une source nommée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que racontent les sept histoires publiées, en un coup d\'œil ?',
            'legende' => 'Les sept histoires externes publiées au 4 octobre 2026, dans l\'ordre chronologique de leur période ; aucune de ces entreprises n\'est un client de Richard SALANON',
            'entetes' => ['Entreprise', 'Secteur', 'Période', 'Issue', 'Leçon en une ligne', 'Lire'],
            'lignes'  => [
                ['Knight Capital', 'Courtage et tenue de marché en actions, États-Unis', '2003 à 2013', 'Échec', 'Une mise en production se vérifie machine par machine, selon une procédure écrite, avec un moyen d\'arrêt immédiat.', '<a href="/histoires/knight-capital">Le courtier ruiné en 45 minutes</a>'],
                ['Thomas Cook', 'Voyagiste, agences de voyages et compagnie aérienne', '2007 à 2019', 'Échec', 'Une transformation numérique se finance tant que le bilan le permet, pas quand la dette l\'interdit.', '<a href="/histoires/thomas-cook">La dette avant le numérique</a>'],
                ['TSB', 'Banque de détail au Royaume-Uni', '2015 à 2023', 'Échec', 'Une migration se fait par étapes, après une répétition en conditions réelles, avec un chemin de retour.', '<a href="/histoires/tsb-migration">Tous les clients basculés en un week-end</a>'],
                ['Hertz', 'Location de véhicules', '2016 à 2021', 'Échec', 'Une refonte se cadre par écrit, se découpe en livraisons vérifiables et laisse le code au client.', '<a href="/histoires/hertz-accenture">La refonte jamais mise en ligne</a>'],
                ['Maersk', 'Transport maritime et terminaux portuaires', '2017 à 2018', 'Bilan contrasté', 'Une copie hors ligne, déjà restaurée une fois, doit exister par décision et non par chance.', '<a href="/histoires/maersk-notpetya">Sauvé par un serveur resté hors ligne</a>'],
                ['British Airways', 'Transport aérien, réservation et paiement en ligne', '2018 à 2021', 'Échec', 'La page où l\'on paie n\'est sûre que si l\'on sait quels scripts s\'y exécutent et quand l\'un d\'eux change.', '<a href="/histoires/british-airways-piratage">La page de paiement non surveillée</a>'],
                ['Air Canada', 'Transport aérien, service client en ligne', '2022 à 2024', 'Échec', 'Ce que dit un chatbot engage l\'entreprise qui l\'a mis en ligne.', '<a href="/histoires/air-canada-chatbot">L\'entreprise répond de son chatbot</a>'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres donnent la mesure de ces sept cas ?',
            'items' => [
                ['valeur' => 'Plus de 460 M$', 'libelle' => 'Perte subie par Knight Capital après environ 45 minutes d\'ordres incontrôlés le 1er août 2012, selon le communiqué de la SEC du 16 octobre 2013', 'source' => 'SEC, communiqué 2013-222', 'url' => 'https://www.sec.gov/news/press-release/2013-222'],
                ['valeur' => 'Au moins 156 M£', 'libelle' => 'Coût pour l\'État britannique de la faillite de Thomas Cook du 23 septembre 2019, rapatriement compris, estimé le 19 mars 2020', 'source' => 'National Audit Office', 'url' => 'https://www.nao.org.uk/press-releases/investigation-into-governments-response-to-the-collapse-of-thomas-cook/'],
                ['valeur' => '48,65 M£', 'libelle' => 'Amendes cumulées de la FCA (29,75 M£) et de la PRA (18,9 M£) infligées à TSB le 20 décembre 2022 pour la migration d\'avril 2018', 'source' => 'FCA, communiqué du 20 décembre 2022', 'url' => 'https://www.fca.org.uk/news/press-releases/tsb-fined-48m-operational-resilience-failings'],
                ['valeur' => '32 M$', 'libelle' => 'Honoraires que Hertz affirmait, dans sa plainte du 19 avril 2019, avoir versés à Accenture pour un site jamais mis en ligne ; montant contesté', 'source' => 'The Register, 23 avril 2019', 'url' => 'https://www.theregister.com/2019/04/23/hertz_accenture_lawsuit'],
                ['valeur' => '250 à 300 M$', 'libelle' => 'Coût de l\'attaque NotPetya de juin 2017 annoncé par Maersk avec ses résultats du troisième trimestre, le 7 novembre 2017', 'source' => 'Logistics Manager, 7 novembre 2017', 'url' => 'https://www.logisticsmanager.com/cyber-attack-costs-maersk-250m/'],
                ['valeur' => '20 M£', 'libelle' => 'Amende définitive infligée à British Airways le 16 octobre 2020 pour le piratage de 2018, qui a touché environ 429 612 personnes', 'source' => 'ICO, avis de sanction du 16 octobre 2020', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
                ['valeur' => '812,02 $ CA', 'libelle' => 'Somme qu\'Air Canada a été condamnée à payer le 14 février 2024 pour une réponse erronée de son chatbot, intérêts et frais compris', 'source' => 'Civil Resolution Tribunal, 2024 BCCRT 149, rapporté par Business Law Today', 'url' => 'https://businesslawtoday.org/2024/02/bc-tribunal-confirms-companies-remain-liable-for-information-provided-by-ai-chatbot/'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ces montants ne se comparent-ils pas entre eux ?',
            'texte' => 'Ces sept chiffres ne mesurent pas la même chose. Celui de Knight Capital est une perte constatée par le régulateur ; celui de Maersk, une fourchette annoncée par l\'entreprise ; ceux de TSB et de British Airways, des amendes, qui s\'ajoutent aux indemnités et aux coûts de reprise sans les résumer. Les 32 millions de Hertz ne sont qu\'une <strong>allégation</strong> de la plainte : Accenture contestait, et l\'affaire s\'est close en août 2021 par un accord au montant non public. Le coût de Thomas Cook est celui supporté par l\'État britannique. Les 812,02 dollars d\'Air Canada valent surtout par le principe posé. Lisez chaque chiffre dans son histoire, avec sa nature et sa date.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles grandes familles de leçons traversent ces sept cas ?',
            'intro' => 'Lues ensemble, les sept histoires ne racontent pas sept problèmes différents. Elles reviennent à six mécanismes, dont plusieurs se combinent dans un même incident. Ce sont ces mécanismes, et non les secteurs, qui permettent à une PME de reconnaître son propre risque.',
            'items' => [
                ['titre' => 'La dépendance à un prestataire ou à un logiciel', 'texte' => 'Hertz avait confié la refonte de son site et de ses applications à Accenture et s\'est retrouvée, en mai 2018, sans rien de mis en ligne. Chez Maersk, NotPetya est entré par un seul ordinateur du bureau ukrainien, équipé d\'un logiciel local de déclaration fiscale. Chez British Airways, l\'attaquant a utilisé l\'identifiant d\'un sous-traitant. Un prestataire ou un logiciel tiers fait partie de votre système : vous restez responsable de ce qu\'il fait, de ce qu\'il laisse entrer et de ce que vous pouvez récupérer si la relation s\'arrête. Lire <a href="/histoires/hertz-accenture">Hertz</a> et <a href="/histoires/maersk-notpetya">Maersk</a>.'],
                ['titre' => 'La migration ou la mise en production sans répétition générale', 'texte' => 'TSB a basculé l\'essentiel de ses systèmes et de ses clients sur une nouvelle plateforme le week-end du 20 au 22 avril 2018, sans possibilité de revenir en arrière, et n\'a retrouvé un fonctionnement normal qu\'en décembre 2018 selon la FCA. Six ans plus tôt, Knight Capital avait déployé une nouvelle version sur huit serveurs en en oubliant un. Dans les deux cas, la bascule reposait sur une date plus que sur une preuve que tout fonctionnait. Lire <a href="/histoires/tsb-migration">TSB</a> et <a href="/histoires/knight-capital">Knight Capital</a>.'],
                ['titre' => 'Les sauvegardes hors ligne', 'texte' => 'Selon l\'enquête d\'Andy Greenberg publiée par Wired en août 2018, Maersk n\'a pu reconstruire son réseau que grâce à un contrôleur de domaine resté déconnecté au Ghana à cause d\'une coupure de courant. La copie qui a sauvé le groupe n\'existait pas par décision, mais par accident. Cybermalveillance.gouv.fr recommande précisément de déconnecter le support de sauvegarde du réseau quand on ne l\'utilise pas, et de tester régulièrement la restauration. Une sauvegarde jamais restaurée reste une hypothèse. Lire <a href="/histoires/maersk-notpetya">Maersk et NotPetya</a>.'],
                ['titre' => 'Le chatbot qui engage l\'entreprise', 'texte' => 'En novembre 2022, l\'assistant du site d\'Air Canada a indiqué à un passager qu\'il pourrait demander un tarif de deuil après son voyage, ce que la politique de la compagnie excluait. Le 14 février 2024, le Civil Resolution Tribunal de Colombie-Britannique a jugé que le chatbot faisait partie du site et que la compagnie répondait de toute l\'information qui s\'y trouvait. Un assistant sur un site ou sur WhatsApp parle au nom de l\'entreprise : ce qu\'il promet peut lui être opposé. Lire <a href="/histoires/air-canada-chatbot">Air Canada</a>.'],
                ['titre' => 'La sécurité des paiements en ligne', 'texte' => 'Selon l\'avis de sanction de l\'ICO du 16 octobre 2020, un attaquant a modifié un fichier JavaScript du site de British Airways pour envoyer vers son propre domaine les données de cartes saisies par les clients, entre le 22 juin et le 5 septembre 2018. Le site encaissait normalement pendant ce temps. La leçon vaut pour toute boutique : confier la saisie du paiement à une passerelle spécialisée, savoir quels scripts tournent sur ses pages et être alerté quand l\'un d\'eux change. Lire <a href="/histoires/british-airways-piratage">British Airways</a>.'],
                ['titre' => 'Le changement de modèle engagé trop tard', 'texte' => 'Thomas Cook n\'ignorait pas Internet : selon Reuters le 22 mars 2019, 64 % de ses réservations britanniques de 2018 avaient été faites en ligne, et le groupe fermait encore des agences. Mais une dette héritée de la fusion de 2007 l\'empêchait d\'investir au rythme du marché, et le groupe a été placé en liquidation le 23 septembre 2019. Le virage numérique se finance avec la marge d\'aujourd\'hui ; attendre que les frais fixes l\'imposent revient souvent à ne plus pouvoir le payer. Lire <a href="/histoires/thomas-cook">Thomas Cook</a>.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels signaux d\'alerte chercher dans votre propre entreprise ?',
            'legende' => 'Correspondance entre les familles de leçons, les histoires qui les illustrent et les signaux observables dans une PME ; à adapter à votre activité',
            'entetes' => ['Famille de leçon', 'Histoire de référence', 'Signal d\'alerte dans une PME', 'Première décision à prendre'],
            'lignes'  => [
                ['Dépendance à un prestataire', '<a href="/histoires/hertz-accenture">Hertz</a>', 'Le nom de domaine, l\'hébergement ou le code sont au nom du prestataire ; personne en interne ne sait où ils se trouvent.', 'Faire transférer les comptes au nom de l\'entreprise et obtenir une copie du code et des accès.'],
                ['Dépendance à un logiciel tiers', '<a href="/histoires/maersk-notpetya">Maersk</a>', 'Un logiciel installé « pour un seul service » sur un poste relié à tout le réseau, jamais inventorié.', 'Dresser la liste des logiciels installés, de leurs mises à jour et des postes qui en ont vraiment besoin.'],
                ['Migration sans répétition', '<a href="/histoires/tsb-migration">TSB</a>', 'Une date de bascule annoncée avant que les données aient été reprises une seule fois sur une copie de test.', 'Exiger une reprise à blanc chiffrée et un critère écrit de retour en arrière.'],
                ['Mise en production sans contrôle', '<a href="/histoires/knight-capital">Knight Capital</a>', 'Des mises à jour du site ou de l\'application faites à la main, sans liste de vérification ni seconde personne.', 'Écrire la procédure de mise en ligne et prévoir un moyen de désactiver une fonction en urgence.'],
                ['Sauvegardes hors ligne', '<a href="/histoires/maersk-notpetya">Maersk</a>', 'Une sauvegarde sur un disque toujours branché, ou dans le même compte que les données, jamais restaurée.', 'Garder une copie déconnectée et organiser une restauration d\'essai datée.'],
                ['Chatbot qui engage', '<a href="/histoires/air-canada-chatbot">Air Canada</a>', 'Un assistant WhatsApp ou web qui répond sur les prix, les remboursements ou les délais sans source écrite.', 'Limiter son périmètre, relier ses réponses à des pages validées et prévoir la reprise par un humain.'],
                ['Sécurité des paiements', '<a href="/histoires/british-airways-piratage">British Airways</a>', 'Des numéros de carte saisis dans un formulaire du site, des extensions ajoutées sans suivi, des comptes administrateurs sans second facteur.', 'Déléguer la saisie à la page d\'un agrégateur et activer la double authentification partout.'],
                ['Virage trop tardif', '<a href="/histoires/thomas-cook">Thomas Cook</a>', 'Des clients qui demandent à réserver ou à payer en ligne, et une réponse renvoyée à « l\'année prochaine » depuis plusieurs années.', 'Chiffrer un premier lot numérique finançable sur la trésorerie actuelle.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment lire une histoire quand on dirige une PME à Cotonou, Abidjan, Dakar, Lomé, Douala ou Lyon ?',
            'paragraphes' => [
                'Commencez par oublier les montants. Une banque britannique, un armateur danois ou un courtier américain n\'ont ni vos volumes, ni vos clients, ni vos contraintes. Ce qui se transpose, c\'est l\'enchaînement : une décision, un contrôle absent, un signal ignoré, une conséquence. Pour chaque histoire, posez-vous une seule question : qu\'est-ce qui, chez nous, joue le rôle du serveur oublié de Knight Capital, de la bascule unique de TSB ou du disque resté au Ghana ? La réponse est souvent plus banale qu\'on ne le croit : un ordinateur partagé, un compte administrateur commun, un fichier Excel unique.',
                'Ramenez ensuite la leçon à votre échelle. Pour une PME, une « migration » est le passage d\'un cahier à un logiciel de facturation, ou d\'un vieux site à un nouveau ; une « mise en production » est la mise à jour d\'une extension de la boutique ; un « prestataire » est le développeur indépendant qui a gardé les accès à l\'hébergement. Les mêmes précautions s\'appliquent, en plus simple et en moins cher : une liste écrite, une copie de test, une seconde personne qui vérifie, une sauvegarde débranchée. Leur coût se compte en heures, celui de leur absence en semaines d\'activité perturbée.',
                'Tenez compte de votre contexte. À Cotonou, à Lomé ou à Abidjan, les clients paient souvent par mobile money et écrivent sur WhatsApp ; la sécurité du paiement et la fiabilité d\'un assistant automatique y pèsent autant qu\'en Europe, sur d\'autres canaux. À Dakar ou à Douala, les coupures de courant et de connexion rendent la question des sauvegardes et du fonctionnement dégradé très concrète. À Lyon, le cadre européen de protection des données rend l\'incident de paiement plus coûteux encore à expliquer. Le mécanisme reste le même ; ce qui change, c\'est l\'endroit où il risque de se produire.',
                'Enfin, lisez l\'encadré de vigilance de chaque histoire avant d\'en tirer une conclusion définitive. Les faits établis par un régulateur ou un tribunal ne pèsent pas autant qu\'une allégation dans une plainte ou qu\'un témoignage recueilli par la presse. Une bonne décision repose sur ce qui est solide ; le reste sert à se poser des questions, pas à accuser qui que ce soit.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble cette lecture dans quelques secteurs ?',
            'items' => [
                ['secteur' => 'Boutique en ligne à Cotonou, situation type', 'probleme' => 'Les commandes arrivent par WhatsApp et par le site, l\'assistant automatique répond sur les prix et les délais, les clients paient par mobile money ou par carte.', 'solution' => 'Deux histoires parlent directement à ce commerçant. Celle de British Airways invite à laisser la saisie du paiement à la page d\'un agrégateur et à surveiller les scripts du site ; celle d\'Air Canada, à limiter ce que l\'assistant peut promettre et à relier ses réponses à des conditions écrites. Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif des agrégateurs</a> aide à choisir la passerelle.'],
                ['secteur' => 'Distributeur à Abidjan, situation type', 'probleme' => 'L\'entreprise veut quitter ses tableurs pour un logiciel de gestion qui tienne le stock, la facturation et la comptabilité.', 'solution' => 'L\'histoire de TSB rappelle de reprendre les données une première fois sur une copie, de basculer par étapes et de garder l\'ancien outil lisible quelques semaines. Celle de Hertz, de cadrer par écrit et de payer des livraisons acceptées. Le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> pose les critères du choix.'],
                ['secteur' => 'École privée à Dakar, situation type', 'probleme' => 'Inscriptions, notes et paiements des familles sont tenus sur un seul ordinateur du secrétariat, sauvegardé de temps en temps sur une clé.', 'solution' => 'L\'histoire de Maersk montre ce que devient une organisation dont toutes les données sont joignables par le même réseau. Une copie débranchée, une seconde copie hors des locaux et une restauration d\'essai avant chaque rentrée coûtent quelques heures par trimestre.'],
                ['secteur' => 'Agence de voyages ou hôtel à Lomé, situation type', 'probleme' => 'Les réservations se prennent encore au téléphone et au comptoir, alors que les clients comparent et réservent en ligne.', 'solution' => 'L\'histoire de Thomas Cook invite à engager le virage tant que la trésorerie le permet : un premier lot de réservation en ligne, mesuré, puis étendu. Celle de British Airways rappelle qu\'une page de réservation qui encaisse doit être surveillée dès le premier jour.'],
                ['secteur' => 'Société logistique ou cabinet à Douala, situation type', 'probleme' => 'Un logiciel métier fourni par un éditeur tiers est installé sur plusieurs postes et se met à jour seul ; les comptes administrateurs sont partagés.', 'solution' => 'Maersk montre qu\'une mise à jour piégée d\'un logiciel tiers peut suffire à tout arrêter ; Knight Capital, qu\'une mise à jour incomplète peut produire des effets inattendus. Inventorier les logiciels, cloisonner les postes et nommer les comptes réduit l\'exposition.'],
                ['secteur' => 'PME de services à Lyon, situation type', 'probleme' => 'La direction confie la refonte du site et de l\'espace client à une agence, sur la base d\'une présentation convaincante et d\'un forfait global.', 'solution' => 'L\'histoire de Hertz conseille de découper le projet en livraisons testables, de garder l\'accès au code à chaque étape et de payer ce qui est accepté. Celle de TSB, de prévoir comment revenir à l\'ancien site si la mise en ligne échoue.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Agir à temps ou agir après l\'incident : qu\'est-ce qui change pour une PME ?',
            'options'  => ['Agir à temps', 'Agir après l\'incident'],
            'criteres' => [
                ['critere' => 'Sauvegardes', 'valeurs' => ['Quelques heures pour organiser une copie débranchée et une restauration d\'essai', 'Reconstruire les données à partir des factures papier, des messages et de la mémoire des équipes, quand c\'est possible']],
                ['critere' => 'Changement de logiciel', 'valeurs' => ['Une reprise à blanc et une bascule par étapes, préparées pendant que l\'ancien outil fonctionne', 'Facturation ou stock bloqués pendant que l\'on corrige en production, clients qui attendent']],
                ['critere' => 'Chatbot ou assistant', 'valeurs' => ['Un périmètre écrit, des réponses tirées de pages validées, une reprise humaine prévue', 'Une promesse à honorer, un client à apaiser, un assistant à couper dans l\'urgence']],
                ['critere' => 'Paiement en ligne', 'valeurs' => ['Une passerelle spécialisée, des scripts inventoriés, la double authentification activée', 'Clients à prévenir, cartes à faire opposer, enquête à mener, confiance à reconstruire']],
                ['critere' => 'Relation avec un prestataire', 'valeurs' => ['Un contrat qui découpe, des accès au nom de l\'entreprise, du code remis à chaque étape', 'Un projet à reprendre avec un autre prestataire, parfois depuis le début']],
                ['critere' => 'Virage numérique', 'valeurs' => ['Un premier lot financé sur la marge, ajusté avec les retours des clients', 'Un investissement plus lourd, décidé sous la pression, quand la trésorerie est déjà tendue']],
            ],
            'verdict'  => 'Dans les sept histoires, la parade qui aurait évité le pire tenait en quelques décisions d\'organisation prises avant l\'incident ; aucune ne demandait de technologie rare, toutes demandaient d\'y penser au bon moment.',
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelle liste de contrôle transversale tirer des sept histoires ?',
            'items' => [
                'Le nom de domaine, l\'hébergement, les comptes d\'outils et les clés d\'API sont au nom de l\'entreprise, et la liste des accès est écrite.',
                'Le code source et la documentation des développements sur mesure sont remis à chaque livraison, pas seulement à la fin.',
                'Chaque projet est découpé en livraisons que l\'entreprise peut tester elle-même avant de payer l\'étape suivante.',
                'La liste des logiciels installés, de leurs éditeurs et de leurs mises à jour existe, et chaque poste n\'a que ceux dont il a besoin.',
                'Les comptes administrateurs sont nominatifs et protégés par une double authentification, y compris ceux des prestataires.',
                'Une copie des données est conservée hors ligne, une autre hors des locaux, et une restauration d\'essai a été faite et datée.',
                'Avant toute migration, les données ont été reprises une première fois sur une copie de test et comparées à l\'ancien système.',
                'La bascule se fait par étapes, avec un critère écrit qui déclenche le retour à l\'ancien outil.',
                'Chaque mise en ligne suit une procédure écrite, vérifiée par une seconde personne, avec un moyen de désactiver une fonction en urgence.',
                'Le code et les fonctions abandonnés sont supprimés, pas seulement désactivés.',
                'L\'assistant automatique a un périmètre écrit, s\'appuie sur des pages validées et passe la main à un humain sur les sujets qui engagent.',
                'La saisie des cartes et des paiements mobiles se fait sur la page d\'une passerelle spécialisée, et tout changement de script sur les pages de paiement déclenche une alerte.',
                'Une personne est chargée de lire les alertes automatiques et de les traiter, avec un délai défini.',
                'Le budget numérique de l\'année est financé sur la marge actuelle, avec un premier lot mesurable, plutôt que reporté à une année plus favorable.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle idée retenir si l\'on ne lit qu\'une seule chose ?',
            'texte' => 'Dans aucune des sept histoires le problème ne tenait d\'abord à une technologie introuvable ; chacune renvoie à une décision d\'organisation qui n\'avait pas été prise à temps : vérifier, répéter, garder une copie, encadrer, surveiller, financer. Ces décisions coûtent peu tant que rien n\'est arrivé. C\'est donc avant l\'incident, et non après, qu\'une PME tire le meilleur parti de ces histoires.',
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelles limites garder en tête en lisant ces histoires ?',
            'texte' => 'Ces histoires sont écrites après coup, à partir de documents publics. Elles bénéficient de ce que les équipes ne savaient pas au moment de décider, et ne voient pas ce qui n\'a jamais été publié : réunions internes, arbitrages budgétaires, contraintes réglementaires propres à chaque pays. Elles ne constituent ni un avis juridique, ni un audit de votre entreprise. Une leçon qui paraît évidente sur le papier peut se heurter chez vous à une contrainte réelle ; c\'est pourquoi chaque histoire se termine par des questions à poser, et non par une solution unique.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle place auront les histoires des projets réels de Richard ?',
            'paragraphes' => [
                'Les sept histoires publiées racontent des entreprises que Richard SALANON ne connaît que par les sources publiques. D\'autres histoires suivront, d\'une nature différente : celles de projets qu\'il a lui-même réalisés. Elles raconteront le point de départ du client, les choix faits en cours de route, ce qui a été livré et ce qui reste à améliorer. En attendant, les projets déjà présentés se trouvent sur la page des <a href="/realisations/">réalisations</a>.',
                'Ces histoires de projets réels suivront les mêmes règles que les histoires externes, avec une exigence de plus : la transparence sur la relation. Une page dira toujours s\'il s\'agit d\'un client direct, d\'un produit de Richard ou d\'un projet réalisé en sous-traitance. OBA TV, GC Pro Consulting et KossKoss Select sont des clients directs. Laura Cosmetics, IK Fashion House, Afro Joy\'ce, Impulse Finance, INOVIS Côte d\'Ivoire et AT Consulting International ont été réalisés en sous-traitance pour l\'agence Digital Développement, et leur page l\'indiquera en tête, sous la forme « Réalisé en sous-traitance pour Digital Développement ». Wapy, enfin, est le produit de Richard.',
                'Aucun résultat ne sera publié s\'il n\'a pas été fourni et vérifié : pas de pourcentage de croissance estimé, pas de témoignage reconstitué, pas d\'avis client rédigé à la place du client. Quand un chiffre manque, l\'histoire dira ce qui a été fait sans prétendre mesurer ce qui ne l\'a pas été. Un client qui ne souhaite pas être présenté ne le sera pas.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard aide-t-il une PME à ne pas répéter ces erreurs ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il exerce depuis ' . $plus('experience_ans') . ' ans dans le développement et le numérique, compte ' . $plus('projets_livres') . ' projets livrés, ' . $plus('clients') . ' clients et ' . $plus('personnes_formees') . ' personnes formées, et a travaillé, sur place ou à distance, pour des organisations dans ' . count(fait('pays_travailles')) . ' pays. Il n\'a travaillé pour aucune des sept entreprises racontées ici. Ce qu\'il apporte, c\'est l\'application de leurs leçons à des projets de PME : la même attention au cadrage, aux accès, aux sauvegardes et aux mises en ligne, à une échelle où ces précautions restent simples et peu coûteuses.',
                'Concrètement, chaque famille de leçons correspond à un service. L\'<a href="/services/audit-etude-de-projet">audit et étude de projet</a> cadre un projet par écrit et le découpe en livraisons, comme l\'histoire de Hertz le recommande. La <a href="/services/refonte-migration-de-site">refonte et migration de site</a> et l\'<a href="/services/integration-odoo">intégration Odoo</a> ou l\'<a href="/services/integration-dolibarr">intégration Dolibarr</a> se préparent par reprise à blanc et bascule progressive. La <a href="/services/maintenance-support">maintenance et le support</a> couvrent les sauvegardes testées et les mises à jour contrôlées. Les <a href="/services/agents-ia-chatbot-whatsapp">agents IA et chatbots WhatsApp</a> sont livrés avec un périmètre écrit et une reprise humaine. Le <a href="/services/site-e-commerce">site e-commerce</a> confie la saisie du paiement à un agrégateur.',
                'Quand la question est d\'abord stratégique, comme chez Thomas Cook, le <a href="/services/consultant-digitalisation">consultant en digitalisation</a> aide à décider quel premier lot financer et dans quel ordre avancer. La méthode reste la même pour tous les services : une réponse sous ' . fait('delai_reponse') . ', un cadrage et un devis gratuits, des comptes ouverts au nom de l\'entreprise, une formation des équipes à la livraison. Aucun résultat n\'est promis à l\'avance ; les objectifs se fixent sur ce qui se mesure et dépend du travail fourni. Le parcours détaillé figure sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre entreprise est-elle exposée à l\'une de ces six erreurs ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels et le projet que vous préparez : site, logiciel de gestion, assistant WhatsApp, boutique en ligne ou migration. Vous recevez une réponse sous ' . fait('delai_reponse') . ', puis un cadrage et un devis gratuits qui disent franchement quels risques méritent d\'être traités en premier, et lesquels peuvent attendre.',
            'bouton' => ['url' => '/contact', 'texte' => 'Décrire mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Les entreprises racontées sont-elles des clients de Richard SALANON ?', 'r' => 'Non. Knight Capital, Thomas Cook, TSB, Hertz, Maersk, British Airways et Air Canada ne sont pas des clients, et Richard n\'a travaillé pour aucune d\'elles. Leurs histoires sont reconstituées à partir de sources publiques : décisions de justice, avis de sanction des régulateurs, rapports officiels, documents déposés par les entreprises et grands titres de presse. Chaque page externe l\'indique en tête.'],
        ['q' => 'Pourquoi raconter surtout des échecs ?', 'r' => 'Parce que les échecs sont mieux documentés que les réussites : un tribunal, un régulateur ou une commission d\'enquête publie le détail de ce qui n\'a pas fonctionné, avec des dates et des montants vérifiables. Une réussite est souvent racontée par l\'entreprise elle-même, sans pièce indépendante. Des virages réussis, sourcés avec la même exigence, rejoindront la série lorsque des sources indépendantes le permettront.'],
        ['q' => 'D\'où viennent les chiffres cités ?', 'r' => 'Chaque chiffre vient d\'une source nommée dans la phrase, avec sa date : ordonnance de la SEC pour Knight Capital, National Audit Office pour Thomas Cook, FCA et PRA pour TSB, plainte de Hertz pour les montants contestés, résultats publiés par Maersk, avis de sanction de l\'ICO pour British Airways, décision du Civil Resolution Tribunal pour Air Canada. La liste complète des sources de chaque histoire figure en bas de sa page.'],
        ['q' => 'Que signifie l\'encadré de vigilance ?', 'r' => 'Il sépare ce qui est établi de ce qui reste discuté. Un fait reconnu par un tribunal ou un régulateur n\'a pas la même solidité qu\'une allégation dans une plainte, un témoignage anonyme ou une attribution démentie. Dans l\'affaire Hertz, par exemple, les montants avancés par Hertz étaient contestés par Accenture, et l\'accord final n\'a pas été chiffré publiquement.'],
        ['q' => 'Ces leçons s\'appliquent-elles vraiment à une petite entreprise ?', 'r' => 'Le mécanisme, oui ; l\'échelle, non. Une PME ne migre pas une banque, mais elle change de logiciel de facturation ; elle n\'exploite pas des terminaux portuaires, mais elle peut perdre son seul ordinateur de gestion. Les précautions sont les mêmes, en plus simple : une copie de test, une seconde personne qui vérifie, une sauvegarde débranchée, un contrat qui découpe le projet.'],
        ['q' => 'Par quelle histoire commencer ?', 'r' => 'Par celle qui ressemble à votre prochain projet. Avant un changement de logiciel, lisez TSB ; avant une refonte confiée à une agence, Hertz ; avant d\'installer un assistant sur WhatsApp ou sur le site, Air Canada ; avant d\'ouvrir une boutique en ligne, British Airways. Si vous n\'avez aucun projet en cours, commencez par Maersk : la question des sauvegardes concerne toutes les entreprises.'],
        ['q' => 'Les histoires sont-elles mises à jour ?', 'r' => 'Oui. Chaque page affiche sa date de mise à jour et la date de consultation de ses sources. Si une procédure judiciaire évolue, si un régulateur publie un nouveau document ou si une source disparaît, l\'histoire est corrigée et la date changée. Un fait qui ne peut plus être vérifié est retiré plutôt que conservé sans preuve.'],
        ['q' => 'Y aura-t-il des histoires de projets réalisés par Richard ?', 'r' => 'Oui. Elles raconteront des projets réels, avec la mention de la relation : client direct, produit de Richard, ou projet réalisé en sous-traitance pour l\'agence Digital Développement, mention affichée en tête de page. Aucun résultat, témoignage ou chiffre n\'y sera publié sans avoir été fourni et vérifié. Les projets déjà présentés sont sur la page des réalisations.'],
        ['q' => 'Puis-je proposer une entreprise à raconter ?', 'r' => 'Oui, par la page contact. Une histoire n\'est écrite que si des sources publiques fiables et datées permettent de la documenter : décisions, rapports officiels, communications de l\'entreprise, presse de référence. Si les sources manquent ou se contredisent sans moyen de trancher, l\'entreprise n\'est pas racontée.'],
        ['q' => 'Richard peut-il vérifier si mon entreprise est exposée aux mêmes risques ?', 'r' => 'Oui. Le premier échange et le cadrage passent en revue les accès et les comptes, les sauvegardes, la procédure de mise en ligne, la dépendance aux prestataires, le paiement en ligne et l\'assistant automatique. Le cadrage et le devis sont gratuits ; ils disent ce qui mérite d\'être traité en premier, sans promettre de résultat. Un examen approfondi relève du service d\'audit et étude de projet.'],
    ],

    'sources' => [
        ['titre' => 'SEC, communiqué 2013-222 « SEC Charges Knight Capital With Violations of Market Access Rule », 16 octobre 2013', 'url' => 'https://www.sec.gov/news/press-release/2013-222', 'date' => '2026-10-04'],
        ['titre' => 'National Audit Office, enquête sur la réponse du gouvernement à la faillite de Thomas Cook, 19 mars 2020', 'url' => 'https://www.nao.org.uk/press-releases/investigation-into-governments-response-to-the-collapse-of-thomas-cook/', 'date' => '2026-10-04'],
        ['titre' => 'Reuters (via Yahoo News), Thomas Cook ferme 21 agences, 64 % des réservations britanniques de 2018 faites en ligne, 22 mars 2019', 'url' => 'https://www.yahoo.com/news/thomas-cook-shut-21-stores-101604843.html', 'date' => '2026-10-04'],
        ['titre' => 'FCA, communiqué « TSB fined £48.65m for operational resilience failings », 20 décembre 2022', 'url' => 'https://www.fca.org.uk/news/press-releases/tsb-fined-48m-operational-resilience-failings', 'date' => '2026-10-04'],
        ['titre' => 'The Register, « Accenture sued over website redesign so bad it Hertz », 23 avril 2019', 'url' => 'https://www.theregister.com/2019/04/23/hertz_accenture_lawsuit', 'date' => '2026-10-04'],
        ['titre' => 'Logistics Manager, « Cyber attack costs Maersk $250m », résultats du troisième trimestre 2017, 7 novembre 2017', 'url' => 'https://www.logisticsmanager.com/cyber-attack-costs-maersk-250m/', 'date' => '2026-10-04'],
        ['titre' => 'Wired, « The Untold Story of NotPetya », Andy Greenberg, août 2018, reprise intégrale par Portside', 'url' => 'https://portside.org/node/18008/printable/print', 'date' => '2026-10-04'],
        ['titre' => 'ICO, avis de sanction (Penalty Notice) adressé à British Airways, 16 octobre 2020', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf', 'date' => '2026-10-04'],
        ['titre' => 'Business Law Today (American Bar Association), « BC Tribunal Confirms Companies Remain Liable for Information Provided by AI Chatbot », février 2024', 'url' => 'https://businesslawtoday.org/2024/02/bc-tribunal-confirms-companies-remain-liable-for-information-provided-by-ai-chatbot/', 'date' => '2026-10-04'],
        ['titre' => 'Cybermalveillance.gouv.fr, « Pourquoi et comment bien gérer ses sauvegardes ? »', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['audit-etude-de-projet', 'refonte-migration-de-site', 'maintenance-support', 'agents-ia-chatbot-whatsapp', 'site-e-commerce', 'consultant-digitalisation'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
    ],
];
