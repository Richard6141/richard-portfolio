-- ============================================================
-- Migration : champ "contenu detaille" pour les pages services
-- Date       : 2026-07-28
-- Objectif   : donner a chaque service un corps de texte long et
--              UNIQUE (methode, livrables, FAQ...) afin de corriger
--              la quasi-duplication qui empechait l'indexation Google.
-- A executer UNE SEULE FOIS (phpMyAdmin > SQL, ou console MySQL).
-- ============================================================

ALTER TABLE services
  ADD COLUMN content_html LONGTEXT NULL AFTER features;
