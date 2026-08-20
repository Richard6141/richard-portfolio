# Catalogue de services v2 — Richard Technologies

> Réécriture complète : descriptions orientées bénéfice (pour convaincre), largeur des services alignée sur Ben Davakan + tes spécialités (mobile, audit système, digitalisation, formation).
> 16 services répartis en 3 familles (= les 3 colonnes du mega-menu).
> **Marque « Automatisation & IA » comme “Populaire / featured”.**
> ⚠️ Le SQL en bas **remplace** tes services actuels (nettoie les doublons). Sauvegarde d'abord la table `services`.

---

## 🟦 Famille 1 — Sites & e-commerce

| Titre | Description (vendeuse) | Prix |
|---|---|---|
| **Site vitrine professionnel** | Un site moderne, rapide et optimisé Google qui inspire confiance dès la première seconde et transforme vos visiteurs en clients. | dès 300 000 FCFA |
| **Site e-commerce** | Vendez 24h/24 avec une boutique en ligne complète : paiement Mobile Money, carte bancaire et PayPal, gestion des stocks et des commandes. | Sur devis |
| **Landing page haute conversion** | Une page unique pensée pour un seul objectif : convertir. Idéale pour une pub, un lancement ou une offre. | dès 150 000 FCFA |
| **Refonte & migration de site** | Votre site est lent, daté ou mal référencé ? Je le modernise et le migre sans perdre votre SEO ni vos données. | Sur devis |
| **Maintenance & support** | Votre site toujours en ligne, sécurisé et à jour. Sauvegardes, corrections et dépannage rapide, l'esprit tranquille. | Forfait mensuel |

## 🟨 Famille 2 — Applications & automatisation

| Titre | Description (vendeuse) | Prix |
|---|---|---|
| **Application web sur-mesure** | Dashboards, back-offices et outils métier taillés pour vos processus. Gérez votre activité depuis une seule interface claire. | Sur devis |
| **Application mobile (Android & iOS)** | Votre application sur tous les téléphones, de l'idée jusqu'à la publication sur Play Store et App Store. | Sur devis |
| **SaaS & espace client** | Lancez votre logiciel en ligne par abonnement, ou offrez à vos clients un portail sécurisé et professionnel. | Sur devis |
| **API REST & intégrations** | Connectez vos outils entre eux (paiement, CRM, livraison…) pour un système fluide qui parle d'une seule voix. | Sur devis |
| **Automatisation & IA** *(Populaire)* | n8n, Make, bots et chatbots qui exécutent vos tâches répétitives et votre prospection à votre place. Gagnez des heures chaque semaine. | Sur devis |
| **Système de réservation en ligne** | Vos clients réservent et paient seuls, 24h/24. Fini les appels et les agendas papier. | Sur devis |

## 🟧 Famille 3 — Conseil & croissance

| Titre | Description (vendeuse) | Prix |
|---|---|---|
| **Référencement naturel (SEO)** | Soyez trouvé en premier sur Google par vos futurs clients, durablement, sans payer la publicité. | dès 75 000 FCFA |
| **Audit SEO complet** | Je passe votre site au crible et vous remets un plan d'action clair pour grimper dans les résultats Google. | dès 50 000 FCFA |
| **SEO local & Google Business** | Dominez les recherches de votre ville : fiche Google optimisée, avis, et visibilité sur Google Maps. | Sur devis |
| **Audit & étude de projet** | Une idée ? Je la cadre : faisabilité, cahier des charges, choix techniques et budget réaliste avant de vous lancer. | Sur devis |
| **Digitalisation d'entreprise** | Transformez vos process papier en outils numériques efficaces. De l'analyse à la mise en œuvre, je vous accompagne. | Sur devis |
| **Formation en programmation** | Apprenez à coder par la pratique (HTML/CSS, JS, PHP/Laravel, WordPress) ou montez vos équipes en compétences. | Sur devis |

---

## ⚡ SQL de remplacement (phpMyAdmin)

> **Sauvegarde d'abord la table `services`.** Ce script supprime tes services actuels et insère les 16 ci-dessus pour le compte actif.

```sql
SET @uid = (SELECT id FROM users WHERE is_active=1 ORDER BY id ASC LIMIT 1);
DELETE FROM services WHERE user_id = @uid;

INSERT INTO services (user_id, title, description, icon, price, features, cta_text, cta_url, is_featured, sort_order) VALUES
(@uid, 'Site vitrine professionnel', 'Un site moderne, rapide et optimisé Google qui inspire confiance dès la première seconde et transforme vos visiteurs en clients.', '', 'dès 300 000 FCFA', '["Design sur-mesure responsive","Optimisation SEO incluse","Nom de domaine + hébergement","Formulaire de contact","Formation à la prise en main"]', 'Demander un devis', '#contact', 0, 0),
(@uid, 'Site e-commerce', 'Vendez 24h/24 avec une boutique en ligne complète : paiement Mobile Money, carte bancaire et PayPal, gestion des stocks et des commandes.', '', 'Sur devis', '["Catalogue produits","Paiement Mobile Money / carte / PayPal","Gestion commandes & stock","Livraison","Tableau de bord vendeur"]', 'Demander un devis', '#contact', 0, 1),
(@uid, 'Landing page haute conversion', 'Une page unique pensée pour un seul objectif : convertir. Idéale pour une pub, un lancement ou une offre.', '', 'dès 150 000 FCFA', '["Structure orientée conversion","Temps de chargement minimal","A/B testing possible","Intégration formulaire / paiement","Optimisée mobile"]', 'Demander un devis', '#contact', 0, 2),
(@uid, 'Refonte & migration de site', 'Votre site est lent, daté ou mal référencé ? Je le modernise et le migre sans perdre votre SEO ni vos données.', '', 'Sur devis', '["Audit de l''existant","Nouveau design moderne","Migration sans perte SEO","Reprise des contenus","Redirections 301"]', 'Demander un devis', '#contact', 0, 3),
(@uid, 'Maintenance & support', 'Votre site toujours en ligne, sécurisé et à jour. Sauvegardes, corrections et dépannage rapide, l''esprit tranquille.', '', 'Forfait mensuel', '["Mises à jour & sauvegardes","Corrections de bugs","Sécurité & surveillance","Support réactif","Forfait ou à la demande"]', 'Demander un devis', '#contact', 0, 4),
(@uid, 'Application web sur-mesure', 'Dashboards, back-offices et outils métier taillés pour vos processus. Gérez votre activité depuis une seule interface claire.', '', 'Sur devis', '["Analyse des besoins","Dashboard & reporting","Gestion utilisateurs & rôles","API & intégrations","Sécurisé et évolutif"]', 'Demander un devis', '#contact', 0, 5),
(@uid, 'Application mobile (Android & iOS)', 'Votre application sur tous les téléphones, de l''idée jusqu''à la publication sur Play Store et App Store.', '', 'Sur devis', '["Android & iOS (Flutter)","UX/UI soignée","Notifications push","Mode hors-ligne","Publication sur les stores"]', 'Demander un devis', '#contact', 0, 6),
(@uid, 'SaaS & espace client', 'Lancez votre logiciel en ligne par abonnement, ou offrez à vos clients un portail sécurisé et professionnel.', '', 'Sur devis', '["Comptes & abonnements","Espace client sécurisé","Paiement récurrent","Tableau de bord","Évolutif"]', 'Demander un devis', '#contact', 0, 7),
(@uid, 'API REST & intégrations', 'Connectez vos outils entre eux (paiement, CRM, livraison…) pour un système fluide qui parle d''une seule voix.', '', 'Sur devis', '["API REST sur-mesure","Intégration paiement","Connexion CRM / ERP","Webhooks & synchronisation","Documentation claire"]', 'Demander un devis', '#contact', 0, 8),
(@uid, 'Automatisation & IA', 'n8n, Make, bots et chatbots qui exécutent vos tâches répétitives et votre prospection à votre place. Gagnez des heures chaque semaine.', '', 'Sur devis', '["Automatisation des process","Chatbots & assistants IA","Intégration de vos outils (API)","Prospection automatisée","Rapports automatiques"]', 'Demander un devis', '#contact', 1, 9),
(@uid, 'Système de réservation en ligne', 'Vos clients réservent et paient seuls, 24h/24. Fini les appels et les agendas papier.', '', 'Sur devis', '["Calendrier en ligne","Paiement à la réservation","Rappels automatiques","Gestion des disponibilités","Multi-services"]', 'Demander un devis', '#contact', 0, 10),
(@uid, 'Référencement naturel (SEO)', 'Soyez trouvé en premier sur Google par vos futurs clients, durablement, sans payer la publicité.', '', 'dès 75 000 FCFA', '["Optimisation technique","Mots-clés & contenu","Netlinking","Suivi des positions","Rapport mensuel"]', 'Demander un devis', '#contact', 0, 11),
(@uid, 'Audit SEO complet', 'Je passe votre site au crible et vous remets un plan d''action clair pour grimper dans les résultats Google.', '', 'dès 50 000 FCFA', '["Audit technique","Audit contenu & mots-clés","Analyse concurrents","Plan d''action priorisé","Recommandations détaillées"]', 'Demander un devis', '#contact', 0, 12),
(@uid, 'SEO local & Google Business', 'Dominez les recherches de votre ville : fiche Google optimisée, avis, et visibilité sur Google Maps.', '', 'Sur devis', '["Fiche Google Business optimisée","SEO local on-page","Gestion des avis","Citations & annuaires","Suivi local"]', 'Demander un devis', '#contact', 0, 13),
(@uid, 'Audit & étude de projet', 'Une idée ? Je la cadre : faisabilité, cahier des charges, choix techniques et budget réaliste avant de vous lancer.', '', 'Sur devis', '["Étude de faisabilité","Cahier des charges","Choix des technologies","Estimation budget & délais","Feuille de route"]', 'Demander un devis', '#contact', 0, 14),
(@uid, 'Digitalisation d''entreprise', 'Transformez vos process papier en outils numériques efficaces. De l''analyse à la mise en œuvre, je vous accompagne.', '', 'Sur devis', '["Diagnostic digital","Dématérialisation","Outils sur-mesure","Formation des équipes","Accompagnement au changement"]', 'Demander un devis', '#contact', 0, 15),
(@uid, 'Formation en programmation', 'Apprenez à coder par la pratique (HTML/CSS, JS, PHP/Laravel, WordPress) ou montez vos équipes en compétences.', '', 'Sur devis', '["Cours personnalisés","Projets concrets","Présentiel ou à distance","Supports inclus","Suivi post-formation"]', 'Demander un devis', '#contact', 0, 16);
```

> Après import : l'accueil affiche les 9 premiers + bouton « Voir tous les services », le mega-menu et `/services/` listent les 16, et chaque service a sa page `/services/{slug}`.
