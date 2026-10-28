<?php
// ============================================================
// data/metiers/banques-microfinance/cameroun.php · Formation IA des agents de
// banque et de microfinance au Cameroun (couple métier + pays, statut « peut former »).
// Sources lues le 27/10/2026 : EcoMatin (30 janvier 2026, 9 février 2026, 5 et 8 octobre 2026,
// 23 juin 2025, 10 décembre 2024), Ecofin Agency (7 mai 2026), Osiris (8 juillet 2022 ; 5 octobre 2021),
// Business in Cameroon (24 décembre 2025), Camer.be d'après la Conac (10 octobre 2024),
// Droit, médias et finance, Digital Business Africa (24 décembre 2024), cabinet Kalieu & Elongo,
// Constitution (Constitute Project), IANA.
// Non lus et donc non cités : articles des règlements CEMAC et COBAC, texte intégral de la loi
// n° 2024/017, rapport BEAC sur les taux débiteurs du premier trimestre 2026 (PDF illisible),
// site officiel de l'ANIF, nomination des membres de l'autorité de protection des données.
// Écart signalé : l'article d'Ecofin sur le mobile money donne un total CEMAC et une part du Cameroun
// qui ne se recoupent pas ; seul le nombre de comptes camerounais est repris.
// Aucun établissement en difficulté, aucune mesure nominative.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA des agents de banque et de microfinance au Cameroun : dossiers de crédit, suivi des impayés et réponses aux clients préparés avec un assistant, en français comme en anglais, sans jamais confier une donnée de client à l'outil",
    'title'   => "Formation IA banques et IMF au Cameroun | Richard SALANON",
    'meta'    => "Formation IA pour agents de banque et de microfinance au Cameroun : crédit, impayés, mobile money, ANIF, données. En français ou anglais, devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant basé à Cotonou, peut former à distance les agents des banques et des établissements de microfinance du Cameroun à l'usage d'un assistant d'IA sur leurs tâches, en français ou en anglais : note de crédit, suivi des impayés, réponse aux clients, tableau de portefeuille. Les exercices reposent sur des cas inventés, sans donnée réelle de client. La direction de la conformité relit les cas et interprète les textes. Douala et Yaoundé sont à la même heure que Cotonou, et le devis est établi en FCFA.",
    'publie'  => '2026-12-20',
    'maj'     => '2026-12-20',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut apprendre à une équipe de banque ou d'EMF camerounaise à se servir de l'IA, et comment trancher entre deux offres ?",
            'paragraphes' => [
                "Richard SALANON, qui vit à Cotonou, peut animer à distance une formation pour les équipes des banques et des établissements de microfinance, que l'on abrège en EMF, du Cameroun. Le travail porte sur des assistants d'IA appliqués aux tâches de l'agent, à partir de cas inventés que la conformité de l'établissement relit avant la séance. Il ne se présente ni comme banquier ni comme conseiller juridique, et il ne détient aucune certification d'éditeur. Le devis est libellé en FCFA.",
                "Une première question tranche beaucoup de choix : que sait-on faire seul, le lendemain ? Une démonstration montre ce qu'un outil sait produire. Une formation de métier fait refaire à l'agent trois gestes qu'il répète chaque semaine, puis lui demande de les rejouer sans aide, chrono en main, avec un contrôle de chaque chiffre. Au Cameroun, ces gestes sont connus : instruire un dossier, relancer une échéance, expliquer à un client le coût d'un crédit, lire un état de portefeuille.",
                "Posez ensuite cinq questions à tout candidat. Travaille-t-il sur des dossiers inventés, ou demande-t-il des pièces réelles ? La direction de la conformité voit-elle les cas avant la séance ? Que dit-il de la loi camerounaise sur les données personnelles, avant même de montrer un outil ? Peut-il animer en français et en anglais, puisque la clientèle et les équipes le sont ? Et que reste-t-il à l'établissement le dernier jour : un jeu de diapositives, ou des règles d'usage écrites avec lui ?",
                "Un dernier tri sépare la formation de la sensibilisation à la vigilance. Les actions menées autour du blanchiment, de la fraude ou de la protection du consommateur expliquent ce que la réglementation demande. Elles ne montrent pas comment un chargé de clientèle prépare une réponse avec un assistant. Les deux se complètent, et l'une ne remplace pas l'autre.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que disent les chiffres de fin 2025 sur la microfinance, le crédit bancaire et le mobile money au Cameroun ?",
            'paragraphes' => [
                "La microfinance camerounaise pèse lourd dans la zone. Selon EcoMatin, qui s'appuie sur le fichier du ministère des Finances arrêté au 31 décembre 2025 (article du 9 février 2026), le pays comptait 385 EMF agréés à cette date, contre 390 un an plus tôt, avec huit retraits d'agrément et trois nouveaux agréments en 2025. Le même article note que le Cameroun reste le pays qui compte le plus d'EMF dans la zone CEMAC.",
                "Les volumes viennent d'un autre article d'EcoMatin, du 5 octobre 2026, qui reprend les données du Comité national économique et financier (CNEF) pour la fin 2025. L'encours de crédits des EMF atteignait 819,2 milliards de FCFA, contre 751,1 milliards un an plus tôt, soit 9,1 % de plus. Les dépôts s'élevaient à 1 112,5 milliards (+14,1 %) et le total du bilan à 1 432,5 milliards (+17 %). Le pays compte 301 établissements de première catégorie et 84 de deuxième catégorie, aucun de troisième.",
                "Le point d'attention est la qualité du portefeuille. Les créances en souffrance atteignaient 183,2 milliards de FCFA, soit 22,37 % de l'encours, selon cet article. EcoMatin rapporte le 8 octobre 2026, d'après la COBAC, une perte nette cumulée de 6,87 milliards de FCFA pour 2025, contre un bénéfice de 5,24 milliards en 2024, ce qui met fin à cinq années de résultats positifs. Ces chiffres touchent l'agent de près : une large part de son temps va au suivi des impayés et à l'explication des conditions de crédit.",
                "Du côté des banques, EcoMatin relève le 30 janvier 2026, d'après la BEAC, que le montant des crédits atteignait 1 827,9 milliards de FCFA au premier trimestre 2025, contre 1 420,1 milliards un an plus tôt, alors que le nombre de nouveaux crédits reculait de 221 317 à 202 508. Le taux débiteur moyen passait de 8,80 % à 8,18 %. La baisse du nombre de prêts avec une hausse du montant total veut dire que les dossiers sont moins nombreux et plus gros : l'analyse de chaque dossier compte davantage.",
                "Le mobile money est l'autre moitié de la relation client. Ecofin Agency, citant un rapport de la BEAC sur les services de paiement, indique le 7 mai 2026 que le Cameroun comptait 30,9 millions de comptes de mobile money au 31 décembre 2024, contre 24,86 millions un an plus tôt. Ce sont des comptes, non des personnes : une même personne peut en détenir plusieurs. Le guichet côtoie ainsi, dans la vie du client, un portefeuille qui tient dans la poche.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres camerounais datés retenir avant de lancer une formation IA dans une banque ou une EMF ?",
            'items' => [
                ['valeur' => '385', 'libelle' => "EMF agréés au Cameroun fin décembre 2025, contre 390 fin 2024 (huit retraits, trois nouveaux agréments) ; 301 de première catégorie et 84 de deuxième.", 'source' => "EcoMatin, 9 février 2026 et 8 octobre 2026", 'url' => 'https://ecomatin.net/cameroun-cartographie-du-marche-de-la-microfinance-en-2026'],
                ['valeur' => '819,2 milliards', 'libelle' => "Encours de crédits des EMF camerounaises fin 2025 (+9,1 %), pour 1 112,5 milliards de FCFA de dépôts collectés.", 'source' => "EcoMatin d'après le CNEF, 5 octobre 2026", 'url' => 'https://ecomatin.net/cameroun-les-credits-des-microfinances-grimpent-a-819-milliards-de-fcfa-plus-de-22-en-souffrance'],
                ['valeur' => '22,37 %', 'libelle' => "Part des créances en souffrance dans l'encours de crédits des EMF fin 2025 (183,2 milliards de FCFA).", 'source' => "EcoMatin d'après le CNEF, 5 octobre 2026", 'url' => 'https://ecomatin.net/cameroun-les-credits-des-microfinances-grimpent-a-819-milliards-de-fcfa-plus-de-22-en-souffrance'],
                ['valeur' => '6,87 milliards', 'libelle' => "Perte nette cumulée des EMF en 2025, d'après la COBAC, contre un bénéfice de 5,24 milliards en 2024.", 'source' => "EcoMatin, 8 octobre 2026", 'url' => 'https://ecomatin.net/cameroun-les-microfinances-basculent-dans-le-rouge-avec-69-milliards-fcfa-de-pertes-en-2025'],
                ['valeur' => '8,18 %', 'libelle' => "Taux débiteur moyen des crédits bancaires au premier trimestre 2025, contre 8,80 % un an plus tôt, pour 202 508 nouveaux crédits (221 317 au premier trimestre 2024).", 'source' => "EcoMatin d'après la BEAC, 30 janvier 2026", 'url' => 'https://ecomatin.net/cameroun-la-baisse-des-taux-propulse-les-credits-bancaires-de-29-a-1-828-milliards-fcfa-au-1er-trimestre-2025'],
                ['valeur' => '30,9 millions', 'libelle' => "Comptes de mobile money au Cameroun au 31 décembre 2024, contre 24,86 millions fin 2023, d'après un rapport de la BEAC.", 'source' => "Ecofin Agency, 7 mai 2026", 'url' => 'https://www.ecofinagency.com/news/0705-55325-cameroon-retains-lead-in-central-african-mobile-money-in-2024-as-regional-rivals-gain-ground'],
                ['valeur' => '965', 'libelle' => "Déclarations d'opérations suspectes exploitées par l'ANIF en 2023, à l'origine de 447 rapports transmis aux juridictions et autorités compétentes, d'après le rapport de la Conac.", 'source' => "Camer.be, 10 octobre 2024", 'url' => 'https://www.camer.be/86774/11:1/cameroun-lanif-a-detecte-pres-de-1700-milliards-de-francs-cfa-de-transactions-financieres-suspectes-en-2023-cameroon.html'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels textes camerounais et de la zone CEMAC bornent l'usage de l'IA par un agent de banque ou d'EMF ?",
            'intro' => "Les textes ci-dessous sont cités pour leur intitulé et leur date, tels que la presse ou la source lue les donne, afin de situer ce qu'un assistant n'a pas à faire. Leur lecture revient à la conformité de l'établissement, puis à un juriste si un doute subsiste. Au Cameroun, des textes nationaux et des textes de la CEMAC s'appliquent ensemble.",
            'items' => [
                ['titre' => "Le dispositif contre le blanchiment et l'ANIF", 'texte' => "Un commentaire juridique du cabinet Kalieu & Elongo cite le règlement CEMAC du 24 mars 2016 sur la prévention et la répression du blanchiment des capitaux et du financement du terrorisme, le règlement COBAC R-2005/01 du 1er avril 2005 sur les diligences des établissements, et, pour le Cameroun, un décret du 31 mai 2005 sur l'Agence nationale d'investigation financière, l'ANIF. Selon ce commentaire, la déclaration de soupçon est adressée à l'ANIF, par écrit ou oralement avec confirmation écrite. Aucun élément d'un cas suspect ne se confie à un assistant ; la conformité décide seule de la suite."],
                ['titre' => "La loi n° 2024/017 sur les données personnelles", 'texte' => "Droit, médias et finance annonce l'entrée en vigueur, le 23 juin 2026, de la loi n° 2024/017 du 23 décembre 2024 portant protection des données à caractère personnel. L'article indique que les grandes structures de la banque, des télécoms et des assurances doivent désigner un délégué à la protection des données, que le consentement doit être explicite, libre et éclairé, et que l'hébergement hors du pays suppose un niveau de protection équivalent et une autorisation préalable. Un fichier de clients ou une photo de pièce d'identité saisis dans un assistant en ligne peuvent relever de ces règles, ce que la conformité et un juriste confirment."],
                ['titre' => "L'autorité de protection des données", 'texte' => "Selon Digital Business Africa du 24 décembre 2024, la loi institue une autorité de protection des données, présentée comme un organisme public indépendant, chargée de veiller à l'application du texte, de délivrer les autorisations prévues et de publier la liste des pays offrant une protection équivalente. Son calendrier de mise en place se vérifie auprès des pouvoirs publics. Les formalités liées à un outil se confirment auprès d'elle et de la conformité avant tout usage, jamais après coup."],
                ['titre' => "La protection du client bancaire et le taux d'usure", 'texte' => "Droit, médias et finance mentionne le règlement n° 01/20/CEMAC/UMAC/COBAC du 30 juillet 2020 pour la protection des consommateurs de produits bancaires. EcoMatin cite, le 23 juin 2025, le règlement COBAC R-2020/04 pour la liste de 22 services bancaires gratuits. Une réponse rédigée avec l'assistant sur un frais ou un taux ne contredit donc jamais la grille tarifaire approuvée de l'établissement, ni le taux d'usure en vigueur, que l'agent vérifie à la source."],
                ['titre' => "L'établissement de paiement et le mobile money", 'texte' => "Osiris rapporte le 8 juillet 2022 qu'Orange Money Cameroun SA est devenue le 5 mai 2022 le premier établissement de paiement du pays, avec un capital de 1,2 milliard de FCFA, dans le cadre du règlement n° 04/18/CEMAC/UMAC/COBAC sur les services de paiement. Un établissement de paiement ne tient pas de compte bancaire et n'accorde pas de crédit. Un agent doit donc savoir expliquer à un client ce qu'une banque ou une EMF fait, et ce que fait son opérateur mobile."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi les créances en souffrance placent-elles le suivi des impayés au premier rang des exercices camerounais ?",
            'paragraphes' => [
                "Une créance sur cinq environ : avec 22,37 % de l'encours en souffrance fin 2025 selon EcoMatin et le CNEF, le suivi des retards est la tâche qui occupe le plus un agent d'EMF au Cameroun. Il prépare des listes de clients à joindre, des messages, des comptes rendus de visite et des tableaux pour le comité de crédit. Ce sont des travaux répétitifs et très rédigés, donc de bons candidats à un assistant d'IA, à condition qu'un humain contrôle chaque chiffre avant l'envoi.",
                "Le contexte renforce cet intérêt. La perte nette de 6,87 milliards de FCFA en 2025, rapportée par EcoMatin d'après la COBAC, pousse les directions à regarder de près la qualité du portefeuille et le coût de chaque dossier. Une formation n'a pas vocation à donner une consigne de gestion : elle apprend à gagner du temps sur la préparation, pour que l'agent en garde davantage pour le contact avec le client.",
                "La formation ne cherche donc pas à automatiser une décision de crédit ni de recouvrement, qui reste humaine et motivée. Elle apprend à préparer ce qui entoure la décision : la liste des échéances de la semaine, la trame d'un message neutre, la synthèse d'un historique inventé de remboursements, le tableau des retards à présenter au comité. Chaque production est comparée au système de gestion de l'établissement, et le contact est noté au dossier avec sa date.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'un agent camerounais confier à l'assistant, avec quel outil, et que contrôler ensuite ?",
            'legende' => "Huit gestes courants, travaillés sur des cas inventés. Seuls les outils admis par l'établissement servent, et les conditions de chaque éditeur se lisent sur son site.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', "Contrôle par l'humain"],
            'lignes'  => [
                ["Note de présentation d'un crédit à une PME de Douala ou de Yaoundé", "Claude ou ChatGPT, au titre de l'abonnement professionnel de l'établissement", "Plan de note : activité, besoin, remboursement possible, risques, garanties", "L'agent écrit lui-même les hypothèses vues sur place ; le calcul de capacité est refait dans un tableur"],
                ["Tableau des créances en souffrance par agence et par ancienneté", "Excel ou Google Sheets ; l'assistant propose les formules", "Retards classés par ancienneté, avec la part de l'encours concernée", "Deux sommes refaites à la main ; chaque colonne garde le sens que lui donne le système central"],
                ["Trame de relance pour un client en retard", "ChatGPT ou Gemini pour suggérer la forme", "Message sobre, sans ton menaçant, en français ou en anglais selon le client", "La direction valide le modèle une fois ; chaque contact est consigné au dossier"],
                ["Explication du coût d'un crédit à un client qui conteste", "Modèle de réponse rédigé avec l'assistant", "Trois phrases simples, puis passage à un conseiller dès qu'une opération précise est en jeu", "Le texte reprend la seule grille approuvée ; le taux et le taux d'usure se lisent à la source"],
                ["Fiche pour comparer un guichet et un portefeuille mobile", "Assistant qui reformule un texte validé par la direction", "Une page claire sur le rôle de la banque, de l'EMF et de l'opérateur mobile", "La conformité approuve la fiche avant diffusion ; elle ne mentionne aucun compte"],
                ["Résumé d'une alerte de surveillance pour l'analyste", "Assistant d'une offre professionnelle, appliqué à un cas inventé dépourvu de toute donnée identifiante", "Résumé des mouvements et liste des points à vérifier", "Seul l'analyste juge s'il y a lieu d'alerter le responsable de la conformité"],
                ["Traduction d'un modèle de courrier français vers l'anglais, ou l'inverse", "Claude ou ChatGPT", "Courrier de même sens dans l'autre langue officielle", "Un collègue qui parle les deux langues relit chaque nuance avant tout envoi"],
                ["Synthèse d'une procédure interne pour un nouvel agent", "NotebookLM ou Claude, sur un compte de l'établissement", "Aide-mémoire de dix lignes, dont chaque point indique la page de la procédure", "On rouvre la procédure pour contrôler chaque page citée"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain une formation doit-elle intégrer dans un pays où l'on travaille en deux langues ?",
            'paragraphes' => [
                "Le français et l'anglais sont les deux langues officielles du Cameroun, de statut égal, et l'État garantit la promotion du bilinguisme, d'après l'article premier de la Constitution, dans sa version du site Constitute Project. Un établissement qui reçoit des clients de Douala, de Yaoundé ou de Buea rédige donc des courriers dans les deux langues. La formation s'anime en français ou en anglais, et un exercice sur deux se joue dans l'autre langue, pour tester la qualité de ce que produit l'assistant.",
                "La relecture compte plus que l'outil. Un assistant produit une phrase fluide mais parfois inexacte, surtout sur un terme de métier. Quand un courrier part dans la langue que son auteur lit moins bien, un collègue bilingue le relit. Les modèles de réponse approuvés par la direction sont conservés dans les deux langues et réutilisés tels quels, ce qui évite que deux agences répondent différemment à un même client.",
                "Le téléphone est le deuxième terrain. Avec 30,9 millions de comptes de mobile money fin 2024 selon Ecofin Agency, beaucoup de clients paient et posent leurs questions depuis un portefeuille mobile. MTN a ainsi lancé le 19 décembre 2025, selon Business in Cameroon, une carte MoMo virtuelle adossée à Mastercard avec Access Bank Cameroun. Les réponses courtes et validées d'avance sont préférables à toute improvisation devant le client. Les règles des opérateurs se lisent dans leur documentation officielle, jamais de mémoire.",
                "Côté réseau, les pièces d'exercice arrivent avant la session. Les assistants fonctionnent en ligne : chaque participant a besoin d'une connexion stable, et une solution de repli est prévue en cas de coupure. Pour l'heure, l'IANA relie Africa/Douala et Africa/Porto-Novo à la même zone, Africa/Lagos. Douala, Yaoundé et Cotonou n'ont donc aucun décalage, et une séance fixée à 9 h à Yaoundé commence à 9 h à Cotonou.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats proposer à une banque ou à un réseau d'EMF qui a des agences dans plusieurs régions ?",
            'legende' => "Pour les équipes camerounaises, chaque format se déroule en visioconférence ; durées et effectifs sont ceux de la fiche générale sur l'IA en entreprise.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ["Atelier découverte pour la direction, la conformité et la gestion des risques", "Une demi-journée", "12 personnes au plus", "Avant toute autorisation d'outil, pour décider ensemble de ce que les agents ont le droit de lui confier"],
                ["Formation complète pour un poste", "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Chargés de clientèle, agents de crédit ou analystes qui utilisent déjà des assistants chacun à leur façon"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Un réseau d'agences éloignées les unes des autres, dont le personnel ne peut s'absenter plusieurs jours d'affilée"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Fixer les habitudes, revoir les modèles de réponse et ouvrir d'autres tâches une fois les premières acquises"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quoi ressemble une séance : quels scénarios pour un agent de banque ou d'EMF au Cameroun ?",
            'intro' => "Les cinq situations ci-dessous sont inventées. Pour chacune, on lit la consigne donnée au participant, puis ce qu'il vérifie avant de reprendre le texte produit.",
            'items' => [
                ['titre' => "Scénario 1 : le dossier d'une PME de transformation", 'texte' => "Situation : un chargé d'affaires fictif prépare la note d'une entreprise qui demande un crédit d'équipement. Consigne : demander à l'assistant le plan de la note et les questions à poser au dirigeant, puis rédiger soi-même les hypothèses et la recommandation. Avant de reprendre le texte, il refait la capacité de remboursement dans le tableur, retrouve chaque chiffre dans le dossier et rappelle que la décision se motive en comité."],
                ['titre' => "Scénario 2 : le portefeuille d'une agence d'EMF", 'texte' => "Situation : une responsable d'agence fictive reçoit un export de portefeuille et veut présenter à son comité la part des retards. Consigne : bâtir le tableau en demandant à l'assistant les formules, puis commenter trois lignes sans en tirer de conclusion. Il refait deux totaux à la main, compare les périodes entre elles et relit l'intitulé de chaque colonne."],
                ['titre' => "Scénario 3 : un client anglophone conteste un frais", 'texte' => "Situation : un client fictif écrit en anglais pour contester un frais qu'il juge élevé. Consigne : rédiger avec l'assistant trois phrases dans la langue du client, en s'appuyant sur la seule grille approuvée. Il s'assure que le texte ne cite aucun compte ni aucun taux inventé, qu'un collègue bilingue l'a relu et que l'échange figure au dossier."],
                ['titre' => "Scénario 4 : la relance d'une échéance", 'texte' => "Situation : un client fictif a trois jours de retard sur une échéance. Consigne : demander à l'assistant deux versions d'un message neutre, l'une pour un appel, l'autre pour un message écrit. Il vérifie que le ton reste respectueux, que le montant provient du système et non de l'assistant, et que le contact est inscrit au dossier."],
                ['titre' => "Scénario 5 : l'alerte d'un analyste", 'texte' => "Situation : un analyste fictif voit un compte dont les mouvements changent de rythme. Consigne : faire résumer les opérations par l'assistant, sans nom ni numéro, et lister les points à vérifier. Il contrôle qu'aucune donnée identifiante n'est sortie, que le résumé reste une aide et non un verdict, et que la transmission dépend du responsable de la conformité, la déclaration éventuelle étant adressée à l'ANIF."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation IA d'une banque ou d'une EMF camerounaise ?",
            'paragraphes' => [
                "Aucun dispositif public de prise en charge d'une formation à l'IA pour le personnel d'une banque ou d'une EMF n'est établi à ce jour, et rien ne doit être budgété comme acquis. EcoMatin rapporte le 10 décembre 2024 que le ministre de l'Emploi et de la Formation professionnelle (MINEFOP) a appelé à créer un Fonds national pour le financer, avec une participation des secteurs public et privé, et que le budget 2025 du ministère s'élevait à 33,1 milliards de FCFA. Cette idée n'est pas un guichet ouvert : toute demande d'aide se pose par écrit au ministère, programme et devis à l'appui, et rien n'est acquis avant la réponse écrite.",
                "Pour budgéter sans attendre, mieux vaut imputer la dépense sur l'enveloppe de formation de l'exercice, en l'étalant : un premier atelier pour la direction et la conformité, une formation poste par poste, puis un suivi mensuel. De son côté, Richard remet un programme, un devis puis une attestation nominative. L'établissement souscrit lui-même les licences des assistants, qui ne figurent pas au devis.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte une formation IA pour les agents d'une banque ou d'une EMF au Cameroun ?",
            'intro' => "Aucun tarif n'est publié pour cette formation : le prix se fixe sur devis, en FCFA, après le cadrage et poste par poste. Le règlement peut se faire par virement, carte bancaire, PayPal, Mobile Money (MTN, Moov) ou espèces, et le mode se confirme au devis. Les formules des éditeurs d'outils évoluent, et leur page officielle fait foi.",
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée avec la direction et la conformité', 'État des lieux des usages déjà en place chez les agents', 'Premières règles sur les données', 'Recommandation sur la suite à donner']],
                ['offre' => 'Formation complète par poste', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées sur des dossiers inventés, bâtis à partir de vos procédures', 'Épreuve finale chronomètre en main', 'Attestation nominative', 'Canal direct pendant le mois qui suit']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée mensuelle pendant trois mois', 'Revue des modèles de réponse', 'Ajout de tâches nouvelles']],
            ],
            'variations' => [
                "L'effectif et le nombre de groupes à former.",
                "Le nombre et la longueur des séances à distance.",
                "Le temps de préparation des dossiers inventés avec la conformité.",
                "Le choix de donner la formation en français, en anglais, ou dans les deux langues.",
                "Le suivi demandé une fois la formation terminée.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les équipes de banque et d'EMF au Cameroun quand elles démarrent l'IA ?",
            'intro' => "Ces écueils se traitent en amont, quand l'établissement rédige ses règles d'usage.",
            'items' => [
                ['titre' => "Saisir un dossier de client dans un outil personnel", 'texte' => "Copier une photo de pièce ou un relevé dans le premier assistant venu fait sortir des données personnelles du système de l'établissement. La loi n° 2024/017 les vise, et c'est à la direction, non à l'agence, de dire quel outil est permis."],
                ['titre' => "Confondre un compte de mobile money et un compte bancaire", 'texte' => "Un établissement de paiement ne tient pas de compte bancaire et n'accorde pas de crédit, rappelle Osiris. Une réponse type qui brouille cette différence induit le client en erreur et se corrige avant toute diffusion."],
                ['titre' => "Mélanger les données de la zone et celles du pays", 'texte' => "Le Cameroun applique des textes nationaux et des textes de la CEMAC, et certaines statistiques portent sur la zone entière. Un tableau qui cite un chiffre de zone comme s'il était camerounais donne une image fausse ; chaque chiffre porte sa date et sa source."],
                ['titre' => "Laisser l'assistant fixer un taux", 'texte' => "Un assistant écrit volontiers un taux plausible, mais le taux d'un client vient de la grille approuvée, et le taux d'usure se lit à la source. Le chiffre produit par l'outil n'est jamais repris sans contrôle."],
                ['titre' => "Confier à l'outil le contenu d'une déclaration", 'texte' => "Une déclaration de soupçon va à l'ANIF et son contenu relève du responsable de la conformité : le moindre détail du cas reste hors de l'assistant, gratuit ou payant."],
                ['titre' => "Négliger l'autre langue officielle", 'texte' => "Un modèle de courrier traduit sans relecture peut changer de sens. Chaque version est relue par un collègue qui maîtrise les deux langues, puis conservée comme modèle."],
                ['titre' => "Former seulement les agents de guichet", 'texte' => "Direction, conformité et agents de crédit utilisent les mêmes outils sur les mêmes téléphones. Réunis dès le premier atelier, ils donnent un sens aux règles ; sans eux, ces règles restent lettre morte."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier à Richard SALANON la formation IA des agents d'une banque ou d'une EMF camerounaise ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Basé à Cotonou, Richard peut former à distance les agents des banques et des EMF camerounaises, en français comme en anglais. Richard a déjà travaillé avec des entreprises au Cameroun, et son parcours compte quatorze autres pays, dont le Bénin et le Gabon. Parmi ses projets figure KossKoss Select, une boutique en ligne camerounaise lancée avec un diagnostic beauté en cinq étapes et le paiement par Orange Money et MTN MoMo, réalisée pour le client directement. La page des <a href=\"/realisations/\">réalisations</a> présente l'ensemble.",
                "Passé par " . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", Richard totalise " . $ans . " ans dans le numérique et déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées, tous publics confondus. Il est le créateur de <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Richard n'exerce pas le métier de banquier : il ne tient pas la conformité d'un établissement et n'a aucune certification d'éditeur d'IA. Décision de crédit, recouvrement, vigilance, déclaration à l'ANIF et lecture des textes restent aux professionnels et aux autorités. Avant la session, un ou deux entretiens de cadrage et un questionnaire préparent le terrain, avec des documents à télécharger d'avance ; ensuite viennent les supports, une épreuve finale chronomètre en main et une attestation nominative, et toute question reçoit une réponse sous 24 heures. Pour aller plus loin, voir les formations <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>, <a href=\"/formations/cybersecurite-employes\">cybersécurité pour les employés</a>, <a href=\"/formations/chatbot-whatsapp\">chatbot WhatsApp</a> et <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a>, ou le parcours général <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>.",
                "Richard a déjà formé des équipes de banques et d'institutions de microfinance : ce public ne lui est pas nouveau, et chaque séance part des dossiers et des procédures de l'établissement.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former à l'IA les agents de votre banque ou de votre EMF au Cameroun ?",
            'texte'  => "Décrivez votre structure (banque ou EMF, première ou deuxième catégorie), le nombre d'agents et d'agences, les postes visés, les tâches les plus longues, la langue de travail et votre ville. Une réponse vous parvient sous 24 heures, suivie d'une proposition et d'un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les agents d'une banque ou d'une EMF à l'IA au Cameroun ?", 'r' => "Richard SALANON, installé à Cotonou, peut conduire à distance une formation pour les agents de banque et d'EMF du Cameroun, en français ou en anglais, autour de ChatGPT, Claude ou Gemini, sur leurs tâches et des dossiers inventés. La conformité de l'établissement fixe les limites ; aucun éditeur ne l'a certifié."],
        ['q' => "Combien d'EMF compte le Cameroun et où en est leur portefeuille ?", 'r' => "Selon EcoMatin, le Cameroun comptait 385 EMF agréés fin 2025, dont 301 de première catégorie et 84 de deuxième. D'après le CNEF, l'encours de crédits était de 819,2 milliards de FCFA et les créances en souffrance en représentaient 22,37 %."],
        ['q' => "Les EMF camerounaises ont-elles gagné de l'argent en 2025 ?", 'r' => "EcoMatin rapporte, d'après la COBAC, une perte nette cumulée de 6,87 milliards de FCFA en 2025, contre un bénéfice de 5,24 milliards en 2024. Une formation n'agit pas sur ce résultat ; elle fait gagner du temps à l'agent dans la préparation de ses dossiers."],
        ['q' => "Un agent peut-il confier à un assistant d'IA une déclaration de soupçon à l'ANIF ?", 'r' => "Non. Selon un commentaire juridique, la déclaration de soupçon est adressée à l'Agence nationale d'investigation financière ; le rapport de la Conac sur 2023, repris par Camer.be, compte les banques et les EMF parmi les émetteurs de déclarations. La conformité décide de la suite ; aucun détail du cas ne se confie à un assistant."],
        ['q' => "La loi sur les données personnelles s'applique-t-elle à un fichier de clients saisi dans un outil d'IA ?", 'r' => "Oui, le plus souvent. Droit, médias et finance annonce l'entrée en vigueur au 23 juin 2026 de la loi n° 2024/017 du 23 décembre 2024 sur les données personnelles, et un fichier de clients en est rempli. Avant tout usage, l'établissement interroge sa conformité et l'autorité de protection des données sur les formalités."],
        ['q' => "Comment un client camerounais peut-il comparer les tarifs et les taux des banques ?", 'r' => "Selon EcoMatin du 23 juin 2025, le CNEF a lancé le 20 juin 2025 à Yaoundé BankCompar, un comparateur gratuit des tarifs de 17 services bancaires, avec un simulateur de crédit qui vérifie les taux au regard du taux d'usure. Un agent formé à l'IA y renvoie ses clients au lieu de leur citer un taux de mémoire."],
        ['q' => "Quelle est la différence entre une banque, une EMF et un établissement de paiement au Cameroun ?", 'r' => "Une banque et une EMF collectent des dépôts et accordent des crédits. Un établissement de paiement, comme Orange Money Cameroun SA agréée le 5 mai 2022 selon Osiris, ouvre des comptes de paiement mais pas de comptes bancaires, ne collecte pas de dépôts et n'accorde pas de crédit."],
        ['q' => "Combien de comptes de mobile money compte le Cameroun ?", 'r' => "Ecofin Agency, citant un rapport de la BEAC, indique 30,9 millions de comptes de mobile money au 31 décembre 2024, contre 24,86 millions fin 2023. Ce sont des comptes, non des personnes."],
        ['q' => "La formation peut-elle se donner en anglais ?", 'r' => "Oui, en français comme en anglais, puisque les deux sont langues officielles du Cameroun, de statut égal selon la Constitution. Les supports et les exercices peuvent être bilingues, et un collègue qui maîtrise les deux langues relit chaque courrier avant envoi."],
        ['q' => "Existe-t-il un financement public pour cette formation ?", 'r' => "Aucun dispositif de prise en charge n'est confirmé. EcoMatin rapporte en décembre 2024 que le ministre du MINEFOP a proposé la création d'un fonds national pour la formation professionnelle. Interrogez le ministère par écrit avant de signer, programme et devis à l'appui."],
        ['q' => "Y a-t-il un décalage horaire entre Yaoundé, Douala et Cotonou ?", 'r' => "Non. Dans la base de l'IANA, Africa/Douala et Africa/Porto-Novo renvoient à la même zone, Africa/Lagos : 9 h à Yaoundé, c'est 9 h à Cotonou, en toute saison."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Aucune somme n'est publiée : le devis, en FCFA, suit le cadrage. Il varie avec l'effectif, le nombre de séances, la préparation des cas inventés, la ou les langues retenues et le suivi souhaité. L'établissement règle à part les licences des outils."],
        ['q' => "Reçoit-on une attestation en fin de formation ?", 'r' => "Oui, nominative, avec le programme et les supports. Ce n'est ni un diplôme ni un certificat d'éditeur, et elle ne tient pas lieu de la formation que l'établissement organise lui-même sur la lutte contre le blanchiment."],
    ],

    'sources' => [
        ['titre' => "EcoMatin, cartographie du marché de la microfinance en 2026 (9 février 2026)", 'url' => 'https://ecomatin.net/cameroun-cartographie-du-marche-de-la-microfinance-en-2026', 'date' => '2026-10-27'],
        ['titre' => "EcoMatin, les crédits des microfinances grimpent à 819 milliards de FCFA (5 octobre 2026)", 'url' => 'https://ecomatin.net/cameroun-les-credits-des-microfinances-grimpent-a-819-milliards-de-fcfa-plus-de-22-en-souffrance', 'date' => '2026-10-27'],
        ['titre' => "EcoMatin, les microfinances basculent dans le rouge en 2025 (8 octobre 2026)", 'url' => 'https://ecomatin.net/cameroun-les-microfinances-basculent-dans-le-rouge-avec-69-milliards-fcfa-de-pertes-en-2025', 'date' => '2026-10-27'],
        ['titre' => "EcoMatin, la baisse des taux propulse les crédits bancaires au premier trimestre 2025 (30 janvier 2026)", 'url' => 'https://ecomatin.net/cameroun-la-baisse-des-taux-propulse-les-credits-bancaires-de-29-a-1-828-milliards-fcfa-au-1er-trimestre-2025', 'date' => '2026-10-27'],
        ['titre' => "EcoMatin, le Cameroun met en place un comparateur public des tarifs et du coût du crédit (23 juin 2025)", 'url' => 'https://ecomatin.net/banques-le-cameroun-met-en-place-un-comparateur-public-des-tarifs-et-du-cout-du-credit', 'date' => '2026-10-27'],
        ['titre' => "Ecofin Agency, le Cameroun garde la tête du mobile money en Afrique centrale en 2024 (7 mai 2026)", 'url' => 'https://www.ecofinagency.com/news/0705-55325-cameroon-retains-lead-in-central-african-mobile-money-in-2024-as-regional-rivals-gain-ground', 'date' => '2026-10-27'],
        ['titre' => "Business in Cameroon, MTN lance la carte virtuelle MoMo adossée à Mastercard (24 décembre 2025)", 'url' => 'https://www.businessincameroon.com/finance/2412-15553-mtn-launches-mastercard-backed-virtual-momo-prepaid-card-in-cameroon', 'date' => '2026-10-27'],
        ['titre' => "Osiris, Orange Money Cameroun obtient le premier agrément d'établissement de paiement (8 juillet 2022)", 'url' => 'https://www.osiris.sn/orange-money-decroche-le-tout-premier-agrement-d-etablissement-de-paiement-au.html', 'date' => '2026-10-27'],
        ['titre' => "Camer.be, l'ANIF a détecté près de 1 700 milliards de FCFA de transactions suspectes en 2023, d'après la Conac (10 octobre 2024)", 'url' => 'https://www.camer.be/86774/11:1/cameroun-lanif-a-detecte-pres-de-1700-milliards-de-francs-cfa-de-transactions-financieres-suspectes-en-2023-cameroon.html', 'date' => '2026-10-27'],
        ['titre' => "Kalieu & Elongo, la déclaration de soupçon en matière de blanchiment dans la CEMAC", 'url' => 'https://kalieu-elongo.com/%ef%bb%bfla-declaration-de-soupcon-en-matiere-de-blanchiment-de-capitaux-dans-la-cemac-10-questions-pour-comprendre-les-regles-applicables%ef%bb%bf/', 'date' => '2026-10-27'],
        ['titre' => "Droit, médias et finance, la loi sur les données personnelles entre en vigueur le 23 juin 2026", 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-27'],
        ['titre' => "Droit, médias et finance, la protection des données et les entreprises financières", 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/880-cameroun-le-nouveau-visage-de-la-protection-des-donnees-a-caractere-personnel-et-ses-implications-pour-les-entreprises-financieres', 'date' => '2026-10-27'],
        ['titre' => "Digital Business Africa, l'autorité de protection des données créée (24 décembre 2024)", 'url' => 'https://www.digitalbusiness.africa/cameroun-lautorite-de-protection-des-donnees-a-caractere-personnel-creee/', 'date' => '2026-10-27'],
        ['titre' => "EcoMatin, vers un fonds national de financement de la formation professionnelle (10 décembre 2024)", 'url' => 'https://ecomatin.net/cameroun-vers-la-creation-dun-fonds-national-pour-financer-la-formation-professionnelle', 'date' => '2026-10-27'],
        ['titre' => "Constitution du Cameroun, Constitute Project (article premier, langues officielles)", 'url' => 'https://www.constituteproject.org/constitution/Cameroon_2008', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Douala, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'cybersecurite-employes', 'chatbot-whatsapp', 'gouvernance-ia', 'ia-audit-controle'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
