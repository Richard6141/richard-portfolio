<?php
// Génère un favicon SVG dynamique avec les initiales + couleur primaire du portfolio
declare(strict_types=1);

require_once __DIR__ . '/config/db.php';

header('Content-Type: image/svg+xml');
header('Cache-Control: public, max-age=86400');
header('Vary: Accept');

try {
    $pdo  = getPDO();
    $stmt = $pdo->query("
        SELECT p.first_name, p.last_name, p.color_primary
        FROM profiles p
        INNER JOIN users u ON u.id = p.user_id
        WHERE u.is_active = 1
        ORDER BY u.id ASC LIMIT 1
    ");
    $row  = $stmt->fetch();
} catch (\Exception $e) {
    $row = null;
}

$first   = strtoupper(mb_substr($row['first_name'] ?? 'P', 0, 1));
$last    = strtoupper(mb_substr($row['last_name']  ?? '', 0, 1));
$initials = $first . $last ?: 'P';
$color   = $row['color_primary'] ?? '#2563eb';

// Valider la couleur (hex uniquement)
if (!preg_match('/^#[0-9a-fA-F]{3,6}$/', $color)) {
    $color = '#2563eb';
}

// Taille du texte selon le nombre d'initiales
$fontSize = strlen($initials) === 1 ? '52' : '40';

echo <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
  <rect width="100" height="100" rx="20" fill="{$color}"/>
  <text x="50" y="50" dominant-baseline="central" text-anchor="middle"
        font-family="system-ui, -apple-system, sans-serif"
        font-weight="700" font-size="{$fontSize}" fill="#ffffff">{$initials}</text>
</svg>
SVG;
