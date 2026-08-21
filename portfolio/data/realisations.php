<?php
// ============================================================
// data/realisations.php · Complements editoriaux des etudes de cas
//
// Cree le 21/08/2026. Les fiches plafonnaient a ~800 mots avec les quatre
// champs de base (contexte, probleme, solution, resultat), tous stockes en
// base et qui decrivent des CLIENTS REELS ET NOMMES. Les allonger revenait
// a inventer des faits sur des entreprises identifiables — exclu.
//
// Ces trois sections comblent l'ecart sans jamais rien affirmer sur le
// client. Elles portent sur le METIER, la TECHNIQUE et ce qu'une autre
// entreprise peut en retirer :
//
//   secteur      : le contexte du marche, verifiable et general
//   technique    : les choix d'architecture et leur justification, deduits
//                  de la stack reellement employee sur le projet
//   transferable : ce qu'une entreprise comparable peut reprendre
//   faq          : questions frequentes sur ce type de projet
//
// Elles vivent en fichiers versionnes et non en base : elles relevent de
// l'editorial, se relisent en revue de code, et se deploient par git.
// Les champs case_* de la base restent la seule source des faits client.
// ============================================================

declare(strict_types=1);

$dossier = __DIR__ . '/realisations';
$complements = [];

foreach (glob($dossier . '/*.php') ?: [] as $chemin) {
    $complements[basename($chemin, '.php')] = require $chemin;
}

return $complements;
