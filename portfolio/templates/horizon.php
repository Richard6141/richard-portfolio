<?php
// ============================================================
// Template "horizon" : page d accueil refonte (charbon + bronze)
// Inclus depuis portfolio/index.php (variables en scope :
// $pdo, $userId, $profile, $appearance, $hero, $contactInfo,
// $socialLinks, $fullName, $portfolioUrl, sanitize(), getSocialIcon()).
// ============================================================

// --- Données ---
$stmt = $pdo->prepare("SELECT * FROM services WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC LIMIT 9");
$stmt->execute([$userId]);
$h_services = $stmt->fetchAll();
$h_servicesTotal = (int) $pdo->query("SELECT COUNT(*) FROM services WHERE user_id = " . (int)$userId)->fetchColumn();

$stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ? AND status = 'published' ORDER BY is_featured DESC, sort_order ASC LIMIT 6");
$stmt->execute([$userId]);
$h_projects = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT * FROM testimonials WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC LIMIT 3");
$stmt->execute([$userId]);
$h_testimonials = $stmt->fetchAll();

$stmt = $pdo->prepare("SELECT title, slug, summary, cover_image, category, published_at FROM blog_posts WHERE user_id = ? AND status = 'published' AND (published_at IS NULL OR published_at <= NOW()) ORDER BY published_at DESC LIMIT 4");
$stmt->execute([$userId]);
$h_recent = $stmt->fetchAll();

$h_email = $contactInfo['email_public'] ?? '';
$h_phone = $contactInfo['phone'] ?? '';
$h_city  = $contactInfo['city'] ?? 'Cotonou';
$h_mailto = $h_email ? 'mailto:' . rawurlencode($h_email) . '?subject=' . rawurlencode('Demande de devis') : '#contact';
$h_lead  = $profile['bio_short'] ?? "Je conçois des sites, applications et automatisations qui font gagner du temps et des clients aux entreprises, du cadrage à la mise en ligne.";
$h_svcCount = max(count($h_services), 8);

// Icône SVG selon le titre du service (pas d'emoji)
if (!function_exists('pv2_icon')) {
    function pv2_icon(string $title): string {
        $t = mb_strtolower($title);
        $svg = function (string $p): string { return '<svg class="ic" viewBox="0 0 24 24">' . $p . '</svg>'; };
        if (str_contains($t, 'mobile') || str_contains($t, 'app') && str_contains($t, 'mobile')) return $svg('<rect x="7" y="3" width="10" height="18" rx="2"/><path d="M11 18h2"/>');
        if (str_contains($t, 'mobile')) return $svg('<rect x="7" y="3" width="10" height="18" rx="2"/><path d="M11 18h2"/>');
        if (str_contains($t, 'web') && (str_contains($t, 'app') || str_contains($t, 'application'))) return $svg('<rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M7 6.5h.01M10 6.5h.01"/>');
        if (str_contains($t, 'site') || str_contains($t, 'web')) return $svg('<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 2.5 15.3 0 18M12 3c-2.5 2.7-2.5 15.3 0 18"/>');
        if (str_contains($t, 'autom') || str_contains($t, 'bot') || str_contains($t, 'ia') || str_contains($t, 'intellig')) return $svg('<rect x="5" y="7" width="14" height="11" rx="2"/><path d="M12 7V4M9 12h.01M15 12h.01M9 15.5h6M2 12h2M20 12h2"/>');
        if (str_contains($t, 'form')) return $svg('<path d="M22 9 12 5 2 9l10 4 10-4Z"/><path d="M6 11v5c0 1 2.7 2.5 6 2.5s6-1.5 6-2.5v-5"/>');
        if (str_contains($t, 'audit') || str_contains($t, 'sécur') || str_contains($t, 'secur')) return $svg('<path d="M12 3l7 3v5c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3Z"/><path d="m9.5 11.5 1.7 1.7 3.3-3.4"/>');
        if (str_contains($t, 'digital') || str_contains($t, 'transform')) return $svg('<path d="M5 15c-1 2-1 4-1 4s2 0 4-1m-3-3c1-6 5-10 12-11 0 7-4 11-11 12l-1-1Z"/>');
        if (str_contains($t, 'étude') || str_contains($t, 'etude') || str_contains($t, 'projet') || str_contains($t, 'conseil') || str_contains($t, 'accompagn')) return $svg('<circle cx="12" cy="12" r="9"/><path d="m15.5 8.5-2 5-5 2 2-5 5-2Z"/>');
        return $svg('<circle cx="12" cy="12" r="9"/><path d="m9 12 2 2 4-4"/>');
    }
}
$h_initials = mb_strtoupper(mb_substr($profile['first_name'] ?? 'R', 0, 1) . mb_substr($profile['last_name'] ?? 'S', 0, 1));
// Logo de marque (Richard Technologies). Uploader l'image dans /assets/img/logo-rt.png
$h_logo = siteLogoUrl();
?>

<?php $navHome = ''; include __DIR__ . '/../partials/pv2-header.php'; ?>

<main id="main-content">

<!-- HERO -->
<section class="hero" id="top"><div class="wrap hero-grid">
  <div>
    <?php /* Hero : aucune classe .up ici, l'element LCP ne doit jamais demarrer a opacity:0 (LCP 4,2s -> ~1,4s). */ ?>
    <span class="eyebrow"><span class="pulse"></span><span class="mono"><?= sanitize($fullName) ?> · Disponible</span></span>
    <h1>Développeur web, mobile & <span class="hl">automatisation</span> <span class="rotator" id="pv2-rot" data-words='["au Bénin","à Cotonou","et ailleurs"]'>au Bénin</span></h1>
    <p class="lead"><?= sanitize($h_lead) ?></p>
    <div class="hero-cta">
      <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander un devis gratuit</a>
      <a href="/realisations/" class="btn btn-ghost">Voir mes réalisations</a>
    </div>
    <div class="stats">
      <div class="stat"><div class="n"><span class="ct" data-to="<?= (int)$h_svcCount ?>">0</span></div><div class="l">domaines d'expertise</div></div>
      <div class="stat"><div class="n">24h</div><div class="l">délai de réponse</div></div>
      <div class="stat"><div class="n"><span class="ct" data-to="100">0</span><span>%</span></div><div class="l">sur-mesure & SEO</div></div>
    </div>
  </div>
  <div class="hero-bento parallax" data-parallax="-0.05">
    <div class="hb card-id float">
      <div class="av"><?php if ($profile['avatar_url'] ?? ''): ?><img src="/api/thumb.php?src=<?= urlencode(preg_replace('/\.\.[\\/]/','',$profile['avatar_url'])) ?>&s=100" alt="<?= sanitize($fullName) ?>"><?php else: ?><?= sanitize($h_initials) ?><?php endif; ?></div>
      <div><b><?= sanitize($fullName) ?></b><small>Développeur freelance · <?= sanitize($h_city) ?></small></div>
    </div>
    <?php /* 20/08/2026 : affichait "+8 ans" alors que /a-propos annonce "plus de
       six ans". Deux faits contradictoires sur le meme domaine, ce qui abime la
       resolution d'entite pour Google comme pour les moteurs generatifs.
       Valeur confirmee par Richard : plus de six ans. Le bio_short en base a ete
       aligne par la migration 2026-08-20-anciennete-et-etudes-de-cas.sql. */ ?>
    <div class="hb acc float"><div class="k">+6 ans</div><div class="kv">d'expérience dev</div></div>
    <div class="hb float d"><div class="k">24h</div><div class="kv">délai de réponse</div></div>
  </div>
</div></section>

<div class="marquee"><div class="marquee-track">
  <span>&nbsp;PHP / Laravel&nbsp;&nbsp;·&nbsp;&nbsp;Java / Spring Boot&nbsp;&nbsp;·&nbsp;&nbsp;Node.js&nbsp;&nbsp;·&nbsp;&nbsp;React&nbsp;&nbsp;·&nbsp;&nbsp;Flutter&nbsp;&nbsp;·&nbsp;&nbsp;n8n&nbsp;&nbsp;·&nbsp;&nbsp;Make&nbsp;&nbsp;·&nbsp;&nbsp;WordPress&nbsp;&nbsp;·&nbsp;&nbsp;Django&nbsp;&nbsp;·&nbsp;&nbsp;MySQL&nbsp;&nbsp;·&nbsp;&nbsp;API REST&nbsp;&nbsp;·&nbsp;&nbsp;IA / Chatbots&nbsp;&nbsp;·&nbsp;&nbsp;</span>
  <span>&nbsp;PHP / Laravel&nbsp;&nbsp;·&nbsp;&nbsp;Java / Spring Boot&nbsp;&nbsp;·&nbsp;&nbsp;Node.js&nbsp;&nbsp;·&nbsp;&nbsp;React&nbsp;&nbsp;·&nbsp;&nbsp;Flutter&nbsp;&nbsp;·&nbsp;&nbsp;n8n&nbsp;&nbsp;·&nbsp;&nbsp;Make&nbsp;&nbsp;·&nbsp;&nbsp;WordPress&nbsp;&nbsp;·&nbsp;&nbsp;Django&nbsp;&nbsp;·&nbsp;&nbsp;MySQL&nbsp;&nbsp;·&nbsp;&nbsp;API REST&nbsp;&nbsp;·&nbsp;&nbsp;IA / Chatbots&nbsp;&nbsp;·&nbsp;&nbsp;</span>
</div></div>

<!-- FLUX: de la saisie manuelle au flux automatise -->
<section class="sect flux" id="flux"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">01</span> / Le principe</span>
    <h2>De la saisie manuelle au flux automatisé.</h2>
    <p>Vos outils existent déjà : un cahier, WhatsApp, un tableur. Le problème n'est pas leur absence, c'est qu'ils ne se parlent pas. Mon travail consiste à les relier, pas à tout remplacer.</p>
  </div>

  <div class="fx-scene rv">

    <article class="fx-step avant">
      <span class="fx-tag">Aujourd'hui</span>
      <div class="fx-media">
        <svg viewBox="0 0 260 190" role="img" aria-label="Un cahier, un téléphone WhatsApp et un tableur, sans lien entre eux">
          <g transform="translate(8 22) rotate(-7 48 59)">
            <rect x="0" y="0" width="96" height="118" rx="5" fill="#2f2f34" stroke="#4a4a51"/>
            <rect x="0" y="0" width="13" height="118" rx="5" fill="#26262b"/>
            <g stroke="#6b6b72" stroke-width="2" stroke-linecap="round"><path d="M4 16h10M4 34h10M4 52h10M4 70h10M4 88h10M4 106h10"/></g>
            <g stroke="#5c5c63" stroke-width="2" stroke-linecap="round"><path d="M24 24h58M24 40h64M24 56h44M24 72h62M24 88h38M24 104h54"/></g>
            <path d="M26 62c8-5 14 4 22-1s12 3 20-2" stroke="#8d867c" stroke-width="2.4" fill="none" stroke-linecap="round"/>
          </g>
          <text x="52" y="160" text-anchor="middle" class="fx-obj-l">CAHIER</text>
          <g transform="translate(112 6) rotate(5 32 66)">
            <rect x="0" y="0" width="64" height="132" rx="10" fill="#2f2f34" stroke="#4a4a51"/>
            <rect x="6" y="12" width="52" height="108" rx="4" fill="#26262b"/>
            <rect x="24" y="4" width="16" height="3" rx="1.5" fill="#4a4a51"/>
            <rect x="11" y="22" width="32" height="13" rx="6" fill="#3d5c47"/>
            <rect x="21" y="41" width="32" height="13" rx="6" fill="#4a4a51"/>
            <rect x="11" y="60" width="38" height="13" rx="6" fill="#3d5c47"/>
            <rect x="27" y="79" width="26" height="13" rx="6" fill="#4a4a51"/>
            <rect x="11" y="98" width="30" height="13" rx="6" fill="#3d5c47"/>
          </g>
          <text x="145" y="160" text-anchor="middle" class="fx-obj-l">WHATSAPP</text>
          <g transform="translate(186 30) rotate(9 34 51)">
            <rect x="0" y="0" width="68" height="102" rx="5" fill="#2f2f34" stroke="#4a4a51"/>
            <rect x="0" y="0" width="68" height="15" rx="5" fill="#3a3a40"/>
            <g stroke="#4a4a51" stroke-width="1"><path d="M0 15h68M0 32h68M0 49h68M0 66h68M0 83h68"/><path d="M23 15v87M46 15v87"/></g>
            <rect x="3" y="19" width="16" height="8" rx="2" fill="#5c5c63"/>
            <rect x="26" y="36" width="16" height="8" rx="2" fill="#5c5c63"/>
            <rect x="49" y="53" width="15" height="8" rx="2" fill="#5c5c63"/>
            <rect x="3" y="70" width="16" height="8" rx="2" fill="#5c5c63"/>
          </g>
          <text x="220" y="160" text-anchor="middle" class="fx-obj-l">TABLEUR</text>
          <g class="fx-broken" stroke="#5c5c63" stroke-width="2" stroke-linecap="round" fill="none">
            <path d="M104 78h6" stroke-dasharray="3 5"/><path d="M186 78h-6" stroke-dasharray="3 5"/>
            <path d="M112 73l7 6M119 73l-7 6"/><path d="M170 73l7 6M177 73l-7 6"/>
          </g>
        </svg>
      </div>
      <h3>Trois fois la même saisie</h3>
      <p>La commande arrive sur WhatsApp, le stock vit dans un cahier, la facture se fait ailleurs. Personne ne connaît le chiffre du jour.</p>
    </article>

    <svg class="fx-bridge" viewBox="0 0 80 24" aria-hidden="true">
      <path class="rail" d="M4 12h60"/><path class="head" d="M62 7l7 5-7 5"/>
      <circle class="pulse" cx="4" cy="12" r="3.4">
        <animate attributeName="cx" values="4;62" dur="2.4s" repeatCount="indefinite"/>
        <animate attributeName="opacity" values="0;1;1;0" dur="2.4s" repeatCount="indefinite"/>
      </circle>
    </svg>

    <article class="fx-step pont">
      <span class="fx-tag">Ce que je fais</span>
      <div class="fx-media">
        <svg viewBox="0 0 260 190" role="img" aria-label="Un workflow d'automatisation relie les trois sources à un traitement central">
          <g fill="none" stroke="rgba(200,146,74,.45)" stroke-width="2">
            <path id="fxp1" d="M56 44C100 44 100 95 124 95"/>
            <path id="fxp2" d="M56 95h68"/>
            <path id="fxp3" d="M56 146C100 146 100 95 124 95"/>
            <path id="fxp4" d="M172 95h34"/>
          </g>
          <g class="fx-node">
            <rect x="10" y="30" width="46" height="28" rx="6"/><text x="33" y="48" text-anchor="middle" class="fx-nl">MSG</text>
            <rect x="10" y="81" width="46" height="28" rx="6"/><text x="33" y="99" text-anchor="middle" class="fx-nl">DOC</text>
            <rect x="10" y="132" width="46" height="28" rx="6"/><text x="33" y="150" text-anchor="middle" class="fx-nl">SAISIE</text>
          </g>
          <rect x="124" y="72" width="48" height="46" rx="9" fill="var(--acc)"/>
          <g stroke="#1c1c1e" stroke-width="2.2" fill="none" stroke-linecap="round"><path d="M136 88h8M136 95h14M136 102h10"/></g>
          <circle cx="166" cy="79" r="4" fill="#1c1c1e"/>
          <rect x="206" y="79" width="46" height="32" rx="6" fill="none" stroke="var(--acc)" stroke-width="2"/>
          <text x="229" y="99" text-anchor="middle" class="fx-nl fx-nl-on">BASE</text>
          <circle class="pkt" r="3.6"><animateMotion dur="2.6s" repeatCount="indefinite"><mpath href="#fxp1"/></animateMotion></circle>
          <circle class="pkt" r="3.6"><animateMotion dur="2.6s" begin="0.6s" repeatCount="indefinite"><mpath href="#fxp2"/></animateMotion></circle>
          <circle class="pkt" r="3.6"><animateMotion dur="2.6s" begin="1.2s" repeatCount="indefinite"><mpath href="#fxp3"/></animateMotion></circle>
          <circle class="pkt" r="3.6"><animateMotion dur="1.6s" begin="1.8s" repeatCount="indefinite"><mpath href="#fxp4"/></animateMotion></circle>
          <text x="130" y="180" text-anchor="middle" class="fx-obj-l fx-obj-on">n8n / API</text>
        </svg>
      </div>
      <h3>On relie, on ne remplace pas</h3>
      <p>WhatsApp reste votre canal client. Ce qui y transite alimente désormais le stock et la facturation, sans ressaisie.</p>
    </article>

    <svg class="fx-bridge" viewBox="0 0 80 24" aria-hidden="true">
      <path class="rail" d="M4 12h60"/><path class="head" d="M62 7l7 5-7 5"/>
      <circle class="pulse" cx="4" cy="12" r="3.4">
        <animate attributeName="cx" values="4;62" dur="2.4s" begin="1.2s" repeatCount="indefinite"/>
        <animate attributeName="opacity" values="0;1;1;0" dur="2.4s" begin="1.2s" repeatCount="indefinite"/>
      </circle>
    </svg>

    <article class="fx-step apres">
      <span class="fx-tag">Après</span>
      <div class="fx-media">
        <svg viewBox="0 0 260 190" role="img" aria-label="Un tableau de bord unique affiche le stock, les encours et le chiffre du jour">
          <rect x="20" y="14" width="220" height="150" rx="10" fill="#2f2f34" stroke="var(--acc)" stroke-width="1.6"/>
          <path d="M20 24a10 10 0 0 1 10-10h200a10 10 0 0 1 10 10v14H20z" fill="#3a3a40"/>
          <circle cx="34" cy="26" r="3" fill="#5c5c63"/><circle cx="45" cy="26" r="3" fill="#5c5c63"/><circle cx="56" cy="26" r="3" fill="#5c5c63"/>
          <rect x="32" y="48" width="62" height="36" rx="6" fill="#26262b"/>
          <text x="63" y="65" text-anchor="middle" class="fx-kpi">1 240</text><text x="63" y="77" text-anchor="middle" class="fx-nl">STOCK</text>
          <rect x="99" y="48" width="62" height="36" rx="6" fill="#26262b"/>
          <text x="130" y="65" text-anchor="middle" class="fx-kpi">4</text><text x="130" y="77" text-anchor="middle" class="fx-nl">ENCOURS</text>
          <rect x="166" y="48" width="62" height="36" rx="6" fill="#26262b"/>
          <text x="197" y="65" text-anchor="middle" class="fx-kpi">CA</text><text x="197" y="77" text-anchor="middle" class="fx-nl">DU JOUR</text>
          <g class="fx-bars">
            <rect x="34" y="128" width="18" height="22" rx="3"/><rect x="58" y="118" width="18" height="32" rx="3"/>
            <rect x="82" y="108" width="18" height="42" rx="3"/><rect x="106" y="114" width="18" height="36" rx="3"/>
            <rect x="130" y="98" width="18" height="52" rx="3"/><rect x="154" y="90" width="18" height="60" rx="3"/>
            <rect x="178" y="80" width="18" height="70" rx="3"/><rect x="202" y="72" width="18" height="78" rx="3"/>
          </g>
          <path d="M32 150h196" stroke="#4a4a51" stroke-width="1.4"/>
          <text x="130" y="180" text-anchor="middle" class="fx-obj-l fx-obj-on">UNE SEULE SOURCE</text>
        </svg>
      </div>
      <h3>Une seule source de vérité</h3>
      <p>Le stock, les encours et le chiffre du jour se lisent à tout moment, par vous comme par votre équipe.</p>
    </article>

  </div>

  <div class="fx-gain rv">
    <div><div class="g-n"><span class="ct" data-to="3">0</span>&nbsp;saisies</div><div class="g-l">remplacées par une seule</div></div>
    <div><div class="g-n"><span class="ct" data-to="24">0</span>h</div><div class="g-l">pour obtenir un devis clair</div></div>
    <div><div class="g-n"><span class="ct" data-to="2">0</span>&nbsp;à 5 sem.</div><div class="g-l">avant le premier gain mesurable</div></div>
  </div>
</div></section>

<!-- SERVICES -->
<section class="sect" id="services"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">02</span> / Services</span>
    <h2>Tout votre numérique, un seul interlocuteur.</h2>
    <p>De la vitrine à l'automatisation : des solutions sur-mesure pensées pour des résultats concrets.</p>
  </div>
  <?php if (!empty($h_services)): ?>
  <div class="bento stg">
    <?php foreach ($h_services as $svc):
      $isFeat = (int)($svc['is_featured'] ?? 0) === 1;
      $desc = $svc['description'] ?? '';
      $feats = json_decode($svc['features'] ?? '[]', true) ?: [];
      $sUrl = '/services/' . generateSlug($svc['title'] ?? '');
    ?>
      <?php if ($isFeat): ?>
      <div class="svc featured">
        <div class="ico"><?= pv2_icon($svc['title'] ?? '') ?></div>
        <h3><?= sanitize($svc['title'] ?? '') ?></h3>
        <p><?= sanitize($desc) ?></p>
        <?php if (!empty($feats)): ?>
        <ul class="svc-feats">
          <?php foreach (array_slice($feats, 0, 4) as $f): ?><li><?= sanitize($f) ?></li><?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <div class="svc-foot">
          <?php if ($svc['price']): ?><span class="svc-price"><?= sanitize($svc['price']) ?></span><?php endif; ?>
          <a href="<?= $sUrl ?>" class="svc-cta">En savoir plus</a>
        </div>
      </div>
      <?php else: ?>
      <a class="svc" href="<?= $sUrl ?>">
        <div class="ico"><?= pv2_icon($svc['title'] ?? '') ?></div>
        <h3><?= sanitize($svc['title'] ?? '') ?></h3>
        <p><?= sanitize($desc) ?></p>
        <?php if ($svc['price']): ?><div class="svc-price-sm"><?= sanitize($svc['price']) ?></div><?php endif; ?>
        <div class="arrow">En savoir plus</div>
      </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <?php if ($h_servicesTotal > count($h_services)): ?>
  <div class="rv" style="text-align:center;margin-top:2rem">
    <a href="/services/" class="btn btn-ghost">Voir tous les services (<?= (int)$h_servicesTotal ?>)</a>
  </div>
  <?php endif; ?>
  <?php endif; ?>
</div></section>
<!-- PORTFOLIO -->
<section class="sect soft" id="portfolio"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">03</span> / Réalisations</span>
    <h2>Des projets pensés pour des résultats.</h2>
    <p>Un aperçu de mes travaux. D'autres projets sont en cours et seront bientôt publiés.</p>
  </div>
  <div class="pf-grid stg">
    <?php foreach ($h_projects as $proj):
      $img = $proj['image_url'] ? '/uploads/' . sanitize($proj['image_url']) : '';
      $cat = $proj['category'] ?? ($proj['badge_text'] ?? 'Projet');
      $pdesc = $proj['description_short'] ?? '';
    ?>
      <?php
      // 20/08/2026 : les cartes etaient des <article> inertes. Chaque projet a
      // desormais sa page /realisations/{slug} ; la carte y mene quand le slug
      // existe, et reste un <article> sinon (jamais de lien vers une 404).
      $pSlug = trim((string) ($proj['slug'] ?? ''));
      $balise = $pSlug !== '' ? 'a' : 'article';
      ?>
      <<?= $balise ?> class="pf"<?= $pSlug !== '' ? ' href="/realisations/' . sanitize($pSlug) . '"' : '' ?>>
        <div class="pf-thumb">
          <?php if ($img): ?><img src="<?= $img ?>" alt="<?= sanitize($proj['title']) ?>" loading="lazy">
          <?php endif; ?>
          <?php if ($cat): ?><span class="pf-tag"><?= sanitize($cat) ?></span><?php endif; ?>
        </div>
        <div class="pf-body">
          <h3><?= sanitize($proj['title']) ?></h3>
          <p><?= sanitize($pdesc) ?></p>
          <?php if ($proj['badge_text'] ?? ''): ?><div class="res"><?= sanitize($proj['badge_text']) ?></div><?php endif; ?>
          <?php if ($pSlug !== ''): ?><div class="arrow">Voir le projet</div><?php endif; ?>
        </div>
      </<?= $balise ?>>
    <?php endforeach; ?>
    <?php for ($i = count($h_projects); $i < 3; $i++): ?>
      <article class="pf soon">
        <div class="ico"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
        <b>Projet à venir</b>
        <span>Une nouvelle réalisation sera bientôt publiée ici.</span>
      </article>
    <?php endfor; ?>
  </div>
</div></section>

<!-- PROCESS -->
<section class="sect" id="process"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">04</span> / Méthode</span>
    <h2>De l'idée à la mise en ligne, en 4 étapes.</h2>
  </div>
  <div class="proc stg">
    <div class="step"><div class="sn">01</div><h3>Cadrage</h3><p>On clarifie le besoin, les objectifs et le budget. Devis transparent.</p></div>
    <div class="step"><div class="sn">02</div><h3>Design</h3><p>Maquettes et architecture validées avant le code.</p></div>
    <div class="step"><div class="sn">03</div><h3>Développement</h3><p>Code propre, testé, avec points d'avancement réguliers.</p></div>
    <div class="step"><div class="sn">04</div><h3>Lancement & suivi</h3><p>Mise en ligne, formation et maintenance.</p></div>
  </div>
</div></section>

<!-- WHY -->
<section class="sect soft"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">05</span> / Pourquoi moi</span>
    <h2>Un développeur, pas une boîte noire.</h2>
  </div>
  <div class="why-grid stg">
    <div class="why wide"><div class="ico"><svg class="ic" viewBox="0 0 24 24"><path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"/></svg></div><h3>Réactivité & interlocuteur unique</h3><p>Je réponds vite, en français, sans intermédiaire : vous parlez directement à celui qui code.</p></div>
    <div class="why"><div class="ico"><svg class="ic" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg></div><h3>SEO inclus</h3><p>Pensé pour Google dès le départ.</p></div>
    <div class="why"><div class="ico"><svg class="ic" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></div><h3>Paiement flexible</h3><p>Mobile Money, carte bancaire ou PayPal.</p></div>
    <div class="why"><div class="ico"><svg class="ic" viewBox="0 0 24 24"><path d="M14 7h5v5M19 7l-7 7-3-3-5 5"/></svg></div><h3>Code propre & évolutif</h3><p>Des bases saines pour grandir.</p></div>
    <div class="why wide"><div class="ico"><svg class="ic" viewBox="0 0 24 24"><path d="M4 12a8 8 0 0 1 8-8 8 8 0 0 1 8 8M20 12a8 8 0 0 1-8 8 8 8 0 0 1-8-8"/><path d="m16 8-1.5 4M8 16l1.5-4"/></svg></div><h3>Suivi & disponibilité internationale</h3><p>Maintenance, formation et améliorations continues. Basé à <?= sanitize($h_city) ?>, je travaille aussi à distance pour l'étranger.</p></div>
  </div>
</div></section>

<?php $h_maps = $contactInfo['google_maps_url'] ?? ''; ?>
<!-- TÉMOIGNAGES -->
<section class="sect"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">06</span> / Témoignages</span>
    <h2>Ils me font confiance.</h2>
  </div>
  <div class="tst-wrap">
  <?php if ($h_maps): ?>
  <a class="greviews rv" href="<?= sanitize($h_maps) ?>" target="_blank" rel="noopener">
    <span class="gicon"><svg viewBox="0 0 24 24" width="22" height="22"><path fill="#4285F4" d="M23 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.2a5.3 5.3 0 0 1-2.3 3.5v2.9h3.7C21.8 18.9 23 15.9 23 12.3z"/><path fill="#34A853" d="M12 24c3.1 0 5.7-1 7.6-2.8l-3.7-2.9c-1 .7-2.3 1.1-3.9 1.1-3 0-5.5-2-6.4-4.7H1.8v3C3.7 21.4 7.5 24 12 24z"/><path fill="#FBBC05" d="M5.6 14.7c-.2-.7-.4-1.4-.4-2.2s.1-1.5.4-2.2v-3H1.8A12 12 0 0 0 0 12.5c0 1.9.5 3.8 1.8 5.2l3.8-3z"/><path fill="#EA4335" d="M12 4.8c1.7 0 3.2.6 4.4 1.7l3.3-3.3C17.7 1.2 15.1 0 12 0 7.5 0 3.7 2.6 1.8 6.3l3.8 3C6.5 6.8 9 4.8 12 4.8z"/></svg></span>
    <span class="gtxt"><b>Avis Google</b><span class="gstars">★★★★★</span></span>
    <span class="gbtn">Lire ou laisser un avis</span>
  </a>
  <?php endif; ?>
  <?php if (!empty($h_testimonials)): ?>
  <div class="tst-grid stg">
    <?php foreach ($h_testimonials as $t):
      $role = implode(' · ', array_filter([$t['author_role'] ?? '', $t['author_company'] ?? '']));
      $rating = (int)($t['rating'] ?? 5); if ($rating < 1) $rating = 5;
      $photo = trim((string)($t['author_photo'] ?? ''));
    ?>
      <article class="tst">
        <div class="tst-top">
          <span class="tst-glogo"><svg viewBox="0 0 24 24" width="18" height="18"><path fill="#4285F4" d="M23 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.2a5.3 5.3 0 0 1-2.3 3.5v2.9h3.7C21.8 18.9 23 15.9 23 12.3z"/><path fill="#34A853" d="M12 24c3.1 0 5.7-1 7.6-2.8l-3.7-2.9c-1 .7-2.3 1.1-3.9 1.1-3 0-5.5-2-6.4-4.7H1.8v3C3.7 21.4 7.5 24 12 24z"/><path fill="#FBBC05" d="M5.6 14.7c-.2-.7-.4-1.4-.4-2.2s.1-1.5.4-2.2v-3H1.8A12 12 0 0 0 0 12.5c0 1.9.5 3.8 1.8 5.2l3.8-3z"/><path fill="#EA4335" d="M12 4.8c1.7 0 3.2.6 4.4 1.7l3.3-3.3C17.7 1.2 15.1 0 12 0 7.5 0 3.7 2.6 1.8 6.3l3.8 3C6.5 6.8 9 4.8 12 4.8z"/></svg>Google</span>
          <span class="tst-vtag"><svg viewBox="0 0 24 24" width="13" height="13"><circle cx="12" cy="12" r="11" fill="#16a34a"/><path d="m7 12 3.5 3.5L17 9" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>Vérifié</span>
        </div>
        <div class="tst-head">
          <span class="av"><?php if ($photo): ?><img src="<?= sanitize($photo) ?>" alt="<?= sanitize($t['author_name'] ?? '') ?>" loading="lazy"><?php else: ?><?= sanitize(mb_strtoupper(mb_substr($t['author_name'] ?? '?', 0, 1))) ?><?php endif; ?></span>
          <div class="who-i"><b><?= sanitize($t['author_name'] ?? '') ?></b><?php if ($role): ?><small><?= sanitize($role) ?></small><?php endif; ?></div>
        </div>
        <div class="stars"><?= str_repeat('★', $rating) . str_repeat('☆', 5 - $rating) ?></div>
        <p class="q"><?= sanitize($t['content'] ?? '') ?></p>
      </article>
    <?php endforeach; ?>
  </div>
  <?php else: ?>
  <p class="rv" style="color:var(--muted);max-width:560px;text-align:center">Les premiers retours clients arriveront bientôt ici. En attendant, découvrez mes réalisations ou demandez un devis gratuit.</p>
  <?php endif; ?>
  </div>
</div></section>

<?php if (!empty($h_recent)): ?>
<!-- DERNIÈRES RESSOURCES -->
<section class="sect"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">07</span> / Blog</span>
    <h2>Dernières ressources &amp; conseils.</h2>
    <p>Des articles pratiques sur le web, le SEO et le numérique pour faire croître votre activité.</p>
  </div>
  <div class="hblog-grid stg">
    <?php foreach ($h_recent as $r): $ri = $r['cover_image'] ? '/uploads/' . sanitize($r['cover_image']) : ''; ?>
      <a class="hblog" href="/blog/<?= sanitize($r['slug']) ?>">
        <?php if ($ri): ?><img class="ht" src="<?= $ri ?>" alt="<?= sanitize($r['title']) ?>" loading="lazy"><?php else: ?><span class="ht"></span><?php endif; ?>
        <div class="hb">
          <?php if ($r['category']): ?><span class="hc"><?= sanitize($r['category']) ?></span><?php endif; ?>
          <h3><?= sanitize(mb_strimwidth($r['title'], 0, 70, '…')) ?></h3>
          <small><?= $r['published_at'] ? date('d/m/Y', strtotime($r['published_at'])) : '' ?></small>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
  <div class="rv" style="text-align:center;margin-top:2rem"><a href="/blog/" class="btn btn-ghost">Voir tous les articles</a></div>
</div></section>
<?php endif; ?>

<!-- FAQ -->
<section class="sect soft" id="faq"><div class="wrap">
  <div class="sect-head rv">
    <span class="mono"><span class="tag-num">08</span> / Questions fréquentes</span>
    <h2>Ce qu'on me demande souvent.</h2>
  </div>
  <div class="faq stg">
    <details><summary>Combien coûte un site web au Bénin ?</summary><p>Une vitrine démarre autour de 300 000 FCFA ; un e-commerce ou une application sur-mesure davantage. Je vous remets un devis clair après le cadrage, gratuit et sans engagement.</p></details>
    <details><summary>Quels sont les délais de réalisation ?</summary><p>Un site vitrine : 1 à 3 semaines. Une application sur-mesure : 1 à 3 mois selon la complexité. Le planning précis est fixé ensemble dès le cadrage.</p></details>
    <details><summary>Comment se passe le paiement ?</summary><p>Par Mobile Money (MTN / Moov), carte bancaire, PayPal, virement ou espèces, en plusieurs tranches liées aux étapes du projet.</p></details>
    <details><summary>Assurez-vous la maintenance après livraison ?</summary><p>Oui : mises à jour, corrections, sauvegardes et améliorations sont disponibles en forfait de maintenance, ou à la demande.</p></details>
  </div>
</div></section>

<!-- CTA -->
<div class="cta-band"><div class="wrap"><div class="cta-inner rv" id="contact">
  <h2>Parlons de votre projet.</h2>
  <p>Un site, une application, une automatisation, une idée à cadrer ? Décrivez votre besoin, je reviens vite avec un devis gratuit.</p>
  <a href="<?= sanitize($h_mailto) ?>" class="btn">Demander mon devis gratuit</a>
</div></div></div>

</main>

<!-- FOOTER -->
<?php
$pv2FaqSchema = [
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => [
    ['@type'=>'Question','name'=>'Combien coûte un site web au Bénin ?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Une vitrine démarre autour de 300 000 FCFA ; un e-commerce ou une application sur-mesure davantage. Devis clair après le cadrage, gratuit et sans engagement.']],
    ['@type'=>'Question','name'=>'Quels sont les délais de réalisation ?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Un site vitrine : 1 à 3 semaines. Une application sur-mesure : 1 à 3 mois selon la complexité.']],
    ['@type'=>'Question','name'=>'Comment se passe le paiement ?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Par Mobile Money (MTN / Moov), carte bancaire, PayPal, virement ou espèces, en plusieurs tranches.']],
    ['@type'=>'Question','name'=>'Assurez-vous la maintenance après livraison ?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Oui : mises à jour, corrections, sauvegardes et améliorations en forfait de maintenance ou à la demande.']],
  ],
];
?>
<script type="application/ld+json"><?= json_encode($pv2FaqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?></script>
<?php $navHome = ''; include __DIR__ . '/../partials/pv2-footer.php'; ?>