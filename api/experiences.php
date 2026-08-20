<?php
// ============================================================
// Nom du fichier : api/experiences.php
// Description    : CRUD des experiences professionnelles
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

// ----------------------------------------------------------
// GET — Liste toutes les experiences
// ----------------------------------------------------------
function handleGet(PDO $pdo, int $userId): void
{
    $stmt = $pdo->prepare("
        SELECT * FROM experiences
        WHERE user_id = ?
        ORDER BY sort_order ASC, start_date DESC
    ");
    $stmt->execute([$userId]);
    $items = $stmt->fetchAll();

    // Decoder les JSON
    foreach ($items as &$item) {
        $item['key_points'] = json_decode($item['key_points'] ?? '[]', true) ?: [];
    }

    jsonSuccess($items);
}

// ----------------------------------------------------------
// POST — Creer une experience
// ----------------------------------------------------------
function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $validated = validateExperience($data);

    // Prochain sort_order
    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM experiences WHERE user_id = ?");
    $stmt->execute([$userId]);
    $nextOrder = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO experiences
            (user_id, job_title, company_name, company_url, company_logo, location,
             work_type, contract_type, start_date, end_date, is_current,
             description, key_points, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $userId,
        $validated['job_title'],
        $validated['company_name'],
        $validated['company_url'],
        $validated['company_logo'],
        $validated['location'],
        $validated['work_type'],
        $validated['contract_type'],
        $validated['start_date'],
        $validated['end_date'],
        $validated['is_current'],
        $validated['description'],
        json_encode($validated['key_points'], JSON_UNESCAPED_UNICODE),
        $nextOrder,
    ]);

    $id = (int) $pdo->lastInsertId();

    // Retourner l'item cree
    $stmt = $pdo->prepare("SELECT * FROM experiences WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    $item = $stmt->fetch();
    $item['key_points'] = json_decode($item['key_points'] ?? '[]', true) ?: [];

    jsonSuccess($item, 'Experience ajoutee avec succes');
}

// ----------------------------------------------------------
// PUT — Modifier ou reordonner
// ----------------------------------------------------------
function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    // Reordonnement
    if (isset($data['reorder'])) {
        reorder($pdo, $userId, $data['reorder']);
        return;
    }

    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) {
        jsonError('ID requis');
    }

    // Verifier appartenance
    $stmt = $pdo->prepare("SELECT id FROM experiences WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) {
        jsonError('Experience introuvable', 404);
    }

    $validated = validateExperience($data);

    $stmt = $pdo->prepare("
        UPDATE experiences SET
            job_title = ?, company_name = ?, company_url = ?, company_logo = ?,
            location = ?, work_type = ?, contract_type = ?,
            start_date = ?, end_date = ?, is_current = ?,
            description = ?, key_points = ?
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([
        $validated['job_title'],
        $validated['company_name'],
        $validated['company_url'],
        $validated['company_logo'],
        $validated['location'],
        $validated['work_type'],
        $validated['contract_type'],
        $validated['start_date'],
        $validated['end_date'],
        $validated['is_current'],
        $validated['description'],
        json_encode($validated['key_points'], JSON_UNESCAPED_UNICODE),
        $id,
        $userId,
    ]);

    $stmt = $pdo->prepare("SELECT * FROM experiences WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    $item = $stmt->fetch();
    $item['key_points'] = json_decode($item['key_points'] ?? '[]', true) ?: [];

    jsonSuccess($item, 'Experience mise a jour');
}

// ----------------------------------------------------------
// DELETE
// ----------------------------------------------------------
function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();

    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) {
        jsonError('ID requis');
    }

    $stmt = $pdo->prepare("DELETE FROM experiences WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);

    if ($stmt->rowCount() === 0) {
        jsonError('Experience introuvable', 404);
    }

    jsonSuccess(null, 'Experience supprimee');
}

// ----------------------------------------------------------
// Reorder
// ----------------------------------------------------------
function reorder(PDO $pdo, int $userId, array $ids): void
{
    $stmt = $pdo->prepare("UPDATE experiences SET sort_order = ? WHERE id = ? AND user_id = ?");

    foreach ($ids as $order => $id) {
        $stmt->execute([$order, (int) $id, $userId]);
    }

    jsonSuccess(null, 'Ordre mis a jour');
}

// ----------------------------------------------------------
// Validation
// ----------------------------------------------------------
function validateExperience(array $data): array
{
    $jobTitle = trim($data['job_title'] ?? '');
    $companyName = trim($data['company_name'] ?? '');

    if ($jobTitle === '') {
        jsonError('L\'intitule du poste est obligatoire');
    }
    if (mb_strlen($jobTitle) > 255) {
        jsonError('L\'intitule du poste est trop long (max 255)');
    }
    if ($companyName === '') {
        jsonError('Le nom de l\'entreprise est obligatoire');
    }
    if (mb_strlen($companyName) > 255) {
        jsonError('Le nom de l\'entreprise est trop long (max 255)');
    }

    $startDate = trim($data['start_date'] ?? '');
    if ($startDate === '') {
        jsonError('La date de debut est obligatoire');
    }
    // Accepter YYYY-MM ou YYYY-MM-DD
    if (strlen($startDate) === 7) {
        $startDate .= '-01';
    }

    $isCurrent = (bool) ($data['is_current'] ?? false);
    $endDate = null;
    if (!$isCurrent) {
        $endDate = trim($data['end_date'] ?? '');
        if ($endDate !== '' && strlen($endDate) === 7) {
            $endDate .= '-01';
        }
        if ($endDate === '') {
            $endDate = null;
        }
    }

    $workType = $data['work_type'] ?? 'onsite';
    $allowed = ['onsite', 'remote', 'hybrid'];
    if (!in_array($workType, $allowed, true)) {
        $workType = 'onsite';
    }

    $contractType = $data['contract_type'] ?? null;
    $allowedContracts = ['cdi', 'cdd', 'freelance', 'stage', 'alternance', 'benevolat', 'autre'];
    if ($contractType !== null && !in_array($contractType, $allowedContracts, true)) {
        $contractType = null;
    }

    $keyPoints = $data['key_points'] ?? [];
    if (!is_array($keyPoints)) {
        $keyPoints = [];
    }
    $keyPoints = array_values(array_filter(array_map('trim', $keyPoints), fn($v) => $v !== ''));

    return [
        'job_title'     => $jobTitle,
        'company_name'  => $companyName,
        'company_url'   => trim($data['company_url'] ?? ''),
        'company_logo'  => trim($data['company_logo'] ?? ''),
        'location'      => trim($data['location'] ?? ''),
        'work_type'     => $workType,
        'contract_type' => $contractType,
        'start_date'    => $startDate,
        'end_date'      => $endDate,
        'is_current'    => $isCurrent ? 1 : 0,
        'description'   => trim($data['description'] ?? ''),
        'key_points'    => $keyPoints,
    ];
}
