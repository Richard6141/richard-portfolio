<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/functions.php';

$pdo = getPDO();

// Check template column exists
$stmt = $pdo->query("SHOW COLUMNS FROM profiles LIKE 'template'");
$col = $stmt->fetch();

// Check profile data
$stmt = $pdo->query("SELECT template, first_name FROM profiles WHERE user_id = 1");
$profile = $stmt->fetch();

// Check sections
$stmt = $pdo->query("SELECT COUNT(*) AS cnt FROM sections_config WHERE user_id = 1 AND is_visible = 1");
$sections = $stmt->fetch();

// Check data counts
$tables = ['experiences','education','skills','services','projects','testimonials','certifications','languages'];
$counts = [];
foreach ($tables as $t) {
    $s = $pdo->query("SELECT COUNT(*) FROM {$t} WHERE user_id = 1");
    $counts[$t] = (int)$s->fetchColumn();
}

echo json_encode([
    'template_column_exists' => $col ? true : false,
    'template_value' => $profile['template'] ?? 'COLUMN MISSING',
    'name' => $profile['first_name'] ?? 'N/A',
    'visible_sections' => (int)$sections['cnt'],
    'data_counts' => $counts,
], JSON_PRETTY_PRINT);
