<?php
// ============================================================
// Nom du fichier : includes/dashboard-layout.php
// Description    : Layout HTML principal du dashboard
// Auth requise   : Oui (via requireAuth dans chaque page)
// ============================================================

declare(strict_types=1);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/session.php';
require_once __DIR__ . '/../helpers/functions.php';

requireAuth();

$currentUser = getCurrentUser();
$csrfToken   = generateCsrfToken();
$pdo         = getPDO();

// Recuperer le profil complet pour les fonts personnalisees
$stmtProfile = $pdo->prepare("SELECT * FROM profiles WHERE user_id = ?");
$stmtProfile->execute([$currentUser['id']]);
$userProfile = $stmtProfile->fetch();

// Compteur messages non lus
$stmtMsg = $pdo->prepare("SELECT COUNT(*) FROM contact_messages WHERE user_id = ? AND is_read = 0 AND is_spam = 0");
$stmtMsg->execute([$currentUser['id']]);
$unreadMessages = (int) $stmtMsg->fetchColumn();

// Variables pour le layout
$userSlug       = $currentUser['slug'];
$portfolioUrl   = '/';
$userDisplayName = trim(($currentUser['first_name'] ?? '') . ' ' . ($currentUser['last_name'] ?? ''));
if ($userDisplayName === '') {
    $userDisplayName = $currentUser['email'];
}
$userAvatar    = $currentUser['avatar_url'] ?? '';
$userProfession = $currentUser['profession'] ?? '';
$fontHeading   = $userProfile['font_heading'] ?? 'Inter';
$fontBody      = $userProfile['font_body'] ?? 'Inter';
$colorPrimary  = $userProfile['color_primary'] ?? '#2563eb';

// Page actuelle pour la sidebar
$currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');

// Flash messages
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

// $dashboardTitle doit etre defini avant l'inclusion
$dashboardTitle = $dashboardTitle ?? 'Dashboard';
?>
<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="<?= sanitize($csrfToken) ?>">
    <title><?= sanitize($dashboardTitle) ?> — <?= APP_NAME ?></title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: '<?= sanitize($colorPrimary) ?>',
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts -->
    <?php
    $fonts = array_unique([$fontHeading, $fontBody]);
    $fontQuery = implode('&family=', array_map(fn($f) => urlencode($f) . ':wght@400;500;600;700', $fonts));
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=<?= $fontQuery ?>&display=swap" rel="stylesheet">

    <style>
        [x-cloak] { display: none !important; }
        body { font-family: '<?= sanitize($fontBody) ?>', 'Inter', system-ui, sans-serif; }
        .font-heading { font-family: '<?= sanitize($fontHeading) ?>', 'Inter', system-ui, sans-serif; }

        /* Sidebar transition */
        .sidebar-collapsed { width: 72px; }
        .sidebar-collapsed .sidebar-label { display: none; }
        .sidebar-collapsed .sidebar-group-title { display: none; }
        .sidebar-collapsed .sidebar-logo-text { display: none; }
        .sidebar-collapsed .sidebar-portfolio-link { display: none; }
        .sidebar-collapsed .sidebar-nav-item { justify-content: center; padding-left: 0; padding-right: 0; }

        /* Scrollbar */
        .sidebar-scroll::-webkit-scrollbar { width: 4px; }
        .sidebar-scroll::-webkit-scrollbar-track { background: transparent; }
        .sidebar-scroll::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 2px; }
        .sidebar-scroll::-webkit-scrollbar-thumb:hover { background: #9ca3af; }

        /* Toast animations */
        @keyframes slideIn { from { transform: translateX(100%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
        @keyframes slideOut { from { transform: translateX(0); opacity: 1; } to { transform: translateX(100%); opacity: 0; } }
        .toast-enter { animation: slideIn 0.3s ease-out; }
        .toast-leave { animation: slideOut 0.3s ease-in forwards; }
    </style>
</head>
<body class="h-full" x-data="dashboardApp()" x-init="init()">

<!-- Mobile overlay -->
<div x-show="mobileOpen" x-cloak
     class="fixed inset-0 z-40 bg-gray-900/60 lg:hidden"
     @click="mobileOpen = false"
     x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
</div>

<div class="flex h-full">

    <?php include __DIR__ . '/dashboard-sidebar.php'; ?>

    <!-- Main content area -->
    <div class="flex-1 flex flex-col min-w-0 transition-all duration-300"
         :class="sidebarCollapsed ? 'lg:ml-[72px]' : 'lg:ml-64'">

        <?php include __DIR__ . '/dashboard-topbar.php'; ?>

        <!-- Page content -->
        <main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">

            <!-- Flash message -->
            <?php if ($flash): ?>
                <div class="mb-6" x-data="{ show: true }" x-show="show"
                     x-init="setTimeout(() => show = false, 5000)"
                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2">
                    <div class="rounded-xl px-4 py-3 text-sm flex items-center gap-3 shadow-sm
                        <?= ($flash['type'] ?? 'info') === 'success'
                            ? 'bg-green-50 text-green-800 border border-green-200'
                            : (($flash['type'] ?? 'info') === 'error'
                                ? 'bg-red-50 text-red-800 border border-red-200'
                                : 'bg-blue-50 text-blue-800 border border-blue-200') ?>">
                        <?php if (($flash['type'] ?? 'info') === 'success'): ?>
                            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/></svg>
                        <?php else: ?>
                            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd"/></svg>
                        <?php endif; ?>
                        <span><?= sanitize($flash['message'] ?? '') ?></span>
                        <button @click="show = false" class="ml-auto p-0.5 rounded hover:bg-black/5">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"/></svg>
                        </button>
                    </div>
                </div>
            <?php endif; ?>
