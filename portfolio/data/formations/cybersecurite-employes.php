<?php
// ============================================================
// data/formations/cybersecurite-employes.php · Fiche formation
// « Cybersécurité pour les employés » (vague 1B, lot A, domaine cybersecurite-it).
// Angle propre : les réflexes des salariés (hameçonnage, mots de passe,
// double authentification, appareils, signalement). Les décisions de
// direction (sauvegardes, accès, prestataires, gestion d'incident) relèvent
// de securite-donnees-dirigeants ; le choix d'un hébergement, de cloud-hebergement.
// Aucune ancienne page. Chiffres et règles relevés le 05/10/2026 :
// Cybermalveillance.gouv.fr (bilan 2025 des professionnels, 06/05/2026),
// CNIL (rapport annuel 2025, recommandations mots de passe et MFA), ANSSI
// (guide du 08/10/2021), ANSSI Côte d'Ivoire, bilan.gouv.ci, INTERPOL
// (rapport Afrique 2026), bjCSIRT et ASIN au Bénin, DCSSI au Sénégal,
// avis de sanction de l'ICO (British Airways) et enquête de Wired (Maersk).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation cybersécurité pour les employés : repérer l\'hameçonnage, protéger ses comptes et ses appareils, signaler un incident sans attendre',
    'title'   => 'Formation cybersécurité pour les employés | Richard SALANON',
    'meta'    => 'Formation cybersécurité pour salariés : repérer l\'hameçonnage, tenir ses mots de passe, activer la double authentification, signaler vite. Sur devis.',
    'en_bref' => 'Cette formation donne aux salariés, de l\'accueil à la comptabilité, les réflexes qui coupent court aux attaques les plus fréquentes : reconnaître un hameçonnage par courriel, SMS, WhatsApp ou téléphone, ranger ses mots de passe dans un coffre-fort, activer la double authentification, garder ses appareils à jour et signaler tout de suite un clic douteux. Elle dure une journée, complétée au besoin par une demi-journée pour les postes qui paient ou détiennent des données sensibles, sur place ou à distance, avec des exercices sur les comptes réels des participants. Le prix est fixé sur devis, selon le nombre de personnes et le format retenu.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'cybersecurite-it',
    'forte'   => true,
    'duree'   => 'Une journée, une demi-journée de plus pour les postes sensibles, puis un suivi de deux heures',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : reconnaître l\'hameçonnage, par courriel, SMS, WhatsApp ou téléphone',
            'duree'  => '3 h 30',
            'points' => [
                'Tour de table : les messages douteux reçus par chacun ce mois-ci, et ce qu\'il en a fait.',
                'Anatomie d\'un message piégé : nom affiché et adresse réelle de l\'expéditeur, domaine du lien, pièce jointe, et les quatre ressorts habituels, l\'urgence, l\'autorité, le gain et la peur.',
                'Lire une adresse web sans se tromper : domaine principal, sous-domaines trompeurs, lettres substituées, liens raccourcis et QR codes collés sur une affiche ou une facture.',
                'Les variantes que l\'on reçoit en Afrique de l\'Ouest : faux transfert Mobile Money, faux colis, faux recruteur, faux agent d\'opérateur, faux héritage, faux collègue dont le compte WhatsApp a été volé.',
                'Les appels et les messages vocaux : faux conseiller bancaire, faux technicien, voix imitée, et la règle du rappel sur un numéro déjà connu.',
                'Les attaques qui visent la double authentification : code demandé sur une fausse page, avalanche de demandes de validation.',
                'Exercice : trier vingt messages réels, anonymisés, en « légitime », « douteux » et « malveillant », puis justifier chaque choix.',
                'Le circuit de signalement de l\'entreprise : à qui transférer, quoi ne surtout pas faire, en combien de minutes.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : comptes, mots de passe, double authentification et appareils',
            'duree'  => '3 h 30',
            'points' => [
                'Inventaire de ses comptes professionnels : messagerie, banque en ligne, compte marchand Mobile Money, réseaux sociaux de l\'entreprise, logiciel de gestion.',
                'Pourquoi la messagerie passe en premier : elle sert à réinitialiser tous les autres mots de passe.',
                'Phrase de passe, longueur et mots de passe uniques, selon les recommandations de l\'ANSSI et de la CNIL.',
                'Mise en service du coffre-fort de mots de passe retenu par l\'entreprise, ou de KeePassXC à défaut, et remplacement d\'un premier mot de passe réutilisé.',
                'Activation de la double authentification sur la messagerie puis sur les comptes critiques : application plutôt que SMS, codes de secours rangés hors du téléphone.',
                'Téléphone et ordinateur : verrouillage, mises à jour automatiques, applications installées depuis les magasins officiels seulement, conduite à tenir en cas de perte ou de vol.',
                'Wi-Fi public, clé USB trouvée, ordinateur partagé ou de cybercafé, poste familial utilisé en télétravail.',
                'Exercice de contrôle : chacun repart avec la double authentification active sur sa messagerie et un coffre-fort en service.',
            ],
        ],
        [
            'titre'  => 'Demi-journée complémentaire : comptabilité, caisse, achats, paie et assistants de direction',
            'duree'  => '3 h 30',
            'points' => [
                'Les trois formes de la fraude au virement : faux dirigeant pressé, faux fournisseur qui change de coordonnées bancaires, faux salarié qui change de compte de paie.',
                'La procédure de contre-appel sur un numéro déjà connu et la validation à deux personnes, sans exception possible.',
                'Le faux support informatique qui demande d\'installer un outil de prise en main à distance.',
                'Les données personnelles que l\'on manipule : fichiers clients, paie, dossiers d\'élèves ou de patients ; envoyer au bon destinataire, partager un fichier par lien sans l\'ouvrir à tous.',
                'Reconnaître une violation de données et la signaler aussitôt en interne, pour que l\'entreprise puisse remplir ses obligations.',
                'Exercice : une demande urgente de virement reçue par courriel, puis relancée par WhatsApp et par téléphone, traitée de bout en bout.',
            ],
        ],
        [
            'titre'  => 'Séance de suivi, trois à quatre semaines plus tard : ce qui a tenu, ce qui a glissé',
            'duree'  => '2 h, à distance',
            'points' => [
                'Résultats de l\'exercice d\'hameçonnage simulé, s\'il a été retenu, présentés par service et sans aucun nom.',
                'Vérification rapide : double authentification toujours active, coffre-fort réellement utilisé, téléphones à jour.',
                'Lecture des signalements reçus depuis la formation, et de ceux qui auraient dû l\'être.',
                'Mise à jour de la fiche réflexe et du circuit de signalement avec ce que l\'équipe a appris.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Une journée, une demi-journée de plus pour les postes sensibles, puis un suivi de deux heures'],
        ['l' => 'Public', 'v' => 'Tout salarié qui a une messagerie, un téléphone ou un accès à un logiciel de l\'entreprise'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Les attaques que l\'on rencontre le plus souvent dans une PME ne demandent aucune prouesse technique. Elles passent par un geste ordinaire : un clic sur un lien, un code transmis au téléphone, un virement fait dans l\'urgence, un mot de passe déjà utilisé ailleurs. Cette formation s\'adresse à ceux qui font ces gestes chaque jour, c\'est-à-dire tout le personnel, et pas seulement à l\'informaticien. Elle se déroule sur les messageries, les téléphones et les comptes réels des participants, parce qu\'un réflexe appris sur un exemple fictif résiste mal à un vrai message bien imité.',
                'À la fin de la journée, chaque participant sait faire huit choses, vérifiées par un exercice et non par un questionnaire : lire l\'adresse réelle d\'un expéditeur et d\'un lien avant de cliquer ; reconnaître les ressorts d\'un message piégé ; refuser de communiquer un code reçu par SMS ou de valider une connexion qu\'il n\'a pas déclenchée ; ranger ses mots de passe dans un coffre-fort ; activer la double authentification sur sa messagerie ; verrouiller et mettre à jour son téléphone et son ordinateur ; appliquer le contre-appel avant un virement inhabituel ; signaler un incident à la bonne personne, dans les minutes qui suivent.',
                'La formation ne traite pas des décisions qui reviennent à la direction : politique de sauvegarde, attribution des droits d\'accès, contrats avec les prestataires, plan de réponse à un incident grave. Ces sujets font l\'objet de la formation consacrée à la sécurité des données et aux sauvegardes pour dirigeants. Le choix d\'un hébergement ou d\'un service en nuage relève d\'une autre formation, destinée aux décideurs. Elle ne forme pas non plus d\'administrateurs systèmes : pare-feu, supervision et durcissement des serveurs relèvent d\'une prestation technique, comme la <a href="/services/maintenance-support">maintenance et le support</a> de vos outils.',
                'Elle ne prétend pas rendre une entreprise invulnérable. Un salarié formé se fera peut-être tromper un jour par un message très bien construit ; la différence tient à ce qu\'il fait ensuite. Celui qui prévient dans les dix minutes laisse une chance de bloquer un virement, de couper une session ou de changer un mot de passe avant que le dégât ne s\'étende. C\'est pourquoi chaque séquence de la journée se termine par la même question, posée à voix haute : à qui le dire, et comment ?',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Pourquoi former les salariés, et pas seulement acheter un logiciel de sécurité ?',
            'items' => [
                ['valeur' => '21 %', 'libelle' => 'des demandes d\'assistance des entreprises et associations portaient en 2025 sur un piratage de compte, leur première menace, en hausse de 52 %', 'source' => 'Cybermalveillance.gouv.fr, principales cybermalveillances visant les professionnels en 2025, publié le 6 mai 2026', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/top10-cybermalveillances-professionnels-2025'],
                ['valeur' => '16 %', 'libelle' => 'portaient sur l\'hameçonnage, deuxième menace des entreprises et associations en 2025, en hausse de 29 %', 'source' => 'Cybermalveillance.gouv.fr, principales cybermalveillances visant les professionnels en 2025, publié le 6 mai 2026', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/top10-cybermalveillances-professionnels-2025'],
                ['valeur' => '13,5 %', 'libelle' => 'portaient sur une fraude au virement, entrée en 2025 dans les trois premières menaces des entreprises, en hausse de 93 %', 'source' => 'Cybermalveillance.gouv.fr, principales cybermalveillances visant les professionnels en 2025, publié le 6 mai 2026', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/top10-cybermalveillances-professionnels-2025'],
                ['valeur' => '6 167', 'libelle' => 'violations de données personnelles notifiées à la CNIL en 2025, un record ; une sur deux relevait d\'un piratage', 'source' => 'CNIL, rapport annuel 2025, publié le 18 mai 2026', 'url' => 'https://www.cnil.fr/fr/rapport-annuel-2025'],
                ['valeur' => 'Plus de 12 000', 'libelle' => 'plaintes enregistrées en 2024 par la Plateforme de lutte contre la cybercriminalité de Côte d\'Ivoire, contre plus de 6 000 en 2022', 'source' => 'Gouvernement de Côte d\'Ivoire, bilan.gouv.ci, 7 juin 2025', 'url' => 'https://www.bilan.gouv.ci/actualite/18565'],
                ['valeur' => '55 %', 'libelle' => 'des cybercrimes signalés en Afrique sont liés à l\'intelligence artificielle ; les pertes déclarées sont passées de 192 à 484 millions de dollars depuis 2024', 'source' => 'INTERPOL, rapport d\'évaluation des cybermenaces en Afrique 2026, annoncé le 3 août 2026', 'url' => 'https://www.interpol.int/News-and-Events/News/2026/INTERPOL-report-finds-AI-linked-to-more-than-half-of-cybercrime-in-Africa'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent ces chiffres pour une entreprise de dix ou de cinquante personnes ?',
            'paragraphes' => [
                'Les trois premières menaces relevées par Cybermalveillance.gouv.fr pour les entreprises et associations ont un point commun : elles passent par une personne. Un compte est piraté parce qu\'un mot de passe a été saisi sur une fausse page ou réutilisé ailleurs ; un hameçonnage réussit parce qu\'un message a été cru ; une fraude au virement aboutit parce qu\'une demande pressante n\'a pas été vérifiée. Un antivirus ou un filtre de messagerie écarte une partie de ces tentatives, jamais toutes. Le dernier filtre reste la personne qui lit le message, et c\'est elle que la formation équipe.',
                'Les sources africaines vont dans le même sens. La page « En entreprise » de l\'ANSSI de Côte d\'Ivoire range parmi les menaces la compromission des boîtes mail, l\'usurpation d\'identité professionnelle et les escroqueries par fausses factures ou changement d\'IBAN, et fait de la formation des équipes une priorité, avec des sessions régulières, des mises en situation et des tests d\'hameçonnage. INTERPOL observe, dans son rapport 2026, que les escroqueries sentimentales et la compromission de messagerie professionnelle prospèrent en Afrique de l\'Ouest.',
                'Pour une petite structure, la conséquence est pratique : la dépense la plus utile n\'est pas toujours un nouvel outil, mais une journée où chacun active ce qu\'il possède déjà. La double authentification est souvent incluse dans la messagerie, les mises à jour sont gratuites, un coffre-fort de mots de passe peut ne rien coûter. Ce qui manque, en général, c\'est le temps de le faire ensemble, avec quelqu\'un qui répond aux questions au moment où elles se posent.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, à quel niveau, et que faut-il apporter ?',
            'intro' => 'Le public est large : toute personne qui ouvre une messagerie professionnelle, répond au téléphone au nom de l\'entreprise ou se connecte à un logiciel de gestion. Aucun prérequis technique n\'est demandé.',
            'items' => [
                ['titre' => 'Accueil, secrétariat et assistants', 'texte' => 'Ils reçoivent les premiers messages et les premiers appels, y compris ceux qui se font passer pour un client, un fournisseur, un service public ou un dirigeant en déplacement.'],
                ['titre' => 'Comptabilité, caisse, achats et paie', 'texte' => 'Les postes qui paient ou modifient des coordonnées bancaires sont la cible naturelle des fraudes au virement. La demi-journée complémentaire leur est réservée.'],
                ['titre' => 'Commerciaux et service client', 'texte' => 'Ils échangent par WhatsApp, par courriel et sur les réseaux sociaux, souvent depuis leur téléphone personnel, et manipulent chaque jour les coordonnées des clients.'],
                ['titre' => 'Dirigeants qui veulent montrer l\'exemple', 'texte' => 'Leur présence change le ton de la journée : un dirigeant qui active sa double authentification devant ses équipes convainc plus qu\'une note de service. Les décisions de direction restent l\'objet d\'une autre formation.'],
                ['titre' => 'Niveau requis', 'texte' => 'Savoir utiliser sa messagerie et son téléphone suffit. Un court questionnaire préalable repère qui a déjà un gestionnaire de mots de passe, qui partage un ordinateur, et qui travaille sur un appareil personnel.'],
                ['titre' => 'Matériel à apporter', 'texte' => 'Son téléphone chargé, avec l\'accès à son compte de magasin d\'applications ; son ordinateur de travail ; les identifiants de sa messagerie professionnelle. Les mots de passe restent dans la tête ou le coffre de chacun : ni le formateur ni le groupe ne les voient jamais.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur leurs propres comptes ?',
            'items' => [
                ['titre' => 'Le tri de la boîte de réception', 'duree' => '25 minutes', 'texte' => 'Chacun parcourt ses courriels, SMS et messages WhatsApp des derniers jours et en isole trois qui lui paraissent douteux. Le groupe les examine, anonymisés : adresse réelle de l\'expéditeur, domaine du lien, demande formulée. Beaucoup découvrent qu\'ils ont déjà reçu des tentatives sans les voir.'],
                ['titre' => 'La lecture des liens', 'duree' => '20 minutes', 'texte' => 'Sur une série de liens et de QR codes préparés par le formateur, chacun annonce le domaine qui s\'ouvrira vraiment, sans cliquer. Sur téléphone, on apprend l\'appui long qui affiche l\'adresse avant de l\'ouvrir.'],
                ['titre' => 'L\'inventaire des comptes', 'duree' => '30 minutes', 'texte' => 'Chaque participant liste ses comptes professionnels, de la messagerie à la banque en ligne, et repère ceux qui partagent le même mot de passe. La liste reste sur sa feuille ; elle sert à décider par où commencer.'],
                ['titre' => 'Le coffre-fort en service', 'duree' => '45 minutes', 'texte' => 'Installation du gestionnaire retenu par l\'entreprise, ou de KeePassXC à défaut, choix d\'une phrase de passe maîtresse, enregistrement des comptes prioritaires et remplacement d\'un premier mot de passe réutilisé.'],
                ['titre' => 'La double authentification activée', 'duree' => '40 minutes', 'texte' => 'Activation sur la messagerie professionnelle, puis sur les comptes critiques : application d\'authentification de préférence au SMS, codes de secours imprimés et rangés, essai de connexion depuis un autre appareil.'],
                ['titre' => 'Le téléphone remis en ordre', 'duree' => '25 minutes', 'texte' => 'Verrouillage de l\'écran, mises à jour du système et des applications, suppression des applications venues d\'ailleurs que des magasins officiels, vérification en deux étapes de WhatsApp activée.'],
                ['titre' => 'L\'appel du faux technicien', 'duree' => '20 minutes', 'texte' => 'Le formateur appelle un volontaire en se présentant comme le support informatique ou la banque, et lui demande un code. Le groupe analyse l\'échange : à quel moment fallait-il raccrocher, et qui fallait-il rappeler ?'],
                ['titre' => 'Le premier signalement', 'duree' => '15 minutes', 'texte' => 'Chacun transfère un message douteux à l\'adresse ou à la personne désignée par l\'entreprise, selon la procédure écrite remise en fin de journée. Le circuit est éprouvé avant d\'en avoir besoin.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'À quoi ressemble un hameçonnage aujourd\'hui, et pourquoi les anciens conseils ne suffisent plus ?',
            'paragraphes' => [
                'On a longtemps appris à repérer les fautes d\'orthographe et les logos flous. Ces indices s\'effacent : les textes produits par l\'intelligence artificielle sont propres, les pages imitées copient les vraies, et les données volées lors de fuites précédentes permettent de citer votre nom, votre fonction ou votre dernière commande. Le rapport 2026 d\'INTERPOL sur l\'Afrique note que des contenus truqués générés par IA accompagnent déjà la sextorsion et le harcèlement en ligne. La formation déplace donc l\'attention de la forme du message vers ce qu\'il demande.',
                'Quatre demandes suffisent à déclencher l\'alerte, quel que soit le canal : saisir un identifiant après avoir cliqué sur un lien, communiquer un code reçu par SMS, installer un logiciel ou une application, payer ou modifier des coordonnées bancaires. Aucune n\'est forcément frauduleuse, mais chacune justifie une vérification par un autre chemin : retaper soi-même l\'adresse du site, rappeler sur un numéro déjà connu, poser la question à un collègue. Cybermalveillance.gouv.fr le rappelle dans sa fiche sur les mots de passe : aucune organisation sérieuse ne vous demandera de lui communiquer le vôtre.',
                'Les canaux changent aussi. En Afrique de l\'Ouest, une grande partie des échanges professionnels passe par WhatsApp et par le téléphone, et les attaques suivent : message d\'un collègue dont le compte a été volé, code de vérification « envoyé par erreur » qu\'on vous prie de renvoyer, faux agent de transfert d\'argent, faux recruteur. Les participants travaillent ces variantes autant que le courriel classique, à partir des exemples qu\'ils ont eux-mêmes reçus, et apprennent à activer la vérification en deux étapes de WhatsApp.',
                'Dernier changement, l\'attaque vise parfois la double authentification elle-même. Une fausse page peut demander le code à usage unique en même temps que le mot de passe, puis le rejouer aussitôt sur le vrai site ; une rafale de demandes de validation peut pousser un salarié excédé à appuyer sur « oui ». D\'où deux réflexes travaillés en séance : ne jamais saisir un code sur une page atteinte par un lien reçu, et refuser toute demande de connexion que l\'on n\'a pas déclenchée soi-même, puis le signaler.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles règles de mots de passe et d\'authentification appliquer, selon l\'ANSSI et la CNIL ?',
            'legende' => 'Recommandations de l\'ANSSI (guide sur l\'authentification multifacteur et les mots de passe du 8 octobre 2021), de la CNIL (recommandation sur les mots de passe publiée le 14 octobre 2022) et de Cybermalveillance.gouv.fr (fiche mise à jour le 12 mai 2026), relevées le 5 octobre 2026.',
            'entetes' => ['Question des participants', 'Ce que disent les textes', 'Ce que l\'on fait en formation'],
            'lignes'  => [
                ['Quelle longueur faut-il ?', 'ANSSI : de 12 à 14 caractères au moins pour une sensibilité moyenne à forte, 15 et plus au-delà. CNIL : par exemple 12 caractères mêlant quatre types, 14 caractères sans caractère spécial, ou une phrase de passe d\'au moins 7 mots.', 'Une longue phrase de passe pour le coffre-fort et la messagerie ; des mots de passe générés par le coffre pour tout le reste'],
                ['Faut-il changer son mot de passe tous les trois mois ?', 'ANSSI (R24 et R25) : pas de délai d\'expiration par défaut sur les comptes ordinaires quand les mots de passe sont robustes ; un délai pour les comptes d\'administration, par exemple de 1 à 3 ans. La CNIL a abandonné en 2022 le renouvellement périodique obligatoire des comptes ordinaires.', 'On change immédiatement en cas de doute, pas par habitude ; la politique écrite de l\'entreprise reste la règle'],
                ['Un mot de passe par compte, vraiment ?', 'Cybermalveillance.gouv.fr : un mot de passe différent pour chaque service, pour qu\'une fuite n\'en ouvre qu\'un ; jamais de date de naissance ni de suite comme « azerty ».', 'Remplacement des mots de passe réutilisés, en commençant par la messagerie'],
                ['Où les garder ?', 'ANSSI (R31 et R35) : un coffre-fort de mots de passe mis à disposition et une formation à son usage ; jamais de note sous le clavier, de fichier « mot de passe » sur le poste, ni d\'envoi par courriel.', 'Coffre-fort installé et utilisé pendant la séance'],
                ['La messagerie mérite-t-elle un traitement à part ?', 'ANSSI (R36) : un mot de passe robuste et, quand c\'est possible, l\'authentification multifacteur pour sa messagerie, dont la compromission ouvre souvent tous les autres comptes.', 'Première activation de la double authentification de la journée'],
                ['Le code reçu par SMS suffit-il ?', 'ANSSI (R8) : il est recommandé de ne pas utiliser le SMS pour recevoir un facteur d\'authentification, en raison des interceptions et du transfert frauduleux de carte SIM ; faute d\'autre moyen, il aide encore à limiter les fraudes.', 'Application d\'authentification ou clé physique quand le service le permet ; le SMS seulement faute de mieux, plutôt que rien'],
                ['Que faire après une fuite ?', 'ANSSI (R26) : renouveler sous une journée environ tous les mots de passe concernés par une compromission suspectée ou avérée.', 'Changement du mot de passe, fermeture des sessions ouvertes, signalement interne'],
                ['Et la sensibilisation ?', 'ANSSI (R17) : des campagnes de sensibilisation des utilisateurs aux risques liés à l\'authentification, par exemple à l\'hameçonnage.', 'C\'est l\'objet même de la journée et de la séance de suivi'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils sont utilisés, et combien coûtent-ils ?',
            'legende' => 'Prix et conditions publiés par les éditeurs et les organismes, relevés le 5 octobre 2026, hors frais bancaires et de change. La formation s\'appuie d\'abord sur les outils que l\'entreprise possède déjà ; aucun abonnement n\'est imposé.',
            'entetes' => ['Outil', 'Prix publié', 'Ce qu\'il apporte', 'Place dans la formation'],
            'lignes'  => [
                ['KeePassXC, coffre-fort de mots de passe', 'Gratuit, sous licence libre GPLv3 ; version stable 2.7.12 du 10 mars 2026', 'Fichier chiffré conservé où l\'on veut, sans serveur distant, sur Windows, macOS et Linux ; recommandé par la fiche de Cybermalveillance.gouv.fr', 'Coffre-fort par défaut quand l\'entreprise n\'en a pas'],
                ['Bitwarden, coffre-fort partagé', 'Offre gratuite pour un particulier ; offres Teams à 4 dollars et Enterprise à 6 dollars par utilisateur et par mois, en paiement annuel, hors taxes', 'Partage de mots de passe d\'équipe, synchronisation entre téléphone et ordinateur', 'Présenté aux équipes qui partagent des comptes communs'],
                ['Applications d\'authentification, comme Microsoft Authenticator', 'Aucun prix indiqué sur la page d\'aide de Microsoft ; installation depuis l\'App Store ou Google Play, pas de version pour PC ni Mac', 'Codes à usage unique et validations de connexion sur le téléphone, sans passer par le SMS', 'Activation sur la messagerie de chaque participant'],
                ['Clés de sécurité Yubico', 'Security Key NFC à partir de 34,80 euros, YubiKey 5 NFC à 69,60 euros, TVA comprise, sur la boutique de l\'éditeur', 'Facteur physique qui résiste aux fausses pages, pour les comptes les plus exposés', 'Montrées aux postes sensibles, jamais imposées'],
                ['SensCyber, de Cybermalveillance.gouv.fr', 'Gratuit, sur création d\'un compte', 'Trois modules en ligne de 25 à 45 minutes, Comprendre, Agir et Transmettre, avec attestation de suivi', 'Révision après la séance, et accueil des nouveaux arrivants'],
                ['Gophish, outil de simulation d\'hameçonnage', 'Gratuit, logiciel libre', 'Envoi de faux messages de test et mesure des clics, pour vérifier les réflexes en conditions réelles', 'Exercice de suivi, seulement avec l\'accord écrit de la direction'],
                ['17Cyber', 'Service public gratuit, en France', 'Diagnostic en ligne d\'une situation et conseils, proposé par la Police nationale, la Gendarmerie nationale et Cybermalveillance.gouv.fr', 'Ressource remise aux participants installés en France'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation se déroule-t-elle, concrètement ?',
            'intro' => 'La méthode tient en une règle : chaque geste appris doit être fait, sur son propre appareil, avant la fin de la séance. Ce qui est remis à « plus tard » n\'est presque jamais fait.',
            'items' => [
                ['titre' => 'Des groupes réduits', 'texte' => 'Activer une double authentification ou installer un coffre-fort bloque souvent sur un détail : un ancien téléphone, un compte partagé, un code qui n\'arrive pas. Il faut pouvoir passer derrière chaque participant, ce qui limite la taille des groupes.'],
                ['titre' => 'Aucun mot de passe vu, aucun écran exposé', 'texte' => 'Le formateur montre le geste sur son écran, puis chacun le refait sur le sien. Les messages examinés en groupe sont anonymisés, et personne n\'est invité à projeter sa messagerie.'],
                ['titre' => 'Pas de piège humiliant', 'texte' => 'Un exercice d\'hameçonnage simulé ne se fait qu\'avec l\'accord écrit de la direction, sans récolte de vrais mots de passe, et ses résultats sont présentés par service, jamais par nom. Le but est d\'apprendre à signaler, pas de désigner des coupables.'],
                ['titre' => 'Les outils de l\'entreprise d\'abord', 'texte' => 'Si l\'entreprise utilise Microsoft 365, Google Workspace, un logiciel de gestion ou une banque en ligne particulière, c\'est sur ces outils que l\'on s\'exerce, avec leurs écrans réels.'],
                ['titre' => 'Des supports qui restent', 'texte' => 'Une fiche réflexe d\'une page, le circuit de signalement de l\'entreprise, la procédure de contre-appel pour les virements et un guide d\'activation de la double authentification pour les comptes les plus courants. Ils sont modifiables, pour former les nouveaux arrivants.'],
                ['titre' => 'Une évaluation sur des gestes', 'texte' => 'La réussite se constate à la fin de la journée : double authentification active, coffre-fort en service, tri de messages réussi. Un questionnaire d\'avis existe aussi, mais il ne dit pas si la formation a servi.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Un canal direct pour les questions pendant quelques semaines et, quand elle est retenue, la séance de suivi à distance, qui vérifie ce qui a tenu et corrige ce qui a glissé.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre activité et votre pays ?',
            'items' => [
                ['secteur' => 'Cabinet comptable, à Abidjan', 'probleme' => 'Un « fournisseur » annonce par courriel un changement de coordonnées bancaires, avec un en-tête parfait et une relance téléphonique le lendemain.', 'solution' => 'Demi-journée complémentaire pour l\'équipe : contre-appel sur le numéro figurant au dossier, validation à deux personnes de tout changement de RIB, lecture de l\'adresse réelle de l\'expéditeur, signalement à l\'ANSSI de Côte d\'Ivoire en cas de tentative avérée.'],
                ['secteur' => 'Commerce et vente en ligne, à Cotonou', 'probleme' => 'Le compte WhatsApp d\'une vendeuse est volé après l\'envoi d\'un code « reçu par erreur », et ses clients reçoivent de fausses demandes de paiement Mobile Money.', 'solution' => 'Vérification en deux étapes activée sur chaque téléphone de vente, règle écrite de ne jamais transmettre un code, message type pour prévenir les clients, et marche à suivre pour récupérer le compte.'],
                ['secteur' => 'École privée ou centre de formation, à Dakar', 'probleme' => 'Un ordinateur partagé au secrétariat garde ouverte la messagerie de l\'établissement, et les dossiers des élèves circulent sur clé USB.', 'solution' => 'Sessions fermées à chaque départ, comptes nominatifs, mots de passe dans un coffre-fort, partage de fichiers par lien à accès restreint, et bulletins d\'alerte de la DCSSI suivis par la direction.'],
                ['secteur' => 'ONG ou projet financé, à Lomé', 'probleme' => 'Des équipes de terrain se connectent depuis des cybercafés et des réseaux Wi-Fi d\'hôtel, et un faux message du bailleur réclame les identifiants de la plateforme de suivi.', 'solution' => 'Double authentification par application sur tous les comptes, déconnexion systématique sur les postes publics, téléphone de travail à jour, et vérification de toute demande du bailleur par un canal déjà connu.'],
                ['secteur' => 'Clinique ou cabinet de santé, à Douala', 'probleme' => 'Les résultats d\'examens partent parfois au mauvais destinataire, et l\'accueil reçoit des appels de faux techniciens qui demandent la prise en main à distance du poste.', 'solution' => 'Vérification du destinataire avant chaque envoi, procédure de refus de prise en main non programmée, signalement interne immédiat de toute erreur d\'envoi, traitée comme une possible violation de données.'],
                ['secteur' => 'PME en France ou en Belgique, avec du télétravail', 'probleme' => 'Les salariés travaillent depuis l\'ordinateur familial, et le service comptable reçoit des appels d\'un faux dirigeant pendant les congés de celui-ci.', 'solution' => 'Formation à distance en deux séances, séparation des usages personnels et professionnels, mises à jour automatiques, contre-appel obligatoire, SensCyber pour les absents et 17Cyber en cas de doute.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que nous apprennent British Airways et Maersk sur les gestes des salariés ?',
            'paragraphes' => [
                'L\'histoire de <a href="/histoires/british-airways-piratage">British Airways</a> commence par un identifiant. Selon l\'avis de sanction de l\'autorité britannique de protection des données (ICO), daté du 16 octobre 2020, l\'attaquant s\'est connecté en 2018 à une passerelle d\'accès à distance avec l\'identifiant et le mot de passe d\'un employé de Swissport, prestataire de fret de la compagnie. Ce compte n\'était pas protégé par une authentification à plusieurs facteurs. Un mot de passe seul a suffi à ouvrir la porte. C\'est la raison pour laquelle la double authentification occupe une heure entière de la formation.',
                'Chez <a href="/histoires/maersk-notpetya">Maersk</a>, tout part d\'une demande banale. D\'après l\'enquête publiée par Wired le 21 août 2018, un responsable financier du bureau d\'Odessa avait demandé l\'installation d\'un logiciel de comptabilité ukrainien, M.E.Doc, sur un seul ordinateur ; c\'est par ce logiciel que NotPetya est entré en juin 2017. La reprise n\'a été possible que grâce à un serveur resté hors ligne au Ghana après une coupure de courant. Pour un salarié, la leçon est concrète : un logiciel installé hors du circuit prévu engage toute l\'entreprise.',
                'Ces deux histoires ne disent pas que les salariés sont fautifs. Elles montrent que les attaques empruntent les chemins de tous les jours, un accès de prestataire, un logiciel métier, et que les protections décidées sur le papier ne servent que si elles sont appliquées compte par compte. La formation fait le lien entre les deux : chaque participant voit, sur ses propres comptes, la mesure qui aurait fermé la porte.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que doit faire un salarié dans les dix minutes qui suivent un clic douteux ?',
            'items' => [
                'Ne pas effacer le message et ne pas éteindre ni redémarrer l\'appareil : ce sont des indices utiles.',
                'Débrancher l\'ordinateur du réseau ou couper le Wi-Fi si un fichier a été ouvert ou un logiciel installé, comme le conseille l\'ANSSI de Côte d\'Ivoire.',
                'Prévenir aussitôt la personne désignée par l\'entreprise, ou à défaut la direction, même si rien ne semble s\'être passé.',
                'Changer depuis un autre appareil le mot de passe saisi sur la fausse page, puis fermer les sessions ouvertes.',
                'Appeler la banque sans attendre si des coordonnées bancaires ou un virement sont en cause.',
                'Noter l\'heure, faire des captures d\'écran et conserver l\'adresse de l\'expéditeur.',
                'Ne jamais « réparer » seul en supprimant des fichiers, et ne pas se taire par crainte d\'être blâmé.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quel format choisir ?',
            'legende' => 'Le format se décide au premier échange, selon l\'effectif, la dispersion des équipes et la qualité de la connexion. Dans tous les cas, chacun travaille sur ses propres appareils.',
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une PME, une agence, un établissement scolaire ou de santé, une ONG', 'Une journée, plus une demi-journée pour les postes sensibles', 'Dans vos locaux, par groupes successifs pour que le service continue, sur vos outils réels'],
                ['Inter-entreprises', 'Salariés de plusieurs structures d\'un même réseau, d\'une association professionnelle ou d\'un groupement', 'Une journée', 'Salle commune, coût partagé, exemples choisis pour qu\'aucune entreprise n\'expose ses messages'],
                ['À distance', 'Équipes dispersées, agences hors de Cotonou, entreprises en Europe ou au Canada', 'Trois séances de deux heures et demie environ', 'Visioconférence, partage d\'écran, exercices sur téléphone guidés pas à pas'],
                ['Hybride', 'Structures qui veulent un démarrage en salle puis un accompagnement', 'Une journée en salle, puis des séances courtes à distance', 'Prise en main sur place, suivi et exercice d\'hameçonnage simulé à distance'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment se règle-t-elle ?',
            'intro'      => 'Aucun tarif n\'est publié : le prix est fixé sur devis, après un échange qui précise l\'effectif, les postes concernés, les outils de l\'entreprise et le format. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, et la facture mentionne l\'intitulé, les dates, la durée et le nombre de participants.',
            'items'      => [
                ['offre' => 'Journée socle', 'prix' => 'Sur devis', 'inclus' => ['Hameçonnage par tous les canaux', 'Coffre-fort et double authentification activés', 'Fiche réflexe et circuit de signalement']],
                ['offre' => 'Demi-journée postes sensibles', 'prix' => 'Sur devis', 'inclus' => ['Fraude au virement et changement de RIB', 'Faux support et prise en main à distance', 'Procédure de contre-appel écrite pour l\'entreprise']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Plusieurs structures d\'un même réseau', 'Exemples anonymisés', 'Coût partagé entre les participants']],
                ['offre' => 'Suivi et exercice simulé', 'prix' => 'Sur devis', 'inclus' => ['Exercice d\'hameçonnage encadré', 'Séance de suivi à distance', 'Résultats par service, sans nom']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, car chaque appareil doit être vu.',
                'L\'ajout de la demi-journée destinée aux postes qui paient ou détiennent des données sensibles.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou.',
                'Le mode : présentiel, à distance ou hybride.',
                'La préparation : adaptation aux outils de l\'entreprise, rédaction du circuit de signalement, exercice simulé.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge cette journée ?',
            'paragraphes' => [
                'Peut-être, et c\'est au fonds de le dire. En Côte d\'Ivoire, la page du FDFP consacrée au <a href="https://fdfp.ci/plan-de-formation/">plan de formation</a>, lue le 5 octobre 2026, réserve le dépôt d\'un plan aux entreprises qui justifient du paiement régulier des deux taxes, et précise que le règlement n\'intervient qu\'après le suivi et le contrôle du fonds, puis l\'approbation de sa commission permanente. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> : demandez-lui directement les conditions qui s\'appliquent à votre entreprise.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet consacré au personnel des entreprises et aux membres des organisations professionnelles, avec une demande déposée en ligne ; un groupement de PME qui organise une session commune peut y regarder. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> indique que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, dont ceux des OPCO.',
                'Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds de formation, et ne promet aucune prise en charge. Si le financement conditionne votre décision, envoyez au fonds le programme et le devis, attendez sa réponse écrite, et prévoyez le budget sans aide. Le programme, les feuilles de présence et le bilan des exercices remis en fin de session restent utiles dans tous les cas.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur rend la formation inutile en quelques semaines ?',
            'texte' => 'Réprimander publiquement le salarié qui a cliqué. Dès que le premier signalement vaut une remontrance, les suivants n\'arrivent plus : on efface le message, on change son mot de passe en silence, on espère que rien ne se passera. L\'entreprise perd alors les minutes qui permettent de bloquer un virement ou de couper un accès. La direction s\'engage, avant la session, à remercier tout signalement, y compris celui d\'une erreur personnelle.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?',
            'intro' => 'Les bons réglages se défont vite si personne n\'y veille. Voici ce qui glisse le plus souvent après la journée, et la parade apprise en formation.',
            'items' => [
                ['titre' => 'La double authentification désactivée « pour gagner du temps »', 'texte' => 'Un téléphone changé, un code qui tarde, et la protection saute. Les codes de secours rangés pendant la séance permettent de la rétablir sans la supprimer.'],
                ['titre' => 'Le coffre-fort ouvert une fois, puis oublié', 'texte' => 'S\'il n\'est pas installé sur le téléphone et l\'ordinateur, il n\'est pas utilisé. On l\'installe sur les deux, et chaque nouveau compte y entre le jour de sa création.'],
                ['titre' => 'Le mot de passe d\'équipe collé au mur', 'texte' => 'Comptes partagés de la caisse, du réseau social ou du fournisseur : ils passent dans un coffre partagé, avec la liste des personnes qui y ont accès.'],
                ['titre' => 'Les mises à jour repoussées sans fin', 'texte' => 'Cybermalveillance.gouv.fr rappelle qu\'un seul appareil non mis à jour peut ouvrir une brèche. Les mises à jour automatiques restent activées, et l\'on accepte le redémarrage le soir même.'],
                ['titre' => 'Le doute gardé pour soi', 'texte' => 'Un salarié hésite à signaler « pour si peu ». La règle de l\'entreprise doit dire l\'inverse : tout doute se signale, et la réponse vient vite.'],
                ['titre' => 'La procédure de virement contournée pour une urgence', 'texte' => 'La fraude repose justement sur l\'urgence et l\'autorité. Le contre-appel s\'applique aussi quand la demande semble venir du dirigeant, et surtout dans ce cas.'],
                ['titre' => 'Les nouveaux arrivants jamais formés', 'texte' => 'La fiche réflexe, le circuit de signalement et les modules gratuits de SensCyber font partie de l\'accueil de chaque nouvelle recrue.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte en Afrique de l\'Ouest : appareils, lois et interlocuteurs ?',
            'paragraphes' => [
                'Dans beaucoup d\'entreprises, le téléphone personnel sert aussi au travail, les comptes WhatsApp portent la relation client, et une partie des connexions passe par des cybercafés ou des réseaux Wi-Fi partagés. La formation part de ces usages au lieu de les ignorer : séparation des usages quand elle est possible, verrouillage et mises à jour du téléphone dans tous les cas, déconnexion systématique sur un poste public. Elle tient compte aussi d\'une connexion parfois lente : les activations se préparent hors ligne, et les supports s\'impriment.',
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> impose au responsable du traitement, à son article 426, des mesures techniques et d\'organisation appropriées pour protéger les données personnelles contre la perte, l\'altération, la diffusion ou l\'accès non autorisés ; l\'article 425 réserve le traitement aux personnes qui agissent sous son autorité et sur ses instructions. Former les salariés qui manipulent ces données fait partie de ces mesures d\'organisation.',
                'Les interlocuteurs béninois ont changé. Le conseil des ministres du 1er juin 2022 a fusionné quatre agences, dont l\'ANSSI, dans l\'Agence des systèmes d\'information et du numérique (ASIN), selon la SRTB. Le <a href="https://csirt.bj/">bjCSIRT</a>, hébergé par l\'ASIN, publie des alertes et reçoit les déclarations d\'incidents des institutions publiques et des opérateurs d\'infrastructures critiques. Pour une escroquerie subie par une entreprise ou un particulier, les plaintes sont enregistrées dans les commissariats d\'arrondissement et à l\'Office central de répression de la cybercriminalité (OCRC), rappelait Enabel en mars 2023.',
                'En Côte d\'Ivoire, l\'<a href="https://anssi.gouv.ci/">ANSSI</a>, instituée par le décret n° 2024-958 du 30 octobre 2024, regroupe des responsabilités jusque-là réparties entre l\'ARTCI et le CI-CERT ; ce dernier figure désormais dans son organisation et assure la réponse aux incidents. Elle publie des bulletins sur les campagnes d\'hameçonnage visant le pays et les arnaques au Mobile Money, et décrit la conduite à tenir en cas d\'incident. La PLCC mettait en garde, en novembre 2025, selon l\'Agence ivoirienne de presse, contre l\'usurpation d\'identité en ligne, punie par la loi n° 2013-451 du 19 juin 2013 relative à la lutte contre la cybercriminalité.',
                'Au Sénégal, la <a href="https://stcc-ssi.sn/mission/">Direction générale du Chiffre et de la Sécurité des Systèmes d\'information (DCSSI)</a>, rattachée à la Présidence, coordonne la détection, l\'alerte et la réponse aux cyberattaques, apporte son assistance aux administrations et aux entreprises, et diffuse des bulletins d\'alerte et des conseils pratiques. La formation indique à chaque participant les bons interlocuteurs de son pays, et les inscrit sur la fiche réflexe remise en fin de journée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Et pour une entreprise installée en Europe ?',
            'paragraphes' => [
                'En Europe, le RGPD encadre les violations de données personnelles : la CNIL attend la notification d\'une violation de données présentant un risque pour les personnes dans les meilleurs délais, si possible sous 72 heures après sa découverte. Ce délai ne tient que si le salarié qui a envoyé un fichier au mauvais destinataire, ou qui a perdu un ordinateur, le signale sans attendre. La CNIL indique que la moitié des 6 167 violations notifiées en 2025 relevaient d\'un piratage, et annonce pour 2026 la moitié de ses contrôles consacrée à la sécurité des données.',
                'Les salariés en France disposent de ressources publiques gratuites que la formation présente : les fiches réflexes et les modules SensCyber de <a href="https://www.cybermalveillance.gouv.fr/">Cybermalveillance.gouv.fr</a>, le diagnostic en ligne <a href="https://17cyber.gouv.fr/">17Cyber</a>, le 33700 pour signaler un SMS frauduleux, Signal Spam pour un courriel et Phishing Initiative pour un site d\'hameçonnage. En Belgique, en Suisse ou au Canada, les équivalents nationaux sont indiqués au moment de préparer la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi suivre cette formation avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'La sécurité des comptes n\'est pas pour lui un sujet théorique. Les sites, applications et ERP qu\'il construit et maintient vivent de comptes utilisateurs, de droits d\'accès, de mises à jour et de messageries professionnelles ; il voit donc de près ce qu\'un mot de passe réutilisé ou une double authentification absente peut coûter à un client. Il a aussi créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, ce qui l\'amène à connaître les usages de WhatsApp en entreprise et les détournements qui les visent.',
                'Fort de ' . $ans . ' ans d\'expérience dans le numérique, formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . ') et co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>, il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP, et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin à la Côte d\'Ivoire, du Sénégal au Gabon, de la France au Canada. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>.',
                'Il n\'est ni auditeur certifié ni prestataire qualifié par une agence nationale de cybersécurité, et le dit avant toute signature : cette journée apprend des réflexes, elle ne remplace pas un audit. Ses engagements sont vérifiables : réponse sous 24 heures, programme écrit avant la session, exercices sur vos appareils et vos outils, aucun mot de passe vu, supports qui restent à l\'entreprise. Les autres formations du domaine figurent sur la page <a href="/formations/domaine/cybersecurite-it">formations cybersécurité et IT</a>, l\'ensemble du catalogue sur la page <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire vos équipes ?',
            'texte' => 'Commencez par la messagerie de chacun : une longue phrase de passe, la double authentification par application, un coffre-fort pour tous les autres mots de passe. Apprenez à juger un message à ce qu\'il demande plutôt qu\'à son apparence, vérifiez toute demande de code ou de virement par un autre chemin, et faites du signalement immédiat un réflexe remercié, jamais sanctionné.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que vos équipes déjouent l\'hameçonnage et protègent leurs comptes ?',
            'texte'  => 'Indiquez l\'effectif, les postes concernés, les outils utilisés, la ville, le format souhaité et la date visée : vous recevez une réponse sous 24 heures, puis un programme et un devis détaillé. La formation se combine bien avec la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> ou avec la formation <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation cybersécurité'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien de temps dure la formation ?', 'r' => 'Une journée pour le socle commun : hameçonnage le matin, comptes, mots de passe, double authentification et appareils l\'après-midi. Une demi-journée complémentaire s\'adresse aux postes qui paient ou détiennent des données sensibles. Une séance de suivi de deux heures, à distance, peut se tenir trois à quatre semaines plus tard.'],
        ['q' => 'Faut-il des connaissances en informatique pour suivre la journée ?', 'r' => 'Non. Savoir utiliser sa messagerie et son téléphone suffit. La journée évite le jargon, et chaque notion est rattachée à un geste fait sur son propre appareil. Les participants plus à l\'aise aident souvent leurs voisins, ce qui fait partie de l\'exercice.'],
        ['q' => 'Le formateur verra-t-il nos mots de passe ou nos messages ?', 'r' => 'Non. Le formateur montre chaque geste sur son écran, puis chacun le refait sur le sien. Les messages examinés en groupe sont choisis et anonymisés par les participants eux-mêmes, et aucun mot de passe n\'est jamais dicté, écrit ou projeté.'],
        ['q' => 'Faut-il acheter un logiciel ou un abonnement ?', 'r' => 'Pas nécessairement. La double authentification est souvent incluse dans les messageries professionnelles, les mises à jour sont gratuites et KeePassXC est un coffre-fort libre et gratuit. Un coffre partagé payant, comme les offres professionnelles de Bitwarden, ou des clés physiques ne se justifient que pour certains usages, présentés avec leur prix.'],
        ['q' => 'Pourquoi éviter le code reçu par SMS ?', 'r' => 'Parce que l\'ANSSI, dans son guide du 8 octobre 2021, recommande de ne pas utiliser le SMS pour recevoir un facteur d\'authentification : il peut être intercepté, et un fraudeur peut se faire remettre une nouvelle carte SIM à votre nom. Une application d\'authentification ou une clé physique protège mieux. Le SMS reste préférable à l\'absence de second facteur.'],
        ['q' => 'Faut-il obliger les salariés à changer leur mot de passe tous les trois mois ?', 'r' => 'Ni l\'ANSSI ni la CNIL ne le recommandent pour les comptes ordinaires lorsque les mots de passe sont robustes : ces changements forcés poussent à des variantes prévisibles. On change immédiatement en cas de doute ou de fuite, et l\'on garde une expiration pour les comptes d\'administration. La politique écrite de votre entreprise reste la référence.'],
        ['q' => 'Organisez-vous de faux messages d\'hameçonnage pour tester les équipes ?', 'r' => 'Seulement si la direction le demande par écrit, après la formation et jamais pour piéger quelqu\'un. Aucun vrai mot de passe n\'est collecté, et les résultats sont présentés par service, sans nom. L\'exercice sert à mesurer si les réflexes tiennent et si les signalements arrivent.'],
        ['q' => 'La formation couvre-t-elle les sauvegardes et la gestion d\'une crise ?', 'r' => 'Non. Elle porte sur les gestes des salariés, jusqu\'au signalement d\'un incident. Les sauvegardes, les droits d\'accès, les prestataires et la conduite d\'une crise relèvent des décisions de direction, traitées dans la formation sur la sécurité des données et les sauvegardes pour dirigeants.'],
        ['q' => 'Que faire si un salarié a déjà cliqué sur un lien piégé ?', 'r' => 'Prévenir tout de suite la personne désignée, ne pas effacer le message ni redémarrer l\'appareil, débrancher l\'ordinateur du réseau si un fichier a été ouvert, changer depuis un autre appareil le mot de passe saisi, et appeler la banque si un paiement est en jeu. La formation fixe ce circuit par écrit pour votre entreprise.'],
        ['q' => 'La formation peut-elle se faire à distance ?', 'r' => 'Oui, en trois séances de deux heures et demie environ, par visioconférence, avec partage d\'écran et exercices guidés sur téléphone. Les activations de double authentification se font en direct. Une connexion stable et un ordinateur par participant facilitent le déroulement.'],
        ['q' => 'Est-ce adapté aux salariés qui travaillent sur leur téléphone personnel ?', 'r' => 'Oui, c\'est même un cas fréquent. La formation aide à séparer les usages quand c\'est possible et, dans tous les cas, à verrouiller l\'appareil, à le tenir à jour, à protéger WhatsApp par la vérification en deux étapes et à savoir quoi faire en cas de perte ou de vol.'],
        ['q' => 'La formation peut-elle être financée ?', 'r' => 'Cela dépend du fonds et de votre situation : FDFP en Côte d\'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds. Soumettez le programme et le devis au fonds avant de vous engager, et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'Cybermalveillance.gouv.fr, principales cybermalveillances visant les professionnels en 2025 (6 mai 2026)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/top10-cybermalveillances-professionnels-2025', 'date' => '2026-10-05'],
        ['titre' => 'Cybermalveillance.gouv.fr, rapport d\'activité et état de la menace 2025 (26 mars 2026)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/rapport-activite-2025', 'date' => '2026-10-05'],
        ['titre' => 'Cybermalveillance.gouv.fr, fiche réflexe sur l\'hameçonnage', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/fiches-reflexes/hameconnage-phishing', 'date' => '2026-10-05'],
        ['titre' => 'Cybermalveillance.gouv.fr, bonnes pratiques : les mots de passe (mise à jour du 12 mai 2026)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/mots-de-passe', 'date' => '2026-10-05'],
        ['titre' => 'Cybermalveillance.gouv.fr, bonnes pratiques : les mises à jour (mise à jour du 3 juin 2026)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/mises-a-jour', 'date' => '2026-10-05'],
        ['titre' => 'Cybermalveillance.gouv.fr, fiche réflexe sur la fraude au virement bancaire (FOVI)', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/fiches-reflexes/escroquerie-faux-ordres-virement-fovi', 'date' => '2026-10-05'],
        ['titre' => 'Cybermalveillance.gouv.fr, SensCyber étendu au grand public et aux salariés des TPE et PME', 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/cybermalveillance-gouv-fr-senscyber-grand-public-tpe-pme-francaises', 'date' => '2026-10-05'],
        ['titre' => '17Cyber, assistance en ligne aux victimes de cybermalveillance', 'url' => 'https://17cyber.gouv.fr/', 'date' => '2026-10-05'],
        ['titre' => 'ANSSI, recommandations relatives à l\'authentification multifacteur et aux mots de passe (8 octobre 2021)', 'url' => 'https://messervices.cyber.gouv.fr/guides/recommandations-relatives-lauthentification-multifacteur-et-aux-mots-de-passe', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, mots de passe : recommandations pour maîtriser sa sécurité (14 octobre 2022)', 'url' => 'https://www.cnil.fr/fr/mots-de-passe-une-nouvelle-recommandation-pour-maitriser-sa-securite', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, recommandation sur l\'authentification multifacteur (1er avril 2025)', 'url' => 'https://www.cnil.fr/fr/recommandation-mfa', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, notifier une violation de données personnelles', 'url' => 'https://www.cnil.fr/fr/notifier-une-violation-de-donnees-personnelles', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, rapport annuel 2025 (18 mai 2026)', 'url' => 'https://www.cnil.fr/fr/rapport-annuel-2025', 'date' => '2026-10-05'],
        ['titre' => 'ANSSI Côte d\'Ivoire, historique de l\'agence (décret n° 2024-958 du 30 octobre 2024)', 'url' => 'https://anssi.gouv.ci/l-anssi/historique/', 'date' => '2026-10-05'],
        ['titre' => 'ANSSI Côte d\'Ivoire, missions et activités du CI-CERT', 'url' => 'https://anssi.gouv.ci/l-anssi/missions-et-activites-de-ci-cert/', 'date' => '2026-10-05'],
        ['titre' => 'ANSSI Côte d\'Ivoire, bonnes pratiques en entreprise', 'url' => 'https://anssi.gouv.ci/en-entreprise/', 'date' => '2026-10-05'],
        ['titre' => 'ANSSI Côte d\'Ivoire, veille et bulletins d\'alerte', 'url' => 'https://anssi.gouv.ci/veille-et-bulletins-alerte/', 'date' => '2026-10-05'],
        ['titre' => 'ANSSI Côte d\'Ivoire, procédures en cas d\'incident', 'url' => 'https://anssi.gouv.ci/procedures-en-cas-dincident/', 'date' => '2026-10-05'],
        ['titre' => 'Gouvernement de Côte d\'Ivoire, bilan.gouv.ci : plaintes enregistrées par la PLCC de 2022 à 2024 (7 juin 2025)', 'url' => 'https://www.bilan.gouv.ci/actualite/18565', 'date' => '2026-10-05'],
        ['titre' => 'Agence ivoirienne de presse, la PLCC met en garde contre l\'usurpation d\'identité en ligne (6 novembre 2025)', 'url' => 'https://www.aip.ci/275727/cote-divoire-aip-cybercriminalite-la-plcc-met-en-garde-contre-lusurpation-didentite-en-ligne/', 'date' => '2026-10-05'],
        ['titre' => 'bjCSIRT, équipe de réponse aux incidents du Bénin', 'url' => 'https://csirt.bj/', 'date' => '2026-10-05'],
        ['titre' => 'bjCSIRT, déclaration RFC 2350 (mise à jour du 14 octobre 2024)', 'url' => 'https://csirt.bj/bjcsirt-rfc2350-fr/', 'date' => '2026-10-05'],
        ['titre' => 'SRTB, numérique au Bénin : quatre agences fusionnent au profit de l\'ASIN (1er juin 2022)', 'url' => 'https://srtb.bj/numerique-au-benin-quatre-agences-fusionnent-au-profit-de-lasin/', 'date' => '2026-10-05'],
        ['titre' => 'Enabel, l\'OCRC et Enabel sensibilisent les populations aux cyber-arnaques au Bénin (14 mars 2023)', 'url' => 'https://open.enabel.be/en/BEN/2399/2119/u/au-bnin-l-office-central-pour-la-rpression-de-la-cybercriminalit-et-enabel-sensibilisent-les-populations-aux-cyber-arnaques.html', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 425 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'DCSSI Sénégal, mission de la Direction générale du Chiffre et de la Sécurité des Systèmes d\'information', 'url' => 'https://stcc-ssi.sn/mission/', 'date' => '2026-10-05'],
        ['titre' => 'INTERPOL, rapport d\'évaluation des cybermenaces en Afrique 2026 (3 août 2026)', 'url' => 'https://www.interpol.int/News-and-Events/News/2026/INTERPOL-report-finds-AI-linked-to-more-than-half-of-cybercrime-in-Africa', 'date' => '2026-10-05'],
        ['titre' => 'ICO, avis de sanction visant British Airways (16 octobre 2020)', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Wired, The Untold Story of NotPetya (21 août 2018)', 'url' => 'https://www.wired.com/story/notpetya-cyberattack-ukraine-russia-code-crashed-the-world/', 'date' => '2026-10-05'],
        ['titre' => 'KeePassXC, site officiel (version 2.7.12 du 10 mars 2026)', 'url' => 'https://keepassxc.org/', 'date' => '2026-10-05'],
        ['titre' => 'Bitwarden, tarifs des offres professionnelles', 'url' => 'https://bitwarden.com/pricing/business/', 'date' => '2026-10-05'],
        ['titre' => 'Yubico, boutique officielle (prix TVA comprise)', 'url' => 'https://www.yubico.com/fr/store/', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, aide : télécharger Microsoft Authenticator', 'url' => 'https://support.microsoft.com/fr-fr/account-billing/t%C3%A9l%C3%A9charger-microsoft-authenticator-351498fc-850a-45da-b7b6-27e523b8702a', 'date' => '2026-10-05'],
        ['titre' => 'Gophish, outil libre de simulation d\'hameçonnage', 'url' => 'https://getgophish.com/', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : à propos de la vérification en deux étapes', 'url' => 'https://faq.whatsapp.com/1278661612895630/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['securite-donnees-dirigeants', 'cloud-hebergement', 'microsoft-365-google-workspace', 'ia-ethique-conformite', 'whatsapp-business', 'digitaliser-son-entreprise'],
        'services'    => ['maintenance-support', 'formation-en-entreprise', 'audit-etude-de-projet'],
        'comparatifs' => [],
    ],
];
