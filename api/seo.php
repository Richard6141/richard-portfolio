<?php
// ============================================================
// Nom du fichier : api/seo.php
// Description    : Configuration SEO du portfolio
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
    $stmt = $pdo->prepare("SELECT * FROM seo_config WHERE user_id = ?");
    $stmt->execute([$userId]);
    $data = $stmt->fetch();

    $stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $slug = $stmt->fetchColumn();

    jsonSuccess([
        'seo'  => $data,
        'slug' => $slug,
    ]);
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $d = getJsonBody();

    $metaTitle = trim($d['meta_title'] ?? '');
    if (mb_strlen($metaTitle) > 60) jsonError('Meta title trop long (max 60)');

    $metaDesc = trim($d['meta_description'] ?? '');
    if (mb_strlen($metaDesc) > 160) jsonError('Meta description trop longue (max 160)');

    $twitterCard = $d['twitter_card'] ?? 'summary_large_image';
    if (!in_array($twitterCard, ['summary', 'summary_large_image'], true)) $twitterCard = 'summary_large_image';

    $robots = $d['robots'] ?? 'index';
    if (!in_array($robots, ['index', 'noindex'], true)) $robots = 'index';

    $googleSiteVerification = trim($d['google_site_verification'] ?? '');
    // Accepter uniquement des caractères alphanumériques et tirets (valeur du content=)
    if ($googleSiteVerification && !preg_match('/^[A-Za-z0-9_\-]{10,100}$/', $googleSiteVerification)) {
        $googleSiteVerification = '';
    }

    $stmt = $pdo->prepare("
        UPDATE seo_config SET
            meta_title = ?, meta_description = ?, meta_keywords = ?,
            og_title = ?, og_description = ?, twitter_card = ?,
            google_analytics_id = ?, google_site_verification = ?, robots = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        $metaTitle ?: null,
        $metaDesc ?: null,
        trim($d['meta_keywords'] ?? '') ?: null,
        trim($d['og_title'] ?? '') ?: null,
        trim($d['og_description'] ?? '') ?: null,
        $twitterCard,
        trim($d['google_analytics_id'] ?? '') ?: null,
        $googleSiteVerification ?: null,
        $robots,
        $userId,
    ]);

    jsonSuccess(null, 'SEO mis a jour');
}
