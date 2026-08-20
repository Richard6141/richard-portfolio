<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/config/db.php';
require_once __DIR__ . '/config/session.php';
require_once __DIR__ . '/helpers/functions.php';

echo "<h2>Test APIs Dashboard</h2><pre>";

// Verifier session
echo "Session active: " . (session_status() === PHP_SESSION_ACTIVE ? 'OUI' : 'NON') . "\n";
echo "User connecte: " . (isLoggedIn() ? 'OUI (ID=' . getCurrentUserId() . ')' : 'NON') . "\n\n";

if (!isLoggedIn()) {
    echo "⚠️ Tu n'es pas connecte. Connecte-toi d'abord sur /auth/login.php\n";
    echo "</pre>";
    exit;
}

$pdo = getPDO();
$userId = getCurrentUserId();

// Tester chaque table
$tests = [
    'profiles' => "SELECT first_name, last_name, profession FROM profiles WHERE user_id = ?",
    'experiences' => "SELECT COUNT(*) AS nb FROM experiences WHERE user_id = ?",
    'education' => "SELECT COUNT(*) AS nb FROM education WHERE user_id = ?",
    'skills' => "SELECT COUNT(*) AS nb FROM skills WHERE user_id = ?",
    'skill_categories' => "SELECT COUNT(*) AS nb FROM skill_categories WHERE user_id = ?",
    'services' => "SELECT COUNT(*) AS nb FROM services WHERE user_id = ?",
    'projects' => "SELECT COUNT(*) AS nb FROM projects WHERE user_id = ?",
    'certifications' => "SELECT COUNT(*) AS nb FROM certifications WHERE user_id = ?",
    'languages' => "SELECT COUNT(*) AS nb FROM languages WHERE user_id = ?",
    'social_links' => "SELECT COUNT(*) AS nb FROM social_links WHERE user_id = ?",
    'sections_config' => "SELECT COUNT(*) AS nb FROM sections_config WHERE user_id = ?",
    'contact_info' => "SELECT email_public, phone FROM contact_info WHERE user_id = ?",
    'seo_config' => "SELECT meta_title FROM seo_config WHERE user_id = ?",
    'hero_sections' => "SELECT cta_primary_text FROM hero_sections WHERE user_id = ?",
    'appearance_config' => "SELECT COUNT(*) AS nb FROM appearance_config WHERE user_id = ?",
];

foreach ($tests as $table => $sql) {
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userId]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo str_pad($table, 20) . ": ";
    if ($row) {
        echo json_encode($row, JSON_UNESCAPED_UNICODE);
    } else {
        echo "⚠️ AUCUNE DONNEE";
    }
    echo "\n";
}

echo "\n--- Test CSRF ---\n";
echo "CSRF Token: " . (generateCsrfToken() ? 'OK (' . substr(generateCsrfToken(), 0, 16) . '...)' : 'ECHEC') . "\n";

echo "</pre>";
echo "<p style='color:red'>⚠️ SUPPRIME ce fichier apres utilisation</p>";
