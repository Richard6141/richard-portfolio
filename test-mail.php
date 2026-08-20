<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/config/constants.php';
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/helpers/mailer.php';

echo "<h2>Test SMTP</h2><pre>";
echo "SMTP_HOST: " . SMTP_HOST . "\n";
echo "SMTP_PORT: " . SMTP_PORT . "\n";
echo "SMTP_USER: " . SMTP_USER . "\n";
echo "SMTP_FROM: " . SMTP_FROM_EMAIL . "\n";
echo "SMTP_SECURE: " . (defined('SMTP_SECURE') ? SMTP_SECURE : 'non defini') . "\n\n";

echo "Envoi d'un email de test...\n";

try {
    sendEmail(
        'richardsomasse@gmail.com',
        'Test SMTP PortfolioSaaS',
        '<h2>Ca marche !</h2><p>Si tu recois cet email, le SMTP fonctionne correctement.</p>'
    );
    echo "SUCCES ! Email envoye a richardsomasse@gmail.com\n";
} catch (\Throwable $e) {
    echo "ERREUR : " . $e->getMessage() . "\n";
    echo "Code : " . $e->getCode() . "\n";
    echo "Trace : " . $e->getTraceAsString() . "\n";
}

echo "</pre>";
echo "<p style='color:red'>SUPPRIME ce fichier apres utilisation !</p>";
