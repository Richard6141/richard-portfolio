<?php
// Abomey-Calavi, ville de residence. Commune la plus peuplee du Benin.
return [
'nom' => 'Abomey-Calavi', 'slug' => 'abomey-calavi', 'pays' => 'Bénin', 'pays_slug' => 'benin',
'region' => 'Atlantique', 'distance_km' => 0, 'sur_place' => true,

'accroche' => 'Votre développeur web est installé ici, pas à l\'autre bout du pays',

'intro' => "Abomey-Calavi est la commune la plus peuplée du Bénin et l'une des plus jeunes : la population y a explosé en deux décennies, portée par l'université d'Abomey-Calavi et par l'étalement urbain depuis Cotonou. C'est aussi la ville où je vis et travaille. Un projet lancé ici se traite en direct, sans intermédiaire et sans décalage.",

'contexte' => "Le tissu local est fait de très petites structures en croissance rapide : écoles privées, cliniques de quartier, quincailleries, restaurants, agences immobilières. Beaucoup se créent chaque année, et la plupart démarrent sans aucune présence en ligne. La proximité de l'université alimente une demande particulière : jeunes entrepreneurs, prestataires indépendants, projets à budget serré qui ont besoin d'un premier site sérieux plutôt que d'une usine à gaz. Autre spécificité : une part importante des habitants travaille à Cotonou et vit ici. Les commerces de proximité captent donc une clientèle qui cherche le soir et le week-end, sur téléphone, souvent en déplacement, ce qui change la façon de concevoir un site.",

'quartiers' => [
    ['Godomey', "Le point de passage vers Cotonou, très commerçant : quincailleries, garages, alimentation, services. Une activité de flux, où le client cherche vite, compare peu et appelle le premier résultat crédible. La fiche Google y compte davantage que le nombre de pages du site."],
    ['Calavi centre', "Administration communale, écoles, cabinets et services. Une clientèle plus posée, qui consulte avant de se déplacer et attend des informations précises : horaires, tarifs, documents à fournir, plan d'accès."],
    ['Zogbadjè et les abords de l\'université', "Un écosystème étudiant dense : cybercafés, imprimeries, restauration, logement, prestataires indépendants. Les budgets y sont contraints mais le besoin est réel, et une landing page bien faite suffit souvent à démarrer."],
    ['Tokan, Hêvié et les zones résidentielles', "L'extension pavillonnaire de la commune. Immobilier, construction, artisanat du bâtiment, écoles privées. Les recherches sont très locales : les habitants cherchent un prestataire proche, pas la meilleure entreprise du pays."],
    ['Akassato et l\'axe nord', "Commerces de bord de route et petites unités de transformation, sur la route de Bohicon. Une visibilité qui se joue autant sur Google Maps que sur l'enseigne physique."],
],

'concurrence' => "La concurrence en ligne est nettement plus faible qu'à Cotonou, alors que la population est comparable. C'est le déséquilibre le plus intéressant du pays : beaucoup d'entreprises de Calavi ont de vrais clients et une vraie activité, mais sont introuvables sur Google. Sur des requêtes comme « école primaire privée Godomey », « plombier Calavi » ou « agence immobilière Hêvié », les résultats sont souvent vides, ou renvoient vers des annuaires génériques sans coordonnées à jour. Une fiche Google Business correctement remplie et quelques pages bien construites suffisent fréquemment à prendre la première position en quelques semaines, un résultat qui demanderait des mois à Cotonou.",

'secteurs' => ['Écoles et établissements privés', 'Cliniques et pharmacies de quartier', 'Immobilier et construction', 'Commerce de détail et quincaillerie', 'Restauration', 'Jeunes entreprises et prestataires indépendants'],

'besoins' => [
    ['Un premier site qui inspire confiance', "Pour une structure récente, le site est souvent le premier signal de sérieux. Une vitrine claire, rapide, avec les bonnes informations et une fiche Google reliée, suffit à changer la perception.", 'site-vitrine-professionnel'],
    ['Exister sur Google Maps', "Beaucoup d'entreprises de Calavi sont introuvables en ligne alors qu'elles ont des clients. Créer et optimiser la fiche Google Business est souvent l'action au meilleur rapport effort/résultat.", 'seo-local-google-business'],
    ['Gérer les inscriptions et les rendez-vous', "Écoles et cabinets perdent du temps sur des inscriptions papier ou par téléphone. Un système de réservation en ligne, avec rappels automatiques, réduit les absences et les appels.", 'systeme-de-reservation-en-ligne'],
    ['Se former plutôt que tout déléguer', "Pour ceux qui veulent tenir leur outil eux-mêmes, une formation courte au web et à la création assistée par IA permet de rester autonome au quotidien.", 'formation-en-programmation'],
],

'comparatif' => [
    ['École ou collège privé', 'Vitrine avec inscriptions en ligne et espace parents', 'à partir de 400 000 FCFA', '3 à 5 semaines'],
    ['Pharmacie ou cabinet de quartier', 'Fiche Google optimisée et vitrine simple', 'à partir de 250 000 FCFA', '2 à 3 semaines'],
    ['Agence immobilière', 'Vitrine avec catalogue de biens et formulaire de visite', 'à partir de 450 000 FCFA', '4 à 6 semaines'],
    ['Artisan ou prestataire indépendant', 'Landing page avec WhatsApp et fiche Google', 'à partir de 150 000 FCFA', '1 à 2 semaines'],
    ['Commerce de détail', 'Vitrine avec catalogue, puis boutique si le volume suit', 'à partir de 300 000 FCFA', '2 à 4 semaines'],
],

'erreurs' => [
    ['Une page Facebook en guise de site', "C'est de loin l'erreur la plus répandue à Calavi. Une page Facebook ne se référence pas sur Google, ne vous appartient pas, et disparaît si le compte est suspendu. Elle est utile en complément, jamais en remplacement : un site que vous possédez reste votre seul actif numérique durable."],
    ['Aucune fiche Google Business', "Une entreprise sans fiche n'existe pas sur Google Maps, où se font l'essentiel des recherches locales sur téléphone. La création est gratuite et prend une heure. C'est systématiquement la première chose que je vérifie avant même de parler de site."],
    ['Un numéro de téléphone qui change', "Beaucoup de petites structures changent de numéro et oublient de mettre à jour leurs supports. Le site, la fiche Google et les annuaires finissent par afficher trois numéros différents, dont deux ne répondent plus. Google le remarque, et la fiche perd en visibilité."],
    ['Vouloir tout faire d\'un coup', "Un site complet, une boutique, une application et une automatisation en même temps, avec un budget de départ limité : le projet s'enlise et rien n'aboutit. Mieux vaut lancer une landing page qui convertit, mesurer, puis investir sur ce qui fonctionne réellement."],
],

'apres_livraison' => "C'est ici que la proximité change concrètement quelque chose. À Calavi, je peux passer. Quand une formation se passe mal au téléphone, quand un employé n'arrive pas à publier une page, ou quand il faut simplement montrer une manipulation sur l'écran de la personne concernée, un rendez-vous se cale sous 48 heures et le problème se règle en une demi-heure. Vous recevez évidemment tous les accès à votre nom, hébergement, nom de domaine, base de données, et une formation est faite à la livraison pour que vous soyez autonome sur vos textes, vos prix et vos images. La maintenance reste optionnelle : forfait mensuel pour ceux qui veulent la tranquillité, appel ponctuel pour les autres. La différence avec un prestataire lointain n'est pas dans le contrat, elle est dans le fait que vous savez où me trouver.",

'budget' => "Les budgets sont ici plus contraints qu'à Cotonou, et la question n'est pas « combien coûte un site » mais « par quoi commencer avec ce que j'ai ». Ma réponse est presque toujours la même : commencez petit et solide plutôt que grand et bancal. Une landing page à 150 000 FCFA, avec un vrai texte, une fiche Google reliée et un bouton WhatsApp qui fonctionne, rapporte davantage qu'un site de quinze pages mal fini à 600 000. Elle se met en ligne en une semaine, vous voyez immédiatement si les appels arrivent, et vous investissez ensuite sur ce qui a marché. Ce qui fait vraiment varier le prix ici, c'est le nombre de fonctions qui touchent à l'argent ou aux données : encaisser un paiement, gérer des inscriptions, suivre un stock. Une vitrine informative reste dans le bas de la fourchette ; dès qu'il faut enregistrer, calculer ou encaisser, on passe au développement, et le budget change de catégorie. Le devis distingue toujours ces deux natures de travail.",

'delais' => "Sur les projets menés à Calavi, la contrainte de délai vient rarement de moi : elle vient du calendrier scolaire ou de l'ouverture d'un local. Une landing page se livre en une à deux semaines, une vitrine d'école avec inscriptions en ligne en trois à cinq, un catalogue immobilier en quatre à six. Pour une rentrée de septembre, il faut démarrer en juin au plus tard : le site doit être en ligne quand les familles comparent, pas quand elles ont déjà choisi. Le point qui allonge le plus les projets ici est la collecte des contenus, photos des locaux, liste des tarifs, textes de présentation, surtout dans les structures où une seule personne détient toute l'information et n'a pas le temps de la rédiger. Quand c'est le cas, je propose de faire un entretien d'une heure et de rédiger à partir de vos réponses : c'est plus rapide et le résultat est meilleur.",

'rythme' => "Le calendrier scolaire structure une grande partie de l'activité locale. Pour les écoles et centres de formation, tout se joue entre mai et septembre : c'est là que les familles comparent, visitent et inscrivent. Un site mis en ligne en octobre arrive un an trop tard. Pour l'immobilier et la construction, la saison sèche, de novembre à mars, concentre les chantiers et les visites. Les commerces de proximité, eux, suivent un rythme hebdomadaire plus qu'annuel : les pics sont le soir et le week-end, quand les habitants qui travaillent à Cotonou sont rentrés, ce qui rend l'affichage sur téléphone déterminant.",

'cas_type' => "Le profil que je croise le plus souvent ici : une école primaire ou un collège privé d'une centaine d'élèves, tenu par son fondateur, avec une page Facebook et un numéro WhatsApp. Les inscriptions se font sur place, sur registre papier, et chaque rentrée provoque les mêmes files d'attente et les mêmes dossiers incomplets. Le besoin exprimé est « un site », mais le vrai problème est ailleurs : les parents ne trouvent pas l'établissement sur Google quand ils cherchent une école du quartier, et l'équipe perd des journées entières sur des inscriptions manuelles. On traite donc les deux : la fiche Google et une vitrine pour être trouvé, un formulaire d'inscription en ligne pour arrêter l'engorgement de la rentrée.",

'pourquoi_moi' => "Je vis ici. Ce n'est pas une page de couverture géographique remplie pour capter une recherche : c'est ma commune, et je connais les contraintes locales, les coupures, les connexions inégales selon les quartiers, les budgets réels des structures qui démarrent. Vous parlez directement à la personne qui écrit le code, un rendez-vous se cale sous 48 heures, et aucun frais de déplacement n'est facturé.",

'travailler' => "Je suis basé à Abomey-Calavi. Un rendez-vous se cale en général sous 48 heures, sur place ou dans vos locaux. C'est la ville où le suivi est le plus direct : pour une mise en ligne, une formation ou un dépannage, je peux passer.",

'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte, PayPal ou espèces.",

'demarrer' => "Ici, le premier rendez-vous se fait presque toujours chez vous, et il se cale sous 48 heures. Une heure suffit à cerner l'essentiel : ce que vous vendez, à qui, ce qui marche déjà et ce qui vous coûte du temps. Pour une école, une clinique ou un commerce de Calavi, cette conversation débouche souvent sur un constat inattendu, le problème n'est pas l'absence de site mais l'absence de fiche Google, qui se crée gratuitement en une heure et change immédiatement la donne. Il m'arrive donc de repartir en recommandant une dépense bien plus faible que celle envisagée, voire aucune dépense dans l'immédiat. Si un projet se justifie, vous recevez un devis détaillé poste par poste, avec une version minimale et une version complète, pour que vous puissiez choisir en connaissance de cause plutôt que de vous engager sur un chiffre global. Le travail démarre ensuite par un entretien d'une heure dont je tire les textes du site : c'est plus rapide que de vous demander de rédiger, et le résultat sonne juste parce que ce sont vos mots.",

'faq' => [
    ["Êtes-vous vraiment basé à Abomey-Calavi ?", "Oui, c'est là que je vis et que je travaille. Ce n'est pas une page de couverture géographique : les rendez-vous sur place se calent sous 48 heures en général, et les interventions de formation ou de dépannage peuvent se faire dans vos locaux sans frais de déplacement."],
    ["Travaillez-vous avec de petites structures ?", "Oui, une grande partie des projets menés ici concerne des entreprises de quelques personnes. Le budget se cale sur le besoin réel : une landing page à partir de 150 000 FCFA suffit souvent à démarrer, quitte à faire évoluer l'outil ensuite par étapes."],
    ["Puis-je payer en plusieurs fois ?", "Oui. Le règlement se fait par tranches liées à l'avancement : une avance au démarrage, des versements à la validation de chaque étape, le solde à la mise en ligne. Mobile Money MTN et Moov, virement, carte, PayPal ou espèces sont acceptés."],
    ["Ma page Facebook ne suffit-elle pas ?", "Non, et c'est l'erreur la plus fréquente ici. Une page Facebook ne se référence pas sur Google, ne vous appartient pas et disparaît si le compte est suspendu. Elle reste utile en complément, mais un site que vous possédez est votre seul actif numérique durable."],
    ["Est-il plus facile d'être visible à Calavi qu'à Cotonou ?", "Nettement. La population est comparable mais la concurrence en ligne est bien moindre : beaucoup d'entreprises locales ont de vrais clients sans être trouvables sur Google. Une fiche soignée et quelques pages suffisent souvent à prendre la première place en quelques semaines."],
    ["Formez-vous à la gestion du site ?", "Oui, systématiquement, et c'est inclus à la livraison. La formation porte sur ce dont vous avez réellement besoin : modifier un texte, changer un prix, ajouter une photo, publier une actualité. À Calavi, elle se fait en présentiel, ce qui la rend nettement plus efficace."],
],
];
