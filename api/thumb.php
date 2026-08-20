<?php
// api/thumb.php — Redimensionne et met en cache les images uploadées
// Usage : /api/thumb.php?src=salanon-richard/file.webp&s=240
declare(strict_types=1);

$s   = min(max((int)($_GET['s'] ?? 240), 32), 800);
$src = $_GET['src'] ?? '';

// Sécurité : interdire les traversées de répertoire
$src = str_replace(['..', "\0", '\\'], '', $src);
$src = ltrim($src, '/');

if (!$src || !preg_match('/\.(webp|jpg|jpeg|png|gif)$/i', $src)) {
    http_response_code(400);
    exit;
}

$uploadDir = dirname(__DIR__) . '/uploads/';
$srcPath   = $uploadDir . $src;

if (!file_exists($srcPath)) {
    http_response_code(404);
    exit;
}

// Répertoire de cache
$cacheDir = $uploadDir . '.cache/';
if (!is_dir($cacheDir)) {
    @mkdir($cacheDir, 0755, true);
}

$cacheFile = $cacheDir . md5($src . $s) . '.webp';

// Servir depuis le cache si valide
if (file_exists($cacheFile) && filemtime($cacheFile) >= filemtime($srcPath)) {
    header('Content-Type: image/webp');
    header('Cache-Control: public, max-age=2592000'); // 30 jours
    header('X-Cache: HIT');
    readfile($cacheFile);
    exit;
}

// GD disponible ?
if (!function_exists('imagecreatefromwebp') && !function_exists('imagecreatefromjpeg')) {
    // Servir l'original si GD non disponible
    $mime = mime_content_type($srcPath) ?: 'image/webp';
    header('Content-Type: ' . $mime);
    header('Cache-Control: public, max-age=604800');
    readfile($srcPath);
    exit;
}

// Charger l'image source
$ext = strtolower(pathinfo($srcPath, PATHINFO_EXTENSION));
$img = match($ext) {
    'webp' => function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($srcPath) : false,
    'jpg', 'jpeg' => @imagecreatefromjpeg($srcPath),
    'png'  => @imagecreatefrompng($srcPath),
    'gif'  => @imagecreatefromgif($srcPath),
    default => false,
};

if (!$img) {
    // Fallback : servir l'original
    $mime = mime_content_type($srcPath) ?: 'image/webp';
    header('Content-Type: ' . $mime);
    header('Cache-Control: public, max-age=604800');
    readfile($srcPath);
    exit;
}

$origW = imagesx($img);
$origH = imagesy($img);

// Calculer les dimensions en conservant le ratio (crop carré centré)
$ratio  = $origW / $origH;
if ($ratio > 1) {
    $srcX = (int)(($origW - $origH) / 2);
    $srcY = 0;
    $srcS = $origH;
} else {
    $srcX = 0;
    $srcY = (int)(($origH - $origW) / 2);
    $srcS = $origW;
}

$thumb = imagecreatetruecolor($s, $s);

// Transparence pour PNG/WebP
imagealphablending($thumb, false);
imagesavealpha($thumb, true);

imagecopyresampled($thumb, $img, 0, 0, $srcX, $srcY, $s, $s, $srcS, $srcS);
imagedestroy($img);

// Sauvegarder en WebP
$quality = 82;
if (function_exists('imagewebp')) {
    imagewebp($thumb, $cacheFile, $quality);
    $contentType = 'image/webp';
} elseif (function_exists('imagejpeg')) {
    $cacheFile = str_replace('.webp', '.jpg', $cacheFile);
    imagejpeg($thumb, $cacheFile, $quality);
    $contentType = 'image/jpeg';
} else {
    imagepng($thumb, $cacheFile);
    $contentType = 'image/png';
}

imagedestroy($thumb);

header('Content-Type: ' . $contentType);
header('Cache-Control: public, max-age=2592000');
header('X-Cache: MISS');
readfile($cacheFile);
