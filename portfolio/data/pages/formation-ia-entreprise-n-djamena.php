<?php
// ============================================================
// data/pages/formation-ia-entreprise-n-djamena.php · Page ville « Formation IA en entreprise à N'Djamena ».
// Faits externes relevés le 26/10/2026 : Wikipédia (ville et université), Alwihda Info
// (Sénat, délestage, université, FGI-AC), Tchadinfos (TchadElec, CIT-N'Dj, ENASTIC, marchés,
// Commercial Bank Tchad), OSIRIS (Starlink, état civil), EcoMatin (raffinerie, CNPCIC),
// WeAreTech (WenakLabs), tarif Claude Pro. Aucune certification attribuée à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise à N\'Djamena : votre équipe apprend à rédiger, résumer et structurer ses documents avec ChatGPT, Claude ou Gemini, malgré les coupures de courant et de réseau',
    'title'   => 'Formation IA pour les équipes à N’Djamena | Richard SALANON',
    'meta'    => 'Formation IA en entreprise à N\'Djamena : séances à distance à la même heure, exercices sur vos documents, plan pour les coupures de courant, devis en FCFA.',
    'en_bref' => 'À N\'Djamena, une équipe peut se faire former à l\'IA par Richard SALANON, consultant basé à Cotonou, qui intervient à distance, en français, à la même heure qu\'à N\'Djamena, sur les documents de l\'entreprise et avec un devis en FCFA. Les séances sont conçues pour une ville où le courant et le réseau coupent : documents envoyés la veille, séances courtes, reprise prévue. Le programme se choisit par métier : pétrole et sous-traitance, commerce des marchés, banques, administrations, ONG. Le prix est fixé sur devis.',
    'publie'  => '2026-11-18',
    'maj'     => '2026-11-18',
    'schema'  => 'WebPage',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui forme les équipes à l\'IA à N\'Djamena, et comment distinguer une démonstration d\'une vraie formation ?',
            'paragraphes' => [
                'Une équipe de N\'Djamena peut se former à l\'IA auprès d\'établissements d\'enseignement supérieur, de structures d\'accompagnement de jeunes entreprises ou de formateurs indépendants. Richard SALANON, consultant basé à Cotonou, propose une formation à distance, en français, à la même heure qu\'à N\'Djamena : exercices sur les documents de l\'entreprise, règles de données posées avant la session, devis en FCFA.',
                'La première question à poser est simple : que saura faire chaque participant, seul, devant son écran, le lundi suivant ? Une démonstration d\'outil montre ce que l\'IA sait faire pendant une heure. Une formation change le travail d\'une équipe quand elle prend un geste précis, par exemple répondre à vingt messages de clients ou résumer un appel d\'offres, et le répète sur des documents réels jusqu\'à ce que le participant sache vérifier le résultat.',
                'Cinq repères permettent de comparer des offres sans dénigrer personne. Le programme est-il écrit, demi-journée par demi-journée ? Les exercices utilisent-ils vos documents, anonymisés si nécessaire, ou seulement des exemples génériques ? La session traite-t-elle des données personnelles et de la loi tchadienne ? Le formateur accepte-t-il de dire qu\'un atelier court suffit ? Les supports restent-ils dans votre entreprise ? Un devis qui répond à ces cinq questions est comparable à un autre.',
                'Un dernier repère concerne les promesses. Personne ne peut annoncer un gain de temps chiffré avant d\'avoir vu les tâches de l\'équipe, puisqu\'il dépend du travail, de la qualité des documents de départ et de la régularité de l\'usage. Richard n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun : il s\'appuie sur sa méthode, sur son expérience du terrain en Afrique francophone et sur une évaluation de chaque participant, en fin de formation, sur une tâche réelle.',
                'Cette page traite N\'Djamena : son économie, son courant, sa connexion, ses ressources de formation et les tâches de ses métiers. Le cadre national, avec la loi sur les données personnelles et les financements, est décrit sur la page <a href="/formations/ia-en-entreprise/tchad">formation IA en entreprise au Tchad</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que fait vivre l\'économie de N\'Djamena, et que change-t-elle pour une équipe qui veut utiliser l\'IA ?',
            'paragraphes' => [
                'N\'Djamena réunit des institutions, de grands marchés, des banques et des fournisseurs de la filière pétrolière. Ces métiers ont un point commun : ils produisent chaque jour des textes, des chiffres et des messages, qui sont le terrain d\'un assistant d\'IA : offres, comptes rendus, tableaux, correspondance. Les repères ci-dessous sont datés et sourcés.',
                'Selon <a href="https://en.wikipedia.org/wiki/N%27Djamena">Wikipédia</a>, consultée le 26 octobre 2026, la ville se trouve au confluent du Chari et du Logone, forme une agglomération transfrontalière avec Kousséri, au Cameroun, compte dix arrondissements et possède un aéroport international, mais aucune voie ferrée. Les bateaux fluviaux, autrefois lien principal avec l\'extérieur, transportent aujourd\'hui peu de marchandises. Les activités industrielles citées sont la transformation de la viande, du poisson et du coton, et des marchés régionaux de bétail, de sel, de dattes et de céréales.',
                'La capitale concentre aussi les institutions : l\'Assemblée nationale, tous les ministères, la Cour suprême, la Cour d\'appel, des ambassades, l\'Université de N\'Djamena et l\'École nationale d\'administration, d\'après la même fiche. Pour une équipe, cela signifie des courriers normés, des dossiers à plusieurs signataires et des correspondants dans l\'administration. Un premier jet préparé avec un assistant, puis relu et signé par la personne responsable, prend ici toute sa place.',
                'Le pétrole pèse sur la ville par ses contrats et ses fournisseurs. D\'après <a href="https://ecomatin.net/le-tchad-signe-un-accord-avec-un-fonds-emirati-pour-construire-sa-deuxieme-raffinerie-de-petrole">EcoMatin du 11 novembre 2025</a>, la raffinerie de Djermaya, seule raffinerie en activité du pays, exploitée par l\'État avec le groupe chinois CNPC, a une capacité officielle de 20 000 barils par jour et tournait à 27 %, soit environ 5 400 barils. Pour une PME fournisseuse, ce contexte veut dire des offres écrites en français et en anglais, des pièces administratives et des factures à fournir à des donneurs d\'ordre exigeants.',
                'Un accord signé à Shanghai le 20 septembre 2025 entre le Tchad et la CNPCIC prévoit, selon <a href="https://ecomatin.net/tchad-nouvel-accord-petrolier-avec-cnpcic-pour-relancer-la-raffinerie-de-djermaya">EcoMatin du 22 septembre 2025</a>, d\'accroître le contenu local et le poids d\'entités nationales (SHT, NRC et ARSAT). Une entreprise qui espère entrer dans cette chaîne de sous-traitance prépare mieux ses dossiers quand ses équipes rédigent, traduisent et contrôlent leurs offres avec méthode.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels repères de N\'Djamena retenir avant de composer un groupe de formation ?',
            'legende' => 'Repères relevés le 26 octobre 2026 sur les pages citées dans les sources. La dernière colonne dit ce que chaque repère change dans la préparation d\'une session.',
            'entetes' => ['Repère', 'Fait relevé', 'Ce que cela change pour la formation'],
            'lignes'  => [
                ['Géographie', 'Confluent du Chari et du Logone, agglomération transfrontalière avec Kousséri, dix arrondissements (Wikipédia)', 'Un groupe peut réunir des collègues de plusieurs arrondissements et de la rive camerounaise : prévoir une salle commune ou des postes individuels, jamais un seul point de connexion pour tous'],
                ['Institutions', 'Ministères, Assemblée nationale, Cour suprême, ambassades, Université de N\'Djamena (Wikipédia)', 'Cas de courriers normés, de notes de synthèse et de dossiers à plusieurs signataires'],
                ['Pétrole', 'Raffinerie de Djermaya à 20 000 barils par jour de capacité, 27 % d\'utilisation (EcoMatin, 11 novembre 2025)', 'Cas d\'offres et de dossiers de sous-traitance, bilingues français et anglais'],
                ['Marchés', 'Marchés de référence fermés pour protester contre de nouvelles taxes, puis consensus et suspension de leur collecte (Tchadinfos, 5 juin 2026)', 'Cas de commerçants qui tiennent des stocks et des crédits sur des cahiers et sur WhatsApp'],
                ['Électricité', '240 MW de puissance installée pour la ville (Alwihda Info, 3 janvier 2026)', 'Séances courtes, ordinateurs chargés d\'avance, reprise après coupure'],
                ['Administration locale', 'Lancement de la numérisation de l\'état civil de la commune le 23 septembre 2026, avec formation des agents prévue (OSIRIS, 24 septembre 2026)', 'Cas d\'agents qui passent d\'un registre papier à un fichier et doivent protéger ses données'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels secteurs de N\'Djamena gagnent le plus à former leurs équipes à l\'IA ?',
            'paragraphes' => [
                'Les secteurs qui écrivent et calculent beaucoup gagnent le plus : sous-traitance pétrolière, commerce de gros, banques et services financiers, administrations, ONG et cabinets de conseil. À l\'inverse, un atelier de réparation ou un transporteur qui travaille surtout à la main profite d\'abord d\'un tableau de suivi sur téléphone, puis seulement d\'un assistant.',
                'La banque offre un exemple de la dynamique. D\'après <a href="https://tchadinfos.com/2025/12/09/economie-commercial-bank-tchad-inaugure-sa-nouvelle-agence-de-farcha/">Tchadinfos du 9 décembre 2025</a>, Commercial Bank Tchad a inauguré à Farcha, dans le 1er arrondissement, une agence dont les services numériques, CBT Mobile Banking et CBT Corporate, complètent l\'offre classique et promettent moins d\'attente. Les chargés de clientèle y répondent à des messages, des relances et des demandes de pièces : les gestes que l\'assistant aide à préparer, sans qu\'aucune donnée de client ne lui soit transmise.',
                'Le commerce illustre un autre contexte. Selon <a href="https://tchadinfos.com/2026/06/05/greve-des-commercants-la-mairie-de-ndjamena-renonce-aux-nouvelles-taxes/">Tchadinfos du 5 juin 2026</a>, la Coordination générale des marchés de N\'Djamena a annoncé un consensus qui ouvre la voie à la réouverture des marchés de référence, fermés après la hausse des droits de place et de nouvelles taxes communales, dont la collecte a été suspendue. Les commerçants tiennent leurs marges au franc près : un tableau de commandes juste et des relances claires comptent plus qu\'un discours sur l\'IA.',
                'Une partie du marché à mil, dans le 4e arrondissement, a brûlé le 16 juin 2026. <a href="https://tchadinfos.com/2026/06/17/on-na-ni-assurance-ni-epargne-au-marche-a-mil-le-desarroi-des-commercants-apres-le-lincendie/">Tchadinfos</a> rapporte le témoignage d\'un commerçant : « On n\'a ni assurance, ni épargne ». Pour ce public, la formation propose des usages concrets, comme remettre au propre un cahier de stock, préparer un dossier de demande d\'aide ou rédiger un inventaire daté. Elle ne promet ni miracle ni gain chiffré.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel courant, quelle connexion et quel équipement les équipes ont-elles réellement à N\'Djamena ?',
            'paragraphes' => [
                'Le courant et la connexion de N\'Djamena sont irréguliers, et la formation est construite autour de ce fait. Les documents sont envoyés la veille, les consignes se préparent hors ligne, chaque séance dure trois heures et demie au plus et la reprise après une coupure est écrite à l\'avance. Aucun participant ne dépend d\'un seul moment de connexion.',
                'Sur le courant, le ministre de l\'Eau et de l\'Énergie a présenté la situation devant le Sénat le 2 janvier 2026. Selon <a href="https://www.alwihdainfo.com/crise-energetique-a-n-djamena-le-gouvernement-s-explique-devant-le-senat-a147177/">Alwihda Info du 3 janvier 2026</a>, la puissance installée de la capitale est de 240 MW, insuffisante face à une demande en forte hausse. Les causes citées sont des postes saturés, des équipements en surrégime, des coupures préventives pour éviter un black-out et des câbles souterrains endommagés par les travaux de voirie.',
                'Les réponses annoncées au Sénat sont la centrale solaire NOOR Tchad, qui injecte 24 MW et doit passer à 40 MW, la centrale thermique DENALI de 32 MW, achevée à 98 %, et un projet soutenu par la Banque mondiale, prévu en 2026, de 30 MW solaires avec 60 MWh de stockage pour la nuit. L\'État a par ailleurs retiré à la SNE sa qualité d\'exploitant et créé la TchadElec, selon <a href="https://tchadinfos.com/2025/07/09/le-gouvernement-cree-la-tchadienne-delectricite-apres-la-decheance-de-la-sne/">Tchadinfos du 9 juillet 2025</a>. Ces mesures améliorent peut-être le courant, mais une équipe planifie avec l\'état actuel du réseau.',
                'Concrètement, la veille, chaque participant charge son ordinateur et celui de secours, télécharge les documents, ouvre ses comptes et vérifie la batterie de son téléphone. Une entreprise qui dispose d\'un groupe électrogène ou de panneaux solaires prévoit de quoi alimenter le routeur, pas seulement l\'ordinateur, car sans routeur la séance s\'arrête. <a href="https://www.alwihdainfo.com/tchad-delestage-recurrent-a-n-djamena-un-defi-croissant-pendant-le-ramadan-a139367/">Alwihda Info du 11 mars 2025</a> signale que, pendant le Ramadan, l\'électricité n\'arrivait que deux ou trois fois par semaine dans certains quartiers, et que des ménages se tournaient vers des panneaux solaires : le calendrier de la session en tient compte.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se connecter à internet à N\'Djamena, et que coûte une connexion de secours ?',
            'paragraphes' => [
                'La plupart des équipes se connectent par les forfaits mobiles d\'Airtel ou de Moov Africa, certaines par la fibre ou par Starlink. Aucune de ces voies n\'est sûre à cent pour cent, donc la formation recommande un second accès : le téléphone en partage de connexion pour l\'ordinateur, ou l\'inverse.',
                'Les prix servent de base de calcul. Selon <a href="https://www.osiris.sn/starlink-deploie-ses-services-au-tchad-a-des-tarifs-encore-eleves.html">OSIRIS, qui reprend l\'Agence Ecofin le 7 juillet 2025</a>, les kits Starlink coûtent entre 117 000 et 228 000 FCFA et les abonnements résidentiels de 12 000 à 32 000 FCFA par mois selon le volume de données ; la fibre de Moov Africa débute à 25 000 FCFA par mois et son routeur 4G à environ 90 000 FCFA. Les forfaits mobiles d\'Airtel et de Moov vont de 5 000 à 50 000 FCFA.',
                'Le cadre a bougé depuis. <a href="https://www.osiris.sn/tchad-la-qualite-du-reseau-va-de-pire-en-pis-l-utilisation-des-services.html">OSIRIS du 29 août 2025</a> rapporte que le directeur de l\'ARCEP juge la qualité du réseau en dégradation, que les opérateurs invoquent le manque de carburant pour alimenter leurs sites, et que tout utilisateur de Starlink doit s\'enregistrer auprès de l\'ARCEP ou d\'un opérateur désigné, avec ses coordonnées et les numéros de série de ses équipements. Une entreprise qui choisit cette voie fait cette formalité avant la formation, pas pendant.',
                'Un assistant d\'IA consomme peu de données quand on lui envoie du texte, davantage quand on lui envoie des images ou de gros fichiers. D\'où trois conseils pour limiter la consommation de données : compresser un document avant de le déposer, découper un long rapport en parties et préférer le texte à la photo quand le texte existe. Le coût en données d\'une séance reste ainsi prévisible, ce qui compte quand un forfait de 5 000 FCFA se consomme vite.',
            ],
        ],
        [
            'type'    => 'points',
            'titre'   => 'Quelle liste de contrôle suivre la veille d\'une séance à N\'Djamena ?',
            'intro'   => 'Un responsable désigné dans l\'entreprise peut parcourir cette liste avec les participants la veille de chaque séance. Elle réduit les interruptions dues au courant, au réseau et aux comptes non ouverts.',
            'items'   => [
                ['titre' => 'Alimentation', 'texte' => 'Ordinateurs chargés à 100 %, chargeurs et multiprises sortis, groupe électrogène ou onduleur testé, carburant vérifié. Le routeur est branché sur la source la plus fiable.'],
                ['titre' => 'Deux accès à internet', 'texte' => 'Un accès principal (fibre, Starlink ou forfait mobile) et un second par le téléphone, avec un forfait de données suffisant pour la séance. Les numéros des deux sont notés.'],
                ['titre' => 'Documents d\'exercice', 'texte' => 'Fichiers envoyés la veille, téléchargés sur chaque poste et ouverts une fois pour vérifier qu\'ils se lisent. Les documents sensibles restent hors de la séance.'],
                ['titre' => 'Comptes ouverts', 'texte' => 'Chaque participant a ouvert le compte de l\'assistant retenu et sait où trouver son code de vérification, qui arrive par message ou par courriel : sans réseau, il n\'arrive pas.'],
                ['titre' => 'Point de reprise', 'texte' => 'Les consignes des exercices sont écrites : le participant qui a décroché peut reprendre à son rythme sans interrompre les autres.'],
                ['titre' => 'Salle', 'texte' => 'Une pièce calme, une climatisation ou des ventilateurs qui tiennent sur la batterie, un écran partagé si plusieurs personnes suivent à partir d\'un seul poste. L\'ombre et l\'eau comptent autant que le débit.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles ressources locales existent à N\'Djamena pour apprendre le numérique et l\'IA ?',
            'paragraphes' => [
                'N\'Djamena dispose d\'écoles, d\'une université et de lieux d\'innovation qui forment aux métiers du numérique. Ils constituent des repères pour une entreprise qui prépare le recrutement d\'un stagiaire, l\'accueil d\'un étudiant ou la veille sur les outils. Ce ne sont pas des recommandations commerciales : chaque structure décide de ce qu\'elle offre et à quelles conditions.',
                'L\'Université de N\'Djamena, créée en 1971 sous le nom d\'Université du Tchad puis rebaptisée en 1994, est le grand établissement public de la capitale, d\'après <a href="https://en.wikipedia.org/wiki/University_of_N%27Djamena">Wikipédia</a>. L\'École nationale supérieure des technologies de l\'information et de la communication, l\'ENASTIC, a été créée par l\'ordonnance 005/PR/2015 de mars 2015. Selon <a href="https://www.enastic.td/?page_id=8774&amp;lang=en">sa page de présentation</a>, elle prépare à des licences en informatique, télécommunications, multimédia et gestion des TIC, ainsi qu\'à des masters et à des doctorats.',
                'Du côté de l\'innovation, le <a href="https://tchadinfos.com/2025/10/30/le-centre-dinnovation-technologique-de-ndjamena-est-lance/">Centre d\'innovation technologique de N\'Djaména (CIT-N\'Dj)</a> a été lancé le 30 octobre 2025 ; créé par arrêté du secrétaire général de la Présidence du 1er septembre 2025, il vise une bibliothèque numérique, l\'incubation de jeunes entreprises technologiques, des laboratoires de recherche et la formation aux compétences numériques. WenakLabs, fondé en 2014, avait incubé 120 jeunes entreprises et développé 70 projets selon <a href="https://www.wearetech.africa/fr/fils/tech-stars/wenaklabs-le-hub-technologique-qui-revolutionne-l-entrepreneuriat-au-tchad">WeAreTech du 6 avril 2023</a>, avec un fablab et un medialab ; cet article date de plus de trois ans et les chiffres actuels sont à demander à la structure.',
                'Les événements comptent aussi. Selon <a href="https://www.alwihdainfo.com/ndjamena-abrite-le-forum-sur-la-gouvernance-de-linternet-en-afrique-centrale-2026/">Alwihda Info du 14 octobre 2026</a>, N\'Djamena a accueilli le 13 octobre 2026 le Forum sur la gouvernance de l\'Internet en Afrique centrale, lancé à l\'initiative du gouvernement et centré sur une gouvernance numérique inclusive et souveraine. Une entreprise qui suit ces rendez-vous y trouve des interlocuteurs publics, ce qui complète une formation interne sans la remplacer.',
                'Ces structures forment surtout des étudiants et des porteurs de projets. Une équipe en poste, avec ses documents et ses échéances, a un besoin différent : apprendre à confier une tâche précise à un assistant et à contrôler le résultat. C\'est le créneau de la formation décrite sur cette page, qui s\'appuie sur la fiche nationale <a href="/formations/ia-en-entreprise">IA en entreprise</a>.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats de formation IA choisir à N\'Djamena, et comment se passent les séances à distance ?',
            'legende' => 'Durées et effectifs de la fiche de la formation IA en entreprise. Les séances à distance se déroulent à la même heure légale qu\'à N\'Djamena. Le prix de chaque format est fixé sur devis, en FCFA.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir à N\'Djamena'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction ou un service qui veut voir l\'IA sur ses propres courriers avant de s\'engager ; une bonne façon de tester la connexion de la salle'],
                ['Formation complète', '2 jours, en 4 demi-journées de 3 h 30', '10 personnes au plus, par métier', 'Une équipe de sous-traitant, de banque ou de cabinet qui a déjà ouvert un assistant sans méthode'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre plusieurs arrondissements ou sites, ou entreprise qui ne peut pas libérer deux jours de suite'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Prise en main en salle, puis exercices suivis à distance sur les tâches réelles'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes une fois la session passée, quand les coupures et le travail courant reprennent le dessus'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel décalage horaire entre Cotonou et N\'Djamena, et quel déplacement est possible ?',
            'paragraphes' => [
                'Il n\'y en a aucun. Selon Wikipédia, N\'Djamena est à UTC+1, l\'heure d\'Afrique de l\'Ouest, comme Cotonou, où Richard est basé. Une séance fixée à 9 h à N\'Djamena commence à 9 h à Cotonou, sans calcul. Richard publie des horaires de 7 h à 20 h, tous les jours : les séances se placent dans cette plage, en évitant les heures où l\'entreprise sait que le courant de son quartier coupe.',
                'Chaque séance à distance se prépare comme celle d\'une salle : documents envoyés la veille, comptes ouverts, liste de contrôle remplie, et une reprise écrite si la connexion tombe. Le partage d\'écran sert à regarder le travail de chacun, ce qui suppose un poste par participant, et non un écran partagé à cinq.',
                'Pour un groupe réuni dans vos locaux, la fiche de la formation prévoit le déplacement hors de Cotonou ou hors du Bénin comme un facteur du devis. Il n\'existe pas de tarif de déplacement affiché : il est chiffré au devis, après le cadrage, avec les autres postes.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que fait chaque métier de N\'Djamena avec l\'IA le lundi suivant la formation ?',
            'legende' => 'Exemples d\'exercices construits à partir des documents de l\'entreprise, anonymisés si nécessaire. Aucun gain chiffré n\'est promis : le résultat attendu se vérifie sur le document produit.',
            'entetes' => ['Métier', 'Tâche', 'Outil', 'Résultat attendu'],
            'lignes'  => [
                ['Fournisseur ou sous-traitant de la filière pétrolière', 'Répondre à une consultation ou préparer un dossier de qualification pour un donneur d\'ordre', 'ChatGPT, Claude, Gemini ou Copilot, avec un modèle d\'offre validé de l\'entreprise', 'Un premier jet bilingue français et anglais, avec la liste des pièces à fournir, relu ligne à ligne par le responsable de l\'offre'],
                ['Commerçant ou grossiste d\'un marché', 'Remettre au propre un cahier de commandes, de crédits et de stock tenu sur papier ou dans WhatsApp', 'Un assistant et un tableur gratuit', 'Un tableau daté des clients, des montants dus et des relances à envoyer, dont deux totaux sont recalculés à la main'],
                ['Chargé de clientèle d\'une banque', 'Répondre à des demandes de clients et préparer des relances de pièces', 'Un assistant en compte professionnel, sans aucune donnée de client', 'Des réponses dans le ton de la maison, avec un modèle validé par la conformité de l\'établissement'],
                ['Agent d\'une mairie ou d\'une administration', 'Rédiger la note de synthèse d\'un dossier ou le courrier normé qui accompagne une demande', 'Un assistant, à partir d\'un modèle de courrier validé', 'Un projet de texte que l\'agent corrige et que le responsable signe ; les dossiers nominatifs ne sont jamais soumis'],
                ['Chargé de projet d\'une ONG', 'Résumer un rapport de mission et préparer le rapport au bailleur', 'Un assistant, avec exigence de renvoi aux pages', 'Un résumé où chaque chiffre est retrouvé dans le rapport source, à la bonne page'],
                ['Cabinet de conseil ou d\'expertise', 'Transformer des notes d\'entretien en compte rendu avec décisions et échéances', 'Un assistant et un traitement de texte', 'Un compte rendu prêt à diffuser, où aucune décision n\'a été ajoutée ou oubliée'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles sur les données faut-il suivre à N\'Djamena ?',
            'paragraphes' => [
                'Ce que la ville change tient à ce que ses équipes manipulent. Une mairie qui numérise son état civil, comme l\'a lancé la commune de N\'Djamena le 23 septembre 2026 avec le soutien de l\'OIF et un protocole avec l\'Agence nationale des titres sécurisés, traite des actes de naissance, de mariage et de décès, selon <a href="https://www.osiris.sn/tchad-n-djamena-lance-la-numerisation-de-son-etat-civil.html">OSIRIS du 24 septembre 2026</a>. Une banque détient des comptes, une ONG des fiches de bénéficiaires, un cabinet des dossiers de clients. La règle de la formation est la même pour tous : aucune donnée nominative n\'est soumise à un assistant en ligne, et chaque document est classé avant le premier exercice.',
                'Le cadre légal national, avec la loi sur les données personnelles et son autorité de contrôle, est présenté sur la page <a href="/formations/ia-en-entreprise/tchad">formation IA en entreprise au Tchad</a>. Pour une administration ou une entreprise de la capitale, la formation y ajoute un geste simple : remplacer noms, numéros et montants par des repères avant de coller un texte, puis les rétablir dans la version finale, hors de l\'assistant.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte une formation IA à N\'Djamena ?',
            'paragraphes' => [
                'Le prix d\'une formation à N\'Djamena est fixé sur devis, en FCFA, après un échange de cadrage. Aucune somme n\'est affichée sur cette page, parce que deux équipes de dix personnes peuvent demander des préparations très différentes. Le devis détaille chaque poste, et le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
                'Le prix varie avec le nombre de participants et de groupes, avec le format retenu et le nombre de demi-journées, avec le temps de préparation des exercices sur vos documents et leur anonymisation, et avec la langue des supports, en français ou en anglais. Le mode compte aussi : présentiel, distance ou hybride. Pour une session dans vos locaux à N\'Djamena, le déplacement hors du Bénin est un poste de plus.',
                'Les abonnements aux assistants restent au nom de l\'entreprise et ne font pas partie du prix de la formation. Les versions gratuites suffisent pour apprendre la méthode ; l\'abonnement se décide après, sur ce qui a servi. Le coût de la connexion, lui, relève de l\'entreprise : les prix relevés plus haut pour Starlink, la fibre et les forfaits mobiles aident à le budgéter.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs les équipes de N\'Djamena font-elles en démarrant l\'IA ?',
            'intro' => 'Les écarts ci-dessous viennent du contexte de la ville. Chacun se prévient dès la première séance.',
            'items' => [
                ['titre' => 'Compter sur une seule connexion', 'texte' => 'Une séance entière repose sur un forfait ou sur une ligne. Quand le réseau se dégrade, comme le constate le directeur de l\'ARCEP, plus rien ne marche. Un second accès doit être prêt avant le début.'],
                ['titre' => 'Oublier que le routeur a besoin de courant', 'texte' => 'L\'ordinateur est chargé, mais le routeur est branché sur une prise qui coupe. Le groupe électrogène ou l\'onduleur alimente d\'abord le routeur.'],
                ['titre' => 'Envoyer une offre sans relire les chiffres', 'texte' => 'Dans une offre bilingue pour un donneur d\'ordre, une quantité ou un délai faux coûte plus cher qu\'une journée de retard. Chaque chiffre est retrouvé dans la source avant l\'envoi.'],
                ['titre' => 'Soumettre un dossier nominatif', 'texte' => 'Un acte d\'état civil, une fiche de client de banque ou de bénéficiaire d\'ONG ne se colle pas dans un assistant en ligne. Le classement des documents est fait avant l\'exercice.'],
                ['titre' => 'Utiliser un compte personnel pour des documents d\'entreprise', 'texte' => 'Le compte part avec le salarié. Les documents de l\'entreprise se traitent dans un compte que l\'entreprise contrôle, ou restent chez elle.'],
                ['titre' => 'Laisser un seul participant maîtriser l\'outil', 'texte' => 'Si le seul formé quitte l\'entreprise, l\'usage disparaît. La bibliothèque de consignes appartient à l\'équipe et se relit chaque mois.'],
                ['titre' => 'Promettre un gain de temps à la direction avant d\'avoir mesuré', 'texte' => 'Le temps d\'une tâche cible se mesure avant et après la session. Annoncer un chiffre à l\'avance expose l\'équipe à une déception.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à N\'Djamena avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Tchad, et ses séances à N\'Djamena se font à la même heure que lui, sans décalage. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Sa façon de former se résume en engagements vérifiables : une réponse sous ' . fait('delai_reponse') . ', un cadrage qui peut conclure qu\'une formation plus courte suffit, des exercices construits sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l\'entreprise et aucun chiffre de gain promis à l\'avance. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun.',
                'Ses réalisations sont présentées sur la page <a href="/realisations/">réalisations</a>. Pour un besoin plus large, l\'<a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>, le <a href="/formations/prompt-engineering">prompt engineering</a>, les <a href="/formations/agents-ia-assistants">agents IA</a> et l\'<a href="/formations/n8n">automatisation avec n8n</a> prolongent cette formation.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe de N\'Djamena à l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs métiers, les tâches qui leur prennent le plus de temps, leur accès au courant et à internet : vous recevez une réponse sous 24 heures, puis un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA à N\'Djamena'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA à N’Djamena ?", 'r' => "Les trois appellations se côtoient sur le marché, et aucune ne fait l’objet d’un diplôme ou d’un agrément officiel. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant à N’Djamena : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA à N’Djamena ?", 'r' => "Choisissez d’abord un usage précis et un responsable, avant tout abonnement : une tâche qui revient chaque semaine, un jeu de documents d’exercice et une règle claire sur les données confidentielles. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise à N’Djamena, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former mon équipe à l\'IA à N\'Djamena ?', 'r' => 'Des établissements d\'enseignement, des structures d\'innovation et des formateurs indépendants. Richard SALANON, consultant basé à Cotonou, forme les équipes à distance, en français, à la même heure qu\'à N\'Djamena, sur les documents de l\'entreprise, avec un devis en FCFA.'],
        ['q' => 'Y a-t-il un décalage horaire entre Cotonou et N\'Djamena ?', 'r' => 'Non. N\'Djamena et Cotonou sont toutes deux à UTC+1. Une séance à 9 h à N\'Djamena commence à 9 h pour le formateur, dans les horaires publiés de Richard, de 7 h à 20 h.'],
        ['q' => 'Que se passe-t-il si le courant coupe pendant la séance ?', 'r' => 'La formation est conçue pour cela : séances de trois heures et demie au plus, documents téléchargés la veille, ordinateurs chargés, routeur sur une source de secours et reprise écrite dans le support. Le ministre de l\'Eau et de l\'Énergie a présenté en janvier 2026 une capacité installée de 240 MW insuffisante pour la demande de la capitale.'],
        ['q' => 'Quelle connexion faut-il prévoir pour une formation à distance à N\'Djamena ?', 'r' => 'Un accès principal et un second accès par le téléphone. En juillet 2025, OSIRIS relevait des forfaits mobiles de 5 000 à 50 000 FCFA, des abonnements Starlink de 12 000 à 32 000 FCFA par mois et une fibre Moov Africa à partir de 25 000 FCFA par mois.'],
        ['q' => 'Faut-il enregistrer Starlink avant une session à N\'Djamena ?', 'r' => 'Oui, si l\'entreprise s\'en sert. Selon OSIRIS du 29 août 2025, tout utilisateur de Starlink doit s\'enregistrer auprès de l\'ARCEP ou d\'un opérateur désigné. La formalité se fait avant la formation.'],
        ['q' => 'Quels métiers de N\'Djamena profitent le plus de la formation ?', 'r' => 'Ceux qui écrivent et calculent beaucoup : fournisseurs de la filière pétrolière, commerçants et grossistes, banques, mairies et administrations, ONG, cabinets de conseil. Le programme est construit par métier, à partir de leurs documents.'],
        ['q' => 'La formation couvre-t-elle les offres bilingues pour les donneurs d\'ordre pétroliers ?', 'r' => 'Oui, comme exercice pour les fournisseurs et sous-traitants : un premier jet en français et en anglais, des pièces à réunir, et une relecture ligne à ligne des chiffres et des délais. Elle ne garantit aucun marché.'],
        ['q' => 'Les agents d\'une mairie peuvent-ils utiliser l\'IA sur des actes d\'état civil ?', 'r' => 'Non, pas sur des dossiers nominatifs. La formation apprend à rédiger des courriers normés et des notes de synthèse à partir de modèles validés. La commune de N\'Djamena a lancé le 23 septembre 2026 la numérisation de son état civil, avec formation des agents prévue.'],
        ['q' => 'Combien coûte une formation IA à N\'Djamena ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après le cadrage. Il dépend du nombre de participants, du format, de la préparation des exercices, de la langue des supports et, pour une session dans vos locaux, du déplacement.'],
        ['q' => 'Où trouver d\'autres formations au numérique à N\'Djamena ?', 'r' => 'L\'Université de N\'Djamena, l\'ENASTIC, le Centre d\'innovation technologique de N\'Djaména, lancé le 30 octobre 2025, et WenakLabs forment étudiants et porteurs de projets. Leurs offres et leurs conditions se demandent à chaque structure.'],
    ],

    'sources' => [
        ['titre' => 'Wikipédia, N\'Djamena (géographie, institutions, fuseau horaire)', 'url' => 'https://en.wikipedia.org/wiki/N%27Djamena', 'date' => '2026-10-26'],
        ['titre' => 'Wikipédia, Université de N\'Djamena (création en 1971, renommage en 1994)', 'url' => 'https://en.wikipedia.org/wiki/University_of_N%27Djamena', 'date' => '2026-10-26'],
        ['titre' => 'Alwihda Info, crise énergétique à N\'Djamena : le gouvernement s\'explique devant le Sénat (3 janvier 2026)', 'url' => 'https://www.alwihdainfo.com/crise-energetique-a-n-djamena-le-gouvernement-s-explique-devant-le-senat-a147177/', 'date' => '2026-10-26'],
        ['titre' => 'Alwihda Info, délestage récurrent à N\'Djamena pendant le Ramadan (11 mars 2025)', 'url' => 'https://www.alwihdainfo.com/tchad-delestage-recurrent-a-n-djamena-un-defi-croissant-pendant-le-ramadan-a139367/', 'date' => '2026-10-26'],
        ['titre' => 'Alwihda Info, forum sur la gouvernance de l\'Internet en Afrique centrale 2026 (14 octobre 2026)', 'url' => 'https://www.alwihdainfo.com/ndjamena-abrite-le-forum-sur-la-gouvernance-de-linternet-en-afrique-centrale-2026/', 'date' => '2026-10-26'],
        ['titre' => 'Tchadinfos, création de la Tchadienne d\'électricité après la déchéance de la SNE (9 juillet 2025)', 'url' => 'https://tchadinfos.com/2025/07/09/le-gouvernement-cree-la-tchadienne-delectricite-apres-la-decheance-de-la-sne/', 'date' => '2026-10-26'],
        ['titre' => 'Tchadinfos, Commercial Bank Tchad inaugure son agence de Farcha (9 décembre 2025)', 'url' => 'https://tchadinfos.com/2025/12/09/economie-commercial-bank-tchad-inaugure-sa-nouvelle-agence-de-farcha/', 'date' => '2026-10-26'],
        ['titre' => 'Tchadinfos, grève des commerçants : la mairie de N\'Djamena renonce aux nouvelles taxes (5 juin 2026)', 'url' => 'https://tchadinfos.com/2026/06/05/greve-des-commercants-la-mairie-de-ndjamena-renonce-aux-nouvelles-taxes/', 'date' => '2026-10-26'],
        ['titre' => 'Tchadinfos, incendie du marché à mil (17 juin 2026)', 'url' => 'https://tchadinfos.com/2026/06/17/on-na-ni-assurance-ni-epargne-au-marche-a-mil-le-desarroi-des-commercants-apres-le-lincendie/', 'date' => '2026-10-26'],
        ['titre' => 'Tchadinfos, lancement du Centre d\'innovation technologique de N\'Djaména (30 octobre 2025)', 'url' => 'https://tchadinfos.com/2025/10/30/le-centre-dinnovation-technologique-de-ndjamena-est-lance/', 'date' => '2026-10-26'],
        ['titre' => 'EcoMatin, accord avec un fonds émirati pour une deuxième raffinerie (11 novembre 2025)', 'url' => 'https://ecomatin.net/le-tchad-signe-un-accord-avec-un-fonds-emirati-pour-construire-sa-deuxieme-raffinerie-de-petrole', 'date' => '2026-10-26'],
        ['titre' => 'EcoMatin, accord pétrolier avec la CNPCIC pour relancer la raffinerie de Djermaya (22 septembre 2025)', 'url' => 'https://ecomatin.net/tchad-nouvel-accord-petrolier-avec-cnpcic-pour-relancer-la-raffinerie-de-djermaya', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, Starlink déploie ses services au Tchad à des tarifs encore élevés (7 juillet 2025)', 'url' => 'https://www.osiris.sn/starlink-deploie-ses-services-au-tchad-a-des-tarifs-encore-eleves.html', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, Tchad : la qualité du réseau va de pire en pis (29 août 2025)', 'url' => 'https://www.osiris.sn/tchad-la-qualite-du-reseau-va-de-pire-en-pis-l-utilisation-des-services.html', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, N\'Djamena lance la numérisation de son état civil (24 septembre 2026)', 'url' => 'https://www.osiris.sn/tchad-n-djamena-lance-la-numerisation-de-son-etat-civil.html', 'date' => '2026-10-26'],
        ['titre' => 'ENASTIC, présentation de l\'école', 'url' => 'https://www.enastic.td/?page_id=8774&lang=en', 'date' => '2026-10-26'],
        ['titre' => 'WeAreTech, WenakLabs, le hub technologique qui révolutionne l\'entrepreneuriat au Tchad (6 avril 2023)', 'url' => 'https://www.wearetech.africa/fr/fils/tech-stars/wenaklabs-le-hub-technologique-qui-revolutionne-l-entrepreneuriat-au-tchad', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-en-entreprise'],
        'services'   => ['integration-ia-entreprise', 'formation-en-entreprise'],
    ],
];
