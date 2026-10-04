<?php
// ============================================================
// templates/realisations.php · Vue de /realisations/ (refaite le 03/10/2026).
// Variables : $projets (lignes de la table projects, peut être vide),
// $clientsProjets (data/projets-clients.php), $logos (clients.json par slug).
// Une seule grille filtrable (liens réels, filtre par JavaScript en plus),
// des visuels de remplacement soignés pour les projets sans capture.
// ============================================================
$familleProjet = static function (array $pr): string {
    $c = mb_strtolower((string) ($pr['category'] ?? ''));
    return match (true) {
        str_contains($c, 'api') => 'integrations',
        str_contains($c, 'application'), str_contains($c, 'logiciel') => 'applications',
        default => 'sites',
    };
};
$filtres = ['tous' => 'Tous les projets', 'sites' => 'Sites et boutiques', 'applications' => 'Applications et logiciels', 'integrations' => 'API et intégrations'];
$relations = ['direct' => 'Client direct', 'sous-traitance' => 'Réalisé en sous-traitance pour Digital Développement', 'produit' => 'Mon produit'];
$technos = static function (array $pr): array {
    $t = json_decode((string) ($pr['technologies'] ?? ''), true);
    return is_array($t) ? array_slice(array_map('strval', $t), 0, 5) : [];
};
$initiales = static function (string $titre): string {
    $mots = preg_split('/[\s\-]+/u', trim($titre)) ?: [];
    return mb_strtoupper(mb_substr($mots[0] ?? '', 0, 1) . mb_substr($mots[1] ?? '', 0, 1));
};
$nbProjets = count($projets) + count($clientsProjets);
?>
<main id="main-content" class="realisations">
  <nav class="crumb wrap" aria-label="Fil d'Ariane"><a href="/">Accueil</a><span class="sep" aria-hidden="true">/</span><span aria-current="page">Réalisations</span></nav>

  <div class="registre-hero">
    <div class="registre-hero__grille conteneur">
      <div>
        <span class="eyebrow">Réalisations</span>
        <h1>Sites, boutiques et logiciels livrés en Afrique et en Europe</h1>
        <p class="registre-hero__bref"><strong>En bref.</strong> Voici une sélection de <?= $nbProjets ?> projets réels : web TV, boutiques avec paiement mobile money, logiciels de gestion, API publiques et refontes. Chaque carte dit qui était le client, ce qui a été construit, avec quelles technologies, et si le projet a été réalisé en direct ou en sous-traitance.</p>
        <div class="rangee-actions">
          <a href="/contact" class="btn">Demander un devis gratuit</a>
          <a href="<?= sanitize(url_finale('/services/')) ?>" class="btn btn--contour">Voir les services</a>
        </div>
      </div>
      <aside class="panneau-faits" aria-label="L'essentiel">
        <dl>
          <div><dt>Projets livrés</dt><dd><?= sanitize((string) fait('projets_livres')) ?></dd></div>
          <div><dt>Clients accompagnés</dt><dd><?= sanitize((string) fait('clients')) ?></dd></div>
          <div><dt>Pays d'intervention</dt><dd><?= count((array) fait('pays_travailles')) ?> pays</dd></div>
          <div><dt>Réponse</dt><dd>Sous <?= sanitize((string) fait('delai_reponse')) ?></dd></div>
        </dl>
      </aside>
    </div>
  </div>

  <section class="section" aria-labelledby="projets-titre">
    <div class="conteneur">
      <div class="tete-section">
        <div><span class="eyebrow">Projets</span><h2 id="projets-titre">Une sélection de projets livrés</h2></div>
        <p>Les études de cas détaillent le contexte et les choix techniques ; les projets clients résument ce qui a été construit.</p>
      </div>
      <nav class="filtres-projets" aria-label="Filtrer les projets">
        <?php foreach ($filtres as $cle => $libelle): ?>
        <a class="filtre-projet<?= $cle === 'tous' ? ' est-actif' : '' ?>" href="#projets-titre" data-filtre="<?= $cle ?>"<?= $cle === 'tous' ? ' aria-current="true"' : '' ?>><?= sanitize($libelle) ?></a>
        <?php endforeach; ?>
      </nav>

      <ul class="grille-projets">
        <?php foreach ($projets as $i => $pr):
          $img = !empty($pr['image_url']) ? '/uploads/' . $pr['image_url'] : '';
          $fam = $familleProjet($pr); ?>
        <li class="projet carte-halo" data-famille="<?= $fam ?>">
          <a class="projet__visuel" href="/realisations/<?= sanitize((string) $pr['slug']) ?>" tabindex="-1" aria-hidden="true">
            <?php if ($img): ?><img src="<?= sanitize($img) ?>" alt="" width="640" height="400" loading="lazy" decoding="async">
            <?php else: ?><span class="projet__monogramme projet__monogramme--<?= $i % 3 ?>"><?= sanitize($initiales((string) $pr['title'])) ?></span><?php endif; ?>
          </a>
          <div class="projet__corps">
            <p class="projet__meta"><span class="pastille-domaine"><?= sanitize((string) ($pr['category'] ?: 'Projet')) ?></span><?php if (!empty($pr['year'])): ?><span><?= sanitize((string) $pr['year']) ?></span><?php endif; ?></p>
            <h3><a href="/realisations/<?= sanitize((string) $pr['slug']) ?>"><?= sanitize((string) $pr['title']) ?></a></h3>
            <?php if (!empty($pr['description_short'])): ?><p><?= sanitize((string) $pr['description_short']) ?></p><?php endif; ?>
            <?php if ($t = $technos($pr)): ?><ul class="projet__technos"><?php foreach ($t as $x): ?><li><?= sanitize($x) ?></li><?php endforeach; ?></ul><?php endif; ?>
            <p class="projet__relation">Étude de cas détaillée</p>
          </div>
        </li>
        <?php endforeach; ?>

        <?php foreach ($clientsProjets as $c):
          $logo = $logos[$c['logo']] ?? null; ?>
        <li class="projet projet--client carte-halo" data-famille="<?= sanitize($c['famille']) ?>">
          <div class="projet__visuel projet__visuel--logo<?= !empty($logo['fond_sombre']) ? ' projet__visuel--sombre' : '' ?>">
            <?php if ($logo): ?><img src="<?= sanitize($logo['fichier']) ?>" alt="Logo <?= sanitize($c['nom']) ?>" width="<?= (int) $logo['largeur'] ?>" height="<?= (int) $logo['hauteur'] ?>" loading="lazy" decoding="async">
            <?php else: ?><span class="projet__monogramme"><?= sanitize($initiales($c['nom'])) ?></span><?php endif; ?>
          </div>
          <div class="projet__corps">
            <p class="projet__meta"><span class="pastille-domaine"><?= sanitize($c['type']) ?></span><span><?= sanitize($c['lieu']) ?></span></p>
            <h3><?php if (!empty($c['lien'])): ?><a href="<?= sanitize($c['lien']) ?>" rel="noopener" target="_blank"><?= sanitize($c['nom']) ?></a><?php else: ?><?= sanitize($c['nom']) ?><?php endif; ?></h3>
            <p class="projet__secteur"><?= sanitize($c['secteur']) ?></p>
            <p><?= sanitize($c['resume']) ?></p>
            <ul class="projet__technos"><?php foreach ($c['stack'] as $x): ?><li><?= sanitize($x) ?></li><?php endforeach; ?></ul>
            <p class="projet__relation projet__relation--<?= sanitize($c['relation']) ?>"><?= sanitize($relations[$c['relation']]) ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="section section--surface">
    <div class="conteneur">
      <div class="tete-section">
        <div><span class="eyebrow">Méthode</span><h2>Comment ces projets ont été menés</h2></div>
        <p>La même méthode pour un site, une boutique ou un logiciel : comprendre avant de construire, montrer avant de livrer.</p>
      </div>
      <?= bloc_rendre(['type' => 'etapes', 'items' => [
          ['titre' => 'Cadrage', 'texte' => 'Un premier échange gratuit pour comprendre l\'activité, les contraintes et le budget, puis une recommandation claire.'],
          ['titre' => 'Maquettes validées', 'texte' => 'Les écrans sont validés avant la première ligne de code : pas de surprise à la livraison.'],
          ['titre' => 'Réalisation par étapes', 'texte' => 'Démonstrations régulières et version en ligne consultable au fur et à mesure.'],
          ['titre' => 'Mise en ligne et suivi', 'texte' => 'Formation des équipes, référencement et maintenance : le projet continue de produire après la livraison.'],
      ]]) ?>
    </div>
  </section>

  <section class="section">
    <div class="conteneur conteneur--etroit">
      <?= bloc_rendre(['type' => 'cta', 'titre' => 'Votre projet, le prochain sur cette page ?', 'texte' => 'Décrivez votre besoin : je vous réponds sous ' . fait('delai_reponse') . ' avec une première recommandation et un devis clair, sans engagement.', 'bouton' => ['url' => '/contact', 'texte' => 'Demander mon devis gratuit']]) ?>
    </div>
  </section>
</main>
