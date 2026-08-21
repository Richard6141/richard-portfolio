<?php
// ============================================================
// Template: Developer, Sidebar gauche + contenu droite
// ============================================================

// Charger les donnees necessaires
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
foreach ($projects as &$p) $p['technologies'] = json_decode($p['technologies'] ?? '[]', true) ?: [];

$stmt = $pdo->prepare("SELECT * FROM testimonials WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC");
$stmt->execute([$userId]); $testimonials = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM certifications WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]); $certifications = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM languages WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]); $langs = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE user_id = ? AND status = 'published' ORDER BY published_at DESC LIMIT 3");
$stmt->execute([$userId]); $blogPosts = $stmt->fetchAll();

$levelLabels = ['native'=>'Natif','fluent'=>'Courant','advanced'=>'Avance','intermediate'=>'Intermediaire','beginner'=>'Debutant'];
$contractLabels = ['cdi'=>'CDI','cdd'=>'CDD','freelance'=>'Freelance','stage'=>'Stage','alternance'=>'Alternance','benevolat'=>'Benevolat','autre'=>'Autre'];
$months = ['','Jan','Fev','Mar','Avr','Mai','Juin','Juil','Aout','Sep','Oct','Nov','Dec'];

// Section visibility map
$visMap = [];
foreach ($sections as $s) $visMap[$s['section']] = $s;
?>

<link rel="stylesheet" href="/assets/css/template-developer.css">

<div class="tpl-developer">

<!-- ======== SIDEBAR ======== -->
<aside class="tpl-sidebar">
    <div class="tpl-sidebar-inner">
        <?php if ($profile['avatar_url']): ?>
            <img src="/uploads/<?= sanitize($profile['avatar_url']) ?>" alt="" class="tpl-sidebar-avatar">
        <?php endif; ?>
        <div class="tpl-sidebar-name"><?= sanitize($fullName) ?></div>
        <div class="tpl-sidebar-title"><?= sanitize($profile['profession'] ?? '') ?></div>

        <!-- Info -->
        <div class="tpl-sidebar-section">
            <div class="tpl-sidebar-section-title">Informations</div>
            <?php if ($contactInfo['email_public'] ?? ''): ?>
                <div class="tpl-sidebar-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75"/></svg> <?= sanitize($contactInfo['email_public']) ?></div>
            <?php endif; ?>
            <?php if ($contactInfo['phone'] ?? ''): ?>
                <div class="tpl-sidebar-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372"/></svg> <?= sanitize($contactInfo['phone']) ?></div>
            <?php endif; ?>
            <?php if ($profile['location_city'] ?? ''): ?>
                <div class="tpl-sidebar-item"><svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg> <?= sanitize($profile['location_city']) ?>, <?= sanitize($profile['location_country'] ?? '') ?></div>
            <?php endif; ?>
        </div>

        <!-- Languages -->
        <?php if (!empty($langs) && isset($visMap['languages'])): ?>
        <div class="tpl-sidebar-section">
            <div class="tpl-sidebar-section-title">Langues</div>
            <?php foreach ($langs as $l): ?>
                <div class="tpl-lang-row">
                    <span><?= $l['flag_emoji'] ?? '🌍' ?></span>
                    <span><?= sanitize($l['name']) ?></span>
                    <div class="tpl-lang-dots" style="margin-left:auto">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <div class="tpl-lang-dot <?= $i <= round($l['level_percent'] / 20) ? 'filled' : 'empty' ?>"></div>
                        <?php endfor; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Skills (top 6) -->
        <?php if (!empty($allSkills) && isset($visMap['skills'])): ?>
        <div class="tpl-sidebar-section">
            <div class="tpl-sidebar-section-title">Competences</div>
            <?php foreach (array_slice($allSkills, 0, 8) as $sk): ?>
                <div class="tpl-skill-row">
                    <div class="tpl-skill-name"><span><?= sanitize($sk['name']) ?></span><span style="opacity:0.5"><?= (int)$sk['level'] ?>%</span></div>
                    <div class="tpl-skill-bar"><div class="tpl-skill-fill" style="width:<?= (int)$sk['level'] ?>%"></div></div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <!-- Social -->
        <?php if (!empty($socialLinks)): ?>
        <div class="tpl-sidebar-social">
            <?php foreach ($socialLinks as $link): ?>
                <a href="<?= sanitize($link['url']) ?>" target="_blank" rel="noopener" title="<?= sanitize($link['label'] ?? $link['platform']) ?>"><?= getSocialIcon($link['platform'], 14) ?></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if ($profile['cv_url'] ?? ''): ?>
            <a href="/uploads/<?= sanitize($profile['cv_url']) ?>" target="_blank" class="tpl-sidebar-cta">Telecharger CV</a>
        <?php endif; ?>
    </div>
</aside>

<!-- ======== MAIN ======== -->
<main class="tpl-main">
    <div class="tpl-main-inner">

        <!-- About -->
        <?php if (isset($visMap['about'])): ?>
        <div class="tpl-section" id="about">
            <h2 class="tpl-section-title"><?= sanitize($visMap['about']['title'] ?? 'A propos') ?></h2>
            <?php if ($profile['bio_long'] ?? ''): ?>
                <div style="font-size:0.95rem;line-height:1.8;opacity:0.8;margin-top:1rem"><?= $profile['bio_long'] ?></div>
            <?php endif; ?>
            <?php if ($profile['stat_1_value'] ?? ''): ?>
                <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:1rem;margin-top:2rem">
                    <?php for ($i = 1; $i <= 4; $i++): if ($profile["stat_{$i}_value"] ?? ''): ?>
                        <div class="tpl-service-card" style="padding:1.25rem">
                            <div style="font-size:2rem;font-weight:900;color:var(--color-primary);font-family:var(--font-heading)"><?= sanitize($profile["stat_{$i}_value"]) ?></div>
                            <div style="font-size:0.8rem;opacity:0.5"><?= sanitize($profile["stat_{$i}_label"]) ?></div>
                        </div>
                    <?php endif; endfor; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Services -->
        <?php if (!empty($services) && isset($visMap['services'])): ?>
        <div class="tpl-section" id="services">
            <h2 class="tpl-section-title"><?= sanitize($visMap['services']['title'] ?? 'Services') ?></h2>
            <div class="tpl-services-grid" style="margin-top:1.5rem">
                <?php foreach ($services as $svc): ?>
                    <div class="tpl-service-card">
                        <div class="tpl-service-icon"><?= sanitize($svc['icon'] ?: '🔧') ?></div>
                        <div class="tpl-service-title"><?= sanitize($svc['title']) ?></div>
                        <div class="tpl-service-desc"><?= sanitize($svc['description'] ?? '') ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Experiences -->
        <?php if (!empty($experiences) && isset($visMap['experiences'])): ?>
        <div class="tpl-section" id="experiences">
            <h2 class="tpl-section-title"><?= sanitize($visMap['experiences']['title'] ?? 'Experiences') ?></h2>
            <div class="tpl-exp-grid" style="margin-top:1.5rem">
                <?php foreach ($experiences as $exp):
                    $sd = explode('-', $exp['start_date']);
                    $startFmt = ($months[(int)($sd[1]??0)] ?? '') . ' ' . ($sd[0] ?? '');
                    $endFmt = $exp['is_current'] ? 'Present' : '';
                    if (!$exp['is_current'] && $exp['end_date']) { $ed = explode('-', $exp['end_date']); $endFmt = ($months[(int)($ed[1]??0)] ?? '') . ' ' . ($ed[0] ?? ''); }
                ?>
                    <div class="tpl-exp-card">
                        <div class="tpl-exp-title"><?= sanitize($exp['job_title']) ?></div>
                        <div class="tpl-exp-company"><?= sanitize($exp['company_name']) ?></div>
                        <div class="tpl-exp-meta"><?= sanitize($startFmt . ', ' . $endFmt) ?> · <?= sanitize($exp['location'] ?? '') ?></div>
                        <?php if ($exp['contract_type']): ?><span class="tpl-exp-badge"><?= sanitize($contractLabels[$exp['contract_type']] ?? '') ?></span><?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Education -->
        <?php if (!empty($educations) && isset($visMap['education'])): ?>
        <div class="tpl-section" id="education">
            <h2 class="tpl-section-title"><?= sanitize($visMap['education']['title'] ?? 'Formation') ?></h2>
            <div class="tpl-exp-grid" style="margin-top:1.5rem">
                <?php foreach ($educations as $edu): ?>
                    <div class="tpl-exp-card">
                        <div class="tpl-exp-title"><?= sanitize($edu['degree']) ?></div>
                        <div class="tpl-exp-company"><?= sanitize($edu['institution']) ?></div>
                        <div class="tpl-exp-meta"><?= (int)$edu['start_year'] ?>, <?= $edu['is_current'] ? 'En cours' : (int)($edu['end_year'] ?? '') ?></div>
                        <?php if ($edu['grade']): ?><span class="tpl-exp-badge" style="background:var(--color-accent)"><?= sanitize($edu['grade']) ?></span><?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Projects -->
        <?php if (!empty($projects) && isset($visMap['projects'])): ?>
        <div class="tpl-section" id="projects">
            <h2 class="tpl-section-title"><?= sanitize($visMap['projects']['title'] ?? 'Realisations') ?></h2>
            <div class="tpl-projects-grid" style="margin-top:1.5rem">
                <?php foreach ($projects as $proj): ?>
                    <div class="tpl-project-card">
                        <div class="tpl-project-thumb">
                            <?php if ($proj['image_url']): ?><img src="/uploads/<?= sanitize($proj['image_url']) ?>" alt="" loading="lazy"><?php endif; ?>
                        </div>
                        <div class="tpl-project-info">
                            <div class="tpl-project-title"><?= sanitize($proj['title']) ?></div>
                            <div class="tpl-project-meta"><?= sanitize($proj['category'] ?? '') ?> · <?= $proj['year'] ?? '' ?></div>
                            <?php if ($proj['link_live']): ?><a href="<?= sanitize($proj['link_live']) ?>" target="_blank" style="font-size:0.75rem;color:var(--color-primary);font-weight:600;margin-top:0.5rem;display:inline-block">Voir →</a><?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Testimonials -->
        <?php if (!empty($testimonials) && isset($visMap['testimonials'])): ?>
        <div class="tpl-section" id="testimonials">
            <h2 class="tpl-section-title"><?= sanitize($visMap['testimonials']['title'] ?? 'Temoignages') ?></h2>
            <div class="tpl-testimonials-grid" style="margin-top:1.5rem">
                <?php foreach ($testimonials as $t): ?>
                    <div class="tpl-testimonial-card">
                        <?php if ($t['rating']): ?>
                            <div class="tpl-testimonial-stars">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <svg width="16" height="16" fill="<?= $i <= (int)$t['rating'] ? '#f59e0b' : '#e5e7eb' ?>" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <?php endfor; ?>
                            </div>
                        <?php endif; ?>
                        <p class="tpl-testimonial-text">"<?= sanitize($t['content']) ?>"</p>
                        <div class="tpl-testimonial-avatar"><?= mb_strtoupper(mb_substr($t['author_name'], 0, 1)) ?></div>
                        <p class="tpl-testimonial-name"><?= sanitize($t['author_name']) ?></p>
                        <p class="tpl-testimonial-role"><?= sanitize(implode(', ', array_filter([$t['author_role'], $t['author_company']]))) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Contact -->
        <?php if (isset($visMap['contact'])): ?>
        <div class="tpl-section" id="contact">
            <h2 class="tpl-section-title"><?= sanitize($visMap['contact']['title'] ?? 'Contact') ?></h2>
            <?php if ($contactInfo['form_enabled'] ?? true): ?>
                <div style="margin-top:1.5rem">
                    <form class="contact-form" id="contact-form" onsubmit="return submitContactForm(event, <?= $userId ?>)">
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem" class="form-group">
                            <div><label>Nom *</label><input type="text" name="name" required maxlength="255"></div>
                            <div><label>Email *</label><input type="email" name="email" required maxlength="255"></div>
                        </div>
                        <div class="form-group"><label>Sujet</label><input type="text" name="subject" maxlength="255"></div>
                        <div class="form-group"><label>Message *</label><textarea name="message" rows="5" required></textarea></div>
                        <div class="hp-field"><input type="text" name="website" tabindex="-1" autocomplete="off"></div>
                        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center" id="contact-submit">Envoyer</button>
                        <div id="contact-feedback" style="margin-top:1rem;text-align:center;font-size:0.875rem"></div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</main>

</div>

<!-- Footer -->
<div class="tpl-footer">
    <p style="font-weight:700;font-family:var(--font-heading)"><?= sanitize($fullName) ?></p>
    <p class="tpl-footer-copy" style="margin-top:0.5rem">© <?= date('Y') ?> <?= sanitize($fullName) ?></p>
</div>
