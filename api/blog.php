<?php
// ============================================================
// Nom du fichier : api/blog.php
// Description    : CRUD des articles de blog
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

function handleGet(PDO $pdo, int $userId): void
{
    $status = $_GET['status'] ?? null;

    if ($status && in_array($status, ['published', 'draft', 'archived'], true)) {
        $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE user_id = ? AND status = ? ORDER BY sort_order ASC, published_at DESC");
        $stmt->execute([$userId, $status]);
    } else {
        $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE user_id = ? ORDER BY sort_order ASC, published_at DESC");
        $stmt->execute([$userId]);
    }

    $items = $stmt->fetchAll();
    foreach ($items as &$item) {
        $item['tags'] = json_decode($item['tags'] ?? '[]', true) ?: [];
    }

    // Tags et categories existants
    $stmtTags = $pdo->prepare("SELECT tags FROM blog_posts WHERE user_id = ? AND tags IS NOT NULL");
    $stmtTags->execute([$userId]);
    $allTags = [];
    while ($row = $stmtTags->fetch()) {
        $allTags = array_merge($allTags, json_decode($row['tags'], true) ?: []);
    }
    $allTags = array_values(array_unique($allTags));
    sort($allTags);

    $stmtCats = $pdo->prepare("SELECT DISTINCT category FROM blog_posts WHERE user_id = ? AND category IS NOT NULL AND category != '' ORDER BY category");
    $stmtCats->execute([$userId]);
    $categories = $stmtCats->fetchAll(PDO::FETCH_COLUMN);

    jsonSuccess([
        'items'      => $items,
        'tags'       => $allTags,
        'categories' => $categories,
    ]);
}

function handlePost(PDO $pdo, int $userId, string $userSlug): void
{
    // Upload cover image
    if (isset($_POST['action']) && $_POST['action'] === 'upload_cover') {
        $csrfToken = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? $_POST['csrf_token'] ?? null;
        if (!validateCsrfToken($csrfToken)) jsonError('Token CSRF invalide', 403);

        $postId = (int) ($_POST['post_id'] ?? 0);
        if (!isset($_FILES['file'])) jsonError('Aucun fichier');

        $path = uploadFile($_FILES['file'], 'blog_image', $userSlug);

        if ($postId > 0) {
            $stmt = $pdo->prepare("SELECT cover_image FROM blog_posts WHERE id = ? AND user_id = ?");
            $stmt->execute([$postId, $userId]);
            $old = $stmt->fetchColumn();
            if ($old) deleteUploadedFile($old);

            $stmt = $pdo->prepare("UPDATE blog_posts SET cover_image = ? WHERE id = ? AND user_id = ?");
            $stmt->execute([$path, $postId, $userId]);
        }

        jsonSuccess(['path' => $path, 'url' => '/uploads/' . $path], 'Image uploadee');
    }

    requireCsrf();
    $v = validate($pdo, $userId, getJsonBody());

    $stmt = $pdo->prepare("SELECT COALESCE(MAX(sort_order),-1)+1 FROM blog_posts WHERE user_id = ?");
    $stmt->execute([$userId]);
    $next = (int) $stmt->fetchColumn();

    $stmt = $pdo->prepare("
        INSERT INTO blog_posts
            (user_id, title, slug, summary, content, category, tags, reading_time,
             external_url, status, published_at, sort_order)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([
        $userId, $v['title'], $v['slug'], $v['summary'], $v['content'],
        $v['category'], json_encode($v['tags'], JSON_UNESCAPED_UNICODE),
        $v['reading_time'], $v['external_url'], $v['status'], $v['published_at'], $next,
    ]);

    $id = (int) $pdo->lastInsertId();
    jsonSuccess(fetchPost($pdo, $id), 'Article cree');
}

function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();

    if (isset($data['reorder'])) {
        $stmt = $pdo->prepare("UPDATE blog_posts SET sort_order = ? WHERE id = ? AND user_id = ?");
        foreach ($data['reorder'] as $o => $id) $stmt->execute([$o, (int)$id, $userId]);
        jsonSuccess(null, 'Ordre mis a jour');
    }

    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT id FROM blog_posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if (!$stmt->fetch()) jsonError('Article introuvable', 404);

    $v = validate($pdo, $userId, $data, $id);

    $stmt = $pdo->prepare("
        UPDATE blog_posts SET
            title=?, slug=?, summary=?, content=?, category=?, tags=?,
            reading_time=?, external_url=?, status=?, published_at=?
        WHERE id=? AND user_id=?
    ");
    $stmt->execute([
        $v['title'], $v['slug'], $v['summary'], $v['content'],
        $v['category'], json_encode($v['tags'], JSON_UNESCAPED_UNICODE),
        $v['reading_time'], $v['external_url'], $v['status'], $v['published_at'],
        $id, $userId,
    ]);

    jsonSuccess(fetchPost($pdo, $id), 'Article mis a jour');
}

function handleDelete(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data = getJsonBody();
    $id = (int) ($_GET['id'] ?? $data['id'] ?? 0);
    if ($id <= 0) jsonError('ID requis');

    $stmt = $pdo->prepare("SELECT cover_image FROM blog_posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    $post = $stmt->fetch();
    if ($post && $post['cover_image']) deleteUploadedFile($post['cover_image']);

    $stmt = $pdo->prepare("DELETE FROM blog_posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$id, $userId]);
    if ($stmt->rowCount() === 0) jsonError('Article introuvable', 404);

    jsonSuccess(null, 'Article supprime');
}

function fetchPost(PDO $pdo, int $id): array
{
    $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = ?");
    $stmt->execute([$id]);
    $item = $stmt->fetch();
    $item['tags'] = json_decode($item['tags'] ?? '[]', true) ?: [];
    return $item;
}

function validate(PDO $pdo, int $userId, array $d, ?int $editId = null): array
{
    $title = trim($d['title'] ?? '');
    if ($title === '') jsonError('Le titre est obligatoire');
    if (mb_strlen($title) > 255) jsonError('Titre trop long (max 255)');

    $slug = trim($d['slug'] ?? '');
    if ($slug === '') {
        // Corrige le 20/08/2026 : la regex byte-wise detruisait les accents
        // ("coute" -> "cote"). generateSlug() (helpers/functions.php, deja inclus)
        // translitere correctement et reste alignee sur autoSlug() du dashboard.
        $slug = generateSlug($title);
    }

    // Verifier unicite du slug pour cet user
    $stmt = $pdo->prepare("SELECT id FROM blog_posts WHERE user_id = ? AND slug = ? AND id != ?");
    $stmt->execute([$userId, $slug, $editId ?? 0]);
    if ($stmt->fetch()) {
        $slug .= '-' . time();
    }

    $summary = trim($d['summary'] ?? '');
    if (mb_strlen($summary) > 500) jsonError('Resume trop long (max 500)');

    $content = trim($d['content'] ?? '');

    // Temps de lecture auto (250 mots/minute)
    $readingTime = $d['reading_time'] ?? null;
    if ($readingTime === null || $readingTime === '') {
        $wordCount = str_word_count(strip_tags($content));
        $readingTime = max(1, (int) ceil($wordCount / 250));
    } else {
        $readingTime = max(1, (int) $readingTime);
    }

    $status = $d['status'] ?? 'draft';
    if (!in_array($status, ['draft', 'published', 'archived'], true)) $status = 'draft';

    $publishedAt = trim($d['published_at'] ?? '');
    if ($status === 'published' && $publishedAt === '') {
        $publishedAt = date('Y-m-d H:i:s');
    }
    if ($publishedAt === '') $publishedAt = null;

    $tags = $d['tags'] ?? [];
    if (!is_array($tags)) $tags = [];
    $tags = array_values(array_filter(array_map('trim', $tags), fn($v) => $v !== ''));

    return [
        'title'        => $title,
        'slug'         => $slug,
        'summary'      => $summary,
        'content'      => $content,
        'category'     => trim($d['category'] ?? '') ?: null,
        'tags'         => $tags,
        'reading_time' => $readingTime,
        'external_url' => trim($d['external_url'] ?? '') ?: null,
        'status'       => $status,
        'published_at' => $publishedAt,
    ];
}
