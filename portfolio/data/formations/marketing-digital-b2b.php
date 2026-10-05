<?php
// ============================================================
// data/formations/marketing-digital-b2b.php · Fiche formation « Marketing
// digital B2B » (vague 1B, lot A). Aucune ancienne page. Angle propre :
// acquérir des clients professionnels, du ciblage des comptes au rendez-vous
// obtenu (offre, contenus de preuve, prospection, suivi commercial). Les
// sœurs gardent leur sujet : fiche Google (visibilite-google), citations par
// les assistants (referencement-ia-geo), profils et ligne éditoriale
// (linkedin-reseaux-sociaux), campagnes payantes (publicite-meta-google-ads),
// séquences et délivrabilité (emailing-automation), mots-clés (seo-contenu),
// mesure (analytics-ga4) ; le pipeline après le rendez-vous relève de
// crm-pipeline. Faits externes relevés le 05/10/2026 : CNIL (courrier
// électronique, téléphone, sanction KASPR, référentiel gestion commerciale,
// RGPD), loi béninoise n° 2017-20 (art. 332 à 337, PDF du SGG), loi ivoirienne
// n° 2013-546 (art. 14 et 15, PDF du Trésor), loi sénégalaise n° 2008-08
// (art. 16), LCAP canadienne (art. 10), LinkedIn (conditions, aide, Sales
// Navigator), HubSpot, Calendly, politique WhatsApp Business, Gartner (2025 et
// 2026, lus dans le navigateur), DataReportal, FDFP, FODEFCA, 3FPT, France
// Compétences. Tarifs d'Odoo : fait déjà vérifié du catalogue.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation marketing digital B2B : apprendre à vos équipes à cibler les bons comptes, à bâtir une offre et des preuves, à prospecter dans les règles et à transformer un premier échange en rendez-vous qualifié',
    'title'   => 'Formation au marketing digital B2B | Richard SALANON',
    'meta'    => 'Formation B2B pour vos équipes : cibler les bons comptes, bâtir une offre et des preuves, prospecter dans le respect du RGPD et décrocher des rendez-vous.',
    'en_bref' => 'Cette formation apprend aux dirigeants, aux équipes commerciales et marketing des entreprises qui vendent à d\'autres entreprises à trouver leurs clients avec méthode : définir les comptes à viser, écrire une offre d\'entrée claire, réunir des preuves, prospecter par e-mail, LinkedIn, téléphone ou recommandation dans le respect des lois de chaque pays, puis suivre chaque échange jusqu\'au rendez-vous. Elle dure deux jours, en quatre demi-journées, ou une journée en version resserrée, en petit groupe, sur les vrais clients et les vraies offres de l\'entreprise, sur place, à distance ou en formule mixte. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'marketing-visibilite',
    'forte'   => true,
    'duree'   => '2 jours, ou 1 jour en version resserrée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : savoir à qui vendre, à partir des clients que l\'entreprise a déjà',
            'duree'  => '3 h 30',
            'points' => [
                'Lecture des dix ou vingt meilleurs clients actuels : secteur, taille, ville, déclencheur de l\'achat, durée du cycle, personne qui a signé, raison pour laquelle ils sont restés.',
                'Rédaction du profil de compte cible : critères qui qualifient une entreprise, critères qui l\'excluent, et signaux qui montrent qu\'elle a un besoin maintenant.',
                'Le comité d\'achat d\'une entreprise cliente : qui décide, qui utilise, qui paie, qui peut bloquer ; ce que chacun veut entendre.',
                'Construction d\'une première liste de 40 à 60 comptes, avec la source de chaque information et la date à laquelle elle a été relevée.',
                'Règle de collecte posée dès le premier exercice : ce que l\'on peut noter sur une personne, d\'où cela vient, combien de temps on le garde.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : écrire l\'offre d\'entrée et réunir les preuves qui rassurent un acheteur professionnel',
            'duree'  => '3 h 30',
            'points' => [
                'Proposition de valeur par segment : le problème du client, dans ses mots, le résultat attendu, ce qui distingue l\'entreprise, ce qu\'elle ne fait pas.',
                'Offre d\'entrée à faible risque : diagnostic, atelier, audit court, essai encadré, et les conditions écrites qui l\'accompagnent.',
                'Inventaire des preuves disponibles : références autorisées, études de cas, démonstrations, certifications réelles, chiffres que l\'on peut sourcer.',
                'Atelier d\'écriture d\'une étude de cas en une page, avec l\'accord du client cité, et d\'une page d\'offre qui répond aux objections les plus fréquentes.',
                'Alignement entre le site, les documents commerciaux et ce que disent les vendeurs, pour qu\'un acheteur lise partout la même promesse.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : prospecter par e-mail, LinkedIn, téléphone et recommandation, dans les règles de chaque pays',
            'duree'  => '3 h 30',
            'points' => [
                'Choix des canaux selon le compte et le pays : adresse générique ou nominative, téléphone du standard, message LinkedIn, recommandation, salon, association professionnelle.',
                'Ce que disent les textes : RGPD et règles de la CNIL pour la prospection entre professionnels, code du numérique au Bénin, lois sur les transactions électroniques en Côte d\'Ivoire et au Sénégal, loi anti-pourriel au Canada.',
                'Règles des plateformes : conditions d\'utilisation de LinkedIn, restrictions sur les invitations, politique de consentement de WhatsApp Business.',
                'Écriture du premier message pour trois comptes réels de la liste : une raison précise d\'écrire, une idée utile, une question simple, l\'identité de l\'expéditeur et le moyen de refuser.',
                'Préparation de l\'appel : ouverture en vingt secondes, questions de découverte, réponse aux trois objections les plus courantes, proposition d\'un créneau.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : suivre chaque contact jusqu\'au rendez-vous, mesurer la semaine et évaluer les acquis',
            'duree'  => '3 h 30',
            'points' => [
                'Étapes de suivi d\'un prospect, du premier contact au rendez-vous tenu, avec une définition écrite de chaque étape partagée par le marketing et la vente.',
                'Qualification au téléphone : besoin, échéance, budget, décideur, et la décision de proposer un rendez-vous ou de revenir plus tard.',
                'Prise de rendez-vous par lien de réservation, confirmation écrite, rappel la veille, et compte rendu standard après l\'échange.',
                'Tableau de bord d\'une page, lu chaque semaine : comptes contactés, réponses, refus, rendez-vous fixés, rendez-vous tenus, prochaines actions.',
                'Évaluation : chaque participant présente sa liste, son offre, ses messages et son plan d\'actions pour les 30 jours suivants.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en quatre demi-journées, ou 1 jour en version resserrée'],
        ['l' => 'Public', 'v' => 'Dirigeants, commerciaux, responsables marketing et chargés de développement d\'entreprises qui vendent à des professionnels'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou formule mixte, en petit groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que sauront faire vos équipes à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Une entreprise qui vend à d\'autres entreprises vit souvent de son réseau : le bouche-à-oreille, deux ou trois gros clients, les relations du fondateur. Le jour où ce réseau s\'épuise, l\'équipe découvre qu\'elle ne sait pas dire à qui elle devrait écrire, ni quoi proposer en premier, ni ce qu\'elle a le droit de faire avec une adresse trouvée en ligne. Cette formation installe une méthode d\'acquisition que l\'équipe applique seule : des comptes choisis, une offre d\'entrée, des preuves, des messages respectueux et un suivi tenu jusqu\'au rendez-vous.',
                'Les objectifs se vérifient en fin de session. Chaque participant sait décrire en une page le compte cible et le comité d\'achat ; constituer une liste de comptes en notant la source de chaque donnée ; formuler une offre d\'entrée et ses conditions ; rédiger une étude de cas avec l\'accord du client ; dire, pour la France, le Bénin, la Côte d\'Ivoire, le Sénégal et le Canada, à quelle adresse il peut écrire et sous quelles conditions ; écrire un premier message et un script d\'appel ; tenir le tableau de suivi et le lire chaque semaine.',
                'La formation reste centrée sur l\'acquisition de clients professionnels. Les campagnes payantes, avec leurs réglages et leurs budgets, ont leur propre formation dans le catalogue ; il en va de même de la tenue d\'un profil et d\'une page LinkedIn avec une ligne éditoriale, des séquences d\'e-mails automatisées et de leur délivrabilité, du référencement par mots-clés et de la mesure dans Google Analytics. Après le rendez-vous, la conduite des affaires jusqu\'à la signature et le reporting commercial relèvent de la formation consacrée au pipeline et au CRM. Ici, ces sujets n\'apparaissent que pour ce qu\'ils apportent au premier rendez-vous.',
                'Deux sujets voisins ont déjà leur fiche. La visibilité locale sur Google, utile surtout aux commerces et aux services de proximité, est traitée par la formation <a href="/formations/visibilite-google">visibilité Google</a>. La manière dont ChatGPT, Gemini ou Perplexity présentent l\'entreprise à un acheteur qui se renseigne seul relève du <a href="/formations/referencement-ia-geo">référencement IA (GEO)</a>. Si vous voulez que la page d\'offre soit conçue pour vous plutôt que par l\'équipe, c\'est l\'objet du service de <a href="/services/landing-page-haute-conversion">landing page</a> ; la formation apprend à en écrire le contenu et à l\'utiliser en prospection.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit suivre la formation, avec quel niveau et quel matériel ?',
            'intro' => 'La formation s\'adresse aux entreprises dont les clients sont d\'autres organisations : PME, cabinets, éditeurs de logiciels, industriels, sociétés de services, distributeurs. Elle fonctionne le mieux quand la vente et le marketing sont dans la même salle.',
            'items' => [
                ['titre' => 'Le dirigeant d\'une petite structure', 'texte' => 'Dans une entreprise de moins de vingt personnes, c\'est souvent lui qui vend. Il décide du compte cible, de l\'offre d\'entrée et de ce que l\'entreprise refuse de faire. La version resserrée d\'une journée lui est destinée en priorité, seul ou avec son premier commercial.'],
                ['titre' => 'Les commerciaux et chargés de développement', 'texte' => 'Ce sont eux qui écrivent, appellent et relancent. Ils passent le plus de temps sur les exercices de messages, d\'appels et de suivi. La formation leur donne une liste de comptes et des textes prêts à servir le lundi suivant.'],
                ['titre' => 'Le ou la responsable marketing', 'texte' => 'Il ou elle produit les preuves, la page d\'offre et les contenus que les commerciaux envoient. La formation le met d\'accord avec la vente sur une définition commune du prospect qualifié, source de la plupart des tensions entre les deux services.'],
                ['titre' => 'L\'assistante commerciale ou la personne qui tient le fichier', 'texte' => 'Elle saisit les contacts, programme les relances et prépare les rendez-vous. Elle apprend les règles de collecte et de conservation, et la manière de tenir un fichier propre, sans doublons ni données dont personne ne connaît l\'origine.'],
                ['titre' => 'Niveau attendu', 'texte' => 'Savoir se servir d\'une messagerie, d\'un tableur et d\'un compte LinkedIn. Aucune connaissance en marketing n\'est requise. Un questionnaire de quelques minutes, au cadrage, situe chacun et permet de former des groupes de niveau proche.'],
                ['titre' => 'Ce qu\'il faut préparer', 'texte' => 'La liste des clients actuels avec leur secteur et leur chiffre d\'affaires annuel, les documents commerciaux en usage, l\'adresse du site, deux ou trois offres récemment gagnées ou perdues, et l\'accord de un ou deux clients pour servir de référence. Le détail est envoyé au cadrage.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur par participant, un téléphone, l\'accès au compte LinkedIn de chacun et au tableur ou au CRM de l\'entreprise. Aucun abonnement payant n\'est exigé : les exercices se font avec les outils gratuits ou déjà en place.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur les clients et les offres de l\'entreprise ?',
            'items' => [
                ['titre' => 'L\'autopsie des meilleurs clients', 'duree' => '45 minutes', 'texte' => 'Le groupe classe les clients actuels selon ce qu\'ils rapportent et ce qu\'ils coûtent en temps, puis cherche ce que les meilleurs ont en commun : secteur, taille, organisation, moment où ils ont acheté. L\'exercice fait souvent apparaître un segment que personne ne visait volontairement, et un autre qui consomme beaucoup d\'énergie pour peu de résultat.'],
                ['titre' => 'La fiche du compte cible', 'duree' => '45 minutes', 'texte' => 'À partir de cette lecture, chaque groupe rédige une fiche d\'une page : critères d\'entrée, critères d\'exclusion, signaux d\'achat observables (recrutement, ouverture d\'un site, nouvelle réglementation, appel d\'offres publié), personnes du comité d\'achat et objections attendues. La fiche est validée par la direction avant la suite.'],
                ['titre' => 'La liste de comptes sourcée', 'duree' => '1 heure', 'texte' => 'Chaque participant cherche des entreprises qui répondent à la fiche, dans les annuaires professionnels, les listes d\'exposants, les sites des chambres de commerce et LinkedIn. Pour chaque ligne, il note la source et la date. Les adresses nominatives ne sont relevées que là où la loi du pays le permet ; ailleurs, on note le standard ou l\'adresse générique.'],
                ['titre' => 'L\'offre d\'entrée écrite', 'duree' => '45 minutes', 'texte' => 'Le groupe transforme une prestation floue en offre que l\'acheteur peut accepter sans risque : ce qui est livré, en combien de temps, par qui, à quelles conditions, avec quelle suite possible. Le prix lui-même reste à la main de la direction ; l\'exercice porte sur la clarté de la proposition.'],
                ['titre' => 'L\'étude de cas en une page', 'duree' => '1 heure', 'texte' => 'Sur un client qui a donné son accord, chaque participant écrit la situation de départ, la décision, ce qui a été fait, ce qui a changé et ce qu\'en dit le client, sans chiffre qu\'il ne peut prouver. Les versions sont lues à voix haute et corrigées : trop de superlatifs, pas assez de faits.'],
                ['titre' => 'Les trois premiers messages', 'duree' => '1 heure', 'texte' => 'Chaque participant écrit à trois comptes réels de sa liste, par le canal autorisé : un e-mail à une adresse générique, une invitation LinkedIn personnalisée, un message après une rencontre. Le formateur relit chaque texte à l\'écran. Rien n\'est envoyé pendant la séance sans l\'accord de la direction.'],
                ['titre' => 'Le jeu de rôle téléphonique', 'duree' => '45 minutes', 'texte' => 'Par deux, l\'un appelle, l\'autre joue un directeur administratif pressé, un acheteur méfiant ou une assistante qui filtre. Chaque appel dure trois minutes, puis le groupe commente l\'ouverture, les questions et la manière de proposer un créneau. Les phrases qui marchent sont notées dans le script commun.'],
                ['titre' => 'Le tableau de suivi et l\'évaluation', 'duree' => '45 minutes', 'texte' => 'Le groupe construit le tableau de suivi dans le tableur ou le CRM de l\'entreprise, avec les étapes définies le matin, puis chaque participant y saisit ses comptes et ses prochaines actions datées. L\'évaluation porte sur ces productions, comparées aux objectifs écrits au cadrage.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qu\'est-ce qui change entre vendre à un particulier et vendre à une entreprise ?',
            'legende' => 'Différences de pratique qui structurent la formation, issues de l\'expérience de Richard SALANON. Elles valent pour la plupart des ventes entre professionnels, en Afrique francophone comme en Europe.',
            'entetes' => ['Point de comparaison', 'Vente à un particulier', 'Vente à une entreprise', 'Ce que la formation en tire'],
            'lignes'  => [
                ['Qui décide', 'Une personne, parfois un couple', 'Plusieurs personnes : celle qui utilise, celle qui paie, celle qui valide, parfois un comité', 'Cartographier le comité d\'achat avant d\'écrire le moindre message'],
                ['Durée de la décision', 'Quelques minutes à quelques jours', 'Plusieurs semaines ou mois, rythmés par les budgets et les validations', 'Suivre chaque compte dans la durée, avec une prochaine action datée'],
                ['Ce qui rassure', 'Les avis, la marque, le prix', 'Les références comparables, les études de cas, la démonstration, la solidité du fournisseur', 'Construire un dossier de preuves avant de prospecter'],
                ['Volume de cibles', 'Des milliers de personnes', 'Quelques dizaines ou centaines de comptes', 'Travailler une liste courte, compte par compte, plutôt qu\'en masse'],
                ['Cadre légal du contact', 'Consentement préalable dans la plupart des pays', 'Régime plus souple en France pour un message lié à la fonction, mais pas partout', 'Vérifier la règle du pays avant de choisir le canal'],
                ['Objet du premier contact', 'La vente', 'Un rendez-vous, un diagnostic ou un échange utile', 'Mesurer la réussite au rendez-vous obtenu, pas au nombre de messages'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et quel suivi après la session ?',
            'intro' => 'La règle de chaque séance : on travaille sur les clients, les offres et les comptes de l\'entreprise, jamais sur une société fictive. Le formateur montre peu et fait beaucoup produire.',
            'items' => [
                ['titre' => 'Des petits groupes', 'texte' => 'Chaque message et chaque fiche sont relus individuellement, ce qui impose un groupe réduit. Au-delà, il est dédoublé. En inter-entreprises, chacun travaille sur sa propre structure, et aucune liste de comptes n\'est montrée aux autres participants sans accord.'],
                ['titre' => 'Une production à la fin de chaque demi-journée', 'texte' => 'La fiche du compte cible et la liste le premier matin, l\'offre et l\'étude de cas le premier soir, les messages et le script le deuxième matin, le tableau de suivi le deuxième soir. L\'équipe repart avec un dispositif prêt à l\'emploi.'],
                ['titre' => 'Des supports qui restent à l\'entreprise', 'texte' => 'Gabarits de fiche cible, de liste de comptes, d\'offre d\'entrée, d\'étude de cas, de messages et de script d\'appel, modèle de compte rendu de rendez-vous, tableau de suivi, et une fiche datée des règles de prospection par pays, dans des formats modifiables.'],
                ['titre' => 'Les règles relues avant chaque session', 'texte' => 'Les pages de la CNIL, les textes nationaux et les conditions des plateformes sont relus avant chaque formation. La fiche des règles porte la date de cette lecture. Elle n\'est pas un avis juridique : en cas de doute, l\'entreprise consulte son conseil ou l\'autorité de protection des données de son pays.'],
                ['titre' => 'Une évaluation sur production', 'texte' => 'La réussite se juge sur la liste, l\'offre, les messages et le tableau produits par chaque participant, comparés aux objectifs du cadrage. Une attestation de formation est remise avec le résultat de cette évaluation.'],
                ['titre' => 'Un suivi en option', 'texte' => 'Une séance à distance après trente jours relit le tableau de suivi, les réponses reçues et les premiers comptes rendus de rendez-vous ; une seconde, après soixante jours, ajuste la fiche cible et l\'offre à ce que le terrain a montré. Ces séances figurent au devis si l\'entreprise les retient.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on pendant la formation, et que coûtent-ils ?',
            'legende' => 'Coûts d\'éditeur relevés le 5 octobre 2026 sur les pages officielles de LinkedIn, HubSpot, Calendly et Odoo ; ils varient selon le pays, la devise, les taxes et les promotions. Aucun abonnement payant n\'est exigé pour suivre la formation.',
            'entetes' => ['Outil', 'Usage appris en séance', 'Coût selon l\'éditeur', 'Point d\'attention'],
            'lignes'  => [
                ['Tableur (Excel ou Google Sheets)', 'Liste de comptes sourcée, tableau de suivi hebdomadaire', 'Outil déjà en place dans la plupart des entreprises', 'Un seul fichier de référence ; les formules utiles sont l\'objet de la formation <a href="/formations/excel-google-sheets">Excel et Google Sheets</a>'],
                ['LinkedIn, compte de base', 'Recherche d\'entreprises et de fonctions, invitations, messages', 'Sans frais', 'Les invitations ignorées ou signalées peuvent entraîner une restriction temporaire du compte'],
                ['LinkedIn Sales Navigator', 'Filtres de recherche, listes de comptes, alertes sur les changements de poste', 'Core à partir de 119,99 dollars par mois ou 1 079,88 dollars par an et par licence, soit 120,99 € par mois ou 1 088,88 € par an ; 50 InMails par mois', 'Utile à partir d\'un certain volume ; montré en démonstration, jamais exigé'],
                ['HubSpot', 'Fiches entreprises et contacts, transactions, activités', 'Outils gratuits à 0 €, sans carte bancaire ; formule Starter affichée à 7 € par mois et par licence en facturation annuelle, dans le cadre d\'une remise à durée limitée', 'Choisir l\'outil avant la formation, pour saisir directement les comptes de l\'exercice'],
                ['Odoo CRM', 'Pipeline des prospects pour les entreprises déjà sous Odoo', 'Une application gratuite ; Standard à 19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 €', 'Prise en main par poste dans la formation <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Calendly', 'Lien de réservation de rendez-vous envoyé au prospect', 'Formule Free sans frais, avec un type d\'événement et un calendrier ; Standard à 10 dollars par licence et par mois en facturation annuelle', 'Un lien de réservation ne remplace pas la proposition de deux créneaux précis'],
                ['WhatsApp Business (application)', 'Suivi d\'un prospect qui a donné son numéro et accepté d\'être contacté', 'Application gratuite', 'Jamais pour un premier contact non sollicité ; réglages vus dans la formation <a href="/formations/whatsapp-business">WhatsApp Business</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que disent les textes sur la prospection entre professionnels, pays par pays ?',
            'legende' => 'Lecture des textes officiels et des pages de la CNIL, faite le 5 octobre 2026 pour la formation. Ce tableau résume ; il ne remplace pas un avis juridique adapté à votre situation.',
            'entetes' => ['Pays', 'Texte', 'Message électronique à une adresse nominative', 'Ce que chaque message doit contenir'],
            'lignes'  => [
                ['France', 'Code des postes et des communications électroniques (article L34-5) et RGPD, présentés par la CNIL', 'Possible sans consentement préalable si l\'objet est en rapport avec la profession de la personne, qui doit avoir été informée et pouvoir s\'opposer facilement ; les adresses génériques de personnes morales sortent de ce cadre', 'L\'identité de l\'expéditeur et un moyen simple de refuser les envois suivants'],
                ['Bénin', 'Loi n° 2017-20 du 20 avril 2018 portant code du numérique, articles 332 à 337', 'Consentement préalable exigé pour les courriers électroniques et SMS utilisant les données d\'une personne ; exception pour les clients et des produits analogues ; sans consentement vers une personne morale si l\'adresse est impersonnelle', 'Des coordonnées valables pour demander l\'arrêt, sans dissimuler l\'expéditeur ni utiliser un objet sans rapport avec l\'offre'],
                ['Côte d\'Ivoire', 'Loi n° 2013-546 du 30 juillet 2013 relative aux transactions électroniques, articles 14 et 15', 'Interdite sans consentement préalable quand les coordonnées sont celles d\'une personne physique ; exceptions si elles ont été recueillies auprès d\'elle en connaissance de cause, ou pour des clients et des produits analogues', 'Des coordonnées valables pour demander que les envois cessent, sans autres frais que ceux de la transmission'],
                ['Sénégal', 'Loi n° 2008-08 du 25 janvier 2008 sur les transactions électroniques, article 16', 'Interdite sans consentement préalable par automate d\'appel, télécopieur ou courrier électronique pour les coordonnées d\'une personne physique ; exceptions comparables', 'Des coordonnées valables pour demander l\'arrêt, l\'identité de l\'annonceur et un objet en rapport avec l\'offre'],
                ['Canada', 'Loi canadienne anti-pourriel (L.C. 2010, ch. 23), article 10', 'Consentement tacite si l\'adresse a été publiée bien en vue, sans mention refusant les messages commerciaux, et si le message est lié aux fonctions de la personne', 'Identification de l\'expéditeur et mécanisme d\'exclusion, à vérifier sur le texte complet'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment prospecter sans abîmer la réputation de l\'entreprise ?',
            'paragraphes' => [
                'La première raison d\'être prudent n\'est pas juridique, elle est commerciale. Dans un communiqué du 25 juin 2025, Gartner indique que 73 % des acheteurs B2B interrogés évitent activement les fournisseurs qui leur envoient des sollicitations hors sujet ; l\'enquête porte sur 632 acheteurs, interrogés d\'août à septembre 2024. Un message générique envoyé à cinq cents personnes ne coûte presque rien à produire, mais il ferme des portes qu\'un message précis, envoyé à cinquante comptes bien choisis, aurait ouvertes. La formation apprend donc à écrire peu, mais juste : une raison d\'écrire à cette entreprise-là, cette semaine-là.',
                'La deuxième raison tient aux textes. En France, la CNIL admet la prospection par e-mail entre professionnels sans accord préalable, à condition que l\'objet soit lié à la fonction de la personne, qu\'elle ait été informée et qu\'elle puisse refuser. À Cotonou, Abidjan ou Dakar, les textes nationaux sont plus stricts : une adresse prénom.nom@entreprise est la coordonnée d\'une personne physique, et le consentement préalable est la règle. L\'équipe apprend à commencer par les canaux sûrs : adresse générique de la société, standard téléphonique, recommandation, rencontre lors d\'un salon, puis échange direct une fois l\'accord obtenu.',
                'La troisième raison tient aux plateformes. Les conditions d\'utilisation de LinkedIn, en vigueur depuis le 3 novembre 2025, interdisent les logiciels, extensions de navigateur et robots qui copient les profils, ajoutent des contacts ou envoient des messages de façon automatisée. L\'aide de LinkedIn précise qu\'un compte dont beaucoup d\'invitations sont ignorées ou signalées comme indésirables peut être restreint. La politique de WhatsApp Business, mise à jour le 23 septembre 2026, n\'autorise à contacter une personne que si elle a fourni son numéro et donné son consentement explicite. Les exercices respectent ces trois cadres.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés vos équipes doivent-elles connaître ?',
            'items' => [
                ['valeur' => '67 %', 'libelle' => 'Part des acheteurs B2B qui disent préférer un parcours d\'achat sans commercial ; enquête menée auprès de 646 acheteurs d\'août à septembre 2025, publiée le 9 mars 2026', 'source' => 'Gartner, communiqué du 9 mars 2026', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2026-03-09-gartner-sales-survey-finds-67-percent-of-b2b-buyers-prefer-a-rep-free-experience'],
                ['valeur' => '45 %', 'libelle' => 'Part des acheteurs B2B de la même enquête qui ont utilisé l\'IA lors d\'un achat récent', 'source' => 'Gartner, communiqué du 9 mars 2026', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2026-03-09-gartner-sales-survey-finds-67-percent-of-b2b-buyers-prefer-a-rep-free-experience'],
                ['valeur' => '69 %', 'libelle' => 'Part des acheteurs B2B qui relèvent des incohérences entre le site du fournisseur et ce que disent ses commerciaux (enquête d\'août à septembre 2024)', 'source' => 'Gartner, communiqué du 25 juin 2025', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2025-06-25-gartner-sales-survey-finds-61-percent-of-b2b-buyers-prefer-a-rep-free-buying-experience'],
                ['valeur' => '3 ans', 'libelle' => 'Durée de conservation des données d\'un prospect non client, à compter de leur collecte ou du dernier contact venant de lui ; une simple ouverture d\'e-mail ne compte pas comme contact', 'source' => 'CNIL, référentiel sur la gestion des activités commerciales', 'url' => 'https://www.cnil.fr/sites/cnil/files/atoms/files/referentiel_traitements-donnees-caractere-personnel_gestion-activites-commerciales.pdf'],
                ['valeur' => '240 000 €', 'libelle' => 'Amende prononcée le 5 décembre 2024 contre KASPR, dont l\'extension de navigateur collectait des coordonnées sur LinkedIn, y compris celles que les membres avaient choisi de masquer', 'source' => 'CNIL, sanction publiée le 19 décembre 2024', 'url' => 'https://www.cnil.fr/fr/aspiration-de-donnees-sanction-de-240-000-euros-lencontre-de-la-societe-kaspr'],
                ['valeur' => '1,80 million', 'libelle' => 'Membres inscrits sur LinkedIn en Côte d\'Ivoire fin 2025, soit 10,4 % des adultes ; il s\'agit de comptes inscrits, pas d\'utilisateurs actifs', 'source' => 'DataReportal, Digital 2026 Côte d\'Ivoire (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Cabinet d\'expertise comptable, à Cotonou', 'probleme' => 'Toute la clientèle vient des relations des associés ; le cabinet veut des PME structurées, mais ses rares tentatives de prospection sont des plaquettes envoyées à des adresses Gmail de dirigeants.', 'solution' => 'Fiche cible centrée sur les PME de dix à cinquante salariés qui changent d\'organisation, offre d\'entrée sous forme de diagnostic de la tenue comptable, étude de cas écrite avec un client d\'accord, prospection par les adresses génériques des sociétés, les associations professionnelles et les recommandations, comme le permet le code du numérique.'],
                ['secteur' => 'Éditeur de logiciel de gestion scolaire, à Abidjan', 'probleme' => 'Les démonstrations sont nombreuses, les signatures rares : le commercial présente le logiciel au directeur des études, alors que le fondateur et la comptable décident.', 'solution' => 'Cartographie du comité d\'achat d\'un groupe scolaire, message adapté à chaque rôle, visite d\'une école utilisatrice organisée avec son accord, et calendrier de prospection calé sur la période où les écoles préparent leur rentrée.'],
                ['secteur' => 'Société de maintenance industrielle, à Dakar', 'probleme' => 'L\'équipe appelle les usines au hasard et tombe sur des standards qui filtrent ; personne ne sait qui gère la maintenance sur chaque site.', 'solution' => 'Liste de quarante sites industriels sourcée, recherche des responsables techniques sur LinkedIn, invitations personnalisées sans outil d\'automatisation, script d\'appel tourné vers un diagnostic sur site, et suivi hebdomadaire des rendez-vous tenus.'],
                ['secteur' => 'Commissionnaire en douane et transitaire, à Lomé', 'probleme' => 'L\'entreprise a de bons délais de traitement, mais rien pour le prouver ; ses concurrents promettent tous la même chose.', 'solution' => 'Construction d\'un dossier de preuves : délais constatés sur ses propres dossiers, présentés avec leur période de référence, deux études de cas d\'importateurs qui ont accepté d\'être cités, page d\'offre en français et en anglais pour les clients des pays voisins.'],
                ['secteur' => 'Société de services informatiques, à Liège', 'probleme' => 'Un commercial a importé dans le CRM une liste achetée et des contacts extraits de LinkedIn par une extension, sans savoir d\'où viennent les données.', 'solution' => 'Tri du fichier selon l\'origine des données, information des personnes conservées au plus tard au premier message, comme l\'exige l\'article 14 du RGPD, suppression du reste, puis prospection de comptes choisis avec un message lié à la fonction de chaque destinataire.'],
                ['secteur' => 'Fabricant d\'emballages alimentaires, en Auvergne-Rhône-Alpes', 'probleme' => 'Depuis le 11 août 2026, l\'équipe croit qu\'elle ne peut plus téléphoner à aucun prospect et a cessé toute prospection.', 'solution' => 'Lecture de la page de la CNIL : le consentement préalable vise les consommateurs, tandis qu\'un acheteur en entreprise peut être appelé si l\'appel porte sur sa profession, s\'il a été informé et peut s\'y opposer. Reprise des appels vers les responsables achats des industriels de l\'agroalimentaire, avec un fichier des oppositions tenu à jour.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour votre équipe ?',
            'legende' => 'Formats proposés pour cette formation. Le programme complet représente deux journées, réparties selon le format retenu.',
            'entetes' => ['Format', 'Pour qui', 'Durée', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe commerciale et marketing qui vend la même offre', '2 jours, consécutifs ou espacés d\'une semaine', 'Dans vos locaux, sur vos clients et vos comptes, avec la direction pour la fiche cible et l\'offre'],
                ['Inter-entreprises', 'Un ou deux participants par structure, dirigeants ou commerciaux', '2 jours', 'Chacun travaille sur sa propre entreprise ; les listes de comptes restent confidentielles'],
                ['À distance', 'Équipes éloignées de Cotonou, en Afrique, en Europe ou au Canada', 'Cinq séances de deux heures et demie environ', 'Partage d\'écran, gabarits envoyés à l\'avance, exercices de prospection entre deux séances'],
                ['Formule mixte', 'Équipes qui veulent les jeux de rôle en salle', 'Une journée sur place, puis des séances à distance', 'Cible, offre et appels en salle ; messages et suivi à distance'],
                ['Version resserrée', 'Dirigeant de petite structure, consultant indépendant', '1 jour', 'Fiche cible, offre d\'entrée, premiers messages ; le suivi se voit en séance optionnelle'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'La formation est chiffrée sur devis ; aucun tarif n\'est publié pour elle. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Version resserrée', 'prix' => 'Sur devis', 'inclus' => ['Une journée', 'Fiche du compte cible', 'Offre d\'entrée écrite', 'Trois premiers messages relus', 'Fiche des règles de prospection par pays']],
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Deux journées, ou leur équivalent à distance', 'Liste de comptes sourcée', 'Étude de cas et page d\'offre', 'Jeux de rôle téléphoniques', 'Tableau de suivi, évaluation et attestation']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Revue du tableau de suivi à 30 jours', 'Ajustement de la cible et de l\'offre à 60 jours', 'Relecture de messages entre les séances']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le nombre d\'offres et de segments travaillés pendant la session.',
                'Le nombre de pays visés, donc de régimes juridiques à présenter en détail.',
                'L\'outil de suivi : tableur, HubSpot, Odoo ou Dolibarr, et sa préparation avant la séance.',
                'Le format retenu et les déplacements hors de Cotonou pour une séance sur place.',
                'L\'ajout des séances de suivi à 30 et 60 jours.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge une partie de la session ?',
            'paragraphes' => [
                'Peut-être, selon le pays et le dossier ; aucune prise en charge n\'est promise ici. En Côte d\'Ivoire, la <a href="https://fdfp.ci/plan-de-formation/">page du FDFP sur le plan de formation</a>, consultée le 5 octobre 2026, cite parmi les actions possibles le perfectionnement, qui améliore les acquis des salariés dans leur spécialité, et admet les sessions intra conduites par un intervenant extérieur. Elle réserve le dépôt d\'un plan aux entreprises qui justifient du paiement régulier des deux taxes, et le règlement intervient après le suivi et le contrôle du fonds, puis l\'approbation de sa Commission permanente.',
                'Au Bénin, le Fonds de développement de la formation professionnelle continue et de l\'apprentissage a vu ses statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> propose un guichet pour le financement du personnel des entreprises et des membres des organisations professionnelles. Les conditions exigées de l\'entreprise et du prestataire changent d\'un fonds à l\'autre : demandez-les par écrit, avant de signer, et joignez-y le programme détaillé de cette page.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, dont ceux des opérateurs de compétences. Richard SALANON ne détient ni cette certification ni l\'agrément d\'un fonds africain : le budget se prévoit donc sans prise en charge. Le programme écrit, les feuilles d\'émargement et l\'évaluation remis en fin de session servent néanmoins aux dossiers internes de l\'entreprise.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel piège guette une équipe qui veut des résultats rapides ?',
            'texte' => 'Acheter un fichier ou installer une extension qui « trouve les e-mails » sur LinkedIn, puis envoyer le même message à des centaines de personnes. Le 5 décembre 2024, la CNIL a sanctionné de 240 000 euros la société KASPR, dont l\'extension collectait des coordonnées sur LinkedIn, y compris celles que les membres avaient choisi de masquer, et les conservait trop longtemps. Les conditions de LinkedIn interdisent ces outils, et au Bénin, en Côte d\'Ivoire ou au Sénégal, écrire à une adresse nominative sans consentement expose l\'expéditeur aux sanctions prévues par la loi. La règle enseignée : connaître l\'origine de chaque donnée, informer la personne au plus tard au premier message, et préférer cinquante comptes choisis à mille adresses inconnues.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent une formation, et comment les éviter ?',
            'intro' => 'La session met en place la méthode ; ce sont les deux mois suivants qui décident si elle produit des rendez-vous. Voici les dérives les plus fréquentes, et le réflexe qui les prévient.',
            'items' => [
                ['titre' => 'Élargir la cible dès la première semaine sans réponse', 'texte' => 'Faute de réponses rapides, l\'équipe ajoute des secteurs et des tailles d\'entreprise. La liste grossit, les messages deviennent génériques et les réponses baissent encore. La fiche cible se revoit après un nombre suffisant de contacts, lors de la séance prévue à 60 jours, pas au bout de quelques jours.'],
                ['titre' => 'Parler de l\'entreprise au lieu du client', 'texte' => 'Le premier message redevient une plaquette : historique, valeurs, liste des services. L\'acheteur cherche une raison de répondre qui le concerne. Chaque message garde la structure apprise : pourquoi ce compte, ce qui peut l\'intéresser, une question simple.'],
                ['titre' => 'Relancer sans fin', 'texte' => 'Une personne qui ne répond pas après plusieurs relances espacées a donné une réponse. Insister davantage abîme la réputation et, s\'il y a eu refus, enfreint le droit d\'opposition. Le tableau de suivi fixe un nombre de relances et une date d\'arrêt.'],
                ['titre' => 'Promettre des résultats que l\'entreprise ne peut pas prouver', 'texte' => 'Pour décrocher un rendez-vous, un commercial annonce des économies ou des délais sans fondement. Le prospect les retrouvera dans la proposition, ou constatera leur absence. Les chiffres viennent du dossier de preuves, avec leur période de référence.'],
                ['titre' => 'Laisser le site contredire les commerciaux', 'texte' => 'L\'offre a été réécrite en formation, mais le site affiche encore l\'ancienne. Selon le communiqué de Gartner du 25 juin 2025, 69 % des acheteurs B2B relèvent des incohérences entre le site d\'un fournisseur et ce que disent ses vendeurs. La page d\'offre se met à jour dans la semaine.'],
                ['titre' => 'Garder les prospects indéfiniment', 'texte' => 'Le fichier accumule des contacts de plusieurs années. Le référentiel de la CNIL sur la gestion commerciale fixe trois ans à compter de la collecte ou du dernier contact venant du prospect. Une revue trimestrielle supprime ce qui a expiré et enregistre les oppositions.'],
                ['titre' => 'Mesurer les messages au lieu des rendez-vous', 'texte' => 'Le tableau de bord célèbre le nombre d\'e-mails envoyés. L\'indicateur qui compte est le rendez-vous tenu avec une personne du comité d\'achat. Les autres chiffres servent à comprendre où le parcours se bloque.'],
                ['titre' => 'Confier la prospection au seul stagiaire', 'texte' => 'La personne la moins expérimentée reçoit la liste et les scripts, sans appui. Elle s\'épuise et part avec ce qu\'elle a appris. La prospection reste une responsabilité de la direction commerciale, avec un point hebdomadaire.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Réseaux, langues, données personnelles : que change le contexte local pour la prospection ?',
            'paragraphes' => [
                'LinkedIn n\'a pas partout le même poids. Selon les rapports Digital 2026 de DataReportal, publiés le 8 novembre 2025 avec des données de fin 2025, LinkedIn comptait 1,80 million de membres inscrits en Côte d\'Ivoire, 1,50 million au Sénégal et 660 000 au Bénin, soit 8,5 % des adultes béninois. Ce sont des comptes inscrits, pas des utilisateurs actifs. Pour une PME de Cotonou, les directeurs financiers d\'une banque ou d\'un groupe y sont souvent ; le gérant d\'une entreprise de vingt personnes, moins sûrement. La formation apprend à vérifier, compte par compte, où se trouvent réellement les décideurs.',
                'En Afrique francophone, la relation d\'affaires se poursuit très souvent sur WhatsApp. C\'est un excellent canal de suivi, à une condition : que le prospect ait donné son numéro et accepté d\'être contacté, comme l\'exige la politique de WhatsApp Business. Le premier contact passe par le standard, une adresse de société, une rencontre ou une recommandation ; WhatsApp vient ensuite, quand l\'acheteur le propose. Les règles de vente et d\'organisation sur l\'application sont l\'objet de la formation <a href="/formations/whatsapp-business">WhatsApp Business</a>, et son raccordement aux logiciels de gestion celui de la formation <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>.',
                'Les adresses posent un problème particulier. Dans beaucoup de petites entreprises, le dirigeant utilise une adresse Gmail ou Yahoo personnelle comme adresse professionnelle. Au regard du code du numérique béninois ou des lois ivoirienne et sénégalaise, c\'est la coordonnée d\'une personne physique, qui demande un consentement préalable, alors que l\'adresse contact@ d\'une société est impersonnelle. Au Bénin, l\'article 337 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20</a> prévoit de trente jours à six mois d\'emprisonnement et de 50 000 à 500 000 francs CFA d\'amende pour une prospection non autorisée.',
                'La langue suit le marché visé. Un distributeur de Douala prospecte en français et en anglais, un cabinet de Genève en français et en allemand, un éditeur de Cotonou qui vise le Nigeria ou le Ghana en anglais. Chaque langue a ses propres messages, relus par une personne qui la parle couramment plutôt que traduits d\'un bloc. En Europe, le RGPD s\'applique aux données des prospects, et le texte de son article 14, publié par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">CNIL</a>, impose d\'informer la personne au plus tard lors du premier message quand ses coordonnées n\'ont pas été recueillies auprès d\'elle.',
                'L\'IA est utile à chaque étape : résumer le site d\'un compte, préparer des questions de découverte, proposer trois versions d\'un message. Gartner relève, dans son communiqué du 9 mars 2026, que 45 % des acheteurs B2B interrogés ont eux-mêmes utilisé l\'IA lors d\'un achat récent. Mais un message entièrement généré se reconnaît, et coller une liste de prospects dans un assistant grand public pose une question de données personnelles. La formation montre les bons usages ; leur pratique quotidienne relève de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>, et leur cadre juridique de la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes au marketing B2B avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Ses clients sont des entreprises, des cabinets et des organisations : il connaît de l\'intérieur un cycle de vente entre professionnels, du premier échange au cadrage puis au devis. Il conçoit des pages d\'offre, relie les formulaires et WhatsApp aux CRM, déploie Odoo et Dolibarr, dont les modules de suivi des prospects servent de terrain d\'exercice. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' achevée en ' . fait('formation')['annee'] . ', il a créé <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Il a travaillé, sur place ou à distance, au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada, ce qui explique la place donnée aux règles de plusieurs pays. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique. Il n\'est ni partenaire ni certifié de LinkedIn, de HubSpot ou d\'un autre éditeur, et n\'est pas juriste : il présente les textes tels qu\'ils sont publiés le jour de la séance.',
                'Ses engagements : un cadrage avant tout devis, une session sur vos clients et vos offres, une évaluation sur production, des supports qui restent chez vous, aucune promesse de chiffre d\'affaires ni de nombre de rendez-vous, et une réponse sous 24 heures. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a> ; les formations voisines sur la page <a href="/formations/domaine/marketing-visibilite">marketing et visibilité</a> et dans le <a href="/formations/">catalogue des formations</a> ; le choix d\'un logiciel de suivi dans le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a> ; les pays servis sur la page des <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Le marketing B2B qui produit des rendez-vous repose sur peu de choses, tenues dans la durée : une cible écrite à partir des meilleurs clients, une offre d\'entrée sans risque, des preuves vérifiables, des messages précis envoyés par le canal que la loi du pays autorise, et un suivi hebdomadaire jugé au nombre de rendez-vous tenus.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe sait-elle à quels comptes écrire lundi prochain ?',
            'texte'  => 'Indiquez votre secteur, les pays que vous visez, le nombre de personnes à former, leurs fonctions et le format souhaité. Vous recevez une réponse sous 24 heures, puis une proposition de programme bâtie sur vos clients et vos offres, et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Quelle différence avec les formations LinkedIn, emailing ou publicité du catalogue ?', 'r' => 'Celle-ci part du client à trouver : quels comptes viser, quelle offre leur proposer, quelles preuves montrer, par quel canal les contacter et comment suivre l\'échange jusqu\'au rendez-vous. Les autres approfondissent un outil : la ligne éditoriale sur LinkedIn, les séquences et la délivrabilité des e-mails, les campagnes payantes. Elles se complètent bien après celle-ci.'],
        ['q' => 'Faut-il déjà avoir un CRM pour suivre la formation ?', 'r' => 'Non. Un tableur suffit pour commencer, et le tableau de suivi y est construit en séance. Si l\'entreprise utilise déjà HubSpot, Odoo ou Dolibarr, les exercices se font directement dans l\'outil, à condition que les accès soient prêts le jour de la formation.'],
        ['q' => 'Peut-on envoyer des e-mails de prospection à des professionnels sans leur accord ?', 'r' => 'Cela dépend du pays. En France, la CNIL l\'admet si le message est lié à la fonction de la personne, qu\'elle a été informée et peut refuser. Au Bénin, en Côte d\'Ivoire et au Sénégal, une adresse nominative demande en principe un consentement préalable ; l\'adresse impersonnelle d\'une société est traitée différemment au Bénin. La formation détaille ces règles pays par pays.'],
        ['q' => 'Peut-on acheter un fichier de prospects ?', 'r' => 'C\'est risqué. Il faut savoir d\'où viennent les données, si les personnes ont été informées ou ont consenti selon la loi du pays, et depuis quand elles figurent dans le fichier. Faute de réponses claires, mieux vaut construire une liste courte et sourcée, comme on l\'apprend en séance.'],
        ['q' => 'Peut-on prospecter par WhatsApp ?', 'r' => 'Pas pour un premier contact non sollicité. La politique de WhatsApp Business exige que la personne ait fourni son numéro et accepté d\'être contactée. WhatsApp devient un très bon canal de suivi une fois cet accord obtenu, par exemple après un appel ou une rencontre.'],
        ['q' => 'Combien de rendez-vous peut-on espérer après la formation ?', 'r' => 'Personne ne peut l\'annoncer honnêtement : cela dépend du marché, de l\'offre, de la notoriété de l\'entreprise et du temps consacré à la prospection. La formation installe une méthode et un tableau de suivi qui montrent, semaine après semaine, ce qui fonctionne et ce qu\'il faut corriger.'],
        ['q' => 'Les commerciaux et le marketing doivent-ils suivre la formation ensemble ?', 'r' => 'C\'est préférable. La définition du prospect qualifié, l\'offre d\'entrée et les preuves se décident à deux ; quand chaque service les fixe seul, les contacts transmis par le marketing ne sont pas rappelés, et les commerciaux réclament des contenus que personne ne produit.'],
        ['q' => 'Faut-il payer LinkedIn Sales Navigator ?', 'r' => 'Non pour la formation. Le compte de base permet de chercher des entreprises et des fonctions et d\'envoyer des invitations. Sales Navigator Core coûtait, le 5 octobre 2026, à partir de 119,99 dollars par mois et par licence selon la page de LinkedIn ; il devient utile quand le volume de comptes suivis augmente.'],
        ['q' => 'Peut-on utiliser l\'IA pour écrire les messages de prospection ?', 'r' => 'Oui, pour préparer et varier les textes, à condition de relire, d\'ajouter ce qui concerne vraiment le compte et de ne pas confier de données personnelles de prospects à un assistant grand public. L\'automatisation de l\'envoi sur LinkedIn, elle, est interdite par ses conditions d\'utilisation.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en cinq séances de deux heures et demie environ, avec partage d\'écran et exercices de prospection entre deux séances. Les jeux de rôle téléphoniques fonctionnent aussi en visioconférence, même si une journée sur place leur donne plus de rythme.'],
        ['q' => 'Combien coûte la formation, et un fonds peut-il la financer ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants, d\'offres et de pays visés, le format et le suivi retenu. Le FDFP, le FODEFCA ou le 3FPT ont leurs propres conditions : interrogez-les par écrit avant de signer. Aucune prise en charge n\'est garantie.'],
        ['q' => 'Que se passe-t-il après la formation ?', 'r' => 'L\'équipe applique le plan de 30 jours écrit en séance. En option, une revue à 30 jours relit le tableau de suivi et les premiers comptes rendus, et une seconde à 60 jours ajuste la cible et l\'offre. Un canal direct reste ouvert pour les questions d\'application.'],
    ],

    'sources' => [
        ['titre' => 'CNIL, la prospection commerciale par courrier électronique (mise à jour du 10 juin 2026)', 'url' => 'https://www.cnil.fr/fr/la-prospection-commerciale-par-courrier-electronique', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, prospection commerciale par téléphone (hors automate d\'appel) : quelles sont les règles ? (mise à jour du 10 juin 2026)', 'url' => 'https://www.cnil.fr/fr/prospection-commerciale-par-telephone-hors-automate-dappel-quelles-sont-les-regles', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, aspiration de données : sanction de 240 000 euros à l\'encontre de la société KASPR', 'url' => 'https://www.cnil.fr/fr/aspiration-de-donnees-sanction-de-240-000-euros-lencontre-de-la-societe-kaspr', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, référentiel relatif aux traitements de données mis en œuvre aux fins de gestion des activités commerciales', 'url' => 'https://www.cnil.fr/sites/cnil/files/atoms/files/referentiel_traitements-donnees-caractere-personnel_gestion-activites-commerciales.pdf', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, texte du RGPD, chapitre III (articles 14 et 21)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 332 à 337)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Direction générale du Trésor de Côte d\'Ivoire, loi n° 2013-546 du 30 juillet 2013 relative aux transactions électroniques (articles 14 et 15)', 'url' => 'https://decfinex.tresor.gouv.ci/decfinex/textes/s-d_lutte-crim-finance/lois-reglements/2013-546-Transactions-electroniques.pdf', 'date' => '2026-10-05'],
        ['titre' => 'WIPO Lex, Sénégal, loi n° 2008-08 du 25 janvier 2008 sur les transactions électroniques (article 16)', 'url' => 'https://www.wipo.int/wipolex/en/legislation/details/10283', 'date' => '2026-10-05'],
        ['titre' => 'Justice Canada, Loi canadienne anti-pourriel (L.C. 2010, ch. 23), article 10', 'url' => 'https://laws-lois.justice.gc.ca/fra/lois/E-1.6/section-10.html', 'date' => '2026-10-05'],
        ['titre' => 'LinkedIn, conditions d\'utilisation (en vigueur le 3 novembre 2025), section 8.2', 'url' => 'https://www.linkedin.com/legal/user-agreement', 'date' => '2026-10-05'],
        ['titre' => 'Aide LinkedIn, types de restrictions pour l\'envoi d\'invitations', 'url' => 'https://www.linkedin.com/help/linkedin/answer/a551012/types-of-restrictions-for-sending-invitations', 'date' => '2026-10-05'],
        ['titre' => 'LinkedIn Sales Navigator, comparer les abonnements et tarifs', 'url' => 'https://business.linkedin.com/fr-fr/sales-solutions/compare-plans', 'date' => '2026-10-05'],
        ['titre' => 'HubSpot, tarifs (page en français)', 'url' => 'https://www.hubspot.fr/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Calendly, tarifs', 'url' => 'https://calendly.com/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp Business, politique de messagerie (mise à jour du 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'Gartner, 61 % des acheteurs B2B préfèrent un achat sans commercial (communiqué du 25 juin 2025)', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2025-06-25-gartner-sales-survey-finds-61-percent-of-b2b-buyers-prefer-a-rep-free-buying-experience', 'date' => '2026-10-05'],
        ['titre' => 'Gartner, 67 % des acheteurs B2B préfèrent un parcours sans commercial (communiqué du 9 mars 2026)', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2026-03-09-gartner-sales-survey-finds-67-percent-of-b2b-buyers-prefer-a-rep-free-experience', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Côte d\'Ivoire (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Sénégal (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-senegal', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Bénin (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['linkedin-reseaux-sociaux', 'emailing-automation', 'publicite-meta-google-ads', 'seo-contenu', 'crm-pipeline', 'referencement-ia-geo'],
        'services'    => ['landing-page-haute-conversion', 'referencement-naturel-seo'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
