<?php
// ============================================================
// Nom du fichier : api/upload.php
// Description    : Upload de fichiers (avatar, cover, CV, OG image, etc.)
// Methodes       : POST, DELETE
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';
require_once __DIR__ . '/../helpers/upload.php';

requireAuth();

$pdo    = getPDO();
$userId = getCurrentUserId();
$method = getHttpMethod();

// Recuperer le slug de l'utilisateur
$stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
$stmt->execute([$userId]);
$userSlug = $stmt->fetchColumn();

if (!$userSlug) {
    jsonError('Utilisateur introuvable', 404);
}

try {
    match ($method) {
        'POST'   => handleUpload($pdo, $userId, $userSlug),
        'DELETE' => handleDelete($pdo, $userId),
        default  => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage());
}

// ----------------------------------------------------------
// POST — Upload un fichier
// ----------------------------------------------------------
function handleUpload(PDO $pdo, int $userId, string $slug): void
{
    // CSRF via header (FormData ne peut pas envoyer un body JSON)
    $csrfToken = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? $_POST['csrf_token'] ?? null;
    if (!validateCsrfToken($csrfToken)) {
        jsonError('Token CSRF invalide', 403);
    }

    $type  = $_POST['type'] ?? '';
    $subId = $_POST['sub_id'] ?? null;

    $allowedTypes = ['avatar', 'cover', 'cv', 'og_image', 'project_image', 'misc'];
    if (!in_array($type, $allowedTypes, true)) {
        jsonError("Type d'upload invalide : {$type}");
    }

    if (!isset($_FILES['file']) || $_FILES['file']['error'] === UPLOAD_ERR_NO_FILE) {
        jsonError('Aucun fichier envoye');
    }

    // Recuperer l'ancien fichier pour le supprimer apres upload reussi
    $oldFile = getOldFilePath($pdo, $userId, $type);

    // Upload le nouveau fichier
    $relativePath = uploadFile($_FILES['file'], $type, $slug, $subId);

    // Mettre a jour le chemin en base
    updateFilePath($pdo, $userId, $type, $relativePath);

    // Supprimer l'ancien fichier
    if ($oldFile) {
        deleteUploadedFile($oldFile);
    }

    jsonSuccess([
        'path' => $relativePath,
        'url'  => '/uploads/' . $relativePath,
    ], 'Fichier uploade avec succes');
}

// ----------------------------------------------------------
// DELETE — Supprimer un fichier
// ----------------------------------------------------------
function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();

    $data = getJsonBody();
    $type = $data['type'] ?? '';

    $allowedTypes = ['avatar', 'cover', 'cv', 'og_image'];
    if (!in_array($type, $allowedTypes, true)) {
        jsonError("Type invalide : {$type}");
    }

    $oldFile = getOldFilePath($pdo, $userId, $type);

    if ($oldFile) {
        deleteUploadedFile($oldFile);
    }

    updateFilePath($pdo, $userId, $type, null);

    jsonSuccess(null, 'Fichier supprime avec succes');
}

// ----------------------------------------------------------
// Helpers
// ----------------------------------------------------------

/**
 * Recupere le chemin de l'ancien fichier en base.
 */
function getOldFilePath(PDO $pdo, int $userId, string $type): ?string
{
    $column = match ($type) {
        'avatar'   => 'avatar_url',
        'cover'    => 'cover_url',
        'cv'       => 'cv_url',
        'og_image' => 'og_image_url',
        default    => null,
    };

    if ($column === null) {
        return null;
    }

    $stmt = $pdo->prepare("SELECT {$column} FROM profiles WHERE user_id = ?");
    $stmt->execute([$userId]);
    $val = $stmt->fetchColumn();

    return $val ?: null;
}

/**
 * Met a jour le chemin du fichier en base.
 */
function updateFilePath(PDO $pdo, int $userId, string $type, ?string $path): void
{
    $column = match ($type) {
        'avatar'   => 'avatar_url',
        'cover'    => 'cover_url',
        'cv'       => 'cv_url',
        'og_image' => 'og_image_url',
        default    => null,
    };

    if ($column === null) {
        return;
    }

    $stmt = $pdo->prepare("UPDATE profiles SET {$column} = ? WHERE user_id = ?");
    $stmt->execute([$path, $userId]);
}
