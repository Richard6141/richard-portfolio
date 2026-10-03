<?php
// ============================================================
// pv2-bootstrap.php · Données partagées des pages publiques "pv2"
// (service.php, services-index.php). Charge le profil mono-utilisateur
// et prépare les variables communes au header/footer.
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../helpers/functions.php';
require_once __DIR__ . '/../../helpers/icons.php';

$pdo = getPDO();

$stmt = $pdo->query("SELECT id, slug, email FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1");
$user = $stmt->fetch();
if (!$user) { header('Location: /auth/register.php'); exit; }
$userId = (int) $user['id'];

$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch() ?: [];

// Portfolio non publié : bloquer l'indexation
if (empty($profile['is_published'])) {
    http_response_code(404);
    header('X-Robots-Tag: noindex');
}

$stmt = $pdo->prepare("SELECT * FROM contact_info WHERE user_id = ?");
$stmt->execute([$userId]);
$contactInfo = $stmt->fetch() ?: [];

$stmt = $pdo->prepare("SELECT * FROM social_links WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$socialLinks = $stmt->fetchAll();

$fullName     = trim(($profile['first_name'] ?? '') . ' ' . ($profile['last_name'] ?? '')) ?: ($user['slug'] ?? 'Richard Salanon');
// URL canonique fixe (03/10/2026) : HTTP_HOST faisait de www un doublon complet.
$portfolioUrl = SITE_URL;

$h_email = $contactInfo['email_public'] ?? '';
$h_phone = $contactInfo['phone'] ?? '';
$h_city  = fait('ville'); // fiche de faits (03/10/2026), plus contact_info.city
$h_mailto = $h_email ? 'mailto:' . rawurlencode($h_email) . '?subject=' . rawurlencode('Demande de devis') : '/#contact';
$h_logo = siteLogoUrl();
$h_initials = mb_strtoupper(mb_substr($profile['first_name'] ?? 'R', 0, 1) . mb_substr($profile['last_name'] ?? 'S', 0, 1));
