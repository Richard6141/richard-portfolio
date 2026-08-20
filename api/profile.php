<?php
// ============================================================
// Nom du fichier : api/profile.php
// Description    : CRUD du profil utilisateur
// Methodes       : GET, PUT
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

header('Content-Type: application/json');

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

requireAuth();

$pdo    = getPDO();
$userId = getCurrentUserId();
$method = getHttpMethod();

try {
    match ($method) {
        'GET' => handleGet($pdo, $userId),
        'PUT' => handlePut($pdo, $userId),
        default => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

// ----------------------------------------------------------
// GET — Recuperer le profil complet
// ----------------------------------------------------------
function handleGet(PDO $pdo, int $userId): void
{
    // Profil
    $stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
    $stmt->execute([$userId]);
    $profile = $stmt->fetch();

    // Hero
    $stmt = $pdo->prepare("SELECT * FROM hero_sections WHERE user_id = ?");
    $stmt->execute([$userId]);
    $hero = $stmt->fetch();

    // About
    $stmt = $pdo->prepare("SELECT * FROM about_sections WHERE user_id = ?");
    $stmt->execute([$userId]);
    $about = $stmt->fetch();

    // User slug
    $stmt = $pdo->prepare("SELECT slug, email FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch();

    jsonSuccess([
        'profile' => $profile,
        'hero'    => $hero,
        'about'   => $about,
        'slug'    => $user['slug'],
        'email'   => $user['email'],
    ]);
}

// ----------------------------------------------------------
// PUT — Mettre a jour le profil
// ----------------------------------------------------------
function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();

    $data = getJsonBody();
    $section = $data['section'] ?? '';

    match ($section) {
        'identity' => updateIdentity($pdo, $userId, $data),
        'bio'      => updateBio($pdo, $userId, $data),
        'stats'    => updateStats($pdo, $userId, $data),
        default    => jsonError('Section inconnue : ' . $section),
    };
}

// ----------------------------------------------------------
// Update : Identite
// ----------------------------------------------------------
function updateIdentity(PDO $pdo, int $userId, array $data): void
{
    $firstName    = trim($data['first_name'] ?? '');
    $lastName     = trim($data['last_name'] ?? '');
    $profession   = trim($data['profession'] ?? '');
    $tagline      = trim($data['tagline'] ?? '');
    $locationCity  = trim($data['location_city'] ?? '');
    $locationCountry = trim($data['location_country'] ?? '');
    $isAvailable    = (bool) ($data['is_available'] ?? false);
    $availabilityText = trim($data['availability_text'] ?? '');

    // Validations
    if ($firstName === '') {
        jsonError('Le prenom est obligatoire');
    }
    if (mb_strlen($firstName) > 100) {
        jsonError('Le prenom ne doit pas depasser 100 caracteres');
    }
    if (mb_strlen($lastName) > 100) {
        jsonError('Le nom ne doit pas depasser 100 caracteres');
    }
    if (mb_strlen($profession) > 255) {
        jsonError('La profession ne doit pas depasser 255 caracteres');
    }
    if (mb_strlen($tagline) > 255) {
        jsonError('L\'accroche ne doit pas depasser 255 caracteres');
    }

    $stmt = $pdo->prepare("
        UPDATE profiles SET
            first_name = ?,
            last_name = ?,
            profession = ?,
            tagline = ?,
            location_city = ?,
            location_country = ?,
            is_available = ?,
            availability_text = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        $firstName,
        $lastName,
        $profession,
        $tagline,
        $locationCity,
        $locationCountry,
        $isAvailable ? 1 : 0,
        $availabilityText,
        $userId,
    ]);

    jsonSuccess(null, 'Identite mise a jour avec succes');
}

// ----------------------------------------------------------
// Update : Bio
// ----------------------------------------------------------
function updateBio(PDO $pdo, int $userId, array $data): void
{
    $bioShort = trim($data['bio_short'] ?? '');
    $bioLong  = trim($data['bio_long'] ?? '');

    if (mb_strlen($bioShort) > 500) {
        jsonError('La bio courte ne doit pas depasser 500 caracteres');
    }

    // Bio courte dans profiles
    $stmt = $pdo->prepare("UPDATE profiles SET bio_short = ? WHERE user_id = ?");
    $stmt->execute([$bioShort, $userId]);

    // Bio longue dans profiles ET about_sections
    $stmt = $pdo->prepare("UPDATE profiles SET bio_long = ? WHERE user_id = ?");
    $stmt->execute([$bioLong, $userId]);

    $stmt = $pdo->prepare("UPDATE about_sections SET content = ? WHERE user_id = ?");
    $stmt->execute([$bioLong, $userId]);

    jsonSuccess(null, 'Bio mise a jour avec succes');
}

// ----------------------------------------------------------
// Update : Stats
// ----------------------------------------------------------
function updateStats(PDO $pdo, int $userId, array $data): void
{
    $fields = [];
    $params = [];

    for ($i = 1; $i <= 4; $i++) {
        $val   = trim($data["stat_{$i}_value"] ?? '');
        $label = trim($data["stat_{$i}_label"] ?? '');

        if (mb_strlen($val) > 50) {
            jsonError("La valeur de la statistique {$i} est trop longue (max 50)");
        }
        if (mb_strlen($label) > 100) {
            jsonError("Le label de la statistique {$i} est trop long (max 100)");
        }

        $fields[] = "stat_{$i}_value = ?";
        $fields[] = "stat_{$i}_label = ?";
        $params[] = $val;
        $params[] = $label;
    }

    $params[] = $userId;

    $stmt = $pdo->prepare("UPDATE profiles SET " . implode(', ', $fields) . " WHERE user_id = ?");
    $stmt->execute($params);

    jsonSuccess(null, 'Statistiques mises a jour avec succes');
}
