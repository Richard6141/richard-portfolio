-- ============================================================
-- Migration : reprise du blog (vague 1F), schéma
-- Date       : 2026-10-07
-- content passe en MEDIUMTEXT (un article repris peut dépasser les 64 Ko de TEXT) ;
-- meta porte la meta description (140 à 155 caractères), distincte du résumé,
-- qui devient le « En bref » affiché sous le titre.
-- ============================================================
ALTER TABLE blog_posts MODIFY content MEDIUMTEXT NULL;
ALTER TABLE blog_posts ADD COLUMN meta VARCHAR(160) NULL AFTER summary;
