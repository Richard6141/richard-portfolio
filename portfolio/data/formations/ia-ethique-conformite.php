<?php
// ============================================================
// data/formations/ia-ethique-conformite.php · Fiche formation « IA, éthique
// et conformité des données » (vague 1B, lot A, domaine
// intelligence-artificielle). Angle propre : ce que chaque salarié doit
// savoir et faire (données personnelles, secret des affaires, droit
// d'auteur, biais, transparence). Sœurs non traitées : gouvernance-ia
// (charte, inventaire, rôles : angle direction), ia-en-entreprise (usage
// productif des assistants). Aucune ancienne page.
// Faits externes relus le 05/10/2026 : Commission européenne (calendrier du
// règlement sur l'IA, page mise à jour le 3 août 2026 ; questions et
// réponses sur l'article 4, mise à jour du 27 juillet 2026), AI Act Service
// Desk (article 50, version consolidée au 27 juillet 2026), CNIL
// (questions-réponses du 18 juillet 2024), RGPD sur EUR-Lex (articles 9, 22,
// 33, 83), SGG du Bénin (loi n° 2017-20 : articles 383, 386, 394, 401, 455,
// 462 ; décret n° 2022-286), APDP (procédures), ARTCI (loi n° 2013-450 :
// articles 5, 7, 20, 21, 25, 26), WIPO Lex (loi sénégalaise n° 2008-12 :
// articles 5, 20, 30, 48, 49), Légifrance (article L151-1 du code de
// commerce), U.S. Copyright Office (rapport du 29 janvier 2025), Google,
// Anthropic et Microsoft (conditions de données), FDFP, 3FPT, France
// Compétences. Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA, éthique et conformité des données : chaque salarié apprend ce qu\'il peut confier à un assistant d\'IA, ce qu\'il doit vérifier et ce que la loi de son pays lui interdit',
    'title'   => 'Formation IA, éthique et conformité | Richard SALANON',
    'meta'    => 'Formation IA pour salariés : données personnelles, secret des affaires, droit d\'auteur, biais, AI Act, RGPD et loi béninoise n° 2017-20. Sur devis.',
    'en_bref' => 'Cette formation apprend à chaque salarié qui utilise un assistant d\'IA les règles qui encadrent ses gestes quotidiens : quelles données personnelles il peut soumettre, comment protéger le secret des affaires, ce que dit le droit d\'auteur des textes et images générés, comment repérer un biais et quand signaler qu\'un contenu vient d\'une IA. Elle s\'appuie sur le RGPD et le règlement européen sur l\'IA, sur la loi béninoise n° 2017-20, la loi ivoirienne de 2013 et la loi sénégalaise de 2008, selon le pays de l\'équipe. Le socle dure une journée, le parcours complet deux jours, en salle, à distance ou en formule hybride, en intra ou en session mutualisée. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '1 jour de socle, ou 2 jours en 4 demi-journées',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : où vont les données saisies dans un assistant, et qui en répond',
            'duree'  => '3 h 30',
            'points' => [
                'Le trajet d\'une demande : saisie, envoi aux serveurs de l\'éditeur, conservation, relecture humaine possible, usage éventuel pour entraîner les modèles.',
                'Compte personnel gratuit, abonnement individuel, offre professionnelle : ce qui change dans les conditions, montré sur les pages des éditeurs ouvertes en séance.',
                'Ouverture des réglages de confidentialité de l\'assistant de chaque participant : historique, activité, option d\'entraînement, durée de conservation.',
                'Qui répond de quoi : l\'entreprise qui décide de l\'usage, l\'éditeur qui traite les données pour elle, le salarié qui saisit et qui envoie.',
                'Les cinq familles de risques étudiées pendant la formation : données personnelles, secret des affaires, droit d\'auteur, biais, transparence.',
                'Exercice d\'ouverture : vingt situations tirées des métiers du groupe, que chacun classe en « je peux », « je peux après préparation » ou « je ne dois pas », avant toute explication.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : données personnelles, ce que disent le RGPD et les lois africaines',
            'duree'  => '3 h 30',
            'points' => [
                'Reconnaître une donnée personnelle dans un document de travail, même sans nom : numéro de téléphone, matricule, photo, voix, combinaison d\'indices qui désigne quelqu\'un.',
                'Les données sensibles (santé, origine, religion, opinions, biométrie) et pourquoi elles ne passent jamais par un assistant en ligne sans décision écrite de l\'entreprise.',
                'Les textes du pays de l\'équipe, lus article par article : RGPD, loi béninoise n° 2017-20, loi ivoirienne n° 2013-450, loi sénégalaise n° 2008-12.',
                'Le transfert vers l\'étranger : pourquoi un assistant hébergé hors du pays pose une question juridique, et qui doit la trancher dans l\'entreprise.',
                'Atelier de pseudonymisation : remplacer noms, numéros et détails identifiants dans un courrier, un tableau et un compte rendu, puis vérifier que la personne reste introuvable.',
                'L\'erreur commise : qui prévenir, dans quel délai, et pourquoi le silence aggrave toujours la situation.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : secret des affaires, droit d\'auteur et transparence des contenus générés',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qui fait un secret des affaires : une information peu connue, qui a une valeur commerciale et que l\'entreprise protège ; ce que la saisie dans un outil public fragilise.',
                'Les documents qui ne sortent pas : prix de revient, offres en cours, fichiers clients, plans, code source, négociations, contrats signés sous confidentialité.',
                'Le droit d\'auteur dans les deux sens : ce qu\'on fournit à l\'assistant (textes, images, logos de tiers) et ce qu\'il rend (protection incertaine, risque de reprise d\'une œuvre).',
                'Vérifier qu\'un texte ou un visuel généré n\'est pas une copie : recherche d\'extraits, recherche d\'image inversée, comparaison avec les sources citées.',
                'Signaler un contenu généré : hypertrucages, textes publiés pour informer le public, robots qui conversent avec les clients ; ce que le règlement européen exige depuis août 2026.',
                'Exercice : préparer une publication pour les réseaux sociaux avec un visuel généré, puis décider de la mention à ajouter et de qui la valide.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : biais, décisions sur les personnes et évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'D\'où viennent les biais : données d\'entraînement, formulation de la demande, absence de relecture humaine ; démonstration sur des cas de recrutement et de relation client.',
                'Tester un biais soi-même : la même demande avec un prénom, un âge, un quartier ou un genre différents, puis comparaison écrite des réponses.',
                'Décisions automatisées sur une personne : ce que le RGPD et les lois du Bénin, de Côte d\'Ivoire et du Sénégal interdisent, et la place du contrôle humain.',
                'Usages interdits ou très encadrés en Europe : reconnaissance des émotions au travail, notation sociale, outils de recrutement classés à haut risque.',
                'Évaluation : dix situations nouvelles, tranchées seul par chaque participant, avec la règle invoquée et le geste retenu.',
                'Rédaction par chacun de sa fiche réflexe de poste, une page, relue par le formateur avant la fin de la session.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '1 jour de socle pour tous, 2 jours pour les postes exposés'],
        ['l' => 'Public', 'v' => 'Tout salarié qui utilise un assistant d\'IA, sans prérequis juridique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 12 personnes au plus en salle'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et qu\'est-ce qu\'elle ne couvre pas ?',
            'paragraphes' => [
                'Dans la plupart des entreprises, l\'assistant d\'IA est arrivé avant la règle. Un commercial y colle la liste de ses prospects pour rédiger des relances, une chargée de recrutement lui demande de classer des candidatures, un graphiste génère une affiche avec un visage plausible. Aucun n\'a l\'intention de mal faire ; aucun ne sait non plus ce que devient ce qu\'il a saisi, ni quel texte s\'applique à son geste. Cette formation comble ce vide au niveau du poste de travail : elle ne fabrique pas de juristes, elle donne à chacun les réflexes qui évitent les fautes graves et la capacité de reconnaître le moment où il faut demander avant d\'agir.',
                'À la fin du socle d\'une journée, chaque participant sait reconnaître une donnée personnelle ou sensible dans un document de travail, régler la confidentialité de l\'assistant qu\'il utilise, pseudonymiser un texte avant de le soumettre, citer les règles de son pays qui encadrent ses gestes et dire à qui signaler une erreur. Après les deux jours, il sait en plus repérer ce qui relève du secret des affaires, vérifier qu\'un contenu généré ne reprend pas une œuvre existante, tester une réponse pour y détecter un biais et décider s\'il faut indiquer qu\'un contenu vient d\'une IA. Ces acquis sont vérifiés sur des situations qu\'il n\'a pas vues pendant la session.',
                'La formation ne rédige pas la politique de l\'entreprise. La charte d\'usage, l\'inventaire des outils en service, la répartition des rôles et les contrôles relèvent de la direction ; ils sont traités dans la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>. Si une charte existe déjà, elle sert ici de support et ses règles sont expliquées ligne par ligne aux salariés. La formation n\'apprend pas non plus à produire plus vite avec un assistant : c\'est l\'objet de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>, que beaucoup d\'équipes enchaînent juste après celle-ci.',
                'Elle n\'est pas, enfin, une consultation juridique. Le formateur explique ce que disent les textes officiels, lus avec le groupe, et la façon prudente de s\'y conformer au quotidien ; il ne remplace ni le délégué à la protection des données, ni l\'avocat de l\'entreprise, ni l\'autorité de contrôle du pays. Quand une question dépasse le geste du salarié, par exemple l\'envoi d\'un fichier entier à un prestataire étranger ou un projet de tri automatique des candidatures, la formation apprend à la reconnaître et à la porter à la bonne personne, avec les éléments utiles pour décider.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'Le socle concerne toute personne qui touche un assistant d\'IA, même rarement. Le parcours de deux jours vise les postes qui manipulent le plus de données sur des personnes, de secrets ou de contenus publiés.',
            'items' => [
                ['titre' => 'Tous les salariés utilisateurs', 'texte' => 'Administration, comptabilité, service client, logistique, direction : quiconque soumet un texte, un tableau ou une image à un assistant. Le socle d\'une journée suffit à la plupart d\'entre eux.'],
                ['titre' => 'Les postes exposés', 'texte' => 'Ressources humaines, commerciaux et marketing, communication, santé, juridique, achats, informatique. Ils traitent des données sensibles, des informations stratégiques ou des contenus diffusés au public, et suivent les deux jours.'],
                ['titre' => 'Les référents et les managers', 'texte' => 'Ceux à qui les collègues poseront leurs questions après la session. Ils suivent le parcours complet et repartent avec la liste des cas qui doivent remonter à la direction ou au délégué à la protection des données.'],
                ['titre' => 'Aucun prérequis juridique', 'texte' => 'Les textes sont lus en groupe, dans leur version officielle, avec des exemples tirés des postes présents. Savoir ouvrir un assistant d\'IA et lui poser une question suffit pour suivre.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant, avec l\'assistant qu\'il utilise au travail ouvert sur son propre compte, pour l\'exercice sur les réglages. Les extraits de textes et les fiches sont remis sur papier et en fichier, consultables sans connexion.'],
                ['titre' => 'Ce que l\'entreprise transmet avant la session', 'texte' => 'La liste des outils d\'IA réellement utilisés, la charte s\'il en existe une, le nom du délégué à la protection des données ou de la personne désignée, et quelques situations vécues, anonymisées, qui deviendront des exercices.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles situations les participants tranchent-ils pendant les exercices ?',
            'legende' => 'Exemples de situations construites à partir des métiers présents. La dernière colonne donne le geste attendu, discuté en groupe ; quand la réponse dépend d\'une règle interne de l\'entreprise, cette règle est précisée pendant l\'exercice.',
            'entetes' => ['Situation', 'Thème', 'Question posée au participant', 'Geste attendu'],
            'lignes'  => [
                ['Une assistante RH veut faire résumer vingt CV par un assistant gratuit', 'Données personnelles, biais', 'Peut-elle soumettre les CV tels quels, et laisser l\'outil classer les candidats ?', 'Retirer les éléments identifiants, ne jamais déléguer le classement, signaler l\'usage à son responsable'],
                ['Un commercial colle la grille de prix et les marges d\'un appel d\'offres en cours', 'Secret des affaires', 'Qu\'est-ce que l\'entreprise perd si ce document circule ?', 'Garder le document, ne soumettre que la structure de l\'offre, sans aucun chiffre'],
                ['Une infirmière veut reformuler un compte rendu de consultation', 'Données sensibles', 'Une donnée de santé peut-elle passer par un assistant en ligne ?', 'Non sans décision écrite de l\'établissement et outil validé ; partir d\'un modèle vide'],
                ['Le service communication génère le portrait d\'un « client satisfait »', 'Transparence, image des personnes', 'Faut-il dire que l\'image est générée ? Ressemble-t-elle à une personne réelle ?', 'Mention claire, aucun faux témoignage, vérification de la ressemblance'],
                ['Un chef de projet fait traduire un contrat fournisseur couvert par une clause de confidentialité', 'Secret, obligations contractuelles', 'Le contrat autorise-t-il la communication à un tiers ?', 'Lire la clause, passer par l\'outil professionnel validé ou par un autre moyen de traduction'],
                ['Un agent de crédit demande à l\'assistant si un client est « fiable »', 'Décision sur une personne, biais', 'Qui décide, et sur quels critères vérifiables ?', 'L\'assistant aide à présenter le dossier ; la décision reste humaine et motivée'],
                ['Un rédacteur publie un article de blog presque entièrement écrit par l\'assistant', 'Droit d\'auteur, exactitude', 'Des passages sont-ils repris d\'ailleurs ? Les faits sont-ils exacts ?', 'Recherche d\'extraits, contrôle des sources, relecture et responsabilité éditoriale assumée'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Que disent les textes de chaque pays sur les gestes de tous les jours ?',
            'options'  => ['Union européenne : RGPD', 'Bénin : loi n° 2017-20', 'Côte d\'Ivoire : loi n° 2013-450', 'Sénégal : loi n° 2008-12'],
            'criteres' => [
                ['critere' => 'Autorité de contrôle', 'valeurs' => ['L\'autorité nationale de chaque État membre, la CNIL en France', 'L\'APDP, instituée par l\'article 462', 'L\'Autorité de protection, rôle tenu par l\'ARTCI', 'La Commission des données personnelles (CDP), créée par l\'article 5']],
                ['critere' => 'Démarche avant un traitement', 'valeurs' => ['Règles fixées par le règlement, démarches précisées par l\'autorité nationale', 'Déclaration à l\'APDP ; autorisation pour les données sensibles', 'Déclaration préalable (article 5) ; autorisation préalable pour les cas de l\'article 7, dont la biométrie et les numéros de téléphone', 'Déclaration (article 18) ; autorisation pour les cas de l\'article 20, dont les données génétiques et biométriques']],
                ['critere' => 'Données sensibles', 'valeurs' => ['Article 9 : traitement interdit sauf exceptions', 'Article 394 : traitement interdit sauf exceptions', 'Article 21 : interdit sauf exceptions, puni de 10 à 20 ans d\'emprisonnement et de 20 à 40 millions de FCFA d\'amende', 'Autorisation de la CDP pour les données génétiques, biométriques et la recherche en santé']],
                ['critere' => 'Envoi vers un autre pays', 'valeurs' => ['Encadré par le règlement : la question se pose au délégué à la protection des données', 'Article 391 : régime propre aux transferts vers un État tiers, avec un formulaire de transfert à l\'APDP', 'Article 26 : pays au niveau de protection équivalent ou supérieur, et autorisation préalable de l\'Autorité', 'Article 49 : pays assurant un niveau de protection suffisant']],
                ['critere' => 'Décision automatisée sur une personne', 'valeurs' => ['Article 22 : droit de ne pas faire l\'objet d\'une décision prise sur le seul fondement d\'un traitement automatisé', 'Article 401 : aucune décision produisant des effets juridiques sur le seul fondement d\'un traitement automatisé évaluant la personnalité', 'Article 25 : aucune décision appréciant un comportement humain sur le seul fondement d\'un profil automatisé', 'Article 48 : même principe pour les décisions évaluant la personnalité']],
                ['critere' => 'Sanction administrative maximale', 'valeurs' => ['Article 83 : jusqu\'à 20 millions d\'euros ou 4 % du chiffre d\'affaires annuel mondial', 'Article 455 : 50 millions de FCFA au premier manquement, 100 millions en cas de manquement réitéré dans les cinq ans', 'Sanctions pénales prévues par la loi, les plus lourdes pour les données sensibles', 'Article 30 : de 1 à 100 millions de FCFA']],
            ],
            'verdict'  => 'Les quatre textes se rejoignent sur l\'essentiel : une finalité précise, des données limitées au nécessaire, la sécurité, une prudence absolue sur les données sensibles et le refus des décisions entièrement automatisées sur les personnes. Pour le salarié, la conduite à tenir est donc la même partout ; ce qui change, ce sont les démarches de l\'entreprise et le niveau des sanctions. La formation lit en détail le texte du pays de l\'équipe, et des deux pays quand elle travaille entre l\'Afrique et l\'Europe.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quand les règles du règlement européen sur l\'IA s\'appliquent-elles ?',
            'legende' => 'Calendrier publié par la Commission européenne (page mise à jour le 3 août 2026), après l\'accord sur l\'omnibus de simplification du règlement, entré en vigueur en juillet 2026. La dernière colonne traduit chaque échéance en conséquence pratique pour un salarié.',
            'entetes' => ['Date', 'Ce qui s\'applique', 'Ce que cela change pour un salarié'],
            'lignes'  => [
                ['1er août 2024', 'Entrée en vigueur du règlement (UE) 2024/1689', 'Rien d\'immédiat : le compte à rebours des échéances commence'],
                ['2 février 2025', 'Pratiques interdites, dont la reconnaissance des émotions au travail et la notation sociale ; obligation de maîtrise de l\'IA (article 4)', 'L\'employeur doit prendre des mesures pour que le personnel qui utilise l\'IA en comprenne le fonctionnement et les risques'],
                ['2 août 2025', 'Règles de gouvernance et obligations des fournisseurs de modèles d\'IA à usage général', 'Les éditeurs des grands modèles ont leurs propres obligations ; l\'entreprise utilisatrice reste responsable de ses usages'],
                ['3 août 2026', 'Début de la surveillance et des sanctions liées à l\'article 4', 'L\'entreprise doit pouvoir montrer ce qu\'elle a fait ; aucun certificat n\'est exigé, une trace interne des formations suffit'],
                ['Août 2026', 'Application générale du règlement, dont les règles de transparence de l\'article 50', 'Hypertrucages et textes publiés pour informer le public signalés comme générés, sauf, pour les textes, relecture humaine et responsabilité éditoriale'],
                ['2 décembre 2027', 'Systèmes à haut risque des domaines sensibles : biométrie, infrastructures critiques, éducation, emploi, migration, asile, contrôle aux frontières', 'Les outils de recrutement ou d\'évaluation des salariés entrent dans ce régime ; le personnel chargé de la surveillance humaine doit y être formé'],
                ['2 août 2028', 'Systèmes à haut risque intégrés à des produits réglementés, comme les ascenseurs ou les jouets', 'Concerne surtout les fabricants et leurs équipes techniques'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels réflexes chaque salarié retient-il, thème par thème ?',
            'intro' => 'Les deux jours se résument en quelques gestes, que chaque participant reporte sur sa fiche réflexe de poste. Ils valent quel que soit l\'assistant utilisé et quel que soit le pays.',
            'items' => [
                ['titre' => 'Données personnelles', 'texte' => 'Avant de coller un texte, chercher ce qui permet de reconnaître quelqu\'un et le remplacer. Le nom ne suffit pas : un numéro, une adresse ou un poste unique dans une petite structure identifient aussi. En cas de doute, la donnée reste dans l\'entreprise.'],
                ['titre' => 'Données sensibles', 'texte' => 'Santé, origine, religion, opinions politiques ou syndicales, vie sexuelle, biométrie : jamais dans un assistant en ligne sans décision écrite de l\'entreprise et outil validé pour cet usage. Les quatre textes étudiés les entourent de règles plus strictes que les autres données.'],
                ['titre' => 'Secret des affaires', 'texte' => 'Prix, marges, offres en cours, listes de clients, plans, code et négociations restent hors des comptes personnels. En France, l\'article L151-1 du code de commerce ne protège une information que si son détenteur prend des mesures raisonnables pour en conserver le secret : chaque copier-coller dans un outil public affaiblit cette protection.'],
                ['titre' => 'Droit d\'auteur, à l\'entrée', 'texte' => 'Ne pas fournir à l\'assistant l\'œuvre d\'un tiers pour la faire imiter ou réécrire en vue d\'une publication : article de presse, photo, logo, illustration. Les documents produits par l\'entreprise elle-même posent moins de difficulté, sous réserve des règles sur les données et le secret.'],
                ['titre' => 'Droit d\'auteur, à la sortie', 'texte' => 'Un texte ou une image générés ne sont pas forcément protégeables, et peuvent ressembler de près à une œuvre existante. Avant publication : une recherche d\'extraits ou d\'image inversée, et une part réelle de création humaine dans le résultat final.'],
                ['titre' => 'Biais', 'texte' => 'Toute réponse qui classe, note ou écarte des personnes se teste en changeant un seul critère : prénom, âge, genre, quartier. Si la réponse change, l\'outil n\'est pas utilisé pour cette décision, et le cas remonte au responsable.'],
                ['titre' => 'Transparence', 'texte' => 'Un client qui converse avec un robot doit le savoir ; une image ou une vidéo réaliste générée se signale ; un texte d\'information publié sans relecture humaine aussi. Dans le doute, on mentionne l\'usage de l\'IA plutôt que de le taire.'],
                ['titre' => 'Exactitude et responsabilité', 'texte' => 'L\'assistant propose, le salarié décide. Ce qui sort au nom de l\'entreprise a été relu en entier, et la personne qui l\'envoie sait d\'où vient chaque fait, chaque chiffre et chaque citation.'],
                ['titre' => 'Signalement', 'texte' => 'Une donnée envoyée par erreur, un contenu publié trop vite : on prévient tout de suite la personne désignée. Dans l\'Union européenne, l\'article 33 du RGPD donne en principe 72 heures à l\'entreprise pour notifier une violation à l\'autorité ; chaque heure de silence du salarié est prise sur ce délai.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que deviennent vos données dans les assistants courants, selon l\'offre utilisée ?',
            'legende' => 'Conditions lues le 5 octobre 2026 sur les pages officielles des éditeurs. Elles changent souvent : la séance les vérifie de nouveau le jour de la formation, sur l\'assistant réellement utilisé par l\'équipe. Les abonnements restent au nom de l\'entreprise et ne font pas partie du prix de la formation.',
            'entetes' => ['Assistant et offre', 'Ce que dit l\'éditeur', 'Ce que le salarié vérifie', 'Source'],
            'lignes'  => [
                ['Gemini, compte Google personnel', 'Activité activée : les conversations servent à entraîner les modèles et une partie est relue par des réviseurs humains ; conservation par défaut de 18 mois, ou 3 ou 36 mois au choix. Activité désactivée : conservation jusqu\'à 72 heures', 'Le réglage d\'activité, et la consigne de Google elle-même : ne pas saisir d\'informations confidentielles qu\'on ne voudrait pas voir lues par un réviseur', 'Google, centre de confidentialité des applications Gemini'],
                ['Gemini dans Google Workspace, compte professionnel', 'Conditions de traitement distinctes de celles des comptes personnels, décrites dans un guide propre à Workspace', 'Que le salarié est bien connecté avec son compte professionnel, et non avec son compte personnel', 'Google, centre de confidentialité des applications Gemini'],
                ['Claude, offres Free, Pro et Max', 'Depuis la mise à jour du 28 août 2025, chaque utilisateur choisit si ses conversations servent à améliorer Claude ; s\'il accepte, la conservation passe à cinq ans', 'Le choix fait dans les paramètres de confidentialité, modifiable à tout moment', 'Anthropic, mise à jour des conditions grand public'],
                ['Claude sous conditions commerciales (Claude for Work, API)', 'Exclu de cette mise à jour, qui ne vise que les offres grand public', 'Que l\'équipe travaille bien dans l\'offre souscrite par l\'entreprise', 'Anthropic, mise à jour des conditions grand public'],
                ['Microsoft Copilot et Copilot Chat, compte professionnel', 'Couverts par l\'avenant de protection des données de Microsoft, qui agit comme sous-traitant ; demandes et réponses non utilisées pour entraîner les modèles de fondation ; les requêtes envoyées au moteur Bing relèvent d\'autres conditions, Microsoft y agissant comme responsable indépendant', 'La connexion avec le compte de l\'entreprise, et la prudence sur ce qui part en recherche web', 'Microsoft Learn, page mise à jour le 18 août 2026'],
                ['Tout autre assistant, ChatGPT compris', 'Conditions variables selon l\'offre, personnelle ou professionnelle', 'Les réglages de contrôle des données du compte, ouverts en séance sur la page de l\'éditeur', 'Page de confidentialité de l\'éditeur, relue le jour de la session'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment la session est-elle préparée avec l\'entreprise, puis suivie ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous indiquez le ou les pays de l\'équipe, les postes concernés, les assistants d\'IA en service et les incidents ou les questions qui ont motivé la demande. Ces éléments décident des textes étudiés et du choix entre le socle et le parcours complet.'],
                ['titre' => 'Recueil des situations réelles', 'duree' => '1 à 2 semaines avant', 'texte' => 'Les managers transmettent des cas vécus ou redoutés, anonymisés : un CV soumis à un assistant, une publication contestée, une demande inhabituelle d\'un client. Ils deviennent les exercices, ce qui rend la séance immédiatement concrète.'],
                ['titre' => 'Lecture des règles internes', 'duree' => 'Avant la session', 'texte' => 'La charte, le règlement intérieur, les clauses de confidentialité des contrats et les consignes informatiques sont lus, pour que la formation ne contredise jamais ce que l\'entreprise a décidé. Les contradictions repérées sont signalées à la direction, pas aux participants.'],
                ['titre' => 'Livret de textes', 'duree' => 'Avant la session', 'texte' => 'Les articles utiles du RGPD, de la loi du pays et du règlement européen sont extraits des sources officielles, datés et réunis dans un livret que chaque participant garde après la formation.'],
                ['titre' => 'Animation', 'duree' => '1 ou 2 jours, en demi-journées de 3 h 30', 'texte' => 'Chaque thème part d\'une situation, puis du texte, puis du geste. Les participants tranchent d\'abord seuls, confrontent leurs réponses, et le formateur conclut avec la règle et sa source.'],
                ['titre' => 'Évaluation et fiche réflexe', 'duree' => 'Dernière demi-journée', 'texte' => 'Dix situations inédites, tranchées individuellement, et une fiche réflexe d\'une page par poste. Les résultats agrégés, sans aucun nom, sont remis au commanditaire avec la liste des questions restées ouvertes.'],
                ['titre' => 'Suivi', 'duree' => 'Le mois qui suit', 'texte' => 'Un canal direct pour les cas concrets rencontrés après la session, sans facturation supplémentaire. Les questions qui relèvent d\'une décision de direction lui sont renvoyées, avec une proposition de réponse argumentée.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment apprend-on des règles juridiques sans cours magistral ?',
            'intro' => 'Une règle de droit se retient quand on l\'a appliquée à un cas qui ressemble au sien. La méthode repose sur quelques principes fixes.',
            'items' => [
                ['titre' => 'Le cas avant le texte', 'texte' => 'Chaque séquence commence par une situation que les participants tranchent seuls, à l\'instinct. Le texte arrive ensuite, et l\'écart entre l\'instinct et la règle devient le sujet de la discussion.'],
                ['titre' => 'Les textes officiels, pas des résumés', 'texte' => 'Les articles sont lus dans la version publiée par l\'autorité ou le journal officiel, avec leur numéro et leur date. Chacun apprend à retrouver une règle par lui-même plutôt qu\'à croire un résumé, y compris celui d\'un assistant d\'IA.'],
                ['titre' => 'Des groupes réduits', 'texte' => 'Douze personnes au plus en salle, huit à distance. Les débats sur des cas sensibles demandent que chacun puisse parler, et parfois reconnaître une pratique risquée sans être exposé devant tous.'],
                ['titre' => 'Aucune mise en cause individuelle', 'texte' => 'Les pratiques décrites en séance ne sont jamais rapportées nominativement au commanditaire. C\'est la condition pour que les usages réels, et pas seulement les usages déclarés, soient mis sur la table.'],
                ['titre' => 'La manipulation des réglages', 'texte' => 'Chaque participant ouvre les paramètres de son propre assistant et les ajuste pendant la séance. Un réglage modifié une fois de ses propres mains est un réglage compris.'],
                ['titre' => 'Des supports qui restent', 'texte' => 'Le livret d\'extraits de textes, les situations corrigées, la fiche réflexe de poste et une attestation nominative de fin de formation, remis dans un format que l\'entreprise peut modifier.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quelles situations la formation répond-elle selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Recrutement dans une entreprise de services, à Abidjan', 'probleme' => 'Les chargés de recrutement font résumer et classer des candidatures par un assistant gratuit, avec les numéros de téléphone et les photos des candidats.', 'solution' => 'Lecture des articles 7, 25 et 26 de la loi ivoirienne, pseudonymisation des dossiers, test de biais sur deux profils identiques à un critère près, et règle claire : l\'outil aide à lire, il ne classe pas.'],
                ['secteur' => 'Clinique ou centre de santé, à Cotonou', 'probleme' => 'Des soignants reformulent des comptes rendus avec un assistant sur leur téléphone, pour gagner du temps en fin de garde.', 'solution' => 'Les données de santé sont interdites de traitement sauf exceptions par l\'article 394 de la loi n° 2017-20 : la formation installe le réflexe du modèle vide, sans aucune donnée de patient, et fait remonter le besoin à la direction.'],
                ['secteur' => 'Agence de communication, à Dakar', 'probleme' => 'Les visuels de campagne sont générés en quelques minutes, parfois avec des visages réalistes ou dans le style reconnaissable d\'un illustrateur.', 'solution' => 'Règles sur la reprise d\'œuvres de tiers, recherche d\'image inversée avant livraison, mention des contenus générés, et clause à discuter avec les clients sur l\'usage de l\'IA dans les créations.'],
                ['secteur' => 'PME industrielle, en France', 'probleme' => 'Un technicien a fait traduire un cahier des charges confidentiel d\'un client grand compte dans un assistant personnel.', 'solution' => 'Les trois critères de l\'article L151-1 du code de commerce, la lecture des clauses de confidentialité du contrat, le passage obligatoire par l\'outil professionnel de l\'entreprise et la procédure de signalement interne.'],
                ['secteur' => 'Institution de microfinance, en Afrique de l\'Ouest', 'probleme' => 'Les agents de crédit demandent à un assistant d\'évaluer la fiabilité d\'un emprunteur à partir de notes de visite.', 'solution' => 'Interdiction des décisions fondées sur le seul traitement automatisé, test de biais sur le quartier et le genre, et place de l\'assistant limitée à la mise en forme du dossier, sous décision humaine motivée.'],
                ['secteur' => 'ONG et projets financés', 'probleme' => 'Les rapports aux bailleurs contiennent des listes de bénéficiaires, parfois mineurs, et des photos prises sur le terrain.', 'solution' => 'Anonymisation systématique avant tout usage d\'un assistant, absence de photos identifiables dans les outils en ligne, et règles de transparence pour les visuels publiés dans les rapports publics.'],
                ['secteur' => 'Cabinet de services aux entreprises, en Belgique ou en Suisse', 'probleme' => 'L\'équipe utilise Copilot avec le compte de l\'entreprise, mais lance aussi des recherches web qui contiennent des noms de clients.', 'solution' => 'Différence entre les données couvertes par l\'avenant de protection de Microsoft et les requêtes envoyées au moteur de recherche, et formulation de recherches sans élément identifiant.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir : sensibilisation, socle, parcours complet ou distance ?',
            'legende' => 'Les formats se combinent souvent : le socle pour tous les salariés, puis le parcours complet pour les postes exposés et les référents.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Sensibilisation', '2 heures', 'Grand groupe, en salle ou en visioconférence', 'Lancer le sujet devant toute l\'entreprise, ou accompagner la diffusion d\'une charte ; ne remplace pas les exercices'],
                ['Socle, intra', '1 jour, en 2 demi-journées', '12 personnes au plus', 'Tous les salariés qui utilisent un assistant ; c\'est le minimum pour des réflexes acquis en pratique'],
                ['Parcours complet, intra', '2 jours, en 4 demi-journées', '10 personnes au plus, par famille de postes', 'Ressources humaines, commercial, communication, santé, juridique, référents'],
                ['Session mutualisée, inter', '1 jour', 'Plusieurs structures d\'un même réseau ou d\'une même fédération', 'Une ou deux personnes par organisation ; les situations sont fictives ou publiques'],
                ['À distance', '4 séances de 2 heures, ou 8 pour le parcours complet', '8 personnes au plus', 'Équipes réparties entre plusieurs villes ou pays, y compris entre l\'Afrique et l\'Europe'],
                ['Hybride', 'Une demi-journée en salle, puis séances à distance', '10 personnes au plus', 'Prise en main des réglages en salle, puis cas pratiques étalés sur quelques semaines'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment se règle-t-elle ?',
            'intro'      => 'Le prix est fixé sur devis, après le premier échange, et le devis détaille chaque poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Sensibilisation', 'prix' => 'Sur devis', 'inclus' => ['Deux heures sur les cinq familles de risques', 'Situations tirées de vos métiers', 'Support de synthèse remis à tous']],
                ['offre' => 'Socle d\'une journée', 'prix' => 'Sur devis', 'inclus' => ['Deux demi-journées', 'Réglages faits sur les comptes des participants', 'Livret de textes du pays', 'Fiche réflexe et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Parcours de deux jours', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Secret des affaires, droit d\'auteur, biais et transparence', 'Évaluation sur situations inédites', 'Synthèse anonyme pour la direction', 'Canal direct le mois suivant']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le format retenu et le nombre de demi-journées.',
                'Le nombre de pays dont les textes doivent être étudiés.',
                'Le temps de préparation des situations à partir de vos cas réels.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.',
                'Le mode : présentiel, distance ou hybride, et la langue des supports.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge la session ?',
            'paragraphes' => [
                'C\'est possible dans certains pays, jamais garanti, et cela se vérifie avant de signer. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> indique, sur sa page consultée le 5 octobre 2026, que toute entreprise qui justifie du paiement régulier des deux taxes de formation peut déposer un plan de formation, y compris pour des actions intra assurées par un intervenant extérieur ; la liquidation intervient après le suivi et le contrôle de ses services et l\'approbation de sa Commission permanente.',
                'Au Bénin, les statuts du FODEFCA, le fonds de développement de la formation professionnelle continue et de l\'apprentissage, ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> affiche un guichet consacré au financement du personnel des entreprises et des membres des organisations professionnelles. Dans les deux cas, les conditions se demandent au fonds lui-même, programme et devis en main.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, les prestataires qui veulent accéder à des fonds publics ou mutualisés doivent être certifiés Qualiopi. Richard SALANON ne détient ni cette certification ni aucun agrément de fonds : le budget doit donc être prévu sans prise en charge. Les documents remis (programme, feuilles de présence, évaluation, attestation) servent en revanche de trace de la formation, ce que la Commission européenne admet pour l\'article 4 du règlement sur l\'IA.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent après une formation, et comment les éviter ?',
            'intro' => 'Le risque, un mois après la session, n\'est pas l\'oubli des textes ; c\'est le retour des raccourcis sous la pression du travail. Ces écarts reviennent d\'une entreprise à l\'autre.',
            'items' => [
                ['titre' => 'Croire que l\'offre payante règle tout', 'texte' => 'Un abonnement individuel payé par le salarié reste un compte personnel, avec les conditions grand public. Seule l\'offre souscrite et administrée par l\'entreprise apporte des engagements contractuels sur les données, et encore faut-il être connecté avec le bon compte.'],
                ['titre' => 'Anonymiser à moitié', 'texte' => 'On retire le nom, on laisse le numéro de dossier, la fonction et la ville : dans une structure de trente personnes, l\'intéressé reste reconnaissable. L\'exercice de vérification fait en séance (peut-on retrouver la personne ?) doit devenir un réflexe.'],
                ['titre' => 'Laisser l\'outil trancher sur une personne', 'texte' => 'Un résumé de candidature devient un classement, puis une liste courte que personne ne remet en cause. Chaque décision sur un candidat, un client ou un salarié garde un décideur nommé, qui peut expliquer ses critères sans renvoyer à l\'outil.'],
                ['titre' => 'Publier un visuel sans contrôle', 'texte' => 'Une image générée qui ressemble à une personne réelle, à un logo connu ou au style d\'un artiste identifiable expose l\'entreprise. La recherche d\'image inversée prend une minute et se fait avant chaque publication.'],
                ['titre' => 'Cacher une erreur', 'texte' => 'Le salarié qui a soumis un fichier client par erreur se tait, de peur d\'être sanctionné. La direction doit dire clairement que le signalement rapide est attendu et protégé ; sans cela, la règle des 72 heures du RGPD devient impossible à tenir.'],
                ['titre' => 'Former une fois et ne plus en parler', 'texte' => 'Les conditions des éditeurs et les textes changent. Un rappel de trente minutes à six mois, à partir des questions reçues sur le canal de suivi, entretient les réflexes à moindre coût.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'L\'entreprise peut-elle s\'abriter derrière l\'éditeur de l\'assistant ?',
            'texte' => 'Non. Le RGPD comme les lois du Bénin, de Côte d\'Ivoire et du Sénégal font de l\'entreprise le responsable du traitement, et de l\'éditeur, au mieux, un sous-traitant qu\'elle doit choisir avec des garanties suffisantes ; l\'article 386 de la loi béninoise et l\'article 20 de la loi ivoirienne le disent expressément. L\'histoire d\'<a href="/histoires/british-airways-piratage">un piratage passé par l\'identifiant d\'un sous-traitant</a> rappelle que l\'autorité sanctionne l\'entreprise, pas son fournisseur. Un salarié qui confie des données à un outil non validé engage donc son employeur.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent les obligations et les sanctions ?',
            'items' => [
                ['valeur' => '72 heures', 'libelle' => 'Délai dans lequel l\'entreprise doit, si possible, notifier une violation de données personnelles à l\'autorité de contrôle (RGPD du 27 avril 2016, article 33)', 'source' => 'EUR-Lex, règlement (UE) 2016/679', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32016R0679'],
                ['valeur' => '20 M€ ou 4 %', 'libelle' => 'Plafond des amendes pour les manquements les plus graves au RGPD : 20 millions d\'euros ou 4 % du chiffre d\'affaires annuel mondial (article 83)', 'source' => 'EUR-Lex, règlement (UE) 2016/679', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32016R0679'],
                ['valeur' => '50 M FCFA', 'libelle' => 'Sanction pécuniaire maximale de l\'APDP au premier manquement, portée à 100 millions en cas de manquement réitéré dans les cinq ans (loi n° 2017-20 du 20 avril 2018, article 455)', 'source' => 'Secrétariat général du Gouvernement du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/'],
                ['valeur' => '1 à 100 M FCFA', 'libelle' => 'Fourchette des sanctions pécuniaires que peut prononcer la CDP au Sénégal (loi n° 2008-12 du 25 janvier 2008, article 30)', 'source' => 'OMPI, WIPO Lex', 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229'],
                ['valeur' => '9', 'libelle' => 'Pratiques d\'IA interdites énumérées par la Commission européenne, dont la reconnaissance des émotions sur le lieu de travail (page mise à jour le 3 août 2026)', 'source' => 'Commission européenne, cadre réglementaire de l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
                ['valeur' => '2 décembre 2027', 'libelle' => 'Date d\'application des règles sur les systèmes d\'IA à haut risque dans l\'emploi, l\'éducation et la biométrie, après l\'omnibus de 2026', 'source' => 'Commission européenne, cadre réglementaire de l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le pays de l\'équipe, de Cotonou à Paris ?',
            'paragraphes' => [
                'Au Bénin, la protection des données relève du livre V de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>, et son contrôle de l\'APDP. L\'article 383 impose des données collectées pour des finalités déterminées, adéquates, pertinentes et non excessives. Selon la <a href="https://archive.apdp.bj/procedures/">page des procédures de l\'APDP</a>, tout responsable de traitement doit déclarer les traitements de données personnelles et obtenir une autorisation pour les données sensibles ; l\'Autorité dispose de deux mois pour répondre, et un formulaire distinct existe pour les transferts vers un pays étranger. Un service qui veut brancher un assistant sur ses fichiers clients commence donc par là.',
                'En Côte d\'Ivoire, la <a href="https://www.autoritedeprotection.ci/lois/">loi n° 2013-450 du 19 juin 2013</a>, publiée au Journal officiel du 8 août 2013, soumet à autorisation préalable de l\'Autorité de protection le traitement des données biométriques, celui des numéros d\'identification comme les numéros de téléphone, et tout transfert envisagé vers un pays tiers. Au Sénégal, la <a href="https://www.wipo.int/wipolex/fr/legislation/details/6229">loi n° 2008-12 du 25 janvier 2008</a> confie le contrôle à la CDP et n\'autorise le transfert vers un pays tiers que s\'il assure un niveau de protection suffisant. Pour le salarié, ces règles se traduisent par le même geste : rien d\'identifiant dans un outil hébergé à l\'étranger sans feu vert de l\'entreprise.',
                'En Europe, la <a href="https://www.cnil.fr/fr/les-questions-reponses-de-la-cnil-sur-lutilisation-dun-systeme-dia-generative">CNIL</a>, dans ses questions-réponses du 18 juillet 2024, recommande de ne jamais partager de données personnelles ou de données de l\'entreprise avec un service d\'IA générative grand public, de privilégier une solution sur site pour les documents sensibles et de vérifier que les résultats sont exacts et ne relèvent pas du plagiat. Selon les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission</a> mises à jour le 27 juillet 2026, l\'omnibus maintient l\'obligation de maîtrise de l\'IA pour les fournisseurs et les utilisateurs professionnels, sans plus exiger de niveau « suffisant ».',
                'Deux réalités pratiques complètent les textes. La langue d\'abord : les assistants répondent en français, mais leurs réponses juridiques reflètent souvent le droit français, même quand l\'équipe travaille à Lomé ou à Douala ; d\'où l\'habitude, apprise en séance, de toujours revenir au texte officiel du pays. La connexion ensuite : le livret de textes et les fiches réflexes sont remis sur papier et en fichier, consultables hors ligne, parce que la vérification d\'une règle ne doit pas dépendre du réseau du jour.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi suivre cette formation avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il ne parle pas de l\'IA de l\'extérieur. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>, et il branche des modèles d\'IA sur les logiciels de ses clients : les questions de données, d\'hébergement et de sous-traitance qu\'il enseigne sont celles qu\'il traite dans ses propres projets. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il cumule ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, dont le Bénin, la Côte d\'Ivoire, le Sénégal, la France, la Belgique et la Suisse, ce qui l\'oblige à lire les textes de chacun.',
                'Il n\'est ni avocat ni délégué à la protection des données, et le dit dès la première séance : il enseigne la lecture des textes officiels et les gestes prudents qui en découlent, et renvoie les questions de droit pur aux professionnels. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur celle des <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>, dont l\'<a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> et l\'<a href="/formations/ia-droit-ohada">IA et droit OHADA</a> pour les juristes.',
                'Quand la formation révèle un besoin d\'outillage, par exemple un assistant hébergé sous le contrôle de l\'entreprise pour les documents sensibles, il relève d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> ; quand il faut d\'abord poser une stratégie et des priorités, d\'une mission de <a href="/services/consultant-digitalisation">conseil en digitalisation</a>. Les réflexes de sécurité informatique plus larges, comme le hameçonnage ou les mots de passe, sont traités dans la formation <a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>, et l\'ensemble de l\'offre dans le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire vos équipes ?',
            'texte' => 'Formez d\'abord tous ceux qui utilisent un assistant, même rarement, puis les postes qui touchent aux personnes, aux secrets et aux publications ; travaillez sur le texte officiel du pays de l\'équipe ; faites régler les comptes pendant la séance ; et dites clairement qu\'une erreur signalée vite est attendue, pas punie.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former vos équipes aux règles de l\'IA et des données ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, le ou les pays concernés, les assistants d\'IA en service et les situations qui vous inquiètent : vous recevez une réponse sous 24 heures, puis un programme adapté et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA et conformité'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il des connaissances juridiques pour suivre la formation ?', 'r' => 'Non. Les textes sont lus en groupe, article par article, et toujours rattachés à un geste concret du poste de travail. Savoir utiliser un assistant d\'IA, même de façon sommaire, suffit.'],
        ['q' => 'La formation remplace-t-elle un délégué à la protection des données ou un avocat ?', 'r' => 'Non. Elle donne aux salariés les bons réflexes et leur apprend à reconnaître les cas qui doivent remonter. Les décisions juridiques de l\'entreprise, comme un transfert de fichier vers l\'étranger ou un traitement de données sensibles, restent du ressort de la direction, de son délégué ou de son conseil.'],
        ['q' => 'Le règlement européen sur l\'IA oblige-t-il à former les salariés ?', 'r' => 'Son article 4 oblige les fournisseurs et les utilisateurs professionnels de systèmes d\'IA à prendre des mesures pour la maîtrise de l\'IA de leur personnel, depuis le 2 février 2025 ; la surveillance et les sanctions s\'appliquent depuis le 3 août 2026, selon la Commission européenne. Aucun certificat n\'est exigé : une trace interne des formations suffit.'],
        ['q' => 'Notre entreprise est en Afrique : le règlement européen nous concerne-t-il ?', 'r' => 'Il concerne d\'abord les usages dans l\'Union européenne. Une entreprise africaine qui travaille pour des clients européens ou y diffuse des contenus doit donc s\'y intéresser. Dans tous les cas, la loi de son propre pays sur les données personnelles s\'applique, et c\'est elle que la formation étudie en premier.'],
        ['q' => 'Un texte ou une image produits par une IA appartiennent-ils à l\'entreprise ?', 'r' => 'Ce n\'est pas acquis. Aux États-Unis, le Copyright Office a conclu, dans son rapport du 29 janvier 2025, que de simples consignes ne suffisent pas et qu\'un résultat n\'est protégé que si un auteur humain en a déterminé suffisamment d\'éléments expressifs. Cette position ne fait pas loi en Europe ni en Afrique, mais elle invite à garder une part réelle de création humaine dans ce que l\'entreprise publie.'],
        ['q' => 'Peut-on utiliser un assistant d\'IA pour trier des candidatures ?', 'r' => 'Pour aider à lire, avec des dossiers pseudonymisés, oui ; pour décider, non. Les lois du Bénin, de Côte d\'Ivoire et du Sénégal comme le RGPD refusent les décisions sur une personne fondées sur le seul traitement automatisé, et le règlement européen classe les outils de recrutement parmi les systèmes à haut risque à partir du 2 décembre 2027.'],
        ['q' => 'Faut-il dire à nos clients qu\'un texte ou une image a été générés ?', 'r' => 'Pour les hypertrucages, oui, selon l\'article 50 du règlement européen, applicable depuis août 2026. Pour un texte publié afin d\'informer le public, la mention n\'est pas requise s\'il a été relu par une personne et qu\'une responsabilité éditoriale est assumée. Un client qui converse avec un robot doit savoir qu\'il parle à une machine, sauf si c\'est évident.'],
        ['q' => 'Sur quels assistants la formation se fait-elle ?', 'r' => 'Sur ceux que l\'équipe utilise réellement, sur les comptes des participants : ChatGPT, Claude, Gemini, Copilot ou un autre outil. Les réglages de confidentialité de chacun sont ouverts et ajustés pendant la séance.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis. Il dépend du nombre de participants et de groupes, du format, du nombre de pays dont les textes sont étudiés, de la préparation des situations à partir de vos cas et du lieu. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Un fonds de formation peut-il la financer ?', 'r' => 'Cela dépend des règles du FDFP, du FODEFCA, du 3FPT ou de votre OPCO, et aucune prise en charge n\'est garantie. Richard SALANON n\'est ni certifié Qualiopi ni agréé par un fonds : interrogez votre fonds par écrit, programme et devis à l\'appui, avant de vous engager.'],
        ['q' => 'Quelle différence avec la formation Gouverner l\'IA dans l\'entreprise ?', 'r' => 'Celle-ci s\'adresse à chaque salarié et porte sur ses gestes. La formation de gouvernance s\'adresse à la direction et aux responsables : rédiger la charte, inventorier les usages, répartir les rôles, organiser les contrôles. Les deux se complètent, la gouvernance en premier quand aucune règle n\'existe encore.'],
        ['q' => 'Que reçoivent les participants à la fin ?', 'r' => 'Le livret d\'extraits des textes officiels de leur pays, les situations corrigées, leur fiche réflexe de poste et une attestation nominative de fin de formation. Ce n\'est ni un diplôme ni une certification.'],
    ],

    'sources' => [
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA : calendrier d\'application et omnibus (page mise à jour le 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 50 du règlement sur l\'IA, version consolidée au 27 juillet 2026', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, les questions-réponses sur l\'utilisation d\'un système d\'IA générative (18 juillet 2024)', 'url' => 'https://www.cnil.fr/fr/les-questions-reponses-de-la-cnil-sur-lutilisation-dun-systeme-dia-generative', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2016/679 (RGPD), articles 9, 22, 33 et 83', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32016R0679', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 383, 386, 391, 394, 401, 455 et 462)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'APDP, procédures de déclaration, d\'autorisation et de transfert', 'url' => 'https://archive.apdp.bj/procedures/', 'date' => '2026-10-05'],
        ['titre' => 'ARTCI, Autorité de protection : lois, dont la loi n° 2013-450 du 19 juin 2013 (articles 5, 7, 20, 21, 25 et 26)', 'url' => 'https://www.autoritedeprotection.ci/lois/', 'date' => '2026-10-05'],
        ['titre' => 'OMPI, WIPO Lex : loi sénégalaise n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel (articles 5, 18, 20, 30, 48 et 49)', 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, article L151-1 du code de commerce (secret des affaires)', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000037266553', 'date' => '2026-10-05'],
        ['titre' => 'U.S. Copyright Office, rapport sur l\'IA, partie 2 : protection des résultats générés (29 janvier 2025)', 'url' => 'https://www.copyright.gov/newsnet/2025/1060.html', 'date' => '2026-10-05'],
        ['titre' => 'Google, centre de confidentialité des applications Gemini', 'url' => 'https://support.google.com/gemini/answer/13594961?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, mise à jour des conditions grand public (28 août 2025)', 'url' => 'https://www.anthropic.com/news/updates-to-our-consumer-terms', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft Learn, protection des données d\'entreprise dans Microsoft Copilot et Copilot Chat (mise à jour du 18 août 2026)', 'url' => 'https://learn.microsoft.com/en-us/copilot/microsoft-365/enterprise-data-protection', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['gouvernance-ia', 'ia-en-entreprise', 'ia-generative-dirigeants', 'contenu-avec-ia', 'ia-droit-ohada', 'cybersecurite-employes'],
        'services'    => ['integration-ia-entreprise', 'consultant-digitalisation'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
