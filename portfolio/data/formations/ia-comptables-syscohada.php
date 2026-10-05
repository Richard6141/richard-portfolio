<?php
// ============================================================
// data/formations/ia-comptables-syscohada.php · Fiche formation « IA pour
// comptables (SYSCOHADA) » (vague 1B, lot A, domaine intelligence-artificielle).
// Angle propre : usages de l'IA par les comptables en zone OHADA, pour la
// saisie, le rapprochement, l'analyse et les contrôles avant clôture. Ne traite
// ni la comptabilité dans Odoo (odoo-comptabilite-syscohada), ni l'audit
// (ia-audit-controle), ni l'usage général des assistants (ia-en-entreprise).
// Aucune ancienne page. Faits externes lus le 05/10/2026 : texte de l'Acte
// uniforme relatif au droit comptable et à l'information financière
// (articles 5, 8, 13, 16, 17, 22, 23, 24, 111-1, 113), pages OHADA (États
// membres, règlement n° 01/2017/CM/OHADA), code d'éthique OHADA (section 140),
// loi béninoise n° 2022-35, ordonnance française n° 45-2138 (article 21),
// article 226-13 du code pénal, loi n° 2017-20 (définition de l'État tiers,
// article 460), RGPD (article 28), e-MECeF, FNE, tarifs OpenAI, Anthropic,
// Microsoft, Ollama, FDFP, FODEFCA, France Compétences. Richard n'est ni
// expert-comptable ni certifié par un éditeur : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA pour comptables SYSCOHADA : préparer la saisie des pièces, rapprocher les comptes, analyser la balance et contrôler la clôture avec l\'IA, en gardant la main sur chaque écriture',
    'title'   => 'Formation IA pour comptables SYSCOHADA | Richard SALANON',
    'meta'    => 'Formation IA pour comptables en zone OHADA : saisie des pièces, rapprochement, analyse et contrôles, dans le respect du SYSCOHADA et du secret. Sur devis.',
    'en_bref' => 'Cette formation apprend aux comptables, aides-comptables, collaborateurs de cabinet et responsables financiers de la zone OHADA à se servir de l\'intelligence artificielle pour préparer la saisie des pièces, rapprocher banque et Mobile Money, analyser une balance et contrôler un dossier avant clôture, sans jamais laisser l\'outil valider une écriture. Elle s\'appuie sur l\'Acte uniforme relatif au droit comptable et sur les règles de confidentialité de la profession. Elle dure deux jours, en quatre demi-journées, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : ce que le droit comptable OHADA permet de confier à l\'IA, et les données qui ne sortent pas',
            'duree'  => '3 h 30',
            'points' => [
                'Lecture commentée des articles 17, 22 et 24 de l\'Acte uniforme : pièce justificative, origine et imputation de chaque écriture, validation définitive, clôture informatique, conservation pendant dix ans.',
                'Ce qu\'un modèle de langage fait bien (lire, classer, rédiger, écrire une formule) et ce qu\'il fait mal (calculer de tête, connaître la dernière loi de finances, deviner un plan de comptes).',
                'Le principe de confidentialité du code d\'éthique OHADA appliqué aux outils : quels fichiers d\'un dossier client peuvent être soumis, lesquels s\'anonymisent, lesquels restent au cabinet.',
                'Atelier d\'anonymisation sur un export réel : noms de tiers, numéros d\'identification fiscale, salaires et comptes bancaires remplacés par des codes, table de correspondance gardée hors de l\'outil.',
                'Choix de l\'environnement de travail : compte professionnel sans entraînement sur les données, ou modèle installé sur un poste du cabinet pour les dossiers les plus sensibles.',
                'Inventaire, par participant, des trois tâches qui lui prennent le plus de temps à chaque fin de mois.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : préparer la saisie à partir des pièces',
            'duree'  => '3 h 30',
            'points' => [
                'Extraire d\'une facture, d\'un reçu ou d\'un ticket photographié la date, le fournisseur, son identifiant fiscal, le hors taxes, la taxe, le toutes taxes et le numéro de pièce, dans un tableau.',
                'Lire les mentions propres aux factures normalisées (codes MECeF/DGI au Bénin, sticker électronique de la FNE en Côte d\'Ivoire) et les reporter comme référence de pièce.',
                'Fournir à l\'outil le plan de comptes de l\'entité et l\'historique de ses imputations, au lieu de le laisser proposer des comptes de mémoire.',
                'Construire une table de correspondance fournisseur, nature de dépense et compte, appliquée ensuite par une formule de tableur ; l\'IA ne traite que les cas nouveaux.',
                'Produire un fichier d\'import au format du logiciel comptable (journal, date, compte, libellé, débit, crédit, pièce) et vérifier l\'équilibre avant tout import.',
                'Exercice : trente pièces d\'un mois réel, anonymisées, traitées puis contrôlées par un binôme.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : rapprocher la banque, le Mobile Money et les comptes de tiers',
            'duree'  => '3 h 30',
            'points' => [
                'Mettre en forme des relevés hétérogènes : PDF de banque, export CSV d\'un opérateur de Mobile Money, relevé de caisse tenu sur cahier puis photographié.',
                'Faire écrire par l\'assistant les formules ou les étapes Power Query du rapprochement (montant identique, fenêtre de dates, référence partielle), puis les exécuter dans le tableur.',
                'Traiter les cas difficiles : frais prélevés sur chaque transaction, paiements groupés, encaissements partiels, opérations en devises.',
                'Lister les suspens et les écarts, avec leur ancienneté, sans jamais forcer un rapprochement pour obtenir un solde nul.',
                'Lettrage des comptes clients et fournisseurs, balance âgée, projet de relance rédigé et relu.',
                'Exercice : rapprochement complet d\'un mois de banque et d\'un mois de Mobile Money.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : analyser la balance, contrôler le dossier, puis évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Revue analytique d\'une balance N et N-1 : variations au-delà d\'un seuil choisi par le comptable, questions à poser, explications à obtenir.',
                'Contrôles de cohérence avant clôture : soldes anormaux (caisse créditrice, client créditeur), comptes d\'attente non soldés, doublons de factures, trous dans la numérotation.',
                'Premier jet du commentaire de gestion et des notes annexes à partir de chiffres déjà validés, chaque montant étant retrouvé dans la balance.',
                'Liste de clôture propre au dossier, avec ce que l\'IA prépare et ce que le comptable signe.',
                'Évaluation : chaque participant traite seul un mini-dossier, de la pièce au contrôle, avec ses consignes et ses vérifications écrites.',
                'Mode opératoire par tâche, bibliothèque de consignes comptables et plan d\'usage pour la prochaine clôture mensuelle.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées'],
        ['l' => 'Public', 'v' => 'Comptables, aides-comptables, collaborateurs de cabinet et responsables financiers de la zone OHADA'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 8 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Un comptable passe une grande partie de son mois à recopier : des montants de factures vers un journal, des lignes de relevé vers un tableur de rapprochement, des soldes vers un commentaire de gestion. C\'est précisément le travail que l\'intelligence artificielle sait préparer. Mais en comptabilité, une erreur recopiée devient une écriture, et une écriture validée ne se supprime plus. La formation part de cette contrainte : l\'IA prépare, le comptable contrôle et valide, et la trace de ce partage reste lisible pour un réviseur.',
                'À la fin des deux jours, chaque participant sait, seul : anonymiser un export comptable avant de le soumettre ; transformer un lot de pièces en tableau de saisie conforme à son plan de comptes ; produire un fichier d\'import équilibré ; rapprocher un mois de banque et de Mobile Money en listant les suspens ; lettrer un compte de tiers ; repérer dans une balance les variations et les soldes qui appellent une question ; rédiger un premier jet de commentaire dont chaque chiffre est retrouvé dans la balance. L\'évaluation finale vérifie ces gestes sur un mini-dossier.',
                'La formation ne paramètre aucun logiciel. La tenue de la comptabilité OHADA dans Odoo, avec ses journaux, ses taxes et ses états, fait l\'objet de la formation <a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>. Elle n\'est pas non plus une formation d\'auditeur : l\'échantillonnage et la traçabilité d\'une mission de contrôle ont leur propre formation, reliée en bas de page. Les bases de l\'usage quotidien d\'un assistant, pour rédiger ou résumer, sont enseignées dans la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>.',
                'Elle n\'enseigne pas davantage la comptabilité. Les participants connaissent le SYSCOHADA révisé, ses comptes et ses états financiers ; la formation leur apprend à faire travailler un outil sur ce qu\'ils savent déjà juger. Enfin, elle ne promet aucun gain de temps chiffré à l\'avance : il dépend de la qualité des pièces, du logiciel en place et de la régularité de l\'usage. Chaque participant mesure le temps de ses trois tâches avant la session, puis à la clôture suivante.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quel niveau et quel matériel ?',
            'intro' => 'La formation vise des personnes qui tiennent, révisent ou pilotent une comptabilité soumise au SYSCOHADA. Aucune compétence en programmation n\'est demandée ; la maîtrise du tableur et du plan de comptes, si.',
            'items' => [
                ['titre' => 'Comptables et aides-comptables d\'entreprise', 'texte' => 'Dans une PME, le service comptable compte souvent une à trois personnes qui saisissent, rapprochent et préparent la clôture. Ce sont elles qui gagnent le plus à automatiser la préparation, et elles qui connaissent les pièces et leurs pièges.'],
                ['titre' => 'Collaborateurs de cabinets d\'expertise comptable', 'texte' => 'Un cabinet traite des dizaines de dossiers aux pièces très diverses. La formation y insiste sur la séparation des dossiers, l\'anonymisation et le secret, et sur des méthodes réutilisables d\'un client à l\'autre.'],
                ['titre' => 'Chefs comptables et responsables financiers', 'texte' => 'Ils décident de ce que l\'équipe peut confier à un outil et relisent le résultat. La dernière demi-journée, consacrée à l\'analyse de la balance et aux contrôles, leur est particulièrement utile.'],
                ['titre' => 'Le niveau attendu', 'texte' => 'Savoir passer une écriture SYSCOHADA, lire une balance et un grand livre, utiliser les filtres, les tris et les formules de recherche d\'un tableur. Un test court avant la session vérifie ce niveau et permet de prévoir une heure de remise à niveau sur le tableur.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur portable par participant, avec Excel ou LibreOffice Calc et un navigateur à jour. Un téléphone suffit pour photographier des pièces, pas pour rapprocher un relevé. Les exports du logiciel comptable de l\'entreprise sont préparés à l\'avance.'],
                ['titre' => 'Les données d\'exercice', 'texte' => 'Un mois de pièces, un relevé bancaire, un relevé de Mobile Money, une balance N et N-1 et le plan de comptes de l\'entité. Tout est anonymisé avant la session, avec le formateur si nécessaire ; à défaut, un jeu de données fictif reproduit leur structure.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices fait-on, et que vérifie le comptable à chaque fois ?',
            'legende' => 'Exercices construits sur les pièces et les exports de l\'entreprise, anonymisés. La dernière colonne décrit le contrôle que le participant apprend à faire lui-même avant que le résultat ne serve.',
            'entetes' => ['Tâche comptable', 'Données de départ', 'Ce que l\'IA prépare', 'Ce que le comptable contrôle et valide'],
            'lignes'  => [
                ['Saisie des achats', 'Factures fournisseurs scannées ou photographiées, factures normalisées', 'Tableau des pièces, imputation proposée d\'après le plan de comptes fourni, fichier d\'import', 'Total des pièces égal au total importé, compte retenu pour chaque nouveau fournisseur, taux de taxe, référence de la pièce sur chaque ligne'],
                ['Saisie des ventes', 'Export de facturation, reçus de caisse', 'Écritures de ventes regroupées par jour et par taxe', 'Continuité de la numérotation des factures, ventes annulées et avoirs, concordance avec le chiffre d\'affaires déclaré'],
                ['Rapprochement bancaire', 'Relevé PDF de la banque, grand livre du compte de banque', 'Formules ou étapes de rapprochement, liste des opérations non rapprochées', 'Chaque suspens expliqué, aucun rapprochement forcé, solde rapproché égal au solde du relevé'],
                ['Mobile Money', 'Export de l\'opérateur, encaissements clients', 'Ventilation des encaissements, des frais et des retraits', 'Frais comptabilisés à part, encaissements rattachés au bon client, écart de fin de mois justifié'],
                ['Lettrage des tiers', 'Grand livre clients ou fournisseurs', 'Proposition de lettrage, balance âgée, projet de relance', 'Factures partiellement payées, avances, soldes créditeurs inhabituels'],
                ['Revue de la balance', 'Balances N et N-1', 'Liste des variations significatives, questions à poser, premier jet de commentaire', 'Chaque chiffre du commentaire retrouvé dans la balance, seuil de variation fixé par le comptable et non par l\'outil'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que dit l\'Acte uniforme relatif au droit comptable, et qu\'est-ce que cela change pour l\'IA ?',
            'legende' => 'Articles de l\'Acte uniforme relatif au droit comptable et à l\'information financière, adopté à Brazzaville le 26 janvier 2017, lus le 5 octobre 2026 dans la bibliothèque numérique de l\'OHADA. La dernière colonne est la règle d\'usage enseignée en formation.',
            'entetes' => ['Article', 'Ce que le texte exige', 'Conséquence pour un traitement assisté par l\'IA'],
            'lignes'  => [
                ['Article 16', 'Un manuel décrivant les procédures et l\'organisation comptables, mis à jour périodiquement', 'Les tâches confiées à un outil d\'IA, ses consignes et les contrôles associés s\'écrivent dans ce manuel, comme toute autre procédure'],
                ['Article 17, 3° et 5°', 'Des écritures justifiées par des pièces datées et conservées ; pour chaque enregistrement, son origine, son imputation, son contenu et la référence de la pièce', 'Une écriture proposée par l\'IA sans référence de pièce n\'est pas importable ; le tableau de saisie porte toujours le numéro de la pièce'],
                ['Article 17, 1°', 'Une comptabilité tenue dans la langue officielle et dans l\'unité monétaire ayant cours légal dans l\'État partie', 'Les libellés restent en français, les montants en francs CFA ; une pièce en devise est convertie selon la règle de l\'entité, pas selon un taux donné par l\'outil'],
                ['Article 22, 2°', 'L\'irréversibilité des traitements après validation : aucune suppression, addition ou modification ultérieure', 'L\'outil ne valide jamais ; il produit un brouillon que le comptable relit, puis importe et valide lui-même'],
                ['Article 22, 3° et 6°', 'Une clôture informatique au moins trimestrielle ; un chemin de révision reconstituable et l\'accès à la documentation des traitements', 'On garde la consigne utilisée, le fichier produit et la trace de la validation, pour qu\'un contrôleur comprenne d\'où vient chaque écriture'],
                ['Article 22, dernier alinéa', 'Chaque donnée transmise par un autre système de traitement s\'appuie sur une pièce justificative probante', 'Un fichier d\'import généré par l\'IA vient d\'un autre système de traitement : il ne dispense pas de la pièce d\'origine'],
                ['Article 24', 'Les livres comptables et les pièces justificatives sont conservés pendant dix ans', 'Les pièces restent archivées dans l\'entreprise ; une conversation avec un assistant n\'est pas un lieu de conservation'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi un assistant d\'IA se trompe-t-il plus souvent en comptabilité OHADA ?',
            'paragraphes' => [
                'Les grands modèles de langage ont appris sur des textes publics où la comptabilité française et les normes internationales pèsent bien plus lourd que le SYSCOHADA. Demandé sans contexte, un compte d\'imputation risque donc d\'être celui du plan comptable français, ou un intitulé antérieur à la révision. L\'Acte uniforme, par son article 111-1, a par exemple créé le compte 475, compte transitoire lié à la révision du SYSCOHADA ; un outil qui raisonne sur de vieux supports l\'ignore. La parade enseignée est simple : on ne demande jamais un compte de mémoire, on fournit le plan de comptes de l\'entité et ses imputations passées.',
                'Deuxième source d\'erreur : le périmètre. L\'article 5 de l\'Acte uniforme exclut du SYSCOHADA les établissements de crédit et de microfinance, les acteurs du marché financier, les sociétés d\'assurance et de réassurance, les organismes de sécurité et de prévoyance sociales et les entités à but non lucratif. Le comptable d\'une ONG n\'applique donc pas les mêmes états qu\'une société commerciale, et l\'assistant ne le sait pas si on ne le lui dit pas. De même, l\'article 13 réserve le système minimal de trésorerie aux petites entités sous certains seuils de chiffre d\'affaires : la consigne précise toujours le système appliqué.',
                'Troisième source : les calculs. Un modèle de langage prédit du texte ; il peut écrire un total faux avec assurance. Toute somme, tout pourcentage et tout solde se calculent dans le tableur ou par l\'exécution de code proposée par certains assistants, jamais dans la réponse rédigée. Quatrième source : la fiscalité. Les taux et les règles changent avec chaque loi de finances, pays par pays, et l\'outil peut citer une règle périmée. Elle se vérifie dans le code général des impôts en vigueur et auprès de l\'administration fiscale.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle conduite : groupes, données, supports et suivi ?',
            'intro' => 'Un comptable apprend un outil en l\'essayant sur ses propres pièces et en découvrant où il se trompe. La méthode est construite autour de cette découverte, et d\'une règle : rien de ce qui est produit en session n\'entre dans une comptabilité réelle sans validation.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Le rapprochement et le lettrage demandent de regarder l\'écran de chacun. Au-delà de huit, le formateur ne peut plus suivre les fichiers de tous, et les erreurs de méthode passent inaperçues.'],
                ['titre' => 'Des groupes homogènes', 'texte' => 'Un groupe d\'entreprise, un groupe de cabinet, ou des participants de même niveau. Les besoins d\'un collaborateur qui gère quarante dossiers ne sont pas ceux d\'un comptable unique de PME.'],
                ['titre' => 'Des pièces réelles, anonymisées', 'texte' => 'Les exercices utilisent un mois de pièces de l\'entreprise, rendu anonyme avant la session. On y retrouve les vraies difficultés : factures illisibles, paiements groupés, fournisseurs sans identifiant fiscal.'],
                ['titre' => 'Le contrôle croisé', 'texte' => 'Un participant prépare, un autre contrôle, comme dans un service où la saisie et la révision sont séparées. Chacun apprend à repérer l\'erreur d\'une IA dans le travail d\'un collègue.'],
                ['titre' => 'Une bibliothèque de consignes comptables', 'texte' => 'Les consignes qui fonctionnent (extraction de pièces, imputation, rapprochement, revue de balance) sont rangées dans un document de l\'entreprise, avec le contrôle à faire après chacune. Elles complètent le manuel de procédures prévu par l\'article 16 de l\'Acte uniforme.'],
                ['titre' => 'Des supports remis', 'texte' => 'Le programme, les supports, les fichiers d\'exercice et leurs corrigés, la liste de clôture, les modes opératoires et une attestation nominative de fin de formation. Les fichiers sont modifiables par l\'entreprise.'],
                ['titre' => 'Un suivi à la clôture suivante', 'texte' => 'Les vraies questions arrivent à la fin du mois suivant, devant un dossier réel. Un canal direct reste ouvert pendant le mois qui suit la session, et une séance de suivi peut être prévue au devis pour la première clôture.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils travaille-t-on, et combien coûtent-ils ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, en dollars américains. Ils sont payés à l\'éditeur par l\'entreprise et ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Usage en formation', 'Prix de l\'éditeur', 'Point d\'attention pour un comptable'],
            'lignes'  => [
                ['Excel avec Power Query, ou LibreOffice Calc', 'Tableau de saisie, table de correspondance, rapprochement, contrôles', 'Celui que l\'entreprise possède déjà', 'C\'est là que se font les calculs et les contrôles ; l\'IA y écrit des formules, elle ne remplace pas le tableur'],
                ['ChatGPT Business (OpenAI)', 'Extraction de pièces, analyse de fichiers anonymisés, rédaction', '20 dollars par utilisateur et par mois en facturation annuelle, 25 dollars en mensuelle, à partir de 2 utilisateurs', 'OpenAI indique ne pas entraîner ses modèles sur les données de l\'offre Business par défaut ; les comptes personnels gratuits ne conviennent pas aux dossiers clients'],
                ['Claude Team (Anthropic)', 'Lecture de pièces, analyse de fichiers et exécution de code', '20 dollars par siège et par mois en annuel, 25 dollars au mois', 'Anthropic indique ne pas entraîner ses modèles sur le contenu des offres Team et Enterprise par défaut'],
                ['Microsoft 365 Copilot', 'Copilot dans Excel, pour les entreprises déjà sur Microsoft 365', '21 dollars par utilisateur et par mois en annuel (18 dollars en promotion du 1er juillet au 31 décembre 2026), 25,20 dollars au mois', 'S\'ajoute à un abonnement Microsoft 365 ; Copilot Chat est inclus sans surcoût dans les abonnements éligibles'],
                ['Ollama et un modèle ouvert', 'Modèle installé sur un poste du cabinet, sans envoi des données à l\'extérieur', 'Logiciel publié sous licence MIT ; le coût est celui de l\'ordinateur', 'Moins performant que les grands assistants en ligne et exigeant en mémoire, mais adapté aux dossiers que le secret interdit de transmettre'],
                ['Le logiciel comptable de l\'entreprise', 'Source des exports, destination des imports validés', 'Celui qui est en place : Sage, Odoo, Dolibarr ou autre', 'Le format d\'import est relevé avant la session ; c\'est dans ce logiciel que le comptable valide, pas dans l\'outil d\'IA'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Le secret professionnel interdit-il d\'utiliser l\'IA sur un dossier client ?',
            'paragraphes' => [
                'Non, mais il en fixe les conditions. Le code d\'éthique des professionnels de la comptabilité et de l\'audit de l\'espace OHADA, prévu par le règlement n° 01/2017/CM/OHADA adopté en juin 2017, fait de la confidentialité l\'un de ses cinq principes fondamentaux. Sa section 140 interdit de divulguer hors du cabinet ou de l\'organisation des informations confidentielles sans autorisation spécifique, sauf droit ou obligation de le faire, et demande de veiller à ce que les personnes consultées ou qui assistent le professionnel respectent cette confidentialité. Un service d\'IA hébergé ailleurs entre dans cette logique : on vérifie ce qu\'il fait des données avant d\'y verser un dossier.',
                'Le même code rappelle que l\'article 717 de l\'Acte uniforme relatif au droit des sociétés commerciales astreint le commissaire aux comptes et ses collaborateurs au secret professionnel. Au Bénin, la loi n° 2022-35 du 23 février 2023, qui modifie la loi créant l\'Ordre des experts-comptables et comptables agréés, charge cet Ordre de veiller au respect des exigences de l\'UEMOA, de l\'OHADA et de la Fédération internationale des comptables en matière de déontologie et d\'éthique. En France, l\'article 21 de l\'ordonnance n° 45-2138 du 19 septembre 1945 tient les experts-comptables au secret professionnel, dont la violation est punie, selon l\'article 226-13 du code pénal, d\'un an d\'emprisonnement et de 15 000 euros d\'amende.',
                'La loi sur les données personnelles s\'ajoute au secret. Au Bénin, le code du numérique (loi n° 2017-20 du 20 avril 2018) définit l\'État tiers comme tout État non membre de la CEDEAO, et son article 460 range parmi les infractions le transfert de données personnelles vers un État tiers sans respect des exigences qu\'il prévoit. Or les grands assistants sont hébergés hors de la CEDEAO. En Europe, l\'article 28 du RGPD impose de ne recourir qu\'à des sous-traitants présentant des garanties suffisantes, liés par un contrat. D\'où les trois réponses enseignées : anonymiser, choisir une offre professionnelle aux conditions écrites, ou garder le traitement en local.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond d\'une écriture préparée par l\'IA ?',
            'texte' => 'Le comptable qui la valide et les dirigeants qui arrêtent les comptes, jamais l\'outil. L\'article 111 de l\'Acte uniforme prévoit une sanction pénale pour les dirigeants qui auront sciemment établi et communiqué des états financiers ne donnant pas une image fidèle du patrimoine, de la situation financière et du résultat. Une imputation fausse proposée par un assistant, puis validée sans contrôle, reste une erreur de l\'entité. La règle de la formation est donc écrite noir sur blanc : aucune écriture n\'est validée sans que son auteur ait vu la pièce et vérifié le compte.',
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le type de structure et le pays ?',
            'items' => [
                ['secteur' => 'Cabinet d\'expertise comptable, à Cotonou ou à Lomé', 'probleme' => 'Les clients déposent leurs pièces en vrac, souvent photographiées au téléphone, et les collaborateurs passent la fin du mois à les ressaisir.', 'solution' => 'Extraction des pièces vers un tableau de saisie par client, table de correspondance par fournisseur, import contrôlé ; les dossiers sont séparés et anonymisés, et les plus sensibles traités sur un modèle installé au cabinet.'],
                ['secteur' => 'Comptable unique d\'une PME de négoce, à Abidjan', 'probleme' => 'Les ventes passent par la facture normalisée électronique, les encaissements par la banque et deux opérateurs de Mobile Money, et le rapprochement prend plusieurs jours.', 'solution' => 'Formules de rapprochement écrites avec l\'assistant, contrôle de la numérotation continue des factures, traitement séparé des frais de transaction et liste des suspens datés.'],
                ['secteur' => 'Direction financière d\'une filiale, à Dakar ou à Douala', 'probleme' => 'La maison mère attend chaque mois un commentaire des comptes et des explications de variations, rédigés en peu de temps.', 'solution' => 'Revue analytique de la balance avec seuils fixés par la direction, questions envoyées aux services, premier jet de commentaire relu chiffre par chiffre avant envoi.'],
                ['secteur' => 'ONG ou projet financé, en Afrique de l\'Ouest', 'probleme' => 'L\'équipe comptable produit des rapports financiers pour plusieurs bailleurs, chacun avec sa nomenclature, à partir de la même comptabilité.', 'solution' => 'Tables de passage entre la comptabilité et les rubriques de chaque bailleur, construites avec l\'IA puis figées dans le tableur ; la formation rappelle que ces entités ne relèvent pas du SYSCOHADA.'],
                ['secteur' => 'Petite entreprise au système minimal de trésorerie', 'probleme' => 'Le gérant tient un cahier de recettes et de dépenses, et le comptable externe reconstitue la trésorerie une fois par an.', 'solution' => 'Photographie hebdomadaire du cahier, transcription en tableau par l\'assistant, contrôle des totaux par le comptable ; la tenue devient mensuelle sans changer de logiciel.'],
                ['secteur' => 'Cabinet en France ou en Belgique avec des clients en zone OHADA', 'probleme' => 'Les mêmes collaborateurs travaillent sur le plan comptable français et sur le SYSCOHADA, et l\'assistant mélange les deux.', 'solution' => 'Consignes séparées par référentiel, plan de comptes joint à chaque demande, et contrôle systématique des imputations ; le secret professionnel et le RGPD encadrent le choix de l\'outil.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour un service comptable ou un cabinet ?',
            'legende' => 'Le calendrier évite les périodes de clôture et de déclarations fiscales du pays : une équipe comptable ne se forme pas la semaine où elle arrête les comptes.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Intra, dans vos locaux', '2 jours, en 4 demi-journées', '8 personnes au plus', 'Un service comptable ou un cabinet qui veut travailler sur ses propres pièces et son propre logiciel, en toute confidentialité'],
                ['Inter, session mutualisée', '2 jours', 'Comptables de plusieurs structures', 'Une ou deux personnes par organisation ; les exercices utilisent un jeu de données fictif, aucun dossier réel n\'est partagé'],
                ['À distance', '6 séances de 2 heures', '6 personnes au plus', 'Équipes réparties entre plusieurs villes ou pays ; partage d\'écran indispensable pour suivre les rapprochements'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '8 personnes au plus', 'Prise en main en salle, puis application guidée sur la clôture mensuelle suivante'],
                ['Séance de suivi de clôture', 'Une demi-journée, après la première clôture', 'Le groupe formé', 'Pour corriger les consignes sur un vrai dossier de fin de mois et ajuster les contrôles'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment la régler ?',
            'intro'      => 'Le premier échange, le cadrage et le devis sont gratuits ; la formation elle-même est chiffrée sur devis, poste par poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux outils d\'IA restent à la charge de l\'entreprise, auprès des éditeurs.',
            'items'      => [
                ['offre' => 'Formation intra', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos pièces anonymisées', 'Exercices au format d\'import de votre logiciel', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur un mini-dossier et attestation', 'Canal direct pendant le mois suivant']],
                ['offre' => 'Session inter', 'prix' => 'Sur devis', 'inclus' => ['Deux jours sur un jeu de données fictif', 'Supports et corrigés', 'Liste de clôture type', 'Attestation nominative']],
                ['offre' => 'Suivi de clôture', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée sur la première clôture réelle', 'Correction des consignes', 'Ajustement des contrôles', 'Bilan écrit']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le temps de préparation et d\'anonymisation des pièces de l\'entreprise.',
                'Le nombre de logiciels comptables et de formats d\'import à couvrir.',
                'L\'installation éventuelle d\'un modèle local sur un poste du cabinet.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le mode présentiel, distance ou hybride.',
                'Les séances de suivi après la formation.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Un fonds de formation peut-il prendre en charge la session ?',
            'legende' => 'Dispositifs lus le 5 octobre 2026 sur les pages officielles. Aucune prise en charge n\'est promise : elle dépend des règles du fonds et du dossier de l\'entreprise, et se vérifie avant la signature du devis.',
            'entetes' => ['Pays', 'Dispositif', 'Ce que dit le texte officiel', 'Ce qu\'il faut vérifier'],
            'lignes'  => [
                ['Côte d\'Ivoire', '<a href="https://fdfp.ci/plan-de-formation/">FDFP</a>, plan de formation', 'Toute entreprise qui justifie du paiement régulier des deux taxes de formation peut déposer un plan de formation, en interne, en intra, en interentreprises ou à l\'étranger ; le paiement intervient après le contrôle du fonds et l\'approbation de sa Commission permanente', 'Le calendrier de dépôt et le statut exigé du prestataire, directement auprès du fonds'],
                ['Bénin', '<a href="https://sgg.gouv.bj/doc/decret-2022-286/">FODEFCA</a>, statuts approuvés par le décret n° 2022-286', 'Son article 5 en fait le principal guichet de financement de la formation professionnelle continue dans le secteur privé ; les bénéficiaires apportent de 10 à 30 % du coût total de la formation selon les cas', 'Le guichet ouvert au moment de la demande et les pièces exigées'],
                ['France', '<a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, obligation Qualiopi', 'Depuis le 1er janvier 2022, les prestataires qui veulent accéder aux fonds publics ou mutualisés doivent être certifiés Qualiopi', 'Richard SALANON n\'affiche pas de certification Qualiopi : la session se finance alors sur le budget propre de l\'entreprise'],
                ['Autres pays de l\'OHADA', 'Fonds national de formation professionnelle, quand il existe', 'Règles propres à chaque pays', 'Interroger le fonds par écrit, programme et devis joints ; le programme, les feuilles de présence et l\'attestation sont fournis dans tous les cas'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on après la formation, et comment les prévenir ?',
            'intro' => 'Les écarts apparaissent à la deuxième ou troisième clôture, quand la pression du calendrier revient. Ce sont presque toujours les mêmes.',
            'items' => [
                ['titre' => 'Importer sans recompter', 'texte' => 'Le fichier produit paraît propre, on l\'importe. La règle tient en une ligne : le total des pièces du lot, calculé dans le tableur, doit égaler le total importé, au franc près, avant toute validation.'],
                ['titre' => 'Laisser l\'outil choisir les comptes', 'texte' => 'Une imputation plausible n\'est pas une imputation juste. Les comptes viennent de la table de correspondance de l\'entité ; l\'IA ne propose que pour un fournisseur nouveau, et le comptable tranche avant d\'enrichir la table.'],
                ['titre' => 'Coller un grand livre complet dans un compte personnel', 'texte' => 'Un grand livre contient les noms des clients, des salariés et des montants qui relèvent du secret. Il passe d\'abord par l\'anonymisation, puis par un compte professionnel ou un modèle local, jamais par la messagerie gratuite d\'un collaborateur.'],
                ['titre' => 'Forcer un rapprochement', 'texte' => 'Quand l\'écart résiste, la tentation est de demander à l\'outil de trouver une combinaison qui tombe juste. Un écart non expliqué reste un suspens daté, transmis au responsable, jusqu\'à sa justification par une pièce.'],
                ['titre' => 'Faire confiance à une règle fiscale citée par l\'assistant', 'texte' => 'Un taux, un seuil ou une exonération peuvent avoir changé avec la dernière loi de finances. Toute règle fiscale reprise dans un dossier est vérifiée dans le texte en vigueur du pays concerné.'],
                ['titre' => 'Ne pas documenter', 'texte' => 'Six mois plus tard, personne ne sait plus quelle consigne a produit quelles écritures. Les modes opératoires et la bibliothèque de consignes sont datés, rangés avec le manuel de procédures, et revus à chaque changement d\'outil.'],
                ['titre' => 'Former une seule personne', 'texte' => 'Si le seul utilisateur part en congé à la clôture, l\'équipe revient à la ressaisie. Deux personnes au moins maîtrisent chaque mode opératoire, et la relecture croisée de la formation est conservée dans le service.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés du droit comptable OHADA faut-il avoir en tête ?',
            'items' => [
                ['valeur' => '17', 'libelle' => 'États membres de l\'OHADA, du Bénin au Togo, qui appliquent le même Acte uniforme comptable (page des États membres consultée le 5 octobre 2026)', 'source' => 'OHADA, États membres', 'url' => 'https://www.ohada.org/en/state-members/'],
                ['valeur' => '1er janvier 2018', 'libelle' => 'Entrée en vigueur du SYSCOHADA révisé pour les comptes personnels des entités ; le 1er janvier 2019 pour les comptes consolidés, combinés et les états financiers en normes IFRS (article 113 de l\'Acte uniforme du 26 janvier 2017)', 'source' => 'OHADA, Acte uniforme relatif au droit comptable et à l\'information financière', 'url' => 'https://www.ohada.org/en/uniform-act-relating-to-accounting-law-and-financial-information-audcif/'],
                ['valeur' => '10 ans', 'libelle' => 'Durée de conservation des livres comptables et des pièces justificatives (article 24) ; les états financiers sont arrêtés au plus tard dans les quatre mois qui suivent la clôture (article 23)', 'source' => 'Texte de l\'Acte uniforme, bibliothèque numérique de l\'OHADA', 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061'],
                ['valeur' => '60, 40 et 30 millions', 'libelle' => 'Seuils de chiffre d\'affaires hors taxes, en francs CFA, sous lesquels les entités de négoce, artisanales et de services sont éligibles au système minimal de trésorerie (article 13)', 'source' => 'Texte de l\'Acte uniforme, bibliothèque numérique de l\'OHADA', 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Factures normalisées, connexion, Mobile Money : que change le terrain ?',
            'paragraphes' => [
                'Les factures changent de forme dans plusieurs pays de la zone, et c\'est une bonne nouvelle pour la saisie assistée. Au Bénin, la plateforme e-MECeF de la Direction générale des impôts, version en ligne des machines électroniques certifiées de facturation, s\'adresse à toute entreprise, micro, petite, moyenne ou grande. En Côte d\'Ivoire, selon la procédure d\'interfaçage publiée par la DGI en mai 2025, la loi de finances pour 2025 a institué la facture normalisée électronique, certifiée par un sticker électronique (QR code, visuel et format de numérotation) et numérotée en série ininterrompue chaque année. Ces mentions normalisées donnent une référence de pièce fiable, et la numérotation continue se contrôle en quelques secondes dans un tableur.',
                'La même procédure ivoirienne permet aux entreprises dotées de leur propre système de facturation de faire certifier leurs factures par API. La formation ne développe pas ces connexions, qui relèvent d\'un projet d\'intégration ; elle apprend au comptable à exploiter ce qui en sort. Côté encaissements, le Mobile Money pèse lourd dans beaucoup d\'entreprises : les exports des opérateurs mélangent paiements, frais et retraits, et c\'est souvent là que l\'IA fait gagner le plus de temps, à condition que chaque ligne soit rattachée à une pièce.',
                'La connexion reste une contrainte. Les assistants en ligne demandent un débit stable pour lire des pièces scannées ; les exercices sont donc téléchargés à l\'avance, et un modèle local reste utilisable sans Internet. Enfin, l\'article 17 de l\'Acte uniforme impose de tenir la comptabilité dans la langue officielle de l\'État : les libellés produits par l\'outil sont relus pour rester dans le français comptable de l\'entité, sans tournures traduites de l\'anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi suivre cette formation avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il déploie Odoo et Dolibarr pour des entreprises de la zone OHADA, y compris leur paramétrage au SYSCOHADA, et il intègre l\'IA dans des logiciels existants : il connaît donc à la fois les exports que produisent les logiciels comptables et ce que les outils d\'IA savent en faire. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Fort de ' . $ans . ' ans d\'expérience et formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, dont le Bénin, la Côte d\'Ivoire, le Sénégal, le Togo, le Gabon, la France et la Belgique.',
                'Un point doit être clair : Richard SALANON n\'est pas expert-comptable et ne tient la comptabilité de personne. Il enseigne l\'outil, la méthode et les garde-fous ; les choix d\'imputation, de fiscalité et d\'arrêté des comptes restent ceux des comptables formés et de leur Ordre. Il n\'est certifié par aucun éditeur d\'IA. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page des <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>.',
                'Quand le besoin dépasse la formation, par exemple relier un outil d\'IA au logiciel comptable pour préparer les écritures automatiquement, il relève d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> ou d\'<a href="/services/integration-odoo">intégration Odoo</a>, et de la formation <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>. Les règles internes d\'usage, valables pour tous les services, se construisent dans la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe comptable ?',
            'texte' => 'L\'IA prépare, le comptable valide : fournissez-lui toujours le plan de comptes de l\'entité, faites les calculs dans le tableur, anonymisez avant de soumettre, gardez la référence de la pièce sur chaque ligne, et écrivez les consignes et les contrôles dans le manuel de procédures prévu par l\'Acte uniforme.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre service comptable ou votre cabinet à l\'IA ?',
            'texte'  => 'Indiquez le nombre de comptables, le logiciel utilisé, les tâches qui pèsent le plus à chaque clôture et vos contraintes de confidentialité : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation IA pour comptables'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer pour suivre la formation ?', 'r' => 'Non. Il faut connaître la comptabilité SYSCOHADA et savoir utiliser un tableur. Les formules et les étapes Power Query sont écrites avec l\'aide de l\'assistant, puis expliquées ligne par ligne pour que le comptable sache les relire et les corriger.'],
        ['q' => 'L\'IA peut-elle tenir la comptabilité à la place du comptable ?', 'r' => 'Non. Elle prépare : extraction des pièces, proposition d\'imputation, rapprochement, premier jet de commentaire. L\'article 22 de l\'Acte uniforme exige une validation qui rend l\'écriture définitive ; c\'est le comptable qui la fait, après contrôle de la pièce.'],
        ['q' => 'Peut-on soumettre les pièces d\'un client à ChatGPT ou à Claude ?', 'r' => 'Pas dans un compte personnel gratuit. Le code d\'éthique OHADA impose la confidentialité, et les données personnelles relèvent de la loi du pays. On anonymise, on utilise une offre professionnelle dont les conditions excluent l\'entraînement sur les données, ou un modèle installé au cabinet.'],
        ['q' => 'Les assistants connaissent-ils le SYSCOHADA révisé ?', 'r' => 'Imparfaitement. Ils ont surtout appris sur des textes français et internationaux et peuvent proposer un compte du plan comptable français ou un intitulé ancien. On leur fournit donc le plan de comptes de l\'entité à chaque demande.'],
        ['q' => 'La formation fonctionne-t-elle avec notre logiciel comptable ?', 'r' => 'Oui, dès lors qu\'il exporte et importe des fichiers (CSV ou tableur), ce qui est le cas de la plupart des logiciels, de Sage à Odoo et Dolibarr. Le format d\'import est relevé pendant la préparation et utilisé dans les exercices.'],
        ['q' => 'Qu\'est-ce qu\'un modèle local, et faut-il en installer un ?', 'r' => 'C\'est un modèle d\'IA qui tourne sur un ordinateur du cabinet, par exemple avec le logiciel libre Ollama, sans envoyer les données à l\'extérieur. Il est moins performant qu\'un grand assistant en ligne, mais utile pour les dossiers les plus sensibles. Son installation se décide au cadrage.'],
        ['q' => 'La formation couvre-t-elle aussi les ONG ?', 'r' => 'Oui pour les méthodes (pièces, rapprochement, rapports aux bailleurs), avec une réserve : l\'article 5 de l\'Acte uniforme exclut les entités à but non lucratif du SYSCOHADA. Les exercices sont alors construits sur leur propre référentiel comptable.'],
        ['q' => 'Combien de personnes par groupe ?', 'r' => 'Huit au plus en salle, six à distance. Le rapprochement et le lettrage demandent de suivre l\'écran de chacun ; au-delà, les erreurs de méthode passent inaperçues.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis. Il dépend du nombre de participants, de la préparation des pièces, du nombre de logiciels à couvrir, du lieu et du suivi retenu. Le premier échange, le cadrage et le devis sont gratuits ; le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Quelle différence avec la formation Odoo comptabilité SYSCOHADA ?', 'r' => 'Celle-là apprend à tenir la comptabilité OHADA dans Odoo : plan comptable, journaux, taxes, états. Celle-ci apprend à utiliser l\'IA pour préparer et contrôler le travail comptable, quel que soit le logiciel. Les deux se complètent pour une entreprise sous Odoo.'],
        ['q' => 'Formez-vous aussi les auditeurs et les commissaires aux comptes ?', 'r' => 'Ils ont une formation propre, consacrée à l\'IA pour l\'audit, le contrôle et la conformité, reliée en bas de page. Celle-ci s\'adresse à ceux qui tiennent et préparent les comptes, pas à ceux qui les certifient.'],
        ['q' => 'Reçoit-on une attestation ?', 'r' => 'Oui, une attestation nominative de fin de formation, avec le programme, les supports, les fichiers corrigés et les feuilles de présence. Ce n\'est ni un diplôme, ni une certification d\'éditeur, ni une validation de formation continue par un Ordre.'],
    ],

    'sources' => [
        ['titre' => 'OHADA, Acte uniforme relatif au droit comptable et à l\'information financière (AUDCIF) : adoption, publication, entrée en vigueur', 'url' => 'https://www.ohada.org/en/uniform-act-relating-to-accounting-law-and-financial-information-audcif/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, bibliothèque numérique : texte de l\'Acte uniforme du 26 janvier 2017 (articles 5, 13, 16, 17, 22, 23, 24, 111, 111-1 et 113)', 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, entrée en vigueur du SYSCOHADA révisé et règlement n° 01/2017/CM/OHADA', 'url' => 'https://www.ohada.org/entree-en-vigueur-du-syscohada-revise-l-ohada-met-la-derniere-main/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, mise en ligne du règlement portant harmonisation des pratiques des professionnels de la comptabilité et de l\'audit', 'url' => 'https://www.ohada.org/mise-en-ligne-du-reglement-portant-harmonisation-des-pratiques-des-professionnels-de-la-comptabilite-et-de-l-audit-dans-les-etats-membres-de-l-ohada/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, liste des États membres', 'url' => 'https://www.ohada.org/en/state-members/', 'date' => '2026-10-05'],
        ['titre' => 'Code d\'éthique des professionnels de la comptabilité et de l\'audit, espace OHADA (section 140, confidentialité), publié par l\'ONECCA du Burkina Faso', 'url' => 'https://www.oneccabf.org/wp-content/uploads/OHADA_Code-dethique-des-professionnels-de-la-comptabilite-et-de-laudit.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2022-35 du 23 février 2023 relative à l\'Ordre des experts-comptables et comptables agréés (article 2 nouveau)', 'url' => 'https://sgg.gouv.bj/doc/loi-2022-35/', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, ordonnance n° 45-2138 du 19 septembre 1945, article 21 (secret professionnel des experts-comptables)', 'url' => 'https://www.legifrance.gouv.fr/loda/article_lc/LEGIARTI000033678954', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, code pénal, article 226-13', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006417945', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (définition de l\'État tiers, article 460)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, règlement général sur la protection des données, chapitre IV (article 28, sous-traitant)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => 'Direction générale des impôts du Bénin, plateforme e-MECeF', 'url' => 'https://e-mecef.impots.bj/', 'date' => '2026-10-05'],
        ['titre' => 'Direction générale des impôts de Côte d\'Ivoire, procédure d\'interfaçage des entreprises par API à la FNE (mai 2025)', 'url' => 'https://www.dgi.gouv.ci/assets/documents/FNE-procedureapi.pdf', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres, dont Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Max, Team, Enterprise)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Ollama, dépôt officiel et licence MIT', 'url' => 'https://github.com/ollama/ollama', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA (article 5)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-comptabilite-syscohada', 'ia-audit-controle', 'ia-en-entreprise', 'excel-google-sheets', 'ia-ethique-conformite', 'integrer-ia-logiciels-existants'],
        'services'    => ['integration-ia-entreprise', 'integration-odoo'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
