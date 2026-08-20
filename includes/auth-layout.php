<?php
// ============================================================
// Nom du fichier : includes/auth-layout.php
// Description    : Layout HTML pour les pages d'authentification
// Auth requise   : Non
// ============================================================

declare(strict_types=1);

// $pageTitle et $pageSubtitle doivent etre definis avant l'inclusion
$pageTitle    = $pageTitle ?? 'Authentification';
$pageSubtitle = $pageSubtitle ?? '';
$csrfToken    = generateCsrfToken();

// Flash messages
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>
<!DOCTYPE html>
<html lang="fr" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= sanitize($pageTitle) ?> — <?= APP_NAME ?></title>
    <meta name="robots" content="noindex, nofollow">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">

<div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">

    <!-- Logo + Titre -->
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="/" class="flex items-center justify-center gap-2 group">
            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center shadow-lg group-hover:bg-blue-700 transition-colors">
                <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/>
                </svg>
            </div>
            <span class="text-2xl font-bold text-gray-900"><?= APP_NAME ?></span>
        </a>
        <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
            <?= sanitize($pageTitle) ?>
        </h2>
        <?php if ($pageSubtitle): ?>
            <p class="mt-2 text-center text-sm text-gray-600">
                <?= sanitize($pageSubtitle) ?>
            </p>
        <?php endif; ?>
    </div>

    <!-- Flash message -->
    <?php if ($flash): ?>
        <div class="sm:mx-auto sm:w-full sm:max-w-md mt-4"
             x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <div class="rounded-lg px-4 py-3 text-sm flex items-center gap-2
                <?= ($flash['type'] ?? 'info') === 'success'
                    ? 'bg-green-50 text-green-800 border border-green-200'
                    : (($flash['type'] ?? 'info') === 'error'
                        ? 'bg-red-50 text-red-800 border border-red-200'
                        : 'bg-blue-50 text-blue-800 border border-blue-200') ?>">
                <?php if (($flash['type'] ?? 'info') === 'success'): ?>
                    <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/></svg>
                <?php elseif (($flash['type'] ?? 'info') === 'error'): ?>
                    <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd"/></svg>
                <?php else: ?>
                    <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd"/></svg>
                <?php endif; ?>
                <span><?= sanitize($flash['message'] ?? '') ?></span>
            </div>
        </div>
    <?php endif; ?>

    <!-- Card -->
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white px-6 py-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-2xl sm:px-12">
