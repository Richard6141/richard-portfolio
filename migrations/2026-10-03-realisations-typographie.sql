-- ============================================================
-- Migration : typographie des titres et résumés de réalisations
-- Date       : 2026-10-03
--
-- CONTEXTE
-- Le contrôle qualité du 03/10/2026 a relevé sur l'accueil des titres de
-- réalisations avec un tiret cadratin (« Toure Distribution — Logiciel de
-- gestion ») et sans accents (« API Decoupage Administratif du Benin »).
-- Règles du site : aucun tiret cadratin, français accentué.
--
-- PORTÉE VOLONTAIREMENT LIMITÉE (revue du 03/10/2026)
-- Seuls title et description_short sont touchés : ce sont des textes
-- courts, sans lien. Les champs longs (description_long, case_*) peuvent
-- contenir des URL et des slugs (api-decoupage-benin) qu'un remplacement
-- aveugle corromprait ; ils seront réécrits avec les histoires clients.
-- Pas de remplacement de « decoupage » en minuscules pour la même raison.
-- ============================================================
UPDATE projects SET
  title             = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(title, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'Benin', 'Bénin'),
  description_short = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(description_short, ' — ', ' : '), '—', ', '), 'Toure Distribution', 'Touré Distribution'), 'Decoupage', 'Découpage'), 'Benin', 'Bénin');
