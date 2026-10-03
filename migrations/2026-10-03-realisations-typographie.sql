-- ============================================================
-- Migration : typographie des réalisations
-- Date       : 2026-10-03
--
-- CONTEXTE
-- Le contrôle qualité du 03/10/2026 a relevé sur l'accueil des titres de
-- réalisations avec un tiret cadratin (« Toure Distribution — Logiciel de
-- gestion ») et sans accents (« API Decoupage Administratif du Benin »).
-- Règles du site : aucun tiret cadratin, français accentué.
-- Les remplacements sont sans effet sur un texte déjà correct.
-- ============================================================
UPDATE projects SET
  title             = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(title, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'decoupage', 'découpage'), 'Benin', 'Bénin'),
  description_short = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(description_short, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'decoupage', 'découpage'), 'Benin', 'Bénin'),
  description_long  = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(description_long, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'decoupage', 'découpage'), 'Benin', 'Bénin'),
  case_contexte     = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(case_contexte, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'decoupage', 'découpage'), 'Benin', 'Bénin'),
  case_probleme     = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(case_probleme, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'decoupage', 'découpage'), 'Benin', 'Bénin'),
  case_solution     = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(case_solution, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'decoupage', 'découpage'), 'Benin', 'Bénin'),
  case_resultat     = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(case_resultat, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'decoupage', 'découpage'), 'Benin', 'Bénin');
