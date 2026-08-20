-- ============================================================
-- Migration : champs d'etude de cas pour les pages realisations
-- Date       : 2026-08-20
--
-- CONTEXTE
-- Les projets vivaient dans une ancre #portfolio de la page d'accueil, en
-- cartes non cliquables : aucune URL propre, donc aucune page indexable et
-- aucune cible pour une requete du type "logiciel de gestion Benin". La
-- table projects portait deja de quoi faire une fiche (titre, slug,
-- description_long, technologies, client, duree, annee, liens) mais rien
-- pour raconter un CAS : le probleme de depart, ce qui a ete fait, ce que
-- ca a change.
--
-- Ces quatre colonnes comblent ce manque. Elles sont NULLABLES : les pages
-- realisations fonctionnent sans elles et affichent la fiche projet seule.
-- Chaque champ rempli fait apparaitre sa section.
--
-- IMPORTANT — a remplir par vous, pas par un generateur :
-- ces champs decrivent des clients REELS et nommes (Toure Distribution,
-- OBA Production, MyrmasBio...). Un resultat invente sur une entreprise
-- identifiable est une fausse declaration, pas une figure de style. Ne
-- renseignez case_resultat qu'avec des chiffres justifiables, et demandez
-- l'accord du client avant de publier un chiffre le concernant.
--
-- Applique automatiquement par migrate.php apres chaque deploiement.
-- Ecrite pour etre REJOUABLE sans erreur (voir le bloc ci-dessous).
-- ============================================================

-- MySQL ne connait pas "ADD COLUMN IF NOT EXISTS" avant la 8.0.29 et
-- Hostinger n'est pas garanti sur cette version. On interroge donc le
-- schema et on ne construit l'ALTER que pour les colonnes absentes :
-- rejouer la migration devient sans effet au lieu d'echouer.

SET @sql_case_contexte = (
  SELECT IF(COUNT(*) = 0,
    "ALTER TABLE projects ADD COLUMN case_contexte TEXT NULL COMMENT 'Le client, son activite, sa situation avant le projet' AFTER description_long",
    "DO 0")
  FROM information_schema.COLUMNS
  WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'projects' AND COLUMN_NAME = 'case_contexte'
);
PREPARE stmt FROM @sql_case_contexte; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql_case_probleme = (
  SELECT IF(COUNT(*) = 0,
    "ALTER TABLE projects ADD COLUMN case_probleme TEXT NULL COMMENT 'Le probleme concret a resoudre' AFTER case_contexte",
    "DO 0")
  FROM information_schema.COLUMNS
  WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'projects' AND COLUMN_NAME = 'case_probleme'
);
PREPARE stmt FROM @sql_case_probleme; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql_case_solution = (
  SELECT IF(COUNT(*) = 0,
    "ALTER TABLE projects ADD COLUMN case_solution TEXT NULL COMMENT 'Ce qui a ete concu et pourquoi ces choix' AFTER case_probleme",
    "DO 0")
  FROM information_schema.COLUMNS
  WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'projects' AND COLUMN_NAME = 'case_solution'
);
PREPARE stmt FROM @sql_case_solution; EXECUTE stmt; DEALLOCATE PREPARE stmt;

SET @sql_case_resultat = (
  SELECT IF(COUNT(*) = 0,
    "ALTER TABLE projects ADD COLUMN case_resultat TEXT NULL COMMENT 'Ce que ca a change — chiffres justifiables uniquement' AFTER case_solution",
    "DO 0")
  FROM information_schema.COLUMNS
  WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'projects' AND COLUMN_NAME = 'case_resultat'
);
PREPARE stmt FROM @sql_case_resultat; EXECUTE stmt; DEALLOCATE PREPARE stmt;
