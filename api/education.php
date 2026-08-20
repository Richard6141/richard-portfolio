<?php
// ============================================================
// Nom du fichier : api/education.php
// Description    : CRUD des formations / diplomes
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
// GET
// ----------------------------------------------------------
function handleGet(PDO $pdo, int $userId): void
{
    $stmt = $pdo->prepare("
        SELECT * FROM education
        WHERE user_id = ?
        ORDER BY sort_order ASC, start_year DESC
    ");
    $stmt->execute([$userId]);
    jsonSuccess($stmt->fetchAll());
}

// ----------------------------------------------------------
// POST
// ----------------------------------------------------------
function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $v = validateEducation($data);

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM education WHERE user_id = ?");
    $stmt->execute([$userId]);
    $nextOrder = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO education
            (user_id, degree, field_of_study, institution, institution_url, institution_logo,
             location, start_year, end_year, is_current, grade, description, activities, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $userId, $v['degree'], $v['field_of_study'], $v['institution'],
        $v['institution_url'], $v['institution_logo'], $v['location'],
        $v['start_year'], $v['end_year'], $v['is_current'],
        $v['grade'], $v['description'], $v['activities'], $nextOrder,
    ]);

    $id = (int) $pdo->lastInsertId();
    $stmt = $pdo->prepare("SELECT * FROM education WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);

    jsonSuccess($stmt->fetch(), 'Formation ajoutee avec succes');
}

// ----------------------------------------------------------
// PUT
// ----------------------------------------------------------
function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE education SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $order => $id) {
            $stmt->execute([$order, (int) $id, $userId]);
        }
        jsonSuccess(null, 'Ordre mis a jour');
    }

    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM education WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Formation introuvable', 404);

    $v = validateEducation($data);

    $stmt = $pdo->prepare("
        UPDATE education SET
            degree = ?, field_of_study = ?, institution = ?, institution_url = ?,
            institution_logo = ?, location = ?, start_year = ?, end_year = ?,
            is_current = ?, grade = ?, description = ?, activities = ?
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([
        $v['degree'], $v['field_of_study'], $v['institution'], $v['institution_url'],
        $v['institution_logo'], $v['location'], $v['start_year'], $v['end_year'],
        $v['is_current'], $v['grade'], $v['description'], $v['activities'],
        $id, $userId,
    ]);

    $stmt = $pdo->prepare("SELECT * FROM education WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    jsonSuccess($stmt->fetch(), 'Formation mise a jour');
}

// ----------------------------------------------------------
// DELETE
// ----------------------------------------------------------
function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("DELETE FROM education WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);

    if ($stmt->rowCount() === 0) jsonError('Formation introuvable', 404);

    jsonSuccess(null, 'Formation supprimee');
}

// ----------------------------------------------------------
// Validation
// ----------------------------------------------------------
function validateEducation(array $data): array
{
    $degree = trim($data['degree'] ?? '');
    $institution = trim($data['institution'] ?? '');
    $startYear = (int) ($data['start_year'] ?? 0);

    if ($degree === '') jsonError('Le diplome est obligatoire');
    if (mb_strlen($degree) > 255) jsonError('Le diplome est trop long (max 255)');
    if ($institution === '') jsonError('L\'etablissement est obligatoire');
    if (mb_strlen($institution) > 255) jsonError('L\'etablissement est trop long (max 255)');
    if ($startYear < 1950 || $startYear > 2100) jsonError('Annee de debut invalide');

    $isCurrent = (bool) ($data['is_current'] ?? false);
    $endYear = null;
    if (!$isCurrent) {
        $endYear = ($data['end_year'] ?? null);
        if ($endYear !== null && $endYear !== '') {
            $endYear = (int) $endYear;
            if ($endYear < 1950 || $endYear > 2100) jsonError('Annee de fin invalide');
        } else {
            $endYear = null;
        }
    }

    return [
        'degree'           => $degree,
        'field_of_study'   => trim($data['field_of_study'] ?? ''),
        'institution'      => $institution,
        'institution_url'  => trim($data['institution_url'] ?? ''),
        'institution_logo' => trim($data['institution_logo'] ?? ''),
        'location'         => trim($data['location'] ?? ''),
        'start_year'       => $startYear,
        'end_year'         => $endYear,
        'is_current'       => $isCurrent ? 1 : 0,
        'grade'            => trim($data['grade'] ?? ''),
        'description'      => trim($data['description'] ?? ''),
        'activities'       => trim($data['activities'] ?? ''),
    ];
}
