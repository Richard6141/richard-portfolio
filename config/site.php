<?php
// ============================================================
// config/site.php · Constantes publiques du site, versionnées.
// Créé le 03/10/2026 (vague 0A). config/constants.php reste propre au
// serveur et hors dépôt ; ce fichier porte ce qui doit être identique
// partout. SITE_URL se surcharge par la variable d'environnement SITE_URL
// (vhost local : SetEnv SITE_URL http://localhost:8081).
// ============================================================
declare(strict_types=1);

require_once __DIR__ . '/../helpers/site.php';

if (!defined('SITE_URL')) {
    define('SITE_URL', site_base(getenv('SITE_URL') ?: ($_SERVER['SITE_URL'] ?? null)));
}
if (!defined('GA4_ID')) {
    define('GA4_ID', 'G-6K3TFTGZ76');
}
if (!defined('CLARITY_ID')) {
    define('CLARITY_ID', 'xty0gc725v');
}
