<?php
// ============================================================
// Nom du fichier : includes/dashboard-sidebar-content.php
// Description    : Contenu de la sidebar (partage entre mobile et desktop)
// ============================================================
?>

<!-- Logo -->
<div class="flex items-center gap-2.5 px-5 py-5 border-b border-gray-100 shrink-0">
    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center shrink-0">
        <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/>
        </svg>
    </div>
    <span class="text-lg font-bold text-gray-900 sidebar-logo-text"><?= APP_NAME ?></span>
</div>

<!-- Portfolio link -->
<div class="px-3 py-3 border-b border-gray-100 shrink-0">
    <a href="<?= sanitize($portfolioUrl) ?>" target="_blank" rel="noopener"
       class="sidebar-portfolio-link flex items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-blue-600 bg-blue-50 hover:bg-blue-100 transition-colors">
        <svg class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
        </svg>
        <span class="truncate">Voir mon portfolio</span>
    </a>
</div>

<!-- Navigation -->
<nav class="flex-1 overflow-y-auto sidebar-scroll px-3 py-3 space-y-5">
    <?php foreach ($navGroups as $groupLabel => $items): ?>
        <div>
            <p class="sidebar-group-title px-3 mb-1.5 text-[11px] font-semibold uppercase tracking-wider text-gray-400">
                <?= sanitize($groupLabel) ?>
            </p>
            <ul class="space-y-0.5">
                <?php foreach ($items as $item):
                    $isActive = ($currentPage === $item['slug']);
                    $badge    = $item['badge'] ?? 0;
                ?>
                    <li>
                        <a href="/dashboard/<?= $item['slug'] === 'index' ? '' : sanitize($item['slug']) . '.php' ?>"
                           class="sidebar-nav-item flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium transition-colors
                                  <?= $isActive
                                      ? 'bg-blue-50 text-blue-700'
                                      : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' ?>">
                            <span class="<?= $isActive ? 'text-blue-600' : 'text-gray-400' ?>">
                                <?= renderIcon($item['icon'], $icons) ?>
                            </span>
                            <span class="sidebar-label truncate"><?= sanitize($item['label']) ?></span>
                            <?php if ($badge > 0): ?>
                                <span class="sidebar-label ml-auto inline-flex items-center justify-center min-w-[20px] h-5 px-1.5 rounded-full text-xs font-semibold bg-red-100 text-red-700">
                                    <?= $badge ?>
                                </span>
                            <?php endif; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>

    <!-- Logout -->
    <div class="border-t border-gray-100 pt-3">
        <a href="/auth/logout.php"
           class="sidebar-nav-item flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:bg-red-50 hover:text-red-700 transition-colors">
            <span class="text-gray-400">
                <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"/>
                </svg>
            </span>
            <span class="sidebar-label">Se deconnecter</span>
        </a>
    </div>
</nav>

<!-- Collapse toggle (desktop only) -->
<div class="hidden lg:block border-t border-gray-100 p-3 shrink-0">
    <button @click="toggleSidebar()" class="w-full flex items-center justify-center gap-2 px-3 py-2 rounded-lg text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-colors">
        <svg class="w-5 h-5 transition-transform duration-300" :class="sidebarCollapsed && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5"/>
        </svg>
        <span class="sidebar-label text-xs">Reduire</span>
    </button>
</div>
