<?php
// ============================================================
// pv2-header.php · En-tête du site (vague 0B, 03/10/2026).
// Dispositions d'Audyxa Formation : logo | navigation centrée | actions,
// trois méga-menus (Services, Formations, Pays) ouverts par de vrais
// boutons, tiroir mobile. Sans JavaScript, chaque libellé reste un lien
// vers son hub. Données : portfolio/data/navigation.php et la fiche de faits.
// ============================================================
$nav     = require __DIR__ . '/../data/navigation.php';
$navHome = $navHome ?? '/';
$h_wa    = preg_replace('/\D/', '', (string) fait('whatsapp'));
$waLien  = 'https://wa.me/' . $h_wa . '?text=' . rawurlencode('Bonjour Richard, je souhaite parler d\'un projet.');
$megas   = [
    ['id' => 'services', 'libelle' => 'Services', 'hub' => '/services/', 'tout' => 'Tous les services'],
    ['id' => 'formations', 'libelle' => 'Formations', 'hub' => '/formations/', 'tout' => 'Toutes les formations'],
    ['id' => 'pays', 'libelle' => 'Pays', 'hub' => '/zones/', 'tout' => 'Les 34 pays servis'],
];
$cta = $nav['carte_cta'];
?>
<header class="entete" id="entete">
  <div class="entete__barre">
    <a href="<?= sanitize($navHome) ?>" class="entete__logo" aria-label="Richard SALANON, accueil">
      <img src="<?= sanitize(siteLogoUrl()) ?>" alt="Richard SALANON" width="232" height="48">
    </a>

    <nav class="entete__nav" aria-label="Navigation principale">
      <ul class="entete__liste">
        <?php foreach ($megas as $m): ?>
        <li class="entete__item entete__item--mega">
          <a class="entete__lien" href="<?= $m['hub'] ?>"><?= $m['libelle'] ?></a>
          <button class="nav-trigger" type="button" aria-expanded="false" aria-controls="mega-<?= $m['id'] ?>">
            <span class="visuellement-cache">Ouvrir le menu <?= $m['libelle'] ?></span><?= icone('caret-down', 14) ?>
          </button>
          <div class="mega" id="mega-<?= $m['id'] ?>" hidden>
            <div class="mega__corps">
              <div class="mega__zone">
                <p class="mega__indice"><a class="lien-fleche" href="<?= $m['hub'] ?>"><?= $m['tout'] ?><?= icone('arrow-right', 16) ?></a></p>
                <?php if ($m['id'] === 'pays'): ?>
                <div class="mega__grille mega__grille--pays">
                  <?php foreach ($nav['pays'] as $groupe => $pays): ?>
                  <div class="mega__groupe">
                    <p class="mega__titre-groupe"><?= sanitize($groupe) ?></p>
                    <ul class="mega__pays">
                      <?php foreach ($pays as $p): ?>
                      <li><a href="<?= sanitize($p['url']) ?>"><span class="pastille-iso" aria-hidden="true"><?= sanitize($p['iso']) ?></span><span><strong><?= sanitize($p['nom']) ?></strong><small><?= sanitize($p['villes']) ?></small></span></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="mega__grille">
                  <?php foreach ($nav[$m['id']] as $groupe => $g): ?>
                  <div class="mega__carte">
                    <p class="mega__titre-carte"><span class="tuile-icone"><?= icone($g['icone'], 20) ?></span><?= sanitize($groupe) ?></p>
                    <ul>
                      <?php foreach ($g['liens'] as [$libelle, $url]): ?>
                      <li><a href="<?= sanitize($url) ?>"><?= sanitize($libelle) ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
              </div>
              <aside class="mega__appel">
                <p class="eyebrow eyebrow--sombre"><?= sanitize($cta['eyebrow']) ?></p>
                <p class="mega__appel-titre"><?= sanitize($cta['titre']) ?></p>
                <p><?= sanitize($cta['texte']) ?></p>
                <a class="btn btn--action" href="<?= sanitize($cta['url']) ?>"><?= sanitize($cta['bouton']) ?></a>
              </aside>
            </div>
          </div>
        </li>
        <?php endforeach; ?>
        <li class="entete__item"><a class="entete__lien" href="/realisations/">Réalisations</a></li>
        <li class="entete__item"><a class="entete__lien" href="/blog/">Blog</a></li>
        <li class="entete__item"><a class="entete__lien" href="/a-propos/">À propos</a></li>
      </ul>
    </nav>

    <div class="entete__actions">
      <a class="btn-icone btn-icone--wa" href="<?= sanitize($waLien) ?>" rel="noopener" target="_blank"><?= icone('whatsapp-logo', 20, 'ic', 'Écrire sur WhatsApp') ?></a>
      <a class="btn btn--action entete__devis" href="/contact">Demander un devis</a>
      <button class="entete__burger" type="button" aria-expanded="false" aria-controls="tiroir">
        <span class="visuellement-cache">Ouvrir le menu</span><?= icone('list', 24) ?>
      </button>
    </div>
  </div>

  <div class="tiroir" id="tiroir" hidden>
    <nav aria-label="Navigation mobile">
      <?php foreach ($megas as $m): ?>
      <details class="tiroir__groupe">
        <summary><?= $m['libelle'] ?><?= icone('caret-down', 16) ?></summary>
        <ul>
          <li><a href="<?= $m['hub'] ?>"><strong><?= $m['tout'] ?></strong></a></li>
          <?php if ($m['id'] === 'pays'): ?>
            <?php foreach ($nav['pays'] as $pays): foreach ($pays as $p): ?>
            <li><a href="<?= sanitize($p['url']) ?>"><?= sanitize($p['nom']) ?></a></li>
            <?php endforeach; endforeach; ?>
          <?php else: ?>
            <?php foreach ($nav[$m['id']] as $g): foreach ($g['liens'] as [$libelle, $url]): ?>
            <li><a href="<?= sanitize($url) ?>"><?= sanitize($libelle) ?></a></li>
            <?php endforeach; endforeach; ?>
          <?php endif; ?>
        </ul>
      </details>
      <?php endforeach; ?>
      <a class="tiroir__lien" href="/realisations/">Réalisations</a>
      <a class="tiroir__lien" href="/blog/">Blog</a>
      <a class="tiroir__lien" href="/a-propos/">À propos</a>
      <div class="tiroir__actions">
        <a class="btn btn--action" href="/contact">Demander un devis</a>
        <a class="btn btn--contour" href="<?= sanitize($waLien) ?>" rel="noopener" target="_blank"><?= icone('whatsapp-logo', 18) ?>WhatsApp</a>
      </div>
    </nav>
  </div>
</header>
