<?php
// ============================================================
// Nom du fichier : api/messages.php
// Description    : Gestion des messages de contact recus
// Methodes       : GET, PUT, DELETE
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
        'PUT'    => handlePut($pdo, $userId),
        'DELETE' => handleDelete($pdo, $userId),
        default  => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

function handleGet(PDO $pdo, int $userId): void
{
    $filter = $_GET['filter'] ?? 'all';

    $where = "WHERE user_id = ?";
    $params = [$userId];

    match ($filter) {
        'unread'  => $where .= " AND is_read = 0 AND is_spam = 0",
        'spam'    => $where .= " AND is_spam = 1",
        'replied' => $where .= " AND is_replied = 1",
        default   => $where .= " AND is_spam = 0",
    };

    $stmt = $pdo->prepare("SELECT * FROM contact_messages {$where} ORDER BY created_at DESC");
    $stmt->execute($params);
    $items = $stmt->fetchAll();

    // Compteurs
    $stmtCount = $pdo->prepare("SELECT
        COUNT(*) AS total,
        SUM(CASE WHEN is_read = 0 AND is_spam = 0 THEN 1 ELSE 0 END) AS unread,
        SUM(CASE WHEN is_spam = 1 THEN 1 ELSE 0 END) AS spam,
        SUM(CASE WHEN is_replied = 1 THEN 1 ELSE 0 END) AS replied
        FROM contact_messages WHERE user_id = ?
    ");
    $stmtCount->execute([$userId]);
    $counts = $stmtCount->fetch();

    jsonSuccess([
        'items'  => $items,
        'counts' => $counts,
    ]);
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    $id = (int) ($data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM contact_messages WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Message introuvable', 404);

    $action = $data['action'] ?? '';

    match ($action) {
        'read'    => $pdo->prepare("UPDATE contact_messages SET is_read = 1 WHERE id = ? AND user_id = ?")->execute([$id, $userId]),
        'unread'  => $pdo->prepare("UPDATE contact_messages SET is_read = 0 WHERE id = ? AND user_id = ?")->execute([$id, $userId]),
        'spam'    => $pdo->prepare("UPDATE contact_messages SET is_spam = 1, is_read = 1 WHERE id = ? AND user_id = ?")->execute([$id, $userId]),
        'unspam'  => $pdo->prepare("UPDATE contact_messages SET is_spam = 0 WHERE id = ? AND user_id = ?")->execute([$id, $userId]),
        'replied' => $pdo->prepare("UPDATE contact_messages SET is_replied = 1, is_read = 1 WHERE id = ? AND user_id = ?")->execute([$id, $userId]),
        default   => jsonError('Action invalide'),
    };

    jsonSuccess(null, 'Message mis a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("DELETE FROM contact_messages WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Message introuvable', 404);

    jsonSuccess(null, 'Message supprime');
}
