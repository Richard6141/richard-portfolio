<?php
// ============================================================
// data/formations/digitalisation-processus.php · Fiche formation
// « Digitalisation des processus métiers » (vague 1B, lot B, domaine
// transformation-digitale). Angle propre : un responsable de service
// cartographie un processus (achats, facturation, recrutement, demandes
// clients) en BPMN simplifiée, mesure ses délais et ses erreurs sur une
// semaine réelle, supprime les étapes inutiles AVANT d'outiller, choisit
// l'outil sans IA (formulaire, module du logiciel de gestion, automatisation
// entre outils) et fixe les indicateurs. Sœurs non traitées :
// ia-processus-metier (étapes confiées à l'IA, contrôle humain),
// strategie-transformation-digitale (feuille de route de direction),
// digitaliser-son-entreprise (petite structure), conduite-du-changement,
// chef-de-projet-digital, data-literacy, adoption-erp. Aucune ancienne page.
// Sources consultées le 05/10/2026 : OMG (BPMN 2.0.2, page et PDF lus à la
// source, sous-classe descriptive), bpmn.io (licence), KoboToolbox (tarifs,
// curl), Google Workspace (tarifs), Microsoft (Power Automate), Make, n8n et
// Odoo (faits vérifiés du catalogue), Dolibarr, Eurostat (E-business
// integration), Baromètre France Num 2026 (lu dans le navigateur),
// Entreprendre Service Public (délais de paiement), impots.gouv.fr, DGI du
// Bénin (e-MECeF), DGI de Côte d'Ivoire (FNE), CNIL (durées de
// conservation), UIT, SGG du Bénin, FDFP, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation digitalisation des processus métiers : cartographier un circuit, mesurer ses délais et ses erreurs, le simplifier, puis choisir l'outil qui le fera tourner",
    'title'   => "Formation digitalisation des processus | Richard SALANON",
    'meta'    => "Formation pour responsables de service : cartographier un processus en BPMN simplifiée, mesurer délais et erreurs, simplifier, puis choisir l'outil.",
    'en_bref' => "Cette formation apprend aux responsables de service, contrôleurs internes et référents qualité à dessiner un processus tel qu'il se déroule (achats, facturation, recrutement, demandes clients), à mesurer ses délais et ses erreurs sur une semaine de dossiers réels, à supprimer les étapes inutiles, puis à choisir l'outil et les indicateurs. Elle dure deux jours en quatre demi-journées, séparés par une semaine de relevé, avec un atelier de recette à distance en option. Elle se tient en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'transformation-digitale',
    'forte'   => false,
    'duree'   => "2 jours en 4 demi-journées, séparés par une semaine de relevé ; atelier de recette en option",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : choisir le processus et le dessiner tel qu'il se déroule",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire express des processus du service : achats, facturation, recrutement, demandes clients, et ceux que les participants ajoutent.",
                "Choix du processus de travail avec trois questions : combien de dossiers par mois, combien de plaintes, combien d'argent bloqué en attendant.",
                "Bornes du processus : l'événement qui le lance, le résultat qui le clôt, la personne qui attend ce résultat, ce qui reste en dehors.",
                "Le dossier suivi à la trace : on reprend une demande réelle et close, pièce par pièce, avec la personne qui l'a traitée.",
                "Les symboles retenus de la notation BPMN 2.0.2 : bassin, couloir, début, fin, tâche, passerelle, flux de séquence et flux de message.",
                "Dessin du circuit actuel, puis lecture à voix haute par un participant d'un autre service : là où il hésite, le dessin est faux ou incomplet.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : décider quoi mesurer et préparer la semaine de relevé",
            'duree'  => '3 h 30',
            'points' => [
                "Délai de traversée et temps de travail effectif : pourquoi un dossier traité en vingt minutes met souvent neuf jours à sortir.",
                "Les erreurs qui comptent : dossier renvoyé, pièce manquante, information recopiée, montant corrigé, et le taux de dossiers bons du premier coup.",
                "La fiche de relevé : une ligne par dossier, l'heure d'entrée et de sortie de chaque couloir, le motif de chaque retour en arrière.",
                "Avant de mesurer, chaque participant écrit ce qu'il croit : délai moyen, part de dossiers incomplets, étape la plus lente. On comparera.",
                "Organisation de la semaine : qui note, à quel moment, sur papier ou dans un formulaire, et comment ne pas ralentir le service.",
                "Exercice : remplir la fiche sur trois dossiers clos du mois précédent, pour repérer les colonnes impossibles à renseigner.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : lire les mesures et simplifier avant d'outiller",
            'duree'  => '3 h 30',
            'points' => [
                "Lecture des relevés de la semaine : où le temps s'accumule, quelles étapes produisent les retours, quel écart avec les estimations du jour 1.",
                "Classement de chaque étape : utile à celui qui attend le résultat, imposée par une règle externe, ou sans valeur pour personne.",
                "La méthode ECRS appliquée étape par étape : éliminer, combiner, réordonner, simplifier, dans cet ordre.",
                "Les signatures et les validations : qui signe vraiment, à partir de quel montant, en série ou en parallèle, avec quelle délégation écrite.",
                "Dessin du circuit cible avec les mêmes symboles, et estimation du délai attendu à partir des mesures, pas des souhaits.",
                "Exercice : chaque binôme défend la suppression d'une étape devant le groupe, qui joue le contrôleur de gestion.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : choisir l'outil, fixer les indicateurs et préparer la mise en service",
            'duree'  => '3 h 30',
            'points' => [
                "L'arbre de choix : formulaire et tableur partagé, module du logiciel de gestion déjà payé, automatisation sans IA entre outils existants, logiciel dédié.",
                "Le cahier des besoins d'une page : champs, statuts du dossier, règles de gestion, droits, notifications, exports.",
                "Les questions à poser à l'éditeur ou au prestataire avant de signer : traçabilité, travail hors connexion, récupération des données, coût par utilisateur.",
                "Trois indicateurs par processus (un de délai, un de qualité, un de charge), avec leur valeur de départ tirée de la semaine de relevé.",
                "Plan de mise en service : un périmètre pilote, une date de fin pour l'ancien circuit, la personne qui tranche en cas de doute.",
                "Restitution : chaque binôme présente circuit actuel, circuit cible, outil retenu et indicateurs à son responsable hiérarchique.",
            ],
        ],
        [
            'titre'  => "Atelier de recette à distance, en option : vérifier le circuit outillé avant sa mise en service",
            'duree'  => '2 h 30',
            'points' => [
                "Dix dossiers réels déroulés dans le circuit outillé, du déclencheur au résultat, par les personnes qui les traiteront.",
                "Contrôle des statuts, des droits, des notifications et des exports, comparés au cahier des besoins.",
                "Relevé des premières valeurs des indicateurs dans l'outil, et liste écrite des corrections à faire avant la date de bascule.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, une semaine de relevé entre les deux ; atelier de recette en option"],
        ['l' => 'Public', 'v' => "Responsables de service, contrôleurs internes et référents qualité, 4 à 12 personnes"],
        ['l' => 'Formats', 'v' => "Intra, inter-entreprises, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous faire à l'issue des deux jours, et que laisse la formation à d'autres ?",
            'paragraphes' => [
                "Un bon de commande qui attend trois signatures, une facture refaite parce qu'un prix a changé entre le devis et la livraison, une candidature égarée entre deux boîtes de messagerie, une réclamation que personne ne s'attribue : ces pertes se ressemblent d'un pays à l'autre. Elles viennent rarement d'un manque d'outil. Elles viennent d'un circuit que personne n'a jamais dessiné en entier, et que l'on s'apprête souvent à informatiser tel quel. La formation apprend à faire les choses dans l'ordre : voir, mesurer, simplifier, et seulement ensuite outiller.",
                "Les objectifs se vérifient sur pièces. À la fin du deuxième jour, chaque participant sait dessiner un processus de son service avec les symboles de base de la notation BPMN, de façon qu'un collègue d'un autre service le suive sans explication. Il sait organiser une semaine de relevé et en tirer le délai de traversée, le temps de travail effectif et le taux de dossiers bons du premier coup. Il sait justifier chaque étape conservée, écrire un cahier des besoins d'une page, choisir entre trois familles d'outils et fixer trois indicateurs avec leur valeur de départ.",
                "Le périmètre est volontairement sobre : la formation traite la digitalisation sans intelligence artificielle. Confier certaines étapes à l'IA et organiser le contrôle humain qui va avec relève de la formation <a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>, qui gagne d'ailleurs à venir après celle-ci. La feuille de route de toute l'entreprise appartient à la formation <a href=\"/formations/strategie-transformation-digitale\">Stratégie de transformation digitale</a> ; le dirigeant d'une très petite structure trouvera une démarche plus directe dans <a href=\"/formations/digitaliser-son-entreprise\">Digitaliser son entreprise pas à pas</a>.",
                "Trois sujets voisins ont leur propre formation dans le domaine, présentée en bas de page : la conduite du changement, qui prépare les utilisateurs à l'outil retenu ; le rôle de chef de projet digital, qui pilote la réalisation avec un prestataire ; la lecture critique des chiffres, qui aide la direction à décider. Les gestes dans un logiciel précis s'apprennent dans les formations <a href=\"/formations/odoo-utilisateurs\">Odoo pour vos équipes</a> ou <a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a>. Si vous préférez qu'un professionnel mène tout le chantier, la prestation de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a> s'en charge.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui doit suivre la formation, avec quel niveau, et que faut-il apporter ?",
            'intro' => "Le bon participant n'est pas celui qui connaît le mieux l'informatique, mais celui qui connaît le mieux le circuit : il sait où les dossiers attendent, qui les renvoie et pourquoi. Aucune compétence technique n'est demandée.",
            'items' => [
                ['titre' => "Responsables de service", 'texte' => "Responsable des achats, de l'administration des ventes, de la comptabilité fournisseurs, du recrutement, du service client ou d'un guichet. Ils repartent avec un projet d'outillage chiffré pour leur propre périmètre, qu'ils pourront défendre devant la direction."],
                ['titre' => "Contrôleurs internes", 'texte' => "Ils connaissent les points de contrôle et les séparations de tâches que le circuit doit garder. Leur présence évite qu'une simplification supprime une vérification utile, et elle les aide à décrire les circuits qu'ils auditent avec la même notation que les services."],
                ['titre' => "Référents qualité", 'texte' => "Ceux qui tiennent les procédures écrites, souvent dans un classeur que personne n'ouvre. La formation leur donne une manière de décrire le circuit réel, puis de tenir à jour une carte d'une page au lieu de dix pages de texte."],
                ['titre' => "Binômes et groupes mixtes", 'texte' => "Le format le plus efficace réunit deux personnes par processus : celle qui en est responsable et celle qui traite les dossiers chaque jour. Un groupe compte de 4 à 12 personnes, soit deux à six processus travaillés en parallèle."],
                ['titre' => "Prérequis", 'texte' => "Maîtriser le processus étudié et pouvoir accéder à quelques exemples réels de dossiers. Savoir ouvrir un tableur suffit pour la partie mesure ; la formation <a href=\"/formations/excel-google-sheets\">Excel et Google Sheets</a> complète ceux qui veulent aller plus loin dans le calcul."],
                ['titre' => "Ce qu'il faut apporter", 'texte' => "Une dizaine de dossiers récents du processus choisi, anonymisés ; les formulaires, modèles et bons utilisés aujourd'hui ; la liste des personnes qui interviennent ; et, si elle existe, la procédure écrite, même ancienne. Ces pièces sont demandées au cadrage."],
                ['titre' => "Le matériel", 'texte' => "Un grand tableau blanc ou de grandes feuilles pour dessiner à plusieurs, un ordinateur par binôme avec un navigateur et un tableur. Les circuits sont ensuite mis au propre dans un outil de modélisation gratuit, sans installation."],
            ],
        ],
        ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants réalisent-ils sur leurs propres dossiers ?",
            'items' => [
                ['titre' => "Le dossier suivi à la trace", 'duree' => "1 heure, jour 1 matin", 'texte' => "Une demande d'achat, une facture, une candidature ou une réclamation déjà traitée est reprise depuis son arrivée. À chaque passage de main, on note qui l'a reçue, par quel canal, ce qu'il en a fait et combien de temps elle est restée sur son bureau. Le dessin part de ce dossier, pas de la procédure écrite."],
                ['titre' => "La lecture par un inconnu", 'duree' => "30 minutes, jour 1 matin", 'texte' => "Un participant d'un autre service lit le dessin à voix haute, du début à la fin. Chaque hésitation signale un symbole mal choisi, un couloir oublié ou une décision implicite. Le binôme corrige jusqu'à ce que la lecture se fasse d'une traite."],
                ['titre' => "La semaine de relevé", 'duree' => "Entre les deux jours, quelques minutes par dossier", 'texte' => "Les personnes qui traitent les dossiers remplissent la fiche de relevé pendant cinq jours ouvrés. Le formateur reste joignable pour les questions pratiques. Quand le processus est trop lent pour qu'une semaine suffise, on relève aussi les dossiers clos du mois précédent à partir des dates disponibles."],
                ['titre' => "Le procès des étapes", 'duree' => "1 h 15, jour 2 matin", 'texte' => "Chaque étape du circuit actuel doit prouver son utilité. Le binôme plaide, le groupe juge : utile au destinataire, imposée par une règle que l'on sait citer, ou sans valeur. Une étape qui ne trouve aucun défenseur sort du circuit cible."],
                ['titre' => "Le circuit cible chiffré", 'duree' => "1 heure, jour 2 matin", 'texte' => "Le nouveau circuit est dessiné avec les mêmes symboles. Pour chaque attente supprimée ou raccourcie, le binôme reprend la mesure de la semaine et estime le délai attendu. Le résultat est une prévision argumentée, que les indicateurs confirmeront ou non."],
                ['titre' => "Le cahier des besoins d'une page", 'duree' => "1 heure, jour 2 après-midi", 'texte' => "Les champs du dossier, ses statuts, les règles de gestion, les droits par rôle et les notifications tiennent sur une page. C'est le document que l'on remet à un éditeur, à un prestataire ou à l'administrateur du logiciel de gestion pour comparer les réponses."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels symboles de la notation BPMN garde-t-on, et que représentent-ils ?",
            'legende' => "Sélection enseignée en formation, tirée de la sous-classe « descriptive » définie au chapitre 2 de la spécification BPMN 2.0.2 de l'Object Management Group (document formal/13-12-09, janvier 2014), lue à la source le 5 octobre 2026. Les exemples suivent un processus d'achat.",
            'entetes' => ['Symbole', 'Ce qu\'il représente', 'Exemple dans un processus d\'achat', 'Erreur fréquente'],
            'lignes'  => [
                ['Bassin (participant)', "Une organisation entière, ou un acteur extérieur avec lequel on échange", "L'entreprise d'un côté, le fournisseur de l'autre", "Dessiner le fournisseur comme un couloir interne, alors qu'on ne maîtrise pas son circuit"],
                ['Couloir', "Un rôle ou un service à l'intérieur du bassin", "Demandeur, acheteur, magasin, comptabilité, direction", "Nommer une personne au lieu d'un rôle : le dessin devient faux au premier départ"],
                ['Événement de début', "Ce qui déclenche le processus : une demande, un message reçu, une date", "Un chef d'équipe signale un besoin ; le stock passe sous le seuil le lundi", "Commencer par une action (« saisir la demande ») au lieu de l'événement qui l'a provoquée"],
                ['Événement de fin', "Le résultat qui clôt le processus, heureux ou non", "Facture fournisseur payée ; demande refusée", "Oublier les fins malheureuses, qui sont pourtant celles qui coûtent du temps"],
                ['Tâche', "Un travail fait par une personne, ou par un logiciel quand c'est une tâche de service", "Comparer trois devis ; enregistrer le bon de commande", "Une tâche par clic : le dessin devient illisible au-delà d'une vingtaine de cases"],
                ['Passerelle exclusive', "Un choix entre plusieurs chemins, un seul étant suivi", "Montant au-dessus du seuil de délégation ? oui ou non", "Laisser une passerelle sans question écrite, ou sans chemin pour le « non »"],
                ['Passerelle parallèle', "Plusieurs chemins suivis en même temps, puis réunis", "Contrôle du budget et vérification technique menés ensemble", "Dessiner en série deux contrôles indépendants, ce qui additionne leurs attentes"],
                ['Flux de séquence', "L'ordre des tâches à l'intérieur d'un même bassin", "Après la réception, le rapprochement avec la commande", "Le faire traverser vers le fournisseur au lieu d'un flux de message"],
                ['Flux de message', "Un échange entre deux bassins : courriel, appel, document envoyé", "Envoi du bon de commande, réception de la facture", "L'omettre, et perdre de vue les attentes qui dépendent de l'extérieur"],
                ['Objet de données et magasin de données', "Le document qui circule, et l'endroit où il est conservé", "Bon de commande ; classeur des fournisseurs, logiciel de gestion", "Ne pas dessiner les fichiers : on ne voit plus où l'information est recopiée"],
                ['Annotation', "Un commentaire attaché à un élément", "« Trois jours d'attente en moyenne, relevé de la semaine »", "S'en servir pour décrire le circuit au lieu de le dessiner"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre une notation normalisée plutôt que de dessiner des cases et des flèches ?",
            'paragraphes' => [
                "Parce qu'un schéma libre ne se lit bien que par celui qui l'a dessiné. Une flèche peut vouloir dire « ensuite », « envoie à » ou « dépend de », et un losange signifie ce que chacun imagine. La notation BPMN (Business Process Model and Notation) fixe le sens de chaque symbole. Sa version 2.0.2, publiée par l'Object Management Group en janvier 2014 sous la référence formal/13-12-09, se télécharge librement sur le site de l'organisme. L'OMG la présente comme une notation proche de l'organigramme, indépendante de tout environnement d'exécution, destinée aussi bien aux responsables métier qu'aux équipes techniques.",
                "Le texte complet dépasse cinq cents pages, et personne n'a besoin de tout connaître. La spécification classe elle-même ses éléments en cinq catégories (objets de flux, données, objets de connexion, couloirs, artefacts) et définit trois sous-ensembles de conformité : descriptif, analytique et exécutable commun. Le sous-ensemble descriptif, qui compte une vingtaine d'éléments, vise selon le texte la modélisation de haut niveau, pour des analystes habitués aux outils d'organigramme. La formation en retient une douzaine, qui suffisent pour décrire un circuit d'achat, de facturation, de recrutement ou de réclamation.",
                "Le bénéfice se voit au moment d'outiller. Un circuit dessiné en BPMN se transmet tel quel à un éditeur, à un prestataire ou au service informatique, qui lit les mêmes symboles. Les outils de modélisation, dont la version de démonstration gratuite de bpmn.io, enregistrent le dessin dans le format d'échange de la norme, ce qui évite de le refaire quand on change d'outil. Enfin, une notation commune permet à un contrôleur interne de comparer deux services sans réapprendre la manière de dessiner de chacun.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que mesure-t-on sur un processus, et comment le relever sans logiciel ?",
            'legende' => "Les huit mesures de la fiche de relevé utilisée pendant la semaine entre les deux jours. Une feuille imprimée, un tableur partagé ou un formulaire suffisent ; l'important est de noter au moment où le dossier change de main.",
            'entetes' => ['Mesure', 'Définition', 'Comment la relever', 'Ce qu\'elle révèle'],
            'lignes'  => [
                ['Délai de traversée', "Temps écoulé entre l'événement de début et l'événement de fin", "Date et heure d'arrivée, date et heure de clôture, pour chaque dossier", "Ce que vit celui qui attend : le fournisseur, le client, le candidat"],
                ['Temps de travail effectif', "Somme des minutes réellement passées sur le dossier", "Chaque intervenant note ses minutes, arrondies à cinq", "La part du délai qui correspond à du travail ; le reste est de l'attente"],
                ['Attente par couloir', "Temps passé dans un couloir sans que personne n'y touche", "Heure d'entrée et de sortie à chaque passage de main", "Les goulets : une signature, une boîte de messagerie, un congé"],
                ['Bon du premier coup', "Part des dossiers qui traversent sans retour en arrière", "Une croix quand le dossier revient à une étape déjà franchie, avec le motif", "La qualité de ce qui entre : formulaire incomplet, pièce oubliée, prix erroné"],
                ['Ressaisies', "Nombre de fois où la même information est recopiée", "Pour trois dossiers, compter les copies de chaque donnée clé", "Les ruptures entre outils, et donc les erreurs de frappe à venir"],
                ['Volume', "Nombre de dossiers entrés et sortis par jour", "Un trait par dossier sur la fiche, chaque soir", "Si le service absorbe la demande ou si le stock grossit"],
                ['Dossiers en attente', "Nombre de dossiers ouverts à un instant donné", "Un comptage chaque vendredi à la même heure", "La charge réelle, souvent invisible dans les boîtes personnelles"],
                ['Coût de traitement', "Temps de travail multiplié par le coût horaire des intervenants", "Calculé au jour 2, à partir des minutes notées", "L'argument budgétaire pour choisir, ou écarter, un outil"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi supprimer des étapes avant d'acheter le moindre outil ?",
            'paragraphes' => [
                "Un logiciel accélère ce qu'on lui confie, y compris l'inutile. Trois signatures pour un achat de fournitures restent trois signatures dans un circuit électronique, avec trois notifications que chacun apprend vite à ignorer. Une copie de la facture envoyée « pour information » à un service qui ne la lit pas devient une pièce jointe de plus. Outiller d'abord fige ces habitudes dans un paramétrage que plus personne n'ose toucher, et l'on paie chaque année des licences pour des étapes qui ne servent à rien.",
                "La méthode ECRS, héritée de l'organisation du travail industriel, donne un ordre simple. Éliminer d'abord : l'étape sans destinataire, le contrôle déjà fait en amont, la copie que personne ne lit. Combiner ensuite : deux vérifications faites par la même personne à deux moments, deux formulaires qui demandent les mêmes informations. Réordonner : placer le contrôle des pièces à l'entrée plutôt qu'à la fin, mener en parallèle deux avis indépendants. Simplifier enfin ce qui reste : un formulaire plus court, une règle de délégation écrite, un modèle unique.",
                "Les mesures de la semaine guident ces choix. Quand le temps de travail effectif d'un dossier se compte en minutes et son délai de traversée en jours, le gain ne viendra pas d'une saisie plus rapide, mais de la suppression des attentes. Certaines étapes résistent pourtant au procès parce qu'une règle les impose : séparation entre celui qui commande et celui qui paie, contrôle exigé par un bailleur, mention obligatoire sur la facture. Elles restent, mais on vérifie qu'elles sont placées au bon endroit et faites une seule fois.",
                "Les délais légaux entrent aussi dans le calcul. En France, la fiche Entreprendre Service Public sur les délais de paiement entre professionnels, vérifiée le 7 août 2026, fixe un délai de 30 jours par défaut, que les parties peuvent porter à 60 jours après l'émission de la facture ou à 45 jours fin de mois, et limite en principe à 30 jours la procédure de vérification des marchandises reçues. Un circuit d'achat dont la validation interne dure trois semaines consomme donc l'essentiel du délai avant même que le paiement soit lancé.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Achats, facturation, recrutement, demandes clients : où le temps se perd-il, et que change-t-on d'abord ?",
            'legende' => "Constats fréquents en atelier sur les quatre processus les plus souvent apportés par les participants. Ce sont des points de départ pour le procès des étapes, pas des solutions à copier : la mesure de votre semaine décide.",
            'entetes' => ['Processus', 'Du déclencheur au résultat', 'Pertes les plus fréquentes', 'Premières simplifications', 'Outillage souvent suffisant'],
            'lignes'  => [
                ['Achats', "Du besoin exprimé à la facture fournisseur payée", "Demandes par oral ou par message, signatures en série, réception non enregistrée, facture qui attend le bon de réception", "Formulaire de demande unique, seuils de délégation écrits, réception saisie le jour même", "Module achats du logiciel de gestion, ou formulaire relié à un tableur pour les petits volumes"],
                ['Facturation', "De la livraison ou de la prestation à l'encaissement", "Facture émise en fin de mois, prix ressaisis depuis le devis, avoirs pour erreurs, relances oubliées", "Facture émise depuis la commande validée, liste des factures échues chaque lundi", "Logiciel de gestion relié à la facture normalisée ou électronique du pays"],
                ['Recrutement', "De la décision d'ouvrir un poste à l'arrivée de la personne", "Candidatures dispersées dans plusieurs boîtes, grille d'évaluation absente, réponses aux candidats jamais envoyées", "Une adresse ou un formulaire de candidature unique, une grille commune, des réponses types", "Formulaire et tableur partagé avec droits restreints, ou module de recrutement du logiciel en place"],
                ['Demandes clients', "De la demande reçue à la réponse ou à la résolution", "Demandes arrivées par téléphone, courriel et messagerie sans enregistrement commun, transferts sans propriétaire", "Un point d'entrée enregistré, un propriétaire par demande, des catégories courtes", "Formulaire et boîte partagée, ou module d'assistance du logiciel de gestion ; automatisation simple des accusés de réception"],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Formulaire et tableur, module du logiciel de gestion ou automatisation entre outils : quel outillage pour quel circuit ?",
            'options'  => ['Formulaire et tableur partagé', 'Module du logiciel de gestion', 'Automatisation sans IA entre outils existants'],
            'criteres' => [
                ['critere' => 'Situation adaptée', 'valeurs' => ["Quelques dizaines de dossiers par mois, un seul service, un circuit encore en rodage", "Le processus touche des données que le logiciel tient déjà : articles, fournisseurs, clients, factures", "Chaque outil fait bien son travail, mais l'information est recopiée de l'un à l'autre"]],
                ['critere' => 'Ce qu\'il apporte', 'valeurs' => ["Une entrée unique et complète, des données en lignes exploitables, une mise en place en quelques jours", "Des statuts, des droits par rôle, un historique et des documents reliés entre eux", "La fin des ressaisies et des oublis : accusé de réception, copie d'une ligne, rappel à date"]],
                ['critere' => 'Traçabilité', 'valeurs' => ["Faible : une ligne modifiée ne garde pas toujours sa version précédente", "Forte : qui a validé quoi, et quand, est enregistré", "Moyenne : chaque exécution est journalisée, mais seulement pour les étapes automatisées"]],
                ['critere' => 'Coût', 'valeurs' => ["Souvent inclus dans une suite déjà payée, ou gratuit pour une association", "Par utilisateur et par mois, plus le paramétrage", "Par utilisateur, par exécution ou par crédit consommé, selon l'éditeur"]],
                ['critere' => 'Risque principal', 'valeurs' => ["Le tableur que tout le monde modifie et que personne ne contrôle", "Plier le processus aux écrans standard au lieu de vérifier qu'ils conviennent", "Un flux qui s'arrête sans prévenir quand un outil change"]],
            ],
            'verdict'  => "La formation n'impose aucune famille : elle apprend à partir du circuit cible et des volumes mesurés. Dans la pratique, beaucoup de services commencent par un formulaire et un tableur pour stabiliser le circuit, passent au module du logiciel de gestion quand les volumes ou les exigences de contrôle augmentent, et ajoutent une automatisation entre outils là où une ressaisie subsiste. Le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> et le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a> prolongent le choix.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils sont présentés pendant la formation, et que coûtent-ils chez l'éditeur ?",
            'legende' => "Prix et conditions relevés le 5 octobre 2026 sur les pages officielles des éditeurs, hors taxes, dans la devise affichée ; ils sont payés à l'éditeur, au nom de votre organisation. La formation n'exige l'achat d'aucun d'entre eux, et aucun n'est revendu par Richard SALANON.",
            'entetes' => ['Outil', 'Rôle dans la formation', 'Ce que publie l\'éditeur'],
            'lignes'  => [
                ['bpmn.io (démonstration en ligne)', "Mettre au propre les circuits dessinés au tableau, dans le format d'échange de la norme BPMN", "Outils web maintenus par Camunda et ses contributeurs ; licence gratuite qui autorise l'usage, la copie et la modification, à condition de laisser visible le filigrane bpmn.io sur les diagrammes"],
                ['Google Forms, dans Google Workspace', "Formulaire de demande d'achat, de candidature ou de réclamation, relié à une feuille de calcul", "Forms et AppSheet sont inclus dès l'offre Business Starter, à 6,80 € HT par utilisateur et par mois hors offre promotionnelle"],
                ['KoboToolbox', "Formulaires utilisables sur téléphone sans connexion, utiles aux équipes de terrain et aux ONG", "Offre Community gratuite pour les associations, administrations, agences de l'ONU et établissements d'enseignement, avec 5 000 soumissions par mois et 1 Go de fichiers ; pour une entreprise privée, Starter à 25 dollars par mois et Community à 99 dollars par mois en paiement mensuel"],
                ['Odoo', "Exemple de module de logiciel de gestion : achats, facturation, recrutement, assistance", "Une application gratuite ; Standard à 19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € (en mensuel : 24,90 €, puis 31,10 €) ; Personnalisé à 35,90 € puis 44,90 € ; utilisateur léger à 7,90 € ; Odoo 20.0 est la dernière version, sortie en septembre 2026"],
                ['Dolibarr', "Autre exemple de logiciel de gestion, installé chez soi ou hébergé", "Logiciel libre et open source ; version 24.0.1 annoncée sur le site du projet, sans frais de licence, l'hébergement et la mise en place restant à prévoir"],
                ['Power Automate', "Automatisation sans IA dans une organisation déjà équipée de Microsoft 365", "Premium à 13,00 € HT par utilisateur et par mois en paiement annuel ; essai gratuit de 30 jours"],
                ['n8n Cloud', "Automatisation entre outils hétérogènes : formulaire, tableur, messagerie, logiciel de gestion", "Starter à 20 € par mois en paiement annuel pour 2 500 exécutions par mois, Pro à 50 € pour 10 000 exécutions ; le paiement mensuel coûte environ 17 % de plus"],
                ['Make', "Même usage que n8n, avec une facturation au crédit", "Offre gratuite jusqu'à 1 000 crédits par mois ; Core à 9 dollars par mois pour 10 000 crédits en paiement mensuel, remise d'au moins 15 % en annuel"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels indicateurs suivre pour chaque processus une fois outillé ?",
            'legende' => "Trois indicateurs par processus : un de délai, un de qualité, un de charge. Leur valeur de départ vient de la semaine de relevé ; sans elle, aucun progrès ne pourra être démontré.",
            'entetes' => ['Processus', 'Indicateur de délai', 'Indicateur de qualité', 'Indicateur de charge'],
            'lignes'  => [
                ['Achats', "Jours entre la demande complète et l'envoi du bon de commande", "Part des factures fournisseurs rapprochées sans écart avec la commande et la réception", "Demandes en attente de validation le vendredi"],
                ['Facturation', "Jours entre la livraison ou la prestation et l'émission de la facture", "Part des factures émises sans avoir correctif dans le mois", "Montant des factures échues et non payées, relevé chaque lundi"],
                ['Recrutement', "Jours entre l'ouverture du poste et la proposition faite au candidat retenu", "Part des candidatures ayant reçu une réponse, positive ou négative", "Candidatures reçues et non encore examinées"],
                ['Demandes clients', "Heures entre la réception d'une demande et la première réponse", "Part des demandes résolues sans relance du client", "Demandes ouvertes depuis plus de cinq jours ouvrés"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle animée, et que reste-t-il au service après les deux jours ?",
            'intro' => "La méthode repose sur une conviction : un circuit ne se comprend qu'à partir de dossiers réels, et une simplification ne se défend qu'avec des mesures. Le formateur apporte la notation, les gabarits et les questions ; les participants apportent leurs dossiers et prennent les décisions.",
            'items' => [
                ['titre' => "Un groupe de 4 à 12 personnes", 'texte' => "Deux à six processus sont travaillés en même temps, chacun par un binôme. Au-delà, les lectures croisées deviennent trop rapides pour être utiles ; un service plus nombreux est réparti en deux sessions."],
                ['titre' => "Le formateur dans le rôle du candide", 'texte' => "Il pose les questions qu'un nouvel arrivant poserait : pourquoi cette signature, qui lit cette copie, que se passe-t-il quand le responsable est absent. Les réponses « on a toujours fait comme ça » sont notées et reviennent au procès des étapes."],
                ['titre' => "Une semaine de terrain entre les deux jours", 'texte' => "C'est le cœur de la méthode. Les estimations du premier jour sont confrontées aux mesures, et l'écart surprend presque toujours. Quand le calendrier interdit cette semaine, on travaille sur les dates déjà enregistrées dans les messageries et les logiciels."],
                ['titre' => "Les outils et les comptes du client", 'texte' => "Les exercices de choix d'outil partent de ce que l'organisation possède déjà : suite bureautique, logiciel de gestion, messagerie. On vérifie d'abord ce qui est payé et inutilisé avant de regarder ailleurs."],
                ['titre' => "Des supports qui restent", 'texte' => "Aide-mémoire des symboles, fiche de relevé, grille ECRS, gabarit de cahier des besoins, tableau des indicateurs, et les circuits actuels et cibles mis au propre en fichiers modifiables, avec une attestation nominative."],
                ['titre' => "Un suivi tourné vers la mise en service", 'texte' => "L'atelier de recette, s'il est retenu, vérifie le circuit outillé sur dix dossiers avant la bascule. Les questions d'application entre la session et cet atelier passent par courriel ou WhatsApp, selon les modalités fixées au devis."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble un processus redessiné, selon le métier et le pays ?",
            'items' => [
                ['secteur' => "Achats d'une clinique privée, à Cotonou", 'probleme' => "Situation type : les demandes de consommables arrivent par appel ou par message au magasinier, trois signatures sont exigées quel que soit le montant, et les factures fournisseurs attendent des semaines un bon de réception introuvable.", 'solution' => "Le procès des étapes ramène les signatures à une seule sous le seuil de délégation ; la demande passe par un formulaire unique ; la réception est saisie le jour même dans le module achats déjà payé du logiciel de gestion. Indicateur suivi : jours entre la demande complète et le bon de commande."],
                ['secteur' => "Facturation d'une PME de maintenance, à Abidjan", 'probleme' => "Situation type : les techniciens rendent leurs rapports d'intervention en fin de semaine, l'assistante ressaisit les pièces et les heures, et les factures partent avec dix jours de retard ; la facture normalisée électronique oblige en plus à revoir le circuit.", 'solution' => "Le rapport d'intervention devient un formulaire sur téléphone, relié à la commande ; la facture est préparée dès la clôture de l'intervention et émise par un outil compatible avec la plateforme de la DGI. Indicateur suivi : jours entre la fin de l'intervention et l'émission de la facture."],
                ['secteur' => "Recrutement d'une ONG, à Niamey", 'probleme' => "Situation type : chaque offre reçoit des centaines de candidatures dans trois boîtes de messagerie, les grilles d'évaluation varient d'un recruteur à l'autre et la plupart des candidats ne reçoivent aucune réponse.", 'solution' => "Une adresse de candidature unique, un formulaire et un tableur aux droits restreints, une grille commune, des réponses types envoyées à date fixe, et une règle de suppression des dossiers non retenus. Indicateur suivi : part des candidatures ayant reçu une réponse."],
                ['secteur' => "Demandes clients d'une agence immobilière, à Dakar", 'probleme' => "Situation type : les demandes de visite et les signalements de panne des locataires arrivent par téléphone, par WhatsApp et au comptoir ; personne ne sait combien sont en souffrance, ni depuis quand.", 'solution' => "Toute demande est enregistrée à l'entrée avec un propriétaire et une catégorie ; un accusé de réception automatique part sans IA ; le point du lundi porte sur les demandes ouvertes depuis plus de cinq jours. Indicateur suivi : heures avant la première réponse."],
                ['secteur' => "Facturation fournisseurs d'une PME industrielle, en France", 'probleme' => "Situation type : depuis le 1er septembre 2026, les factures arrivent sous forme électronique, mais leur validation suit toujours le circuit papier, et les paiements dépassent les délais convenus avec les fournisseurs.", 'solution' => "Le circuit cible place le rapprochement avec la commande et la réception dès l'arrivée de la facture, mène en parallèle les validations budgétaire et technique, et réserve la signature du directeur aux écarts. Indicateur suivi : jours entre réception et mise en paiement."],
                ['secteur' => "Demandes d'aide d'un service social communal, en Belgique", 'probleme' => "Situation type : les dossiers des usagers circulent entre l'accueil, les assistants sociaux et la direction ; les pièces manquantes ne sont découvertes qu'à la commission, qui renvoie un dossier sur trois.", 'solution' => "La liste des pièces est vérifiée à l'accueil grâce à un formulaire fermé ; les dossiers incomplets ne partent plus en commission ; la durée de conservation des données est fixée avec le délégué à la protection des données. Indicateur suivi : part des dossiers acceptés au premier passage."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Sur place, entre plusieurs entreprises, à distance ou en formule mixte : comment s'organise la session ?",
            'legende' => "Le contenu reste le même d'un format à l'autre ; seuls le rythme et la manière de dessiner changent. Le premier échange, le cadrage et le devis sont gratuits et servent à choisir.",
            'entetes' => ['Format', 'Déroulement', 'Semaine de relevé', 'Convient à'],
            'lignes'  => [
                ['Intra, dans vos locaux', "Deux journées séparées par une semaine, dans une salle avec tableau", "Faite par vos équipes sur vos dossiers, avec le formateur joignable", "Un service ou plusieurs services d'une même organisation qui partagent un circuit"],
                ['Inter-entreprises', "Deux journées réunissant des responsables de plusieurs structures", "Chacun mesure son propre processus ; les relevés restent anonymes en séance", "Un ou deux responsables par structure, réseau professionnel, fédération"],
                ['À distance', "Cinq séances de 2 h 30 sur trois semaines, tableau blanc partagé", "Placée entre la deuxième et la troisième séance", "Équipes réparties sur plusieurs sites ou plusieurs pays"],
                ['Hybride', "Premier jour sur place pour dessiner ensemble, second jour en deux séances à distance", "Identique au format intra", "Organisations qui veulent le temps fort du dessin en salle et une suite plus légère"],
                ['Atelier de recette', "Deux heures et demie à distance, avant la mise en service", "Sans objet : on déroule dix dossiers dans l'outil", "Tout service qui outille le circuit dans les semaines suivant la formation"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, après un premier échange, un cadrage et un devis qui sont gratuits. Les abonnements aux outils éventuels restent payés directement aux éditeurs. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => "Formation d'un service, en intra", 'prix' => 'Sur devis', 'inclus' => ["Quatre demi-journées et la semaine de relevé accompagnée", "Travail sur vos dossiers et vos outils", "Circuits mis au propre en fichiers modifiables", "Attestation nominative"]],
                ['offre' => "Session inter-entreprises", 'prix' => 'Sur devis', 'inclus' => ["Deux journées en groupe mixte", "Un processus par participant ou par binôme", "Gabarits et aide-mémoire remis à chacun"]],
                ['offre' => "Formation et atelier de recette", 'prix' => 'Sur devis', 'inclus' => ["Tout le contenu de la formation", "Atelier de deux heures et demie à distance avant la bascule", "Liste des corrections à faire, relue avec le responsable"]],
            ],
            'variations' => [
                "Le nombre de participants, de binômes et de processus travaillés.",
                "La préparation : lecture des procédures existantes, anonymisation des dossiers, gabarits adaptés à votre secteur.",
                "Le format et le lieu : Cotonou, une autre ville, un autre pays, ou à distance.",
                "L'atelier de recette et la durée du suivi par courriel ou WhatsApp.",
                "La langue des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il financer la session ?",
            'paragraphes' => [
                "Cela dépend du pays, du fonds et du dossier ; rien n'est promis ici, et la décision appartient toujours au financeur. En Côte d'Ivoire, le FDFP ouvre le dépôt d'un plan de formation à toute entreprise qui justifie du paiement régulier des deux taxes, et classe en « intra » une formation donnée par un intervenant extérieur aux salariés d'une seule entreprise. Il précise sur sa page, consultée le 5 octobre 2026, que la liquidation et le règlement n'interviennent qu'après le suivi et le contrôle de ses services, puis l'approbation de sa Commission permanente.",
                "Au Sénégal, le 3FPT affiche quatre guichets, dont l'un est réservé au financement du personnel des entreprises et des membres des organisations professionnelles. Au Bénin, le décret n° 2022-286 du 11 mai 2022 a approuvé les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage, le FODEFCA, auprès duquel les conditions se vérifient au cas par cas. En France, France Compétences rappelle que, depuis le 1er janvier 2022, seuls les prestataires certifiés Qualiopi accèdent aux fonds publics ou mutualisés, dont ceux des OPCO : Richard SALANON ne détient pas cette certification.",
                "La démarche utile consiste à écrire au fonds avant de signer, avec le programme demi-journée par demi-journée et le devis. Pour cette formation, précisez que les participants sont responsables des processus étudiés et que la session produit des documents de travail directement liés à leur poste. Les feuilles d'émargement, le programme détaillé et les attestations nominatives sont fournis dans tous les cas.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi outiller un circuit sans l'avoir mesuré est-il un piège ?",
            'texte' => "Parce qu'on se prive de la seule preuve qui compte. Sans valeur de départ, personne ne pourra dire dans six mois si le nouvel outil a raccourci les délais ou réduit les erreurs, et le débat se fera sur des impressions. Pire : les estimations faites de mémoire se trompent souvent d'étape. Un service persuadé que la saisie le ralentit découvre, relevé en main, que les dossiers dorment surtout dans l'attente d'une signature. Un logiciel acheté pour accélérer la saisie n'y changera rien. Une semaine de relevé coûte peu ; un paramétrage construit sur une fausse cause coûte des licences, du temps de prestataire et la confiance de l'équipe.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les mois qui suivent, et comment les éviter ?",
            'intro' => "Les circuits redessinés en formation tiennent rarement tels quels au contact du quotidien. Les dérives ci-dessous reviennent d'une organisation à l'autre ; chacune a sa parade, écrite dans le plan de mise en service avant la fin du deuxième jour.",
            'items' => [
                ['titre' => "Paramétrer l'ancien circuit dans le nouvel outil", 'texte' => "Sous la pression du calendrier, le prestataire reçoit la procédure écrite au lieu du circuit cible. On lui remet le dessin cible et le cahier des besoins d'une page, et l'on vérifie à la recette que les étapes supprimées n'ont pas réapparu."],
                ['titre' => "Laisser vivre deux circuits", 'texte' => "Le formulaire existe, mais les demandes continuent d'arriver par message « parce que c'est urgent ». Une date de fin est fixée pour l'ancien canal, et toute demande reçue par ailleurs est renvoyée vers le formulaire, sans exception pour la direction."],
                ['titre' => "Oublier les absences", 'texte' => "Le circuit marche tant que le valideur est présent. Chaque couloir où une personne décide reçoit un suppléant nommé, et la délégation écrite précise les montants et la durée."],
                ['titre' => "Abandonner la mesure après la bascule", 'texte' => "Les indicateurs sont relevés le premier mois, puis plus personne ne s'en occupe. On désigne une personne par indicateur et un rendez-vous fixe, et l'on préfère les indicateurs que l'outil calcule seul."],
                ['titre' => "Multiplier les champs obligatoires", 'texte' => "Chaque service ajoute « sa » question au formulaire, qui double de longueur et décourage ceux qui le remplissent. Tout nouveau champ doit dire qui l'utilise et pour quelle décision, sinon il ne passe pas."],
                ['titre' => "Automatiser une exception", 'texte' => "On construit un flux pour un cas qui arrive deux fois par an. Les automatisations sont réservées aux étapes fréquentes et stables ; les exceptions gardent un traitement humain décrit sur la carte."],
                ['titre' => "Ne pas mettre la carte à jour", 'texte' => "Six mois plus tard, le circuit a changé et le dessin ne correspond plus à rien. La carte est relue à chaque changement de règle ou d'outil, et datée ; une carte non datée est réputée périmée."],
                ['titre' => "Garder des données sans fin", 'texte' => "Candidatures, coordonnées de clients, pièces d'identité s'accumulent dans les tableurs. La durée de conservation de chaque type de dossier est fixée au moment de dessiner le magasin de données, pas après une plainte."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Que disent les statistiques publiques sur l'outillage des processus en entreprise ?",
            'items' => [
                ['valeur' => '46,45 %', 'libelle' => "Des entreprises de l'Union européenne utilisaient en 2025 un logiciel de gestion intégré (ERP) pour faire circuler l'information entre leurs fonctions (données extraites en mai 2026)", 'source' => 'Eurostat, E-business integration', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-business_integration'],
                ['valeur' => '41,08 %', 'libelle' => "Des petites entreprises de l'Union utilisaient un ERP en 2025, contre 88,71 % des grandes : l'écart se joue surtout dans les structures où les circuits restent sur papier et tableur", 'source' => 'Eurostat, E-business integration', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-business_integration'],
                ['valeur' => '28,51 %', 'libelle' => "Des entreprises de l'Union utilisaient en 2025 un logiciel de gestion de la relation client, outil fréquent du traitement des demandes clients", 'source' => 'Eurostat, E-business integration', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-business_integration'],
                ['valeur' => '26 %', 'libelle' => "Des TPE et PME françaises prévoient d'acheter des logiciels en 2026-2027, d'après 9 655 entreprises interrogées du 23 mars au 18 avril 2026 (baromètre publié le 17 septembre 2026)", 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '36 %', 'libelle' => "De la population africaine utilisait Internet en 2025, quand la proportion se situe entre 88 et 93 % en Europe, dans la CEI et dans les Amériques (15 octobre 2025)", 'source' => 'UIT, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '40 €', 'libelle' => "Indemnité forfaitaire pour frais de recouvrement due en France pour chaque facture payée en retard entre professionnels, en plus des pénalités (fiche vérifiée le 7 août 2026)", 'source' => 'Entreprendre Service Public, délais de paiement entre professionnels', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F23211'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, factures normalisées, données personnelles : que change le contexte local pour digitaliser un processus ?",
            'paragraphes' => [
                "La connexion décide de la forme du circuit. L'Union internationale des télécommunications estimait dans ses chiffres du 15 octobre 2025 que 36 % de la population africaine utilisait Internet. Un circuit qui suppose une connexion permanente à chaque étape échouera donc dans un dépôt de Parakou ou sur un chantier de Bobo-Dioulasso. La formation fait prévoir, pour chaque couloir, ce qui se passe hors connexion : formulaire rempli sur téléphone et envoyé au retour du réseau, comme le permet KoboToolbox, fiche papier numérotée ressaisie le jour même, ou file d'attente visible des dossiers non transmis.",
                "La facture est rarement libre. Au Bénin, la plateforme e-MECeF de la Direction générale des impôts, consultée le 5 octobre 2026, se présente comme la version en ligne des machines électroniques certifiées ; elle demande une connexion, un navigateur et un compte, et un système de facturation propre à l'entreprise doit d'abord être approuvé par la DGI pour s'y relier. Le circuit cible de facturation se termine donc sur e-MECeF ou sur un logiciel approuvé, jamais sur un modèle de traitement de texte.",
                "En Côte d'Ivoire, le portail de la facture normalisée électronique de la DGI rappelle un lancement officiel le 21 juillet 2025 et la fin de la facture normalisée physique au 1er décembre 2025 pour les régimes RNI et RSI, au 11 décembre pour le RME et au 22 décembre pour l'entreprenant. En France, impots.gouv.fr indique, dans sa page modifiée le 16 janvier 2026, que toutes les entreprises reçoivent leurs factures sous forme électronique depuis le 1er septembre 2026, et que les PME et microentreprises devront les émettre ainsi à partir du 1er septembre 2027.",
                "Les processus de recrutement et de demandes clients brassent des données personnelles. Au Bénin, leur traitement relève de la loi n° 2017-20 du 20 avril 2018 portant code du numérique ; dans l'Union européenne, du RGPD. Sur sa page consacrée aux durées de conservation, mise à jour le 2 avril 2026, la CNIL rappelle que ces données ne peuvent pas être gardées indéfiniment et donne l'exemple d'un candidat non retenu, dont les données sont conservées deux ans au plus. La formation fait inscrire cette durée sur chaque magasin de données du circuit cible.",
                "Reste la langue. Les sessions se tiennent en français, et les supports peuvent être remis en anglais pour un bailleur ou un siège anglophone. Les formulaires destinés au public gagnent souvent à être traduits : un formulaire de réclamation proposé aussi en anglais dans une zone frontalière, ou des libellés courts compris de tous, réduisent directement le nombre de dossiers incomplets, donc les retours en arrière mesurés pendant la semaine.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à digitaliser vos processus avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Son métier l'oblige à lire des processus avant de les outiller : paramétrer un module d'achats dans Odoo ou Dolibarr, relier un formulaire à un tableur, construire une automatisation entre deux logiciels, c'est d'abord comprendre qui fait quoi, dans quel ordre et avec quelles exceptions. Il a vu assez de circuits informatisés tels quels pour savoir ce que coûte l'étape inutile une fois paramétrée. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il a " . $ans . " ans d'expérience dans le numérique, dit avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé avec des organisations de " . count((array) fait('pays_travailles')) . " pays, en Afrique de l'Ouest et centrale, en Europe et au Canada. Il n'est certifié par aucun éditeur de logiciel de gestion ou d'automatisation, ne cite aucun client formé et ne promet aucun gain chiffré : les gains se constatent sur vos propres indicateurs.",
                "En formation, il tient la méthode et les questions, et laisse les décisions au service qui vivra avec le circuit. Les documents produits sont rédigés pour être remis à n'importe quel prestataire ; suivre la formation n'engage à rien pour la suite. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>, les formations voisines sur la page <a href=\"/formations/domaine/transformation-digitale\">transformation digitale</a> du <a href=\"/formations/\">catalogue</a>. Pour faire construire les automatisations définies en séance, voyez le service d'<a href=\"/services/automatisation-ia\">automatisation</a> ; pour une étude préalable, l'<a href=\"/services/audit-etude-de-projet\">audit et étude de projet</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de digitaliser un processus de votre service ?",
            'texte' => "Dessinez le circuit à partir d'un dossier réel, avec des symboles que tout le monde lit de la même façon ; mesurez une semaine avant de conclure ; supprimez, combinez et réordonnez les étapes avant d'acheter quoi que ce soit ; choisissez l'outil le plus simple qui tient les volumes et les contrôles ; et gardez trois indicateurs avec leur valeur de départ, pour prouver ce que le changement a réellement apporté.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Quel processus de votre service voulez-vous remettre à plat ?",
            'texte'  => "Indiquez le processus visé, le nombre de dossiers par mois, les personnes à former et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis après un cadrage gratuit.",
            'bouton' => ['url' => '/contact', 'texte' => 'Organiser la formation processus'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il connaître la notation BPMN avant la formation ?", 'r' => "Non. Les symboles utiles sont appris le premier matin, sur votre propre processus, et un aide-mémoire d'une page est remis à chacun. La formation n'en retient qu'une douzaine, tirés du sous-ensemble descriptif de la spécification, ce qui suffit pour décrire un circuit d'achat, de facturation, de recrutement ou de réclamation."],
        ['q' => "Quels processus se prêtent le mieux à l'exercice ?", 'r' => "Ceux qui se répètent souvent, traversent plusieurs personnes et dont les retards se voient : demandes d'achat, facturation, recrutement, demandes clients, notes de frais, dossiers d'inscription. Un processus rare, ou fait uniquement de jugements au cas par cas, apporte moins : il y a peu à mesurer et peu à standardiser."],
        ['q' => "Pourquoi une semaine entre les deux jours ?", 'r' => "Pour mesurer. Les estimations faites de mémoire se trompent souvent sur l'étape qui ralentit le circuit ; cinq jours de relevé sur des dossiers réels donnent les délais, les attentes et les retours en arrière. Si le calendrier l'interdit, on reconstitue les dates à partir des messageries et des logiciels, avec une précision moindre."],
        ['q' => "Quelle différence avec la formation IA dans les processus métier ?", 'r' => "Celle-ci digitalise sans intelligence artificielle : dessiner, mesurer, simplifier, puis outiller avec un formulaire, un logiciel de gestion ou une automatisation à règles fixes. La formation consacrée à l'IA part d'un processus déjà compris et décide quelles étapes confier à un modèle, avec quel contrôle humain. Suivre d'abord celle-ci prépare bien l'autre."],
        ['q' => "Repart-on avec un outil installé ?", 'r' => "Non. On repart avec le circuit actuel et le circuit cible dessinés, les mesures de la semaine, le choix argumenté d'une famille d'outils, un cahier des besoins d'une page, trois indicateurs et un plan de mise en service. L'installation se fait ensuite par votre équipe, par l'administrateur de votre logiciel ou par un prestataire."],
        ['q' => "Faut-il déjà disposer d'un logiciel de gestion ?", 'r' => "Non. Beaucoup de participants travaillent encore avec des formulaires papier, des messageries et des tableurs. La formation apprend justement à décider si un logiciel de gestion est nécessaire, ou si un formulaire relié à un tableur suffit pour les volumes mesurés. Quand un logiciel existe, on vérifie d'abord ce qu'il offre déjà."],
        ['q' => "Le contrôleur interne doit-il participer ?", 'r' => "C'est recommandé dès qu'une simplification touche une signature, un seuil ou une séparation entre celui qui commande et celui qui paie. Sa présence évite de supprimer un contrôle utile, et elle permet de déplacer un contrôle mal placé au lieu de l'empiler sur les autres."],
        ['q' => "Plusieurs services peuvent-ils travailler sur le même processus ?", 'r' => "Oui, et c'est souvent le cas des achats ou de la facturation, qui traversent le demandeur, le magasin, la comptabilité et la direction. Chaque service est représenté dans son couloir, et le dessin commun fait apparaître les attentes aux frontières, que personne ne voyait en entier."],
        ['q' => "La formation peut-elle se faire entièrement à distance ?", 'r' => "Oui, en cinq séances de deux heures trente sur trois semaines, avec un tableau blanc partagé pour dessiner et la semaine de relevé placée au milieu. Le format hybride, avec le premier jour sur place, reste plus confortable pour le dessin à plusieurs quand il est possible."],
        ['q' => "Que deviennent nos dossiers et nos données pendant la session ?", 'r' => "Les dossiers apportés sont anonymisés avant la formation ; les noms, numéros et coordonnées sont remplacés. Les relevés restent dans vos fichiers. En session inter-entreprises, les chiffres de chaque structure ne sont montrés qu'avec son accord et sans élément permettant de l'identifier."],
        ['q' => "Combien coûte la formation ?", 'r' => "Elle est proposée sur devis, après un premier échange, un cadrage et un devis gratuits. Le prix dépend du nombre de participants et de processus, de la préparation, du format, du lieu, de l'atelier de recette et de la langue des supports. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Object Management Group, Business Process Model and Notation (BPMN), version 2.0.2, janvier 2014 : présentation", 'url' => 'https://www.omg.org/spec/BPMN/2.0.2/About-BPMN', 'date' => '2026-10-05'],
        ['titre' => "Object Management Group, spécification BPMN 2.0.2 (formal/13-12-09), PDF : chapitre 2 (sous-classes de conformité) et chapitre 7 (catégories d'éléments)", 'url' => 'https://www.omg.org/spec/BPMN/2.0.2/PDF', 'date' => '2026-10-05'],
        ['titre' => "bpmn.io, licence d'utilisation", 'url' => 'https://bpmn.io/license/', 'date' => '2026-10-05'],
        ['titre' => "KoboToolbox, tarifs (offres Community, Starter, Professional et Teams)", 'url' => 'https://www.kobotoolbox.org/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Google Workspace, tarifs (prix affichés pour la France)", 'url' => 'https://workspace.google.com/intl/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Dolibarr, site officiel du projet (logiciel libre, version 24)", 'url' => 'https://www.dolibarr.org/', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, tarifs de Power Automate", 'url' => 'https://www.microsoft.com/fr-fr/power-platform/products/power-automate/pricing', 'date' => '2026-10-05'],
        ['titre' => "n8n, Plans and Pricing", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Make, Pricing", 'url' => 'https://www.make.com/en/pricing', 'date' => '2026-10-05'],
        ['titre' => "Eurostat, Statistics Explained : E-business integration (données extraites en mai 2026)", 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=E-business_integration', 'date' => '2026-10-05'],
        ['titre' => "France Num (DGE) et Crédoc, Baromètre France Num 2026, publié le 17 septembre 2026", 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => "Union internationale des télécommunications, Facts and Figures 2025 : usage d'Internet (15 octobre 2025)", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => "Entreprendre Service Public, délais de paiement entre professionnels et pénalités de retard (vérifié le 7 août 2026)", 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F23211', 'date' => '2026-10-05'],
        ['titre' => "impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?", 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts du Bénin, plateforme e-MECeF", 'url' => 'https://e-mecef.impots.bj/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, portail de la facture normalisée électronique (FNE)", 'url' => 'https://www.fne.dgi.gouv.ci/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, les durées de conservation des données (mise à jour du 2 avril 2026)", 'url' => 'https://www.cnil.fr/fr/les-durees-de-conservation-des-donnees', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-processus-metier', 'strategie-transformation-digitale', 'conduite-du-changement', 'chef-de-projet-digital', 'data-literacy', 'adoption-erp'],
        'services'    => ['digitalisation-d-entreprise', 'automatisation-ia', 'audit-etude-de-projet'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
    ],
];
