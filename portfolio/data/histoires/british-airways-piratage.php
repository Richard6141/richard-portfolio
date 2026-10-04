<?php
// ============================================================
// data/histoires/british-airways-piratage.php · Histoire externe (non cliente) :
// le piratage des pages de paiement de British Airways en 2018 et l'amende
// de l'ICO (16 octobre 2020). Faits relevés le 03/10/2026 dans l'avis de
// sanction de l'ICO et les sources listées dans 'sources'.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'British Airways : la page de paiement que personne ne surveillait',
    'title'   => 'Piratage de British Airways : leçons pour encaisser en ligne',
    'meta'    => 'En 2018, un script glissé sur le site de British Airways a copié les cartes de ses clients pendant quinze jours. Faits sourcés et leçons pour une PME.',
    'en_bref' => 'Entre juin et septembre 2018, un attaquant entré dans le réseau de British Airways avec l\'identifiant d\'un sous-traitant a modifié un fichier JavaScript du site pour copier les données de cartes saisies par les clients. Selon l\'avis de sanction de l\'ICO du 16 octobre 2020, environ 429 612 personnes ont été touchées et la compagnie a reçu une amende de 20 millions de livres, après en avoir envisagé 183,39 millions en juillet 2019. La leçon pour une PME qui encaisse en ligne : déléguer la saisie du paiement à une passerelle, inventorier et surveiller chaque script de ses pages, et savoir détecter seule qu\'un fichier a changé.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',

    'relation' => 'externe',
    'client'   => 'British Airways',

    'faits_hero' => [
        ['l' => 'Secteur', 'v' => 'Transport aérien, réservation et paiement en ligne'],
        ['l' => 'Période', 'v' => 'Juin 2018 à juillet 2021'],
        ['l' => 'Issue', 'v' => 'Échec'],
        ['l' => 'Leçon', 'v' => 'Surveiller chaque script de paiement'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui était British Airways en 2018, et pourquoi son site était-il une cible ?',
            'paragraphes' => [
                'En 2018, British Airways est la principale compagnie du groupe International Airlines Group (IAG), immatriculé en Espagne mais dont le siège opérationnel se trouve au Royaume-Uni, comme le rappelle l\'<a href="https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf">avis de sanction de l\'ICO</a>, l\'autorité britannique de protection des données. Pour l\'exercice clos le 31 décembre 2017, la compagnie a déclaré à l\'ICO un chiffre d\'affaires mondial de 12,226 milliards de livres. Ses clients réservent et paient leurs billets sur britishairways.com et dans son application mobile, au Royaume-Uni, dans l\'Union européenne et dans le reste du monde.',
                'Un site de ce type concentre exactement ce que cherchent les fraudeurs à la carte bancaire : un flux continu de numéros de cartes, de dates d\'expiration et de cryptogrammes, saisis par des clients qui font confiance à une marque connue. Dans l\'affaire racontée ici, l\'ICO note que l\'attaquant semble avoir été motivé par l\'argent, et qu\'il aurait pu se servir du même accès pour viser des personnalités, perturber les réservations ou commettre d\'autres fraudes.',
                'Le calendrier compte aussi. Le Règlement général sur la protection des données (RGPD) entre en application le 25 mai 2018. Moins d\'un mois plus tard, l\'intrusion commence. L\'avis de sanction relève que British Airways avait lancé un programme de préparation au RGPD, et qu\'elle disposait depuis le 7 octobre 2017 d\'une politique interne exigeant une authentification à plusieurs facteurs pour tout accès distant à son réseau, y compris celui des prestataires. Les règles existaient donc sur le papier ; c\'est leur application qui a manqué.',
                'Ce récit s\'appuie d\'abord sur cet avis de sanction de l\'ICO, un document public de plus d\'une centaine de pages dont certains passages techniques sont masqués, puis sur l\'analyse publiée en septembre 2018 par la société de sécurité RiskIQ et sur la presse spécialisée. British Airways n\'a pas reconnu sa responsabilité ; l\'ICO l\'écrit dès le paragraphe 1.6 de sa décision.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent l\'entreprise et l\'incident ?',
            'items' => [
                ['valeur' => '12,226 Md £', 'libelle' => 'Chiffre d\'affaires mondial de British Airways pour l\'exercice 2017, déclaré à l\'ICO', 'source' => 'ICO, avis de sanction du 16 octobre 2020, paragraphe 7.55', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
                ['valeur' => '243', 'libelle' => 'Applications accessibles par la passerelle d\'accès distant Citrix en octobre 2018, dont 13 sans authentification à plusieurs facteurs', 'source' => 'ICO, avis de sanction, paragraphe 6.20', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
                ['valeur' => '22 lignes', 'libelle' => 'Code ajouté à la bibliothèque JavaScript Modernizr du site, selon l\'analyse de RiskIQ rapportée en septembre 2018', 'source' => 'CSO Online, 11 septembre 2018', 'url' => 'https://www.csoonline.com/article/566287/british-airways-hack-was-by-same-group-that-compromised-ticketmaster.html'],
                ['valeur' => '15 jours', 'libelle' => 'Durée pendant laquelle le code malveillant a copié les paiements, du 21 août au 5 septembre 2018', 'source' => 'ICO, avis de sanction, paragraphe 3.25', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Comment l\'attaque et ses suites se sont-elles déroulées, date par date ?',
            'items' => [
                ['date' => 'Décembre 2015', 'titre' => 'Une fonction de test reste allumée', 'texte' => 'Une fonction de journalisation conçue pour les tests est laissée active à la mise en service d\'un système : elle enregistre en clair des données de cartes, cryptogramme compris dans la plupart des cas, pour des réservations payées avec des points de fidélité. L\'ICO date ce problème de décembre 2015.'],
                ['date' => '7 octobre 2017', 'titre' => 'Une politique d\'accès exige la double authentification', 'texte' => 'La politique de contrôle d\'accès réseau de British Airways prévoit l\'authentification à plusieurs facteurs pour tout accès distant, prestataires compris, selon l\'avis de sanction.'],
                ['date' => '25 mai 2018', 'titre' => 'Le RGPD entre en application', 'texte' => 'Les amendes peuvent désormais atteindre 4 % du chiffre d\'affaires mondial. L\'ICO ne retiendra que les manquements commis à partir de cette date.'],
                ['date' => '22 juin 2018', 'titre' => 'L\'attaquant entre par le compte d\'un sous-traitant', 'texte' => 'Avec l\'identifiant et le mot de passe d\'un employé de Swissport, prestataire de fret basé à Trinité-et-Tobago, il se connecte à la passerelle Citrix de British Airways, sans second facteur.'],
                ['date' => '26 juillet 2018', 'titre' => 'Des fichiers journaux livrent des cartes', 'texte' => 'Après avoir obtenu un compte administrateur dont le mot de passe était stocké en clair, l\'attaquant accède aux journaux contenant des cartes de paiement en clair, conservés 95 jours.'],
                ['date' => '14 au 25 août 2018', 'titre' => 'Le code du site est modifié', 'texte' => 'L\'attaquant modifie un fichier JavaScript du site pour envoyer une copie des données de cartes vers BAways.com, un domaine qu\'il contrôle. Le code est actif à partir du 21 août.'],
                ['date' => '5 septembre 2018', 'titre' => 'Un tiers donne l\'alerte', 'texte' => 'Une tierce partie signale à British Airways des envois vers BAways.com. En 90 minutes, le code est neutralisé ; 20 minutes plus tard, les adresses vers le domaine pirate sont bloquées.'],
                ['date' => '6 septembre 2018', 'titre' => 'Notifications à l\'ICO, aux banques et aux clients', 'texte' => 'La compagnie prévient l\'ICO, les banques acquéreuses, les réseaux de cartes et 496 636 clients, puis 39 480 de plus le 7 septembre.'],
                ['date' => '25 octobre 2018', 'titre' => 'L\'enquête élargit le périmètre', 'texte' => 'British Airways annonce 185 000 cartes supplémentaires peut-être touchées, liées à des réservations payées en points entre le 21 avril et le 28 juillet 2018, et ramène de 380 000 à 244 000 son estimation initiale, selon Reuters.'],
                ['date' => '4 juillet 2019', 'titre' => 'L\'ICO annonce son intention de sanctionner', 'texte' => 'L\'avis d\'intention propose une amende de 183,39 millions de livres, soit 1,5 % du chiffre d\'affaires 2017. Il est rendu public le 8 juillet 2019.'],
                ['date' => '16 octobre 2020', 'titre' => 'L\'amende définitive tombe à 20 millions de livres', 'texte' => 'Après les observations de la compagnie et la prise en compte de la pandémie de Covid-19, l\'ICO fixe la sanction à 20 millions de livres. Elle agit comme autorité chef de file pour les clients européens touchés.'],
                ['date' => '5 juillet 2021', 'titre' => 'Accord avec les clients plaignants', 'texte' => 'L\'action collective engagée en Angleterre se conclut par un accord confidentiel, sans reconnaissance de responsabilité, selon le cabinet Pogust Goodhead qui représentait les demandeurs.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que s\'est-il réellement passé entre l\'entrée de l\'attaquant et la copie des cartes ?',
            'paragraphes' => [
                'L\'attaque n\'a pas commencé sur le site web. Elle a commencé par une porte de service : la passerelle Citrix qui permettait à des employés et à des prestataires d\'utiliser à distance certaines applications de British Airways comme s\'ils étaient au bureau. L\'attaquant y est entré le 22 juin 2018 avec les identifiants d\'un employé de Swissport, prestataire de services de fret. British Airways n\'a jamais pu établir comment ces identifiants avaient été obtenus, mais elle a constaté, d\'après l\'avis de sanction, que cinq comptes liés à Swissport avaient été compromis.',
                'Ce compte ne demandait qu\'un nom d\'utilisateur et un mot de passe. Une fois connecté, l\'attaquant a réussi à « sortir » de l\'environnement Citrix pour atteindre des parties du réseau auxquelles les employés de Swissport n\'étaient pas censés accéder. La méthode exacte reste masquée ou incertaine dans l\'avis de sanction. Il a ensuite importé ses propres outils et cartographié le réseau.',
                'Pendant cette reconnaissance, il a trouvé un fichier contenant, en clair, l\'identifiant et le mot de passe d\'un compte d\'administrateur de domaine, l\'un des comptes les plus puissants d\'un réseau Windows. L\'ICO note qu\'en théorie, n\'importe quel utilisateur du domaine pouvait ouvrir ce fichier. À partir de là, l\'attaquant a pu activer un compte invité désactivé, l\'ajouter au groupe des administrateurs locaux et se déplacer de serveur en serveur sans déclencher d\'alerte.',
                'Le 26 juillet 2018, il a atteint des fichiers journaux qui contenaient en clair des données de cartes de paiement liées aux réservations payées en points de fidélité. Ces données n\'auraient jamais dû être enregistrées : il s\'agissait d\'une fonction de test restée active depuis décembre 2015, par erreur humaine selon la compagnie. Leur conservation était limitée à 95 jours, ce qui a borné l\'exposition : l\'ICO estime qu\'environ 108 000 cartes étaient ainsi à la portée de l\'attaquant.',
                'Enfin, en explorant les serveurs, l\'attaquant a trouvé les fichiers de code du site britishairways.com. Entre le 14 et le 25 août 2018, selon l\'ICO, il y a ajouté un détournement : chaque fois qu\'un client saisissait sa carte, une copie partait vers BAways.com, sans interrompre la réservation. Selon l\'analyse de RiskIQ rapportée par CSO Online, le code tenait en 22 lignes ajoutées à la bibliothèque Modernizr, servait aussi l\'application mobile, et le domaine pirate disposait d\'un certificat de sécurité émis le 15 août 2018, ce qui permettait d\'envoyer les données en connexion chiffrée, comme le reste du site.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels manquements l\'ICO a-t-elle retenus contre la compagnie ?',
            'intro' => 'L\'avis de sanction reprend chaque étape de l\'attaque et montre, pour chacune, une mesure existante et peu coûteuse qui l\'aurait empêchée ou signalée. Voici les principales, dans l\'ordre de l\'attaque.',
            'items' => [
                ['titre' => 'Une authentification trop faible', 'texte' => 'Le compte du prestataire n\'avait pas de second facteur, alors que la propre politique de la compagnie l\'exigeait pour tout accès distant. L\'ICO cite trois options, dont une seule aurait suffi : l\'authentification à plusieurs facteurs, une liste blanche d\'adresses IP autorisées ou un réseau privé virtuel IPSec entre sites.'],
                ['titre' => 'Des droits trop larges', 'texte' => 'Un compte prévu pour quelques applications métier permettait d\'atteindre le reste du réseau. L\'ICO rappelle le principe du moindre privilège : chaque utilisateur ne doit avoir accès qu\'aux applications, données et outils nécessaires à son rôle, et rien de plus.'],
                ['titre' => 'Des mots de passe stockés en clair', 'texte' => 'Le mot de passe d\'un administrateur de domaine figurait dans un fichier lisible. L\'ICO rejette l\'argument du confort d\'exploitation : le gain de temps est minime, le risque très élevé, et des méthodes plus sûres existaient dans le système Microsoft déjà utilisé.'],
                ['titre' => 'Des tests trop limités', 'texte' => 'Selon l\'ICO, des tests plus rigoureux, notamment des tests d\'intrusion internes simulant un attaquant déjà présent dans le réseau, auraient probablement révélé la plupart des failles exploitées, dont la possibilité de sortir de Citrix.'],
                ['titre' => 'Une journalisation insuffisante', 'texte' => 'La compagnie ne produisait ni ne surveillait assez de journaux pour repérer des gestes inhabituels : tentatives de connexion échouées sur un compte d\'administration, activation d\'un compte invité, ajout de ce compte aux administrateurs. L\'ICO cite le Centre national de cybersécurité britannique, pour qui la journalisation est le socle de la surveillance de sécurité.'],
                ['titre' => 'Aucune alerte sur la modification du site', 'texte' => 'La compagnie avait un circuit d\'approbation pour les changements de code, mais aucune mesure technique pour détecter une modification non autorisée. L\'ICO cite l\'exigence de la norme de sécurité des cartes PCI DSS : un outil de contrôle d\'intégrité des fichiers qui alerte en cas de changement, avec une comparaison au moins hebdomadaire.'],
                ['titre' => 'Des données de cartes qui n\'auraient pas dû exister', 'texte' => 'Garder des cryptogrammes dans des journaux contredit la règle de minimisation du RGPD et l\'exigence 3.1 de PCI DSS, qui limite la conservation des données de cartes au strict besoin. L\'ICO note que des revues de code tournées vers la sécurité, comme le recommande l\'OWASP, auraient permis de repérer cette journalisation.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi l\'ICO tient-elle la compagnie pour responsable, alors que l\'attaquant est un criminel ?',
            'paragraphes' => [
                'British Airways a soutenu devant l\'ICO que l\'attaque était l\'œuvre de criminels persistants, que les fuites de cartes étaient devenues courantes et que l\'autorité jugeait avec le bénéfice du recul. L\'ICO a écarté ces arguments. Elle reconnaît que l\'attaque est un acte criminel et que l\'entrée s\'est faite par le compte d\'un prestataire, mais elle sanctionne autre chose : l\'absence de mesures de sécurité appropriées, au sens de l\'article 5 et de l\'article 32 du RGPD.',
                'Pour éviter de juger après coup, l\'ICO s\'est limitée aux risques connus ou prévisibles à l\'époque, et aux mesures qui existaient déjà. Elle cite des recommandations publiques antérieures à l\'attaque, venues du Centre national de cybersécurité britannique, de l\'OWASP, du NIST américain et de Citrix lui-même. Les mesures qu\'elle énumère sont présentées comme disponibles de longue date et réalisables sans coût excessif, souvent avec les outils Microsoft que la compagnie possédait déjà.',
                'Elle conclut que la compagnie a agi par négligence, et non intentionnellement, et qu\'elle est entièrement responsable des manquements au RGPD, sans être pour autant seule responsable de l\'attaque. Elle relève aussi qu\'il est difficile de savoir si, ni quand, British Airways aurait découvert seule le vol : c\'est un tiers qui l\'a prévenue. La période retenue court du 25 mai au 5 septembre 2018, soit 103 jours pendant lesquels les accès et les copies de données sont passés inaperçus.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est établi, et qu\'est-ce qui reste incertain ou débattu ?',
            'texte' => 'Établi par l\'avis de sanction : les dates de l\'attaque, l\'entrée par le compte d\'un prestataire sans second facteur, le mot de passe administrateur en clair, la journalisation de cartes depuis 2015, la modification du code du site et l\'alerte venue d\'un tiers. Incertain ou débattu : l\'identité de l\'attaquant, jamais identifié selon l\'ICO, et son rattachement au groupe surnommé Magecart, qui vient de chercheurs privés ; l\'origine des identifiants volés et la méthode de sortie de Citrix ; le décompte des victimes, de 380 000 paiements annoncés en septembre 2018 à 429 612 personnes retenues par l\'ICO, réparties différemment selon les documents ; l\'écart entre 183,39 et 20 millions de livres, en partie masqué. La compagnie n\'a pas reconnu sa responsabilité.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quelles conséquences mesurables l\'incident a-t-il eues ?',
            'items' => [
                ['valeur' => '429 612', 'libelle' => 'Personnes, clients et employés, dont les données ont pu être consultées par l\'attaquant entre juin et septembre 2018', 'source' => 'ICO, avis de sanction du 16 octobre 2020, paragraphe 4.1', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
                ['valeur' => '244 000', 'libelle' => 'Clients dont le nom, l\'adresse, le numéro de carte et le cryptogramme ont été copiés sur le site en août et septembre 2018', 'source' => 'ICO, avis de sanction, paragraphe 4.1', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
                ['valeur' => '185 000', 'libelle' => 'Cartes supplémentaires peut-être touchées, liées à des réservations payées en points d\'avril à juillet 2018, dont 77 000 avec cryptogramme, annoncées le 25 octobre 2018', 'source' => 'Reuters, repris par Business Insurance, 25 octobre 2018', 'url' => 'https://www.businessinsurance.com/british-airways-says-185000-more-payment-cards-possibly-hit-in-cyber-attack/'],
                ['valeur' => '183,39 M £', 'libelle' => 'Amende envisagée dans l\'avis d\'intention du 4 juillet 2019, soit 1,5 % du chiffre d\'affaires 2017', 'source' => 'ICO, avis de sanction, paragraphe 5.3 ; Mondaq, 11 juillet 2019', 'url' => 'https://www.mondaq.com/uk/data-protection/824176/ico-announces-intention-to-fine-british-airways-%c2%a3183-million-for-infringements-of-gdpr'],
                ['valeur' => '20 M £', 'libelle' => 'Amende définitive prononcée le 16 octobre 2020, moins de 1 % du chiffre d\'affaires mondial de la compagnie', 'source' => 'ICO, avis de sanction, paragraphes 7.53 et 7.55', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
                ['valeur' => '40 000 et plus', 'libelle' => 'Clients ayant accepté la surveillance de crédit gratuite offerte par la compagnie après l\'incident', 'source' => 'ICO, avis de sanction, paragraphe 7.12', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment l\'ICO est-elle passée de 183 millions à 20 millions de livres ?',
            'legende' => 'Étapes du calcul décrites dans l\'avis de sanction de l\'ICO du 16 octobre 2020 (paragraphes 7.7 à 7.53). Montants en livres sterling.',
            'entetes' => ['Étape', 'Ce que l\'ICO a décidé', 'Montant'],
            'lignes'  => [
                ['Avis d\'intention, juillet 2019', 'Proposition initiale, calculée sur le chiffre d\'affaires, contestée ensuite par la compagnie dans deux séries d\'observations écrites', '183,39 millions'],
                ['Étape 1 : gain financier', 'Aucun gain ni perte évitée pour la compagnie, donc rien à retirer', '0'],
                ['Étape 2 : gravité', 'Montant de base jugé « effectif, proportionné et dissuasif » pour une entreprise de cette taille', '30 millions'],
                ['Étapes 3 et 4 : circonstances aggravantes et dissuasion', 'Aucune circonstance aggravante retenue, aucune majoration jugée nécessaire', '30 millions'],
                ['Étape 5 : circonstances atténuantes', 'Réaction rapide, information des clients et des autorités, coopération, médiatisation, atteinte à la réputation : réduction de 20 %', '24 millions'],
                ['Politique Covid-19 de l\'ICO', 'L\'amende ne mettait pas la compagnie en difficulté, mais l\'ICO a appliqué sa politique de réduction liée à la pandémie : moins 4 millions', '20 millions'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que révèle l\'écart entre l\'amende annoncée et l\'amende payée ?',
            'paragraphes' => [
                'L\'écart de plus de 163 millions de livres a beaucoup été commenté. L\'avis de sanction montre qu\'il ne vient pas d\'un abandon des griefs : les manquements sont maintenus, la négligence aussi. Il vient surtout de la méthode de calcul. Dans son avis d\'intention, l\'ICO s\'appuyait sur une procédure interne fondée sur des tranches de chiffre d\'affaires ; après les observations de la compagnie, elle a renoncé à cette procédure et appliqué sa politique d\'action réglementaire en cinq étapes, en gardant le chiffre d\'affaires comme l\'un des critères parmi d\'autres.',
                'Deux réductions se sont ensuite ajoutées, toujours selon l\'avis du 16 octobre 2020. La première, de 20 %, récompense ce que la compagnie a bien fait après l\'alerte : neutraliser le code en 90 minutes, prévenir l\'ICO dès le lendemain, informer les banques et les clients, proposer le remboursement des pertes financières et une surveillance de crédit, coopérer pleinement. La seconde, de 4 millions, applique la politique adoptée par l\'ICO pendant la pandémie, qui pesait lourdement sur les recettes de la compagnie, même si l\'ICO estimait que la compagnie et son groupe pouvaient payer sans difficulté financière.',
                'Pour une petite entreprise, la leçon n\'est pas le montant. Elle tient en deux constats tirés du même document. D\'une part, la qualité de la réaction après l\'incident a pesé directement sur la sanction. D\'autre part, aucun effort de communication n\'a effacé ce qui manquait avant l\'incident : une règle de sécurité écrite mais non appliquée, et l\'absence de tout moyen de savoir que le site avait été modifié.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'ont coûté l\'incident et ses suites au-delà de l\'amende ?',
            'paragraphes' => [
                'L\'amende n\'est qu\'une partie de la facture, et la plupart des autres postes ne sont pas publics. L\'avis de sanction énumère pourtant ce que la compagnie a dû mobiliser : des experts techniques pour l\'enquête, des conseils juridiques pendant deux ans de procédure, la notification de plus de 530 000 clients en deux jours, un communiqué adressé à 5 000 journalistes et commentateurs, l\'information de la police, de l\'aviation civile, de l\'autorité financière, de l\'agence nationale de lutte contre la criminalité et de 21 procureurs généraux d\'États américains.',
                'Le même document mentionne le remboursement promis le 7 septembre 2018 aux clients qui subiraient une perte financière directe, la surveillance de crédit gratuite acceptée par plus de 40 000 personnes, et le déploiement d\'un outil de détection et de réponse sur les terminaux, achevé le 16 novembre 2018. L\'ICO note aussi que l\'attaque et la procédure ont nui à la marque et à la réputation de la compagnie.',
                'Sur le terrain judiciaire, une action collective a été engagée devant la justice anglaise. Selon le cabinet Simmons & Simmons, elle réunissait environ 16 000 demandeurs. Le 5 juillet 2021, le cabinet qui les représentait a annoncé un accord confidentiel comprenant une indemnisation des demandeurs éligibles, sans reconnaissance de responsabilité de la compagnie. Le montant n\'a pas été publié, et aucun chiffre fiable ne permet de l\'estimer.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Qu\'est-ce qui a été fait, et qu\'est-ce qui aurait évité le problème ?',
            'options'  => ['Ce qui a été fait', 'Ce qui aurait évité ou limité le problème'],
            'criteres' => [
                ['critere' => 'Accès distant des prestataires', 'valeurs' => ['Identifiant et mot de passe seuls pour le compte de Swissport, malgré la politique interne de 2017', 'Second facteur pour tout accès distant, ou liste blanche d\'adresses IP, ou réseau privé virtuel entre sites, comme le cite l\'ICO']],
                ['critere' => 'Droits des comptes', 'valeurs' => ['Un compte de prestataire capable d\'atteindre le reste du réseau', 'Moindre privilège : chaque compte limité aux applications et données de son rôle, environnement Citrix durci']],
                ['critere' => 'Mots de passe d\'administration', 'valeurs' => ['Mot de passe d\'un administrateur de domaine écrit en clair dans un fichier lisible', 'Coffre à secrets, délégation de droits, comptes à privilèges suivis par un outil de gestion des accès privilégiés']],
                ['critere' => 'Données de cartes', 'valeurs' => ['Cartes et cryptogrammes enregistrés en clair dans des journaux depuis 2015, par une fonction de test oubliée', 'Ne jamais stocker le cryptogramme ; revue de code qui vérifie ce que les journaux enregistrent ; fonctions de test retirées avant la production']],
                ['critere' => 'Détection', 'valeurs' => ['Ni alerte sur les comptes invités activés, ni suivi suffisant des journaux ; alerte donnée par un tiers', 'Journaux centralisés et surveillés, alertes sur les connexions échouées et sur la création d\'administrateurs']],
                ['critere' => 'Intégrité du site', 'valeurs' => ['Circuit d\'approbation des changements, mais aucun moyen technique de voir un changement non autorisé', 'Contrôle d\'intégrité des fichiers avec alerte, comparaison au moins hebdomadaire, inventaire des scripts des pages de paiement']],
                ['critere' => 'Tests', 'valeurs' => ['Périmètre des tests d\'intrusion jugé insuffisant par l\'ICO', 'Tests d\'intrusion internes simulant un attaquant déjà entré, renouvelés après chaque changement important']],
                ['critere' => 'Réaction après l\'alerte', 'valeurs' => ['Code neutralisé en 90 minutes, notifications dès le lendemain, remboursement promis, coopération complète', 'Déjà le bon réflexe : c\'est ce point qui a valu à la compagnie une réduction de 20 % de l\'amende']],
            ],
            'verdict'  => 'Aucune des mesures manquantes n\'était une technologie rare : l\'ICO les décrit comme connues, disponibles et peu coûteuses. Ce qui a fait défaut, c\'est l\'application des règles existantes et la capacité de voir, seul, qu\'un fichier du site avait changé.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Le même mode opératoire a-t-il touché d\'autres sites marchands la même année ?',
            'paragraphes' => [
                'Oui. Le 13 novembre 2020, l\'ICO a infligé une amende de 1,25 million de livres à Ticketmaster UK pour une attaque de 2018 qui ressemble beaucoup à celle de British Airways, avec une différence instructive. Selon l\'<a href="https://ico.org.uk/media2/migrated/2618609/ticketmaster-uk-limited-mpn.pdf">avis de sanction visant Ticketmaster</a>, l\'attaquant n\'a pas touché le site du vendeur de billets : il a modifié le JavaScript d\'un assistant conversationnel fourni par la société Inbenta, hébergé sur les serveurs de ce prestataire.',
                'Ticketmaster avait choisi d\'afficher cet assistant sur plusieurs pages, y compris la page de paiement. Le script compromis a donc pu lire ce que les clients y tapaient : noms, numéros de cartes, dates d\'expiration et cryptogrammes. L\'avis indique que 9,4 millions de personnes dans l\'Espace économique européen ont été prévenues d\'une exposition possible, dont 1,5 million au Royaume-Uni, que la banque Barclays a signalé environ 60 000 cartes compromises et que la banque Monzo en a remplacé environ 6 000.',
                'L\'ICO souligne que la vulnérabilité est née d\'une décision commerciale : placer un outil tiers sur la page la plus sensible du site. C\'est la leçon complémentaire du cas British Airways. Là, l\'attaquant a modifié un fichier du site lui-même ; ici, il a modifié un fichier chargé depuis le serveur d\'un fournisseur. Dans les deux cas, le navigateur du client a exécuté sans broncher un code que le marchand ne contrôlait plus.',
                'La norme de sécurité des cartes traite désormais ce risque de front. Le PCI Security Standards Council, qui la publie, constate dans un <a href="https://blog.pcisecuritystandards.org/new-information-supplement-payment-page-security-and-preventing-e-skimming">guide du 10 mars 2025</a> une forte hausse de ces vols lors des paiements en ligne, qu\'il appelle « e-skimming ». Sa version 4 contient deux exigences consacrées aux scripts des pages de paiement : les exigences 6.4.3 et 11.6.1, applicables depuis le 31 mars 2025. Elles demandent que chaque script soit autorisé, que son intégrité soit vérifiée, et que toute modification non autorisée de la page ou de ses en-têtes de sécurité soit détectée.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle leçon retenir en une phrase ?',
            'texte' => 'La page où vos clients paient n\'est sûre que si vous savez, à tout moment, quels scripts s\'y exécutent et si l\'un d\'eux a changé ; une règle de sécurité écrite mais non appliquée ne protège personne, et c\'est souvent un tiers, ou un client volé, qui vous préviendra si vous ne surveillez pas vous-même.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Une PME de Cotonou, d\'Abidjan ou de Lyon est-elle vraiment concernée par une attaque de ce genre ?',
            'paragraphes' => [
                'On pourrait croire que ce risque est réservé aux grandes marques. Le mécanisme dit l\'inverse : l\'attaquant de British Airways n\'a utilisé ni faille inconnue ni moyen hors de portée. Il a profité d\'un mot de passe de prestataire sans second facteur, d\'un mot de passe d\'administration écrit dans un fichier, et d\'un site dont personne ne vérifiait le code. Ces trois faiblesses se retrouvent couramment dans les petites structures, où le même prestataire garde pendant des années les accès à l\'hébergement et à l\'administration du site.',
                'Une boutique en ligne de PME charge souvent sur sa page de commande bien plus de code qu\'elle ne le pense : thème, extensions de la boutique, outil de mesure d\'audience, pixel publicitaire, bouton WhatsApp, fenêtre de discussion, police de caractères hébergée ailleurs. Chacun de ces fichiers peut lire ce que le client tape sur la page. Le cas Ticketmaster montre qu\'il suffit qu\'un seul fournisseur soit compromis pour que la page de paiement le soit aussi.',
                'Le paiement par mobile money change la nature du risque sans le supprimer. Quand la validation se fait chez la passerelle ou sur le téléphone du client, le site du marchand ne voit pas le code secret du portefeuille. Mais un script malveillant sur la page de commande peut toujours copier les noms, téléphones et adresses, remplacer le bouton de paiement par un faux formulaire de carte, ou envoyer le client vers une page imitant la passerelle. Le danger se déplace vers ce que le client voit avant de payer.',
                'Côté encaissement, une autre faiblesse est propre aux intégrations de passerelles : se fier au statut affiché dans l\'adresse de retour plutôt qu\'à la vérification par l\'API. Les documentations de FedaPay, KkiaPay et CinetPay demandent toutes une confirmation côté serveur, comme le détaille le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a>. Une commande validée sur la seule foi du navigateur peut être falsifiée par le client lui-même ou par un script.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels signaux d\'alerte doivent faire réagir une PME qui encaisse en ligne ?',
            'intro' => 'Chacun de ces signaux correspond à une étape de l\'attaque subie par British Airways. Un seul suffit à justifier une vérification.',
            'items' => [
                ['titre' => 'Personne ne sait lister les scripts de la page de commande', 'texte' => 'Si ni vous ni votre prestataire ne pouvez dire quels fichiers JavaScript se chargent au moment du paiement, et d\'où ils viennent, vous ne verrez pas qu\'un d\'eux a changé. C\'est exactement ce que l\'ICO a reproché à British Airways.'],
                ['titre' => 'Un ancien prestataire a encore les accès', 'texte' => 'Le développeur de la première version, l\'agence qui a fait la refonte, le stagiaire qui gérait les produits : leurs comptes sur l\'hébergement, le site ou la passerelle existent souvent encore. L\'attaque de British Airways est entrée par le compte d\'un sous-traitant.'],
                ['titre' => 'Un seul mot de passe protège l\'essentiel', 'texte' => 'Hébergement, administration du site, tableau de bord de la passerelle, messagerie de l\'entreprise : sans second facteur, un mot de passe volé ou deviné suffit. La politique de British Airways exigeait ce second facteur ; il manquait justement sur le compte utilisé.'],
                ['titre' => 'Des mots de passe circulent en clair', 'texte' => 'Un fichier « codes d\'accès » sur le bureau, un tableur partagé, une conversation WhatsApp qui contient les identifiants de l\'hébergement : c\'est l\'équivalent du fichier qui a livré à l\'attaquant le compte d\'administrateur de British Airways.'],
                ['titre' => 'Les mises à jour attendent depuis des mois', 'texte' => 'Une extension de boutique ou un thème non mis à jour est une porte d\'entrée connue. Si le tableau de bord de votre site affiche une longue liste de mises à jour en attente, la maintenance n\'est pas assurée.'],
                ['titre' => 'Votre site enregistre des données de cartes', 'texte' => 'Si un formulaire de votre propre site reçoit des numéros de cartes, ou si des journaux, des courriels ou des tableurs en contiennent, vous portez un risque que la délégation à une passerelle aurait évité. British Airways conservait des cryptogrammes par erreur depuis 2015.'],
                ['titre' => 'L\'alerte vient de l\'extérieur', 'texte' => 'Un client signale un débit inconnu, la passerelle bloque des transactions, la banque pose des questions : c\'est le signe qu\'aucune surveillance interne n\'a fonctionné. British Airways a été prévenue par un tiers.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles décisions prendre dès maintenant, sans attendre un incident ?',
            'paragraphes' => [
                'Première décision : ne plus jamais recevoir de numéro de carte sur votre propre serveur. Le paiement passe par la page ou la fenêtre de la passerelle, et votre site ne voit qu\'une référence de transaction. Le PCI Security Standards Council réserve son questionnaire d\'auto-évaluation SAQ A aux marchands qui confient entièrement ces fonctions à des prestataires conformes ; depuis sa mise à jour de janvier 2025, ces marchands doivent aussi confirmer que leur site n\'est pas exposé aux attaques par scripts.',
                'Deuxième décision : dresser l\'inventaire des scripts et des accès. Pour chaque script de la page de commande, notez qui l\'a ajouté, pourquoi, et s\'il est vraiment utile à cet endroit. Retirez la fenêtre de discussion, les pixels et les outils de test de la page de paiement s\'ils n\'y servent à rien. Pour chaque accès, notez qui le détient et fermez ceux qui ne servent plus.',
                'Troisième décision : rendre visible toute modification. Une empreinte des fichiers du site comparée régulièrement, une alerte quand un fichier change hors d\'une mise en production prévue, une politique de sécurité du contenu qui limite les domaines autorisés à recevoir des données, des journaux de connexion à l\'administration consultés : ces mesures ne coûtent pas une infrastructure de grande entreprise, mais elles demandent que quelqu\'un en soit responsable.',
                'Quatrième décision : préparer la réaction. Qui coupe le site ? Qui prévient la passerelle, la banque, les clients ? Dans l\'Union européenne, l\'article 33 du RGPD impose de notifier l\'autorité de contrôle d\'une violation de données dans les meilleurs délais et, si possible, dans les 72 heures ; l\'article 34 impose d\'informer les personnes en cas de risque élevé. Au Bénin, la protection des données relève du livre cinquième du Code du numérique et de l\'APDP ; vérifiez avec un juriste les obligations de votre pays avant d\'en avoir besoin.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Agir à temps ou agir après l\'incident : qu\'est-ce que cela change ?',
            'legende' => 'Comparaison qualitative, sans montant estimé : les coûts dépendent de chaque site. La colonne de droite reprend ce que l\'avis de sanction de l\'ICO décrit pour British Airways.',
            'entetes' => ['Mesure', 'Prise à temps', 'Prise après l\'incident', 'Ce qu\'a vécu British Airways'],
            'lignes'  => [
                ['Second facteur sur les accès', 'Une configuration sur des outils qui le proposent en général déjà', 'Changement de tous les mots de passe, enquête sur chaque compte, accès suspendus', 'Second facteur étendu à tous les accès distants après l\'attaque'],
                ['Inventaire des scripts', 'Une revue de la page de commande et une liste tenue à jour', 'Analyse de chaque fichier pour trouver le code ajouté et dater son arrivée', 'Code ajouté découvert grâce à un tiers, après quinze jours de copie'],
                ['Contrôle d\'intégrité et journaux', 'Un outil de surveillance et une personne qui lit les alertes', 'Experts en investigation, reconstitution des faits sur plusieurs mois', 'Outil de détection déployé sur les terminaux, achevé le 16 novembre 2018'],
                ['Paiement délégué à une passerelle', 'Une intégration bien faite dès la création de la boutique', 'Refonte du tunnel de commande dans l\'urgence, pendant que les clients attendent', 'Données de cartes copiées sur le site et dans des journaux de test'],
                ['Plan de réaction', 'Une page de procédure, des contacts à jour', 'Décisions improvisées, retards de notification, perte de confiance', 'Réaction rapide, saluée par l\'ICO par une réduction de 20 % de l\'amende'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi cela ressemble-t-il selon votre activité ?',
            'items' => [
                ['secteur' => 'Boutique de mode à Cotonou', 'probleme' => 'La boutique en ligne encaisse en mobile money par une passerelle, mais la page de commande charge un pixel publicitaire, une fenêtre de discussion et une dizaine d\'extensions jamais mises à jour.', 'solution' => 'Garder le paiement dans la fenêtre de la passerelle, vérifier chaque transaction par l\'API avant de livrer, retirer de la page de commande les scripts qui n\'y servent pas, et confier les mises à jour à une maintenance suivie.'],
                ['secteur' => 'École privée à Abidjan', 'probleme' => 'Les parents paient la scolarité en ligne ; le site a été fait par un prestataire parti depuis, qui garde les accès à l\'hébergement.', 'solution' => 'Reprendre la propriété de tous les accès, activer le second facteur, fermer les comptes inutiles et documenter qui peut modifier le site.'],
                ['secteur' => 'Agence de voyages à Lomé', 'probleme' => 'L\'agence vend des billets payés par carte sur un formulaire de son propre site, comme une petite compagnie aérienne.', 'solution' => 'Remplacer le formulaire par la page de paiement d\'une passerelle conforme, ne conserver aucun numéro de carte, et surveiller l\'intégrité des fichiers du site.'],
                ['secteur' => 'Clinique à Dakar', 'probleme' => 'Les patients réservent et versent un acompte en ligne ; des données de santé et de contact transitent par le même site.', 'solution' => 'Séparer la prise de rendez-vous du paiement, limiter les données collectées au strict nécessaire, tenir les journaux de connexion et préparer la procédure de notification.'],
                ['secteur' => 'Distributeur à Douala', 'probleme' => 'Un portail client relié à l\'ERP permet aux revendeurs de commander et payer ; plusieurs intégrations par API ont été ajoutées au fil du temps.', 'solution' => 'Inventorier les intégrations et leurs clés d\'accès, donner à chacune les seuls droits nécessaires, renouveler les clés exposées et journaliser les appels.'],
                ['secteur' => 'Commerce en ligne à Lyon', 'probleme' => 'La boutique encaisse par carte et doit respecter le RGPD ; personne ne sait qui prévenir en cas de fuite.', 'solution' => 'Écrire la procédure de notification de la CNIL dans les 72 heures prévues par l\'article 33 du RGPD, tester le contrôle d\'intégrité, et vérifier les exigences PCI DSS applicables auprès de la passerelle.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Comment éviter la même erreur : quelle liste de contrôle suivre ?',
            'items' => [
                'Le paiement se fait sur la page ou dans la fenêtre de la passerelle ; aucun numéro de carte ne passe par votre serveur, vos courriels ou vos tableurs.',
                'Chaque commande est confirmée par l\'API de la passerelle ou par un webhook vérifié, jamais par le seul statut renvoyé au navigateur.',
                'La liste des scripts chargés sur la page de commande existe, avec pour chacun son origine, sa raison d\'être et la personne qui l\'a ajouté.',
                'Les scripts inutiles au paiement (discussion, pixels, outils de test) sont retirés de la page de commande.',
                'Une alerte se déclenche quand un fichier du site change en dehors d\'une mise en production prévue.',
                'Une politique de sécurité du contenu limite les domaines vers lesquels la page peut envoyer des données.',
                'Le second facteur est actif sur l\'hébergement, l\'administration du site, le tableau de bord de la passerelle et la messagerie de l\'entreprise.',
                'Chaque compte n\'a que les droits de son rôle ; les comptes des anciens prestataires et employés sont fermés.',
                'Aucun mot de passe n\'est écrit dans un fichier, un script ou une conversation ; un gestionnaire de mots de passe les conserve.',
                'Le site, son thème et ses extensions sont mis à jour à un rythme connu, après une sauvegarde.',
                'Les connexions à l\'administration et les modifications importantes sont journalisées, et quelqu\'un lit ces journaux.',
                'Aucune fonction de test ou de débogage ne reste active en production, et rien de sensible n\'est écrit dans les journaux.',
                'Un test d\'intrusion ou au moins un audit de sécurité est fait après chaque changement important de la boutique.',
                'Une procédure d\'incident d\'une page dit qui coupe le site, qui prévient la passerelle, la banque, l\'autorité de protection des données et les clients.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard SALANON peut-il aider sur ce point précis ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il n\'a jamais travaillé pour British Airways : cette histoire est publique et sert ici de cas d\'école. Ce qu\'il propose aux PME porte sur les trois maillons qui ont cédé chez la compagnie. Pour une boutique, la page <a href="/services/site-e-commerce">création de site e-commerce</a> décrit une intégration où le paiement reste chez la passerelle, mobile money comme carte, et où chaque commande est confirmée côté serveur avant livraison.',
                'Pour un site déjà en ligne, le service de <a href="/services/maintenance-support">maintenance et support</a> est le cadre où se traitent les points de la liste ci-dessus : mises à jour, sauvegardes, revue des accès, second facteur, inventaire des scripts de la page de commande et surveillance des fichiers. Quand le site est relié à un ERP, à une passerelle ou à un outil métier, le service <a href="/services/api-rest-integrations">API REST et intégrations</a> permet de revoir chaque connexion : ses clés, ses droits et ce qu\'elle journalise.',
                'Sa méthode commence par un état des lieux : quels scripts se chargent au paiement, qui détient quels accès, où passent les données de vos clients. Vous recevez une liste écrite des points à corriger, classés par urgence, puis les corrections sont faites avec vous, sans que les accès quittent votre nom. Il ne promet pas l\'invulnérabilité, que personne ne peut garantir ; il vous aide à savoir ce qui tourne sur votre site et à être prévenu le premier s\'il change. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, et d\'autres cas publics sont réunis dans les <a href="/histoires/">histoires</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous savoir ce qui s\'exécute vraiment sur votre page de paiement ?',
            'texte'  => 'Indiquez l\'adresse de votre site, votre passerelle de paiement et la personne qui le maintient aujourd\'hui : vous recevez un diagnostic des scripts, des accès et des mises à jour, avec les corrections à faire en priorité.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],

    'faq' => [
        ['q' => 'Que s\'est-il passé chez British Airways en 2018 ?', 'r' => 'Un attaquant est entré le 22 juin 2018 dans le réseau de la compagnie avec les identifiants d\'un employé d\'un sous-traitant, Swissport, sans second facteur. Il a obtenu des droits d\'administrateur, puis modifié un fichier JavaScript du site pour copier les données de cartes saisies par les clients du 21 août au 5 septembre 2018, selon l\'avis de sanction de l\'ICO.'],
        ['q' => 'Combien de personnes ont été touchées ?', 'r' => 'L\'ICO retient environ 429 612 personnes, clients et employés. Elle les répartit ainsi : 244 000 clients pour le nom, l\'adresse, le numéro de carte et le cryptogramme, 77 000 pour le numéro de carte et le cryptogramme seuls, 108 000 pour le seul numéro de carte, auxquels s\'ajoutent des comptes d\'employés et jusqu\'à 612 comptes du programme de fidélité. La compagnie avait d\'abord annoncé 380 000 paiements par carte.'],
        ['q' => 'Qu\'est-ce que Magecart ?', 'r' => 'C\'est le nom donné par des chercheurs en sécurité à des groupes qui injectent du code dans les pages de paiement pour copier les cartes, une technique appelée « e-skimming ». En septembre 2018, la société RiskIQ a attribué l\'attaque de British Airways à ce groupe. Cette attribution vient de chercheurs privés : l\'ICO indique que l\'attaquant n\'a pas été identifié.'],
        ['q' => 'Pourquoi l\'amende est-elle passée de 183 à 20 millions de livres ?', 'r' => 'L\'ICO a abandonné la méthode fondée sur des tranches de chiffre d\'affaires utilisée dans son avis d\'intention de juillet 2019. Elle a fixé un montant de base de 30 millions, réduit de 20 % pour la bonne réaction de la compagnie après l\'alerte, puis de 4 millions au titre de sa politique liée à la pandémie de Covid-19. Les manquements, eux, ont été maintenus.'],
        ['q' => 'Quels manquements l\'ICO a-t-elle reprochés à British Airways ?', 'r' => 'Un accès distant sans second facteur malgré la politique interne, des droits trop larges, un mot de passe d\'administrateur stocké en clair, des tests d\'intrusion trop limités, une journalisation et une surveillance insuffisantes, des données de cartes enregistrées sans raison depuis 2015 et l\'absence de tout contrôle technique des modifications du code du site.'],
        ['q' => 'Une PME qui encaisse par mobile money court-elle le même risque ?', 'r' => 'Pas exactement. Si la validation se fait chez la passerelle ou sur le téléphone du client, le site ne voit pas le code secret du portefeuille. Mais un script malveillant sur la page de commande peut copier les coordonnées, afficher un faux formulaire de carte ou rediriger vers une fausse page de paiement. Il faut donc surveiller les scripts même sans paiement par carte.'],
        ['q' => 'Suffit-il de passer par une passerelle de paiement pour être protégé ?', 'r' => 'Cela retire de votre serveur les données de cartes, ce qui réduit fortement le risque et vos obligations. Mais votre page de commande reste à protéger : depuis la mise à jour de janvier 2025, le PCI Security Standards Council demande même aux marchands qui délèguent tout le paiement de confirmer que leur site n\'est pas exposé aux attaques par scripts. Il faut aussi vérifier chaque paiement par l\'API.'],
        ['q' => 'Que sont les exigences PCI DSS 6.4.3 et 11.6.1 ?', 'r' => 'Ce sont deux exigences de la version 4 de la norme de sécurité des cartes, applicables depuis le 31 mars 2025. Elles visent les scripts des pages de paiement : chaque script doit être autorisé et son intégrité vérifiée, et toute modification non autorisée de la page ou de ses en-têtes de sécurité doit être détectée.'],
        ['q' => 'Que faire si l\'on découvre qu\'un script a été modifié sur son site ?', 'r' => 'Retirer ou neutraliser le code, couper les adresses vers lesquelles il envoyait des données, prévenir la passerelle et la banque, changer les mots de passe et fermer les accès suspects, conserver les journaux pour l\'enquête, puis informer l\'autorité de protection des données et les clients selon la loi applicable. Dans l\'Union européenne, l\'article 33 du RGPD fixe 72 heures si possible.'],
        ['q' => 'British Airways a-t-elle indemnisé ses clients ?', 'r' => 'Elle a promis dès le 7 septembre 2018 de rembourser les pertes financières directes et proposé une surveillance de crédit, acceptée par plus de 40 000 personnes selon l\'ICO. Une action collective s\'est conclue le 5 juillet 2021 par un accord confidentiel prévoyant une indemnisation des demandeurs éligibles, sans reconnaissance de responsabilité ; le montant n\'a pas été publié.'],
    ],

    'sources' => [
        ['titre' => 'ICO, avis de sanction (Penalty Notice) adressé à British Airways, 16 octobre 2020', 'url' => 'https://ico.org.uk/media2/migrated/2618421/ba-penalty-20201016.pdf', 'date' => '2026-10-03'],
        ['titre' => 'ICO, avis de sanction adressé à Ticketmaster UK Limited, 13 novembre 2020', 'url' => 'https://ico.org.uk/media2/migrated/2618609/ticketmaster-uk-limited-mpn.pdf', 'date' => '2026-10-03'],
        ['titre' => 'CSO Online, « British Airways hack was by same group that compromised Ticketmaster » (analyse de RiskIQ), 11 septembre 2018', 'url' => 'https://www.csoonline.com/article/566287/british-airways-hack-was-by-same-group-that-compromised-ticketmaster.html', 'date' => '2026-10-03'],
        ['titre' => 'The Hacker News, déclaration de British Airways sur le vol de données de son site et de son application, septembre 2018', 'url' => 'https://thehackernews.com/2018/09/british-airways-data-breach.html', 'date' => '2026-10-03'],
        ['titre' => 'Business Insurance (dépêche Reuters), « British Airways says 185,000 more payment cards possibly hit in cyber attack », 25 octobre 2018', 'url' => 'https://www.businessinsurance.com/british-airways-says-185000-more-payment-cards-possibly-hit-in-cyber-attack/', 'date' => '2026-10-03'],
        ['titre' => 'InfoQ, analyse technique de la fuite de données de British Airways, novembre 2018', 'url' => 'https://www.infoq.com/news/2018/11/british-airways-data-breach', 'date' => '2026-10-03'],
        ['titre' => 'Mondaq, annonce par l\'ICO de son intention d\'infliger 183,39 millions de livres à British Airways, 11 juillet 2019', 'url' => 'https://www.mondaq.com/uk/data-protection/824176/ico-announces-intention-to-fine-british-airways-%c2%a3183-million-for-infringements-of-gdpr', 'date' => '2026-10-03'],
        ['titre' => 'Simmons & Simmons, analyse de l\'avis de sanction de l\'ICO contre British Airways, octobre 2020', 'url' => 'https://www.simmons-simmons.com/en/publications/ckgkwyif32y0n09447bd3j12l/british-airways-penalty-notice-the-download', 'date' => '2026-10-03'],
        ['titre' => 'Pogust Goodhead, communiqué sur l\'accord confidentiel avec British Airways, 5 juillet 2021', 'url' => 'https://pogustgoodhead.com/british-airways-data-breach-claim-settled-on-confidential-terms-2', 'date' => '2026-10-03'],
        ['titre' => 'Simmons & Simmons, règlement de l\'action collective contre British Airways, 12 juillet 2021', 'url' => 'https://www.simmons-simmons.com/en/publications/ckr0pzweg1v170922bti900gi/british-airways-flying-high-as-data-breach-compensation-claim-settles', 'date' => '2026-10-03'],
        ['titre' => 'PCI Security Standards Council, guide « Payment Page Security and Preventing E-Skimming » (exigences 6.4.3 et 11.6.1), 10 mars 2025', 'url' => 'https://blog.pcisecuritystandards.org/new-information-supplement-payment-page-security-and-preventing-e-skimming', 'date' => '2026-10-03'],
        ['titre' => 'PCI Security Standards Council, mise à jour du questionnaire SAQ A, 30 janvier 2025', 'url' => 'https://blog.pcisecuritystandards.org/important-updates-announced-for-merchants-validating-to-self-assessment-questionnaire-a', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, texte du RGPD, chapitre 4 (articles 33 et 34 sur les violations de données)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-03'],
        ['titre' => 'Morrison Foerster, Privacy Library : Bénin, Code du numérique (livre cinquième) et APDP', 'url' => 'https://www.mofo.com/privacy-library/benin', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['site-e-commerce', 'maintenance-support', 'api-rest-integrations'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
