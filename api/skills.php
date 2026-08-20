<?php
// ============================================================
// Nom du fichier : api/skills.php
// Description    : CRUD des competences
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
    // Filtrer par categorie si param present
    $catId = $_GET['category_id'] ?? null;

    if ($catId !== null) {
        $catId = (int) $catId;
        $stmt = $pdo->prepare("
            SELECT * FROM skills
            WHERE user_id = ? AND category_id = ?
            ORDER BY sort_order ASC
        ");
        $stmt->execute([$userId, $catId]);
    } else {
        $stmt = $pdo->prepare("
            SELECT s.*, sc.name AS category_name
            FROM skills s
            LEFT JOIN skill_categories sc ON sc.id = s.category_id
            WHERE s.user_id = ?
            ORDER BY s.category_id, s.sort_order ASC
        ");
        $stmt->execute([$userId]);
    }

    jsonSuccess($stmt->fetchAll());
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $v = validateSkill($pdo, $userId, $data);

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM skills WHERE user_id = ? AND category_id <=> ?");
    $stmt->execute([$userId, $v['category_id']]);
    $nextOrder = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO skills
            (user_id, category_id, name, level, level_label, icon_url, color,
             years_experience, display_type, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $userId, $v['category_id'], $v['name'], $v['level'], $v['level_label'],
        $v['icon_url'], $v['color'], $v['years_experience'], $v['display_type'],
        $nextOrder,
    ]);

    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM skills WHERE id = ?");
    $stmt->execute([$id]);

    jsonSuccess($stmt->fetch(), 'Competence ajoutee');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE skills SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $order => $id) {
            $stmt->execute([$order, (int) $id, $userId]);
        }
        jsonSuccess(null, 'Ordre mis a jour');
    }

    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM skills WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Competence introuvable', 404);

    $v = validateSkill($pdo, $userId, $data);

    $stmt = $pdo->prepare("
        UPDATE skills SET
            category_id = ?, name = ?, level = ?, level_label = ?,
            icon_url = ?, color = ?, years_experience = ?, display_type = ?
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([
        $v['category_id'], $v['name'], $v['level'], $v['level_label'],
        $v['icon_url'], $v['color'], $v['years_experience'], $v['display_type'],
        $id, $userId,
    ]);

    $stmt = $pdo->prepare("SELECT * FROM skills WHERE id = ?");
    $stmt->execute([$id]);

    jsonSuccess($stmt->fetch(), 'Competence mise a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("DELETE FROM skills WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Competence introuvable', 404);

    jsonSuccess(null, 'Competence supprimee');
}

function validateSkill(PDO $pdo, int $userId, array $data): array
{
    $name = trim($data['name'] ?? '');
    if ($name === '') jsonError('Le nom de la competence est obligatoire');
    if (mb_strlen($name) > 100) jsonError('Nom trop long (max 100)');

    $level = (int) ($data['level'] ?? 50);
    if ($level < 0) $level = 0;
    if ($level > 100) $level = 100;

    $levelLabel = $data['level_label'] ?? null;
    $allowed = ['debutant', 'intermediaire', 'avance', 'expert'];
    if ($levelLabel !== null && !in_array($levelLabel, $allowed, true)) {
        // Auto-suggest
        $levelLabel = match (true) {
            $level >= 85 => 'expert',
            $level >= 65 => 'avance',
            $level >= 35 => 'intermediaire',
            default      => 'debutant',
        };
    }
    if ($levelLabel === null) {
        $levelLabel = match (true) {
            $level >= 85 => 'expert',
            $level >= 65 => 'avance',
            $level >= 35 => 'intermediaire',
            default      => 'debutant',
        };
    }

    $displayType = $data['display_type'] ?? 'bar';
    if (!in_array($displayType, ['bar', 'circle', 'stars', 'tags', 'dots'], true)) {
        $displayType = 'bar';
    }

    $categoryId = $data['category_id'] ?? null;
    if ($categoryId !== null && $categoryId !== '') {
        $categoryId = (int) $categoryId;
        $stmt = $pdo->prepare("SELECT id FROM skill_categories WHERE id = ? AND user_id = ?");
        $stmt->execute([$categoryId, $userId]);
        if (!$stmt->fetch()) $categoryId = null;
    } else {
        $categoryId = null;
    }

    $color = trim($data['color'] ?? '');
    if ($color !== '' && !preg_match('/^#[0-9a-fA-F]{6}$/', $color)) {
        $color = null;
    }

    $yearsExp = $data['years_experience'] ?? null;
    if ($yearsExp !== null && $yearsExp !== '') {
        $yearsExp = max(0, min(99, (int) $yearsExp));
    } else {
        $yearsExp = null;
    }

    return [
        'name'             => $name,
        'category_id'      => $categoryId,
        'level'            => $level,
        'level_label'      => $levelLabel,
        'icon_url'         => trim($data['icon_url'] ?? '') ?: null,
        'color'            => $color ?: null,
        'years_experience' => $yearsExp,
        'display_type'     => $displayType,
    ];
}
