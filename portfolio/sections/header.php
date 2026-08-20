<?php
// ============================================================
// Header du portfolio public
// ============================================================

$headerStyle    = $appearance['header_style'] ?? 'fixed';
$headerBgStyle  = $appearance['header_bg_style'] ?? 'solid';
$showLogo       = (bool)($appearance['header_show_logo'] ?? true);
$showName       = (bool)($appearance['header_show_name'] ?? true);
$showNav        = (bool)($appearance['header_show_nav'] ?? true);
$showCta        = (bool)($appearance['header_show_cta'] ?? true);
$showCv         = (bool)($appearance['header_show_cv'] ?? true) && !empty($profile['cv_url']);
$showDarkMode   = (bool)($appearance['header_show_darkmode'] ?? false);
$ctaText        = $appearance['header_cta_text'] ?? 'Me contacter';
$ctaUrl         = $appearance['header_cta_url'] ?? '#contact';

$navSections = array_filter($sections, fn($s) => $s['section'] !== 'hero');
$prioritySections = ['about','experiences','skills','projects','services','contact'];
$primaryNav = [];
$moreNav = [];
foreach ($navSections as $s) {
    if (in_array($s['section'], $prioritySections)) $primaryNav[] = $s;
    else $moreNav[] = $s;
}

$initials = mb_strtoupper(mb_substr($profile['first_name'] ?? '', 0, 1)) . mb_strtoupper(mb_substr($profile['last_name'] ?? '', 0, 1));
if ($initials === '') $initials = mb_strtoupper(mb_substr($slug, 0, 2));

if ($headerStyle === 'hidden') return;
if ($headerStyle === 'sidebar') { /* TODO sidebar mode */ return; }
?>

<style>
.ph{position:fixed;top:0;left:0;right:0;z-index:100;background:var(--color-header-bg);border-bottom:1px solid var(--color-border);transition:background .3s,box-shadow .3s}
.ph-in{max-width:var(--content-max-width);margin:0 auto;padding:0 1.25rem;display:flex;align-items:center;justify-content:space-between;height:60px}
.ph-logo{display:flex;align-items:center;gap:.5rem;font-family:var(--font-heading);font-weight:700;font-size:1.05rem;text-decoration:none;color:var(--color-text);white-space:nowrap}
.ph-logo img{width:32px;height:32px;border-radius:50%;object-fit:cover}
.ph-logo-i{width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:.75rem;font-weight:700;flex-shrink:0}
.ph-r{display:flex;align-items:center;gap:.5rem}
.ph-ul{display:flex;align-items:center;gap:2px;list-style:none;margin:0 0 0 1rem;padding:0}
.ph-a{display:block;padding:.35rem .6rem;border-radius:6px;font-size:.78rem;font-weight:500;color:var(--color-text);opacity:.65;text-decoration:none;white-space:nowrap;transition:opacity .15s,background .15s}
.ph-a:hover{opacity:1;background:rgba(128,128,128,.1)}
.ph-mb{position:relative}
.ph-mb button{display:inline-flex;align-items:center;gap:3px;padding:.35rem .6rem;border-radius:6px;font-size:.78rem;font-weight:500;color:var(--color-text);opacity:.65;background:none;border:none;cursor:pointer;font-family:inherit;white-space:nowrap}
.ph-mb button:hover{opacity:1;background:rgba(128,128,128,.1)}
.ph-dd{display:none;flex-direction:column;position:absolute;top:calc(100% + 8px);right:0;background:var(--color-card-bg);border:1px solid var(--color-border);border-radius:10px;padding:6px;min-width:170px;box-shadow:0 8px 25px rgba(0,0,0,.12);z-index:50}
.ph-dd.open{display:flex}
.ph-dd a{display:block;padding:.45rem .7rem;border-radius:6px;font-size:.8rem;font-weight:500;color:var(--color-text);text-decoration:none;white-space:nowrap}
.ph-dd a:hover{background:rgba(128,128,128,.08)}
.ph-act{display:flex;align-items:center;gap:6px}
.ph-dm{background:none;border:none;cursor:pointer;padding:6px;border-radius:8px;color:var(--color-text);opacity:.6;display:flex}
.ph-dm:hover{opacity:1;background:rgba(128,128,128,.1)}
.ph-cv,.ph-cta{font-size:.78rem!important;padding:.4rem .85rem!important}
.ph-bg{display:none;background:none;border:none;cursor:pointer;padding:8px;border-radius:8px;color:var(--color-text)}

/* Mobile overlay + drawer — EN DEHORS du header */
.ph-overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.4);z-index:150}
.ph-overlay.open{display:block}
.ph-dw{position:fixed;top:0;right:0;bottom:0;width:280px;max-width:85vw;background:var(--color-card-bg);z-index:200;transform:translateX(100%);transition:transform .25s ease;overflow-y:auto;-webkit-overflow-scrolling:touch;box-shadow:-4px 0 20px rgba(0,0,0,.1)}
.ph-dw.open{transform:translateX(0)}
.ph-dw-head{display:flex;align-items:center;justify-content:space-between;padding:1rem 1.25rem;border-bottom:1px solid var(--color-border)}
.ph-dw-close{background:none;border:none;cursor:pointer;padding:6px;border-radius:8px;color:var(--color-text)}
.ph-dw-nav{padding:.75rem 1rem;display:flex;flex-direction:column;gap:2px}
.ph-dw-nav a{display:block;padding:.7rem .85rem;border-radius:8px;font-size:.95rem;font-weight:500;color:var(--color-text);text-decoration:none}
.ph-dw-nav a:hover,.ph-dw-nav a:active{background:rgba(128,128,128,.08)}
.ph-dw-btns{padding:.75rem 1rem;display:flex;flex-direction:column;gap:.5rem;border-top:1px solid var(--color-border)}

@media(max-width:900px){
.ph-ul{display:none!important}
.ph-mb{display:none!important}
.ph-act .ph-cv,.ph-act .ph-cta{display:none!important}
.ph-bg{display:flex!important}
}
</style>

<!-- Header bar -->
<header class="ph" id="ph">
    <div class="ph-in">
        <a href="#" class="ph-logo">
            <?php if ($showLogo): ?>
                <?php if ($profile['avatar_url']): ?>
                    <img src="/uploads/<?= sanitize(preg_replace('/\.\.[\\/]/', '', $profile['avatar_url'])) ?>"
                         alt="Photo de profil de <?= sanitize($fullName) ?>"
                         width="32" height="32">
                <?php else: ?>
                    <span class="ph-logo-i" style="background:var(--color-primary)"><?= sanitize($initials) ?></span>
                <?php endif; ?>
            <?php endif; ?>
            <?php if ($showName): ?><span><?= sanitize($fullName) ?></span><?php endif; ?>
        </a>
        <div class="ph-r">
            <?php if ($showNav): ?>
            <nav aria-label="Navigation principale">
            <ul class="ph-ul">
                <?php foreach ($primaryNav as $s): ?>
                <li><a href="#<?= sanitize($s['section']) ?>" class="ph-a"><?= sanitize($s['title'] ?: ucfirst($s['section'])) ?></a></li>
                <?php endforeach; ?>
                <?php if (!empty($moreNav)): ?>
                <li class="ph-mb">
                    <button onclick="this.nextElementSibling.classList.toggle('open')"
                            aria-haspopup="true" aria-expanded="false"
                            aria-controls="ph-dd">
                        Plus <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <div class="ph-dd" id="ph-dd" role="menu">
                    <?php foreach ($moreNav as $s): ?>
                        <a href="#<?= sanitize($s['section']) ?>" role="menuitem" onclick="this.parentElement.classList.remove('open')"><?= sanitize($s['title'] ?: ucfirst($s['section'])) ?></a>
                    <?php endforeach; ?>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
            </nav>
            <?php endif; ?>
            <div class="ph-act">
                <?php if ($showDarkMode): ?>
                <button class="ph-dm" id="dark-mode-toggle" aria-label="Mode sombre">
                    <svg class="dm-sun" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/></svg>
                    <svg class="dm-moon" style="display:none" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z"/></svg>
                </button>
                <?php endif; ?>
                <?php if ($showCv): ?>
                <a href="/uploads/<?= sanitize($profile['cv_url']) ?>" target="_blank" class="btn btn-outline ph-cv">CV</a>
                <?php endif; ?>
                <?php if ($showCta): ?>
                <a href="<?= sanitize($ctaUrl) ?>" class="btn btn-primary ph-cta"><?= sanitize($ctaText) ?></a>
                <?php endif; ?>
            </div>
            <button class="ph-bg" id="ph-bg" aria-label="Menu">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile overlay (en dehors du header, scrollable) -->
<div class="ph-overlay" id="ph-ov"></div>
<div class="ph-dw" id="ph-dw">
    <div class="ph-dw-head">
        <span style="font-family:var(--font-heading);font-weight:700;font-size:1rem;color:var(--color-text)">Menu</span>
        <button class="ph-dw-close" id="ph-dw-close" aria-label="Fermer le menu">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" d="M6 18 18 6M6 6l12 12"/></svg>
        </button>
    </div>
    <nav class="ph-dw-nav" aria-label="Navigation mobile">
        <?php foreach ($navSections as $s): ?>
        <a href="#<?= sanitize($s['section']) ?>" class="ph-dw-link"><?= sanitize($s['title'] ?: ucfirst($s['section'])) ?></a>
        <?php endforeach; ?>
    </nav>
    <div class="ph-dw-btns">
        <?php if ($showCta): ?>
        <a href="<?= sanitize($ctaUrl) ?>" class="btn btn-primary ph-dw-link" style="width:100%;justify-content:center"><?= sanitize($ctaText) ?></a>
        <?php endif; ?>
        <?php if ($showCv): ?>
        <a href="/uploads/<?= sanitize($profile['cv_url']) ?>" target="_blank" class="btn btn-outline" style="width:100%;justify-content:center">Telecharger CV</a>
        <?php endif; ?>
    </div>
</div>

<script>
(function(){
    var bg=document.getElementById('ph-bg'),
        dw=document.getElementById('ph-dw'),
        ov=document.getElementById('ph-ov'),
        cl=document.getElementById('ph-dw-close');

    function openDrawer(){dw.classList.add('open');ov.classList.add('open');document.body.style.overflow='hidden';}
    function closeDrawer(){dw.classList.remove('open');ov.classList.remove('open');document.body.style.overflow='';}

    bg.addEventListener('click',openDrawer);
    cl.addEventListener('click',closeDrawer);
    ov.addEventListener('click',closeDrawer);

    // Fermer au clic sur un lien
    dw.querySelectorAll('.ph-dw-link').forEach(function(a){a.addEventListener('click',closeDrawer);});

    // Fermer dropdown desktop au clic exterieur
    document.addEventListener('click',function(e){
        var dd=document.getElementById('ph-dd');
        if(dd && !e.target.closest('.ph-mb')) dd.classList.remove('open');
    });
})();
</script>
