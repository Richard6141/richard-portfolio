<?php
// ============================================================
// Nom du fichier : api/check-slug.php
// Description    : Verification de disponibilite d'un slug
// Methodes       : GET
// Auth requise   : Non (utilise lors de l'inscription)
// ============================================================

declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

$slug = trim($_GET['slug'] ?? '');

if ($slug === '') {
    jsonError('Le slug est requis');
}

$slug = strtolower($slug);

// Verifier le format
if (!validateSlugFormat($slug)) {
    jsonError('Format invalide : 3 a 30 caracteres, lettres minuscules, chiffres et tirets uniquement. Doit commencer par une lettre ou un chiffre.');
}

// Verifier les slugs reserves
if (isReservedSlug($slug)) {
    jsonError('Ce sous-domaine est reserve et ne peut pas etre utilise');
}

// Verifier l'unicite en base
$pdo = getPDO();
$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE slug = ?");
$stmt->execute([$slug]);

if ((int) $stmt->fetchColumn() > 0) {
    jsonError('Ce sous-domaine est deja pris');
}

jsonSuccess(['slug' => $slug], 'Ce sous-domaine est disponible');
