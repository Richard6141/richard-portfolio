<?php
// ============================================================
// data/formations/odoo-dirigeants.php · Fiche formation « Odoo pour
// dirigeants » (vague 1B, lot B, domaine erp-gestion). Angle propre : piloter
// avec Odoo 20.0 sans saisir (tableaux de bord, rapports, validations et
// approbations, droits, indicateurs de vente, de marge, de trésorerie et de
// stock). Aucune ancienne page.
// Sœurs non traitées : odoo-utilisateurs (gestes par poste),
// odoo-comptabilite-syscohada (tenue de la comptabilité OHADA), odoo-ia
// (fonctions IA), adoption-erp (projet), power-bi-looker-studio (tableaux de
// bord hors Odoo), crm-pipeline (méthode commerciale).
// Sources consultées le 05/10/2026 : documentation d'Odoo 20.0 (Dashboards,
// My Dashboard, Reporting, recherche et favoris, marges, prévision CRM,
// rapports comptables, budgets, tableaux de bord d'inventaire et d'achats,
// rapport de stock, règles d'approbation Studio, notes de frais, droits
// d'accès, e-mails récapitulatifs, application mobile), dépôt public d'Odoo
// (branche 20.0), page Tarification d'Odoo (fait vérifié du catalogue),
// ARCEP Bénin (T1 2026), loi n° 2017-20 (article 426), CNIL, FDFP, FODEFCA,
// 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Odoo pour dirigeants : lire vos tableaux de bord, suivre la marge, la trésorerie et le stock, et décider des validations et des droits dans Odoo 20.0, sans rien saisir",
    'title'   => "Formation Odoo pour dirigeants : piloter | Richard SALANON",
    'meta'    => "Formation Odoo pour dirigeants : tableaux de bord, marge, trésorerie, stock, validations et droits d'accès dans Odoo 20.0, sur vos chiffres, sans saisie.",
    'en_bref' => "Cette formation apprend aux dirigeants à piloter leur entreprise depuis Odoo 20.0 : lire les tableaux de bord, interroger les rapports de ventes, de marge, de trésorerie et de stock, régler les validations et décider qui voit quoi, sans jamais saisir une commande ni une écriture. Elle s'adresse aux gérants, directeurs généraux, directeurs financiers et commerciaux, seuls ou en comité de direction de quatre personnes au plus. Elle dure deux jours en quatre demi-journées, plus une séance de suivi de deux heures un mois après, dans vos locaux, à distance, en formule hybride ou en inter-entreprises. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => false,
    'duree'   => "2 jours en quatre demi-journées, plus 2 h de suivi un mois après",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : le poste de pilotage, de la question du dirigeant à l'écran qui y répond",
            'duree'  => '3 h 30',
            'points' => [
                "Les dix questions que vous posez chaque mois à votre équipe, relevées lors du cadrage, rangées par thème : ventes, marge, encaissements, dettes, stock, achats, personnes.",
                "L'application Dashboards : tableaux standard installés selon vos applications, panneau des sections, favoris, filtres globaux et période.",
                "Descendre d'un chiffre aux documents qui le composent : clic sur une valeur, clic sur le titre d'un graphique, retour par le fil d'Ariane.",
                "Vues pivot et graphique : mesures, regroupements en lignes et en colonnes, inversion des axes, export au format XLSX.",
                "Enregistrer une recherche en favori, la partager avec le comité de direction, et rassembler ses vues fétiches dans My Dashboard.",
                "Exercice : retrouver seul, en moins de cinq minutes, trois chiffres que vous demandiez jusqu'ici par téléphone.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : ventes, marge et prévisions commerciales",
            'duree'  => '3 h 30',
            'points' => [
                "Le rapport d'analyse des ventes et son filtre par défaut : commandes confirmées des 365 derniers jours, devis exclus. Ce que l'on compte, et ce que l'on oublie.",
                "La mesure de marge : réglage Marges, coût renseigné sur chaque article, formule de l'éditeur, marge par ligne, par commande, par famille et par vendeur.",
                "Les articles sans coût, qui affichent une marge égale au prix de vente : comment les repérer en une recherche.",
                "La prévision du CRM : opportunités regroupées par mois de clôture prévue, revenu attendu au prorata de la probabilité.",
                "Lire une remise ou une liste de prix dans la marge avant de l'autoriser.",
                "Exercice : préparer, sur vos chiffres, les trois écrans de votre prochaine réunion commerciale.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : encaissements, dettes, résultat et budget",
            'duree'  => '3 h 30',
            'points' => [
                "La synthèse de direction (Executive Summary) : marges brute et nette, délai moyen de paiement des clients et des fournisseurs, prévision de trésorerie à un mois, ratio de liquidité.",
                "Balances âgées des clients et des fournisseurs : qui doit quoi, depuis quand, et ce qu'un paiement non rapproché fait à ces listes.",
                "Compte de résultat, bilan et tableau des flux de trésorerie ; menu Comparaison pour opposer un trimestre au même trimestre de l'an passé.",
                "Budget financier posé sur le compte de résultat, budget analytique par projet ou par agence, montants engagés et réalisés.",
                "Le journal d'audit des modifications comptables : qui a changé quoi, et quand.",
                "Exercice : la revue de trésorerie du lundi, conduite par le dirigeant sur ses propres chiffres, en quinze minutes.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : stock, achats, validations et droits d'accès",
            'duree'  => '3 h 30',
            'points' => [
                "Le tableau Warehouse Metrics : valeur du stock disponible et réservé, lignes en stock négatif, stock âgé par date d'entrée.",
                "Le tableau d'analyse des achats et des fournisseurs : délai de réception, délai de confirmation, taux de service des fournisseurs.",
                "Les règles d'approbation de Studio : étapes, approbateurs, conditions, approbation exclusive, délégation pendant une absence.",
                "Les notes de frais à approuver, et les droits qu'il faut pour le faire.",
                "Lire les droits de chaque utilisateur : rôles, niveaux par application, visibilité des tableaux de bord par groupe, déconnexion après inactivité.",
                "Paramétrer l'e-mail récapitulatif périodique : indicateurs, fréquence, destinataires.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Revue de votre première revue mensuelle tenue dans Odoo : ce qui a servi, ce qui a manqué.",
                "Indicateurs à retirer parce qu'ils n'ont déclenché aucune décision, indicateurs à ajouter.",
                "Contrôle des validations réellement passées par le circuit, et des droits modifiés depuis la formation.",
                "Liste écrite des réglages à confier à l'intégrateur, séparée de ce que le référent ajuste seul.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en quatre demi-journées, plus 2 h de suivi"],
        ['l' => 'Public', 'v' => "Gérants, directeurs généraux, financiers et commerciaux, responsables de service"],
        ['l' => 'Formats', 'v' => "Intra, à distance, hybride ou inter"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire le dirigeant après la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "Dans beaucoup d'entreprises équipées d'Odoo, le dirigeant est le dernier à s'en servir. Ses équipes saisissent devis, réceptions et factures, mais lui continue de demander le chiffre d'affaires par message, la liste des impayés par courriel et l'état du stock au magasinier. Le logiciel contient pourtant ces réponses, souvent plus fraîches que celles qu'on lui transmet. Cette formation lui apprend à les trouver lui-même, à vérifier qu'elles sont justes et à agir à partir d'elles : valider, refuser, relancer, demander une explication documentée.",
                "Les objectifs se vérifient à la fin de chaque demi-journée, sur vos chiffres. Le dirigeant ouvre son tableau de bord et en filtre la période sans aide. Il obtient la marge par famille de produits et par vendeur, et sait dire pourquoi un article affiche cent pour cent de marge. Il lit la synthèse de direction et les balances âgées, compare un trimestre au précédent, suit un budget. Il repère le stock qui dort, juge la ponctualité d'un fournisseur, approuve ou refuse une demande dans Odoo, et explique qui, dans son entreprise, voit quels chiffres.",
                "La formation reste du côté de la lecture et de la décision. Les gestes de saisie de chaque poste relèvent de la formation <a href=\"/formations/odoo-utilisateurs\">Odoo pour vos équipes</a>, et la tenue du plan comptable, des journaux et des déclarations de la formation <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>. Les assistants et agents d'intelligence artificielle du logiciel ont leur fiche, <a href=\"/formations/odoo-ia\">Odoo et IA</a>. Les tableaux de bord construits hors d'Odoo, qui croisent plusieurs sources, sont traités dans la formation Tableaux de bord Power BI et Looker Studio, et la méthode de suivi des affaires dans CRM : pipeline commercial et reporting.",
                "Elle ne modifie pas non plus votre paramétrage. Si une mesure manque parce qu'une option n'est pas activée, si les coûts des articles sont vides ou si les droits sont à refaire, la séance le constate et le note ; la correction relève alors de votre intégrateur ou du service d'<a href=\"/services/integration-odoo\">intégration Odoo</a>. Le dirigeant repart en sachant ce qu'il doit exiger de sa base, pas en ayant appris à la reconfigurer.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Le groupe réunit ceux qui décident à partir des chiffres, rarement plus de quatre personnes. Une séance seul à seul avec le gérant est fréquente dans une PME, et souvent la plus efficace.",
            'items' => [
                ['titre' => "Le gérant ou le directeur général", 'texte' => "Il suit tout le parcours. Son objectif est simple à énoncer : ne plus attendre qu'on lui envoie ses chiffres, et savoir lesquels regarder chaque semaine pour décider à temps."],
                ['titre' => "Le directeur administratif et financier", 'texte' => "Il prépare avec le dirigeant la revue de trésorerie et le comité mensuel. La formation lui apprend à présenter les rapports d'Odoo plutôt qu'un classeur reconstitué, et à suivre un budget dans le logiciel."],
                ['titre' => "Le directeur commercial", 'texte' => "Il lit les ventes, la marge par vendeur et la prévision du CRM. Il apprend à préparer sa réunion d'équipe sur des favoris partagés, sans export ni retouche."],
                ['titre' => "Les responsables de service et d'agence", 'texte' => "Responsable des achats, chef de dépôt, directeur d'agence : ils pilotent un périmètre. Les deux demi-journées qui les concernent suffisent souvent, avec une attention particulière aux validations qu'ils reçoivent."],
                ['titre' => "Le référent Odoo", 'texte' => "Il assiste aux séances sans être le public principal. C'est lui qui dupliquera les tableaux de bord, ajustera les favoris partagés et tiendra la liste des indicateurs une fois le formateur parti."],
                ['titre' => "Prérequis", 'texte' => "Odoo doit être en service depuis au moins quelques semaines, avec des données réelles : on n'apprend pas à lire des écrans vides. Aucune connaissance technique n'est demandée ; savoir naviguer dans un navigateur suffit."],
                ['titre' => "Compte et droits", 'texte' => "Un compte nominatif pour chaque participant, avec des droits de lecture sur les applications concernées. Le compte administrateur partagé n'est pas un compte de dirigeant : la formation explique pourquoi dès la première matinée."],
                ['titre' => "Matériel", 'texte' => "Un ordinateur portable, idéalement relié à un second écran, et le téléphone sur lequel le dirigeant consultera ses chiffres en déplacement. L'application web progressive d'Odoo y est installée pendant la séance."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles questions de direction apprend-on à poser à Odoo, et où trouver la réponse ?",
            'legende' => "Correspondances établies à partir de la documentation d'Odoo 20.0, consultée le 5 octobre 2026. La colonne de droite indique ce qu'il faut vérifier avant de se fier au chiffre ; c'est le cœur de la formation.",
            'entetes' => ['Question du dirigeant', 'Où la réponse se trouve dans Odoo 20.0', 'À vérifier avant de croire le chiffre'],
            'lignes'  => [
                ["Combien avons-nous vendu ce mois, et par qui ?", "Analyse des ventes, vue pivot, regroupée par vendeur et par mois", "Le filtre par défaut ne retient que les commandes confirmées des 365 derniers jours : les devis en cours n'y sont pas."],
                ["Quelle marge sur quelle famille de produits ?", "Mesure Marge de l'analyse des ventes, une fois l'option Marges activée", "Chaque article doit porter son coût : sans coût, la marge affichée égale le prix de vente."],
                ["Que pouvons-nous espérer signer dans les prochains mois ?", "Rapport de prévision du CRM, par mois de clôture prévue", "Les dates de clôture et les probabilités sont tenues à jour par les commerciaux, sinon la prévision recopie leurs oublis."],
                ["Qui nous doit de l'argent, et depuis combien de temps ?", "Balance âgée des clients", "Un règlement encaissé mais non rapproché laisse la facture ouverte et gonfle la créance."],
                ["Combien de jours nos clients mettent-ils à payer ?", "Synthèse de direction : délai moyen clients et fournisseurs, prévision de trésorerie à court terme", "Les factures et les paiements du mois sont comptabilisés ; les brouillons ne comptent pas."],
                ["Le trimestre est-il meilleur que l'an dernier ?", "Compte de résultat avec le menu Comparaison, budget financier en colonne", "Les écritures de fin de période sont passées, sinon la comparaison oppose un trimestre clos à un trimestre incomplet."],
                ["Quel stock immobilise notre argent ?", "Tableau Warehouse Metrics : stock âgé, valeur réservée, stock négatif", "La valeur dépend de la méthode de valorisation retenue, et le tableau est réservé par défaut aux administrateurs de l'inventaire."],
                ["Nos fournisseurs livrent-ils à l'heure ?", "Tableau d'analyse des achats et des fournisseurs", "Les dates prévues des commandes fournisseurs sont renseignées, et les réceptions validées le jour où la marchandise arrive."],
                ["Qui a modifié cette écriture ?", "Rapport de journal d'audit de la comptabilité", "Chaque utilisateur travaille sous son propre compte ; un compte partagé rend la réponse inutile."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle, et quels exercices le dirigeant fait-il sur ses chiffres ?",
            'items' => [
                ['titre' => "Entretien de cadrage", 'duree' => "Une heure, en visioconférence", 'texte' => "Le dirigeant liste les questions qu'il pose chaque semaine et chaque mois, les décisions qu'il prend à partir des réponses, et les validations qu'il signe aujourd'hui sur papier ou par message. Cette liste remplace tout programme générique : elle fixe les écrans travaillés et l'ordre des séances."],
                ['titre' => "Lecture de la base", 'duree' => "Une demi-journée, avant la première séance", 'texte' => "Avec un accès en lecture, le formateur vérifie ce qui fausserait les chiffres : coûts d'articles vides, paiements non rapprochés, commandes restées en devis, dates de clôture absentes, droits trop larges. Le constat est remis par écrit, séparé en deux colonnes : ce qui se lit malgré tout, ce qu'il faut corriger avant."],
                ['titre' => "Le lundi matin", 'duree' => "45 minutes, jour 1", 'texte' => "Le dirigeant ouvre son tableau de bord, règle la période sur la semaine écoulée et répond seul à cinq questions tirées de son entretien : ventes, encaissements, livraisons en retard, commandes fournisseurs non reçues, factures échues."],
                ['titre' => "La réunion commerciale", 'duree' => "1 heure, jour 1", 'texte' => "Sur les commandes réelles du trimestre, il construit trois favoris partagés : ventes par vendeur, marge par famille, opportunités par mois de clôture. Il identifie ensuite, sans aide, la commande qui a fait baisser la marge du mois et la remise qui l'explique."],
                ['titre' => "La revue de trésorerie", 'duree' => "1 heure, jour 2", 'texte' => "À partir de la synthèse de direction et des balances âgées, il prépare la liste des dix clients à relancer en priorité et des fournisseurs à payer dans la quinzaine, puis la confronte au solde de ses comptes bancaires et Mobile Money."],
                ['titre' => "Le circuit de validation", 'duree' => "1 heure, jour 2", 'texte' => "Avec le référent, il décrit sur papier une validation qu'il veut voir passer par Odoo : seuil, approbateur, remplaçant en cas d'absence. Le groupe vérifie ensuite qu'elle se règle sur votre plan, et qui devra la mettre en place."],
                ['titre' => "Le comité mensuel", 'duree' => "Lors de la séance de suivi", 'texte' => "Un mois plus tard, le dirigeant conduit son comité à partir d'Odoo, sans classeur préparé à l'avance. Le formateur observe, puis l'on retire les indicateurs qui n'ont servi à aucune décision."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée avec des dirigeants qui manquent de temps ?",
            'intro' => "Un dirigeant n'apprend pas comme une équipe de saisie. Il retient ce qui répond à une question qu'il se pose déjà, et oublie le reste en une semaine. La méthode en tient compte à chaque séance.",
            'items' => [
                ['titre' => "Seul ou en tout petit comité", 'texte' => "Une à quatre personnes, qui partagent les mêmes décisions. Les chiffres montrés sont confidentiels, et l'on ne parle pas librement de la marge d'un vendeur devant ses collègues : la composition du groupe se décide au cadrage."],
                ['titre' => "Vos chiffres, jamais une société fictive", 'texte' => "Les exercices portent sur votre base réelle, en lecture. Rien n'est saisi ni modifié pendant les séances, sauf les favoris et les tableaux dupliqués qui serviront ensuite. Un engagement de confidentialité peut être signé avant la lecture de la base."],
                ['titre' => "Lire, douter, descendre", 'texte' => "Chaque chiffre affiché est soumis à la même routine : d'où vient-il, quel filtre l'a produit, quels documents le composent. Le dirigeant prend l'habitude de cliquer jusqu'aux pièces avant de convoquer quelqu'un."],
                ['titre' => "Un indicateur, une décision", 'texte' => "On ne garde un indicateur que si l'on sait quelle décision il déclenche et à partir de quel seuil. Les autres sont retirés, même s'ils sont jolis. La liste finale tient sur une page."],
                ['titre' => "Des séances placées dans l'agenda réel", 'texte' => "Les demi-journées s'espacent sur deux à trois semaines et évitent les périodes de clôture et de paie. À distance, elles se découpent en séances de deux heures, plus faciles à protéger des urgences."],
                ['titre' => "Des supports courts", 'texte' => "Une fiche d'une page pour la revue hebdomadaire, une autre pour le comité mensuel, le dictionnaire de vos indicateurs (définition, écran, filtre, seuil d'alerte, responsable) et la liste des droits relevés. Tout reste à l'entreprise, en version modifiable."],
                ['titre' => "Un suivi sur l'usage réel", 'texte' => "Un canal direct pendant le mois qui suit pour les questions de lecture, puis la séance de suivi, qui part de ce que le dirigeant a vraiment ouvert et décidé, pas de ses souvenirs de la formation."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles fonctions de pilotage selon l'édition et le plan d'Odoo, et à quel coût d'éditeur ?",
            'legende' => "Tarifs relevés sur la page Tarification d'Odoo (version française, lue dans un navigateur) le 5 octobre 2026, hors taxes et susceptibles de varier selon le pays ; présence des modules vérifiée le même jour dans le dépôt public de l'édition Community, branche 20.0. Odoo 20.0 est la dernière version, sortie en septembre 2026. Ces sommes sont dues à l'éditeur, jamais au formateur.",
            'entetes' => ['Édition ou formule', 'Ce que facture l\'éditeur', 'Ce que le dirigeant peut y piloter'],
            'lignes'  => [
                ['Odoo Community 20.0', "Licence libre, sans abonnement, à héberger soi-même", "Tableaux de bord standard de l'application Dashboards, My Dashboard, marges des ventes, e-mails récapitulatifs. Le dépôt ne contient ni le module des rapports comptables (synthèse de direction, balances âgées), ni Studio, ni Documents."],
                ['Une application gratuite', '0 €', "Une seule application, utilisateurs illimités : le pilotage se limite au périmètre de cette application."],
                ['Standard', "19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € ; en paiement mensuel, 24,90 €, puis 31,10 €", "Toutes les applications : rapports comptables de direction, budgets, tableaux de bord d'inventaire et d'achats, construction de tableaux de bord à partir de feuilles de calcul."],
                ['Personnalisé', "35,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 44,90 € ; en paiement mensuel, 44,90 €, puis 56,90 €", "Ajoute notamment Studio, qui porte les règles d'approbation et les indicateurs récapitulatifs sur mesure, et la gestion de plusieurs sociétés dans une même base."],
                ['Utilisateur léger', '7,90 € par utilisateur et par mois', "Selon la documentation des droits d'accès, ce rôle n'ouvre ni les ventes, ni les achats, ni la comptabilité : ce n'est pas un compte de dirigeant."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi un tableau de bord peut-il afficher un chiffre faux, et comment le dirigeant s'en aperçoit-il ?",
            'paragraphes' => [
                "Le premier piège tient aux droits. La documentation d'Odoo 20.0 sur les tableaux de bord précise qu'un tableau n'affiche que les données que l'utilisateur connecté a le droit de voir. Elle donne l'exemple d'un groupe limité à ses propres documents de vente : ses membres ouvrent bien le tableau des ventes, mais n'y voient que leurs propres affaires, ce qui rend l'ensemble trompeur. Un directeur commercial mal paramétré peut ainsi présenter en comité un chiffre partiel sans le savoir.",
                "Le deuxième tient aux données elles-mêmes. Un article vendu sans coût affiche une marge égale à son prix, puisque l'éditeur calcule la marge comme le prix de vente moins le coût. Un encaissement Mobile Money non rapproché laisse la facture parmi les créances. Une commande restée à l'état de devis disparaît de l'analyse des ventes, dont le filtre par défaut ne retient que les commandes confirmées. Aucun de ces défauts ne se voit sur le graphique ; tous se voient en descendant jusqu'aux documents.",
                "Le troisième tient à l'entretien des tableaux. Selon la même documentation, les tableaux de bord standard sont réinstallés à chaque mise à jour de version, et les modifications faites sur l'original sont alors perdues : l'éditeur recommande de dupliquer le tableau avant de le personnaliser. Dans une base qui regroupe plusieurs sociétés, un champ permet aussi de réserver un tableau à certaines d'entre elles ; laissé vide, le tableau reste visible quelle que soit la société sélectionnée.",
                "La formation installe donc trois réflexes. Avant de commenter un chiffre, cliquer dessus et regarder les documents. Avant de diffuser un tableau, l'ouvrir avec le compte de la personne qui le recevra. Avant de modifier un tableau standard, le dupliquer. Ces gestes prennent une minute et évitent les comités où chacun défend un chiffre différent.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles validations confier à Odoo, et comment rester maître du circuit ?",
            'intro' => "Beaucoup de dirigeants signent encore des bons de commande papier ou valident par message vocal. Odoo 20.0 permet de faire passer une partie de ces validations dans le logiciel, avec une trace ; encore faut-il choisir lesquelles.",
            'items' => [
                ['titre' => "Les règles d'approbation de Studio", 'texte' => "Selon la documentation d'Odoo 20.0, une règle s'attache à un bouton, par exemple celui qui confirme une commande. Elle désigne des approbateurs nommés ou un groupe, peut ne s'appliquer qu'à certaines conditions, et crée une activité pour chaque approbateur sollicité. Studio relève du plan Personnalisé sur Odoo Online."],
                ['titre' => "Plusieurs étapes, et des rôles séparés", 'texte' => "Une règle peut compter plusieurs étapes ordonnées. L'option d'approbation exclusive empêche qu'une même personne valide deux étapes d'un même document : c'est la séparation des tâches qu'attend tout contrôle interne."],
                ['titre' => "La délégation pendant une absence", 'texte' => "Un approbateur peut déléguer ses droits à un ou plusieurs utilisateurs jusqu'à une date choisie. Un dirigeant en déplacement ne bloque plus les achats, et la délégation laisse une trace au lieu d'un mot de passe prêté."],
                ['titre' => "La trace de chaque décision", 'texte' => "Les approbations et les refus sont consignés dans le fil du document, et une entrée d'approbation est créée à chaque action. Six mois plus tard, on retrouve qui a autorisé quoi, sans fouiller une messagerie."],
                ['titre' => "Les notes de frais", 'texte' => "La documentation précise que seuls les utilisateurs disposant au moins des droits d'approbateur d'équipe dans l'application Notes de frais peuvent les approuver ou les refuser, avec un motif. Le dirigeant décide qui détient ces droits."],
                ['titre' => "Le budget comme garde-fou", 'texte' => "Avec un budget analytique ouvert, une ligne de commande fournisseur qui dépasse le montant alloué s'affiche en rouge, et le montant engagé inclut les commandes confirmées non encore facturées. Le dépassement se voit avant la facture, pas après."],
                ['titre' => "Ce qui reste hors du logiciel", 'texte' => "Une validation par seuil ne remplace pas le jugement : un contrat stratégique, une embauche ou un investissement se décident en comité. Odoo garde la trace de la décision ; il ne la prend pas. La formation aide à tracer la frontière, circuit par circuit."],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Que vérifier chaque trimestre dans les droits d'accès de votre base ?",
            'items' => [
                "Chaque personne a son propre compte ; aucun identifiant n'est partagé entre deux salariés.",
                "Les comptes des personnes parties ont été archivés le jour de leur départ.",
                "Le nombre d'administrateurs se compte sur les doigts d'une main, et chacun sait pourquoi il l'est.",
                "Les vendeurs voient leurs propres affaires ou toutes, selon une décision prise et notée, pas par défaut.",
                "Les tableaux de bord de direction sont réservés aux groupes qui ont le droit d'en voir toutes les données.",
                "Les droits d'approbation des achats et des notes de frais correspondent à l'organigramme actuel.",
                "Une déconnexion après inactivité est réglée pour les comptes qui voient les chiffres sensibles, quand le module correspondant est installé.",
                "Les liens de partage d'instantanés de tableaux de bord envoyés à l'extérieur ont été recensés.",
                "La revue est datée, signée par le dirigeant et conservée.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon l'entreprise, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Distribution de boissons, à Cotonou", 'probleme' => "Le gérant juge la rentabilité de ses gammes au jugé : Odoo affiche des marges de cent pour cent sur une partie des références, et personne ne sait lesquelles croire.", 'solution' => "Recherche des articles sans coût dès la lecture de la base, correction confiée au référent, puis marge par famille et par client grossiste en favori partagé, et balance âgée des revendeurs revue chaque lundi."],
                ['secteur' => "Groupe de deux sociétés, à Abidjan et à Ouagadougou", 'probleme' => "Le directeur général consulte ses chiffres depuis la société d'Abidjan et croit voir le groupe ; le directeur de la filiale burkinabè présente d'autres totaux en comité.", 'solution' => "Lecture des tableaux par société, champ de société réglé sur chaque tableau dupliqué, comparaison des deux comptes de résultat et favoris distincts pour chaque directeur."],
                ['secteur' => "Entreprise de travaux, à Dakar", 'probleme' => "Les dépassements de chantier se découvrent à la facture finale, quand il est trop tard pour renégocier.", 'solution' => "Budget analytique par chantier, suivi des montants engagés et réalisés, lignes de commande en dépassement repérées avant confirmation, et règle d'approbation au-delà d'un seuil décidé par la direction."],
                ['secteur' => "Négoce de pièces détachées, à Douala", 'probleme' => "La trésorerie est tendue alors que le magasin est plein, et chaque inventaire révèle des références négatives.", 'solution' => "Tableau Warehouse Metrics pour le stock âgé et les lignes négatives, analyse des fournisseurs pour les délais de réception, puis décision de déstockage prise sur la liste des articles immobilisés."],
                ['secteur' => "Société de services, à Lyon ou à Bruxelles", 'probleme' => "La dirigeante passe chaque vendredi à reconstituer un tableau dans un classeur à partir d'exports d'Odoo.", 'solution' => "Synthèse de direction et prévision du CRM lues directement, e-mail récapitulatif hebdomadaire envoyé aux trois associés, et abandon du classeur à la date choisie en comité."],
                ['secteur' => "ONG multi-projets, à Niamey", 'probleme' => "Chaque bailleur demande un état de consommation de son budget, préparé à la main par le responsable financier.", 'solution' => "Budgets analytiques par projet, revue mensuelle des montants réalisés par la direction, et droits de lecture limités pour les coordinateurs de chaque projet."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Seul, en comité de direction, à distance ou en inter : quel format choisir pour un dirigeant ?",
            'legende' => "Le format se choisit au cadrage, selon le nombre de décideurs, la confidentialité des chiffres et l'agenda. Dans les formats intra, les exercices portent sur votre base en lecture.",
            'entetes' => ['Format', 'Pour qui', 'Déroulement', 'Point d\'attention'],
            'lignes'  => [
                ['Intra, en tête-à-tête', "Le gérant d'une PME, ou un dirigeant qui veut poser ses questions sans témoin", "Quatre demi-journées dans votre bureau, puis la séance de suivi", "Protéger les créneaux des urgences du quotidien"],
                ['Intra, comité de direction', "Deux à quatre décideurs qui partagent les mêmes chiffres", "Tronc commun de lecture, puis une demi-journée par fonction si besoin", "Décider avant la séance qui peut voir la marge par vendeur"],
                ['À distance', "Dirigeants souvent en déplacement, filiales dans plusieurs pays, entreprises en Europe ou au Canada", "Six séances de deux heures en visioconférence, avec partage d'écran", "Une connexion stable et un second écran"],
                ['Hybride', "Équipes de direction qui veulent un lancement commun", "Première journée sur place, suite et suivi à distance", "Tenir le calendrier des séances à distance"],
                ['Inter-entreprises', "Dirigeants de petites structures, ou membres d'un même réseau", "Base de démonstration commune, puis une heure individuelle sur la base de chacun", "Aucune donnée d'entreprise montrée devant les autres participants"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, après l'entretien de cadrage. Le premier échange, le cadrage et le devis sont gratuits, avec une réponse sous 24 heures.",
            'items'      => [
                ['offre' => "Cadrage", 'prix' => 'Gratuit', 'inclus' => ["Entretien d'une heure avec le dirigeant", "Liste de ses questions et de ses validations", "Proposition écrite et devis"]],
                ['offre' => "Formation des dirigeants", 'prix' => 'Sur devis', 'inclus' => ["Lecture préalable de la base", "Quatre demi-journées sur vos chiffres", "Fiches de revue hebdomadaire et mensuelle", "Dictionnaire des indicateurs et relevé des droits"]],
                ['offre' => "Suivi à un mois", 'prix' => 'Sur devis', 'inclus' => ["Séance de deux heures à distance", "Revue du premier comité tenu dans Odoo", "Liste des réglages à confier à l'intégrateur"]],
            ],
            'variations' => [
                "Le nombre de décideurs formés et le choix entre tête-à-tête et comité de direction.",
                "L'état de la base : des coûts manquants ou des droits à reprendre allongent la lecture préalable, et leur correction se chiffre à part.",
                "Le nombre de sociétés réunies dans la base et de tableaux de bord à dupliquer pour chacune.",
                "Le lieu des séances : vos bureaux à Cotonou, une autre ville ou un autre pays, ou la visioconférence.",
                "La langue des séances et des supports, en français ou en anglais.",
                "Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; l'abonnement à Odoo reste à régler à l'éditeur.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il prendre en charge la formation d'un dirigeant ?",
            'paragraphes' => [
                "C'est au fonds de répondre, et rien n'est promis ici. En Côte d'Ivoire, la page du FDFP sur le plan de formation, consultée le 5 octobre 2026, réserve ce plan aux entreprises qui justifient du paiement régulier de leurs deux taxes de formation, et classe les actions liées à l'usage de l'ordinateur parmi celles qui suivent des dispositions particulières. Au Bénin, les statuts du FODEFCA ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Au Sénégal, le 3FPT affiche un guichet réservé au personnel des entreprises et aux membres des organisations professionnelles.",
                "En France, France Compétences indique que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés. Richard SALANON ne détient ni cette certification ni l'agrément d'un fonds africain. Posez donc la question par écrit, programme et devis en main, avant de signer, et prévoyez le budget comme si la prise en charge était refusée. Le programme, les feuilles de présence et la grille d'évaluation remis à la fin aident à constituer le dossier quand il est recevable.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quelle habitude de dirigeant fausse tout le pilotage dès la première semaine ?",
            'texte' => "Piloter avec le compte administrateur. Il voit tout, ce qui masque les droits mal réglés : le tableau semble juste pour le dirigeant, alors que son directeur commercial, avec ses propres droits, en voit un autre. Il peut aussi tout modifier, et une correction faite « pour aller vite » dans une commande ou une écriture efface la responsabilité de celui qui l'avait saisie. La documentation d'Odoo 20.0 sur les droits d'accès rappelle qu'une erreur de réglage peut aller jusqu'à priver la base de tout administrateur capable de la corriger. Le dirigeant a donc un compte nominatif de lecture et de validation, et l'administration reste au référent.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "Elles apparaissent quand l'enthousiasme des séances retombe et que l'agenda reprend ses droits. Chacune a sa parade, travaillée avant la fin de la formation.",
            'items' => [
                ['titre' => "Vingt indicateurs au lieu de six", 'texte' => "Un tableau chargé ne se lit plus en dix minutes, donc il ne se lit plus du tout. On s'en tient aux indicateurs du dictionnaire, chacun relié à une décision et à un seuil."],
                ['titre' => "Regarder sans décider", 'texte' => "Ouvrir son tableau chaque lundi n'a d'intérêt que si quelque chose en sort : une relance, une question, une validation. La fiche de revue hebdomadaire se termine par trois actions datées."],
                ['titre' => "Redemander l'export « pour vérifier »", 'texte' => "Dès que le dirigeant réclame un classeur, l'équipe comprend que les chiffres d'Odoo ne font pas foi. Une question sur un chiffre se pose en ouvrant les documents ensemble, dans le logiciel."],
                ['titre' => "Comparer des périodes qui ne se comparent pas", 'texte' => "Un mois en cours face à un mois clos, un trimestre avec et sans les écritures de fin de période : la comparaison ment. On compare des périodes closes, ou l'on précise ce qui manque."],
                ['titre' => "Valider sans lire", 'texte' => "Une approbation demandée vingt fois par jour finit cliquée par réflexe. Le seuil se règle pour que le dirigeant ne voie que ce qui mérite son regard, et le reste se délègue."],
                ['titre' => "Oublier les droits d'un partant", 'texte' => "Un commercial parti avec son accès conserve la vue sur les clients et la marge. Le départ d'un salarié déclenche l'archivage de son compte le jour même, sous la responsabilité de la direction."],
                ['titre' => "Envoyer le récapitulatif à tout le monde", 'texte' => "Par défaut, l'e-mail récapitulatif d'Odoo part chaque jour aux administrateurs. Avant d'y ajouter des destinataires, on choisit les indicateurs qu'ils peuvent légitimement recevoir."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion mobile, langue, confidentialité des chiffres : que change le contexte local ?",
            'paragraphes' => [
                "Un dirigeant consulte souvent ses chiffres sur son téléphone, entre deux rendez-vous. Au Bénin, l'Observatoire de l'internet de l'ARCEP recense 11 560 567 abonnements actifs à l'internet mobile au premier trimestre 2026, quand le parc fixe plafonne à 128 222 abonnements, soit 0,95 % de pénétration. La documentation d'Odoo 20.0 recommande l'application web progressive plutôt que les applications des magasins : elle s'installe depuis le navigateur, s'ouvre depuis l'écran d'accueil et reçoit les notifications. La formation l'installe sur le téléphone du dirigeant et vérifie que ses tableaux restent lisibles sur petit écran.",
                "Les chiffres de direction sont parmi les plus sensibles de l'entreprise, et les données personnelles s'y mêlent : clients, salariés, notes de frais. Au Bénin, l'article 426 de la loi n° 2017-20 portant code du numérique impose au responsable du traitement des mesures techniques et organisationnelles contre l'accès non autorisé, et une procédure pour tester et évaluer régulièrement leur efficacité. Le relevé trimestriel des droits de la formation en est une application concrète, signée par le dirigeant.",
                "En Europe, la CNIL recommande de définir des profils d'habilitation qui séparent les tâches, de faire valider chaque demande d'accès par un responsable et de revoir les habilitations au moins une fois par an, pour supprimer les comptes inutilisés et réaligner les droits sur les fonctions. Le lien de partage d'un instantané de tableau de bord mérite la même prudence : la documentation d'Odoo le présente comme un moyen de montrer une version figée à une personne extérieure, ce qui revient à sortir les chiffres de la base.",
                "Les séances se font en français, avec les libellés de votre interface, et peuvent se tenir en anglais pour un associé ou un actionnaire qui le demande. Les montants restent dans la devise de chaque société : franc CFA, euro ou dollar canadien. Pour les groupes qui pilotent des filiales dans plusieurs pays, le cadrage vérifie d'abord dans quelle devise chaque tableau consolide ses totaux.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à piloter avec Odoo auprès de Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il voit les deux côtés d'une base Odoo : celui des équipes qui saisissent et celui de la direction qui attend des chiffres fiables. Fort de " . $ans . " ans d'expérience dans le numérique et formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déploie Odoo et Dolibarr, travaille l'OHADA et le SYSCOHADA dans les logiciels de gestion et accompagne la digitalisation d'entreprises. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Selon ses propres déclarations, il a formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Ses missions l'ont conduit dans " . count((array) fait('pays_travailles')) . " pays, du Bénin à la RD Congo et de la France au Canada. Il n'est ni partenaire ni certifié de l'éditeur d'Odoo, et le dit : sa formation des dirigeants repose sur des bases réelles et sur ce qu'un chef d'entreprise en attend, pas sur une démonstration commerciale. Il s'engage sur des points vérifiables : une réponse sous 24 heures, un cadrage gratuit, des séances sur vos chiffres, des supports qui restent chez vous, et un avis franc quand la base doit être corrigée avant d'être lue. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de piloter votre entreprise depuis Odoo ?",
            'texte' => "Partez de vos questions, pas des écrans. Vérifiez qu'un chiffre est juste en descendant jusqu'aux documents, gardez six indicateurs reliés chacun à une décision, dupliquez avant de personnaliser, validez dans le logiciel plutôt que par message, pilotez avec un compte nominatif et relisez les droits chaque trimestre. Les autres formations du domaine figurent sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>, et la feuille de route d'ensemble se construit avec la formation <a href=\"/formations/strategie-transformation-digitale\">Stratégie de transformation digitale</a>.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous lire vous-même les chiffres de votre entreprise dans Odoo ?",
            'texte'  => "Indiquez votre version d'Odoo, votre plan, le nombre de sociétés dans la base et les questions que vous posez chaque semaine à votre équipe : vous recevez une réponse sous 24 heures et une proposition de cadrage gratuit.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un cadrage'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il savoir se servir d'Odoo pour suivre la formation ?", 'r' => "Non. Savoir naviguer dans un navigateur suffit : la formation n'apprend aucun geste de saisie, seulement à lire, à filtrer, à descendre jusqu'aux documents et à valider. Les gestes de chaque poste relèvent de la formation Odoo pour vos équipes."],
        ['q' => "Notre Odoo démarre à peine : est-ce le bon moment ?", 'r' => "Mieux vaut attendre quelques semaines de données réelles, souvent deux à trois mois après le démarrage. Avant, les tableaux sont presque vides et l'on apprend à lire des écrans sans histoire. Le cadrage peut en revanche avoir lieu tout de suite, pour fixer les indicateurs attendus."],
        ['q' => "Les tableaux de bord existent-ils dans Odoo Community ?", 'r' => "Oui pour les tableaux standard de l'application Dashboards, My Dashboard, les marges et les e-mails récapitulatifs, dont les modules figurent dans le dépôt public de la branche 20.0. Les rapports comptables de direction, Studio et Documents n'y sont pas : ils relèvent des formules payantes de l'éditeur."],
        ['q' => "Peut-on créer nos propres tableaux de bord ?", 'r' => "Oui, à partir d'une feuille de calcul Odoo convertie en tableau de bord. Selon la documentation d'Odoo 20.0, il faut pour cela les droits d'administration des tableaux de bord et au moins les droits d'utilisateur de l'application Documents. La formation montre comment dupliquer un tableau standard ; la construction complète revient au référent."],
        ['q' => "Le dirigeant peut-il consulter ses chiffres sur son téléphone ?", 'r' => "Oui. La documentation d'Odoo recommande l'application web progressive, installée depuis le navigateur du téléphone. Elle est installée pendant la formation, et l'on vérifie que les tableaux choisis restent lisibles sur un petit écran."],
        ['q' => "Peut-on recevoir ses indicateurs par e-mail, sans ouvrir Odoo ?", 'r' => "Oui, avec l'e-mail récapitulatif périodique : chiffre d'affaires, ventes, opportunités gagnées, mouvements de banque et de caisse, entre autres. Sa fréquence va du quotidien au trimestriel, et les destinataires se choisissent un par un. Des indicateurs sur mesure demandent Studio, donc un coût d'abonnement supplémentaire."],
        ['q' => "Les validations d'achats peuvent-elles passer par Odoo ?", 'r' => "Oui, notamment avec les règles d'approbation de Studio, qui s'attachent à un bouton et désignent les approbateurs, les conditions et l'ordre des étapes. Sur Odoo Online, Studio relève du plan Personnalisé : le cadrage vérifie votre plan avant de promettre un circuit."],
        ['q' => "Nos chiffres restent-ils confidentiels pendant la formation ?", 'r' => "Oui. Le formateur travaille avec un accès en lecture limité à la durée de la mission, un engagement de confidentialité peut être signé avant la lecture de la base, et en inter-entreprises seule une base de démonstration est montrée devant les autres participants."],
        ['q' => "Combien de temps faut-il bloquer dans l'agenda ?", 'r' => "Quatre demi-journées de 3 h 30, espacées sur deux à trois semaines, puis une séance de suivi de deux heures un mois plus tard. À distance, le parcours se découpe en séances de deux heures."],
        ['q' => "En quoi cette formation diffère-t-elle d'une formation Power BI ?", 'r' => "Elle se passe entièrement dans Odoo : tableaux, rapports, validations et droits de votre base. Quand les chiffres sont répartis entre Odoo, des classeurs et d'autres logiciels, la formation Tableaux de bord Power BI et Looker Studio apprend à les réunir dans un outil séparé."],
        ['q' => "Combien coûte la formation ?", 'r' => "Elle est chiffrée sur devis, après un cadrage gratuit. Le prix dépend du nombre de décideurs, de l'état de la base, du nombre de sociétés, du lieu et de la langue. L'abonnement à Odoo se règle à l'éditeur et ne figure pas dans le devis."],
        ['q' => "Un fonds peut-il financer la formation ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'est pas certifié Qualiopi et n'a l'agrément d'aucun fonds : interrogez le fonds par écrit avant de signer."],
    ],

    'sources' => [
        ['titre' => "Odoo 20.0, documentation : application Dashboards (utilisation, filtres globaux, accès et partage)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/dashboards.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : My Dashboard", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/dashboards/my_dashboard.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : rapports, vues pivot et graphique (Reporting)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/essentials/reporting.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : rechercher, filtrer, regrouper et enregistrer des favoris", 'url' => 'https://www.odoo.com/documentation/20.0/applications/essentials/search.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : marges des ventes (Margins)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/sales/sales_quotations/margin.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : rapport de prévision du CRM (Forecast report)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/crm/performance/forecast_report.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : rapports comptables (Executive Summary, balances âgées, flux de trésorerie, journal d'audit)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/reporting.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : budgets analytiques et financiers", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/reporting/budget.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : tableaux de bord de l'inventaire (Warehouse Metrics)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/warehouses_storage/reporting/dashboards.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : tableau d'analyse des achats et des fournisseurs", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/purchase/advanced/purchase_dashboard.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : rapport de stock", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/warehouses_storage/reporting/stock.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : règles d'approbation de Studio", 'url' => 'https://www.odoo.com/documentation/20.0/applications/studio/approval_rules.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : traitement et approbation des notes de frais", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/expenses/approve_expenses.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : droits d'accès, rôles et déconnexion après inactivité", 'url' => 'https://www.odoo.com/documentation/20.0/applications/general/users/access_rights.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : e-mails récapitulatifs (Digest emails)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/general/companies/digest_emails.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : applications mobiles et application web progressive", 'url' => 'https://www.odoo.com/documentation/20.0/administration/mobile.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, dépôt public de l'édition Community, branche 20.0 (modules spreadsheet_dashboard, board, sale_margin, digest)", 'url' => 'https://github.com/odoo/odoo/tree/20.0/addons', 'date' => '2026-10-05'],
        ['titre' => "ARCEP Bénin, Observatoire de l'internet, tableau de bord du premier trimestre 2026", 'url' => 'https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T1_2026_TaB.pdf', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 426)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, sécurité : gérer les habilitations", 'url' => 'https://www.cnil.fr/fr/securite-gerer-les-habilitations', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'odoo-comptabilite-syscohada', 'odoo-ia', 'power-bi-looker-studio', 'crm-pipeline', 'adoption-erp'],
        'services'    => ['integration-odoo'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
