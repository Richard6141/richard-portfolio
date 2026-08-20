<?php
// Section Projets
$stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? AND status = 'published' ORDER BY is_featured DESC, sort_order ASC");
$stmt->execute([$userId]);
$projects = $stmt->fetchAll();
if (empty($projects)) return;
foreach ($projects as &$p) {
    $p['technologies'] = json_decode($p['technologies'] ?? '[]', true) ?: [];
    $p['gallery'] = json_decode($p['gallery'] ?? '[]', true) ?: [];
}

$projectCategories = array_values(array_unique(array_filter(array_column($projects, 'category'))));
$projLimit = 4;
$projTotal = count($projects);
?>
<section class="section" id="projects">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Realisations') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>

        <?php if (count($projectCategories) > 1): ?>
            <div class="projects-filters anim">
                <button class="projects-filter-btn active" data-filter="all">Tous</button>
                <?php foreach ($projectCategories as $cat): ?>
                    <button class="projects-filter-btn" data-filter="<?= sanitize($cat) ?>"><?= sanitize($cat) ?></button>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="projects-grid" id="projects-grid">
            <?php foreach ($projects as $idx => $proj):
                $hidden = ($idx >= $projLimit && $projTotal > $projLimit) ? 'style="display:none" data-showmore="proj"' : '';
            ?>
                <div class="card project-card anim" data-category="<?= sanitize($proj['category'] ?? '') ?>" <?= $hidden ?>
                     data-project='<?= sanitize(json_encode([
                         'title' => $proj['title'],
                         'description' => $proj['description_long'] ?: $proj['description_short'],
                         'image' => $proj['image_url'] ? '/uploads/' . $proj['image_url'] : '',
                         'gallery' => array_map(fn($g) => '/uploads/' . $g, $proj['gallery']),
                         'category' => $proj['category'],
                         'client' => $proj['client_name'],
                         'year' => $proj['year'],
                         'duration' => $proj['duration'],
                         'technologies' => $proj['technologies'],
                         'link_live' => $proj['link_live'],
                         'link_github' => $proj['link_github'],
                         'link_demo' => $proj['link_demo'],
                         'badge_text' => $proj['badge_text'],
                         'badge_color' => $proj['badge_color'],
                     ])) ?>'>
                    <div class="project-thumb">
                        <?php if ($proj['image_url']): ?>
                            <img src="/uploads/<?= sanitize($proj['image_url']) ?>" alt="<?= sanitize($proj['title']) ?>" loading="lazy">
                        <?php endif; ?>
                        <?php if ($proj['badge_text']): ?>
                            <span style="position:absolute;top:0.75rem;left:0.75rem;padding:0.25rem 0.75rem;border-radius:9999px;font-size:0.6875rem;font-weight:700;color:#fff;background:<?= sanitize($proj['badge_color'] ?: '#6b7280') ?>"><?= sanitize($proj['badge_text']) ?></span>
                        <?php endif; ?>
                        <div class="project-overlay">
                            <button class="btn btn-primary" onclick="openProjectModal(this.closest('.project-card'))">Details</button>
                            <?php if ($proj['link_live']): ?>
                                <a href="<?= sanitize($proj['link_live']) ?>" target="_blank" class="btn" style="background:#fff;color:#333" onclick="event.stopPropagation()">Voir</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title"><?= sanitize($proj['title']) ?></h3>
                        <p class="project-meta"><?= sanitize(implode(' · ', array_filter([$proj['category'], $proj['year']]))) ?></p>
                        <?php if (!empty($proj['technologies'])): ?>
                            <div class="project-tags">
                                <?php foreach (array_slice($proj['technologies'], 0, 4) as $t): ?>
                                    <span><?= sanitize($t) ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if ($projTotal > $projLimit): ?>
            <div style="text-align:center;margin-top:2rem">
                <button data-showmore-btn="proj" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.625rem 1.5rem;border-radius:9999px;border:1px solid var(--color-border);background:var(--color-card-bg);color:var(--color-primary);font-size:0.875rem;font-weight:600;cursor:pointer;transition:background 0.2s,color 0.2s" >
                    <span>Voir les <?= $projTotal - $projLimit ?> autres</span>
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>
<div id="project-modal-container"></div>
