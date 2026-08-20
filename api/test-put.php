<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

$result = [
    'request_method' => $_SERVER['REQUEST_METHOD'],
    'http_method' => getHttpMethod(),
    'override_header' => $_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'] ?? 'absent',
    'content_type' => $_SERVER['CONTENT_TYPE'] ?? 'absent',
    'csrf_header' => $_SERVER['HTTP_X_CSRF_TOKEN'] ?? 'absent',
    'logged_in' => isLoggedIn(),
    'body_raw' => file_get_contents('php://input'),
];

// Tester si le CSRF valide
if (isLoggedIn()) {
    $csrfFromHeader = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? null;
    $result['csrf_valid'] = validateCsrfToken($csrfFromHeader);
    $result['csrf_session'] = $_SESSION['csrf_token'] ?? 'absent';
}

echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
