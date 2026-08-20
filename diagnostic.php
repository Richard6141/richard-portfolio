<?php
// Fichier de diagnostic — SUPPRIMER APRES UTILISATION
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "<h2>Diagnostic PortfolioSaaS</h2>";
echo "<pre>";

// 1. PHP Version
echo "PHP Version: " . PHP_VERSION . "\n";
echo "PHP >= 8.1: " . (version_compare(PHP_VERSION, '8.1.0', '>=') ? 'OK' : 'ECHEC — PHP 8.1 minimum requis') . "\n\n";

// 2. Extensions
$required = ['pdo_mysql', 'gd', 'mbstring', 'json'];
$optional = ['intl'];
echo "Extensions requises:\n";
foreach ($required as $ext) {
    echo "  $ext: " . (extension_loaded($ext) ? 'OK' : 'MANQUANTE') . "\n";
}
echo "\nExtensions optionnelles:\n";
foreach ($optional as $ext) {
    echo "  $ext: " . (extension_loaded($ext) ? 'OK' : 'MANQUANTE (non bloquant)') . "\n";
}

// 3. Fichiers critiques
echo "\nFichiers critiques:\n";
$files = ['config/constants.php', 'config/db.php', 'config/session.php', 'helpers/functions.php', 'portfolio/index.php', 'index.php'];
foreach ($files as $f) {
    echo "  $f: " . (file_exists(__DIR__ . '/' . $f) ? 'OK' : 'MANQUANT') . "\n";
}

// 4. Connexion DB
echo "\nConnexion DB:\n";
try {
    require_once __DIR__ . '/config/constants.php';
    echo "  DB_HOST: " . DB_HOST . "\n";
    echo "  DB_NAME: " . DB_NAME . "\n";
    echo "  DB_USER: " . DB_USER . "\n";

    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "  Connexion: OK\n";

    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    echo "  Tables trouvees: " . count($tables) . "\n";
    if (count($tables) > 0) {
        echo "  Liste: " . implode(', ', $tables) . "\n";
    }

    $users = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
    echo "  Utilisateurs: $users\n";
} catch (Exception $e) {
    echo "  ERREUR: " . $e->getMessage() . "\n";
}

// 5. Ecriture uploads
echo "\nDossier uploads:\n";
$uploadDir = __DIR__ . '/uploads';
echo "  Existe: " . (is_dir($uploadDir) ? 'OK' : 'NON') . "\n";
echo "  Writable: " . (is_writable($uploadDir) ? 'OK' : 'NON') . "\n";

// 6. Session
echo "\nSession:\n";
try {
    session_start();
    echo "  Session: OK\n";
} catch (Exception $e) {
    echo "  ERREUR: " . $e->getMessage() . "\n";
}

echo "</pre>";
echo "<p style='color:red;font-weight:bold'>⚠️ SUPPRIME CE FICHIER APRES UTILISATION (diagnostic.php)</p>";
