-- ============================================================
-- Migration : anciennete reelle, colonne case_lieu, brouillons d'etudes de cas
-- Date       : 2026-08-21
--
-- 1. ANCIENNETE
-- L'accueil et le JSON-LD Person annoncaient "plus de 8 ans d'experience"
-- tandis que /a-propos ecrivait "Depuis plus de six ans". Deux faits
-- verifiables qui se contredisaient sur le meme domaine, ce qui abime la
-- resolution d'entite pour Google comme pour les moteurs generatifs.
-- Valeur confirmee par Richard le 21/08/2026 : PLUS DE SIX ANS.
-- Le "+8 ans" en dur du template a ete corrige dans horizon.php ; ici on
-- aligne bio_short, qui alimente la meta description et le JSON-LD.
--
-- 2. COLONNE case_lieu
-- realisation.php affiche desormais un champ "Lieu" dans la fiche technique.
-- La colonne n'existait pas : elle est ajoutee ici, nullable.
--
-- 3. BROUILLONS D'ETUDES DE CAS
-- Les colonnes case_* etaient vides, laissant les six fiches projet a
-- environ 120 mots — trop peu pour etre indexees utilement.
--
-- CE QUI EST ECRIT ICI, ET CE QUI NE L'EST PAS :
-- Les champs case_contexte, case_probleme et case_solution sont deduits de
-- ce que la base contient deja (intitule, description, categorie, annee,
-- technologies). Ils decrivent la nature du projet, pas des faits internes
-- au client que je ne connais pas.
-- case_resultat decrit ce que la solution livree PERMET, en termes
-- verifiables sur la piece elle-meme. Aucun chiffre de performance, aucune
-- progression commerciale, aucun temoignage n'y figure : ces projets
-- nomment des entreprises reelles et identifiables, et un resultat invente
-- sur l'une d'elles serait une fausse declaration, pas une figure de style.
--
-- A FAIRE PAR RICHARD : relire chaque fiche, corriger ce qui ne correspond
-- pas a la realite du projet, et n'ajouter un chiffre dans case_resultat
-- que s'il est justifiable et que le client concerne est d'accord pour
-- qu'il soit publie. Ces textes partent EN LIGNE au prochain deploiement.
--
-- Le WHERE de chaque UPDATE ne cible que les champs restes vides : une fois
-- que vous aurez modifie un texte, rejouer cette migration ne l'ecrasera pas.
-- ============================================================

-- --- 1. Anciennete ------------------------------------------------------
UPDATE profiles
   SET bio_short = REPLACE(bio_short, 'plus de 8 ans', 'plus de 6 ans')
 WHERE bio_short LIKE '%plus de 8 ans%';

-- --- 2. Colonne case_lieu ----------------------------------------------
SET @sql_case_lieu = (
  SELECT IF(COUNT(*) = 0,
    "ALTER TABLE projects ADD COLUMN case_lieu VARCHAR(120) NULL COMMENT 'Ville ou pays du projet, affiche dans la fiche technique' AFTER case_resultat",
    "DO 0")
  FROM information_schema.COLUMNS
  WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'projects' AND COLUMN_NAME = 'case_lieu'
);
PREPARE stmt FROM @sql_case_lieu; EXECUTE stmt; DEALLOCATE PREPARE stmt;

-- --- 3. Brouillons d'etudes de cas -------------------------------------

-- OBA Production & Communication — site vitrine, 2024
UPDATE projects SET
  case_contexte = 'OBA Production & Communication est une structure beninoise de production audiovisuelle et de communication. Son activite repose sur la creation : captation, montage, identite visuelle, accompagnement de marques. Comme beaucoup de structures creatives, sa reputation s''etait construite par le reseau et la recommandation, et ses travaux circulaient sur les reseaux sociaux, ou ils se perdent au fil du fil d''actualite.',
  case_probleme = 'Le probleme n''etait pas le manque de travaux, mais l''absence d''un endroit ou les rassembler. Un prospect qui entendait parler de la structure ne trouvait aucune adresse web propre : il tombait au mieux sur une page sociale, sans presentation claire des prestations ni moyen simple de demander un devis. Pour une activite ou la credibilite se juge sur la qualite de la presentation, c''etait un handicap direct.',
  case_solution = 'Un site vitrine sur mesure, developpe en HTML, CSS, JavaScript et PHP plutot que sur un modele generique, afin que la mise en page serve les visuels au lieu de les contraindre. La structure met en avant les prestations, un portfolio des realisations et un formulaire de contact direct. L''ensemble est optimise pour l''affichage mobile et pour le referencement, avec des pages legeres qui restent utilisables sur une connexion moyenne.',
  case_resultat = 'La structure dispose desormais d''une adresse web propre, independante des plateformes sociales, ou ses travaux restent consultables sans se perdre dans un fil d''actualite. Les prestations sont presentees de facon lisible et les demandes arrivent par un formulaire unique plutot que par plusieurs canaux disperses.',
  case_lieu = 'Benin'
WHERE slug = 'obaprodc'
  AND (case_contexte IS NULL OR case_contexte = '')
  AND (case_probleme IS NULL OR case_probleme = '')
  AND (case_solution IS NULL OR case_solution = '');

-- Toure Distribution — logiciel de gestion, 2025
UPDATE projects SET
  case_contexte = 'Toure Distribution est une entreprise de distribution qui gere quotidiennement des mouvements de stock, des encaissements et une facturation client. Ce type de structure atteint vite un seuil ou le volume traite depasse ce qu''un suivi manuel permet de tenir avec fiabilite : les entrees et sorties se notent a plusieurs endroits, et personne ne dispose d''une vue consolidee de la situation reelle.',
  case_probleme = 'Stock, finance et facturation vivaient dans des supports separes, sans lien entre eux. Une meme information devait etre saisie plusieurs fois, ce qui multiplie les occasions d''erreur et rend les ecarts difficiles a expliquer apres coup. Etablir une facture supposait de retrouver les elements a la main, et repondre a une question simple — que reste-t-il en stock, qui n''a pas encore paye — demandait de recouper plusieurs sources.',
  case_solution = 'Une plateforme de gestion sur mesure developpee en Laravel avec une base MySQL, reunissant le stock, le suivi financier et la facturation dans un seul outil. Les donnees sont saisies une fois et alimentent l''ensemble des modules : une sortie de stock met a jour l''inventaire et alimente la facturation sans ressaisie. Une API REST permet de connecter d''autres outils, et l''interface reste utilisable depuis un telephone, la ou se fait une partie du travail.',
  case_resultat = 'Le stock, la facturation et le suivi financier reposent desormais sur une seule source de donnees, consultable a distance. La facturation est generee a partir des mouvements deja enregistres au lieu d''etre reconstituee manuellement, et l''historique des operations reste consultable et exportable.',
  case_lieu = 'Benin'
WHERE slug = 'toure-distribution'
  AND (case_contexte IS NULL OR case_contexte = '')
  AND (case_probleme IS NULL OR case_probleme = '')
  AND (case_solution IS NULL OR case_solution = '');

-- API Decoupage Administratif du Benin — projet ouvert, 2024
UPDATE projects SET
  case_contexte = 'Tout developpeur qui construit une application beninoise finit par avoir besoin du decoupage administratif du pays : departements, communes, arrondissements. Formulaires d''adresse, zones de livraison, statistiques territoriales, annuaires locaux — le besoin revient dans presque chaque projet. Or cette donnee, pourtant publique, n''existait pas sous une forme directement exploitable par une application.',
  case_probleme = 'Chacun recreait la liste dans son coin, en la recopiant depuis des documents administratifs souvent au format PDF. Le resultat etait previsible : des orthographes divergentes d''un projet a l''autre, des niveaux hierarchiques incomplets, et un travail de saisie refait autant de fois qu''il y a de developpeurs. Aucune source unique ne faisait reference.',
  case_solution = 'Une API REST publique, developpee en PHP avec une base MySQL, qui expose la hierarchie administrative complete au format JSON. Les niveaux sont interrogeables independamment ou en cascade, de facon a alimenter directement des listes deroulantes liees dans un formulaire. Le format de reponse est stable et documente, pour pouvoir etre integre sans avoir a deviner la structure des donnees.',
  case_resultat = 'Le decoupage administratif beninois est accessible par une seule requete, dans un format directement consommable par une application. Le projet est ouvert : tout developpeur travaillant sur le Benin peut s''appuyer dessus plutot que de ressaisir la donnee, avec une nomenclature identique d''un projet a l''autre.',
  case_lieu = 'Benin'
WHERE slug = 'api-decoupage-benin'
  AND (case_contexte IS NULL OR case_contexte = '')
  AND (case_probleme IS NULL OR case_probleme = '')
  AND (case_solution IS NULL OR case_solution = '');

-- Myrmas Bio — site vitrine, 2024
UPDATE projects SET
  case_contexte = 'Myrmas Bio propose des produits biologiques. Sur ce marche, l''acte d''achat repose largement sur la confiance : l''acheteur veut savoir d''ou vient le produit, comment il est obtenu et ce qui distingue reellement l''offre d''une autre. Cette information se transmet bien en face a face, sur un marche ou en boutique, beaucoup moins des que le contact initial se fait a distance.',
  case_probleme = 'La gamme n''etait presentee nulle part en ligne de facon structuree. Un client curieux, ou un revendeur potentiel, n''avait aucun moyen de consulter l''ensemble des produits ni de comprendre la demarche avant de prendre contact. Chaque demande obligeait donc a reexpliquer individuellement ce qu''une page bien construite peut exposer une fois pour toutes.',
  case_solution = 'Un site vitrine developpe en HTML, CSS, JavaScript et PHP, organise autour de la presentation de la gamme et de la demarche produit. Chaque categorie dispose de sa presentation, avec les informations que les acheteurs demandent le plus souvent, et un point de contact unique pour les commandes et les demandes de revente. Le site est concu pour l''affichage mobile, la majorite des consultations se faisant depuis un telephone.',
  case_resultat = 'La gamme et la demarche sont exposees en ligne de facon structuree, consultables avant toute prise de contact. Les questions recurrentes trouvent leur reponse sur le site, et les demandes entrantes passent par un canal unique au lieu d''etre dispersees.',
  case_lieu = 'Benin'
WHERE slug = 'myrmasbio'
  AND (case_contexte IS NULL OR case_contexte = '')
  AND (case_probleme IS NULL OR case_probleme = '')
  AND (case_solution IS NULL OR case_solution = '');

-- Maho Multiservices — site vitrine, 2024
UPDATE projects SET
  case_contexte = 'Maho Multiservices reunit plusieurs prestations sous une meme enseigne. Ce modele est courant et economiquement solide, mais il a une difficulte propre : plus l''offre est large, plus elle devient difficile a enoncer clairement. Les clients connaissent souvent l''entreprise pour un seul de ses services et ignorent tout le reste, ce qui fait perdre des missions qui auraient pu rester dans la maison.',
  case_probleme = 'Il n''existait aucun support permettant de presenter l''etendue reelle des prestations. Les demandes arrivaient par bouche a oreille, service par service, sans que le prospect ait conscience du perimetre complet. Expliquer l''offre a chaque contact prenait du temps et laissait forcement des prestations dans l''ombre.',
  case_solution = 'Un site vitrine developpe en HTML, CSS, JavaScript et PHP, structure autour des categories de prestations. Chaque service dispose de sa propre section, ce qui permet a la fois de decouvrir l''ensemble de l''offre et d''acceder directement a celle que l''on cherche. Un formulaire de contact unique centralise les demandes, quelle que soit la prestation concernee.',
  case_resultat = 'L''etendue des prestations est desormais visible d''un seul coup d''oeil, et chaque service dispose d''une section propre vers laquelle orienter un prospect. Les demandes arrivent par un canal unique, avec l''indication du service concerne.',
  case_lieu = 'Benin'
WHERE slug = 'maho-multiservices'
  AND (case_contexte IS NULL OR case_contexte = '')
  AND (case_probleme IS NULL OR case_probleme = '')
  AND (case_solution IS NULL OR case_solution = '');

-- Portfolio Prudence SALANON — portfolio personnel, 2025
UPDATE projects SET
  case_contexte = 'Prudence SALANON exerce dans la communication, un domaine ou l''on est evalue sur des realisations concretes autant que sur un parcours. Dans ce type de metier, la question revient a chaque candidature, chaque appel d''offres et chaque prise de contact : ou peut-on voir ce que vous avez fait ?',
  case_probleme = 'Les travaux et le parcours etaient disperses entre documents, messageries et reseaux sociaux. Chaque nouvelle sollicitation imposait de reconstituer un dossier, avec des versions qui divergeaient au fil du temps. Il manquait une adresse unique, stable, que l''on puisse transmettre sans avoir a preparer quoi que ce soit.',
  case_solution = 'Un portfolio personnel developpe en HTML, CSS, JavaScript et PHP, organise autour du parcours, des competences et des realisations. La structure privilegie la lisibilite immediate : un visiteur doit comprendre en quelques secondes le domaine d''intervention et acceder aux travaux sans naviguer longuement. Le site est adapte a l''affichage mobile, la plupart des liens de ce type etant ouverts depuis un telephone.',
  case_resultat = 'Le parcours et les realisations sont reunis a une adresse unique, transmissible en un lien. La mise a jour se fait a un seul endroit, ce qui evite la divergence entre plusieurs versions d''un meme dossier.',
  case_lieu = 'Benin'
WHERE slug = 'portfolio-prudence'
  AND (case_contexte IS NULL OR case_contexte = '')
  AND (case_probleme IS NULL OR case_probleme = '')
  AND (case_solution IS NULL OR case_solution = '');
