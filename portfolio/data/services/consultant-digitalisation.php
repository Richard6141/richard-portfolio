<?php
// ============================================================
// data/services/consultant-digitalisation.php · Pilier service « Consultant
// en digitalisation » (vague 1A). Reprend les informations utiles de la page
// /consultant-digitalisation (livrables, déroulé, facturation à la mission,
// conflit d'intérêts) sans la copier ; honoraires sur devis, aucun tarif de
// conseil dans la fiche de faits. Chiffres externes relevés sur les pages
// officielles (France Num, Bpifrance, BCEAO, DataReportal, CNIL, CAI).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Consultant en digitalisation : décider quoi numériser, avec qui et pour quel budget',
    'title'   => 'Consultant en digitalisation en Afrique | Richard SALANON',
    'meta'    => 'Consultant en digitalisation : diagnostic, schéma directeur, choix d\'outils et de prestataires, cahier des charges, AMOA. Réponse sous 24 h, devis gratuit.',
    'en_bref' => 'Un consultant en digitalisation vous aide à décider avant de dépenser : diagnostic de vos processus, feuille de route chiffrée, choix des outils et des prestataires, cahier des charges, puis assistance à maîtrise d\'ouvrage pendant le projet si vous le souhaitez. La mission s\'adresse aux dirigeants de PME, d\'ONG, d\'écoles et de structures publiques d\'Afrique francophone, d\'Europe et du Canada. Une mission courte dure deux à trois semaines pour une PME de moins de vingt personnes. Les honoraires sont fixés sur devis, au forfait, après un premier entretien gratuit.',
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'Visibilité et conseil',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => '2 à 3 semaines pour une mission courte de PME, plus pour un groupe ou plusieurs sites'],
        ['l' => 'Pour qui', 'v' => 'Dirigeants de PME, ONG, écoles, cliniques et structures publiques, en Afrique et en Europe'],
        ['l' => 'Livrables', 'v' => 'Cartographie des flux, feuille de route chiffrée, cahier des charges, restitution aux décideurs'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que fait un consultant en digitalisation, et que ne fait-il pas ?',
            'paragraphes' => [
                'Un consultant en digitalisation intervient au moment où vous ne savez pas encore quoi construire, dans quel ordre ni pour quel budget. Son produit n\'est pas un logiciel : c\'est une décision documentée. Il observe comment l\'information circule réellement dans votre organisation, repère ce qui coûte du temps ou de l\'argent, compare les solutions possibles et vous remet un plan que vous pouvez exécuter, faire chiffrer ailleurs ou mettre de côté. Le bon résultat est parfois de ne rien acheter.',
                'Les missions couvertes sont précises : diagnostic de maturité numérique, schéma directeur numérique, choix d\'outils (ERP, CRM, caisse, plateforme d\'automatisation), sélection de prestataires, rédaction de cahier des charges, assistance à maîtrise d\'ouvrage pendant la réalisation, accompagnement de projet et formation des dirigeants. Chacune peut être commandée seule. Un dirigeant qui hésite entre trois devis n\'a pas besoin d\'un schéma directeur, et une direction générale qui prépare un plan sur trois ans n\'a pas besoin d\'une simple grille de comparaison.',
                'La mission s\'arrête là où commence l\'exécution. Dématérialiser des processus, paramétrer un ERP, automatiser des relances ou former les équipes à de nouveaux outils relève de la <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a>, la prestation de mise en œuvre. Cadrer un projet unique déjà identifié, un site, une application ou un outil métier, avec sa faisabilité, ses choix techniques et son budget, relève de l\'<a href="/services/audit-etude-de-projet">audit et étude de projet</a>. Le consultant travaille un cran au-dessus : il aide à choisir les projets avant qu\'on les cadre.',
                'Cette frontière a une conséquence pratique. Si votre décision est déjà prise et que vous savez exactement ce que vous voulez construire, une mission de conseil vous fera perdre du temps et de l\'argent : passez directement à la réalisation. Un consultant qui accepte une mission alors que tout est déjà tranché vend de la réassurance, pas de la valeur. Le premier entretien sert justement à vérifier si le conseil se justifie, et il arrive qu\'il se conclue par un simple « non, lancez-vous ».',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes voit-on qu\'il est temps de faire appel à un consultant ?',
            'intro' => 'Le besoin de conseil se manifeste rarement par une demande de « transformation numérique ». Il apparaît sous la forme de situations concrètes, que l\'on retrouve d\'un pays à l\'autre.',
            'items' => [
                ['titre' => 'Plusieurs devis impossibles à comparer', 'texte' => 'Trois prestataires proposent trois périmètres différents, à trois prix sans rapport, avec des mots qui ne veulent pas dire la même chose. Personne en interne ne peut arbitrer. Une mission courte traduit ces offres dans une grille commune et fait apparaître ce qui manque dans chacune.'],
                ['titre' => 'Un projet précédent a échoué', 'texte' => 'Un logiciel acheté puis abandonné, une refonte qui n\'a rien changé, une application que personne n\'ouvre. Avant de réinvestir, il faut comprendre la cause réelle, qui est le plus souvent organisationnelle : processus non décrits, utilisateurs non consultés, responsable interne absent.'],
                ['titre' => 'Tout paraît prioritaire', 'texte' => 'Site, ERP, automatisation, application mobile, intelligence artificielle : le budget ne couvre qu\'une partie des envies. Le conseil chiffre le gain attendu et l\'effort de chaque chantier pour que l\'arbitrage repose sur des ordres de grandeur plutôt que sur des convictions.'],
                ['titre' => 'Une échéance externe approche', 'texte' => 'Obligation de facture normalisée, exigence d\'un bailleur, audit d\'un partenaire, ouverture d\'un deuxième site, levée de fonds : la date ne se discute pas et le plan doit être prêt avant. Le consultant aide à séparer l\'indispensable, à tenir pour l\'échéance, de ce qui peut attendre.'],
                ['titre' => 'Une dépendance qui inquiète', 'texte' => 'Un prestataire unique détient les accès, le code et la connaissance du système ; il ne répond plus, ou ses prix montent. Un état des lieux indépendant établit ce qui vous appartient, ce qu\'il faut récupérer et comment changer de prestataire sans tout casser.'],
                ['titre' => 'Le dirigeant est devenu le goulot', 'texte' => 'Chaque validation, chaque chiffre et chaque relance passent par la même personne, souvent par WhatsApp. Le jour où elle s\'absente, l\'activité ralentit. C\'est le signe qu\'il faut repenser les flux d\'information avant de chercher un outil.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles missions de conseil peut-on confier, et que produit chacune ?',
            'legende' => 'Missions proposées par Richard SALANON, commandées seules ou enchaînées. Les durées sont indicatives pour une PME ; elles s\'allongent avec le nombre de services, de sites et de décideurs.',
            'entetes' => ['Mission', 'Question à laquelle elle répond', 'Ce que vous recevez', 'Durée indicative'],
            'lignes'  => [
                ['Diagnostic de maturité numérique', 'Où perdons-nous du temps, de l\'argent ou des informations ?', 'Cartographie des flux réels, inventaire des outils et des accès, points de rupture estimés en heures par semaine', 'Une à deux semaines'],
                ['Schéma directeur numérique', 'Que faire sur un à trois ans, dans quel ordre et avec quel budget ?', 'Trois à six chantiers ordonnés par rapport gain sur effort, fourchettes budgétaires, gouvernance', 'Deux à trois semaines pour une PME'],
                ['Choix d\'outils', 'Quel ERP, CRM, logiciel de caisse ou outil d\'automatisation retenir ?', 'Grille de critères pondérés, essais guidés sur vos données, coût estimé sur trois ans', 'Quelques jours à deux semaines'],
                ['Sélection de prestataires', 'À qui confier la réalisation, et sur quelle base contractuelle ?', 'Liste de prestataires à consulter, grille d\'analyse des offres, questions de clarification, points de contrat', 'Selon le délai de réponse des prestataires'],
                ['Rédaction du cahier des charges', 'Comment obtenir des devis comparables ?', 'Document exploitable par plusieurs prestataires : contexte, besoins, contraintes, critères de recette', 'Une à deux semaines'],
                ['Assistance à maîtrise d\'ouvrage', 'Comment garder la main pendant que le prestataire réalise ?', 'Suivi des jalons, relecture des livrables, préparation et conduite de la recette, arbitrages documentés', 'La durée du projet, au rythme convenu'],
                ['Accompagnement de projet', 'Qui pilote quand personne n\'a le temps en interne ?', 'Comités de suivi, tableau des risques, coordination entre prestataires et équipes', 'Au mois ou par phase'],
                ['Formation des dirigeants', 'Comment décider seul la prochaine fois ?', 'Séances sur la lecture d\'un devis, la gouvernance d\'un projet, l\'IA et l\'automatisation, les données personnelles', 'Une demi-journée à quelques séances'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Consultant indépendant, agence, éditeur ou cabinet : qui choisir pour quel besoin ?',
            'options'  => ['Consultant indépendant', 'Agence web ou digitale', 'Éditeur de logiciel et ses intégrateurs', 'Cabinet de conseil'],
            'criteres' => [
                ['critere' => 'Ce qu\'il vend vraiment', 'valeurs' => ['Du temps d\'expert et une recommandation', 'De la réalisation : sites, campagnes, applications', 'Des licences de son logiciel et leur mise en place', 'Des missions d\'équipe, souvent sur de grands périmètres']],
                ['critere' => 'Neutralité sur les outils', 'valeurs' => ['Élevée s\'il ne revend rien ; à vérifier s\'il réalise aussi', 'Moyenne : il recommande ce qu\'il sait produire', 'Faible par construction : il recommande son produit', 'Variable selon ses partenariats avec les éditeurs']],
                ['critere' => 'Interlocuteur', 'valeurs' => ['La même personne du premier échange à la restitution', 'Un commercial, puis un chef de projet', 'Un commercial, puis un intégrateur partenaire', 'Un associé à la vente, des consultants juniors en mission']],
                ['critere' => 'Connaissance des coûts réels', 'valeurs' => ['Bonne s\'il pratique aussi la réalisation', 'Bonne sur ses propres métiers', 'Précise sur son logiciel, floue sur le reste', 'Variable : dépend de la pratique terrain des équipes']],
                ['critere' => 'Capacité sur les gros volumes', 'valeurs' => ['Limitée : une personne, un agenda', 'Bonne pour la production', 'Bonne sur son périmètre', 'Forte : plusieurs consultants en parallèle']],
                ['critere' => 'Point de vigilance', 'valeurs' => ['Disponibilité et continuité : demandez la documentation de tout', 'Le conseil gratuit qui précède un devis de réalisation', 'L\'étude « offerte » qui conclut toujours au même logiciel', 'Des livrables standard, peu adaptés à une PME']],
                ['critere' => 'Adapté à', 'valeurs' => ['PME, ONG, écoles, dirigeants qui veulent un interlocuteur unique', 'Un besoin de communication ou de site déjà décidé', 'Une entreprise qui a déjà choisi son logiciel', 'Grandes organisations, programmes multi-pays, appels d\'offres complexes']],
            ],
            'verdict'  => 'Pour une PME ou une ONG qui doit encore décider, un consultant indépendant qui connaît aussi la réalisation offre le meilleur rapport entre neutralité, coût et connaissance du terrain, à condition qu\'il annonce ses conflits d\'intérêts et que ses livrables soient exploitables par d\'autres.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un consultant qui réalise aussi : conflit d\'intérêts ou avantage ?',
            'paragraphes' => [
                'Richard SALANON est à la fois consultant et prestataire de réalisation. C\'est un conflit d\'intérêts réel, pas une formule : un consultant qui vend aussi l\'exécution a intérêt à recommander des projets, et de préférence ceux qu\'il sait faire. Mieux vaut le dire avant la mission que le laisser deviner. L\'avantage existe aussi : quelqu\'un qui développe, intègre et maintient des outils connaît leur coût réel, leurs délais et leurs pièges, là où un conseil purement théorique se trompe souvent d\'ordre de grandeur.',
                'Trois règles neutralisent le conflit. Le cahier des charges est rédigé pour être envoyé à plusieurs prestataires, sans clause ni technologie qui favoriserait l\'auteur. Les recommandations vous appartiennent, et rien ne vous oblige à confier la suite : exécution en interne, par un autre prestataire ou par Richard, le choix reste le vôtre. Enfin, si vous lui confiez ensuite un chantier issu de la feuille de route, le montant de la mission de conseil est déduit du premier devis, ce qui retire l\'intérêt de recommander des travaux inutiles.',
                'De votre côté, faites chiffrer les recommandations ailleurs, réellement. Si vous cherchez une neutralité totale, choisissez un consultant qui ne réalise jamais : vous paierez souvent davantage et il connaîtra moins bien les coûts de mise en œuvre, mais l\'indépendance sera entière. C\'est un arbitrage légitime, et il vaut mieux le faire en connaissance de cause.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une mission, du premier message à l\'après-restitution ?',
            'items' => [
                ['titre' => 'Premier message', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez la situation en quelques lignes, par le formulaire, par courriel ou par WhatsApp : votre activité, ce qui bloque, les devis ou projets en cours. Vous recevez une réponse sous 24 heures avec une proposition de créneau pour l\'entretien de cadrage.'],
                ['titre' => 'Entretien de cadrage gratuit', 'duree' => 'Environ une heure', 'texte' => 'Il sert à comprendre la situation et à vérifier qu\'une mission de conseil se justifie. Si elle ne se justifie pas, vous l\'entendez clairement et la discussion s\'arrête là, sans engagement. Sinon, on fixe ensemble la question précise à laquelle la mission doit répondre.'],
                ['titre' => 'Proposition de mission et devis', 'duree' => '2 à 3 jours', 'texte' => 'Un devis gratuit décrit le périmètre, les personnes à rencontrer, les livrables, le calendrier, le prix forfaitaire et les modalités de paiement. La facturation se fait à la mission et non à la journée : vous connaissez le montant total avant de commencer, et un dépassement du côté du consultant ne vous est pas répercuté.'],
                ['titre' => 'Collecte documentaire', 'duree' => 'Quelques jours, en parallèle', 'texte' => 'Organigramme, devis reçus, contrats, liste des logiciels et abonnements, accès existants, tableaux utilisés au quotidien, chiffres d\'activité utiles : tout ce qui existe déjà évite de payer pour le reconstituer. Les documents sensibles restent sous votre contrôle et ne sont consultés que pour la mission.'],
                ['titre' => 'Observation et entretiens', 'duree' => '3 à 5 jours selon la taille', 'texte' => 'Les entretiens portent sur les personnes qui saisissent, vendent, livrent et encaissent, pas seulement sur la direction. C\'est là qu\'apparaît l\'écart entre la procédure officielle et la pratique, et cet écart est presque toujours le vrai sujet. Au Bénin, ils ont lieu sur place ; ailleurs, en visioconférence ou par téléphone.'],
                ['titre' => 'Analyse et chiffrage', 'duree' => '3 à 5 jours', 'texte' => 'Pour chaque chantier possible : temps perdu aujourd\'hui, gain attendu, coût de mise en œuvre, risques, prérequis. Les chiffres sont des ordres de grandeur présentés comme tels, avec leurs hypothèses, jamais comme des certitudes. Un chantier qui ne tient pas l\'analyse est écarté, même s\'il était attendu.'],
                ['titre' => 'Restitution aux décideurs', 'duree' => 'Une séance', 'texte' => 'Les constats sont présentés oralement à ceux qui décident, avec le temps de répondre aux objections. Un rapport lu seul produit rarement une décision ; un rapport discuté, souvent. Les livrables écrits sont remis à l\'issue de cette séance, corrigés des remarques utiles.'],
                ['titre' => 'Après la restitution', 'duree' => 'Selon votre décision', 'texte' => 'Vous êtes libre : exécution en interne, consultation d\'autres prestataires avec le cahier des charges, ou réalisation confiée à Richard. Une assistance à maîtrise d\'ouvrage peut prendre le relais pour suivre le projet de votre côté, sur devis séparé.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que recevez-vous concrètement à la fin d\'une mission de conseil ?',
            'items' => [
                'Une cartographie des flux d\'information tels qu\'ils se pratiquent, avec chaque point de rupture localisé et estimé en heures perdues par semaine.',
                'Un inventaire des outils, abonnements, noms de domaine et accès, avec pour chacun son titulaire réel et ce qu\'il faut récupérer.',
                'Une feuille de route de trois à six chantiers, ordonnés par rapport gain sur effort, chacun avec un périmètre, une fourchette budgétaire, une durée et ses prérequis.',
                'Un cahier des charges exploitable par plusieurs prestataires pour le premier chantier retenu, avec les critères qui permettront de recevoir le travail.',
                'Une grille d\'analyse des offres, pour comparer les devis sur les mêmes critères plutôt que sur le seul prix.',
                'Une liste des risques et des obligations à traiter : données personnelles, facturation, contrats de sous-traitance, réversibilité.',
                'Une proposition de gouvernance : qui décide, qui pilote en interne, à quel rythme se tient le suivi.',
                'Le support de la restitution orale et le compte rendu des décisions prises en séance.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce qu\'un schéma directeur numérique, et une PME en a-t-elle besoin ?',
            'paragraphes' => [
                'Un schéma directeur numérique est un plan qui fixe, sur une à trois années, les chantiers numériques d\'une organisation, leur ordre, leur budget et la manière de les piloter. Dans une grande entreprise ou une administration, il prend la forme d\'un document long, discuté en comité. Pour une PME de quinze personnes, il tient en quelques pages : ce que l\'on fait cette année, ce que l\'on prépare pour l\'an prochain, ce que l\'on refuse de faire pour l\'instant, et pourquoi.',
                'Son utilité principale est d\'éviter les achats isolés. Sans plan, l\'entreprise s\'équipe au gré des démonstrations : une caisse ici, un logiciel de paie là, un CRM offert avec un abonnement téléphonique, chacun avec ses propres fichiers clients. Trois ans plus tard, personne ne sait quel chiffre est le bon. Le schéma directeur pose la question inverse : quelles informations doivent circuler entre ventes, stock, comptabilité et relation client, et quel outil en est la source de vérité.',
                'Il n\'a de valeur que s\'il est relu. Une revue tous les six mois suffit pour une PME : ce qui a été livré, ce qui a glissé, ce que l\'expérience a appris, ce qui change dans le marché ou la réglementation. Un plan figé devient vite un document de tiroir, et un plan revu chaque semaine n\'en est plus un.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Transformation digitale d\'une PME : par où commencer ?',
            'paragraphes' => [
                'Commencez par un diagnostic de ce qui se passe réellement dans l\'entreprise, pas par le choix d\'un logiciel. Listez les tâches qui coûtent du temps ou de l\'argent, classez-les par gain attendu et par effort, retenez un seul chantier, puis choisissez l\'outil et préparez l\'équipe à l\'utiliser. Un premier résultat visible vaut mieux qu\'un grand plan jamais lancé.',
                'Cette méthode vaut pour une boutique de Cotonou comme pour une PME de services de Lyon ou de Montréal ; seuls changent les contraintes locales, détaillées plus bas. Elle ne demande pas de consultant pour démarrer : les étapes ci-dessous peuvent être menées en interne, et le conseil extérieur sert surtout à arbitrer quand les priorités se contredisent.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quelles étapes suivre pour digitaliser une PME, du diagnostic à l\'adoption ?',
            'items' => [
                ['titre' => 'Diagnostic : observer avant de décider', 'duree' => 'Une à deux semaines', 'texte' => 'Suivez une commande, une facture et un encaissement du début à la fin, avec la personne qui les traite. Notez chaque ressaisie, chaque fichier tableur, chaque message WhatsApp qui sert de procédure, et estimez le temps perdu par semaine. Le résultat est une liste de points de friction réels, pas une liste d\'envies.'],
                ['titre' => 'Priorités : un chantier à la fois', 'duree' => 'Quelques jours', 'texte' => 'Pour chaque point de friction, estimez le gain (heures, erreurs, argent qui rentre plus vite) et l\'effort (budget, changement d\'habitudes, données à reprendre). Retenez d\'abord ce qui rapporte vite et ne dépend de rien d\'autre, souvent la facturation ou la prise de commande, et écartez explicitement le reste pour l\'année.'],
                ['titre' => 'Outils : choisir sur vos cas réels', 'duree' => 'Quelques jours à deux semaines', 'texte' => 'Écrivez le besoin, pondérez vos critères, puis testez deux ou trois solutions avec vos propres articles, clients et factures. Vérifiez dès ce stade la facturation locale, le paiement mobile, l\'export des données et qui détient les accès. Le choix de la méthode précède celui de la marque.'],
                ['titre' => 'Adoption : former, mesurer, ajuster', 'duree' => 'Un à trois mois de suivi', 'texte' => 'Nommez un responsable interne, formez ceux qui utilisent l\'outil au quotidien, gardez l\'ancienne méthode en parallèle le temps d\'une période courte, puis comparez le temps passé avant et après. Si l\'équipe contourne le nouvel outil, c\'est un signal sur le processus, à corriger avant d\'ouvrir le chantier suivant.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment choisir un outil ou un prestataire sans se tromper ?',
            'intro' => 'La méthode compte plus que le nom du logiciel. Voici les règles appliquées pendant une mission de choix, que vous pouvez aussi suivre seul.',
            'items' => [
                ['titre' => 'Écrire le besoin avant de voir des démonstrations', 'texte' => 'Une démonstration montre ce que le logiciel fait bien, jamais ce dont vous avez besoin. Listez d\'abord les processus à couvrir, les volumes, les utilisateurs et les contraintes, puis demandez aux éditeurs de montrer ces cas-là, sur ce scénario.'],
                ['titre' => 'Pondérer les critères avant de noter', 'texte' => 'Coût sur trois ans, couverture des processus, assistance locale, hébergement, export des données : fixez les poids avant de regarder les offres, sinon on les ajuste inconsciemment pour justifier le coup de cœur. Les <a href="/comparatifs/">comparatifs</a> publiés sur ce site appliquent cette méthode.'],
                ['titre' => 'Tester sur vos propres données', 'texte' => 'Un essai avec vingt vrais articles, dix vrais clients et une vraie facture révèle en une après-midi ce qu\'aucune brochure ne dit : taxes mal gérées, champ obligatoire absent, impression illisible, lenteur sur la connexion du bureau.'],
                ['titre' => 'Compter sur trois ans, pas sur le premier mois', 'texte' => 'Licences, hébergement, mise en place, reprise de données, formation, modules complémentaires, maintenance et heures internes : c\'est le total qui compte. Un logiciel gratuit peut coûter plus cher qu\'un abonnement si chaque adaptation demande un développeur.'],
                ['titre' => 'Vérifier les références, pas les logos', 'texte' => 'Demandez à parler à un client du prestataire, dans votre secteur si possible, et posez deux questions : le projet a-t-il tenu son budget, et le prestataire répond-il encore aujourd\'hui ? Une liste de logos sur un site ne prouve ni l\'un ni l\'autre.'],
                ['titre' => 'Prévoir la sortie dès l\'entrée', 'texte' => 'Avant de signer : qui détient les accès administrateur, le code des adaptations, les données, et dans quel format peut-on les exporter ? Un prestataire sérieux répond par écrit. Une réponse floue sur ce point est un signal plus fort qu\'un prix élevé.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce que l\'assistance à maîtrise d\'ouvrage, et quand l\'utiliser ?',
            'paragraphes' => [
                'Dans un projet numérique, la maîtrise d\'ouvrage est celui qui commande et paie : votre entreprise. La maîtrise d\'œuvre est celui qui réalise : l\'agence, l\'intégrateur ou le développeur. L\'assistance à maîtrise d\'ouvrage, souvent abrégée AMOA, place un spécialiste de votre côté de la table pendant la réalisation. Il ne développe pas : il vérifie que ce qui est livré correspond à ce qui a été commandé, au prix et au délai convenus.',
                'Concrètement, l\'AMOA prépare les réunions de suivi, relit les maquettes et les spécifications avant validation, signale les écarts au cahier des charges, aide à trancher les demandes de modification et leur coût, puis organise la recette : la série de tests qui précède l\'acceptation du travail et le dernier paiement. Elle tient aussi la liste des accès, des sauvegardes et des documents à récupérer avant la fin du contrat.',
                'Elle se justifie quand l\'enjeu est important et que personne en interne n\'a le temps ou la compétence de suivre : un ERP qui touche toute l\'entreprise, une application financée par un bailleur, un projet confié à un prestataire étranger, une migration de données. Pour un site vitrine de cinq pages, elle est disproportionnée. Lorsque Richard réalise lui-même le projet, il ne peut pas en être l\'AMOA : le rôle exige d\'être d\'un seul côté de la table.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles technologies un consultant peut-il recommander, et pour quelles raisons ?',
            'legende' => 'Outils que Richard SALANON pratique en réalisation, ce qui lui permet d\'en estimer le coût réel. La recommandation dépend toujours de vos processus, de vos compétences internes et de votre budget.',
            'entetes' => ['Besoin', 'Pistes', 'Pourquoi les envisager', 'Quand les écarter'],
            'lignes'  => [
                ['Gestion commerciale, stock, facturation', 'Odoo ou Dolibarr', 'Logiciels de gestion libres, utilisables en français, avec plans de comptes SYSCOHADA ; le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> détaille les écarts', 'Quand un logiciel métier spécialisé du secteur couvre déjà tout, ou quand personne ne pourra administrer l\'outil'],
                ['Tâches répétitives entre outils', 'n8n ou Make', 'Relier formulaire, tableur, CRM, WhatsApp et facturation sans développement lourd ; voir le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a>', 'Quand le processus lui-même n\'est pas stable : on automatise alors le désordre'],
                ['Site de présentation ou de contenu', 'WordPress, ou Laravel pour un site sur mesure', 'WordPress pour une équipe qui publie souvent ; Laravel pour un site léger, sans extensions tierces, qui accueillera plus tard d\'autres fonctions', 'Quand une simple fiche d\'établissement et une page suffisent pour le moment'],
                ['Outil métier introuvable sur le marché', 'Application web en PHP avec Laravel, ou Node.js, avec Vue ou React', 'Technologies répandues, documentées et maîtrisées par beaucoup de développeurs, ce qui limite la dépendance à un seul prestataire', 'Quand un logiciel existant couvre 80 % du besoin à un coût moindre'],
                ['Application pour le terrain', 'Flutter pour Android et iOS', 'Une seule base de code pour les deux systèmes, utile pour des équipes équipées de téléphones variés', 'Quand une application web bien conçue, ouverte dans le navigateur du téléphone, suffit'],
                ['Intelligence artificielle sur vos documents', 'Services Python avec Flask, appel aux grands modèles de langage', 'Brique légère pour classer, résumer ou extraire des informations à partir de vos fichiers ; le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> aide à choisir le modèle', 'Quand les données sont trop sensibles pour sortir de l\'entreprise sans cadre contractuel'],
                ['Encaissements', 'Agrégateurs de mobile money et de carte', 'Accepter MTN MoMo, Moov Money ou la carte depuis un site, une application ou une facture ; voir le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a>', 'Quand le volume d\'encaissements en ligne ne justifie pas l\'intégration'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble une mission de conseil selon le secteur ?',
            'items' => [
                ['secteur' => 'Distribution et négoce, Afrique de l\'Ouest', 'probleme' => 'Trois boutiques, un dépôt, des stocks tenus dans des cahiers et des devis d\'ERP qui vont du simple au décuple.', 'solution' => 'Situation type : cartographie des flux entre boutiques et dépôt, grille commune pour comparer les devis, essai de deux logiciels sur un échantillon d\'articles réels, puis cahier des charges pour le chantier retenu, en tenant compte de la facture normalisée et du paiement mobile.'],
                ['secteur' => 'Santé, cliniques et cabinets', 'probleme' => 'Dossiers patients sur papier, rendez-vous par téléphone, facturation aux assurances refaite à la main chaque mois.', 'solution' => 'Situation type : priorité donnée à la prise de rendez-vous et à la facturation, qui rapportent vite, avant le dossier patient, plus sensible. Le choix d\'outil intègre dès le départ la confidentialité des données de santé et l\'hébergement.'],
                ['secteur' => 'ONG et projets financés', 'probleme' => 'Un bailleur exige un système de suivi des activités et de redevabilité, avec un budget fixé et un calendrier serré.', 'solution' => 'Situation type : termes de référence rédigés pour une consultation de prestataires, grille d\'analyse des offres conforme aux procédures du bailleur, puis assistance à maîtrise d\'ouvrage jusqu\'à la recette, avec une documentation qui survit à la fin du projet.'],
                ['secteur' => 'Écoles et centres de formation', 'probleme' => 'Inscriptions par formulaires papier, paiements des frais en espèces et par mobile money, relances des retards faites une par une.', 'solution' => 'Situation type : schéma des inscriptions et des encaissements, choix entre logiciel de gestion scolaire et outil sur mesure, automatisation des relances par WhatsApp et formation de la direction au pilotage par tableaux de bord.'],
                ['secteur' => 'PME de services en France ou en Belgique', 'probleme' => 'Un CRM, un outil de devis, un logiciel comptable et des tableurs qui ne se parlent pas ; le dirigeant ressaisit les mêmes données.', 'solution' => 'Situation type : inventaire des outils et des abonnements, identification de la source de vérité pour les clients et les factures, plan d\'intégration ou de remplacement, et vérification des contrats de sous-traitance au regard du RGPD.'],
                ['secteur' => 'Artisanat, BTP et services techniques', 'probleme' => 'Chantiers suivis par messages vocaux, achats imputés au mauvais client, factures émises plusieurs semaines après la fin des travaux.', 'solution' => 'Situation type : description du parcours d\'un chantier du devis à l\'encaissement, choix d\'une solution mobile simple pour les équipes, et formation du dirigeant à la lecture des marges par chantier.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un consultant en digitalisation, et qu\'est-ce qui fait varier les honoraires ?',
            'intro'      => 'Les honoraires sont fixés sur devis, au forfait par mission, après l\'entretien de cadrage. Le devis est gratuit et détaille le périmètre, les livrables et le calendrier avant tout engagement.',
            'items'      => [
                ['offre' => 'Entretien de cadrage', 'prix' => 'Gratuit', 'inclus' => ['Environ une heure, sur place au Bénin ou en visioconférence', 'Vérification que le conseil se justifie', 'Sans engagement']],
                ['offre' => 'Mission courte de diagnostic et feuille de route', 'prix' => 'Sur devis, au forfait', 'inclus' => ['Pour une PME de moins de vingt personnes : deux à trois semaines', 'Cartographie des flux, feuille de route, cahier des charges, restitution', 'Montant déduit du premier devis si vous confiez ensuite la réalisation à Richard']],
                ['offre' => 'Choix d\'outils ou de prestataires', 'prix' => 'Sur devis', 'inclus' => ['Grille pondérée, essais, analyse des offres', 'Peut s\'ajouter à un diagnostic ou être commandé seul']],
                ['offre' => 'Assistance à maîtrise d\'ouvrage et accompagnement', 'prix' => 'Sur devis', 'inclus' => ['Au forfait par phase ou au mois', 'Suivi, relecture, recette, arbitrages documentés']],
                ['offre' => 'Formation des dirigeants', 'prix' => 'Sur devis', 'inclus' => ['Séances individuelles ou en comité de direction', 'Sur place ou à distance']],
            ],
            'variations' => [
                'Le nombre de services, de sites et de personnes à rencontrer : une boutique et un dépôt ne demandent pas le même temps qu\'un groupe de cinq sociétés.',
                'L\'état de la documentation existante : des devis, contrats et accès rassemblés d\'avance raccourcissent la collecte.',
                'Les déplacements éventuels hors du Bénin, chiffrés à part sur le devis lorsqu\'ils sont demandés.',
                'Le nombre de prestataires à consulter et d\'offres à analyser.',
                'Les procédures propres aux bailleurs, aux structures publiques ou aux groupes : validations, comités, formats imposés.',
                'Les langues de travail et des livrables, français ou anglais.',
                'L\'urgence, lorsqu\'une échéance externe impose un calendrier plus court que d\'habitude.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se règlent les honoraires, depuis l\'Afrique, l\'Europe ou le Canada ?',
            'paragraphes' => [
                'Les modes de paiement acceptés sont le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. Un dirigeant de Cotonou ou de Lomé règle depuis son téléphone ; une PME de Lyon, de Liège ou de Montréal par virement, carte ou PayPal. L\'échéancier figure sur le devis : vous savez avant de signer ce que vous payez et à quel moment, par exemple une partie à la commande et le solde à la restitution.',
                'Dans la zone franc CFA, le devis est établi en francs CFA. Pour un client européen, il peut l\'être en euros : la parité est fixe, un euro valant 655,957 francs CFA, comme le rappelle la <a href="https://www.bceao.int/fr/communique-presse/fausse-information-faisant-etat-dune-devaluation-du-franc-cfa">BCEAO dans un communiqué</a>. Pour le Canada, la Suisse ou une autre devise, le montant est fixé sur devis dans la devise convenue. Richard SALANON exerce sous le statut d\'auto-entrepreneur au Bénin, avec un identifiant fiscal unique (IFU), ce qui permet d\'établir un devis et une facture en bonne et due forme.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte le conseil ailleurs, et peut-on le faire financer ?',
            'paragraphes' => [
                'Un repère public aide à situer les ordres de grandeur. En France, l\'offre <a href="https://www.bpifrance.fr/catalogue-offres/diag-data-ia">Diag Data IA de Bpifrance</a>, consultée le 3 octobre 2026, prévoit 8 jours d\'intervention d\'un expert agréé répartis sur 3 mois au plus, pour un devis de 10 000 euros HT au maximum ; après une subvention de 40 %, il reste 6 000 euros HT à la charge de l\'entreprise. L\'offre vise les PME et ETI françaises de 10 à 2 000 équivalents temps plein, réalisant au moins un million d\'euros de chiffre d\'affaires et créées depuis plus d\'un an.',
                'Les aides changent vite. En Wallonie, le <a href="https://www.cheques-entreprises.be/actualites/evolution-du-soutien-numerique-suspension-du-cheque-maturite-numerique/">portail des chèques-entreprises</a> annonce la suspension du chèque « maturité numérique » au 12 juillet 2026 : les demandes introduites avant cette date restent traitées, et les besoins en sécurité informatique passent par le chèque cybersécurité. Avant de compter sur une aide, vérifiez qu\'elle existe encore à la date de votre demande et si le prestataire doit être agréé par l\'organisme financeur.',
                'En Afrique francophone, le financement vient plus souvent d\'un bailleur, d\'un programme d\'appui aux PME ou du budget d\'un projet que d\'un dispositif national permanent. Dans ce cas, la mission de conseil doit suivre les règles du financeur : termes de référence, mise en concurrence, justificatifs. C\'est un point à signaler dès l\'entretien de cadrage, pour que le devis et les livrables respectent ces formats.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Vers qui les dirigeants se tournent-ils aujourd\'hui pour être conseillés ?',
            'paragraphes' => [
                'Le <a href="https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le">Baromètre France Num 2026</a>, publié le 17 septembre 2026 par la Direction générale des Entreprises et réalisé par le Crédoc auprès de 9 655 entreprises françaises, montre que les dirigeants de TPE et PME demandent conseil d\'abord à leur expert-comptable (41 %, en hausse de 23 points sous l\'effet de la réforme de la facturation électronique), puis à leurs prestataires (37 %), loin devant les chambres consulaires (9 %). Autrement dit, le conseil vient souvent de quelqu\'un qui a aussi quelque chose à vendre ou un périmètre limité.',
                'Le même baromètre éclaire le besoin. 78 % des TPE et PME déclarent des projets numériques pour 2026 et 2027, la facturation électronique en tête (39 %) devant l\'achat de logiciels (26 %). Pour piloter leur activité, 51 % s\'appuient sur un logiciel métier et 44 % sur un tableur. Enfin, 33 % n\'ont engagé aucune dépense numérique sur l\'année, hors formation et recrutement. Beaucoup de projets, des budgets serrés et des outils hétérogènes : c\'est exactement la situation où une décision mal préparée coûte cher.',
                'Ces chiffres concernent la France, mais le schéma se retrouve en Afrique francophone, où le conseil vient souvent du fournisseur de logiciel, du cousin informaticien ou du cabinet comptable. Aucun n\'est un mauvais conseiller par nature ; chacun voit le problème depuis sa fenêtre. Le rôle d\'un consultant est de regarder l\'ensemble : ventes, stock, comptabilité, relation client, données personnelles, et la façon dont l\'équipe travaille réellement.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Données personnelles, facturation, mobile money : que change le contexte local ?',
            'paragraphes' => [
                'Choisir un outil, c\'est aussi choisir où vont les données de vos clients et de vos salariés. Au Bénin, leur traitement relève de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>, sous le contrôle de l\'Autorité de protection des données personnelles. Pour une entreprise qui sert des personnes situées dans l\'Union européenne, le RGPD s\'applique aussi, même sans établissement en Europe : l\'article 3 du règlement, publié sur le <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">site de la CNIL</a>, le prévoit dès lors qu\'on leur offre des biens ou des services. Il est applicable depuis le 25 mai 2018.',
                'Le choix d\'un prestataire en découle directement. L\'<a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">article 28 du RGPD</a> impose un contrat écrit avec tout sous-traitant qui traite des données pour votre compte : objet et durée du traitement, instructions documentées, confidentialité, aide en cas de demande d\'une personne concernée, suppression ou restitution des données en fin de prestation, possibilité d\'audit. Un éditeur de logiciel en ligne, un hébergeur ou une agence sont des sous-traitants : leur contrat doit contenir ces clauses, et c\'est l\'une des vérifications faites pendant une mission de choix.',
                'Au Québec, la <a href="https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25">Commission d\'accès à l\'information</a> rappelle que la Loi 25 impose une évaluation des facteurs relatifs à la vie privée pour tout projet d\'acquisition, de développement ou de refonte de système d\'information impliquant des renseignements personnels, et avant toute communication de ces renseignements à l\'extérieur du Québec. Pour une entreprise québécoise, un choix d\'outil hébergé hors de la province, ou un consultant établi au Bénin qui accède à ses données, se prépare donc avec cette évaluation.',
                'La facturation pèse aussi sur le choix. Au Bénin, la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement sur les factures normalisées</a>, publiée le 27 février 2020, indique que les assujettis à la TVA facturent au moyen de machines électroniques certifiées ou d\'un logiciel validé par la Direction générale des impôts, sous peine d\'une amende égale à dix fois le montant de la facture, avec un minimum d\'un million de francs CFA par opération. Un logiciel de gestion qui ignore cette contrainte oblige à ressaisir chaque facture ailleurs.',
                'Le paiement, enfin, n\'est pas un détail. Selon le <a href="https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024">rapport de la BCEAO sur les services financiers numériques dans l\'UEMOA</a> pour 2024, publié le 13 mars 2026, l\'Union comptait 248 millions de comptes de monnaie électronique, et le nombre de points marchands acceptant ce paiement a plus que doublé en un an, à 3 705 726. Un outil de vente, de caisse ou de facturation qui ne sait pas rapprocher un paiement mobile d\'une facture crée du travail manuel dès le premier jour.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels éclairent une décision numérique ?',
            'items' => [
                ['valeur' => '41 %', 'libelle' => 'Des dirigeants de TPE et PME françaises se font conseiller d\'abord par leur expert-comptable, 37 % par leurs prestataires (2026)', 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '78 %', 'libelle' => 'Des TPE et PME françaises ont des projets numériques pour 2026 et 2027', 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '10 000 € HT', 'libelle' => 'Plafond du devis d\'un diagnostic data et IA de 8 jours en France, 6 000 € HT restant à charge après subvention', 'source' => 'Bpifrance, Diag Data IA', 'url' => 'https://www.bpifrance.fr/catalogue-offres/diag-data-ia'],
                ['valeur' => '248 millions', 'libelle' => 'Comptes de monnaie électronique dans l\'UEMOA en 2024, contre 209 millions en 2023', 'source' => 'BCEAO, rapport 2024 sur les services financiers numériques', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024'],
                ['valeur' => '32,2 %', 'libelle' => 'Part de la population béninoise qui utilise Internet fin 2025, pour 16,4 millions de connexions mobiles actives', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '10 fois', 'libelle' => 'Le montant de la facture : amende pour défaut de facture normalisée au Bénin, au moins 1 million de FCFA par opération', 'source' => 'Gouvernement du Bénin', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Sur place ou à distance : comment se mène une mission hors du Bénin ?',
            'paragraphes' => [
                'Au Bénin, les entretiens se font sur place : c\'est en voyant la caisse, le dépôt ou le bureau des inscriptions que l\'on comprend où l\'information se perd, et c\'est là que se trouve l\'essentiel de la valeur d\'un diagnostic. Dans les 33 autres pays servis, d\'Abidjan à Montréal en passant par Dakar, Paris, Bruxelles ou Genève, la mission se mène à distance : entretiens individuels en visioconférence, partage d\'écran pour observer les outils, échanges de documents.',
                'La distance a une limite, et il vaut mieux la connaître avant. Un entretien en visioconférence montre ce que la personne décrit, pas toujours ce qu\'elle fait. Pour compenser, les entretiens sont plus nombreux et plus courts, on demande des captures d\'écran et des exemples réels de documents, et l\'on fait dérouler un processus complet, de la commande à l\'encaissement, pendant l\'appel.',
                'La connexion impose aussi sa méthode. Le rapport <a href="https://datareportal.com/reports/digital-2026-benin">Digital 2026 de DataReportal pour le Bénin</a>, publié le 8 novembre 2025, compte 16,4 millions de connexions mobiles actives fin 2025, soit 110 % de la population, mais seulement 4,80 millions d\'internautes, 32,2 % des habitants. Le téléphone est partout, la bonne connexion beaucoup moins. Les entretiens se tiennent donc aussi par appel téléphonique ou WhatsApp, et les livrables sont remis dans des formats légers, lisibles sur téléphone.',
                'Les horaires publiés vont de 7 h à 20 h, heure du Bénin, tous les jours : ils recouvrent la journée de travail européenne, et les rendez-vous avec le Canada se placent en fin d\'après-midi à Cotonou, qui correspond à la fin de matinée à Montréal. Les échanges se font en français ; l\'anglais est possible pour les livrables destinés à un partenaire ou à un bailleur anglophone.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer une démarche de conseil ?',
            'intro' => 'La plupart des missions décevantes ne souffrent pas d\'un mauvais consultant, mais d\'une de ces erreurs de départ, toutes évitables.',
            'items' => [
                ['titre' => 'Appeler un consultant pour valider une décision prise', 'texte' => 'Si le logiciel est déjà choisi et le contrat presque signé, la mission ne servira qu\'à justifier le choix. Mieux vaut l\'assumer et passer à la réalisation, ou accepter réellement que la conclusion puisse être différente.'],
                ['titre' => 'N\'interroger que la direction', 'texte' => 'La direction décrit la procédure ; la caissière, le magasinier et la comptable décrivent la réalité. Un diagnostic bâti sur les seuls entretiens de direction rate l\'essentiel et produit un outil que personne n\'utilisera.'],
                ['titre' => 'Accepter une étude « offerte » par un vendeur', 'texte' => 'Une étude gratuite proposée par l\'éditeur ou l\'agence qui vendra ensuite la solution est une avant-vente, pas un conseil. Elle peut être utile, à condition de la lire pour ce qu\'elle est et de la confronter à d\'autres offres.'],
                ['titre' => 'Recevoir un rapport sans restitution', 'texte' => 'Un document de quarante pages envoyé par courriel finit rarement en décision. Exigez une séance où les constats sont présentés, discutés et contestés par ceux qui décident.'],
                ['titre' => 'Une feuille de route sans budget ni responsable', 'texte' => 'Une liste de chantiers sans fourchette de coût, sans durée et sans personne désignée en interne reste une liste d\'intentions. Chaque chantier retenu doit avoir un pilote, un budget et une date de revue.'],
                ['titre' => 'Oublier la formation des dirigeants', 'texte' => 'Un dirigeant qui ne sait pas lire un devis technique, poser les bonnes questions à un prestataire ou suivre un projet redevient dépendant au chantier suivant. Une partie de la mission doit le rendre autonome ; la page <a href="/services/formation-en-entreprise">formation en entreprise</a> décrit ce volet.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quels signaux doivent vous alerter chez un consultant ?',
            'texte' => 'Méfiez-vous d\'un consultant qui recommande toujours le même logiciel, refuse de remettre un cahier des charges exploitable par d\'autres, promet des gains chiffrés garantis avant d\'avoir observé votre activité, facture à la journée sans plafond ni livrable défini, ou garde pour lui les accès et les documents produits pendant la mission. Exigez au contraire un devis au forfait, des livrables écrits qui vous appartiennent, une restitution orale et la déclaration de ses liens commerciaux avec les éditeurs ou prestataires qu\'il cite.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier cette mission à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Un conseil n\'est utile que s\'il reste à portée de main, et cette disponibilité se vérifie sur des faits plutôt que sur des promesses : une réponse sous 24 heures à chaque demande, un entretien de cadrage et un devis gratuits, un paiement possible par Mobile Money MTN ou Moov, carte bancaire, PayPal, virement ou espèces, une intervention sur place au Bénin et à distance dans 34 pays, de l\'Afrique de l\'Ouest et centrale au Maghreb, à l\'océan Indien, à l\'Europe et au Canada.',
                'Son parcours explique sa manière de conseiller. Formé à EPITECH, il compte plus de 6 ans d\'expérience dans le numérique et a travaillé pour des clients au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il connaît donc le coût réel de ce qu\'il recommande, parce qu\'il le construit aussi.',
                'Sa façon de travailler tient en quelques engagements simples : un forfait annoncé avant de commencer, des entretiens avec ceux qui font le travail, des chiffres présentés comme des ordres de grandeur, des livrables exploitables par d\'autres prestataires, une restitution orale, et la liberté totale de confier ou non la suite. Pour en savoir plus sur son parcours, consultez la page <a href="/richard-salanon">Richard SALANON</a> ; pour les pays servis, la page <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de faire appel à un consultant en digitalisation ?',
            'texte' => 'Un bon consultant ne vous vend pas un outil : il vous aide à décider quoi faire, dans quel ordre et pour quel budget, vous remet des documents qui vous permettent de consulter qui vous voulez, et vous dit franchement quand la meilleure décision est d\'attendre.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez un regard extérieur avant votre prochain investissement numérique ?',
            'texte'  => 'Décrivez votre activité, ce qui bloque et les devis ou projets en cours : vous recevez une réponse sous 24 heures, puis un entretien de cadrage gratuit pour savoir si une mission de conseil se justifie.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un entretien gratuit'],
        ],
    ],

    'faq' => [
        ['q' => 'Quelle différence entre un consultant en digitalisation et un prestataire ?', 'r' => 'Le prestataire construit ce que vous avez décidé : un site, une application, un ERP paramétré. Le consultant vous aide à décider quoi construire, dans quel ordre et pour quel budget, puis peut vous assister pendant la réalisation. Si votre décision est déjà prise, vous n\'avez pas besoin d\'un consultant : passez directement à la réalisation.'],
        ['q' => 'Combien coûte une mission de conseil en digitalisation ?', 'r' => 'Les honoraires sont fixés sur devis, au forfait, après un entretien de cadrage gratuit. Le prix dépend du nombre de services et de sites, des personnes à rencontrer, des déplacements, des procédures à respecter et de l\'urgence. Le devis est gratuit, et le montant total est connu avant de commencer.'],
        ['q' => 'Combien de temps dure une mission ?', 'r' => 'Deux à trois semaines pour une mission courte dans une PME de moins de vingt personnes, entretiens, analyse et restitution compris. Un groupe, une structure multi-sites ou un projet financé par un bailleur demande davantage. Une assistance à maîtrise d\'ouvrage, elle, dure le temps du projet qu\'elle accompagne.'],
        ['q' => 'Suis-je obligé de vous confier la réalisation ensuite ?', 'r' => 'Non. Le cahier des charges est rédigé pour être envoyé à plusieurs prestataires, et les livrables vous appartiennent. Si vous confiez ensuite à Richard SALANON un chantier issu de la feuille de route, le montant de la mission de conseil est déduit du premier devis.'],
        ['q' => 'Quelle différence avec l\'audit et étude de projet ?', 'r' => 'L\'audit et étude de projet cadre un projet unique déjà identifié : faisabilité, choix techniques, budget et calendrier d\'un site ou d\'une application. La mission de conseil intervient avant : elle aide à choisir quels projets lancer, dans quel ordre, avec quels outils et quels prestataires, à l\'échelle de toute l\'organisation.'],
        ['q' => 'Qu\'est-ce que l\'assistance à maîtrise d\'ouvrage ?', 'r' => 'C\'est un accompagnement de votre côté pendant qu\'un prestataire réalise le projet : suivi des jalons, relecture des livrables, arbitrage des demandes de modification, organisation de la recette avant le paiement final. Elle se justifie pour un projet important quand personne en interne n\'a le temps ou la compétence de le suivre.'],
        ['q' => 'Intervenez-vous à distance ?', 'r' => 'Oui. Les missions se mènent sur place au Bénin et à distance dans les autres pays servis, en Afrique francophone, en Europe et au Canada, avec des entretiens individuels en visioconférence, par téléphone ou par WhatsApp. La distance donne une vision un peu moins riche que l\'observation directe, ce qui est compensé par plus d\'entretiens et des exemples réels de documents.'],
        ['q' => 'Que se passe-t-il si la conclusion est qu\'il ne faut rien faire ?', 'r' => 'C\'est un résultat valable. Une organisation dont les processus fonctionnent et dont le volume ne justifie pas d\'investissement n\'a rien à numériser pour l\'instant. Vous aurez payé une mission courte pour éviter une dépense inutile, et vous saurez à quel signe reconsidérer la question.'],
        ['q' => 'Travaillez-vous avec des ONG et des structures publiques ?', 'r' => 'Oui. Les contraintes y sont différentes : procédures de validation plus longues, exigences de traçabilité, règles de mise en concurrence du bailleur ou des marchés publics. Elles sont prises en compte dans le devis, le calendrier et le format des livrables, dès l\'entretien de cadrage, plutôt que découvertes en cours de mission.'],
        ['q' => 'Que faut-il préparer avant le premier entretien ?', 'r' => 'Rien d\'obligatoire, mais tout aide : les devis reçus, la liste des logiciels et abonnements utilisés, l\'organigramme, les tableaux du quotidien et une phrase sur ce qui vous empêche de dormir. Plus la situation est décrite précisément, plus vite on sait si une mission se justifie.'],
        ['q' => 'Pouvez-vous former les dirigeants plutôt que décider à leur place ?', 'r' => 'Oui, et c\'est souvent le meilleur investissement. Des séances courtes apprennent à lire un devis technique, à poser les bonnes questions à un prestataire, à suivre un projet et à évaluer l\'intérêt de l\'intelligence artificielle ou de l\'automatisation. Pour les équipes, la <a href="/formation-ia-entreprise">formation à l\'IA en entreprise</a> et la <a href="/formation-automatisation">formation à l\'automatisation</a> prennent le relais.'],
        ['q' => 'Une transformation digitale se prépare-t-elle de la même façon d\'un pays à l\'autre ?', 'r' => 'La méthode est la même, les contraintes changent. Le Bénin, la Côte d\'Ivoire, le Togo, le Sénégal, le Burkina Faso, le Mali et le Niger font partie de l\'UEMOA, dont les États partagent le franc CFA. Au Cameroun, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada, le cadre monnaie, facturation et données personnelles se vérifie à l\'entretien. Le RGPD concerne les clients européens et la Loi 25 le Québec. Les entretiens se tiennent entre 7 h et 20 h, heure du Bénin.'],
        ['q' => 'Quels moyens de paiement acceptez-vous ?', 'r' => 'Le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. L\'échéancier est indiqué sur le devis, avant signature. Dans la zone franc CFA, le devis est établi en francs CFA ; ailleurs, dans la devise convenue.'],
    ],

    'sources' => [
        ['titre' => 'France Num (DGE), Baromètre France Num 2026 : le numérique et l\'intelligence artificielle dans les TPE et PME', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-03'],
        ['titre' => 'Bpifrance, offre Diag Data IA (conditions, durée, montant)', 'url' => 'https://www.bpifrance.fr/catalogue-offres/diag-data-ia', 'date' => '2026-10-03'],
        ['titre' => 'Chèques-entreprises Wallonie, suspension du chèque maturité numérique', 'url' => 'https://www.cheques-entreprises.be/actualites/evolution-du-soutien-numerique-suspension-du-cheque-maturite-numerique/', 'date' => '2026-10-03'],
        ['titre' => 'BCEAO, rapport annuel sur les services financiers numériques dans l\'UEMOA, 2024', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024', 'date' => '2026-10-03'],
        ['titre' => 'BCEAO, États membres de l\'UEMOA et unité monétaire commune (page du rapport 2024)', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024', 'date' => '2026-10-27'],
        ['titre' => 'BCEAO, communiqué sur la parité fixe entre l\'euro et le franc CFA', 'url' => 'https://www.bceao.int/fr/communique-presse/fausse-information-faisant-etat-dune-devaluation-du-franc-cfa', 'date' => '2026-10-03'],
        ['titre' => 'DataReportal, rapport Digital 2026 consacré au Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-03'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-03'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, le règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, RGPD chapitre IV, article 28 (sous-traitant)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-03'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, principaux changements apportés par la Loi 25', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['digitalisation-d-entreprise', 'audit-etude-de-projet', 'integration-odoo', 'automatisation-ia', 'formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier', 'fedapay-vs-kkiapay-vs-cinetpay', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
