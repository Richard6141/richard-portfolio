<?php
// ============================================================
// data/formations/visibilite-google.php · Fiche formation « Visibilité
// Google : fiche, avis, SEO local » (vague 1B, lot A). Reprend de l'ancienne
// page /formation-seo-visibilite-google : une journée pour le programme
// complet, une demi-journée pour le format resserré fiche et avis, groupes
// réduits, chacun sur son propre compte Google, sur place ou en
// visioconférence, quatre modules, livrables, priorités par établissement,
// rythme des 90 jours ; ses prix sont ignorés. Forme les équipes : la mise en
// place par Richard relève du pilier /services/seo-local-google-business.
// Faits externes relevés le 05/10/2026 (aide Google Business Profile,
// règlement Maps, compte Google, Bing, Apple, ARCEP Bénin, DataReportal,
// SGG du Bénin, CNIL, DGCCRF, FDFP, 3FPT, France Compétences).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation visibilité Google : apprendre à tenir sa fiche d\'établissement, à obtenir des avis conformes et à poser les bases du SEO local, sans dépendre d\'un prestataire',
    'title'   => 'Formation fiche Google, avis et SEO local | Richard SALANON',
    'meta'    => 'Formation pour apprendre à votre équipe à tenir la fiche Google de l\'établissement, à obtenir des avis sans enfreindre les règles et à bien y répondre.',
    'en_bref' => 'Cette formation apprend à la personne qui tiendra la fiche Google de votre établissement, et à son responsable, à la reprendre en main, à la remplir correctement, à obtenir des avis sans enfreindre les règles de Google et à y répondre, puis à poser les bases du SEO local sur le site. Elle s\'adresse aux commerces, restaurants, hôtels, pharmacies, cabinets et artisans d\'Afrique francophone et d\'Europe. Elle dure une journée, ou une demi-journée en format resserré sur la fiche et les avis, en petit groupe, chacun sur le compte de son propre établissement, sur place, à distance ou en formule mixte. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'marketing-visibilite',
    'forte'   => true,
    'duree'   => '1 jour, ou une demi-journée en format resserré',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : comprendre la recherche locale et reprendre la main sur sa fiche',
            'duree'  => '3 h 30',
            'points' => [
                'Recherche en direct de votre métier dans votre quartier, depuis plusieurs téléphones : qui sort en tête, avec quelle note, combien d\'avis et quelles photos.',
                'Pertinence, distance, proéminence : les trois critères que Google décrit pour son classement local, et ce que personne ne peut acheter.',
                'Inventaire de toutes les fiches qui parlent de l\'établissement, doublons compris, et identification du compte qui les contrôle.',
                'Revendication ou création de la fiche depuis le compte Google de l\'entreprise, puis lancement ou suivi de la validation.',
                'Rôles de propriétaire principal, de propriétaire et d\'administrateur ; sécurisation du compte par la validation en deux étapes.',
                'Remplissage de la fiche en séance : nom exact, catégorie principale, adresse ou zone desservie, repère sur la carte, horaires normaux et exceptionnels, téléphone, site, description, attributs, services et premières photos.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : obtenir des avis, y répondre et tenir la fiche chaque semaine',
            'duree'  => '3 h 30',
            'points' => [
                'Ce que le règlement de Google Maps interdit : contrepartie, tri des clients, avis écrits par le personnel ou les proches, objectifs d\'avis fixés aux employés.',
                'Création du lien et du QR code de demande d\'avis, rédaction des messages types pour WhatsApp, SMS et e-mail, choix du moment de la demande.',
                'Atelier de réponses : avis élogieux, mitigé, injuste, faux, ou touchant à la santé ou à un litige ; signalement d\'un avis et suivi de la décision.',
                'Posts, photos récentes, contrôle des modifications proposées par le public et des horaires de fête.',
                'Bases côté site : page de contact alignée sur la fiche, même nom et même numéro partout, partage entre ce que l\'équipe corrige seule et ce qui relève d\'un prestataire.',
                'Lecture des statistiques de la fiche, rituel hebdomadaire, objectif à 90 jours, puis évaluation : chaque participant traite seul une série de tâches sur sa fiche.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '1 jour, ou une demi-journée pour le format fiche et avis'],
        ['l' => 'Public', 'v' => 'La personne qui tiendra la fiche, le gérant, l\'équipe au contact des clients'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou formule mixte, en petit groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saura faire votre équipe à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Quand un client cherche une pharmacie de garde, un menuisier ou un hôtel près de lui, il choisit souvent sans ouvrir aucun site : il regarde trois fiches sur la carte, lit quelques avis, puis appelle. Une grande partie de ce qui se joue là ne demande ni budget publicitaire ni agence. Il faut une fiche exacte, des avis qui arrivent chaque mois, des photos réelles et quelqu\'un qui s\'en occupe. Cette formation transmet ces gestes à la personne qui les fera, dans votre établissement, sur votre propre fiche.',
                'Les objectifs sont vérifiables à la sortie. Chaque participant sait retrouver les fiches de son établissement et dire qui les contrôle ; remplir seul chaque champ de la fiche selon les consignes de Google ; ajouter ou retirer un administrateur sans perdre la propriété ; créer le lien de demande d\'avis et l\'envoyer au bon moment ; répondre à un avis négatif en moins de dix minutes, sans divulguer d\'information privée ; signaler un avis contraire au règlement ; publier un post ; lire les statistiques du mois et dire ce qu\'elles signifient pour l\'établissement.',
                'La formation laisse de côté ce qui se délègue. Le référencement d\'un site face à une concurrence installée, la rédaction d\'articles et le travail des mots-clés relèvent du <a href="/services/referencement-naturel-seo">référencement naturel</a>. La publicité payante sur Google n\'est pas abordée : c\'est un métier de réglages et de budget. La manière dont les assistants d\'IA décrivent votre entreprise a sa propre formation, le <a href="/formations/referencement-ia-geo">référencement IA (GEO)</a>. Ici, le site n\'est traité que pour ce qu\'il doit confirmer de la fiche : le nom, l\'adresse, le téléphone et les horaires.',
                'Elle ne remplace pas non plus la prestation. Si vous préférez que la mise en place soit faite pour vous, avec un état des lieux, la correction des annuaires et un suivi mensuel, c\'est l\'objet du service de <a href="/services/seo-local-google-business">SEO local et fiche Google Business Profile</a>. Les deux se combinent bien : Richard SALANON met la fiche en état, puis forme la personne qui l\'entretiendra. La formation existe pour tout ce qui doit rester chez vous, parce que cela vit avec l\'activité : les avis de la semaine, les photos du dernier arrivage, l\'horaire du jour férié.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit suivre la formation, avec quel niveau et quel matériel ?',
            'intro' => 'La formation ne demande aucune compétence technique. Elle demande surtout les bonnes personnes autour de la table, et les accès qui permettent de travailler sur la vraie fiche plutôt que sur un exemple.',
            'items' => [
                ['titre' => 'La personne qui tiendra la fiche chaque semaine', 'texte' => 'C\'est elle que l\'on forme en priorité : assistante, responsable de boutique, chargé de communication, réceptionniste. Elle doit être dans l\'entreprise pour durer. Former le stagiaire de passage est l\'erreur classique : il part avec la compétence et parfois avec les accès.'],
                ['titre' => 'Le gérant ou la gérante, au moins pour les décisions', 'texte' => 'La catégorie principale, la description, la règle de réponse aux avis négatifs et le choix des personnes qui auront accès se décident avec la direction. Sa présence le matin suffit souvent ; l\'après-midi peut être réservé à l\'équipe.'],
                ['titre' => 'L\'équipe au contact des clients', 'texte' => 'Caissiers, serveurs, réceptionnistes, techniciens qui terminent une intervention : ce sont eux qui demandent l\'avis au bon moment. Une séance courte de trente minutes, en fin de journée, leur apprend la phrase à dire et ce qu\'il ne faut jamais promettre en échange.'],
                ['titre' => 'Les entreprises déjà accompagnées', 'texte' => 'Une entreprise dont la fiche a été mise en place par un prestataire peut vouloir reprendre la partie quotidienne. La formation part alors de l\'existant, vérifie que l\'entreprise est bien propriétaire principale, et transfère les gestes hebdomadaires.'],
                ['titre' => 'Niveau requis', 'texte' => 'Savoir se servir d\'un smartphone et d\'une messagerie suffit. Un test de positionnement de quelques questions, au moment du cadrage, permet de regrouper les personnes de niveau proche et de prévoir, si besoin, une courte mise à niveau sur le compte Google lui-même.'],
                ['titre' => 'Matériel et accès à préparer', 'texte' => 'Un smartphone avec l\'application Google Maps, un ordinateur si possible, l\'adresse e-mail et le mot de passe du compte Google de l\'entreprise, la ligne téléphonique de l\'établissement à portée de main pour une validation, et une dizaine de photos récentes. La liste exacte est envoyée au cadrage.'],
                ['titre' => 'Si la fiche appartient à quelqu\'un d\'autre', 'texte' => 'Ancien employé, agence disparue, fiche créée par un client : la reprise de contrôle passe par la procédure de Google, qui peut demander de prouver que vous gérez l\'établissement. Les éléments à réunir sont listés au cadrage, pour que la séance ne bute pas sur un document manquant.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur leur propre fiche ?',
            'items' => [
                ['titre' => 'L\'état des lieux face à trois concurrents', 'duree' => '30 minutes', 'texte' => 'Chacun cherche son métier et son quartier comme le ferait un client, sur son téléphone, puis note dans une grille les trois établissements qui sortent : note, nombre d\'avis, date du dernier avis, photos, horaires, réponses du gérant. Cet exercice ouvre souvent les yeux : un concurrent moins bon capte les appels parce que sa fiche existe, répond et rassure. La grille est conservée pour la comparaison à 90 jours.'],
                ['titre' => 'L\'inventaire des fiches et des accès', 'duree' => '30 minutes', 'texte' => 'Recherche de toutes les fiches liées à l\'établissement, y compris celles créées à partir de contributions du public, puis contrôle, dans le compte, de la liste des utilisateurs. Le groupe repère les doublons à signaler et les personnes qui ont encore des droits sans raison.'],
                ['titre' => 'Le remplissage de la fiche, champ par champ', 'duree' => '1 h 30', 'texte' => 'Chaque participant travaille sur sa fiche, pas sur une démonstration. Le formateur passe d\'un écran à l\'autre et vérifie chaque choix : nom sans mots-clés, catégorie principale, repère placé à la main quand l\'adresse n\'a pas de numéro, horaires de fête saisis à l\'avance. Une fiche en attente de validation est remplie dans la limite de ce que Google permet pendant l\'attente.'],
                ['titre' => 'Le texte de référence des coordonnées', 'duree' => '20 minutes', 'texte' => 'Le groupe écrit, une fois pour toutes, la version exacte du nom, de l\'adresse rédigée avec son repère, du téléphone au format international et des horaires. Ce texte servira à corriger Facebook, WhatsApp Business, le site et les annuaires, sans réinventer l\'orthographe à chaque fois.'],
                ['titre' => 'Le kit de demande d\'avis', 'duree' => '45 minutes', 'texte' => 'Création du lien et du QR code, puis rédaction de trois messages types adaptés au métier : un pour WhatsApp, un pour le SMS, un pour l\'e-mail. Chacun est relu à la lumière du règlement de Google : aucune contrepartie, aucune note suggérée, la même demande pour tous les clients.'],
                ['titre' => 'L\'atelier de réponses aux avis', 'duree' => '1 heure', 'texte' => 'Les participants répondent par écrit à une série d\'avis réels ou reconstitués à partir de leur secteur, du plus simple au plus délicat. Les réponses sont lues à voix haute et corrigées ensemble. Pour les avis qui touchent à la santé, à un montant contesté ou à une accusation, le groupe fixe qui valide avant publication.'],
                ['titre' => 'Le rituel de la semaine', 'duree' => '30 minutes', 'texte' => 'Le groupe construit le calendrier hebdomadaire : un post, une réponse à chaque nouvel avis dans les 48 heures, un contrôle des modifications proposées par le public, une photo récente. Il note aussi qui remplace la personne formée pendant ses congés.'],
                ['titre' => 'L\'évaluation sur la vraie fiche', 'duree' => '30 minutes', 'texte' => 'Chaque participant exécute seul une série de tâches : corriger un horaire exceptionnel, publier un post, répondre à un avis négatif, retrouver le nombre d\'appels du mois, ajouter puis retirer un administrateur de test. Le résultat est comparé aux objectifs écrits du cadrage.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qui fait quoi sur la fiche une fois la formation terminée ?',
            'legende' => 'Répartition conseillée des rôles. Les droits de chaque rôle viennent de l\'aide Google Business Profile sur les utilisateurs de la fiche, consultée le 5 octobre 2026 ; la répartition des gestes est issue de la pratique de Richard SALANON.',
            'entetes' => ['Rôle sur la fiche', 'Qui le tient', 'Ce que Google permet à ce rôle', 'Gestes confiés après la formation'],
            'lignes'  => [
                ['Propriétaire principal', 'Le compte Google de l\'entreprise, sous le contrôle du gérant', 'Un seul par fiche ; la propriété principale ne se transfère qu\'à un autre propriétaire ou administrateur déjà ajouté', 'Garder la main, ajouter et retirer les utilisateurs, vérifier chaque trimestre la liste des accès'],
                ['Propriétaire', 'Le gérant ou un associé, avec son propre compte', 'Contrôle complet de la fiche, y compris la gestion des utilisateurs', 'Valider la catégorie, la description et les réponses sensibles'],
                ['Administrateur', 'La personne formée, et le prestataire éventuel', 'Presque les mêmes droits qu\'un propriétaire, sans pouvoir ajouter ou retirer des utilisateurs ni supprimer la fiche', 'Posts, photos, horaires, réponses aux avis, lecture des statistiques'],
                ['Aucun accès', 'L\'équipe au contact des clients', 'Rien sur la fiche', 'Demander l\'avis à chaque client, avec le lien ou le QR code, et faire remonter les remarques'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et que se passe-t-il après ?',
            'intro' => 'La méthode tient en une règle : on travaille sur la fiche de l\'établissement, avec ses vrais avis et ses vraies photos. Une démonstration courte, une pratique longue, et un critère de réussite qui est un geste fait seul.',
            'items' => [
                ['titre' => 'Des petits groupes', 'texte' => 'Le formateur doit pouvoir regarder chaque écran. Au-delà de quelques participants, le groupe est dédoublé ; en inter-entreprises, chacun travaille sur la fiche de son propre établissement, sans montrer les données des autres.'],
                ['titre' => 'La fiche complétée pendant la séance', 'texte' => 'À la fin de la journée, la fiche est remplie, les photos sont en ligne, le lien d\'avis est prêt et les premières réponses sont publiées. Le travail ne commence pas le lendemain : il est déjà fait, et l\'équipe sait le refaire.'],
                ['titre' => 'Des supports rédigés pour votre métier', 'texte' => 'Les participants repartent avec la fiche des règles à ne jamais enfreindre, les messages types de demande d\'avis, un guide de réponse avec des exemples de leur secteur, le texte de référence des coordonnées et le calendrier hebdomadaire, dans un format que l\'entreprise peut modifier.'],
                ['titre' => 'Une évaluation sur une tâche réelle', 'texte' => 'Le questionnaire de satisfaction existe, mais ce n\'est pas lui qui dit si la formation a réussi. Ce sont les tâches exécutées seul en fin de session, comparées aux objectifs écrits au moment du cadrage.'],
                ['titre' => 'Un suivi pendant les premières semaines', 'texte' => 'Un canal direct reste ouvert pour les questions d\'application : un avis inhabituel, une modification refusée, une validation qui traîne. En option, une séance de relecture à distance, un mois après, reprend les réponses publiées et les statistiques.'],
                ['titre' => 'Une comparaison à 90 jours', 'texte' => 'La grille de l\'état des lieux est reprise trois mois plus tard, par l\'équipe elle-même : nombre d\'avis, note, date du dernier avis, position sur les recherches testées, appels et itinéraires relevés dans les statistiques. C\'est sur cette comparaison qu\'on décide de la suite.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on pendant la formation, et que coûtent-ils ?',
            'legende' => 'Coûts d\'éditeur relevés le 5 octobre 2026 sur les pages officielles de Google, de Bing et d\'Apple. Aucun outil payant n\'est nécessaire pour suivre la formation.',
            'entetes' => ['Outil', 'Usage appris en séance', 'Coût selon l\'éditeur', 'Point d\'attention'],
            'lignes'  => [
                ['Google Business Profile, depuis la recherche Google et l\'application Google Maps', 'Fiche, avis, posts, photos, horaires, statistiques', 'Sans frais : Google écrit qu\'il ne demandera jamais de paiement pour la fiche', 'Les droits dépendent du rôle de chaque utilisateur'],
                ['Lien et QR code de demande d\'avis', 'Demander un avis au comptoir, sur la facture ou par message', 'Fournis par Google avec la fiche', 'Le client doit être connecté à un compte Google, même sans adresse Gmail'],
                ['Outil de gestion des avis de Google', 'Signaler un avis et suivre la décision', 'Sans frais', 'Ne supprime que les avis contraires au règlement'],
                ['Compte Google et validation en deux étapes', 'Protéger l\'accès à la fiche', 'Sans frais', 'Préférer l\'invite Google ou une clé d\'accès au code par SMS'],
                ['Bing Places for Business', 'Reprendre la fiche sur Bing et Bing Maps', 'Gratuit, selon le blog de Bing du 3 octobre 2025', 'Corriger la fiche Google avant de l\'importer'],
                ['Apple Business Connect', 'Contrôler ce qu\'affichent Plans et Siri', 'Gratuit, selon l\'annonce d\'Apple du 11 janvier 2023', 'Disponibilité des fonctions variable selon les pays'],
                ['WhatsApp Business', 'Envoyer la demande d\'avis après la vente', 'Application déjà en place chez la plupart des commerces', 'Ses réglages sont l\'objet de la <a href="/formations/whatsapp-business">formation WhatsApp Business</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre métier, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Pharmacie, à Abidjan', 'probleme' => 'Les semaines de garde changent, mais la fiche affiche toujours les horaires ordinaires : des patients arrivent porte close la nuit, d\'autres ignorent que la pharmacie est ouverte.', 'solution' => 'La pharmacienne et son assistante apprennent à saisir les horaires exceptionnels à l\'avance, par blocs de six jours consécutifs au plus comme le prévoit Google, et à répondre aux avis sans jamais confirmer qu\'une personne est cliente ni évoquer un traitement.'],
                ['secteur' => 'Salon de coiffure, à Lomé', 'probleme' => 'Des dizaines de clientes satisfaites chaque semaine, et quatre avis en trois ans. La gérante n\'ose pas demander.', 'solution' => 'Séance resserrée d\'une demi-journée : QR code posé au miroir, phrase de demande apprise par chaque coiffeuse, message WhatsApp envoyé le soir même avec le lien, et photos des réalisations publiées avec l\'accord des clientes.'],
                ['secteur' => 'Quincaillerie qui livre sur chantier, à Porto-Novo', 'probleme' => 'La fiche a été créée par un ancien vendeur avec son numéro personnel, et l\'entreprise ne peut plus rien modifier.', 'solution' => 'Le matin est consacré à la reprise de contrôle et au nouveau numéro au format +229 01 ; l\'après-midi, l\'équipe apprend à déclarer la zone de livraison et à lister les produits avec les mots des artisans.'],
                ['secteur' => 'Réseau de cinq boutiques, à Dakar', 'probleme' => 'Chaque responsable de boutique gère « sa » fiche avec son compte personnel, et personne au siège ne sait qui a accès à quoi.', 'solution' => 'Formation intra en deux groupes : le siège devient propriétaire principal de chaque fiche, les responsables passent administrateurs, un tableau des accès est tenu à jour, et une même charte de réponse aux avis s\'applique aux cinq points de vente.'],
                ['secteur' => 'Maison d\'hôtes, près de Grand-Popo', 'probleme' => 'Les voyageurs écrivent leurs avis en anglais ou en allemand, et les réponses traduites automatiquement sonnent faux.', 'solution' => 'Le gérant apprend à répondre dans la langue de l\'auteur avec des phrases courtes qu\'il relit, à mettre à jour les photos des chambres, et à vérifier ce qu\'affichent Bing Maps et Apple Plans, souvent utilisés par une clientèle étrangère.'],
                ['secteur' => 'Cabinet de kinésithérapie, à Lyon ou à Namur', 'probleme' => 'Un patient mécontent a laissé un avis qui mentionne son traitement, et la secrétaire hésite entre répondre en détail et supprimer le compte.', 'solution' => 'Atelier sur les réponses sensibles : ne rien révéler de la prise en charge, proposer un échange privé, signaler l\'avis seulement s\'il enfreint le règlement. Le RGPD et le secret professionnel encadrent chaque mot de la réponse publique.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour votre équipe ?',
            'legende' => 'Formats proposés pour cette formation. La durée de l\'ancienne offre est conservée : une journée pour le programme complet, une demi-journée pour le format resserré sur la fiche et les avis.',
            'entetes' => ['Format', 'Pour qui', 'Durée', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Un établissement ou un réseau qui forme plusieurs personnes', '1 jour, ou deux demi-journées espacées d\'une semaine', 'Dans vos locaux, sur vos fiches, avec la direction le matin'],
                ['Inter-entreprises', 'Une ou deux personnes par structure, par exemple les membres d\'une association de commerçants', '1 jour', 'Chacun travaille sur la fiche de son propre établissement ; aucune donnée n\'est montrée au groupe'],
                ['À distance', 'Établissements éloignés de Cotonou, en Afrique ou en Europe', 'Trois ou quatre séances de deux heures environ', 'Partage d\'écran, exercices envoyés à l\'avance, séance de repli si la connexion coupe'],
                ['Formule mixte', 'Équipes peu à l\'aise avec le compte Google', 'Une demi-journée sur place, puis une séance à distance', 'Reprise de contrôle et fiche en salle, avis et statistiques à distance'],
                ['Format resserré', 'Petits commerces qui veulent d\'abord la fiche et les avis', 'Une demi-journée', 'Les bases côté site et la lecture des statistiques sont laissées de côté ou vues en suivi'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'La formation est chiffrée sur devis, après un cadrage qui commence par un regard sur votre fiche actuelle. Aucun tarif n\'est publié pour elle. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Format resserré', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée sur la fiche et les avis', 'Fiche remplie en séance', 'Lien, QR code et messages types', 'Fiche des règles à respecter']],
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Une journée, ou deux demi-journées', 'État des lieux face à trois concurrents', 'Atelier de réponses aux avis', 'Bases côté site et statistiques', 'Évaluation et attestation']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Canal direct pour les questions', 'Séance de relecture à un mois', 'Comparaison à 90 jours']],
            ],
            'variations' => [
                'Le nombre de participants et d\'établissements à traiter pendant la séance.',
                'L\'état de départ : fiche à créer, fiche à reprendre, doublons ou fiche suspendue.',
                'Le format retenu, et les déplacements hors de Cotonou pour une séance sur place.',
                'Le nombre de langues dans lesquelles l\'équipe doit répondre aux avis.',
                'L\'ajout d\'une séance de suivi ou d\'un accompagnement sur plusieurs mois.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge une partie du coût ?',
            'paragraphes' => [
                'Parfois, mais rien n\'est acquis d\'avance et aucune prise en charge n\'est promise ici. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP sur le plan de formation</a>, consultée le 5 octobre 2026, indique que toute entreprise qui justifie du paiement régulier de la taxe d\'apprentissage et de la taxe additionnelle à la formation continue peut déposer un plan, en interne, en intra, en interentreprises ou à l\'étranger. Le règlement n\'intervient qu\'après le suivi et le contrôle du fonds, puis l\'approbation de sa Commission permanente.',
                'Au Bénin, les statuts du Fonds de développement de la formation professionnelle continue et de l\'apprentissage (FODEFCA) ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> présente un guichet consacré au financement du personnel des entreprises et des membres des organisations professionnelles, avec une demande en ligne. Dans les deux cas, les conditions qui pèsent sur l\'entreprise et sur le prestataire se demandent au fonds, par écrit, avant toute signature.',
                'En France, selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, tout prestataire qui veut accéder aux fonds publics ou mutualisés, dont ceux des opérateurs de compétences, doit être certifié Qualiopi depuis le 1er janvier 2022. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds : prévoyez donc le budget sans prise en charge. Le programme écrit, les feuilles de présence et l\'évaluation remis en fin de session restent utiles pour tout dossier que vous choisiriez de déposer.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel piège guette l\'établissement quand la personne formée s\'en va ?',
            'texte' => 'Laisser la fiche rattachée à son compte personnel. Si l\'employée qui a suivi la formation est propriétaire principale avec son adresse privée, la fiche part avec elle le jour où elle quitte l\'entreprise, avis et historique compris. La règle apprise en séance est simple : le propriétaire principal est un compte de l\'entreprise, protégé par la validation en deux étapes ; la personne formée est administratrice. L\'aide de Google précise aussi qu\'un nouveau propriétaire ou administrateur doit attendre sept jours avant de pouvoir transférer la propriété principale ou retirer d\'autres utilisateurs : organisez les passations à l\'avance, pas la veille d\'un départ.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent une formation, et comment les éviter ?',
            'intro' => 'La séance met la fiche en état ; les trois mois suivants décident du résultat. Les erreurs ci-dessous sont celles qui défont le travail, souvent avec de bonnes intentions.',
            'items' => [
                ['titre' => 'Fixer un nombre d\'avis à atteindre par employé', 'texte' => 'Le règlement de Google Maps cite précisément le marchand qui demande à son personnel d\'obtenir un certain nombre d\'avis. Encouragez la demande systématique, jamais un quota, et ne récompensez pas l\'équipe au nombre d\'étoiles.'],
                ['titre' => 'La rafale, puis le silence', 'texte' => 'Trente avis la semaine qui suit la formation, puis plus rien pendant six mois : la courbe ressemble à ce qu\'elle est. Un flux de quelques avis par mois, tenu dans la durée, rassure davantage les clients.'],
                ['titre' => 'Rajouter des mots-clés au nom', 'texte' => 'Sous la pression d\'un concurrent mieux placé, quelqu\'un ajoute « pas cher » ou le nom du quartier au nom de l\'établissement. Les consignes de Google l\'interdisent et la fiche peut être suspendue. Le nom reste celui de l\'enseigne.'],
                ['titre' => 'Répondre sous le coup de la colère', 'texte' => 'Un avis injuste reçu un samedi soir appelle une réponse le lundi matin, relue par une deuxième personne. Les lecteurs jugent la réponse autant que l\'avis.'],
                ['titre' => 'Oublier les jours de fête', 'texte' => 'Tabaski, Noël, fête de l\'Indépendance, congés annuels : sans horaires exceptionnels saisis à l\'avance, la fiche annonce « ouvert » une porte fermée. Le calendrier remis en séance liste les dates à préparer.'],
                ['titre' => 'Modifier la fiche pendant la validation', 'texte' => 'Changer le nom, l\'adresse ou la catégorie en attendant un code envoyé par courrier rend ce code inutilisable, selon l\'aide de Google. On attend la validation, puis on corrige.'],
                ['titre' => 'Signaler tous les avis négatifs', 'texte' => 'Google ne supprime que les avis contraires à son règlement et demande de ne pas signaler un avis seulement parce qu\'il déplaît. Les signalements inutiles font perdre du temps ; une réponse soignée sert davantage.'],
                ['titre' => 'Croire un appel qui réclame de l\'argent', 'texte' => 'Google indique qu\'il ne demandera jamais de paiement, de numéro de carte ni de mot de passe pour la fiche. Un démarcheur qui menace de la faire disparaître n\'appelle pas de sa part.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Fiche, site, réseaux sociaux : quel rôle l\'équipe doit-elle donner à chacun ?',
            'paragraphes' => [
                'Beaucoup d\'établissements dispersent leurs efforts parce que personne n\'a fixé le rôle de chaque présence. La fiche Google répond à une intention immédiate : quelqu\'un cherche votre catégorie, maintenant, près de lui, et compare trois options avant d\'appeler. Les réseaux sociaux entretiennent l\'envie et le lien : on y découvre votre travail sans l\'avoir cherché. Le site, quand il existe, fait la démonstration complète pour ceux qui veulent en savoir plus avant de s\'engager. La formation aide chaque équipe à se situer sur cette carte.',
                'Les priorités en découlent. Une pharmacie, un restaurant ou un dépanneur vivent de la recherche immédiate : la fiche passe avant tout, et la formation peut s\'arrêter au format resserré. Une créatrice de mode ou un traiteur événementiel vivent davantage des réseaux, mais la fiche reste le filet qui rattrape ceux qui cherchent leur nom. Un cabinet ou une entreprise de services aux professionnels a besoin d\'un site solide autant que de la fiche ; la question de la prospection se travaille alors dans la formation au <a href="/formations/marketing-digital-b2b">marketing digital B2B</a>.',
                'Côté site, l\'équipe apprend seulement ce qu\'elle peut vérifier et corriger seule : une page de contact qui reprend mot pour mot le texte de référence, un numéro cliquable, la carte, le lien de la fiche vers cette page plutôt que vers une page Facebook, et le même nom partout. Tout ce qui touche au code, à la vitesse ou à l\'indexation se signale au prestataire du site ; un diagnostic complet relève de l\'<a href="/services/audit-seo-complet">audit SEO</a>. Chaque présence renvoie ensuite vers les autres : la fiche vers WhatsApp pour commander, les réseaux vers la fiche pour les avis.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, adresses, téléphone, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'La formation se pense d\'abord pour le téléphone. Selon le rapport Digital 2026 de DataReportal sur le Bénin, publié le 8 novembre 2025 avec des données d\'octobre 2025, le pays comptait 4,80 millions d\'utilisateurs d\'Internet, soit 32,2 % de la population, et 16,4 millions de connexions mobiles. Les clients cherchent sur leur smartphone, souvent avec une connexion irrégulière ; la personne formée tiendra donc la fiche depuis l\'application Google Maps autant que depuis un ordinateur. Les séances se font sur les deux, et les supports sont envoyés à l\'avance pour être lus hors ligne.',
                'Les adresses sans numéro de rue sont la règle dans bien des quartiers de Cotonou, de Lomé ou de Bamako. L\'exercice central du matin consiste donc à placer soi-même le repère sur la carte, au portail et non au milieu de la rue, puis à écrire une phrase de repère que le livreur comprend. Le téléphone demande la même rigueur : selon l\'ARCEP Bénin, les numéros du pays sont passés de huit à dix chiffres le 30 novembre 2024, par l\'ajout du préfixe 01, et s\'écrivent depuis l\'étranger +229, puis 01, puis l\'ancien numéro. Une fiche restée à huit chiffres se corrige en séance.',
                'Demander un avis par WhatsApp ou par SMS, c\'est utiliser le numéro d\'un client. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre ce traitement ; en Europe s\'applique le RGPD, le règlement (UE) 2016/679, applicable depuis le 25 mai 2018 et présenté par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">CNIL</a>. La règle enseignée est sobre : écrire seulement aux clients réels, dire pourquoi on écrit, ne pas relancer après un refus, et ne jamais publier d\'information personnelle dans une réponse.',
                'En France, la DGCCRF qualifie les faux avis de pratique commerciale trompeuse, passible de deux ans d\'emprisonnement et de 300 000 euros d\'amende, selon sa fiche pratique consultée le 5 octobre 2026. Les fonctions de Google varient aussi d\'un pays à l\'autre : l\'aide de Google Maps précise que les questions-réponses sur un lieu ne sont disponibles que dans certains pays et certaines régions. La formation montre donc ce qui existe réellement sur votre fiche, à la date de la séance, plutôt qu\'une liste générale. Elle se donne en français, ou en anglais si l\'équipe le demande.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés la personne formée doit-elle connaître ?',
            'items' => [
                ['valeur' => '7 jours', 'libelle' => 'Délai pendant lequel un nouveau propriétaire ou administrateur ne peut ni transférer la propriété principale ni retirer d\'autres utilisateurs (page consultée le 5 octobre 2026)', 'source' => 'Aide Google Business Profile, utilisateurs de la fiche', 'url' => 'https://support.google.com/business/answer/3403100?hl=fr'],
                ['valeur' => '6 jours', 'libelle' => 'Durée maximale, en jours consécutifs, d\'une période d\'horaires exceptionnels', 'source' => 'Aide Google Business Profile, horaires', 'url' => 'https://support.google.com/business/answer/6303076?hl=fr'],
                ['valeur' => '30 jours', 'libelle' => 'Durée maximale de l\'examen d\'une réponse à un avis, qui prend en général dix minutes', 'source' => 'Aide Google Business Profile, gérer les avis client', 'url' => 'https://support.google.com/business/answer/3474050?hl=fr'],
                ['valeur' => '10 avis', 'libelle' => 'Nombre d\'avis pour lesquels on peut faire appel en même temps après un signalement rejeté', 'source' => 'Aide Google Business Profile, signaler un avis', 'url' => 'https://support.google.com/business/answer/4596773?hl=fr'],
                ['valeur' => '6 mois', 'libelle' => 'Âge au-delà duquel un post est archivé, sauf si une période a été définie', 'source' => 'Aide Google Business Profile, posts', 'url' => 'https://support.google.com/business/answer/7342169?hl=fr'],
                ['valeur' => '32,2 %', 'libelle' => 'Part de la population du Bénin qui utilise Internet, données d\'octobre 2025 publiées le 8 novembre 2025', 'source' => 'DataReportal, rapport Digital 2026 sur le Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi se former à la visibilité sur Google avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il pratique ce qu\'il enseigne. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' terminée en ' . fait('formation')['annee'] . ', il met en place des fiches d\'établissement, écrit les pages de contact et les données des sites qu\'il livre, et relie la demande d\'avis aux outils de vente. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique.',
                'Il a travaillé au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada ; les pays servis figurent sur la page des <a href="/zones/">zones d\'intervention</a>. Il n\'est ni partenaire ni certifié de Google : il enseigne les règles publiées par Google, telles qu\'elles sont écrites le jour de la séance.',
                'Sa façon de former tient en quelques engagements : un cadrage avant tout devis, une séance sur votre propre fiche, une évaluation sur des tâches réelles, des supports qui restent à l\'entreprise, aucune promesse de classement, et une réponse sous 24 heures. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a> ; les autres formations du domaine sont réunies sur la page <a href="/formations/domaine/marketing-visibilite">marketing et visibilité</a>, et le catalogue complet sur la page des <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Formez la personne qui restera, gardez la propriété principale au nom de l\'entreprise, travaillez sur la vraie fiche, demandez un avis à chaque client sans contrepartie ni tri, répondez à tous dans les 48 heures, et refaites l\'état des lieux à 90 jours pour juger sur des faits.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que votre équipe tienne elle-même votre fiche Google ?',
            'texte'  => 'Indiquez le nom de l\'établissement, la ville, le nombre de personnes à former et le format souhaité. Vous recevez une réponse sous 24 heures, un premier regard sur votre fiche, puis une proposition de programme et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Nous n\'avons pas de site web : la formation a-t-elle un sens ?', 'r' => 'Oui. La fiche fonctionne sans site et suffit pour apparaître sur la carte. La partie consacrée au site devient alors un aperçu de l\'étape suivante, sans obligation, et le format resserré d\'une demi-journée peut suffire.'],
        ['q' => 'Notre fiche existe, mais nous n\'en avons pas le contrôle. Peut-on la récupérer ?', 'r' => 'Dans la plupart des cas, oui, par la procédure de revendication de Google, qui peut demander de prouver que vous gérez l\'établissement. Les éléments à préparer sont listés au cadrage, et la démarche est lancée pendant la séance.'],
        ['q' => 'Notre établissement n\'apparaît pas du tout sur Google Maps. Est-ce rattrapable ?', 'r' => 'Oui, et c\'est même le cas le plus simple : la fiche est créée proprement en séance, sans historique à corriger. Selon la méthode de validation que Google propose, elle peut être active le jour même ou après réception d\'un code par courrier, qui arrive en général sous 14 jours.'],
        ['q' => 'Peut-on acheter des avis ou offrir une remise contre un avis ?', 'r' => 'Non. Le règlement de Google Maps interdit toute contrepartie, la sollicitation des seuls clients satisfaits et les avis du personnel ou des proches. Les avis concernés sont supprimés et le compte peut être sanctionné. La formation apprend à obtenir de vrais avis, régulièrement.'],
        ['q' => 'Combien de temps faut-il pour voir un effet ?', 'r' => 'Une fiche complète et des avis réguliers produisent leurs effets sur des semaines et des mois, pas sur des heures. Google écrit qu\'aucune meilleure place ne s\'obtient sur demande ou contre rémunération : personne ne peut honnêtement promettre un délai ni une position.'],
        ['q' => 'Qui doit suivre la formation dans l\'équipe ?', 'r' => 'La personne qui tiendra la fiche chaque semaine, appelée à rester dans l\'entreprise, avec le gérant pour les décisions du matin. L\'équipe au contact des clients peut suivre une séance courte consacrée à la demande d\'avis.'],
        ['q' => 'Une entreprise sans local, qui se déplace chez ses clients, peut-elle avoir une fiche ?', 'r' => 'Oui. Google prévoit les établissements de services de proximité : la fiche affiche une zone desservie au lieu de l\'adresse. Le réglage est différent et comporte des pièges, il est traité en séance pour ce type d\'activité.'],
        ['q' => 'Que faire d\'un faux avis laissé par un concurrent ?', 'r' => 'Le signaler depuis la fiche ou l\'outil de gestion des avis, puis suivre la décision. Google ne retire que ce qui enfreint son règlement ; en cas de refus, un appel reste possible. La meilleure défense reste un flux régulier de vrais avis et une réponse calme.'],
        ['q' => 'Combien de temps faut-il y consacrer chaque semaine après la formation ?', 'r' => 'Environ une demi-heure, répartie entre un post, les réponses aux nouveaux avis, une photo récente et le contrôle des modifications proposées par le public. Le calendrier remis en séance sert à tenir ce rythme pendant les périodes chargées.'],
        ['q' => 'La formation couvre-t-elle la publicité Google Ads ?', 'r' => 'Non. Elle porte sur la visibilité gratuite : la fiche, les avis et les bases du site. La publicité payante est un autre métier, avec ses réglages et son budget, qui fait l\'objet d\'une formation distincte du catalogue.'],
        ['q' => 'Peut-on suivre la formation à distance ?', 'r' => 'Oui, en trois ou quatre séances de deux heures environ, avec partage d\'écran et exercices envoyés à l\'avance. Pour une équipe peu à l\'aise avec le compte Google, une formule mixte, avec une première demi-journée sur place, donne souvent de meilleurs résultats.'],
        ['q' => 'Combien coûte la formation, et peut-elle être financée ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants, l\'état de départ des fiches, le format et le suivi. Un fonds comme le FDFP, le FODEFCA ou le 3FPT a ses propres règles : interrogez-le par écrit avant de signer. Aucune prise en charge n\'est garantie.'],
    ],

    'sources' => [
        ['titre' => 'Aide Google Business Profile, conseils pour améliorer votre classement local sur Google', 'url' => 'https://support.google.com/business/answer/7091?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, consignes relatives à la représentation de votre établissement', 'url' => 'https://support.google.com/business/answer/3038177?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, gérer les utilisateurs de votre fiche d\'établissement', 'url' => 'https://support.google.com/business/answer/3403100?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, valider votre établissement sur Google', 'url' => 'https://support.google.com/business/answer/7107242?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Règlement relatif aux contenus ajoutés par les utilisateurs dans Maps, contenus interdits et soumis à des restrictions', 'url' => 'https://support.google.com/contributionpolicy/answer/7400114?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, conseils pour obtenir plus d\'avis', 'url' => 'https://support.google.com/business/answer/3474122?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, gérer les avis client', 'url' => 'https://support.google.com/business/answer/3474050?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, demander la suppression d\'un avis', 'url' => 'https://support.google.com/business/answer/4596773?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, créer et gérer des posts', 'url' => 'https://support.google.com/business/answer/7342169?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, définir les horaires d\'ouverture et les horaires exceptionnels', 'url' => 'https://support.google.com/business/answer/6303076?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, comprendre les performances de votre fiche', 'url' => 'https://support.google.com/business/answer/9918094?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Business Profile, appels et messages automatisés de Google', 'url' => 'https://support.google.com/business/answer/7690269?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide du compte Google, activer la validation en deux étapes', 'url' => 'https://support.google.com/accounts/answer/185839?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Maps, répondre à des questions sur un lieu', 'url' => 'https://support.google.com/maps/answer/7421661?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Blog Bing, nouvelle version de Bing Places for Business (3 octobre 2025)', 'url' => 'https://blogs.bing.com/search/2025/10/Introducing-the-New-Bing-Places-for-Business-Built-for-Business-Owners,-Powered-by-Research/', 'date' => '2026-10-05'],
        ['titre' => 'Apple Newsroom, présentation d\'Apple Business Connect (11 janvier 2023)', 'url' => 'https://www.apple.com/newsroom/2023/01/introducing-apple-business-connect/', 'date' => '2026-10-05'],
        ['titre' => 'ARCEP Bénin, passage des numéros de téléphone de 8 à 10 chiffres au 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, rapport Digital 2026 sur le Bénin (publié le 8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => 'DGCCRF, avis en ligne : attention aux faux commentaires', 'url' => 'https://www.economie.gouv.fr/dgccrf/les-fiches-pratiques/avis-en-ligne-attention-aux-faux-commentaires', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['seo-contenu', 'referencement-ia-geo', 'analytics-ga4', 'publicite-meta-google-ads', 'whatsapp-business', 'linkedin-reseaux-sociaux'],
        'services'    => ['seo-local-google-business', 'referencement-naturel-seo'],
        'comparatifs' => [],
    ],
];
