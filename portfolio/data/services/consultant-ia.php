<?php
// ============================================================
// data/services/consultant-ia.php · Pilier service « Consultant IA ».
// Page de conseil : diagnostic, cas d'usage, feuille de route, choix d'outils,
// règles de données, pilotage, formation, mesure. Honoraires sur devis ; aucun
// tarif de conseil dans la fiche de faits. Chiffres externes relevés sur les
// pages officielles (Commission européenne, DataReportal, CNIL, CAI, SGG Bénin).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Consultant IA : décider où l’intelligence artificielle sert votre entreprise, avec quelles données et quels outils',
    'title'   => 'Consultant IA au Bénin et en Afrique | Richard SALANON',
    'meta'    => 'Consultant IA : diagnostic de vos usages et données, cas d’usage rentables, choix des outils, conformité et formation des équipes. Devis sous 24 h.',
    'en_bref' => 'Un consultant IA vous aide à décider avant d’acheter : diagnostic de vos usages et de vos données, choix des cas d’usage qui valent l’effort, feuille de route, sélection des outils (ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, n8n), règles de protection des données, formation des équipes et mesure des résultats. Pour les dirigeants de PME, cabinets, ONG, écoles et administrations d’Afrique francophone, d’Europe et du Canada. La durée et les honoraires sont fixés sur devis, selon la taille de l’organisation.',
    'publie'  => '2026-11-06',
    'maj'     => '2026-11-06',
    'famille' => 'Applications et IA',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => 'Annoncé sur le devis, selon la taille de l’organisation'],
        ['l' => 'Pour qui', 'v' => 'Dirigeants de PME, cabinets, ONG, écoles et administrations, en Afrique francophone, en Europe et au Canada'],
        ['l' => 'Livrables', 'v' => 'Cartographie des usages, cas d’usage classés, feuille de route, choix d’outils, règles de données, plan de formation'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que fait un consultant IA, et que ne fait-il pas ?',
            'paragraphes' => [
                'Un consultant IA intervient quand une organisation sent que l’intelligence artificielle la concerne, mais ne sait ni par où commencer, ni quoi acheter, ni ce qu’elle peut confier à ces outils sans danger. Son produit n’est pas un logiciel. C’est une décision documentée : quels usages méritent d’être lancés, dans quel ordre, avec quels outils, sur quelles données, et comment on saura que cela fonctionne.',
                'Concrètement, le travail couvre sept gestes. Observer comment les équipes travaillent et ce qu’elles font déjà avec l’IA, souvent sans l’avouer. Inventorier les données disponibles et leur sensibilité. Choisir les cas d’usage rentables et écarter les autres. Bâtir une feuille de route réaliste. Comparer et choisir les outils. Fixer les règles de données et de conformité. Former les équipes, puis mesurer ce qui a changé.',
                'Ce que le consultant ne fait pas compte autant. Il ne promet pas de gain chiffré avant d’avoir regardé vos processus, parce qu’un pourcentage annoncé d’avance ne repose sur rien. Il ne remplace pas un juriste pour un avis de droit, et il ne décide pas à votre place.',
                'La frontière avec les autres services est nette. Mettre en production des flux automatisés relève de l’<a href="/services/automatisation-ia">automatisation avec n8n et Make</a>. Brancher un modèle dans vos logiciels existants relève de l’<a href="/services/integration-ia-entreprise">intégration de l’IA dans l’entreprise</a>. Construire un assistant pour vos clients relève des <a href="/services/agents-ia-chatbot-whatsapp">agents IA et chatbots WhatsApp</a>. Le conseil vient avant : il dit lequel de ces chantiers vaut d’être lancé, et lequel peut attendre.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes voit-on qu’il est temps de se faire conseiller sur l’IA ?',
            'intro' => 'Le besoin se présente rarement comme une demande de stratégie. Il prend la forme de situations très concrètes, que l’on retrouve de Cotonou à Lyon et de Dakar à Montréal.',
            'items' => [
                ['titre' => 'Les équipes utilisent déjà l’IA, chacune dans son coin', 'texte' => 'Un comptable colle des relevés dans un assistant gratuit, une assistante rédige les courriels avec un autre, un commercial résume les appels avec un troisième. Personne n’a décidé quelles données peuvent sortir de l’entreprise. L’urgence est alors de poser des règles, avant même de choisir des outils.'],
                ['titre' => 'Les propositions des prestataires sont impossibles à départager', 'texte' => 'Trois offres, trois vocabulaires, trois prix sans rapport. Un regard indépendant les traduit dans une grille commune et montre ce que chacune ne couvre pas, notamment la formation et le suivi après la mise en service.'],
                ['titre' => 'Un essai a été lancé puis abandonné', 'texte' => 'Un abonnement payé pendant six mois et ouvert par deux personnes, un chatbot que personne ne consulte. La cause est presque toujours le choix du cas d’usage ou l’absence de responsable, rarement l’outil lui-même.'],
                ['titre' => 'Les données sont dispersées ou sensibles', 'texte' => 'Dossiers de patients, données d’élèves, contrats, fichiers de bénéficiaires d’une ONG : plus la matière est sensible, plus le choix de l’outil et de son hébergement pèse. Le conseil précède l’essai, pas l’inverse.'],
                ['titre' => 'Un bailleur, un client ou un partenaire pose des questions', 'texte' => 'Appel d’offres qui demande la politique d’usage de l’IA, questionnaire de sécurité d’un grand compte, exigence d’un financeur : la réponse doit être écrite, cohérente et vérifiable. Un cadre d’usage rédigé règle la question une fois pour toutes.'],
                ['titre' => 'Le dirigeant veut comprendre avant de signer', 'texte' => 'Il ne cherche pas à devenir technicien. Il veut savoir poser les bonnes questions, repérer une promesse irréaliste et arbitrer entre deux budgets. Quelques séances courtes y suffisent souvent.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une mission de conseil IA, du cadrage à la mesure ?',
            'items' => [
                ['titre' => 'Entretien de cadrage', 'texte' => 'Un échange, sur place ou à distance, pour comprendre l’activité, la décision à prendre et les contraintes. Cet échange vérifie aussi que le conseil se justifie : si votre choix est déjà fait, mieux vaut le dire.', 'duree' => 'Selon le devis'],
                ['titre' => 'Diagnostic des usages et des données', 'texte' => 'Entretiens individuels avec les personnes qui font réellement le travail, inventaire des outils et abonnements déjà utilisés, repérage des documents et des bases de données, classement des données selon leur sensibilité. On relève aussi ce que les équipes font déjà avec l’IA.', 'duree' => 'Selon le devis'],
                ['titre' => 'Choix des cas d’usage', 'texte' => 'Chaque idée est évaluée selon la même grille : fréquence de la tâche, temps qu’elle prend, qualité des données disponibles, risque en cas d’erreur, effort de mise en place. Le résultat est un classement de trois à six cas d’usage, avec ceux que l’on écarte et la raison.', 'duree' => 'Selon le devis'],
                ['titre' => 'Feuille de route et choix des outils', 'texte' => 'Les cas retenus sont ordonnés dans le temps, avec les outils proposés, leurs coûts récurrents, les responsables et les conditions d’arrêt. Les outils sont comparés sur vos documents réels, pas sur des démonstrations.', 'duree' => 'Selon le devis'],
                ['titre' => 'Règles de données et de conformité', 'texte' => 'Rédaction d’une charte d’usage lisible : ce qui peut être envoyé à un outil d’IA, ce qui reste interne, qui valide, comment on journalise. Elle tient compte du cadre légal de chaque pays où l’organisation travaille.', 'duree' => 'Selon le devis'],
                ['titre' => 'Restitution et formation des équipes', 'texte' => 'Présentation aux décideurs, puis ateliers pour les équipes sur leurs propres dossiers. Les formations détaillées relèvent de la <a href="/services/formation-en-entreprise">formation en entreprise</a>.', 'duree' => 'Selon le devis'],
                ['titre' => 'Pilotage et mesure', 'texte' => 'Points réguliers pendant les premiers mois : relevé du temps réellement gagné, des erreurs constatées et de l’usage effectif des outils. La feuille de route est corrigée selon ces mesures, non selon des impressions.', 'duree' => 'Mensuel, à la demande'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que recevez-vous concrètement à la fin d’une mission de conseil IA ?',
            'items' => [
                'Une cartographie des usages actuels de l’IA dans l’organisation, y compris les usages non déclarés, avec les outils et les données concernés.',
                'Un classement de trois à six cas d’usage, noté selon une grille écrite, avec les cas écartés et les raisons de leur rejet.',
                'Une feuille de route par étapes, avec responsables, coûts récurrents à prévoir, critères de réussite et conditions d’arrêt.',
                'Un comparatif d’outils testé sur vos propres documents, avec une recommandation motivée et une solution de repli.',
                'Une charte d’usage de l’IA en quelques pages, utilisable telle quelle auprès des équipes, des clients et des bailleurs.',
                'Un classement de vos données selon leur sensibilité, avec ce qui peut quitter l’entreprise et ce qui doit rester chez vous.',
                'Un plan de formation par métier, avec les exercices à faire sur vos dossiers réels.',
                'Un tableau de suivi à remplir chaque mois : temps gagné, erreurs relevées, usage effectif.',
                'Une séance de restitution aux décideurs, et le dossier complet qui vous appartient, sans engagement de poursuite avec Richard SALANON.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu’est-ce qu’un audit IA pour une PME, et que contient-il ?',
            'paragraphes' => [
                'Un audit IA est l’état des lieux qui ouvre la mission : il relève ce que les équipes font déjà avec l’intelligence artificielle, classe les données selon leur sensibilité et mesure l’écart entre les pratiques réelles et les règles que la direction croit appliquées. Il se termine par une liste de décisions, pas par l’achat d’un logiciel.',
                'Dans une PME, l’audit tient en peu de pages parce que le périmètre est limité : quelques services, une poignée d’abonnements, des fichiers répartis entre un serveur, une messagerie et des téléphones. Il s’appuie sur des entretiens avec les personnes qui font le travail, plus que sur des questionnaires, car l’usage non déclaré ne figure dans aucun tableau.',
                'Le rapport d’audit se lit en une séance. Il distingue ce qui est urgent (une règle de données à poser, un abonnement inutile à résilier), ce qui est à tester (un ou deux cas d’usage) et ce qui peut attendre. Si vous souhaitez ensuite le faire exécuter par une autre équipe, il est écrit pour cela.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il choisir une agence IA ou un consultant indépendant pour une PME ?',
            'paragraphes' => [
                'Cela dépend de ce que vous achetez. Une agence IA vend souvent une réalisation : un chatbot, un flux, une intégration. Un consultant indépendant vend d’abord une décision : quoi lancer, avec quoi, et dans quel ordre. Pour une PME qui n’a pas encore choisi son premier cas d’usage, commencer par le conseil évite de payer une réalisation mal ciblée.',
                'L’agence a pour elle la taille : plusieurs profils disponibles en même temps, une capacité à absorber un grand chantier. Le consultant indépendant a pour lui la proximité : vous parlez à la personne qui mène le diagnostic et signe les livrables, sans intermédiaire. Posez dans les deux cas les mêmes questions : qui possède les comptes à la fin, quels documents sont remis, et l’outil recommandé est-il revendu par le prestataire.',
                'Richard SALANON travaille en indépendant, depuis Cotonou. Si votre projet exige ensuite une équipe plus large, la mission de conseil reste utile : son dossier se confie à l’agence de votre choix.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment choisit-on les cas d’usage qui valent l’effort ?',
            'paragraphes' => [
                'La moitié du travail d’un consultant IA consiste à dire non. Dans une organisation de vingt personnes, on trouve facilement trente idées : résumer les réunions, répondre aux clients, trier les courriels, rédiger les appels d’offres, lire les factures, analyser les ventes. Toutes sont possibles. Peu méritent d’être lancées cette année.',
                'Cinq questions départagent les idées. La tâche revient-elle assez souvent pour que le gain s’additionne ? Les données nécessaires existent-elles, propres et accessibles ? Une erreur coûte-t-elle une minute de correction ou un litige avec un client ? Quelqu’un dans l’équipe est-il prêt à porter l’usage et à relire les résultats ? Enfin, la mise en place coûte-t-elle moins que le temps qu’elle libère sur une année ? Un cas qui échoue à deux de ces questions est écarté ou repoussé.',
                'Les bons premiers cas se ressemblent. Ils portent sur du texte, qui est la matière où les modèles de langage excellent : synthèse, reformulation, classement, extraction d’informations dans des documents. Ils gardent un humain dans la boucle. Ils touchent peu de données sensibles. Ils produisent un résultat que l’on peut vérifier en moins d’une minute. Les cas risqués, ceux qui engagent seuls l’entreprise vis-à-vis d’un client ou d’un patient, viennent plus tard, avec des garde-fous.',
                'Ce classement évite aussi un piège courant : partir de l’outil à la mode et chercher ensuite un problème à lui donner. La démarche inverse prend deux semaines de plus au départ et en économise plusieurs mois ensuite.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM ou n8n : lequel pour quel besoin ?',
            'legende' => 'Repères de choix, à confirmer par un essai sur vos documents. Les offres, les prix et les conditions d’hébergement changent souvent : ils sont vérifiés chez l’éditeur au moment de la mission, jamais recopiés d’un comparatif ancien. Richard SALANON ne détient aucune certification d’éditeur.',
            'entetes' => ['Outil', 'Où il est utile', 'Point à vérifier avant de le généraliser'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction, synthèse, analyse de documents, usage polyvalent par toute l’équipe', 'Paramètres de confidentialité du compte, différence entre version personnelle et version entreprise, lieu de traitement des données'],
                ['Claude (Anthropic)', 'Longs documents, rédaction soignée, relecture, analyse de contrats et de rapports', 'Conditions d’usage des données selon l’offre, disponibilité des moyens de paiement depuis votre pays'],
                ['Gemini (Google)', 'Organisations déjà sur Google Workspace, recherche dans Gmail, Drive et Documents', 'Droits d’accès hérités du Drive : l’outil peut exposer un document mal partagé'],
                ['Copilot (Microsoft)', 'Organisations déjà sur Microsoft 365, Word, Excel, Outlook et Teams', 'Qualité du classement des fichiers et des droits : l’outil révèle les désordres existants'],
                ['DeepSeek', 'Essais à faible coût, modèles ouverts pouvant être hébergés par vos soins', 'Hébergement et juridiction du service en ligne'],
                ['NotebookLM (Google)', 'Interroger un corpus fermé de documents avec renvoi aux sources, préparer des synthèses', 'Limites de volume, nature des documents que l’on peut y déposer, relecture des citations'],
                ['n8n', 'Relier ces outils entre eux et à vos logiciels, déclencher des traitements automatiques', 'Ce n’est pas un modèle d’IA mais un orchestrateur : il demande un hébergement, un suivi et un responsable'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il acheter un outil pour commencer ?',
            'paragraphes' => [
                'Un conseil sur les outils n’a de valeur que s’il est justifié par un essai sur vos documents. Le meilleur choix pour vous peut être un outil gratuit, ou l’abonnement que vous payez déjà. Ouvrez vos comptes vous-même, à votre nom, et restez propriétaire des accès.',
                'Cette exigence a un coût : chaque recommandation doit être justifiée par un essai. Elle a un avantage pour vous : si la recommandation est de ne rien acheter, parce que l’abonnement que vous payez déjà suffit, le rapport le dira. Dans une organisation qui utilise déjà Microsoft 365 ou Google Workspace, l’assistant intégré à cette suite est souvent le premier à essayer, avant tout autre abonnement.',
                'Le choix ne se limite pas à un modèle. Il porte aussi sur le mode d’accès : compte individuel, compte d’équipe avec administration, accès par interface de programmation relié à vos logiciels, ou modèle ouvert hébergé chez vous. Chaque mode a ses coûts, ses risques de confidentialité et son niveau de contrôle. Le rapport les expose pour chaque cas d’usage retenu.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'À quoi ressemble un plan de 30, 60 et 90 jours ?',
            'legende' => 'Modèle de plan présenté à titre d’illustration de la forme du livrable. Il ne décrit aucun client réel ; le contenu de chaque phase dépend du diagnostic.',
            'entetes' => ['Période', 'Objectif', 'Actions', 'Critère de passage à l’étape suivante'],
            'lignes'  => [
                ['Jours 1 à 30', 'Poser le cadre', 'Charte d’usage signée, comptes d’équipe ouverts avec administration, premier atelier pour tous, choix d’un cas d’usage pilote avec un responsable nommé', 'Les règles sont connues de tous et le responsable du pilote a du temps réservé'],
                ['Jours 31 à 60', 'Tester le pilote', 'Usage encadré du cas pilote par un petit groupe, relevé hebdomadaire du temps passé et des erreurs, ajustement des consignes et des modèles de documents', 'Les erreurs relevées restent acceptables et le groupe pilote souhaite continuer'],
                ['Jours 61 à 90', 'Décider et élargir', 'Bilan chiffré à partir des relevés, décision de généraliser, d’ajuster ou d’arrêter, lancement d’un deuxième cas d’usage, plan de formation par métier', 'La décision est prise sur des chiffres relevés, et non sur des impressions'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble le conseil IA selon votre secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Cabinet comptable ou juridique, Cotonou ou Lyon', 'probleme' => 'Les collaborateurs utilisent des assistants gratuits sur des dossiers clients confidentiels, sans règle ni traçabilité.', 'solution' => 'Classement des données par sensibilité, charte qui interdit certains envois, choix d’un compte d’équipe avec contrat adapté, premiers usages limités à la synthèse de textes publics et à la rédaction de courriers types.'],
                ['secteur' => 'École ou centre de formation, Abidjan ou Bruxelles', 'probleme' => 'Les enseignants emploient l’IA pour préparer les cours, les élèves pour leurs devoirs, et la direction n’a pas de position claire.', 'solution' => 'Règles d’usage distinctes pour les enseignants, les élèves et l’administration, atelier de prise en main pour le corps enseignant, protection des données des élèves, indicateurs pour juger de l’effet réel sur la préparation des cours.'],
                ['secteur' => 'ONG et projet de développement, Ouagadougou ou Genève', 'probleme' => 'Les rapports aux bailleurs, les comptes rendus de terrain et les appels à propositions prennent un temps considérable et touchent des données de bénéficiaires.', 'solution' => 'Cas d’usage sur la rédaction et la traduction de rapports à partir de notes anonymisées, interdiction d’envoyer les listes de bénéficiaires, relecture humaine obligatoire avant tout envoi à un financeur.'],
                ['secteur' => 'Commerce et distribution, Dakar ou Montréal', 'probleme' => 'Les demandes de clients arrivent par WhatsApp à toute heure et les fiches produits sont rédigées à la main.', 'solution' => 'Tri entre ce qui relève d’un <a href="/services/agents-ia-chatbot-whatsapp">agent WhatsApp</a>, d’une rédaction assistée de fiches et de ce qui doit rester humain, avec un budget de messages estimé avant de décider.'],
                ['secteur' => 'Clinique ou cabinet de santé, Lomé ou Paris', 'probleme' => 'Le personnel voudrait gagner du temps sur les comptes rendus, mais les données de santé sont d’une sensibilité extrême.', 'solution' => 'Exclusion des données de santé identifiables des outils grand public, étude d’un hébergement maîtrisé pour les usages futurs, premiers usages sur l’administratif et la planification uniquement.'],
                ['secteur' => 'PME industrielle ou de négoce, Douala ou Lille', 'probleme' => 'Les offres de prix, les bons de commande et les relances se traitent à la main dans plusieurs fichiers.', 'solution' => 'Feuille de route en deux temps : d’abord une <a href="/services/automatisation-ia">automatisation</a> des relances et de la saisie, ensuite une <a href="/services/integration-ia-entreprise">intégration de l’IA</a> pour lire les documents entrants.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un consultant IA, et qu’est-ce qui fait varier les honoraires ?',
            'intro'      => 'Les honoraires sont fixés sur devis, après un échange de cadrage. Le devis détaille le périmètre, les livrables et le calendrier avant tout engagement. Aucun tarif de conseil n’est affiché ici, parce qu’un montant publié sans connaître votre organisation serait faux dans la plupart des cas. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. L’échéancier figure sur le devis, avant signature. Les abonnements aux outils d’IA et les jetons consommés dépendent de l’éditeur et sont à prévoir en plus des honoraires.',
            'items'      => [
                ['offre' => 'Échange de cadrage', 'prix' => 'Sur devis', 'inclus' => ['Échange sur place ou à distance', 'Vérification que le conseil se justifie']],
                ['offre' => 'Diagnostic et feuille de route', 'prix' => 'Sur devis', 'inclus' => ['Durée annoncée sur le devis, selon la taille de l’organisation', 'Cartographie des usages, cas d’usage classés, feuille de route, charte d’usage', 'Restitution aux décideurs']],
                ['offre' => 'Choix d’outils testé sur vos documents', 'prix' => 'Sur devis', 'inclus' => ['Grille de critères, essais sur dossiers réels, recommandation motivée', 'Peut s’ajouter au diagnostic ou être commandé seul']],
                ['offre' => 'Séances pour dirigeants et ateliers d’équipe', 'prix' => 'Sur devis', 'inclus' => ['Séances individuelles, en comité de direction ou par métier', 'Sur place ou à distance']],
            ],
            'variations' => [
                'Le nombre de personnes à rencontrer et de services concernés : dix entretiens ne représentent pas le même travail que quarante.',
                'La sensibilité des données : un cabinet de santé ou une administration demande plus de temps de cadrage qu’un commerce de détail.',
                'Le nombre de pays et de cadres légaux à couvrir dans la charte d’usage.',
                'Le nombre d’outils à essayer sur vos documents, et le volume de ces documents.',
                'La présence ou non d’ateliers de formation.',
                'Les déplacements éventuels hors du Bénin, chiffrés à part sur le devis lorsqu’ils sont demandés.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer une démarche d’IA en entreprise ?',
            'intro' => 'Ces erreurs reviennent d’une organisation à l’autre. Les connaître avant la mission évite d’en payer le prix.',
            'items' => [
                ['titre' => 'Choisir l’outil avant le problème', 'texte' => 'Un abonnement est souscrit parce qu’un concurrent en parle, puis l’on cherche à quoi l’employer. Les équipes l’abandonnent en quelques semaines. Le cas d’usage doit précéder l’outil.'],
                ['titre' => 'Interdire sans proposer', 'texte' => 'Une interdiction pure pousse les usages dans l’ombre : les employés continuent sur leur téléphone personnel, sans aucune règle. Mieux vaut un outil validé et une charte qu’un interdit que personne ne respecte.'],
                ['titre' => 'Confier des données sensibles à un compte gratuit', 'texte' => 'Les conditions d’un compte gratuit ne sont pas celles d’un contrat d’entreprise, notamment sur la réutilisation des données. Le classement des données doit se faire avant le premier essai.'],
                ['titre' => 'Croire un chiffre de gain annoncé d’avance', 'texte' => 'Un pourcentage promis avant d’avoir regardé vos processus ne repose sur rien. Le seul chiffre fiable est celui que vous relevez vous-même, avant et après, sur votre propre activité.'],
                ['titre' => 'Oublier la relecture humaine', 'texte' => 'Un modèle peut produire un texte fluide et faux. Tout résultat qui sort de l’entreprise doit avoir été relu par quelqu’un qui répond de son contenu.'],
                ['titre' => 'Former une fois et ne plus revenir', 'texte' => 'Une demi-journée de formation s’oublie en trois semaines si personne ne pratique. Les usages durent quand ils sont repris dans les tâches de chaque semaine, avec un référent désigné.'],
                ['titre' => 'Ne rien mesurer', 'texte' => 'Sans relevé du temps passé avant et après, la décision de généraliser se prend à l’impression. C’est la porte ouverte aux abonnements qui s’accumulent sans bénéfice visible.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quels signaux doivent vous alerter chez un consultant IA ?',
            'texte' => 'Méfiez-vous de celui qui annonce un pourcentage de gain avant d’avoir vu une seule de vos tâches, de celui qui présente une certification d’éditeur comme garantie de compétence sans pouvoir montrer un travail, de celui qui revend l’outil qu’il recommande sans le dire, et de celui qui ne vous remet aucun document que vous puissiez faire examiner ailleurs. Demandez aussi qui possède les comptes et les accès à la fin de la mission : la réponse doit être vous.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité faut-il fixer avant d’utiliser l’IA ?',
            'paragraphes' => [
                'Les règles se déduisent d’un principe simple : une donnée personnelle envoyée à un outil d’IA est une donnée personnelle traitée, avec les obligations qui s’y attachent. Au Bénin, le cadre est posé par la loi n° 2017-20 du 20 avril 2018 portant code du numérique, qui traite de la protection des données à caractère personnel. L’Autorité de protection des données à caractère personnel (APDP) publie sur son site les rubriques consacrées aux déclarations et autorisations de traitements et aux transferts de données hors du Bénin.',
                'En Europe, le RGPD impose notamment la transparence, la finalité déterminée, la minimisation des données, la limitation de leur conservation et leur sécurité, et reconnaît des droits aux personnes, dont l’opposition aux décisions individuelles entièrement automatisées. Le règlement européen sur l’intelligence artificielle s’y ajoute : la Commission européenne indique que les pratiques interdites et les obligations de maîtrise de l’IA s’appliquent depuis le 2 février 2025, et que le texte est devenu applicable de façon générale le 2 août 2026.',
                'Au Québec, la Loi 25 impose une évaluation des facteurs relatifs à la vie privée avant de communiquer des renseignements personnels hors du Québec ou de mettre en place un système d’information qui en traite, et l’obligation d’informer une personne lorsqu’une décision la concernant repose exclusivement sur un traitement automatisé. Les autres pays de la zone ont leur propre texte et leur propre autorité.',
                'La charte d’usage traduit ces textes en règles que tout employé comprend : quelles catégories de données ne partent jamais, lesquelles partent seulement vers un outil validé, qui peut ouvrir un compte, comment on conserve la trace des usages. Elle ne remplace pas un avis juridique. Pour un traitement lourd, notamment de données de santé ou d’enfants, Richard SALANON recommande de faire relire la charte par un juriste de votre pays.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres officiels retenir avant de lancer une démarche d’IA ?',
            'items' => [
                ['valeur' => '2 août 2026', 'libelle' => 'Date à laquelle le règlement européen sur l’IA est devenu applicable de façon générale, à quelques exceptions près, selon la Commission européenne (règles sur les systèmes à haut risque de l’annexe III reportées au 2 décembre 2027, celles de l’annexe I au 2 août 2028) ; les pratiques interdites et les obligations de maîtrise de l’IA s’appliquent depuis le 2 février 2025', 'source' => 'Commission européenne, cadre réglementaire de l’IA', 'url' => 'https://digital-strategy.ec.europa.eu/fr/policies/regulatory-framework-ai'],
                ['valeur' => '32,2 %', 'libelle' => 'Part de la population béninoise qui utilise Internet en octobre 2025, soit 4,80 millions de personnes', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '16,4 millions', 'libelle' => 'Connexions mobiles cellulaires au Bénin fin 2025, soit 110 % de la population, ce qui montre que l’usage passe d’abord par le téléphone', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '10 M$ ou 2 %', 'libelle' => 'Sanctions administratives pécuniaires au Québec : la Commission d’accès à l’information indique qu’elles pourraient atteindre 2 % du chiffre d’affaires mondial ou 10 millions de dollars', 'source' => 'Commission d’accès à l’information du Québec, Loi 25', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25'],
                ['valeur' => '1 mois', 'libelle' => 'Délai maximal indiqué par le RGPD pour répondre à une personne qui exerce ses droits sur ses données', 'source' => 'CNIL, texte du RGPD, considérant 59', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte local pour le conseil IA en Afrique francophone ?',
            'paragraphes' => [
                'Le téléphone mobile est la porte d’entrée : avec 16,4 millions de connexions pour 4,80 millions d’internautes déclarés au Bénin, selon DataReportal, un usage de l’IA qui suppose un ordinateur de bureau et une fibre rapide laisse de côté une grande partie des équipes. Le diagnostic regarde donc ce que les employés possèdent réellement : téléphone, forfait de données, accès à WhatsApp, place de stockage.',
                'Le paiement des outils est un autre point. Les abonnements des éditeurs se règlent en dollars ou en euros, par carte internationale. Dans la zone franc CFA, toutes les organisations n’en disposent pas, et les taux de change et frais bancaires s’ajoutent au prix affiché. La feuille de route chiffre donc l’abonnement tel que vous le paierez, frais compris, et propose une alternative lorsque le paiement pose problème.',
                'La langue compte aussi. Les modèles sont généralement plus à l’aise en français qu’en langues locales, mais les résultats varient sur les noms propres, le vocabulaire juridique ou administratif et les formats de documents locaux. Le consultant fait donc l’essai sur vos documents en français, et note ce qui demande une relecture renforcée.',
                'Enfin, la connectivité n’est pas toujours stable. Un usage qui dépend d’une connexion permanente à un service lointain doit prévoir ce qui se passe quand la liaison tombe. Pour les organisations qui travaillent entre l’Afrique et l’Europe, la charte précise aussi le pays dont la loi s’applique à chaque catégorie de données.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier ce conseil à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                'Il compte plus de six ans d’expérience, a travaillé dans quinze pays dont le Bénin, la Côte d’Ivoire, le Sénégal, la France, la Belgique, la Suisse et le Canada, et formé plus de 200 personnes. Il a suivi une formation à EPITECH (2022), a créé Wapy, assistant WhatsApp à intelligence artificielle, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Il ne détient aucune certification d’éditeur et ne le prétend pas : son travail se juge sur les documents qu’il remet et sur les essais menés avec vos données.',
                'Sa façon de travailler tient en quatre engagements. Il écoute avant de recommander. Il met par écrit chaque critère de choix. Il vous remet des livrables qui vous appartiennent et que vous pouvez montrer à un autre prestataire. Et il sait dire quand le bon choix est de ne rien acheter. Parce qu’il réalise aussi des projets, il le dit d’emblée et sépare la mission de conseil de toute réalisation éventuelle : le cahier des charges peut être confié à qui vous voulez. Pour en savoir plus sur son parcours, voir la page <a href="/a-propos/">à propos</a> ou la présentation de <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de faire appel à un consultant IA ?',
            'texte' => 'Un bon consultant IA ne promet pas de gain chiffré d’avance : il vous aide à choisir les usages qui valent l’effort, à protéger vos données, à former vos équipes et à mesurer ce qui change. Commencez par un cas d’usage, un responsable et un relevé du temps passé. Si les chiffres ne bougent pas, arrêtez ; s’ils bougent, étendez.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous savoir où l’IA peut servir votre entreprise, et où elle ne le doit pas ?',
            'texte'  => 'Décrivez votre activité, les outils déjà utilisés et ce qui vous préoccupe : vous recevez une réponse sous 24 heures, puis un échange de cadrage pour savoir si une mission de conseil se justifie.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un échange de cadrage'],
        ],
    ],

    'faq' => [
        ['q' => "Consultant IA, expert IA, professionnel de l’IA : y a-t-il une différence ?", 'r' => "Les termes se recouvrent. Un consultant IA conseille une organisation sur ses usages, ses outils et ses règles de données ; un expert IA ou un spécialiste de l’IA est plutôt un profil technique (modèles, données, développement) ; « professionnel de l’IA » est un terme large qui couvre les deux. Aucun de ces titres n’est protégé : demandez des documents que vous pouvez faire examiner ailleurs et des essais sur vos propres données. Richard SALANON exerce comme consultant et comme formateur, sans certification d’éditeur."],
        ['q' => 'Qu’est-ce qu’un consultant IA, et en quoi diffère-t-il d’une agence d’automatisation ?', 'r' => 'Une agence d’automatisation construit des flux ou des chatbots que vous avez déjà décidé de commander. Un consultant IA intervient avant : il observe vos usages et vos données, choisit les cas d’usage qui valent l’effort, compare les outils, fixe les règles et prépare la formation. Son livrable est une décision documentée, que vous pouvez faire exécuter par qui vous voulez.'],
        ['q' => 'Existe-t-il un consultant IA au Bénin ?', 'r' => 'Oui. Richard SALANON est basé à Cotonou et conseille des organisations au Bénin, dans le reste de l’Afrique francophone, en Europe et au Canada. Les missions se mènent à distance ou sur place, selon le devis, avec des entretiens individuels en visioconférence ou par téléphone.'],
        ['q' => 'Êtes-vous consultant IA freelance ?', 'r' => 'Oui. Richard SALANON exerce en indépendant depuis Cotonou : le devis, le diagnostic et les livrables passent par lui, que la mission se mène au Bénin, ailleurs en Afrique francophone, en Europe ou au Canada. Le tarif se fixe sur devis, selon le périmètre de la mission.'],
        ['q' => 'IA pour PME : par où commencer ?', 'r' => 'Par un inventaire, pas par un achat. Notez ce que vos équipes font déjà avec l’IA, classez vos données selon leur sensibilité, puis choisissez un seul cas d’usage fréquent, vérifiable en moins d’une minute et confié à un responsable. Relevez le temps passé avant et après. C’est le cœur d’un audit IA, que vous pouvez mener seul ou avec un consultant.'],
        ['q' => 'Quelle différence entre un audit IA et une mission de conseil complète ?', 'r' => 'L’audit est la première étape : état des lieux des usages, des outils et des données, avec une liste de décisions. La mission complète y ajoute la feuille de route, la comparaison des outils sur vos documents, la charte d’usage, la formation et le suivi. Le périmètre exact, audit seul ou mission complète, se fixe sur le devis, après l’échange de cadrage.'],
        ['q' => 'Combien coûte un consultant IA ?', 'r' => 'Les honoraires sont fixés sur devis. Le prix dépend du nombre de personnes à rencontrer, de la sensibilité des données, du nombre de pays et de cadres légaux, du nombre d’outils à essayer et de la présence d’ateliers de formation. Aucun montant n’est annoncé avant d’avoir compris votre situation.'],
        ['q' => 'Combien de temps dure une mission ?', 'r' => 'La durée dépend du nombre de personnes à rencontrer, du nombre de sites et de pays, de la sensibilité des données et du nombre d’outils à essayer. Elle est annoncée sur le devis, avant le début de la mission.'],
        ['q' => 'Promettez-vous un gain de temps ou d’argent chiffré ?', 'r' => 'Non. Un pourcentage annoncé avant d’avoir observé vos processus ne repose sur rien. Le consultant définit avec vous ce qu’il faut mesurer, vous aide à relever la situation de départ et suit le résultat réel au bout de quelques semaines. La décision de généraliser se prend sur ces relevés.'],
        ['q' => 'Faut-il acheter un abonnement ChatGPT, Claude, Gemini ou Copilot pour commencer ?', 'r' => 'Pas forcément. Le diagnostic regarde d’abord les outils et abonnements que vous utilisez déjà ; un essai sur vos documents dit ensuite s’il faut en ajouter un. Richard SALANON ne détient aucune certification d’éditeur.'],
        ['q' => 'Mes données sont-elles en sécurité si mon équipe utilise l’IA ?', 'r' => 'Cela dépend des règles que vous fixez. La mission classe vos données selon leur sensibilité, détermine celles qui peuvent partir vers un outil validé et celles qui restent chez vous, et rédige une charte d’usage. Elle tient compte de la loi béninoise n° 2017-20, du RGPD et, pour le Québec, de la Loi 25. Elle ne remplace pas l’avis d’un juriste pour un traitement lourd.'],
        ['q' => 'Quelle différence avec le conseil en digitalisation ?', 'r' => 'Le <a href="/services/consultant-digitalisation">consultant en digitalisation</a> traite l’ensemble des choix numériques d’une organisation : ERP, site, outils métier, automatisation. Le consultant IA se concentre sur l’intelligence artificielle : usages, modèles, données, règles et formation. Les deux missions se combinent quand le projet est large.'],
        ['q' => 'Suis-je obligé de vous confier la réalisation ensuite ?', 'r' => 'Non. Les livrables vous appartiennent et sont écrits pour être remis à d’autres prestataires. Si vous confiez ensuite à Richard SALANON une automatisation, une intégration ou la formation de vos équipes, il le signale comme une prestation distincte, avec son propre devis.'],
        ['q' => 'Pouvez-vous former mes équipes après le diagnostic ?', 'r' => 'Oui. Des ateliers par métier, construits sur vos propres dossiers, prolongent la mission. Le détail se trouve dans la page <a href="/services/formation-en-entreprise">formation en entreprise</a> et dans la page <a href="/formation-ia-entreprise">formation IA en entreprise</a>.'],
        ['q' => 'Que se passe-t-il si la conclusion est qu’il ne faut rien acheter ?', 'r' => 'C’est un résultat valable. Si l’abonnement que vous payez déjà couvre le besoin, ou si vos données ne sont pas prêtes, le rapport le dit et indique ce qu’il faudrait préparer. Vous avez alors évité une dépense, ce qui fait partie de la valeur d’un conseil indépendant.'],
        ['q' => 'Quels moyens de paiement acceptez-vous ?', 'r' => 'Le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. L’échéancier est indiqué sur le devis, avant signature.'],
    ],

    'sources' => [
        ['titre' => 'Commission européenne, cadre réglementaire de l’intelligence artificielle (règlement 2024/1689, calendrier d’application)', 'url' => 'https://digital-strategy.ec.europa.eu/fr/policies/regulatory-framework-ai', 'date' => '2026-10-25'],
        ['titre' => 'DataReportal, rapport Digital 2026 consacré au Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-25'],
        ['titre' => 'CNIL, le règlement général sur la protection des données (RGPD), texte intégral', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-25'],
        ['titre' => 'CNIL, dossier intelligence artificielle', 'url' => 'https://www.cnil.fr/fr/intelligence-artificielle', 'date' => '2026-10-25'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-25'],
        ['titre' => 'APDP Bénin, Autorité de protection des données à caractère personnel', 'url' => 'https://service.apdp.bj/', 'date' => '2026-10-25'],
        ['titre' => 'Commission d’accès à l’information du Québec, principaux changements apportés par la Loi 25', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'services'    => ['integration-ia-entreprise', 'automatisation-ia', 'agents-ia-chatbot-whatsapp', 'formation-en-entreprise', 'consultant-digitalisation'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'n8n-vs-make-vs-zapier'],
    ],
];
