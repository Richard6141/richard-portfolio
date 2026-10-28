<?php
// Formation IA x Lausanne. Bloc local ajoute le 21/08/2026: le premier
// jet plafonnait à 86 % de vocabulaire commun entre villes, le générique
// écrasant le local.
declare(strict_types=1);

return array (
  'slug' => 'formation-ia-entreprise-lausanne',
  'robots' => 'noindex',  // 28/10/2026 : page quasi jumelle des autres villes (ressemblance de 68 à 91 %), hors sitemap jusqu'à sa réécriture.
  'ville' => 'Lausanne',
  'ville_slug' => 'lausanne',
  'pays' => 'Suisse',
  'titre' => 'Formation IA en entreprise à Lausanne',
  'accroche' => 'Former vos équipes sur vos vrais documents, pas sur des exercices de démonstration.',
  'intro' => 'La majorité des formations à l\'intelligence artificielle échouent pour la même raison: elles montrent des outils au lieu de résoudre un problème. Une équipe qui a vu une démonstration impressionnante retourne à ses habitudes la semaine suivante. Je travaille l\'inverse: on part de deux ou trois tâches que vos équipes de Lausanne répètent chaque semaine, et on les traite pendant la formation, sur vos vrais documents. Ce qui est produit ce jour-là est utilisable dès le lendemain.',
  'sections' => 
  array (
    0 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Cas d\'usage',
      'titre' => 'Ce que l\'IA change concrètement à Lausanne.',
      'items' => 
      array (
        0 => 'Accélérer la rédaction technique et la documentation produit.',
        1 => 'Automatiser le support de premier niveau sur les questions récurrentes.',
        2 => 'Préparer des supports d\'investisseurs à partir de données internes.',
      ),
    ),
    1 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Réalité locale',
      'titre' => 'Ce qui freine l\'adoption à Lausanne',
      'paragraphes' => 
      array (
        0 => 'Dans les startups et les éditeurs, l\'IA est déjà présente mais souvent mal encadrée: chacun l\'utilise à sa façon, y compris sur du code ou des données clients. Le premier travail est de poser des règles communes avant que les pratiques divergent trop.',
        1 => 'Le deuxième frein est le temps: une équipe en phase de développement produit n\'a pas de créneau évident pour se former. Les sessions courtes, ciblées sur un usage précis, passent mieux qu\'un programme complet.',
        2 => 'Le troisième est la propriété intellectuelle. Ce qu\'on confie à un assistant sur un produit en cours de développement mérite une réflexion préalable, particulièrement avant une levée de fonds ou un dépôt.',
      ),
    ),
    2 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Programmes',
      'titre' => 'Quatre formats, selon votre point de départ.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'Prise en main des assistants',
          'texte' => 'ChatGPT, Claude et Gemini: ce qu\'ils savent faire, ce qu\'ils inventent, et comment vérifier. Une demi-journée, sans prérequis technique.',
        ),
        1 => 
        array (
          'titre' => 'Rédiger de bonnes consignes',
          'texte' => 'La compétence qui sépare un usage décevant d\'un usage utile. On travaille sur vos propres documents, pas sur des exercices.',
        ),
        2 => 
        array (
          'titre' => 'Automatiser avec l\'IA',
          'texte' => 'Relier un assistant à vos outils via n8n: tri de messages, extraction de données, rédaction de réponses. Le niveau ou l\'IA cesse d\'être un gadget.',
        ),
        3 => 
        array (
          'titre' => 'Cadrer les usages pour les dirigeants',
          'texte' => 'Ce qu\'on autorise, ce qu\'on interdit, quelles données ne sortent jamais. Une demi-journée qui évite des incidents coûteux.',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'liste',
      'etiquette' => 'Tarifs',
      'titre' => 'Formats et tarifs indicatifs.',
      'items' => 
      array (
        0 => 'Atelier découverte, une demi-journée, jusqu\'à 12 personnes: à partir de 150 000 FCFA.',
        1 => 'Formation complète, deux jours, jusqu\'à 10 personnes: à partir de 450 000 FCFA.',
        2 => 'Accompagnement mensuel, une demi-journée par mois pendant trois mois: à partir de 350 000 FCFA.',
        3 => 'Session dirigeants, deux heures: à partir de 100 000 FCFA. Les tarifs hors Afrique sont établis après cadrage.',
      ),
    ),
    4 => 
    array (
      'type' => 'prose',
      'etiquette' => 'Le tissu local',
      'titre' => 'Avec quelles structures de Lausanne je travaille.',
      'paragraphes' => 
      array (
        0 => 'A Lausanne, les organisations qui tirent le meilleur parti d\'une formation IA sont les startups, éditeurs de logiciels et PME romandes. Le critère n\'est pas la taille ni le niveau technique: c\'est d\'avoir des tâches répétitives identifiables et quelqu\'un pour porter le sujet après mon départ.',
        1 => 'Les formations à Lausanne se donnent en visioconférence, en groupe réduit, sur vos propres documents. Le présentiel reste possible pour un projet important.',
        2 => 'Une formation sans suite retombe en quelques semaines. C\'est pourquoi je propose systématiquement un point de suivi un mois plus tard, inclus dans les formats de deux jours: c\'est la que les vrais blocages apparaissent, une fois que les équipes ont essaye seules.',
      ),
    ),
    5 => 
    array (
      'type' => 'definitions',
      'etiquette' => 'Prudence',
      'titre' => 'Ce que je dis toujours en formation.',
      'items' => 
      array (
        0 => 
        array (
          'titre' => 'L\'IA se trompe avec aplomb',
          'texte' => 'Elle produit des réponses fausses avec la même assurance que les bonnes. Toute sortie destinée à un client, un partenaire ou une administration doit être relue par quelqu\'un qui connaît le sujet. Une formation qui ne dit pas cela est une formation dangereuse.',
        ),
        1 => 
        array (
          'titre' => 'Vos données sortent de chez vous',
          'texte' => 'Ce que vous collez dans un assistant grand public part sur des serveurs étrangers. On définit ensemble ce qui peut sortir et ce qui ne sortira jamais: données clients nominatives, informations financières, documents contractuels.',
        ),
        2 => 
        array (
          'titre' => 'Ce n\'est pas un remplacement',
          'texte' => 'L\'IA fait gagner du temps sur des tâches répétitives. Elle ne remplace ni le jugement métier ni la relation client. Une équipe qui croit l\'inverse produit vite du travail médiocre en grande quantité.',
        ),
        3 => 
        array (
          'titre' => 'Tout ne mérite pas d\'être automatisé',
          'texte' => 'Une tâche faite deux fois par an ne justifie pas qu\'on y passe une journée. On cible ce qui revient chaque semaine, rien d\'autre.',
        ),
      ),
    ),
  ),
  'faq' => 
  array (
    0 => 
    array (
      'q' => 'Faut-il des connaissances techniques ?',
      'r' => 'Aucune. Les formations s\'adressent à des équipes métier: commerciaux, secrétariat, comptabilité, direction. Si quelqu\'un sait écrire un message, il peut suivre.',
    ),
    1 => 
    array (
      'q' => 'Combien de personnes par session ?',
      'r' => 'Jusqu\'à douze pour un atelier découverte, dix pour une formation complète. Au-delà, on ne peut plus travailler sur les documents de chacun, et c\'est justement ce qui fait la valeur de la session.',
    ),
    2 => 
    array (
      'q' => 'Intervenez-vous sur place à Lausanne ?',
      'r' => 'Les formations à Lausanne se donnent en visioconférence, en groupe réduit, sur vos propres documents. Le présentiel reste possible pour un projet important.',
    ),
    3 => 
    array (
      'q' => 'Que produit-on pendant la formation ?',
      'r' => 'Des consignes réutilisables sur vos propres cas, et une ou deux automatisations simples si le format le permet. Vous repartez avec quelque chose qui fonctionne, pas seulement avec des notes.',
    ),
    4 => 
    array (
      'q' => 'Et après la formation ?',
      'r' => 'Un point de suivi un mois plus tard est inclus dans les formats de deux jours. C\'est la que remontent les vrais blocages, une fois que les équipes ont essaye seules. Sans ce point, une formation retombe presque toujours.',
    ),
    5 => 
    array (
      'q' => 'Nos données sont sensibles. Est-ce compatible ?',
      'r' => 'C\'est un sujet à part entière de la formation. On définit ce qui peut sortir et ce qui ne sortira jamais, et on regarde les solutions qui gardent les données chez vous quand la sensibilité l\'exige.',
    ),
    6 => 
    array (
      'q' => 'L\'IA va-t-elle remplacer nos employés ?',
      'r' => 'Non, et une formation qui vend cette promesse ment. Elle supprime du temps passe sur des tâches répétitives. Ce que vos équipes font de ce temps libère est une décision de management, pas une conséquence de l\'outil.',
    ),
  ),
);
