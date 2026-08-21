<?php
// ============================================================
// Nom du fichier : helpers/mailer.php
// Description    : Envoi d'emails via PHPMailer
// Auth requise   : Non (utilitaire interne)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/constants.php';
// Chercher vendor dans plusieurs emplacements possibles
$vendorPaths = [
    __DIR__ . '/../../vendor/autoload.php',     // Structure standard (hors public_html)
    __DIR__ . '/../vendor/autoload.php',         // vendor dans public_html
];
$vendorLoaded = false;
foreach ($vendorPaths as $vp) {
    if (file_exists($vp)) { require_once $vp; $vendorLoaded = true; break; }
}
if (!$vendorLoaded) {
    // PHPMailer non installe, les fonctions mail retournent silencieusement
    function sendEmail(string $to, string $subject, string $htmlBody): void {}
    function sendWelcome(string $email, string $name, string $slug): void {}
    function sendPasswordReset(string $email, string $name, string $token): void {}
    function sendContactNotification(string $oe, string $on, string $sn, string $se, string $su, string $msg): void {}
    return; // Ne pas charger le reste du fichier
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * Cree et configure une instance PHPMailer.
 */
function createMailer(): PHPMailer
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = defined('SMTP_AUTH') ? SMTP_AUTH : true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = defined('SMTP_SECURE') && SMTP_SECURE === 'tls' ? PHPMailer::ENCRYPTION_STARTTLS : PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'UTF-8';
    $mail->SMTPDebug  = SMTP::DEBUG_OFF;

    $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);

    return $mail;
}

/**
 * Envoie un email avec un template HTML.
 *
 * @throws Exception En cas d'erreur d'envoi.
 */
function sendEmail(string $to, string $subject, string $htmlBody): void
{
    $mail = createMailer();
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = wrapInTemplate($subject, $htmlBody);
    $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $htmlBody));
    $mail->send();
}

/**
 * Email de bienvenue apres inscription.
 */
function sendWelcome(string $email, string $name, string $slug): void
{
    $appName = APP_NAME;
    $portfolioUrl = BASE_URL;
    $dashboardUrl = BASE_URL . '/dashboard/';

    $body = <<<HTML
    <h2>Bienvenue sur {$appName} !</h2>
    <p>Bonjour <strong>{$name}</strong>,</p>
    <p>Votre compte a ete cree avec succes. Votre portfolio est accessible a l'adresse :</p>
    <p style="text-align:center; margin: 24px 0;">
        <a href="{$portfolioUrl}" style="background-color:#2563eb; color:#fff; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:bold;">
            {$portfolioUrl}
        </a>
    </p>
    <p>Commencez a personnaliser votre portfolio depuis votre tableau de bord :</p>
    <p style="text-align:center; margin: 24px 0;">
        <a href="{$dashboardUrl}" style="background-color:#1e40af; color:#fff; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:bold;">
            Acceder au dashboard
        </a>
    </p>
    <p>A bientot,<br>L'equipe {$appName}</p>
    HTML;

    sendEmail($email, "Bienvenue sur {$appName} !", $body);
}

/**
 * Email de reinitialisation de mot de passe.
 */
function sendPasswordReset(string $email, string $name, string $token): void
{
    $resetUrl = BASE_URL . '/auth/reset-password.php?token=' . urlencode($token);
    $appName = APP_NAME;

    $body = <<<HTML
    <h2>Reinitialisation de votre mot de passe</h2>
    <p>Bonjour <strong>{$name}</strong>,</p>
    <p>Vous avez demande la reinitialisation de votre mot de passe. Cliquez sur le bouton ci-dessous pour en choisir un nouveau :</p>
    <p style="text-align:center; margin: 24px 0;">
        <a href="{$resetUrl}" style="background-color:#2563eb; color:#fff; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:bold;">
            Reinitialiser mon mot de passe
        </a>
    </p>
    <p><small>Ce lien est valide pendant 1 heure. Si vous n'avez pas fait cette demande, ignorez cet email.</small></p>
    <p>A bientot,<br>L'equipe {$appName}</p>
    HTML;

    sendEmail($email, "Reinitialisation de mot de passe, {$appName}", $body);
}

/**
 * Notification de nouveau message de contact.
 */
function sendContactNotification(
    string $ownerEmail,
    string $ownerName,
    string $senderName,
    string $senderEmail,
    string $subject,
    string $message
): void {
    $dashboardUrl = BASE_URL . '/dashboard/messages.php';
    $appName = APP_NAME;
    $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
    $safeSenderName = htmlspecialchars($senderName, ENT_QUOTES, 'UTF-8');
    $safeSenderEmail = htmlspecialchars($senderEmail, ENT_QUOTES, 'UTF-8');
    $safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');

    $body = <<<HTML
    <h2>Nouveau message de contact</h2>
    <p>Bonjour <strong>{$ownerName}</strong>,</p>
    <p>Vous avez recu un nouveau message via votre portfolio :</p>
    <table style="width:100%; border-collapse:collapse; margin:16px 0;">
        <tr>
            <td style="padding:8px; border-bottom:1px solid #e5e7eb; font-weight:bold; width:120px;">De</td>
            <td style="padding:8px; border-bottom:1px solid #e5e7eb;">{$safeSenderName} ({$safeSenderEmail})</td>
        </tr>
        <tr>
            <td style="padding:8px; border-bottom:1px solid #e5e7eb; font-weight:bold;">Sujet</td>
            <td style="padding:8px; border-bottom:1px solid #e5e7eb;">{$safeSubject}</td>
        </tr>
        <tr>
            <td style="padding:8px; font-weight:bold; vertical-align:top;">Message</td>
            <td style="padding:8px;">{$safeMessage}</td>
        </tr>
    </table>
    <p style="text-align:center; margin: 24px 0;">
        <a href="{$dashboardUrl}" style="background-color:#2563eb; color:#fff; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:bold;">
            Voir dans le dashboard
        </a>
    </p>
    <p>A bientot,<br>L'equipe {$appName}</p>
    HTML;

    sendEmail($ownerEmail, "Nouveau message : {$safeSubject}", $body);
}

/**
 * Enveloppe le contenu dans un template HTML responsive.
 */
function wrapInTemplate(string $title, string $content): string
{
    $appName = APP_NAME;
    $year = date('Y');

    return <<<HTML
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{$title}</title>
    </head>
    <body style="margin:0; padding:0; background-color:#f3f4f6; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
        <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f3f4f6; padding:32px 16px;">
            <tr>
                <td align="center">
                    <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 1px 3px rgba(0,0,0,0.1);">
                        <!-- Header -->
                        <tr>
                            <td style="background-color:#2563eb; padding:24px; text-align:center;">
                                <h1 style="margin:0; color:#ffffff; font-size:24px; font-weight:bold;">{$appName}</h1>
                            </td>
                        </tr>
                        <!-- Body -->
                        <tr>
                            <td style="padding:32px 24px; color:#374151; font-size:16px; line-height:1.6;">
                                {$content}
                            </td>
                        </tr>
                        <!-- Footer -->
                        <tr>
                            <td style="padding:16px 24px; text-align:center; color:#9ca3af; font-size:12px; border-top:1px solid #e5e7eb;">
                                &copy; {$year} {$appName}, Tous droits reserves
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    </html>
    HTML;
}
