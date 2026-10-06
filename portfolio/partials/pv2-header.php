<?php
// ============================================================
// pv2-header.php · En-tête du site (vague 0B, 03/10/2026).
// Dispositions d'Audyxa Formation : logo | navigation centrée | actions,
// trois méga-menus (Services, Formations, Pays) ouverts par de vrais
// boutons, tiroir mobile. Sans JavaScript, chaque libellé reste un lien
// vers son hub. Données : portfolio/data/navigation.php et la fiche de faits.
// Variables internes préfixées « $e » : un include partage la portée de la page,
// une boucle « foreach ($x as $p) » écraserait la variable $p de realisation.php (04/10/2026).
// ============================================================
$nav     = navigation_chargee();
$navHome = $navHome ?? '/';
$h_wa    = preg_replace('/\D/', '', (string) fait('whatsapp'));
$waLien  = 'https://wa.me/' . $h_wa . '?text=' . rawurlencode('Bonjour Richard, je souhaite parler d\'un projet.');
$eMegas   = [
    ['id' => 'services', 'libelle' => 'Services', 'hub' => '/services/', 'tout' => 'Tous les services'],
    ['id' => 'formations', 'libelle' => 'Formations', 'hub' => '/formations/', 'tout' => 'Toutes les formations'],
    ['id' => 'pays', 'libelle' => 'Pays', 'hub' => '/zones/', 'tout' => 'Les ' . count(fait('zones')) . ' pays servis'],
];
$eCta = $nav['carte_cta'];
?>
<header class="entete" id="entete">
  <div class="entete__barre">
    <a href="<?= sanitize($navHome) ?>" class="entete__logo" aria-label="Richard SALANON, accueil">
      <img src="<?= sanitize(siteLogoUrl()) ?>" alt="Richard SALANON" width="232" height="48">
    </a>

    <nav class="entete__nav" aria-label="Navigation principale">
      <ul class="entete__liste">
        <?php foreach ($eMegas as $eM): ?>
        <li class="entete__item entete__item--mega">
          <a class="entete__lien" href="<?= $eM['hub'] ?>"><?= $eM['libelle'] ?></a>
          <button class="nav-trigger" type="button" aria-expanded="false" aria-controls="mega-<?= $eM['id'] ?>">
            <span class="visuellement-cache">Ouvrir le menu <?= $eM['libelle'] ?></span><?= icone('caret-down', 14) ?>
          </button>
          <div class="mega" id="mega-<?= $eM['id'] ?>" hidden>
            <div class="mega__corps">
              <div class="mega__zone">
                <p class="mega__indice"><a class="lien-fleche" href="<?= $eM['hub'] ?>"><?= $eM['tout'] ?><?= icone('arrow-right', 16) ?></a></p>
                <?php if ($eM['id'] === 'pays'): ?>
                <div class="mega__grille mega__grille--pays">
                  <?php foreach ($nav['pays'] as $eGroupe => $ePays): ?>
                  <div class="mega__groupe">
                    <p class="mega__titre-groupe"><?= sanitize($eGroupe) ?></p>
                    <ul class="mega__pays">
                      <?php foreach ($ePays as $eP): ?>
                      <li><a href="<?= sanitize(pays_url($eP['nom']) ?? $eP['url']) ?>"><?= drapeau($eP['nom'], 28) ?><span><strong><?= sanitize($eP['nom']) ?></strong><small><?= sanitize($eP['villes']) ?></small></span></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="mega__grille">
                  <?php foreach ($nav[$eM['id']] as $eGroupe => $eG): ?>
                  <div class="mega__carte">
                    <p class="mega__titre-carte"><span class="tuile-icone"><?= icone($eG['icone'], 20) ?></span><?= sanitize($eGroupe) ?></p>
                    <ul>
                      <?php foreach ($eG['liens'] as [$eLibelle, $eUrl]): ?>
                      <li><a href="<?= sanitize($eUrl) ?>"><?= sanitize($eLibelle) ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
              </div>
              <aside class="mega__appel">
                <p class="eyebrow eyebrow--sombre"><?= sanitize($eCta['eyebrow']) ?></p>
                <p class="mega__appel-titre"><?= sanitize($eCta['titre']) ?></p>
                <p><?= sanitize($eCta['texte']) ?></p>
                <a class="btn btn--action" href="<?= sanitize($eCta['url']) ?>"><?= sanitize($eCta['bouton']) ?></a>
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
      <noscript><style>.pv2 .entete__burger{display:none}</style><a class="entete__menu-secours" href="#pied"><?= icone('list', 24, 'ic', 'Menu : plan du site en bas de page') ?></a></noscript>
      <button class="entete__burger" type="button" aria-expanded="false" aria-controls="tiroir">
        <span class="visuellement-cache">Ouvrir le menu</span><?= icone('list', 24, 'ic ic-liste') ?><?= icone('x', 24, 'ic ic-fermer') ?>
      </button>
    </div>
  </div>

  <div class="tiroir" id="tiroir" hidden>
    <nav aria-label="Navigation mobile">
      <?php foreach ($eMegas as $eM): ?>
      <details class="tiroir__groupe">
        <summary><?= $eM['libelle'] ?><?= icone('caret-down', 16) ?></summary>
        <ul>
          <li><a href="<?= $eM['hub'] ?>"><strong><?= $eM['tout'] ?></strong></a></li>
          <?php if ($eM['id'] === 'pays'): ?>
            <?php foreach ($nav['pays'] as $ePays): foreach ($ePays as $eP): ?>
            <li><a href="<?= sanitize(pays_url($eP['nom']) ?? $eP['url']) ?>"><?= drapeau($eP['nom']) ?><?= sanitize($eP['nom']) ?></a></li>
            <?php endforeach; endforeach; ?>
          <?php else: ?>
            <?php foreach ($nav[$eM['id']] as $eG): foreach ($eG['liens'] as [$eLibelle, $eUrl]): ?>
            <li><a href="<?= sanitize($eUrl) ?>"><?= sanitize($eLibelle) ?></a></li>
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
