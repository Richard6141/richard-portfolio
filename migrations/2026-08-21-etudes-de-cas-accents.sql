-- ============================================================
-- Migration : accentuation correcte des brouillons d'etudes de cas
-- Date       : 2026-08-21
--
-- CORRECTIF. La migration precedente (2026-08-21-anciennete-et-etudes-de-cas)
-- a insere les brouillons SANS ACCENTS : "gere", "fiabilite", "entrees",
-- "consolidee". La convention ASCII du depot vaut pour les COMMENTAIRES de
-- code, pas pour du contenu publie. Sur une page lue par des clients et
-- indexee par Google, du francais sans accents est une faute, et elle nuit
-- aussi au referencement : "referencement" et "referencement" ne sont pas le
-- meme mot pour un moteur.
--
-- Les six fiches sont donc reecrites a l'identique, accents compris.
--
-- PRUDENCE : chaque UPDATE est conditionne au fait que le champ contienne
-- encore le brouillon non accentue (reconnaissable a son incipit). Si vous
-- avez deja modifie un texte depuis le dashboard, il n'est PAS ecrase.
-- ============================================================

UPDATE projects SET
  case_contexte = 'OBA Production & Communication est une structure béninoise de production audiovisuelle et de communication. Son activité repose sur la création : captation, montage, identité visuelle, accompagnement de marques. Comme beaucoup de structures créatives, sa réputation s''était construite par le réseau et la recommandation, et ses travaux circulaient sur les réseaux sociaux, où ils se perdent au fil du fil d''actualité.',
  case_probleme = 'Le problème n''était pas le manque de travaux, mais l''absence d''un endroit où les rassembler. Un prospect qui entendait parler de la structure ne trouvait aucune adresse web propre : il tombait au mieux sur une page sociale, sans présentation claire des prestations ni moyen simple de demander un devis. Pour une activité où la crédibilité se juge sur la qualité de la présentation, c''était un handicap direct.',
  case_solution = 'Un site vitrine sur mesure, développé en HTML, CSS, JavaScript et PHP plutôt que sur un modèle générique, afin que la mise en page serve les visuels au lieu de les contraindre. La structure met en avant les prestations, un portfolio des réalisations et un formulaire de contact direct. L''ensemble est optimisé pour l''affichage mobile et pour le référencement, avec des pages légères qui restent utilisables sur une connexion moyenne.',
  case_resultat = 'La structure dispose désormais d''une adresse web propre, indépendante des plateformes sociales, où ses travaux restent consultables sans se perdre dans un fil d''actualité. Les prestations sont présentées de façon lisible et les demandes arrivent par un formulaire unique plutôt que par plusieurs canaux dispersés.',
  case_lieu = 'Bénin'
WHERE slug = 'obaprodc' AND case_contexte LIKE 'OBA Production & Communication est une structure beninoise%';

UPDATE projects SET
  case_contexte = 'Touré Distribution est une entreprise de distribution qui gère quotidiennement des mouvements de stock, des encaissements et une facturation client. Ce type de structure atteint vite un seuil où le volume traité dépasse ce qu''un suivi manuel permet de tenir avec fiabilité : les entrées et sorties se notent à plusieurs endroits, et personne ne dispose d''une vue consolidée de la situation réelle.',
  case_probleme = 'Stock, finance et facturation vivaient dans des supports séparés, sans lien entre eux. Une même information devait être saisie plusieurs fois, ce qui multiplie les occasions d''erreur et rend les écarts difficiles à expliquer après coup. Établir une facture supposait de retrouver les éléments à la main, et répondre à une question simple — que reste-t-il en stock, qui n''a pas encore payé — demandait de recouper plusieurs sources.',
  case_solution = 'Une plateforme de gestion sur mesure développée en Laravel avec une base MySQL, réunissant le stock, le suivi financier et la facturation dans un seul outil. Les données sont saisies une fois et alimentent l''ensemble des modules : une sortie de stock met à jour l''inventaire et alimente la facturation sans ressaisie. Une API REST permet de connecter d''autres outils, et l''interface reste utilisable depuis un téléphone, là où se fait une partie du travail.',
  case_resultat = 'Le stock, la facturation et le suivi financier reposent désormais sur une seule source de données, consultable à distance. La facturation est générée à partir des mouvements déjà enregistrés au lieu d''être reconstituée manuellement, et l''historique des opérations reste consultable et exportable.',
  case_lieu = 'Bénin'
WHERE slug = 'toure-distribution' AND case_contexte LIKE 'Toure Distribution est une entreprise de distribution qui gere%';

UPDATE projects SET
  case_contexte = 'Tout développeur qui construit une application béninoise finit par avoir besoin du découpage administratif du pays : départements, communes, arrondissements. Formulaires d''adresse, zones de livraison, statistiques territoriales, annuaires locaux — le besoin revient dans presque chaque projet. Or cette donnée, pourtant publique, n''existait pas sous une forme directement exploitable par une application.',
  case_probleme = 'Chacun recréait la liste dans son coin, en la recopiant depuis des documents administratifs souvent au format PDF. Le résultat était prévisible : des orthographes divergentes d''un projet à l''autre, des niveaux hiérarchiques incomplets, et un travail de saisie refait autant de fois qu''il y a de développeurs. Aucune source unique ne faisait référence.',
  case_solution = 'Une API REST publique, développée en PHP avec une base MySQL, qui expose la hiérarchie administrative complète au format JSON. Les niveaux sont interrogeables indépendamment ou en cascade, de façon à alimenter directement des listes déroulantes liées dans un formulaire. Le format de réponse est stable et documenté, pour pouvoir être intégré sans avoir à deviner la structure des données.',
  case_resultat = 'Le découpage administratif béninois est accessible par une seule requête, dans un format directement consommable par une application. Le projet est ouvert : tout développeur travaillant sur le Bénin peut s''appuyer dessus plutôt que de ressaisir la donnée, avec une nomenclature identique d''un projet à l''autre.',
  case_lieu = 'Bénin'
WHERE slug = 'api-decoupage-benin' AND case_contexte LIKE 'Tout developpeur qui construit une application beninoise%';

UPDATE projects SET
  case_contexte = 'Myrmas Bio propose des produits biologiques. Sur ce marché, l''acte d''achat repose largement sur la confiance : l''acheteur veut savoir d''où vient le produit, comment il est obtenu et ce qui distingue réellement l''offre d''une autre. Cette information se transmet bien en face à face, sur un marché ou en boutique, beaucoup moins dès que le contact initial se fait à distance.',
  case_probleme = 'La gamme n''était présentée nulle part en ligne de façon structurée. Un client curieux, ou un revendeur potentiel, n''avait aucun moyen de consulter l''ensemble des produits ni de comprendre la démarche avant de prendre contact. Chaque demande obligeait donc à réexpliquer individuellement ce qu''une page bien construite peut exposer une fois pour toutes.',
  case_solution = 'Un site vitrine développé en HTML, CSS, JavaScript et PHP, organisé autour de la présentation de la gamme et de la démarche produit. Chaque catégorie dispose de sa présentation, avec les informations que les acheteurs demandent le plus souvent, et un point de contact unique pour les commandes et les demandes de revente. Le site est conçu pour l''affichage mobile, la majorité des consultations se faisant depuis un téléphone.',
  case_resultat = 'La gamme et la démarche sont exposées en ligne de façon structurée, consultables avant toute prise de contact. Les questions récurrentes trouvent leur réponse sur le site, et les demandes entrantes passent par un canal unique au lieu d''être dispersées.',
  case_lieu = 'Bénin'
WHERE slug = 'myrmasbio' AND case_contexte LIKE 'Myrmas Bio propose des produits biologiques. Sur ce marche%';

UPDATE projects SET
  case_contexte = 'Maho Multiservices réunit plusieurs prestations sous une même enseigne. Ce modèle est courant et économiquement solide, mais il a une difficulté propre : plus l''offre est large, plus elle devient difficile à énoncer clairement. Les clients connaissent souvent l''entreprise pour un seul de ses services et ignorent tout le reste, ce qui fait perdre des missions qui auraient pu rester dans la maison.',
  case_probleme = 'Il n''existait aucun support permettant de présenter l''étendue réelle des prestations. Les demandes arrivaient par bouche à oreille, service par service, sans que le prospect ait conscience du périmètre complet. Expliquer l''offre à chaque contact prenait du temps et laissait forcément des prestations dans l''ombre.',
  case_solution = 'Un site vitrine développé en HTML, CSS, JavaScript et PHP, structuré autour des catégories de prestations. Chaque service dispose de sa propre section, ce qui permet à la fois de découvrir l''ensemble de l''offre et d''accéder directement à celle que l''on cherche. Un formulaire de contact unique centralise les demandes, quelle que soit la prestation concernée.',
  case_resultat = 'L''étendue des prestations est désormais visible d''un seul coup d''œil, et chaque service dispose d''une section propre vers laquelle orienter un prospect. Les demandes arrivent par un canal unique, avec l''indication du service concerné.',
  case_lieu = 'Bénin'
WHERE slug = 'maho-multiservices' AND case_contexte LIKE 'Maho Multiservices reunit plusieurs prestations%';

UPDATE projects SET
  case_contexte = 'Prudence SALANON exerce dans la communication, un domaine où l''on est évalué sur des réalisations concrètes autant que sur un parcours. Dans ce type de métier, la question revient à chaque candidature, chaque appel d''offres et chaque prise de contact : où peut-on voir ce que vous avez fait ?',
  case_probleme = 'Les travaux et le parcours étaient dispersés entre documents, messageries et réseaux sociaux. Chaque nouvelle sollicitation imposait de reconstituer un dossier, avec des versions qui divergeaient au fil du temps. Il manquait une adresse unique, stable, que l''on puisse transmettre sans avoir à préparer quoi que ce soit.',
  case_solution = 'Un portfolio personnel développé en HTML, CSS, JavaScript et PHP, organisé autour du parcours, des compétences et des réalisations. La structure privilégie la lisibilité immédiate : un visiteur doit comprendre en quelques secondes le domaine d''intervention et accéder aux travaux sans naviguer longuement. Le site est adapté à l''affichage mobile, la plupart des liens de ce type étant ouverts depuis un téléphone.',
  case_resultat = 'Le parcours et les réalisations sont réunis à une adresse unique, transmissible en un lien. La mise à jour se fait à un seul endroit, ce qui évite la divergence entre plusieurs versions d''un même dossier.',
  case_lieu = 'Bénin'
WHERE slug = 'portfolio-prudence' AND case_contexte LIKE 'Prudence SALANON exerce dans la communication%';
