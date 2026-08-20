<?php
// ============================================================
// Nom du fichier : api/hero.php
// Description    : Gestion de la section Hero
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
    $stmt = $pdo->prepare("SELECT * FROM hero_sections WHERE user_id = ?");
    $stmt->execute([$userId]);
    jsonSuccess(['hero' => $stmt->fetch()]);
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $d = getJsonBody();

    // Titres animés
    $rawTitles = $d['title_animated'] ?? [];
    if (!is_array($rawTitles)) $rawTitles = [];
    $titles = array_values(array_filter(
        array_map(fn($t) => mb_substr(trim((string)$t), 0, 80), $rawTitles),
        fn($t) => $t !== ''
    ));
    if (count($titles) > 8) $titles = array_slice($titles, 0, 8);

    // CTAs
    $ctaPrimaryText   = mb_substr(trim($d['cta_primary_text']   ?? ''), 0, 100);
    $ctaPrimaryUrl    = mb_substr(trim($d['cta_primary_url']    ?? ''), 0, 500);
    $ctaSecondaryText = mb_substr(trim($d['cta_secondary_text'] ?? ''), 0, 100);
    $ctaSecondaryUrl  = mb_substr(trim($d['cta_secondary_url']  ?? ''), 0, 500);

    // Avatar shape
    $avatarShape = $d['avatar_shape'] ?? 'circle';
    if (!in_array($avatarShape, ['circle', 'rounded', 'hexagon'], true)) $avatarShape = 'circle';

    $stmt = $pdo->prepare("
        UPDATE hero_sections SET
            title_animated      = ?,
            cta_primary_text    = ?,
            cta_primary_url     = ?,
            cta_secondary_text  = ?,
            cta_secondary_url   = ?,
            avatar_shape        = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        empty($titles) ? null : json_encode($titles, JSON_UNESCAPED_UNICODE),
        $ctaPrimaryText   ?: null,
        $ctaPrimaryUrl    ?: null,
        $ctaSecondaryText ?: null,
        $ctaSecondaryUrl  ?: null,
        $avatarShape,
        $userId,
    ]);

    jsonSuccess(null, 'Section Hero mise a jour');
}
