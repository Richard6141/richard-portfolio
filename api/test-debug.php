<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
header('Content-Type: application/json');

// Test 1: le fichier est accessible
$result = ['step1_file' => 'OK'];

// Test 2: constants
try {
    require_once __DIR__ . '/../config/constants.php';
    $result['step2_constants'] = 'OK';
    $result['base_domain'] = BASE_DOMAIN;
} catch (Throwable $e) {
    $result['step2_constants'] = 'FAIL: ' . $e->getMessage();
}

// Test 3: DB
try {
    require_once __DIR__ . '/../config/db.php';
    $pdo = getPDO();
    $result['step3_db'] = 'OK';
} catch (Throwable $e) {
    $result['step3_db'] = 'FAIL: ' . $e->getMessage();
}

// Test 4: functions
try {
    require_once __DIR__ . '/../helpers/functions.php';
    $result['step4_functions'] = 'OK';
    $result['http_method'] = getHttpMethod();
    $result['request_method'] = $_SERVER['REQUEST_METHOD'];
    $result['override'] = $_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'] ?? 'none';
} catch (Throwable $e) {
    $result['step4_functions'] = 'FAIL: ' . $e->getMessage();
}

// Test 5: session
try {
    require_once __DIR__ . '/../config/session.php';
    $result['step5_session'] = 'OK';
    $result['logged_in'] = isLoggedIn();
    $result['user_id'] = isLoggedIn() ? getCurrentUserId() : null;
    $result['session_domain'] = '.' . BASE_DOMAIN;
} catch (Throwable $e) {
    $result['step5_session'] = 'FAIL: ' . $e->getMessage();
}

echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
