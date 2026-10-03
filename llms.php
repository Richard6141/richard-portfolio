<?php
// ============================================================
// llms.php · Sert /llms.txt et /llms-full.txt (réécriture .htaccess).
// Créé le 03/10/2026 (spec 5.4). Fonctionne base arrêtée : seules les
// sections issues de la base (services, réalisations, articles) manquent.
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/helpers/llms.php';

try {
    $pdo = getPDO();
} catch (\Throwable $e) {
    $pdo = null;
}
$complet = isset($_GET['complet']);

header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: public, max-age=3600');
echo llms_contenu(faits(), SITE_URL, llms_collecter($pdo, SITE_URL, $complet), $complet);
