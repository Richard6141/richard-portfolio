<?php
// ============================================================
// Nom du fichier : api/contact-form.php
// Description    : Reception des messages de contact publics
// Methodes       : POST
// Auth requise   : Non (formulaire public)
// ============================================================

declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../helpers/functions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonError('Methode non autorisee', 405);
}

$data = getJsonBody();

// Honeypot
if (!empty($data['website'])) {
    // Bot detected — pretend success
    jsonSuccess(null, 'Message envoye');
}

$userId  = (int) ($data['user_id'] ?? 0);
$name    = trim($data['name'] ?? '');
$email   = trim($data['email'] ?? '');
$subject = trim($data['subject'] ?? '');
$message = trim($data['message'] ?? '');

// Validations
if ($userId <= 0) jsonError('Destinataire invalide');
if ($name === '') jsonError('Le nom est obligatoire');
if (mb_strlen($name) > 255) jsonError('Nom trop long');
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) jsonError('Email invalide');
if (mb_strlen($subject) > 255) jsonError('Sujet trop long');
if ($message === '') jsonError('Le message est obligatoire');
if (mb_strlen($message) > 5000) jsonError('Message trop long (max 5000 caracteres)');

$pdo = getPDO();

// Verifier que l'utilisateur existe et a le formulaire active
$stmt = $pdo->prepare("
    SELECT u.id, u.slug, ci.form_enabled, ci.form_email
    FROM users u
    LEFT JOIN contact_info ci ON ci.user_id = u.id
    WHERE u.id = ? AND u.is_active = 1
");
$stmt->execute([$userId]);
$user = $stmt->fetch();

if (!$user) jsonError('Destinataire introuvable');
if (!$user['form_enabled']) jsonError('Le formulaire de contact est desactive');

// Rate limiting : 5 messages par IP par heure
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$stmt = $pdo->prepare("
    SELECT COUNT(*) FROM contact_messages
    WHERE sender_ip = ? AND created_at > DATE_SUB(NOW(), INTERVAL 1 HOUR)
");
$stmt->execute([$ip]);
$msgCount = (int) $stmt->fetchColumn();

if ($msgCount >= MAX_CONTACT_PER_IP_HOUR) {
    jsonError('Trop de messages envoyes. Veuillez reessayer plus tard.');
}

// Sauvegarder le message
$stmt = $pdo->prepare("
    INSERT INTO contact_messages (user_id, sender_name, sender_email, sender_phone, subject, message, sender_ip)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");
$stmt->execute([
    $userId,
    $name,
    $email,
    trim($data['phone'] ?? '') ?: null,
    $subject ?: null,
    $message,
    $ip,
]);

// Envoyer notification email (non bloquant)
try {
    require_once __DIR__ . '/../helpers/mailer.php';

    $recipientEmail = $user['form_email'] ?: null;
    if (!$recipientEmail) {
        $stmt = $pdo->prepare("SELECT email FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        $recipientEmail = $stmt->fetchColumn();
    }

    // Recuperer le prenom du proprietaire
    $stmt = $pdo->prepare("SELECT first_name FROM profiles WHERE user_id = ?");
    $stmt->execute([$userId]);
    $ownerName = $stmt->fetchColumn() ?: $user['slug'];

    if ($recipientEmail) {
        sendContactNotification(
            $recipientEmail,
            $ownerName,
            $name,
            $email,
            $subject ?: '(Pas de sujet)',
            $message
        );
    }
} catch (\Throwable $e) {
    // L'echec d'email ne bloque pas la sauvegarde
}

jsonSuccess(null, 'Message envoye avec succes');
