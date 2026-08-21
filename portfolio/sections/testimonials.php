<?php
// Section Temoignages
$stmt = $pdo->prepare("SELECT * FROM testimonials WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC");
$stmt->execute([$userId]);
$testimonials = $stmt->fetchAll();
if (empty($testimonials)) return;
?>
<section class="section" id="testimonials">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Temoignages') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="testimonials-grid">
            <?php foreach ($testimonials as $t): ?>
                <div class="card testimonial-card anim">
                    <?php if ($t['rating']): ?>
                        <div class="testimonial-stars">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <svg class="testimonial-star" fill="<?= $i <= (int)$t['rating'] ? '#f59e0b' : '#e5e7eb' ?>" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                    <p class="testimonial-content">&laquo; <?= sanitize($t['content']) ?> &raquo;</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="display:flex;align-items:center;justify-content:center;font-weight:700;color:var(--color-primary);background:var(--color-primary);opacity:0.1;font-size:1.125rem"><?= mb_strtoupper(mb_substr($t['author_name'], 0, 1)) ?></div>
                        <div>
                            <p class="testimonial-name"><?= sanitize($t['author_name']) ?></p>
                            <p class="testimonial-role"><?= sanitize(implode(', ', array_filter([$t['author_role'], $t['author_company']]))) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
