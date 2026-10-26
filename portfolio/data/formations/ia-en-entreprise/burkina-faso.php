<?php
// ============================================================
// data/formations/ia-en-entreprise/burkina-faso.php · Formation IA en entreprise,
// déclinaison Burkina Faso (page « formation IA par pays »).
// Faits relevés le 25/10/2026 : Banque mondiale (API, mise à jour du 08/10/2026),
// Burkina24 et Osiris (feuille de route nationale de l'IA, 17 juin 2026), CIL
// (site officiel), loi n° 001-2021/AN (articles 14, 26, 27, 31, 37, 42, relevés
// le 06/10/2026 dans la fiche pays), Sidwaya (FAFPA), pages tarifaires d'OpenAI,
// Anthropic, Google et Microsoft. Aucune certification attribuée à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formateur IA en entreprise au Burkina Faso : vos équipes de Ouagadougou et de Bobo-Dioulasso utilisent ChatGPT, Claude et Gemini sur leurs documents, avec une règle claire sur les données',
    'title'   => 'Formateur IA en entreprise au Burkina Faso | Richard SALANON',
    'meta'    => 'Formation IA en entreprise au Burkina Faso : ChatGPT, Claude et Gemini sur vos documents, règles de la CIL, ateliers à distance, devis en FCFA.',
    'en_bref' => 'Au Burkina Faso, vos équipes peuvent être formées à l\'IA par un organisme local, par un consultant indépendant ou par un formateur qui intervient à distance, comme Richard SALANON, basé à Cotonou, qui anime des ateliers en visioconférence pour les entreprises de Ouagadougou et de Bobo-Dioulasso. La formation se fait sur vos propres documents, avec une règle écrite sur les données personnelles qui tient compte de la loi n° 001-2021/AN et de la CIL. Les formats vont de l\'atelier d\'une demi-journée à l\'accompagnement mensuel, avec une heure de décalage seulement. Le devis est établi sur mesure, en FCFA.',
    'publie'  => '2026-11-03',
    'maj'     => '2026-11-03',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui forme les équipes à l\'IA au Burkina Faso, et comment choisir ?',
            'paragraphes' => [
                'Trois sortes d\'intervenants forment les équipes burkinabè à l\'IA : des organismes et des écoles établis à Ouagadougou ou à Bobo-Dioulasso, des consultants indépendants installés dans le pays, et des formateurs qui interviennent à distance depuis l\'étranger. Le bon choix dépend de ce que votre équipe doit savoir faire le lundi suivant, pas du nom de l\'outil enseigné.',
                'Un formateur IA d\'entreprise n\'est pas un conférencier qui présente des outils. C\'est une personne qui prend une tâche réelle de votre service, par exemple le compte rendu d\'une réunion de direction ou la réponse à un client qui écrit sur WhatsApp, la refait avec vous dans un assistant, puis vous apprend à vérifier chaque ligne du résultat. La démonstration impressionne le jour même ; la formation se juge un mois plus tard, quand l\'équipe se sert encore de ce qu\'elle a appris.',
                'Pour distinguer les deux, posez quatre questions avant de signer. Les exercices se feront-ils sur nos documents, anonymisés au besoin, ou sur des exemples génériques ? Que saura faire chaque participant seul à la fin, et comment le vérifie-t-on ? Qu\'est-ce qui est dit des données personnelles, et que dit le formateur de la loi du pays ? Que reste-t-il à l\'entreprise après la session : supports modifiables, bibliothèque de consignes, mode opératoire par tâche ? Un prestataire sérieux répond à ces quatre questions par écrit, sans dénigrer les autres.',
                'Le contexte burkinabè ajoute ses propres critères. Une partie des équipes travaille depuis des téléphones et des forfaits de données limités ; le formateur doit donc prévoir des exercices qui supportent une coupure. La Commission de l\'informatique et des libertés (CIL) a tenu à Ouagadougou, du 16 au 18 juillet 2026, la première édition du Grand Salon de la Data en Afrique, d\'après son site officiel : la gouvernance des données est devenue un sujet d\'entreprise, et une formation à l\'IA qui l\'ignore laisse un risque ouvert.',
                'Richard SALANON se place dans la troisième catégorie. Il forme à distance depuis Cotonou, avec une heure d\'écart seulement avec Ouagadougou, en français, sur les comptes et les documents de l\'entreprise. Il ne remplace pas une école ni un cursus diplômant : il traite un besoin précis, celui d\'une équipe qui veut utiliser l\'IA dans son travail sans exposer ses données ni publier de texte non vérifié.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'IA au Burkina Faso, et que prévoient les pouvoirs publics ?',
            'paragraphes' => [
                'L\'IA entre dans les entreprises burkinabè par le téléphone et par le français. Selon la Banque mondiale, 28,3 % des habitants utilisaient internet en 2024, et le pays comptait 116,6 abonnements mobiles pour 100 habitants la même année, pour 24 074 580 habitants en 2025. Autrement dit, l\'accès se fait surtout par le mobile, avec une couverture de données inégale selon les villes.',
                'Sur le plan public, le ministère chargé de la transition digitale a organisé le mercredi 17 juin 2026, à Ouagadougou, l\'atelier de validation de la feuille de route nationale de l\'IA à l\'horizon 2030, d\'après Burkina24. Elle s\'inscrit dans le Plan national de relance 2026-2030. Les secteurs cités sont la santé, la culture, l\'éducation et l\'agriculture ; la protection des données figure parmi les priorités de vigilance. L\'article ne donne ni budget ni calendrier intermédiaire.',
                'Un autre chantier touche directement l\'usage des assistants : en mars 2026, le ministère a lancé le travail sur des corpus de quatre langues nationales, le mooré, le dioula, le fulfuldé et le gulmancema, pour permettre à terme la reconnaissance vocale, la traduction automatique et la synthèse vocale, selon Osiris du 25 mars 2026. Aujourd\'hui, les grands assistants écrivent bien en français et mal en mooré : un texte dans une langue nationale se fait relire par un locuteur avant tout usage.',
                'Pour une entreprise, ces annonces ont une conséquence pratique. Aucune règle publique ne dit encore à un directeur administratif ce qu\'il peut coller dans un assistant. La règle de l\'équipe se construit donc avec la loi sur les données personnelles, qui existe, et avec le bon sens : la formation sert à l\'écrire, la faire comprendre et la faire appliquer.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres retenir pour situer l\'équipe qu\'on forme ?',
            'items' => [
                ['valeur' => '28,3 %', 'libelle' => 'Part des habitants du Burkina Faso qui utilisaient internet en 2024, contre 25,4 % en 2023', 'source' => 'Banque mondiale, indicateur IT.NET.USER.ZS (mise à jour du 8 octobre 2026)', 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=BF'],
                ['valeur' => '116,6', 'libelle' => 'Abonnements mobiles pour 100 habitants en 2024 : le téléphone est l\'écran de la majorité des salariés', 'source' => 'Banque mondiale, indicateur IT.CEL.SETS.P2', 'url' => 'https://data.worldbank.org/indicator/IT.CEL.SETS.P2?locations=BF'],
                ['valeur' => '17 juin 2026', 'libelle' => 'Validation de la feuille de route nationale de l\'IA à l\'horizon 2030, à Ouagadougou, dans le cadre du Plan national de relance 2026-2030', 'source' => 'Burkina24', 'url' => 'https://burkina24.com/?p=444515'],
                ['valeur' => '4', 'libelle' => 'Langues nationales (mooré, dioula, fulfuldé, gulmancema) pour lesquelles le ministère a engagé en mars 2026 des ressources destinées aux modèles d\'IA', 'source' => 'Osiris, 25 mars 2026', 'url' => 'https://osiris.sn/burkina-faso-vers-une-ia-adaptee-aux-realites-linguistiques-locales.html'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d\'IA utiliser dans une équipe burkinabè, et à quel coût ?',
            'legende' => 'Prix d\'éditeur relevés le 25 octobre 2026 sur les pages publiques, hors taxes. Les montants en dollars sont ceux de la page américaine ; Google affichait des euros. Ils ne font pas partie du prix de la formation, et les éditeurs les modifient sans préavis.',
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Coût d\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédiger, reformuler, analyser un tableau, discuter d\'un document ; très répandu, donc facile à faire adopter', 'Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en facturation annuelle, 25 dollars au mois', 'Application mobile utilisable sur un forfait de données ; coller le texte plutôt que téléverser de gros fichiers'],
                ['Claude (Anthropic)', 'Lire de longs documents, rédiger un français soigné, garder le fil sur un dossier', 'Gratuit ; Pro 17 dollars par mois en annuel (200 dollars payés d\'avance), 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel, 25 dollars au mois', 'Les réponses longues sont mieux lues sur ordinateur ; préparer les pièces à l\'avance'],
                ['Gemini (Google)', 'Travailler dans Gmail, Docs et Sheets, très utile pour les équipes déjà sur Google Workspace', 'Gratuit ; Google AI Plus 4,69 euros par mois ; Google AI Pro 18,87 euros par mois (prix affichés en euros)', 'Bien intégré à Android ; utile quand le téléphone est le seul poste de travail'],
                ['Copilot (Microsoft)', 'Résumer des courriels, des réunions et des fichiers Word, Excel ou Teams de l\'entreprise', 'Copilot Chat inclus sans surcoût dans les abonnements Microsoft 365 éligibles ; Copilot Business 18 dollars par utilisateur et par mois en annuel (promotion du 1er juillet au 31 décembre 2026 sur la première année, 21 dollars sinon), 25,20 dollars au mois', 'Demande un abonnement Microsoft 365 et des postes à jour ; intéressant seulement si l\'entreprise l\'a déjà'],
                ['DeepSeek', 'Un assistant de plus à connaître, que des collaborateurs essaient souvent de leur propre initiative', 'La documentation de l\'éditeur consultée détaille l\'API, facturée à l\'usage, avec les modèles deepseek-flash et deepseek-v4-pro ; rien n\'y concerne l\'application de chat', 'À réserver à des textes publics tant que l\'entreprise n\'a pas lu les conditions de l\'éditeur sur le lieu de stockage des données'],
                ['NotebookLM (Google)', 'Interroger un ensemble de documents choisis et obtenir des réponses qui renvoient à ces documents, utile pour une procédure ou un cahier des charges', 'Accessible avec un compte Google ; ses plafonds de notebooks et de sources suivent l\'abonnement Google AI et changent souvent : voir la page d\'aide de Google avant d\'acheter', 'Préparer les documents sources à l\'avance et les charger une fois en bonne connexion'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer pour démarrer, et que faire quand le réseau coupe ?',
            'paragraphes' => [
                'Il n\'est pas nécessaire de payer pour apprendre : les offres gratuites suffisent à pratiquer la méthode, et la décision d\'abonnement se prend après la formation, sur l\'outil que l\'équipe a réellement retenu. Ne payez jamais un abonnement par salarié avant d\'avoir mesuré qui s\'en sert.',
                'Dans un pays où 28,3 % de la population était connectée à internet en 2024, la fiabilité du réseau compte plus que le choix du modèle. Les séances à distance sont donc préparées pour résister à une coupure : documents d\'exercice envoyés la veille et ouverts hors ligne, consignes rédigées dans un traitement de texte puis collées d\'un seul bloc, exercices de relecture qui n\'ont pas besoin d\'internet, et enregistrement de la séance si l\'entreprise le souhaite.',
                'La même logique s\'applique à l\'électricité. Si le bureau subit des délestages, on demande aux participants de charger leurs ordinateurs avant la séance et de garder un téléphone en partage de connexion de secours. Le formateur reprend là où la séance s\'est arrêtée, sans refaire le début : chaque exercice est découpé pour tenir en un quart d\'heure.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité s\'appliquent avant d\'envoyer un document à un assistant ?',
            'paragraphes' => [
                'Au Burkina Faso, la loi n° 001-2021/AN du 30 mars 2021 encadre les données personnelles, et la CIL en est l\'autorité de contrôle. Envoyer à un assistant en ligne un fichier de clients, de salariés ou de patients est un traitement de données au sens de cette loi. La règle de base pour une équipe : aucun nom, numéro de téléphone ou dossier identifiable dans un assistant sans décision préalable du responsable.',
                'Les formalités d\'abord. D\'après la loi, un traitement ordinaire fait l\'objet d\'une déclaration normale (article 27), et l\'article 26 prévoit aussi la demande d\'avis, l\'autorisation et la déclaration simplifiée. Le site de la CIL classe ces démarches sous la rubrique « Déclaration préalable », avec un formulaire à télécharger. Une entreprise qui tient déjà un fichier clients doit donc commencer par savoir si ce fichier est déclaré.',
                'L\'article 31 soumet à autorisation préalable plusieurs traitements, dont les aides à la décision qui profilent une personne ou reposent sur l\'IA à des fins prédictives, et les transferts de données vers l\'étranger. Un assistant qui note des candidats ou des clients entre dans ce champ. L\'article 42 ajoute, avant tout transfert à l\'extérieur du pays, l\'autorisation de la CIL, une clause de confidentialité, une clause de réversibilité et des mesures de sécurité comme le chiffrement. Or ChatGPT, Claude, Gemini et Copilot sont exploités par des sociétés établies hors du Burkina Faso.',
                'Deux règles sectorielles sont à connaître. L\'article 37 impose d\'héberger au Burkina Faso les données de santé permettant d\'identifier des personnes, sauf dérogation : une clinique ne confie donc pas de dossier patient à un assistant en ligne. L\'article 14 interdit la prospection directe d\'une personne physique sans son consentement préalable : demander à un assistant de rédiger mille messages de relance n\'autorise pas à les envoyer à une liste de numéros récupérée sans accord.',
                'La loi de 2021 ne vise pas nommément les assistants d\'IA générative, et la feuille de route nationale du 17 juin 2026 ne contient pas, d\'après Burkina24, de mesure précise sur les données. Les règles générales s\'appliquent donc telles quelles, et un texte propre à l\'IA reste à surveiller sur le site du ministère chargé de la transition digitale. En pratique, la formation fait produire à l\'équipe un document d\'une page qui classe ses fichiers en trois catégories et dit qui décide, en cas de doute.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelle liste de contrôle suivre avant de confier un document à un assistant d\'IA ?',
            'items' => [
                'Le document contient-il le nom, le téléphone ou la photo d\'une personne identifiable ? Si oui, remplacer ces éléments par des repères neutres avant d\'envoyer.',
                'Le fichier est-il un dossier de santé, un fichier biométrique ou une liste de salariés ? Alors il ne quitte pas l\'entreprise, quelle que soit l\'urgence.',
                'Le compte utilisé appartient-il à l\'entreprise ? Un compte gratuit ouvert à titre personnel part avec le salarié.',
                'L\'historique des conversations et l\'option d\'amélioration des modèles sont-ils réglés selon la décision de l\'entreprise ?',
                'Le fichier clients que l\'on veut traiter est-il déclaré à la CIL, et l\'usage envisagé correspond-il à la finalité déclarée ?',
                'Un message de prospection sera-t-il envoyé à des personnes qui ont donné leur consentement ?',
                'Une personne nommée relira-t-elle le résultat et connaît-elle la source de chaque chiffre ?',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats retenir pour quelle équipe, et comment s\'organise une formation à distance depuis Cotonou ?',
            'legende' => 'Tous les formats se donnent en visioconférence, en français, avec des supports modifiables remis aux participants. Aucun déplacement n\'est prévu au Burkina Faso.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Organisation pour le Burkina Faso'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction ou une équipe qui veut voir avant d\'investir ; séance le matin pour éviter les pics de réseau de l\'après-midi'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un service qui a déjà commencé à utiliser l\'IA sans méthode ; documents d\'exercice reçus et anonymisés à l\'avance'],
                ['Séances courtes à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre Ouagadougou, Bobo-Dioulasso et d\'autres sites ; une séance tient même si un participant se reconnecte'],
                ['Session de direction', 'Une demi-journée', 'Dirigeants et responsables', 'Décisions sur les outils, le budget et la règle de données, avant de former les équipes'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Mesure de ce qui sert, correction des consignes, nouvelles tâches ; le format qui installe les habitudes'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Fuseau, langue, matériel et connexion : que prévoir côté entreprise ?',
            'intro' => 'La logistique d\'une formation à distance tient en cinq points, tous réglés au cadrage.',
            'items' => [
                ['titre' => 'Le fuseau', 'texte' => 'Ouagadougou suit l\'heure de Greenwich toute l\'année, Cotonou a une heure d\'avance. Une séance de 9 heures à Ouagadougou commence à 10 heures à Cotonou ; les créneaux se fixent dans l\'heure locale de l\'entreprise.'],
                ['titre' => 'La langue', 'texte' => 'Les séances et les supports sont en français. Pour les messages en mooré ou en dioula que l\'équipe reçoit de ses clients, on apprend à traduire avec l\'assistant puis à faire relire par un locuteur, sans jamais envoyer tel quel.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant, avec un navigateur à jour, un traitement de texte et un tableur, plus un téléphone en secours. Une salle équipée d\'un grand écran aide si plusieurs personnes suivent depuis le même bureau.'],
                ['titre' => 'La connexion', 'texte' => 'Une connexion stable pour chaque poste, ou une salle commune bien connectée. Le formateur teste l\'outil de visioconférence avec l\'entreprise la veille.'],
                ['titre' => 'Le référent', 'texte' => 'Une personne de l\'entreprise, disponible quelques heures, réunit les documents, ouvre les comptes et sert de relais entre deux séances.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Que fait-on concrètement par métier au Burkina Faso, avec quel outil et pour quel résultat ?',
            'items' => [
                ['secteur' => 'Agriculture et agro-transformation', 'probleme' => 'Les achats aux producteurs se notent sur des carnets, et le rapprochement avec les livraisons se fait en fin de semaine.', 'solution' => 'Tâche : transformer des notes et des messages vocaux transcrits en tableau d\'achats par producteur, poids et prix. Outil : ChatGPT ou Gemini sur téléphone, puis tableur. Résultat : un tableau que le responsable recalcule sur deux totaux avant de payer.'],
                ['secteur' => 'Mines et sous-traitance minière', 'probleme' => 'Un fournisseur de pièces ou de services doit répondre à des appels d\'offres longs, en français et en anglais, avec des pièces techniques à fournir.', 'solution' => 'Tâche : résumer un cahier des charges, lister les pièces exigées et préparer le courrier d\'accompagnement bilingue. Outil : Claude ou NotebookLM sur le cahier des charges. Résultat : une liste de conformité où chaque exigence renvoie à la page source.'],
                ['secteur' => 'Commerce et distribution', 'probleme' => 'Les commandes arrivent par appel et par WhatsApp, et les relances de paiement sont rédigées à la va-vite.', 'solution' => 'Tâche : classer vingt messages clients par motif et proposer des réponses dans le ton de la maison. Outil : ChatGPT, avec une bibliothèque de consignes commune. Résultat : des réponses que le vendeur relit, avec prix et délais contrôlés, et un modèle de relance courtois.'],
                ['secteur' => 'Cabinets comptables et services aux entreprises', 'probleme' => 'Un cabinet reçoit des pièces clients par messagerie et rédige à la main des notes de synthèse pour le bilan SYSCOHADA.', 'solution' => 'Tâche : préparer la note de synthèse à partir d\'un export de balance anonymisé. Outil : Claude ou Gemini avec Sheets. Résultat : un commentaire structuré, relu et recalculé par le comptable, qui reste seul responsable des chiffres.'],
                ['secteur' => 'Santé, pharmacie et cliniques', 'probleme' => 'Les équipes rédigent beaucoup de courriers et de supports, mais manipulent des données de patients.', 'solution' => 'Tâche : produire des affiches de prévention, des convocations types et des comptes rendus administratifs sans donnée nominative. Outil : Copilot Chat ou ChatGPT. Résultat : des documents prêts à relire ; aucun dossier patient n\'entre dans l\'assistant, en accord avec l\'article 37.'],
                ['secteur' => 'ONG, projets et administration', 'probleme' => 'Les rapports aux bailleurs et les notes de synthèse prennent des jours, et passent par plusieurs signataires.', 'solution' => 'Tâche : rédiger un premier jet de rapport d\'activité à partir de sources vérifiées et d\'un modèle validé. Outil : Claude ou Copilot. Résultat : un tableau d\'indicateurs avec renvoi aux pages du rapport source, validé par le responsable du projet.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA au Burkina Faso, ou la budgétiser ?',
            'paragraphes' => [
                'Le fonds public à connaître est le Fonds d\'appui à la formation professionnelle et à l\'apprentissage (FAFPA). Un article de Sidwaya du 6 novembre 2019 le présente comme un outil qui aide les entreprises à financer la formation continue de leurs salariés en prenant en charge une grande partie du coût, et indique que 500 millions de FCFA avaient été mis à disposition en 2019 pour les seuls plans de formation d\'entreprises. Aucune prise en charge n\'est garantie par cette page.',
                'Le même article rapporte, à la date de l\'atelier tenu à Bobo-Dioulasso le 30 octobre 2019 avec le Conseil national du patronat burkinabè, que les plans de formation des entreprises ne parvenaient pas jusqu\'au fonds. Il cite aussi la taxe patronale d\'apprentissage, de 3 % de la masse salariale selon le représentant du patronat. Ces éléments datent de sept ans : les critères d\'éligibilité, le plafond et la possibilité de financer un prestataire établi à l\'étranger se confirment directement auprès du FAFPA, avec le programme et le devis en main.',
                'Si le fonds ne finance pas, la formation se budgétise comme un investissement mesurable. Fixez avant la session la tâche cible de chaque participant et son temps actuel, puis comparez au bout d\'un mois et de trois mois. Une direction qui présente ces chiffres à son conseil d\'administration obtient plus facilement la poursuite du budget qu\'avec un compte rendu de satisfaction.',
                'Le programme, les feuilles de présence et l\'attestation nominative remis en fin de session servent de pièces justificatives auprès d\'un fonds ou d\'un bailleur. Richard SALANON n\'affiche aucun agrément d\'un fonds de formation burkinabè : il ne se présente pas comme organisme agréé.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA au Burkina Faso, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Le prix est fixé sur devis, en FCFA, après un échange de cadrage gratuit ; aucune somme n\'est publiée ici parce qu\'elle dépend du groupe et du travail de préparation. Le règlement se fait par un des modes de la fiche de paiement de Richard (Mobile Money, carte bancaire, PayPal, virement ou espèces), choisi au devis. Les abonnements aux assistants restent au nom de l\'entreprise.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée en visioconférence', 'Deux tâches travaillées sur vos documents', 'La règle de données de l\'équipe', 'Une recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices construits sur vos documents', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche cible et attestation']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Corrections et nouvelles tâches', 'Bilan écrit à trois mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, par métier ou par site.',
                'La durée et le nombre de séances, avec des séances courtes si la connexion l\'impose.',
                'Le mode : tout à distance, ou une session de direction suivie de séances d\'équipe.',
                'La préparation sur vos documents : collecte, anonymisation, construction des exercices.',
                'La règle de données à rédiger avec la direction, par exemple pour une clinique ou un cabinet.',
                'L\'accompagnement après la session et la langue des supports.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent quand une équipe burkinabè démarre l\'IA ?',
            'intro' => 'Ces écarts reviennent dans les entreprises qui s\'y mettent sans cadre ; la plupart se préviennent avant la première séance.',
            'items' => [
                ['titre' => 'Coller un fichier clients dans un compte personnel', 'texte' => 'Le geste est rapide et il engage l\'entreprise au regard de la loi 001-2021/AN. Les fichiers se classent avant l\'exercice, et le compte utilisé appartient à l\'entreprise.'],
                ['titre' => 'Traiter un dossier de patient ou d\'élève comme un texte ordinaire', 'texte' => 'Les données de santé identifiantes ont un régime d\'hébergement propre (article 37). Une clinique ou une école formalise ce qui ne sort jamais.'],
                ['titre' => 'Supposer que l\'assistant maîtrise le mooré ou le dioula', 'texte' => 'Les corpus de langues nationales ne sont en cours de constitution que depuis mars 2026. Tout texte dans ces langues se relit par un locuteur avant envoi.'],
                ['titre' => 'Lancer une campagne WhatsApp de masse écrite par l\'IA', 'texte' => 'Rédiger mille messages en une minute ne dispense pas du consentement exigé par l\'article 14. La liste d\'envoi garde la trace de chaque accord.'],
                ['titre' => 'Choisir un outil parce que le collègue l\'utilise', 'texte' => 'Le bon outil dépend des documents et des abonnements déjà payés. L\'équipe en retient un principal après avoir mesuré, pas avant.'],
                ['titre' => 'Fonder un appel d\'offres sur une citation non vérifiée', 'texte' => 'Un assistant cite parfois un article de loi ou un chiffre qui n\'existe pas. Chaque référence se retrouve dans sa source ou disparaît du texte.'],
                ['titre' => 'Former tout le monde en une fois, puis ne plus rien suivre', 'texte' => 'Sans mesure à un mois et à trois mois, l\'usage retombe. Un référent nommé tient la bibliothèque de consignes à jour.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond de ce que l\'assistant a écrit dans une entreprise burkinabè ?',
            'texte' => 'La personne qui signe et l\'entreprise, exactement comme si le texte avait été écrit à la main. L\'histoire d\'<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu\'une organisation répond de l\'information fausse donnée par son assistant. Dans un service, la règle tient en une phrase : l\'assistant propose, une personne nommée vérifie les faits et décide.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Burkina Faso, un des ' . count((array) fait('pays_travailles')) . ' pays où il est intervenu. Il compte ' . $ans . ' ans d\'expérience dans le numérique, une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), et il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Il utilise lui-même ces assistants chaque jour pour rédiger, analyser et développer.',
                'Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, un usage très répandu dans les échanges avec les clients au Burkina Faso, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Ses projets de la région sont présentés sur la page des <a href="/realisations/">réalisations</a> : OBA TV, web TV de Cotonou, avec abonnement payé par Mobile Money, et Afro Joy\'ce, à Abidjan, projet réalisé en sous-traitance pour Digital Développement.',
                'Sa façon de former repose sur des engagements simples : une réponse sous 24 heures, un cadrage qui peut conclure qu\'un atelier court suffit, des exercices sur vos documents, une évaluation sur une tâche réelle et des supports qui restent à l\'entreprise. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>.',
                'Quand le besoin dépasse l\'usage quotidien des assistants, par exemple brancher l\'IA sur vos logiciels ou sur vos messages WhatsApp, il relève d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> ou d\'<a href="/services/agents-ia-chatbot-whatsapp">agent IA et chatbot WhatsApp</a>. Pour les autres formations, voir le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire une équipe de Ouagadougou ou de Bobo-Dioulasso ?',
            'texte' => 'Choisissez deux ou trois tâches réelles par groupe, rédigez avec la direction la règle de données avant le premier exercice, formez à distance sur des séances courtes qui supportent une coupure, relisez chaque résultat avec sa source, et mesurez le temps de la tâche avant, puis un et trois mois après.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe burkinabè à l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Burkina Faso ?", 'r' => "Les trois appellations se côtoient sur le marché, et aucune ne fait l’objet d’un diplôme ou d’un agrément officiel. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek ou NotebookLM sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Burkina Faso : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Burkina Faso ?", 'r' => "Choisissez d’abord un usage précis et un responsable, avant tout abonnement : une tâche qui revient chaque semaine, un jeu de documents d’exercice et une règle claire sur les données confidentielles. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Burkina Faso, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former mes équipes à l\'IA à Ouagadougou ?', 'r' => 'Un organisme local, un consultant installé dans le pays ou un formateur à distance. Richard SALANON intervient en visioconférence depuis Cotonou, avec une heure de décalage, sur vos documents et vos comptes, en français.'],
        ['q' => 'Faut-il déclarer à la CIL l\'usage d\'un assistant d\'IA ?', 'r' => 'La loi n° 001-2021/AN soumet les traitements de données personnelles à déclaration ou à autorisation (articles 26, 27 et 31). Si un assistant reçoit des données personnelles, le traitement concerné doit être couvert. Confirmez votre cas auprès de la CIL ou d\'un juriste.'],
        ['q' => 'Peut-on envoyer un dossier de patient à ChatGPT ou à Claude ?', 'r' => 'Non. L\'article 37 de la loi impose d\'héberger au Burkina Faso, sauf dérogation, les données de santé qui permettent d\'identifier des personnes. La formation montre comment utiliser l\'assistant sans aucun dossier nominatif.'],
        ['q' => 'Le Burkina Faso a-t-il une stratégie nationale sur l\'IA ?', 'r' => 'Une feuille de route nationale de l\'IA à l\'horizon 2030 a été validée le 17 juin 2026 à Ouagadougou, dans le cadre du Plan national de relance 2026-2030, d\'après Burkina24. Elle cite la santé, la culture, l\'éducation et l\'agriculture.'],
        ['q' => 'Les assistants comprennent-ils le mooré et le dioula ?', 'r' => 'Mal pour l\'instant. Le ministère a engagé en mars 2026 la constitution de ressources pour quatre langues nationales, mais les assistants actuels écrivent surtout en français. Tout texte dans une langue nationale se fait relire.'],
        ['q' => 'La formation peut-elle être financée par le FAFPA ?', 'r' => 'Le FAFPA finance des plans de formation d\'entreprises, d\'après Sidwaya (2019). Les conditions actuelles et l\'éligibilité d\'un prestataire établi à l\'étranger se confirment auprès du fonds. Aucune prise en charge n\'est garantie, et Richard n\'affiche aucun agrément.'],
        ['q' => 'Comment suivre une formation avec des coupures de réseau ?', 'r' => 'Les séances sont courtes, les documents sont envoyés la veille et ouverts hors ligne, les consignes sont rédigées à l\'avance, et un enregistrement peut être conservé. Le formateur reprend là où la coupure est survenue.'],
        ['q' => 'Quel décalage horaire avec Cotonou ?', 'r' => 'Une heure : Ouagadougou est à UTC+0 toute l\'année, Cotonou à UTC+1. Les créneaux se fixent dans l\'heure locale de votre entreprise.'],
        ['q' => 'Combien coûte une formation IA pour une équipe au Burkina Faso ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après un échange de cadrage. Il dépend du nombre de participants, de la durée, du mode à distance et de la préparation sur vos documents. Les abonnements aux assistants sont à part.'],
        ['q' => 'Faut-il acheter des abonnements avant la session ?', 'r' => 'Non. Les offres gratuites suffisent pour apprendre la méthode, et le choix d\'un abonnement se décide ensuite, sur ce que l\'équipe utilise vraiment. Si l\'entreprise a déjà Microsoft 365, Copilot Chat est inclus dans les abonnements éligibles.'],
        ['q' => 'Une attestation est-elle remise ?', 'r' => 'Oui, une attestation nominative de fin de formation, avec le programme et les supports. Ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Banque mondiale, individus utilisant internet au Burkina Faso (% de la population)', 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=BF', 'date' => '2026-10-25'],
        ['titre' => 'Banque mondiale, abonnements mobiles pour 100 habitants au Burkina Faso', 'url' => 'https://data.worldbank.org/indicator/IT.CEL.SETS.P2?locations=BF', 'date' => '2026-10-25'],
        ['titre' => 'Banque mondiale, population totale du Burkina Faso', 'url' => 'https://data.worldbank.org/indicator/SP.POP.TOTL?locations=BF', 'date' => '2026-10-25'],
        ['titre' => 'Burkina24, atelier de validation de la feuille de route nationale de l\'IA (17 juin 2026)', 'url' => 'https://burkina24.com/?p=444515', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, validation de la feuille de route nationale sur l\'IA pour 2026-2030 (18 juin 2026)', 'url' => 'https://www.osiris.sn/le-burkina-faso-valide-sa-feuille-de-route-nationale-sur-l-ia-pour-2026-2030.html', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, une IA adaptée aux réalités linguistiques locales (25 mars 2026)', 'url' => 'https://osiris.sn/burkina-faso-vers-une-ia-adaptee-aux-realites-linguistiques-locales.html', 'date' => '2026-10-25'],
        ['titre' => 'Loi n° 001-2021/AN du 30 mars 2021, protection des données à caractère personnel (Assemblée nationale)', 'url' => 'https://assembleenationale.bf/storage/Loi/kDsWHXOTUCQFVESChh8BlBdiZnCrdTsOpXe1rzmH.pdf', 'date' => '2026-10-25'],
        ['titre' => 'Commission de l\'informatique et des libertés (CIL) du Burkina Faso, site officiel', 'url' => 'https://www.cil.bf', 'date' => '2026-10-25'],
        ['titre' => 'Sidwaya, le FAFPA sensibilise des entreprises des Hauts-Bassins (6 novembre 2019)', 'url' => 'https://www.sidwaya.info/formation-continue-et-competitivite-des-entreprises-le-fafpa-sensibilise-des-entreprises-des-hauts-bassins/', 'date' => '2026-10-25'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus, Pro et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Max, Team)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI (prix affichés en euros)', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot et Copilot Chat', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'DeepSeek, documentation de l\'API (modèles)', 'url' => 'https://api-docs.deepseek.com/quick_start/pricing', 'date' => '2026-10-25'],
        ['titre' => 'IANA, base des fuseaux horaires (Afrique)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
