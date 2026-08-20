<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "Step 1: constants.php\n";
require_once __DIR__ . '/config/constants.php';
echo "OK\n";

echo "Step 2: db.php\n";
require_once __DIR__ . '/config/db.php';
echo "OK\n";

echo "Step 3: functions.php\n";
require_once __DIR__ . '/helpers/functions.php';
echo "OK\n";

echo "Step 4: session.php\n";
require_once __DIR__ . '/config/session.php';
echo "OK\n";

echo "Step 5: getPDO()\n";
$pdo = getPDO();
echo "OK\n";

echo "Step 6: Query users\n";
$stmt = $pdo->query("SELECT id, slug, email FROM users WHERE is_active = 1 ORDER BY id ASC LIMIT 1");
$user = $stmt->fetch();
echo "User found: " . ($user ? $user['email'] : 'NONE — will redirect to register') . "\n";

echo "Step 7: Load portfolio/index.php logic\n";
if (!$user) {
    echo "No user -> would redirect to /auth/register.php\n";
    echo "Try visiting: https://richard.salanon.info/auth/register.php\n";
} else {
    echo "User ID: " . $user['id'] . "\n";
}

echo "\nAll steps passed!";
