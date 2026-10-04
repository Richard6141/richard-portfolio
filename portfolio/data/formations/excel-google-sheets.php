<?php
// ============================================================
// data/formations/excel-google-sheets.php · Fiche formation « Excel et
// Google Sheets pour la gestion » (vague 1B, lot A, domaine erp-gestion).
// Reprend l'ancienne page /formation-outils-numeriques (module tableur :
// formules de base, tri et filtres, protection des cellules, totaux faux ;
// socle utile rattaché au classeur : version unique partagée au lieu des
// copies envoyées, nommage, sauvegarde vérifiée par une restauration ;
// demi-journée par module, deux jours pour le socle, une dizaine de
// personnes au plus, groupes par niveau réel, sur place de préférence,
// retour à un mois, séance individuelle possible, FAQ) ; ses prix sont
// ignorés. Messagerie, partage et droits des suites : fiche sœur
// microsoft-365-google-workspace ; sécurité du quotidien : fiche
// cybersecurite-employes. Sœurs non traitées : power-bi-looker-studio,
// sql-analystes, data-literacy.
// Sources consultées le 05/10/2026 : aide Microsoft (limites d'Excel,
// RECHERCHEX, protection), aide Google (limites de Sheets, hors connexion,
// protection), tarifs Microsoft 365 et Google Workspace, The Register,
// DataReportal, ARCEP Bénin, loi n° 2017-20, CNIL (RGPD), FDFP, FODEFCA,
// 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Excel et Google Sheets pour la gestion : construire des classeurs fiables, écrire les bonnes formules, analyser par tableaux croisés et contrôler chaque total",
    'title'   => "Formation tableur Excel et Google Sheets | Richard SALANON",
    'meta'    => "Formation Excel et Google Sheets pour la gestion : formules, tableaux croisés et contrôles sur vos classeurs, en petits groupes, sur place ou à distance.",
    'en_bref' => "Une formation pratique qui apprend aux équipes de gestion à tenir des classeurs Excel ou Google Sheets dont les totaux tombent juste : structure des données, formules de gestion, tableaux croisés dynamiques, contrôles et protection. Elle s'adresse aux comptables, assistants administratifs, commerciaux, gestionnaires de stock, chargés de suivi budgétaire et dirigeants qui vivent dans le tableur. Elle dure deux jours en quatre demi-journées, avec une demi-journée de mise à niveau pour les débutants et un retour un mois plus tard, sur place, à distance ou en formule mixte. Le prix est fixé sur devis.",
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => true,
    'duree'   => "2 jours en quatre demi-journées, plus un retour à un mois",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Avant le jour 1, demi-journée facultative : mise à niveau pour ceux qui découvrent le tableur",
            'duree'  => '3 h 30',
            'points' => [
                "Ouvrir, enregistrer et retrouver un classeur à son emplacement unique, au lieu de la copie reçue par WhatsApp ou par courriel.",
                "Se déplacer dans une feuille, sélectionner une plage, insérer et supprimer des lignes sans casser ce qui est autour.",
                "Saisir un nombre, un montant, une date et un texte, et voir ce que le tableur en comprend réellement.",
                "Écrire une première somme, la recopier vers le bas, et comprendre pourquoi la formule suit la ligne.",
                "Exercice : compléter seul la feuille de caisse d'une journée et retrouver le total attendu.",
            ],
        ],
        [
            'titre'  => "Jour 1, matin : partir de vos classeurs et leur donner une structure saine",
            'duree'  => '3 h 30',
            'points' => [
                "Tour de table sur les classeurs apportés : chacun montre comment il travaille aujourd'hui, astuces comprises.",
                "La règle de base : une ligne par opération, une colonne par information, aucune cellule fusionnée dans les données.",
                "Séparer trois rôles dans le classeur : les feuilles de saisie, les feuilles de calcul et les feuilles de restitution.",
                "Mettre les données sous forme de tableau, pour que formules et filtres suivent automatiquement les nouvelles lignes.",
                "Listes déroulantes et validation des données : produits, clients, dépôts, modes de paiement saisis toujours de la même façon.",
                "Nommer le fichier selon une règle commune, le ranger à un seul endroit et le partager au lieu de l'envoyer.",
                "Exercice : restructurer un de vos classeurs réels sans perdre une seule ligne.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : les formules dont la gestion a besoin",
            'duree'  => '3 h 30',
            'points' => [
                "Références relatives et absolues : le signe \$ qui évite qu'un taux ou un prix de référence glisse quand on recopie.",
                "Conditions avec SI, ET et OU, et les sommes et comptages conditionnels avec SOMME.SI.ENS et NB.SI.ENS.",
                "Aller chercher une information dans une autre table avec RECHERCHEX, ou RECHERCHEV et INDEX-EQUIV sur les versions anciennes.",
                "Calculs de dates utiles : échéance, fin de mois, jours de retard, jours ouvrés avec NB.JOURS.OUVRES.",
                "Arrondir les montants avec ARRONDI plutôt que masquer les décimales par le format.",
                "Nettoyer une saisie : espaces en trop, nombres stockés en texte, identifiants et numéros de téléphone qui perdent leur zéro.",
                "Exercice : l'échéancier de vos factures clients, avec les retards calculés et les relances du jour filtrées.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : analyser sans recopier, avec tris, filtres et tableaux croisés dynamiques",
            'duree'  => '3 h 30',
            'points' => [
                "Tris à plusieurs niveaux, filtres et vues filtrées, pour que chacun regarde sa partie sans déranger les autres.",
                "Le tableau croisé dynamique : ventes par mois et par vendeur, sorties de stock par article et par dépôt, dépenses par ligne budgétaire.",
                "Regrouper des dates par mois ou par trimestre, afficher des pourcentages du total, actualiser après l'ajout de lignes.",
                "Importer un export CSV de votre banque, de votre opérateur de Mobile Money, d'Odoo ou de Dolibarr : séparateur, accents, dates et montants.",
                "Mise en forme conditionnelle qui signale au lieu de décorer : retards, stocks sous le seuil, doublons.",
                "Un graphique simple placé à côté du tableau qu'il illustre, sans construire de tableau de bord.",
                "Exercice : répondre en moins de dix minutes à trois questions posées par la direction, à partir de vos propres données.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : contrôler, protéger et documenter le classeur",
            'duree'  => '3 h 30',
            'points' => [
                "Totaux de contrôle : la somme des lignes doit égaler le total général, et le solde du classeur celui du relevé.",
                "Afficher les formules, repérer les antécédents et les dépendants, trouver la cellule où un montant a été tapé par-dessus une formule.",
                "Protéger les cellules de calcul et les plages sensibles, en sachant ce que cette protection n'empêche pas.",
                "Historique des versions : retrouver l'état d'hier, restaurer une version, et vérifier qu'une copie de sauvegarde se relit réellement.",
                "Une feuille « Lisez-moi » dans chaque classeur : à quoi il sert, qui le tient, d'où viennent les données, quelles règles de saisie.",
                "Exercice final : chacun livre seul un classeur de gestion complet, contrôlé et documenté, sur un cas de son poste.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, demi-journée : revue des classeurs réellement utilisés",
            'duree'  => '3 h 30',
            'points' => [
                "Relecture des classeurs construits pendant la formation, tels qu'ils vivent depuis un mois.",
                "Questions apparues à l'usage, formules à corriger, règles de saisie qui n'ont pas tenu.",
                "Vérification des totaux de contrôle et de la dernière restauration testée.",
                "Mise à jour des fiches réflexes et décision sur la suite : nouvelle séance, référent interne, ou passage d'un classeur vers un logiciel de gestion.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en demi-journées, plus un retour à un mois"],
        ['l' => 'Public', 'v' => "Comptabilité, administration, commerce, stock, suivi budgétaire, direction"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou mixte, groupes d'une dizaine au plus"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous faire à la fin de la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "Le tableur reste l'outil de gestion le plus répandu dans les PME, les ONG et les administrations, y compris là où un ERP est installé. Il sert à suivre la caisse, les ventes, le stock, les impayés, le budget d'un projet. Il sert aussi, trop souvent, à produire des totaux faux sans que personne ne s'en aperçoive. Cette formation apprend à construire et à tenir des classeurs dont on peut répondre : chaque chiffre a une origine, chaque calcul se vérifie, et le fichier existe en une seule version.",
                "À la fin des deux jours, chaque participant sait faire seul cinq choses vérifiables. Restructurer un classeur existant en tableau de données propre, avec des listes de saisie contrôlées. Écrire les formules de son poste, sommes conditionnelles, recherches dans une autre table et calculs d'échéance, et les recopier sans erreur de référence. Répondre à une question de la direction par un tableau croisé dynamique. Importer un export bancaire ou logiciel sans abîmer les dates ni les montants. Enfin, contrôler un total, retrouver une formule écrasée et restaurer une version antérieure du fichier.",
                "La formation laisse plusieurs sujets à d'autres fiches du catalogue, citées en bas de page. Les tableaux de bord construits dans Power BI ou Looker Studio, l'interrogation de bases de données en SQL et la lecture critique des indicateurs pour décider ont chacun leur formation. La messagerie, l'agenda, les droits de partage et la sécurité des suites Microsoft 365 et Google Workspace aussi. Les macros VBA et les scripts Apps Script ne sont pas enseignés : un classeur de gestion fiable n'en a presque jamais besoin.",
                "Cette fiche remplace l'ancienne formation aux outils numériques, qui réunissait le tableur, la messagerie, les fichiers partagés et la sécurité. Le tableur en était le cœur, et il devient ici une formation complète. Ce qui relevait du socle bureautique et touche directement au classeur est conservé : une version unique au lieu des copies envoyées, une règle de nommage, une sauvegarde vérifiée par une vraie restauration. Les réflexes de sécurité du quotidien, mots de passe et faux messages, relèvent désormais de la <a href=\"/formations/cybersecurite-employes\">formation cybersécurité pour les employés</a>.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quel niveau et quel matériel ?",
            'intro' => "Le public se définit par ce que les gens font dans le tableur, pas par l'intitulé de leur poste. Un test de positionnement d'une dizaine de minutes, passé avant la session, sert à composer des groupes de niveau proche.",
            'items' => [
                ['titre' => "Comptabilité et administration", 'texte' => "Ceux qui tiennent la caisse, l'échéancier des clients et des fournisseurs, les pièces du mois pour le comptable externe. C'est le service qui gagne le plus d'heures, parce qu'il recalcule souvent à la main ce que le classeur devrait donner."],
                ['titre' => "Commerciaux et administration des ventes", 'texte' => "Un fichier clients unique au lieu des carnets de chacun, le suivi des commandes et des relances, les ventes par vendeur et par mois. Le savoir commercial reste dans l'entreprise quand un vendeur part."],
                ['titre' => "Stock, achats et logistique", 'texte' => "Entrées, sorties, inventaires, seuils de réapprovisionnement, quand aucun logiciel de stock n'est encore en place ou en complément de celui-ci."],
                ['titre' => "Suivi budgétaire et projets financés", 'texte' => "Chargés de suivi d'ONG ou de projets de coopération : budget prévu et réalisé par ligne, taux d'exécution, rapports financiers attendus par le bailleur."],
                ['titre' => "Ressources humaines", 'texte' => "Préparation des éléments variables de paie, suivi des congés et des effectifs, avec un accès limité aux données personnelles qui le justifient."],
                ['titre' => "Direction", 'texte' => "La séance du dirigeant porte sur la lecture plutôt que sur la saisie : savoir d'où vient un total, ouvrir l'historique, filtrer soi-même au lieu de demander un nouveau fichier."],
                ['titre' => "Niveau et prérequis", 'texte' => "Savoir utiliser un clavier et une souris suffit. Les personnes qui n'ont jamais ouvert un tableur suivent d'abord la demi-journée de mise à niveau ; celles qui écrivent déjà des formules commencent directement au jour 1."],
                ['titre' => "Matériel", 'texte' => "Un ordinateur par participant, pas un téléphone, avec la version d'Excel ou le compte Google réellement utilisé au travail. Chacun apporte deux ou trois classeurs de son poste, copiés et anonymisés si des données personnelles y figurent."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Sur quels classeurs de votre entreprise les exercices portent-ils ?",
            'legende' => "Les exercices sont choisis pendant le cadrage parmi les classeurs que l'équipe utilise déjà. Chaque cas se termine par un contrôle que le participant réalise seul.",
            'entetes' => ['Classeur de gestion', 'Ce que le participant construit', 'Contrôle de fin d\'exercice'],
            'lignes'  => [
                ['Journal de caisse et de Mobile Money', "Une table des encaissements et des décaissements, avec le mode de paiement choisi dans une liste, et un solde par jour.", "Le solde du classeur égale le solde compté en caisse et celui du relevé de l'opérateur."],
                ['Échéancier des factures clients', "Dates d'échéance calculées, jours de retard, montant restant dû, filtre des relances du jour.", "La somme des restes à payer égale le total des factures moins le total des encaissements."],
                ['Suivi des ventes', "Une ligne par vente, puis un tableau croisé par mois, par vendeur et par produit.", "Le total du tableau croisé égale la somme de la colonne des montants."],
                ['Stock simple', "Mouvements d'entrée et de sortie, stock par article et par dépôt, articles sous le seuil mis en évidence.", "Le stock calculé d'un article tiré au hasard égale le comptage physique."],
                ['Budget prévu et réalisé', "Dépenses rattachées à une ligne budgétaire par liste déroulante, taux d'exécution par ligne et par période.", "Aucune dépense sans ligne, et le total réalisé égale celui du grand livre ou de l'export comptable."],
                ['Éléments variables de paie', "Heures, primes et absences du mois par salarié, dans une feuille protégée à accès limité.", "Le nombre de salariés et le total des primes concordent avec le mois précédent, écarts expliqués."],
                ['Commandes reçues sur WhatsApp', "Une table des commandes saisie de façon uniforme, avec statut, livreur et date de règlement.", "Aucune commande livrée sans date, aucune commande réglée sans montant."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formules apprend-on, et quels pièges reviennent à chaque session ?",
            'legende' => "Noms des fonctions dans Excel en français. Google Sheets propose des équivalents, souvent affichés sous leur nom anglais selon les paramètres du fichier ; la formation montre les deux écritures quand l'équipe utilise les deux outils.",
            'entetes' => ['Besoin de gestion', 'Fonctions enseignées', 'Piège rencontré en séance'],
            'lignes'  => [
                ['Total par client, par mois ou par dépôt', 'SOMME.SI.ENS, NB.SI.ENS, MOYENNE.SI.ENS', "Un critère tapé avec une faute ou un espace en trop : la ligne est silencieusement ignorée."],
                ['Retrouver un prix, un taux ou un nom dans une autre table', 'RECHERCHEX, RECHERCHEV, INDEX et EQUIV', "RECHERCHEV laissée en correspondance approximative, qui renvoie un prix voisin sans aucun message d'erreur."],
                ['Décider selon une règle', 'SI, ET, OU, SI.CONDITIONS', "Des SI imbriqués sur huit niveaux que plus personne ne sait relire ; une petite table de correspondance fait mieux."],
                ['Calculer une échéance ou un retard', 'AUJOURDHUI, FIN.MOIS, NB.JOURS.OUVRES', "Des dates importées en texte, au format mois-jour, qui donnent des retards négatifs."],
                ['Arrondir un montant', 'ARRONDI, ARRONDI.SUP', "Des décimales masquées par le format : l'affichage tombe juste, la somme réelle non."],
                ['Nettoyer une saisie ou un import', 'SUPPRESPACE, CNUM, TEXTE', "Des nombres stockés en texte, alignés à gauche, que les sommes ne comptent pas."],
                ['Masquer une erreur attendue', 'SIERREUR', "SIERREUR posé partout, qui cache aussi les erreurs qu'il fallait voir."],
                ['Extraire une liste à jour', 'UNIQUE, FILTRE, TRIER', "Fonctions absentes des versions anciennes d'Excel : le fichier s'affiche en erreur chez un collègue."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment se déroulent les séances, et que garde l'équipe ensuite ?",
            'intro' => "La méthode tient en une idée : on ne conclut pas une séance sur une impression, mais sur un classeur réussi par chacun, seul, sur un cas de son poste.",
            'items' => [
                ['titre' => "Une dizaine de personnes au plus", 'texte' => "Au-delà, le formateur ne peut plus passer derrière chaque écran pour voir où la formule casse. Les groupes sont composés par niveau réel, mesuré avant la session, et non par service ou par grade."],
                ['titre' => "Une ouverture sans jugement", 'texte' => "Chaque demi-journée commence par un tour des écrans : chacun montre comment il fait. On y découvre des astuces ingénieuses, que la formation généralise, et des contournements risqués, qu'elle remplace. Quand chacun a vu que le voisin recompte aussi à la calculatrice, les vraies questions arrivent."],
                ['titre' => "Vos classeurs, pas des exemples inventés", 'texte' => "Les exercices partent des fichiers que l'équipe utilise, copiés et anonymisés quand ils contiennent des noms, des téléphones ou des salaires. Un participant qui a corrigé son propre échéancier le réutilise le lundi suivant ; un exercice fictif s'oublie."],
                ['titre' => "Démonstration courte, pratique longue", 'texte' => "Une fonction est montrée en quelques minutes sur un cas réel, puis chacun l'applique à son classeur pendant que le formateur circule. La dernière heure de chaque demi-journée est réservée au parcours complet réalisé seul."],
                ['titre' => "Des supports qui restent à l'entreprise", 'texte' => "Une fiche réflexe d'une page par demi-journée, un aide-mémoire des formules avec leurs pièges, les classeurs modèles construits en séance et les corrigés des exercices, dans un format que l'entreprise peut modifier et transmettre aux nouveaux arrivants."],
                ['titre' => "Une évaluation sur une tâche réelle", 'texte' => "L'exercice final du jour 2 est comparé aux objectifs écrits pendant le cadrage. Une attestation de fin de formation est remise à chaque participant, avec le résultat de cette évaluation."],
                ['titre' => "Un suivi après la session", 'texte' => "La demi-journée de retour, un mois plus tard, porte sur les classeurs tels qu'ils sont utilisés. Entre-temps, un canal direct reste ouvert pour les questions d'application, et la direction reçoit un bilan écrit."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et quelles versions, et combien coûtent-ils ?",
            'legende' => "Tarifs d'éditeurs relevés le 5 octobre 2026 sur leurs pages officielles, pour la France ; ils varient selon le pays de facturation et changent souvent. La formation n'exige l'achat d'aucune licence : elle se fait sur l'outil que vous avez déjà.",
            'entetes' => ['Outil', 'Ce qu\'il permet pendant la formation', 'Coût d\'éditeur relevé'],
            'lignes'  => [
                ['Excel de bureau, avec un abonnement Microsoft 365', "Toutes les fonctions enseignées, les tableaux croisés, l'import de données avec Power Query sous Windows, le travail hors connexion.", "Microsoft 365 Business Standard : 12,13 € HT par utilisateur et par mois, avec paiement annuel, selon la page de Microsoft."],
                ['Excel pour le web et sur mobile', "Saisie, formules courantes, tableaux croisés simples, coédition d'un même fichier en ligne.", "Gratuit avec un compte Microsoft ; Microsoft 365 Business Basic : 6,07 € HT par utilisateur et par mois, avec paiement annuel."],
                ['Excel 2016, 2019, 2021 ou 2024 en licence perpétuelle', "La structure, les sommes conditionnelles, les tableaux croisés ; RECHERCHEX, UNIQUE et FILTRE manquent sur les versions anciennes.", "Déjà acheté dans la plupart des entreprises : la formation s'adapte à la version installée."],
                ['Google Sheets', "Formules, tableaux croisés, vues filtrées, historique des versions détaillé, coédition native, mode hors connexion dans Chrome ou Edge.", "Gratuit avec un compte Google ; Google Workspace Business Starter : 6,80 € par utilisateur et par mois hors remise temporaire, selon la page de tarifs de Google."],
                ['LibreOffice Calc', "Une alternative libre pour les postes sans licence ; la plupart des fonctions de base existent sous d'autres noms.", "Gratuit. Utilisé en formation seulement quand l'équipe y travaille déjà."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Excel ou Google Sheets : quelles limites faut-il connaître avant de tout confier au tableur ?",
            'paragraphes' => [
                "La question revient à chaque cadrage, et la réponse est presque toujours : celui que vous utilisez déjà. Les gestes enseignés valent pour les deux. Excel de bureau reste plus confortable pour les gros volumes et les imports répétés ; Google Sheets l'emporte pour la coédition et l'historique des versions. Quand une équipe utilise les deux, la formation montre les deux écritures et signale les fonctions qui ne passent pas d'un outil à l'autre.",
                "Les limites existent, et la formation les chiffre. Selon la page de Microsoft sur les spécifications et limites d'Excel, consultée le 5 octobre 2026, une feuille compte au plus 1 048 576 lignes et 16 384 colonnes, et la précision des nombres est de 15 chiffres. Ce dernier point surprend : un identifiant de 16 chiffres saisi comme un nombre voit son dernier chiffre remplacé par un zéro. Les numéros de compte, de carte ou de contrat se saisissent donc en texte, jamais en nombre.",
                "Côté Google, l'aide de Google Drive, consultée le même jour, indique qu'une feuille de calcul créée ou convertie dans Google Sheets peut contenir jusqu'à 10 millions de cellules. La limite porte sur le classeur entier : un fichier de ventes de quarante colonnes l'atteint bien avant d'avoir des millions de lignes, et devient lent bien avant de l'atteindre.",
                "L'exemple le plus cité vient du Royaume-Uni. Selon The Register, dans un article du 5 octobre 2020, 15 841 cas positifs de Covid-19 n'ont pas été transmis entre le 25 septembre et le 2 octobre 2020 : les résultats étaient chargés dans l'ancien format de fichier .xls, limité à 65 536 lignes, et ce qui dépassait était perdu sans alerte. La correction a consisté à découper les données en plusieurs fichiers. La leçon vaut pour une PME : un tableur ne prévient pas quand il tronque, d'où les totaux de contrôle enseignés au jour 2.",
                "Quand le classeur devient la mémoire de l'entreprise, que plusieurs personnes y saisissent en même temps et que les mêmes informations sont recopiées dans trois fichiers, le tableur a atteint sa limite d'usage plus que sa limite technique. C'est alors le moment de regarder un logiciel de gestion : la <a href=\"/formations/dolibarr-utilisateurs\">formation Dolibarr</a>, la <a href=\"/formations/odoo-utilisateurs\">formation Odoo</a> et le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> aident à franchir le pas. Le tableur ne disparaît pas pour autant : il sert ensuite à analyser les exports de l'ERP.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre métier et votre pays ?",
            'items' => [
                ['secteur' => "Distribution de boissons et de produits de grande consommation, à Cotonou", 'probleme' => "Trois dépôts tiennent chacun leur classeur de stock, envoyé chaque soir par WhatsApp. Quand la direction demande les ventes du trimestre, trois personnes ouvrent trois versions et obtiennent trois totaux différents.", 'solution' => "Un classeur unique partagé, une table des mouvements avec le dépôt choisi dans une liste, un tableau croisé par dépôt et par article, et un total de contrôle comparé chaque semaine au comptage physique. La question de la direction se règle en une minute."],
                ['secteur' => "ONG et projets financés, à Ouagadougou ou à Niamey", 'probleme' => "Le rapport financier au bailleur demande le prévu et le réalisé par ligne budgétaire, et chaque trimestre on reconstruit le tableau à la main à partir des pièces.", 'solution' => "Une table des dépenses où chaque ligne est rattachée à une ligne budgétaire par liste déroulante, un tableau croisé qui produit le rapport, et un rapprochement avec l'export comptable avant envoi."],
                ['secteur' => "PME de services, à Abidjan ou à Dakar", 'probleme' => "Les impayés se découvrent quand la trésorerie manque. L'échéancier existe, mais les dates sont tapées à la main et personne ne sait quelle facture relancer ce matin.", 'solution' => "Un échéancier avec échéances et retards calculés, un filtre des relances du jour, et une mise en forme qui fait ressortir les retards de plus de trente jours. Le chargé de recouvrement le tient seul dès la fin du jour 1."],
                ['secteur' => "Commerce en ligne payé par Mobile Money, à Lomé", 'probleme' => "Les commandes arrivent sur WhatsApp, les paiements par plusieurs opérateurs, et le rapprochement de la fin du mois prend deux jours.", 'solution' => "Import des relevés des opérateurs au format CSV, nettoyage des numéros de téléphone et des montants, puis recherche de chaque paiement dans la table des commandes. Les écarts restants sont listés, pas devinés."],
                ['secteur' => "École privée ou centre de formation, à Libreville", 'probleme' => "Les frais de scolarité se paient par tranches et le suivi des familles en retard repose sur la mémoire de la secrétaire.", 'solution' => "Une table des élèves et une table des versements, un reste à payer calculé par famille et par tranche, et une feuille protégée que seuls la comptable et le directeur modifient."],
                ['secteur' => "Cabinet ou PME en France, en Belgique ou en Suisse", 'probleme' => "Les exports du logiciel de facturation sont retravaillés chaque mois à la main avant d'être envoyés à l'expert-comptable, et un fichier contient des données de clients qui n'ont plus rien à y faire.", 'solution' => "Formation à distance en séances de deux à trois heures : import propre des exports, tableau croisé mensuel, règles de saisie et tri des données personnelles à conserver ou à supprimer."],
                ['secteur' => "Association ou PME au Québec", 'probleme' => "Le budget des activités et le suivi des membres vivent dans un tableur partagé par des bénévoles qui changent chaque année.", 'solution' => "Séances à distance calées sur le fuseau de l'équipe, un classeur documenté par sa feuille « Lisez-moi », et des fiches réflexes qui permettent au bénévole suivant de reprendre sans tout réapprendre."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Intra, inter, à distance ou en formule mixte : quel format choisir pour une formation tableur ?",
            'options'  => ['Intra sur place', 'Intra à distance', 'Formule mixte', 'Inter-entreprises'],
            'criteres' => [
                ['critere' => 'Classeurs utilisés', 'valeurs' => ["Vos classeurs, copiés et anonymisés si besoin", "Vos classeurs, partagés à l'écran", "Vos classeurs", "Classeurs d'exemple, aucun fichier d'entreprise"]],
                ['critere' => 'Taille du groupe', 'valeurs' => ["Une dizaine au plus", "Six à huit, pour garder le contrôle des écrans", "Une dizaine en salle, moins à distance", "Quelques personnes de structures différentes"]],
                ['critere' => 'Rythme', 'valeurs' => ["Demi-journées de 3 h 30", "Séances de 2 à 3 heures", "Jour 1 en salle, la suite à distance", "Une ou deux journées"]],
                ['critere' => 'Pour qui', 'valeurs' => ["Équipes qui découvrent le tableur, groupes mêlant plusieurs services", "Équipes déjà à l'aise avec l'ordinateur, réparties sur plusieurs sites, en Europe ou au Canada", "Entreprises qui veulent voir les postes de travail puis espacer les séances", "Une ou deux personnes à former, structures d'un même réseau"]],
                ['critere' => 'Limite', 'valeurs' => ["Déplacement à prévoir hors de Cotonou", "Connexion et second écran utiles à chacun", "Deux organisations à caler", "Exercices moins proches de vos fichiers"]],
            ],
            'verdict'  => "Pour un public qui découvre le tableur, la séance sur place reste préférable, comme sur l'ancienne formation ; la distance convient aux équipes déjà à l'aise ; l'inter et la séance individuelle servent à former la personne clé de l'administration sans mobiliser toute une équipe.",
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : la formation est proposée sur devis, après un premier échange qui liste les classeurs à traiter et le niveau des participants. Le devis sépare chaque demi-journée, pour que vous ne commandiez que ce qui est utile.",
            'items'      => [
                ['offre' => "Mise à niveau", 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée pour les débutants", "Feuille de caisse en exercice", "Fiche réflexe des gestes de base"]],
                ['offre' => "Formation de deux jours", 'prix' => 'Sur devis', 'inclus' => ["Quatre demi-journées sur vos classeurs", "Aide-mémoire des formules", "Classeurs modèles et corrigés", "Évaluation et attestation"]],
                ['offre' => "Retour à un mois", 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée", "Revue des classeurs en usage", "Mise à jour des fiches réflexes"]],
                ['offre' => "Séance individuelle", 'prix' => 'Sur devis', 'inclus' => ["Pour la personne clé de l'administration", "Programme réduit à ses classeurs", "À distance ou sur place"]],
            ],
            'variations' => [
                "Le nombre de participants et donc de groupes, puisqu'un groupe compte une dizaine de personnes au plus.",
                "Les demi-journées retenues : mise à niveau, deux jours complets, une partie seulement, retour à un mois.",
                "Le travail de préparation sur vos classeurs : anonymisation, restructuration préalable d'un fichier très abîmé.",
                "Le lieu : vos locaux à Cotonou, une autre ville, un autre pays, ou la visioconférence.",
                "Le nombre d'outils couverts : Excel seul, Google Sheets seul, ou les deux.",
                "La langue des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment la formation s'organise-t-elle et se règle-t-elle ?",
            'paragraphes' => [
                "Le premier échange sert à trois choses : lister les classeurs qui posent problème, mesurer le niveau des participants et fixer ce que chacun devra savoir faire seul. Les demi-journées peuvent être regroupées sur deux jours consécutifs ou espacées d'une semaine ; l'espacement laisse le temps d'appliquer, et les questions du jour suivant sont meilleures. Chaque demi-journée peut aussi être commandée seule quand le niveau du groupe le permet.",
                "Les moyens de paiement acceptés sont le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. Le devis indique l'échéancier, et la facture reprend l'intitulé de la formation, les dates, la durée et le nombre de participants. Les éventuels abonnements Microsoft 365 ou Google Workspace restent au nom de l'entreprise et ne sont jamais refacturés.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer une partie de la session ?",
            'paragraphes' => [
                "Peut-être, sans aucune garantie : chaque fonds fixe ses règles pour l'entreprise, pour le prestataire et pour l'action elle-même. Les éléments qui suivent ont été relevés le 5 octobre 2026 sur les pages officielles des fonds. Ils indiquent quelles questions poser, et à qui, avant de signer un devis ; ils ne remplacent pas la réponse écrite du fonds.",
                "En Côte d'Ivoire, la page du FDFP consacrée au plan de formation ouvre le dépôt d'un plan à toute entreprise qui justifie du paiement régulier de la taxe d'apprentissage et de la taxe additionnelle à la formation continue. Elle distingue quatre catégories, interne, intra, interentreprises et à l'étranger, et place les « actions de formation associées à l'utilisation de l'ordinateur » parmi celles soumises à des dispositions particulières. Une formation au tableur entre dans ce cas : demandez au FDFP lesquelles s'appliquent avant de l'inscrire dans votre plan.",
                "Au Bénin, le décret n° 2022-286 du 11 mai 2022 approuve les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage, le FODEFCA. Au Sénégal, le site du 3FPT présente un guichet consacré au financement du personnel des entreprises et des membres des organisations professionnelles, avec une plateforme de demande en ligne. Dans les deux cas, les conditions qui portent sur l'entreprise, sur le prestataire et sur la part restant à votre charge s'obtiennent auprès du fonds.",
                "En France, France Compétences rappelle que depuis le 1er janvier 2022, tout prestataire qui veut accéder aux fonds publics ou mutualisés, ceux des opérateurs de compétences, des régions, de France Travail, de la Caisse des dépôts ou de l'État notamment, doit être certifié Qualiopi. Richard SALANON n'affiche pas cette certification : prévoyez la formation sur votre budget propre, sauf confirmation écrite contraire de votre opérateur de compétences. Le programme, les feuilles de présence et l'évaluation remis en fin de session restent utiles quel que soit le dispositif.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une feuille protégée ne protège-t-elle pas vos chiffres ?",
            'texte' => "La protection d'une feuille empêche une erreur de frappe, pas une fuite ni une modification volontaire. La page d'aide de Microsoft sur la protection d'une feuille de calcul, consultée le 5 octobre 2026, l'écrit : cette protection « n'est pas conçue comme une fonctionnalité de sécurité », et un mot de passe de protection oublié ne peut pas être récupéré par Microsoft. L'aide de Google Sheets précise de son côté qu'une feuille protégée peut toujours être imprimée, copiée, collée, et exportée en copie. Un classeur de paie ou de clients se protège donc d'abord par l'endroit où il est rangé et par la liste des personnes qui peuvent l'ouvrir ; la protection des cellules vient ensuite, pour éviter les formules écrasées.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs reviennent après une formation tableur, et comment les éviter ?",
            'intro' => "Un mois après la session, la demi-journée de retour retrouve presque toujours les mêmes dérives. Elles se préviennent par des règles simples, écrites dans la feuille « Lisez-moi » du classeur.",
            'items' => [
                ['titre' => "Le fichier envoyé au lieu du fichier partagé", 'texte' => "Chaque envoi par WhatsApp ou par courriel crée une copie qui vit sa vie. Une seule règle tient : le classeur existe à un seul endroit, et l'on envoie un lien, jamais le fichier."],
                ['titre' => "La formule écrasée en silence", 'texte' => "Quelqu'un tape un montant par-dessus une formule, et le total ment pendant des mois. Les cellules de calcul sont protégées, et le total de contrôle placé en haut de la feuille signale l'écart dès le jour même."],
                ['titre' => "Le total saisi à la main", 'texte' => "Un sous-total recopié depuis la calculatrice ne se met jamais à jour. Tout total est une formule, et toute formule se relit avec l'affichage des formules."],
                ['titre' => "Les cellules fusionnées dans les données", 'texte' => "Elles rendent le tri, le filtre et le tableau croisé impossibles. La mise en page se fait dans la feuille de restitution, jamais dans la table de saisie."],
                ['titre' => "Les dates et les nombres stockés en texte", 'texte' => "Un import mal réglé transforme le 03/10 en 10 mars ou laisse des montants alignés à gauche que les sommes ignorent. On vérifie l'alignement et un total témoin après chaque import."],
                ['titre' => "Le classeur qui devient une base de données", 'texte' => "Cinquante colonnes, des centaines de milliers de lignes, cinq personnes qui saisissent en même temps : le tableur ralentit et se contredit. C'est le signal pour étudier un logiciel de gestion avec la <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>, plutôt que d'ajouter une feuille."],
                ['titre' => "Une seule personne qui comprend le fichier", 'texte' => "Quand elle part en congé, le classeur s'arrête. La feuille « Lisez-moi » et un deuxième utilisateur formé suffisent à éviter la panne."],
                ['titre' => "La sauvegarde supposée", 'texte' => "Tout le monde croit qu'une copie existe quelque part. Une sauvegarde ne compte que si l'on a déjà restauré un fichier à partir d'elle : l'exercice est fait pendant la formation, puis refait au retour à un mois."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, numéros, données personnelles : que change le contexte local pour un tableur ?",
            'paragraphes' => [
                "La connexion décide souvent de l'outil. Selon le rapport Digital 2026 de DataReportal consacré au Bénin, publié le 8 novembre 2025, le pays comptait 4,80 millions d'internautes à la fin de 2025, soit un taux de pénétration de 32,2 %. Un classeur qui ne s'ouvre qu'en ligne bloque alors la caisse d'une boutique pendant une coupure. Excel de bureau fonctionne sans connexion ; pour Google Sheets, l'aide de Google, consultée le 5 octobre 2026, réserve le mode hors connexion aux navigateurs Chrome et Edge, avec l'extension Google Docs hors connexion, et à un seul compte par profil de navigateur.",
                "Les numéros de téléphone posent un piège très concret. Selon l'ARCEP Bénin, dans un communiqué du 19 novembre 2024, les numéros béninois passent à dix chiffres à partir du 30 novembre 2024, avec le préfixe 01 placé devant les huit chiffres existants. Saisi comme un nombre, un numéro qui commence par 01 perd son zéro, et la recherche d'un client par son téléphone échoue. Les numéros se saisissent en texte, et une colonne entière se corrige en une formule pendant la formation.",
                "Les classeurs de gestion contiennent des données personnelles : clients, salariés, élèves, bénéficiaires. Au Bénin, la loi n° 2017-20 du 20 avril 2018 portant code du numérique encadre leur traitement. En Europe, l'article 5 du RGPD, tel que le publie la CNIL, exige des données limitées à ce qui est nécessaire, exactes et tenues à jour, conservées pas plus longtemps qu'utile et protégées par une sécurité appropriée. Dans un tableur, cela se traduit par des gestes enseignés : supprimer les colonnes inutiles, dater les mises à jour, purger les anciens clients, restreindre l'accès au fichier.",
                "Reste la langue des écrans. Une formule copiée d'un tutoriel anglais échoue dans un Excel français : les fonctions changent de nom et les arguments se séparent par un point-virgule, puisque la virgule sert aux décimales. Les dates s'écrivent jour, mois, année, alors que beaucoup d'exports arrivent au format américain. Les montants en francs CFA se présentent sans décimales, mais se calculent arrondis pour que la somme affichée soit la somme réelle. Les supports sont rédigés en français, avec le vocabulaire de vos menus ; l'explication orale s'adapte au terrain, et un relais interne peut reformuler dans une langue locale.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre le tableur de gestion avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il forme à un outil qu'il croise dans presque chaque mission. Quand il déploie Odoo ou Dolibarr, la reprise des données commence par les classeurs du client, avec leurs doublons, leurs dates en texte et leurs totaux recalculés à la main ; quand il construit une automatisation, le tableur en est souvent la source ou la destination. Ce qu'il enseigne vient de ces chantiers : les erreurs montrées en séance sont celles qu'il a dû corriger avant de pouvoir importer quoi que ce soit.",
                "Il compte " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . ") et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondé <a href=\"https://audyxa.com\">Audyxa</a>. Il a travaillé dans quatorze pays : dix en Afrique francophone, ainsi qu'en France, en Belgique, en Suisse et au Canada.",
                "Sa façon de former se vérifie sur pièces : un premier échange qui peut conclure que le problème n'est pas une question de formation, des exercices sur vos propres classeurs, une évaluation sur une tâche réalisée seul, des supports qui restent chez vous, et une réponse franche sur le financement. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page <a href=\"/zones/\">zones d'intervention</a>, et les autres formations du domaine sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a> du <a href=\"/formations/\">catalogue des formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe ?",
            'texte' => "Un tableur de gestion fiable tient à peu de choses : une table de données propre, des formules au lieu de totaux tapés, un total de contrôle, un seul fichier partagé, une sauvegarde déjà restaurée une fois, et une feuille qui explique le classeur à celui qui le reprendra. Apportez vos vrais classeurs, faites participer la personne qui lit les chiffres, et prévoyez le retour à un mois.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous que vos classeurs de gestion tombent juste ?",
            'texte'  => "Indiquez le nombre de personnes, l'outil utilisé (Excel, Google Sheets ou les deux), les classeurs qui posent problème et la date souhaitée : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation tableur'],
        ],
    ],

    'faq' => [
        ['q' => "La formation se fait-elle sur Excel ou sur Google Sheets ?", 'r' => "Sur l'outil que votre équipe utilise. Les gestes enseignés valent pour les deux ; quand l'entreprise utilise les deux, la formation montre les deux écritures des formules et signale celles qui ne passent pas d'un outil à l'autre."],
        ['q' => "Notre version d'Excel est ancienne. Est-ce un problème ?", 'r' => "Non. La structure des données, les sommes conditionnelles, les tableaux croisés et la protection existent depuis longtemps. Seules quelques fonctions récentes, comme RECHERCHEX, UNIQUE ou FILTRE, manquent sur les versions anciennes : la formation enseigne alors RECHERCHEV ou INDEX et EQUIV, avec leurs pièges."],
        ['q' => "Nos équipes ont des niveaux très différents. Comment faites-vous ?", 'r' => "Un test de positionnement d'une dizaine de minutes, passé avant la session, permet de composer des groupes de niveau proche. Ceux qui découvrent le tableur suivent d'abord la demi-journée de mise à niveau. Mettre ensemble un débutant et un habitué des tableaux croisés fait perdre les deux."],
        ['q' => "Combien de personnes par groupe ?", 'r' => "Une dizaine au plus en salle, six à huit à distance, moins si les niveaux l'exigent. La formation vaut par la pratique sur chaque poste, pas par la projection de diapositives."],
        ['q' => "Peut-on travailler sur nos fichiers confidentiels ?", 'r' => "Oui, à partir de copies. Les classeurs qui contiennent des noms, des téléphones ou des salaires sont anonymisés avant la session, et les copies ne quittent pas votre environnement. En inter-entreprises, aucun fichier d'entreprise n'est utilisé."],
        ['q' => "Peut-on ne former qu'une seule personne ?", 'r' => "Oui, en séance individuelle, sur place ou à distance. C'est souvent le bon choix pour la personne clé de l'administration, qui tient les classeurs de toute l'entreprise. Les règles communes, fichier unique et saisie uniforme, prennent toutefois mieux quand toute l'équipe concernée est formée."],
        ['q' => "Certains collaborateurs n'ont presque jamais utilisé d'ordinateur. Peuvent-ils suivre ?", 'r' => "Oui, si on le sait avant. Ils commencent par la demi-journée de mise à niveau, dans un groupe à leur rythme. Un excellent magasinier qui découvre le clavier progresse vite quand on part de son niveau réel et de ses propres fiches de stock."],
        ['q' => "Faut-il acheter des licences ou des abonnements ?", 'r' => "Presque jamais. La formation se fait sur ce que vous avez déjà, et les versions gratuites d'Excel pour le web et de Google Sheets suffisent pour l'essentiel. Si un abonnement se justifie, son coût réel est présenté et la décision vous revient."],
        ['q' => "Nos ordinateurs sont vieux et lents. Faut-il les remplacer d'abord ?", 'r' => "Rarement. Les gestes enseignés demandent peu de puissance, et un classeur lent souffre plus souvent de sa structure, de formules recalculées sur des colonnes entières ou de mises en forme accumulées, que de l'âge de la machine. Ces causes se corrigent pendant la formation."],
        ['q' => "La formation couvre-t-elle les tableaux de bord et les graphiques ?", 'r' => "Elle couvre le graphique simple placé à côté du tableau qu'il illustre. Les tableaux de bord construits dans Power BI ou Looker Studio ont leur propre formation dans le catalogue, et elle commence là où celle-ci s'arrête : avec des données propres."],
        ['q' => "Et l'intelligence artificielle dans Excel ou dans Google Sheets ?", 'r' => "Un assistant peut proposer une formule, mais il faut savoir la relire et la contrôler, ce que cette formation apprend. L'usage des assistants d'IA au travail fait l'objet de la <a href=\"/formations/ia-en-entreprise\">formation IA en entreprise</a>, et les usages propres aux comptables de la <a href=\"/formations/ia-comptables-syscohada\">formation IA pour comptables</a>."],
        ['q' => "À quel moment faut-il quitter le tableur pour un logiciel de gestion ?", 'r' => "Quand plusieurs personnes saisissent en même temps, que les mêmes informations sont recopiées dans plusieurs fichiers ou que le classeur sert de mémoire unique de l'entreprise. Le tableur sert alors à analyser les exports du logiciel, et la <a href=\"/formations/dolibarr-utilisateurs\">formation Dolibarr</a> ou la <a href=\"/formations/odoo-utilisateurs\">formation Odoo</a> prennent le relais."],
        ['q' => "Les bonnes habitudes tiennent-elles dans la durée ?", 'r' => "Elles tiennent quand la direction les applique elle-même : le fichier unique survit si le dirigeant cesse de demander des copies par WhatsApp. D'où la présence recommandée d'un responsable, la feuille « Lisez-moi » dans chaque classeur et la demi-journée de retour un mois plus tard."],
        ['q' => "La formation peut-elle être prise en charge par un fonds ?", 'r' => "Cela dépend du fonds et de votre situation. Le FDFP soumet par exemple les formations liées à l'utilisation de l'ordinateur à des dispositions particulières, et les fonds français exigent un prestataire certifié Qualiopi, ce que Richard SALANON n'est pas. Interrogez le fonds par écrit, avec le programme et le devis, avant de signer."],
    ],

    'sources' => [
        ['titre' => "Microsoft, spécifications et limites dans Excel", 'url' => 'https://support.microsoft.com/fr-fr/office/sp%C3%A9cifications-et-limites-dans-excel-1672b34d-7043-467e-8e27-269d656771c3', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, fonction RECHERCHEX", 'url' => 'https://support.microsoft.com/fr-fr/office/fonction-recherchex-b7fd680e-6d10-43e6-84f9-88eae8bf5929', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, protéger une feuille de calcul", 'url' => 'https://support.microsoft.com/fr-fr/office/prot%C3%A9ger-une-feuille-de-calcul-3179efdb-1285-4d49-a9c3-f4ca36276de6', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, Microsoft 365 Business Standard (offres et prix)", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/business/microsoft-365-business-standard', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Drive, fichiers que vous pouvez stocker dans Google Drive (limites de Google Sheets)", 'url' => 'https://support.google.com/drive/answer/37603?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google, protéger une plage ou une feuille dans Google Sheets", 'url' => 'https://support.google.com/docs/answer/1218656?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google, utiliser Google Docs, Sheets et Slides hors connexion", 'url' => 'https://support.google.com/docs/answer/6388102?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google Workspace, tarifs", 'url' => 'https://workspace.google.com/intl/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "The Register, article du 5 octobre 2020 sur les 15 841 cas de Covid-19 perdus dans un fichier .xls", 'url' => 'https://www.theregister.com/2020/10/05/excel_england_coronavirus_contact_error/', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, rapport Digital 2026 consacré au Bénin", 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => "ARCEP Bénin, passage des numéros de téléphone à 10 chiffres à partir du 30 novembre 2024", 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD, chapitre 2 : principes (article 5)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['microsoft-365-google-workspace', 'power-bi-looker-studio', 'sql-analystes', 'data-literacy', 'odoo-utilisateurs', 'cybersecurite-employes'],
        'services'    => ['digitalisation-d-entreprise', 'formation-en-entreprise', 'integration-dolibarr'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
