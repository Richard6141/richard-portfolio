<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "1. Start<br>";

echo "2. db.php: ";
require_once __DIR__ . '/config/db.php';
echo "OK<br>";

echo "3. functions.php: ";
require_once __DIR__ . '/helpers/functions.php';
echo "OK<br>";

echo "4. icons.php: ";
require_once __DIR__ . '/helpers/icons.php';
echo "OK<br>";

echo "5. getPDO: ";
$pdo = getPDO();
echo "OK<br>";

echo "6. Query user: ";
$stmt = $pdo->query("SELECT id, slug FROM users WHERE is_active = 1 LIMIT 1");
$user = $stmt->fetch();
echo $user ? "User found: " . $user['slug'] : "No user";
echo "<br>";

echo "7. Profile: ";
$stmt = $pdo->prepare("SELECT template, first_name FROM profiles WHERE user_id = ?");
$stmt->execute([$user['id']]);
$p = $stmt->fetch();
echo "template=" . ($p['template'] ?? 'NULL') . " name=" . ($p['first_name'] ?? 'NULL');
echo "<br>";

echo "8. Template file: ";
$tplFile = __DIR__ . '/portfolio/templates/' . ($p['template'] ?? 'starter') . '.php';
echo file_exists($tplFile) ? "EXISTS" : "MISSING: " . $tplFile;
echo "<br>";

echo "<br>Done!";
