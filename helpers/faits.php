<?php
// ============================================================
// helpers/faits.php · Accès à la fiche de faits (portfolio/data/faits.php).
// Créé le 03/10/2026 (vague 0A). Source unique des chiffres et formulations
// d'identité : le schéma, llms.txt, l'accueil, l'à-propos et le pied de page
// la lisent. Aucun chiffre d'identité n'est tapé ailleurs (spec 5.1).
// ============================================================
declare(strict_types=1);

const FAITS_OBLIGATOIRES = [
    'nom', 'intitule', 'phrase_entite', 'description_courte', 'ville', 'agglomeration',
    'pays', 'pays_code', 'email', 'telephone', 'whatsapp', 'competences', 'profils', 'zones',
];

/** Charge et valide une fiche de faits. */
function faits_depuis(string $fichier): array
{
    $f = require $fichier;
    if (!is_array($f)) {
        throw new \RuntimeException("Fiche de faits illisible : {$fichier}");
    }
    $manquantes = array_values(array_filter(
        FAITS_OBLIGATOIRES,
        static fn(string $cle): bool => !isset($f[$cle]) || $f[$cle] === '' || $f[$cle] === []
    ));
    if ($manquantes) {
        throw new \RuntimeException('Fiche de faits incomplète, clés manquantes : ' . implode(', ', $manquantes));
    }
    return $f;
}

/** Fiche de faits du site, chargée une fois par requête. */
function faits(): array
{
    static $f = null;
    return $f ??= faits_depuis(__DIR__ . '/../portfolio/data/faits.php');
}

/** Une valeur de la fiche, ou null. */
function fait(string $cle): mixed
{
    return faits()[$cle] ?? null;
}
