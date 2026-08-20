<?php
// ============================================================
// Nom du fichier : api/projects.php
// Description    : CRUD des projets / realisations
// Methodes       : GET, POST, PUT, DELETE
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

// Recuperer slug user pour les uploads
$stmt = $pdo->prepare("SELECT slug FROM users WHERE id = ?");
$stmt->execute([$userId]);
$userSlug = $stmt->fetchColumn();

try {
    match ($method) {
        'GET'    => handleGet($pdo, $userId),
        'POST'   => handlePost($pdo, $userId, $userSlug),
        'PUT'    => handlePut($pdo, $userId),
        'DELETE' => handleDelete($pdo, $userId),
        default  => jsonError('Methode non autorisee', 405),
    };
} catch (\Exception $e) {
    jsonError($e->getMessage(), (int) ($e->getCode() ?: 500));
}

// ----------------------------------------------------------
// GET
// ----------------------------------------------------------
function handleGet(PDO $pdo, int $userId): void
{
    $status = $_GET['status'] ?? null;
    $allowedStatuses = ['published', 'draft', 'archived'];

    if ($status && in_array($status, $allowedStatuses, true)) {
        $stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? AND status = ? ORDER BY sort_order ASC");
        $stmt->execute([$userId, $status]);
    } else {
        $stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? ORDER BY sort_order ASC");
        $stmt->execute([$userId]);
    }

    $items = $stmt->fetchAll();
    foreach ($items as &$item) {
        $item['technologies'] = json_decode($item['technologies'] ?? '[]', true) ?: [];
        $item['gallery'] = json_decode($item['gallery'] ?? '[]', true) ?: [];
    }

    // Retourner aussi la liste des tags existants pour l'autocompletion
    $stmtTags = $pdo->prepare("SELECT technologies FROM projects WHERE user_id = ? AND technologies IS NOT NULL");
    $stmtTags->execute([$userId]);
    $allTags = [];
    while ($row = $stmtTags->fetch()) {
        $tags = json_decode($row['technologies'], true) ?: [];
        $allTags = array_merge($allTags, $tags);
    }
    $allTags = array_values(array_unique($allTags));
    sort($allTags);

    // Categories existantes
    $stmtCats = $pdo->prepare("SELECT DISTINCT category FROM projects WHERE user_id = ? AND category IS NOT NULL AND category != '' ORDER BY category");
    $stmtCats->execute([$userId]);
    $categories = $stmtCats->fetchAll(PDO::FETCH_COLUMN);

    jsonSuccess([
        'items'      => $items,
        'tags'       => $allTags,
        'categories' => $categories,
    ]);
}

// ----------------------------------------------------------
// POST — Create project or upload gallery image
// ----------------------------------------------------------
function handlePost(PDO $pdo, int $userId, string $userSlug): void
{
    // Upload gallery image
    if (isset($_POST['action']) && $_POST['action'] === 'upload_gallery') {
        handleGalleryUpload($pdo, $userId, $userSlug);
        return;
    }

    requireCsrf();
    $data = getJsonBody();
    $v = validateProject($data);

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order), -1) + 1 FROM projects WHERE user_id = ?");
    $stmt->execute([$userId]);
    $next = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO projects
            (user_id, title, slug, description_short, description_long, category,
             client_name, client_url, link_live, link_github, link_demo,
             technologies, duration, year, status, badge_text, badge_color,
             is_featured, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $userId, $v['title'], $v['slug'], $v['description_short'], $v['description_long'],
        $v['category'], $v['client_name'], $v['client_url'],
        $v['link_live'], $v['link_github'], $v['link_demo'],
        json_encode($v['technologies'], JSON_UNESCAPED_UNICODE),
        $v['duration'], $v['year'], $v['status'],
        $v['badge_text'], $v['badge_color'], $v['is_featured'], $next,
    ]);

    $id = (int) $pdo->lastInsertId();
    jsonSuccess(fetchProject($pdo, $id), 'Projet cree');
}

// ----------------------------------------------------------
// PUT
// ----------------------------------------------------------
function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE projects SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $order => $id) {
            $stmt->execute([$order, (int) $id, $userId]);
        }
        jsonSuccess(null, 'Ordre mis a jour');
    }

    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM projects WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Projet introuvable', 404);

    $v = validateProject($data);

    $stmt = $pdo->prepare("
        UPDATE projects SET
            title = ?, slug = ?, description_short = ?, description_long = ?,
            category = ?, client_name = ?, client_url = ?,
            link_live = ?, link_github = ?, link_demo = ?,
            technologies = ?, duration = ?, year = ?, status = ?,
            badge_text = ?, badge_color = ?, is_featured = ?
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([
        $v['title'], $v['slug'], $v['description_short'], $v['description_long'],
        $v['category'], $v['client_name'], $v['client_url'],
        $v['link_live'], $v['link_github'], $v['link_demo'],
        json_encode($v['technologies'], JSON_UNESCAPED_UNICODE),
        $v['duration'], $v['year'], $v['status'],
        $v['badge_text'], $v['badge_color'], $v['is_featured'],
        $id, $userId,
    ]);

    jsonSuccess(fetchProject($pdo, $id), 'Projet mis a jour');
}

// ----------------------------------------------------------
// DELETE — project or gallery image
// ----------------------------------------------------------
function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    // Delete gallery image
    if (isset($data['gallery_image'])) {
        $projectId = (int) ($data['project_id'] ?? 0);
        $imagePath = $data['gallery_image'];

        $stmt = $pdo->prepare("SELECT gallery FROM projects WHERE id = ? AND user_id = ?");
        $stmt->execute([$projectId, $userId]);
        $project = $stmt->fetch();
        if (!$project) jsonError('Projet introuvable', 404);

        $gallery = json_decode($project['gallery'] ?? '[]', true) ?: [];
        $gallery = array_values(array_filter($gallery, fn($img) => $img !== $imagePath));

        $stmt = $pdo->prepare("UPDATE projects SET gallery = ? WHERE id = ? AND user_id = ?");
        $stmt->execute([json_encode($gallery), $projectId, $userId]);

        deleteUploadedFile($imagePath);
        jsonSuccess(null, 'Image supprimee');
    }

    // Delete project
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    // Supprimer les fichiers associes
    $stmt = $pdo->prepare("SELECT image_url, gallery FROM projects WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    $project = $stmt->fetch();
    if ($project) {
        if ($project['image_url']) deleteUploadedFile($project['image_url']);
        $gallery = json_decode($project['gallery'] ?? '[]', true) ?: [];
        foreach ($gallery as $img) {
            deleteUploadedFile($img);
        }
    }

    $stmt = $pdo->prepare("DELETE FROM projects WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Projet introuvable', 404);

    jsonSuccess(null, 'Projet supprime');
}

// ----------------------------------------------------------
// Gallery upload
// ----------------------------------------------------------
function handleGalleryUpload(PDO $pdo, int $userId, string $userSlug): void
{
    $csrfToken = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? $_POST['csrf_token'] ?? null;
    if (!validateCsrfToken($csrfToken)) jsonError('Token CSRF invalide', 403);

    $projectId = (int) ($_POST['project_id'] ?? 0);
    $type = $_POST['type'] ?? 'project_image'; // project_image or main

    if ($projectId <= 0 && $type !== 'project_image') jsonError('ID projet requis');
    if (!isset($_FILES['file'])) jsonError('Aucun fichier');

    $path = uploadFile($_FILES['file'], 'project_image', $userSlug, $projectId > 0 ? (string) $projectId : null);

    // Si c'est l'image principale
    if ($type === 'main' && $projectId > 0) {
        // Supprimer l'ancienne
        $stmt = $pdo->prepare("SELECT image_url FROM projects WHERE id = ? AND user_id = ?");
        $stmt->execute([$projectId, $userId]);
        $old = $stmt->fetchColumn();
        if ($old) deleteUploadedFile($old);

        $stmt = $pdo->prepare("UPDATE projects SET image_url = ? WHERE id = ? AND user_id = ?");
        $stmt->execute([$path, $projectId, $userId]);
    }

    // Si c'est une image de galerie
    if ($type === 'gallery' && $projectId > 0) {
        $stmt = $pdo->prepare("SELECT gallery FROM projects WHERE id = ? AND user_id = ?");
        $stmt->execute([$projectId, $userId]);
        $project = $stmt->fetch();
        $gallery = json_decode($project['gallery'] ?? '[]', true) ?: [];

        if (count($gallery) >= 10) {
            deleteUploadedFile($path);
            jsonError('Maximum 10 images dans la galerie');
        }

        $gallery[] = $path;
        $stmt = $pdo->prepare("UPDATE projects SET gallery = ? WHERE id = ? AND user_id = ?");
        $stmt->execute([json_encode($gallery), $projectId, $userId]);
    }

    jsonSuccess(['path' => $path, 'url' => '/uploads/' . $path], 'Image uploadee');
}

// ----------------------------------------------------------
// Helpers
// ----------------------------------------------------------
function fetchProject(PDO $pdo, int $id): array
{
    $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch();
    $item['technologies'] = json_decode($item['technologies'] ?? '[]', true) ?: [];
    $item['gallery'] = json_decode($item['gallery'] ?? '[]', true) ?: [];
    return $item;
}

function validateProject(array $data): array
{
    $title = trim($data['title'] ?? '');
    if ($title === '') jsonError('Le titre est obligatoire');
    if (mb_strlen($title) > 255) jsonError('Titre trop long (max 255)');

    $slug = trim($data['slug'] ?? '');
    if ($slug === '') {
        // Voir api/blog.php : les accents etaient supprimes, pas translitteres.
        $slug = generateSlug($title);
    }

    $descShort = trim($data['description_short'] ?? '');
    if (mb_strlen($descShort) > 500) jsonError('Description courte trop longue (max 500)');

    $status = $data['status'] ?? 'draft';
    if (!in_array($status, ['published', 'draft', 'archived'], true)) $status = 'draft';

    $year = $data['year'] ?? null;
    if ($year !== null && $year !== '') {
        $year = (int) $year;
        if ($year < 1990 || $year > 2100) $year = null;
    } else {
        $year = null;
    }

    $techs = $data['technologies'] ?? [];
    if (!is_array($techs)) $techs = [];
    $techs = array_values(array_filter(array_map('trim', $techs), fn($v) => $v !== ''));

    $badgeColor = trim($data['badge_color'] ?? '');
    if ($badgeColor !== '' && !preg_match('/^#[0-9a-fA-F]{6}$/', $badgeColor)) $badgeColor = null;

    return [
        'title'             => $title,
        'slug'              => $slug,
        'description_short' => $descShort,
        'description_long'  => trim($data['description_long'] ?? ''),
        'category'          => trim($data['category'] ?? ''),
        'client_name'       => trim($data['client_name'] ?? ''),
        'client_url'        => trim($data['client_url'] ?? ''),
        'link_live'         => trim($data['link_live'] ?? ''),
        'link_github'       => trim($data['link_github'] ?? ''),
        'link_demo'         => trim($data['link_demo'] ?? ''),
        'technologies'      => $techs,
        'duration'          => trim($data['duration'] ?? ''),
        'year'              => $year,
        'status'            => $status,
        'badge_text'        => trim($data['badge_text'] ?? '') ?: null,
        'badge_color'       => $badgeColor ?: null,
        'is_featured'       => (int)(bool)($data['is_featured'] ?? false),
    ];
}
