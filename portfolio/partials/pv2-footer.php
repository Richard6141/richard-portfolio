<?php
// ============================================================
// pv2-footer.php · Pied de page (vague 0B, 03/10/2026).
// Dispositions d'Audyxa Formation : fond encre, quatre colonnes (marque et
// coordonnées, services, formations, zones et ressources), barre basse.
// Maillage choisi (spec 9) : plus de liste de 143 liens de villes.
// Sur mobile, une barre collante remplace le bouton WhatsApp flottant.
// Données : fiche de faits et portfolio/data/navigation.php.
// ============================================================
$nav    = $nav ?? navigation_chargee();
$h_wa   = preg_replace('/\D/', '', (string) fait('whatsapp'));
$waLien = 'https://wa.me/' . $h_wa . '?text=' . rawurlencode('Bonjour Richard, je souhaite parler d\'un projet.');

// Les huit services du pied, choisis parmi ceux du registre.
$libellesServices = [];
foreach ($nav['services'] as $g) {
    foreach ($g['liens'] as [$libelle, $url]) {
        $libellesServices[$url] = $libelle;
    }
}
$piedServices = [];
foreach ([
    '/services/site-vitrine-professionnel', '/services/site-e-commerce', '/services/application-web-sur-mesure',
    '/services/application-mobile-android-ios', '/services/automatisation-ia', '/services/referencement-naturel-seo',
    '/services/seo-local-google-business', '/consultant-digitalisation',
] as $url) {
    // La navigation est déjà réécrite vers l'URL finale (redirections actives).
    $url = url_finale($url);
    if (isset($libellesServices[$url])) {
        $piedServices[] = [$libellesServices[$url], $url];
    }
}

$piedZones = [
    ['Cotonou', '/developpeur-web-cotonou'], ['Porto-Novo', '/developpeur-web-porto-novo'],
    ['Parakou', '/developpeur-web-parakou'], ['Abidjan', '/developpeur-web-abidjan'],
    ['Dakar', '/developpeur-web-dakar'], ['Lomé', '/developpeur-web-lome'],
    ['Paris', '/externaliser-developpement-web-paris'], ['Montréal', '/externaliser-developpement-web-montreal'],
];

$reseaux = [
    'linkedin.com' => ['linkedin-logo', 'LinkedIn'], 'github.com' => ['github-logo', 'GitHub'],
    'facebook.com' => ['facebook-logo', 'Facebook'], 'instagram.com' => ['instagram-logo', 'Instagram'],
    'google.com' => ['map-pin', 'Fiche Google'],
];
$horaires = fait('horaires');
?>
<footer class="pied" id="pied">
  <div class="pied__grille">
    <div class="pied__marque">
      <a href="/" class="pied__logo" aria-label="Richard SALANON, accueil"><img src="<?= sanitize(imgV('/assets/img/logo-rs-clair.svg')) ?>" alt="Richard SALANON" width="232" height="48" loading="lazy" decoding="async"></a>
      <p><?= sanitize(fait('description_courte')) ?></p>
      <ul class="pied__coordonnees">
        <li><?= icone('map-pin', 18) ?><span><?= sanitize(fait('ville')) ?>, <?= sanitize(fait('pays')) ?>. Interventions dans <?= count(fait('zones')) ?> pays, sur place ou à distance.</span></li>
        <li><?= icone('phone', 18) ?><a href="tel:<?= sanitize(fait('telephone')) ?>"><?= sanitize(fait('telephone')) ?></a></li>
        <li><?= icone('envelope-simple', 18) ?><a href="mailto:<?= sanitize(fait('email')) ?>"><?= sanitize(fait('email')) ?></a></li>
        <?php if (!empty($horaires)): ?><li><?= icone('clock', 18) ?><span><?= sanitize(horaires_texte($horaires)) ?></span></li><?php endif; ?>
      </ul>
      <ul class="pied__reseaux">
        <?php foreach (fait('profils') as $url): foreach ($reseaux as $domaine => [$icone, $nom]): if (str_contains($url, $domaine)): ?>
        <li><a href="<?= sanitize($url) ?>" rel="noopener me" target="_blank"><?= icone($icone, 20, 'ic', $nom) ?></a></li>
        <?php break; endif; endforeach; endforeach; ?>
      </ul>
    </div>

    <nav class="pied__colonne" aria-label="Services">
      <p class="pied__titre">Services</p>
      <ul>
        <?php foreach ($piedServices as [$libelle, $url]): ?><li><a href="<?= sanitize(url_finale($url)) ?>"><?= sanitize($libelle) ?></a></li><?php endforeach; ?>
        <li><a href="/services/">Tous les services</a></li>
      </ul>
    </nav>

    <nav class="pied__colonne" aria-label="Formations">
      <p class="pied__titre">Formations</p>
      <ul>
        <?php // Vague 1B : formations principales du catalogue (spec 9).
        foreach ([['IA en entreprise', '/formations/ia-en-entreprise'], ['n8n et automatisation', '/formations/n8n'], ['Vibecoding', '/formations/vibecoding'],
                  ['Odoo pour vos équipes', '/formations/odoo-utilisateurs'], ['Visibilité Google', '/formations/visibilite-google'],
                  ['WhatsApp Business', '/formations/whatsapp-business']] as [$libelle, $url]): ?><li><a href="<?= sanitize(url_finale($url)) ?>"><?= sanitize($libelle) ?></a></li><?php endforeach; ?>
        <li><a href="/formations/">Toutes les formations</a></li>
      </ul>
    </nav>

    <nav class="pied__colonne" aria-label="Zones et ressources">
      <p class="pied__titre">Zones</p>
      <ul class="pied__zones">
        <?php foreach ($piedZones as [$ville, $url]): ?><li><a href="<?= sanitize(url_finale($url)) ?>"><?= sanitize($ville) ?></a></li><?php endforeach; ?>
        <li><a href="/zones/">Les <?= count(fait('zones')) ?> pays</a></li>
      </ul>
      <p class="pied__titre">Ressources</p>
      <ul>
        <?php foreach (pied_ressources() as [$piedLibelle, $piedUrl]): ?><li><a href="<?= sanitize($piedUrl) ?>"><?= sanitize($piedLibelle) ?></a></li><?php endforeach; ?>
      </ul>
    </nav>
  </div>

  <div class="pied__bas">
    <p>© <?= date('Y') ?> <?= sanitize(fait('nom')) ?>. Tous droits réservés.</p>
    <p><a href="/mentions-legales">Mentions légales</a> · <a href="/confidentialite">Confidentialité</a> · <button type="button" class="pied__cookies" data-cookies>Cookies</button></p>
    <p><?= sanitize(fait('intitule')) ?>, <?= sanitize(fait('ville')) ?>.</p>
  </div>
</footer>

<div class="barre-mobile">
  <a class="btn btn--action" href="/contact">Demander un devis</a>
  <a class="btn btn--sombre" href="<?= sanitize($waLien) ?>" rel="noopener" target="_blank"><?= icone('whatsapp-logo', 18) ?>WhatsApp</a>
</div>

<script defer src="/assets/js/portfolio-v2.js?v=<?= @filemtime(__DIR__ . '/../../assets/js/portfolio-v2.js') ?: '1' ?>"></script>
