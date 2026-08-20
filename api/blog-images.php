<?php
// ============================================================
// api/blog-images.php — CRUD galerie d'images pour articles
// Méthodes : GET (list), POST (upload), PUT (reorder), DELETE
// Auth requise : Oui
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

$stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
$stmt->execute([$userId]);
$userSlug = $stmt->fetchColumn();

try {
    match ($method) {
        'GET'    => handleGet($pdo, $userId),
        'POST'   => handlePost($pdo, $userId, $userSlug),
        'PUT'    => handlePut($pdo, $userId),
        'DELETE' => handleDelete($pdo, $userId),
        default  => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

function handleGet(PDO $pdo, int $userId): void
{
    $postId = (int) ($_GET['post_id'] ?? 0);
    if ($postId <= 0) jsonError('post_id requis');

    $stmt = $pdo->prepare("SELECT id FROM blog_posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$postId, $userId]);
    if (!$stmt->fetch()) jsonError('Article introuvable', 404);

    $stmt = $pdo->prepare(
        "SELECT id, image_path, alt_text, sort_order
         FROM blog_post_images
         WHERE post_id = ? AND user_id = ?
         ORDER BY sort_order ASC, id ASC"
    );
    $stmt->execute([$postId, $userId]);

    jsonSuccess(['images' => $stmt->fetchAll()]);
}

function handlePost(PDO $pdo, int $userId, string $userSlug): void
{
    $csrfToken = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? $_POST['csrf_token'] ?? null;
    if (!validateCsrfToken($csrfToken)) jsonError('Token CSRF invalide', 403);

    $postId = (int) ($_POST['post_id'] ?? 0);
    if ($postId <= 0) jsonError('post_id requis');

    $stmt = $pdo->prepare("SELECT id FROM blog_posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$postId, $userId]);
    if (!$stmt->fetch()) jsonError('Article introuvable', 404);

    if (!isset($_FILES['file'])) jsonError('Aucun fichier recu');

    $path    = uploadFile($_FILES['file'], 'blog_image', $userSlug);
    $altText = trim($_POST['alt_text'] ?? '');

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM blog_post_images WHERE post_id = ?");
    $stmt->execute([$postId]);
    $sortOrder = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare(
        "INSERT INTO blog_post_images (post_id, user_id, image_path, alt_text, sort_order)
         VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->execute([$postId, $userId, $path, $altText, $sortOrder]);

    jsonSuccess([
        'id'         => (int) $pdo->lastInsertId(),
        'image_path' => $path,
        'alt_text'   => $altText,
        'sort_order' => $sortOrder,
    ], 'Image ajoutee');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (!isset($data['reorder']) || !is_array($data['reorder'])) {
        jsonError('Action non reconnue');
    }

    // Vérifier que tous les IDs appartiennent au même utilisateur avant de mettre à jour
    $ids = array_values(array_map('intval', $data['reorder']));
    if (empty($ids)) {
        jsonSuccess(null, 'Ordre mis a jour');
        return;
    }

    $placeholders = implode(',', array_fill(0, count($ids), '?'));
    $checkStmt = $pdo->prepare(
        "SELECT COUNT(*) FROM blog_post_images WHERE id IN ($placeholders) AND user_id = ?"
    );
    $checkStmt->execute([...$ids, $userId]);
    if ((int) $checkStmt->fetchColumn() !== count($ids)) {
        jsonError('Images introuvables ou accès non autorisé', 403);
    }

    $stmt = $pdo->prepare("UPDATE blog_post_images SET sort_order = ? WHERE id = ? AND user_id = ?");
    foreach ($data['reorder'] as $order => $id) {
        $stmt->execute([(int) $order, (int) $id, $userId]);
    }

    jsonSuccess(null, 'Ordre mis a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id   = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT image_path FROM blog_post_images WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    $row = $stmt->fetch();
    if (!$row) jsonError('Image introuvable', 404);

    deleteUploadedFile($row['image_path']);

    $stmt = $pdo->prepare("DELETE FROM blog_post_images WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);

    jsonSuccess(null, 'Image supprimee');
}
