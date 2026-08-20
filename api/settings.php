<?php
// ============================================================
// Nom du fichier : api/settings.php
// Description    : Parametres du compte et du portfolio
// Methodes       : PUT, POST, DELETE
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';
require_once __DIR__ . '/../helpers/upload.php';

requireAuth();

$pdo    = getPDO();
$userId = getCurrentUserId();
$method = getHttpMethod();

try {
    match ($method) {
        'PUT'    => handlePut($pdo, $userId),
        'POST'   => handlePost($pdo, $userId),
        'DELETE' => handleDelete($pdo, $userId),
        default  => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

// ----------------------------------------------------------
// PUT — Updates
// ----------------------------------------------------------
function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $action = $data['action'] ?? '';

    match ($action) {
        'email'      => updateEmail($pdo, $userId, $data),
        'password'   => updatePassword($pdo, $userId, $data),
        'slug'       => updateSlug($pdo, $userId, $data),
        'visibility' => updateVisibility($pdo, $userId, $data),
        'privacy'    => updatePrivacy($pdo, $userId, $data),
        default      => jsonError('Action invalide'),
    };
}

// ----------------------------------------------------------
// POST — Reset content
// ----------------------------------------------------------
function handlePost(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (($data['action'] ?? '') !== 'reset_content') {
        jsonError('Action invalide');
    }

    $confirm = trim($data['confirm'] ?? '');
    if ($confirm !== 'REINITIALISER') {
        jsonError('Veuillez saisir REINITIALISER pour confirmer');
    }

    // Supprimer tout le contenu mais garder le compte + profil de base
    $tables = [
        'experiences', 'education', 'skills', 'skill_categories',
        'services', 'projects', 'testimonials', 'certifications',
        'languages', 'awards', 'blog_posts', 'social_links', 'contact_messages',
    ];

    foreach ($tables as $table) {
        $stmt = $pdo->prepare("DELETE FROM {$table} WHERE user_id = ?");
        $stmt->execute([$userId]);
    }

    // Reset hero + about
    $pdo->prepare("UPDATE hero_sections SET title_animated = NULL, cta_primary_text = NULL, cta_primary_url = NULL, cta_secondary_text = NULL, cta_secondary_url = NULL WHERE user_id = ?")->execute([$userId]);
    $pdo->prepare("UPDATE about_sections SET content = NULL, values_list = NULL WHERE user_id = ?")->execute([$userId]);

    // Reset profil (garder nom et email)
    $pdo->prepare("UPDATE profiles SET bio_short = NULL, bio_long = NULL, profession = NULL, tagline = NULL, stat_1_value = NULL, stat_1_label = NULL, stat_2_value = NULL, stat_2_label = NULL, stat_3_value = NULL, stat_3_label = NULL, stat_4_value = NULL, stat_4_label = NULL WHERE user_id = ?")->execute([$userId]);

    // Reset contact info
    $pdo->prepare("UPDATE contact_info SET email_public = NULL, phone = NULL, whatsapp = NULL, address = NULL, city = NULL, country = NULL, google_maps_url = NULL, calendly_url = NULL, availability_hours = NULL, response_time = NULL WHERE user_id = ?")->execute([$userId]);

    // Supprimer fichiers uploads
    $stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $slug = $stmt->fetchColumn();
    $uploadDir = UPLOAD_DIR . '/' . $slug;
    if (is_dir($uploadDir)) {
        deleteDirectory($uploadDir);
        mkdir($uploadDir, 0755, true);
    }

    // Reset avatar/cover/cv
    $pdo->prepare("UPDATE profiles SET avatar_url = NULL, cover_url = NULL, cv_url = NULL, og_image_url = NULL WHERE user_id = ?")->execute([$userId]);

    jsonSuccess(null, 'Contenu reinitialise avec succes');
}

// ----------------------------------------------------------
// DELETE — Supprimer le compte
// ----------------------------------------------------------
function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    $confirm = trim($data['confirm'] ?? '');
    if ($confirm !== 'SUPPRIMER') {
        jsonError('Veuillez saisir SUPPRIMER pour confirmer');
    }

    // Supprimer les fichiers uploads
    $stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $slug = $stmt->fetchColumn();
    $uploadDir = UPLOAD_DIR . '/' . $slug;
    if (is_dir($uploadDir)) {
        deleteDirectory($uploadDir);
    }

    // Supprimer l'utilisateur (CASCADE supprime tout le reste)
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$userId]);

    // Detruire la session
    destroySession();
    initSession();

    jsonSuccess(null, 'Compte supprime');
}

// ----------------------------------------------------------
// Update Email
// ----------------------------------------------------------
function updateEmail(PDO $pdo, int $userId, array $data): void
{
    $newEmail = trim(strtolower($data['email'] ?? ''));
    $password = $data['current_password'] ?? '';

    if (!isValidEmail($newEmail)) jsonError('Email invalide');
    if ($password === '') jsonError('Le mot de passe actuel est requis');

    // Verifier mot de passe actuel
    $stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $hash = $stmt->fetchColumn();

    if (!password_verify($password, $hash)) {
        jsonError('Mot de passe actuel incorrect');
    }

    // Verifier unicite
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
    $stmt->execute([$newEmail, $userId]);
    if ($stmt->fetch()) jsonError('Cet email est deja utilise');

    $stmt = $pdo->prepare("UPDATE users SET email = ? WHERE id = ?");
    $stmt->execute([$newEmail, $userId]);

    jsonSuccess(null, 'Email mis a jour');
}

// ----------------------------------------------------------
// Update Password
// ----------------------------------------------------------
function updatePassword(PDO $pdo, int $userId, array $data): void
{
    $current = $data['current_password'] ?? '';
    $newPass = $data['new_password'] ?? '';
    $confirm = $data['confirm_password'] ?? '';

    if ($current === '') jsonError('Le mot de passe actuel est requis');
    if (mb_strlen($newPass) < 8) jsonError('Le nouveau mot de passe doit contenir au moins 8 caracteres');
    if ($newPass !== $confirm) jsonError('Les mots de passe ne correspondent pas');

    $stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $hash = $stmt->fetchColumn();

    if (!password_verify($current, $hash)) {
        jsonError('Mot de passe actuel incorrect');
    }

    $newHash = password_hash($newPass, PASSWORD_BCRYPT, ['cost' => 12]);
    $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
    $stmt->execute([$newHash, $userId]);

    jsonSuccess(null, 'Mot de passe mis a jour');
}

// ----------------------------------------------------------
// Update Slug
// ----------------------------------------------------------
function updateSlug(PDO $pdo, int $userId, array $data): void
{
    $newSlug = trim(strtolower($data['slug'] ?? ''));

    if (!validateSlugFormat($newSlug)) {
        jsonError('Format invalide : 3 a 30 caracteres, lettres minuscules, chiffres et tirets');
    }
    if (isReservedSlug($newSlug)) {
        jsonError('Ce sous-domaine est reserve');
    }

    $stmt = $pdo->prepare("SELECT id FROM users WHERE slug = ? AND id != ?");
    $stmt->execute([$newSlug, $userId]);
    if ($stmt->fetch()) jsonError('Ce sous-domaine est deja pris');

    // Renommer le dossier uploads
    $stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $oldSlug = $stmt->fetchColumn();

    $oldDir = UPLOAD_DIR . '/' . $oldSlug;
    $newDir = UPLOAD_DIR . '/' . $newSlug;
    if (is_dir($oldDir) && $oldSlug !== $newSlug) {
        rename($oldDir, $newDir);
    }

    $stmt = $pdo->prepare("UPDATE users SET slug = ? WHERE id = ?");
    $stmt->execute([$newSlug, $userId]);

    jsonSuccess(['slug' => $newSlug], 'Sous-domaine mis a jour');
}

// ----------------------------------------------------------
// Update Visibility / Maintenance
// ----------------------------------------------------------
function updateVisibility(PDO $pdo, int $userId, array $data): void
{
    $isPublished = (int)(bool)($data['is_published'] ?? true);
    $isMaintenance = (int)(bool)($data['is_maintenance'] ?? false);
    $maintenanceMsg = trim($data['maintenance_message'] ?? '');

    if (mb_strlen($maintenanceMsg) > 500) jsonError('Message trop long (max 500)');

    $stmt = $pdo->prepare("UPDATE profiles SET is_published = ?, is_maintenance = ?, maintenance_message = ? WHERE user_id = ?");
    $stmt->execute([$isPublished, $isMaintenance, $maintenanceMsg ?: null, $userId]);

    jsonSuccess(null, 'Parametres mis a jour');
}

// ----------------------------------------------------------
// Update Privacy
// ----------------------------------------------------------
function updatePrivacy(PDO $pdo, int $userId, array $data): void
{
    $robots = ($data['robots'] ?? 'index') === 'noindex' ? 'noindex' : 'index';

    $stmt = $pdo->prepare("UPDATE seo_config SET robots = ? WHERE user_id = ?");
    $stmt->execute([$robots, $userId]);

    jsonSuccess(null, 'Confidentialite mise a jour');
}

// ----------------------------------------------------------
// Helper : suppression recursive d'un dossier
// ----------------------------------------------------------
function deleteDirectory(string $dir): void
{
    if (!is_dir($dir)) return;
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            deleteDirectory($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}
