<?php
// Section Langues
$stmt = $pdo->prepare("SELECT * FROM languages WHERE user_id = ? ORDER BY sort_order ASC");
$stmt->execute([$userId]);
$languages = $stmt->fetchAll();
if (empty($languages)) return;
$levelLabels = ['native'=>'Natif','fluent'=>'Courant','advanced'=>'Avance','intermediate'=>'Intermediaire','beginner'=>'Debutant'];
?>
<section class="section" id="languages">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Langues') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="languages-grid">
            <?php foreach ($languages as $lang): ?>
                <div class="card language-card anim">
                    <span class="language-flag"><?= $lang['flag_emoji'] ?: '🌍' ?></span>
                    <div style="flex:1">
                        <p class="language-name"><?= sanitize($lang['name']) ?></p>
                        <p class="language-level"><?= sanitize($levelLabels[$lang['level']] ?? $lang['level']) ?></p>
                        <div class="language-bar"><div class="language-bar-fill" style="width:<?= (int)$lang['level_percent'] ?>%"></div></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
