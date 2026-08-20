-- ============================================================
-- Migration : metadonnees SEO obsoletes stockees en base
-- Date       : 2026-08-20
--
-- CONTEXTE
-- L'audit SEO/GEO/AEO a releve trois defauts qui ne sont PAS dans le code :
-- ce sont des valeurs saisies dans Dashboard > SEO, qui ecrasent les
-- fallbacks (corrects) calcules par portfolio/index.php.
--
--   1. og_title       : "Richard SALANON - Developpement web/mobile et
--                        Automatisation" — ne correspond plus ni au <title>
--                        ni a la meta description actuels.
--   2. og_description : "Portfolio professionnel de Somasse Richard SALANON.
--                        Decouvrez mes projets et competences en
--                        developpement informatiques et automatisations."
--                        — texte d'une version anterieure du site, avec une
--                        faute d'accord ("developpement informatiques").
--   3. meta_title     : se terminait par "| Richard" au lieu de
--                        "| Richard SALANON". La troncature tenait a la
--                        limite de 60 caracteres : "Developpeur Web, Mobile &
--                        Automatisation au Benin | Richard SALANON" fait 67
--                        caracteres. La formulation ci-dessous fait 59
--                        caracteres ET porte le nom complet.
--
-- CHOIX : og_title et og_description sont REMIS A VIDE plutot que reecrits.
-- portfolio/index.php retombe alors automatiquement sur meta_title et
-- meta_description (lignes 146-147) : une seule source de verite, et le
-- partage social ne pourra plus diverger du referencement. Pour un texte
-- social distinct, il suffira de les resaisir dans le dashboard.
--
-- A EXECUTER UNE SEULE FOIS (phpMyAdmin > SQL, ou console MySQL).
-- ============================================================

-- --- Avant / apres : a lancer pour constater l'etat actuel -------------
-- SELECT meta_title, og_title, og_description FROM seo_config;

START TRANSACTION;

UPDATE seo_config
   SET meta_title     = 'Développeur web & automatisation au Bénin | Richard SALANON',
       og_title       = NULL,
       og_description = NULL
 WHERE user_id = (SELECT id FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1);

-- Verification : doit renvoyer 1 ligne, og_title et og_description a NULL,
-- et un meta_title de 59 caracteres.
SELECT meta_title,
       CHAR_LENGTH(meta_title) AS longueur_titre,
       og_title,
       og_description
  FROM seo_config
 WHERE user_id = (SELECT id FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1);

-- Relire le resultat ci-dessus AVANT de valider.
COMMIT;
-- En cas de doute : ROLLBACK;
