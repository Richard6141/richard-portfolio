<?php
// ============================================================
// Nom du fichier : api/testimonials.php
// Description    : CRUD des temoignages clients
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
    $stmt = $pdo->prepare("SELECT * FROM testimonials WHERE user_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$userId]);
    jsonSuccess($stmt->fetchAll());
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $v = validate(getJsonBody());
    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order),-1)+1 FROM testimonials WHERE user_id = ?");
    $stmt->execute([$userId]);
    $next = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO testimonials (user_id, author_name, author_role, author_company, author_photo, author_linkedin, content, rating, date, is_featured, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([$userId, $v['author_name'], $v['author_role'], $v['author_company'], $v['author_photo'], $v['author_linkedin'], $v['content'], $v['rating'], $v['date'], $v['is_featured'], $next]);
    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM testimonials WHERE id = ?");
    $stmt->execute([$id]);
    jsonSuccess($stmt->fetch(), 'Temoignage ajoute');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE testimonials SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $o => $id) $stmt->execute([$o, (int)$id, $userId]);
        jsonSuccess(null, 'Ordre mis a jour');
    }
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("SELECT id FROM testimonials WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Temoignage introuvable', 404);
    $v = validate($data);
    $stmt = $pdo->prepare("
        UPDATE testimonials SET author_name=?, author_role=?, author_company=?, author_photo=?, author_linkedin=?, content=?, rating=?, date=?, is_featured=?
        WHERE id=? AND user_id=?
    ");
    $stmt->execute([$v['author_name'], $v['author_role'], $v['author_company'], $v['author_photo'], $v['author_linkedin'], $v['content'], $v['rating'], $v['date'], $v['is_featured'], $id, $userId]);
    $stmt = $pdo->prepare("SELECT * FROM testimonials WHERE id = ?");
    $stmt->execute([$id]);
    jsonSuccess($stmt->fetch(), 'Temoignage mis a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("DELETE FROM testimonials WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Temoignage introuvable', 404);
    jsonSuccess(null, 'Temoignage supprime');
}

function validate(array $d): array
{
    $name = trim($d['author_name'] ?? '');
    if ($name === '') jsonError('Le nom de l\'auteur est obligatoire');
    if (mb_strlen($name) > 255) jsonError('Nom trop long (max 255)');
    $content = trim($d['content'] ?? '');
    if ($content === '') jsonError('Le contenu du temoignage est obligatoire');
    $rating = $d['rating'] ?? null;
    if ($rating !== null) { $rating = max(1, min(5, (int)$rating)); }
    $date = trim($d['date'] ?? '');
    return [
        'author_name'     => $name,
        'author_role'     => trim($d['author_role'] ?? ''),
        'author_company'  => trim($d['author_company'] ?? ''),
        'author_photo'    => trim($d['author_photo'] ?? '') ?: null,
        'author_linkedin' => trim($d['author_linkedin'] ?? '') ?: null,
        'content'         => $content,
        'rating'          => $rating,
        'date'            => $date ?: null,
        'is_featured'     => (int)(bool)($d['is_featured'] ?? false),
    ];
}
