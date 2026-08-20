<?php
// ============================================================
// Nom du fichier : dashboard/index.php
// Description    : Page d'accueil du dashboard — vue d'ensemble
// Auth requise   : Oui
// ============================================================

declare(strict_types=1);

$dashboardTitle = 'Vue d\'ensemble';
require_once __DIR__ . '/../includes/dashboard-layout.php';

// ----------------------------------------------------------
// Donnees pour la page d'accueil
// ----------------------------------------------------------
$userId = getCurrentUserId();

// Stats rapides
$stmtProjects = $pdo->prepare("SELECT COUNT(*) FROM projects WHERE user_id = ?");
$stmtProjects->execute([$userId]);
$nbProjects = (int) $stmtProjects->fetchColumn();

$stmtExp = $pdo->prepare("SELECT COUNT(*) FROM experiences WHERE user_id = ?");
$stmtExp->execute([$userId]);
$nbExperiences = (int) $stmtExp->fetchColumn();

$stmtSkills = $pdo->prepare("SELECT COUNT(*) FROM skills WHERE user_id = ?");
$stmtSkills->execute([$userId]);
$nbSkills = (int) $stmtSkills->fetchColumn();

// Calcul de completion du profil
$completionItems = [
    ['label' => 'Photo de profil',     'done' => !empty($userProfile['avatar_url']),   'link' => '/dashboard/profile.php',    'icon' => 'camera'],
    ['label' => 'Nom et prenom',       'done' => !empty($userProfile['first_name']),   'link' => '/dashboard/profile.php',    'icon' => 'user'],
    ['label' => 'Profession',          'done' => !empty($userProfile['profession']),   'link' => '/dashboard/profile.php',    'icon' => 'briefcase'],
    ['label' => 'Bio courte',          'done' => !empty($userProfile['bio_short']),    'link' => '/dashboard/profile.php',    'icon' => 'doc'],
    ['label' => 'Couleurs du theme',   'done' => ($userProfile['color_primary'] !== '#2563eb'), 'link' => '/dashboard/appearance.php', 'icon' => 'palette'],
    ['label' => 'Au moins 1 experience','done' => $nbExperiences > 0,                 'link' => '/dashboard/experiences.php', 'icon' => 'briefcase'],
    ['label' => 'Au moins 3 competences','done' => $nbSkills >= 3,                    'link' => '/dashboard/skills.php',      'icon' => 'chart'],
    ['label' => 'Au moins 1 projet',    'done' => $nbProjects > 0,                    'link' => '/dashboard/projects.php',    'icon' => 'folder'],
    ['label' => 'Coordonnees de contact','done' => false,                              'link' => '/dashboard/contact.php',    'icon' => 'phone'],
    ['label' => 'Reseaux sociaux',      'done' => false,                               'link' => '/dashboard/social.php',     'icon' => 'share'],
];

// Verifier contact et social
$stmtContact = $pdo->prepare("SELECT email_public FROM contact_info WHERE user_id = ?");
$stmtContact->execute([$userId]);
$contactData = $stmtContact->fetch();
$completionItems[8]['done'] = !empty($contactData['email_public']);

$stmtSocial = $pdo->prepare("SELECT COUNT(*) FROM social_links WHERE user_id = ?");
$stmtSocial->execute([$userId]);
$completionItems[9]['done'] = ((int) $stmtSocial->fetchColumn()) > 0;

$completedCount = count(array_filter($completionItems, fn($item) => $item['done']));
$totalCount = count($completionItems);
$completionPercent = (int) round(($completedCount / $totalCount) * 100);

$firstName = $userProfile['first_name'] ?? '';
$greeting = 'Bonjour' . ($firstName ? ', ' . sanitize($firstName) : '') . ' !';
?>

<!-- Greeting -->
<div class="mb-8">
    <h2 class="text-2xl font-bold text-gray-900 font-heading"><?= $greeting ?></h2>
    <p class="mt-1 text-gray-500">Voici un apercu de votre portfolio.</p>
</div>

<!-- Portfolio URL card -->
<div class="bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 sm:p-6 mb-6">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5a17.92 17.92 0 0 1-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418"/>
                </svg>
            </div>
            <div>
                <p class="text-sm text-gray-500">Votre portfolio est accessible a</p>
                <a href="<?= sanitize($portfolioUrl) ?>" target="_blank" rel="noopener"
                   class="text-lg font-semibold text-blue-600 hover:text-blue-700 hover:underline">
                    <?= BASE_DOMAIN ?>
                </a>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <button onclick="copyToClipboard('https://<?= sanitize(BASE_DOMAIN) ?>')"
                    class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9.75a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184"/>
                </svg>
                Copier le lien
            </button>
            <a href="<?= sanitize($portfolioUrl) ?>" target="_blank" rel="noopener"
               class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                </svg>
                Visiter
            </a>
        </div>
    </div>
</div>

<!-- Stats + Completion row -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

    <!-- Completion card (takes 2 cols) -->
    <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 sm:p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-base font-semibold text-gray-900 font-heading">Completion du profil</h3>
            <span class="text-sm font-bold <?= $completionPercent === 100 ? 'text-green-600' : 'text-blue-600' ?>">
                <?= $completionPercent ?>%
            </span>
        </div>

        <!-- Progress bar -->
        <div class="w-full h-2.5 bg-gray-100 rounded-full mb-5 overflow-hidden">
            <div class="h-full rounded-full transition-all duration-500 <?= $completionPercent === 100 ? 'bg-green-500' : 'bg-blue-600' ?>"
                 style="width: <?= $completionPercent ?>%"></div>
        </div>

        <!-- Checklist -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
            <?php foreach ($completionItems as $item): ?>
                <a href="<?= sanitize($item['link']) ?>"
                   class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm transition-colors
                          <?= $item['done'] ? 'text-gray-400' : 'text-gray-700 hover:bg-gray-50' ?>">
                    <?php if ($item['done']): ?>
                        <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/>
                        </svg>
                    <?php else: ?>
                        <div class="w-5 h-5 rounded-full border-2 border-gray-300 shrink-0"></div>
                    <?php endif; ?>
                    <span class="<?= $item['done'] ? 'line-through' : '' ?>"><?= sanitize($item['label']) ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Stats cards -->
    <div class="space-y-4">
        <?php
        $stats = [
            ['label' => 'Messages non lus', 'value' => $unreadMessages, 'icon' => 'inbox',     'color' => 'amber',  'link' => '/dashboard/messages.php'],
            ['label' => 'Projets',          'value' => $nbProjects,     'icon' => 'folder',     'color' => 'blue',   'link' => '/dashboard/projects.php'],
            ['label' => 'Experiences',      'value' => $nbExperiences,  'icon' => 'briefcase',  'color' => 'purple', 'link' => '/dashboard/experiences.php'],
            ['label' => 'Competences',      'value' => $nbSkills,       'icon' => 'chart',      'color' => 'green',  'link' => '/dashboard/skills.php'],
        ];
        $colorMap = [
            'amber'  => ['bg' => 'bg-amber-100',  'text' => 'text-amber-600'],
            'blue'   => ['bg' => 'bg-blue-100',   'text' => 'text-blue-600'],
            'purple' => ['bg' => 'bg-purple-100', 'text' => 'text-purple-600'],
            'green'  => ['bg' => 'bg-green-100',  'text' => 'text-green-600'],
        ];
        foreach ($stats as $stat):
            $c = $colorMap[$stat['color']];
        ?>
            <a href="<?= sanitize($stat['link']) ?>"
               class="flex items-center gap-4 bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-4 hover:shadow-md transition-shadow">
                <div class="w-11 h-11 rounded-xl <?= $c['bg'] ?> flex items-center justify-center shrink-0">
                    <span class="<?= $c['text'] ?>"><?= renderIcon($stat['icon'], $icons) ?></span>
                </div>
                <div>
                    <p class="text-2xl font-bold text-gray-900"><?= $stat['value'] ?></p>
                    <p class="text-sm text-gray-500"><?= sanitize($stat['label']) ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<!-- Quick access -->
<div class="mb-6">
    <h3 class="text-base font-semibold text-gray-900 font-heading mb-4">Acces rapide</h3>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <?php
        $quickLinks = [
            ['label' => 'Profil',       'desc' => 'Nom, bio, photo',       'link' => '/dashboard/profile.php',    'icon' => 'user',      'color' => 'blue'],
            ['label' => 'Projets',      'desc' => 'Vos realisations',      'link' => '/dashboard/projects.php',   'icon' => 'folder',    'color' => 'purple'],
            ['label' => 'Competences',  'desc' => 'Skills et niveaux',     'link' => '/dashboard/skills.php',     'icon' => 'chart',     'color' => 'green'],
            ['label' => 'Contact',      'desc' => 'Coordonnees',           'link' => '/dashboard/contact.php',    'icon' => 'phone',     'color' => 'amber'],
        ];
        foreach ($quickLinks as $ql):
            $c = $colorMap[$ql['color']];
        ?>
            <a href="<?= sanitize($ql['link']) ?>"
               class="group bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:shadow-md hover:ring-gray-200 transition-all text-center">
                <div class="w-12 h-12 rounded-xl <?= $c['bg'] ?> flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform">
                    <span class="<?= $c['text'] ?>"><?= renderIcon($ql['icon'], $icons) ?></span>
                </div>
                <p class="text-sm font-semibold text-gray-900"><?= sanitize($ql['label']) ?></p>
                <p class="text-xs text-gray-500 mt-0.5"><?= sanitize($ql['desc']) ?></p>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<?php include __DIR__ . '/../includes/dashboard-footer.php'; ?>
