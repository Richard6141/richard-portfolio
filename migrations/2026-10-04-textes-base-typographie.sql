-- ============================================================
-- Migration : tirets cadratins, ancienne marque et accents dans les textes en base
-- Date       : 2026-10-04
--
-- CONTEXTE
-- Le contrôle qualité du site en production (crawl du 03/10/2026) signale
-- 5 pages en échec, toutes à cause de textes stockés en base : tirets
-- cadratins, l'ancienne marque « Richard Technologies » et quelques mots
-- sans accents. Règles du site : aucun tiret cadratin, marque unique
-- « Richard SALANON », français accentué. Accord de Richard du 03/10/2026
-- pour corriger la base.
--
-- PORTÉE
-- Remplacements ciblés, phrase par phrase (relevés un par un le 04/10/2026),
-- jamais de remplacement global du caractère : chaque phrase garde son sens.
-- Rejouable sans effet : une chaîne déjà corrigée n'est plus trouvée.
-- ============================================================

-- Article « J'ai construit un robot qui prospecte 500 artisans par mois »
UPDATE blog_posts SET content = REPLACE(content,
    'retourne les bons selecteurs — meme sur des formulaires',
    'retourne les bons sélecteurs, même sur des formulaires')
WHERE id = 1;
UPDATE blog_posts SET content = REPLACE(content,
    'Quels selecteurs CSS correspondent au nom, email, telephone, entreprise et message ?',
    'Quels sélecteurs CSS correspondent au nom, à l''e-mail, au téléphone, à l''entreprise et au message ?')
WHERE id = 1;

-- Article « Combien coûte un site web au Bénin »
UPDATE blog_posts SET content = REPLACE(content,
    '<h3>FAQ — Prix d''un site web au Bénin</h3>',
    '<h3>FAQ : prix d''un site web au Bénin</h3>')
WHERE id = 2;
UPDATE blog_posts SET content = REPLACE(content,
    'Chez Richard Technologies, le paiement est flexible',
    'Avec Richard SALANON, le paiement est flexible')
WHERE id = 2;

-- Article « SEO 2026 : apparaître dans les réponses IA »
UPDATE blog_posts SET content = REPLACE(content,
    ' — via les AI Overviews de Google, ChatGPT ou Gemini — sans jamais',
    ', via les AI Overviews de Google, ChatGPT ou Gemini, sans jamais')
WHERE id = 3;

-- Article « n8n vs Zapier vs Make » (redirigé vers son comparatif, corrigé quand même)
UPDATE blog_posts SET content = REPLACE(content,
    'À l''exécution — gratuit en auto-hébergé',
    'À l''exécution ; gratuit en auto-hébergé')
WHERE id = 11;

-- Réalisation « Touré Distribution »
UPDATE projects SET case_probleme = REPLACE(case_probleme,
    'répondre à une question simple — que reste-t-il en stock, qui n''a pas encore payé — demandait',
    'répondre à une question simple (que reste-t-il en stock, qui n''a pas encore payé ?) demandait')
WHERE slug = 'toure-distribution';

-- Réalisation « API du découpage administratif du Bénin »
UPDATE projects SET case_contexte = REPLACE(case_contexte,
    'annuaires locaux — le besoin revient',
    'annuaires locaux : le besoin revient')
WHERE slug = 'api-decoupage-benin';
