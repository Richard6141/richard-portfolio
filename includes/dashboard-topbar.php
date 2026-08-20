<?php
// ============================================================
// Nom du fichier : includes/dashboard-topbar.php
// Description    : Barre superieure du dashboard
// Auth requise   : Oui (inclus via dashboard-layout.php)
// ============================================================
?>

<header class="sticky top-0 z-20 bg-white/80 backdrop-blur-lg border-b border-gray-200">
    <div class="flex items-center justify-between h-16 px-4 sm:px-6 lg:px-8">

        <!-- Left: mobile menu + page title -->
        <div class="flex items-center gap-3">
            <!-- Mobile hamburger -->
            <button @click="mobileOpen = true" class="lg:hidden p-2 -ml-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-100">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>

            <div>
                <h1 class="text-lg font-semibold text-gray-900 font-heading"><?= sanitize($dashboardTitle) ?></h1>
            </div>
        </div>

        <!-- Right: portfolio link + user menu -->
        <div class="flex items-center gap-3">
            <!-- Portfolio link (desktop) -->
            <a href="<?= sanitize($portfolioUrl) ?>" target="_blank" rel="noopener"
               class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                </svg>
                Voir le portfolio
            </a>

            <!-- User menu -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open" @click.outside="open = false"
                        class="flex items-center gap-2.5 p-1.5 rounded-xl hover:bg-gray-50 transition-colors">
                    <?php if ($userAvatar): ?>
                        <img src="/uploads/<?= sanitize($userAvatar) ?>"
                             alt="Avatar" class="w-8 h-8 rounded-full object-cover ring-2 ring-gray-100">
                    <?php else: ?>
                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center ring-2 ring-gray-100">
                            <span class="text-sm font-semibold text-blue-600">
                                <?= mb_strtoupper(mb_substr($userDisplayName, 0, 1)) ?>
                            </span>
                        </div>
                    <?php endif; ?>
                    <div class="hidden sm:block text-left">
                        <p class="text-sm font-medium text-gray-900 leading-tight"><?= sanitize($userDisplayName) ?></p>
                        <p class="text-xs text-gray-500 leading-tight"><?= BASE_DOMAIN ?></p>
                    </div>
                    <svg class="w-4 h-4 text-gray-400 hidden sm:block" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div x-show="open" x-cloak
                     x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg ring-1 ring-gray-900/5 py-1 z-50">
                    <div class="px-4 py-3 border-b border-gray-100">
                        <p class="text-sm font-medium text-gray-900"><?= sanitize($userDisplayName) ?></p>
                        <p class="text-xs text-gray-500 truncate"><?= sanitize($currentUser['email']) ?></p>
                    </div>
                    <a href="/dashboard/profile.php" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>
                        Mon profil
                    </a>
                    <a href="/dashboard/settings.php" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg>
                        Parametres
                    </a>
                    <div class="border-t border-gray-100 mt-1 pt-1">
                        <a href="/auth/logout.php" class="flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"/></svg>
                            Se deconnecter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
