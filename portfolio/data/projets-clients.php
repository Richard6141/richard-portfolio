<?php
// ============================================================
// data/projets-clients.php · Projets clients montrés sur /realisations/ (03/10/2026).
// Faits : relevés du 03/10/2026 (docs/superpowers/specs/2026-10-03-refonte-references.md)
// et réponses de Richard au questionnaire. Règle de Richard : nom du client cité,
// avec « réalisé en sous-traitance pour Digital Développement » sauf clients directs
// (GC Pro, OBA TV, KossKoss) ; Wapy est son produit. QueenK Beauty n'apparaît pas
// tant que le client n'a pas accepté d'être présenté (produits sensibles).
// Pas de lien sortant vers les sites clients tant que leurs défauts publics
// (mentions légales, données de démonstration) ne sont pas corrigés.
// « logo » = slug de assets/img/clients/clients.json.
// ============================================================
declare(strict_types=1);

return [
    ['logo' => 'wapy', 'nom' => 'Wapy', 'relation' => 'produit', 'famille' => 'applications',
     'type' => 'Assistant WhatsApp à IA', 'secteur' => 'Logiciel en ligne', 'lieu' => 'Cotonou',
     'stack' => ['IA', 'API WhatsApp', 'Application web'],
     'resume' => 'Mon propre produit : un assistant WhatsApp à intelligence artificielle qui répond aux clients des entreprises d\'Afrique francophone. Je l\'ai conçu, développé et je le fais évoluer.',
     'lien' => 'https://wapy.pro'],
    ['logo' => 'oba-tv', 'nom' => 'OBA TV', 'relation' => 'direct', 'famille' => 'applications',
     'type' => 'Web TV sur mesure', 'secteur' => 'Médias', 'lieu' => 'Cotonou',
     'stack' => ['PHP 8.3', 'Cloudflare', 'MTN MoMo', 'Moov Money'],
     'resume' => 'Une chaîne en ligne avec direct, replays, grille des programmes, rédaction autonome et abonnement premium payé par mobile money.'],
    ['logo' => 'gc-pro', 'nom' => 'GC Pro Consulting', 'relation' => 'direct', 'famille' => 'sites',
     'type' => 'Site bilingue et inscriptions', 'secteur' => 'Formation et conseil en gestion', 'lieu' => 'Cotonou',
     'stack' => ['PHP 8.3', 'Formulaires en ligne', 'Pages par ville'],
     'resume' => 'Un site bilingue de plus de cent pages : catalogue de formations, inscriptions et demandes de devis en ligne, pages locales pour chaque ville desservie.'],
    ['logo' => 'kosskoss', 'nom' => 'KossKoss Select', 'relation' => 'direct', 'famille' => 'sites',
     'type' => 'Boutique en ligne', 'secteur' => 'Concept-store cosmétique', 'lieu' => 'Cameroun',
     'stack' => ['Next.js', 'Orange Money', 'MTN MoMo', 'Mavience'],
     'resume' => 'Une boutique lancée avec un diagnostic beauté en cinq étapes, quatorze routines de soin et le paiement par Orange Money et MTN MoMo.'],
    ['logo' => 'laura-cosmetics', 'nom' => 'Laura Cosmetics', 'relation' => 'sous-traitance', 'famille' => 'sites',
     'type' => 'Boutique et back-office', 'secteur' => 'Cosmétiques', 'lieu' => 'Paris et Abidjan',
     'stack' => ['Laravel 11', 'Livewire 3', 'Filament 3', 'Meilisearch'],
     'resume' => 'Une boutique en deux devises et deux zones de livraison, avec un back-office complet : stocks, coupons et indicateurs de vente.'],
    ['logo' => 'ik-fashion-house', 'nom' => 'IK Fashion House', 'relation' => 'sous-traitance', 'famille' => 'sites',
     'type' => 'Boutique et sur-mesure', 'secteur' => 'Mode féminine sur mesure', 'lieu' => 'Cotonou',
     'stack' => ['Laravel', 'Livewire', 'FedaPay', 'GSAP'],
     'resume' => 'D\'un atelier artisanal à une boutique en ligne avec commande sur mesure à distance, plus une page de lancement pour la collection IK Tissu.'],
    ['logo' => 'afro-joyce', 'nom' => 'Afro Joy\'ce', 'relation' => 'sous-traitance', 'famille' => 'sites',
     'type' => 'Commande de repas en ligne', 'secteur' => 'Cuisine ivoirienne livrée', 'lieu' => 'Abidjan',
     'stack' => ['Next.js', 'Wave', 'Yango', 'WhatsApp'],
     'resume' => 'Les commandes prises à la main sur WhatsApp sont passées en ligne, avec paiement Wave, livraison Yango et suivi par WhatsApp : plus de 200 commandes par jour aujourd\'hui.'],
    ['logo' => 'impulse-finance', 'nom' => 'Impulse Finance', 'relation' => 'sous-traitance', 'famille' => 'sites',
     'type' => 'Refonte et simulateurs', 'secteur' => 'Expertise comptable', 'lieu' => 'Argenteuil',
     'stack' => ['Grav CMS', 'Module de suivi des demandes', 'Redirections 301'],
     'resume' => 'Sortie d\'un WordPress devenu ingérable sans perdre le référencement, avec suivi des demandes et simulateurs fiscaux, livrée en trois jours.'],
    ['logo' => 'inovis', 'nom' => 'INOVIS Côte d\'Ivoire', 'relation' => 'sous-traitance', 'famille' => 'sites',
     'type' => 'Refonte de site', 'secteur' => 'Études et conseil', 'lieu' => 'Abidjan',
     'stack' => ['Next.js', 'Vercel'],
     'resume' => 'Un site ancien et lent remplacé par un site rapide qui présente les références du cabinet : de 2,26 Mo à 577 Ko pour la page d\'accueil.'],
    ['logo' => 'at-consulting', 'nom' => 'AT Consulting International', 'relation' => 'sous-traitance', 'famille' => 'applications',
     'type' => 'Catalogue et évaluation', 'secteur' => 'QHSE et formation', 'lieu' => 'Abidjan',
     'stack' => ['Laravel'],
     'resume' => 'Un catalogue de dix-sept formations et une fiche d\'évaluation des stagiaires remplie en ligne.'],
];
