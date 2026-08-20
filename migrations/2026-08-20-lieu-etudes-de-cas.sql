-- ============================================================
-- Migration : lieu (ville + pays) des etudes de cas
-- Date       : 2026-08-20
--
-- CONTEXTE
-- Les fiches realisations affichent le client, l'annee et la duree, mais
-- rien sur le LIEU. Or la moitie des projets sont hors du Benin :
-- Toure Distribution et QueenKBeauty en Cote d'Ivoire, OBA TV a Cotonou,
-- Biou Services a Bohicon.
--
-- Nommer le pays sert deux choses :
--  1. la preuve, pour un prospect senegalais ou francais, que des projets
--     ont deja ete menes hors du Benin ;
--  2. l'ancrage geographique du schema CreativeWork, que les moteurs
--     generatifs utilisent pour relier une realisation a un territoire.
--
-- Un seul champ libre plutot que ville + pays separes : les formes varient
-- ("Abidjan, Cote d'Ivoire", "A distance depuis Cotonou", "Bruxelles,
-- Belgique") et un champ unique evite d'inventer une structure que les
-- donnees reelles ne suivent pas.
--
-- A REMPLIR PAR VOUS : ce champ decrit des clients reels et nommes.
-- Applique automatiquement par migrate.php apres chaque deploiement.
-- Ecrite pour etre REJOUABLE sans erreur.
-- ============================================================

SET @sql_case_lieu = (
  SELECT IF(COUNT(*) = 0,
    "ALTER TABLE projects ADD COLUMN case_lieu VARCHAR(120) NULL COMMENT 'Ville et pays du client, ex. Abidjan, Cote d Ivoire' AFTER case_resultat",
    "DO 0")
  FROM information_schema.COLUMNS
  WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'projects' AND COLUMN_NAME = 'case_lieu'
);
PREPARE stmt FROM @sql_case_lieu; EXECUTE stmt; DEALLOCATE PREPARE stmt;
