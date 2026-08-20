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
--                        Automatisation" — ne correspondait plus ni au
--                        <title> ni a la meta description actuels.
--   2. og_description : "Portfolio professionnel de Somasse Richard SALANON.
--                        Decouvrez mes projets et competences en
--                        developpement informatiques et automatisations."
--                        — texte d'une version anterieure du site, avec une
--                        faute d'accord ("developpement informatiques").
--   3. meta_title     : se terminait par "| Richard" au lieu de
--                        "| Richard SALANON". La troncature tenait a la
--                        limite de 60 caracteres : la formulation d'origine
--                        en faisait 67. Celle retenue en fait 59 ET porte le
--                        nom complet.
--
-- CHOIX : og_title et og_description sont remis a NULL plutot que reecrits.
-- portfolio/index.php retombe alors sur meta_title et meta_description :
-- une seule source de verite, et le partage social ne peut plus diverger du
-- referencement. Pour un texte social distinct, il suffit de les resaisir
-- dans le dashboard — cette migration ne les ecrasera plus (voir le WHERE).
--
-- Applique automatiquement par migrate.php apres chaque deploiement.
-- REJOUABLE : le WHERE ne cible que les valeurs obsoletes connues. Une fois
-- corrigees, la migration ne modifie plus rien, et une resaisie ulterieure
-- dans le dashboard est preservee.
-- ============================================================

UPDATE seo_config
   SET og_title = NULL
 WHERE og_title LIKE '%Développement web/mobile et Automatisation%'
    OR og_title LIKE '%Developpement web/mobile et Automatisation%';

UPDATE seo_config
   SET og_description = NULL
 WHERE og_description LIKE '%Portfolio professionnel de%'
    OR og_description LIKE '%développement informatiques%'
    OR og_description LIKE '%developpement informatiques%';

UPDATE seo_config
   SET meta_title = 'Développeur web & automatisation au Bénin | Richard SALANON'
 WHERE meta_title LIKE '%| Richard'
    AND meta_title NOT LIKE '%| Richard SALANON';
