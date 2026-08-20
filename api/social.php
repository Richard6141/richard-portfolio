<?php
// ============================================================
// Nom du fichier : api/social.php
// Description    : CRUD des reseaux sociaux
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
    $stmt = $pdo->prepare("SELECT * FROM social_links WHERE user_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$userId]);
    jsonSuccess($stmt->fetchAll());
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    // Upsert : si platform existe deja, update
    $platform = trim($data['platform'] ?? '');
    $url      = trim($data['url'] ?? '');
    $label    = trim($data['label'] ?? '');

    if ($platform === '') jsonError('La plateforme est obligatoire');
    if ($url === '') jsonError('L\'URL est obligatoire');
    if (mb_strlen($url) > 500) jsonError('URL trop longue (max 500)');

    // Verifier si existe deja
    $stmt = $pdo->prepare("SELECT id FROM social_links WHERE user_id = ? AND platform = ?");
    $stmt->execute([$userId, $platform]);
    $existing = $stmt->fetch();

    if ($existing) {
        $stmt = $pdo->prepare("UPDATE social_links SET url = ?, label = ? WHERE id = ? AND user_id = ?");
        $stmt->execute([$url, $label ?: null, $existing['id'], $userId]);
        $id = (int) $existing['id'];
    } else {
        $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order),-1)+1 FROM social_links WHERE user_id = ?");
        $stmt->execute([$userId]);
        $next = (int) $stmt->fetchColumn();

        $stmt = $pdo->prepare("INSERT INTO social_links (user_id, platform, url, label, sort_order) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$userId, $platform, $url, $label ?: null, $next]);
        $id = (int) $pdo->lastInsertId();
    }

    $stmt = $pdo->prepare("SELECT * FROM social_links WHERE id = ?");
    $stmt->execute([$id]);
    jsonSuccess($stmt->fetch(), 'Reseau social enregistre');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE social_links SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $o => $id) $stmt->execute([$o, (int)$id, $userId]);
        jsonSuccess(null, 'Ordre mis a jour');
    }

    // Bulk save
    if (isset($data['links']) && is_array($data['links'])) {
        foreach ($data['links'] as $link) {
            $platform = trim($link['platform'] ?? '');
            $url      = trim($link['url'] ?? '');
            $label    = trim($link['label'] ?? '');

            if ($platform === '' || $url === '') continue;

            $stmt = $pdo->prepare("SELECT id FROM social_links WHERE user_id = ? AND platform = ?");
            $stmt->execute([$userId, $platform]);
            $existing = $stmt->fetch();

            if ($existing) {
                $stmt = $pdo->prepare("UPDATE social_links SET url = ?, label = ? WHERE id = ? AND user_id = ?");
                $stmt->execute([$url, $label ?: null, $existing['id'], $userId]);
            } else {
                $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order),-1)+1 FROM social_links WHERE user_id = ?");
                $stmt->execute([$userId]);
                $next = (int) $stmt->fetchColumn();
                $stmt = $pdo->prepare("INSERT INTO social_links (user_id, platform, url, label, sort_order) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$userId, $platform, $url, $label ?: null, $next]);
            }
        }
        jsonSuccess(null, 'Reseaux sociaux mis a jour');
    }

    jsonError('Donnees invalides');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("DELETE FROM social_links WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Lien introuvable', 404);
    jsonSuccess(null, 'Reseau social supprime');
}
