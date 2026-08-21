<?php
// Section Experiences
$stmt = $pdo->prepare("SELECT * FROM experiences WHERE user_id = ? ORDER BY sort_order ASC, start_date DESC");
$stmt->execute([$userId]);
$experiences = $stmt->fetchAll();
if (empty($experiences)) return;

$contractLabels = ['cdi'=>'CDI','cdd'=>'CDD','freelance'=>'Freelance','stage'=>'Stage','alternance'=>'Alternance','benevolat'=>'Benevolat','autre'=>'Autre'];
$workLabels = ['onsite'=>'Presentiel','remote'=>'Teletravail','hybrid'=>'Hybride'];
$months = ['','Jan','Fev','Mar','Avr','Mai','Juin','Juil','Aout','Sep','Oct','Nov','Dec'];
$expLimit = 3;
$expTotal = count($experiences);
?>
<section class="section" id="experiences">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Experiences') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="timeline">
            <?php foreach ($experiences as $idx => $exp):
                $kp = json_decode($exp['key_points'] ?? '[]', true) ?: [];
                $sd = explode('-', $exp['start_date']);
                $startFmt = ($months[(int)($sd[1]??0)] ?? '') . ' ' . ($sd[0] ?? '');
                $endFmt = $exp['is_current'] ? 'Aujourd\'hui' : '';
                if (!$exp['is_current'] && $exp['end_date']) {
                    $ed = explode('-', $exp['end_date']);
                    $endFmt = ($months[(int)($ed[1]??0)] ?? '') . ' ' . ($ed[0] ?? '');
                }
                $hidden = ($idx >= $expLimit && $expTotal > $expLimit) ? 'style="display:none" data-showmore="exp"' : '';
            ?>
                <div class="timeline-item anim" <?= $hidden ?>>
                    <div class="timeline-dot <?= $exp['is_current'] ? 'current' : '' ?>"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div>
                                <div class="timeline-title"><?= sanitize($exp['job_title']) ?></div>
                                <div class="timeline-company"><?= sanitize($exp['company_name']) ?></div>
                            </div>
                        </div>
                        <div class="timeline-meta">
                            <span><?= sanitize($startFmt . ', ' . $endFmt) ?></span>
                            <?php if ($exp['location']): ?><span><?= sanitize($exp['location']) ?></span><?php endif; ?>
                            <?php if ($exp['work_type']): ?><span><?= sanitize($workLabels[$exp['work_type']] ?? '') ?></span><?php endif; ?>
                            <?php if ($exp['contract_type']): ?>
                                <span class="timeline-badge" style="background:var(--color-primary);color:#fff"><?= sanitize($contractLabels[$exp['contract_type']] ?? '') ?></span>
                            <?php endif; ?>
                            <?php if ($exp['is_current']): ?>
                                <span class="timeline-badge" style="background:#10b98122;color:#059669">En poste</span>
                            <?php endif; ?>
                        </div>
                        <?php if ($exp['description']): ?>
                            <div style="font-size:0.9rem;opacity:0.8;margin-bottom:0.75rem"><?= $exp['description'] ?></div>
                        <?php endif; ?>
                        <?php if (!empty($kp)): ?>
                            <ul style="list-style:none;font-size:0.875rem">
                                <?php foreach ($kp as $point): ?>
                                    <li style="padding:0.125rem 0;display:flex;gap:0.5rem;align-items:start">
                                        <span style="color:var(--color-primary);font-weight:700">•</span>
                                        <?= sanitize($point) ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if ($expTotal > $expLimit): ?>
            <div style="text-align:center;margin-top:2rem">
                <button data-showmore-btn="exp" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.625rem 1.5rem;border-radius:9999px;border:1px solid var(--color-border);background:var(--color-card-bg);color:var(--color-primary);font-size:0.875rem;font-weight:600;cursor:pointer;transition:background 0.2s,color 0.2s" >
                    <span>Voir les <?= $expTotal - $expLimit ?> autres</span>
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>
