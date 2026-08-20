<?php
// Section A propos
$hasStats = ($profile['stat_1_value'] ?? '') !== '';
?>
<section class="section" id="about">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'A propos') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>

        <div style="display:grid;grid-template-columns:1fr;gap:3rem;align-items:start" class="anim">
            <?php if ($profile['bio_long'] ?? $about['content'] ?? ''): ?>
                <div class="card" style="padding:2rem">
                    <div style="line-height:1.8;font-size:1rem">
                        <?= $profile['bio_long'] ?? $about['content'] ?? '' ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($hasStats): ?>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:1.5rem;margin-top:2.5rem">
                <?php for ($i = 1; $i <= 4; $i++):
                    $val = $profile["stat_{$i}_value"] ?? '';
                    $label = $profile["stat_{$i}_label"] ?? '';
                    if ($val === '') continue;
                ?>
                    <div class="card anim" style="text-align:center;padding:1.5rem">
                        <p style="font-size:2rem;font-weight:800;color:var(--color-primary);font-family:var(--font-heading)" class="<?= $appearance['counter_enabled'] ? 'counter' : '' ?>" data-target="<?= sanitize($val) ?>"><?= sanitize($val) ?></p>
                        <p style="font-size:0.875rem;opacity:0.6;margin-top:0.25rem"><?= sanitize($label) ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
