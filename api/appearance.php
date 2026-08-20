<?php
// ============================================================
// Nom du fichier : api/appearance.php
// Description    : CRUD apparence du portfolio
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
// GET
// ----------------------------------------------------------
function handleGet(PDO $pdo, int $userId): void
{
    // Profiles (couleurs de base, fonts, layout)
    $stmt = $pdo->prepare("
        SELECT color_primary, color_secondary, color_accent,
               font_heading, font_body, layout_style, dark_mode, corner_style
        FROM profiles WHERE user_id = ?
    ");
    $stmt->execute([$userId]);
    $profile = $stmt->fetch();

    // Appearance config (tout le reste)
    $stmt = $pdo->prepare("SELECT * FROM appearance_config WHERE user_id = ?");
    $stmt->execute([$userId]);
    $appearance = $stmt->fetch();

    // Supprimer les colonnes techniques
    if ($appearance) {
        unset($appearance['id'], $appearance['user_id'], $appearance['created_at'], $appearance['updated_at']);
    }

    jsonSuccess([
        'profile'    => $profile,
        'appearance' => $appearance,
    ]);
}

// ----------------------------------------------------------
// PUT
// ----------------------------------------------------------
function handlePut(PDO $pdo, int $userId): void
{
    requireCsrf();
    $data    = getJsonBody();
    $section = $data['section'] ?? '';

    match ($section) {
        'colors'     => updateColors($pdo, $userId, $data),
        'theme'      => applyTheme($pdo, $userId, $data),
        'typography' => updateTypography($pdo, $userId, $data),
        'layout'     => updateLayout($pdo, $userId, $data),
        'header'     => updateHeader($pdo, $userId, $data),
        'footer'     => updateFooter($pdo, $userId, $data),
        'animations' => updateAnimations($pdo, $userId, $data),
        'template'   => updateTemplate($pdo, $userId, $data),
        default      => jsonError('Section inconnue'),
    };
}

// ----------------------------------------------------------
// Helpers
// ----------------------------------------------------------

function isValidHex(string $color): bool
{
    return (bool) preg_match('/^#[0-9a-fA-F]{6}$/', $color);
}

function requireHex(string $color, string $label): void
{
    if (!isValidHex($color)) {
        jsonError("{$label} : couleur hexadecimale invalide ({$color})");
    }
}

function requireEnum(string $value, array $allowed, string $label): void
{
    if (!in_array($value, $allowed, true)) {
        jsonError("{$label} : valeur invalide ({$value})");
    }
}

// ----------------------------------------------------------
// Update : Couleurs
// ----------------------------------------------------------
function updateColors(PDO $pdo, int $userId, array $data): void
{
    $primary   = $data['color_primary'] ?? '#2563eb';
    $secondary = $data['color_secondary'] ?? '#1e40af';
    $accent    = $data['color_accent'] ?? '#f59e0b';

    requireHex($primary, 'Couleur principale');
    requireHex($secondary, 'Couleur secondaire');
    requireHex($accent, 'Couleur d\'accent');

    // Profiles
    $stmt = $pdo->prepare("
        UPDATE profiles SET color_primary = ?, color_secondary = ?, color_accent = ?
        WHERE user_id = ?
    ");
    $stmt->execute([$primary, $secondary, $accent, $userId]);

    // Appearance config
    $bgColor     = $data['bg_color'] ?? '#ffffff';
    $textColor   = $data['text_color'] ?? '#1f2937';
    $headerBg    = $data['header_bg'] ?? '#ffffff';
    $footerBg    = $data['footer_bg'] ?? '#111827';
    $cardBg      = $data['card_bg'] ?? '#ffffff';
    $borderColor = $data['border_color'] ?? '#e5e7eb';

    requireHex($bgColor, 'Couleur de fond');
    requireHex($textColor, 'Couleur du texte');
    requireHex($headerBg, 'Couleur du header');
    requireHex($footerBg, 'Couleur du footer');
    requireHex($cardBg, 'Couleur des cards');
    requireHex($borderColor, 'Couleur des bordures');

    $stmt = $pdo->prepare("
        UPDATE appearance_config SET
            bg_color = ?, text_color = ?, header_bg = ?,
            footer_bg = ?, card_bg = ?, border_color = ?
        WHERE user_id = ?
    ");
    $stmt->execute([$bgColor, $textColor, $headerBg, $footerBg, $cardBg, $borderColor, $userId]);

    jsonSuccess(null, 'Couleurs mises a jour');
}

// ----------------------------------------------------------
// Apply : Theme prédéfini
// ----------------------------------------------------------
function applyTheme(PDO $pdo, int $userId, array $data): void
{
    $themes = getThemes();
    $themeId = $data['theme_id'] ?? '';

    if (!isset($themes[$themeId])) {
        jsonError('Theme inconnu');
    }

    $t = $themes[$themeId];

    $stmt = $pdo->prepare("
        UPDATE profiles SET
            color_primary = ?, color_secondary = ?, color_accent = ?, dark_mode = ?
        WHERE user_id = ?
    ");
    $stmt->execute([$t['primary'], $t['secondary'], $t['accent'], $t['dark_mode'], $userId]);

    $stmt = $pdo->prepare("
        UPDATE appearance_config SET
            bg_color = ?, text_color = ?, header_bg = ?,
            footer_bg = ?, card_bg = ?, border_color = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        $t['bg'], $t['text'], $t['header_bg'],
        $t['footer_bg'], $t['card_bg'], $t['border'],
        $userId,
    ]);

    jsonSuccess($t, 'Theme applique');
}

// ----------------------------------------------------------
// Update : Typographie
// ----------------------------------------------------------
function updateTypography(PDO $pdo, int $userId, array $data): void
{
    $fontHeading = trim($data['font_heading'] ?? 'Inter');
    $fontBody    = trim($data['font_body'] ?? 'Inter');
    $fontSize    = $data['font_size'] ?? 'md';
    $letterSpacing = $data['letter_spacing'] ?? 'normal';

    $allowedFonts = [
        'Inter','Poppins','Raleway','Montserrat','Playfair Display','Lora',
        'Roboto','Open Sans','Nunito','Josefin Sans','Space Grotesk',
        'DM Sans','Outfit','Sora','Manrope','Plus Jakarta Sans',
        'Merriweather','Source Serif 4','Bitter','Crimson Text',
    ];

    if (!in_array($fontHeading, $allowedFonts, true)) {
        jsonError('Police de titres non autorisee');
    }
    if (!in_array($fontBody, $allowedFonts, true)) {
        jsonError('Police de corps non autorisee');
    }

    requireEnum($fontSize, ['sm','md','lg','xl'], 'Taille de police');
    requireEnum($letterSpacing, ['tight','normal','wide'], 'Espacement');

    $stmt = $pdo->prepare("
        UPDATE profiles SET font_heading = ?, font_body = ? WHERE user_id = ?
    ");
    $stmt->execute([$fontHeading, $fontBody, $userId]);

    $stmt = $pdo->prepare("
        UPDATE appearance_config SET font_size = ?, letter_spacing = ? WHERE user_id = ?
    ");
    $stmt->execute([$fontSize, $letterSpacing, $userId]);

    jsonSuccess(null, 'Typographie mise a jour');
}

// ----------------------------------------------------------
// Update : Layout
// ----------------------------------------------------------
function updateLayout(PDO $pdo, int $userId, array $data): void
{
    $layoutStyle    = $data['layout_style'] ?? 'minimal';
    $darkMode       = $data['dark_mode'] ?? 'light';
    $cornerStyle    = $data['corner_style'] ?? 'medium';
    $sectionSpacing = $data['section_spacing'] ?? 'normal';
    $contentWidth   = $data['content_width'] ?? 'normal';

    requireEnum($layoutStyle, ['minimal','creative','corporate','bold','elegant'], 'Style global');
    requireEnum($darkMode, ['light','dark','auto'], 'Mode');
    requireEnum($cornerStyle, ['none','small','medium','large','round'], 'Coins');
    requireEnum($sectionSpacing, ['compact','normal','large'], 'Espacement');
    requireEnum($contentWidth, ['narrow','normal','wide','full'], 'Largeur');

    $stmt = $pdo->prepare("
        UPDATE profiles SET layout_style = ?, dark_mode = ?, corner_style = ? WHERE user_id = ?
    ");
    $stmt->execute([$layoutStyle, $darkMode, $cornerStyle, $userId]);

    $stmt = $pdo->prepare("
        UPDATE appearance_config SET section_spacing = ?, content_width = ? WHERE user_id = ?
    ");
    $stmt->execute([$sectionSpacing, $contentWidth, $userId]);

    jsonSuccess(null, 'Layout mis a jour');
}

// ----------------------------------------------------------
// Update : Header
// ----------------------------------------------------------
function updateHeader(PDO $pdo, int $userId, array $data): void
{
    requireEnum($data['header_style'] ?? 'fixed', ['fixed','transparent','sidebar','hidden'], 'Style header');
    requireEnum($data['header_bg_style'] ?? 'solid', ['solid','transparent','glass'], 'Fond header');
    requireEnum($data['header_logo_position'] ?? 'left', ['left','center'], 'Position logo');
    requireEnum($data['header_text_color'] ?? 'auto', ['light','dark','auto'], 'Couleur texte');

    $ctaText = trim($data['header_cta_text'] ?? 'Me contacter');
    $ctaUrl  = trim($data['header_cta_url'] ?? '#contact');

    if (mb_strlen($ctaText) > 100) jsonError('Texte CTA trop long (max 100)');
    if (mb_strlen($ctaUrl) > 500) jsonError('URL CTA trop longue (max 500)');

    $stmt = $pdo->prepare("
        UPDATE appearance_config SET
            header_style = ?, header_bg_style = ?,
            header_show_logo = ?, header_show_name = ?, header_show_nav = ?,
            header_show_cta = ?, header_show_cv = ?, header_show_darkmode = ?,
            header_cta_text = ?, header_cta_url = ?,
            header_logo_position = ?, header_text_color = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        $data['header_style'], $data['header_bg_style'],
        (int)(bool)($data['header_show_logo'] ?? true),
        (int)(bool)($data['header_show_name'] ?? true),
        (int)(bool)($data['header_show_nav'] ?? true),
        (int)(bool)($data['header_show_cta'] ?? true),
        (int)(bool)($data['header_show_cv'] ?? true),
        (int)(bool)($data['header_show_darkmode'] ?? true),
        $ctaText, $ctaUrl,
        $data['header_logo_position'], $data['header_text_color'],
        $userId,
    ]);

    jsonSuccess(null, 'Header mis a jour');
}

// ----------------------------------------------------------
// Update : Footer
// ----------------------------------------------------------
function updateFooter(PDO $pdo, int $userId, array $data): void
{
    requireEnum($data['footer_bg_style'] ?? 'dark', ['solid','gradient','dark','light'], 'Fond footer');
    requireEnum($data['footer_layout'] ?? 'centered', ['centered','columns','minimal'], 'Disposition');

    $copyrightText = trim($data['footer_copyright_text'] ?? '');
    if (mb_strlen($copyrightText) > 255) jsonError('Texte copyright trop long (max 255)');

    $stmt = $pdo->prepare("
        UPDATE appearance_config SET
            footer_bg_style = ?, footer_show_name = ?, footer_show_title = ?,
            footer_show_bio = ?, footer_show_social = ?, footer_show_copyright = ?,
            footer_show_credit = ?, footer_show_nav = ?,
            footer_copyright_text = ?, footer_layout = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        $data['footer_bg_style'],
        (int)(bool)($data['footer_show_name'] ?? true),
        (int)(bool)($data['footer_show_title'] ?? true),
        (int)(bool)($data['footer_show_bio'] ?? false),
        (int)(bool)($data['footer_show_social'] ?? true),
        (int)(bool)($data['footer_show_copyright'] ?? true),
        (int)(bool)($data['footer_show_credit'] ?? true),
        (int)(bool)($data['footer_show_nav'] ?? false),
        $copyrightText,
        $data['footer_layout'],
        $userId,
    ]);

    jsonSuccess(null, 'Footer mis a jour');
}

// ----------------------------------------------------------
// Update : Animations
// ----------------------------------------------------------
function updateAnimations(PDO $pdo, int $userId, array $data): void
{
    requireEnum($data['animation_speed'] ?? 'normal', ['slow','normal','fast'], 'Vitesse');
    requireEnum($data['animation_style'] ?? 'fade', ['fade','slide','scale','bounce'], 'Style');

    $stmt = $pdo->prepare("
        UPDATE appearance_config SET
            animations_enabled = ?, animation_speed = ?, animation_style = ?,
            typewriter_enabled = ?, counter_enabled = ?
        WHERE user_id = ?
    ");
    $stmt->execute([
        (int)(bool)($data['animations_enabled'] ?? true),
        $data['animation_speed'],
        $data['animation_style'],
        (int)(bool)($data['typewriter_enabled'] ?? true),
        (int)(bool)($data['counter_enabled'] ?? true),
        $userId,
    ]);

    jsonSuccess(null, 'Animations mises a jour');
}

// ----------------------------------------------------------
// Themes predefinis
// ----------------------------------------------------------
function getThemes(): array
{
    return [
        'ocean' => [
            'name' => 'Ocean Blue', 'dark_mode' => 'light',
            'primary' => '#0369a1', 'secondary' => '#0284c7', 'accent' => '#06b6d4',
            'bg' => '#f0f9ff', 'text' => '#0c4a6e', 'header_bg' => '#ffffff',
            'footer_bg' => '#0c4a6e', 'card_bg' => '#ffffff', 'border' => '#bae6fd',
        ],
        'forest' => [
            'name' => 'Forest Green', 'dark_mode' => 'light',
            'primary' => '#15803d', 'secondary' => '#166534', 'accent' => '#a16207',
            'bg' => '#f7fdf4', 'text' => '#14532d', 'header_bg' => '#ffffff',
            'footer_bg' => '#14532d', 'card_bg' => '#ffffff', 'border' => '#bbf7d0',
        ],
        'sunset' => [
            'name' => 'Sunset Orange', 'dark_mode' => 'light',
            'primary' => '#ea580c', 'secondary' => '#dc2626', 'accent' => '#f59e0b',
            'bg' => '#fff7ed', 'text' => '#431407', 'header_bg' => '#ffffff',
            'footer_bg' => '#431407', 'card_bg' => '#ffffff', 'border' => '#fed7aa',
        ],
        'purple' => [
            'name' => 'Purple Night', 'dark_mode' => 'dark',
            'primary' => '#7c3aed', 'secondary' => '#6d28d9', 'accent' => '#a78bfa',
            'bg' => '#0f0b1a', 'text' => '#e9e5f5', 'header_bg' => '#1a1425',
            'footer_bg' => '#0a0710', 'card_bg' => '#1a1425', 'border' => '#2e2547',
        ],
        'mono' => [
            'name' => 'Monochrome', 'dark_mode' => 'light',
            'primary' => '#171717', 'secondary' => '#404040', 'accent' => '#737373',
            'bg' => '#fafafa', 'text' => '#171717', 'header_bg' => '#ffffff',
            'footer_bg' => '#171717', 'card_bg' => '#ffffff', 'border' => '#e5e5e5',
        ],
        'rosegold' => [
            'name' => 'Rose Gold', 'dark_mode' => 'light',
            'primary' => '#be185d', 'secondary' => '#9d174d', 'accent' => '#d97706',
            'bg' => '#fdf2f8', 'text' => '#4a044e', 'header_bg' => '#ffffff',
            'footer_bg' => '#4a044e', 'card_bg' => '#ffffff', 'border' => '#fbcfe8',
        ],
        'techdark' => [
            'name' => 'Tech Dark', 'dark_mode' => 'dark',
            'primary' => '#22c55e', 'secondary' => '#16a34a', 'accent' => '#4ade80',
            'bg' => '#09090b', 'text' => '#d4d4d8', 'header_bg' => '#18181b',
            'footer_bg' => '#09090b', 'card_bg' => '#18181b', 'border' => '#27272a',
        ],
        'navy' => [
            'name' => 'Corporate Navy', 'dark_mode' => 'light',
            'primary' => '#1e3a5f', 'secondary' => '#1e40af', 'accent' => '#b45309',
            'bg' => '#f8fafc', 'text' => '#0f172a', 'header_bg' => '#ffffff',
            'footer_bg' => '#0f172a', 'card_bg' => '#ffffff', 'border' => '#cbd5e1',
        ],
        'earth' => [
            'name' => 'Warm Earth', 'dark_mode' => 'light',
            'primary' => '#b45309', 'secondary' => '#92400e', 'accent' => '#d97706',
            'bg' => '#fffbeb', 'text' => '#451a03', 'header_bg' => '#ffffff',
            'footer_bg' => '#451a03', 'card_bg' => '#ffffff', 'border' => '#fde68a',
        ],
        'candy' => [
            'name' => 'Candy Pop', 'dark_mode' => 'light',
            'primary' => '#ec4899', 'secondary' => '#db2777', 'accent' => '#eab308',
            'bg' => '#fdf2f8', 'text' => '#500724', 'header_bg' => '#ffffff',
            'footer_bg' => '#500724', 'card_bg' => '#ffffff', 'border' => '#fbcfe8',
        ],
    ];
}

// ----------------------------------------------------------
// Update : Template
// ----------------------------------------------------------
function updateTemplate(PDO $pdo, int $userId, array $data): void
{
    $template = $data['template'] ?? 'starter';
    $allowed = ['starter', 'developer', 'creative', 'horizon'];
    if (!in_array($template, $allowed, true)) {
        jsonError('Template inconnu');
    }

    $stmt = $pdo->prepare("UPDATE profiles SET template = ? WHERE user_id = ?");
    $stmt->execute([$template, $userId]);

    jsonSuccess(null, 'Template mis a jour');
}
