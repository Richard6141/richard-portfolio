<?php
// ============================================================
// Nom du fichier : api/certifications.php
// Description    : CRUD des certifications
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
    $stmt = $pdo->prepare("SELECT * FROM certifications WHERE user_id = ? ORDER BY sort_order ASC");
    $stmt->execute([$userId]);
    $items = $stmt->fetchAll();
    foreach ($items as &$item) {
        $item['related_skills'] = json_decode($item['related_skills'] ?? '[]', true) ?: [];
    }
    jsonSuccess($items);
}

function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $v = validate(getJsonBody());
    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order),-1)+1 FROM certifications WHERE user_id = ?");
    $stmt->execute([$userId]);
    $next = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO certifications (user_id, name, issuer, issuer_logo, credential_id, credential_url, issue_date, expiry_date, no_expiry, description, badge_image, related_skills, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([$userId, $v['name'], $v['issuer'], $v['issuer_logo'], $v['credential_id'], $v['credential_url'], $v['issue_date'], $v['expiry_date'], $v['no_expiry'], $v['description'], $v['badge_image'], json_encode($v['related_skills'], JSON_UNESCAPED_UNICODE), $next]);
    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM certifications WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch();
    $item['related_skills'] = json_decode($item['related_skills'] ?? '[]', true) ?: [];
    jsonSuccess($item, 'Certification ajoutee');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE certifications SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $o => $id) $stmt->execute([$o, (int)$id, $userId]);
        jsonSuccess(null, 'Ordre mis a jour');
    }
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("SELECT id FROM certifications WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Certification introuvable', 404);
    $v = validate($data);
    $stmt = $pdo->prepare("
        UPDATE certifications SET name=?, issuer=?, issuer_logo=?, credential_id=?, credential_url=?, issue_date=?, expiry_date=?, no_expiry=?, description=?, badge_image=?, related_skills=?
        WHERE id=? AND user_id=?
    ");
    $stmt->execute([$v['name'], $v['issuer'], $v['issuer_logo'], $v['credential_id'], $v['credential_url'], $v['issue_date'], $v['expiry_date'], $v['no_expiry'], $v['description'], $v['badge_image'], json_encode($v['related_skills'], JSON_UNESCAPED_UNICODE), $id, $userId]);
    $stmt = $pdo->prepare("SELECT * FROM certifications WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch();
    $item['related_skills'] = json_decode($item['related_skills'] ?? '[]', true) ?: [];
    jsonSuccess($item, 'Certification mise a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');
    $stmt = $pdo->prepare("DELETE FROM certifications WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Certification introuvable', 404);
    jsonSuccess(null, 'Certification supprimee');
}

function validate(array $d): array
{
    $name = trim($d['name'] ?? '');
    if ($name === '') jsonError('Le nom de la certification est obligatoire');
    $issuer = trim($d['issuer'] ?? '');
    if ($issuer === '') jsonError('L\'organisme est obligatoire');
    $issueDate = trim($d['issue_date'] ?? '');
    if ($issueDate === '') jsonError('La date d\'obtention est obligatoire');

    $noExpiry = (bool)($d['no_expiry'] ?? false);
    $expiryDate = null;
    if (!$noExpiry) {
        $expiryDate = trim($d['expiry_date'] ?? '') ?: null;
    }

    $skills = $d['related_skills'] ?? [];
    if (!is_array($skills)) $skills = [];
    $skills = array_values(array_filter(array_map('trim', $skills), fn($v) => $v !== ''));

    return [
        'name'           => $name,
        'issuer'         => $issuer,
        'issuer_logo'    => trim($d['issuer_logo'] ?? '') ?: null,
        'credential_id'  => trim($d['credential_id'] ?? '') ?: null,
        'credential_url' => trim($d['credential_url'] ?? '') ?: null,
        'issue_date'     => $issueDate,
        'expiry_date'    => $expiryDate,
        'no_expiry'      => $noExpiry ? 1 : 0,
        'description'    => trim($d['description'] ?? ''),
        'badge_image'    => trim($d['badge_image'] ?? '') ?: null,
        'related_skills' => $skills,
    ];
}
