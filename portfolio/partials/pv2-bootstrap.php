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

// Vague 0C : une ancienne URL dont la cible est publiée part en 301 avant toute requête en base.
redirection_appliquer((string) (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/'));

// Base facultative (03/10/2026, vague 0B) : les pages servies depuis des
// fichiers (villes, sujets, formations, zones, à-propos, contact) doivent
// s'afficher même base arrêtée, avec les données de la fiche de faits.
$pdo = null;
try {
    $pdo = getPDO();
} catch (\Throwable $e) {
    error_log('pv2-bootstrap : base indisponible : ' . $e->getMessage());
}

$userId      = 0;
$profile     = [];
$contactInfo = [];
$socialLinks = [];

if ($pdo !== null) {
    $stmt = $pdo->query("SELECT id, slug, email FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1");
    $user = $stmt->fetch();
    if (!$user) { header('Location: /auth/register.php'); exit; }
    $userId = (int) $user['id'];

    $stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
    $stmt->execute([$userId]);
    $profile = $stmt->fetch() ?: [];

    // Maintenance activée au tableau de bord : 503 pour tout le site.
    if (($maintenance = page_maintenance($profile)) !== null) {
        http_response_code(503);
        header('Retry-After: 3600');
        header('Content-Type: text/html; charset=UTF-8');
        echo $maintenance;
        exit;
    }

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
}

// Coordonnées de repli depuis la fiche de faits.
$contactInfo += ['email_public' => fait('email'), 'phone' => fait('telephone'), 'city' => fait('ville'), 'country' => fait('pays')];

// Nom affiché : la fiche de faits fait foi (marque unique, spec 2).
$fullName     = fait('nom');
// URL canonique fixe (03/10/2026) : HTTP_HOST faisait de www un doublon complet.
$portfolioUrl = SITE_URL;

$h_email = $contactInfo['email_public'] ?? '';
$h_phone = $contactInfo['phone'] ?? '';
$h_city  = fait('ville'); // fiche de faits (03/10/2026), plus contact_info.city
$h_mailto = $h_email ? 'mailto:' . rawurlencode($h_email) . '?subject=' . rawurlencode('Demande de devis') : '/#contact';
$h_logo = siteLogoUrl();
$h_initials = mb_strtoupper(mb_substr($profile['first_name'] ?? 'R', 0, 1) . mb_substr($profile['last_name'] ?? 'S', 0, 1));
