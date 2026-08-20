<?php
// ============================================================
// Template: Creative — Hero plein ecran, sections alternees
// ============================================================

// Charger les donnees
$stmt = $pdo->prepare("SELECT * FROM experiences WHERE user_id = ? ORDER BY sort_order ASC, start_date DESC");
$stmt->execute([$userId]); $experiences = $stmt->fetchAll();
foreach ($experiences as &$e) $e['key_points'] = json_decode($e['key_points'] ?? '[]', true) ?: [];

$stmt = $pdo->prepare("SELECT * FROM education WHERE user_id = ? ORDER BY sort_order ASC, start_year DESC");
$stmt->execute([$userId]); $educations = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM skill_categories WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]); $skillCats = $stmt->fetchAll();
$stmt = $pdo->prepare("SELECT * FROM skills WHERE user_id = ? ORDER BY category_id, sort_order ASC");
$stmt->execute([$userId]); $allSkills = $stmt->fetchAll();
$skillsByCat = []; foreach ($allSkills as $s) $skillsByCat[$s['category_id'] ?? 0][] = $s;
$catMap = []; foreach ($skillCats as $c) $catMap[$c['id']] = $c;

$stmt = $pdo->prepare("SELECT * FROM services WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]); $services = $stmt->fetchAll();
foreach ($services as &$s) $s['features'] = json_decode($s['features'] ?? '[]', true) ?: [];

$stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? AND status = 'published' ORDER BY is_featured DESC, sort_order ASC");
$stmt->execute([$userId]); $projects = $stmt->fetchAll();
foreach ($projects as &$p) { $p['technologies'] = json_decode($p['technologies'] ?? '[]', true) ?: []; $p['gallery'] = json_decode($p['gallery'] ?? '[]', true) ?: []; }

$stmt = $pdo->prepare("SELECT * FROM testimonials WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC");
$stmt->execute([$userId]); $testimonials = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM certifications WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]); $certifications = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM languages WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]); $langs = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM awards WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]); $awards = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE user_id = ? AND status = 'published' ORDER BY published_at DESC LIMIT 3");
$stmt->execute([$userId]); $blogPosts = $stmt->fetchAll();
foreach ($blogPosts as &$bp) $bp['tags'] = json_decode($bp['tags'] ?? '[]', true) ?: [];

$levelLabels = ['native'=>'Natif','fluent'=>'Courant','advanced'=>'Avance','intermediate'=>'Intermediaire','beginner'=>'Debutant'];
$contractLabels = ['cdi'=>'CDI','cdd'=>'CDD','freelance'=>'Freelance','stage'=>'Stage','alternance'=>'Alternance','benevolat'=>'Benevolat','autre'=>'Autre'];
$months = ['','Jan','Fev','Mar','Avr','Mai','Juin','Juil','Aout','Sep','Oct','Nov','Dec'];

$visMap = [];
foreach ($sections as $s) $visMap[$s['section']] = $s;

$animatedTitles = json_decode($hero['title_animated'] ?? '[]', true) ?: [];
?>

<link rel="stylesheet" href="/assets/css/template-creative.css">

<div class="tpl-creative">

<!-- ======== HERO PLEIN ECRAN ======== -->
<section class="tpl-hero" id="hero">
    <div class="tpl-hero-bg-pattern"></div>
    <div class="tpl-hero-content">
        <?php if ($profile['is_available'] && $profile['availability_text']): ?>
            <div class="tpl-hero-label"><?= sanitize($profile['availability_text']) ?></div>
        <?php endif; ?>

        <?php if ($profile['avatar_url']): ?>
            <img src="/uploads/<?= sanitize($profile['avatar_url']) ?>" alt="<?= sanitize($fullName) ?>" class="tpl-hero-avatar">
        <?php endif; ?>

        <h1 class="tpl-hero-name"><?= sanitize($fullName) ?></h1>

        <?php if (!empty($animatedTitles) && $appearance['typewriter_enabled']): ?>
            <p class="tpl-hero-title" id="typewriter-target" data-titles='<?= sanitize(json_encode($animatedTitles)) ?>'></p>
        <?php elseif ($profile['profession']): ?>
            <p class="tpl-hero-title"><?= sanitize($profile['profession']) ?></p>
        <?php endif; ?>

        <?php if ($profile['bio_short']): ?>
            <p class="tpl-hero-bio"><?= sanitize($profile['bio_short']) ?></p>
        <?php endif; ?>

        <div class="tpl-hero-actions">
            <?php if ($hero['cta_primary_text'] ?? ''): ?>
                <a href="<?= sanitize($hero['cta_primary_url'] ?? '#contact') ?>" class="tpl-hero-btn tpl-hero-btn-primary"><?= sanitize($hero['cta_primary_text']) ?></a>
            <?php endif; ?>
            <?php if ($hero['cta_secondary_text'] ?? ''): ?>
                <a href="<?= sanitize($hero['cta_secondary_url'] ?? '#projects') ?>" class="tpl-hero-btn tpl-hero-btn-outline"><?= sanitize($hero['cta_secondary_text']) ?></a>
            <?php endif; ?>
            <?php if ($profile['cv_url'] ?? ''): ?>
                <a href="/uploads/<?= sanitize($profile['cv_url']) ?>" target="_blank" class="tpl-hero-btn tpl-hero-btn-outline">Telecharger CV</a>
            <?php endif; ?>
        </div>

        <?php if (!empty($socialLinks)): ?>
            <div class="tpl-hero-social">
                <?php foreach ($socialLinks as $link): ?>
                    <a href="<?= sanitize($link['url']) ?>" target="_blank" rel="noopener" title="<?= sanitize($link['label'] ?? $link['platform']) ?>"><?= getSocialIcon($link['platform'], 16) ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="tpl-hero-scroll">
        <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="#fff" stroke-width="2"><path stroke-linecap="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
    </div>
</section>

<!-- ======== ABOUT ======== -->
<?php if (isset($visMap['about'])): ?>
<section class="tpl-section" id="about">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['about']['title'] ?? 'A propos') ?></h2><p><?= sanitize($visMap['about']['subtitle'] ?? '') ?></p></div>
        <div class="tpl-about-split">
            <div>
                <?php if ($profile['bio_long'] ?? ''): ?>
                    <div class="tpl-about-text"><?= $profile['bio_long'] ?></div>
                <?php endif; ?>
            </div>
            <div>
                <?php if ($profile['stat_1_value'] ?? ''): ?>
                    <div class="tpl-about-stats">
                        <?php for ($i = 1; $i <= 4; $i++): if ($profile["stat_{$i}_value"] ?? ''): ?>
                            <div class="tpl-about-stat">
                                <div class="tpl-about-stat-value counter" data-target="<?= sanitize($profile["stat_{$i}_value"]) ?>"><?= sanitize($profile["stat_{$i}_value"]) ?></div>
                                <div class="tpl-about-stat-label"><?= sanitize($profile["stat_{$i}_label"]) ?></div>
                            </div>
                        <?php endif; endfor; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== EXPERIENCES ======== -->
<?php if (!empty($experiences) && isset($visMap['experiences'])): ?>
<section class="tpl-section" id="experiences">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['experiences']['title'] ?? 'Experiences') ?></h2></div>
        <div class="tpl-timeline-modern">
            <?php foreach ($experiences as $idx => $exp):
                $sd = explode('-', $exp['start_date']);
                $startFmt = ($months[(int)($sd[1]??0)] ?? '') . ' ' . ($sd[0] ?? '');
                $endFmt = $exp['is_current'] ? 'Aujourd\'hui' : '';
                if (!$exp['is_current'] && $exp['end_date']) { $ed = explode('-', $exp['end_date']); $endFmt = ($months[(int)($ed[1]??0)] ?? '') . ' ' . ($ed[0] ?? ''); }
                $kp = is_array($exp['key_points']) ? $exp['key_points'] : (json_decode($exp['key_points'] ?? '[]', true) ?: []);
                $hidden = ($idx >= 3) ? 'style="display:none" data-showmore="exp"' : '';
            ?>
                <div class="tpl-timeline-item anim" <?= $hidden ?>>
                    <div class="tpl-timeline-dot <?= $exp['is_current'] ? 'current' : '' ?>"></div>
                    <div class="tpl-timeline-card">
                        <div style="display:flex;align-items:start;justify-content:space-between;gap:1rem;flex-wrap:wrap">
                            <div>
                                <h3 style="font-weight:700;font-size:1.05rem;color:var(--color-text)"><?= sanitize($exp['job_title']) ?></h3>
                                <p style="color:var(--color-primary);font-weight:600;font-size:0.9rem"><?= sanitize($exp['company_name']) ?></p>
                            </div>
                            <div style="text-align:right">
                                <p style="font-size:0.8rem;opacity:0.6"><?= sanitize($startFmt . ' — ' . $endFmt) ?></p>
                                <p style="font-size:0.75rem;opacity:0.5"><?= sanitize($exp['location'] ?? '') ?></p>
                            </div>
                        </div>
                        <?php if ($exp['description']): ?>
                            <div style="font-size:0.875rem;opacity:0.75;margin-top:0.75rem;line-height:1.7"><?= $exp['description'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($kp)): ?>
                            <ul style="list-style:none;margin-top:0.5rem;font-size:0.85rem">
                                <?php foreach ($kp as $point): ?>
                                    <li style="padding:0.15rem 0;display:flex;gap:0.5rem"><span style="color:var(--color-primary)">•</span><?= sanitize($point) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if ($exp['contract_type']): ?>
                            <span style="display:inline-block;margin-top:0.5rem;padding:0.2rem 0.6rem;border-radius:6px;font-size:0.7rem;font-weight:700;background:var(--color-primary);color:#fff"><?= sanitize($contractLabels[$exp['contract_type']] ?? '') ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if (count($experiences) > 3): ?>
            <div style="text-align:center;margin-top:2rem">
                <button data-showmore-btn="exp" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.625rem 1.5rem;border-radius:9999px;border:1px solid var(--color-border);background:var(--color-card-bg);color:var(--color-primary);font-size:0.875rem;font-weight:600;cursor:pointer">
                    <span>Voir les <?= count($experiences) - 3 ?> autres</span>
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- ======== EDUCATION ======== -->
<?php if (!empty($educations) && isset($visMap['education'])): ?>
<section class="tpl-section" id="education">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['education']['title'] ?? 'Formation') ?></h2></div>
        <div class="tpl-timeline-modern">
            <?php foreach ($educations as $edu): ?>
                <div class="tpl-timeline-item anim">
                    <div class="tpl-timeline-dot <?= $edu['is_current'] ? 'current' : '' ?>"></div>
                    <div class="tpl-timeline-card">
                        <div style="display:flex;align-items:start;justify-content:space-between;gap:1rem;flex-wrap:wrap">
                            <div>
                                <h3 style="font-weight:700;font-size:1.05rem"><?= sanitize($edu['degree']) ?></h3>
                                <p style="color:var(--color-primary);font-weight:600;font-size:0.9rem"><?= sanitize($edu['institution']) ?></p>
                            </div>
                            <p style="font-size:0.8rem;opacity:0.5"><?= (int)$edu['start_year'] ?> — <?= $edu['is_current'] ? 'En cours' : (int)($edu['end_year'] ?? '') ?></p>
                        </div>
                        <?php if ($edu['grade']): ?><span style="display:inline-block;margin-top:0.5rem;padding:0.2rem 0.6rem;border-radius:6px;font-size:0.7rem;font-weight:700;background:var(--color-accent);color:#fff"><?= sanitize($edu['grade']) ?></span><?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== SKILLS ======== -->
<?php if (!empty($allSkills) && isset($visMap['skills'])): ?>
<section class="tpl-section" id="skills">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['skills']['title'] ?? 'Competences') ?></h2></div>
        <div class="tpl-skills-cats">
            <?php foreach ($skillsByCat as $catId => $catSkills): ?>
                <div class="tpl-skill-cat-card anim">
                    <h3 class="tpl-skill-cat-title">
                        <?php if (isset($catMap[$catId])): ?><?= sanitize(($catMap[$catId]['icon'] ?? '') . ' ' . $catMap[$catId]['name']) ?><?php else: ?>Autres<?php endif; ?>
                    </h3>
                    <?php foreach ($catSkills as $sk): ?>
                        <div style="margin-bottom:0.875rem">
                            <div style="display:flex;justify-content:space-between;font-size:0.85rem;font-weight:600;margin-bottom:0.3rem">
                                <span><?= sanitize($sk['name']) ?></span>
                                <span style="opacity:0.5"><?= (int)$sk['level'] ?>%</span>
                            </div>
                            <div style="height:6px;background:var(--color-border);border-radius:3px;overflow:hidden">
                                <div style="height:100%;border-radius:3px;background:<?= sanitize($sk['color'] ?: 'var(--color-primary)') ?>;width:<?= (int)$sk['level'] ?>%;transition:width 1s ease-out"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== SERVICES ======== -->
<?php if (!empty($services) && isset($visMap['services'])): ?>
<section class="tpl-section" id="services">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['services']['title'] ?? 'Services') ?></h2></div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem">
            <?php foreach ($services as $svc): ?>
                <div class="anim" style="background:var(--color-card-bg);border:1px solid var(--color-border);border-radius:16px;padding:2rem;text-align:center;transition:transform 0.2s,box-shadow 0.2s;position:relative">
                    <?php if ($svc['is_featured']): ?><div style="position:absolute;top:-1px;right:1.5rem;background:var(--color-accent);color:#fff;padding:0.2rem 0.75rem;border-radius:0 0 8px 8px;font-size:0.65rem;font-weight:700;text-transform:uppercase">Populaire</div><?php endif; ?>
                    <div style="font-size:2.5rem;margin-bottom:0.75rem"><?= sanitize($svc['icon'] ?: '🔧') ?></div>
                    <h3 style="font-weight:700;font-size:1.05rem;margin-bottom:0.35rem"><?= sanitize($svc['title']) ?></h3>
                    <?php if ($svc['price']): ?><p style="color:var(--color-primary);font-weight:600;font-size:0.9rem;margin-bottom:0.75rem"><?= sanitize($svc['price']) ?></p><?php endif; ?>
                    <p style="font-size:0.85rem;opacity:0.65;line-height:1.6"><?= sanitize($svc['description'] ?? '') ?></p>
                    <?php if (!empty($svc['features'])): ?>
                        <ul style="list-style:none;text-align:left;margin-top:1rem;font-size:0.8rem">
                            <?php foreach ($svc['features'] as $f): ?>
                                <li style="padding:0.2rem 0;display:flex;gap:0.4rem"><span style="color:#10b981;font-weight:700">✓</span> <?= sanitize($f) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== PROJECTS ======== -->
<?php if (!empty($projects) && isset($visMap['projects'])): ?>
<section class="tpl-section" id="projects">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['projects']['title'] ?? 'Realisations') ?></h2></div>
        <div class="tpl-projects-masonry">
            <?php foreach ($projects as $proj): ?>
                <div class="tpl-project-card-creative anim">
                    <div style="aspect-ratio:16/10;background:var(--color-border);overflow:hidden;position:relative">
                        <?php if ($proj['image_url']): ?><img src="/uploads/<?= sanitize($proj['image_url']) ?>" alt="" style="width:100%;height:100%;object-fit:cover" loading="lazy"><?php endif; ?>
                        <?php if ($proj['badge_text']): ?><span style="position:absolute;top:0.75rem;left:0.75rem;padding:0.2rem 0.6rem;border-radius:9999px;font-size:0.65rem;font-weight:700;color:#fff;background:<?= sanitize($proj['badge_color'] ?: '#6b7280') ?>"><?= sanitize($proj['badge_text']) ?></span><?php endif; ?>
                    </div>
                    <div style="padding:1.25rem">
                        <h3 style="font-weight:700;font-size:1rem;margin-bottom:0.25rem"><?= sanitize($proj['title']) ?></h3>
                        <p style="font-size:0.8rem;opacity:0.5;margin-bottom:0.5rem"><?= sanitize(implode(' · ', array_filter([$proj['category'], $proj['year']]))) ?></p>
                        <?php if ($proj['description_short']): ?><p style="font-size:0.85rem;opacity:0.7;line-height:1.6;margin-bottom:0.75rem"><?= sanitize($proj['description_short']) ?></p><?php endif; ?>
                        <?php if (!empty($proj['technologies'])): ?>
                            <div style="display:flex;flex-wrap:wrap;gap:0.35rem">
                                <?php foreach (array_slice($proj['technologies'], 0, 5) as $t): ?>
                                    <span style="padding:0.15rem 0.5rem;background:var(--color-primary);color:#fff;border-radius:4px;font-size:0.65rem;opacity:0.85"><?= sanitize($t) ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($proj['link_live']): ?><a href="<?= sanitize($proj['link_live']) ?>" target="_blank" style="display:inline-block;margin-top:0.75rem;font-size:0.8rem;color:var(--color-primary);font-weight:600">Voir le projet →</a><?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== TESTIMONIALS ======== -->
<?php if (!empty($testimonials) && isset($visMap['testimonials'])): ?>
<section class="tpl-section" id="testimonials">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['testimonials']['title'] ?? 'Temoignages') ?></h2></div>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:1.5rem">
            <?php foreach ($testimonials as $t): ?>
                <div class="anim" style="background:var(--color-card-bg);border:1px solid var(--color-border);border-radius:16px;padding:2rem">
                    <?php if ($t['rating']): ?>
                        <div style="display:flex;gap:2px;margin-bottom:0.75rem">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <svg width="18" height="18" fill="<?= $i <= (int)$t['rating'] ? '#f59e0b' : '#e5e7eb' ?>" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                    <p style="font-size:0.9rem;font-style:italic;opacity:0.75;line-height:1.7;margin-bottom:1.25rem">"<?= sanitize($t['content']) ?>"</p>
                    <div style="display:flex;align-items:center;gap:0.75rem">
                        <div style="width:44px;height:44px;border-radius:50%;background:var(--color-primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:1.1rem;flex-shrink:0"><?= mb_strtoupper(mb_substr($t['author_name'], 0, 1)) ?></div>
                        <div>
                            <p style="font-weight:700;font-size:0.875rem"><?= sanitize($t['author_name']) ?></p>
                            <p style="font-size:0.75rem;opacity:0.5"><?= sanitize(implode(' — ', array_filter([$t['author_role'], $t['author_company']]))) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== CERTIFICATIONS ======== -->
<?php if (!empty($certifications) && isset($visMap['certifications'])): ?>
<section class="tpl-section" id="certifications">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['certifications']['title'] ?? 'Certifications') ?></h2></div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1.25rem">
            <?php foreach ($certifications as $c): ?>
                <div class="anim" style="background:var(--color-card-bg);border:1px solid var(--color-border);border-radius:16px;padding:1.5rem;display:flex;align-items:start;gap:1rem">
                    <div style="width:48px;height:48px;border-radius:12px;background:var(--color-primary);opacity:0.1;display:flex;align-items:center;justify-content:center;flex-shrink:0"><svg style="width:24px;height:24px;color:var(--color-primary)" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/></svg></div>
                    <div>
                        <p style="font-weight:700;font-size:0.9rem"><?= sanitize($c['name']) ?></p>
                        <p style="font-size:0.8rem;opacity:0.6"><?= sanitize($c['issuer']) ?></p>
                        <p style="font-size:0.7rem;opacity:0.4;margin-top:0.25rem"><?= sanitize($c['issue_date']) ?></p>
                        <?php if ($c['credential_url']): ?><a href="<?= sanitize($c['credential_url']) ?>" target="_blank" style="font-size:0.75rem;color:var(--color-primary);font-weight:600;margin-top:0.25rem;display:inline-block">Verifier →</a><?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== LANGUAGES ======== -->
<?php if (!empty($langs) && isset($visMap['languages'])): ?>
<section class="tpl-section" id="languages">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['languages']['title'] ?? 'Langues') ?></h2></div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:1.25rem">
            <?php foreach ($langs as $l): ?>
                <div class="anim" style="background:var(--color-card-bg);border:1px solid var(--color-border);border-radius:16px;padding:1.25rem;display:flex;align-items:center;gap:1rem">
                    <span style="font-size:2rem"><?= $l['flag_emoji'] ?? '🌍' ?></span>
                    <div style="flex:1">
                        <p style="font-weight:600;font-size:0.9rem"><?= sanitize($l['name']) ?></p>
                        <p style="font-size:0.75rem;opacity:0.5"><?= sanitize($levelLabels[$l['level']] ?? $l['level']) ?></p>
                        <div style="height:4px;background:var(--color-border);border-radius:2px;margin-top:0.375rem"><div style="height:100%;border-radius:2px;background:var(--color-primary);width:<?= (int)$l['level_percent'] ?>%"></div></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== BLOG ======== -->
<?php if (!empty($blogPosts) && isset($visMap['blog'])): ?>
<section class="tpl-section" id="blog">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['blog']['title'] ?? 'Blog') ?></h2></div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(300px,1fr));gap:1.5rem">
            <?php foreach ($blogPosts as $post): ?>
                <a href="<?= sanitize($post['external_url'] ?: '#') ?>" <?= $post['external_url'] ? 'target="_blank"' : '' ?> class="anim" style="background:var(--color-card-bg);border:1px solid var(--color-border);border-radius:16px;overflow:hidden;text-decoration:none;color:inherit;transition:transform 0.2s">
                    <?php if ($post['cover_image']): ?><div style="aspect-ratio:16/9;overflow:hidden"><img src="/uploads/<?= sanitize($post['cover_image']) ?>" alt="" style="width:100%;height:100%;object-fit:cover" loading="lazy"></div><?php endif; ?>
                    <div style="padding:1.25rem">
                        <h3 style="font-weight:700;font-size:1rem;margin-bottom:0.35rem"><?= sanitize($post['title']) ?></h3>
                        <?php if ($post['summary']): ?><p style="font-size:0.85rem;opacity:0.6;line-height:1.6"><?= sanitize($post['summary']) ?></p><?php endif; ?>
                        <div style="display:flex;gap:0.75rem;margin-top:0.5rem;font-size:0.75rem;opacity:0.4">
                            <?php if ($post['reading_time']): ?><span><?= (int)$post['reading_time'] ?> min</span><?php endif; ?>
                            <?php if ($post['published_at']): ?><span><?= sanitize(substr($post['published_at'], 0, 10)) ?></span><?php endif; ?>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ======== CONTACT ======== -->
<?php if (isset($visMap['contact'])): ?>
<section class="tpl-section" id="contact">
    <div class="tpl-section-inner">
        <div class="tpl-section-header"><h2><?= sanitize($visMap['contact']['title'] ?? 'Contact') ?></h2></div>
        <div class="tpl-contact-split">
            <div>
                <?php if ($contactInfo['email_public'] ?? ''): ?>
                    <div class="tpl-contact-info-card"><div class="tpl-contact-icon"><svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75"/></svg></div><div><p style="font-weight:600;font-size:0.85rem">Email</p><a href="mailto:<?= sanitize($contactInfo['email_public']) ?>" style="font-size:0.85rem;color:var(--color-primary)"><?= sanitize($contactInfo['email_public']) ?></a></div></div>
                <?php endif; ?>
                <?php if ($contactInfo['phone'] ?? ''): ?>
                    <div class="tpl-contact-info-card"><div class="tpl-contact-icon"><svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372"/></svg></div><div><p style="font-weight:600;font-size:0.85rem">Telephone</p><a href="tel:<?= sanitize($contactInfo['phone']) ?>" style="font-size:0.85rem;color:var(--color-primary)"><?= sanitize($contactInfo['phone']) ?></a></div></div>
                <?php endif; ?>
                <?php if (($contactInfo['city'] ?? '') || ($contactInfo['country'] ?? '')): ?>
                    <div class="tpl-contact-info-card"><div class="tpl-contact-icon"><svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg></div><div><p style="font-weight:600;font-size:0.85rem">Localisation</p><p style="font-size:0.85rem"><?= sanitize(implode(', ', array_filter([$contactInfo['city'], $contactInfo['country']]))) ?></p></div></div>
                <?php endif; ?>
                <?php if ($contactInfo['calendly_url'] ?? ''): ?>
                    <a href="<?= sanitize($contactInfo['calendly_url']) ?>" target="_blank" class="tpl-hero-btn tpl-hero-btn-outline" style="color:var(--color-primary);border-color:var(--color-primary);margin-top:0.5rem">Prendre rendez-vous</a>
                <?php endif; ?>
            </div>
            <?php if ($contactInfo['form_enabled'] ?? true): ?>
                <div>
                    <form class="contact-form" id="contact-form" onsubmit="return submitContactForm(event, <?= $userId ?>)">
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem" class="form-group">
                            <div><label>Nom *</label><input type="text" name="name" required maxlength="255"></div>
                            <div><label>Email *</label><input type="email" name="email" required maxlength="255"></div>
                        </div>
                        <div class="form-group"><label>Sujet</label><input type="text" name="subject" maxlength="255"></div>
                        <div class="form-group"><label>Message *</label><textarea name="message" rows="5" required></textarea></div>
                        <div class="hp-field"><input type="text" name="website" tabindex="-1" autocomplete="off"></div>
                        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;border-radius:12px" id="contact-submit">Envoyer le message</button>
                        <div id="contact-feedback" style="margin-top:1rem;text-align:center;font-size:0.875rem"></div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

</div><!-- /tpl-creative -->

<!-- Footer -->
<footer class="tpl-creative-footer">
    <p class="tpl-creative-footer-name"><?= sanitize($fullName) ?></p>
    <?php if ($profile['profession']): ?><p style="opacity:0.6;font-size:0.9rem"><?= sanitize($profile['profession']) ?></p><?php endif; ?>
    <?php if (!empty($socialLinks)): ?>
        <div style="display:flex;gap:0.75rem;justify-content:center;margin:1.25rem 0">
            <?php foreach ($socialLinks as $link): ?>
                <a href="<?= sanitize($link['url']) ?>" target="_blank" rel="noopener" style="width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;color:inherit;font-size:0.7rem;font-weight:700;text-decoration:none"><?= getSocialIcon($link['platform'], 16) ?></a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <p style="font-size:0.75rem;opacity:0.4">© <?= date('Y') ?> <?= sanitize($fullName) ?>. Tous droits reserves.</p>
</footer>
