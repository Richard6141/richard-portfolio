<?php
// ============================================================
// portfolio/data/villes.php · Contenu des pages ville
//
// Cree le 20/08/2026. Le pied de page annoncait 21 villes en texte brut,
// sans aucune page derriere : le site revendiquait une couverture qu'aucune
// URL ne portait. Ces pages donnent une cible reelle aux requetes du type
// "developpeur web {ville}".
//
// REGLE A TENIR : ce fichier n'est PAS un gabarit a trous. Chaque ville a son
// contexte economique, ses secteurs, ses moyens de paiement et ses questions
// propres. Une page ville qui ne fait que substituer un nom dans un texte
// commun est du contenu duplique — Google la declasse, et elle tire les
// autres vers le bas. Avant d'ajouter une ville, ecrire d'abord son contenu.
//
// Champs attendus :
//   nom, slug, pays, pays_slug, region      — identite
//   distance_km, sur_place                  — logistique depuis Abomey-Calavi
//   accroche                                — sous-titre du H1 (1 phrase)
//   intro                                   — 2 a 3 phrases, propres a la ville
//   contexte                                — le tissu economique local
//   secteurs[]                              — profils de clients typiques
//   besoins[]                               — [titre, texte, slug_service]
//   travailler                              — comment se passe la collaboration
//   paiement                                — moyens de paiement du pays
//   faq[]                                   — [question, reponse 40-60 mots]
// ============================================================

return [

// ─────────────────────────── BÉNIN ───────────────────────────

'cotonou' => [
    'nom' => 'Cotonou', 'slug' => 'cotonou', 'pays' => 'Bénin', 'pays_slug' => 'benin',
    'region' => 'Littoral', 'distance_km' => 18, 'sur_place' => true,
    'accroche' => 'Sites, applications et automatisation pour les entreprises de la capitale économique',
    'intro' => "Cotonou concentre l'essentiel de l'activité économique béninoise : le port autonome, les sièges bancaires, les importateurs, et le marché Dantokpa, l'un des plus grands marchés d'Afrique de l'Ouest. C'est aussi la ville où la concurrence en ligne est la plus rude du pays : sur la plupart des requêtes commerciales, les premières places sont déjà prises. Y être visible demande mieux qu'un site vitrine posé là.",
    'contexte' => "Le tissu cotonois est dominé par le commerce et les services : import-export autour du port, distribution en gros et demi-gros, cabinets, cliniques privées, écoles, agences immobilières. Beaucoup de ces entreprises tournent encore sur WhatsApp et un catalogue papier, avec une fiche Google Business incomplète ou inexistante. L'écart se creuse vite : dès qu'un concurrent apparaît en premier sur Google Maps pour « quincaillerie Cotonou » ou « clinique Cadjèhoun », il capte les appels. La demande porte donc autant sur la visibilité locale que sur la création de site.",
    'secteurs' => ['Import-export et logistique portuaire', 'Commerce de gros et distribution', 'Cliniques et cabinets médicaux', 'Écoles et centres de formation', 'Agences immobilières', 'Restauration et hôtellerie'],
    'besoins' => [
        ['Être trouvé avant ses concurrents', "Sur Cotonou, le référencement local décide de qui reçoit l'appel. Fiche Google Business optimisée, avis clients, pages structurées par quartier et par service : c'est le premier levier, avant même la refonte du site.", 'seo-local-google-business'],
        ['Vendre en ligne avec Mobile Money', "Une boutique reliée à MTN MoMo et Moov Money, avec gestion des stocks et suivi des commandes. Le paiement à la livraison reste dominant : la boutique doit gérer les deux, pas seulement la carte bancaire.", 'site-e-commerce'],
        ['Automatiser un service client saturé', "Quand les commandes arrivent par WhatsApp toute la journée, un bot de qualification et un CRM léger libèrent plusieurs heures par semaine sans embaucher.", 'automatisation-ia'],
        ['Digitaliser la gestion interne', "Stocks, facturation, suivi client : un outil sur mesure remplace les classeurs Excel qui circulent par clé USB et que personne ne sait plus lequel fait foi.", 'application-web-sur-mesure'],
    ],
    'travailler' => "Cotonou est à une vingtaine de kilomètres de mon bureau d'Abomey-Calavi : les rendez-vous sur place sont possibles, à Ganhi, Cadjèhoun, Akpakpa ou Fidjrossè, généralement dans la même semaine. Le cadrage se fait souvent en présentiel, la suite à distance avec des points d'avancement réguliers.",
    'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte, PayPal ou espèces.",
    'faq' => [
        ["Combien coûte un site web à Cotonou ?", "Une vitrine professionnelle démarre autour de 300 000 FCFA, une landing page à partir de 150 000 FCFA, une boutique en ligne davantage selon le catalogue et les paiements à intégrer. Le devis est établi après un cadrage gratuit, poste par poste, sans engagement de votre part."],
        ["Pouvez-vous vous déplacer dans mes locaux ?", "Oui. Cotonou est à une vingtaine de kilomètres d'Abomey-Calavi, où je suis basé. Un rendez-vous sur site est possible pour le cadrage initial et pour la formation à la livraison. Le reste du projet se mène à distance, avec des points d'avancement réguliers par téléphone."],
        ["Combien de temps pour apparaître sur Google à Cotonou ?", "Le référencement local donne ses premiers effets en quatre à huit semaines, une fois la fiche Google Business optimisée et les avis lancés. Le référencement naturel classique demande trois à six mois sur des requêtes disputées comme celles de Cotonou, où la concurrence est déjà installée."],
    ],
],

'abomey-calavi' => [
    'nom' => 'Abomey-Calavi', 'slug' => 'abomey-calavi', 'pays' => 'Bénin', 'pays_slug' => 'benin',
    'region' => 'Atlantique', 'distance_km' => 0, 'sur_place' => true,
    'accroche' => 'Votre développeur web est installé ici, pas à l\'autre bout du pays',
    'intro' => "Abomey-Calavi est la commune la plus peuplée du Bénin et l'une des plus jeunes : la population y a explosé en deux décennies, portée par l'université d'Abomey-Calavi et par l'étalement urbain depuis Cotonou. C'est aussi la ville où je vis et travaille. Un projet lancé ici se traite en direct, sans intermédiaire et sans décalage.",
    'contexte' => "Le tissu local est fait de très petites structures en croissance rapide : écoles privées, cliniques de quartier, quincailleries, restaurants, agences immobilières sur Godomey, Calavi centre, Tokan et Zogbadjè. Beaucoup se créent chaque année, et la plupart démarrent sans aucune présence en ligne. La proximité de l'université alimente aussi une demande particulière : jeunes entrepreneurs, prestataires de services, projets à budget serré qui ont besoin d'un premier site sérieux plutôt que d'une usine à gaz.",
    'secteurs' => ['Écoles et établissements privés', 'Cliniques et pharmacies de quartier', 'Immobilier et construction', 'Commerce de détail et quincaillerie', 'Restauration', 'Jeunes entreprises et prestataires indépendants'],
    'besoins' => [
        ['Un premier site qui inspire confiance', "Pour une structure récente, le site est souvent le premier signal de sérieux. Une vitrine claire, rapide, avec les bonnes informations et une fiche Google reliée, suffit à changer la perception.", 'site-vitrine-professionnel'],
        ['Exister sur Google Maps', "Beaucoup d'entreprises de Calavi sont introuvables en ligne alors qu'elles ont des clients. Créer et optimiser la fiche Google Business est souvent l'action au meilleur rapport effort/résultat.", 'seo-local-google-business'],
        ['Gérer les inscriptions et les rendez-vous', "Écoles et cabinets perdent du temps sur des inscriptions papier ou par téléphone. Un système de réservation en ligne, avec rappels automatiques, réduit les absences et les appels.", 'systeme-de-reservation-en-ligne'],
        ['Se former plutôt que tout déléguer', "Pour ceux qui veulent tenir leur outil eux-mêmes, une formation courte au web et à la création assistée par IA permet de rester autonome au quotidien.", 'formation-en-programmation'],
    ],
    'travailler' => "Je suis basé à Abomey-Calavi. Un rendez-vous se cale en général sous 48 heures, sur place ou dans vos locaux. C'est la ville où le suivi est le plus direct : pour une mise en ligne, une formation ou un dépannage, je peux passer.",
    'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte, PayPal ou espèces.",
    'faq' => [
        ["Êtes-vous vraiment basé à Abomey-Calavi ?", "Oui, c'est là que je vis et que je travaille. Ce n'est pas une page de couverture géographique : les rendez-vous sur place se calent sous 48 heures en général, et les interventions de formation ou de dépannage peuvent se faire dans vos locaux sans frais de déplacement."],
        ["Travaillez-vous avec de petites structures ?", "Oui, une grande partie des projets menés ici concerne des entreprises de quelques personnes. Le budget se cale sur le besoin réel : une landing page à partir de 150 000 FCFA suffit souvent à démarrer, quitte à faire évoluer l'outil ensuite par étapes."],
        ["Puis-je payer en plusieurs fois ?", "Oui. Le règlement se fait par tranches liées à l'avancement : une avance au démarrage, des versements à la validation de chaque étape, le solde à la mise en ligne. Mobile Money MTN et Moov, virement, carte, PayPal ou espèces sont acceptés."],
    ],
],

'porto-novo' => [
    'nom' => 'Porto-Novo', 'slug' => 'porto-novo', 'pays' => 'Bénin', 'pays_slug' => 'benin',
    'region' => 'Ouémé', 'distance_km' => 45, 'sur_place' => true,
    'accroche' => 'Sites et outils numériques pour la capitale administrative',
    'intro' => "Porto-Novo est la capitale politique du Bénin : l'Assemblée nationale, les administrations et les institutions y siègent. Le rythme économique y est différent de celui de Cotonou, plus institutionnel, avec une place à part pour le patrimoine, la culture et l'artisanat. La proximité immédiate du Nigeria y entretient par ailleurs un commerce transfrontalier actif.",
    'contexte' => "On y trouve moins de grands importateurs qu'à Cotonou, mais davantage de structures liées au secteur public, à l'éducation, à la culture et au tourisme patrimonial. Les besoins numériques sont souvent moins tournés vers la vente directe que vers la crédibilité et la mise en relation : présenter une institution, un centre culturel, un cabinet ou une association de façon sérieuse, avec des documents accessibles et des formulaires qui fonctionnent. La concurrence en ligne y est nettement moins installée qu'à Cotonou, ce qui rend le référencement local plus accessible.",
    'secteurs' => ['Institutions et structures para-publiques', 'Établissements scolaires et supérieurs', 'Culture, patrimoine et tourisme', 'Artisanat et métiers d\'art', 'Commerce transfrontalier avec le Nigeria', 'Associations et ONG'],
    'besoins' => [
        ['Un site institutionnel crédible', "Présenter une structure, ses missions et ses documents de façon claire, avec des pages qui se chargent vite même sur une connexion moyenne et des formulaires qui arrivent réellement dans la bonne boîte.", 'site-vitrine-professionnel'],
        ['Prendre les premières places localement', "La concurrence en ligne est bien moins dense qu'à Cotonou : sur beaucoup de requêtes portonoviennes, une fiche Google soignée et quelques pages bien construites suffisent à passer devant.", 'seo-local-google-business'],
        ['Mettre en ligne un service public simple', "Formulaires, prises de rendez-vous, dépôt de dossiers : des démarches encore souvent faites sur place peuvent passer en ligne sans lourdeur technique.", 'application-web-sur-mesure'],
        ['Valoriser un lieu culturel ou touristique', "Un site avec galerie, informations pratiques et réservation en ligne, pensé pour être trouvé par des visiteurs qui préparent leur venue depuis l'étranger.", 'systeme-de-reservation-en-ligne'],
    ],
    'travailler' => "Porto-Novo est à environ 45 kilomètres d'Abomey-Calavi, soit moins d'une heure de route. Les rendez-vous sur place sont possibles pour le cadrage et la livraison ; le développement se mène à distance.",
    'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte, PayPal ou espèces.",
    'faq' => [
        ["Travaillez-vous avec des institutions et des associations ?", "Oui. Ces structures ont des contraintes propres : documents à publier, formulaires officiels, langage mesuré, budgets validés en commission. Le devis est établi de façon détaillée poste par poste pour être présentable en interne, et le calendrier tient compte des délais de validation."],
        ["Est-il plus facile de bien se référencer à Porto-Novo qu'à Cotonou ?", "Oui, nettement. La concurrence en ligne y est beaucoup moins installée : sur de nombreuses requêtes locales, une fiche Google Business correctement remplie et quelques pages bien construites suffisent à atteindre les premières positions en quelques semaines, là où Cotonou demande souvent plusieurs mois d'efforts soutenus pour le même résultat."],
        ["Vous déplacez-vous à Porto-Novo ?", "Oui, la ville est à moins d'une heure de route d'Abomey-Calavi. Je me déplace pour le cadrage initial et pour la formation à la livraison. Les échanges intermédiaires se font par téléphone et visioconférence, ce qui évite des allers-retours inutiles."],
    ],
],

'parakou' => [
    'nom' => 'Parakou', 'slug' => 'parakou', 'pays' => 'Bénin', 'pays_slug' => 'benin',
    'region' => 'Borgou', 'distance_km' => 410, 'sur_place' => false,
    'accroche' => 'Le numérique pour les entreprises du nord, à distance et sans surcoût',
    'intro' => "Parakou est la grande ville du nord du Bénin et le carrefour commercial de la région : c'est le point de passage du corridor qui monte vers le Niger et le Burkina Faso. L'économie y est portée par l'agro-industrie, le coton, le transport et le négoce. En ligne, la concurrence y est bien plus faible qu'au sud — c'est un avantage réel pour qui s'y prend tôt.",
    'contexte' => "Le tissu économique de Parakou tourne autour de la logistique, du transport de marchandises, du commerce de gros et de la transformation agricole. Ce sont des activités où le site web ne sert pas à vendre en ligne mais à être trouvé, à rassurer un partenaire et à recevoir des demandes de devis. Beaucoup d'entreprises de la région n'ont aucune présence numérique : sur des requêtes comme « transporteur Parakou » ou « fournisseur agroalimentaire Borgou », les résultats sont souvent vides ou obsolètes. La marge de progression est donc plus grande qu'ailleurs, pour un effort moindre.",
    'secteurs' => ['Transport et logistique du corridor nord', 'Négoce agricole et coton', 'Agro-transformation', 'Commerce de gros', 'Établissements scolaires', 'Hôtellerie et restauration'],
    'besoins' => [
        ['Être visible sur des requêtes encore libres', "Peu d'entreprises du Borgou sont référencées correctement. Prendre la première place sur les requêtes de son métier y demande beaucoup moins d'efforts qu'à Cotonou.", 'referencement-naturel-seo'],
        ['Un site qui génère des demandes de devis', "Pour le transport et le négoce, l'objectif n'est pas la vente en ligne mais le contact qualifié : présentation claire, références, formulaire qui fonctionne et numéro cliquable.", 'site-vitrine-professionnel'],
        ['Suivre son activité sans papier', "Un outil de gestion simple pour les commandes, les livraisons et la facturation, accessible depuis un téléphone, remplace des cahiers qui se perdent.", 'application-web-sur-mesure'],
        ['Automatiser les relances et le suivi', "Relances de factures, confirmations de livraison, rappels aux clients : autant de tâches répétitives qui peuvent tourner seules.", 'automatisation-ia'],
    ],
    'travailler' => "Parakou est à plus de 400 kilomètres d'Abomey-Calavi : les projets s'y mènent à distance, par téléphone, WhatsApp et visioconférence. C'est la façon dont travaille déjà une grande partie de mes clients, y compris hors du Bénin — la distance ne change ni le prix ni le suivi.",
    'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte ou PayPal.",
    'faq' => [
        ["Travailler à distance depuis Parakou, est-ce que ça marche vraiment ?", "Oui, c'est le mode de fonctionnement d'une grande partie des projets, y compris hors du Bénin. Les échanges se font par téléphone, WhatsApp et visioconférence, avec des points d'avancement réguliers et des versions en ligne que vous consultez au fur et à mesure."],
        ["Le prix est-il plus élevé à cause de la distance ?", "Non. Le tarif ne dépend pas de votre ville mais du projet lui-même. Aucun frais de déplacement n'est facturé pour les projets menés à distance, et la formation à la livraison se fait en visioconférence, enregistrée pour que vous puissiez la revoir."],
        ["Est-il plus facile d'être visible sur Google à Parakou ?", "Nettement, oui. Beaucoup d'entreprises du Borgou n'ont aucune présence en ligne et de nombreuses requêtes locales renvoient des résultats vides ou obsolètes. Une fiche Google Business soignée et un site bien structuré suffisent souvent à occuper la première place, et cette position se défend ensuite bien plus facilement qu'au sud du pays."],
    ],
],

'bohicon' => [
    'nom' => 'Bohicon', 'slug' => 'bohicon', 'pays' => 'Bénin', 'pays_slug' => 'benin',
    'region' => 'Zou', 'distance_km' => 130, 'sur_place' => false,
    'accroche' => 'Sites et outils de gestion pour le carrefour commercial du centre',
    'intro' => "Bohicon est le nœud routier et ferroviaire du centre du Bénin : tout ce qui monte vers le nord ou redescend vers la côte y passe. La ville vit de son marché, du commerce de gros et de l'agro-transformation, dans l'ombre médiatique de sa voisine Abomey mais avec une activité économique nettement plus dense.",
    'contexte' => "Le commerce de gros et la transformation agricole dominent : produits vivriers, huile, transformation locale, revente vers Cotonou et vers le nord. Ce sont des entreprises qui traitent des volumes réels mais gèrent encore beaucoup sur cahier ou sur des tableurs improvisés. Le besoin numérique porte donc moins sur la vitrine que sur l'outil : savoir ce qui est en stock, ce qui a été livré, ce qui reste à encaisser. La visibilité en ligne vient ensuite, sur des requêtes peu disputées.",
    'secteurs' => ['Commerce de gros et demi-gros', 'Agro-transformation', 'Transport et messagerie', 'Quincaillerie et matériaux', 'Établissements scolaires', 'Restauration et hébergement'],
    'besoins' => [
        ['Savoir où en sont stocks et livraisons', "Un outil de gestion accessible depuis un téléphone, qui remplace le cahier et les tableurs éparpillés, avec un historique consultable et des exports.", 'application-web-sur-mesure'],
        ['Facturer proprement et se faire payer', "Factures générées automatiquement, suivi des impayés et relances programmées : le point qui coûte le plus cher quand il est mal tenu.", 'automatisation-ia'],
        ['Se rendre visible sans grosse dépense', "Sur les requêtes de Bohicon, la concurrence est faible. Une fiche Google et une vitrine bien construite suffisent souvent à capter les recherches locales.", 'seo-local-google-business'],
        ['Vendre au-delà du marché local', "Une boutique en ligne permet de toucher Cotonou et le nord sans multiplier les intermédiaires, avec paiement Mobile Money et suivi des commandes.", 'site-e-commerce'],
    ],
    'travailler' => "Bohicon est à environ 130 kilomètres d'Abomey-Calavi. Les projets s'y mènent principalement à distance ; un déplacement reste possible pour un cadrage important ou une formation sur site, à convenir au devis.",
    'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte ou espèces.",
    'faq' => [
        ["J'ai surtout besoin d'un outil de gestion, pas d'un site. Est-ce possible ?", "Tout à fait, et c'est le besoin le plus courant à Bohicon. Un outil sur mesure pour les stocks, les livraisons et la facturation, accessible depuis un téléphone, se conçoit indépendamment de toute vitrine. Le site peut venir plus tard, ou jamais si vous n'en voyez pas l'utilité."],
        ["Mes employés ne sont pas à l'aise avec l'informatique.", "C'est pris en compte dès la conception : les écrans sont réduits à l'essentiel, en français, pensés pour un téléphone plutôt qu'un ordinateur. Une formation est incluse à la livraison, et les premières semaines d'utilisation font l'objet d'un accompagnement rapproché, le temps que chacun prenne ses repères sans pression."],
        ["Vous déplacez-vous jusqu'à Bohicon ?", "C'est possible pour un cadrage important ou une formation sur site, à convenir dans le devis. La plupart des projets se mènent toutefois entièrement à distance, par téléphone et visioconférence, ce qui évite de répercuter des frais de déplacement sur le budget."],
    ],
],

'ouidah' => [
    'nom' => 'Ouidah', 'slug' => 'ouidah', 'pays' => 'Bénin', 'pays_slug' => 'benin',
    'region' => 'Atlantique', 'distance_km' => 40, 'sur_place' => true,
    'accroche' => 'Visibilité en ligne pour le tourisme, la culture et l\'hébergement',
    'intro' => "Ouidah est la ville du patrimoine béninois : la Route des Esclaves, la Porte du Non-Retour, le temple des Pythons et les Vodun Days en font la première destination touristique du pays. C'est aussi la ville où la visibilité en ligne compte le plus, parce que les visiteurs préparent leur venue depuis l'étranger, des mois à l'avance.",
    'contexte' => "L'économie locale tourne autour de l'accueil : hôtels, maisons d'hôtes, restaurants, guides, artisans, organisateurs d'événements culturels. Ces activités ont une particularité : leurs clients ne sont pas sur place. Ils cherchent depuis Paris, Lagos, Abidjan ou Montréal, comparent sur Google et réservent avant de partir. Un établissement sans site, sans photos correctes et sans possibilité de réserver perd la réservation au profit d'un concurrent mieux présenté — même s'il est moins bien situé. La saisonnalité des festivals rend cette visibilité encore plus décisive sur quelques semaines de l'année.",
    'secteurs' => ['Hôtels et maisons d\'hôtes', 'Restauration', 'Guides et agences de tourisme', 'Artisanat et galeries', 'Événements culturels et festivals', 'Musées et sites patrimoniaux'],
    'besoins' => [
        ['Être vu par des visiteurs étrangers', "Le référencement doit viser des recherches faites hors du Bénin, souvent plusieurs mois avant le séjour, avec des pages qui répondent aux questions pratiques que se posent les voyageurs.", 'referencement-naturel-seo'],
        ['Recevoir des réservations en ligne', "Un système de réservation avec confirmation automatique, rappels et acompte en ligne évite les allers-retours par messages et sécurise les périodes de forte demande.", 'systeme-de-reservation-en-ligne'],
        ['Présenter le lieu avec de vraies photos', "Pour l'hébergement et la restauration, la qualité de la présentation fait la réservation. Un site rapide, avec galerie soignée et informations pratiques complètes.", 'site-vitrine-professionnel'],
        ['Vendre son artisanat au-delà de la ville', "Une boutique en ligne permet aux artisans et galeries de vendre à des clients rencontrés sur place, une fois qu'ils sont rentrés chez eux.", 'site-e-commerce'],
    ],
    'travailler' => "Ouidah est à une quarantaine de kilomètres d'Abomey-Calavi : les rendez-vous sur place sont possibles, ce qui est utile pour les projets d'hébergement où il faut voir le lieu avant d'en parler correctement.",
    'paiement' => "MTN Mobile Money, Moov Money, virement bancaire, carte ou PayPal — utile pour encaisser des acomptes depuis l'étranger.",
    'faq' => [
        ["Puis-je encaisser des réservations depuis l'étranger ?", "Oui. Le système de réservation peut accepter la carte bancaire et PayPal en plus du Mobile Money, ce qui permet de prendre un acompte auprès d'un visiteur qui réserve depuis la France, le Canada ou le Nigeria, et de sécuriser les périodes de forte demande."],
        ["Mon site doit-il être en anglais ?", "C'est vivement conseillé à Ouidah, où une part importante des visiteurs vient du Nigeria voisin ou de la diaspora anglophone. Une version anglaise des pages clés — présentation, tarifs, réservation, accès — élargit nettement l'audience pour un surcoût limité, et se met en place dès la conception plutôt qu'après coup."],
        ["Quand faut-il s'y prendre avant un festival ?", "Comptez au minimum trois mois. Les visiteurs des Vodun Days et des grands événements réservent longtemps à l'avance, et le référencement a besoin de ce délai pour porter ses effets. Un site mis en ligne deux semaines avant l'événement arrive trop tard."],
    ],
],

// ─────────────────── AFRIQUE DE L'OUEST ───────────────────

'abidjan' => [
    'nom' => 'Abidjan', 'slug' => 'abidjan', 'pays' => 'Côte d\'Ivoire', 'pays_slug' => 'cote-d-ivoire',
    'region' => 'Lagunes', 'distance_km' => null, 'sur_place' => false,
    'accroche' => 'Développement web et automatisation à distance pour les entreprises ivoiriennes',
    'intro' => "Abidjan est la plus grande métropole francophone d'Afrique de l'Ouest et son marché numérique est le plus mature de la sous-région : le Plateau, Cocody et la Zone 4 concentrent sièges d'entreprises, fintechs et agences. La contrepartie, c'est un niveau d'exigence élevé — et des tarifs d'agence qui le sont tout autant.",
    'contexte' => "L'écosystème abidjanais est nettement plus avancé que celui de la plupart des capitales voisines : pénétration forte du mobile money avec Orange Money, MTN, Moov et Wave, e-commerce installé, entreprises habituées à travailler avec des prestataires numériques. Ce qui manque souvent, ce n'est pas l'offre mais le rapport entre le prix et le suivi : beaucoup de structures moyennes se retrouvent soit face à des agences hors budget, soit face à des prestataires qui disparaissent après la livraison. Travailler avec un développeur indépendant joignable directement répond précisément à cet écart.",
    'secteurs' => ['Commerce et distribution', 'Services aux entreprises et cabinets', 'Fintech et services financiers', 'Santé privée', 'Immobilier', 'Formation et écoles privées'],
    'besoins' => [
        ['Une boutique reliée à Wave et Orange Money', "Le mobile money est très installé en Côte d'Ivoire : la boutique doit intégrer les moyens réellement utilisés localement, pas seulement la carte bancaire.", 'site-e-commerce'],
        ['Automatiser sans licence hors de prix', "n8n auto-hébergé remplace des abonnements Zapier ou Make qui deviennent coûteux dès que les volumes montent, pour un résultat équivalent.", 'automatisation-ia'],
        ['Un interlocuteur qui reste après la livraison', "Maintenance, corrections et évolutions assurées par la personne qui a écrit le code, sans passer par un service commercial intermédiaire.", 'maintenance-support'],
        ['Un espace client ou une plateforme métier', "Portail sécurisé, tableau de bord, suivi de dossiers : les outils que les structures de services réclament le plus souvent.", 'saas-espace-client'],
    ],
    'travailler' => "Les projets abidjanais se mènent entièrement à distance : visioconférence, WhatsApp, points d'avancement réguliers et versions en ligne consultables au fur et à mesure. Même fuseau horaire que le Bénin, donc aucun décalage à gérer.",
    'paiement' => "Orange Money, MTN Money, Moov Money, Wave, virement, carte ou PayPal.",
    'faq' => [
        ["Pourquoi travailler avec un développeur basé au Bénin ?", "Pour le rapport entre le tarif et le suivi. Vous parlez directement à la personne qui écrit le code, sans intermédiaire commercial, avec des coûts sensiblement inférieurs à ceux d'une agence abidjanaise, à qualité équivalente. Aucun décalage horaire : Cotonou et Abidjan sont sur le même fuseau."],
        ["Intégrez-vous Wave et Orange Money ?", "Oui. Les moyens de paiement réellement utilisés en Côte d'Ivoire sont intégrés à la boutique ou à la plateforme : Wave, Orange Money, MTN Money et Moov Money, en plus de la carte bancaire et de PayPal pour les clients de la diaspora."],
        ["Comment se passe le suivi après la livraison ?", "La maintenance est assurée par la même personne que le développement, en forfait mensuel ou à la demande. Cela couvre les mises à jour, les sauvegardes, les corrections et les petites évolutions. Vous gardez un contact direct, joignable par WhatsApp."],
    ],
],

'lome' => [
    'nom' => 'Lomé', 'slug' => 'lome', 'pays' => 'Togo', 'pays_slug' => 'togo',
    'region' => 'Maritime', 'distance_km' => 150, 'sur_place' => true,
    'accroche' => 'À deux heures de route de Cotonou, avec la même réactivité',
    'intro' => "Lomé est à environ 150 kilomètres de Cotonou : c'est la capitale étrangère la plus proche de mon bureau, et un déplacement y reste envisageable dans la journée. La ville vit de son port en eaux profondes, de sa zone franche et de sa fonction de hub logistique pour toute la sous-région.",
    'contexte' => "L'économie togolaise s'organise largement autour du port de Lomé, l'un des rares en eaux profondes de la côte ouest-africaine, et de la zone franche industrielle. Cela crée un tissu de transitaires, de sociétés de logistique, d'importateurs et de prestataires de services aux entreprises. À cela s'ajoute un secteur bancaire régional important. Les besoins numériques y sont proches de ceux de Cotonou — visibilité locale, outils de gestion, automatisation — avec un marché de prestataires moins encombré et une proximité culturelle et linguistique qui simplifie les échanges.",
    'secteurs' => ['Transit et logistique portuaire', 'Import-export et zone franche', 'Services aux entreprises', 'Banque et assurance', 'Commerce de détail', 'Hôtellerie'],
    'besoins' => [
        ['Un site professionnel pour rassurer un partenaire', "Dans le transit et l'import-export, le site sert de carte de visite auprès de partenaires étrangers qui vérifient avant de traiter.", 'site-vitrine-professionnel'],
        ['Connecter ses outils entre eux', "Une API sur mesure relie logiciel de gestion, site et outils de suivi, pour arrêter les doubles saisies entre systèmes.", 'api-rest-integrations'],
        ['Automatiser les échanges répétitifs', "Confirmations, relances, transmission de documents : des séquences qui tournent seules et libèrent du temps administratif.", 'automatisation-ia'],
        ['Être trouvé sur les requêtes togolaises', "Le marché des prestataires est moins encombré qu'à Abidjan : les premières positions locales restent accessibles.", 'referencement-naturel-seo'],
    ],
    'travailler' => "Lomé est à environ deux heures de route de Cotonou : un déplacement pour un cadrage ou une formation est possible dans la journée, ce qui est rare pour un projet transfrontalier. Le reste se mène à distance, sans décalage horaire.",
    'paiement' => "T-Money, Flooz, virement bancaire, carte ou PayPal.",
    'faq' => [
        ["Pouvez-vous vous déplacer à Lomé ?", "Oui, c'est envisageable dans la journée : Lomé est à environ deux heures de route de Cotonou, ce qui en fait la capitale étrangère la plus accessible depuis mon bureau. Un déplacement se convient au devis, généralement pour le cadrage initial ou la formation à la livraison."],
        ["Acceptez-vous T-Money et Flooz ?", "Oui. Les moyens de paiement togolais sont acceptés pour le règlement du projet, et peuvent être intégrés à votre boutique ou plateforme si vos clients les utilisent. Le virement bancaire, la carte et PayPal restent également possibles selon ce qui vous arrange."],
        ["Facturez-vous en francs CFA ?", "Oui. Le Togo et le Bénin partagent la même monnaie, le franc CFA ouest-africain, ce qui évite toute conversion et tout frais de change. Le devis est établi en FCFA et le règlement se fait par tranches liées à l'avancement du projet."],
    ],
],

'dakar' => [
    'nom' => 'Dakar', 'slug' => 'dakar', 'pays' => 'Sénégal', 'pays_slug' => 'senegal',
    'region' => 'Dakar', 'distance_km' => null, 'sur_place' => false,
    'accroche' => 'Développement et automatisation à distance pour le marché sénégalais',
    'intro' => "Dakar est l'un des pôles technologiques les plus dynamiques d'Afrique francophone : écosystème de startups actif, adoption massive du paiement mobile, e-commerce en croissance rapide. C'est aussi un marché où les attentes en matière de qualité d'exécution sont élevées.",
    'contexte' => "La particularité sénégalaise, c'est la pénétration exceptionnelle de Wave, qui a bouleversé les habitudes de paiement en quelques années et coexiste avec Orange Money et Free Money. Toute boutique en ligne qui ignore Wave se prive d'une part importante de ses clients potentiels. Le tissu économique mêle commerce, services, immobilier, tourisme et un secteur numérique local structuré. La demande porte souvent sur des plateformes métier et des automatisations plutôt que sur de simples vitrines, avec une diaspora importante qui achète et paie depuis l'étranger.",
    'secteurs' => ['E-commerce et distribution', 'Services aux entreprises', 'Immobilier', 'Tourisme et hébergement', 'Santé privée', 'Startups et éditeurs de services'],
    'besoins' => [
        ['Une boutique qui accepte Wave', "Au Sénégal, ignorer Wave revient à refuser une part importante des paiements. La boutique doit intégrer les moyens réellement utilisés localement.", 'site-e-commerce'],
        ['Vendre aussi à la diaspora', "Carte bancaire et PayPal en complément du mobile money permettent d'encaisser depuis l'Europe et l'Amérique du Nord.", 'site-e-commerce'],
        ['Une plateforme métier sur mesure', "Espace client, tableau de bord, suivi de dossiers : les besoins les plus fréquents des structures de services dakaroises.", 'saas-espace-client'],
        ['Automatiser la prospection et le suivi', "Séquences de relance, qualification des demandes entrantes, synchronisation avec un CRM : du temps commercial récupéré chaque semaine.", 'automatisation-ia'],
    ],
    'travailler' => "Les projets sénégalais se mènent entièrement à distance, par visioconférence et messagerie. Le décalage horaire avec le Bénin est d'une heure seulement, ce qui laisse toute la journée de travail en commun.",
    'paiement' => "Wave, Orange Money, Free Money, virement, carte ou PayPal.",
    'faq' => [
        ["Intégrez-vous Wave à une boutique en ligne ?", "Oui, et c'est fortement recommandé au Sénégal où Wave est devenu un moyen de paiement dominant. La boutique peut combiner Wave, Orange Money et Free Money pour le marché local, avec la carte bancaire et PayPal pour les clients de la diaspora."],
        ["Le décalage horaire pose-t-il problème ?", "Non, il n'est que d'une heure entre Dakar et Cotonou. Toute la journée de travail est commune, ce qui permet des échanges en temps réel par téléphone, WhatsApp ou visioconférence, sans avoir à caler les réunions en début ou en fin de journée."],
        ["Comment se déroule un projet mené entièrement à distance ?", "Par un cadrage en visioconférence, puis des points d'avancement réguliers avec une version en ligne que vous consultez au fur et à mesure. Rien n'est livré en une seule fois à la fin : vous voyez le projet se construire et pouvez ajuster en cours de route."],
    ],
],

];
