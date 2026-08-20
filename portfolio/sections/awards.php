<?php
// Section Prix
$stmt = $pdo->prepare("SELECT * FROM awards WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$awards = $stmt->fetchAll();
if (empty($awards)) return;
?>
<section class="section" id="awards">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Distinctions') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="awards-grid">
            <?php foreach ($awards as $a): ?>
                <div class="card award-card anim">
                    <p class="award-title"><?= sanitize($a['title']) ?></p>
                    <p class="award-issuer"><?= sanitize(implode(' — ', array_filter([$a['issuer'], $a['date']]))) ?></p>
                    <?php if ($a['description']): ?><p style="font-size:0.875rem;opacity:0.7;margin-top:0.5rem"><?= sanitize($a['description']) ?></p><?php endif; ?>
                    <?php if ($a['url']): ?><a href="<?= sanitize($a['url']) ?>" target="_blank" rel="noopener" style="font-size:0.8125rem;margin-top:0.5rem;display:inline-block;color:var(--color-primary)">En savoir plus &rarr;</a><?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
