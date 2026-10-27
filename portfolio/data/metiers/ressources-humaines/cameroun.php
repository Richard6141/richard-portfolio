<?php
// ============================================================
// data/metiers/ressources-humaines/cameroun.php · Formation IA pour les
// responsables RH et les gestionnaires de paie au Cameroun.
// Statut F du métier, mais texte au conditionnel : Richard peut former ce
// public. Pays : « Déjà travaillé » = oui (faits.php). Projet client du pays
// (KossKoss Select, boutique cosmétique) sans rapport avec le métier : non cité.
// Sources lues le 27/10/2026 : loi n° 92/007 du 14 août 1992 portant code du
// travail (copie du ministère des Finances ; articles 2, 4, 24, 25, 27, 28, 29,
// 30, 34, 44, 61, 68, 69, 112, 115), décret n° 2016/072 du 15 février 2016
// (taux et plafonds CNPS, copie sur cnps.cm), CNPS (services en ligne,
// obligations, règles générales), DGI (fiche « Tout savoir sur l'IRPP »,
// page d'accueil), loi n° 2024/017 (Droit, médias et finance, Digital
// Business Africa), Ecomatin (10/12/2024), base IANA des fuseaux.
// Non repris car divergents ou non lus : SMIG (sources contradictoires), taux
// CFC et FNE, calendrier de la déclaration annuelle, part du secteur informel.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA des équipes RH et paie au Cameroun : annonces, contrats d'essai, bulletins et déclarations CNPS préparés avec un assistant, en français ou en anglais, sous le code du travail de 1992 et la loi de 2024 sur les données",
    'title'   => "Formation IA pour les RH au Cameroun | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie au Cameroun : code du travail, CNPS, loi de 2024. À distance, en deux langues, devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, peut animer à distance, pour les services du personnel camerounais, des séances où un assistant d'IA travaille sur les pièces réelles de l'équipe, en français comme en anglais, avec les repères du code du travail de 1992, de la CNPS et de la loi de 2024 sur les données. Yaoundé et Douala sont à UTC+1 comme Cotonou, sans aucun décalage. Le devis est établi en FCFA, sans montant sur cette page.",
    'publie'  => '2026-12-19',
    'maj'     => '2026-12-19',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes RH camerounaises à l'IA, et sur quoi comparer les offres ?",
            'paragraphes' => [
                "Un service RH de Douala, de Yaoundé ou de Bafoussam peut s'adresser à une école, à un cabinet ou à un formateur indépendant. Richard SALANON peut intervenir à distance depuis Cotonou, pour montrer comment un assistant d'IA aide à rédiger, à contrôler et à classer les pièces d'un service du personnel, en français comme en anglais.",
                "Son terrain est l'outil, pas le droit social ni la comptabilité de paie. Les articles cités plus bas se lisent avec les participants dans leur texte, et toute question d'application retourne à l'inspection du travail, à la CNPS ou au conseil de l'entreprise.",
                "Pour comparer les offres, quatre critères suffisent. Les exercices utilisent-ils vos propres modèles, rendus anonymes ? Le formateur sait-il passer d'un dossier en anglais à un courrier en français sans changer de méthode ? Dit-il quel texte camerounais gouverne chaque geste, et où s'arrête son rôle ? Et l'équipe est-elle évaluée sur une tâche refaite seule, avec un chronomètre, et non sur un simple avis de fin de session ?",
                "Le premier réflexe enseigné précède tout usage de l'assistant : classer les pièces en trois piles. Ce qui peut être soumis sans changement, ce qu'on anonymise d'abord, et ce qui reste dans le service quoi qu'il arrive. Un dossier de salarié n'est pas un texte comme un autre.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels services en ligne un employeur camerounais utilise-t-il déjà auprès de la CNPS et de l'administration fiscale ?",
            'paragraphes' => [
                "La Caisse nationale de prévoyance sociale présente sur son site, le 27 octobre 2026, une série de services pour employeurs : téléimmatriculation, vérification d'immatriculation, télédéclaration, paiement en ligne, télédéclaration des accidents du travail et maladies professionnelles, suivi de dossier et dépôt de requête. La page des questions fréquentes précise que la téléimmatriculation est une pré-immatriculation, à confirmer dans le mois auprès du centre de prévoyance sociale.",
                "Le même site décrit un régime déclaratif : l'employeur calcule, liquide et paie lui-même l'ensemble des cotisations, part patronale et part salariale précomptée à chaque paie. Le paiement se fait auprès des banques et établissements agréés, puis le service se rend au centre de rattachement avec le reçu de versement et la copie de la télédéclaration pour obtenir une quittance. Autrement dit, le circuit mêle écran et papier.",
                "Du côté fiscal, la page d'accueil de la direction générale des impôts affiche des rubriques de télédéclaration, par type de centre, ainsi que des pages de documents consacrées à la déclaration statistique et fiscale et à l'IRPP. Elle n'indique pas quel circuit s'applique à quelle entreprise : le service paie le confirme auprès de son centre des impôts.",
                "Pour un formateur, ce paysage fixe le travail à faire. L'assistant ne se connecte à aucun de ces portails et ne reçoit aucun identifiant. Il aide en amont, à préparer le tableau des salaires, à vérifier que le détail égale le total, à rédiger la note qui explique un écart, et en aval, à ranger les justificatifs : reçu de versement, copie de la télédéclaration, quittance.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que prévoit la loi du 14 août 1992 sur l'essai, le contrat et le certificat de travail ?",
            'paragraphes' => [
                "Au Cameroun, le texte de base est la loi n° 92/007 du 14 août 1992 portant code du travail, lue ici dans la copie du ministère des Finances. Les articles évoqués fournissent des points de repère pour les exercices, sans valeur de consultation juridique ; l'inspection du travail tranche chaque situation particulière.",
                "Sur le contrat, l'article 24 dispose que son existence est constatée dans les formes que les parties adoptent, que la preuve peut être rapportée par tous moyens, et que le contrat écrit est exempt de droits de timbre et d'enregistrement. L'article 27 impose l'écrit pour tout contrat à durée déterminée supérieure à trois mois ou nécessitant l'installation du travailleur hors de sa résidence habituelle, avec une ampliation adressée à l'inspecteur du travail ; le contrat d'un travailleur de nationalité étrangère est visé par le ministre chargé du travail avant tout commencement d'exécution.",
                "Sur la durée, l'article 25 prévoit qu'un contrat à durée déterminée ne dépasse pas deux ans et peut être renouvelé pour la même durée, et que celui d'un travailleur de nationalité camerounaise ne se renouvelle pas plus d'une fois avec la même entreprise, sous les exceptions qu'il énumère. Une annonce suivie d'un contrat doit donc être relue avec ces deux plafonds sous les yeux.",
                "Sur l'essai, l'article 28 exige qu'il soit stipulé par écrit, le limite à six mois renouvellement compris, huit mois pour les cadres, et exclut de sa durée les délais de recrutement, de route, de formation et de stage. La prolongation des services après l'essai, sans nouveau contrat, vaut engagement définitif à compter du début de l'essai.",
                "À la sortie, l'article 34 veut que la résiliation d'un contrat à durée indéterminée soit notifiée par écrit avec indication du motif, le préavis ne pouvant être imputé sur le congé du travailleur. À l'expiration du contrat, quel que soit le motif de rupture, l'article 44 oblige l'employeur à remettre au départ un certificat de travail, dont le contenu se limite aux dates d'entrée et de sortie et aux emplois occupés avec leurs dates.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que dit le code du travail camerounais de la paie : périodicité, pièce émargée, bulletin et règlement intérieur ?",
            'paragraphes' => [
                "L'article 68 fixe des intervalles de paiement qui ne peuvent excéder un mois, avec un acompte de quinze jours sur demande portant sur la moitié de la rémunération de base, et ajoute que le paiement mensuel est effectué dans les huit jours qui suivent la fin du mois travaillé. En cas de rupture, salaire et indemnités sont payés dès la cessation de service.",
                "L'article 69 demande une pièce constatant le paiement, dressée ou certifiée par l'employeur et émargée par chaque travailleur, ou par deux témoins s'il ne sait ni lire ni écrire en français ou en anglais. Ces pièces sont conservées comme des pièces comptables et présentées à toute réquisition de l'inspection du travail. Il impose aussi un bulletin de paie individuel remis au moment du paiement, dont la contexture est fixée par arrêté du ministre chargé du travail, et précise que la mention « pour solde de tout compte » n'est pas opposable au travailleur.",
                "L'article 61 pose le principe d'un salaire égal, à conditions égales de travail et d'aptitude professionnelle, quels que soient l'origine, le sexe, l'âge, le statut et la confession religieuse. L'article 4 interdit à l'égard des travailleurs tout acte de discrimination tendant à porter atteinte à la liberté syndicale en matière d'emploi. Aucun des deux ne traite des annonces : ils servent seulement à relire un barème et à vérifier qu'une rémunération annoncée ne varie pas selon ces critères.",
                "Le règlement intérieur relève de l'article 29 : il est établi par le chef d'entreprise, limité à l'organisation technique du travail, aux normes disciplinaires et à l'hygiène et la sécurité, communiqué pour avis aux délégués du personnel et pour visa à l'inspecteur du travail ; les clauses relatives à la rémunération y sont nulles. L'article 30 interdit à l'employeur d'infliger des amendes. Un assistant qui rédige une note de service doit donc être relu sur ces points avant diffusion.",
                "Enfin l'article 112 range le placement sous l'autorité du ministre chargé du travail, gratuit pour les travailleurs, et soumet à agrément préalable les bureaux ouverts par des syndicats ou des organismes privés. Un cabinet de recrutement vérifie son propre statut auprès du ministère avant de proposer ses services.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels taux et quel plafond la CNPS applique-t-elle, et comment un assistant aide-t-il sans les calculer à la place du service ?",
            'paragraphes' => [
                "Le décret n° 2016/072 du 15 février 2016 fixe les taux de cotisation et les plafonds de rémunération des branches gérées par la CNPS ; la copie est publiée sur le site de la caisse. Son article 2 fixe à 7 % du salaire cotisable les prestations familiales du régime général, à la charge exclusive de l'employeur selon l'article 10. L'article 3 fixe la branche pensions de vieillesse, d'invalidité et de décès à 8,4 %, soit 4,2 % pour l'employeur et 4,2 % pour le travailleur.",
                "L'article 4 place ces taux sous un plafond de rémunération de 750 000 FCFA par mois, soit 9 millions de FCFA par an. L'article 8 distingue pour les accidents du travail trois groupes de risque, à 1,75 %, 2,5 % et 5 % de l'ensemble des rémunérations versées, frais professionnels déduits, la classification des activités figurant en annexe. L'article 11 prévoit que les taux sont révisables tous les deux ans : un service paie relit donc le texte en vigueur avant de figer un paramètre.",
                "Ces valeurs sont celles du décret lu le 27 octobre 2026. La formation ne les fait pas apprendre par cœur. Elle montre où les trouver, comment les loger dans des cellules séparées du classeur, et comment demander à l'assistant d'expliquer une formule sans lui confier le calcul d'une cotisation réelle.",
                "La page des obligations de la CNPS rappelle aussi que neuf frais professionnels sont déductibles de l'assiette, d'après un arrêté interministériel du 1er mars 1974 : déplacement, lait, bicyclette ou cyclomoteur, représentation, panier, transport, salissure, outillage et sécurité. Un tableau de paie qui sépare ces lignes du salaire de base se contrôle plus vite.",
                "Côté impôt, la fiche de la DGI sur l'IRPP des traitements et salaires indique que l'employeur prélève la retenue chaque mois et la verse au plus tard le 15 du mois suivant, au titre de l'article 82 du code général des impôts, qu'aucune retenue n'est opérée sous 62 000 FCFA de salaire mensuel, et que le calcul de l'impôt annuel comporte une majoration de 10 % au titre des centimes additionnels communaux. Le barème lui-même n'est pas repris ici.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que change la loi n° 2024/017 pour le fichier du personnel d'une entreprise camerounaise ?",
            'paragraphes' => [
                "Droit, médias et finance rapporte que la loi n° 2024/017 du 23 décembre 2024, relative aux données à caractère personnel, s'applique depuis le 23 juin 2026, au terme d'un moratoire de dix-huit mois accordé aux entreprises et aux administrations. Le dossier d'un salarié, le tableau de paie et la boîte où arrivent les candidatures contiennent des données personnelles : ils entrent dans ce que la loi encadre.",
                "Le même article résume plusieurs exigences : un consentement explicite, libre et éclairé, retirable à tout moment ; la collecte limitée aux données nécessaires à la finalité ; des mesures techniques comme le chiffrement et des audits ; des droits d'accès, de rectification, d'effacement et d'opposition, y compris contre le profilage automatisé. Il ajoute qu'un transfert vers l'étranger requiert une autorisation préalable de l'autorité et un pays de destination offrant une protection équivalente.",
                "L'autorité visée est l'Autorité de protection des données à caractère personnel, présentée par Digital Business Africa, le 24 décembre 2024, comme un organisme public indépendant, chargé notamment de délivrer les autorisations, de publier un référentiel de mesures et de dresser la liste des pays à protection équivalente. Les articles consultés ne disent pas où en est sa mise en place : pour un cas précis, interrogez-la ou votre conseil.",
                "Ces articles de presse ne traitent pas spécialement de l'employeur. La formation n'en tire donc aucune règle propre aux RH. Elle en tire des réflexes de service : aucun dossier nominatif dans un assistant en ligne, des données fictives pour les exercices, une personne nommée pour toute décision sur un candidat ou un salarié, et une liste écrite de ceux qui ouvrent chaque fichier.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Neuf gestes du service du personnel camerounais : que confier à l'assistant, avec quel logiciel, et que vérifier avant de signer ?",
            'legende' => "Chaque ligne correspond à un exercice tiré d'une pièce du service, rendue anonyme. Les logiciels cités sont ceux que l'équipe a déjà ou qu'elle ouvre gratuitement pour l'occasion.",
            'entetes' => ['Geste', 'Logiciel', 'Livrable', 'Vérification avant usage'],
            'lignes'  => [
                ['Annonce de poste à Douala ou à Yaoundé, en deux langues', 'ChatGPT, Claude, Gemini ou Copilot', 'Une version française et une version anglaise cohérentes, puis une version courte pour téléphone', 'Rémunération annoncée conforme à l\'égalité de salaire de l\'article 61 ; aucun critère d\'origine, de sexe, d\'âge ou de confession ; relecture de la version anglaise par un locuteur'],
                ['Contrat à durée déterminée', 'Assistant d\'IA et traitement de texte', 'Trame claire avec dates et motif', 'Écrit au-delà de trois mois (article 27) ; plafond de deux ans et renouvellement (article 25) ; rédaction finale par le juriste'],
                ['Clause d\'essai', 'Assistant d\'IA', 'Clause lisible et date de fin calculée', 'Essai écrit, six mois au plus, huit pour les cadres (article 28) ; délais de recrutement et de route exclus de la durée'],
                ['Tableau des variables de paie du mois', 'Classeur Excel ou Google Sheets ; l\'assistant commente les formules', 'Une ligne par salarié, frais professionnels séparés du salaire de base', 'Deux bulletins refaits au crayon ; masse salariale mise en regard du mois précédent'],
                ['Pièce de paiement et bulletin individuel', 'Tableur et modèle approuvé', 'Bulletin et pièce tirés des mêmes lignes', 'Bulletin conforme à l\'arrêté ; pièce émargée, ou par deux témoins, conservée comme pièce comptable (article 69)'],
                ['Rapprochement avant télédéclaration CNPS', 'Tableur de contrôle', 'Écarts sur les effectifs et les montants, note de deux phrases', 'Taux et plafond relus dans le décret de 2016 ; le service décide, la caisse reçoit'],
                ['Retenue d\'IRPP du mois', 'Tableur de rapprochement', 'Liste des salariés assujettis et total à verser', 'Échéance du 15 du mois suivant et seuil de 62 000 FCFA relus sur la fiche de la DGI'],
                ['Notification de rupture', 'Assistant d\'IA', 'Courrier clair avec date et motif', 'Notification écrite avec le motif (article 34) ; décision réservée à la direction'],
                ['Certificat de travail', 'Assistant d\'IA et modèle du service', 'Certificat limité aux dates et aux emplois', 'Mentions de l\'article 44 seulement ; dates reprises du dossier, jamais de l\'assistant'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans quel ordre tombent, au fil du mois, les obligations d'un employeur camerounais ?",
            'legende' => "Ordre établi à partir du code du travail de 1992, du décret de 2016 et des sites de la CNPS et de la DGI, tels qu'ils se présentaient le 27 octobre 2026.",
            'entetes' => ['Échéance', 'Obligation relevée', 'Source', 'Appui de l\'assistant'],
            'lignes'  => [
                ['Nouvelle entreprise ou nouvel employeur', 'Téléimmatriculation, à confirmer dans le mois auprès du centre de prévoyance sociale', 'Questions fréquentes et règles générales de la CNPS', 'Dresser la liste des pièces du dossier sans remplir l\'imprimé à la place du service'],
                ['Embauche d\'un salarié', 'Dossier travailleur : demande, avis d\'embauche sur imprimé CNPS, copie certifiée de l\'acte de naissance ou de la carte d\'identité', 'Règles générales de la CNPS', 'Suivre les dossiers incomplets dans un tableau'],
                ['Contrat à durée déterminée de plus de trois mois', 'Contrat écrit, ampliation à l\'inspecteur du travail', 'Code du travail, article 27', 'Rappeler l\'échéance de l\'envoi'],
                ['Huit jours après la fin du mois', 'Date limite du paiement mensuel des salaires', 'Code du travail, article 68', 'Prévenir ceux qui saisissent les variables'],
                ['Chaque paiement', 'Bulletin individuel remis et pièce émargée conservée', 'Code du travail, article 69', 'Vérifier que bulletin et pièce reprennent les mêmes lignes'],
                ['Le 15 du mois suivant', 'Versement de la retenue d\'IRPP au centre des impôts', 'Fiche « Tout savoir sur l\'IRPP », DGI', 'Rapprocher le total de la masse salariale du tableau'],
                ['Après la télédéclaration', 'Paiement en banque puis quittance au centre de rattachement', 'Obligations de l\'employeur, CNPS', 'Ranger reçu, copie de télédéclaration et quittance dans un même dossier'],
                ['Départ du salarié', 'Certificat de travail remis au moment du départ', 'Code du travail, article 44', 'Préparer le projet à partir du dossier'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui garde les identifiants de la CNPS et du portail fiscal dans l'entreprise, et que fait l'IA de ces accès ?",
            'intro' => "Les services en ligne de la CNPS et de la DGI engagent l'entreprise. La formation fait adopter quelques gestes simples, sans jamais ouvrir un portail réel pendant la séance.",
            'items' => [
                ['titre' => "Un responsable nommé par accès", 'texte' => "Le compte d'employeur appartient à l'entreprise, pas à la personne qui l'a créé. Le jour où elle part, la reprise se prépare, avec le nom de son remplaçant et la liste de ce qu'il peut déclarer."],
                ['titre' => "Aucun mot de passe dans un assistant", 'texte' => "Identifiant, code reçu par message ou capture du tableau de bord ne se collent dans aucun outil en ligne, même pour comprendre une démarche."],
                ['titre' => "Des schémas refaits à la main", 'texte' => "Pour expliquer à un collègue le chemin entre la télédéclaration, le paiement en banque et la quittance, l'exercice utilise un schéma dessiné pour l'occasion, jamais l'écran réel."],
                ['titre' => "Un dossier de preuves par mois", 'texte' => "Reçu de versement, copie de la télédéclaration et quittance se rangent ensemble, car la CNPS demande ces pièces pour délivrer la quittance. Le tableur de suivi indique la date de chaque étape."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain faut-il prévoir pour former un service RH à Douala, à Yaoundé ou plus loin ?",
            'paragraphes' => [
                "Le fuseau ne pose aucun problème. D'après la base IANA, Africa/Douala et Africa/Porto-Novo sont toutes deux des liens vers Africa/Lagos : Douala, Yaoundé et Cotonou sont à UTC+1, donc à la même heure. Une séance de 9 h à Yaoundé se tient à 9 h à Cotonou, d'où elle est animée.",
                "La langue est la seconde contrainte. L'article 69 du code du travail évoque lui-même les travailleurs qui ne savent lire ni écrire « en français ou en anglais » : un service camerounais a souvent des salariés des deux langues. Un groupe peut être francophone, anglophone ou mixte, et les consignes écrites suivent la langue du groupe. Toute traduction produite par l'assistant est relue par un locuteur avant diffusion.",
                "Un questionnaire envoyé avant la session relève le poste, le navigateur et le tableur de chacun. Les fichiers d'exercice sont déjà sur les machines, et les cas pratiques reprennent le classeur ou le logiciel de paie de l'entreprise. En cas de coupure, la formule de repli de la fiche parente s'applique et les supports écrits aident à reprendre.",
                "Aucun logiciel de paie n'est présumé. Chaque service a son tableur, son progiciel d'éditeur ou un module d'Odoo ou de Dolibarr, que Richard déploie par ailleurs. Avant d'en acheter un, demandez à l'éditeur ce qu'il calcule pour le Cameroun, taux du décret de 2016 compris, et ce qu'il laisse à paramétrer.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formule et quelle durée pour une équipe RH et paie camerounaise ?",
            'legende' => "Les durées et les effectifs sont ceux de la fiche IA en entreprise. Les séances se tiennent depuis Cotonou, à la même heure qu'à Douala et à Yaoundé.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Service qui n\'a jamais utilisé d\'assistant, ou direction qui veut observer avant de décider'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Service dont le recrutement et la paie utilisent déjà des outils sans règle commune'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre plusieurs villes, ou agendas qui interdisent les journées entières'],
                ['Session mutualisée', '1 à 2 jours', 'Une ou deux personnes par structure', 'Petites entreprises, cabinets, associations ; exercices sur pièces inventées'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Consolider les réflexes et ajouter des tâches'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se déroule la formation d'une entreprise camerounaise, de la demande à l'après-session ?",
            'items' => [
                ['titre' => "Votre demande", 'duree' => "Réponse sous 24 heures", 'texte' => "Précisez le nombre de personnes, leurs postes, la ville (Douala, Yaoundé ou autre), la langue de travail et l'outil de paie en place. Un ou deux entretiens de cadrage fixent ensuite la formule."],
                ['titre' => "Avant la session", 'duree' => "Questionnaire et documents", 'texte' => "Un questionnaire relève le poste et l'équipement de chacun. Le service reçoit les documents d'exercice à télécharger avant la séance : annonce, contrat d'essai, tableau de variables de paie, certificat de travail, sans aucun nom réel."],
                ['titre' => "Pendant la session", 'duree' => "Demi-journées ou séances de 2 h 30", 'texte' => "On part de la tâche, on lit l'article camerounais qui s'y rapporte, puis on refait le geste dans l'outil, pièce en main."],
                ['titre' => "L'épreuve finale", 'duree' => "Dernière demi-journée", 'texte' => "Chaque participant reprend seul, chronomètre en main, une tâche de son poste, par exemple le contrôle d'un tableau de paie fictif, et commente ses vérifications."],
                ['titre' => "À la fin", 'duree' => "Fin de session", 'texte' => "Remise des supports, des corrigés d'exercices et d'une attestation nominative."],
                ['titre' => "Après la formation", 'duree' => "Le mois suivant", 'texte' => "Un canal direct reste ouvert le mois suivant pour les questions d'application, et l'accompagnement mensuel peut suivre."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quatre séances pour un service RH camerounais : quelle consigne, et que vérifie le participant ?",
            'intro' => "Chaque séance part d'une situation fictive. Sociétés, salariés et montants sont inventés pour l'exercice.",
            'items' => [
                ['titre' => "Séance 1 : une annonce bilingue pour une agence de Bafoussam", 'texte' => "Situation : une société fictive de négoce, Ouest Négoce SARL, recrute un assistant administratif. Consigne : rédiger l'annonce en français, puis sa version anglaise. Le participant contrôle qu'aucun critère ne touche à l'origine, au sexe, à l'âge ou à la confession, que le salaire annoncé est celui de la direction et respecte l'égalité de l'article 61, et que la version anglaise dit la même chose que la française."],
                ['titre' => "Séance 2 : un contrat à durée déterminée et son essai", 'texte' => "Situation : un technicien fictif est recruté pour dix-huit mois. Consigne : proposer une trame de contrat et une clause d'essai. Le participant vérifie l'écrit exigé au-delà de trois mois (article 27), la durée totale et le renouvellement (article 25), la durée de l'essai (article 28) et laisse la rédaction finale au juriste."],
                ['titre' => "Séance 3 : le contrôle de la paie avant la télédéclaration", 'texte' => "Situation : un tableau fictif de 40 salariés avec trois erreurs d'heures et un salaire au-dessus du plafond. Consigne : lister les incohérences avec le mois précédent et rédiger une note de deux phrases. Le participant recalcule deux bulletins à la main, relit le plafond du décret de 2016 et laisse à la CNPS le soin de recevoir la déclaration."],
                ['titre' => "Séance 4 : un départ à documenter", 'texte' => "Situation : une salariée fictive quitte l'entreprise. Consigne : écrire la notification et remplir le certificat de travail à partir de sa fiche de poste. Le participant vérifie le motif écrit (article 34), les seules mentions de l'article 44, des dates tirées du dossier et l'absence de toute donnée de santé ou de syndicat."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment budgéter la formation d'un service RH au Cameroun, et existe-t-il un fonds pour la financer ?",
            'paragraphes' => [
                "Selon Ecomatin, le 10 décembre 2024, le ministre de l'Emploi et de la Formation professionnelle a plaidé pour un fonds national de financement de la formation professionnelle, après son audition devant la commission des Finances de l'Assemblée nationale. Le même article chiffre le budget du ministère à 33,1 milliards de FCFA pour 2025 contre 28,8 milliards en 2024.",
                "Le seul dispositif de financement décrit dans cet article est un prélèvement sur les travailleurs non africains, fixé par la loi de finances de 2023, qui sert surtout à transformer des structures en centres de formation. Il n'y est pas question d'une prise en charge de la formation des salariés d'une entreprise privée : l'article ne dit rien d'un fonds pour les formations de ce type.",
                "La prudence est donc de budgéter sur les ressources de l'entreprise, en FCFA, et d'interroger par écrit le ministère ou l'organisme professionnel de l'entreprise avant de compter sur une aide. Aucune prise en charge n'est promise, et Richard SALANON n'affiche ni agrément ni certification d'un organisme public.",
                "Les pièces remises servent dans tous les cas : programme détaillé, devis, feuilles de présence, attestation nominative. On peut aussi étaler la dépense, en commençant par un atelier d'une demi-journée avant la formation complète ou l'accompagnement mensuel.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour une équipe RH au Cameroun ?",
            'intro'      => "Cette page ne contient aucun montant. Le devis est établi en FCFA une fois le cadrage terminé ; les abonnements aux assistants sont souscrits par l'entreprise elle-même.",
            'items'      => [
                ['offre' => 'Atelier découverte RH', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Deux tâches sur modèles fictifs', 'Règles de base sur les données']],
                ['offre' => 'Formation complète RH et paie', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Deux jours en quatre demi-journées', 'Exercices tirés de votre classeur de paie', 'Épreuve chronométrée et attestation', 'Canal direct pendant un mois']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Trois rendez-vous mensuels d'une demi-journée", 'Reprise des cas du mois et tâches nouvelles']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par poste.",
                "Le nombre de langues : un groupe francophone et un groupe anglophone comptent deux jeux de supports.",
                "Le format retenu et le nombre de séances en visioconférence.",
                "Le temps de préparation des exercices tirés de vos pièces.",
                "Les outils à couvrir : un tableur, ou aussi un module de paie d'Odoo ou de Dolibarr.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les services RH camerounais qui démarrent l'IA ?",
            'intro' => "Elles viennent de la presse des échéances : paie du mois, retenue d'IRPP avant le 15, poste vacant à Douala ou à Yaoundé.",
            'items' => [
                ['titre' => "Demander un taux à l'assistant", 'texte' => "Il répond avec aplomb, et peut citer les chiffres d'un autre pays ou d'un exercice passé. Taux et plafond de la CNPS se lisent dans le décret de 2016 et sur le site de la caisse."],
                ['titre' => "Recopier une durée d'essai d'ailleurs", 'texte' => "L'article 28 fixe six mois au plus, renouvellement compris, huit pour les cadres. Un modèle étranger affiche d'autres durées : on relit le texte camerounais."],
                ['titre' => "Oublier le contrat écrit au-delà de trois mois", 'texte' => "L'article 27 impose l'écrit, avec une ampliation à l'inspecteur du travail. Un assistant n'en sait rien si on ne le lui dit pas."],
                ['titre' => "Coller un dossier nominatif dans un compte personnel", 'texte' => "Nom, numéro de téléphone et situation de santé quittent le Cameroun : la loi de 2024 soumet un transfert à l'étranger à l'autorisation préalable de l'autorité. Le même exercice se fait sur un dossier fictif."],
                ['titre' => "Laisser l'outil faire la liste courte", 'texte' => "Le tri de l'outil finit par s'imposer sans débat. Une personne désignée et une grille fixée avant la lecture des CV gardent la décision dans le service."],
                ['titre' => "Confondre tableau de travail et pièce de paie", 'texte' => "L'article 69 demande une pièce émargée et conservée comme pièce comptable. Le classeur modifiable l'alimente, il ne la remplace pas."],
                ['titre' => "Traduire sans relecture", 'texte' => "Une annonce ou une note de service traduite par l'assistant garde parfois un faux sens. Un locuteur de la langue cible relit avant diffusion."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi se former avec Richard SALANON quand on gère les RH ou la paie au Cameroun ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Pour un service du personnel camerounais, Richard peut conduire des séances sur les assistants d'IA, les tableurs et les formulaires, en français comme en anglais. Il n'exerce pas la fonction RH : les exercices partent de vos modèles anonymisés, et les questions de droit restent au conseil de l'entreprise. Le Cameroun fait partie des " . count((array) fait('pays_travailles')) . " pays où il a travaillé.",
                "Son parcours compte " . $ans . " ans dans le numérique, avec une formation à " . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ". Il est l'auteur de <a href='https://wapy.pro'>Wapy</a>, assistant WhatsApp à intelligence artificielle, et co-fonde <a href='https://audyxa.com'>Audyxa</a>. Aucun éditeur d'IA ni de logiciel de paie ne l'a certifié.",
                "Le détail de ses travaux figure sur les <a href='/realisations/'>réalisations</a>, celui de son parcours sur la page <a href='/richard-salanon'>Richard SALANON</a>, et les pays servis sur les <a href='/zones/'>zones d'intervention</a>. Trois formations complètent cette page, <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, <a href='/formations/excel-google-sheets'>Excel et Google Sheets pour la gestion</a> et <a href='/formations/ia-en-entreprise'>IA en entreprise</a>, ainsi que l'organisation des sessions sur la page <a href='/services/formation-en-entreprise'>formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre service RH ou votre équipe paie au Cameroun ?",
            'texte'  => "Décrivez votre service : effectif, postes, langue de travail et logiciels en usage. Une réponse arrive sous 24 heures, suivie d'une proposition et d'un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA pour les RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les responsables RH à l'IA au Cameroun ?", 'r' => "Depuis Cotonou, Richard SALANON peut animer à distance des séances pour les RH camerounais (recrutement, contrats, paie), autour d'un assistant d'IA appliqué à leurs propres modèles, en français ou en anglais. Il enseigne l'outil et laisse le métier aux professionnels."],
        ['q' => "Combien de temps dure une période d'essai selon le code du travail camerounais ?", 'r' => "L'article 28 de la loi n° 92/007 du 14 août 1992 exige qu'elle soit stipulée par écrit et la limite à six mois, renouvellement compris, huit mois pour les cadres. Un cas précis se confirme auprès de l'inspection du travail."],
        ['q' => "Un contrat de travail doit-il toujours être écrit au Cameroun ?", 'r' => "D'après l'article 24, son existence est constatée dans les formes que les parties adoptent. L'article 27 impose l'écrit pour un contrat à durée déterminée supérieure à trois mois ou nécessitant l'installation du travailleur hors de sa résidence habituelle."],
        ['q' => "Que doit contenir le certificat de travail ?", 'r' => "L'article 44 en limite le contenu aux dates d'entrée et de sortie et aux emplois tenus, avec leurs dates. L'assistant met en forme un projet, et les dates sortent du dossier du salarié."],
        ['q' => "À quel rythme les salaires doivent-ils être payés ?", 'r' => "L'article 68 prévoit des intervalles de paiement d'un mois au plus et, pour les paiements mensuels, un règlement dans les huit jours qui suivent la fin du mois travaillé. L'article 69 ajoute le bulletin individuel remis au moment du paiement."],
        ['q' => "Quels taux de cotisation la CNPS applique-t-elle ?", 'r' => "Le décret n° 2016/072 du 15 février 2016 fixe notamment 7 % pour les prestations familiales à la charge de l'employeur et 8,4 % pour les pensions, partagés à parts égales, sous un plafond de 750 000 FCFA par mois. Les taux étant révisables, relisez le texte en vigueur avant de les paramétrer."],
        ['q' => "Quand verser la retenue d'IRPP des salariés ?", 'r' => "Selon la fiche de la DGI consultée le 27 octobre 2026, l'employeur la verse au plus tard le 15 du mois suivant, au titre de l'article 82 du code général des impôts. Confirmez le détail auprès de votre centre des impôts."],
        ['q' => "Les CV et bulletins de mes salariés peuvent-ils aller dans un assistant en ligne ?", 'r' => "Pas avec les noms. La loi n° 2024/017, applicable depuis le 23 juin 2026, exige un consentement explicite et soumet le transfert vers l'étranger à une autorisation préalable. Les exercices remplacent donc les identités par des données fictives."],
        ['q' => "Un assistant peut-il se connecter au portail de la CNPS à ma place ?", 'r' => "Non, et aucun identifiant ne doit lui être confié. Il aide à préparer le tableau, à contrôler les totaux et à ranger les justificatifs ; la télédéclaration et le paiement restent du ressort de la personne désignée."],
        ['q' => "Faut-il décaler les séances entre Yaoundé et Cotonou ?", 'r' => "Non, aucun décalage. Dans la base IANA, les deux zones Africa/Douala et Africa/Porto-Novo renvoient à Africa/Lagos, donc à UTC+1."],
        ['q' => "Un fonds public peut-il payer la formation d'un service RH camerounais ?", 'r' => "Rien ne confirme une prise en charge de ce type. Un article d'Ecomatin du 10 décembre 2024 rapporte une proposition de fonds national de financement de la formation professionnelle. Budgétez sur fonds propres et interrogez le ministère avant de compter sur une aide."],
        ['q' => "Comment est chiffrée la formation d'un service RH camerounais ?", 'r' => "Pas de grille publiée : un devis en FCFA vous est remis après le cadrage. Deux groupes de langues différentes, francophone et anglophone, comptent deux jeux de supports, ce qui pèse sur le total."],
        ['q' => "Que remet-on aux participants camerounais à la fin ?", 'r' => "Chaque participant repart avec une attestation à son nom ; elle atteste d'une présence et d'une épreuve finale, et ne vaut ni diplôme ni titre délivré par un éditeur."],
    ],

    'sources' => [
        ['titre' => "Loi n° 92/007 du 14 août 1992 portant code du travail du Cameroun, ministère des Finances", 'url' => 'https://www.minfi.gov.cm/wp-content/uploads/2023/07/LOI_N_092_007_DU_14_A0UT_1992_portant_code_du_travail.pdf', 'date' => '2026-10-27'],
        ['titre' => "Décret n° 2016/072 du 15 février 2016 fixant les taux de cotisation et les plafonds de rémunération, CNPS", 'url' => 'https://www.cnps.cm/images/imprimes1/decret%20fixant%20taux%20de%20cotisations%20sociales%20et%20plafonds%20des%20rmunrations.pdf', 'date' => '2026-10-27'],
        ['titre' => "CNPS du Cameroun, services en ligne pour employeurs", 'url' => 'https://www.cnps.cm/fr/employeurs/services-en-ligne-pour-employeurs.html', 'date' => '2026-10-27'],
        ['titre' => "CNPS du Cameroun, obligations de l'employeur", 'url' => 'https://www.cnps.cm/fr/employeurs/obligations-de-lemployeur1.html', 'date' => '2026-10-27'],
        ['titre' => "CNPS du Cameroun, règles générales pour les employeurs", 'url' => 'https://www.cnps.cm/fr/employeurs/regles-generales-pour-les-employeurs1.html', 'date' => '2026-10-27'],
        ['titre' => "CNPS du Cameroun, textes réglementaires", 'url' => 'https://www.cnps.cm/fr/medias/textes-reglementaires1.html', 'date' => '2026-10-27'],
        ['titre' => "Direction générale des impôts du Cameroun, tout savoir sur l'IRPP (traitements et salaires)", 'url' => 'https://www.impots.cm/fr/document/tout-savoir-sur-lirpp', 'date' => '2026-10-27'],
        ['titre' => "Direction générale des impôts du Cameroun, page d'accueil et e-services", 'url' => 'https://www.impots.cm', 'date' => '2026-10-27'],
        ['titre' => "Droit, médias et finance : la loi sur les données personnelles entre en vigueur le 23 juin 2026", 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-27'],
        ['titre' => "Digital Business Africa : l'autorité de protection des données créée (24 décembre 2024)", 'url' => 'https://www.digitalbusiness.africa/cameroun-lautorite-de-protection-des-donnees-a-caractere-personnel-creee/', 'date' => '2026-10-27'],
        ['titre' => "Ecomatin : vers un fonds national de financement de la formation professionnelle (10 décembre 2024)", 'url' => 'https://ecomatin.net/cameroun-vers-la-creation-dun-fonds-national-pour-financer-la-formation-professionnelle', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Douala, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
