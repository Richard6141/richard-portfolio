<?php
// ============================================================
// portfolio/data/villes.php · Chargeur des pages ville
//
// Créé le 20/08/2026, découpé en un fichier par ville le même jour : le
// fichier unique dépassait 1 000 lignes des que chaque ville a recu son
// contenu complet, ce qui le rendait pénible a relire et a modifier.
//
// Chaque fichier de data/villes/ retourne le tableau d'UNE ville et porte le
// slug en nom de fichier. L'ordre d'affichage vient de $ordre ci-dessous,
// pas de l'ordre alphabetique des fichiers.
//
// REGLE A TENIR : ces pages ne sont PAS un gabarit a trous. Chaque ville a
// son contexte economique, ses quartiers, ses erreurs locales, son rythme
// d'activite et ses questions propres. Une page ville qui se contente de
// substituer un nom dans un texte commun est du contenu duplique : Google la
// declasse ET fait retomber les autres pages locales avec elle. Avant
// d'ajouter une ville, ecrire d'abord son contenu.
//
// Mesure de controle : voir la verification de similarité croisee, qui doit
// rester très en dessous de 60 % entre deux villes quelconques.
//
// Champs attendus, identite et logistique :
//   nom, slug, pays, pays_slug, region, distance_km, sur_place
// Contenu redactionnel, propre a chaque ville :
//   accroche, intro, contexte, quartiers[], concurrence, secteurs[],
//   besoins[[titre, texte, slug_service]], comparatif[[profil, solution,
//   budget, delai]], erreurs[[titre, texte]], rythme, cas_type,
//   pourquoi_moi, travailler, paiement, faq[[question, réponse 40-60 mots]]
// ============================================================

$dossier = __DIR__ . '/villes';

// Ordre d'affichage : marche principal d'abord, puis rayonnement regional.
$ordre = [
    'cotonou', 'abomey-calavi', 'porto-novo', 'parakou', 'bohicon', 'ouidah',
    'lokossa', 'abomey', 'djougou', 'natitingou',
    'abidjan', 'lome', 'dakar',
];

$villes = [];

foreach ($ordre as $slug) {
    $chemin = $dossier . '/' . $slug . '.php';
    if (is_file($chemin)) {
        $villes[$slug] = require $chemin;
        $villes[$slug]['_maj'] = filemtime($chemin) ?: null;
    }
}

// Filet : une ville ajoutee dans le dossier mais oubliee dans $ordre reste
// servie (en fin de liste) plutot que de repondre 404 sans raison visible.
foreach (glob($dossier . '/*.php') ?: [] as $chemin) {
    $slug = basename($chemin, '.php');
    if (!isset($villes[$slug])) {
        $villes[$slug] = require $chemin;
        $villes[$slug]['_maj'] = filemtime($chemin) ?: null;
    }
}

return $villes;
