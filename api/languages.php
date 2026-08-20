<?php
// ============================================================
// Nom du fichier : api/languages.php
// Description    : CRUD des langues parlees
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
    $stmt = $pdo->prepare("SELECT * FROM languages WHERE user_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$userId]);
    jsonSuccess($stmt->fetchAll());
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $v = validate(getJsonBody());
    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order),-1)+1 FROM languages WHERE user_id = ?");
    $stmt->execute([$userId]);
    $next = (int) $stmt->fetchColumn();
    $stmt = $pdo->prepare("INSERT INTO languages (user_id, name, flag_emoji, level, level_percent, sort_order) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$userId, $v['name'], $v['flag_emoji'], $v['level'], $v['level_percent'], $next]);
    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM languages WHERE id = ?");
    $stmt->execute([$id]);
    jsonSuccess($stmt->fetch(), 'Langue ajoutee');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE languages SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $o => $id) $stmt->execute([$o, (int)$id, $userId]);
        jsonSuccess(null, 'Ordre mis a jour');
    }
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("SELECT id FROM languages WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Langue introuvable', 404);
    $v = validate($data);
    $stmt = $pdo->prepare("UPDATE languages SET name=?, flag_emoji=?, level=?, level_percent=? WHERE id=? AND user_id=?");
    $stmt->execute([$v['name'], $v['flag_emoji'], $v['level'], $v['level_percent'], $id, $userId]);
    $stmt = $pdo->prepare("SELECT * FROM languages WHERE id = ?");
    $stmt->execute([$id]);
    jsonSuccess($stmt->fetch(), 'Langue mise a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("DELETE FROM languages WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Langue introuvable', 404);
    jsonSuccess(null, 'Langue supprimee');
}

function validate(array $d): array
{
    $name = trim($d['name'] ?? '');
    if ($name === '') jsonError('Le nom de la langue est obligatoire');
    if (mb_strlen($name) > 100) jsonError('Nom trop long (max 100)');

    $level = $d['level'] ?? 'intermediate';
    if (!in_array($level, ['native','fluent','advanced','intermediate','beginner'], true)) $level = 'intermediate';

    $percent = (int)($d['level_percent'] ?? 50);
    $percent = max(0, min(100, $percent));

    return [
        'name'          => $name,
        'flag_emoji'    => trim($d['flag_emoji'] ?? '') ?: null,
        'level'         => $level,
        'level_percent' => $percent,
    ];
}
