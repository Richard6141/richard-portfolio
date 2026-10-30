<?php
// ============================================================
// templates/accueil.php · Vue de l'accueil (vague 0B, 03/10/2026).
// Ordre des sections repris d'Audyxa Formation : hero, confiance (logos),
// qui je suis, services, flux, formations, pays, méthode, formats,
// réalisations, avis, ressources, FAQ, appel final.
// Variables : $nav, $clients, $faq, $h_projects, $h_testimonials, $h_recent.
// ============================================================
$chiffres = [
    ['n' => (int) fait('projets_livres'), 'suffixe' => '+', 'l' => 'projets livrés'],
    ['n' => (int) fait('clients'), 'suffixe' => '+', 'l' => 'clients accompagnés'],
    ['n' => (int) fait('personnes_formees'), 'suffixe' => '+', 'l' => 'personnes formées'],
    ['n' => count(fait('zones')), 'suffixe' => '', 'l' => 'pays servis'],
];
$motsTournants = ['au Bénin', "en Côte d'Ivoire", 'au Sénégal', 'au Togo', 'en France', 'au Canada'];
$sousTraites = count(array_filter($clients, static fn (array $c): bool => !empty($c['sous_traitance'])));
$planProjet = ['Cadrage gratuit', 'Maquette validée', 'Développement', 'Mise en ligne', 'Référencement'];
$formats = [
    ['icone' => 'monitor', 'nom' => 'À distance', 'qui' => 'Entreprises hors du Bénin : Afrique, Europe, Canada.', 'comment' => 'Visioconférence, points d\'avancement réguliers, démonstrations en ligne.', 'retenir' => 'Le format le plus courant, sans surcoût de déplacement.'],
    ['icone' => 'map-pin', 'nom' => 'Sur place', 'qui' => 'Entreprises de Cotonou et du Bénin, ou missions planifiées ailleurs.', 'comment' => 'Ateliers dans vos locaux, sur vos outils et vos documents.', 'retenir' => 'Idéal pour le cadrage, les formations et la mise en route.'],
    ['icone' => 'intersect', 'nom' => 'Hybride', 'qui' => 'Projets longs ou équipes réparties.', 'comment' => 'Lancement et formation sur place, réalisation et suivi à distance.', 'retenir' => 'Le meilleur des deux, au rythme du projet.'],
    ['icone' => 'calendar-check', 'nom' => 'Forfait mensuel', 'qui' => 'Sites, applications et automatisations déjà en service.', 'comment' => 'Maintenance, évolutions et accompagnement chaque mois.', 'retenir' => 'Un interlocuteur qui connaît déjà votre système.'],
];
$etapes = [
    'type' => 'etapes',
    'items' => [
        ['titre' => 'Cadrage gratuit', 'texte' => 'Un premier échange pour comprendre votre activité, vos contraintes et votre budget. Vous repartez avec une recommandation claire, même si vous ne travaillez pas avec moi.'],
        ['titre' => 'Proposition détaillée', 'texte' => 'Un devis poste par poste, un planning et ce qui sera livré à chaque étape. Paiement en plusieurs tranches liées à l\'avancement.'],
        ['titre' => 'Réalisation par étapes', 'texte' => 'Maquettes validées avant le code, démonstrations régulières, ajustements en continu. Vous voyez le projet avancer.'],
        ['titre' => 'Mise en ligne et suivi', 'texte' => 'Formation de vos équipes, référencement, maintenance : le projet continue de produire après la livraison.'],
    ],
];
?>
<main id="main-content" class="accueil">

<!-- HERO -->
<section class="hero-accueil" id="top">
  <div class="hero-accueil__grille">
    <div class="hero-accueil__texte">
      <span class="eyebrow"><span class="point-vivant" aria-hidden="true"></span><?= sanitize(fait('nom')) ?>, disponible pour vos projets</span>
      <h1><?= sanitize(fait('intitule')) ?> <span class="hero-accueil__rot" id="pv2-rot" data-words="<?= sanitize(json_encode($motsTournants, JSON_UNESCAPED_UNICODE)) ?>"><?= sanitize($motsTournants[0]) ?></span></h1>
      <p class="hero-accueil__chapeau">Sites, applications web et mobiles, automatisations et intégrations d'IA, ERP Odoo et Dolibarr, formations : je conçois les outils qui font gagner du temps et des clients aux entreprises d'Afrique francophone, d'Europe et du Canada.</p>
      <div class="hero-accueil__actions">
        <a class="btn btn--grand" href="/contact">Demander un devis</a>
        <a class="btn btn--contour btn--grand" href="/realisations/">Voir les réalisations</a>
      </div>
      <dl class="hero-accueil__chiffres">
        <?php foreach ($chiffres as $c): if ($c['n'] <= 0) continue; ?>
        <div><dt><?= sanitize($c['l']) ?></dt><dd><span class="ct" data-to="<?= $c['n'] ?>"><?= $c['n'] ?></span><?= $c['suffixe'] ?></dd></div>
        <?php endforeach; ?>
      </dl>
    </div>
    <div class="hero-accueil__visuel">
      <figure class="portrait">
        <img src="<?= sanitize(imgV(fait('photo'))) ?>" srcset="<?= sanitize($portraitSrcset) ?>" sizes="<?= sanitize($portraitSizes) ?>" width="800" height="1067" alt="Portrait de <?= sanitize(fait('nom')) ?>, <?= sanitize(mb_strtolower(fait('intitule'))) ?> à <?= sanitize(fait('ville')) ?>" fetchpriority="high">
      </figure>
      <div class="plan-projet" aria-hidden="true">
        <div class="plan-projet__barre"><span></span><span></span><span></span><b>Votre projet</b></div>
        <?php foreach ($planProjet as $i => $etape): ?>
        <div class="plan-projet__ligne" style="--i:<?= $i ?>"><span class="plan-projet__pastille"><?= icone('check', 14) ?></span><span><?= sanitize($etape) ?></span><span class="plan-projet__piste"><span></span></span></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php if ($clients): ?>
<!-- CONFIANCE -->
<section class="confiance" id="confiance" aria-labelledby="confiance-titre">
  <p class="confiance__titre" id="confiance-titre">Sites et applications que j'ai développés</p>
  <?php if ($sousTraites > 0): ?><p class="confiance__note">Dont <?= $sousTraites ?> en sous-traitance pour Digital Développement.</p><?php endif; ?>
  <button class="defilant__pause" type="button" aria-pressed="false" hidden>Mettre en pause le défilement</button>
  <div class="defilant">
    <?php foreach ([false, true] as $copie): ?>
    <ul class="defilant__piste"<?= $copie ? ' aria-hidden="true"' : '' ?>>
      <?php foreach ($clients as $c): ?>
      <li class="logo-client<?= !empty($c['fond_sombre']) ? ' logo-client--sombre' : '' ?>"><img src="<?= sanitize($c['fichier']) ?>" alt="<?= $copie ? '' : sanitize($c['nom']) ?>" width="<?= (int) $c['largeur'] ?>" height="<?= (int) $c['hauteur'] ?>" loading="lazy" decoding="async"></li>
      <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<!-- QUI JE SUIS -->
<section class="section" id="qui">
  <div class="conteneur duo">
    <article class="duo__carte duo__carte--claire" data-reveal>
      <span class="eyebrow">Qui je suis</span>
      <h2>Un interlocuteur unique, du cadrage à la mise en ligne</h2>
      <p><?= sanitize(fait('phrase_entite')) ?></p>
      <ul class="liste-coches">
        <li><?= (int) fait('experience_ans') ?> ans de développement logiciel, formé à <?= sanitize(fait('formation')['nom']) ?></li>
        <li>Interventions dans <?= count(fait('pays_travailles')) ?> pays, sur place ou à distance</li>
        <li>Paiement par Mobile Money, carte bancaire, PayPal ou virement</li>
      </ul>
      <a class="lien-fleche" href="/a-propos/">Mon parcours<?= icone('arrow-right', 16) ?></a>
    </article>
    <article class="duo__carte duo__carte--sombre" data-reveal style="--i:1">
      <span class="eyebrow eyebrow--sombre">Entrepreneur</span>
      <?php foreach (fait('produits') as $p): ?>
      <h2>Fondateur de <?= sanitize($p['nom']) ?></h2>
      <p><?= sanitize($p['description']) ?> Je l'ai conçu, développé et je le fais évoluer : ce que je vous recommande, je l'utilise moi-même.</p>
      <a class="lien-fleche lien-fleche--clair" href="<?= sanitize($p['url']) ?>" rel="noopener" target="_blank">Découvrir <?= sanitize($p['nom']) ?><?= icone('arrow-up-right', 16) ?></a>
      <?php endforeach; ?>
      <?php foreach (fait('affiliations') as $a): ?>
      <p class="duo__affiliation"><?= sanitize($a['role']) ?> d'<a href="<?= sanitize($a['url']) ?>" rel="noopener" target="_blank"><?= sanitize($a['nom']) ?></a>, <?= sanitize($a['description'] ?? 'cabinet de formation et de transformation digitale') ?>.</p>
      <?php endforeach; ?>
    </article>
  </div>
</section>

<!-- SERVICES -->
<section class="section section--surface" id="services">
  <div class="conteneur">
    <div class="tete-section" data-reveal>
      <div><span class="eyebrow">Services</span><h2>Ce que je construis pour vous</h2></div>
      <p>Quatre familles de services, pensées pour fonctionner ensemble : un site qui attire, une application qui fait le travail, des automatisations qui libèrent du temps, un ERP qui tient l'entreprise.</p>
    </div>
    <div class="grille-cartes">
      <?php $n = 0; foreach ($nav['services'] as $famille => $g): $n++; ?>
      <article class="carte-domaine carte-halo" data-reveal style="--i:<?= ($n - 1) % 3 ?>">
        <div class="carte-domaine__haut"><span class="tuile-icone"><?= icone($g['icone'], 24) ?></span><span class="carte-domaine__num"><?= str_pad((string) $n, 2, '0', STR_PAD_LEFT) ?></span></div>
        <h3><?= sanitize($famille) ?></h3>
        <ul>
          <?php foreach ($g['liens'] as [$libelle, $url]): ?><li><a href="<?= sanitize($url) ?>"><?= sanitize($libelle) ?></a></li><?php endforeach; ?>
        </ul>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="rangee-actions" data-reveal>
      <a class="btn" href="/contact">Demander un devis</a>
      <a class="btn btn--contour" href="/services/">Tous les services</a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../partials/accueil-flux.php'; ?>

<!-- FORMATIONS -->
<section class="section section--surface" id="formations">
  <div class="conteneur formations-accueil">
    <aside class="formations-accueil__cote" data-reveal>
      <span class="eyebrow">Formations</span>
      <h2>Former vos équipes à l'IA et au numérique</h2>
      <p>Des formations données par un praticien, sur vos outils et vos documents réels : IA en entreprise, vibe coding, automatisation, Odoo et Dolibarr, comptabilité OHADA, WhatsApp Business, référencement. Pour avocats, magistrats, comptables, dirigeants, équipes administratives et commerciales.</p>
      <a class="btn" href="/formations/">Toutes les formations</a>
    </aside>
    <ul class="lignes-formation">
      <?php foreach ($nav['formations'] as $famille => $g): foreach ($g['liens'] as [$libelle, $url]): ?>
      <li data-reveal><a class="ligne-formation" href="<?= sanitize($url) ?>"><span class="pastille-domaine"><?= sanitize($famille) ?></span><strong><?= sanitize($libelle) ?></strong><span class="fleche-ronde"><?= icone('arrow-right', 18) ?></span></a></li>
      <?php endforeach; endforeach; ?>
    </ul>
  </div>
</section>

<!-- PAYS -->
<section class="section" id="pays">
  <div class="conteneur pays-accueil">
    <div class="pays-accueil__texte" data-reveal>
      <span class="eyebrow"><?= count(fait('zones')) ?> pays servis</span>
      <h2>Sur place à Cotonou, à distance partout ailleurs</h2>
      <p>Afrique francophone, Europe et Canada : les projets se mènent à distance avec des points réguliers, et sur place quand le cadrage ou la formation le demandent. Devis en franc CFA, en euro, en franc suisse ou en dollar canadien.</p>
      <ul class="liste-pays">
        <?php foreach (fait('zones') as $pays): ?><li><?= drapeau($pays) ?><?= sanitize($pays) ?></li><?php endforeach; ?>
      </ul>
      <a class="lien-fleche" href="/zones/">Toutes les zones<?= icone('arrow-right', 16) ?></a>
    </div>
    <figure class="carte-scene" data-reveal style="--i:1">
      <img src="/assets/img/carte-pays.svg" alt="Carte des <?= count(fait('zones')) ?> pays servis depuis Cotonou, en Afrique francophone, en Europe et au Canada" width="720" height="896" loading="lazy" decoding="async">
    </figure>
  </div>
</section>

<!-- MÉTHODE -->
<section class="section section--surface" id="methode">
  <div class="conteneur">
    <div class="tete-section" data-reveal>
      <div><span class="eyebrow">Méthode</span><h2>De l'idée à la mise en ligne, en quatre étapes</h2></div>
      <p>La même méthode pour un site, une application, une automatisation ou une formation : comprendre avant de construire, montrer avant de livrer.</p>
    </div>
    <?= bloc_rendre($etapes) ?>
  </div>
</section>

<!-- FORMATS -->
<section class="section" id="formats">
  <div class="conteneur">
    <div class="tete-section" data-reveal>
      <div><span class="eyebrow">Formats</span><h2>Comment nous travaillons ensemble</h2></div>
      <a class="btn btn--contour" href="/contact">En parler</a>
    </div>
    <div class="matrice-formats">
      <p class="matrice-formats__libelle" aria-hidden="true">Pour qui</p>
      <p class="matrice-formats__libelle" aria-hidden="true">Comment ça se passe</p>
      <p class="matrice-formats__libelle" aria-hidden="true">À retenir</p>
      <?php foreach ($formats as $i => $f): ?>
      <article class="format" data-reveal style="--i:<?= $i % 4 ?>">
        <h3><span class="tuile-icone"><?= icone($f['icone'], 22) ?></span><?= sanitize($f['nom']) ?></h3>
        <p><span class="format__libelle">Pour qui</span><?= sanitize($f['qui']) ?></p>
        <p><span class="format__libelle">Comment ça se passe</span><?= sanitize($f['comment']) ?></p>
        <p class="format__retenir"><span class="format__libelle">À retenir</span><?= sanitize($f['retenir']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if ($h_projects): ?>
<!-- RÉALISATIONS -->
<section class="section section--surface" id="realisations">
  <div class="conteneur">
    <div class="tete-section" data-reveal>
      <div><span class="eyebrow">Réalisations</span><h2>Des projets pensés pour des résultats</h2></div>
      <a class="btn btn--contour" href="/realisations/">Toutes les réalisations</a>
    </div>
    <div class="grille-cartes">
      <?php foreach ($h_projects as $i => $proj): $pSlug = trim((string) ($proj['slug'] ?? '')); $img = !empty($proj['image_url']) ? '/uploads/' . $proj['image_url'] : ''; ?>
      <<?= $pSlug !== '' ? 'a href="/realisations/' . sanitize($pSlug) . '"' : 'article' ?> class="carte-projet carte-halo" data-reveal style="--i:<?= $i % 3 ?>">
        <?php if ($img): ?><img src="<?= sanitize($img) ?>" alt="<?= sanitize($proj['title']) ?>" width="640" height="400" loading="lazy" decoding="async"><?php endif; ?>
        <div class="carte-projet__corps">
          <?php if (!empty($proj['category'])): ?><span class="pastille-domaine"><?= sanitize($proj['category']) ?></span><?php endif; ?>
          <h3><?= sanitize($proj['title']) ?></h3>
          <p><?= sanitize($proj['description_short'] ?? '') ?></p>
        </div>
      </<?= $pSlug !== '' ? 'a' : 'article' ?>>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ($h_testimonials): ?>
<!-- AVIS -->
<section class="section" id="avis">
  <div class="conteneur">
    <div class="tete-section" data-reveal><div><span class="eyebrow">Avis</span><h2>Ce que disent mes clients</h2></div></div>
    <div class="grille-cartes">
      <?php foreach ($h_testimonials as $i => $t): $role = implode(', ', array_filter([$t['author_role'] ?? '', $t['author_company'] ?? ''])); ?>
      <figure class="carte-avis" data-reveal style="--i:<?= $i % 3 ?>">
        <blockquote><p><?= sanitize($t['content'] ?? '') ?></p></blockquote>
        <figcaption><strong><?= sanitize($t['author_name'] ?? '') ?></strong><?php if ($role): ?><span><?= sanitize($role) ?></span><?php endif; ?></figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ($h_recent): ?>
<!-- RESSOURCES -->
<section class="section section--surface" id="ressources">
  <div class="conteneur">
    <div class="tete-section" data-reveal>
      <div><span class="eyebrow">Ressources</span><h2>Conseils et guides récents</h2></div>
      <a class="btn btn--contour" href="/blog/">Tous les articles</a>
    </div>
    <div class="grille-cartes">
      <?php foreach ($h_recent as $i => $r): ?>
      <a class="carte-article carte-halo" href="/blog/<?= sanitize($r['slug']) ?>" data-reveal style="--i:<?= $i % 3 ?>">
        <?php if (!empty($r['cover_image'])): ?><img src="/uploads/<?= sanitize($r['cover_image']) ?>" alt="" width="640" height="360" loading="lazy" decoding="async"><?php endif; ?>
        <div class="carte-projet__corps">
          <?php if (!empty($r['category'])): ?><span class="pastille-domaine"><?= sanitize($r['category']) ?></span><?php endif; ?>
          <h3><?= sanitize($r['title']) ?></h3>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- FAQ -->
<section class="section" id="faq">
  <div class="conteneur conteneur--etroit">
    <?= bloc_rendre(['type' => 'faq', 'etiquette' => 'Questions fréquentes', 'titre' => 'Ce qu\'on me demande souvent', 'items' => $faq]) ?>
  </div>
</section>

<!-- APPEL FINAL -->
<section class="appel-final" id="contact">
  <div class="conteneur"><div class="appel-final__corps" data-reveal>
    <h2>Parlons de votre projet</h2>
    <p>Un site, une application, une automatisation, une formation ou une idée à cadrer : décrivez votre besoin, je vous réponds sous <?= sanitize((string) fait('delai_reponse')) ?> avec une première recommandation.</p>
    <div class="rangee-actions rangee-actions--centree">
      <a class="btn btn--blanc btn--grand" href="/contact">Demander un devis</a>
      <a class="btn btn--contour-clair btn--grand" href="https://wa.me/<?= sanitize((string) fait('whatsapp')) ?>" rel="noopener" target="_blank"><?= icone('whatsapp-logo', 18) ?>WhatsApp</a>
    </div>
  </div></div>
</section>

</main>
