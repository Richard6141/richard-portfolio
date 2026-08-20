<?php
// ============================================================
// Nom du fichier : api/sections.php
// Description    : Gestion des sections du portfolio (ordre, visibilite, titres)
// Methodes       : GET, PUT
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
        'GET' => handleGet($pdo, $userId),
        'PUT' => handlePut($pdo, $userId),
        default => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

function handleGet(PDO $pdo, int $userId): void
{
    $stmt = $pdo->prepare("SELECT * FROM sections_config WHERE user_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$userId]);
    jsonSuccess($stmt->fetchAll());
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    // Reorder
    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE sections_config SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $order => $id) {
            $stmt->execute([$order, (int) $id, $userId]);
        }
        jsonSuccess(null, 'Ordre mis a jour');
    }

    // Update single section
    $id = (int) ($data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM sections_config WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Section introuvable', 404);

    $title    = trim($data['title'] ?? '');
    $subtitle = trim($data['subtitle'] ?? '');
    $isVisible = isset($data['is_visible']) ? (int)(bool)$data['is_visible'] : 1;

    if (mb_strlen($title) > 255) jsonError('Titre trop long (max 255)');
    if (mb_strlen($subtitle) > 500) jsonError('Sous-titre trop long (max 500)');

    $stmt = $pdo->prepare("UPDATE sections_config SET title = ?, subtitle = ?, is_visible = ? WHERE id = ? AND user_id = ?");
    $stmt->execute([$title ?: null, $subtitle ?: null, $isVisible, $id, $userId]);

    jsonSuccess(null, 'Section mise a jour');
}
