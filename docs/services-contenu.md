# Contenu des services — Richard Technologies

> À saisir dans **Dashboard → Services** (ou via le SQL en bas).
> L'icône est générée automatiquement en SVG selon le titre (laisse le champ icône vide).
> Marque **« Automatisation & IA » comme “Populaire / featured”** → grande carte mise en avant.

| # | Titre | Description (carte) | Prix | Featured |
|---|-------|---------------------|------|----------|
| 1 | Création de site web | Sites vitrine et entreprise rapides, modernes et optimisés pour Google. Une présence pro qui inspire confiance. | dès 300 000 FCFA | Non |
| 2 | Site e-commerce | Boutiques en ligne complètes avec paiement Mobile Money, carte bancaire et PayPal. Vendez 24h/24. | Sur devis | Non |
| 3 | Application web sur-mesure | Logiciels de gestion, SaaS, ERP légers et back-offices taillés pour vos processus métier. | Sur devis | Non |
| 4 | Application mobile (Android & iOS) | Applications mobiles performantes, de l'idée jusqu'à la publication sur Play Store et App Store. | Sur devis | Non |
| 5 | Automatisation & IA | n8n, Make, bots et chatbots qui automatisent vos tâches répétitives et votre prospection. Gagnez des heures chaque semaine. | Sur devis | **Oui** |
| 6 | Référencement SEO | Soyez trouvé en premier sur Google. Audit, optimisation technique et contenu pour attirer des clients. | dès 75 000 FCFA | Non |
| 7 | Maintenance & support | Mises à jour, sauvegardes, sécurité et dépannage rapide pour garder vos outils en pleine forme. | Forfait mensuel | Non |
| 8 | Formation en programmation | Apprenez à coder par la pratique : HTML/CSS, JavaScript, PHP/Laravel, WordPress. Débutants et équipes. | Sur devis | Non |
| 9 | Audit & étude de projet | Une idée ? Je la cadre : faisabilité, cahier des charges, choix techniques et budget. | Sur devis | Non |
| 10 | Digitalisation d'entreprise | Transformez vos process papier en outils numériques efficaces. De l'analyse à la mise en œuvre. | Sur devis | Non |

## Détail (features — utiles pour les futures pages services)

1. **Création de site web** : Design sur-mesure responsive · Optimisation SEO incluse · Nom de domaine + hébergement · Formulaire de contact · Formation à la prise en main
2. **Site e-commerce** : Catalogue produits · Paiement Mobile Money / carte / PayPal · Gestion des commandes & stock · Livraison · Tableau de bord vendeur
3. **Application web sur-mesure** : Analyse des besoins · Dashboard & reporting · Gestion des utilisateurs et rôles · API & intégrations · Sécurisé et évolutif
4. **Application mobile** : Android & iOS (Flutter) · UX/UI soignée · Notifications push · Mode hors-ligne · Publication sur les stores
5. **Automatisation & IA** : Automatisation des process · Chatbots & assistants IA · Intégration de vos outils (API) · Prospection automatisée · Rapports automatiques
6. **Référencement SEO** : Audit SEO complet · Optimisation technique · Mots-clés & contenu · SEO local (Google Business) · Suivi des positions
7. **Maintenance & support** : Mises à jour & sauvegardes · Corrections de bugs · Sécurité & surveillance · Support réactif · Forfait ou à la demande
8. **Formation** : Cours personnalisés · Projets concrets · Présentiel ou à distance · Supports inclus · Suivi post-formation
9. **Audit & étude de projet** : Étude de faisabilité · Cahier des charges · Choix des technologies · Estimation budget & délais · Feuille de route
10. **Digitalisation** : Diagnostic digital · Dématérialisation · Outils sur-mesure · Formation des équipes · Accompagnement au changement

---

## ⚡ Option rapide : SQL d'insertion (phpMyAdmin)

> **Sauvegarde d'abord ta table `services`.** Ceci ajoute les 10 services au compte actif.
> Vérifie le nom exact des colonnes si une erreur apparaît.

```sql
INSERT INTO services (user_id, title, description, icon, price, features, cta_text, cta_url, is_featured, sort_order) VALUES
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Création de site web', 'Sites vitrine et entreprise rapides, modernes et optimisés pour Google. Une présence pro qui inspire confiance.', '', 'dès 300 000 FCFA', '["Design sur-mesure responsive","Optimisation SEO incluse","Nom de domaine + hébergement","Formulaire de contact","Formation à la prise en main"]', 'Demander un devis', '#contact', 0, 0),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Site e-commerce', 'Boutiques en ligne complètes avec paiement Mobile Money, carte bancaire et PayPal. Vendez 24h/24.', '', 'Sur devis', '["Catalogue produits","Paiement Mobile Money / carte / PayPal","Gestion des commandes & stock","Livraison","Tableau de bord vendeur"]', 'Demander un devis', '#contact', 0, 1),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Application web sur-mesure', 'Logiciels de gestion, SaaS, ERP légers et back-offices taillés pour vos processus métier.', '', 'Sur devis', '["Analyse des besoins","Dashboard & reporting","Gestion des utilisateurs et rôles","API & intégrations","Sécurisé et évolutif"]', 'Demander un devis', '#contact', 0, 2),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Application mobile (Android & iOS)', 'Applications mobiles performantes, de l''idée jusqu''à la publication sur Play Store et App Store.', '', 'Sur devis', '["Android & iOS (Flutter)","UX/UI soignée","Notifications push","Mode hors-ligne","Publication sur les stores"]', 'Demander un devis', '#contact', 0, 3),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Automatisation & IA', 'n8n, Make, bots et chatbots qui automatisent vos tâches répétitives et votre prospection. Gagnez des heures chaque semaine.', '', 'Sur devis', '["Automatisation des process","Chatbots & assistants IA","Intégration de vos outils (API)","Prospection automatisée","Rapports automatiques"]', 'Demander un devis', '#contact', 1, 4),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Référencement SEO', 'Soyez trouvé en premier sur Google. Audit, optimisation technique et contenu pour attirer des clients.', '', 'dès 75 000 FCFA', '["Audit SEO complet","Optimisation technique","Mots-clés & contenu","SEO local (Google Business)","Suivi des positions"]', 'Demander un devis', '#contact', 0, 5),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Maintenance & support', 'Mises à jour, sauvegardes, sécurité et dépannage rapide pour garder vos outils en pleine forme.', '', 'Forfait mensuel', '["Mises à jour & sauvegardes","Corrections de bugs","Sécurité & surveillance","Support réactif","Forfait ou à la demande"]', 'Demander un devis', '#contact', 0, 6),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Formation en programmation', 'Apprenez à coder par la pratique : HTML/CSS, JavaScript, PHP/Laravel, WordPress. Débutants et équipes.', '', 'Sur devis', '["Cours personnalisés","Projets concrets","Présentiel ou à distance","Supports inclus","Suivi post-formation"]', 'Demander un devis', '#contact', 0, 7),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Audit & étude de projet', 'Une idée ? Je la cadre : faisabilité, cahier des charges, choix techniques et budget.', '', 'Sur devis', '["Étude de faisabilité","Cahier des charges","Choix des technologies","Estimation budget & délais","Feuille de route"]', 'Demander un devis', '#contact', 0, 8),
((SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1), 'Digitalisation d''entreprise', 'Transformez vos process papier en outils numériques efficaces. De l''analyse à la mise en œuvre.', '', 'Sur devis', '["Diagnostic digital","Dématérialisation","Outils sur-mesure","Formation des équipes","Accompagnement au changement"]', 'Demander un devis', '#contact', 0, 9);
```
