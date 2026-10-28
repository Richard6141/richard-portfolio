<?php
// ============================================================
// data/metiers/banques-microfinance/senegal.php · Formation IA des agents de
// banque et de microfinance au Sénégal (couple métier + pays, statut P :
// « Richard peut former »). Page rédigée le 26/10/2026.
// Sources lues le 26/10/2026 : Le Soleil (12 juin, 31 août et 21 octobre 2026),
// AllAfrica / Journal de l'Économie Sénégalaise (12 janvier 2026), CENTIF
// (accueil, assujettis, déclaration, lignes directrices, centre de formation),
// Le Soleil et AllAfrica (rapport 2025 de la CENTIF), JORS n° 7716, WIPO Lex,
// Osiris (e-monnaie, PI-SPI), Financial Afrik (APBEFS, DER/FJ), 3FPT, AllAfrica.
// Non lus et donc non cités : articles de la loi sur les SFD (PDF illisible),
// site de la CDP (page vide à la lecture), communiqué BCEAO du 25 juin 2026.
// La date de la loi n° 2024-08 diffère selon les pages publiques : seule la
// publication au JORS n° 7716 du 20 mars 2024 est citée.
// Aucun établissement en difficulté, aucune mesure nominative.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les agents de banque et de microfinance au Sénégal : des équipes qui préparent leurs notes de crédit, leurs réponses aux clients et leurs tableaux de suivi avec un assistant, sans exposer le secret ni les données des clients",
    'title'   => "Formation IA pour banques et microfinance au Sénégal",
    'meta'    => "Formation IA pour agents de banque et de microfinance au Sénégal : crédit, relances, mobile money, PI-SPI, CENTIF et données. À distance, devis en FCFA.",
    'en_bref' => "Richard SALANON peut former à distance, depuis Cotonou, les agents de banque et d'institution de microfinance du Sénégal à utiliser l'IA sur les tâches de leur métier : notes de crédit, relances d'échéance, réponses aux clients, tableaux de suivi. Les exercices portent sur des dossiers fictifs, jamais sur des données de clients. La conformité de l'établissement valide les cas et reste seule juge des textes. Les séances suivent les heures de bureau de Dakar, en français, et le devis est établi en FCFA.",
    'publie'  => '2026-12-12',
    'maj'     => '2026-12-12',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les agents de banque et de microfinance à l'IA au Sénégal, et comment choisir ?",
            'paragraphes' => [
                "Richard SALANON peut former à distance, depuis Cotonou, les agents de banque et d'institution de microfinance au Sénégal. Il forme à l'usage des assistants d'IA sur les tâches du métier, avec des dossiers fictifs construits avec la conformité de l'établissement, qui garde seule l'interprétation des textes. Il n'est ni banquier ni conseiller réglementaire, et le devis est établi en FCFA.",
                "Une démonstration d'outil montre ce qu'un assistant sait faire sur un exemple choisi pour impressionner. Une formation pour agents de banque prend une tâche que l'agent répète chaque semaine, par exemple la note qui accompagne une demande de crédit ou la réponse à un client qui s'étonne d'un frais, la refait avec l'assistant sur un dossier fictif, puis lui apprend à vérifier chaque chiffre et chaque phrase avant de l'utiliser. La différence se constate un mois plus tard : l'agent a-t-il gardé un geste précis, ou seulement le souvenir d'une présentation ?",
                "Pour choisir un prestataire dans ce métier, cinq questions suffisent. Les cas d'exercice sont-ils validés par la conformité avant la séance ? Les dossiers sont-ils entièrement fictifs, ou le formateur demande-t-il des pièces réelles ? Que dit-il du secret professionnel et des données des clients avant même de présenter un outil ? Combien de personnes par groupe, pour qu'il puisse regarder le travail de chacune ? Et que reste-t-il à l'établissement après la session : des règles d'usage écrites avec lui, ou seulement des diapositives ?",
                "Un repère évite aussi une confusion fréquente. Le centre de formation de la CENTIF, la cellule nationale de renseignement financier, présente sur son site trois blocs consacrés au blanchiment de capitaux, aux institutions financières et aux enquêtes. C'est une formation sur la lutte contre le blanchiment, pas sur l'usage quotidien d'un assistant d'IA. Les deux se complètent, et aucune ne remplace l'autre.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en sont la banque, la microfinance et le numérique au Sénégal ?",
            'paragraphes' => [
                "Les institutions de microfinance sénégalaises forment un secteur étendu. Le bulletin trimestriel de la Direction générale du Secteur financier, rattachée au ministère de l'Économie, des Finances et du Plan, que Le Soleil a présenté le 12 juin 2026, compte 129 institutions en activité à la fin de 2025 : 10 unions mutualistes qui fédèrent 169 institutions affiliées, 106 institutions non affiliées, 11 sociétés commerciales et 2 associations. Elles servent plus de 4,7 millions de membres et de clients par 1 009 points de service, et leur encours de crédits atteint 849,9 milliards de FCFA.",
                "Le même bulletin chiffre les créances en souffrance à 51,1 milliards de FCFA, soit 6,0 % de l'encours, contre une norme de 3 % fixée par la BCEAO. Pour un agent, ce chiffre n'est pas une statistique lointaine : il se traduit par des relances, des visites et des rééchelonnements qui occupent une part importante des journées, et c'est là que les tableaux de suivi préparés avec un assistant font gagner du temps, à condition que chaque chiffre reste vérifié.",
                "Côté banques, le directeur national de la BCEAO pour le Sénégal indiquait, dans un entretien relayé par AllAfrica le 12 janvier 2026, que la place bancaire de Dakar comptait à la fin de juin 2025 trente-trois établissements de crédit, dont 29 banques et 4 établissements financiers, pour un total de bilan de 14 383,6 milliards de FCFA. Le taux de bancarisation strict y était de 24,15 % en 2024, contre 18,93 % en 2021. La moitié du travail d'agence consiste donc encore à faire entrer de nouveaux clients dans le système financier, au guichet comme par téléphone.",
                "L'inclusion se lit aussi dans les usages. Selon Le Soleil du 21 octobre 2026, qui rend compte d'un rapport de la BCEAO publié le 20 octobre, le taux de bancarisation strict ressort à 27,42 % et le taux élargi à 67,13 %, contre 50,57 % en moyenne dans l'UEMOA. L'usage de la microfinance atteint 39,71 % au Sénégal contre 23,71 % pour l'Union, et celui de la monnaie électronique 66,29 % contre 60,27 %. Les deux taux de bancarisation strict, 24,15 % en 2024 et 27,42 % dans le rapport d'octobre 2026, ne portent pas sur les mêmes années ni sur les mêmes publications : chacun se cite avec sa source.",
                "Les acteurs professionnels accompagnent ce mouvement. L'Association professionnelle des banques et établissements financiers du Sénégal, l'APBEFS, a vu son mandat récent marqué, selon Financial Afrik du 11 février 2026, par des chantiers sur le financement des PME et sur la modernisation et la digitalisation du secteur financier. Du côté de l'État, la Délégation générale à l'Entrepreneuriat rapide des femmes et des jeunes, la DER/FJ, a présenté en février 2024 un nanocrédit de 50 000 à 1 million de FCFA, lancé en 2020, qui représente 80 % de ses demandes de financement. Les petits montants font donc partie du paysage dans lequel un agent explique ses produits.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés un établissement sénégalais doit-il avoir en tête avant de former ses agents ?",
            'items' => [
                ['valeur' => '129', 'libelle' => "Institutions de microfinance en activité au Sénégal à la fin de 2025 (4,7 millions de membres et clients, 1 009 points de service, encours de crédits de 849,9 milliards de FCFA), selon le bulletin trimestriel de la Direction générale du Secteur financier.", 'source' => "Le Soleil, 12 juin 2026", 'url' => 'https://lesoleil.sn/actualites/economie/microfinance-une-dynamique-de-croissance-portee-par-le-credit-malgre-le-defi-de-la-qualite-du-portefeuille/'],
                ['valeur' => '26,5 % et 29,7 %', 'libelle' => "Parts du Sénégal dans les actifs de la microfinance (1 234,3 milliards de FCFA) et dans l'encours de monnaie électronique de l'UEMOA à la fin de 2025, d'après la Commission bancaire de l'UMOA.", 'source' => "Le Soleil, 31 août 2026", 'url' => 'https://lesoleil.sn/actualites/economie/uemoa-le-senegal-en-tete-sur-la-microfinance-et-la-monnaie-electronique-en-2025/'],
                ['valeur' => '33', 'libelle' => "Établissements de crédit sur la place bancaire de Dakar à la fin de juin 2025, dont 29 banques et 4 établissements financiers, pour un total de bilan de 14 383,6 milliards de FCFA.", 'source' => "AllAfrica, entretien avec le directeur national de la BCEAO, 12 janvier 2026", 'url' => 'https://fr.allafrica.com/stories/202601120401.html'],
                ['valeur' => '67,13 %', 'libelle' => "Taux de bancarisation élargi du Sénégal en 2025, contre 50,57 % pour l'UEMOA ; le taux strict est de 27,42 %.", 'source' => "Le Soleil, 21 octobre 2026, rapport de la BCEAO sur l'inclusion financière", 'url' => 'https://lesoleil.sn/actualites/economie/inclusion-financiere-le-senegal-parmi-les-pays-les-plus-avances-de-luemoa-en-2025/'],
                ['valeur' => '37', 'libelle' => "Rapports d'enquête transmis par la CENTIF aux autorités judiciaires en 2025, contre 46 en 2024, selon la présentation de son rapport d'activités 2025 à Dakar le 12 mai 2026.", 'source' => "AllAfrica, 13 mai 2026", 'url' => 'https://fr.allafrica.com/stories/202605140466.html'],
                ['valeur' => '2 novembre 2026', 'libelle' => "Date à partir de laquelle, selon la BCEAO rapportée par Osiris le 5 octobre 2026, toutes les transactions de monnaie électronique interopérables de l'UEMOA doivent transiter par la plateforme PI-SPI, qui comptait 175 structures connectées au 30 septembre 2026.", 'source' => "Osiris, 5 octobre 2026", 'url' => 'https://www.osiris.sn/la-bceao-impose-la-plateforme-pi-spi-pour-les-paiements-electroniques-dans-l.html'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles règles propres au Sénégal encadrent le travail d'un agent de banque ou de microfinance qui utilise l'IA ?",
            'intro' => "Les textes sont cités pour tracer les limites de l'outil, avec le titre et la date lus à la source. Leur interprétation relève de la direction de la conformité de l'établissement et, pour les cas limites, d'un juriste.",
            'items' => [
                ['titre' => "La CENTIF et la loi n° 2024-08 sur la LBC/FT/PADM", 'texte' => "La loi n° 2024-08 relative à la lutte contre le blanchiment de capitaux, le financement du terrorisme et de la prolifération des armes de destruction massive figure au sommaire du Journal officiel n° 7716, numéro spécial du 20 mars 2024. La CENTIF, qui reçoit les déclarations, se présente comme une autorité administrative placée sous la tutelle du ministre chargé des Finances. Son site liste parmi les institutions financières assujetties les établissements de crédit, les établissements de monnaie électronique, les établissements de paiement, les systèmes financiers décentralisés, les fintech et les intermédiaires mandatés : un agent de banque, un caissier de mutuelle et un distributeur sont donc concernés par le même dispositif."],
                ['titre' => "Une déclaration qui passe par un canal et une personne désignés", 'texte' => "D'après la page « Comment et quand déclarer ? » de la CENTIF, la déclaration de soupçon se fait avant l'exécution de l'opération, sauf circonstances exceptionnelles, entièrement en ligne par la télédéclaration E-DELTA, et après la désignation préalable d'un déclarant-correspondant. La même page indique que les assujettis, leurs dirigeants et leurs employés ne peuvent être poursuivis pour violation du secret professionnel lorsqu'ils ont fait une déclaration de bonne foi. Pour l'outil, la conséquence est nette : un assistant d'IA n'a aucun rôle dans cette déclaration, et aucun détail d'un cas suspect ne lui est confié."],
                ['titre' => "Des lignes directrices à connaître par profession", 'texte' => "La page « Lignes directrices » de la CENTIF explique que, pour les banques, les instructions de la BCEAO tiennent lieu de lignes directrices, et cite quatre instructions de 2017 (n° 007 à 010-09-2017) sur l'application de la lutte contre le blanchiment, le transport physique transfrontalier, les seuils de paiement en espèces et la déclaration des opérations en espèces. Elle renvoie, pour d'autres professions, à des textes distincts. Les exercices de la formation partent de ces documents tels que l'établissement les applique, sans les réinterpréter."],
                ['titre' => "La loi n° 2008-12 et la CDP", 'texte' => "La loi n° 2008-12 sur la protection des données à caractère personnel, promulguée le 25 janvier 2008 selon la base WIPO Lex, vise, dans son article 1, à lutter contre les atteintes à la vie privée résultant de la collecte, du traitement, de la transmission, du stockage et de l'utilisation des données, dans le respect des droits et libertés fondamentaux. Son article 5 crée la Commission des données personnelles, la CDP, autorité administrative indépendante chargée de veiller à la conformité des traitements. Un fichier de clients, une photo de pièce d'identité, un numéro de téléphone saisis dans un assistant en ligne sont des données personnelles : la question de savoir quelles formalités s'appliquent à un outil se pose à la CDP et à la conformité avant tout usage, pas après."],
                ['titre' => "Une évaluation mutuelle en cours", 'texte' => "Selon la présentation du rapport 2025 de la CENTIF, le Sénégal est engagé depuis janvier 2026 dans une évaluation mutuelle conduite par le GIABA, et le site de la CENTIF annonce la fin de la visite sur site de la troisième évaluation. Pour un établissement, cela rend plus précieuse la traçabilité des dossiers : ce qu'un agent prépare avec un outil doit pouvoir être retrouvé, relu et expliqué par une personne."],
                ['titre' => "Un calendrier de paiements instantanés", 'texte' => "La BCEAO a fixé au 2 novembre 2026 l'obligation de faire transiter par PI-SPI les transactions de monnaie électronique interopérables, assortie, d'après Osiris, d'une importante politique de gratuité dont les modalités ne sont pas détaillées dans l'article. Des détails opérationnels devaient suivre. L'agent qui répond à un client sur ces frais s'appuie sur la fiche que la direction a validée, pas sur la mémoire d'un assistant."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'une banque ou d'une IMF sénégalaise confier à l'IA, avec quels outils ?",
            'legende' => "Tâches travaillées pendant la formation, sur des dossiers fictifs. Les outils sont ceux que l'établissement a validés ; les formules et limites des éditeurs évoluent, et leur page officielle fait foi.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ["Note de présentation d'une demande de petit crédit à une commerçante de marché", "Claude ou ChatGPT, dans l'offre professionnelle de l'établissement", "Trame structurée : activité, besoin, capacité de remboursement, risques, garanties", "L'agent a visité l'activité et écrit lui-même les hypothèses ; le calcul est refait dans un tableur verrouillé"],
                ["Dossier de comité pour une union mutualiste et ses caisses affiliées", "Tableur et assistant de mise en forme", "Tableau comparatif des demandes de la semaine, historique de remboursement lisible", "Le comité décide et motive ; chaque ligne est rapprochée du système de gestion"],
                ["Relance avant échéance, en français et en wolof", "ChatGPT ou Gemini pour proposer la formulation", "Message neutre, sans montant dû ni mention du retard, validé une fois par la direction", "Un locuteur du wolof relit le texte ; le numéro est vérifié à chaque renouvellement de prêt"],
                ["Réponse à un client sur un transfert de monnaie électronique ou un frais", "Réponse type préparée avec l'assistant, envoyée depuis le numéro professionnel de l'agence", "Réponse claire en trois phrases, avec renvoi vers un conseiller dès qu'une opération précise est en cause", "La fiche de référence est celle validée par la direction ; aucune information de compte sans authentification"],
                ["Trame de note interne sur une alerte de surveillance", "Assistant en offre professionnelle, sur un cas fictif sans donnée identifiante", "Résumé des opérations et liste des points à vérifier, à compléter par l'analyste", "L'analyste décide de transmettre ou non au responsable de la conformité ; rien ne sort du système de l'établissement"],
                ["Tableau de suivi des créances en souffrance par agence", "Excel ou Google Sheets, avec un assistant pour les formules", "Retards par ancienneté, comparaison avec la norme de 3 % de la BCEAO", "Totaux recalculés à la main sur deux agences ; les colonnes sont celles du système central"],
                ["Fiche d'explication pour les distributeurs et agents de proximité", "Assistant pour simplifier un texte validé", "Une page en langage courant sur le passage par PI-SPI à partir du 2 novembre 2026", "La conformité valide la fiche avant diffusion ; la date et les conditions sont vérifiées auprès de la BCEAO"],
                ["Synthèse d'une procédure interne pour un nouvel agent", "NotebookLM ou Claude, dans un compte professionnel", "Fiche de dix lignes avec renvoi aux pages de la procédure", "Chaque renvoi est retrouvé dans le document d'origine"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain pèsent sur une formation IA pour des agents sénégalais, et comment la formation s'y adapte-t-elle ?",
            'paragraphes' => [
                "Les agents de banque et de microfinance travaillent à la fois au guichet, devant un écran de gestion, et sur le terrain, téléphone en main. La formation part de cette réalité plutôt que d'un poste de bureau idéal. Un agent de crédit n'ouvre pas un ordinateur dans le marché où il visite une commerçante ; il note, photographie et appelle depuis son téléphone. Les exercices sont donc conçus pour que l'étape qui exige un tableur ou un document se fasse au bureau, et que l'étape de terrain se prépare sur une fiche courte, lisible sur un petit écran.",
                "Le mobile money est le deuxième terrain commun. Selon Osiris, le 1er septembre 2026, le Sénégal concentre 29,7 % de l'encours de monnaie électronique de l'UEMOA, d'après la BCEAO, et Wave, Orange Money et Free Money y forment un maillage dense d'opérateurs qui se font concurrence sur les frais de transfert depuis 2018. Pour un agent, cela signifie que le client compare, pose des questions sur les frais et attend une réponse immédiate sur WhatsApp. La formation travaille donc des réponses courtes, validées à l'avance, plutôt que des improvisations avec un assistant devant le client.",
                "La langue compte autant que l'outil. Les séances et les supports sont en français. Les assistants rédigent un français de France par défaut ; on leur fournit le vocabulaire de l'établissement et un modèle de réponse. Pour un message en wolof ou dans une autre langue nationale, le résultat est relu par un locuteur de l'établissement avant tout envoi, car un assistant peut produire une phrase fluide mais fausse dans une langue moins bien représentée.",
                "Pour la connexion, les documents d'exercice sont envoyés à l'avance et téléchargés sur chaque poste, afin de ne pas dépendre d'une connexion fragile. Une connexion stable reste nécessaire pour chaque participant, car les assistants travaillent en ligne ; une solution de repli est prévue en cas de coupure, et les supports remis permettent de reprendre le fil. Les séances se calent sur les heures de bureau de Dakar, qui vit à l'heure GMT, soit une heure de moins qu'à Cotonou toute l'année : une séance à 9 h à Dakar se tient à 10 h à Cotonou.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats choisir pour une banque, une mutuelle ou une petite IMF au Sénégal ?",
            'legende' => "Tous les formats se donnent en visioconférence pour le Sénégal. Effectifs et durées sont ceux de la fiche de la formation IA en entreprise.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ["Atelier découverte pour la direction et la conformité", "Une demi-journée", "12 personnes au plus", "Avant tout projet d'outil, pour décider ensemble de ce qui est permis et de ce qui est interdit aux agents"],
                ["Formation complète par poste", "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Une équipe d'agents de crédit, de chargés de clientèle ou d'analystes qui utilise déjà des assistants sans méthode commune"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Un réseau d'agences dispersé, dont les agents ne peuvent pas quitter leur guichet plusieurs jours de suite"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Ancrer les gestes, relire les réponses types, étendre à d'autres tâches ce qui a servi"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quoi ressemble une séance : quels scénarios pour un agent de banque ou de microfinance sénégalais ?",
            'intro' => "Chaque scénario part d'un dossier fictif. La consigne est donnée au participant, et la dernière phrase dit ce qu'il contrôle avant d'utiliser le résultat.",
            'items' => [
                ['titre' => "Scénario 1 : un client écrit au sujet des frais d'un transfert", 'texte' => "Situation : une cliente fictive demande sur WhatsApp pourquoi son transfert vers un autre opérateur n'a pas été facturé comme elle l'attendait, au moment où les règles de PI-SPI changent. Consigne : préparer avec l'assistant une réponse de trois phrases à partir de la seule fiche validée par la direction, et un message de transfert vers un conseiller. Le participant contrôle que le texte reprend la fiche sans y ajouter de montant, qu'il ne contient aucune information de compte, et que la date citée est celle du 2 novembre 2026."],
                ['titre' => "Scénario 2 : la note de comité d'une union mutualiste", 'texte' => "Situation : un agent présente au comité de crédit d'une caisse affiliée le dossier fictif d'une vendeuse de tissus qui demande un prêt pour renouveler son stock. Consigne : demander à l'assistant la trame de la note et une liste de questions à poser à la cliente, puis rédiger soi-même les hypothèses et la recommandation. Le participant contrôle que la capacité de remboursement est calculée dans le tableur verrouillé, que chaque chiffre vient du dossier, et que la décision reste motivée par des personnes."],
                ['titre' => "Scénario 3 : l'alerte de surveillance d'un analyste", 'texte' => "Situation : un analyste fictif reçoit une alerte sur un compte dont les dépôts changent de rythme. Consigne : faire résumer la suite d'opérations par l'assistant, sans nom ni numéro, et préparer la liste des points à vérifier. Le participant contrôle qu'aucune donnée identifiante n'est sortie du système, que le résumé n'est pas une conclusion, et que la décision de transmettre appartient au responsable de la conformité, la déclaration éventuelle suivant le canal prévu par la CENTIF."],
                ['titre' => "Scénario 4 : la relance en wolof et en français", 'texte' => "Situation : une agence fictive de mille deux cents prêts prépare ses relances de la semaine pour des échéances à venir. Consigne : proposer deux formulations neutres, l'une en français, l'autre en wolof, sans montant dû ni mention du retard. Le participant contrôle que le texte en wolof est relu par un locuteur, que la direction a validé le modèle une fois pour toutes, et que le contact est noté dans le dossier avec la date et le canal."],
                ['titre' => "Scénario 5 : le tableau des créances en souffrance", 'texte' => "Situation : un directeur d'agence fictif reçoit un export du système central et doit présenter, en réunion, ses retards par ancienneté. Consigne : construire le tableau avec l'aide de l'assistant pour les formules, puis le comparer à la norme de 3 % de la BCEAO. Le participant contrôle deux totaux à la main, la cohérence des périodes, et que la norme citée est celle de la source."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation IA d'une banque ou d'une IMF au Sénégal ?",
            'paragraphes' => [
                "Le Fonds de financement de la formation professionnelle et technique, le 3FPT, est la première piste à examiner. Son site présente un guichet de financement du personnel des entreprises et des membres des organisations professionnelles, un guichet pour les demandes individuelles et un lien vers sa plateforme de demande de financement. La page ne publie pas les conditions d'éligibilité : elles se demandent au fonds, par écrit, avant toute inscription. Parmi ses actualités, la page d'accueil titre une actualité sur une formation au montage de projets à l'ère de l'IA, qui a réuni 25 experts à Dakar.",
                "Le fonds travaille aussi par les organisations patronales. Selon AllAfrica du 15 juillet 2026, il a signé à Dakar une convention de 86 861 300 FCFA, prise en charge à près de 90 %, avec le Conseil national du patronat, la Confédération nationale des employeurs du Sénégal et l'Union des prestataires industriels et commerçants, pour 11 actions de formation au profit de 911 bénéficiaires de 36 entreprises. Un établissement financier qui adhère à une organisation patronale peut lui demander si une action de ce type entre dans ses conventions. Aucune prise en charge n'est jamais acquise d'avance.",
                "Richard n'affiche ni agrément d'un fonds ni certification d'éditeur. Il remet pour chaque formation un programme détaillé, un devis, et une attestation nominative de fin de formation, qui servent dans une demande. Si l'obtention d'une aide conditionne la décision, il faut envoyer ces pièces au fonds et attendre sa réponse avant de fixer les dates. Sinon, la dépense s'inscrit au budget de formation de l'année, étalée si besoin sur un atelier court puis un accompagnement mensuel. Les abonnements aux assistants restent au nom de l'établissement et ne font pas partie du prix de la formation.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte une formation IA pour les agents d'une banque ou d'une IMF au Sénégal ?",
            'intro' => "Aucun montant n'est publié : le prix est fixé sur devis, en FCFA, après l'échange de cadrage, et le devis détaille chaque poste. Les modes de règlement de la fiche de Richard sont Mobile Money (MTN, Moov), carte bancaire, PayPal, virement et espèces ; ceux qui conviennent depuis le Sénégal se précisent au devis. Les formules et les limites des éditeurs évoluent : leur page officielle fait foi.",
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée avec la direction et la conformité', 'Inventaire des usages réels des agents', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète par poste', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées sur dossiers fictifs construits avec vos procédures', 'Épreuve finale sur une tâche réelle, chronomètre en main', 'Attestation nominative', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Relecture des réponses types', 'Nouvelles tâches à travailler']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par poste ou par agence.",
                "Le nombre de séances à distance et leur durée.",
                "La préparation des dossiers fictifs avec la conformité, et leur validation avant la session.",
                "La langue des supports, en français ou avec des passages en wolof relus par un locuteur.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs font les équipes de banque et de microfinance sénégalaises qui démarrent l'IA ?",
            'intro' => "Ces écarts reviennent d'un établissement à l'autre ; ils se préviennent à la préparation.",
            'items' => [
                ['titre' => "Coller un dossier de client dans un compte personnel", 'texte' => "Par habitude de la messagerie, un agent envoie une photo de pièce ou un relevé au premier outil ouvert. La loi n° 2008-12 protège ces données, et la CDP est l'interlocuteur pour les formalités d'un outil : la décision d'en utiliser un appartient à l'établissement, jamais à l'agence."],
                ['titre' => "Répondre sur les frais de mémoire", 'texte' => "Les règles de PI-SPI et de la gratuité évoluent, et les détails opérationnels étaient annoncés après l'article d'Osiris du 5 octobre 2026. Une réponse écrite sans fiche validée finit par contredire celle d'une autre agence."],
                ['titre' => "Confier à l'outil le texte d'une déclaration", 'texte' => "La déclaration de soupçon passe par E-DELTA, par le déclarant-correspondant désigné. Aucun détail du cas ne s'écrit dans un assistant, qu'il soit gratuit ou payant."],
                ['titre' => "Citer un texte de loi avec une date retenue de mémoire", 'texte' => "Les pages publiques ne donnent pas toujours la même date pour un même texte, comme on le constate pour la loi n° 2024-08. Une note interne cite le numéro et renvoie au Journal officiel, plutôt qu'une date approximative."],
                ['titre' => "Ne pas relire le wolof", 'texte' => "Un message fluide dans une langue nationale peut être faux ou maladroit. Chaque texte est relu par un locuteur avant de partir, et le modèle validé est ensuite réutilisé tel quel."],
                ['titre' => "Mesurer les créances sans comparer à la norme", 'texte' => "Le bulletin de la fin de 2025 donne 6,0 % de créances en souffrance dans la microfinance contre une norme de 3 %. Un tableau de suivi qui ne montre pas cet écart par agence n'aide pas le directeur à décider."],
                ['titre' => "Former seulement les agents", 'texte' => "La direction, la conformité et les distributeurs de proximité manipulent les mêmes téléphones et les mêmes groupes de discussion. Ils sont associés à l'atelier découverte, sinon les règles restent des consignes sans suite."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former les agents de votre banque ou de votre IMF avec Richard SALANON au Sénégal ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former les agents de banque et d'institution de microfinance du Sénégal à distance, depuis Cotonou. Il a déjà travaillé avec des entreprises au Sénégal, comme dans quatorze autres pays dont le Bénin, la Côte d'Ivoire, le Togo et le Mali. Il travaille avec le franc CFA, le mobile money et le référentiel SYSCOHADA dans les ERP. Parmi ses réalisations ouest-africaines figure une commande de repas à Abidjan avec paiement Wave, livraison et suivi par WhatsApp, réalisée en sous-traitance pour Digital Développement ; l'ensemble est visible sur la page des <a href=\"/realisations/\">réalisations</a>.",
                "Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes, tous publics confondus. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Ce parcours lui permet de montrer aux agents, sur leurs propres écrans, ce qu'un outil fait des données qu'on lui confie.",
                "Il n'est ni banquier, ni responsable de la conformité, ni certifié par un éditeur d'IA, et ne se présente comme partenaire d'aucun. Il forme à l'usage des outils : le crédit, la vigilance, la déclaration et l'interprétation des textes restent aux professionnels de l'établissement et à ses autorités. Sa façon de travailler tient en engagements simples : une réponse sous 24 heures, un ou deux entretiens de cadrage avec la direction et la conformité, un questionnaire avant la session, des documents téléchargés à l'avance, des supports remis, une épreuve finale sur une tâche réelle et une attestation nominative. Pour aller plus loin, voir les formations <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>, <a href=\"/formations/cybersecurite-employes\">cybersécurité pour les employés</a>, <a href=\"/formations/chatbot-whatsapp\">chatbot WhatsApp</a> et <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a>, ou le parcours général <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>.",
                "Richard a déjà formé des équipes de banques et d'institutions de microfinance : ce public ne lui est pas nouveau, et chaque séance part des dossiers et des procédures de l'établissement.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former les agents de votre banque ou de votre IMF sénégalaise à l'IA ?",
            'texte'  => "Indiquez le type d'établissement, le nombre d'agents et d'agences, les postes concernés, les tâches qui prennent le plus de temps et la ville. Vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les agents d'une banque ou d'une IMF à l'IA au Sénégal ?", 'r' => "Richard SALANON peut former à distance, depuis Cotonou, les agents de banque et de microfinance à utiliser ChatGPT, Claude, Gemini ou Copilot sur les tâches du métier, avec des dossiers fictifs et le cadre fixé par la conformité de l'établissement. Il n'est certifié par aucun éditeur."],
        ['q' => "Un agent peut-il confier à un assistant d'IA le contenu d'une déclaration de soupçon à la CENTIF ?", 'r' => "Non. Selon la CENTIF, la déclaration se fait en ligne par la télédéclaration E-DELTA, après la désignation d'un déclarant-correspondant, et avant l'exécution de l'opération sauf circonstances exceptionnelles. Aucun détail d'un cas ne se confie à un assistant."],
        ['q' => "La loi n° 2008-12 s'applique-t-elle à un fichier de clients saisi dans un outil d'IA ?", 'r' => "La loi n° 2008-12 sur la protection des données à caractère personnel vise la collecte, le traitement, le stockage et l'utilisation des données. Un fichier de clients en relève. Les formalités d'un outil se confirment auprès de la CDP et de la conformité de l'établissement avant tout usage."],
        ['q' => "Que doit savoir un agent sur PI-SPI à partir du 2 novembre 2026 ?", 'r' => "D'après Osiris, la BCEAO impose à cette date que les transactions de monnaie électronique interopérables de l'UEMOA transitent par PI-SPI, avec une importante politique de gratuité. L'agent répond à partir d'une fiche validée par sa direction, qui renvoie à la source de la BCEAO."],
        ['q' => "Le 3FPT peut-il financer une formation IA pour le personnel d'une banque ou d'une IMF ?", 'r' => "Son site ouvre un guichet pour le personnel des entreprises, avec une demande en ligne, mais ne publie pas les conditions. Aucune prise en charge n'est garantie : interrogez le fonds par écrit, programme et devis à l'appui, avant de signer."],
        ['q' => "Quelles conventions le 3FPT a-t-il signées en juillet 2026 ?", 'r' => "Selon AllAfrica du 15 juillet 2026 : 86 861 300 FCFA pris en charge à près de 90 %, avec trois organisations patronales, pour 911 bénéficiaires de 36 entreprises, et une seconde convention de 45 millions de FCFA pour 200 techniciens."],
        ['q' => "Où en est la microfinance sénégalaise selon les dernières données publiées ?", 'r' => "Selon Le Soleil du 12 juin 2026, qui rapporte le bulletin de la Direction générale du Secteur financier, 129 institutions étaient en activité à la fin de 2025, avec plus de 4,7 millions de membres et clients et un encours de crédits de 849,9 milliards de FCFA."],
        ['q' => "Le Sénégal est-il en avance sur l'UEMOA pour la monnaie électronique ?", 'r' => "Le Sénégal représente 29,7 % de l'encours de monnaie électronique de l'UEMOA à la fin de 2025, selon la Commission bancaire de l'UMOA rapportée par Le Soleil du 31 août 2026, et le taux d'usage de la monnaie électronique y est de 66,29 % contre 60,27 % pour l'Union."],
        ['q' => "La formation peut-elle se donner à Dakar, Thiès ou Saint-Louis ?", 'r' => "Oui, en visioconférence, partout où une connexion stable existe. Les documents sont envoyés à l'avance, et une solution de repli est prévue en cas de coupure."],
        ['q' => "Quel est le décalage horaire entre Dakar et Cotonou ?", 'r' => "Une heure : Dakar vit à l'heure GMT et Cotonou à GMT+1, toute l'année. Une séance à 9 h à Dakar se tient à 10 h à Cotonou."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Le prix est fixé sur devis, en FCFA, après l'échange de cadrage. Il varie selon le nombre de participants, le nombre de séances, la préparation des dossiers fictifs et l'accompagnement. Les abonnements aux outils restent à la charge de l'établissement."],
        ['q' => "Reçoit-on une attestation en fin de formation ?", 'r' => "Oui, une attestation nominative, avec le programme et les supports. Ce n'est ni un diplôme ni une certification d'éditeur, et elle ne remplace pas la formation à la lutte contre le blanchiment que l'établissement organise par ailleurs."],
    ],

    'sources' => [
        ['titre' => "Le Soleil, microfinance : bulletin trimestriel de la Direction générale du Secteur financier, fin 2025 (12 juin 2026)", 'url' => 'https://lesoleil.sn/actualites/economie/microfinance-une-dynamique-de-croissance-portee-par-le-credit-malgre-le-defi-de-la-qualite-du-portefeuille/', 'date' => '2026-10-27'],
        ['titre' => "Le Soleil, le Sénégal en tête sur la microfinance et la monnaie électronique dans l'UEMOA en 2025 (31 août 2026)", 'url' => 'https://lesoleil.sn/actualites/economie/uemoa-le-senegal-en-tete-sur-la-microfinance-et-la-monnaie-electronique-en-2025/', 'date' => '2026-10-27'],
        ['titre' => "Le Soleil, inclusion financière : le Sénégal parmi les pays les plus avancés de l'UEMOA en 2025 (21 octobre 2026)", 'url' => 'https://lesoleil.sn/actualites/economie/inclusion-financiere-le-senegal-parmi-les-pays-les-plus-avances-de-luemoa-en-2025/', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica, entretien avec le directeur national de la BCEAO pour le Sénégal sur le crédit et le secteur bancaire (12 janvier 2026)", 'url' => 'https://fr.allafrica.com/stories/202601120401.html', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Sénégal, site officiel : statut, missions, télédéclaration", 'url' => 'https://www.centif.sn/', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Sénégal, qui doit déclarer : assujettis au dispositif LBC/FT", 'url' => 'https://www.centif.sn/fr/sujetilbcft', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Sénégal, comment et quand déclarer : E-DELTA et déclarant-correspondant", 'url' => 'https://www.centif.sn/fr/comquanddecla', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Sénégal, lignes directrices par profession", 'url' => 'https://www.centif.sn/fr/lignesdirect', 'date' => '2026-10-27'],
        ['titre' => "CENTIF du Sénégal, centre de formation", 'url' => 'https://www.centif.sn/cflbcft', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica, la CENTIF face aux nouveaux circuits illicites : rapport d'activités 2025 (13 mai 2026)", 'url' => 'https://fr.allafrica.com/stories/202605140466.html', 'date' => '2026-10-27'],
        ['titre' => "Vie publique du Sénégal, sommaire du Journal officiel n° 7716 du 20 mars 2024 (loi n° 2024-08)", 'url' => 'https://www.vie-publique.sn/documents/348/JO-7716-du-20-mars-2024', 'date' => '2026-10-27'],
        ['titre' => "OMPI, WIPO Lex : loi n° 2008-12 sur la protection des données à caractère personnel", 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229', 'date' => '2026-10-27'],
        ['titre' => "Osiris, le Sénégal capte 29,7 % de la monnaie électronique de l'UEMOA (1er septembre 2026)", 'url' => 'https://www.osiris.sn/le-senegal-capte-29-7-de-la-monnaie-electronique-en-uemoa.html', 'date' => '2026-10-27'],
        ['titre' => "Osiris, la BCEAO impose la plateforme PI-SPI pour les paiements électroniques (5 octobre 2026)", 'url' => 'https://www.osiris.sn/la-bceao-impose-la-plateforme-pi-spi-pour-les-paiements-electroniques-dans-l.html', 'date' => '2026-10-27'],
        ['titre' => "Financial Afrik, passation de service à la présidence de l'APBEFS (11 février 2026)", 'url' => 'https://www.financialafrik.com/2026/02/11/passation-de-service-a-la-presidence-sous-le-signe-de-la-continuite-et-de-la-consolidation/', 'date' => '2026-10-27'],
        ['titre' => "Financial Afrik, la DER/FJ fait le bilan de trois ans de nanocrédit (2 février 2024)", 'url' => 'https://www.financialafrik.com/2024/02/02/senegal-la-der-fj-fait-le-bilan-de-trois-ans-de-nanocredit/', 'date' => '2026-10-27'],
        ['titre' => "3FPT, site du fonds : guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-27'],
        ['titre' => "AllAfrica, conventions de financement entre le 3FPT et des organisations patronales (15 juillet 2026)", 'url' => 'https://fr.allafrica.com/stories/202607160216.html', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'cybersecurite-employes', 'chatbot-whatsapp', 'gouvernance-ia', 'ia-audit-controle'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
