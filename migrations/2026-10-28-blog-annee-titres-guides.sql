-- Année 2026 dans le titre de trois guides vérifiés en octobre 2026 (passe « année » du 28/10/2026).
-- Sans effet si le titre a été modifié au tableau de bord : la condition porte sur l'ancien titre exact.

UPDATE blog_posts SET title = 'Prix d\'une formation IA en entreprise en 2026 : critères', updated_at = NOW() WHERE slug = 'prix-formation-ia-entreprise' AND title = 'Prix d\'une formation IA en entreprise : ce qui change';
UPDATE blog_posts SET title = 'Digitaliser une PME en 2026 : premiers chantiers et budget', updated_at = NOW() WHERE slug = 'digitalisation-des-pme-par-o-commencer-et-quel-cot' AND title = 'Digitalisation des PME : premiers chantiers et budget';
UPDATE blog_posts SET title = 'IA pour les PME en 2026 : par où commencer, quels outils ?', updated_at = NOW() WHERE slug = 'ia-pour-les-pme-par-ou-commencer' AND title = 'IA pour les PME : par où commencer, avec quels outils ?';
