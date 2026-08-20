<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
header('Content-Type: text/plain');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

echo "1. Method: " . $_SERVER['REQUEST_METHOD'] . "\n";
echo "2. getHttpMethod: " . getHttpMethod() . "\n";
echo "3. Override: " . ($_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'] ?? 'absent') . "\n";
echo "4. Logged in: " . (isLoggedIn() ? 'YES' : 'NO') . "\n";

// Simuler ce que fait apiCall('skills?id=1', 'PUT', data)
// en appelant directement le fichier skills.php
echo "\n--- Test direct skills.php ---\n";

// Simuler un PUT
$_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'] = 'GET';
$_SERVER['REQUEST_METHOD'] = 'POST';

ob_start();
require __DIR__ . '/skills.php';
$output = ob_get_clean();

echo "Output length: " . strlen($output) . "\n";
echo "First 300 chars:\n";
echo substr($output, 0, 300) . "\n";
