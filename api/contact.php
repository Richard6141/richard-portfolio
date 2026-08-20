<?php
// ============================================================
// Nom du fichier : api/contact.php
// Description    : GET/PUT des coordonnees de contact
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
    $stmt = $pdo->prepare("SELECT * FROM contact_info WHERE user_id = ?");
    $stmt->execute([$userId]);
    $data = $stmt->fetch();
    if (!$data) {
        $stmt = $pdo->prepare("INSERT INTO contact_info (user_id) VALUES (?)");
        $stmt->execute([$userId]);
        $stmt = $pdo->prepare("SELECT * FROM contact_info WHERE user_id = ?");
        $stmt->execute([$userId]);
        $data = $stmt->fetch();
    }
    jsonSuccess($data);
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $d = getJsonBody();

    $emailPublic = trim($d['email_public'] ?? '');
    if ($emailPublic !== '' && !filter_var($emailPublic, FILTER_VALIDATE_EMAIL)) {
        jsonError('Email public invalide');
    }

    $formEmail = trim($d['form_email'] ?? '');
    if ($formEmail !== '' && !filter_var($formEmail, FILTER_VALIDATE_EMAIL)) {
        jsonError('Email de reception invalide');
    }

    $stmt = $pdo->prepare("
        UPDATE contact_info SET
            email_public = ?, phone = ?, whatsapp = ?, address = ?,
            city = ?, country = ?, google_maps_url = ?, calendly_url = ?,
            availability_hours = ?, response_time = ?,
            form_enabled = ?, form_email = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        $emailPublic ?: null,
        trim($d['phone'] ?? '') ?: null,
        trim($d['whatsapp'] ?? '') ?: null,
        trim($d['address'] ?? '') ?: null,
        trim($d['city'] ?? '') ?: null,
        trim($d['country'] ?? '') ?: null,
        trim($d['google_maps_url'] ?? '') ?: null,
        trim($d['calendly_url'] ?? '') ?: null,
        trim($d['availability_hours'] ?? '') ?: null,
        trim($d['response_time'] ?? '') ?: null,
        (int)(bool)($d['form_enabled'] ?? true),
        $formEmail ?: null,
        $userId,
    ]);

    jsonSuccess(null, 'Coordonnees mises a jour');
}
