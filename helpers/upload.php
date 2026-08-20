<?php
// ============================================================
// Nom du fichier : helpers/upload.php
// Description    : Upload securise de fichiers avec validation et resize
// Auth requise   : Non (utilitaire interne)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/constants.php';

/**
 * Configuration par type d'upload.
 * [max_size, width, height, mimes, extensions, format_output]
 */
function getUploadConfig(string $type): array
{
    $configs = [
        'avatar' => [
            'max_size'   => UPLOAD_MAX_IMAGE,
            'width'      => 400,
            'height'     => 400,
            'mimes'      => ['image/jpeg', 'image/png', 'image/webp'],
            'extensions' => ['jpg', 'jpeg', 'png', 'webp'],
            'output'     => 'webp',
            'subdir'     => '',
        ],
        'cover' => [
            'max_size'   => UPLOAD_MAX_SIZE,
            'width'      => 1920,
            'height'     => 600,
            'mimes'      => ['image/jpeg', 'image/png', 'image/webp'],
            'extensions' => ['jpg', 'jpeg', 'png', 'webp'],
            'output'     => 'webp',
            'subdir'     => '',
        ],
        'og_image' => [
            'max_size'   => UPLOAD_MAX_IMAGE,
            'width'      => 1200,
            'height'     => 630,
            'mimes'      => ['image/jpeg', 'image/png', 'image/webp'],
            'extensions' => ['jpg', 'jpeg', 'png', 'webp'],
            'output'     => 'webp',
            'subdir'     => '',
        ],
        'cv' => [
            'max_size'   => UPLOAD_MAX_CV,
            'width'      => 0,
            'height'     => 0,
            'mimes'      => ['application/pdf'],
            'extensions' => ['pdf'],
            'output'     => 'pdf',
            'subdir'     => '',
        ],
        'project_image' => [
            'max_size'   => UPLOAD_MAX_IMAGE,
            'width'      => 1200,
            'height'     => 800,
            'mimes'      => ['image/jpeg', 'image/png', 'image/webp'],
            'extensions' => ['jpg', 'jpeg', 'png', 'webp'],
            'output'     => 'webp',
            'subdir'     => 'projects',
        ],
        'blog_image' => [
            'max_size'   => UPLOAD_MAX_SIZE,
            'width'      => 1200,
            'height'     => 630,
            'mimes'      => ['image/jpeg', 'image/png', 'image/webp'],
            'extensions' => ['jpg', 'jpeg', 'png', 'webp'],
            'output'     => 'webp',
            'subdir'     => 'blog',
        ],
        'misc' => [
            'max_size'   => UPLOAD_MAX_IMAGE,
            'width'      => 500,
            'height'     => 500,
            'mimes'      => ['image/jpeg', 'image/png', 'image/webp'],
            'extensions' => ['jpg', 'jpeg', 'png', 'webp'],
            'output'     => 'webp',
            'subdir'     => 'misc',
        ],
    ];

    if (!isset($configs[$type])) {
        throw new InvalidArgumentException("Type d'upload inconnu : {$type}");
    }

    return $configs[$type];
}

/**
 * Upload un fichier avec validation, resize et compression.
 *
 * @param array<string, mixed> $file  Element de $_FILES (ex: $_FILES['avatar']).
 * @param string               $type  Type d'upload (avatar, cover, cv, etc.).
 * @param string               $slug  Slug de l'utilisateur (pour le dossier).
 * @param string|null          $subId Sous-dossier optionnel (ex: ID de projet).
 * @return string Chemin relatif du fichier sauvegarde (depuis uploads/).
 * @throws RuntimeException En cas d'erreur de validation ou d'upload.
 */
function uploadFile(array $file, string $type, string $slug, ?string $subId = null): string
{
    $config = getUploadConfig($type);

    // Verifier les erreurs PHP d'upload
    if ($file['error'] !== UPLOAD_ERR_OK) {
        throw new RuntimeException(getUploadErrorMessage($file['error']));
    }

    // Verifier la taille
    if ($file['size'] > $config['max_size']) {
        $maxMb = round($config['max_size'] / 1048576, 1);
        throw new RuntimeException("Le fichier depasse la taille maximale de {$maxMb} MB");
    }

    // Verifier le MIME type reel
    $mimeType = mime_content_type($file['tmp_name']);
    if (!in_array($mimeType, $config['mimes'], true)) {
        $allowed = implode(', ', $config['extensions']);
        throw new RuntimeException("Type de fichier non autorise. Formats acceptes : {$allowed}");
    }

    // Verifier l'extension
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($extension, $config['extensions'], true)) {
        throw new RuntimeException("Extension de fichier non autorisee : .{$extension}");
    }

    // Construire le chemin de destination
    $dirParts = [$slug];
    if (!empty($config['subdir'])) {
        $dirParts[] = $config['subdir'];
    }
    if ($subId !== null) {
        $dirParts[] = $subId;
    }

    $uploadDir = UPLOAD_DIR . '/' . implode('/', $dirParts);

    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
        throw new RuntimeException("Impossible de creer le dossier d'upload");
    }

    // Generer un nom unique
    $newFilename = uniqid('', true) . '_' . time() . '.' . $config['output'];
    $destPath = $uploadDir . '/' . $newFilename;

    // PDF : simple deplacement
    if ($config['output'] === 'pdf') {
        if (!move_uploaded_file($file['tmp_name'], $destPath)) {
            throw new RuntimeException("Echec du deplacement du fichier");
        }

        return implode('/', $dirParts) . '/' . $newFilename;
    }

    // Image : resize + conversion WebP
    $resized = resizeAndConvert(
        $file['tmp_name'],
        $mimeType,
        $destPath,
        $config['width'],
        $config['height']
    );

    if (!$resized) {
        throw new RuntimeException("Echec du traitement de l'image");
    }

    return implode('/', $dirParts) . '/' . $newFilename;
}

/**
 * Redimensionne et convertit une image en WebP.
 */
function resizeAndConvert(
    string $sourcePath,
    string $mimeType,
    string $destPath,
    int $maxWidth,
    int $maxHeight
): bool {
    $source = match ($mimeType) {
        'image/jpeg' => imagecreatefromjpeg($sourcePath),
        'image/png'  => imagecreatefrompng($sourcePath),
        'image/webp' => imagecreatefromwebp($sourcePath),
        default      => false,
    };

    if ($source === false) {
        return false;
    }

    $origWidth = imagesx($source);
    $origHeight = imagesy($source);

    // Calculer les nouvelles dimensions en preservant le ratio
    $ratio = min($maxWidth / $origWidth, $maxHeight / $origHeight);

    if ($ratio >= 1) {
        // L'image est plus petite que les dimensions cibles, pas de resize
        $newWidth = $origWidth;
        $newHeight = $origHeight;
    } else {
        $newWidth = (int) round($origWidth * $ratio);
        $newHeight = (int) round($origHeight * $ratio);
    }

    // Creer l'image redimensionnee
    $resized = imagecreatetruecolor($newWidth, $newHeight);

    // Preserver la transparence pour PNG
    imagealphablending($resized, false);
    imagesavealpha($resized, true);

    imagecopyresampled($resized, $source, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

    // Sauvegarder en WebP (qualite 85)
    $result = imagewebp($resized, $destPath, 85);

    imagedestroy($source);
    imagedestroy($resized);

    return $result;
}

/**
 * Supprime un fichier uploade.
 *
 * @param string $relativePath Chemin relatif depuis uploads/ (ex: "slug/avatar.webp").
 */
function deleteUploadedFile(string $relativePath): void
{
    $fullPath = UPLOAD_DIR . '/' . $relativePath;

    if (file_exists($fullPath) && is_file($fullPath)) {
        unlink($fullPath);
    }
}

/**
 * Retourne un message lisible pour les erreurs d'upload PHP.
 */
function getUploadErrorMessage(int $errorCode): string
{
    return match ($errorCode) {
        UPLOAD_ERR_INI_SIZE   => 'Le fichier depasse la taille maximale autorisee par le serveur',
        UPLOAD_ERR_FORM_SIZE  => 'Le fichier depasse la taille maximale du formulaire',
        UPLOAD_ERR_PARTIAL    => 'Le fichier n\'a ete que partiellement telecharge',
        UPLOAD_ERR_NO_FILE    => 'Aucun fichier n\'a ete envoye',
        UPLOAD_ERR_NO_TMP_DIR => 'Dossier temporaire manquant sur le serveur',
        UPLOAD_ERR_CANT_WRITE => 'Echec d\'ecriture du fichier sur le disque',
        UPLOAD_ERR_EXTENSION  => 'Upload bloque par une extension PHP',
        default               => 'Erreur inconnue lors de l\'upload',
    };
}
