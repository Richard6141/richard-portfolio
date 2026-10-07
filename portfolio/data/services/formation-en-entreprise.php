<?php
// ============================================================
// data/services/formation-en-entreprise.php · Pilier « Formation en
// entreprise » (vague 1A). Nouveau slug : remplace la fiche en base
// « formation-en-programmation » (sur devis, cours personnalisés, projets
// concrets, présentiel ou à distance, supports inclus, suivi après la
// formation ; HTML, CSS, JavaScript, PHP, Laravel, WordPress), reprise ici
// comme un domaine parmi huit. Porte d'entrée vers les huit pages
// /formation-*, sans les paraphraser. Financement relevé le 04/10/2026 sur
// les pages officielles du FDFP, du SGG du Bénin (statuts du FODEFCA), du
// 3FPT, de France Compétences, de service-public et de la CPMT ; aucune
// certification Qualiopi ni aucun agrément n'est attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation en entreprise : des équipes formées à l\'IA, aux ERP et au web sur leurs propres dossiers, avec un suivi après la session',
    'title'   => 'Formation en entreprise : IA, Odoo, web | Richard SALANON',
    'meta'    => 'Formation des équipes à l\'IA, à l\'automatisation, à Odoo, Dolibarr, au web et à Google, en présentiel ou à distance, avec analyse des besoins et suivi.',
    'en_bref' => 'Richard SALANON forme les équipes de PME, d\'ONG, d\'écoles et d\'administrations à l\'intelligence artificielle, à l\'automatisation, à Odoo et Dolibarr, au développement web et au vibe coding, à WhatsApp Business et à la visibilité sur Google, en présentiel ou à distance. Chaque formation part d\'une analyse des besoins et se construit sur les documents et les logiciels réels de l\'organisation, en Afrique francophone, en Europe ou au Canada. Selon le format, elle dure de quelques heures à plusieurs jours, et peut être prolongée par un accompagnement sur quelques mois. Le prix est fixé sur devis, une fois les besoins analysés.',
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'Visibilité et conseil',
    'matrice' => true,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => 'Analyse des besoins en quelques jours, puis sessions de quelques heures à plusieurs jours'],
        ['l' => 'Pour qui', 'v' => 'PME, ONG, administrations, écoles, cabinets et équipes de direction'],
        ['l' => 'Livrables', 'v' => 'Programme écrit, supports, exercices corrigés, évaluation des acquis, attestation'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvre une formation en entreprise, et que ne recouvre-t-elle pas ?',
            'paragraphes' => [
                'Une formation en entreprise est commandée par une organisation, pour des personnes qui travaillent ensemble, avec un objectif que cette organisation fixe elle-même : faire adopter un logiciel qui vient d\'être installé, encadrer l\'usage de l\'intelligence artificielle, rendre une équipe autonome sur son site, apprendre aux vendeurs à suivre leurs commandes sur WhatsApp. Ce n\'est pas un cours public où chacun s\'inscrit seul. Le contenu, le rythme et les exemples sont choisis pour ce groupe, à partir de ses dossiers, de ses outils et de ses contraintes de calendrier.',
                'Huit domaines sont proposés, et chacun a sa page détaillée : la <a href="/formation-ia-entreprise">formation IA en entreprise</a>, la <a href="/formation-automatisation">formation à l\'automatisation avec n8n et Make</a>, la <a href="/formation-odoo">formation Odoo</a>, la <a href="/formation-dolibarr">formation Dolibarr</a>, la <a href="/formation-developpement-web">formation au développement web</a>, la <a href="/formation-vibecoding">formation au vibe coding</a>, la <a href="/formation-whatsapp-business">formation WhatsApp Business</a> et la <a href="/formation-seo-visibilite-google">formation à la visibilité sur Google</a>. La présente page traite de ce qui leur est commun : l\'analyse des besoins, le choix du format, l\'évaluation, les documents remis, le financement et le prix.',
                'Trois choses restent hors du périmètre. La formation ne délivre ni diplôme ni titre inscrit à un répertoire officiel : elle se conclut par une évaluation des acquis et une attestation. Elle ne remplace pas le projet technique : un Odoo pas encore paramétré relève d\'abord de l\'<a href="/services/integration-odoo">intégration Odoo</a>, un assistant d\'IA à brancher sur vos logiciels de l\'<a href="/services/integration-ia-entreprise">intégration de l\'IA</a>. Enfin, elle ne garantit aucune prise en charge par un fonds de formation : ce point se vérifie dossier par dossier, comme l\'explique plus bas la partie consacrée au financement.',
                'Cette page remplace l\'ancienne fiche consacrée à la formation en programmation. Le code reste enseigné, de HTML et CSS à JavaScript, PHP, Laravel et WordPress, à des débutants complets comme à des personnes qui ont déjà des bases, et l\'on peut toujours apprendre à créer avec l\'aide de l\'IA. Les principes de l\'ancienne offre sont conservés pour tous les domaines : des cours personnalisés, des projets concrets, le choix entre présentiel et distance, des supports inclus et un suivi après la formation.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formation choisir selon ce que votre équipe doit savoir faire ?',
            'legende' => 'Les huit domaines, le public habituel de chacun et la compétence visée en fin de parcours. Le programme détaillé, les formats et les repères de prix figurent sur la page de chaque formation.',
            'entetes' => ['Domaine', 'Pour quelles équipes', 'Ce qu\'elles savent faire à la fin', 'Page détaillée'],
            'lignes'  => [
                ['Intelligence artificielle', 'Direction, administration, commerce, communication, ressources humaines', 'Rédiger, résumer et structurer avec un assistant, vérifier ce qu\'il affirme, savoir quelles données ne jamais lui confier', '<a href="/formation-ia-entreprise">Formation IA en entreprise</a>'],
                ['Automatisation', 'Personnes qui ressaisissent les mêmes informations d\'un outil à l\'autre, profils techniques', 'Dessiner un flux, le construire dans n8n ou Make, le tester sur des cas limites et le surveiller', '<a href="/formation-automatisation">Formation automatisation</a>'],
                ['Odoo', 'Ventes, achats, stock, facturation, direction', 'Travailler sur les écrans de son poste, corriger une erreur proprement, lire les tableaux de bord', '<a href="/formation-odoo">Formation Odoo</a>'],
                ['Dolibarr', 'Petites structures, associations, commerces, prestataires de services', 'Tenir le cycle devis, commande, facture, règlement, et préparer les exports du comptable', '<a href="/formation-dolibarr">Formation Dolibarr</a>'],
                ['Développement web', 'Débutants, personnes en reconversion, équipes qui gèrent un site', 'Construire des pages en HTML, CSS et JavaScript, puis une application en PHP et MySQL', '<a href="/formation-developpement-web">Formation développement web</a>'],
                ['Vibe coding', 'Porteurs de projet, chefs de produit, développeurs', 'Décrire une application, la faire générer par l\'IA, relire, tester et mettre en ligne', '<a href="/formation-vibecoding">Formation vibe coding</a>'],
                ['WhatsApp Business', 'Commerces, vendeurs, service client', 'Tenir un profil et un catalogue, répondre vite, étiqueter et suivre les commandes sans risquer le blocage', '<a href="/formation-whatsapp-business">Formation WhatsApp Business</a>'],
                ['Visibilité sur Google', 'Commerces, hôtels, restaurants, cabinets, services de proximité', 'Gérer sa fiche d\'établissement, obtenir des avis et y répondre, poser les bases du référencement', '<a href="/formation-seo-visibilite-google">Formation visibilité Google</a>'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles organisations font former leurs équipes, et à quels signes le besoin est-il mûr ?',
            'intro' => 'Les demandes arrivent rarement sous la forme « nous voulons une formation ». Elles arrivent sous la forme d\'un problème concret, que la formation résout en partie seulement. Voici les situations qui reviennent le plus.',
            'items' => [
                ['titre' => 'Un logiciel payé que personne n\'utilise vraiment', 'texte' => 'L\'ERP est installé depuis des mois, mais les factures sortent encore d\'Excel et le stock se compte sur un cahier. Le paramétrage est souvent correct ; ce qui manque, ce sont des séances par poste, sur les opérations de chaque personne, et un référent interne qui sait répondre.'],
                ['titre' => 'L\'IA est déjà utilisée, mais sans règle', 'texte' => 'Chacun a son compte personnel, ses recettes et ses habitudes. Certains collent des contrats ou des fiches de clients dans un assistant en ligne. La formation sert alors autant à cadrer qu\'à faire gagner du temps : ce qui est autorisé, avec quelles données, et qui relit avant l\'envoi.'],
                ['titre' => 'Une seule personne détient le savoir-faire', 'texte' => 'Le collaborateur qui gérait le site ou les automatisations part, ou part en congé. Former deux ou trois personnes à ce qu\'il faisait, documentation à l\'appui, coûte moins cher qu\'une panne sans personne pour la comprendre.'],
                ['titre' => 'Une vague de recrutements ou une nouvelle équipe', 'texte' => 'Une agence ouvre, un service commercial double, des stagiaires arrivent pour la saison. Une session commune, puis des fiches réflexes, évitent que chacun apprenne l\'outil à sa façon auprès du collègue le plus disponible.'],
                ['titre' => 'Un projet financé prévoit un renforcement de capacités', 'texte' => 'Beaucoup de projets d\'ONG ou de coopération inscrivent la formation des équipes ou des partenaires dans leur budget. Il faut alors un programme écrit, des feuilles de présence et une évaluation que le bailleur pourra lire.'],
                ['titre' => 'La direction veut décider avant de déléguer', 'texte' => 'Avant de lancer un chantier d\'automatisation ou d\'IA, un dirigeant veut comprendre ce qui est possible, ce que cela coûte et ce qu\'il faut interdire. Une session courte réservée à l\'équipe de direction suffit souvent à trancher.'],
                ['titre' => 'Une administration modernise ses procédures', 'texte' => 'Courriers normés, circuits de validation, archivage : les services publics et parapublics ont besoin d\'usages encadrés et écrits, que les agents appliquent de la même façon d\'un bureau à l\'autre.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une formation, de la première demande au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez l\'équipe (nombre de personnes, postes, niveau), l\'outil ou le sujet, ce qui ne va pas aujourd\'hui et la date à laquelle vous voulez un résultat. Cela suffit pour proposer une analyse des besoins et dire si la formation est la bonne réponse.'],
                ['titre' => 'Analyse des besoins', 'duree' => '3 à 10 jours, selon le nombre de personnes à interroger', 'texte' => 'Entretien avec le commanditaire, puis avec quelques futurs participants, test de positionnement court, et quand c\'est utile observation d\'un poste de travail. Le résultat est une fiche d\'objectifs écrits, formulés comme des actions que l\'on pourra vérifier.'],
                ['titre' => 'Proposition et devis', 'duree' => '2 à 3 jours après l\'analyse', 'texte' => 'Vous recevez un programme découpé en séances, le format recommandé, la composition des groupes, le mode (salle, distance ou mixte), le calendrier et un devis détaillé. Rien n\'est engagé avant votre accord écrit.'],
                ['titre' => 'Préparation sur vos cas', 'duree' => '1 à 2 semaines', 'texte' => 'Les exercices sont construits avec vos documents, anonymisés quand ils contiennent des données personnelles. Pour Odoo ou Dolibarr, une base de test reproduit votre paramétrage. Les comptes, l\'accès à Internet et le matériel de chaque participant sont vérifiés avant le premier jour.'],
                ['titre' => 'Animation', 'duree' => 'De quelques heures à plusieurs jours, en séances', 'texte' => 'Chaque séance alterne une démonstration courte sur un cas réel et un temps de pratique long, chacun sur son poste. Les questions qui reviennent sont notées et alimentent les supports remis à la fin.'],
                ['titre' => 'Évaluation des acquis', 'duree' => 'En fin de session', 'texte' => 'Chaque participant réalise seul une tâche de son poste, comparée aux objectifs écrits de l\'analyse des besoins. Un questionnaire recueille aussi son avis sur le contenu et le rythme, mais ce n\'est pas lui qui dit si la formation a réussi.'],
                ['titre' => 'Accompagnement après la formation', 'duree' => '1 à 3 mois, selon le format retenu', 'texte' => 'Un canal direct pour les questions d\'application, des séances de suivi espacées quand elles sont prévues, et une relecture des premiers travaux réalisés seuls. C\'est la période où les habitudes se prennent ou se perdent.'],
                ['titre' => 'Bilan avec le commanditaire', 'duree' => 'À la fin de l\'accompagnement, ou à trois mois', 'texte' => 'Ce qui est utilisé, ce qui ne l\'est pas, les personnes qui ont besoin d\'une séance de rattrapage et les obstacles qui relèvent de l\'organisation plutôt que des compétences. Le bilan dit aussi, honnêtement, si une nouvelle formation est utile ou non.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se fait l\'analyse des besoins, et pourquoi change-t-elle le contenu ?',
            'paragraphes' => [
                'La question de départ est toujours la même : qu\'est-ce que ces personnes feront autrement, le lundi qui suit la formation ? Tant que la réponse reste vague (« mieux utiliser l\'IA », « maîtriser Odoo »), aucun programme ne peut être juste. L\'analyse commence donc par le commanditaire, qui dit ce qu\'il attend, puis passe par deux ou trois futurs participants, qui disent ce qu\'ils font vraiment, où ils perdent du temps et ce qui leur fait peur dans l\'outil.',
                'Elle sert aussi à repérer ce qu\'une formation ne réglera pas. Des factures émises en retard peuvent venir d\'un circuit de validation trop long, pas d\'une méconnaissance de Dolibarr. Un flux d\'automatisation qui casse chaque semaine peut venir d\'un fichier source mal tenu. Dans ces cas, l\'analyse le dit par écrit et propose de traiter la cause, par exemple avec une mission de <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a>, au lieu de former des gens à contourner un problème d\'organisation.',
                'Le test de positionnement, enfin, évite les groupes trop hétérogènes. Quand un comptable rompu aux tableurs et une vendeuse qui découvre l\'ordinateur suivent la même séance, l\'un s\'ennuie et l\'autre décroche. Un questionnaire de dix minutes ou un petit exercice suffit à composer des groupes de niveau proche, ou à prévoir une séance de mise à niveau avant la session principale.',
                'Le livrable de cette étape est une fiche d\'objectifs, rédigés comme des actions observables : « émettre un avoir dans Odoo sans aide », « transformer des notes de réunion en compte rendu vérifié », « publier une réponse à un avis négatif ». Ces objectifs servent trois fois : pour construire les exercices, pour évaluer les participants à la fin, et pour remplir un dossier de financement quand vous en déposez un.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Intra, inter, atelier court ou accompagnement : quel format retenir ?',
            'options'  => ['Intra-entreprise', 'Inter-entreprises', 'Atelier court', 'Accompagnement après formation'],
            'criteres' => [
                ['critere' => 'Participants', 'valeurs' => ['Une seule organisation, en groupes composés après l\'analyse des besoins', 'Des personnes de plusieurs organisations dans la même session', 'Une équipe ou un petit groupe réuni autour d\'un seul sujet', 'Les personnes déjà formées et leur référent interne']],
                ['critere' => 'Contenu', 'valeurs' => ['Construit sur vos documents, vos logiciels et vos règles', 'Commun, avec des exemples que chacun peut voir sans rien dévoiler de son entreprise', 'Un geste, un outil ou une décision précise', 'Les difficultés rencontrées depuis la formation, sur le travail réel']],
                ['critere' => 'Confidentialité', 'valeurs' => ['Complète : vos données restent entre vous', 'Aucun document interne n\'est utilisé', 'Selon la composition du groupe', 'Complète']],
                ['critere' => 'Durée habituelle', 'valeurs' => ['Une à plusieurs journées, souvent découpées en demi-journées', 'Une à deux journées', 'Quelques heures', 'Une séance espacée de quelques semaines, sur un à trois mois']],
                ['critere' => 'Quand le choisir', 'valeurs' => ['Un outil à faire adopter par toute une équipe', 'Une ou deux personnes à former, ou un même besoin partagé par plusieurs structures d\'un réseau', 'Découvrir avant d\'investir, ou cadrer un sujet avec la direction', 'Une équipe qui part de loin, ou un usage qui doit tenir dans la durée']],
            ],
            'verdict'  => 'L\'intra convient dès qu\'une équipe entière doit changer sa façon de travailler ; l\'inter, quand le besoin est partagé et le budget serré ; l\'atelier, pour décider ; l\'accompagnement, pour que ce qui a été appris soit encore utilisé trois mois plus tard.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Présentiel ou à distance : que change chaque mode ?',
            'legende' => 'Le mode se choisit après l\'analyse des besoins, selon le public, la connexion disponible et la dispersion de l\'équipe. La formule mixte est souvent la plus efficace pour un logiciel de gestion.',
            'entetes' => ['Critère', 'Présentiel', 'À distance', 'Formule mixte'],
            'lignes'  => [
                ['Lieu', 'Vos locaux ou une salle louée ; déplacements hors de Cotonou prévus au devis', 'Le poste de chaque participant, au bureau ou chez lui', 'Une première session en salle, la suite en visioconférence'],
                ['Connexion', 'Une connexion de secours suffit ; les exercices peuvent se faire hors ligne', 'Indispensable pour chacun, avec caméra, micro et partage d\'écran', 'Exigée seulement pour les séances à distance'],
                ['Rythme', 'Demi-journées ou journées entières', 'Séances courtes, de deux à trois heures, plus faciles à suivre en visioconférence', 'Journée de lancement, puis séances courtes'],
                ['Pratique', 'Le formateur passe derrière chaque écran et corrige sur place', 'Partage d\'écran, travail en sous-groupes, exercices envoyés à l\'avance', 'Prise en main en salle, mise en pratique suivie à distance'],
                ['Pour qui', 'Équipes peu à l\'aise avec l\'ordinateur, premières prises en main d\'un ERP', 'Équipes réparties sur plusieurs sites, organisations en Europe ou au Canada', 'Déploiement d\'un logiciel suivi d\'un accompagnement'],
                ['Coût annexe', 'Déplacement et salle, le cas échéant', 'Aucun déplacement', 'Un seul déplacement'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment mesurer ce que les participants ont réellement appris ?',
            'paragraphes' => [
                'Un questionnaire de satisfaction rempli à la sortie mesure l\'ambiance de la journée, pas les compétences. Une session agréable peut ne rien changer au travail, et une session exigeante peut tout changer. L\'évaluation repose donc sur quatre vérifications successives, décidées dès l\'analyse des besoins pour que chacun sache à l\'avance sur quoi il sera jugé.',
                'La première a lieu en fin de session : chaque participant exécute seul une tâche de son poste, et le résultat est comparé aux objectifs écrits. Pour Odoo, saisir une commande jusqu\'à la facture et l\'encaissement ; pour l\'IA, produire un document à partir d\'une source réelle et signaler ce qu\'il a dû corriger ; pour WhatsApp Business, traiter une série de messages clients avec le catalogue et les étiquettes. La tâche est réussie ou à reprendre, sans note décorative.',
                'La deuxième vérification se fait à un mois, la troisième à trois mois : on regarde ce qui est réellement utilisé. Les indicateurs ont été choisis au départ avec le commanditaire et sont relevés par l\'entreprise elle-même : part des factures émises dans l\'ERP plutôt que dans un tableur, temps passé sur le compte rendu hebdomadaire, nombre de commandes suivies par étiquette, flux d\'automatisation encore actifs.',
                'La quatrième est le bilan écrit remis au commanditaire. Il indique les objectifs atteints par groupe, les personnes à qui une séance de rattrapage serait utile et les obstacles qui ne relèvent pas de la formation. Les résultats individuels ne circulent que selon la règle convenue avec la direction avant la session, et les participants la connaissent dès le premier jour.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que reçoivent les participants et l\'entreprise à la fin de la formation ?',
            'items' => [
                'Le programme écrit, avec les objectifs, la durée, les dates et le nom du formateur.',
                'Les supports de formation, rédigés sur vos cas, dans un format que l\'entreprise peut modifier et redistribuer en interne.',
                'Des fiches réflexes d\'une page pour les opérations courantes de chaque poste.',
                'Les exercices et leurs corrigés, pour refaire seul ou former un nouvel arrivant.',
                'Selon le domaine, la bibliothèque de consignes d\'IA, la documentation des flux d\'automatisation ou la base de test de l\'ERP.',
                'Les feuilles de présence signées par séance, utiles pour un bailleur ou un dossier de financement.',
                'Le résultat de l\'évaluation des acquis, et une attestation de fin de formation par participant.',
                'Le bilan écrit remis au commanditaire, avec les recommandations pour la suite.',
                'Un canal direct pour les questions d\'application pendant la période de suivi convenue.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils sont enseignés, et pourquoi ceux-là ?',
            'legende' => 'Les outils retenus sont ceux que Richard SALANON utilise lui-même en production. Pour chaque client, la formation porte sur la version et le paramétrage réellement installés.',
            'entetes' => ['Outils', 'Formations concernées', 'Raison du choix'],
            'lignes'  => [
                ['ChatGPT, Claude et Gemini', 'IA en entreprise, vibe coding', 'Ce sont les assistants que les équipes rencontrent le plus souvent ; le bon choix dépend des données traitées et des usages, comme le détaille le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>.'],
                ['n8n et Make', 'Automatisation', 'n8n peut s\'installer sur votre propre serveur, Make fonctionne entièrement en ligne ; le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a> aide à choisir avant de former.'],
                ['Odoo et Dolibarr', 'Odoo, Dolibarr', 'Les deux ERP que Richard déploie chez ses clients ; le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a> explique ce qui les distingue.'],
                ['HTML, CSS, JavaScript, PHP, MySQL, Laravel, WordPress', 'Développement web', 'Le socle de tout site, puis PHP et Laravel, qu\'il utilise sur ses projets, et WordPress, qu\'il enseignait déjà à ses débuts de formateur.'],
                ['Éditeurs de code assistés par l\'IA', 'Vibe coding', 'Ils génèrent vite une application ; la formation apprend surtout à décrire, relire et tester ce qu\'ils produisent.'],
                ['WhatsApp Business', 'WhatsApp Business', 'Le canal par lequel une grande partie des commerces vendent déjà ; Wapy, le produit de Richard, repose lui aussi sur WhatsApp.'],
                ['Fiche d\'établissement Google et Search Console', 'Visibilité sur Google', 'Deux outils gratuits fournis par Google, qui suffisent à une petite structure pour être trouvée et suivre sa présence.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble une formation selon votre secteur d\'activité ?',
            'items' => [
                ['secteur' => 'Commerce et distribution, à Cotonou ou à Lomé', 'probleme' => 'Les ventes passent par WhatsApp, le stock se tient sur un cahier, et le Dolibarr installé l\'an dernier ne sert qu\'à imprimer quelques factures.', 'solution' => 'Séances WhatsApp Business pour les vendeurs, Dolibarr pour la caisse et le stock, organisées en boutique hors des heures d\'affluence, avec des fiches réflexes posées près du comptoir.'],
                ['secteur' => 'ONG et projets financés, en Afrique de l\'Ouest', 'probleme' => 'Rapports aux bailleurs, comptes rendus de mission et fiches de bénéficiaires prennent des jours, et certaines données sont sensibles.', 'solution' => 'Formation IA centrée sur la rédaction de rapports à partir de sources vérifiées, avec une règle stricte d\'anonymisation et une charte d\'usage ; séances à distance pour les équipes de terrain dispersées.'],
                ['secteur' => 'Administration et structures parapubliques', 'probleme' => 'Les courriers suivent des modèles stricts, chaque document passe par plusieurs signataires, et l\'usage de l\'IA par les agents n\'est encadré par aucun texte.', 'solution' => 'Une session pour les responsables, qui fixe ce qui est permis, puis des ateliers courts pour les agents, répartis sur plusieurs jours pour ne jamais vider un service.'],
                ['secteur' => 'PME de négoce ou d\'industrie sur Odoo, à Abidjan ou à Dakar', 'probleme' => 'Après le démarrage du logiciel, les utilisateurs le contournent et la direction ne retrouve pas ses chiffres.', 'solution' => 'Séances par poste sur une copie de la base, formation d\'un référent interne, puis accompagnement d\'un mois. Si l\'entreprise vise un financement du FDFP ou du 3FPT, elle en vérifie les conditions avant de signer.'],
                ['secteur' => 'Cabinet ou PME en France, en Belgique ou en Suisse', 'probleme' => 'Les mêmes données sont ressaisies entre la messagerie, le tableur et le logiciel de facturation, et le RGPD s\'applique aux données des clients.', 'solution' => 'Formation à l\'automatisation avec n8n ou Make en séances à distance de deux à trois heures, sur des données de test ; l\'éventuel financement par un OPCO est vérifié en amont.'],
                ['secteur' => 'École, centre de formation ou incubateur', 'probleme' => 'Les formateurs ou les apprenants doivent produire des sites et des prototypes, mais suivent des tutoriels sans fil conducteur.', 'solution' => 'Parcours de développement web ou de vibe coding construit autour d\'un projet réel par apprenant, de la page statique à l\'application en ligne, avec relecture du code à chaque étape.'],
                ['secteur' => 'Entreprise au Québec', 'probleme' => 'L\'entreprise doit investir dans la formation de son personnel et veut des sessions sur l\'IA ou l\'automatisation compatibles avec ses horaires.', 'solution' => 'Séances à distance calées sur le fuseau horaire de l\'équipe ; l\'entreprise vérifie elle-même si la dépense entre dans ses dépenses de formation admissibles.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation en Côte d\'Ivoire, au Bénin ou au Sénégal ?',
            'paragraphes' => [
                'Dans plusieurs pays d\'Afrique de l\'Ouest, les employeurs cotisent déjà pour la formation, et un fonds public peut prendre en charge une partie du coût. Chaque fonds a ses règles, qui changent : ce qui suit a été relevé sur leurs pages officielles le 4 octobre 2026, et ne remplace pas la confirmation écrite du fonds pour votre dossier.',
                'En Côte d\'Ivoire, la <a href="https://fdfp.ci/presentation-du-fdfp/">présentation du FDFP</a> indique que le fonds existe depuis 1991 et gère la taxe d\'apprentissage (0,4 % de la masse salariale) et la taxe additionnelle à la formation professionnelle continue (1,2 %). Selon sa page sur le <a href="https://fdfp.ci/plan-de-formation/">plan de formation</a>, toute entreprise qui justifie du paiement régulier de ces deux taxes peut déposer un plan, réalisé en interne, en intra, en interentreprises ou à l\'étranger ; le règlement intervient après le suivi et le contrôle du fonds, puis l\'approbation de sa Commission permanente.',
                'La page des <a href="https://fdfp.ci/procedures-dhabilitation/">procédures d\'habilitation</a> impose l\'habilitation à tout opérateur de formation privé qui prétend aux financements du FDFP, à l\'exception des structures basées hors de Côte d\'Ivoire, et la prononce pour une année. Un prestataire installé au Bénin n\'est donc pas dans le même cas qu\'un cabinet d\'Abidjan : demandez au FDFP, avant de signer, sous quelle forme une telle formation peut entrer dans votre plan.',
                'Au Bénin, le FODEFCA a vu ses statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Leur article 5 en fait le principal guichet de financement de la formation professionnelle continue dans le secteur privé, et lui confie la mise en place d\'une assurance qualité pour sélectionner les organismes de formation agréés. L\'article 35 cite parmi ses ressources la taxe d\'apprentissage, prélevée sur le versement patronal sur salaire, et des contributions des bénéficiaires comprises, selon les cas, entre 10 et 30 % du coût total de la formation.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/?-Partenaires-">3FPT</a> a notamment pour missions de mobiliser les ressources de la formation professionnelle et de financer la formation continue du personnel ; les entreprises et les organisations professionnelles figurent parmi ses cibles. Son <a href="https://www.3fpt.sn/">site</a> présente un guichet dédié au financement du personnel des entreprises et des membres des organisations professionnelles, avec une plateforme de demande en ligne. Les conditions qui portent sur l\'entreprise et sur le prestataire s\'obtiennent auprès du fonds.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'En France ou au Canada, quels dispositifs faut-il vérifier ?',
            'paragraphes' => [
                'En France, la fiche de service-public sur la <a href="https://entreprendre.service-public.gouv.fr/vosdroits/F22570">contribution à la formation professionnelle</a>, vérifiée le 21 janvier 2026, fixe cette contribution à 0,55 % de la masse salariale brute sous 11 salariés et à 1 % à partir de 11, collectée par l\'Urssaf. Les contributions conventionnelles supplémentaires sont versées aux opérateurs de compétences, les OPCO, qui financent une partie de la formation des salariés.',
                'Ces fonds ont une condition. Selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, depuis le 1er janvier 2022, tout prestataire qui veut accéder aux fonds publics ou mutualisés (OPCO, régions, France Travail, Agefiph, Caisse des dépôts pour le compte personnel de formation, État) doit être certifié Qualiopi par un organisme accrédité par le COFRAC, et la liste des certifiés est publique depuis le 3 janvier 2022. Richard SALANON n\'affiche aucune certification Qualiopi : prévoyez la formation sur votre budget propre, sauf confirmation écrite contraire de votre OPCO.',
                'Au Québec, la <a href="https://www.cpmt.gouv.qc.ca/entreprises/loi-sur-les-competences/a-propos/">Commission des partenaires du marché du travail</a> (page mise à jour le 24 juillet 2025) rappelle qu\'un employeur dont la masse salariale dépasse 2 millions de dollars doit investir au moins 1 % de celle-ci dans le développement des compétences, ou verser la différence au Fonds de développement et de reconnaissance des compétences de la main-d\'œuvre.',
                'Sa page sur les <a href="https://www.cpmt.gouv.qc.ca/entreprises/loi-sur-les-competences/depenses-de-formation-admissibles/">dépenses de formation admissibles</a>, mise à jour le 8 juin 2026, mentionne les formations données par un établissement d\'enseignement reconnu, par un formateur ou un organisme agréé, ou organisées par l\'entreprise selon un plan structuré, ainsi que des activités préalables comme l\'analyse des besoins. Faites confirmer par votre comptable dans quelle catégorie entrerait une formation à distance avec un prestataire non agréé. En Belgique et en Suisse, les aides dépendent de la région ou du canton : renseignez-vous avant de signer.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel piège rend un financement impossible après coup ?',
            'texte' => 'Signer, suivre la formation, puis découvrir que le fonds ne la prendra pas en charge. Chaque dispositif fixe ses propres règles : moment du dépôt du dossier, statut exigé du prestataire (habilitation, agrément, certification Qualiopi), pièces justificatives, part qui reste à votre charge. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds de formation. Si un financement conditionne votre décision, interrogez le fonds par écrit avec le programme et le devis avant de vous engager, et prévoyez le budget sans prise en charge. Le programme, les feuilles de présence et l\'évaluation remis en fin de formation vous serviront quel que soit le dispositif.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels encadrent le financement de la formation ?',
            'items' => [
                ['valeur' => '0,4 %', 'libelle' => 'Taxe d\'apprentissage en Côte d\'Ivoire, en part de la masse salariale, gérée par le FDFP (page consultée le 4 octobre 2026)', 'source' => 'FDFP, présentation', 'url' => 'https://fdfp.ci/presentation-du-fdfp/'],
                ['valeur' => '1,2 %', 'libelle' => 'Taxe additionnelle à la formation professionnelle continue en Côte d\'Ivoire, en part de la masse salariale', 'source' => 'FDFP, présentation', 'url' => 'https://fdfp.ci/presentation-du-fdfp/'],
                ['valeur' => '10 à 30 %', 'libelle' => 'Contribution des bénéficiaires au coût total d\'une formation financée par le FODEFCA, selon les cas', 'source' => 'Statuts du FODEFCA, décret n° 2022-286 du 11 mai 2022', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/'],
                ['valeur' => '1 %', 'libelle' => 'Contribution à la formation professionnelle en France à partir de 11 salariés, contre 0,55 % en dessous (fiche vérifiée le 21 janvier 2026)', 'source' => 'Service-public, entreprendre', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F22570'],
                ['valeur' => '1er janvier 2022', 'libelle' => 'Date depuis laquelle la certification Qualiopi conditionne l\'accès aux fonds publics et mutualisés en France', 'source' => 'France Compétences', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/'],
                ['valeur' => '1 %', 'libelle' => 'Part minimale de la masse salariale à investir en formation au Québec quand elle dépasse 2 millions de dollars', 'source' => 'Commission des partenaires du marché du travail', 'url' => 'https://www.cpmt.gouv.qc.ca/entreprises/loi-sur-les-competences/a-propos/'],
                ['valeur' => '2 février 2025', 'libelle' => 'Entrée en application de l\'obligation de maîtrise de l\'IA prévue par l\'article 4 du règlement européen sur l\'IA', 'source' => 'Commission européenne, questions et réponses', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation en entreprise, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun tarif de départ n\'est publié pour l\'ensemble des formations en entreprise : le prix est fixé sur devis, après l\'analyse des besoins. La page de chaque formation donne des repères par format, et le devis détaille chaque poste.',
            'items'      => [
                ['offre' => 'Analyse des besoins', 'prix' => 'Sur devis', 'inclus' => ['Entretiens avec le commanditaire et des participants', 'Test de positionnement', 'Fiche d\'objectifs écrits', 'Recommandation de format et de groupes']],
                ['offre' => 'Atelier court', 'prix' => 'Sur devis', 'inclus' => ['Quelques heures sur un sujet précis', 'Session de direction ou découverte', 'Supports et fiche réflexe', 'Conseils pour la suite']],
                ['offre' => 'Formation intra-entreprise', 'prix' => 'Sur devis', 'inclus' => ['Programme construit sur vos cas', 'Exercices et base de test', 'Évaluation des acquis', 'Supports, feuilles de présence et attestations', 'Bilan au commanditaire']],
                ['offre' => 'Session mutualisée', 'prix' => 'Sur devis', 'inclus' => ['Plusieurs structures d\'un même réseau', 'Contenu commun sans document interne', 'Coût partagé entre les participants']],
                ['offre' => 'Accompagnement après formation', 'prix' => 'Sur devis', 'inclus' => ['Séances de suivi espacées', 'Canal direct pour les questions', 'Relecture des premiers travaux', 'Bilan à trois mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, car la pratique exige des groupes réduits.',
                'La durée totale et le découpage en séances.',
                'Le degré de personnalisation : exercices construits sur vos documents, base de test reproduisant votre paramétrage.',
                'Le lieu : vos locaux, une salle louée, des déplacements hors de Cotonou.',
                'Le mode : présentiel, distance ou formule mixte.',
                'Le nombre de domaines combinés, par exemple IA et automatisation.',
                'La durée de l\'accompagnement après la formation.',
                'La langue des supports et des séances, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se règle une formation, et que comprend la facture ?',
            'paragraphes' => [
                'Les moyens de paiement acceptés sont le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. Une PME de Cotonou peut donc régler depuis son téléphone, une organisation de Bruxelles ou de Montréal par virement ou par carte. Le devis précise l\'échéancier : acompte à la commande, solde à la fin de la session, et paiement par séance pour un accompagnement étalé sur plusieurs mois.',
                'La facture est établie au nom de l\'organisation qui commande, avec l\'intitulé de la formation, les dates, la durée et le nombre de participants, ce qu\'un fonds ou un bailleur demandent en général de retrouver. Les frais de tiers sont séparés : location de salle, abonnements payants aux assistants d\'IA, licences Odoo Enterprise, hébergement d\'une instance n8n. Ils restent à votre nom chaque fois que c\'est possible, pour que rien ne s\'arrête après la formation.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer une formation en entreprise ?',
            'intro' => 'Une formation échoue rarement le jour même. Elle échoue dans les semaines qui suivent, pour des raisons que l\'on pouvait prévoir.',
            'items' => [
                ['titre' => 'Former avant que l\'outil soit prêt', 'texte' => 'Un ERP dont le paramétrage change encore, des accès qui n\'existent pas, une automatisation non installée : les participants apprennent des écrans qui ne seront pas les leurs. On forme sur l\'outil tel qu\'il sera utilisé, ou sur une copie fidèle.'],
                ['titre' => 'Former trop longtemps avant l\'usage', 'texte' => 'Trois semaines entre la formation et le démarrage suffisent à oublier l\'essentiel. La session se place juste avant la mise en service, et l\'accompagnement couvre les premiers jours d\'usage réel.'],
                ['titre' => 'Mélanger tous les niveaux', 'texte' => 'Un groupe trop hétérogène avance au rythme de personne. Le test de positionnement sert à composer des groupes cohérents, quitte à prévoir une séance de mise à niveau.'],
                ['titre' => 'Laisser la direction en dehors', 'texte' => 'Une équipe n\'utilise durablement que ce que ses responsables demandent et regardent. Si le dirigeant continue d\'exiger le tableur, le logiciel sera abandonné.'],
                ['titre' => 'Travailler sur des exemples génériques', 'texte' => 'Un exercice sur une entreprise fictive se comprend, mais ne se transpose pas. Les cas viennent de vos dossiers, anonymisés si nécessaire.'],
                ['titre' => 'Tout vouloir couvrir en une fois', 'texte' => 'Douze fonctions présentées en une journée, c\'est zéro fonction retenue. Mieux vaut deux ou trois gestes maîtrisés, puis une deuxième session.'],
                ['titre' => 'Ne désigner aucun référent', 'texte' => 'Sans une personne qui répond aux questions en interne et tient les supports à jour, chaque difficulté redevient un appel extérieur ou un abandon.'],
                ['titre' => 'Interdire l\'IA sans former', 'texte' => 'L\'interdiction seule déplace l\'usage vers les téléphones personnels, sans aucune règle. Mieux vaut écrire ce qui est permis et former à le faire correctement.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Données, connexion, langue : que change le contexte local ?',
            'paragraphes' => [
                'Travailler sur vos documents réels impose des règles. Les exercices utilisent des copies anonymisées dès qu\'ils contiennent des données personnelles, et les bases de test ne quittent pas votre environnement. Au Bénin, l\'article 391 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> ne permet de transférer des données personnelles vers un État tiers que si l\'Autorité constate que cet État assure un niveau de protection équivalent. Coller la fiche d\'un client dans un assistant d\'IA hébergé à l\'étranger peut constituer un tel transfert : la formation IA apprend précisément ce qu\'il ne faut jamais y mettre.',
                'En Europe, l\'article 4 du règlement européen sur l\'IA s\'applique depuis le 2 février 2025. Selon les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission européenne</a>, mises à jour le 27 juillet 2026, il demande aux fournisseurs et aux utilisateurs professionnels de systèmes d\'IA de prendre des mesures pour développer la maîtrise de l\'IA de leur personnel. Aucun certificat n\'est exigé ni aucune formation imposée, mais l\'organisation peut garder une trace interne des actions menées : un programme, des feuilles de présence et une évaluation y répondent.',
                'La connexion pèse sur l\'organisation des séances. Les supports sont envoyés avant la session pour être téléchargés à l\'avance, les exercices peuvent se faire hors ligne, et chaque séance à distance a une solution de repli, comme un partage de connexion ou un report court. Une séance à distance peut être enregistrée avec l\'accord des participants, pour ceux dont la connexion a coupé.',
                'Les formations se donnent en français, et en anglais quand une partie de l\'équipe ou la maison mère le demande. Les supports sont rédigés dans la langue de travail de l\'équipe, avec le vocabulaire de vos écrans : un support qui parle de « bon de livraison » quand votre Odoo affiche « transfert » fait perdre du temps à chaque page.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la formation de vos équipes à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'La transmission fait partie de son métier depuis le début. D\'avril 2019 à août 2021, il est à la fois développeur junior et formateur chez VULCAIN-TECH, à Abomey-Calavi : il y enseigne la programmation web à des étudiants, de HTML et CSS à JavaScript, PHP et WordPress, pendant qu\'il développe des applications. Il déclare avoir formé depuis plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Il enseigne ce qu\'il pratique. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déploie Odoo et Dolibarr, construit des automatisations avec n8n et Make et intègre l\'IA dans des logiciels. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il a travaillé au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada.',
                'Sa façon de former tient en quelques engagements vérifiables : une réponse sous 24 heures, une analyse des besoins écrite avant tout devis, des exercices construits sur vos cas, une évaluation sur une tâche réelle, des supports qui restent à l\'entreprise, et une réponse franche sur le financement. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a> et sur la page <a href="/a-propos/">à propos</a> ; les pays servis figurent sur la page <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de commander une formation pour votre équipe ?',
            'texte' => 'Écrivez d\'abord ce que chaque personne devra savoir faire seule après la session, formez sur l\'outil tel qu\'il sera utilisé et sur vos propres dossiers, faites participer la direction, prévoyez un suivi d\'un à trois mois, et faites confirmer tout financement par écrit avant de signer.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe à l\'IA, à un ERP ou au web ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, l\'outil ou le sujet, le mode souhaité et la date visée : vous recevez une réponse sous 24 heures, puis une proposition d\'analyse des besoins et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien coûte une formation en entreprise ?', 'r' => 'Le prix est fixé sur devis, après l\'analyse des besoins. Il dépend du nombre de participants et de groupes, de la durée, du degré de personnalisation des exercices, du lieu, du mode et de l\'accompagnement prévu. La page de chaque formation donne des repères par format, et le devis sépare les frais de formation des frais de tiers.'],
        ['q' => 'Combien de temps dure une formation ?', 'r' => 'De quelques heures pour un atelier ou une session de direction à plusieurs jours pour une formation complète, souvent découpée en demi-journées. L\'analyse des besoins prend de 3 à 10 jours, la préparation 1 à 2 semaines, et l\'accompagnement après la formation 1 à 3 mois quand il est retenu.'],
        ['q' => 'Faut-il des connaissances techniques pour suivre une formation ?', 'r' => 'Non, sauf pour certains parcours avancés d\'automatisation ou de vibe coding. Le test de positionnement mesure le niveau réel de chacun et permet de composer des groupes cohérents. Le développement web peut se commencer en débutant complet.'],
        ['q' => 'La formation peut-elle se faire à distance ?', 'r' => 'Oui. Les séances à distance durent en général deux à trois heures, avec partage d\'écran et exercices envoyés à l\'avance. Pour une première prise en main d\'un ERP ou une équipe peu à l\'aise avec l\'ordinateur, une formule mixte, avec une première session en salle, donne souvent de meilleurs résultats.'],
        ['q' => 'Peut-on former nos équipes sur nos propres documents ?', 'r' => 'C\'est la règle. Les exercices sont construits à partir de vos dossiers, anonymisés dès qu\'ils contiennent des données personnelles, et les bases de test d\'Odoo ou de Dolibarr reproduisent votre paramétrage sans quitter votre environnement.'],
        ['q' => 'Quelle différence entre une formation intra et une formation inter-entreprises ?', 'r' => 'L\'intra réunit une seule organisation et se construit sur ses documents et ses logiciels. L\'inter réunit plusieurs structures autour d\'un contenu commun, sans document interne, ce qui partage le coût. L\'intra convient à une équipe entière, l\'inter à une ou deux personnes ou à un réseau qui partage le même besoin.'],
        ['q' => 'La formation peut-elle être financée par le FDFP, le FODEFCA, le 3FPT ou un OPCO ?', 'r' => 'Cela dépend des règles de chaque fonds et de votre situation. Le FDFP impose par exemple l\'habilitation aux opérateurs privés, sauf à ceux basés hors de Côte d\'Ivoire, et les OPCO exigent un prestataire certifié Qualiopi. Interrogez le fonds par écrit avec le programme et le devis avant de signer.'],
        ['q' => 'Richard SALANON est-il certifié Qualiopi ou agréé par un fonds ?', 'r' => 'Il n\'affiche ni certification Qualiopi ni agrément d\'un fonds de formation. Si un financement conditionne votre décision, vérifiez auprès du fonds ce qu\'il exige du prestataire, et prévoyez le budget sans prise en charge.'],
        ['q' => 'Comment les acquis sont-ils évalués ?', 'r' => 'En fin de session, chaque participant réalise seul une tâche de son poste, comparée aux objectifs écrits de l\'analyse des besoins. À un mois et à trois mois, l\'entreprise relève les indicateurs d\'usage choisis au départ, et un bilan écrit est remis au commanditaire.'],
        ['q' => 'Que reçoit-on à la fin de la formation ?', 'r' => 'Le programme écrit, les supports rédigés sur vos cas, des fiches réflexes, les exercices et leurs corrigés, les feuilles de présence, le résultat de l\'évaluation, une attestation par participant et le bilan au commanditaire. Les supports restent à l\'entreprise, qui peut les modifier.'],
        ['q' => 'Peut-on combiner plusieurs domaines dans une même formation ?', 'r' => 'Oui, quand ils se complètent : IA et automatisation, Odoo et automatisation de la facturation, WhatsApp Business et visibilité sur Google pour un commerce. L\'analyse des besoins dit dans quel ordre les aborder, car tout couvrir en une seule session nuit à ce qui est retenu.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Richard SALANON a travaillé dans onze pays d\'Afrique francophone, en France, en Belgique, en Suisse et au Canada. Les formations se donnent sur place ou à distance, en français ou en anglais, et se règlent par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
    ],

    'sources' => [
        ['titre' => 'FDFP, présentation du fonds (taxe d\'apprentissage et taxe additionnelle à la formation professionnelle continue)', 'url' => 'https://fdfp.ci/presentation-du-fdfp/', 'date' => '2026-10-04'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-04'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-04'],
        ['titre' => '3FPT, missions, cibles et valeurs', 'url' => 'https://www.3fpt.sn/?-Partenaires-', 'date' => '2026-10-04'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-04'],
        ['titre' => 'Service-public, contribution à la formation professionnelle', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F22570', 'date' => '2026-10-04'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-04'],
        ['titre' => 'Commission des partenaires du marché du travail, à propos de la loi sur les compétences', 'url' => 'https://www.cpmt.gouv.qc.ca/entreprises/loi-sur-les-competences/a-propos/', 'date' => '2026-10-04'],
        ['titre' => 'Commission des partenaires du marché du travail, dépenses de formation admissibles', 'url' => 'https://www.cpmt.gouv.qc.ca/entreprises/loi-sur-les-competences/depenses-de-formation-admissibles/', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-04'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['integration-ia-entreprise', 'automatisation-ia', 'integration-odoo', 'integration-dolibarr', 'vibe-coding', 'digitalisation-d-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'n8n-vs-make-vs-zapier', 'odoo-vs-dolibarr'],
    ],
];
