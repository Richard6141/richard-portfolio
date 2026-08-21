-- ============================================================
-- Migration : profil LinkedIn unique dans le sameAs
-- Date       : 2026-08-21
--
-- CONTEXTE
-- Le JSON-LD declarait DEUX profils LinkedIn differents pour la meme
-- personne : /in/richard-salanon (garanti en dur dans portfolio/index.php)
-- et /in/salanon-richard (saisi dans Dashboard > Reseaux sociaux, donc
-- present dans social_links). Un seul peut faire foi, et le doublon dilue
-- la resolution d'entite : rien n'indique a Google ni a un moteur
-- generatif lequel est la vraie page.
--
-- Profil confirme par Richard le 21/08/2026 :
--   https://www.linkedin.com/in/richard-salanon/
--
-- On corrige donc la ligne du dashboard. La deduplication cote code a
-- egalement ete rendue robuste (helpers/functions.php,
-- normalizeProfileUrls) : desormais deux URL qui ne different que par la
-- barre finale, le "www." ou la casse ne peuvent plus coexister dans le
-- sameAs. Sans ce correctif, une resaisie dans le dashboard recreerait le
-- probleme.
--
-- REJOUABLE : le WHERE ne cible que l'ancienne valeur erronee.
-- ============================================================

UPDATE social_links
   SET url = 'https://www.linkedin.com/in/richard-salanon/'
 WHERE url LIKE '%linkedin.com/in/salanon-richard%';

-- Si la meme adresse se retrouve saisie deux fois dans le dashboard, ne
-- garder que la premiere ligne (la plus ancienne).
DELETE s1 FROM social_links s1
  INNER JOIN social_links s2
    ON s1.user_id = s2.user_id
   AND s1.id > s2.id
   AND TRIM(TRAILING '/' FROM s1.url) = TRIM(TRAILING '/' FROM s2.url);
