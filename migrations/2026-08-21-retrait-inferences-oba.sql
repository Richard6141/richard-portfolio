-- ============================================================
-- Migration : retrait des inferences non fondees sur la fiche OBA Production
-- Date       : 2026-08-21
--
-- Meme traitement que pour la fiche Prudence SALANON, meme raison.
--
-- La base contenait, pour ce projet :
--     titre  : OBA Production & Communication
--     desc   : Site web vitrine pour OBA Production & Communication.
--     faits  : Client=OBA Production | Web | 2024 | HTML/CSS, JS, PHP
--
-- Deux champs publies affirmaient davantage :
--
--   case_contexte : detaillait un catalogue de prestations ("captation,
--     montage, identite visuelle, accompagnement de marques") absent des
--     donnees, puis affirmait que "sa reputation s'etait construite par le
--     reseau et la recommandation" et que "ses travaux circulaient sur les
--     reseaux sociaux". Rien de tout cela n'etait documente.
--
--   case_probleme : entierement invente — un prospect qui "ne trouvait
--     aucune adresse web propre", une credibilite en souffrance. Plausible,
--     mais non verifie.
--
--   case_resultat : sa formulation reprenait ces premisses ("independante
--     des plateformes sociales", "sans se perdre dans un fil d'actualite",
--     "plutot que par plusieurs canaux disperses"). Il est reecrit pour ne
--     decrire que la piece livree.
--
-- Le nom de l'entreprise et sa nature ("production et communication") ne
-- sont PAS en cause : ils figurent dans sa raison sociale, deja enregistree
-- en base. Ce qui est retire, ce sont les affirmations ajoutees sans source.
--
-- CE QUI EST CONSERVE
-- case_solution decrit la piece livree : pile technique reellement
-- enregistree, type de projet issu de la description, et partis pris de
-- conception qui sont les miens et verifiables sur le site.
--
-- REJOUABLE : chaque WHERE cible le texte errone precis.
-- ============================================================

UPDATE projects
   SET case_contexte = NULL
 WHERE slug = 'obaprodc'
   AND case_contexte LIKE 'OBA Production & Communication est une structure béninoise%';

UPDATE projects
   SET case_probleme = NULL
 WHERE slug = 'obaprodc'
   AND case_probleme LIKE 'Le problème n''était pas le manque de travaux%';

UPDATE projects
   SET case_resultat = 'Les prestations et les réalisations sont réunies sur une adresse web propre, avec un formulaire de contact unique.'
 WHERE slug = 'obaprodc'
   AND case_resultat LIKE 'La structure dispose désormais d''une adresse web propre, indépendante des plateformes sociales%';
