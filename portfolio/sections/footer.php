<?php
// ============================================================
// Footer du portfolio public — 100% dynamique
// Styles : dark / light / solid / gradient
// Layouts : centered / columns / minimal
// ============================================================

$footerBgStyle  = $appearance['footer_bg_style'] ?? 'dark';
$footerLayout   = $appearance['footer_layout'] ?? 'centered';
$showName       = (bool)($appearance['footer_show_name'] ?? true);
$showTitle      = (bool)($appearance['footer_show_title'] ?? true);
$showBio        = (bool)($appearance['footer_show_bio'] ?? false);
$showSocial     = (bool)($appearance['footer_show_social'] ?? true);
$showCopyright  = (bool)($appearance['footer_show_copyright'] ?? true);
$showCredit     = (bool)($appearance['footer_show_credit'] ?? true);
$showNav        = (bool)($appearance['footer_show_nav'] ?? false);
$copyrightText  = $appearance['footer_copyright_text'] ?? '';

$footerBg = $appearance['footer_bg'] ?? '#111827';
$primaryColor = $profile['color_primary'] ?? '#2563eb';
$secondaryColor = $profile['color_secondary'] ?? '#1e40af';

// Determiner le fond et la couleur du texte
$footerStyle = '';
switch ($footerBgStyle) {
    case 'dark':
        $footerStyle = 'background:#111827';
        $ftColor = '#f9fafb';
        $ftMuted = 'rgba(249,250,251,0.5)';
        $ftBorder = 'rgba(249,250,251,0.1)';
        break;
    case 'light':
        $footerStyle = 'background:#f9fafb';
        $ftColor = '#1f2937';
        $ftMuted = 'rgba(31,41,55,0.5)';
        $ftBorder = 'rgba(31,41,55,0.1)';
        break;
    case 'solid':
        // Utiliser la couleur footer_bg de appearance
        $footerStyle = 'background:' . sanitize($footerBg);
        $hex = ltrim($footerBg, '#');
        $r = hexdec(substr($hex,0,2)); $g = hexdec(substr($hex,2,2)); $b = hexdec(substr($hex,4,2));
        $isDark = (0.299*$r + 0.587*$g + 0.114*$b) / 255 < 0.5;
        $ftColor = $isDark ? '#f9fafb' : '#1f2937';
        $ftMuted = $isDark ? 'rgba(249,250,251,0.5)' : 'rgba(31,41,55,0.5)';
        $ftBorder = $isDark ? 'rgba(249,250,251,0.1)' : 'rgba(31,41,55,0.1)';
        break;
    case 'gradient':
        $footerStyle = 'background:linear-gradient(135deg,' . sanitize($primaryColor) . ',' . sanitize($secondaryColor) . ')';
        $ftColor = '#ffffff';
        $ftMuted = 'rgba(255,255,255,0.6)';
        $ftBorder = 'rgba(255,255,255,0.15)';
        break;
    default:
        $footerStyle = 'background:#111827';
        $ftColor = '#f9fafb';
        $ftMuted = 'rgba(249,250,251,0.5)';
        $ftBorder = 'rgba(249,250,251,0.1)';
}

$navSections = array_filter($sections, fn($s) => $s['section'] !== 'hero');
?>

<footer class="portfolio-footer" style="<?= $footerStyle ?>;color:<?= $ftColor ?>">

    <?php if ($footerLayout === 'columns'): ?>
    <!-- ======== LAYOUT: COLONNES ======== -->
    <div class="footer-inner footer-columns">
        <!-- Col 1: Identity -->
        <div class="footer-col">
            <?php if ($showName): ?>
                <p class="footer-name" style="color:<?= $ftColor ?>"><?= sanitize($fullName) ?></p>
            <?php endif; ?>
            <?php if ($showTitle && ($profile['profession'] ?? '')): ?>
                <p class="footer-text" style="color:<?= $ftMuted ?>"><?= sanitize($profile['profession']) ?></p>
            <?php endif; ?>
            <?php if ($showBio && ($profile['bio_short'] ?? '')): ?>
                <p class="footer-bio" style="color:<?= $ftMuted ?>"><?= sanitize($profile['bio_short']) ?></p>
            <?php endif; ?>
            <?php if ($showSocial && !empty($socialLinks)): ?>
                <div class="footer-social" style="justify-content:flex-start">
                    <?php foreach ($socialLinks as $link): ?>
                        <a href="<?= sanitize($link['url']) ?>" target="_blank" rel="noopener" class="footer-social-link" style="color:<?= $ftColor ?>;background:<?= $ftBorder ?>" title="<?= sanitize($link['label'] ?? $link['platform']) ?>">
                            <?= getSocialIcon($link['platform'], 14) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Col 2: Navigation -->
        <?php if ($showNav && !empty($navSections)): ?>
            <div class="footer-col">
                <p class="footer-col-title" style="color:<?= $ftColor ?>">Navigation</p>
                <nav class="footer-col-nav">
                    <?php foreach (array_slice($navSections, 0, 8) as $s): ?>
                        <a href="#<?= sanitize($s['section']) ?>" style="color:<?= $ftMuted ?>"><?= sanitize($s['title'] ?: ucfirst($s['section'])) ?></a>
                    <?php endforeach; ?>
                </nav>
            </div>
        <?php endif; ?>

        <!-- Col 3: Contact -->
        <div class="footer-col">
            <p class="footer-col-title" style="color:<?= $ftColor ?>">Contact</p>
            <?php if ($contactInfo['email_public'] ?? ''): ?>
                <a href="mailto:<?= sanitize($contactInfo['email_public']) ?>" class="footer-contact-link" style="color:<?= $ftMuted ?>">
                    <?= sanitize($contactInfo['email_public']) ?>
                </a>
            <?php endif; ?>
            <?php if ($contactInfo['phone'] ?? ''): ?>
                <a href="tel:<?= sanitize($contactInfo['phone']) ?>" class="footer-contact-link" style="color:<?= $ftMuted ?>">
                    <?= sanitize($contactInfo['phone']) ?>
                </a>
            <?php endif; ?>
            <?php if (($contactInfo['city'] ?? '') || ($contactInfo['country'] ?? '')): ?>
                <p class="footer-contact-link" style="color:<?= $ftMuted ?>">
                    <?= sanitize(implode(', ', array_filter([$contactInfo['city'] ?? '', $contactInfo['country'] ?? '']))) ?>
                </p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bottom bar -->
    <div class="footer-bottom" style="border-top:1px solid <?= $ftBorder ?>">
        <div class="footer-inner footer-bottom-inner">
            <?php if ($showCopyright): ?>
                <p style="color:<?= $ftMuted ?>;font-size:0.75rem">
                    <?= sanitize($copyrightText ?: '© ' . date('Y') . ' ' . $fullName . '. Tous droits reserves.') ?>
                </p>
            <?php endif; ?>
            <?php if ($showCredit): ?>
                <p style="color:<?= $ftMuted ?>;font-size:0.6875rem">
                    Cree avec <a href="<?= BASE_URL ?>" style="color:<?= $ftMuted ?>;text-decoration:underline"><?= APP_NAME ?></a>
                </p>
            <?php endif; ?>
        </div>
    </div>

    <?php elseif ($footerLayout === 'minimal'): ?>
    <!-- ======== LAYOUT: MINIMAL ======== -->
    <div class="footer-inner footer-minimal">
        <?php if ($showCopyright): ?>
            <p style="color:<?= $ftMuted ?>;font-size:0.8125rem">
                <?= sanitize($copyrightText ?: '© ' . date('Y') . ' ' . $fullName) ?>
            </p>
        <?php endif; ?>
        <?php if ($showCredit): ?>
            <p style="color:<?= $ftMuted ?>;font-size:0.6875rem;margin-top:0.25rem">
                Cree avec <a href="<?= BASE_URL ?>" style="color:<?= $ftMuted ?>"><?= APP_NAME ?></a>
            </p>
        <?php endif; ?>
    </div>

    <?php else: ?>
    <!-- ======== LAYOUT: CENTRE (default) ======== -->
    <div class="footer-inner footer-centered">
        <?php if ($showName): ?>
            <p class="footer-name" style="color:<?= $ftColor ?>"><?= sanitize($fullName) ?></p>
        <?php endif; ?>
        <?php if ($showTitle && ($profile['profession'] ?? '')): ?>
            <p class="footer-text" style="color:<?= $ftMuted ?>"><?= sanitize($profile['profession']) ?></p>
        <?php endif; ?>
        <?php if ($showBio && ($profile['bio_short'] ?? '')): ?>
            <p class="footer-bio" style="color:<?= $ftMuted ?>"><?= sanitize($profile['bio_short']) ?></p>
        <?php endif; ?>

        <?php if ($showSocial && !empty($socialLinks)): ?>
            <div class="footer-social">
                <?php foreach ($socialLinks as $link): ?>
                    <a href="<?= sanitize($link['url']) ?>" target="_blank" rel="noopener" class="footer-social-link" style="color:<?= $ftColor ?>;background:<?= $ftBorder ?>" title="<?= sanitize($link['label'] ?? $link['platform']) ?>">
                        <?= getSocialIcon($link['platform'], 14) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($showNav && !empty($navSections)): ?>
            <nav class="footer-nav-inline">
                <?php foreach (array_slice($navSections, 0, 6) as $s): ?>
                    <a href="#<?= sanitize($s['section']) ?>" style="color:<?= $ftMuted ?>"><?= sanitize($s['title'] ?: ucfirst($s['section'])) ?></a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>

        <?php if ($showCopyright): ?>
            <p class="footer-copyright" style="color:<?= $ftMuted ?>">
                <?= sanitize($copyrightText ?: '© ' . date('Y') . ' ' . $fullName . '. Tous droits reserves.') ?>
            </p>
        <?php endif; ?>
        <?php if ($showCredit): ?>
            <p class="footer-credit" style="color:<?= $ftMuted ?>">
                Cree avec <a href="<?= BASE_URL ?>" style="color:<?= $ftMuted ?>"><?= APP_NAME ?></a>
            </p>
        <?php endif; ?>
    </div>
    <?php endif; ?>

    <!-- Back to top -->
    <button class="back-to-top" id="back-to-top" aria-label="Retour en haut" style="color:<?= $ftColor ?>;border-color:<?= $ftBorder ?>">
        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"/></svg>
    </button>
</footer>
