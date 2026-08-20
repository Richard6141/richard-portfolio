<?php
// ============================================================
// Nom du fichier : api/skill-categories.php
// Description    : CRUD des categories de competences
// Methodes       : GET, POST, PUT, DELETE
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

requireAuth();

$pdo    = getPDO();
$userId = getCurrentUserId();
$method = getHttpMethod();

try {
    match ($method) {
        'GET'    => handleGet($pdo, $userId),
        'POST'   => handlePost($pdo, $userId),
        'PUT'    => handlePut($pdo, $userId),
        'DELETE' => handleDelete($pdo, $userId),
        default  => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

function handleGet(PDO $pdo, int $userId): void
{
    $stmt = $pdo->prepare("
        SELECT c.*, COUNT(s.id) AS skill_count
        FROM skill_categories c
        LEFT JOIN skills s ON s.category_id = c.id
        WHERE c.user_id = ?
        GROUP BY c.id
        ORDER BY c.sort_order ASC
    ");
    $stmt->execute([$userId]);
    jsonSuccess($stmt->fetchAll());
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    $name = trim($data['name'] ?? '');
    $icon = trim($data['icon'] ?? '');

    if ($name === '') jsonError('Le nom de la categorie est obligatoire');
    if (mb_strlen($name) > 100) jsonError('Nom trop long (max 100)');

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM skill_categories WHERE user_id = ?");
    $stmt->execute([$userId]);
    $nextOrder = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("INSERT INTO skill_categories (user_id, name, icon, sort_order) VALUES (?, ?, ?, ?)");
    $stmt->execute([$userId, $name, $icon ?: null, $nextOrder]);

    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT *, 0 AS skill_count FROM skill_categories WHERE id = ?");
    $stmt->execute([$id]);

    jsonSuccess($stmt->fetch(), 'Categorie creee');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE skill_categories SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $order => $id) {
            $stmt->execute([$order, (int) $id, $userId]);
        }
        jsonSuccess(null, 'Ordre mis a jour');
    }

    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM skill_categories WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Categorie introuvable', 404);

    $name = trim($data['name'] ?? '');
    $icon = trim($data['icon'] ?? '');
    if ($name === '') jsonError('Le nom est obligatoire');
    if (mb_strlen($name) > 100) jsonError('Nom trop long (max 100)');

    $stmt = $pdo->prepare("UPDATE skill_categories SET name = ?, icon = ? WHERE id = ? AND user_id = ?");
    $stmt->execute([$name, $icon ?: null, $id, $userId]);

    jsonSuccess(null, 'Categorie mise a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    // Detacher les competences (set category_id = NULL)
    $stmt = $pdo->prepare("UPDATE skills SET category_id = NULL WHERE category_id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);

    $stmt = $pdo->prepare("DELETE FROM skill_categories WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);

    if ($stmt->rowCount() === 0) jsonError('Categorie introuvable', 404);

    jsonSuccess(null, 'Categorie supprimee');
}
