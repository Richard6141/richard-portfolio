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

$host     = $_SERVER['HTTP_HOST'] ?? 'richardsalanon.com';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$baseUrl  = $protocol . '://' . rtrim($host, '/');

try {
    $xml = buildSitemapXml(getPDO(), $baseUrl);
    ob_clean();
    header('Content-Type: application/xml; charset=UTF-8');
    header('Cache-Control: public, max-age=3600');
    echo $xml;
} catch (\Throwable $e) {
    ob_clean();
    header('Content-Type: application/xml; charset=UTF-8');
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
}
