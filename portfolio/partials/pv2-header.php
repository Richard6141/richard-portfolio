<?php
// pv2-header.php · En-tête : mega-menu Services (desktop) + menu mobile soigné.
// Variables : $h_logo, $fullName, $h_mailto, $h_phone, $h_email, $pdo, $userId.
$navHome = $navHome ?? '/';
$h_wa = !empty($h_phone) ? preg_replace('/\D/', '', $h_phone) : '';

// Services groupés en 3 colonnes pour le mega-menu
$hdrCols = ['Sites & e-commerce' => [], 'Applications & automatisation' => [], 'Conseil & croissance' => []];
try {
    $stmtH = $pdo->prepare("SELECT title FROM services WHERE user_id = ? ORDER BY sort_order ASC");
    $stmtH->execute([$userId]);
    foreach ($stmtH->fetchAll() as $hs) {
        $t = mb_strtolower($hs['title']);
        $item = ['title' => $hs['title'], 'slug' => generateSlug($hs['title'])];
        if (preg_match('/seo|r[ée]f[ée]renc|audit|[ée]tude|projet|digital|formation|conseil|marketing/u', $t)) {
            $hdrCols['Conseil & croissance'][] = $item;
        } elseif (preg_match('/app|application|automat|\bia\b|saas|api|dashboard|mobile|bot/u', $t)) {
            $hdrCols['Applications & automatisation'][] = $item;
        } else {
            $hdrCols['Sites & e-commerce'][] = $item;
        }
    }
} catch (\Throwable $e) {}
$hdrColIcons = ['Sites & e-commerce' => 'site web', 'Applications & automatisation' => 'application web', 'Conseil & croissance' => 'référencement seo'];
$hasMega = array_filter($hdrCols);
?>
<header id="pv2-hdr"><div class="wrap nav">
  <a href="/" class="logo" aria-label="Richard Technologies"><?php if (!empty($h_logo)): ?><img src="<?= $h_logo ?>" alt="Richard Technologies" width="113" height="60" fetchpriority="high"><?php else: ?><span class="dot"></span><?= sanitize($fullName) ?><?php endif; ?></a>

  <nav class="nav-links" aria-label="Navigation principale">
    <a href="/">Accueil</a>
    <a href="/a-propos/">À propos</a>
    <div class="nav-item has-mega">
      <a href="/services/">Services<span class="chev"></span></a>
      <?php if ($hasMega): ?>
      <div class="mega">
        <div class="mega-inner">
          <?php foreach ($hdrCols as $colTitle => $items): if (!$items) continue; ?>
          <div class="mega-col">
            <div class="mega-col-head"><span class="mic"><?= pv2_icon($hdrColIcons[$colTitle]) ?></span><?= sanitize($colTitle) ?></div>
            <?php foreach ($items as $it): ?>
              <a href="/services/<?= $it['slug'] ?>"><?= pv2_icon($it['title']) ?><span><?= sanitize($it['title']) ?></span></a>
            <?php endforeach; ?>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="mega-foot">
          <a href="/services/" class="mega-all">Voir tous les services</a>
          <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander un devis</a>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <a href="/realisations/">Réalisations</a>
    <a href="/blog/">Blog</a>
  </nav>

  <div class="nav-right">
    <?php if (!empty($h_phone)): ?><a class="nav-phone" href="tel:<?= sanitize(preg_replace('/\s+/', '', $h_phone)) ?>"><span class="ph-ic"><svg class="ic" viewBox="0 0 24 24"><path d="M5 4h3l1.5 4-2 1.5a11 11 0 0 0 5 5l1.5-2 4 1.5V18a2 2 0 0 1-2 2A15 15 0 0 1 4 6a2 2 0 0 1 1-2Z"/></svg></span><?= sanitize($h_phone) ?></a><?php endif; ?>
    <a href="<?= sanitize($h_mailto) ?>" class="btn">Devis gratuit</a>
  </div>

  <button class="burger" id="pv2-burger" aria-label="Ouvrir le menu" aria-expanded="false"><span></span><span></span><span></span></button>
</div>

<!-- Menu mobile -->
<div class="m-menu" id="pv2-mmenu" aria-hidden="true">
  <a class="m-link" href="/">Accueil</a>
  <a class="m-link" href="/a-propos/">À propos</a>
  <a class="m-link" href="/services/">Services</a>
  <a class="m-link" href="/realisations/">Réalisations</a>
  <a class="m-link" href="/blog/">Blog</a>
  <div class="m-contact">
    <?php if ($h_wa): ?><a class="m-contact-line" href="https://wa.me/<?= $h_wa ?>" target="_blank" rel="noopener"><span class="mci" style="color:#25d366"><svg class="ic" viewBox="0 0 24 24"><path d="M20 11.5a8 8 0 0 1-11.8 7L4 19.5l1.1-4A8 8 0 1 1 20 11.5Z"/></svg></span><?= sanitize($h_phone) ?></a><?php endif; ?>
    <?php if (!empty($h_email)): ?><a class="m-contact-line" href="mailto:<?= sanitize($h_email) ?>"><span class="mci"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg></span><?= sanitize($h_email) ?></a><?php endif; ?>
  </div>
  <a href="<?= sanitize($h_mailto) ?>" class="btn m-cta">Démarrer un projet</a>
  <p class="m-note">Devis gratuit · Sans engagement · Réponse rapide</p>
</div>
</header>
