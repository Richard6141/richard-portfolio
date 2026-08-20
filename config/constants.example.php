<?php
// ============================================================
// Nom du fichier : config/constants.example.php
// Description    : Template de configuration — copier vers constants.php
// ============================================================
// Copier ce fichier :
//   cp constants.example.php constants.php
// Puis remplir les valeurs sensibles ci-dessous.
// ============================================================

declare(strict_types=1);

// --- Base de données ---
define('DB_HOST', 'localhost');
define('DB_NAME', 'u123456_portfolio');     // Nom de la base MySQL Hostinger
define('DB_USER', 'u123456_admin');         // Utilisateur MySQL Hostinger
define('DB_PASS', '*** MOT DE PASSE DB ***');
define('DB_CHARSET', 'utf8mb4');

// --- Application ---
define('APP_NAME', 'PortfolioSaaS');
define('APP_SECRET', '*** CHAINE ALEATOIRE 64+ CHARS ***');
define('BASE_DOMAIN', 'salanon.info');
define('BASE_URL', 'https://salanon.info');
define('APP_ENV', 'production'); // 'development' | 'production'

// --- SMTP (PHPMailer) ---
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'noreply@salanon.info');
define('SMTP_PASS', '*** MOT DE PASSE SMTP ***');
define('SMTP_FROM_NAME', 'PortfolioSaaS');
define('SMTP_FROM_EMAIL', 'noreply@salanon.info');

// --- Uploads ---
define('UPLOAD_MAX_SIZE', 10485760);         // 10 MB
define('UPLOAD_MAX_CV', 5242880);            // 5 MB
define('UPLOAD_MAX_IMAGE', 2097152);         // 2 MB
define('UPLOAD_DIR', __DIR__ . '/../uploads');

// --- Slugs réservés ---
define('RESERVED_SLUGS', [
    'www', 'mail', 'ftp', 'admin', 'api', 'dashboard',
    'static', 'cdn', 'assets', 'salanon', 'info',
    'cpanel', 'webmail', 'smtp', 'imap', 'pop',
    'auth', 'login', 'register', 'portfolio',
    'uploads', 'config', 'helpers', 'includes',
]);

// --- Sessions ---
define('SESSION_LIFETIME', 3600);            // 1 heure
define('REMEMBER_ME_LIFETIME', 2592000);     // 30 jours

// --- Rate limiting ---
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_LOCKOUT_MINUTES', 15);
define('MAX_CONTACT_PER_IP_HOUR', 5);
