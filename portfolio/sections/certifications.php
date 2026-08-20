<?php
// Section Certifications
$stmt = $pdo->prepare("SELECT * FROM certifications WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$certs = $stmt->fetchAll();
if (empty($certs)) return;
$certLimit = 4;
$certTotal = count($certs);
?>
<section class="section" id="certifications">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Certifications') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="certs-grid">
            <?php foreach ($certs as $idx => $c):
                $hidden = ($idx >= $certLimit && $certTotal > $certLimit) ? 'style="display:none" data-showmore="cert"' : '';
            ?>
                <div class="card cert-card anim" <?= $hidden ?>>
                    <div class="cert-icon"><svg style="width:24px;height:24px;color:var(--color-primary)" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"/></svg></div>
                    <div>
                        <p class="cert-name"><?= sanitize($c['name']) ?></p>
                        <p class="cert-issuer"><?= sanitize($c['issuer']) ?></p>
                        <p class="cert-date"><?= sanitize($c['issue_date']) ?><?= $c['no_expiry'] ? ' — Permanent' : ($c['expiry_date'] ? ' — Expire: ' . sanitize($c['expiry_date']) : '') ?></p>
                        <?php if ($c['credential_url']): ?>
                            <a href="<?= sanitize($c['credential_url']) ?>" target="_blank" rel="noopener" style="font-size:0.75rem;color:var(--color-primary);font-weight:500;margin-top:0.375rem;display:inline-block">Verifier &rarr;</a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php if ($certTotal > $certLimit): ?>
            <div style="text-align:center;margin-top:2rem">
                <button data-showmore-btn="cert" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.625rem 1.5rem;border-radius:9999px;border:1px solid var(--color-border);background:var(--color-card-bg);color:var(--color-primary);font-size:0.875rem;font-weight:600;cursor:pointer;transition:background 0.2s,color 0.2s" >
                    <span>Voir les <?= $certTotal - $certLimit ?> autres</span>
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>
