<?php
// Section Formation
$stmt = $pdo->prepare("SELECT * FROM education WHERE user_id = ? ORDER BY sort_order ASC, start_year DESC");
$stmt->execute([$userId]);
$educations = $stmt->fetchAll();
if (empty($educations)) return;
$eduLimit = 3;
$eduTotal = count($educations);
?>
<section class="section" id="education">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Formation') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="timeline">
            <?php foreach ($educations as $idx => $edu):
                $hidden = ($idx >= $eduLimit && $eduTotal > $eduLimit) ? 'style="display:none" data-showmore="edu"' : '';
            ?>
                <div class="timeline-item anim" <?= $hidden ?>>
                    <div class="timeline-dot <?= $edu['is_current'] ? 'current' : '' ?>"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div>
                                <div class="timeline-title"><?= sanitize($edu['degree']) ?></div>
                                <div class="timeline-company"><?= sanitize($edu['institution']) ?></div>
                            </div>
                        </div>
                        <div class="timeline-meta">
                            <span><?= (int)$edu['start_year'] ?> — <?= $edu['is_current'] ? 'En cours' : ((int)($edu['end_year'] ?? '')) ?></span>
                            <?php if ($edu['field_of_study']): ?><span><?= sanitize($edu['field_of_study']) ?></span><?php endif; ?>
                            <?php if ($edu['location']): ?><span><?= sanitize($edu['location']) ?></span><?php endif; ?>
                            <?php if ($edu['grade']): ?>
                                <span class="timeline-badge" style="background:var(--color-accent);color:#fff"><?= sanitize($edu['grade']) ?></span>
                            <?php endif; ?>
                        </div>
                        <?php if ($edu['description']): ?>
                            <p style="font-size:0.9rem;opacity:0.8"><?= sanitize($edu['description']) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if ($eduTotal > $eduLimit): ?>
            <div style="text-align:center;margin-top:2rem">
                <button data-showmore-btn="edu" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.625rem 1.5rem;border-radius:9999px;border:1px solid var(--color-border);background:var(--color-card-bg);color:var(--color-primary);font-size:0.875rem;font-weight:600;cursor:pointer;transition:background 0.2s,color 0.2s" >
                    <span>Voir les <?= $eduTotal - $eduLimit ?> autres</span>
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>
