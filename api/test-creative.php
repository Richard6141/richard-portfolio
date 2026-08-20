<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/functions.php';

$pdo = getPDO();

// Simuler les variables que index.php cree
$stmt = $pdo->query("SELECT * FROM users WHERE id = 1");
$user = $stmt->fetch();
$userId = 1;
$slug = $user['slug'];
$fullName = 'Richard SALANON';

$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmt->execute([$userId]);
$profile = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM appearance_config WHERE user_id = ?");
$stmt->execute([$userId]);
$appearance = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM hero_sections WHERE user_id = ?");
$stmt->execute([$userId]);
$hero = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM about_sections WHERE user_id = ?");
$stmt->execute([$userId]);
$about = $stmt->fetch();

$stmt = $pdo->prepare("SELECT * FROM sections_config WHERE user_id = ? AND is_visible = 1 ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$sections = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM social_links WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$socialLinks = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM contact_info WHERE user_id = ?");
$stmt->execute([$userId]);
$contactInfo = $stmt->fetch();

echo "<h2>Test Creative Template Rendering</h2>";
echo "<p>Sections: " . count($sections) . "</p>";

// Capturer le rendu du template
ob_start();
try {
    include __DIR__ . '/../portfolio/templates/creative.php';
    $html = ob_get_clean();
    echo "<p style='color:green'>Template rendu OK — " . strlen($html) . " bytes</p>";

    // Chercher quelles sections sont presentes
    $sectionIds = ['about','experiences','education','skills','services','projects','testimonials','certifications','languages','blog','contact'];
    foreach ($sectionIds as $sid) {
        $found = strpos($html, 'id="' . $sid . '"') !== false;
        echo "<p>" . ($found ? '✅' : '❌') . " Section: $sid</p>";
    }
} catch (Throwable $e) {
    ob_end_clean();
    echo "<p style='color:red'>ERREUR: " . $e->getMessage() . "</p>";
    echo "<p>Fichier: " . $e->getFile() . " ligne " . $e->getLine() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
