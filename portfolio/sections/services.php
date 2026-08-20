<?php
// Section Services
$stmt = $pdo->prepare("SELECT * FROM services WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$services = $stmt->fetchAll();
if (empty($services)) return;
foreach ($services as &$s) $s['features'] = json_decode($s['features'] ?? '[]', true) ?: [];
?>
<section class="section" id="services">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Services') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="services-grid">
            <?php foreach ($services as $svc): ?>
                <div class="card service-card anim <?= $svc['is_featured'] ? 'featured' : '' ?>">
                    <?php if ($svc['is_featured']): ?><div class="service-badge">Populaire</div><?php endif; ?>
                    <div class="service-icon"><?= sanitize($svc['icon'] ?: '🔧') ?></div>
                    <h3 class="service-title"><?= sanitize($svc['title']) ?></h3>
                    <?php if ($svc['price']): ?><p class="service-price"><?= sanitize($svc['price']) ?></p><?php endif; ?>
                    <?php if ($svc['description']): ?><p style="font-size:0.875rem;opacity:0.7;margin-bottom:1rem"><?= sanitize($svc['description']) ?></p><?php endif; ?>
                    <?php if (!empty($svc['features'])): ?>
                        <ul class="service-features">
                            <?php foreach ($svc['features'] as $f): ?>
                                <li><?= sanitize($f) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <?php if ($svc['cta_text']): ?>
                        <a href="<?= sanitize($svc['cta_url'] ?: '#contact') ?>" class="btn btn-primary" style="width:100%;justify-content:center"><?= sanitize($svc['cta_text']) ?></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
