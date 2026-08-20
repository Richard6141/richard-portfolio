<?php
// ============================================================
// Nom du fichier : api/awards.php
// Description    : CRUD des prix et distinctions
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
    $stmt = $pdo->prepare("SELECT * FROM awards WHERE user_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$userId]);
    jsonSuccess($stmt->fetchAll());
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $v = validate(getJsonBody());
    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order),-1)+1 FROM awards WHERE user_id = ?");
    $stmt->execute([$userId]);
    $next = (int) $stmt->fetchColumn();
    $stmt = $pdo->prepare("INSERT INTO awards (user_id, title, issuer, date, description, url, image, sort_order) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$userId, $v['title'], $v['issuer'], $v['date'], $v['description'], $v['url'], $v['image'], $next]);
    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM awards WHERE id = ?");
    $stmt->execute([$id]);
    jsonSuccess($stmt->fetch(), 'Prix ajoute');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE awards SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $o => $id) $stmt->execute([$o, (int)$id, $userId]);
        jsonSuccess(null, 'Ordre mis a jour');
    }
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("SELECT id FROM awards WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Prix introuvable', 404);
    $v = validate($data);
    $stmt = $pdo->prepare("UPDATE awards SET title=?, issuer=?, date=?, description=?, url=?, image=? WHERE id=? AND user_id=?");
    $stmt->execute([$v['title'], $v['issuer'], $v['date'], $v['description'], $v['url'], $v['image'], $id, $userId]);
    $stmt = $pdo->prepare("SELECT * FROM awards WHERE id = ?");
    $stmt->execute([$id]);
    jsonSuccess($stmt->fetch(), 'Prix mis a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("DELETE FROM awards WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Prix introuvable', 404);
    jsonSuccess(null, 'Prix supprime');
}

function validate(array $d): array
{
    $title = trim($d['title'] ?? '');
    if ($title === '') jsonError('Le titre est obligatoire');
    if (mb_strlen($title) > 255) jsonError('Titre trop long (max 255)');
    return [
        'title'       => $title,
        'issuer'      => trim($d['issuer'] ?? '') ?: null,
        'date'        => trim($d['date'] ?? '') ?: null,
        'description' => trim($d['description'] ?? ''),
        'url'         => trim($d['url'] ?? '') ?: null,
        'image'       => trim($d['image'] ?? '') ?: null,
    ];
}
