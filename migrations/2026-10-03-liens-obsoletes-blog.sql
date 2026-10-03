-- ============================================================
-- Migration : liens obsolètes dans le contenu des articles
-- Date       : 2026-10-03
--
-- CONTEXTE
-- L'audit du 03/10/2026 a relevé 14 liens vers richard.salanon.info
-- (ancien domaine, redirigé en 301) dans 5 articles, et 5 liens vers
-- /services/creation-de-site-web, ancien slug lui aussi redirigé.
-- Chaque lien interne doit viser directement sa page finale.
-- Ordre : domaine d'abord (http et https), puis passage en https,
-- puis ancien slug.
-- ============================================================
UPDATE blog_posts
   SET content = REPLACE(content, '//richard.salanon.info', '//richardsalanon.com')
 WHERE content LIKE '%//richard.salanon.info%';

UPDATE blog_posts
   SET content = REPLACE(content, 'http://richardsalanon.com', 'https://richardsalanon.com')
 WHERE content LIKE '%http://richardsalanon.com%';

UPDATE blog_posts
   SET content = REPLACE(content, '/services/creation-de-site-web', '/services/site-vitrine-professionnel')
 WHERE content LIKE '%/services/creation-de-site-web%';
