<?php
// pv2-footer.php · Pied de page enrichi (Ben + Maxime) + WhatsApp flottant.
// Variables : $h_logo, $fullName, $h_city, $socialLinks, $h_email, $h_phone, $h_mailto, $pdo, $userId, $contactInfo.
$navHome = $navHome ?? '/';
$h_wa = !empty($h_phone) ? preg_replace('/\D/', '', $h_phone) : '';
$mapsUrl = $contactInfo['google_maps_url'] ?? '';

$footServices = [];
try {
    $stmtF = $pdo->prepare("SELECT title FROM services WHERE user_id = ? ORDER BY is_featured DESC, sort_order ASC LIMIT 6");
    $stmtF->execute([$userId]);
    $footServices = $stmtF->fetchAll();
} catch (\Throwable $e) {}

$citiesBJ   = ['Cotonou', 'Porto-Novo', 'Abomey-Calavi', 'Parakou', 'Bohicon', 'Ouidah', 'Natitingou', 'Djougou', 'Lokossa', 'Abomey'];
$citiesIntl = ['Abidjan', 'Lomé', 'Dakar', 'Douala', 'Paris', 'Lyon', 'Marseille', 'Bruxelles', 'Genève', 'Montréal', 'Québec'];

// Villes disposant d'une page dediee (20/08/2026). Les 21 villes ci-dessus
// etaient affichees en <span> inertes : le site revendiquait une couverture
// que rien ne portait. Celles qui ont une page deviennent des liens, les
// autres restent en texte — mieux vaut un texte qu'un lien vers une 404.
$villesAvecPage = [];
$fichierVilles  = __DIR__ . '/../data/villes.php';
if (is_file($fichierVilles)) {
    foreach ((array) require $fichierVilles as $vv) {
        if (!empty($vv['nom']) && !empty($vv['slug'])) {
            $villesAvecPage[$vv['nom']] = $vv['slug'];
        }
    }
}

if (!function_exists('zoneLien')) {
    /**
     * Rend une ville du pied de page : lien si elle a une page, texte sinon.
     *
     * @param array<string,string> $avecPage nom de ville => slug
     */
    function zoneLien(string $ville, array $avecPage): string
    {
        $nom = sanitize($ville);
        return isset($avecPage[$ville])
            ? '<a href="/developpeur-web-' . sanitize($avecPage[$ville]) . '">' . $nom . '</a>'
            : '<span>' . $nom . '</span>';
    }
}
?>
<footer><div class="wrap">
  <div class="foot-grid">
    <div class="foot-brand">
      <a href="/" class="logo foot-logo"><?php if (!empty($h_logo)): ?><img src="<?= $h_logo ?>" alt="Richard Technologies" width="113" height="60" loading="lazy" decoding="async"><?php else: ?><span class="dot"></span><?= sanitize($fullName) ?><?php endif; ?></a>
      <p class="foot-sub">Développeur web, mobile &amp; automatisation · Expert n8n / Make</p>
      <p>J'aide les entreprises et entrepreneurs à créer des solutions numériques performantes et à gagner en visibilité sur Google. Basé à <?= sanitize($h_city) ?>, Bénin · disponible à distance partout.</p>
      <?php if ($mapsUrl): ?>
      <a class="foot-reviews" href="<?= sanitize($mapsUrl) ?>" target="_blank" rel="noopener" aria-label="Voir mes avis Google">
        <span class="g"><svg viewBox="0 0 24 24" width="20" height="20"><path fill="#4285F4" d="M23 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.2a5.3 5.3 0 0 1-2.3 3.5v2.9h3.7C21.8 18.9 23 15.9 23 12.3z"/><path fill="#34A853" d="M12 24c3.1 0 5.7-1 7.6-2.8l-3.7-2.9c-1 .7-2.3 1.1-3.9 1.1-3 0-5.5-2-6.4-4.7H1.8v3C3.7 21.4 7.5 24 12 24z"/><path fill="#FBBC05" d="M5.6 14.7c-.2-.7-.4-1.4-.4-2.2s.1-1.5.4-2.2v-3H1.8A12 12 0 0 0 0 12.5c0 1.9.5 3.8 1.8 5.2l3.8-3z"/><path fill="#EA4335" d="M12 4.8c1.7 0 3.2.6 4.4 1.7l3.3-3.3C17.7 1.2 15.1 0 12 0 7.5 0 3.7 2.6 1.8 6.3l3.8 3C6.5 6.8 9 4.8 12 4.8z"/></svg></span>
        <span class="gr"><b><?= sanitize($fullName) ?></b><span class="grs"><span class="gstars">★★★★★</span> Avis Google</span></span>
      </a>
      <?php endif; ?>
      <div class="foot-social">
        <?php foreach ($socialLinks as $link): ?>
          <a href="<?= sanitize($link['url']) ?>" target="_blank" rel="noopener" aria-label="<?= sanitize($link['label'] ?? $link['platform']) ?>"><?= getSocialIcon($link['platform'], 18) ?></a>
        <?php endforeach; ?>
        <?php if ($h_wa): ?><a href="https://wa.me/<?= $h_wa ?>" target="_blank" rel="noopener" aria-label="WhatsApp"><svg class="ic" viewBox="0 0 24 24" style="width:18px;height:18px"><path d="M20 11.5a8 8 0 0 1-11.8 7L4 19.5l1.1-4A8 8 0 1 1 20 11.5Z"/></svg></a><?php endif; ?>
      </div>
    </div>

    <div class="foot-col">
      <h2>Expertises</h2>
      <a href="/a-propos/#expertise">Développement full-stack</a>
      <a href="/a-propos/#expertise">Applications & mobile</a>
      <a href="/a-propos/#expertise">Automatisation n8n / Make</a>
      <a href="/a-propos/#expertise">Référencement (SEO)</a>
      <a href="/a-propos/#expertise">Conseil & digitalisation</a>
    </div>

    <div class="foot-col">
      <h2>Services</h2>
      <?php if ($footServices): foreach ($footServices as $fs): ?>
        <a href="/services/<?= generateSlug($fs['title']) ?>"><?= sanitize($fs['title']) ?></a>
      <?php endforeach; endif; ?>
      <a href="/services/" class="foot-allsvc">Tous les services</a>
    </div>

    <div class="foot-col foot-contact">
      <h2>Contact</h2>
      <?php if ($mapsUrl): ?><a href="<?= sanitize($mapsUrl) ?>" target="_blank" rel="noopener" class="fc-line"><span class="fc-ic"><svg class="ic" viewBox="0 0 24 24"><path d="M12 21s-7-6-7-11a7 7 0 0 1 14 0c0 5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg></span><?= sanitize($h_city) ?>, Bénin</a>
      <?php else: ?><span class="fc-line"><span class="fc-ic"><svg class="ic" viewBox="0 0 24 24"><path d="M12 21s-7-6-7-11a7 7 0 0 1 14 0c0 5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg></span><?= sanitize($h_city) ?>, Bénin</span><?php endif; ?>
      <?php if ($h_email): ?><a href="mailto:<?= sanitize($h_email) ?>" class="fc-line"><span class="fc-ic"><svg class="ic" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg></span><?= sanitize($h_email) ?></a><?php endif; ?>
      <?php if ($h_phone): ?><a href="tel:<?= sanitize(preg_replace('/\s+/', '', $h_phone)) ?>" class="fc-line"><span class="fc-ic"><svg class="ic" viewBox="0 0 24 24"><path d="M5 4h3l1.5 4-2 1.5a11 11 0 0 0 5 5l1.5-2 4 1.5V18a2 2 0 0 1-2 2A15 15 0 0 1 4 6a2 2 0 0 1 1-2Z"/></svg></span><?= sanitize($h_phone) ?></a><?php endif; ?>
      <p class="foot-remote">Disponible à distance · Bénin, Afrique, France, Canada.</p>
      <a href="<?= sanitize($h_mailto) ?>" class="btn" style="margin-top:.6rem">Démarrer un projet</a>
    </div>
  </div>

  <div class="foot-zones">
    <div class="zone-head">
      <span class="zic"><svg class="ic" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 2.5 15.3 0 18M12 3c-2.5 2.7-2.5 15.3 0 18"/></svg></span>
      <div><b><a href="/zones/">Zones d'intervention</a></b><small>Votre développeur au Bénin et à distance partout.</small></div>
    </div>
    <div class="zone-cols">
      <div>
        <h3>Bénin</h3>
        <div class="zone-grid"><?php foreach ($citiesBJ as $c): ?><?= zoneLien($c, $villesAvecPage) ?><?php endforeach; ?></div>
      </div>
      <div>
        <h3>Afrique &amp; international</h3>
        <div class="zone-grid"><?php foreach ($citiesIntl as $c): ?><?= zoneLien($c, $villesAvecPage) ?><?php endforeach; ?></div>
      </div>
    </div>
    <p class="zone-all"><a href="/zones/">Voir toutes les zones desservies</a></p>
  </div>

  <div class="foot-bot">
    <span>© 2026 <?= sanitize($fullName) ?> · Richard Technologies. Tous droits réservés.</span>
    <span class="mono" style="color:#8595bd">Mentions légales · Confidentialité</span>
  </div>
</div></footer>

<?php if ($h_wa): ?>
<a class="fab-wa" href="https://wa.me/<?= $h_wa ?>" target="_blank" rel="noopener" aria-label="Discuter sur WhatsApp">
  <span class="fab-label">Discutons de votre projet</span>
  <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M20 11.5a8 8 0 0 1-11.8 7L4 19.5l1.1-4A8 8 0 1 1 20 11.5Z"/><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5.6 0 1.2-.5 1.2-1 0-.3-1.4-1-1.7-1-.4 0-.6.6-1 .6-.8 0-2.2-1.4-2.2-2.2 0-.4.6-.6.6-1 0-.3-.7-1.7-1-1.7-.5 0-1 .6-1 1.2Z"/></svg>
</a>
<?php endif; ?>
<script defer src="/assets/js/portfolio-v2.js?v=<?= @filemtime(__DIR__ . '/../../assets/js/portfolio-v2.js') ?: '1' ?>"></script>
