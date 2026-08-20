<?php
// ============================================================
// Nom du fichier : api/services.php
// Description    : CRUD des services proposes
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
    $stmt = $pdo->prepare("SELECT * FROM services WHERE user_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$userId]);
    $items = $stmt->fetchAll();
    foreach ($items as &$item) {
        $item['features'] = json_decode($item['features'] ?? '[]', true) ?: [];
    }
    jsonSuccess($items);
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $v = validate(getJsonBody());

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM services WHERE user_id = ?");
    $stmt->execute([$userId]);
    $next = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO services (user_id, title, description, icon, price, features, content_html, cta_text, cta_url, is_featured, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([$userId, $v['title'], $v['description'], $v['icon'], $v['price'],
        json_encode($v['features'], JSON_UNESCAPED_UNICODE), $v['content_html'], $v['cta_text'], $v['cta_url'], $v['is_featured'], $next]);

    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch();
    $item['features'] = json_decode($item['features'] ?? '[]', true) ?: [];

    jsonSuccess($item, 'Service ajoute');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE services SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $order => $id) {
            $stmt->execute([$order, (int) $id, $userId]);
        }
        jsonSuccess(null, 'Ordre mis a jour');
    }

    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM services WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Service introuvable', 404);

    $v = validate($data);

    $stmt = $pdo->prepare("
        UPDATE services SET title = ?, description = ?, icon = ?, price = ?,
            features = ?, content_html = ?, cta_text = ?, cta_url = ?, is_featured = ?
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$v['title'], $v['description'], $v['icon'], $v['price'],
        json_encode($v['features'], JSON_UNESCAPED_UNICODE), $v['content_html'], $v['cta_text'], $v['cta_url'], $v['is_featured'],
        $id, $userId]);

    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch();
    $item['features'] = json_decode($item['features'] ?? '[]', true) ?: [];

    jsonSuccess($item, 'Service mis a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("DELETE FROM services WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Service introuvable', 404);

    jsonSuccess(null, 'Service supprime');
}

function validate(array $data): array
{
    $title = trim($data['title'] ?? '');
    if ($title === '') jsonError('Le titre du service est obligatoire');
    if (mb_strlen($title) > 255) jsonError('Titre trop long (max 255)');

    $features = $data['features'] ?? [];
    if (!is_array($features)) $features = [];
    $features = array_values(array_filter(array_map('trim', $features), fn($v) => $v !== ''));

    return [
        'title'        => $title,
        'description'  => trim($data['description'] ?? ''),
        'icon'         => trim($data['icon'] ?? ''),
        'price'        => trim($data['price'] ?? ''),
        'features'     => $features,
        'content_html' => trim($data['content_html'] ?? ''),
        'cta_text'    => trim($data['cta_text'] ?? ''),
        'cta_url'     => trim($data['cta_url'] ?? ''),
        'is_featured' => (int)(bool)($data['is_featured'] ?? false),
    ];
}
