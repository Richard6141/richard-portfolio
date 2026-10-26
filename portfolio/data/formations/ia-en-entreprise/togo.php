<?php
// ============================================================
// data/formations/ia-en-entreprise/togo.php · Formation IA en entreprise au Togo
// (déclinaison pays de la fiche ia-en-entreprise, devise XOF).
// Faits externes relevés le 25/10/2026 : DataReportal, IPDCP (CIO Mag, République
// du Togo), programmes publics de formation (Kira Learning, CAIC), RGPH-5 (Koaci),
// Plateforme industrielle d'Adétikopé, FNAFPP, tarifs OpenAI, Anthropic, Google,
// Microsoft. Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA en entreprise au Togo : vos équipes de Lomé, Kara, Sokodé ou Atakpamé utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données",
    'title'   => "Former vos équipes à l’IA au Togo | Richard SALANON",
    'meta'    => "Formation IA en entreprise au Togo : vos équipes utilisent ChatGPT, Claude et Gemini sur leurs documents, avec une règle claire sur les données. Sur devis.",
    'en_bref' => "Au Togo, Richard SALANON forme à distance, depuis Cotonou, les équipes d'entreprise à l'IA : atelier d'une demi-journée, formation de deux jours ou accompagnement mensuel, en français, sur leurs propres documents, avec ChatGPT, Claude, Gemini ou Copilot, et un devis en FCFA. Les exercices portent sur les courriers, comptes rendus et tableaux réels du service, et la première demi-journée fixe ce qui peut ou non être confié à un assistant. Le prix est établi sur devis, en FCFA, après un échange de cadrage.",
    'publie'  => '2026-11-26',
    'maj'     => '2026-11-26',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes d'une entreprise togolaise à l'IA, et comment choisir ?",
            'paragraphes' => [
                "Au Togo, trois types d'acteurs forment à l'IA : les universités et les programmes publics, les écoles et centres de formation, et les formateurs indépendants qui interviennent en entreprise. Pour une équipe qui travaille déjà, le bon choix est celui qui part de ses documents et de ses tâches, pas d'un cours général.",
                "Un formateur IA d'entreprise ne récite pas le fonctionnement d'un modèle de langage. Il prend le courrier que votre assistante de direction rédige chaque semaine, le tableau de livraisons de votre responsable logistique, la relance de paiement de votre service comptable, et il les refait avec l'assistant, devant eux, jusqu'à ce que chacun sache produire, vérifier et corriger seul. La différence entre une démonstration d'outil et une formation qui change le travail tient à cette pratique sur des cas réels.",
                "Au Togo, l'offre visible pour un dirigeant qui tape « formateur IA Lomé » est surtout faite de cursus universitaires, de programmes nationaux destinés aux étudiants et d'événements ponctuels. Ils répondent à un besoin réel, celui de la jeunesse et des diplômés. Ils ne répondent pas à la question d'un directeur de PME de Lomé qui veut que dix collaborateurs gagnent du temps dès le mois prochain, sur des documents qui ne peuvent pas sortir de l'entreprise.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels critères permettent de choisir un formateur IA pour une équipe au Togo ?",
            'intro' => "Cinq questions suffisent pour comparer deux propositions, sans juger personne : elles portent sur ce que vos collaborateurs sauront faire en sortant, pas sur le prestige de l'intitulé.",
            'items' => [
                ['titre' => "Les exercices se font-ils sur vos documents ?", 'texte' => "Une formation qui utilise des exemples génériques laisse chacun seul face à son travail réel dès le lendemain. Demandez comment les documents de l'entreprise sont collectés, anonymisés et utilisés pendant la session."],
                ['titre' => "La règle sur les données est-elle posée dès le premier jour ?", 'texte' => "Au Togo, une instance de protection des données est active depuis 2025. Une formation sérieuse classe les documents avant le premier exercice : ce qui peut être confié à un assistant, ce qui s'anonymise, ce qui reste dans l'entreprise."],
                ['titre' => "Le résultat est-il mesuré sur une tâche réelle ?", 'texte' => "Un questionnaire de satisfaction ne dit pas si le travail a changé. Chaque participant devrait réaliser seul, à la fin, sa propre tâche de bout en bout, avec sa vérification."],
                ['titre' => "Que reste-t-il à l'entreprise après la session ?", 'texte' => "Une bibliothèque de consignes qui appartient à l'entreprise, un mode opératoire par tâche et un suivi après la formation valent plus qu'un diaporama."],
                ['titre' => "Le formateur annonce-t-il des promesses ou des limites ?", 'texte' => "Méfiez-vous des gains chiffrés promis à l'avance et des certifications d'éditeur évoquées sans pièce justificative. Un bon formateur dit aussi ce que la formation ne fait pas."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est l'IA au Togo, et que dit la politique nationale de formation ?",
            'paragraphes' => [
                "Selon DataReportal (Digital 2026, consulté le 25 octobre 2026), le Togo comptait 3,62 millions d'internautes fin 2025, soit 37,0 % de la population, et 8,40 millions de connexions mobiles, soit 86,0 % de la population, sur une base de 9,77 millions d'habitants. Une équipe togolaise travaille donc souvent depuis un téléphone et une connexion mobile, ce qui pèse sur la façon de former.",
                "L'État a fait de l'IA un axe de sa feuille de route : le portail officiel du ministère du numérique présente un axe « Cybersécurité et intelligence artificielle » parmi ses priorités, sans détailler de programme sur sa page d'accueil. Deux dispositifs de formation sont, eux, documentés dans la presse togolaise. Le 24 mars 2025, le gouvernement togolais a annoncé un programme national de certification numérique avec le Commonwealth Artificial Intelligence Consortium : 200 licences d'accès gratuites à une plateforme de cours en ligne, réservées à des Togolais titulaires au moins d'un bac+2.",
                "Le ministère chargé du numérique a aussi annoncé en juin 2025 un programme national de formation à la programmation, à l'IA et à l'anglais, mené avec Kira Learning et l'université Stanford : 15 000 étudiants de licence visés la première année, 900 tuteurs recrutés pour les accompagner pendant un an. Plus tôt, une Semaine de l'intelligence artificielle s'était tenue à Lomé du 4 au 8 juin 2024, sur le thème de l'état des lieux, des opportunités et des enjeux sociétaux de l'IA au Togo et en Afrique.",
                "Ces dispositifs forment des étudiants, des cadres sélectionnés et des talents futurs. Ils ne dispensent pas, par nature, une formation collective à l'intérieur d'une entreprise, sur ses propres dossiers. C'est l'espace que remplit une formation sur mesure comme celle décrite ici.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils d'IA une équipe togolaise peut-elle utiliser, et à quel coût ?",
            'legende' => "Prix publics relevés le 25 octobre 2026 sur les pages des éditeurs, hors taxes, en dollars sauf mention contraire (Google affiche des euros pour le Bénin). Ces montants sont ceux des éditeurs : ils ne font pas partie du prix de la formation. DeepSeek et NotebookLM ne sont pas chiffrés ici : vérifiez les conditions actuelles sur le site de l'éditeur.",
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Coût de l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', "Rédaction, reformulation, tableaux à partir de notes, analyse d'un fichier", "Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en annuel (à partir de 2 utilisateurs), 25 dollars au mois", "Préparer les consignes hors ligne, les coller en une fois ; télécharger les documents avant la séance"],
                ['Claude (Anthropic)', "Lecture de documents longs, synthèses avec citations, rédaction soignée en français", "Gratuit ; Pro 20 dollars par mois ou 17 dollars en annuel (200 dollars payés d'avance) ; Team 25 dollars par siège et par mois, 20 dollars en annuel", "Un document long en une seule demande évite les allers-retours coûteux en données"],
                ['Gemini (Google)', "Équipes déjà sur Gmail, Docs et Sheets ; recherche et résumés", "Gratuit ; Google AI Plus 4,69 euros par mois ; Google AI Pro 18,87 euros par mois (prix affichés pour le Bénin)", "S'ouvre avec un compte Google que la plupart des collaborateurs ont déjà"],
                ['Copilot (Microsoft)', "Équipes sous Microsoft 365 : Word, Excel, Outlook, Teams", "Copilot Chat inclus sans surcoût dans les abonnements Microsoft 365 éligibles ; Microsoft 365 Copilot Business 25,20 dollars par utilisateur et par mois en mensuel, 18 dollars en annuel avec une promotion valable jusqu'au 31 décembre 2026", "Utile surtout si la licence existe déjà ; la version payante demande un abonnement Microsoft 365"],
                ['DeepSeek', "Assistant généraliste accessible en ligne, utilisé pour des essais de rédaction et de code", "À vérifier sur le site de l'éditeur", "À réserver à des documents non sensibles : lisez où l'éditeur traite et conserve les données avant tout usage professionnel"],
                ['NotebookLM (Google)', "Poser des questions à un ensemble de documents que vous fournissez, avec renvoi aux sources", "À vérifier sur le site de Google", "Charger les documents une fois, puis interroger : économise des échanges"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel outil choisir quand la connexion coupe et que les données mobiles coûtent cher ?",
            'paragraphes' => [
                "Choisissez d'abord l'outil que l'équipe possède déjà : Copilot Chat si l'entreprise est sous Microsoft 365, Gemini si elle travaille sur Google. Tester ensuite deux assistants sur les mêmes documents montre que la méthode compte plus que la marque. Le détail des offres d'équipe se trouve dans le <a href='/comparatifs/chatgpt-vs-claude-vs-gemini'>comparatif ChatGPT, Claude et Gemini</a>.",
                "Avec 37,0 % d'internautes et une connexion surtout mobile, la formation prévoit des gestes simples : télécharger les documents d'exercice la veille, rédiger les consignes dans un traitement de texte puis les coller en une fois, demander une réponse complète plutôt que dix relances, et prévoir une solution de repli quand le réseau coupe en pleine séance. À distance, une coupure ne doit pas faire perdre le fil : les exercices restent faisables hors ligne jusqu'à la vérification.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles de données faut-il respecter au Togo avant d'envoyer un document à un assistant d'IA ?",
            'paragraphes' => [
                "Au Togo, les données personnelles relèvent de la loi n° 2019-014 du 29 octobre 2019, contrôlée par l'Instance de protection des données à caractère personnel, l'IPDCP. Avant de coller un document dans un assistant, une équipe doit savoir s'il contient des données de personnes identifiables, et, si oui, l'anonymiser ou ne pas l'envoyer.",
                "L'IPDCP a présenté ses activités à Lomé le vendredi 28 mars 2025 ; son action privilégie d'abord la sensibilisation des administrations, des entreprises et du public, avant les sanctions. Elle s'est déjà exprimée sur un cas concret : depuis le 1er octobre 2025, les caméras de vidéosurveillance installées dans les lieux publics ou d'usage collectif doivent lui être déclarées, et les images d'une caméra non déclarée ne sont pas recevables devant un tribunal. Le même article rappelle qu'un usage frauduleux de données personnelles expose à un à cinq ans de prison et à une amende de 5 à 20 millions de FCFA.",
                "La conséquence pour l'IA est directe : envoyer à un assistant en ligne la liste des clients d'une banque, les dossiers de patients d'une clinique ou les notes d'élèves d'une école est un traitement de données personnelles. La loi encadre aussi les transferts de données hors du pays ; un assistant hébergé à l'étranger entre dans cette réflexion. Les formalités exactes dépendent du type de traitement et se confirment auprès de l'IPDCP. Le cours n'est pas un conseil juridique : il apprend à reconnaître les documents sensibles et à ne pas les envoyer sans règle écrite.",
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment classer les documents d'une entreprise togolaise avant la première séance ?",
            'items' => [
                ['titre' => "Lister les documents du service", 'texte' => "Chaque participant dresse la liste de ses cinq documents les plus fréquents : courriers, rapports, tableaux, messages WhatsApp, fiches clients.", 'duree' => 'Avant la session'],
                ['titre' => "Repérer les données de personnes", 'texte' => "Noms, numéros de téléphone, numéros de compte Flooz ou Mixx by Yas, adresses, données de santé ou de scolarité : tout ce qui identifie quelqu'un est marqué.", 'duree' => 'Avant la session'],
                ['titre' => "Appliquer les trois couleurs", 'texte' => "Vert : peut être confié à l'assistant. Orange : à anonymiser d'abord, en remplaçant noms et numéros. Rouge : ne sort jamais de l'entreprise.", 'duree' => 'Première demi-journée'],
                ['titre' => "Écrire la règle de l'équipe", 'texte' => "Une page, avec qui décide en cas de doute et quel compte professionnel est utilisé. Elle sert aux nouveaux arrivants et prépare un éventuel échange avec l'IPDCP.", 'duree' => 'Fin de la formation'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels formats choisir pour quelles équipes, et comment la formation s'organise-t-elle à distance ?",
            'paragraphes' => [
                "Richard SALANON forme les équipes togolaises à distance, depuis Cotonou, en visioconférence. Ce format évite le coût d'un déplacement, permet de réunir des équipes de plusieurs villes et se règle sur un décalage d'une heure : Lomé est à UTC+0 toute l'année, Cotonou à UTC+1. Ses plages de travail, de 7 h à 20 h heure de Cotonou, correspondent à 6 h à 19 h à Lomé.",
                "Le français est la langue de travail et de tous les supports. Chaque participant a besoin d'un ordinateur, d'un navigateur à jour et d'une connexion stable ; le téléphone sert pour certains exercices mais pas pour analyser un tableau ou relire un long document. Les documents d'exercice sont envoyés à l'avance, et une solution de repli est prévue en cas de coupure.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir : atelier, formation de deux jours ou accompagnement mensuel ?",
            'legende' => "Les formats se combinent : un atelier pour un service pilote, puis la formation complète, puis l'accompagnement. Tous sont donnés à distance pour le Togo.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir au Togo'],
            'lignes'  => [
                ['Atelier découverte', "Une demi-journée", "12 personnes au plus", "Une direction de PME de Lomé qui veut voir sur ses propres courriers avant d'investir"],
                ['Formation de deux jours', "4 demi-journées de 3 h 30", "10 personnes au plus, par métier", "Un service où l'usage a commencé en désordre : comptabilité, commercial, administration, transit"],
                ['Sessions à distance courtes', "5 à 6 séances de 2 h 30", "8 personnes au plus", "Une équipe répartie entre Lomé, Kara, Sokodé ou Atakpamé, ou une connexion qui supporte mal une longue journée"],
                ['Accompagnement mensuel', "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Une équipe qui veut ancrer les habitudes et ajouter d'autres tâches"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment la formation s'adapte-t-elle à Lomé, Kara, Sokodé et Atakpamé ?",
            'legende' => "Repères par ville, sourcés ; chacun conduit à des tâches et à un rythme différents.",
            'entetes' => ['Ville', 'Un fait propre', 'Ce que cela change dans la formation'],
            'lignes'  => [
                ['Lomé', "Le Grand Lomé rassemble 2 188 376 habitants au recensement de 2022 (INSEED, via Koaci).", "Le plus grand vivier d'équipes : transit, banques, commerce, administration ; groupes par métier faciles à composer."],
                ['Kara', "La région de la Kara compte 985 512 habitants (recensement de 2022) ; l'Université de Kara a signé un accord avec la Plateforme industrielle d'Adétikopé, annoncé le 27 septembre 2026.", "Des équipes d'enseignement, d'industrie et de services ; les exercices partent des rapports et des comptes rendus de projet."],
                ['Sokodé', "Chef-lieu de la région Centrale, la moins peuplée du pays avec 795 529 habitants en 2022.", "Équipes plus petites : l'atelier d'une demi-journée ou les séances courtes à distance conviennent mieux qu'une session de deux jours."],
                ['Atakpamé', "Chef-lieu de la région des Plateaux, deuxième région du pays avec 1 635 946 habitants en 2022.", "Entreprises et organisations qui servent un large territoire : suivi de clients, de livraisons et de bénéficiaires par message."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Quel programme type pour quels métiers togolais, avec quelle tâche et quel résultat ?",
            'items' => [
                [
                    'secteur'  => "Transit et logistique autour de Lomé",
                    'probleme' => "Un transitaire suit des dizaines de dossiers dont le statut se demande par téléphone, avec des échanges en français et en anglais.",
                    'solution' => "Tâche : transformer des messages et des documents de transport en tableau de suivi et rédiger des points d'étape bilingues. Outil : Claude ou ChatGPT. Résultat attendu : un tableau exploitable dont chaque quantité et chaque date a été recontrôlée sur le document source.",
                ],
                [
                    'secteur'  => "Industrie, textile et agro-transformation, autour d'Adétikopé",
                    'probleme' => "La Plateforme industrielle d'Adétikopé, à une vingtaine de kilomètres de Lomé, a créé 6 580 emplois directs en cinq ans selon la presse togolaise ; les équipes d'encadrement rédigent beaucoup de comptes rendus de production, de notes de service et de rapports.",
                    'solution' => "Tâche : résumer un rapport de production et préparer une note de service. Outil : Copilot si la licence existe, sinon Gemini. Résultat attendu : un résumé relu, avec la source de chaque chiffre.",
                ],
                [
                    'secteur'  => "Commerce et services payés par Flooz ou Mixx by Yas",
                    'probleme' => "Un commerçant ou un cabinet reçoit des captures de paiements mobiles et des messages de clients, vérifie chaque transfert à la main et relance au cas par cas.",
                    'solution' => "Tâche : classer les messages par motif, répondre aux clients dans le ton de la maison et rédiger des relances de paiement courtoises. Outil : ChatGPT ou Gemini. Résultat attendu : des réponses prêtes après relecture, sans numéro de compte client envoyé à l'assistant.",
                ],
                [
                    'secteur'  => "Écoles, cliniques et centres de formation",
                    'probleme' => "Les équipes produisent des convocations, des supports et des comptes rendus, mais manipulent aussi des données d'élèves ou de patients.",
                    'solution' => "Tâche : préparer des supports de cours, des courriers et des comptes rendus administratifs. Outil : Gemini ou Claude. Résultat attendu : des documents prêts, avec la frontière claire : aucune note d'élève ni dossier médical identifiable dans l'assistant.",
                ],
                [
                    'secteur'  => "Ressources humaines et administration",
                    'probleme' => "Annonces, grilles d'entretien et notes de synthèse reprennent des modèles anciens et prennent des heures.",
                    'solution' => "Tâche : produire une annonce et une grille d'entretien à partir d'une fiche de poste existante. Outil : Claude ou Copilot. Résultat attendu : un texte neutre, relu pour retirer toute formulation discriminante et toute donnée personnelle.",
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer une formation IA au Togo, ou comment la budgétiser ?",
            'paragraphes' => [
                "Aucun financement n'est garanti. Le Togo dispose du Fonds national d'apprentissage, de formation et de perfectionnement professionnels, le FNAFPP, créé par une loi adoptée par les députés fin juin 2010 ; selon la presse togolaise, il apporte une aide financière aux organismes qui étudient, conçoivent ou mettent en oeuvre des programmes d'apprentissage et finance d'abord des projets collectifs de formation. Les conditions d'accès d'une entreprise pour une formation à l'IA ne sont pas publiées dans l'article consulté : interrogez le fonds par écrit, programme et devis à l'appui, avant de compter dessus.",
                "Richard SALANON n'affiche ni certification d'éditeur ni agrément d'un fonds de formation. Budgétisez donc la formation sans prise en charge, comme une dépense de productivité : décidez le nombre de participants, le format et la ou les tâches visées. Le programme, la feuille de présence et l'attestation nominative remis en fin de session servent dans tous les cas, notamment pour un dossier auprès d'un partenaire. Le règlement se fixe au devis, parmi les modes de paiement de la fiche de Richard : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Combien coûte une formation IA pour une équipe au Togo ?",
            'paragraphes' => [
                "Le prix est établi sur devis, en FCFA, après un échange de cadrage. Aucune somme n'est affichée sur cette page, parce qu'un atelier de dix personnes à Lomé et une formation de deux jours pour trois services n'ont pas le même coût.",
                "Quatre éléments font varier le prix pour une entreprise togolaise : le nombre de participants et de groupes ; la durée et le format retenus ; le mode, ici à distance, sans frais de déplacement ; et le temps de préparation des exercices sur les documents du client, y compris leur anonymisation. L'accompagnement mensuel après la session s'ajoute au besoin. Les abonnements aux assistants, listés plus haut, restent au nom de l'entreprise et ne sont pas compris.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les équipes togolaises qui démarrent l'IA ?",
            'intro' => "Elles viennent presque toutes du contexte local : téléphone d'abord, WhatsApp comme outil de travail, données de clients dans des messages, comptes personnels partagés.",
            'items' => [
                ['titre' => "Travailler dans le compte personnel d'un salarié", 'texte' => "Quand la connexion est chère, on utilise le compte gratuit du collègue qui en a un. Les documents de l'entreprise se retrouvent alors dans un historique que l'entreprise ne contrôle pas et qui part avec la personne."],
                ['titre' => "Coller une conversation WhatsApp entière", 'texte' => "Un fil de discussion avec un client contient son nom, son numéro, parfois son compte Flooz ou Mixx by Yas. Il s'anonymise avant d'être résumé, ou il reste dans la messagerie."],
                ['titre' => "Croire une référence juridique ou fiscale", 'texte' => "Un assistant peut citer une loi togolaise, un taux ou une circulaire de l'Office togolais des recettes avec aplomb et se tromper. Toute référence se retrouve dans le texte officiel avant d'être reprise dans un courrier."],
                ['titre' => "Dimensionner l'usage sur les abonnements mobiles", 'texte' => "Compter des connexions mobiles (86,0 % de la population selon DataReportal) n'est pas compter des personnes en ligne : 37,0 % d'internautes invite à vérifier le nombre de collaborateurs réellement connectés avant d'acheter des licences."],
                ['titre' => "Former tout le monde de la même façon", 'texte' => "Un comptable de Lomé, une responsable d'école à Sokodé et un chef d'atelier à Adétikopé n'ont pas les mêmes tâches. Les groupes se composent par métier, avec au plus deux ou trois tâches cibles chacun."],
                ['titre' => "Laisser la règle de données à l'oral", 'texte' => "Avec une autorité de protection active depuis 2025, la règle de l'équipe s'écrit : qui décide, quel compte, quels documents. Elle se montre en cas de question de l'IPDCP."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Que faire si un assistant a reçu des données de clients par erreur ?",
            'texte' => "Prévenir aussitôt la personne qui décide de la règle de données dans l'entreprise, supprimer la conversation, noter ce qui a été envoyé, quand et sur quel compte, puis vérifier auprès de l'IPDCP si une démarche s'impose selon la nature des données. La formation insiste sur ce réflexe : mieux vaut signaler une erreur le jour même que la découvrir lors d'un contrôle.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos équipes togolaises à l'IA avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il utilise lui-même ces assistants chaque jour pour rédiger, analyser et développer. Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href='https://audyxa.com'>Audyxa</a>. Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP.",
                "Richard a déjà travaillé avec des entreprises au Togo. Voisin du Bénin, le pays partage avec lui le franc CFA, le français comme langue de travail et un décalage d'une heure, ce qui simplifie le devis et l'organisation des séances. Ses projets sont présentés sur la page des <a href='/realisations/'>réalisations</a> ; son parcours est détaillé sur la page <a href='/richard-salanon'>Richard SALANON</a>. Pour les autres besoins numériques des entreprises de Lomé, la page <a href='/formation-ia-entreprise-lome'>formation IA en entreprise à Lomé</a> décrit l'offre dans la capitale.",
                "Sa façon de former tient en engagements vérifiables : une réponse sous 24 heures, des exercices construits sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l'entreprise et aucun gain chiffré promis à l'avance. Il n'est certifié par aucun éditeur d'IA et ne se présente comme partenaire d'aucun. La formation de référence est décrite sur la fiche <a href='/formations/ia-en-entreprise'>IA en entreprise</a> ; pour les décideurs, la formation <a href='/formations/ia-generative-dirigeants'>IA générative pour dirigeants</a> traite le budget, le choix des outils et la gouvernance.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe togolaise à l'IA ?",
            'texte'  => "Indiquez la ville, le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps et les outils déjà en place : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Togo ?", 'r' => "Ces trois titres décrivent des rôles voisins et aucun n’est réglementé. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Togo : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Togo ?", 'r' => "Commencez par une tâche répétitive et mesurable, par exemple la rédaction de courriers, le résumé de comptes rendus ou le classement de documents, et par la règle sur les données qui peuvent quitter l’entreprise. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Togo, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => "Qui peut former les équipes d'une entreprise à l'IA au Togo ?", 'r' => "Des universités, des programmes nationaux pour étudiants et cadres, des écoles et des formateurs indépendants. Pour former un service sur ses propres documents, Richard SALANON intervient à distance depuis Cotonou, en français, avec un devis en FCFA."],
        ['q' => "Richard SALANON forme-t-il à Lomé même, en présentiel ?", 'r' => "La formation pour le Togo se donne à distance, en visioconférence, avec un décalage d'une heure entre Cotonou et Lomé. Cela convient aussi aux équipes de Kara, de Sokodé et d'Atakpamé. La page <a href='/formation-ia-entreprise-lome'>formation IA à Lomé</a> détaille la capitale."],
        ['q' => "Le programme national de formation à l'IA du Togo remplace-t-il une formation d'entreprise ?", 'r' => "Non. Le programme annoncé en juin 2025 avec Kira Learning vise 15 000 étudiants de licence, et la certification numérique de mars 2025 offrait 200 licences à des Togolais titulaires d'un bac+2. Une formation d'équipe travaille sur les documents de l'entreprise."],
        ['q' => "Quelle loi s'applique aux données que mon équipe envoie à ChatGPT ou à Claude ?", 'r' => "La loi n° 2019-014 du 29 octobre 2019 sur les données à caractère personnel, contrôlée par l'IPDCP. Les formalités exactes dépendent du traitement : confirmez-les auprès de l'instance et n'envoyez aucune donnée nominative sans règle écrite."],
        ['q' => "L'IPDCP est-elle déjà active ?", 'r' => "Oui. Elle a présenté ses activités à Lomé le 28 mars 2025, et exige depuis le 1er octobre 2025 la déclaration des caméras dans les lieux publics ou d'usage collectif. Elle commence par la sensibilisation, avant les sanctions."],
        ['q' => "Quels outils d'IA une équipe togolaise peut-elle utiliser ?", 'r' => "ChatGPT, Claude, Gemini, Copilot, DeepSeek et NotebookLM. Le choix dépend de ce que l'entreprise possède déjà, par exemple Microsoft 365 ou Google, et de la nature des documents. Les versions gratuites suffisent pour apprendre la méthode."],
        ['q' => "Faut-il une bonne connexion pour suivre la formation ?", 'r' => "Une connexion stable est nécessaire, car les assistants travaillent en ligne. Selon DataReportal, 37,0 % des Togolais étaient en ligne fin 2025 ; la formation prévoit donc des documents téléchargés à l'avance et une solution de repli en cas de coupure."],
        ['q' => "Le FNAFPP peut-il financer la formation ?", 'r' => "Ce fonds, créé par une loi de 2010, finance d'abord des projets collectifs de formation. Ses conditions d'accès pour une entreprise ne sont pas publiées dans l'article consulté : écrivez-lui avant de compter dessus. Richard n'affiche aucun agrément de fonds."],
        ['q' => "Combien coûte la formation, et dans quelle monnaie ?", 'r' => "Le prix est fixé sur devis, en FCFA, après le cadrage. Il dépend du nombre de participants, de la durée, du format et de la préparation sur vos documents. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Mon équipe est petite et installée à Sokodé : quel format ?", 'r' => "L'atelier d'une demi-journée ou les séances courtes à distance, de 2 h 30, avec huit personnes au plus. Deux jours se justifient si plusieurs services veulent changer leurs habitudes en même temps."],
        ['q' => "Reçoit-on une attestation ?", 'r' => "Oui, une attestation nominative de fin de formation, avec le programme, les supports et les feuilles de présence. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => 'Journal officiel de la République togolaise du 29 octobre 2019 (loi n° 2019-014 relative à la protection des données à caractère personnel)', 'url' => 'https://www.afapdp.org/wp-content/uploads/2020/02/TOGO-JOS_29_10_2019-64E-ANNEE-N°26-TER.pdf', 'date' => '2026-10-06'],
        ['titre' => 'ARCEP Togo, observatoire des marchés des communications électroniques, premier trimestre 2026 (Mixx by Yas, Flooz)', 'url' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-06'],
        ['titre' => "DataReportal, Digital 2026 : Togo", 'url' => 'https://datareportal.com/reports/digital-2026-togo', 'date' => '2026-10-25'],
        ['titre' => "Ministère du numérique du Togo, portail officiel (axe Cybersécurité et intelligence artificielle)", 'url' => 'https://numerique.gouv.tg', 'date' => '2026-10-25'],
        ['titre' => "Afrique Sur 7, recrutement de 900 tuteurs pour la formation à l'IA et à l'anglais (23 juin 2025)", 'url' => 'https://www.afrique-sur7.fr/togo-recrutement-de-900-tuteurs-pour-la-formation-a-lia-et-a-langlais', 'date' => '2026-10-25'],
        ['titre' => "Osiris, le Togo lance un programme national de certification numérique (24 mars 2025)", 'url' => 'https://osiris.sn/le-togo-lance-un-programme-national-de-certification-numerique.html', 'date' => '2026-10-25'],
        ['titre' => "We Are Tech Africa, semaine de l'intelligence artificielle à Lomé du 4 au 8 juin 2024", 'url' => 'https://www.wearetech.africa/fr/fils/breves/breves-simple/le-togo-organise-une-semaine-d-intelligence-artificielle-du-4-au-8-juin', 'date' => '2026-10-25'],
        ['titre' => "CIO Mag, au Togo, l'IPDCP entame sa mission (28 mars 2025)", 'url' => 'https://cio-mag.com/etiquette/protection-des-donnees-personnelles', 'date' => '2026-10-25'],
        ['titre' => "République du Togo, nouvelle règle pour les caméras de sécurité (IPDCP, 1er octobre 2025)", 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/societe/nouvelle-regle-pour-vos-cameras-de-securite', 'date' => '2026-10-25'],
        ['titre' => "République du Togo, miser sur la formation professionnelle (FNAFPP)", 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/politique/miser-sur-la-formation-professionnelle', 'date' => '2026-10-25'],
        ['titre' => "Koaci, recensement général de 2022 du Togo : régions et villes les plus peuplées", 'url' => 'https://www.koaci.com/article/2023/04/05/togo/societe/togo-5e-rgph-plus-de-8-millions-dhabitants-recenses-regions-et-villes-les-plus-peuplees_168464.html', 'date' => '2026-10-25'],
        ['titre' => "AllAfrica, accord entre l'Université de Kara et la Plateforme industrielle d'Adétikopé (27 septembre 2026)", 'url' => 'https://fr.allafrica.com/stories/202609280282.html', 'date' => '2026-10-25'],
        ['titre' => "Wikipédia, région Centrale du Togo (Sokodé, recensement de 2022)", 'url' => 'https://en.wikipedia.org/wiki/Centrale_Region,_Togo', 'date' => '2026-10-25'],
        ['titre' => "Wikipédia, région des Plateaux du Togo (Atakpamé, recensement de 2022)", 'url' => 'https://en.wikipedia.org/wiki/Plateaux_Region,_Togo', 'date' => '2026-10-25'],
        ['titre' => "République du Togo, Togocom devient Yas et TMoney devient Mixx by Yas (26 novembre 2024)", 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/eco-finance/nouvelle-marque-nouvelles-ambitions', 'date' => '2026-10-25'],
        ['titre' => "OpenAI, ChatGPT : tarifs des offres", 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => "Anthropic, tarifs de Claude", 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => "Google, abonnements Gemini et Google AI (prix affichés pour le Bénin)", 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => "Microsoft, tarifs de Microsoft 365 Copilot", 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
