<?php
// Natitingou, Atacora. Chef-lieu du nord-ouest, porte de la Pendjari.
declare(strict_types=1);

return [
    'nom' => 'Natitingou', 'slug' => 'natitingou',
    'pays' => 'Bénin', 'pays_slug' => 'benin',
    'region' => 'Atacora', 'distance_km' => 620, 'sur_place' => false,
    'accroche' => "Sites, outils de gestion et automatisation pour les entreprises et structures de l'Atacora",
    'intro' => "Natitingou est le chef-lieu de l'Atacora et la porte d'entrée du parc de la Pendjari. Son économie repose sur trois piliers qui n'ont presque rien en commun : l'administration régionale, un tourisme saisonnier tourné vers l'international, et un commerce local qui dessert une zone rurale étendue. Une entreprise qui s'y équipe doit composer avec l'éloignement de Cotonou, une connexion moins stable qu'au sud, et une clientèle touristique qui réserve depuis l'étranger.",
    'contexte' => "La distance avec le sud du pays est la première réalité à intégrer. Faire venir un prestataire de Cotonou pour chaque ajustement n'est pas tenable, ni en coût ni en délai. Cela pousse à concevoir des outils que vous pouvez administrer vous-même, avec une formation solide au démarrage plutôt qu'une dépendance permanente. La seconde réalité est la connexion : elle fonctionne, mais elle n'a pas la stabilité de Cotonou. Tout ce qui exige un téléchargement lourd ou une session ininterrompue devient pénible, et finit par être contourné.",
    'quartiers' => [
        ["Le centre administratif", "Préfecture, services déconcentrés et structures para-publiques. Les besoins y portent sur la traçabilité des dossiers et la production d'états annuels, plus que sur la vente."],
        ["Le marché et le centre commerçant", "Commerces de détail et demi-gros qui desservent toute la zone rurale environnante. Le suivi du crédit client y est le premier chantier utile, comme partout au Bénin."],
        ["La route de la Pendjari", "Hôtels, campements et agences réceptives. Ici le sujet n'est pas l'outil interne mais la visibilité : un client qui réserve depuis Paris ou Cotonou décide avant d'arriver."],
        ["Les quartiers périphériques", "Artisans, transformateurs et petites unités de production. Des besoins simples, souvent un premier site et une présence sur Google, rarement plus au départ."],
    ],
    'concurrence' => "Il y a peu de prestataires web installés à Natitingou même. La plupart des entreprises font appel à Cotonou ou à Parakou, avec les délais que cela suppose. Cette rareté est un avantage : sur des requêtes comme votre métier suivi de Natitingou, la concurrence est faible et une page correctement construite se positionne vite.",
    'secteurs' => ["Administration et structures para-publiques", "Hôtellerie et tourisme", "Commerce de détail et demi-gros", "Artisanat et transformation", "Agriculture et coopératives", "Santé et éducation"],
    'besoins' => [
        ["Être trouvable par une clientèle qui vient de loin", "Fiche Google complète, site léger et demande de réservation en ligne. Pour un hébergement de l'Atacora, c'est le chantier au meilleur retour, loin devant tout outil interne.", "site-vitrine-professionnel"],
        ["Un outil de gestion administrable à distance", "Stock, ventes ou dossiers, accessible depuis un téléphone et que vous pouvez ajuster vous-même sans faire venir personne.", "application-web-sur-mesure"],
        ["Automatiser les relances et les rappels", "Rappels de réservation, relances d'impayés, confirmations : des tâches répétitives qui se règlent une fois pour toutes.", "automatisation-ia"],
        ["Une formation pour rester autonome", "À 620 km de Cotonou, savoir opérer soi-même n'est pas un confort, c'est une nécessité économique.", "formation-en-programmation"],
    ],
    'comparatif' => [
        ["Hébergement touristique", "Site avec demande de réservation et fiche Google", "à partir de 350 000 FCFA", "2 à 4 semaines"],
        ["Commerce de détail", "Suivi des ventes et du crédit client", "à partir de 400 000 FCFA", "3 à 5 semaines"],
        ["Structure para-publique", "Gestion de dossiers avec circuit de validation", "à partir de 600 000 FCFA", "5 à 8 semaines"],
        ["Coopérative agricole", "Collecte et suivi des adhérents, saisie hors connexion", "à partir de 600 000 FCFA", "5 à 8 semaines"],
        ["Artisan ou petite unité", "Site vitrine et présence Google", "à partir de 250 000 FCFA", "1 à 3 semaines"],
    ],
    'erreurs' => [
        ["Choisir un outil qui exige une connexion permanente", "C'est l'erreur la plus coûteuse dans l'Atacora. Un outil testé à Cotonou en fibre se comporte tout autrement ici. Je conçois pour la connexion réelle, et je teste dans les conditions de l'utilisateur avant de livrer."],
        ["Dépendre d'un prestataire à 620 km pour chaque détail", "Un changement de prix, un nouvel utilisateur, un export : ces opérations doivent être à votre portée. Sinon chaque broutille devient un déplacement ou une attente de plusieurs jours."],
        ["Négliger la fiche Google quand on vit du tourisme", "Un campement invisible sur Google perd la réservation au profit du voisin, quelle que soit la qualité de l'accueil. C'est le chantier le moins cher et le plus rentable de la zone."],
        ["Investir dans un outil interne avant d'avoir des clients", "L'ordre compte. Être trouvable d'abord, organiser ensuite. Optimiser une activité qu'on n'a pas encore est une dépense inutile."],
    ],
    'apres_livraison' => "Formation approfondie en visioconférence, documentation écrite et vidéos courtes pour les opérations courantes. L'objectif assumé est que vous n'ayez plus besoin de moi au quotidien. Pour les interventions techniques, tout se fait à distance : la distance n'a jamais empêché de corriger un bogue.",
    'budget' => "Un site vitrine démarre autour de 250 000 FCFA, un outil de gestion autour de 400 000 FCFA selon le périmètre. Les tarifs sont les mêmes qu'à Cotonou : je ne facture pas l'éloignement, puisque le travail se fait à distance de toute façon.",
    'delais' => "1 à 3 semaines pour un site vitrine, 3 à 8 semaines pour un outil de gestion. Les échanges se font par visioconférence et WhatsApp, sans que la distance allonge le calendrier.",
    'rythme' => "Un point hebdomadaire fixe et des livraisons testables toutes les deux semaines. À distance, la régularité remplace la présence : c'est elle qui construit la confiance.",
    'cas_type' => "Le cas le plus fréquent à Natitingou est celui d'un hébergement touristique qui reçoit des demandes par téléphone, aux heures ouvrables uniquement, et perd les sollicitations venues d'autres fuseaux. Une page de réservation en ligne et une fiche Google complète changent la donne avant même qu'on parle d'outil interne.",
    'pourquoi_moi' => "Je ne prétendrai pas être présent à Natitingou : je suis basé à Cotonou et les projets de l'Atacora se mènent à distance. Ce que j'apporte, c'est une conception pensée pour votre connexion et votre autonomie, plutôt qu'un outil calibré pour le confort du sud.",
    'travailler' => "Tout se déroule en visioconférence et par messagerie, avec des comptes rendus écrits à chaque étape. Un déplacement reste possible pour un projet important, mais il n'est jamais nécessaire au bon déroulement.",
    'paiement' => "Mobile Money MTN et Moov, virement bancaire ou espèces, en plusieurs tranches indexées sur les livrables.",
    'demarrer' => "Un premier échange gratuit d'une trentaine de minutes suffit à cerner le besoin et à dire si un projet se justifie. Si ce n'est pas le cas, je vous le dis.",
    'faq' => [
        ["Vous déplacez-vous jusqu'à Natitingou ?", "Rarement, et ce n'est pas nécessaire. Les projets se mènent entièrement à distance, avec des points réguliers en visioconférence. Un déplacement reste possible pour un cadrage important, mais il serait facturé et allongerait le calendrier sans améliorer le résultat."],
        ["Notre connexion est instable. Est-ce un obstacle ?", "C'est une contrainte de conception, pas un obstacle. Les outils que je livre pour l'Atacora sont légers, fonctionnent sur une connexion moyenne et, quand c'est utile, permettent une saisie hors ligne qui se synchronise ensuite."],
        ["Les tarifs sont-ils plus élevés à cause de la distance ?", "Non. Le travail se faisant à distance, il n'y a pas de coût de déplacement à répercuter. Vous payez la même chose qu'une entreprise de Cotonou."],
        ["Nous vivons du tourisme. Par quoi commencer ?", "Par la visibilité, sans hésiter. Fiche Google complète, photos réelles, page de réservation. Un outil de gestion interne n'a de sens qu'une fois les réservations en hausse."],
        ["Pouvons-nous gérer l'outil nous-mêmes ensuite ?", "C'est l'objectif explicite. Formation au démarrage, documentation écrite, et des vidéos courtes pour les opérations courantes. À 620 km, l'autonomie n'est pas une option."],
        ["Et si nous avons un problème technique urgent ?", "Les interventions se font à distance, souvent dans la journée. Un bogue se corrige sur le serveur, pas sur place : la distance ne change rien au délai de résolution."],
    ],
];
