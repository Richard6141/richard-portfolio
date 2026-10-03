<?php
// ============================================================
// sitemap.php — Secours dynamique du sitemap.
// En temps normal, c'est le fichier statique /sitemap.xml (genere par
// generate-sitemap.php via cron) qui est servi. Ce script n'est appele
// que si le fichier statique n'existe pas encore (voir .htaccess).
// ============================================================
declare(strict_types=1);

ob_start();

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/helpers/functions.php';

$baseUrl = SITE_URL;

try {
    $pdo = getPDO();
} catch (\Throwable $e) {
    $pdo = null; // les pages de fichiers restent listées
}
$xml = buildSitemapXml($pdo, $baseUrl);
ob_clean();
header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: public, max-age=3600');
echo $xml;
