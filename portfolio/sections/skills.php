<?php
// Section Competences
$stmt = $pdo->prepare("SELECT * FROM skill_categories WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$categories = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM skills WHERE user_id = ? ORDER BY category_id, sort_order ASC");
$stmt->execute([$userId]);
$allSkills = $stmt->fetchAll();
if (empty($allSkills)) return;

$skillsByCategory = [];
foreach ($allSkills as $s) {
    $catId = $s['category_id'] ?? 0;
    $skillsByCategory[$catId][] = $s;
}
$catMap = [];
foreach ($categories as $c) $catMap[$c['id']] = $c;
?>
<section class="section" id="skills">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Competences') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>

        <?php foreach ($skillsByCategory as $catId => $skills):
            $catName = $catMap[$catId]['name'] ?? 'Autres';
            $catIcon = $catMap[$catId]['icon'] ?? '';
        ?>
            <div class="skills-category anim">
                <h3 class="skills-category-title"><?= $catIcon ? sanitize($catIcon) . ' ' : '' ?><?= sanitize($catName) ?></h3>
                <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:1rem">
                    <?php foreach ($skills as $s):
                        $color = $s['color'] ?: 'var(--color-primary)';
                        $displayType = $s['display_type'] ?? 'bar';
                    ?>
                        <?php if ($displayType === 'bar'): ?>
                            <div class="skill-bar-wrap">
                                <div class="skill-bar-header">
                                    <span class="skill-bar-name"><?= sanitize($s['name']) ?></span>
                                    <span class="skill-bar-level"><?= (int)$s['level'] ?>%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-bar-fill" style="width:<?= (int)$s['level'] ?>%;background:<?= sanitize($color) ?>"></div>
                                </div>
                            </div>
                        <?php elseif ($displayType === 'circle'): ?>
                            <div class="skill-circle">
                                <div style="position:relative;width:48px;height:48px;flex-shrink:0">
                                    <svg viewBox="0 0 36 36" style="width:48px;height:48px;transform:rotate(-90deg)">
                                        <circle cx="18" cy="18" r="15.9" class="skill-circle-bg"/>
                                        <circle cx="18" cy="18" r="15.9" class="skill-circle-fill" stroke="<?= sanitize($color) ?>" stroke-dasharray="<?= (int)$s['level'] ?>, 100"/>
                                    </svg>
                                    <span class="skill-circle-value" style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:0.6875rem;font-weight:700"><?= (int)$s['level'] ?></span>
                                </div>
                                <span style="font-weight:600;font-size:0.875rem"><?= sanitize($s['name']) ?></span>
                            </div>
                        <?php elseif ($displayType === 'stars'): ?>
                            <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.5rem">
                                <span style="font-weight:600;font-size:0.875rem"><?= sanitize($s['name']) ?></span>
                                <div class="skill-stars">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <svg class="skill-star" fill="<?= $i <= round($s['level']/20) ? sanitize($color) : '#e5e7eb' ?>" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        <?php elseif ($displayType === 'tags'): ?>
                            <span class="skill-tag" style="background:<?= sanitize($color) ?>"><?= sanitize($s['name']) ?></span>
                        <?php elseif ($displayType === 'dots'): ?>
                            <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.5rem">
                                <span style="font-weight:600;font-size:0.875rem;min-width:100px"><?= sanitize($s['name']) ?></span>
                                <div style="display:flex;gap:4px">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <div style="width:10px;height:10px;border-radius:50%;background:<?= $i <= round($s['level']/20) ? sanitize($color) : '#e5e7eb' ?>"></div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
