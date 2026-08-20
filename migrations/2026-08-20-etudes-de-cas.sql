-- ============================================================
-- Migration : champs d'etude de cas pour les pages realisations
-- Date       : 2026-08-20
--
-- CONTEXTE
-- Les projets vivaient dans une ancre #portfolio de la page d'accueil, sous
-- forme de cartes non cliquables : aucune URL propre, donc aucune page
-- indexable, aucun resultat chiffre, aucune cible pour une requete du type
-- "logiciel de gestion Benin". La table projects portait deja de quoi faire
-- une fiche (titre, slug, description_long, technologies, client, duree,
-- annee, liens) mais rien pour raconter un CAS : le probleme de depart, ce
-- qui a ete fait, ce que ca a change.
--
-- Ces quatre colonnes comblent ce manque. Elles sont NULLABLES : les pages
-- realisations fonctionnent sans elles et affichent simplement la fiche
-- projet existante. Chaque champ rempli enrichit la page.
--
-- IMPORTANT — a remplir par vous, pas par un generateur :
-- ces champs decrivent des clients REELS et nommes (OBA Production,
-- Toure Distribution...). Un resultat invente sur une entreprise
-- identifiable est une fausse declaration, pas une figure de style. Ne
-- renseignez case_resultat qu'avec des chiffres que vous pouvez justifier,
-- et demandez l'accord du client avant de publier un chiffre le concernant.
-- Une etude de cas sans chiffre mais honnete vaut mieux qu'une invention.
--
-- A EXECUTER UNE SEULE FOIS (phpMyAdmin > SQL, ou console MySQL).
-- ============================================================

ALTER TABLE projects
  ADD COLUMN case_contexte  TEXT NULL COMMENT 'Le client, son activite, sa situation avant le projet' AFTER description_long,
  ADD COLUMN case_probleme  TEXT NULL COMMENT 'Le probleme concret a resoudre'                        AFTER case_contexte,
  ADD COLUMN case_solution  TEXT NULL COMMENT 'Ce qui a ete concu et pourquoi ces choix'              AFTER case_probleme,
  ADD COLUMN case_resultat  TEXT NULL COMMENT 'Ce que ca a change — chiffres justifiables uniquement' AFTER case_solution;

-- Verification : les quatre colonnes doivent apparaitre.
SHOW COLUMNS FROM projects LIKE 'case_%';

-- ============================================================
-- Rappel : les pages /realisations/{slug} n'affichent une section que si le
-- champ correspondant est rempli. Vous pouvez donc remplir progressivement,
-- projet par projet, sans jamais casser l'affichage.
-- ============================================================
