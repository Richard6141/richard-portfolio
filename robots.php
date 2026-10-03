<?php
// ============================================================
// robots.php · Sert robots.txt (réécriture .htaccess robots.txt -> robots.php).
// Réécrit le 03/10/2026 : statique, sans base de données (spec 5.4).
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/helpers/robots.php';

header('Content-Type: text/plain; charset=UTF-8');
header('Cache-Control: public, max-age=86400');
echo robots_txt(SITE_URL);
